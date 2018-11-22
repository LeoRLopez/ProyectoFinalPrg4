<?php

function token($usr,$pass){

  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => "http://consultoriosagradafamilia.azurewebsites.net/token",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => "grant_type=password&username=".$usr."&password=".$pass."&undefined=",
    CURLOPT_HTTPHEADER => array(
      "Content-Type: application/x-www-form-urlencoded",
      "Postman-Token: 15fb6914-df4a-4ab3-955a-85a789052a55",
      "cache-control: no-cache"
    ),
  ));

  $response = curl_exec($curl);
  $err = curl_error($curl);

  curl_close($curl);

  if ($err) {
    echo "cURL Error #:" . $err;
  } else {
    $fullToken = json_decode($response,true);
    return $fullToken['access_token'];
}
}

function solicitarObras($token){
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "http://consultoriosagradafamilia.azurewebsites.net/api/ObraSocial",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  // CURLOPT_POSTFIELDS => "grant_type=password&username=carlosbenitezgiuggia%40gmail.com&password=Carlos%40123456",
  CURLOPT_HTTPHEADER => array(
    "authorization: Bearer ".$token,
    "cache-control: no-cache",
    "postman-token: 53094334-f410-993b-0ad4-6b2bf32ed568"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  $obraSocialArray = json_decode($response,true);
  return $obraSocialArray;
    }
}
?>
