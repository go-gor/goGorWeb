<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


/**
 * Generates url string
 *
 */
if ( ! function_exists('short_string'))
{
	function short_string($e){
		
		$chars= array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z',
					  'A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z',
					  '0','1','2','3','4','5','6','7','8','9');
		
		$string="";
				
		for($i=0;$i<$e;$i++){
			
			$string =  $string .$chars[array_rand($chars)];
			
		}
		
		return $string;
	}
}

if ( ! function_exists('url_normalize'))
{
	function url_normalize($url){

		if (strtolower(substr($url, 0, 4))!=='http'){
			$url= 'http://'.$url;
		}
		return $url;
	}
}


function generateQRwithGoogle($url,$widthHeight ='150',$EC_level='L',$margin='0') {
	
	$url = urlencode($url);
	$qrimage= '<img src="http://chart.apis.google.com/chart?chs='.$widthHeight.
	'x'.$widthHeight.'&cht=qr&chld='.$EC_level.'|'.$margin.
	'&chl='.$url.'" alt="QR code" widthHeight="'.$widthHeight.
	'" widthHeight="'.$widthHeight.'"/>';
	
	return $qrimage;
}


/**
 * Get Geo Location by Given/Current IP address
 *
 * @access    public
 * @param    string
 * @return    array
 */
if (!function_exists('get_geolocation')) {
	function get_geolocation($ip) {
	
		//include('../third_party/ip2locationlite.class.php');
		
		//$this->load->library('ip2locationlite');
		
		//return $this->ip2locationlite->getCountry($ip);
		
		
		//Get errors and locations
		//return $locations = $ipLite->getCity($ip);
		//$errors = $ipLite->getError();
		
	}
}


/**
 * Count number of items in cart
 *
 * @access    public
 * @param    string
 * @return    array
 */
if (!function_exists('count_items')) {
	function count_items($data) {

		$total=count($data);
		return $total;

	}
}

/**
 * Finds an item in cart
 *
 * @access    public
 * @param    string
 * @return    array
 */
if (!function_exists('find_item')) {
	function find_item($data,$id) {

		foreach ($data as $value){
			if ($value['id'] ==$id){
				return true;
			}
		}
		return false;

	}
}


/**
 * show image
 *
 * @access    public
 * @param    string
 * @return    array
 */
if (!function_exists('show_image')) {
	function show_image($isbn) {

		if (file_exists("assets/products/".$isbn.".jpg")){
			return "<img src='".base_url()."assets/products/".$isbn.".jpg'>";
		} else {
			return "<img src='".base_url()."img/none.jpg'>";
		}

	}
}


/**
 *  cart count
 *
 * @access    public
 * @param    string
 * @return    array
 */
if (!function_exists('cart_count')) {
	function cart_count($id) {
		
		$CI = get_instance();
		$CI->load->model('prod_model');
		$id= $CI->prod_model->contaCart($id);
		return $id;
		

	}
}

/**
 *  Values in BR
 *
 * @access    public
 * @param    string
 * @return    array
 */
if (!function_exists('emReais')) {
	function emReais($value) {

		$value= "R$ ".number_format($value, 2, ',', '.');
		
		return $value;

	}
}

/**
 *  Fix string size
 *
 * @access    public
 * @param    string
 * @return    array
 */
if (!function_exists('fixString')) {
	function fixString($value,$size,$type="N") {
		
		if ($type=="N"){
			$string= str_pad($value, $size, "0", STR_PAD_LEFT);
//			$string= substr($string, -$size);
		} else {
			$string= str_pad($value, $size);
//			$string= substr($string, 0, $size);
		}

		
		return $string;

//		return "teste";

	}
}


/* End of file util_helper.php */
