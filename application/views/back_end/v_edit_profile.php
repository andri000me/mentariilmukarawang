<?php 
    foreach ($data_profile->result() as $_profile) {
        $id_profil = $_profile->id_profil;
        $id_sekolah = $_profile->id_sekolah;
        $visi = $_profile->visi;
        $misi = $_profile->misi;
        $motto = $_profile->motto;
        $selayang_pandang = $_profile->selayang_pandang;
    }
?>
            
                <div class="row">
                    <!-- Left sidebar -->
                    <div class="col-md-12">
                        <div class="white-box">
                                <a href="<?php echo base_url() ?>Profile"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button></a>
                            <div class="row">
                                <div class="col-lg-10 col-md-9 col-sm-8 col-xs-12 mail_listing">
                                    <form method="post" action="<?php echo base_url() ?>Profile/edit">
                                        <h3 class="box-title">Edit Profile Sekolah</h3>

                                     <?php 
                                     // Kondisi Admin Sekolah
                                     if($id_sekolah_sess != '0'){ ?>   
                                            <input class="form-control" name="id_sekolah" type="hidden" value="<?php echo $id_sekolah ?>">  
                                     <?php 
                                     }
                                     // Kondisi Super Admin
                                     else{ ?>            
                                        <div class="form-group">                                 
                                                <label for="exampleInputEmail1">Sekolah</label>
                                                <select class="form-control" name="id_sekolah">
                                        <?php                                     
                                        foreach ($data_sekolah->result() as $_sekolah) { ?>
                                                <option value="<?php echo $_sekolah->id_sekolah ?>" <?php if($_sekolah->id_sekolah == $id_sekolah){echo" selected";} ?>><?php echo $_sekolah->nama ?></option>
                                        <?php 
                                        } 
                                        ?> 
                                                </select>   
                                        </div>

                                     <?php 
                                     } 
                                     ?>    
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Visi</label>
                                            <input type="hidden" class="form-control" value="<?= $id_profil ?>" name="id_profil" required> 
                                            <input type="text" class="form-control" value="<?= $visi ?>" name="visi" required> 
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Misi</label>
                                            <textarea class="textarea_editor form-control" name="misi" rows="9"  placeholder="" required oninvalid="this.setCustomValidity('Misi tidak boleh kosong')" oninput="setCustomValidity('')" ><?= $misi ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Motto</label>
                                            <input type="text" class="form-control" name="motto" value="<?= $motto ?>" required> 
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Selayang Pandang</label>
                                            <input type="text" class="form-control" value="<?= $selayang_pandang ?>" name="selayang_pandang" required> 
                                        </div>
                                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Edit</button>
                                        <button type="reset" class="btn btn-inverse waves-effect waves-light">Batal</button>
                                            
                                                                                 
                                    </form>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>