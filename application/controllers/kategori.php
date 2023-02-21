<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Kategori';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('kategori', 'Kategori', 'required');

        if ($this->form_validation->run() == false) {
            $data['kategori'] = $this->db->get('kategori')->result();
            $this->load->view('template/header', $data);
            $this->load->view('kategori/index', $data);
            $this->load->view('template/footer');
        } else {
            $config['upload_path']          = './assets/image/kategori/';
            $config['allowed_types']        = 'jpg|png|jpeg';
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('image')) {
                $this->session->set_flashdata('flash-failed', 'Di Tambahkan');
                redirect('kategori');
            } else {
                $image = $this->upload->data();
                $image = $image['file_name'];

                $dataa = array(
                    'kategori' => $this->input->post('kategori', TRUE),
                    'image' => $image
                );
                $acc = $this->db->insert('kategori', $dataa);
                $this->session->set_flashdata('flash', 'Di Tambahkan');
                redirect('kategori');
            }
        }
    }

    public function edit($id)
    {
        $data['title'] = 'Edit ';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('kategori', 'Kategori', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('flash-failed', 'Di Tambahkan');
            redirect('kategori');
        } else {
            $kategori = $this->input->post('kategori');
            // Cek ada gambar yang akan di upload
            $upload_image = $_FILES['image']['name'];
            if ($upload_image) {
                $config['upload_path'] = './assets/image/kategori/';
                $config['allowed_types'] = 'jpeg|jpg|png';
                $config['encrypt_name'] = TRUE;

                $this->load->library('upload', $config);
                if ($this->upload->do_upload('image')) {
                    $old_image = $this->input->post('old');
                    unlink(FCPATH . 'assets/image/kategori/' . $old_image);
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo  $this->upload->display_errors();
                }
            }
            $this->db->set('kategori', $kategori);
            $this->db->where('id_kategori', $id);
            $this->db->update('kategori');
            $this->session->set_flashdata('flash', 'Di Update');
            redirect('kategori');
        }
    }

    public function delete($id)
    {
        $where = array(
            'id_kategori' => $id
        );
        $getdata = $this->db->get_where('kategori', ['id_kategori' => $id])->row_array();
        $delima = unlink(FCPATH . 'assets/image/kategori/' . $getdata['image']);
        if ($delima) {
            $this->db->where($where);
            $this->db->delete('kategori');
            $this->session->set_flashdata('flash', 'Di Hapus');
            redirect('kategori');
        } else {
            $this->session->set_flashdata('flash-failed', 'Di Hapus');
            redirect('kategori');
        }
    }
}
