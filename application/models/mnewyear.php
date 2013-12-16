<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * newyear Model klasa
 *
 * @author Igor Golub
 * @class newyear
 *
 */
class Mnewyear extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Vraca red odredjen id-om
     */
    public function return_row($id)
    {
        $query = $this->db
            ->select("*")
            ->where(array("id" => $id))
            ->get("newyear");

        if ($query->num_rows() > 0)
        {
            return $query->row();
        }
        else
        {
            return null;
        }
    }

    /**
     * Vraca sve redove iz jedne kategorije
     */
    public function return_published_rows()
    {
        $query = $this->db
            ->select("*")
            ->where(array("published" => 1))
            ->get("newyear");

        if ($query->num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            return null;
        }
    }



    public function return_topical_rows()
    {
        $query = $this->db
            ->select("*")
            ->where(array("aktuelno" => 1, "status" => 1))
            ->get("newyear");

        if ($query->num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            return null;
        }
    }

    /**
     * Vraca sve postove
     */
    public function return_all_active_rows()
    {
        $query = $this->db
            ->select("*")
            ->where(array("publised" => 1))
            ->get("newyear");

        if ($query->num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            return null;
        }
    }

    /**
     * Vraca sve postove
     */
    public function return_all_rows()
    {
        $query = $this->db
            ->select("*")
            ->get("newyear");

        if ($query->num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            return null;
        }
    }

    public function return_unique_rows($name)
    {
        $query = $this->db
            ->select($name)
            ->where(array("status" => 1))
            ->distinct($name)
            ->get("newyear");

        if ($query->num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            return null;
        }
    }

    /**
     * Upisuje post u bazu
     */
    public function write_row($post)
    {
        $this->db->insert("newyear",$post);
    }
    /**
     * Azurira post
     */
    public function update_row($post)
    {
        $this->db
            ->where('id', $post['id'])
            ->update("newyear", $post);
    }
    /**
     * Obrisi post
     */
    public function delete_row($id)
    {
        $this->db
            ->where('id', $id)
            ->delete("newyear");
    }

    public function filter(array $args)
    {
        $default = array(
            "aktuelno" => -1,
            "status" => -1,
            "category" => -1
        );
        // overwrite all the defaults with the arguments
        $args = array_merge($default, $args);

        $sql = "SELECT * FROM clanak WHERE";
        if ($args['aktuelno'] != -1) {$sql .=" aktuelno = ?"; $data[]=$args['aktuelno'];}
        if ($args['status'] != -1) { if($args['aktuelno'] != -1)$sql .=" AND"; $sql .=" status = ?"; $data[]=$args['status'];}
        if ($args['category'] != -1){ if($args['status'] != -1 or $args['aktuelno'] != -1)$sql .=" AND"; $sql .=" kategorija_id = ?"; $data[]=$args['category'];}


        $query = $this->db->query($sql, $data);

        if ($query->num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            return null;
        }
    }
}
/* End of file mpost.php */
/* Location: ./application/mmodels/mpost.php */
