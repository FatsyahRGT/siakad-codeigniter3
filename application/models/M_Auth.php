<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Auth extends CI_Model {

    public function register($data) {
        $this->db->insert('user', $data);
        return $this->db->insert_id();
    }

    public function get_user_by_username($username) {
        return $this->db->get_where('user', ['username' => $username])->row_array();
    }
}
    