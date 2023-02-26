<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model extends CI_Model {
     public function insert($data)
    {
    $this->db->insert("prospect",$data);
    }

}
?>