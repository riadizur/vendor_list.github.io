<link href="<?php echo base_url(); ?>assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/vendor/select2/select2.min.css" rel="stylesheet">


  <div class="container-fluid">

    <h1 class="h3 mb-2 text-gray-800">Hasil Survey</h1>
    
    <div class="row">
      <div class="col-md-6">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Agenda</h6>
          </div>
          <div class="card-body">
            
            <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <label class="col-md-4 col-form-label">Pilih no. agenda</label>
                  <div class="col-sm-8">
                    <?php echo form_dropdown("cari_no_agenda",$list_no_agenda,'','id="cari_no_agenda" style="width:100%; " class="form-control select2me" '); ?>
                  </div>             
                </div>
                <button class="btn btn-primary btn-sm" id="cari_no_agenda_btn" type="submit" onclick="cari()">
                  <i class="fas fa-search"></i> Tampilkan
                </button>
              </div>
            </div>

          </div>
        </div>
      </div>

      <div class="col-xl-3 col-md-6 mb-4" id="file_pdf">
          
      </div>
      <div class="col-xl-3 col-md-6 mb-4" id="file_gambar_pdf">
          
      </div>
      
    </div>

    <form action="#" id="form_survey" enctype="multipart/form-data">

    <div class="row">
      <div class="col-md-12">
        <div class="card shadow mb-4">
          <div class="card-body">
            
            <div class="row">
                
              <div class="col-md-12">

                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="pills-1-tab" data-toggle="pill" href="#pills-1" role="tab" aria-controls="pills-home" aria-selected="true">
                      Data Permohonan & Suplai
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="pills-3-tab" data-toggle="pill" href="#pills-3" role="tab" aria-controls="pills-profile" aria-selected="false">
                      Layout & Foto Lokasi
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="pills-2-tab" data-toggle="pill" href="#pills-2" role="tab" aria-controls="pills-profile" aria-selected="false">
                      Daftar Material
                    </a>
                  </li>
                </ul>
                <hr>
                <div class="tab-content" id="pills-tabContent">
                  <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab">
                  
                    <div class="row">
                      <div class="col-md-12">
                        <h6 class="card-title"> <b>Data Permohonan</b> </h6>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-5 col-form-label">Tanggal mohon</label>
                          <div class="col-sm-7">
                            <input type="text" class="form-control form-control-sm" id="tgl_mohon" name="tgl_mohon" readonly>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-5 col-form-label">No. agenda</label>
                          <div class="col-sm-7">
                            <input type="text" class="form-control form-control-sm" id="no_agenda" name="no_agenda" readonly>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-5 col-form-label">Id Lang</label>
                          <div class="col-sm-7">
                            <input type="text" class="form-control form-control-sm" id="id_lang" name="id_lang" readonly>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-5 col-form-label">Nama langganan</label>
                          <div class="col-sm-7">
                            <input type="text" class="form-control form-control-sm" id="nama_lang" name="nama_lang" readonly>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-6">
                        
                        <div class="form-group row">
                          <label class="col-sm-5 col-form-label">Alamat</label>
                          <div class="col-sm-7">
                            <input type="text" class="form-control form-control-sm" id="alamat_lang" name="alamat_lang" readonly>
                          </div>
                        </div>
                        <div class="form-group row" id="input_tarif_daya_lama" style="display:none;">
                          <label class="col-sm-5 col-form-label">Tarif / Daya lama</label>
                          <div class="col-sm-2">
                              <input type="text" class="form-control form-control-sm" id="tarif_lama" name="tarif_lama" readonly>
                          </div>
                          <div class="col-sm-5">
                            <div class="input-group input-group-sm">
                              <input type="text" class="form-control form-control-sm mask_decimal" id="daya_lama" name="daya_lama" readonly>
                              <div class="input-group-append">
                                <span class="input-group-text">VA</span>
                              </div>
                            </div>
                              
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-5 col-form-label">Tarif / Daya</label>
                          <div class="col-sm-2">
                              <input type="text" class="form-control form-control-sm" id="tarif_baru" name="tarif_baru" readonly>
                          </div>
                          <div class="col-sm-5">
                            <div class="input-group input-group-sm">
                              <input type="text" class="form-control form-control-sm mask_decimal" id="daya_baru" name="daya_baru" readonly>
                              <div class="input-group-append">
                                <span class="input-group-text">VA</span>
                              </div>
                            </div>
                              
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-5 col-form-label">Jenis transaksi</label>
                          <div class="col-sm-7">
                            <input type="text" class="form-control form-control-sm" id="jns_transaksi" name="jns_transaksi" readonly>
                          </div> 
                        </div>
                      </div> 

                    </div>

                    <hr>

                    <div class="row">
                      <div class="col-md-12">
                        <h6 class="card-title"> <b>Data Sumber Suplai</b> </h6>
                      </div>
                      <div class="col-md-6">

                        <div class="form-group row">
                            <label class="col-sm-5 col-form-label">1. Nomor panel</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control form-control-sm" id="no_panel" name="no_panel" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-5 col-form-label">2. Trafo distribusi</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control form-control-sm" id="kd_trafo_dist" name="kd_trafo_dist" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-5 col-form-label">3. Gardu</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control form-control-sm" id="kd_gardu" name="kd_gardu" readonly>
                            </div>
                        </div>

                      </div>
                      <div class="col-md-6">

                        <div class="form-group row">
                            <label class="col-sm-5 col-form-label">4. Penyulang</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control form-control-sm" id="kd_penyulang" name="kd_penyulang" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-5 col-form-label">5. Trafo Gardu Induk</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control form-control-sm" id="kd_trafo_gi" name="kd_trafo_gi" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-5 col-form-label">6. Gardu Induk</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control form-control-sm" id="kd_gi" name="kd_gi" readonly>
                            </div>
                        </div>
                        
                      </div>
                    </div> 

                  </div>
                  <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab">

                    <div class="row">
                    
                      <div class="col-md-12">
                        
                        <div class="table-responsive">
                          <table class="table table-bordered table-hover" id="tabel_material" width="100%" cellspacing="0">
                            <thead>
                              <tr>
                                <th>No</th>
                                <th width="500px">Nama</th>
                                <th>Satuan</th>
                                <th>Volume</th>
                                <th>Jlh Material (Rp)</th>
                                <th>Jlh Jasa (Rp)</th>
                              </tr>
                            </thead>
                            <tfoot>
                              <tr>
                                <th></th>
                                <th colspan="3"></th>
                                <th></th>
                                <th></th>
                              </tr>
                              <tr class="table-secondary">
                                <th></th>
                                <th colspan="3">JUMLAH</th>
                                <th id="jumlah" colspan="2" class="text-right"></th>
                              </tr>
                              <tr>
                                <th></th>
                                <th colspan="3">ROK</th>
                                <th id="rok_25" colspan="2" class="text-right"></th>
                              </tr>
                              <tr class="table-secondary">
                                <th></th>
                                <th colspan="3">TOTAL</th>
                                <th id="total_all" colspan="2" class="text-right"></th>
                              </tr>
                            </tfoot>
                            <tbody>
                            </tbody>
                          </table>
                        </div>
        
                      </div>
        
                    </div>
                  
                  </div>
                  <div class="tab-pane fade" id="pills-3" role="tabpanel" aria-labelledby="pills-3-tab">
                    
                    <div class="row">

                      <div class="col-md-6 mb-3">
                        <label class="col-sm-12 col-form-label">
                          Gambar / Layout
                        </label>
                        <span class="col-sm-12" id="foto_layout">  
                        </span>
                      </div>

                      <div class="col-md-6 mb-3">
                        <label class="col-sm-12 col-form-label">
                          Foto Lokasi APP  
                        </label>
                        <span class="col-sm-12" id="foto_app">  
                        </span>
                      </div>
                      
                      <div class="col-md-6 mb-3">
                        <label class="col-sm-12 col-form-label">
                          Foto Panel Sumber 
                        </label>
                        <span class="col-sm-12" id="foto_panel">  
                        </span>
                      </div>

                      <div class="col-md-6 mb-3">
                        <label class="col-sm-12 col-form-label">
                          Foto Jalur Kabel 
                        </label>
                        <span class="col-sm-12" id="foto_jalur">  
                        </span>
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

    <?php
      if($this->session->flashdata('pesan')==TRUE):
      echo'<br><div class="alert alert-warning alert-dismissible fade show" role="alert">';
      echo $this->session->flashdata('pesan');
      echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
      endif;
    ?>
    </form> 

  </div>

<script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/sb-admin-2.min.js"></script>

<script src="<?php echo base_url(); ?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/select2/select2.min.js"></script>

<script src="<?php echo base_url(); ?>assets/vendor/jquery-inputmask/jquery.inputmask.bundle.min.js"></script>

<script>
  $(document).ready(function() {
    $('#dataTable').DataTable();

    if ($().select2) {
      $('.select2me').select2({
          placeholder: "Select",
          allowClear: true
      });
    }

    $(".mask_decimal").inputmask({
      'alias': 'decimal',
      'rightAlign': true,
      'groupSeparator': '.',
      'autoGroup': true
    });

    $("#simpan_btn").attr("disabled",true);
    $("#kembalikan_btn").attr("disabled",true);

  });

  function cari(){
    var a = document.getElementById('cari_no_agenda').value;
    var no_agendax = a;
     

    if (a != '') {
      $.ajax({
        url : "<?php echo site_url('approval/cari_no_agenda')?>/",
        type: "POST",
        data: {
          no_agenda : no_agendax,
        },
        dataType: "JSON",
        success: function(data)
        {
          $.map(data, function (obj) {
            $('#tgl_mohon').val(obj.TGL_MOHON);
            $('#no_agenda').val(obj.NO_AGENDA);
            $('#id_lang').val(obj.ID_LANG);
            $('#nama_lang').val(obj.NAMA_LANG);
            $('#jns_transaksi').val(obj.JNS_TRANSAKSI);                  

            data_admin(obj);

            $("#simpan_btn").attr("disabled",false);
            $("#kembalikan_btn").attr("disabled",false);
            $("#cari_no_agenda").attr("disabled",true);
            $("#cari_no_agenda_btn").attr("disabled",true);

          });

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Hubungi admin untuk akses data ini');
        }
      });
    }
    else {
      alert("Pastikan data telah diisi dengan lengkap terlebih dahulu!");
    }
  }

  function data_admin(obj){

      switch (obj.JNS_TRANSAKSI) {
            case "PASANG BARU": case "PENERANGAN SEMENTARA":
                $("#input_tarif_daya_lama").hide();

                $('#tarif_baru').val(obj.TARIF_BARU);
                $('#daya_baru').val(obj.DAYA_BARU);

                data_agenda_rab(obj.NO_AGENDA);
                daftar_material(obj.NO_AGENDA);
                dokumentasi(obj.NO_AGENDA);
                break;
      
            case "PERUBAHAN DAYA":
                $("#input_tarif_daya_lama").show();

                $('#tarif_baru').val(obj.TARIF_BARU);
                $('#daya_baru').val(obj.DAYA_BARU);
                $('#tarif_lama').val(obj.TARIF_LAMA);
                $('#daya_lama').val(obj.DAYA_LAMA);

                data_agenda_rab(obj.NO_AGENDA);
                daftar_material(obj.NO_AGENDA);
                dokumentasi(obj.NO_AGENDA);
                break;

            case "PENERANGAN SEMENTARA PERPANJANGAN": case "BERHENTI LANGGANAN": case "BERHENTI LANGGANAN SEMENTARA":
                $('#tarif_baru').val(obj.TARIF_BARU);
                $('#daya_baru').val(obj.DAYA_BARU);

                if(obj.JNS_TRANSAKSI == 'BERHENTI LANGGANAN' || obj.JNS_TRANSAKSI == 'BERHENTI LANGGANAN SEMENTARA' ){
                  $('#tarif_baru').val(obj.TARIF_LAMA);
                  $('#daya_baru').val(obj.DAYA_LAMA);
                }
                data_agenda_rab(obj.NO_AGENDA);
                dokumentasi(obj.NO_AGENDA);
                break;

            case "BALIK NAMA":
                $("#input_tarif_daya_lama").hide();

                $('#tarif_baru').val(obj.TARIF_BARU);
                $('#daya_baru').val(obj.DAYA_BARU);

                data_agenda_rab(obj.NO_AGENDA);
                dokumentasi(obj.NO_AGENDA);
                break;

            case "RELOKASI APP":
                $("#input_tarif_daya_lama").hide();

                $('#tarif_baru').val(obj.TARIF_BARU);
                $('#daya_baru').val(obj.DAYA_BARU);

                data_agenda_rab(obj.NO_AGENDA);
                daftar_material(obj.NO_AGENDA);
                dokumentasi(obj.NO_AGENDA);
                break;
      
            default:
                break;
      }
  }

  function data_agenda_rab(no_agendax){
      $.ajax({
        url : "<?php echo site_url('approval/cari_no_agenda_rab')?>/",
        type: "POST",
        data: {
          no_agenda : no_agendax,
        },
        dataType: "JSON",
        success: function(data)
        {
          $.map(data, function (obj) {
            $('#alamat_lang').val(obj.ALAMAT_LANG);
            
            $('#no_panel').val(obj.NO_PANEL);
            $('#kd_trafo_dist').val(obj.KD_TRAFO_DIST);
            $('#kd_gardu').val(obj.KD_GARDU);
            $('#kd_penyulang').val(obj.KD_PENYULANG); 
            $('#kd_trafo_gi').val(obj.KD_TRAFO_GI);
            $('#kd_gi').val(obj.KD_GI);   

            if (obj.TOTAL_AKHIR !== null) {
              var jumlah = obj.TOTAL_1.replace(/[\$,]/g, '')*1;
              $('#jumlah').html(jumlah.toLocaleString('en-US')); 

              var rok_15_1 = obj.ROK_15.replace(/[\$,]/g, '')*1;
              var ppn_10_1 = obj.PPN_10.replace(/[\$,]/g, '')*1;
              var rok_25 = rok_15_1 + ppn_10_1;
              $('#rok_25').html(rok_25.toLocaleString('en-US')); 

              var total_all = obj.TOTAL_AKHIR.replace(/[\$,]/g, '')*1;
              $('#total_all').html(total_all.toLocaleString('en-US')); 
            } else {
              $('#tabel_material').hide();
              $('#pills-2').html("Daftar material tidak ada");
            }

            

          });

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Hubungi admin untuk akses data ini');
        }
      });
  }

  function daftar_material(no_agendax){
    $('#tabel_material').DataTable({
      destroy: true,
      "processing": true,
      "serverSide": false,
      "order": [],
      "ajax": {
        "url": "<?php echo site_url('approval/tabel_material')?>",
        "type": "POST",
        "data": {
          no_agenda : no_agendax, 
        },
      },
      "autoWidth": false,
      "columnDefs": [
        {
          "targets": [ -1 ],
          "orderable": false,
          "className": "text-left",
          "targets": [0,1,2],
          "className": "text-right",
          "targets": [3,4,5],
        }
      ],
      "footerCallback": function ( row, data, start, end, display ) {
					var api = this.api(), data;

					// converting to interger to find total
					var intVal = function ( i ) {
							return typeof i === 'string' ?
									i.replace(/[\$,]/g, '')*1 :
									typeof i === 'number' ?
											i : 0;
					};

					// computing column Total of the complete result
					var tot_material = api
							.column( 4 )
							.data()
							.reduce( function (a, b) {
									return intVal(a) + intVal(b);
							}, 0 );
          var tot_jasa = api
							.column( 5 )
							.data()
							.reduce( function (a, b) {
									return intVal(a) + intVal(b);
							}, 0 );

					// Update footer by showing the total with the reference of the column index
					$( api.column( 1 ).footer() ).html('SUB JUMLAH');
					$( api.column( 4 ).footer() ).html(tot_material.toLocaleString('en-US'));
					$( api.column( 5 ).footer() ).html(tot_jasa.toLocaleString('en-US'));
			},
      
    });
  }

  function dokumentasi(no_agendax)
	{
    $.ajax({
      url : "<?php echo site_url('approval/dokumentasi')?>/",
      type: "POST",
      data: {
        no_agenda : no_agendax,
      },
      dataType: "JSON",
      success: function(data)
      {
        //$('#alamat_lang').val(obj.ALAMAT_LANG);
          
        $('#foto_layout').html(data.foto_layout); 
        $('#foto_app').html(data.foto_app); 
        $('#foto_panel').html(data.foto_panel); 
        $('#foto_jalur').html(data.foto_jalur); 

        file_pdf(no_agendax);

      },
      error: function (jqXHR, textStatus, errorThrown)
      {
          alert('Hubungi admin untuk akses data ini');
      }
    });		
  }
  
    function file_pdf(no_agendax)
	{
        $.ajax({
        url : "<?php echo site_url('approval/file_pdf')?>/",
        type: "POST",
        data: {
            no_agenda : no_agendax,
        },
        dataType: "JSON",
        success: function(data)
        {
            $('#file_pdf').html(data.file_pdf);
            $('#file_gambar_pdf').html(data.file_gambar_pdf);
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Hubungi admin untuk akses data ini');
        }
        });		
    }


</script>

