<?php

#$url = 'https://musicbrainz.org/ws/2/artist/?query=nirvana&fmt=json&limit=5&inc=recordings';
# 
#//Use file_get_contents to GET the URL in question.
#$contents = file_get_contents($url);
# 
#//If $contents is not a boolean FALSE value.
#if($contents !== false){
#    //Print out the contents.
#    echo $contents;
#}

$header = array(
    'user-key: 06206e20b60580e091e3ec2118187bdf',
    'Accept: application/json',
    
);


$ch = curl_init();
 
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);

//Set the URL that you want to GET by using the CURLOPT_URL option.
curl_setopt($ch, CURLOPT_URL, 'https://api-endpoint.igdb.com/games/?search=medievil');


 
//Set CURLOPT_RETURNTRANSFER so that the content is returned as a variable.
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
//Set CURLOPT_FOLLOWLOCATION to true to follow redirects.
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);


 
//Execute the request.
$data = curl_exec($ch);
 
//Close the cURL handle.
curl_close($ch);
 
//Print the data out onto the page.
echo $data;

?>
