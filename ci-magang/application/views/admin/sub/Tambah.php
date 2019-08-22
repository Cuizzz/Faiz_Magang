<main class="mn-inner">
    <div class="row">
        <div class="col s12">
            <div class="page-title">Form Tambah Subkategori</div>
        </div>
        <div class="col s12 m12 12">
            <div class="card">
                <div class="card-content">
                    <div class="row">
                        <form class="col s12" action="" method="post">
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="text" name="nama_sub" class="validate">
                                    <label for="nama_sub" class="">Nama Sub</label>
                                    <small style="color:red;"><?= form_error('nama_sub'); ?></small>
                                    <select class="js-states browser-default" name="id_kat" abindex="-1" style="width: 100%" id="basic">
                                        <optgroup label="Kategori" style="font:bold;">
                                            <?php foreach ($kategori as $s) : ?>
                                                <option value="<?= $s['id_kat']; ?>"><?= $s['nama_kat']; ?></option>
                                            <?php endforeach; ?>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" name="Tambah" class="waves-effect waves-light btn indigo m-b-xs">Tambah Data</button>
                            <a href="<?= base_url(); ?>admin/sub" class="waves-effect waves-red btn-flat m-b-xs">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>