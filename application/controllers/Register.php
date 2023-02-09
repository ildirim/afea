<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller
{
	public function __construct()
	{
    	parent::__construct();
		$this->load->model('user_model');
		$this->load->library('validations/register_validate');

	}
	
	public function index()
	{
		$this->load->view('register/index');
	}

	public function registerUser()
	{
		if(isPost())
		{
			$this->register_validate->validate();
			if($this->register_validate->run() == FALSE)
			{
				$this->session->set_flashdata('error', json_encode($this->register_validate->getErrors()));
				redirect('register');
			}
			else
			{
				$request = [
					'name' => postParam('name'),
					'surname' => postParam('surname'),
					'email' => postParam('email'),
					'password' =>  encrypt(postParam('password'))
				];
				$this->user_model->store($request);
				$this->session->set_flashdata('error', 'İstifadəçi uğurla qeydiyyatdan keçdi');
				redirect('auth');
			}
		}
	}
}
