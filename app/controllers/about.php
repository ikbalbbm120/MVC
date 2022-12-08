<?php
class about extends controller {
    public function index($nama = 'ikbal', $pekerjaan = 'mahasiswa', $umur = 20)
    {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['judul'] = 'about me';
        $this->view('template/header',$data);
        $this->view('about/index', $data);
        $this->view('template/footer');
    }
    public function page()
    {
        $data['judul'] = 'page';
        $this->view('template/header',$data);
        $this->view('about/page');
        $this->view('template/footer');
    }
}