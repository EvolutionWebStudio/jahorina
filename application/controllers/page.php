<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Page Controller class
 *
 * @author Igor Golub
 * @class Page
 *
 */
class Page extends RE_Controller {

    /**
     * Main AO_Controller constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->controllerName = "page";
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
        //$this->load->model("ad");
        //$params = $this->ad->return_rows();

        $this->render(array(
            "name" => "pocetna",
            "data" =>  array(

            )
        ));
    }

    /**
     * Akcija vraca stranicu istorija planine
     */
    public function action_istorija_planine()
    {
        $this->page_title = "Istorija planine";
        $this->controllerName = "page";

        $this->load->model("mpage");

        $page = $this->mpage->return_row(1);


        $this->render(array(
            "name" => "page",
            "data" =>  array(
                "page" => $page
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
 * Akcija vraca stranicu turizam
 */

    public function action_turizam()
    {
        $this->page_title = "Turizam";
        $this->load->model("mpage");
        $page = $this->mpage->return_row(2);

        $this->render(array(
            "name" => "turizam",
            "data" =>  array(
                "page" => $page,
            )
        ));

    }
    /**
     * Akcija vraca stranicu sport i rekreacija
     */

    public function action_sport_i_rekreacija()
    {
        $this->page_title = "Sport i rekreacija";
        $this->load->model("mpage");
        $page = $this->mpage->return_row(3);

        $this->render(array(
            "name" => "sport_i_rekreacija",
            "data" =>  array(
                "page" => $page,
            )
        ));

    }

    /**
     * Akcija vraca stranicu jahorina info
     */

    public function action_jahorina_info()
    {
        $this->page_title = "jahorina info";
        $this->load->model("mpage");
        $page = $this->mpage->return_row(4);

        $this->render(array(
            "name" => "jahorina_info",
            "data" =>  array(
                "page" => $page,
            )
        ));

    }

    public function action_kultura_i_umjetnost()
    {
        $this->page_title = "Kultura i Umjetnost";
        $this->load->model("mpage");
        $page = $this->mpage->return_row(5);

        $this->render(array(
            "name" => "page",
            "data" =>  array(
                "page" => $page,
            )
        ));

    }

    public function action_jahorina()
    {
        $this->page_title = "Jahorina";
        $this->load->model("mpage");
        $page = $this->mpage->return_row(6);

        $this->render(array(
            "name" => "page",
            "data" =>  array(
                "page" => $page,
            )
        ));

    }

    public  function  action_nova_godina()
    {
        $this->page_title = "Doček nove godine na Jahorini";
        $this->load->model("mnewyear");
        $posts = $this->mnewyear->return_published_rows();

        $this->render(array(
            "name" => "nova_godina",
            "data" => array(
                "posts" => $posts,
            )
        ));
    }

    public function action_sve_stranice()
    {
        $this->layout = "admin_layout";
        $this->page_title = "administracija stranica";
        $this->load->model("mpage");
        $page = $this->mpage->return_all_rows();

        $this->render(array(
            "name" => "administracija",
            "data" =>  array(
                "pages" => $page,
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
     *Akcija izmjeni stranicu
     **/
    public function action_edit($id)
    {
        $this->check_login();
        $this->page_title = "Izmjeni Stranicu";
        $this->layout = "admin_layout";


        $this->load->model("mpage");
        $page = $this->mpage->return_row($id);

        $this->render(array(
            "name" => "edit",
            "data" => array(
                "post" => $page
            )
        ));
    }


    /**
     * update stranicu
     */
    public function action_update()
    {
        $this->check_login();
        $this->load->model("mpage");

        $page = array(
            "id" => $this->input->post("id"),
            "title" => $this->input->post("naslov"),
            "content" => $this->input->post("sadrzaj"),
            "created_at" => date("Y-m-d"),
            "social" => $this->input->post("opis"),
        );
        $this->mpage->update_row($page);
        redirect(site_url("page/sve_stranice"));
    }
}

/* End of file page.php */
/* Location: ./application/controllers/page.php */
