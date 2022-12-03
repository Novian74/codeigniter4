<?= $this->extend('template/frontend') ?>

<?= $this->section('depan') ?>

<div class="ms-3 col">
    <h3>Login Pelanggan</h3>
    <div class="mb-3">
        <div class="col">
            <?php
            if (!empty($info)) {
                echo '<div class="alert alert-danger" role="alert">';
                echo $info;
                echo '</div>';
            }
            ?>
        </div>
        <form action="" method="post">
            <div class="mb-3 w-50">
                <label for="" class="form-label">Email</label>
                <input type="email" name="email" required placeholder="Email" class="form-control">
            </div>
            <div class="mb-3 w-50">
                <label for="" class="form-label">Password</label>
                <input type="password" name="password" required placeholder="Password" class="form-control">
            </div>
            <div>
                <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
            </div>
        </form>
    </div>

</div>

<?= $this->endsection() ?>