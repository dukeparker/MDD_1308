<?php

	class User_model extends CI_Model {

		public function __construct() {

		} // Close construct()
		
		
		public function checkUser($email) {

			$email = $this->db->escape($email);
			$query = $this->db->query("
				SELECT *
				FROM users
				WHERE (email = $email)
			");
			return $query;
		}


		public function addUser($name, $email, $password) {

			$name = $this->db->escape($name);
			$email = $this->db->escape($email);
			$password = $this->db->escape($password);
			$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$salt = '';
			for ($i = 0; $i < 8; $i++) {
	   	 	   $salt .= $characters[rand(0, strlen($characters) - 1)];
	   	 	}
			$salt = $this->db->escape($salt);
			$query = $this->db->query("
				INSERT INTO users (name, `password`, email, salt)
				VALUES ($name, MD5(CONCAT($salt,$password)), $email, $salt)
			");
			return $query;
		} 


		public function deleteUser($email) {
			
			$email = $this->db->escape($email);
			$query = $this->db->query("
				DELETE FROM users
				WHERE email = $email
			");
		}


		public function getUserInfo($email) {

			$email = $this->db->escape($email);
			$query = $this->db->query("
				SELECT users.name, users.email, users.createdDate
				FROM users
				WHERE email = $email
			");
			return $query->result_array();
		} 
	} 
?>