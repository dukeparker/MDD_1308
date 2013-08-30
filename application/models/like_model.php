<?php

	class Like_model extends CI_Model {

		public function __construct() {

		} // End of construct


		public function get_likes() {
		
			$query = $this->db->query("
				SELECT stories.likes
				FROM stories
			");
			return $query;	
			
		} // End of function
		
	} // End of class

?>