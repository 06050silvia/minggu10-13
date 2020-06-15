<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model
{
 private $_table = "sekolah";
 
 public $id;
 public $nama;
 public $alamat;
 public $logo = "";
 
 public function rules()
 {
	return [
		['field' => 'nama',
		'label' => 'Nama',
		'rules' => 'required'],
 
		['field' => 'alamat',
		'label' => 'Alamat',
		'rules' => 'required'],
		
	];
 }
 
 public function getAll()
 {
	return $this->db->get($this->_table)->result();
 }

 public function getById($id) 
 {
	return $this->db->get_where($this->_table, ["id" => $id])->row();
 }
 
 public function save()
 {
	$post = $this->input->post();
	$this->id = uniqid();
	$this->nama = $post["name"];
	$this->alamat = $post["price"];
	$this->db->insert($this->_table, $this);
 }
 
 public function update()
 {
	$post = $this->input->post();
	$this->id = $post["id"];
	$this->nama = $post["name"];
	$this->alamat = $post["price"];
	$this->db->update($this->_table, $this, array('id' => $post['id']));
 }
 
 public function delete($id)
 {
 return $this->db->delete($this->_table, array("id" => $id));
 }
 
}
