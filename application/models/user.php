<?php

class User extends CI_Model {

	function create($user_info)
	{
   		$query = "INSERT INTO users(first_name, last_name, address, zipcode, email, created_at, updated_at) 
   					VALUES(?,?,?,?,?,NOW(),NOW())";
   		$values = array($user_info['first_name'], $user_info['last_name'], $user_info['address'], $user_info['zipcode'], $user_info['email']);

   		return $this->db->query($query, $values);
	}

	function sub($sub_info)
	{
		$query = "INSERT INTO zipcode(zipcode, address, created_at) 
   					VALUES(?,?,NOW())";
   		$values = array($sub_info['zipcode'], $sub_info['address']);

   		return $this->db->query($query, $values);
	}

	function email_list($email)
	{
		$query = "INSERT INTO email(email, created_at) 
   					VALUES(?,NOW())";

   		return $this->db->query($query, $email);
	}

	function all($zipcode)
	{
		$query = "SELECT * 
   					FROM users
   					WHERE zipcode = ?";

	   	return $this->db->query($query, $zipcode);
	}
}