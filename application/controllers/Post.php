<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends MY_Controller
{
	public function __construct()
	{
    	parent::__construct();
		$this->load->model('post_model');
		$this->load->library('validations/post_validate');

	}
	
	public function index()
	{
		$data = [
			'posts' => $this->post_model->getPostsByUserId($this->session->userdata('user')->id)
		];
		$this->load->view('posts/index', $data);
	}
	
	public function create()
	{
		$this->load->view('posts/create');
	}

	public function store()
	{
		if(isPost())
		{
			$this->post_validate->validate();
			if($this->post_validate->run() == FALSE)
			{
				$this->session->set_flashdata('error', json_encode($this->post_validate->getErrors()));
				redirect('post/create');
			}
			else
			{
				$image = $this->uploadImage();

				if($image['message'])
				{
					$request = [
						'user_id' => $this->session->userdata('user')->id,
						'title' => postParam('title'),
						'content' => postParam('content'),
						'tags' => postParam('tags'),
						'image' =>  $image['data']
					];
					$storedPost = $this->post_model->store($request);
					$this->session->set_flashdata('success', 'Post uğurla əlavə edildi');
					redirect('post');
				}
				else
				{
					$this->session->set_flashdata('error', 'Şəkil əlavəsi zamanı xəta baş verdi');
					redirect('post/create');
				}
			}
		}
	}

	public function uploadImage()
	{
		$config = array(
			'upload_path' => "./uploads/",
			'allowed_types' => "gif|jpg|png|jpeg|pdf",
			'overwrite' => TRUE,
			'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
		);
		$this->load->library('upload', $config);
		if($this->upload->do_upload('image'))
		{
			$data = array('upload_data' => $this->upload->data());
			$result = [
				'message' => true,
				'data' => $data['upload_data']['file_name']
			];
		}
		else
		{
			$result = [
				'message' => false,
				'data' => $this->upload->display_errors()
			];
		}
		return $result;
	}

}
