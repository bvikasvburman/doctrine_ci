<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$user = new Entities\User;
		
		//$d = new Doctrine();
		//print_r($d);
		//die;
		$user->setName('Vikas Burman');
		$user->setAge('26');
		
		//print_r($user);
		//die;
		$this->doctrine->em->persist($user);
		$this->doctrine->em->flush();
		
		
		$data['name'] = $user->getName();
		
		
		$this->load->view('welcome_message', $data);
	}
	
	public function createObjects()
	{
		// create a new user object
		$user = new Entities\User;
		//$user->setFirstName('Vikas');
		//$user->setLastName('Burman');
		//$this->doctrine->em->persist($user);
		//$this->doctrine->em->flush();
		
		
		echo "<b>Success!</b>";
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */