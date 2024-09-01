<?php

class Model_blog extends CI_Model
{
    function insert_blog($data)
    {
        return $this->db->insert('article', $data);
    }

}