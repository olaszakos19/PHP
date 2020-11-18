<?php

abstract class uzenet
{
	protected $tartalom;

  public function __construct($szoveg)
	{
		$this->tartalom = $szoveg;
	}
	abstract public function kiir($szin);

}

	class Cim1Uzenet extends Uzenet
	{
		public function kiir($szin)
		{
			echo "<h1 style='color:$szin;'>$this->tartalom</h1>";
		}
	}

	class DoltUzenet extends Uzenet
	{
		public function kiir($szin)
		{
			echo "<p style='color:$szin;' font-style:italic>$this->tartalom</p>";
		}

	}


?>
