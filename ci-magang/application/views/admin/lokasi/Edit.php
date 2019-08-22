<main class="mn-inner">
    <div class="row">
        <div class="col s12">
            <div class="page-title">Form Edit Lokasi</div>
        </div>
        <div class="col s12 m12 12">
            <div class="card">
                <div class="card-content">
                    <div class="row">
                        <form class="col s12" action="" method="post">
                            <input type="hidden" name="id_lok" value="<?= $lokasi['id_lok']; ?>">
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="text" name="nama_lok" class="validate" value="<?= $lokasi['nama_lok']; ?> ">
                                    <label for="nama_lok" class="">Nama Lokasi</label>
                                    <small style="color:red;"><?= form_error('nama_lok'); ?></small>
                                </div>
                            </div>
                            <button type="submit" name="Edit" class="waves-effect waves-light btn indigo m-b-xs">Edit Data</button>
                            <a href="<?= base_url(); ?>admin/lokasi" class="waves-effect waves-red btn-flat m-b-xs">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>