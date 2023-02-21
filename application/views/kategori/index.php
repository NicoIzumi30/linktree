<div class="right_col" role="main">
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800"><?= $title ?></h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
            <div class="flash-failed" data-flashdata="<?= $this->session->flashdata('flash-failed'); ?>"></div>
            <?php if ($this->session->flashdata('flash')) : ?>
            <?php endif; ?>
            <div class="row d-flex justify-content-end">
                <div class="col-md-3 mt-3 mr-5 text-right">
                    <button class="btn btn-info" data-toggle="modal" data-target="#add_city">Tambah Kategori</button>
                </div>
            </div>
            <div class="card-body">

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
                                                    <th width=10%>No</th>
                                                    <th>Kategori</th>
                                                    <th>Icon</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no = 1;
                                                foreach ($kategori as $c) :
                                                ?>
                                                    <tr>
                                                        <td><?= $no++ ?></td>
                                                        <td><?= $c->kategori ?></td>
                                                        <td><img class="image-responsive" src="<?= base_url() ?>assets/image/kategori/<?= $c->image ?>" width="50px" height="50px"></td>
                                                        <td>
                                                            <a href="<?= base_url('kategori/delete/'); ?><?= $c->id_kategori; ?>" class="tombol-hapus btn btn-danger btn-sm">
                                                                <i class="fas fa-trash"></i>
                                                            </a>
                                                            <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal<?= $c->id_kategori ?>"><i class="fa fa-edit"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <div class="modal fade" id="myModal<?= $c->id_kategori ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Kategori</h5>
                                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">×</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="<?= base_url() ?>kategori/edit/<?= $c->id_kategori ?>" method="post" enctype="multipart/form-data">
                                                                        <div class="form-group">
                                                                            <label for="kategori">Kategori</label>
                                                                            <input type="text" class="form-control" id="kategori" value="<?= $c->kategori ?>" name="kategori">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label>Image</label>
                                                                            <input type="file" name="image" class="form-control">
                                                                        </div>
                                                                        <input type="hidden" value="<?= $c->id_kategori ?>" name="id">
                                                                        <input type="hidden" id="old" name="old" value="<?= $c->image ?>">
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
    <div class="modal fade" id="add_city" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('kategori') ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <input type="text" class="form-control" id="kategori" name="kategori" placeholder="Nama Kategori">
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control" required>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Tambahkan</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>