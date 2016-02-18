<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Namen extends CI_model {

	public function getAllNames()
	{
		$result = $this->db->get('namen');
		return $result->result();
	}

	public function getName($f_id = 0){
		$result = $this->db->get_where('namen', array("id" => $f_id));
		return $result->row();
	}

	public function updateName($f_id, $f_name){
		$this->db->update('namen', array("naam" => $f_name), array("id" => $f_id));
	}
}
