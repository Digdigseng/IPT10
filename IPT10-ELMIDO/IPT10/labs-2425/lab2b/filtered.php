<?php
define('CUSTOMERS_FILE_PATH', 'customers-100.csv');

function get_hundred_customers_data($filter_letter) {
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
                if (strtoupper($row[3][0]) === strtoupper($filter_letter)) {
                    $data[] = $row;
                }
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

$chosen_letter = $_GET['letter'] ?? 'A';
$customers = get_hundred_customers_data($chosen_letter);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IPT10 Laboratory Activity #2</title>
    <link rel="icon" href="https://phpsandbox.io/assets/img/brand/phpsandbox.png">
    <link rel="stylesheet" href="https://assets.ubuntu.com/v1/vanilla-framework-version-4.15.0.min.css">
</head>
<body>
    <h1>Customers (Letter '<?= htmlspecialchars($chosen_letter); ?>')</h1>
    <h4>
        <?php foreach (range('A', 'Z') as $letter): ?>
            <a href="filtered.php?letter=<?= $letter; ?>"><?= $letter; ?></a>
        <?php endforeach; ?>
    </h4>
    <small>
        The dataset is retrieved from this URL 
        <a href="https://www.datablist.com/learn/csv/download-sample-csv-files" target="_blank">
            https://www.datablist.com/learn/csv/download-sample-csv-files
        </a>
    </small>
    <table aria-label="Customers Dataset">
        <thead>
            <tr>
                <th>Customer ID</th>
                <th>Complete Name</th>
                <th>Company</th>
                <th>Address</th>
                <th>Email Address</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($customers['data'] as $record): ?>
                <tr>
                    <?php foreach ($record as $cell): ?>
                        <td><?= htmlspecialchars($cell); ?></td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
