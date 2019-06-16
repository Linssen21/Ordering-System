<?php 
Class Bags Extends Controller{
public function __construct(){
	$this->bagModel = $this->model('Bag');
	if (!isLoggedIn()) {
		redirect('users/login');
	}
}
public function index(){
	redirect('bags/mybag');
}
public function mybag(){
	$bag = $this->bagModel->getBag();
	$total = $this->bagModel->getTotal();
	$data = ['bag' => $bag,
			'total' => $total];

	$this->view('bags/mybag', $data);
}
public function add(){
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {	
		$data = [
			'user_id' => $_SESSION['user_id'],
			'order_id' => $_POST['order_id'],
			'order_price' => $_POST['order_price'],
			'order_name' => $_POST['order_name']
		];
		if ($this->bagModel->findOrder($data)) {
			if ($this->bagModel->addBag($data)) {
				redirect('bags/mybag');
			}else{
				redirect('pages/menu');
			}
		}else{
			redirect('pages/menu');
		}
		}else{
			redirect('pages/menu');
		}
		
	}
	public function decquantity($id = null){
			if ($_SERVER['REQUEST_METHOD'] == 'GET') {
			$decreBag = $this->bagModel->getBagByIdQ($id);
			$data =['bags' => $decreBag];
			if (!empty($data['bags'])) {
				if ($this->bagModel->deducQuantity($data['bags']->id)) {
					redirect('bags/mybag');
				}else{
					die('Something Went Wrong');
				}
			}else{
				redirect('bags/mybag');
			}
		}else{
			redirect('bags/mybag');
		}
	}
	public function incquantity($id = null){
		if ($_SERVER['REQUEST_METHOD'] == 'GET') {
			$bags = $this->bagModel->getBagById($id);
			$data =['bags' => $bags];
			if (!empty($data['bags'])) {
				if ($this->bagModel->addQuantity($data['bags']->id)) {
					redirect('bags/mybag');
				}else{
					die('Something Went Wrong');
				}
			}else{
				redirect('bags/mybag');
			}
		}else{
			redirect('bags/mybag');
		}
	}
public function remove($id = null){
		if ($_SERVER['REQUEST_METHOD'] == 'GET') {
		$bags = $this->bagModel->getBagById($id);
		$data = [
			'bags'=> $bags
		];
		if (!empty($data['bags'])) {
				if ($data['bags']->user_id == $_SESSION['user_id']) {
					if ($this->bagModel->deleteById($data['bags']->id)) {
						redirect('bags/mybag');
					}else{
						die('Something Went Wrong');
					}
				 }else{
		 			redirect('bags/mybag');
			}
		}else{
			redirect('bags/mybag');
		}		
		
	}
}
}?>