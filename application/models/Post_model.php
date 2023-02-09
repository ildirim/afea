<?php
class Post_model extends CI_Model
{
	public function getPostsByUserId($userId)
	{
		$this->db->select('*')
				 ->where('user_id', $userId);
		$result = $this->db->get('posts');
		$dbError = $this->db->error();
		if ($dbError['code'] != 0) {
            return (Object)['errorMessage' => $dbError['code'] . ': ' . $dbError['message']];
        }
        return $result->result();
	}


	public function getPostById($id)
	{
		$this->db->select('*')
				 ->where('id', $id);
		$result = $this->db->get('posts');
		$dbError = $this->db->error();
		if ($dbError['code'] != 0) {
            return (Object)['errorMessage' => $dbError['code'] . ': ' . $dbError['message']];
        }
        return $result->row();
	}

	public function store($data)
	{
        $this->db->insert('posts', $data);
        $dbError = $this->db->error();
		if ($dbError['code'] != 0) {
            return (Object)['errorMessage' => $dbError['code'] . ': ' . $dbError['message']];
        }
        return $this->db->insert_id();
	}

	public function update($id, $data)
	{
        $this->db->where('id', $id);
        $dbError = $this->db->error();
		if ($dbError['code'] != 0) {
            return (Object)['errorMessage' => $dbError['code'] . ': ' . $dbError['message']];
        }
        return $this->db->update('posts', $data);
	}

	public function delete($id, $data)
	{
        $this->db->where('id', $id);
        $dbError = $this->db->error();
		if ($dbError['code'] != 0) {
            return (Object)['errorMessage' => $dbError['code'] . ': ' . $dbError['message']];
        }
        return $this->db->delete('posts', $data);
	}
}