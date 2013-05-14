<?php

class testController extends baseController{
	
	public function index(){
		echo '<pre>'.print_r(__METHOD__,1).'</pre>';	
		
	}


	public function add(){
		echo '<pre>'.print_r(__METHOD__,1).'</pre>';	
		echo '<pre>'.print_r(func_get_args(),1).'</pre>';	
		
	}
	public function update(){
		echo '<pre>'.print_r(__METHOD__,1).'</pre>';	
		echo '<pre>'.print_r(func_get_args(),1).'</pre>';	
		
	}
}
