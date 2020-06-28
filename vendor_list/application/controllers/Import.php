<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Import extends CI_Controller {

    // public function index()
    // {
    //     $this->load->view('v_import');
    // }
   
    public function upload() 
    {
        include APPPATH.'third_party/PHPExcel/PHPExcel.php';
        $config['upload_path'] = 'assets/upload_file';
        $config['allowed_types'] = 'xlsx|xls|csv';
        $config['max_size'] = '10000';
        $config['encrypt_name'] = true;

        $this->load->library('upload', $config); 

        if (!$this->upload->do_upload()) {

            //upload gagal
            $this->session->set_flashdata('notif', '<div class="alert alert-danger"><b>PROSES IMPORT GAGAL!</b> '.$this->upload->display_errors().'</div>');
            echo $this->upload->display_errors();
            //redirect halaman
            // redirect('import/');

        } else {

            $data_upload = $this->upload->data();

            $excelreader     = new PHPExcel_Reader_Excel2007();
            $loadexcel         = $excelreader->load('assets/upload_file/'.$data_upload['file_name']); // Load file yang telah diupload ke folder excel
            $sheet             = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);

            $data = array();

            $numrow = 1;
            foreach($sheet as $row){
                if($numrow > 1){
                    array_push($data, array(
                        'kode_project'=> $this->session->userdata('kode_project'),
                        'nama_barang' => $row['A'],
                        'merk_barang'      => $row['B'],
                        'tipe_barang'      => $row['C'],
                        'spesifikasi_barang'=>$row['D'],
                        'jumlah_barang'=>$row['E'],
                        'satuan_barang'=>$row['F'],
                        'file_foto'=>$row['G'],
                        'detail'=>$row['H']
                    ));
                }
                $numrow++; 
            }
            $this->session->set_userdata(array('kode_project'=>''));
            $this->db->insert_batch('temp_entry_boq_import_excel', $data);
            unlink(realpath('assets/upload_file/'.$data_upload['file_name']));

            $this->session->set_flashdata('notif', '<div class="alert alert-success"><b>PROSES IMPORT BERHASIL!</b> Data berhasil diimport!</div>');
            echo 'Import Berhasil...';
            // redirect('import/');
        }
    }

}