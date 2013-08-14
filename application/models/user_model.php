<?php

	class User_model extends CI_Model {

		public function __construct() {
		} 
				
		public function checkUser($email) {

			$email = $this->db->escape($email);
			$query = $this->db->query("
				SELECT *
				FROM users
				WHERE (email = $email)
				");
			return $query;
		}

		public function addUser($nickname, $email, $password) {

			$nickname = $this->db->escape($nickname);
			$email = $this->db->escape($email);
			$password = $this->db->escape($password);
			$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$salt = '';
			for ($i = 0; $i < 8; $i++) {
	   	 	   $salt .= $characters[rand(0, strlen($characters) - 1)];
	   	 	}
			$salt = $this->db->escape($salt);
			$query = $this->db->query("
				INSERT INTO users (nickname, password, email, salt)
				VALUES ($nickname, MD5(CONCAT($salt,$password)), $email, $salt)
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
				SELECT users.nickname, users.email, users.joined
				FROM users
				WHERE email = $email
				");
							
			return $query->result_array();
		} 
	} 

?>