<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<h2>Edit Mahasiswa</h2>

<?php if (session()->getFlashdata('error')): ?>
    <p><?= esc(session()->getFlashdata('error')) ?></p>
<?php endif; ?>

<form action="<?= site_url('mahasiswa/update/' . $mhs['id']) ?>" method="post">
    <?= csrf_field() ?>
    <div class="form-group">
        <label for="nim">NIM</label>
        <input class="form-control" id="nim" type="text" name="nim" value="<?= old('nim', $mhs['nim']) ?>" required>
    </div>
    <div class="form-group">
        <label for="nama">Nama Lengkap</label>
        <input class="form-control" id="nama" type="text" name="nama" value="<?= old('nama', $mhs['nama']) ?>" required>
    </div>
    <div class="form-group">
        <label for="prodi">Program Studi</label>
        <input class="form-control" id="prodi" type="text" name="prodi" value="<?= old('prodi', $mhs['prodi']) ?>" required>
    </div>
    <div class="form-actions">
        <button class="button button-primary" type="submit">
        <svg aria-hidden="true" viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2Z" />
            <path d="M17 21v-8H7v8M7 3v5h8" />
        </svg>
        Simpan Perubahan
    </button>
        <a class="button button-secondary" href="<?= site_url('mahasiswa') ?>">Batal</a>
    </div>
</form>

<?= $this->endSection() ?>
