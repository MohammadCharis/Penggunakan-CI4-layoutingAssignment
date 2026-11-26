<?php
/**
 * @var array $mk
 */
?>
<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<h2>Edit Mata Kuliah</h2>

<?php if (session()->getFlashdata('error')): ?>
    <p><?= esc(session()->getFlashdata('error')) ?></p>
<?php endif; ?>

<form action="<?= site_url('mata-kuliah/update/' . $mk['kode']) ?>" method="post">
    <?= csrf_field() ?>
    <div class="form-group">
        <label for="kode">Kode</label>
        <input class="form-control" id="kode" type="text" name="kode" value="<?= old('kode', $mk['kode']) ?>" required>
    </div>
    <div class="form-group">
        <label for="nama">Mata Kuliah</label>
        <input class="form-control" id="nama" type="text" name="nama" value="<?= old('nama', $mk['nama']) ?>" required>
    </div>
    <div class="form-group">
        <label for="sks">SKS</label>
        <input class="form-control" id="sks" type="text" name="sks" value="<?= old('sks', $mk['sks']) ?>" required>
    </div>
    <div class="form-actions">
        <button class="button button-primary" type="submit">
            <svg aria-hidden="true" viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2Z" />
                <path d="M17 21v-8H7v8M7 3v5h8" />
            </svg>
            Simpan Perubahan
        </button>
        <a class="button button-secondary" href="<?= site_url('mata-kuliah') ?>">Batal</a>
    </div>
</form>

<?= $this->endSection() ?>
