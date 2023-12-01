<!-- includes/header.php -->
<?php include('includes/header.php'); ?>
<?php include('includes/navbar.php'); ?>

<!-- Tampilan Delete -->
<div class="container">
    <h2>Konfirmasi Hapus</h2>
    <p>Anda yakin ingin menghapus kontak ini?</p>
    <form action="/contact/delete/<?= $contact['id']; ?>" method="post">
        <?= csrf_field() ?>
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit">Hapus</button>
        <a href="/contact">Batal</a>
    </form>
</div>

<!-- includes/scripts.php -->
<?php include('includes/scripts.php'); ?>
<?php include('includes/footer.php'); ?>
