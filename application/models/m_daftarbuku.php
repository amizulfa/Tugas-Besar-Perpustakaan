 <?php
    class M_daftarbuku extends CI_Model
    {
        public function get_data_buku()
        {
            $this->db->select('*');
            $this->db->from('buku');
            return $this->db->get();
        }
    }
