<?php 

  $apiUrl = "https://coderbyte.com/api/challenges/logs/user-info-csv";

  function findCsvByColumn($rowData, $columndata){
    $lines = explode("\n", $rowData);
    $header = array_shift($lines);
    $headerData = explode(",", $header);

    if(!isset($headerData[$columndata])){
      throw new Exception("Invalid Column: " . $columndata);
    }

    usort($lines, function($a, $b) use ($columndata){
      $asertValues = explode(",", $a);
      $bsertValues = explode(",", $b);

      return strcmp($asertValues[$columndata], $bsertValues[$columndata]);
    });

    array_unshift($lines, $header);
    return implode("\n", $lines);
  }

  $rowData = file_get_contents($apiUrl);
  try{
    $csvdata = findCsvByColumn($rowData, 1);
    echo $csvdata;
  } catch (Exception $e){
    echo $e->getMessage();
  }

?>