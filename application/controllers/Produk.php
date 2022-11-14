<?php  
  
class Produk extends CI_Controller {  
   public function __construct()  
   {  
        parent::__construct();  
        $this->load->model('Produk_model'); 
        $this->load->library('form_validation'); 
   }  
     
 
   public function index()  
  
     {  
        
        $data['judul'] = 'Daftar Produk';  
        $data['produk'] = $this->Produk_model->getAllProduk();  
        if( $this->input->post('keyword') ) { 
            $data['produk'] = $this->Produk_model->cariDataProduk(); 
        } 
        
        $this->load->view('templates/header', $data);  
        $this->load->view('produk/index', $data);  
        $this->load->view('templates/footer');  
     }  
 
    public function tambah() 
    { 
        $data['judul'] = 'Form Tambah Data Produk'; 
 
        $this->form_validation->set_rules('nama produk', 'Nama Produk', 'required'); 
        $this->form_validation->set_rules('kode produk', 'Kode Produk', 'required|numeric'); 
        $this->form_validation->set_rules('harga produk', 'Harga Produk', 'required|numeric');  
 
        if( $this->form_validation->run() == FALSE ) { 
            $this->load->view('templates/header', $data); 
            $this->load->view('produk/tambah'); 
            $this->load->view('templates/footer'); 
         } 
        else { 
            $this->Mahasiswa_model->tambahDataProduk(); 
            $this->session->set_flashdata('flash', 'Ditambahkan'); 
            redirect('produk'); 
        } 
 
    } 
 
    public function hapus($id) 
    { 
        $this->Produk_model->hapusDataProduk($id); 
        $this->session->set_flashdata('flash', 'Dihapus'); 
        redirect('produk'); 
    } 
 
    public function detail($id) 
    { 
        $data['judul'] = 'Detail Data Produk'; 
        $data['produk'] = $this->Produk_model->getProdukById($id); 
        $this->load->view('templates/header', $data); 
        $this->load->view('produk/detail', $data); 
        $this->load->view('templates/footer'); 
    } 
 
 
    public function ubah($id) 
    { 
        $data['judul'] = 'Form Ubah Data Produk'; 
        $data['produk'] = $this->Produk_model->getProdukById($id); 
        $data['jurusan'] = ['Tas lokal', 'Tas import', 'Tas selempang', 'Tas ransel']; 

        $this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required'); 
        $this->form_validation->set_rules('kode_produk', 'Kode Produk', 'required|numeric'); 
        $this->form_validation->set_rules('harga_produk', 'Harga Produk', 'required|numeric'); 
        
 
        if( $this->form_validation->run() == FALSE ) { 
            $this->load->view('templates/header', $data); 
            $this->load->view('produk/ubah', $data); 
            $this->load->view('templates/footer'); 
         } 
        else { 
            $this->Produk_model->ubahDataProduk(); 
            $this->session->set_flashdata('flash', 'Diubah'); 
            redirect('produk'); 
        } 
 
    } 
}