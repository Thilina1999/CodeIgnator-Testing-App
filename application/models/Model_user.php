<?php

class Model_user extends CI_Model
{
    function insert_user($data)
    {
        return $this->db->insert('user', $data);
    }

    function login_user($data)
    {
        $query = $this->db
            ->select("*")
            ->from("user")
            ->where("email", $data)
            ->get();

        return $query->result();
    }

}
