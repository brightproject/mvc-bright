<?php
	class banksController extends baseController{
		
		// public function __construct(){
			// parent::__construct();
		// }
		public function index(){

				$this->load->model('banks');

				$vars['title'] = 'Страница банков';
				$vars['banks'] = $this->banks->getList();
				$this->load->view('banks',$vars);	
		}
		public function add(){

				$this->load->model('banks');

				$vars['title'] = 'Добавить банк';
				$vars['banks'] = $this->banks->getAdd();
				$this->load->view('bankadd',$vars);	
		}
		
		public function update(){

				$this->load->model('banks');

				$vars['title'] = 'Редактировать банк';
				$vars['banks'] = $this->banks->getUpdate();
				$this->load->view('banks',$vars);	
		}
		
		public function delete(){

				$this->load->model('banks');

				$vars['title'] = 'Удалить банк';
				$vars['banks'] = $this->banks->getDelete();
				$this->load->view('banks',$vars);	
		}

	}
