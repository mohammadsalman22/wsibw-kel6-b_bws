<?php
  include './backend/koneksi.php';

  function get_client_ip() {
      $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
  }
  date_default_timezone_set('Asia/Jakarta');

  $waktu = date("Y-m-d H:i:s", time());
  $ip = get_client_ip();
  $get_ip_data = mysqli_query($connect, "SELECT ip_address FROM visitor WHERE ip_address = '$ip'");
  if ($get_ip_data->num_rows >0) {
    mysqli_query($connect, "UPDATE visitor SET waktu = '$waktu' WHERE ip_address = '$ip'");
  }
  else
    mysqli_query($connect, "INSERT INTO visitor VALUES('$ip','$waktu')");
?>
<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Pariwisata</title>
    
    <link href="//fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- Template CSS -->
    <link rel="stylesheet" href="/pariwisata/assets/css/style-starter.css">