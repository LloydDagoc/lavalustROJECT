<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class User_model extends Model {

    public function read(){
        return $this->db->table('ltmd_users')->get_all();
    }

    public function create($ltmd_last_name,  $ltmd_first_name,  $ltmd_email, $ltmd_gender,  $ltmd_address){
        $data = array(
            'ltmd_last_name' =>  $ltmd_last_name,
            'ltmd_first_name' =>  $ltmd_first_name,
            'ltmd_email'=>  $ltmd_email,
            'ltmd_gender'=> $ltmd_gender,
            'ltmd_address'=>  $ltmd_address
        );
       return $this->db->table('ltmd_users')->insert($data);
           
    }

    public function get_one($id){
        return $this->db->table('ltmd_users')->where('id', $id)->get();
    }

    public function update($ltmd_last_name,  $ltmd_first_name,  $ltmd_email, $ltmd_gender,  $ltmd_address, $id){

        $data = array(
            'ltmd_last_name' =>  $ltmd_last_name,
            'ltmd_first_name' =>  $ltmd_first_name,
            'ltmd_email'=>  $ltmd_email,
            'ltmd_gender'=> $ltmd_gender,
            'ltmd_address'=>  $ltmd_address
        );
       return $this->db->table('ltmd_users')->where('id', $id)->update($data);
    }

    public function delete($id){
        return $this->db->table('ltmd_users')->where('id', $id)->delete();
    }
   
    
}

?>
