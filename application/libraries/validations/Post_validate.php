<?php
require_once(APPPATH . "libraries/Validate.php" );

class Post_validate extends Validate
{

    public function __construct()
    {
        parent::__construct();
    }
    
	public function validate()
	{
		$this->ci->form_validation->set_rules('title', 'Başlıq', 'required|trim',
			[
				'required' => 'Başlıq tələb olunur',
			]);
		$this->ci->form_validation->set_rules('content', 'Məzmun', 'required|trim',
			[
				'required' => 'Məzmun tələb olunur'
			]);
		$this->ci->form_validation->set_rules('tags', 'Etiketlər', 'required|trim',
			[
				'required' => 'Etiketlər tələb olunur'
			]);
	}
}