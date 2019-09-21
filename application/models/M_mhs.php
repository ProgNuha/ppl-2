<?php
class M_mhs extends CI_Controller {

    public function get_data()
	{
        return $this->db->get('db_akademik')->result_array();
	}
}

?>