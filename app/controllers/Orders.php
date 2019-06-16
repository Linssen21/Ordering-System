<?php 
class Orders extends Controller{	
	public function __construct(){
		$this->orderModel = $this->model('Order');
		$this->bagModel = $this->model('Bag');
		if (!isLoggedIn()) {
		redirect('users/login');
	}
}
	public function index(){
	redirect('bags/mybag');
}
	public function order(){
	$bag = $this->bagModel->getBag();
	$data = ['bag' => $bag,
			'user_id', $_SESSION['user_id']
			];
	if (empty($bag)){
		redirect('bags/mybag');
	}else{
		if ($this->orderModel->addAllOrder($data)) {
			if ($this->orderModel->deleteBag()) {
			redirect('bags/mybag');
			}
		}else{
			redirect('bags/mybag');
		}
	}
}

public function orderlist(){
	$order = $this->orderModel->getOrders();
	$total = $this->orderModel->getTotal();
	$data = ['bag' => $order,
			'total' => $total];

	$this->view('orders/orderlist', $data);
}
}?>