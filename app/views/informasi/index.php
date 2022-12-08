<div class="container mt-3">

    <div class="row">
        <div class="col-lg-6">
            <?php flasher::flash();?>
        </div>
    </div>

    <div class="row mb-3">
    <div class="col-lg-6">
                <!-- Button trigger modal --> 
    <button type="button" class="btn btn-primary tomboltambahdata" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formmodal">
        tambah data mahasiswa
        </button>  
    </div>
    </div>

    <div class="row mb-3">
    <div class="col-lg-6">
    <form action="<?= BASEURL; ?>/informasi/cari" method="post">
        <div class="input-group">
        <input type="text" class="form-control" placeholder="cari mahasiswa" name="keyword" id="keyword" autocomplete="off">
        <button class="btn btn-primary" type="submit" id="tombolcari">cari</button>
    </div>
        </form>
        </div>
        </div>

    <div class="row">
        <div class="col-lg-6">
            <h3>daftar mahasiswa</h3>
            <ul class="list-group">
                <?php foreach($data['mhs'] as $mhs) : ?>
                <li class="list-group-item">
                    <div class='d-flex'>
                    <div class='flex-grow-1'>
                    <?= $mhs['nama']; ?>
                    <div class="float-end">
                        <a href="<?= BASEURL; ?>/informasi/detail/<?= $mhs['id'];?>" class="badge text-bg-primary float-right ml-1">detail</a>
                        <a href="#" class="badge text-bg-success float-right tampilmodalubah ml-1" data-bs-toggle="modal" data-bs-target="#formmodal" data-id="<?=$mhs['id']; ?>">ubah</a>
                        <a href="<?= BASEURL; ?>/informasi/hapus/<?= $mhs['id'];?>" class="badge text-bg-danger float-right ml-1" onclick="return confirm('apakah kamu yakin akan menghapus nya?')">hapus</a>
                </li> 
                <?php endforeach ?>           
        </div>
    </div>
</div>
    </div>


    
<!-- Modal -->
<div class="modal fade" id="formmodal" tabindex="-1" aria-labelledby="formmodal" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h1 class="modal-title fs-5" id="formmodallabel">tambah data mahasiswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        
        <form action="<?= BASEURL;?>/informasi/tambah" method="POST">
        <div class="hidden" name="id" id="id">
            <div class="mb-3">
                <label for="nama" class="form-label">nama</label>
                <input type="hidden" name="id" id="ids"> 
                <input type="text" class="form-control" id="nama" name="nama" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text"></div>
                </div>
                </div>
                <div class="mb-3">
                <label for="nrp" class="form-label">nrp</label>
                <input type="number" class="form-control" id="nrp" name="nrp" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-number"></div>
                </div>

                <div class="mb-3">
                <label for="email" class="form-label">email</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-email"></div>
                </div>

                <div class="form-group">
                    <label for="jurusan">jurusan</label>
                    <select class="form-control" id="jurusan" name="jurusan">
                        <option value="teknik informatika">teknik informatika</optipn>
                        <option value="teknik industri">teknik industri</optipn>
                        <option value="teknik pangan">teknik pangan</optipn>
                        <option value="teknik planologi">teknik planologi</optipn>
                        <option value="teknik pangan">teknik pangan</optipn>
                        <option value="teknik lingkungan">teknik lingkungan</optipn>
                </select>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">tambah data</button>
        </form>
    </div>
    </div>
    </div>
</div>