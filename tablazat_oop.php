<?php
	error_reporting(E_ALL);
	ini_set('display_errors','1');



	class tablazat
	{
		protected $border;
		protected $adatok = array();

		public  function __construct($border_,$adatok_)
		{
			$this->border = $border_;
			$this->adatok = $adatok_;
		}

		public function kirajzol()
		{
			echo "<table border='".$this->border."'>";
			$sor = count($this->adatok);
			$oszlop = count($this->adatok[0]);

			for ($i=0; $i < $sor; $i++) {
					echo "<tr>";
				for ($j=0; $j < $oszlop	; $j++) {

						echo "<td>".$this->adatok[$i][$j]."</td>";
				}
					echo"</tr>";
			}


			echo "</table>";
		}




	}

	class fejleces extends tablazat
	{
		private $fejlec = array();
		function __construct($border_,$fejlec_,$adatok_)
		{
			parent::__construct($border_,$adatok_);
			$this->fejlec = $fejlec_;
		}

		public function kirajzol()
		{
			$oszlop = count($this->adatok[0]);
			echo "<table border='".$this->border."'>";
			$sor = count($this->adatok);
			echo "<tr>";
			for ($j=0; $j <$oszlop ; $j++) {
				echo "<th>".$this->fejlec[$j]."<h>";
			}
			echo "</tr>";
			echo "<td></td>";
			for ($i=0; $i < $sor; $i++) {
					echo "<tr>";
				for ($j=0; $j < $oszlop; $j++) {

					echo"<td>".$this->adatok[$i][$j]."</td>";
				}
					echo"</tr>";
			}


			echo "</table>";
		}

	}


?>
