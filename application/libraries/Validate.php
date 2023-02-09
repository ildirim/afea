<?php
abstract class Validate
{
	public function __construct()
	{
        $this->ci =& get_instance();
        $this->ci->load->library('form_validation');
	}

	public function run()
	{
		return $this->ci->form_validation->run();
	}

	public function getErrors()
    {
        return json_encode(['status' => false, 'data' => $this->ci->form_validation->error_array()]);
    }

    abstract protected function validate();
}