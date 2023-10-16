<?php
$searchQuery = $_GET['query'];
$folderPath = '../kbi';
if (is_dir($folderPath))
{
  $files = scandir($folderPath);
  if ($files !== false)
  {
    if (!empty($searchQuery))
    {
      $filteredFiles = array_filter($files, function ($file) use ($searchQuery)
      {
        return strcasecmp(pathinfo($file, PATHINFO_EXTENSION), 'html') === 0 && stripos($file, $searchQuery) !== false;
      });
    }
    else
    {
      $filteredFiles = array_slice($files, 2, 15);
    }

    echo json_encode(array_values($filteredFiles));
  }
  else
  {
    echo json_encode(array());
  }
}
else
{
  echo json_encode(array());
}
?>