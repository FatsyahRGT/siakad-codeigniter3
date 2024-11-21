<?php
class M_User extends CI_Model {
    public function get_user($username) {
        return $this->db->get_where('users', ['username' => $username])->row_array();
    }

    public function register($data) {
        $data['password'] = password_hash($data['password'], PASSWORD_BCRYPT);
        return $this->db->insert('users', $data);
    }

    public function check_login($username, $password) {
        $user = $this->get_user($username);
        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }
        return false;
    }
}
