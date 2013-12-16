<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Home Controller class
 *
 * @author Igor Golub
 * @class Home
 *
 */
class Admin extends RE_Controller {

    /**
     * Main AO_Controller constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->controllerName = "admin";

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
            if($this->session->userdata('role') === 'admin'){
                $this->render(array(
                    "name" => "administracija",
                    "data" =>array(
                        )
                ));
            }else{
                $this->layout = "admin_vijesti_layout";
                $this->load->model("mpost");
                $posts = $this->mpost->return_special_rows($this->session->userdata('id'));
                $this->render(array(
                    "name" => "vijesti",
                    "data" =>array(
                        'posts' => $posts,
                    )
                ));
            }

        }
    }
    public function action_vijesti()
    {
        $this->layout = "admin_layout";
        $this->load->model("mpost");
        $posts = $this->mpost->return_all_rows();
        $this->render(array(
            "name" => "vijesti",
            "data" =>array(
                'posts' => $posts,
            )
        ));
    }


}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
