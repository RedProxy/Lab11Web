<?= $this->include('template/admin_header'); ?>

<link rel="stylesheet" href="<?= base_url('/style.css'); ?>">
<div class="add">
    <div class="title">
        <h2>
            <?= $title; ?>
        </h2>
    </div>
    <form action="" method="POST">
        <p><input type="text" name="judul" value="<?= $data['judul']; ?>"></p>
        <p><textarea name="isi" cols="50" rows="10"><?= $data['isi']; ?></textarea></p>
        <p><input type="submit" value="Kirim" class="btn btn-large"></p>
    </form>
</div>

<?= $this->include('template/admin_footer'); ?>