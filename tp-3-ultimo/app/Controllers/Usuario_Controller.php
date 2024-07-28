<?php
namespace app\Controllers;
Use app\Models\Usuario_Model;

class Usuario_Controller extends Controllers{

    public function __construct() {
        helper (['form', 'url']);
    }
    public function create() {
        $dato['tituo'] = 'registro';
        echo view('front/head_view', $dato);
        echo view ('front/nav_view');
        echo view ('back/usuario/registro');
        echo view ('front/footer_view');
    }
    public function formValidation() {
     $input = $this ->validate([
        'nombre' => 'required|min_length[3]';
        'apellido'  => 'required|min_length[3]|max_lenght[25]';
        'usuario'  => 'required|min_length[3]';
        'email'  => 'required|min_length[4]|max_lenght[100]|valid_email|is_unique[usuarios.email]';
        'pass' => 'requeired|min_lenght[3]|max_lenght[10]';
     ],
    );
    $formModel = new Usuario_Model();

    if (!$input) {
        $data['titulo']='registro';
        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('back/usuario/registro', ['validation'=> $this->validator]);
        echo view('front/footer_view');
    }

    else {
        $formModel->save([
            'nombre' => $this->request->getVar('nombre');
            'apellido'  => $this->request->getVar('apellido');
            'email'  => $this->request->getVar('email');
            'usuario'  => $this->request->getVar('usuario');
            'pass' => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT )
        ]);

        session()->setFlashdata('sucess', 'Usuario registrado con exito');
        return $this->response->redirect('/inciar_sesion');

    }




    }

}