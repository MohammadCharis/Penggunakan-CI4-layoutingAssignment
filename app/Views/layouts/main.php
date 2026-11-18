<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title><?= esc($title ?? 'SIAKAD') ?></title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background: #f4f6f9;
        }

        header {
            background: #173b65;
            color: white;
            padding: 20px;
        }

        nav {
            background: #24588b;
            padding: 12px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-right: 20px;
        }

        main {
            padding: 25px;
            min-height: 350px;
            background: white;
            margin: 20px;
        }

        footer {
            background: #173b65;
            color: white;
            padding: 15px;
            text-align: center;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background: #e9eff6;
        }

        .button {
            box-sizing: border-box;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
            min-height: 34px;
            border: 0;
            border-radius: 6px;
            padding: 8px 12px;
            color: white;
            cursor: pointer;
            font-family: Arial, sans-serif;
            font-size: 14px;
            line-height: 18px;
            text-decoration: none;
            vertical-align: middle;
        }

        .button-primary {
            background: #2563eb;
        }

        .button-primary:hover {
            background: #1d4ed8;
        }

        .button-secondary {
            background: #64748b;
        }

        .button-secondary:hover {
            background: #475569;
        }

        .button-edit {
            background: #f59e0b;
        }

        .button-edit:hover {
            background: #d97706;
        }

        .button-danger {
            background: #dc2626;
        }

        .button-danger:hover {
            background: #b91c1c;
        }

        .inline-form {
            display: inline;
            margin-left: 6px;
        }

        .form-group {
            margin-bottom: 12px;
        }

        .form-group label {
            display: block;
            margin-bottom: 4px;
        }

        .form-control {
            box-sizing: border-box;
            width: 100%;
            max-width: 300px;
            padding: 8px;
            border: 1px solid #bbb;
            border-radius: 3px;
            font: inherit;
        }

        .form-actions {
            margin-top: 16px;
        }
    </style>
</head>

<body>

    <header>
        <h2>Sistem Informasi Akademik</h2>
        <p>Program Studi Sistem Informasi</p>
    </header>

    <nav>
        <a href="<?= site_url('/') ?>">Beranda</a>
        <a href="<?= site_url('mahasiswa') ?>">Mahasiswa</a>
        <a href="<?= site_url('dosen') ?>">Dosen</a>
        <a href="<?= site_url('mata-kuliah') ?>">Mata Kuliah</a>
        <a href="<?= site_url('tentang') ?>">Tentang</a>
    </nav>

    <main>
        <?= $this->renderSection('content') ?>
    </main>

    <footer>
        <p>Praktikum Pemrograman Web II - SIAKAD</p>
    </footer>

</body>
</html>
