<?php
require_once(APPPATH . "libraries/Validate.php" );

class Register_validate extends Validate
{

    public function __construct()
    {
        parent::__construct();
    }
    
	public function validate()
	{
		$this->ci->form_validation->set_rules('name', 'Ad', 'required|trim|max_length[255]',
			[
				'required' => 'Ad tələb olunur'
			]);
		$this->ci->form_validation->set_rules('surname', 'Soyad', 'required|trim|max_length[255]',
			[
				'required' => 'Soyad tələb olunur'
			]);
		$this->ci->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[users.email]',
			[
				'required' => 'Email tələb olunur',
				'is_unique' => 'Email unikal olmalıdır'
			]);
		$this->ci->form_validation->set_rules('password', 'Şifrə', 'required|trim|min_length[6]|max_length[15]',
			[
				'required' => 'Şifrə tələb olunur'
			]);
	}
}