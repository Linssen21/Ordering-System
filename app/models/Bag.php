<?php 
Class Bag{
	private $db;
	public function __construct(){
		$this->db = new Database;
	}
	public function findOrder($data){
		$this->db->query('SELECT * FROM `burger` WHERE id = 
		:id and burger_name = :burger_name and price = :price');
		$this->db->bind('id', $data['order_id']);
		$this->db->bind('burger_name', $data['order_name']);
		$this->db->bind('price', $data['order_price']);
		$row = $this->db->single();

		if ($this->db->rowCount() > 0) {
			return true;
		}else{
			return false;
		}
	}
	public function getTotal(){
		$this->db->query('SELECT SUM(total_price) AS total_price FROM bag WHERE user_id = :user_id');
		$this->db->bind('user_id', $_SESSION['user_id']);
		$results = $this->db->single();
		return $results;
	}
	public function getBagById($id){
		$this->db->query('SELECT * FROM bag WHERE id = :id AND user_id = :user_id ');
		$this->db->bind('user_id', $_SESSION['user_id']);
		$this->db->bind('id', $id);
		$results = $this->db->single();
		return $results;
	}
	public function addQuantity($id){
		$this->db->query('UPDATE bag SET quantity = quantity + :one, total_price = order_price*quantity WHERE user_id = :user_id AND id = :id;');
		$this->db->bind('one', 1);
		$this->db->bind('user_id', $_SESSION['user_id']);
		$this->db->bind('id', $id);
		if ($this->db->execute()) {
			return true;
		}else{
			return false;
		}
	}
	public function deducQuantity($id){
		$this->db->query('UPDATE bag SET quantity = quantity - :one, total_price = order_price*quantity WHERE user_id = :user_id AND id = :id;');
		$this->db->bind('one', 1);
		$this->db->bind('user_id', $_SESSION['user_id']);
		$this->db->bind('id', $id);
		if ($this->db->execute()) {
			return true;
		}else{
			return false;
		}
	}
	public function getBagByIdQ($id){
		$this->db->query('SELECT * FROM bag WHERE id = :id AND user_id = :user_id AND quantity >= :two');
		$this->db->bind('user_id', $_SESSION['user_id']);
		$this->db->bind('id', $id);
		$this->db->bind('two', 2);
		$results = $this->db->single();
		return $results;
		
	}

	public function deleteById($id){
		$this->db->query('DELETE FROM bag WHERE id = :id');
		$this->db->bind('id', $id);
		if ($this->db->execute()) {
			return true;
		}else{
			return false;
		}
	}
	public function getBag(){
		$this->db->query('SELECT * FROM bag WHERE user_id = :user_id ORDER BY id DESC');
		$this->db->bind('user_id', $_SESSION['user_id']);
		$results = $this->db->resultSet();
		return $results;
	}
	public function addBag($data){
		$this->db->query('INSERT INTO bag (user_id,order_name,order_price,order_id,quantity,total_price) VALUES (:user_id, :order_name, :order_price, :order_id, :quantity,:order_price)');
		$this->db->bind('quantity', 1);
		$this->db->bind('order_id', $data['order_id']);
		$this->db->bind('user_id', $data['user_id']);
		$this->db->bind('order_name', $data['order_name']);
		$this->db->bind('order_price', $data['order_price']);
		if ($this->db->execute()) {
			return true;
		}else{
			return false;
		}
	}
 }?>
