

<?php
	interface shape
		{
			public function calcarea();

		}

		class circle implements shape
		{

			private $radius;

			public function __construct($radius)
			{

				$this->radius = $radius;
			}


			public function calcarea()
			{

				return $this->radius * $this->radius * pi() ;
			}
		}



		class rectangle implements shape
		{

			private $width;
			private $height;

			public function __construct($width, $height)
			{

				$this->width = $width;
				$this->height = $height;
			}


			public function calcarea()
			{

				return $this->width * $this->height ;
			}
		}


		$circle_obj = new circle(4);
		$rectangle_obj = new rectangle(11,12);

		echo $circle_obj->calcarea() . "<br>";
		echo $rectangle_obj->calcarea();
?>