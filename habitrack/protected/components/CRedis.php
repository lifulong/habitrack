<?php
class CRedis extends CComponent {
	public $host;
	public $port;
	public $password=null;
	protected static $_models=array();
	protected $_attributes=array();

	public function __construct() {
		self::init();
	}

	public function __destruct() {
		if (isset($this->_attributes['redis'])&&$this->_attributes['redis']) {
			$this->_attributes['redis']->close();
			unset($this->_attributes['redis']);
		}
	}

	public function __get($name) {
		if (isset($this->_attributes[$name])) {
			return $this->_attributes[$name];
		}
	}

	public function __set($name, $value) {
		$this->_attributes[$name]=$value;
	}

	/**
	 * 初始化缓存
	 */
	public function init() {
		$_redis=new Redis();
		$_redis->pconnect($this->host, $this->port);
		if(!empty($this->password)) {
		    $_redis->auth($this->password);
		}
		$this->_attributes['redis']=$_redis;
		
		return $this;
	}

  /**
   *  redis pipeline 批量操作
   */
  public function pipeline($command,$params) {
     $result = array();

     $pipe = $this->redis->multi(Redis::PIPELINE);
     switch($command) {
       case 'get':
         foreach($params as $param) {
           $pipe->get($param[0]);
         }
         break;
       case 'hGet':
         foreach($params as $param) {
           $pipe->hGet($param[0],$param[1]);
         }
         break;
       case 'hGetAll':
         foreach($params as $param) {
           $pipe->hGetAll($param[0]);
         }
         break;
       default:
         return null;
     }

     $result = $pipe->exec();

     return $result;
  }
}
