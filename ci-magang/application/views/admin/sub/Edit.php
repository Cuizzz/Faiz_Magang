<main class="mn-inner">
    <div class="row">
        <div class="col s12">
            <div class="page-title">Form Edit Subkategori</div>
        </div>
        <div class="col s12 m12 12">
            <div class="card">
                <div class="card-content">
                    <div class="row">
                        <form class="col s12" action="" method="post">
                            <input type="hidden" name="id_sub" value="<?= $sub_kategori['id_sub']; ?>">
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="text" name="nama_sub" class="validate" value="<?= $sub_kategori['nama_sub']; ?> ">
                                    <label for="nama_sub" class="">Nama Subkategori</label>
                                    <small style="color:red;"><?= form_error('nama_sub'); ?></small>
                                    <select class="js-states browser-default" name="id_kat" tabindex="-1" style="width: 100%" id="basic">
                                        <optgroup label="kategori">
                                            <?php foreach ($kategori as $s) : ?>
                                                <?php if ($s['id_kat'] == $sub_kategori['id_kat']) : ?>
                                                    <option value="<?= $s['id_kat']; ?>" selected><?= $s['nama_kat']; ?></option>
                                                <?php else : ?>
                                                    <option value="<?= $s['id_kat']; ?>"><?= $s['nama_kat']; ?></option>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" name="Edit" class="waves-effect waves-light btn indigo m-b-xs">Edit Data</button>
                            <a href="<?= base_url(); ?>admin/sub" class="waves-effect waves-red btn-flat m-b-xs">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>