<?php 	
Class User{
private $db;
	public function __construct(){
		$this->db = new Database;
	} 
	public function register($data){
		$this->db->query('INSERT INTO users (name,email,password,address) VALUES (:name, :email, :password,:address)');
		$this->db->bind(':email', $data['email']);
		$this->db->bind(':name', $data['name']);
		$this->db->bind(':password', $data['password']);
		$this->db->bind(':address', $data['address']);
		if ($this->db->execute()) {
			return true;
		}else{
			return false;
		}
	}
	public function findUserByEmail($email){
		$this->db->query('SELECT * FROM users WHERE email = :email');
		$this->db->bind(':email', $email);
		$row = $this->db->single();
		if ($this->db->rowCount() > 0 ) {
			return true; 
		}else{
			return false;
		}
	}
	public function login($email, $password){
		$this->db->query('SELECT * FROM users WHERE email = :email');
		$this->db->bind(':email', $email);
		$row = $this->db->single();
		$hashed_password = $this->db->single()->password;
		if (password_verify($password ,$hashed_password)) {
			return $row;
		}else{
			return false;
		}
	} 
 }?>