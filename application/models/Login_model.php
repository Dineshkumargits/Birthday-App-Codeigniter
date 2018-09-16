<?php
/**
 *
 */
class Login_model extends CI_Model
{

  function newUser($data){
    return $this->db->insert('scholar_graph_table',$data);
  }
  function exUser($username,$password){
    $this->db->select('*');
    $this->db->from('scholar_graph_table');
    $this->db->where('name',$username);
    $this->db->or_where('email',$username);
    $this->db->where('pass',$password);
    return $this->db->get()->result_array();
  }
}


 ?>
