<?php
   class automobil
   {
   	private $uzemanyagMennyiseg = 0;
   	protected $uzemanyagTipus;
   	
   	public function tankol($mennyiseg)
   	{
   		$this->uzemanyagMennyiseg += $mennyiseg;
   	} 
   	public function __construct($tipus)
   	{
   		$this->uzemanyagTipus = $tipus;
   	}
   	public function __destruct()
   	{
   		echo "Az autót eladtuk ".$this->uzemanyagMennyiseg." literrel a tankba.<br />";
   	}
   }
?>
