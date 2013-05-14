<?php

	class banksModel extends baseModel{
		
		public function getList(){
			// $return = array();
			// $return[0] = array('title'=>'Таблица банков');

			// return $return;
			$all  = $this->db->query('SELECT * FROM `banks`', null, 'assoc');                        // Вся таблица в ассоциативном массиве
			// $name = $db->query('SELECT `name` FROM `table` WHERE `id`=?i', array($id), 'el');  // Одно значение
			// $id   = $db->query('INSERT INTO `table` VALUES (?)', array('Новая строка'), 'id'); // Идентификатор только что вставленной строки
			// $pattern = 'SELECT * FROM ?t WHERE `id`=?';
			// $data    = array(banks, 2);
			// $lists   = $this->db->query($pattern, $data)->row();
			echo "<pre>";
			print_r($all);
			echo "</pre>"; 
			foreach ($all as $post):
			print_r($post['bank']); 
			echo "<br>";
			endforeach;
			// $lists = $this->db->query('SELECT `early_repay` FROM `banks`');
			// $lists = $this->db->query('SELECT `early_repay` FROM `banks` WHERE `early_repay`=?', array($early_repay), 'el');
		}
		
		public function getAdd(){
			// $return = array();
			// $return[0] = array('title'=>'Добавляем банк');

			// return $return;
				// echo __DIR__;
				$bank = (string)$_POST['bank'];
				$early_repay = (string)$_POST['early_repay'];
				$rate_in_rub = (string)$_POST['rate_in_rub'];
				$first_pay = (string)$_POST['first_pay'];	
				$credit_period = (string)$_POST['credit_period'];	
				$period_of_review = (string)$_POST['period_of_review'];	
				$add_costs = (string)$_POST['add_costs'];	
				$docs = (string)$_POST['docs'];	
				if (($bank) || ($early_repay) || ($rate_in_rub) || ($first_pay) || ($credit_period) || ($period_of_review) || ($add_costs) || ($docs) ) { 
				$this->db->query('INSERT INTO `banks` SET `bank`=?, `early_repay`=?, `rate_in_rub`=?, `first_pay`=?, `credit_period`=?, `period_of_review`=?, `add_costs`=?, `docs`=?', array($bank, $early_repay, $rate_in_rub, $first_pay, $credit_period, $period_of_review, $add_costs, $docs), 'id');
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