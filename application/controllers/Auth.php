<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
    	parent::__construct();
		$this->load->model('user_model');
		$this->load->library('validations/login_validate');

	}

	public function index()
	{
		$this->load->view('login/index');
	}

	public function login()
	{
		if(isPost())
		{
			$this->login_validate->validate();
			if($this->login_validate->run() == FALSE)
			{
				$result = [
					'message' => false,
					'data' => $this->login_validate->getErrors()
				];
				redirect('auth');
			}
			else
			{
				$request = [
					'email' => postParam('email'),
					'password' =>  encrypt(postParam('password'))
				];
				$user = $this->user_model->getUserByEmailAndPassword($request);
				if($user)
				{
					$this->setUserInfoToSession($user);
					redirect(base_url('index.php/post'));
				}
				else
				{	
					$this->session->set_flashdata('error', 'İstifadəçi tapılmadı');
					redirect('auth');
				}
			}
		}
	}

	private function setUserInfoToSession($user)
	{
		$this->session->set_userdata('auth', true);
		$this->session->set_userdata('user', $user);
	}
}
