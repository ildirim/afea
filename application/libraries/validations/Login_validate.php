<?php
require_once(APPPATH . "libraries/Validate.php" );

class Login_validate extends Validate
{

    public function __construct()
    {
        parent::__construct();
    }
    
	public function validate()
	{
		$this->ci->form_validation->set_rules('email', 'Email', 'required|trim',
			[
				'required' => 'Email tələb olunur',
			]);
		$this->ci->form_validation->set_rules('password', 'Şifrə', 'required|trim',
			[
				'required' => 'Şifrə tələb olunur'
			]);
	}
}