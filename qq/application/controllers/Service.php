<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login controller class
 */
class Service extends CI_Controller{
    
    function __construct(){
        parent::__construct();

    }
    
    function getDataByHn($hn){
        /* API URL */
		$url = 'http://hosweb.med.cmu.ac.th/s-api/main.php';
        $points = '{"method":"GET_DEMOGRAPHIC_BY_HN_ALL","hn":"' . $hn . '","output":"json"}';
            
		$curl = curl_init();
		$verbose = fopen('php://stderr', 'w');

		curl_setopt_array($curl, array(
			CURLOPT_URL => $url,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "POST",
			CURLOPT_POSTFIELDS => $points,
			CURLOPT_VERBOSE => true,
			CURLOPT_STDERR => $verbose,
			CURLOPT_HTTPHEADER => array(
				"Content-Type: application/json"
			),
		));
	
		$response = curl_exec($curl);
	
		curl_close($curl);
		echo  $response;
		
    }

	function getWaitingHn($hn){
        /* API URL */
		$url = 'http://hosweb.med.cmu.ac.th/s-api/main.php';
        $points = '{"method":"GET_DEMOGRAPHIC_BY_HN_ALL","hn":"' . $hn . '","output":"json"}';
            
		$curl = curl_init();
		$verbose = fopen('php://stderr', 'w');

		curl_setopt_array($curl, array(
			CURLOPT_URL => $url,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "POST",
			CURLOPT_POSTFIELDS => $points,
			CURLOPT_VERBOSE => true,
			CURLOPT_STDERR => $verbose,
			CURLOPT_HTTPHEADER => array(
				"Content-Type: application/json"
			),
		));
	
		$response = curl_exec($curl);
	
		curl_close($curl);
		echo  $response;
		
    }
	// function printRegistered(){
	// 	$stream_clean = $this->security->xss_clean($this->input->raw_input_stream);
    // 	$points = $stream_clean;
	// 	/* API URL */
	// 	$url = "http://localhost:8888/print_service/print_register.php";
            
	// 	$curl = curl_init();
	// 	$verbose = fopen('php://stderr', 'w');

	// 	curl_setopt_array($curl, array(
	// 		CURLOPT_URL => $url,
	// 		CURLOPT_RETURNTRANSFER => true,
	// 		CURLOPT_ENCODING => "",
	// 		CURLOPT_MAXREDIRS => 10,
	// 		CURLOPT_TIMEOUT => 0,
	// 		CURLOPT_FOLLOWLOCATION => true,
	// 		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	// 		CURLOPT_CUSTOMREQUEST => "POST",
	// 		CURLOPT_POSTFIELDS => $points,
	// 		CURLOPT_VERBOSE => true,
	// 		CURLOPT_STDERR => $verbose,
	// 		CURLOPT_HTTPHEADER => array(
	// 			"Content-Type: application/json"
	// 		),
	// 	));
	
	// 	$response = curl_exec($curl);
	
	// 	curl_close($curl);
	// 	// echo  $response;

	// 	echo $points;
	// }
}

?>
