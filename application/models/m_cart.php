<?php
class M_cart extends CI_Model{
    function get_all_produk(){
        return $this->db->get('cart');
    }
    
    public function add_cart($data,$table){
		$this->db->insert($table,$data); 
	}
}