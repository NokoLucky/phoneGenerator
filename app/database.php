<?php

try {
    $bulk = new MongoDB\Driver\BulkWrite;
    $mongoClient = new MongoDB\Driver\Manager("mongodb://admin:pass@mongodb:27017/");

  } catch (Exception $e) {
    echo "Failed to connect to MongoDB: " . $e->getMessage();
  }

?>