<main class="mn-inner">
    <div class="row">
        <div class="col s12">
            <div class="page-title"><?= $title; ?></div>
        </div>
        <div class="col s12">
            <hr>
        </div>
        <div class="col s12">
            <!--             <a href="<?= base_url(); ?>admin/sub/Tambah" class="waves-effect waves-light btn indigo m-b-xs">Tambah Subkategori</a> -->
        </div>
        <div class="col s12 m12 l12">
            <div class="card">
                <div class="card-content">
                    <?php if ($this->session->flashdata('us')) : ?>
                        <div class="chip" style="background-color: #c5ffc5;">
                            Data user berhasil <?= $this->session->flashdata('us'); ?>
                            <i class="close material-icons">close</i>
                        </div>
                    <?php endif; ?>
                    <table id="example" class="display responsive-table datatable-example">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID User</th>
                                <th>Nama</th>
                                <th>Jenis Kel</th>
                                <th>Email</th>
                                <th>Telp</th>
                                <th>Verified</th>
                                <th>Tools</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 0;
                            foreach ($user as $s) :
                                $no++;
                                ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><?= $s['id']; ?></td>
                                    <td><?= $s['username']; ?></td>
                                    <td><?= $s['jenis_kel']; ?></td>
                                    <td><?= $s['email']; ?></td>
                                    <td><?= $s['telp']; ?></td>
                                    <td><?= $s['is_active']; ?></td>
                                    <td>
                                        <a href="<?= base_url(); ?>admin/user/hapus/<?= $s['id']; ?>" class="waves-effect waves-light btn red m-b-xs" onclick="return confirm('Hapus user?');" style="margin-left: 5px;padding-right: 15px;box-shadow: 0 black;height: 28px;width: 10px;padding-top: 0px;padding-bottom: 6px;padding-left: 8px;">
                                            <i class="Tiny material-icons">delete</i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>