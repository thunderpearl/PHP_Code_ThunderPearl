

<?php
	class test
		{
			private $var1 = 54;
			public $var2 = 2;

			public function multi($num1, $num2)
			{
				$this->var1 = $num1;
				$this->var2 = $num2;

				
				return $this->var1 * $this->$var2 ; 
			}

		}

		$obj1 = new test();

		$obj1->multi();
?>