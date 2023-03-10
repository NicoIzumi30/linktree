<div class="right_col" role="main">

    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

        <div class="row">
            <div class="col-lg-8">

                <?= form_open_multipart('profile/edit'); ?>
                <div class="form-group row mb-3">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="email" name="email" value="<?= $user['email'] ?>" readonly>
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="name" class="col-sm-2 col-form-label">Full Name</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="name" name="name" value="<?= $user['name'] ?>">
                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="username" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="username" name="username" value="<?= $user['username'] ?>">
                        <?= form_error('username', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                    <div class="col-sm-7">
                        <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3"><?= $user['deskripsi'] ?></textarea>
                    </div>

                </div>
                <div class="form-group row mb-3">
                    <div class="col-sm-2">Picture</div>
                    <div class="col-sm-7">
                        <div class="row">
                            <div class="col-sm-3  mb-2 mt-2">
                                <img src="<?= base_url() ?>assets/image/profile/<?= $user['image'] ?>" class="" height="100px">
                            </div>
                            <div class="col-sm-9">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image" name="image">
                                    <label class="custom-file-label" for="image">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group row justify-content-end">
                    <div class="col-sm-4">
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </div>
                </form>

            </div>
        </div>
    </div>
</div>
<script src="<?= base_url() ?>assets/vendors/jquery/jquery.min.js"></script>


<script>
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
</script>