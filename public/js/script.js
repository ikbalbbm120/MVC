$(function() {

    $('.tomboltambahdata').on('click',function() {
        $('#formmodallabel').html('tambah data mahasiswa');
        $('.modal-footer button[type=submit]').html('tambah data');
        $('#ids').val("");

    })
    
    $('.tampilmodalubah').on('click',function() {

        const id = this.getAttribute('data-id');


        $('#formmodallabel').html('ubah data mahasiswa');
        $('.modal-footer button[type=submit]').html('ubah data');
        $('.modal-body form').attr('action','http://localhost/mvc/public/informasi/ubah')


        $.ajax({
            url: 'http://localhost/mvc/public/informasi/getubah',
    
            data: { id: id },
            method: 'post',
            datatype: 'json',
            success: function(data) {  
                var data = JSON.parse(data)

                $('#nama').val(data.nama);
                $('#nrp').val(data.nrp);
                $('#email').val(data.email);
                $('#jurusan').val(data.jurusan);
                $('#ids').val(data.id);
            }
        })
    
    });
    
    })