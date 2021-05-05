
    <div class="container mt-5 text-center">
        <div class="card shadow" style="width: 25rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['anggota']['nama']; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $data['anggota']['jurusan']; ?></h6>
            <p class="card-text"><?= $data['anggota']['posisi']; ?></p>
            <a href="<?= BASEURL; ?>/anggota/index.php" class="card-link">Kembali</a>
        </div>
        </div>
    </div>
