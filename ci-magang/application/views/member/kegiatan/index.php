<main class="mn-inner">
    <div class="row">
        <div class="col s12">
            <div class="page-title">Daftar Kegiatan</div>
        </div>
        <div class="col s12">
            <hr>
        </div>
        <div class="col s12">
            <a href="<?= base_url(); ?>admin/kegiatan/Tambah" class="waves-effect waves-light btn indigo m-b-xs">Tambah Kegiatan</a>
        </div>
        <div class="col s12 m12 l12">
            <div class="card-content">
                <?php if ($this->session->flashdata('keg')) : ?>
                    <div class="chip" style="background-color: #c5ffc5;">
                        Data kegiatan berhasil <?= $this->session->flashdata('keg'); ?>
                        <i class="close material-icons">close</i>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col s12 m6 l3">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="<?= base_url('tmplt/assets/img/k/image5.jpg'); ?>" alt="">
                </div>
                <div class="card-content">
                    <span class="card-title activator">Card Reveal<i class="material-icons right">more_vert</i></span>
                </div>
                <div class="card-reveal">
                    <span class="card-title">Card Title<i class="material-icons right">close</i></span>
                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l3">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="<?= base_url('tmplt/assets/img/k/image1.jpg'); ?>" alt="">
                </div>
                <div class="card-content">
                    <span class="card-title activator">Card Reveal<i class="material-icons right">more_vert</i></span>
                </div>
                <div class="card-reveal">
                    <span class="card-title">Card Title<i class="material-icons right">close</i></span>
                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l3">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="<?= base_url('tmplt/assets/img/k/image2.jpg'); ?>" alt="">
                </div>
                <div class="card-content">
                    <span class="card-title activator">Card Reveal<i class="material-icons right">more_vert</i></span>
                </div>
                <div class="card-reveal">
                    <span class="card-title">Card Title<i class="material-icons right">close</i></span>
                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l3">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="<?= base_url('tmplt/assets/img/k/image3.jpg'); ?>" alt="">
                </div>
                <div class="card-content">
                    <span class="card-title activator">Card Reveal<i class="material-icons right">more_vert</i></span>
                </div>
                <div class="card-reveal">
                    <span class="card-title">Card Title<i class="material-icons right">close</i></span>
                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m6 l3">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="<?= base_url('tmplt/assets/img/k/image4.jpg'); ?>" alt="">
                </div>
                <div class="card-content">
                    <span class="card-title activator">Card Reveal<i class="material-icons right">more_vert</i></span>
                </div>
                <div class="card-reveal">
                    <span class="card-title">Card Title<i class="material-icons right">close</i></span>
                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l3">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="<?= base_url('tmplt/assets/img/k/image6.jpg'); ?>" alt="">
                </div>
                <div class="card-content">
                    <span class="card-title activator">Card Reveal<i class="material-icons right">more_vert</i></span>
                </div>
                <div class="card-reveal">
                    <span class="card-title">Card Title<i class="material-icons right">close</i></span>
                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l3">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="<?= base_url('tmplt/assets/img/k/image5.jpg'); ?>" alt="">
                </div>
                <div class="card-content">
                    <span class="card-title activator">Card Reveal<i class="material-icons right">more_vert</i></span>
                </div>
                <div class="card-reveal">
                    <span class="card-title">Card Title<i class="material-icons right">close</i></span>
                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                </div>
            </div>
        </div>
    </div>
</main>