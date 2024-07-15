
<?php
function createAvailableMeetingSlots($startDateTime, $endDateTime, $durationInMinutes, $timezone) {
    // Create DateTimeZone object
    $tz = new DateTimeZone($timezone);
    
    // Create DateTime objects for start and end times
    $start = new DateTime($startDateTime, $tz);
    $end = new DateTime($endDateTime, $tz);
    
    // Create an array to hold the meeting slots
    $slots = [];
    
    // Duration in DateInterval format
    $interval = new DateInterval("PT" . $durationInMinutes . "M");
    
    // Iterate over the time range and create slots
    $current = clone $start;
    while ($current < $end) {
        $slotStart = clone $current;
        $current->add($interval);
        if ($current <= $end) {
            $slots[] = [
                'start' => $slotStart->format('Y-m-d H:i:s'),
                'end' => $current->format('Y-m-d H:i:s')
            ];
        }
    }
    
    return $slots;
}

// Example usage
$startDateTime = "2024-07-15 09:00:00";
$endDateTime = "2024-07-15 17:20:00";
$durationInMinutes = 30;
$timezone = "America/New_York";

$meetingSlots = createAvailableMeetingSlots($startDateTime, $endDateTime, $durationInMinutes, $timezone);

// Output the meeting slots
foreach ($meetingSlots as $slot) {
    echo "Start: " . $slot['start'] . " | End: " . $slot['end'] . "\n";
}

?>