<?php
class PersonasController extends AppController
{
    public function index ($page = 1){
		View::template('principal');
          $this ->listPersonas = (new personas)->getPersonas($pages=1);
    }
    public function registro(){
		view::template('principal');
    }
	
	public function borrar($id){
	view::select(null);

	}
	public function editar($id){
		view::template('principal');
	}
  }