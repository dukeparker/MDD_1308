<?php

	class Api_model extends CI_Model {

		public function __construct() {

		} // End of construct

		public function get_news() {


        // create curl resource 
        $ch = curl_init(); 

        // set url 
        curl_setopt($ch, CURLOPT_URL, "http://api.nytimes.com/svc/mostpopular/v2/mostviewed/all-sections/1.json?offset=20&api-key=25e943225f5832c8b4273ceab61913b5:6:67964970"); 

        //return the transfer as a string 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

        // $output contains the output string 
        $output = curl_exec($ch); 

        // close curl resource to free up system resources 
        curl_close($ch);      
        
        $Obj = json_encode($output);
        
        return $Obj;


		} // End of function

	} // End of class

?>