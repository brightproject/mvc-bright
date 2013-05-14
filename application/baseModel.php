<?php
	abstract class baseModel{
	protected $params;
	protected $db;
	public function __construct(){
			require(__DIR__.'/../goDB/autoload.php');
			\go\DB\autoloadRegister();
			$this->params = array(
				'host'     => 'localhost',
				'username' => 'root',
				'password' => '',
				'dbname'   => 'demo',
				'charset'  => 'utf8',
				'_debug'   => true,
				'_prefix'  => '',
				'_adapter'  => 'mysql',
			);
			$this->db = go\DB\DB::create($this->params);
		}
	}
?>
