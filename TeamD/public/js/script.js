$( function() {

    $('.tombolTambahData').on('click', function() {
        $('#formModalLabel').html('Tambah Data Anggota');
        $('.modal-footer button[type=submit]').html('Tambah Data');
    });


    $('.tampilModalUbah').on('click', function() {

        $('#formModalLabel').html('Ubah Data Anggota');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/TeamD/public/anggota/ubah');

            const id = $(this).data('id');

            $.ajax({
                url: 'http://localhost/TeamD/public/anggota/getubah',
                data: {id : id},
                method: 'post',
                dataType: 'json',
                success: function(data) {
                    $('#nama').val(data.nama);
                    $('#jurusan').val(data.jurusan);
                    $('#posisi').val(data.posisi);
                    $('#id').val(data.id);
                }
            });
    });
});