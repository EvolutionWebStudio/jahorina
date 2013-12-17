<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Post Controller class
 *
 * @author Igor Golub
 * @class Post
 *
 */
class Post extends RE_Controller {

    /**
     * Main AO_Controller constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->controllerName = "post";
    }


    /**
     * Akcija vraca spisak svih stranica
     */
    public function action_index()
    {
        $this->set(array(
            "page_title" => "Vijesti",
            "meta_title" => "",
            "meta_description" => ""
        ));
        $this->load->model("mpost");
        $posts = $this->mpost->return_all_active_rows();

        $this->render(array(
            "name" => "vijesti",
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


    /**
     * Akcija vraca stranicu kontakt
     */
    public function action_kontakt()
    {
        $this->page_title = "Kontakt";
        $this->section_title = "Kontakt";


        $this->load->model("mpage");

        $page = $this->mpage->return_page(1);


        $this->render(array(
            "name" => "kontakt.php",
            "data" =>  array(
                "page" => $page
            )
        ));

    }

    /**
     * Akcija vraca stranicu rezervacija
     */

    public function action_rezervacija()
    {
        $this->page_title = "Rezervacija";
        $this->section_title = "Rezervacija";


        $this->load->model("mpage");
        $this->load->model("mpost");

        $page = $this->mpage->return_page(1);
        $params = $this->mpost->return_all_active_posts();


        $this->render(array(
            "name" => "rezervacija",
            "data" =>  array(
                "page" => $page,
                "params" => $params
            )
        ));

    }
    /**
     * akcija koja salje mail sa rezervacijom
     */
    public function action_rezervisi()
    {
        $message = "Destinacija: ". $this->input->post("destinacija")."</br>".
            "Destinacija precizno: ". $this->input->post("opis-destinacije")."</br>".
            "Datum dolaska: ". $this->input->post("datum-dolaska")."</br>".
            "Datum povratka: ". $this->input->post("datum-povratka")."</br>".
            "Broj odraslih: ". $this->input->post("broj-odraslih")."</br>".
            "Broj djece: ". $this->input->post("broj-djece")."</br>".
            "Kucni ljubimci: ". $this->input->post("ljubimci")."</br>".
            "Ime i prezime: ". $this->input->post("ime-i-prezime")."</br>".
            "Email: ". $this->input->post("email")."</br>".
            "Broj telefona: ". $this->input->post("telefon")."</br>".
            "Broj mobitela: ". $this->input->post("mobitel")."</br>".
            "Adresa: ". $this->input->post("adresa")."</br>".
            "Broj poste: ". $this->input->post("broj-poste")."</br>".
            "Grad: ". $this->input->post("grad")."</br>".
            "Drzava: ". $this->input->post("drzava")."</br>".
            "Komentar: ". $this->input->post("komentar")."</br>";

        $this->email->from($this->input->post("email"), $this->input->post("author"));
        $this->email->to('goolub.igor@gmail.com');

        $this->email->subject("rezervacija sa sajta");
        $this->email->message($message);

        $this->email->send();


    }

    /**
     * akcija koja salje mail sa rezervacijom
     */
    public function action_kontaktiraj()
    {

        $this->email->from($this->input->post("email"), $this->input->post("ime"));
        $this->email->to('goolub.igor@gmail.com');
        $this->email->subject("Kontakt sa sajta");
        $this->email->message($this->input->post("poruka"));

        if($this->email->send()) echo "sent";
        else echo "error";


    }


//Administracija-----------------------------------------------

    /**
     *Akcija novi clanak otvara formu za unos novog clanka
     **/

    public function action_add()
    {
        $this->check_login();
        $this->page_title = "Novi Clanak";
        $this->layout = "admin_vijesti_layout";

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
        $this->check_login();
        $this->load->model("mpost");

        $post = array(
            "title" => $this->input->post("naslov-clanka"),
            "content" => $this->input->post("sadrzaj-clanka"),
            "published" => $this->input->post("status"),
            "user_id" => $this->session->userdata('id'),
            "created_at" => date("Y-m-d"),
            "social" => $this->input->post("opis"),
        );
        $this->mpost->write_row($post);
        redirect(site_url("admin"));
    }
    /**
     *Akcija izmjeni stranicu
     **/
    public function action_edit($id)
    {
        $this->check_login();
        $this->page_title = "Izmjeni Stranicu";
        $this->layout = "admin_vijesti_layout";


        $this->load->model("mpost");

        $post = $this->mpost->return_row($id);

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
        $this->load->model("mpost");

        $post = array(
            "id" => $this->input->post("id"),
            "title" => $this->input->post("naslov-clanka"),
            "content" => $this->input->post("sadrzaj-clanka"),
            "published" => $this->input->post("status"),
            "created_at" => date("Y-m-d"),
            "social" => $this->input->post("opis"),
        );
        $this->mpost->update_row($post);
        redirect(site_url("admin"));
    }

    /**
     * Akcija delete calnak brise red u bazi odredjen id-om
     */
    public function action_delete($id)
    {
        $this->check_login();
        $this->load->model("mpost");


        $this->mpost->delete_row($id);
        redirect(site_url("admin"));
    }
}

/* End of file post.php */
/* Location: ./application/controllers/post.php */
