# php-available-meeting-slots
##### Parameters:
# $startDateTime: The start date-time as a string (e.g., "2024-07-15 09:00:00").
# $endDateTime: The end date-time as a string (e.g., "2024-07-15 17:00:00").
# $durationInMinutes: Duration of each meeting slot in minutes (e.g., 30).
# $timezone: Timezone as a string (e.g., "America/New_York").
##### Process:
# Converts the start and end date-time strings to DateTime objects in the specified timezone.
# Creates an array to store the meeting slots.
# Uses a DateInterval object to define the duration of each meeting slot.
# Iterates from the start date-time to the end date-time, adding each slot to the array.
##### Return:
# An array of available meeting slots, each slot containing a start and end date-time.