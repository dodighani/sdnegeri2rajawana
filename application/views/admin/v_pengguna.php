<div id="content">


    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">


        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
        </button>




    </nav>

    <div class="container-fluid">


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo isset($breadcrumb) ? $breadcrumb : ''; ?></h6>
            </div>
            <div class="card-body">

                <div class="box-header">
                    <a href="" class="btn btn-success btn-flat" data-toggle="modal" data-target="#myModal"><span
                            class="fa fa-user-plus"></span> Add Pengguna</a>
                </div>

                <br>

                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Photo</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Jenis Kelamin</th>
                                <th>Password</th>
                                <th>Kontak</th>
                                <th>Level</th>
                                <th style="text-align:center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data->result_array() as $i) :
                       $pengguna_id=$i['pengguna_id'];
                       $pengguna_nama=$i['pengguna_nama'];
                       $pengguna_jenkel=$i['pengguna_jenkel'];
                       $pengguna_email=$i['pengguna_email'];
                       $pengguna_username=$i['pengguna_username'];
                       $pengguna_password=$i['pengguna_password'];
                       $pengguna_nohp=$i['pengguna_nohp'];
                       $pengguna_level=$i['pengguna_level'];
                       $pengguna_photo=$i['pengguna_photo'];
                    ?>
                            <tr>
                                <td><img width="40" height="40" class="img-circle"
                                        src="<?php echo base_url().'assets/images/'.$pengguna_photo;?>"></td>
                                <td><?php echo $pengguna_nama;?></td>
                                <td><?php echo $pengguna_email;?></td>
                                <?php if($pengguna_jenkel=='L'):?>
                                <td>Laki-Laki</td>
                                <?php else:?>
                                <td>Perempuan</td>
                                <?php endif;?>
                                <td><?php echo $pengguna_password;?></td>
                                <td><?php echo $pengguna_nohp;?></td>
                                <?php if($pengguna_level=='1'):?>
                                <td>Administrator</td>
                                <?php else:?>
                                <td>Author</td>
                                <?php endif;?>
                                <td style="text-align:right;">



                                    <a href="#" class="btn btn-danger btn-icon-split" data-toggle="modal"
                                        data-target="#ModalHapus<?php echo $pengguna_id;?>">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-trash"></i>
                                        </span>
                                        <span class="text">Hapus</span>
                                    </a>


                                </td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>





                </div>
            </div>
        </div>

    </div>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true"><span class="fa fa-close"></span></span></button>
                    <h4 class="modal-title" id="myModalLabel">Add Pengguna</h4>
                </div>
                <form class="form-horizontal" action="<?php echo base_url().'admin/pengguna/simpan_pengguna'?>"
                    method="post" enctype="multipart/form-data">
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Nama</label>
                            <div class="col-sm-7">
                                <input type="text" name="xnama" class="form-control" id="inputUserName"
                                    placeholder="Nama Lengkap" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-4 control-label">Email</label>
                            <div class="col-sm-7">
                                <input type="email" name="xemail" class="form-control" id="inputEmail3"
                                    placeholder="Email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Jenis Kelamin</label>
                            <div class="col-sm-7">
                                <div class="radio radio-info radio-inline">
                                    <input type="radio" id="inlineRadio1" value="L" name="xjenkel" checked>
                                    <label for="inlineRadio1"> Laki-Laki </label>
                                </div>
                                <div class="radio radio-info radio-inline">
                                    <input type="radio" id="inlineRadio1" value="P" name="xjenkel">
                                    <label for="inlineRadio2"> Perempuan </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Username</label>
                            <div class="col-sm-7">
                                <input type="text" name="xusername" class="form-control" id="inputUserName"
                                    placeholder="Username" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-4 control-label">Password</label>
                            <div class="col-sm-7">
                                <input type="password" name="xpassword" class="form-control" id="inputPassword3"
                                    placeholder="Password" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword4" class="col-sm-4 control-label">Ulangi Password</label>
                            <div class="col-sm-7">
                                <input type="password" name="xpassword2" class="form-control" id="inputPassword4"
                                    placeholder="Ulangi Password" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Kontak Person</label>
                            <div class="col-sm-7">
                                <input type="text" name="xkontak" class="form-control" id="inputUserName"
                                    placeholder="Kontak Person" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Level</label>
                            <div class="col-sm-7">
                                <select class="form-control" name="xlevel" required>
                                    <option value="1">Administrator</option>

                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Photo</label>
                            <div class="col-sm-7">
                                <input type="file" name="filefoto" required />
                            </div>
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <?php foreach ($data->result_array() as $i) :
              $pengguna_id=$i['pengguna_id'];
              $pengguna_nama=$i['pengguna_nama'];
              $pengguna_jenkel=$i['pengguna_jenkel'];
              $pengguna_email=$i['pengguna_email'];
              $pengguna_username=$i['pengguna_username'];
              $pengguna_password=$i['pengguna_password'];
              $pengguna_nohp=$i['pengguna_nohp'];
              $pengguna_level=$i['pengguna_level'];
              $pengguna_photo=$i['pengguna_photo'];
            ?>

    <?php endforeach;?>

    <?php foreach ($data->result_array() as $i) :
              $pengguna_id=$i['pengguna_id'];
              $pengguna_nama=$i['pengguna_nama'];
              $pengguna_jenkel=$i['pengguna_jenkel'];
              $pengguna_email=$i['pengguna_email'];
              $pengguna_username=$i['pengguna_username'];
              $pengguna_password=$i['pengguna_password'];
              $pengguna_nohp=$i['pengguna_nohp'];
              $pengguna_level=$i['pengguna_level'];
              $pengguna_photo=$i['pengguna_photo'];
            ?>
    <!--Modal Hapus Pengguna-->
    <div class="modal fade" id="ModalHapus<?php echo $pengguna_id;?>" tabindex="-1" role="dialog"
        aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true"><span class="fa fa-close"></span></span></button>
                    <h4 class="modal-title" id="myModalLabel">Hapus Pengguna</h4>
                </div>
                <form class="form-horizontal" action="<?php echo base_url().'admin/pengguna/hapus_pengguna'?>"
                    method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <input type="hidden" name="kode" value="<?php echo $pengguna_id;?>" />
                        <p>Apakah Anda yakin mau menghapus Pengguna <b><?php echo $pengguna_nama;?></b> ?</p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php endforeach;?>