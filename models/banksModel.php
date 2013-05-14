<?php

	class banksModel extends baseModel{
		
		public function getList(){
			$return = array();
			$return[0] = array('title'=>'Таблица банков');

			return $return;
		}
		
		public function getAdd(){
			// $return = array();
			// $return[0] = array('title'=>'Добавляем банк');

			// return $return;
				echo __DIR__;
				$login = $_POST['login'];
				$pass = $_POST['pass'];
				$email = $_POST['email'];	
				if (($login) || ($pass) || ($email) ) { 
				$this->db->query('INSERT INTO `users` SET `login`=?, `pass`=?, `email`=?', array($login, $pass, $email), 'id');
				}
		}
		
		public function getUpdate(){
			$return = array();
			$return[0] = array('title'=>'Обновляем информацию о банке');

			return $return;
		}

		public function getDelete(){
			$return = array();
			$return[0] = array('title'=>'Удаляем банк');

			return $return;
		}		
	}
?>
