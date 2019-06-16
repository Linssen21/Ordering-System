<?php 
Class Reports Extends Controller{
	public function __construct(){
		if (!isAdminLoggedIn()) {
			redirect('uadmin/login');
		}
		$this->reportModel = $this->model('Report');
	}

	public function index(){
		$report = $this->reportModel->getReport();
		$data = ['report' => $report];

		$this->view('reports/report1', $data);
	}

	public function receipt($id = null){
		$report = $this->reportModel->getReceipt($id);
		$total = $this->reportModel->getTotal($id);

		$data = ['receipt' => $report,
				'total' => $total,
				'id' => $id];
		if (!empty($data['receipt'])) {
			$this->view('reports/receipt', $data);
		}else{
			echo "No receipt available";
		}
		
	}

}


 ?>