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
				$bank = (string)$_POST['bank'];
				$early_repay = (string)$_POST['early_repay'];
				$first_pay = (string)$_POST['first_pay'];	
				$credit_period = (string)$_POST['credit_period'];	
				$period_of_review = (string)$_POST['period_of_review'];	
				$add_costs = (string)$_POST['add_costs'];	
				$docs = (string)$_POST['docs'];	
				if (($bank) || ($early_repay) || ($first_pay || ($credit_period || ($period_of_review || ($add_costs || ($docs) ) { 
				$this->db->query('INSERT INTO `banks` SET `bank`=?, `early_repay`=?, `first_pay`=?, `credit_period`=?, `period_of_review`=?, `add_costs`=?, `docs`=?, `rate_in_rub`=?', array($bank, $early_repay, $first_pay, $credit_period, $period_of_review, $add_costs, $docs), 'id');
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
