
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h4 class="modal-title" id="titleModal_m" style="float: left;color: #fff">STATUS NIB</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
      </div>
      <div class="modal-body" id="contentModal_m" style="max-height: 70% !important;overflow-y: scroll;"><div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="Material-tab">
            <div class="tab-content">
                <div class="tab-pane fade show active">
                    <form id="fTracking" autocomplete="off" onsubmit="trackingNib('fTracking');return false;">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group label-floating is-empty">
                                    <!-- <label class="control-label" for="name">Cek Berdasarkan</label> -->
                                    <label for="check_npwp">
                                        <input type="radio" id="check_npwp" name="chkPassPort" onclick="ShowHideDiv()">
                                        Nomor Pokok Wajib Pajak 1
                                    </label>
                                    <label for="check_nib">
                                        <input type="radio" id="check_nib" name="chkPassPort" onclick="ShowHideDiv()">
                                        Nomor Induk Berusaha
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12" id="form_npwp" style="display: none;">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label" for="name">Nomor Pkok Wajib Pajak</label>
                                        <input class="form-control" id="NPWP" type="text" name="data[NPWP]" data-error="Masukkan nomor NPWP anda" style="background-color: #00000005;">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>  
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12" id="form_nib">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label" for="name">Nomor Induk Berusaha (NIB)</label>
                                        <input class="form-control" id="NIB" type="text" name="data[NIB]" data-error="Masukkan nomor NIB anda" style="background-color: #00000005;">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label" for="name">Tanggal NIB</label>
                                        <input class="form-control readonly" id="datetimepicker" type="text" name="data[TANGGAL_NIB]" data-error="Masukkan tanggal NIB" style="background-color: #00000005;">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12" style="text-align:center">
                                <img style="padding-top:10px;cursor: pointer;" id="img-captcha" class="img" src="https://oss.go.id/portal/home/keycode/0.9461477001247566" data-toggle="tooltip" data-original-title="Klik untuk merubah kode Key Code" width="auto" height="auto">
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <div class="form-group label-floating">
                                    <label class="control-label" for="name">Kode Captcha</label>
                                    <input class="form-control " id="captcha" type="text" name="data[CAPTCHA]" data-error="Masukkan kode captcha" style="background-color: #00000005;text-align: center;text-transform: uppercase" required="">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8" id="notif"><div class="alert alert-success" role="alert">Data Ditemukan</div></div>
                            <div class="col-md-4 col-sm-4 col-lg-4" style="text-align:right">
                                <input type="submit" class="btn btn-common" value="Submit">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="Material-tab">
            <div class="tab-content" style="min-height:60%">
                <div class="tab-pane fade show active">
                    <h5 class="section-title" style="font-size:1.2em">Informasi</h5>
                    <table class="table" id="infoNIB" cellpadding="10">
                        <tbody><tr>
                            <th width="40%">NIB
                            </th><td width="1%">:</td>
                            <td id="dtNib" width="59%">9120401890465</td>
                        </tr>
                        <tr>
                            <th>Nama Perusahaan / Nama Usaha
                            </th><td>:</td>
                            <td id="dtNama">PRATAMA INDOMITRA KONSULTAN</td>
                        </tr>
                        <tr>
                            <th>Jenis Perusahaan
                            </th><td>:</td>
                            <td id="dtJns">Perseroan Terbatas (PT)</td>
                        </tr>
                        <!-- <tr>
                            <th>Status Permohonan</td>
                            <td>:</td>
                            <td id="dtStatusPermohonan"></td>
                        </tr> -->
                        <tr>
                            <th>Status NIB
                            </th><td>:</td>
                            <td id="dtStatusNib">Aktif</td>
                        </tr>
                        <tr>
                            <th>Status NIK
                            </th><td>:</td>
                            <td id="status_nik">Tidak</td>
                        </tr>
                        <tr>
                            <th>Status Ekpor
                            </th><td>:</td>
                            <td id="status_ekspor">Tidak</td>
                        </tr>
                        <tr>
                            <th>Status Import
                            </th><td>:</td>
                            <td id="status_impor">Ada</td>
                        </tr>
                    </tbody></table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        var from_npwp =  document.getElementById("form_npwp");
        from_npwp.style.display = "none"; 
        $.datetimepicker.setDateFormatter('moment');
        $('#datetimepicker').datetimepicker({
            timepicker: false,
            format: 'DD-MM-YYYY',
            step: 5,
            yearStart: '2018',
            yearEnd: '2099',
            formatDate: 'DD-MM-YYYY',
            minDate: '01-07-2018'
        });
        captcha();
    });

    function ShowHideDiv() {
        var npwp = document.getElementById("check_npwp");
        var nib = document.getElementById("check_nib");
        var form_nib = document.getElementById("form_nib");
        var form_npwp = document.getElementById("form_npwp");
        if (nib.checked) {
            form_nib.style.display = "block";
            form_npwp.style.display = "none";
        } else {
            form_npwp.style.display = "block";
            form_nib.style.display = "none";
        }
    }
    
    $('.img').on('click', function() {
        captcha();
    });
    $(".readonly").keydown(function(e) {
        e.preventDefault();
    });

    function captcha() {
        document.getElementById("img-captcha").setAttribute("src", "https://oss.go.id/portal/" + "home/keycode/" + Math.random());
    }

    function trackingNib(formId) {
        var data = $('#' + formId).serialize();
        $.ajax({
            type: "POST",
            url: site_url + 'home/trackingNIB',
            data: data,
            beforeSend: function() {
                $('#dtNib').html('<img src="https://oss.go.id/portal/asset/images/loading.gif" alt="Loading" style="width:2em">');
                $('#dtNama').html('<img src="https://oss.go.id/portal/asset/images/loading.gif" alt="Loading" style="width:2em">');
                $('#dtJns').html('<img src="https://oss.go.id/portal/asset/images/loading.gif" alt="Loading" style="width:2em">');
                $('#dtStatusPermohonan').html('<img src="https://oss.go.id/portal/asset/images/loading.gif" alt="Loading" style="width:2em">');
                $('#dtStatusNib').html('<img src="https://oss.go.id/portal/asset/images/loading.gif" alt="Loading" style="width:2em">');
            },
            success: function(data) {

                var arrData = JSON.parse(data);
                if (arrData.status == 'OK') {
                    $('#dtNib').html(arrData.data.nib);
                    $('#dtNama').html(arrData.data.nama_perusahaan);
                    $('#dtJns').html(arrData.data.jenis_nib);
                    $('#dtStatusPermohonan').html(arrData.data.stat_izin);
                    $('#dtStatusNib').html(arrData.data.stat_nib);
                    $('#status_nik').html(arrData.data.kepabeanan);
                    $('#status_ekspor').html(arrData.data.ekspor);
                    $('#status_impor').html(arrData.data.impor);
                    $('#notif').html('<div class="alert alert-success" role="alert">' + arrData.message + '</div>');
                    captcha();
                } else {
                    $('#dtNib').html('-');
                    $('#dtNama').html('-');
                    $('#dtJns').html('-');
                    $('#dtStatusPermohonan').html('-');
                    $('#dtStatusNib').html('-');
                    $('#status_nik').html('-');
                    $('#status_ekspor').html('-');
                    $('#status_impor').html('-');
                    $('#notif').html('<div class="alert alert-danger" role="alert">' + arrData.message + '</div>');
                    captcha();
                }
            }
        });

    }
</script>
  