<?php

class Product extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get(){
        $query = $this->db->get('products');
        return $query->result();
    }

    public function find($id){
        return $this->db->get_where('products',array('id'=>$id))->row();
    }

    public function create($arr){
        $this->db->insert('products',$arr);
    }

    public function update($arr){
        $arr["updated_at"] = date("Y-m-d H:i:s");
        $this->db->replace('products', $arr);
    }

    public function delete($id){
        $this->db->delete('products',['id'=>$id]);
    }
}