<?php
define('CUSTOMERS_FILE_PATH', 'customers-100.csv');

function get_customers_data() {
    $opened_file_handler = fopen(CUSTOMERS_FILE_PATH, 'r');

    $data = [];
    $headers = [];
    $row_count = 0;
    while (!feof($opened_file_handler)) {
        $row = fgetcsv($opened_file_handler, 1024);
        if (!empty($row)) {
            if ($row_count == 0) {
                $headers = $row;
            } else {
                $data[] = $row;
            }
        }
        $row_count++;
    }
    fclose($opened_file_handler);

    return [
        'headers' => $headers,
        'data' => $data
    ];
}

$start_time = microtime(true);
$customers = get_customers_data();
$end_time = microtime(true);
$execution_time = $end_time - $start_time;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    &#8203;:contentReference[oaicite:0]{index=0}&#8203;
