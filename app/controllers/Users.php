<?php 
	class Users Extends Controller{
		public function __construct(){
			if (isLoggedIn()) {
			redirect('pages/menu');
		}
			$this->userModel = $this->model('User');

		}
		public function index(){
			redirect('users/login');
		}
		public function registration(){
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

			$data = [
				'name' => trim($_POST['name']),
				'email' => trim($_POST['email']),
				'password' => trim($_POST['password']),
				'confirm_password' => trim($_POST['confirm_password']),
				'address' => trim($_POST['address']),
				// Stores error
				'name_err' => '',
				'email_err' => '',
				'password_err' => '',
				'confirm_password_err' => '',
				'address_err' => ''
			];
			if ($this->userModel->findUserByEmail($data['email'])) {
				$data['email_err'] = 'Email already Exists';
				}
			if ($data['password'] != $data['confirm_password']) {
				$data['confirm_password_err'] = 'Passwords do not match';
			}
			if (strlen($data['password']) < 6 ) {
				$data['password_err'] = 'Weak Password';
			}
			if (strlen($data['confirm_password']) < 6 ) {
				$data['confirm_password_err'] = 'Weak Password';
			}
			if (empty($data['email_err']) && empty($data['name_err']) && empty($data['password_err']) && empty($data['confirm_password_err']) ) {
				 $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

				 if ($this->userModel->register($data)) {
					redirect('users/login');
				}else{
					 die('Something went wrong');
				}

			}else{
				$this->view('users/registration', $data);
			}
			}else{
				$data = [
				'name' => '',
				'email' => '',
				'password' => '',
				'confirm_password' => '',
				'address'=>'',
				// Stores error
				'name_err' => '',
				'email_err' => '',
				'password_err' => '',
				'confirm_password_err' => '',
				'address_err'=> ''
			];
			$this->view('users/registration', $data);
			}

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
				$data['password_err'] = 'Weak password';
			}
			if ($this->userModel->findUserByEmail($data['email'])) {
			}else{
				$data['email_err'] = 'No user Found';
			}

			if (empty($data['password_err']) && empty($data['email_err'])) {
				$loggedInUser = $this->userModel->login($data['email'], $data['password']);
				if ($loggedInUser) {
					$this->createUserSession($loggedInUser);
				}else{
					$data['password_err'] = 'Password incorrect';
					$this->view('users/login', $data);
				}

			} else{
			$this->view('users/login', $data);
		}
			}else{
					$data = [
					'email' => '',
					'password' => '',
					'email_err' => '',
					'password_err' => ''
					
			];
			$this->view('users/login', $data);
			}
		}
		public function createUserSession($user){
		
		$_SESSION['user_id'] = $user->id;
		$_SESSION['user_email'] = $user->email;
		$_SESSION['user_name'] = $user->name;
		redirect('pages/menu');
	}
	public function logout(){
		unset($_SESSION['user_id']);
		unset($_SESSION['user_name']);
		unset($_SESSION['user_email']);
		redirect('users/login');
	}
}?>