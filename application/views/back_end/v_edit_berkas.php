<?php 
    foreach ($data_berkas->result() as $_berkas) {
        $id_file = $_berkas->id_file;
        $keterangan = $_berkas->keterangan;
        $id_sekolah = $_berkas->id_sekolah;
        $file_lama = $_berkas->value;
    }
?>
 <div class="row">
                    <!-- Left sidebar -->
                    <div class="col-md-12">
                        <div class="white-box">
                                <a href="<?php echo base_url() ?>Berkas"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button></a>
                            <div class="row">
                                <div class="col-lg-10 col-md-9 col-sm-8 col-xs-12 mail_listing">
                                    <form enctype="multipart/form-data" action="<?php echo base_url() ?>Berkas/edit" method="post" class="form-horizontal row-fluid">
                                        <h3 class="box-title">Edit File Downlad</h3>
                                     <?php 
                                     // Kondisi Admin Sekolah
                                     if($id_sekolah_sess != '0'){ ?>   
                                        <div class="form-group">
                                            <input class="form-control" name="id_sekolah" type="hidden" value="<?php echo $id_sekolah ?>"> 
                                        </div> 
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
                                            <label for="exampleInputEmail1">Keterangan</label>
                                            <input class="form-control" name="keterangan" value="<?php echo $keterangan ?>" required oninvalid="this.setCustomValidity('Keterangan tidak boleh kosong')" oninput="setCustomValidity('')"> 
                                        </div>
                                        <div class="form-group">                     
                                            <label for="exampleInputEmail1">File</label>
                                            <div class="fallback">
                                                <input class="form-control" value="<?php echo $id_file ?>" type="hidden" name="id_file" >
                                                <input class="form-control" value="<?php echo $file_lama ?>" type="hidden" name="file_lama" >
                                                <input name="userfile" type="file" accept=".pdf, .doc, .docx, .xls, .xlsx"> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary"><i class="fa fa-pencil"></i> Edit</button>
                                        </div>                                        
                                    </form>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>