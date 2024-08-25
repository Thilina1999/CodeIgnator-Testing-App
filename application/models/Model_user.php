<?php

class Model_user extends CI_Model {
    function insert_user($data) {
        $data['password'] = password_hash($data['password'], PASSWORD_BCRYPT);
        return $this->db->insert('user', $data);
    }
}