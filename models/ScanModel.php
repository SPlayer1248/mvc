<?php 

require_once('Database.php');
class ScanModel extends Database
{
	protected $ip;
	protected $hostname;
	protected $os;
	protected $open_ports;
	protected $filtered_ports;
	
	function Scan($ip)
	{
			
	}

	function ScanAll(){

	}

	public function getDataFromFile($filename){
		// $path = $filename;
		echo $filename;
		$xml = simplexml_load_file($filename);
		var_dump($xml);
		echo "====================================================================";
		var_dump($xml->hostnames[0]); //->attributes()->name;

		$xml = simplexml_load_file('book.xml');
		var_dump($xml->book[0]);
		var_dump($xml->hostnames->hostname[0]);
		// $dom = new DOMDocument();
		// $dom->load($filename);
		// var_dump($dom);
		
	}
}
?>