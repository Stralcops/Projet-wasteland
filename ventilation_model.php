<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ventilation_model extends CI_Model
{

 	public function insert($data) //GOOD
 	{
    if($this->db->insert('t_affaire_ventilation', $data))
    {
      echo $this->db->insert_id();
    }
    else
    {
      echo false;
    }
 	}
  public function delete($id)
  {
    $this->db->where('id_affaire_ventilation', $id);
    $this->db->delete('t_affaire_ventilation');
    echo $id;
  }
}
