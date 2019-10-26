<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * é arquivo que permite entradas do navegador
 */
class Aluno extends CI_Controller 
{
    public function index()
    {
       $this->load->model('Aluno_model');
       $alunos = $this->Aluno_model->listaAlunos();
    //    echo '<pre>';     
    //    print_r($alunos);
    //    echo '</pre>';     
       
        $data['alunos'] =  $alunos;
        $this->load->view('lista_alunos', $data);
    }

    public function formAlunos()
    {
        $this->load->view('form_alunos');
    }

    public function recebePost()
    {
        $this->load->model('Aluno_model');
        $this->Aluno_model->insere($_POST);
        header('Location: /Aluno');// retorna para index
    }


}