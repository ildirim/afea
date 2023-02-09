<?php

class User_model extends CI_Model
{
	public function store($data)
	{
		$this->db->insert('users', $data);
        $dbError = $this->db->error();
		if ($dbError['code'] != 0) {
            return (Object)['errorMessage' => $dbError['code'] . ': ' . $dbError['message']];
        }
        return $this->db->insert_id();
	}

	public function getUserByEmailAndPassword($data)
	{
		$this->db->select('id, name, surname, email')
				 ->where('email', $data['email'])
				 ->where('password', $data['password']);
		return $this->db->get('users')->row();
	}
}