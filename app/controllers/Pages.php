<?php 
	class Pages Extends Controller{
		public function __construct(){		
		}
		public function index(){
			$data = [
					'title' => 'MouthMelters'];
			$this->view('pages/index', $data); 
		}
		public function menu(){
			$data = [
				'title'=> 'Menu'
			];
			$this->view('pages/menu', $data);
		}
		public function directions(){
			$data = [
				'title' => 'Directions'
			];
			$this->view('pages/directions');
		}
	}
 ?>