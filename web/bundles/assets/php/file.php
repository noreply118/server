<?php
$file = 'https://docs.google.com/spreadsheets/d/1lt-MZwfQI8yaGmfijoee6PqsZ2lWhvw0/edit#gid=1981629711';
$data = fopen($file , 'r');
print_r(fgetcsv($data));
fclose($data);