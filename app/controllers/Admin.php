<?php 
Class Admin Extends Controller{
	public function __construct(){
		$this->adminModel = $this->model('myAdmin');
		$this->reportModel = $this->model('Report');
			if (!isAdminLoggedIn()) {
			redirect('uadmin/login');
		}
	}
	public function index(){
		$default = $this->adminModel->getDefault();
		$data = [
					'default' => $default];
			$this->view('admin/index', $data); 
		}
	

	public function orders(){
		$report = $this->reportModel->getReport();
		$data = ['report' => $report];
			$this->view('admin/orders', $data); 
		}
	
	public function customers(){
		$report = $this->adminModel->getUsers();
		$data = ['report' => $report];
		$this->view('admin/customers', $data); 
		}

	public function send(){
		$data = [
				'title' => 'MouthMelters'];
			$this->view('admin/send', $data); 
		}
	public function branches(){
		$data = [
				'title' => 'MouthMelters'];
			$this->view('admin/branches', $data); 
		}


		public function status($id = null){
				if ($_SERVER['REQUEST_METHOD'] == 'GET') {
				$stats = $this->adminModel->getOrderById($id);
				$data = ['stats' => $stats];
				if (!empty($data['stats'])) {
					if ($this->adminModel->updateStatus($data['stats']->id)){
						redirect('admin/orders');
					}else{
						die('Something Went Wrong');
					}
					}else{
					redirect('admin/orders');
					}	
				}
			}



		
 }?>