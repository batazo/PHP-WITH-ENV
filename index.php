<?php
$file = fopen('.env', 'r');
while(!feof($file)) {
    $line = trim(fgets($file));
    if (!empty($line)) {
        putenv($line);
    }
}
fclose($file);

echo getenv('TEST_ENV');