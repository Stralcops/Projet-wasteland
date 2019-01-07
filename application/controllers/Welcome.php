<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/nav');

		$this->load->view('accueil');
		// $this->load->view('view_affiche_pj');
		// $this->load->view('view_affiche_mob');
		$this->load->view('templates/footer');
	}
	public function create_user()
	{
		$data = array(
			'joueur_user'=> $this->input->post('joueur_user'),
        'nom_user' => $this->input->post('nom_user'),
        'hp_user' =>  $this->input->post('hp_user'),

);$this->db->insert('t_pj', $data);
}

	public function create_mob()
	{
		$data = array(

        'nom_mob' => $this->input->post('nom_mob'),
        'hp_mob' =>  $this->input->post('hp_mob'),
				'psy_mob'=> $this->input->post('psy_mob'),

);
$this->db->insert('t_mob', $data);
}

	public function affiche_pj()
	{
		$this->load->view('view_affiche_pj');
	}
	public function affiche_mob()
	{
		$this->load->view('view_affiche_mob');
	}
	public function combats()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/nav');
		$this->load->view('view_combat');
		$this->load->view('templates/footer');
	}
	public function delete()
	{
 		$id = $this->input->post('mob_id');

		$this->db->select('*');
		$this->db->from('t_mob');
		$this->db->where('mob_id', $id);
		$this->db->delete('t_mob');
	}
	public function update()
	{

	}
	public function affiche_resume()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/nav');
		$this->load->view('view_affiche_resume');
		$this->load->view('templates/footer');
	}
	public function connexion()
	{
		$this->load->view('templates/header');
		$this->load->view('forms/connexion');
		$this->load->view('templates/footer');

	}
	public function fichepj()
	{
		$this->load->view('templates/header');
		$this->load->view('addpj');
		$this->load->view('templates/footer');
	}
	public function update_user()
	{
		$data = array(
			"chp_user" => "chp_user",
		);
		$this->load->model("user_model");
		$this->user_model->update($data);
	}
}
