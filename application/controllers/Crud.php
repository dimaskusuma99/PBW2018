<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();      
        $this->load->model('m_data');
        $this->load->helper('url');
    }

    public function index(){
        $data['kontak'] = $this->m_data->tampil_data()->result();
        $this->load->view('crud/dashboard',$data);
    }
    
    public function tambah()
    {
        $this->load->view('crud/index', $data);
    }

    public function tambah_aksi(){
        $data = array(
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'subject' => $_POST['subject'],
            'message' => $_POST['message']
        );
        $result = $this->m_data->input_data('kontak',$data);
        
        redirect(base_url());
    }

    public function hapus($id){
        $where = array('id' => $id);
        $this->m_data->hapus_data($where,'kontak');
        redirect('crud/index');
    }

    public function edit($id){
        $where = array('id' => $id);
        $data['kontak'] = $this->m_data->edit_data($where,'kontak')->result();
        $this->load->view('crud/edit',$data);
    }

    public function update(){
        $id = $this->input->post('id');
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $subject = $this->input->post('subject');
        $message = $this->input->post('message');
 
        $data = array(
            'name' => $name,
            'email' => $email,
            'subject' => $subject,
            'message' => $message
        );
 
    $where = array(
        'id' => $id
    );
 
    $this->m_data->update_data($where,$data,'kontak');
    redirect('crud/');
    }

    public function download()
    {
        $data = $this->m_data->getData();
        $this->load->view('report', array('data'=> $data));
    }
    
}
