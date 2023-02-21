<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Linktree extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }
    public function index()
    {
        $data['title'] = 'Link Tree';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('url', 'URL', 'required');
        $this->form_validation->set_rules('kategori', 'id_kategori', 'required');
        if ($this->form_validation->run() == false) {
            $data['linkt'] = $this->M_users->getKategori();
            $data['kategori'] = $this->db->get('kategori')->result_array();
            $this->load->view('template/header', $data);
            $this->load->view('linktree/index', $data);
            $this->load->view('template/footer');
        } else {
            $data = [
                'id_kategori' => htmlspecialchars($this->input->post('kategori')),
                'url' => htmlspecialchars($this->input->post('url')),
                'user_id' => $this->session->userdata('id'),
            ];
            $this->db->insert('link', $data);
            $this->session->set_flashdata('flash', 'Di Tambahkan');
            redirect('linktree');
        }
    }
    public function update_linktree($id)
    {
        $this->form_validation->set_rules('url', 'URL', 'required');
        $this->form_validation->set_rules('kategori', 'id_kategori', 'required');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('flash-failed', 'Di Update');
            redirect('linktree');
        } else {
            $data = array(
                'id_kategori' => htmlspecialchars($this->input->post('kategori')),
                'url' => htmlspecialchars($this->input->post('url')),
            );
            $where = array(
                'id_link' => $id
            );
            $this->M_menu->update($where, 'link', $data);
            $this->session->set_flashdata('flash', 'Di Update');
            redirect('linktree');
        }
    }
    public function delete($id)
    {
        $where = array(
            'id_link' => $id
        );
        $this->M_menu->delete($where, 'link');
        $this->session->set_flashdata('flash', 'Di Hapus');
        redirect('linktree');
    }
}
