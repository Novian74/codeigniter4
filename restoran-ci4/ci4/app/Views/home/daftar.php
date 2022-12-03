<?= $this->extend('template/frontend') ?>

<?= $this->section('depan') ?>

<div class="ms-3 col">
    <h3>Registrasi Pelanggan</h3>
    <div class="mb-3">
        <form action="" method="post">
            <div class="mb-3 w-50">
                <label for="" class="form-label">Pelanggan</label>
                <input type="text" name="pelanggan" required placeholder="Isi Pelanggan" class="form-control">
            </div>
            <div class="mb-3 w-50">
                <label for="" class="form-label">Alamat</label>
                <input type="text" name="alamat" required placeholder="Isi Alamat" class="form-control">
            </div>
            <div class="mb-3 w-50">
                <label for="" class="form-label">Nomor Telepon</label>
                <input type="text" name="telp" required placeholder="Isi Nomor" class="form-control">
            </div>
            <div class="mb-3 w-50">
                <label for="" class="form-label">Email</label>
                <input type="email" name="email" required placeholder="Email" class="form-control">
            </div>
            <div class="mb-3 w-50">
                <label for="" class="form-label">Password</label>
                <input type="password" name="password" required placeholder="Password" class="form-control">
            </div>
            <div class="mb-3 w-50">
                <label for="" class="form-label">Konfirmasi Password</label>
                <input type="password" name="konfirmasi" required placeholder="Password" class="form-control">
            </div>
            <div>
                <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
            </div>
        </form>
    </div>

</div>

<?= $this->endsection() ?>