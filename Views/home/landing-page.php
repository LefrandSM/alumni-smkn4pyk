<?= $this->extend('/layout/template'); ?>

<?= $this->section('content'); ?>

<div class="jumbotron jumbotron-fluid d-flex">
    <div class="container text-center text-light">
        <h1 class="display-4">Selamat Datang di <div class="tebal">Smk Negeri 4 Payakumbuh</div>
        </h1>
        <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        <a class="btn btn-primary px-5" href="">Login</a>
    </div>
</div>
<div class="container my-5">
    <div class="row">
        <div class="col-lg-2 text-center">
            <img class="kepala-sekolah" src="/img/kepala-sekolah.jpg" alt="">
        </div>
        <div class="col-lg-10 d-flex">
            <div class="tulisan">
                <h1>Kepala Sekolah</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur at a doloremque laboriosam, consequatur aut veniam explicabo beatae quas repellat. Maiores assumenda aliquid, fuga non sit veritatis animi rem eaque.</p>
            </div>
        </div>
    </div>
</div>

<?= $this->endsection(); ?>