<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model
{
	public function update($data)
	{
    $this->db->update("t_user", $data);
	}
}
