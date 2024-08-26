<?php

class Model_user extends CI_Model
{
    function insert_user($data)
    {
        $data['password'] = sha1($data['password']);
        return $this->db->insert('user', $data);
    }

    function login_user($data)
    {
        // $query = $this->db
        //     ->select("*")
        //     ->from("user")
        //     ->where("email", $data["email"])
        //     ->get();

        // print_r($data['password']);
        // if ($query->num_rows() != 1) {
        //     print_r("issue1");
        //     return false;
        // }
        $data['password'] = sha1($data['password']);
        $query = $this->db->get_where('user', $data);

        if ($query->num_rows() > 0) {
            return TRUE;
        }

        return FALSE;
    }
}