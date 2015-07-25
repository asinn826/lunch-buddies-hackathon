<?php
require_once('./OAuth.php');

// ini_set('display_errors', 'On');

$CONSUMER_KEY = "k4_qvRoxcS3xhFc07pDxWw";
$CONSUMER_SECRET = "D_zF48CA1pq2LwuatkQfXur-ALQ";
$TOKEN = "ZN-LEoP3HgvzpwtMuysNBSzN2tPg174s";
$TOKEN_SECRET = "H2Y8oOMOJZ1FhnxyRu_PuWKMzcI";

$API_HOST = 'api.yelp.com';
$DEFAULT_TERM = 'restaurants';
$DEFAULT_LOCATION = 'Vancouver, BC';
$SEARCH_PATH = '/v2/search/';
$BUSINESS_PATH = '/v2/business/';

$url = "http://api.yelp.com/v2/search?term=restaurants";
$location = "Vancouver, BC";
$latLng = "49.276654, -123.118591";
$radius = 1000;
$url .= "&location=" . location . "&cll=" . latLng . "&radius_filter=" . radius;


/** 
 * Makes a request to the Yelp API and returns the response
 * 
 * @param    $host    The domain host of the API 
 * @param    $path    The path of the APi after the domain
 * @return   The JSON response from the request      
 */
function request($host, $path) {
    $unsigned_url = "http://" . $host . $path;
    // Token object built using the OAuth library
    $token = new OAuthToken($GLOBALS['TOKEN'], $GLOBALS['TOKEN_SECRET']);
    // Consumer object built using the OAuth library
    $consumer = new OAuthConsumer($GLOBALS['CONSUMER_KEY'], $GLOBALS['CONSUMER_SECRET']);
    // Yelp uses HMAC SHA1 encoding
    $signature_method = new OAuthSignatureMethod_HMAC_SHA1();
    $oauthrequest = OAuthRequest::from_consumer_and_token(
        $consumer, 
        $token, 
        'GET', 
        $unsigned_url
    );
    
    // Sign the request
    $oauthrequest->sign_request($signature_method, $consumer, $token);
    
    // Get the signed URL
    $signed_url = $oauthrequest->to_url();
    
    // Send Yelp API Call
    $ch = curl_init($signed_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    $data = curl_exec($ch);
    curl_close($ch);
    
    return $data;
}

/**
 * Query the Search API by a search term and location 
 * 
 * @param    $term        The search term passed to the API 
 * @param    $location    The search location passed to the API 
 * @return   The JSON response from the request 
 */
function search($term, $location) {
    $url_params = array();
    
    $url_params['term'] = $term ?: $GLOBALS['DEFAULT_TERM'];
    $url_params['location'] = $location?: $GLOBALS['DEFAULT_LOCATION'];
    // $url_params['limit'] = $GLOBALS['SEARCH_LIMIT'];
    $url_params['radius_filter'] = $GLOBALS['radius'];
    $url_params['cll'] = $GLOBALS['latLng'];
    $search_path = $GLOBALS['SEARCH_PATH'] . "?" . http_build_query($url_params);
    
    return request($GLOBALS['API_HOST'], $search_path);
}

$result = search('restaurants', $location);

echo $result;

?>