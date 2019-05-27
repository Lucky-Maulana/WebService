<?php
 require 'vendor/autoload.php';
 $collection = (new MongoDB\Client())->tekdev->tekdev;
 $delete= $collection->deleteOne(array("penyakit"=>$_GET['penyakit']));
