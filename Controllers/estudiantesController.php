<?php namespace Controllers;

	use Models\Estudiante as Estudiante;
	use Models\Seccion as Seccion;

	class estudiantesController{

		private $estudiante;
		private $seccion;

		public function __construct(){			
			$this->estudiante = new Estudiante();
			$this->seccion = new Seccion();

		}
		public function index(){
			$datos = $this->estudiante->listar();
			return $datos;
		}

		public function agregar(){
			print_r($_POST);
			echo "<br/>";	
			if (!$_POST) {
				$datos = $this->seccion->listar();
				return $datos;
			}else{
				$permitidos = array("image/jpeg", "image/png", "image/gif", "image/jpg");
				$limite = 700;
				print_r($permitidos);
				echo "<br/>";
				$ver = mysqli_fetch_assoc($_FILES);
				print_r($ver);

				if (in_array($_FILES['imagen']['type'], $permitidos)){
						print "Esta funcionando";
				}else{
					print "Error!";
				}
			}		
		}
	}
	//$estudiantes = new estudiantesController();
?>