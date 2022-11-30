<div class="container">
    <div class="row">
        <div class="col-6">
            <h3>Daftar Mahasiswa</h3>

            <?php foreach ($data['mhs'] as $mhs) : ?>
                <li><?= $mhs['Nama']; ?></li>
                <li><?= $mhs['NRP']; ?></li>
                <li><?= $mhs['Email']; ?></li>
                <li><?= $mhs['Jurusan']; ?></li>  
            <?php endforeach; ?>
        </div>
    </div>
</div>