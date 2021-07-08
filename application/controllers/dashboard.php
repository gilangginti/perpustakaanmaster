<?php

class Dashboard extends CI_Controller{
    public function index()
    {
    	$this->m_squrity->getSqurity();
    	$isi['content']		= 'v_home';
        $isi['judul']		= 'Dashboard';
        $this->load->model('m_dashboard');
        $isi['anggota']     = $this->m_dashboard->countAnggota();
        $isi['buku']     = $this->m_dashboard->countBuku();
        $isi['peminjam']     = $this->m_dashboard->countPeminjam();
        $isi['pengembalian']     = $this->m_dashboard->countPengembalian();
        $this->load->view('v_dashboard',$isi);
    }
}