<?php 
Class Report{
	private $db;
	public function __construct(){
		$this->db = new Database;
	}
	public function getReport(){
		$this->db->query("SELECT burger_order.id AS 'id', burger_order.order_id AS 'OrderID', users.name AS 'Customer', burger_order.order_name AS 'OrderName', burger_order.quantity AS 'Quantity', burger_order.total_price AS 'Price', burger_order.date AS 'Date', burger_order.status AS 'Status' FROM users INNER JOIN burger_order ON users.id = burger_order.user_id ORDER BY id DESC ");
		$results = $this->db->resultSet();
		return $results;
	}

	public function getReceipt($id = null){
		$this->db->query("SELECT burger_order.id AS 'id', burger_order.order_id AS 'OrderID', users.name AS 'Customer', burger_order.order_name AS 'OrderName', burger_order.quantity AS 'Quantity', burger_order.total_price AS 'Price', burger_order.date AS 'Date', burger_order.status AS 'Status', burger_order.user_id AS 'CustomerId' FROM users INNER JOIN burger_order ON users.id = burger_order.user_id WHERE user_id = :id AND status = :status ORDER BY id DESC");

		$this->db->bind('id', $id);
		$this->db->bind('status', 'Deliver');
		$results = $this->db->resultSet();
		return $results;
	}


	
	public function getTotal($id){
		$this->db->query('SELECT SUM(total_price) AS total_price FROM burger_order WHERE user_id = :user_id AND status = :status');
		$this->db->bind('user_id', $id);
		$this->db->bind('status', 'Deliver');
		$results = $this->db->single();
		return $results;
	}

	
}?>