<?php
require_once 'app/models/Alumno/alumno.php';
require_once LIBS_ROUTE .'Session.php';
class AlumnoController{

    private $model;
    private $session;
    public function __CONSTRUCT(){
      $this->session = new Session();
      if(session_status() == PHP_SESSION_NONE)
        $this->session->init();
      if($this->session->getStatus() === 1 || empty($this->session->get('email')))
        exit('Acceso denegado');
        $this->model = new Alumno();
    }

      public function exec()
  {
    

  }

    public function Index(){
        require_once 'app/views/header.php';
        require_once 'app/views/Alumno/alumno.php';
        require_once 'app/views/footer.php';
    }

    public function Crud(){
        $alm = new Alumno();

        if(isset($_REQUEST['id'])){
            $alm = $this->model->Obtener($_REQUEST['id']);
        }

        require_once 'app/views/header.php';
        require_once 'app/views/alumno/alumno-editar.php';
        require_once 'app/views/footer.php';
    }

    public function Guardar(){
        $alm = new Alumno();

        $alm->id = $_REQUEST['id'];
        $alm->Nombre = $_REQUEST['Nombre'];
        $alm->Apellido = $_REQUEST['Apellido'];
        $alm->Correo = $_REQUEST['Correo'];
        $alm->Sexo = $_REQUEST['Sexo'];
        $alm->FechaNacimiento = $_REQUEST['FechaNacimiento'];

        $alm->id > 0
            ? $this->model->Actualizar($alm)
            : $this->model->Registrar($alm);

        header('Location: '.FOLDER_PATH.'/main');
    }

    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: '.FOLDER_PATH.'/main');
    }
}
