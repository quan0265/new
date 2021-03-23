<?php 

$curl= curl_init();

//id=17841446461982949
//username= quan02656
//basic display
//sercet: 098357820d0a0bc2fd1f1eadf96425d3
//app-id: 915559522591813
//cilent-id: 194590495447285





curl_setopt_array($curl, [
	// CURLOPT_RETURNTRANSFER=> TRUE,
	// CURLOPT_URL=> 'https://graph.instagram.com/me?fields=id,username&access_token=IGQVJXMklhbkstQXlYX2tBMm5JTy1VWXdoYnBuNlRmUG13Rm5NaEZAyWk84Q05yXzViSERzWHBFcVZAJZAE1BempVODFGMU84dUUtbGsxYUhhUEpranVaS0FGcWdFZAzl6SFRXRTBmQU9tYzd6c3B1OFJ6WQZDZD',


	// CURLOPT_URL=> 'https://justinstolpe.com/blog_code/instagram_basic_display_api/',
	CURLOPT_URL=> 'https://api.instagram.com/oauth/authorize?client_id=194590495447285&redirect_uri=https://justinstolpe.com/blog_code/instagram_basic_display_api&scope=user_profile,user_media&response_type=code',




	// CURLOPT_POST=> 1,
	// CURLOPT_SSL_VERIFYPEER => false, //Bỏ kiểm SSL
 //    //gửi mảng post
 //    CURLOPT_POSTFIELDS => http_build_query(array(
 //        'email' => 'sydney@fife',
 //        'password' => 'pistol'
 //    ))

]);

curl_exec($curl);
// $data= curl_exec($curl);

curl_close($curl);

// var_dump(json_decode($data));





























 ?>