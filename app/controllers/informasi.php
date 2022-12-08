<?php

class informasi extends controller {
    public function index()
    {
        $data['judul'] = 'daftar informasi';
        $data['mhs'] = $this->model('mahasiswa_model')->getAllmahasiswa();
        $this->view('template/header',$data);
        $this->view('informasi/index',$data);
        $this->view('template/footer');
    }
        public function detail($id)
        {
            $data['judul'] = 'detail informasi';
            $data['mhs'] = $this->model('mahasiswa_model')->getMahasiswaBYId($id);
            $this->view('template/header',$data);
            $this->view('informasi/detail',$data);
            $this->view('template/footer');
        }

        public function tambah()
        {
            if($this->model('mahasiswa_model')->tambahdatamahasiswa($_POST) > 0 ) {
                flasher::setflash('berhasil','ditambahkan','info');
                header('location: ' . BASEURL . '/informasi');
                exit;
            } else {
                flasher::setflash('gagal','ditambahkan','danger');
                header('location: ' . BASEURL . '/informasi');
                exit;
            }
        }

        public function hapus($id)
        {
            if($this->model('mahasiswa_model')->hapusdatamahasiswa($id) > 0 ) {
                flasher::setflash('berhasil','dihapus','info');
                header('location: ' . BASEURL . '/informasi');
                exit;
            } else {
                flasher::setflash('gagal','dihapus','danger');
                header('location: ' . BASEURL . '/informasi');
                exit;
            }
        }

        public function getubah()
        {
            
            echo json_encode($this->model('mahasiswa_model')->getMahasiswaBYId($_POST['id']));
        }

        public function ubah()
        {
            
            if($this->model('mahasiswa_model')->ubahdatamahasiswa($_POST) > 0 ) {
                flasher::setflash('berhasil','diubah','info');
                header('location: ' . BASEURL . '/informasi');
                exit;
            } else {
                flasher::setflash('gagal','diubah','danger');
                header('location: ' . BASEURL . '/informasi');
                exit;
            }
        }

        public function cari()
        {
            $data['judul'] = 'daftar informasi';
            $data['mhs'] = $this->model('mahasiswa_model')->caridatamahasiswa();
            $this->view('template/header',$data);
            $this->view('informasi/index',$data);
            $this->view('template/footer');
        }

    }