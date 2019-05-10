<?php

function get_array_from_json_url ($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($ch);
    curl_close($ch);
    return json_decode($result);
}

function bgimage( $url = null ) {
	if( $url == null OR empty($url) ) {
		return '/images/post-23321.jpg';
	} else {
		return ( $url );
	}
}

$authors = get_array_from_json_url ('https://picsum.photos/v2/list');


?>