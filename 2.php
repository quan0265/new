<?php 


function rudr_instagram_api_curl_connect( $api_url ){
	$connection_c = curl_init(); // initializing
	curl_setopt( $connection_c, CURLOPT_URL, $api_url ); // API URL to connect
	curl_setopt( $connection_c, CURLOPT_RETURNTRANSFER, 1 ); // return the result, do not print
	curl_setopt( $connection_c, CURLOPT_TIMEOUT, 20 );
	$json_return = curl_exec( $connection_c ); // connect and get json data
	curl_close( $connection_c ); // close connection
	return json_decode( $json_return ); // decode and return
}


$access_token = 'IGQVJXMklhbkstQXlYX2tBMm5JTy1VWXdoYnBuNlRmUG13Rm5NaEZAyWk84Q05yXzViSERzWHBFcVZAJZAE1BempVODFGMU84dUUtbGsxYUhhUEpranVaS0FGcWdFZAzl6SFRXRTBmQU9tYzd6c3B1OFJ6WQZDZD';
$username = 'quan02656';
$user_search = rudr_instagram_api_curl_connect("https://api.instagram.com/v1/users/search?q=" . $username . "&access_token=" . $access_token);
 
print_r($user_search);


// echo '<img src="' . $user_search->data[0]->profile_picture . '" />;

























 ?>