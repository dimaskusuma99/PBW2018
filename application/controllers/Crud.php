<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
        $data['content'] = $this->db->get('kontak');
        
        $this->load->view('crud/dashboard', $data);
    }
    
    public function add()
    {
        
    }
    
    public function update( $id = NULL )
    {
        
    }
    
    public function delete( $id = NULL )
    {
        $this->db->where('id', $id);
        $this->db->delete('kontak');

        redirect('crud/dashboard','refresh');
    }
}
