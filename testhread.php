<?php

Class Apicallthread extends Thread 
{
	
	private $apicallid;

	function __construct($id)
	{
		$this->apicallid = $id;
	}

	public function run() {
		echo "Thread run with ID ".$this->apicallid;
		echo '<br>';
	}
}

$thread1 = new Apicallthread('1');
$thread1->start();

$thread2 = new Apicallthread('2');
$thread2->start();

$thread1->join();

$thread2->join();

?>