<?php

// Define API endpoint
$apiUrl = "https://coderbyte.com/api/challenges/logs/user-info-csv";

// Function to sort CSV data
function findCsvByColumn($rowData, $columnData) {
  $lines = explode("\n", $rowData);
  $header = array_shift($lines);
  $headerData = explode(",", $header);

  // Check if column index is valid
  if (!isset($headerData[$columnData])) {
    throw new Exception("Invalid column index: " . $columnData);
  }

  usort($lines, function ($a, $b) use ($columnData) {
    $asertValues = explode(",", $a);
    $bsertValues = explode(",", $b);
    return strcmp($asertValues[$columnData], $bsertValues[$columnData]);
  });

  // Prepend header back to sorted data
  array_unshift($lines, $header);
  return implode("\n", $lines);
}

// Get CSV data
$rowData = file_get_contents($apiUrl);

// Sort data by email (second column)
try {
  $sortedCsv = findCsvByColumn($rowData, 1); // Email is in the second column (index 1)
  echo $sortedCsv;
} catch (Exception $e) {
  echo $e->getMessage();
}

?>
