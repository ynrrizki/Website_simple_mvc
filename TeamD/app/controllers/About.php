<?php

    class About extends Controller {
        
        public function index($nama = 'Yanuar', $umur = '16', $profesi = 'Software Engineer')
        {
            $data ['nama'] = $nama;
            $data ['umur'] = $umur;
            $data ['profesi'] = $profesi;
            $data ['judul'] = "About Me";
            
            $this->view('template/header', $data);
            $this->view('about/index', $data);
            $this->view('template/footer');
        }
    }