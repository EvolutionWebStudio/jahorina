<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Newyear Controller class
 *
 * @author Igor Golub
 * @class Newyear
 *
 */
class Newyear extends RE_Controller {

    /**
     * Main AO_Controller constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->controllerName = "newyear";
    }


    /**
     * Akcija vraca spisak svih stranica
     */
    public function action_index()
    {
        $this->check_login();
        $this->set(array(
            "page_title" => "Docek nove godine",
            "meta_title" => "",
            "meta_description" => "",
            "layout" => "admin_layout",
        ));
        $this->load->model("mnewyear");
        $posts = $this->mnewyear->return_all_rows();

        $this->render(array(
            "name" => "index",
            "data" =>  array(
                "posts" => $posts,
            )
        ));
    }

    /**
     * Akcija vraca stranicu opsti uslovi
     */
    public function action_vijest($id)
    {
        $this->load->model("mpost");
        $post = $this->mpost->return_row($id);
        $this->page_title = $post->title;

        $this->render(array(
            "name" => "vijest",
            "data" =>  array(
                "post" => $post,
            )
        ));

    }






//Administracija-----------------------------------------------

    /**
     *Akcija novi clanak otvara formu za unos novog clanka
     **/

    public function action_add()
    {
        $this->page_title = "Nova Ponuda";
        $this->layout = "newyear_layout";

        $this->render(array(
            "name" => "new",
            "data" => array(
            )
        ));
    }
    /**
     * Akcija add calnak kupi podatke iz foreme metodom POST
     * i upisuje ih u bazu
     */
    public function action_save()
    {
        $this->load->model("mnewyear");

        $post = array(
            "name" => $this->input->post("naslov"),
            "description" => $this->input->post("sadrzaj-clanka"),
            "price" => $this->input->post("cijena"),
            "phone" => $this->input->post("telefon"),
            "mobile" => $this->input->post("mobilni"),
            "email" => $this->input->post("email"),
            "created_at" => date("Y-m-d"),
        );
        $this->mnewyear->write_row($post);
        redirect(base_url());
    }
    /**
     *Akcija izmjeni stranicu
     **/
    public function action_edit($id)
    {
        $this->check_login();
        $this->page_title = "Izmjeni Stranicu";
        $this->layout = "admin_layout";


        $this->load->model("mnewyear");
        $post = $this->mnewyear->return_row($id);

        $this->render(array(
            "name" => "edit",
            "data" => array(
                "post" => $post
            )
        ));
    }


    /**
     * update stranicu
     */
    public function action_update()
    {
        $this->check_login();
        $this->load->model("mnewyear");

        $post = array(
            "id" => $this->input->post("id"),
            "name" => $this->input->post("naslov"),
            "description" => $this->input->post("sadrzaj-clanka"),
            "price" => $this->input->post("cijena"),
            "phone" => $this->input->post("telefon"),
            "mobile" => $this->input->post("mobilni"),
            "email" => $this->input->post("email"),
            "published" => $this->input->post("status"),
            "created_at" => date("Y-m-d"),
        );
        $this->mnewyear->update_row($post);
        redirect(site_url("newyear"));
    }

    /**
     * Akcija delete calnak brise red u bazi odredjen id-om
     */
    public function action_delete($id)
    {
        $this->check_login();
        $this->load->model("mnewyear");


        $this->mnewyear->delete_row($id);
        redirect(site_url("newyear"));
    }
}

/* End of file post.php */
/* Location: ./application/controllers/post.php */
