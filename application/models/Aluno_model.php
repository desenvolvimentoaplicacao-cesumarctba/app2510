<?php
/**
 * este arquivo é responsavel por conversar com o banco de dados
 */
class Aluno_model extends CI_Model
{
    public function listaAlunos($id = false)
    {
        if ($id) {
            return $this->db->get_where('alunos', ['id' => $id])->result();    
        }
        // select * from alunos
        return $this->db->get('alunos')->result();
    }

    public function insere($data)
    {
        return $this->db->insert('alunos', $data);
    }
}