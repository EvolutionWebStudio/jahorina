<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * User Controller class
 * 
 * @author Igor Golub
 * @class User
 * 
 */
class User extends RE_Controller {
	
	/**
	 * Funkcija koja provjerava da li je korisnik ulogovan.
	 */
	public function check_login()
	{
		if (!$this->session->userdata("prijavljen"))
		{
			redirect(site_url("admin"));
		}
		
	}
	
	public function action_index()
	{
		if (!$this->session->userdata("prijavljen"))
		{

			
			$this->section_title = "Prijava korisnika";
			$this->render(array(
			"name" => "login"
			));
		}
		else 
		{
			$this->layout = "admin_layout";
			$season = $this->config->item('season'); 
			$this->render(array(
			"name" => "administracija",
			"data" =>array(
				"season" => $season)
			));
		}
	}
	public function action_prijavi()
	{
		
		$password = md5($this->input->post("password"));
		$username = $this->input->post("username");
		if (strlen($username) < 4) 
			show_error("Korisnik mora imati vise od 4 znaka.");
		
		$this->load->model("muser");
		
		$korisnik = $this->muser->check_user($username, $password);
		
		if ($korisnik != NULL)
		{
			$podaci = array(
				"id" => $korisnik->id,
				"username" => $korisnik->username,
                "role" => $korisnik->role,
				"prijavljen" => true
			);
			
			$this->session->set_userdata($podaci);
			redirect(site_url("admin"));
		}
		else 
		{
			show_error("Korisnik ne postoji ili pogrešna šifra.");
		}
	}
	/**
	 * Odjavi se
	 */
	public function action_logout()
	{
		$this->session->sess_destroy();
		
		redirect(base_url());
	}
	

	
		
		
		
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
