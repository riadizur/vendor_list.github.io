<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Jquery_models extends CI_Model
{
	private $temp = array();
	function __construct() 
	{
		parent::__construct();
    }
    public function ready(){
        // $script = "
        // <script>
        // $(document).ready(function() {
        //     $('.datepicker').datepicker({
        //         autoclose: true,
        //         format: 'yyyy-mm-dd',
        //         todayHighlight: true,
        //         orientation: 'top auto',
        //         todayBtn: true,
        //         todayHighlight: true,
        //     });
        //     $('.mask_decimal').inputmask({
        //         'alias': 'decimal',
        //         rightAlign: true,
        //         'groupSeparator': '.',
        //         'autoGroup': true
        //     });
        //     // $('.number').numeric({negatif:false});
        //     // $('.phone_number').numeric({ decimal : "-",  negative : false, scale: 4 });
        // });
        // </script>
        // ";
		// return $script;
    }
    public function register(){
        $modal_add='
        <div class="modal fade" id="add_pilihan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle" align="center"><font color="001E23" size="3"><strong>Tambahkan Pilihan</strong></font></h5>
                    </div>
                    <div class="modal-body">
                        <input type="text" id="dropdown_option" name="dropdown_option" class="form-control input-sm" placeholder="Masukkan Pilihan Disini...">
                    </div>
                    <div class="modal-footer">
                        <div id=nama_dropdown></div>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="button" data-dismiss="modal" onclick="add_pilihan($(\'#nama_dropdown\').val());" class="btn btn-primary">Tambah</button>
                    </div>
                </div>
            </div>
        </div>';
        $script = $modal_add . "
        <script>
        function add_berkas_ijin(){
        }
		function removeOptions(selectbox) {
			var i;
			for (i = selectbox.options.length - 1; i >= 0; i--) {
				selectbox.remove(i);
			}
		}
		function check(db,form){
			var baseUrl = '" . base_url() . "register/check';
			var dropdown = [];
			$.ajax({
				url: baseUrl,
				type: 'POST',
				dataType: 'json',
				data: {
					db : db
				},
				success: function(datas) {
					$.map(datas, function(obj) {
						if(obj.kbli=='1' || obj.grade=='1'){
							$('#'+form[0]).show();
							$('#button_add_berkas_2').show();
							$('#button_add_berkas_1').hide();
							if(obj.grade=='1'){
								$('#'+form[1]).removeClass();
								$('#'+form[1]).addClass('col-md-6');
								$('#'+form[2]).show();
								$('#kolom_grade').show();
								$('#kolom_grade').prop('disabled', false);
								$('#modal_usaha').show();
								$('#modal_usaha').prop('disabled', false);
								$('#form_modal_usaha').show();
							}else{
								$('#'+form[1]).removeClass();
								$('#'+form[1]).addClass('col-md-11');
								$('#'+form[2]).hide();
								$('#kolom_grade').hide();
								$('#kolom_grade').prop('disabled', true);
								$('#modal_usaha').hide();
								$('#modal_usaha').prop('disabled', true);
								$('#form_modal_usaha').hide();
								$('#modal_usaha_berkas_ijin').val('');
							}
						}else{
							$('#'+form[0]).hide();
							$('#button_add_berkas_1').show();
							$('#button_add_berkas_2').hide();
						}
					});
				}
			});
        }
        function load_value(id,tabel,data,where,adder,lainnya,placeholder) {
            var baseUrl = '" . base_url() . "register/list_dropdown';
            var val = '';
            $.ajax({
                url: baseUrl,
                type: 'POST',
                dataType: 'json',
                data: {
                    tabel : tabel,
                    data : data,
                    where : where,
                    adder : adder,
                    lainnya : lainnya,
                    placeholder : placeholder
                },
                success: function(datas) {
                    var i=0;
                    $.map(datas, function(obj) {
                        if(i>1){
                            val+=obj.id+obj.uraian;
                        }
                        i++;
                        return val;
                    });
                    $('#' + id).val(val);
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert('Ups Ada sedikit kesalahan.. Segera Hubungi Administrator ');
                }
            });
		} 
        function add_pilihan(nama_dropdown){
            if($('#dropdown_option').val()!=''){
                var newOption = new Option($('#dropdown_option').val(), 'OPL', false, false);
                $('#'+nama_dropdown).append(newOption).trigger('change');
                $('#nama_dropdown').val('');
            }
        }
		function list_dropdown(nama_dropdown,affected=[],tabel,data,where,adder,lainnya,placeholder) {
            var value = where.split('=');
            var add = '\''+'add'+'\'';
            if(value[1]==add){
                $('#nama_dropdown').val(nama_dropdown);
                $('#add_pilihan').modal('show');
            }else{
                removeOptions(document.getElementById(nama_dropdown));
                $.each(affected, function(index, value){
                    removeOptions(document.getElementById(value));
                });
                var baseUrl = '" . base_url() . "register/list_dropdown';
                var dropdown = [];
                $.ajax({
                    url: baseUrl,
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        tabel : tabel,
                        data : data,
                        where : where,
                        adder : adder,
                        lainnya : lainnya,
                        placeholder : placeholder
                    },
                    success: function(datas) {
                        $.map(datas, function(obj) {
                            dropdown.push({
                                'id': obj.id,
                                'text': obj.uraian
                            });
                            return dropdown;
                        });
                        $('#' + nama_dropdown).select2({
                            placeholder: 'pilih',
                            data: dropdown,
                            width: '100%'
                        });
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert('Ups Ada sedikit kesalahan.. Segera Hubungi Administrator ');
                    }
                });
            }
		}
		function list_dropdownx(nama_dropdown,affected=[],tabel,data,where,adder,lainnya,placeholder) {
			removeOptions(document.getElementById(nama_dropdown));
			$.each(affected, function(index, value){
				removeOptions(document.getElementById(value));
			});
			var baseUrl = '" . base_url() . "register/list_dropdownx';
			var dropdown = [];
			$.ajax({
				url: baseUrl,
				type: 'POST',
				dataType: 'json',
				data: {
					tabel : tabel,
					data : data,
					where : where,
					adder : adder,
					lainnya : lainnya,
					placeholder : placeholder
				},
				success: function(datas) {
					$.map(datas, function(obj) {
						dropdown.push({
							'id': obj.id,
							'text': obj.uraian
						});
						return dropdown;
					});
					$('#' + nama_dropdown).select2({
						placeholder: 'pilih',
						data: dropdown,
						width: '100%'
					});
				},
				error: function(xhr, ajaxOptions, thrownError) {
					alert('Ups Ada sedikit kesalahan.. Segera Hubungi Administrator ');
				}
			});
		}
		// function list_dropdown_query(nama_dropdown,query){
		// 	removeOptions(document.getElementById(nama_dropdown));
		// 	// $.each(nama_dropdown, function(index, value){
		// 	// 	removeOptions(document.getElementById(value));
		// 	// });
		// 	var baseUrl = '" . base_url() . "register/list_dropdown_query';
		// 	var dropdown = [];
		// 	alert(query);
		// 	$.ajax({
		// 		url: baseUrl,
		// 		type: 'POST',
		// 		dataType: 'json',
		// 		data: {
		// 			query : query
		// 		},
		// 		success: function(datas) {
		// 			$.map(datas, function(obj) {
		// 				dropdown.push({
		// 					'id': obj.id,
		// 					'text': obj.uraian
		// 				});
		// 				return dropdown;
		// 			});
		// 			$('#' + nama_dropdown).select2({
		// 				placeholder: 'pilih',
		// 				data: dropdown,
		// 				width: '100%'
		// 			});
		// 		},
		// 		error: function(xhr, ajaxOptions, thrownError) {
		// 			alert('Ups Ada sedikit kesalahan.. Segera Hubungi Administrator ');
		// 		}
		// 	});
		// }
		</script>
		";
		return $script;
	}
	public function load_tabel(){
		// $script = "
		// <script>
		// function load_tabel(nama_tabel,tabel,where){
        //     var baseUrl = '" . base_url() . "register/load_tabel';
		// 	$('#'+nama_tabel).DataTable({
		// 		'destroy': true,
		// 		'paging': true,
		// 		'ordering': true,
		// 		'info': true,
		// 		'searching': true,
		// 		'processing': true,
		// 		'serverSide': false,
		// 		'order': [],
		// 		'ajax': {
		// 			'url': baseUrl,
        //             'type': 'POST',
        //             'data' : {
        //                 nama_tabel : tabel,
        //                 where : where
        //             }
		// 		},
		// 		'columnDefs': [{}],
		// 	});
		// }
		// </script>
		// ";
		// return $script;
	}
	public function crude(){
		$script = "
		<script>
		function crude(aksi,tabel,where='',data='',context){
			var baseUrl = '" . base_url() . "register/crude';
			$.ajax({
				url: baseUrl,
				type: 'POST',
				dataType: 'json',
				data: {
					aksi : aksi,
					tabel : tabel,
					where : where,
					data : data
				},
				success: function(datas) {
					if(context!='no' && context!=''){
						if(datas!='' && datas !=null){
							alert(context+' telah di'+datas+' !');
						}else{
							alert(context+' gagal di'+aksi+' !');
						}
					}
				},
				error: function(xhr, ajaxOptions, thrownError) {
					alert('Ups Ada sedikit kesalahan.. Segera Hubungi Administrator ');
				} 
			});
		}
		</script>
		";
		return $script;
    }
}