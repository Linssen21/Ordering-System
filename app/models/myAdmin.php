<?php 
Class myAdmin{
	private $db;
	public function __construct(){
		$this->db = new Database;
	}
	public function findAdminByEmail($email){
		$this->db->query('SELECT * FROM admin WHERE admin_email = :email');
		$this->db->bind(':email', $email);
		$row = $this->db->single();
		if ($this->db->rowCount() > 0) {
			return true;
		}else{
			return false;
		}
	}
	public function login($email, $password){
		$this->db->query('SELECT * FROM admin WHERE admin_email = :email');
		$this->db->bind(':email', $email);
		$row = $this->db->single();
		$db_pass = $this->db->single()->admin_password;
		if ($password == $db_pass) {
			return $row;
		}else{
			return false;
		}
	}

	public function getOrderById($id){
		$this->db->query('SELECT * FROM burger_order WHERE id = :id');
		$this->db->bind('id', $id);
		$results = $this->db->single();
		return $results;
	}

	public function updateStatus($id){
		$this->db->query('UPDATE burger_order SET status = :status WHERE id = :id');
		$this->db->bind('id', $id);
		$this->db->bind('status', 'Deliver');
		if ($this->db->execute()) {
			return true;
		}else{
			return false;
		}
	}

	public function getUsers(){
		$this->db->query('SELECT id, name, email, address FROM `users`');
		$results = $this->db->resultSet();
		return $results;
	}

	public function getDefault(){
		$this->db->query('SELECT id,order_name,quantity FROM `burger_order` WHERE status = :status ORDER BY id DESC LIMIT 2');
		$this->db->bind('status', 'Processing');
		$results = $this->db->resultSet();
		return $results;
	}

}?>