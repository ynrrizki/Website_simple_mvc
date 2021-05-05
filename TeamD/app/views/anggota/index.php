<div class="container mt-3">
    <!-- Flasher  -->
    <div class="row">
      <div class="col-lg-6">
        <?php Flasher::flash(); ?>
      </div>
    </div>
    <!--   end  -->


    <!-- Tambah Anggota -->
    <div class="row mb-3">
        <div class="col-lg-6">
            <button type="button" class="tombolTambahData btn btn-light" data-toggle="modal" data-target="#formModal">
                Tambah Anggota
            </button>
        </div>
    </div>
    <!--   end  -->

    <!-- searching -->
    <div class="row mb-3">
        <div class="col-lg-6">
          <form action="<?= BASEURL; ?>/anggota/cari" method="post">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Cari anggota..." name="keyword"
              id="keyword" aria-label="Recipient's username" aria-describedby="button-addon2"
              autocomplete="off">
            <div class="input-group-append">
              <button class="btn btn-outline-secondary" type="button" id="tombolCari">Cari</button>
            </div>
            </div>
          </form>
        </div>
    </div>
    <!-- end -->

    <!-- Searching -->

    <!-- Daftar Anggota -->
    <div class="row">
        <div class="col-lg-6">
        <div class="container shadow">
            <h3 class="text-light">Daftar Anggota Tim</h3>
            <?php  foreach ($data['anggota'] as $agt) :?>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item list-group-item"><?= $agt['nama']; ?>
                    <a href="<?= BASEURL; ?>/anggota/hapus/<?= $agt['id']; ?>" class="badge badge-danger float-right ml-1">hapus</a>
                    <a href="<?= BASEURL; ?>/anggota/ubah/<?= $agt['id']; ?>" class="tampilModalUbah badge badge-success float-right ml-1" data-toggle="modal" data-target="#formModal" data-id="<?= $agt['id'];?>">ubah</a>
                    <a href="<?= BASEURL; ?>/anggota/detail/<?= $agt['id']; ?>" class="badge badge-dark float-right ml-1">detail</a>
                    </li>
                </ul>
            <?php endforeach;?>
        </div>
        </div>
    </div>

  </div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
              <!-- Form Nama -->
          <form action="<?= BASEURL;?>/anggota/tambah" method="post">
            <input type="hidden" name="id" id="id">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama"
                name="nama">
            </div>
            <!--   end  -->

              <!-- Form Jurusan -->
            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <input type="text" class="form-control" id="jurusan"
                name="jurusan">
            </div>
              <!--   end  -->

              <!-- Form Posisi -->
            <div class="form-group">
                  <label for="posisi">Posisi</label>
                  <select class="form-control" id="posisi" name="posisi">
                    <option value ="Fullstack">Fullstack</option>
                    <option value ="Back End">Back End</option>
                    <option value ="Front End">Front End</option>
                    <option value ="System Analyst">System Analyst</option>
                    <option value ="Design">Design</option>
                  </select>
            </div>
              <!--   end  -->

      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Tambah</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>