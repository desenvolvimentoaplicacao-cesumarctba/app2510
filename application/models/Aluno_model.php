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
        $data = $this->clearHTML($data);
        return $this->db->insert('alunos', $data);
    }

    public function altera($data)
    {
        $data = $this->clearHTML($data);
        $id = $data['id'];
        return $this->db->update('alunos',$data, "id = $id");
    }

    public function deleta($id)
    {
        return $this->db->delete('alunos', ['id' => $id]);
    }

    private function clearHTML($data)
    {

        foreach ($data as $key => $value) {
            $data[$key] = strip_tags($value);
            $data[$key] = preg_replace('/(<([^>]+)>)/', '', $value);
        }
        return $data;
    }
}