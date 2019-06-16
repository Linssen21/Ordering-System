<?php 
Class Uadmin Extends Controller{
	public function __construct(){
		$this->adminModel = $this->model('myAdmin');
			if (isAdminLoggedIn()) {
			redirect('admin');
		}
	}
	public function index(){
		redirect('uadmin/login');
		}
	
		public function login(){
		
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
		$data = [
				'email' => trim($_POST['email']),
				'password' => trim($_POST['password']),
				'email_err' => '',
				'password_err' => ''
				];
				if (strlen($data['password']) < 6 ) {
				$data['password_err'] = 'Insufficient characters';
			}

			if ($this->adminModel->findAdminByEmail($data['email'])) {	
			}else{
				$data['email_err'] = 'No admin found';
			}

			if (empty($data['password_err']) && empty($data['email_err'])) {
				$loggedInAdmin = $this->adminModel->login($data['email'], $data['password']);
				if ($loggedInAdmin) {
					$this->createAdminSession($loggedInAdmin);
				}else{
					$data['password_err'] = 'Password incorrect';
					$this->view('uadmin/login', $data);
				}

			}else{
				$this->view('uadmin/login', $data);
			}

			$this->view('uadmin/login', $data); 
			}else{
				$data = [
					'email' => '',
					'password' => '',
					'email_err' => '',
					'password_err' => ''
					
			];
			$this->view('uadmin/login', $data);
			}
		}

		public function createAdminSession($admin){
			$_SESSION['admin_email'] = $admin->admin_email;
			$_SESSION['admin_password'] = $admin->admin_password;
			redirect('admin/index');
		}

		public function adminlogout(){
			unset($_SESSION['admin_email']);
			unset($_SESSION['admin_password']);
			redirect('uadmin/login');
		}

 }?>