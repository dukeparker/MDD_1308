<?php

	class Api_model extends CI_Model {

		public function __construct() {

		} // End of construct

		public $offset;


		public function get_news() {
		
		
		$offset = 0;

        // create curl resource 
        $ch = curl_init(); 

        // set url 
        curl_setopt($ch, CURLOPT_URL, "http://api.nytimes.com/svc/mostpopular/v2/mostviewed/all-sections/1.json?offset=" . $offset . "&api-key=25e943225f5832c8b4273ceab61913b5:6:67964970"); 

        //return the transfer as a string 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 

        // $output contains the output string 
        $output = curl_exec($ch); 

        // close curl resource to free up system resources 
        curl_close($ch);      
                
        $Obj = json_decode($output);
                        
        return $Obj;


		} // End of function
		
		
		//this does nothing at the moment...just testing
		public function paginate_news() {
		
		$offset = 0;
		$paginate = $offset + 20;


        // create curl resource 
        $ch = curl_init(); 

        // set url 
        curl_setopt($ch, CURLOPT_URL, "http://api.nytimes.com/svc/mostpopular/v2/mostviewed/all-sections/1.json?offset=" . $paginate . "&api-key=25e943225f5832c8b4273ceab61913b5:6:67964970"); 

        //return the transfer as a string 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 

        // $output contains the output string 
        $output = curl_exec($ch); 

        // close curl resource to free up system resources 
        curl_close($ch);      
                
        $Obj = json_decode($output);
                
        return $Obj;


		} // End of function

	} // End of class

?>