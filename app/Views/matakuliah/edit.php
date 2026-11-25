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

<form
    action="<?= site_url('mata-kuliah/update/' . $mk['kode']) ?>"
    method="post"
>

    <?= csrf_field() ?>

    <p>
        <label>Kode</label><br>
        <input
            type="text"
            name="kode"
            value="<?= old('kode', $mk['kode']) ?>"
            required
        >
    </p>

    <p>
        <label>Mata Kuliah</label><br>
        <input
            type="text"
            name="nama"
            value="<?= old('nama', $mk['nama']) ?>"
            required
        >
    </p>

    <p>
        <label>SKS</label><br>
        <input
            type="text"
            name="sks"
            value="<?= old('sks', $mk['sks']) ?>"
            required
        >
    </p>

    <button type="submit">Simpan Perubahan</button>

    <a href="<?= site_url('mata-kuliah') ?>">Batal</a>

</form>

<?= $this->endSection() ?>
