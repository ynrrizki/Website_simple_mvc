<?php

    class Anggota extends Controller {
    
        public function index()
        {
            $data ['judul'] = "Data Anggota";
            $data ['anggota'] = $this->model('Anggota_model')->getAllAnggota();
            $this->view('template/header', $data);
            $this->view('anggota/index', $data);
            $this->view('template/footer');
        }    

        public function detail($id)
        {
            $data ['judul'] = "Detail Anggota";
            $data ['anggota'] = $this->model('Anggota_model')->getAnggotaById($id);
            $this->view('template/header', $data);
            $this->view('anggota/detail', $data);
            $this->view('template/footer');
        }

        public function tambah()
        {
            if( $this->model('Anggota_model')->tambahData($_POST) > 0){
                FLasher::setFlash('berhasil', 'ditambahkan', 'success');
                header('Location: ' . BASEURL . '/anggota');
                exit;
            } else{
                FLasher::setFlash('gagal', 'ditambahkan', 'danger');
                header('Location: ' . BASEURL . '/anggota');
                exit;
            }
        }

        public function hapus($id)
        {
            if( $this->model('Anggota_model')->hapusData($id) > 0){
                Flasher::setFlash('berhasil', 'dihapus', 'success');
                header('Location: ' . BASEURL . '/anggota');
                exit;
            } else{
                Flasher::setFlash('gagal', 'ditambahkan', 'danger');
                header('Location: ' . BASEURL . '/anggota');
                exit;
            }
        }

        public function getubah()
        {
            echo json_encode($this->model('Anggota_model')->getAnggotaById($_POST['id']));

        }

        public function ubah()
        {
            if( $this->model('Anggota_model')->ubahData($_POST) > 0){
                Flasher::setFlash('berhasil', 'diubah', 'success');
                header('Location: ' . BASEURL . '/anggota');
                exit;
            } else{
                Flasher::setFlash('gagal', 'diubah', 'danger');
                header('Location: ' . BASEURL . '/anggota');
                exit;
            }
        }

        public function cari()
        {
            $data ['judul'] = "Daftar Anggota";
            $data ['anggota'] = $this->model('Anggota_model')->cariDataAnggota();
            $this->view('templates/header', $data);
            $this->view('anggota/index', $data);
            $this->view('template/footer');
        }
    }