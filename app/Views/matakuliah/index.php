<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<h2>Data Mata Kuliah</h2>

<table>
    <thead>
        <tr>
            <th>Kode</th>
            <th>Mata Kuliah</th>
            <th>SKS</th>
        </tr>
    </thead>
    <tbody>
        <?php if (empty($matakuliah)): ?>
            <tr>
                <td colspan="3">Data mata kuliah belum tersedia.</td>
            </tr>
        <?php else: ?>
            <?php foreach ($matakuliah as $i => $mk): ?>
                <tr>
                    <td><?= esc($mk['kode']) ?></td>
                    <td><?= esc($mk['nama']) ?></td>
                    <td><?= esc($mk['sks']) ?></td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </tbody>
</table>

<?= $this->endSection() ?>
