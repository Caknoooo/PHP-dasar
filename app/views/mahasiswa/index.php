<div class="container">
    <div class="row">
        <div class="col-6">
            <h3>Daftar Mahasiswa</h3>

            <ul class="list_group">
                <?php foreach ($data['mhs'] as $mhs) : ?>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <?= $mhs['Nama']; ?>
                        <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['ID']; ?>" class="badge bg-primary">Detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>