<?php

if (!isset($_GET['search'])&&!isset($_GET['fields'])) {
echo '
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
 <meta user-key="06206e20b60580e091e3ec2118187bdf">
  <link rel="stylesheet" href="style.css">
  <title>Recherche via Open Movie Database</title>
</head>
<body>

	<h1 class="byline">igdb</h1>

  <form class="form-wrapper cf" action="" method="get" target="_blank">

      <input type="text" placeholder="Name of a video game..." name="search">

     <input type="hidden" value="%2A" name="fields">
      
    
      <button type="submit">Chercher</button>

  </form>

 
</body>
</html>';

}

if (isset($_GET['search'])&&isset($_GET['fields'])) {
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api-endpoint.igdb.com/games/?search=".$_GET['search']."&fields=".$_GET['fields']."",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "Accept: application/json",
    "Cache-Control: no-cache",
    "Postman-Token: 3e82cb17-e425-f352-d1ed-ff780145c266",
    "user-key: 06206e20b60580e091e3ec2118187bdf"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {



echo ($response);
  

}
}



#if (isset($_GET['search'])) {

#$curl = curl_init();

#curl_setopt_array($curl, array(
#  CURLOPT_URL => "https://api-endpoint.igdb.com/games/".$_GET['search']."&".$_GET['fields']."",
#  CURLOPT_RETURNTRANSFER => true,
#  CURLOPT_ENCODING => "",
#  CURLOPT_MAXREDIRS => 10,
#  CURLOPT_TIMEOUT => 30,
#  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
#  CURLOPT_CUSTOMREQUEST => "GET",
#  CURLOPT_HTTPHEADER => array(
#    "Accept: application/json",
#    "Cache-Control: no-cache",
#    "user-key: 06206e20b60580e091e3ec2118187bdf"
#  ),
#));

#$response = curl_exec($curl);
#$err = curl_error($curl);

#curl_close($curl);
#if ($err) {
#  echo "cURL Error #:" . $err;
#} else {
#  $loc = "https://api-endpoint.igdb.com/games/?search=".$_GET['search']."&fields=".$_GET['fields']."";
#  header($_CURLOPT_URL);

#}
#};



#if (isset($_GET['search']) && !headers_sent()) {

#       $key = 'user-key: 06206e20b60580e091e3ec2118187bdf';
#       $json = 'Accept: application/json';
#      $end = 'https://api-endpoint.igdb.com/games';
#	
#        header($key);
#        header($json);
#        header('Location: '.$end.'');

#$your_resource = 'https://api-endpoint.igdb.com/games';
#    
#$headers = array(
#    'user-key: 06206e20b60580e091e3ec2118187bdf', 
#    'Accept: application/json', 
# 
#);
#curl_setopt($your_resource, CURLOPT_HTTPHEADER, $headers);

#$ch = curl_init();
#curl_setopt($ch, CURLOPT_URL, "https://api-endpoint.igdb.com/games/");
#curl_setopt($ch,CURLOPT_HTTPHEADER,array('user-key: 06206e20b60580e091e3ec2118187bdf','Accept: application/json'));
#    
#curl_exec($ch);

#curl_close($ch);

#header('Location: https://api-endpoint.igdb.com/games');
        
#    }


       


#if (isset($_GET['search'])) {
#	
#        header('user-key: 06206e20b60580e091e3ec2118187bdf');
#        header('Accept: application/json');
#        get_headers('https://api-endpoint.igdb.com');
#        
#    } 



#header('user-key: 06206e20b60580e091e3ec2118187bdf');
#header('accept: application/json');

#var_dump(header);


?>
