<?php

	class Auth_model extends CI_Model {

		public function __construct() {

		} // End of construct()

		public function get_UserByEmailPass($email, $pass) {
			
			$email = $this->db->escape($email);
			$pass = $this->db->escape($pass);
			$query = $this->db->query("
									SELECT users.email 
									FROM users 
									WHERE (email = $email) 
										AND (`password` = MD5(CONCAT(salt, $pass)))
									LIMIT 1
									");
				
			if ( $query->num_rows > 0 ) {
				return $query->row();
			}

			return false;

		} 

	} 
	
?>