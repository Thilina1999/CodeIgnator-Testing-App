<?php

class Model_blog extends CI_Model
{
    function view_blog_all() {
        return $this->db->query("SELECT * FROM `article` ORDER BY blog_title ASC"); 
    }
    
    function view_blog($id){
        return $this->db->query("SELECT * FROM `article` WHERE user_id = $id ORDER BY blog_title ASC");
    }

    function insert_blog($data)
    {
        return $this->db->insert('article', $data);
    }

	function delete_blog($id) {
		return $this->db->query("DELETE FROM `article` WHERE id = $id");
	}

}
