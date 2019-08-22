<main class="mn-inner">
    <div class="row">
        <div class="col s12">
            <div class="page-title">Form Tambah Kategori</div>
        </div>
        <div class="col s12 m12 12">
            <div class="card">
                <div class="card-content">
                    <div class="row">
                        <form class="col s12" action="" method="post">
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="text" name="nama_kat" class="validate">
                                    <label for="nama_kat" class="">Nama Kategori</label>
                                    <small style="color:red;"><?= form_error('nama_kat'); ?></small>
                                </div>
                            </div>
                            <button type="submit" name="Tambah" class="waves-effect waves-light btn indigo m-b-xs">Tambah Data</button>
                            <a href="<?= base_url(); ?>admin/kategori" class="waves-effect waves-red btn-flat m-b-xs">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>