<main class="mn-inner">
    <div class="row">
        <div class="col s12">
            <div class="page-title"><br></div>
        </div>
        <div class="col s12 m4 l2"></div>
        <div class="col s12 m4 l8">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Edit Profile</span><br>
                    <form action="<?= base_url('user/User/edit'); ?>" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="row">
                                <div class="input-field col s12">
                                    <input name="username" id="username" type="text" value="<?= $user['username']; ?>" class="validate">
                                    <label for="username">Name</label>
                                    <?= form_error('username', '<small style="color:red;">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <select class="js-states browser-default" name="jenis_kel" abindex="-1" style="width: 100%" id="basic">
                                        <optgroup label="Jenis Kelamin" style="font:bold;">
                                            <option><?= $user['jenis_kel']; ?></option>
                                            <option value="L">L</option>
                                            <option value="P">P</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input name="telp" id="telp" type="text" value="<?= $user['telp']; ?>" class="validate">
                                    <label for="telp">No Hp</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input name="email" id="email" type="text" value="<?= $user['email']; ?>" class="validate">
                                    <label for="email">Email</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s3">
                                    <div class="left">
                                        <img class="responsive-image circle" width="128px" src="<?= base_url('tmplt/assets/img/user/') . $user['image']; ?>">
                                    </div>
                                </div>
                                <div class="input-field col s9">
                                    <div class="file-field input-field">
                                        <div class="btn teal lighten-1">
                                            <span>File</span>
                                            <input type="file" name="image" id="image" multiple>
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" type="text" name="image" id="image" for="image" placeholder="Upload one or more files">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-action right-align m-t-sm">
                            <a href="<?= base_url('user/User/Detail'); ?>">Kembali</a>
                            <button type="submit" class="waves-effect waves-light btn indigo m-b-xs">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col s12 m4 l2"></div>
    </div>
</main>