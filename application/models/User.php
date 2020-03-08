<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

   function __construct()
    {
        parent::__construct();
    }

    function get_user_info($user_id) {
        $query = $this->db->query("SELECT * FROM users WHERE id = ?", array($user_id));
        return $query->row_array();
    }

}

?>