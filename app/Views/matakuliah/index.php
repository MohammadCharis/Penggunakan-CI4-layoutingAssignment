<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<h2>Data Mata Kuliah</h2>

<?php if (session()->getFlashdata('success')): ?>
    <p><?= esc(session()->getFlashdata('success')) ?></p>
<?php endif; ?>

<?php if (session()->getFlashdata('error')): ?>
    <p><?= esc(session()->getFlashdata('error')) ?></p>
<?php endif; ?>

<p>
    <a class="button button-primary" href="<?= site_url('mata-kuliah/create') ?>">
        <svg aria-hidden="true" viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M12 5v14M5 12h14" />
        </svg>
        Tambah Mata Kuliah
    </a>
</p>

<table>
    <thead>
        <tr>
            <th>No.</th>
            <th>Kode</th>
            <th>Mata Kuliah</th>
            <th>SKS</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php if (empty($matakuliah)): ?>
            <tr>
                <td colspan="5">Data mata kuliah belum tersedia.</td>
            </tr>
        <?php else: ?>
            <?php foreach ($matakuliah as $i => $mk): ?>
                <tr>
                    <td><?= $i + 1 ?></td>
                    <td><?= esc($mk['kode']) ?></td>
                    <td><?= esc($mk['nama']) ?></td>
                    <td><?= esc($mk['sks']) ?></td>
                    <td>
                        <a class="button button-edit" href="<?= site_url('mata-kuliah/edit/' . $mk['kode']) ?>">
                            <svg aria-hidden="true" viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 20h9" />
                                <path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L8 18l-4 1 1-4Z" />
                            </svg>
                            Edit
                        </a>
                        <form action="<?= site_url('mata-kuliah/delete/' . $mk['kode']) ?>" method="post" class="inline-form" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                            <?= csrf_field() ?>
                            <button class="button button-danger" type="submit">
                                <svg aria-hidden="true" viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M3 6h18M8 6V4h8v2M19 6l-1 14H6L5 6M10 11v5M14 11v5" />
                                </svg>
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </tbody>
</table>

<?= $this->endSection() ?>
