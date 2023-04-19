<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Jenssegers\Blade\Blade;

class login extends CI_Controller {

	
	public function index()
	{
		
	$login_salah ='';
	
		if ($this->input->post()){
			$username =$this->input->post('username');
			$password =$this->input->post('password');
	
			if($username == 'fakhri' && $password == '123'){
				redirect('backend/Dashboard');
			}else{
				$login_salah = 'kombinasi username dan password salah'; 
		}				
			}			
		view('login', ['login_salah' =>$login_salah]);	
   }
}

