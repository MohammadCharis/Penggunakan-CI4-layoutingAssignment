<?php
/**
 * @var array $dsn
 */
?>
<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<h2>Edit Dosen</h2>

<?php if (session()->getFlashdata('error')): ?>
    <p><?= esc(session()->getFlashdata('error')) ?></p>
<?php endif; ?>

<form action="<?= site_url('dosen/update/' . $dsn['nidn']) ?>" method="post">
    <?= csrf_field() ?>
    <div class="form-group">
        <label for="nidn">NIDN</label>
        <input class="form-control" id="nidn" type="text" name="nidn" value="<?= old('nidn', $dsn['nidn']) ?>" required>
    </div>
    <div class="form-group">
        <label for="nama">Nama Dosen</label>
        <input class="form-control" id="nama" type="text" name="nama" value="<?= old('nama', $dsn['nama']) ?>" required>
    </div>
    <div class="form-group">
        <label for="prodi">Program Studi</label>
        <input class="form-control" id="prodi" type="text" name="prodi" value="<?= old('prodi', $dsn['prodi']) ?>" required>
    </div>
    <div class="form-actions">
        <button class="button button-primary" type="submit">
            <svg aria-hidden="true" viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2Z" />
                <path d="M17 21v-8H7v8M7 3v5h8" />
            </svg>
            Simpan Perubahan
        </button>
        <a class="button button-secondary" href="<?= site_url('dosen') ?>">Batal</a>
    </div>
</form>

<?= $this->endSection() ?>
