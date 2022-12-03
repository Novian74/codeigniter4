<?= $this->extend('template/frontend') ?>

<?= $this->section('depan') ?>

<div class="col">
    <h3><?= $judul ?> </h3>
</div>

<div class="row">
<?php foreach ($menu as $key => $value) : ?>
    <div class="card" style="width: 14rem; float:left; margin:10px;">
        <img style="height:150px ;" src="<?= base_url('/upload/' . $value['gambar'] . '') ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?= $value['menu'] ?></h5>
            <p class="card-text"><?= number_format($value['harga']) ?></p>
            <a href="<?= base_url('/cart/'.$value['idmenu'].'') ?>" class="btn btn-primary">Beli</a>
        </div>
    </div>
<?php endforeach ?>

<?= $pager->links('page', 'bootstrap') ?>

</div>

<?= $this->endsection() ?>