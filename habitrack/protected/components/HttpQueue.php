<?php
/**
 * 任务处理队列
 */

class HttpQueue extends CComponent
{
	protected static $_models = array();
	private $_httpsqs;
	private $_queue;
	
	public function init($queue)
	{
		if ($queue)
		{
			$this->_queue = $queue['queue'];
			$host = $queue['host'];
			$port = $queue['port'];
			$password = $queue['password'];
			
			$this->_httpsqs = new Httpsqs($host, $port, $password);
		} else
		{
			throw new CException('队列信息定义错误', 9000, null);
		}
	}
	
	/**
	 * 
	 * 获取队列中的一项任务
	 */
	public function get()
	{
		$json = $this->_httpsqs->get($this->_queue);
		
		if ($json=='HTTPSQS_GET_END')
		{
			return null;
		}
		return @json_decode($json, true);
	}
	
	/**
	 * 
	 * 在队列中增加一项任务
	 * @param array $task
	 */
	public function add($task)
	{
		$this->_httpsqs->put($this->_queue, json_encode($task));
	}

}