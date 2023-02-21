<div class="right_col" role="main">

    <div class="container-fluid">
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
        <div class="flash-failed" data-flashdata="<?= $this->session->flashdata('flash-failed'); ?>"></div>
        <?php if ($this->session->flashdata('flash')) : ?>
        <?php endif; ?>
        <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

        <div class="row justify-content-center">
            <div class="col-lg-11">
                <?php if (validation_errors()) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors() ?>
                    </div>
                <?php endif; ?>
                <div class="row justify-content-end mb-3 mr-3">
                    <button class="btn btn-primary" data-toggle="modal" data-target="#newSubMenuModal"> Add New Linktree</button>
                </div>

                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">

                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card-box table-responsive">
                                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Kategori</th>
                                                    <th>Icon</th>
                                                    <th>Url</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no = 1;
                                                foreach ($linkt as $link) :
                                                ?>
                                                    <tr>
                                                        <td><?= $no++; ?></td>
                                                        <td><?= $link['kategori']; ?></td>
                                                        <td><img class="image-responsive" src="<?= base_url() ?>assets/image/kategori/<?= $link['image']; ?>" width="50px" height="50px"></td>
                                                        <td><?= $link['url']; ?></td>
                                                        <td>
                                                            <a href="<?= base_url('linktree/delete/'); ?><?= $link['id_link'] ?>" class="tombol-hapus btn btn-danger btn-sm">
                                                                <i class="fas fa-trash"></i>
                                                            </a>
                                                            <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal<?= $link['id_link'] ?>"><i class="fa fa-edit"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <div class="modal fade" id="myModal<?= $link['id_link'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Linktree</h5>
                                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">×</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="<?= base_url() ?>linktree/update_linktree/<?= $link['id_link']; ?>" method="post">

                                                                        <div class="form-group">
                                                                            <select name="kategori" id="kategori" class="form-control">
                                                                                <option value="<?= $link['id_kategori'] ?>"><?= $link['kategori'] ?></option>
                                                                                <?php foreach ($kategori as $m) : ?>
                                                                                    <option value="<?= $m['id_kategori'] ?>"><?= $m['kategori']; ?></option>
                                                                                <?php endforeach; ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control" id="url" name="url" placeholder="Url" value="<?= $link['url']; ?>">
                                                                        </div>
                                                                        <input type="hidden" value="<?= $link['id_link']; ?>" name="id">
                                                                        <div class="modal-footer">
                                                                            <input class="btn btn-primary" type="submit" value="Update">
                                                                        </div>

                                                                    </form>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Modal -->

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="newSubMenuModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah LinkTree</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url() ?>linktree" method="post">
                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <select name="kategori" id="kategori" class="form-control">
                            <?php foreach ($kategori as $m) : ?>
                                <option value="<?= $m['id_kategori'] ?>"><?= $m['kategori']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="url">URL</label>
                        <input type="text" class="form-control" id="url" name="url" placeholder="Url" value="">
                    </div>

                    <div class="modal-footer">
                        <input class="btn btn-primary" type="submit" value="Update">
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>