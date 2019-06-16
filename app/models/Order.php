 <?php 
Class Order{
	private $db;
	public function __construct(){
		$this->db = new Database;
	}
	public function addAllOrder($data = null){
		if (isset($data['bag'])) {
		$array = [];
		foreach ($data['bag'] as $row) {
		$array[] = '("'.$row->user_id.'","'.$row->order_id.'",
		"'.$row->order_name.'","'.$row->order_price.'","'.$row->quantity.'","'.$row->total_price.'")';
		}
			$this->db->query("INSERT INTO burger_order (user_id, order_id, order_name, price, quantity, total_price) 
			VALUES".implode(',', $array));
		
			if ($this->db->execute()) {
			return true;
		}else{
			return false;
		}
	}
	}
	public function deleteBag(){
			$this->db->query('DELETE FROM bag WHERE user_id = :user_id');
			$this->db->bind(':user_id', $_SESSION['user_id']);
			if ($this->db->execute()) {
				return true;
			}else{
				return false;
			}
		}

	public function getOrders(){
		$this->db->query('SELECT * FROM burger_order WHERE user_id = :user_id ORDER BY id DESC');
		$this->db->bind('user_id', $_SESSION['user_id']);
		$results = $this->db->resultSet();
		return $results;
	}

	public function getTotal(){
		$this->db->query('SELECT SUM(total_price) AS total_price FROM burger_order WHERE user_id = :user_id');
		$this->db->bind('user_id', $_SESSION['user_id']);
		$results = $this->db->single();
		return $results;
	}

	}?>