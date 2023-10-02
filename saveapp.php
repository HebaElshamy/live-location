<?php
  header("Access-Control-Allow-Origin: *");
  header("Access-Control-Allow-Methods: POST, GET, OPTIONS, DELETE, PUT");
  header("Access-Control-Allow-Headers: content-type");
  if (isset($_POST['latitude']) && isset($_POST['longitude'])) {
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];
       // اسم الملف الذي تريد حفظ البيانات فيه
       $filename = "coordinates.txt";

       // البيانات التي تريد حفظها
      //  $data = "Latitude: $latitude, Longitude: $longitude";
       $data = "https://www.google.com/maps?q={$latitude},{$longitude}";
   
       // حفظ البيانات في الملف
       file_put_contents($filename, $data);
   
       echo "تم حفظ البيانات بنجاح في ملف $filename";
   } else {
       echo "لم يتم توفير البيانات اللازمة.";
   }

  ?>