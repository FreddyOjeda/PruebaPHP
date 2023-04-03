<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Persona_model extends CI_Model {

		public function __construct()
		{
			parent::__construct();
			$this->load->database();
		}

		public function save($data){
            $this->db->insert("persona",$data);
        }
    
        public function getUsers(){
            $this->db->select("*");
            $this->db->from("persona");
            $results=$this->db->get();
			if ($results->num_rows() > 0){
				return $results->result();
			}else{
				return false;
			}
        }
    
        public function getUser($id){
            $this->db->select("u.id, u.Nombre, u.Correo, u.telefono");
            $this->db->from("persona u");
            $this->db->where("u.id",$id);
            $result=$this->db->get();
			if ($result->num_rows() > 0){
				return $result->result();
			}else{
				return false;
			}
        }
    
        public function update($data,$id){
            $this->db->where("id",$id);
            $this->db->update("persona",$data);
        }
    
        public function delete($id){
            $this->db->where("id",$id);
            $this->db->delete("persona");
        }

    }

?>
