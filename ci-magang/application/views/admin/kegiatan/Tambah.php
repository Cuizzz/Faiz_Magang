<main class="mn-inner">
    <div class="row">
        <div class="col s12">
            <div class="page-title">Form Tambah Kegiatan</div>
        </div>
        <div class="col s12 m12 12">
            <div class="card">
                <div class="card-content">
                    <div class="row">
                        <form class="col s12" action="" method="post">
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="text" name="nama_keg" class="validate">
                                    <label for="nama_sub" class="">Nama Kegiatan</label>
                                    <small style="color:red;"><?= form_error('nama_keg'); ?></small>
                                    <select class="js-states browser-default" name="id_sub" abindex="-1" style="width: 100%" id="basic">
                                        <optgroup label="Sub Kategori" style="font:bold;">
                                            <?php foreach ($sub_kategori as $ke) : ?>
                                                <option value="<?= $ke['id_sub']; ?>"><?= $ke['nama_sub']; ?></option>
                                            <?php endforeach; ?>
                                        </optgroup>
                                    </select>
                                    <br>
                                    <br>
                                    <select class="js-states browser-default" name="id_lok" abindex="-1" style="width: 100%" id="basic">
                                        <optgroup label="Lokasi Kegiatan" style="font:bold;">
                                            <?php foreach ($lokasi as $ke) : ?>
                                                <option value="<?= $ke['id_lok']; ?>"><?= $ke['nama_lok']; ?></option>
                                            <?php endforeach; ?>
                                        </optgroup>
                                    </select>
                                    <br><br>
                                </div>
                            </div>
                            <button type="submit" name="Tambah" class="waves-effect waves-light btn indigo m-b-xs">Tambah Data</button>
                            <a href="<?= base_url(); ?>admin/kegiatan" class="waves-effect waves-red btn-flat m-b-xs">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>