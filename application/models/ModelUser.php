<<<<<<< HEAD
<?php
class ModelUser extends CI_Model
{
 public function simpanData($data = null)
 {
 $this->db->insert('user', $data);
 }
 public function cekData($where = null)
 {
 return $this->db->get_where('user', $where);
 }
 public function getUserWhere($where = null)
 {
 return $this->db->get_where('user', $where);
 }
 public function cekUserAccess($where = null)
 {
 $this->db->select('*');
 $this->db->from('access_menu');
 $this->db->where($where);
 return $this->db->get();
 }
 public function getUserLimit()
 {
 $this->db->select('*');
 $this->db->from('user');
 $this->db->limit(10, 0);
 return $this->db->get();
 }
=======
<?php
class ModelUser extends CI_Model
{
 public function simpanData($data = null)
 {
 $this->db->insert('user', $data);
 }
 public function cekData($where = null)
 {
 return $this->db->get_where('user', $where);
 }
 public function getUserWhere($where = null)
 {
 return $this->db->get_where('user', $where);
 }
 public function cekUserAccess($where = null)
 {
 $this->db->select('*');
 $this->db->from('access_menu');
 $this->db->where($where);
 return $this->db->get();
 }
 public function getUserLimit()
 {
 $this->db->select('*');
 $this->db->from('user');
 $this->db->limit(10, 0);
 return $this->db->get();
 }
>>>>>>> 2bb8c60af7bdd22dd295522b4e7b6fbe436b8a35
}