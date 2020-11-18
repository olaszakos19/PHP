<?php
   class automobil
   {
   	private $uzemanyagMennyiseg = 0;
   	protected $uzemanyagTipus;
		private $kmOra;
		private $fogyasztas = 0;
    private $tankMeret = 0;


   	public function __construct($tipus,$f,$tm)
   	{
   		$this->uzemanyagTipus = $tipus;
			$this->uzemanyagMennyiseg = 0;
			$this->fogyasztas = $f;
      $this->tankMeret = $tm;

   	}

    public function tankol($mennyiseg)
   	{
      if($mennyiseg > $this->tankMeret - $this->uzemanyagMennyiseg)
      {
      echo "ennyit nem tudsz tankolni";
      }
      else{
      $this->uzemanyagMennyiseg += $mennyiseg;

      }
   	}

   	public function __destruct()
   	{
   		echo "Az autót eladtuk ".$this->uzemanyagMennyiseg." literrel a tankba.<br />";
   	}

		public function megy($tav)
		{
			$this->kmOra += $tav;



      if($this->fogyasztas * $tav / 100 > $this->uzemanyagMennyiseg)
      {
        echo "ennyit nem tudsz menni";

      }
      else
      {
        $this->uzemanyagMennyiseg = $this->uzemanyagMennyiseg - $this->fogyasztas * $tav / 100;
      }


		}

   }
?>
