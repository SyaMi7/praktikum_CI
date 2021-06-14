  
<?php 

class Pasien_model extends CI_Model {
    
    public $id, $nama, $kode, $gender, $tmp_lahir, $tgl_lahir, $email;


    public function jenisKelamin(){
        return $this->gender=="L" ? "Laki-Laki" : "Perempuan";
    }

    public function getAll(){
        $query = $this->db->get('pasien');
        return $query;
    }
    
    public function findById($id){
        $query = $this->db->get_where('pasien',['id'=>$id]);
        return $query->row();
    }
}
?>
