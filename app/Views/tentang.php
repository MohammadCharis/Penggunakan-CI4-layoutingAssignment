<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<h2>Tentang Aplikasi</h2>

<p>
    Sistem Informasi Akademik merupakan aplikasi
    sederhana untuk menampilkan informasi akademik.
</p>

<p>
    Aplikasi ini dikembangkan menggunakan
    framework CodeIgniter 4.
</p>

<h3>Biodata Pengembang</h3>

<table class="biodata-table">
    <tr>
        <th>Nama</th>
        <td>Moh. Charis Rozikin</td>
    </tr>
    <tr>
        <th>NIM</th>
        <td>2024 57201 034</td>
    </tr>
    <tr>
        <th>Program Studi</th>
        <td>Sistem Informasi</td>
    </tr>
    <tr>
        <th>Semester</th>
        <td>5</td>
    </tr>
</table>

<?= $this->endSection() ?>
