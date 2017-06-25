<?php
$file = 'digits.txt';
// Open the file to get existing content
$current = file_get_contents($file);
// Append a new person to the file
$current .= $_REQUEST['Digits']."\n";
// Write the contents back to the file
file_put_contents($file, $current);

$SMS_NUMBER = '+1' . $_REQUEST['Digits'];
$SMS_NUMBER = "$SMS_NUMBER";
//echo($SMS_NUMBER);

echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
echo "<Response>
<Say>You entered " . $_REQUEST['Digits'] . "</Say>
<Sms from='+18502961120'"." to='".$SMS_NUMBER."'>The king stay the king.</Sms></Response>";
?>