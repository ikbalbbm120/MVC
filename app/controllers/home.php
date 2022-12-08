<?php
class home extends controller {
    public function index() 
    {
        $data['judul'] = 'home';
        $data['nama'] = $this->model('user_model')->getuser();
        $this->view('template/header',$data);
        $this->view('home/index',$data);
        $this->view('template/footer');
    }
}