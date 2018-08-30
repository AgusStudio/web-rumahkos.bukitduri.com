<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	}
	
	public function index()
	{		
		if(!empty($this->session->userdata('log_user'))){
			$username= $this->session->userdata('log_user');
			$data['user']= $this->Model_kos->one_where('user','username',$username)->row();
		}
		$data['header_background']= $this->Model_kos->get_data('header_background')->result();
		$rumah = $this->Model_kos->two_where('rumah_sewa','status_rumah','1','status_delete_rumah','0')->num_rows();
		$this->Model_kos->halaman('6','3','welcome/index/',$rumah);
		$data['paging'] = $this->pagination->create_links();
		$page = ($this->uri->segment(3))?$this->uri->segment(3):0;
		$data['rumah_sewa'] = $this->Model_kos->page_data('6',$page,'tgl_update','rumah_sewa');
		$this->load->view('beranda',$data);
	}

	function search(){
		if($this->input->post('search',true)==1){
			$alamat= $this->input->post('src_alamat',true);
			$data['header_background']= $this->Model_kos->get_data('header_background')->result();
			$rumah = $this->Model_kos->search('nama_rumah','alamat_rumah',$alamat,'status_rumah','1')->num_rows();
			$this->Model_kos->halaman('6','3','welcome/index/',$rumah);
			$data['paging'] = $this->pagination->create_links();
			$page = ($this->uri->segment(3))?$this->uri->segment(3):0;
			$data['rumah_sewa'] = $this->Model_kos->page_search('6',$page,'nama_rumah','alamat_rumah',$alamat);
			$this->load->view('beranda',$data);
		}
		if($this->input->post('search_byfilter')==1){
			$fasilitas1= $this->input->post('fasilitas1',true);
			$fasilitas2= $this->input->post('fasilitas2',true);
			$fasilitas3= $this->input->post('fasilitas3',true);
			$fasilitas4= $this->input->post('fasilitas4',true);
			$fasilitas5= $this->input->post('fasilitas5',true);
			if($fasilitas1!="" || $fasilitas2!="" || $fasilitas3!="" || $fasilitas4!="" || $fasilitas5!=""){
			$input_range=$this->input->post('range_1',true);
			$harga=explode(";",$input_range);
			$harga_min= $harga[0]; $harga_max= $harga[1];
			$data['header_background']= $this->Model_kos->get_data('header_background')->result();
			$z="distinct(m2.id_rumah),m2.nama_rumah,m2.foto_1,m2.harga_perbulan,m2.harga_pertahun,m2.kategori_rumah";
			$rumah = $this->Model_kos->search_byfilter($harga_min,$harga_max,$fasilitas1,$fasilitas2,$fasilitas3,$fasilitas4,$fasilitas5,$z)->num_rows();
			$this->Model_kos->halaman('6','3','welcome/index/',$rumah);
			$data['paging'] = $this->pagination->create_links();
			$page = ($this->uri->segment(3))?$this->uri->segment(3):0;
			$data['rumah_sewa'] = $this->Model_kos->page_search_byfilter('6',$page,$harga_min,$harga_max,$fasilitas1,$fasilitas2,$fasilitas3,$fasilitas4,$fasilitas5,$z);
			$this->load->view('beranda',$data);
			}else if($fasilitas1=="" || $fasilitas2=="" || $fasilitas3=="" || $fasilitas4=="" || $fasilitas5==""){
				$input_range=$this->input->post('range_1',true);
				$harga=explode(";",$input_range);
				$harga_min= $harga[0]; $harga_max= $harga[1];
				$data['header_background']= $this->Model_kos->get_data('header_background')->result();
				$z="distinct(m2.id_rumah),m2.nama_rumah,m2.foto_1,m2.harga_perbulan,m2.harga_pertahun,m2.kategori_rumah";
				$rumah = $this->Model_kos->search_byfilter2($harga_min,$harga_max,$z)->num_rows();
				$this->Model_kos->halaman('6','3','welcome/index/',$rumah);
				$data['paging'] = $this->pagination->create_links();
				$page = ($this->uri->segment(3))?$this->uri->segment(3):0;
				$data['rumah_sewa'] = $this->Model_kos->page_search_byfilter2('6',$page,$harga_min,$harga_max,$z);
				$this->load->view('beranda',$data);
			}
		}
	}

	function contact()
	{
		if(!empty($this->session->userdata('log_user'))){
			$username= $this->session->userdata('log_user');
			$data['user']= $this->Model_kos->one_where('user','username',$username)->row();
			$this->load->view('kontak',$data);
		}else{
			$this->load->view('kontak');
		}
	}

	function pro_contact()
	{
		$name= $this->input->post('full_name',true);
		$phone= $this->input->post('phone',true);
		$email= $this->input->post('email',true);
		$descript= $this->input->post('descript',true);
		$data=array(
			'full_name'=>$name,
			'phone'=>$phone,
			'email'=>$email,
			'descript'=>$descript,
		);
		$this->Model_kos->insert_data('komentar',$data);
		$data['text']= "Pesan sudah terkirim<br/><h6>Terima kasih atas pesan Anda</h6>";
		$data['link']= "welcome/contact";
		$this->load->view('alert',$data);
	}

	function about()
	{
		if(!empty($this->session->userdata('log_user'))){
			$username= $this->session->userdata('log_user');
			$data['user']= $this->Model_kos->one_where('user','username',$username)->row();
			$this->load->view('about',$data);
		}else{
			$this->load->view('about');
		}
		
	}

	function profile()
	{
		$this->Model_kos->anysessions('log_user','welcome');
		$username= $this->session->userdata('log_user');
		$data['user']= $this->Model_kos->one_where('user','username',$username)->row();
		$this->load->view('profile',$data);
	}

	function rumah_sewa($tipe)
	{
		$this->Model_kos->anysessions('log_user','welcome');
		$this->Model_kos->previlages('previlage','Pengelola','welcome');
		if($tipe=="Rumah_Kos" || $tipe=="Kontrakan"){
			$username= $this->session->userdata('log_user');
			$data['user']= $this->Model_kos->one_where('user','username',$username)->row();
			$data['rumah_sewa']= $this->Model_kos->three_where('view_pemilik','username',$username,'kategori_rumah',$tipe,'status_delete_rumah','0')->result();
			$data['tipe']= $tipe; 
			$this->load->view('rumah_sewa',$data);
		}else{
			redirect('welcome');
		}
	}

	function tambah_rumah($tipe)
	{
		if(empty($tipe)){
			redirect('welcome');
		}else{
			$this->Model_kos->anysessions('log_user','welcome');
			$this->Model_kos->previlages('previlage','Pengelola','welcome');
			$username= $this->session->userdata('log_user');
			$data['user']= $this->Model_kos->one_where('user','username',$username)->row();
			$data['fasilitas_umum']= $this->Model_kos->one_where('fasilitas','kategori_fasilitas','Fasilitas Umum')->result();
	        $data['fasilitas_ruang']= $this->Model_kos->one_where('fasilitas','kategori_fasilitas','Fasilitas Ruang')->result();
	        $data['fasilitas_parkir']= $this->Model_kos->one_where('fasilitas','kategori_fasilitas','Fasilitas Parkir')->result();
	        $data['fasilitas_lingkungan']= $this->Model_kos->one_where('fasilitas','kategori_fasilitas','Fasilitas Lingkungan')->result();
	        $data['fasilitas_mck']= $this->Model_kos->one_where('fasilitas','kategori_fasilitas','Fasilitas MCK')->result();
	        $data['rt']= $this->Model_kos->get_data('rt')->result();
	        $data['rumah_sewa']= $this->Model_kos->inc_table('rumah_sewa');
			if($tipe=="Rumah_Kos"){
				$data['kat']="Rumah Kos"; $data['tipe']= $tipe;
			}else{ 
				$data['kat']="Kontrakan"; $data['tipe']= $tipe;
			}
			$this->load->view('form_rumah',$data);
		}
	}

	function add_rumah()
	{
		$this->Model_kos->anysessions('log_user','welcome');
		$this->Model_kos->previlages('previlage','Pengelola','welcome');
		$user= $this->input->post('id_user',true);
		$rumah_sewa= $this->Model_kos->inc_table('rumah_sewa');
		$id_rumah= $rumah_sewa->Auto_increment;
		$imb= $this->input->post('imb',true);
		$nama_rumah= $this->input->post('nama_rumah',true);
		$kategori= $this->input->post('tipe',true);
		$rt= $this->input->post('rt',true);
		$deskripsi= $this->input->post('deskripsi',true);
		$harga_perhari= $this->input->post('harga_perhari',true);
		$harga_perbulan= $this->input->post('harga_perbulan',true);
		$harga_pertahun= $this->input->post('harga_pertahun',true);
		$listrik= $this->input->post('listrik',true);
		$tipe= $this->input->post('tipe',true);
		$alamat= $this->input->post('alamat',true);
		$tlp= $this->input->post('tlp',true);
		$no_whatsapp= $this->input->post('no_whatsapp',true);
		$data=array(
			'id_rumah'=>$id_rumah,
			'nama_rumah'=>$nama_rumah,
			'imb_rumah'=>$imb,
			'alamat_rumah'=>$alamat,
			'tlp_rumah'=>$tlp,
			'no_whatsapp'=>$no_whatsapp,
			'id_rt'=>$rt,
			'kategori_rumah'=>$kategori,
			'harga_perhari'=>$harga_perhari,
			'harga_perbulan'=>$harga_perbulan,
			'harga_pertahun'=>$harga_pertahun,
			'listrik'=>$listrik,
			'deskripsi_rumah'=>$deskripsi,
		);
		$data2= array('id_user'=>$user,'id_rumah'=>$id_rumah);
		$this->Model_kos->insert_data('rumah_sewa',$data);
		$this->Model_kos->insert_data('pemilik',$data2);
		$fasilitas_umum= $this->Model_kos->one_where('fasilitas','kategori_fasilitas','Fasilitas Umum')->result();
		foreach ($fasilitas_umum as $fasilitas_umum) {
		 	$id_umum= "fas_".$fasilitas_umum->id_fasilitas;
		 	$id_input_umum= $this->input->post($id_umum,true);
		 	if($id_input_umum!=""){
			 	$data= array('id_rumah'=>$id_rumah,'id_fasilitas'=>$id_input_umum);
			 	$this->Model_kos->insert_data('relasi_fasilitas',$data);
			}
		}
		$fasilitas_ruang= $this->Model_kos->one_where('fasilitas','kategori_fasilitas','Fasilitas Ruang')->result();
		foreach ($fasilitas_ruang as $fasilitas_ruang) {
		 	$id_ruang= "fas_".$fasilitas_ruang->id_fasilitas;
		 	$id_input_ruang= $this->input->post($id_ruang,true);
		 	if($id_input_ruang!=""){
			 	$data= array('id_rumah'=>$id_rumah,'id_fasilitas'=>$id_input_ruang);
			 	$this->Model_kos->insert_data('relasi_fasilitas',$data);
			}
		}
		$fasilitas_mck= $this->Model_kos->one_where('fasilitas','kategori_fasilitas','Fasilitas MCK')->result();
		foreach ($fasilitas_mck as $fasilitas_mck) {
		 	$id_mck= "fas_".$fasilitas_mck->id_fasilitas;
		 	$id_input_mck= $this->input->post($id_mck,true);
		 	if($id_input_mck!=""){
		 	$data= array('id_rumah'=>$id_rumah,'id_fasilitas'=>$id_input_mck);
		 	$this->Model_kos->insert_data('relasi_fasilitas',$data);
		 	}
		}
		$fasilitas_parkir= $this->Model_kos->one_where('fasilitas','kategori_fasilitas','Fasilitas Parkir')->result();
		foreach ($fasilitas_parkir as $fasilitas_parkir) {
		 	$id_parkir= "fas_".$fasilitas_parkir->id_fasilitas;
		 	$id_input_parkir= $this->input->post($id_parkir,true);
		 	if($id_input_parkir!=""){
		 	$data= array('id_rumah'=>$id_rumah,'id_fasilitas'=>$id_input_parkir);
		 	$this->Model_kos->insert_data('relasi_fasilitas',$data);
		 	}
		}
		$fasilitas_lingkungan= $this->Model_kos->one_where('fasilitas','kategori_fasilitas','Fasilitas Lingkungan')->result();
		foreach ($fasilitas_lingkungan as $fasilitas_lingkungan) {
		 	$id_lingkungan= "fas_".$fasilitas_lingkungan->id_fasilitas;
		 	$id_input_lingkungan= $this->input->post($id_lingkungan,true);
		 	if($id_input_lingkungan!=""){
		 	$data= array('id_rumah'=>$id_rumah,'id_fasilitas'=>$id_input_lingkungan);
		 	$this->Model_kos->insert_data('relasi_fasilitas',$data);
		 	}
		}
		$data['text']= "Data berhasil disimpan<br/><h6>Segera lengkapi data rumah kos atau kontrakan Anda</h6>";
		$data['link']= "welcome/detail_rumah/".$id_rumah;
		$this->load->view('alert',$data);
	}

	function Rumah_Kos($id)
	{
		$this->Model_kos->anysessions('log_user','welcome');
		$this->Model_kos->previlages('previlage','Pengelola','welcome');
		$rumah= $this->Model_kos->two_where('rumah_sewa','id_rumah',$id,'status_delete_rumah','0');
		$cek= $rumah->num_rows();
		if($cek<=0){
			redirect('welcome');
		}else{
			$username= $this->session->userdata('log_user');
			$data['user']= $this->Model_kos->one_where('user','username',$username)->row();
			$data['rumah_sewa']= $rumah->row();
			$kamar= $this->Model_kos->two_where('kamar_kos','id_rumah',$id,'status_aktif_kamar','1');
			$data['jml']= $kamar->num_rows();
			$data['kamar']= $kamar->result();
			$data['tipe']= "Rumah Kos"; $data['jenis']= "Kamar"; $data['no']= "no_kamar"; $data['status']= "status_kamar"; $data['penghuni_unit']= "penghuni_kamar"; $data['id_penghuni_lain']= "id_penghuni_kamar"; $data['add']= "add_kamar"; $data['id_unit']= "id_kamar_kos"; $data['id_sewa']= "id_sewa_kamar"; $data['sewa_unit']= "penyewa_kos";
			$this->load->view('kamar',$data);
		}
	}

	function Kontrakan($id)
	{
		$this->Model_kos->anysessions('log_user','welcome');
		$this->Model_kos->previlages('previlage','Pengelola','welcome');
		$rumah= $this->Model_kos->one_where('rumah_sewa','id_rumah',$id);
		$cek= $rumah->num_rows();
		if($cek<=0){
			redirect('welcome');
		}else{
			$username= $this->session->userdata('log_user');
			$data['user']= $this->Model_kos->one_where('user','username',$username)->row();
			$data['rumah_sewa']= $rumah->row();
			$rumah= $this->Model_kos->two_where('rumah_kontrakan','id_rumah',$id,'status_aktif_kontrakan','1');
			$data['jml']= $rumah->num_rows();
			$data['kamar']= $rumah->result();
			$data['tipe']= "Rumah Kontrakan"; $data['jenis']= "Rumah"; $data['no']= "no_rumah"; $data['status']= "status_kontrakan"; $data['penghuni_unit']= "penghuni_kontrakan"; $data['id_penghuni_lain']= "id_penghuni_kontrakan";
			$data['add']= "add_kontrakan"; $data['id_unit']= "id_rumah_kontrakan"; $data['id_sewa']= "id_sewa_kontrakan"; $data['sewa_unit']= "penyewa_kontrakan";
			$this->load->view('kamar',$data);
		}
	}

	function hapus_penghuni($tipe,$id_sewa,$id_penghuni,$id_rumah)
	{
		$this->Model_kos->anysessions('log_user','welcome');
		$this->Model_kos->previlages('previlage','Pengelola','welcome');
		if(empty($tipe) || empty($id_sewa) || empty($id_penghuni || $id_rumah)){
			redirect('welcome');
		}else{
			if($tipe=='Rumah_Kos'){
				$cek= $this->Model_kos->two_where('penyewa_kos','id_sewa_kamar',$id_sewa,'status_sewa','1')->num_rows();
				if($cek<=0){
					redirect('welcome');
				}else{
					$this->Model_kos->delete_data('penghuni_kamar','id_penghuni_kamar',$id_penghuni);
					redirect('welcome/'.$tipe.'/'.$id_rumah);
				}
			}else if($tipe=='Kontrakan'){
				$cek= $this->Model_kos->two_where('penyewa_kontrakan','id_sewa_kontrakan',$id_sewa,'status_sewa','1')->num_rows();
				if($cek<=0){
					redirect('welcome');
				}else{
					$this->Model_kos->delete_data('penghuni_kontrakan','id_penghuni_kontrakan',$id_penghuni);
					redirect('welcome/'.$tipe.'/'.$id_rumah);
				}
			}else{
				redirect('welcome');
			}
		}
	}

	function addpenghuni($tipe)
	{
		$this->Model_kos->anysessions('log_user','welcome');
		$this->Model_kos->previlages('previlage','Pengelola','welcome');
		if(empty($tipe)){
			redirect('welcome');
		}else{
			$id_unit= $this->input->post('id_unit',true);
			$id_sewa= $this->input->post('id_sewa',true);
			$id_rumah= $this->input->post('id_rumah',true);
			for($i=1;$i<=4;$i++){
			$nama_penghuni_lain[$i]= $this->input->post('nama_penghuni_lain'.$i,true);
			$ktp_penghuni_lain[$i]= $this->input->post('ktp_penghuni_lain'.$i,true);
			$alamat_penghuni_lain[$i]= $this->input->post('alamat_penghuni_lain'.$i,true);
				if($nama_penghuni_lain[$i]!="" && $ktp_penghuni_lain[$i]!="" && $alamat_penghuni_lain[$i]!=""){
					if($tipe=="Rumah_Kos"){
						$data[$i]= array(
							'id_sewa_kamar'=>$id_sewa,
							'id_kamar_kos'=>$id_unit,
							'nama_penghuni_lain'=>$nama_penghuni_lain[$i],
							'ktp_penghuni_lain'=>$ktp_penghuni_lain[$i],
							'alamat_penghuni_lain'=>$alamat_penghuni_lain[$i]
						);
						$this->Model_kos->insert_data('penghuni_kamar',$data[$i]);
						redirect("welcome/".$tipe."/".$id_rumah);
					}elseif ($tipe=="Kontrakan") {
						$data[$i]= array(
							'id_sewa_kontrakan'=>$id_sewa,
							'id_rumah_kontrakan'=>$id_unit,
							'nama_penghuni_lain'=>$nama_penghuni_lain[$i],
							'ktp_penghuni_lain'=>$ktp_penghuni_lain[$i],
							'alamat_penghuni_lain'=>$alamat_penghuni_lain[$i]
						);
						$this->Model_kos->insert_data('penghuni_kontrakan',$data[$i]);
						redirect("welcome/".$tipe."/".$id_rumah);
					}else{
						redirect('welcome');
					}	
				}else{
					redirect("welcome/".$tipe."/".$id_rumah);
				}
			}
		}
	}

	function putus_sewa($tipe)
	{
		$this->Model_kos->anysessions('log_user','welcome');
		$this->Model_kos->previlages('previlage','Pengelola','welcome');
		if(empty($tipe)){
			redirect('welcome');
		}else{
			$id_sewa= $this->input->post('id_sewa',true);
			$id_rumah= $this->input->post('id_rumah',true);
			$data= array('status_sewa'=>'0', 'jml_penghuni'=>'0');
			if($tipe=='Rumah_Kos'){
				$this->Model_kos->update_data('sewa_kamar','id_sewa_kamar',$id_sewa,$data);
				$data['text']= "Data berhasil diupdate<h5>Kamar sekarang kosong penghuni</h5>";
				$data['link']= "welcome/".$tipe."/".$id_rumah;
				$this->load->view('alert',$data);
			}else if($tipe=='Kontrakan'){
				$this->Model_kos->update_data('sewa_kontrakan','id_sewa_kontrakan',$id_sewa,$data);
				$data['text']= "Data berhasil diupdate<h5>Rumah Kontrakan sekarang kosong penghuni</h5>";
				$data['link']= "welcome/".$tipe."/".$id_rumah;
				$this->load->view('alert',$data);
			}else{
				redirect('welcome');
			}
		}
	}

	function sewabyakun($tipe)
	{
		$this->Model_kos->anysessions('log_user','welcome');
		$this->Model_kos->previlages('previlage','Pengelola','welcome');
		if(empty($tipe)){
			redirect('welcome');
		}else{
			$id_unit= $this->input->post('id_unit',true);
			$id_rumah= $this->input->post('id_rumah',true);
			$username= $this->input->post('username',true);
			$password= MD5($this->input->post('password',true));
			$tgl_cekin= date('Y-m-d',strtotime($this->input->post('tgl_cekin',true)));
			$tgl_cekout= date('Y-m-d',strtotime($this->input->post('tgl_cekout',true)));
			$keterangan= $this->input->post('keterangan',true);
			$jenis_sewa= $this->input->post('jenis_sewa',true);
			$cek_usename= $this->Model_kos->two_where('user','username',$username,'password',$password);
			$cek= $cek_usename->num_rows(); $user= $cek_usename->row();
			$tgl_sekarang= Date('Y-m-d');
			if($tgl_cekin<$tgl_sekarang){
				$data['text']= "Tanggal Cek In sudah lewat!";
				$data['link']= "welcome/".$tipe."/".$id_rumah;
				$this->load->view('alert',$data);
			}else if($tgl_cekout<$tgl_cekin){
				$data['text']= "Tanggal Cek Out tidak boleh mendahului Tanggal Cek In!";
				$data['link']= "welcome/".$tipe."/".$id_rumah;
				$this->load->view('alert',$data);
			}else if($tgl_cekout<$tgl_sekarang){
				$data['text']= "Tanggal Cek Out sudah lewat!";
				$data['link']= "welcome/".$tipe."/".$id_rumah;
				$this->load->view('alert',$data);
			}else{
				if($cek>=1){
					$id_user= $user->id_user;
					if($tipe=="Rumah_Kos"){
						$data= array(
						'id_kamar_kos'=>$id_unit,
						'cek_in'=>$tgl_cekin,
						'cek_out'=>$tgl_cekout,
						'jenis_sewa'=>$jenis_sewa,
						'id_user'=>$id_user,
						'jml_penghuni'=>'1',
						'keterangan_penghuni'=>$keterangan,
						'status_sewa'=>'1',
						);
						$this->Model_kos->insert_data('sewa_kamar',$data);
						$data['text']= "Data berhasil disimpan";
						$data['link']= "welcome/".$tipe."/".$id_rumah;
						$this->load->view('alert',$data);
					}elseif($tipe=="Kontrakan"){
						$data= array(
						'id_rumah_kontrakan'=>$id_unit,
						'cek_in'=>$tgl_cekin,
						'cek_out'=>$tgl_cekout,
						'id_user'=>$id_user,
						'jenis_sewa'=>$jenis_sewa,
						'jml_penghuni'=>'1',
						'keterangan_penghuni'=>$keterangan,
						'status_sewa'=>'1',
						);
						$this->Model_kos->insert_data('sewa_kontrakan',$data);
						$data['text']= "Data berhasil disimpan";
						$data['link']= "welcome/".$tipe."/".$id_rumah;
						$this->load->view('alert',$data);
					}else{
						redirect('welcome');
					}
				}else{
					$data['text']= "Akun Anda tidak ditemukan<br/><h5>Pastikan Username dan Password benar</h5>";
					$data['link']= "welcome/".$tipe."/".$id_rumah;
					$this->load->view('alert',$data);
				}
			}
		}
	}

	function sewaunakun($tipe)
	{
		$this->Model_kos->anysessions('log_user','welcome');
		$this->Model_kos->previlages('previlage','Pengelola','welcome');
		if(empty($tipe)){
			redirect('welcome');
		}else{
			$id_unit= $this->input->post('id_unit',true);
			$id_rumah= $this->input->post('id_rumah',true);
			$username= $this->input->post('username',true);
			$password= MD5($this->input->post('password',true));
			$nama= $this->input->post('nama',true);
			$jk= $this->input->post('jk',true);
			$alamat= $this->input->post('alamat',true);
			$tlp= $this->input->post('tlp',true);
			$email= $this->input->post('email',true);
			$kartu_identitas= $this->input->post('kartu_identitas',true);
			$ktp= $this->input->post('ktp',true);
			$kitas= $this->input->post('kitas',true);
			$paspor= $this->input->post('paspor',true);
			if($ktp==""){ $no_ktp="-"; }else{ $no_ktp=$ktp;}
			if($kitas==""){ $no_kitas="-"; }else{ $no_kitas=$kitas;}
			if($paspor==""){ $no_paspor="-"; }else{ $no_paspor=$paspor;}
			$kk= $this->input->post('kk',true);
			$tgl_cekin= date('Y-m-d',strtotime($this->input->post('tgl_cekin',true)));
			$tgl_cekout= date('Y-m-d',strtotime($this->input->post('tgl_cekout',true)));
			$jenis_sewa= $this->input->post('jenis_sewa',true);
			$keterangan= $this->input->post('keterangan',true);
			$tgl_sekarang= Date('Y-m-d');
			if($tgl_cekin<$tgl_sekarang){
				$data['text']= "Tanggal Cek In sudah lewat!";
				$data['link']= "welcome/".$tipe."/".$id_rumah;
				$this->load->view('alert',$data);
			}elseif($tgl_cekout<$tgl_cekin){
				$data['text']= "Tanggal Cek Out tidak boleh mendahului Tanggal Cek In!";
				$data['link']= "welcome/".$tipe."/".$id_rumah;
				$this->load->view('alert',$data);
			}elseif($tgl_cekout<$tgl_sekarang){
				$data['text']= "Tanggal Cek Out sudah lewat!";
				$data['link']= "welcome/".$tipe."/".$id_rumah;
				$this->load->view('alert',$data);
			}else{
				$data_user=array(
					'nama_user'=>$nama,
					'tlp_user'=>$tlp,
					'alamat_user'=>$alamat,
					'kartu_identitas'=>$kartu_identitas,
					'ktp_user'=>$no_ktp,
					'kitas_user'=>$no_kitas,
					'paspor_user'=>$no_paspor,
					'no_kk_user'=>$kk,
					'username'=>$username,
					'password'=>$password,
					'jk_user'=>$jk,
					'email_user'=>$email,
					'previlage_user'=>'User'
					);
				$this->Model_kos->insert_data('user',$data_user);
				$cek_usename= $this->Model_kos->two_where('user','username',$username,'password',$password);
				$cek= $cek_usename->num_rows(); $user= $cek_usename->row();
				if($cek>=1){
					$id_user= $user->id_user;
					if($tipe=="Rumah_Kos"){
						$data= array(
						'id_kamar_kos'=>$id_unit,
						'cek_in'=>$tgl_cekin,
						'cek_out'=>$tgl_cekout,
						'id_user'=>$id_user,
						'jenis_sewa'=>$jenis_sewa,
						'jml_penghuni'=>'1',
						'keterangan_penghuni'=>$keterangan,
						'status_sewa'=>'1',
						);
						$this->Model_kos->insert_data('sewa_kamar',$data);
						$data['text']= "Data berhasil disimpan";
						$data['link']= "welcome/".$tipe."/".$id_rumah;
						$this->load->view('alert',$data);
					}elseif($tipe=="Kontrakan"){
						$data= array(
						'id_rumah_kontrakan'=>$id_unit,
						'cek_in'=>$tgl_cekin,
						'cek_out'=>$tgl_cekout,
						'id_user'=>$id_user,
						'jenis_sewa'=>$jenis_sewa,
						'jml_penghuni'=>'1',
						'keterangan_penghuni'=>$keterangan,
						'status_sewa'=>'1',
						);
						$this->Model_kos->insert_data('sewa_kontrakan',$data);
						$data['text']= "Data berhasil disimpan";
						$data['link']= "welcome/".$tipe."/".$id_rumah;
						$this->load->view('alert',$data);
					}else{
						redirect('welcome');
					}
				}
			}
		}
	}

	function add_kamar($id_rumah)
	{
		$this->Model_kos->anysessions('log_user','welcome');
		$this->Model_kos->previlages('previlage','Pengelola','welcome');
		$rumah= $this->Model_kos->one_where('rumah_sewa','id_rumah',$id_rumah);
		$cek= $rumah->num_rows();
		if($cek<=0){
			redirect('welcome');
		}else{
			$no_kamar= $this->input->post('no_rumah',true);
			$data= array('no_kamar'=>$no_kamar,'status_aktif_kamar'=>'1','id_rumah'=>$id_rumah);
			$this->Model_kos->insert_data('kamar_kos',$data);
			$data['text']= "Data berhasil disimpan";
			$data['link']= "welcome/Rumah_Kos/".$id_rumah;
			$this->load->view('alert',$data);
		}
	}

	function add_kontrakan($id_rumah)
	{
		$this->Model_kos->anysessions('log_user','welcome');
		$this->Model_kos->previlages('previlage','Pengelola','welcome');
		$rumah= $this->Model_kos->one_where('rumah_sewa','id_rumah',$id_rumah);
		$cek= $rumah->num_rows();
		if($cek<=0){
			redirect('welcome');
		}else{
			$no_rumah= $this->input->post('no_rumah',true);
			$jml_kamar= $this->input->post('jml_kamar',true);
			$data= array('no_rumah'=>$no_rumah,'status_aktif_kontrakan'=>'1','jml_kamar'=>$jml_kamar,'id_rumah'=>$id_rumah);
			$this->Model_kos->insert_data('rumah_kontrakan',$data);
			$data['text']= "Data berhasil disimpan";
			$data['link']= "welcome/Kontrakan/".$id_rumah;
			$this->load->view('alert',$data);
		}
	}

	function hapus_unit($tipe)
	{
		$this->Model_kos->anysessions('log_user','welcome');
		$this->Model_kos->previlages('previlage','Pengelola','welcome');
		if($tipe=="Rumah_Kos"){
			$id_kamar_kos= $this->input->post('id_unit',true);
			$id_rumah= $this->input->post('id_rumah',true);
			$cek= $this->Model_kos->two_where('kamar_kos','id_kamar_kos',$id_kamar_kos,'status_kamar','1')->num_rows();
			if($cek>=1){
				$data['text']= "Unit masih terdapat penghuni<br/><h4>Pastikan unit sudah kosong</h4>";
				$data['link']= "welcome/kamar/".$id_rumah;
				$this->load->view('alert',$data);
			}else{
				$data= array('status_aktif_kamar'=>'0');
				$this->Model_kos->update_data('kamar_kos','id_kamar_kos',$id_kamar_kos,$data);
				$data['text']= "Unit berhasil dihapus";
				$data['link']= "welcome/kamar/".$id_rumah;
				$this->load->view('alert',$data);
			}
		}elseif($tipe=="Kontrakan"){
			$id_kontrakan= $this->input->post('id_unit',true);
			$id_rumah= $this->input->post('id_rumah',true);
			$cek= $this->Model_kos->two_where('rumah_kontrakan','id_rumah_kontrakan',$id_kontrakan,'status_kontrakan','1')->num_rows();
			if($cek>=1){
				$data['text']= "Unit masih terdapat penghuni<br/><h4>Pastikan unit sudah kosong</h4>";
				$data['link']= "welcome/kontrakan/".$id_rumah;
				$this->load->view('alert',$data);
			}else{
				$data=array('status_aktif_kontrakan'=>'0');
				$this->Model_kos->update_data('rumah_kontrakan','id_rumah_kontrakan',$id_kontrakan,$data);
				$data['text']= "Unit berhasil dihapus";
				$data['link']= "welcome/kontrakan/".$id_rumah;
				$this->load->view('alert',$data);
			}
		}else{
			redirect('welcome');
		}
	}

	function hapus_rumah($tipe)
	{
		$this->Model_kos->anysessions('log_user','welcome');
		$this->Model_kos->previlages('previlage','Pengelola','welcome');
		$id_rumah= $this->input->post('id_rumah',true);
		$cek= $this->Model_kos->one_where('rumah_sewa','id_rumah',$id_rumah)->num_rows();
		if($cek>=1){
			$data= array('status_delete_rumah'=>'1','tgl_delete'=>date('Y-m-d'));
			$this->Model_kos->update_data('rumah_sewa','id_rumah',$id_rumah,$data);
			$data['text']= "Rumah berhasil dihapus";
			$data['link']= "welcome/rumah_sewa/".$tipe;
			$this->load->view('alert',$data);
		}else{
			redirect('welcome');
		}
	}

	function publish($tipe,$id_rumah)
	{
		$this->Model_kos->anysessions('log_user','welcome');
		$this->Model_kos->previlages('previlage','Pengelola','welcome');
		$rumah= $this->Model_kos->two_where('rumah_sewa','id_rumah',$id_rumah,'kategori_rumah',$tipe);
		$cek= $rumah->num_rows();
		$cek_foto= $rumah->row();
		if($cek<=0){
			redirect('welcome');
		}else{
			if($tipe=="Kontrakan"){
				$jml= $this->Model_kos->one_where('rumah_kontrakan','id_rumah',$id_rumah)->num_rows();
				$kat= "kontrakan"; $jenis= "rumah kontrakan";
			}else if($tipe=="Rumah_Kos"){
				$jml= $this->Model_kos->one_where('kamar_kos','id_rumah',$id_rumah)->num_rows();
				$kat= "kamar"; $jenis= "rumah kos";
			}
			if($jml==0){
				$data['text']= "Properti dan Jumlah kamar belum tersedia<br/><h5>Pastikan properti dan jumlah kamar sudah diinput</h5>";
				$data['link']= "welcome/".$kat."/".$id_rumah;
				$this->load->view('alert',$data);
			}elseif($cek_foto->foto_1=="" || $cek_foto->foto_2=="" || $cek_foto->foto_3=="" || $cek_foto->foto_4==""){
				$data['text']= "Photo ".$jenis." Anda belum lengkap<br/><h5>Pastikan photo sudah terlengkapi</h5>";
				$data['link']= "welcome/detail_rumah/".$id_rumah;
				$this->load->view('alert',$data);
			}else{
				$data= array('status_rumah'=>'1','tgl_publish'=>date('Y-m-d'));
				$this->Model_kos->update_data('rumah_sewa','id_rumah',$id_rumah,$data);
				$data['text']= "Data berhasil disimpan";
				$data['link']= "welcome/rumah_sewa/".$tipe;
				$this->load->view('alert',$data);
			}
		}
	}

	function detail_rumah($id_rumah)
	{
		$this->Model_kos->anysessions('log_user','welcome');
		$cek= $this->Model_kos->one_where('view_pemilik','id_rumah',$id_rumah)->row();
		if(count($cek)<=0){
			redirect('welcome');
		}else{
			if($cek->kategori_rumah=="Rumah_Kos"){
				$kat="Rumah Kos"; $table="view_kos"; $data['kat']=$kat; $table_kamar="kamar_kos"; $status_kamar="status_aktif_kamar";
			}else{ 
				$kat="Kontrakan"; $table="view_kontrakan"; $data['kat']=$kat; $table_kamar="rumah_kontrakan"; $status_kamar="status_aktif_kontrakan";
			}
			$data['jml_kamar']= $this->Model_kos->two_where($table_kamar,'id_rumah',$id_rumah,$status_kamar,'1')->num_rows();
			$username= $this->session->userdata('log_user');
			$data['user']= $this->Model_kos->one_where('user','username',$username)->row();
			$data['f_umum']= $this->Model_kos->fasilitas('','','id_rumah',$id_rumah,'kategori_fasilitas','Fasilitas Umum','view_fasilitas')->result();
            $data['f_ruang']= $this->Model_kos->fasilitas('','','id_rumah',$id_rumah,'kategori_fasilitas','Fasilitas Ruang','view_fasilitas')->result();
            $data['f_mck']= $this->Model_kos->fasilitas('','','id_rumah',$id_rumah,'kategori_fasilitas','Fasilitas MCK','view_fasilitas')->result();
            $data['f_parkir']= $this->Model_kos->fasilitas('','','id_rumah',$id_rumah,'kategori_fasilitas','Fasilitas Parkir','view_fasilitas')->result();
            $data['f_lingkungan']= $this->Model_kos->fasilitas('','','id_rumah',$id_rumah,'kategori_fasilitas','Fasilitas Lingkungan','view_fasilitas')->result();
            $data['detail']= $this->Model_kos->one_where($table,'id_rumah',$id_rumah)->row();
            $data['fasilitas_umum']= $this->Model_kos->one_where('fasilitas','kategori_fasilitas','Fasilitas Umum')->result();
            $data['fasilitas_ruang']= $this->Model_kos->one_where('fasilitas','kategori_fasilitas','Fasilitas Ruang')->result();
            $data['fasilitas_parkir']= $this->Model_kos->one_where('fasilitas','kategori_fasilitas','Fasilitas Parkir')->result();
            $data['fasilitas_lingkungan']= $this->Model_kos->one_where('fasilitas','kategori_fasilitas','Fasilitas Lingkungan')->result();
            $data['fasilitas_mck']= $this->Model_kos->one_where('fasilitas','kategori_fasilitas','Fasilitas MCK')->result();
            $data['rt']= $this->Model_kos->get_data('rt')->result();
			$this->load->view('detail_rumah',$data);
		}
	}

	function detail($tipe,$id_rumah)
	{
		if(!empty($this->session->userdata('log_user'))){
			$username= $this->session->userdata('log_user');
			$data['user']= $this->Model_kos->one_where('user','username',$username)->row();
		}
		if(empty($tipe) || empty($id_rumah)){
			redirect('welcome');
		}else{
			if($tipe=="Rumah_Kos"){
				$kat="Rumah Kos"; $table="view_kos"; $data['kat']=$kat; $table_kamar="kamar_kos"; $status_kamar="status_aktif_kamar";
			}else{ 
				$kat="Kontrakan"; $table="view_kontrakan"; $data['kat']=$kat; $table_kamar="rumah_kontrakan"; $status_kamar="status_aktif_kontrakan";
			}
			$rumah= $this->Model_kos->three_where($table,'id_rumah',$id_rumah,'status_rumah','1','status_delete_rumah','0');
			$cek= $rumah->num_rows();
			if($cek<=0){
				redirect('welcome');
			}else{
				$data['detail']= $rumah->row();
				$data['jml_kamar']= $this->Model_kos->two_where($table_kamar,'id_rumah',$id_rumah,$status_kamar,'1')->num_rows();
				$data['f_umum']= $this->Model_kos->fasilitas('','','id_rumah',$id_rumah,'kategori_fasilitas','Fasilitas Umum','view_fasilitas')->result();
	            $data['f_ruang']= $this->Model_kos->fasilitas('','','id_rumah',$id_rumah,'kategori_fasilitas','Fasilitas Ruang','view_fasilitas')->result();
	            $data['f_mck']= $this->Model_kos->fasilitas('','','id_rumah',$id_rumah,'kategori_fasilitas','Fasilitas MCK','view_fasilitas')->result();
	            $data['f_parkir']= $this->Model_kos->fasilitas('','','id_rumah',$id_rumah,'kategori_fasilitas','Fasilitas Parkir','view_fasilitas')->result();
	            $data['f_lingkungan']= $this->Model_kos->fasilitas('','','id_rumah',$id_rumah,'kategori_fasilitas','Fasilitas Lingkungan','view_fasilitas')->result();
	            $data['fasilitas_umum']= $this->Model_kos->one_where('fasilitas','kategori_fasilitas','Fasilitas Umum')->result();
	            $data['fasilitas_ruang']= $this->Model_kos->one_where('fasilitas','kategori_fasilitas','Fasilitas Ruang')->result();
	            $data['fasilitas_parkir']= $this->Model_kos->one_where('fasilitas','kategori_fasilitas','Fasilitas Parkir')->result();
	            $data['fasilitas_lingkungan']= $this->Model_kos->one_where('fasilitas','kategori_fasilitas','Fasilitas Lingkungan')->result();
	            $data['fasilitas_mck']= $this->Model_kos->one_where('fasilitas','kategori_fasilitas','Fasilitas MCK')->result();
	            $data['rt']= $this->Model_kos->get_data('rt')->result();
				$this->load->view('detail',$data);
			}
		}
	}

	function laporkan()
	{
		$id_user= $this->input->post('id_user',true);
		$tipe= $this->input->post('tipe',true);
		$id_rumah= $this->input->post('id_rumah',true);
		if($this->input->post('laporan_foto',true)==""){ $lap_foto="0";}else{ $lap_foto=$this->input->post('laporan_foto',true);}
		if($this->input->post('laporan_tlp',true)==""){ $lap_tlp="0";}else{ $lap_tlp= $this->input->post('laporan_tlp',true);}
		if($this->input->post('laporan_lain',true)==""){ $lap_lain="0";}else{ $lap_lain= $this->input->post('laporan_lain',true);}
		if($this->input->post('laporan_harga',true)==""){ $lap_harga="0";}else{ $lap_harga= $this->input->post('laporan_harga',true);}
		if($this->input->post('laporan_fasilitas',true)==""){ $lap_fasilitas="0";}else{ $lap_fasilitas= $this->input->post('laporan_fasilitas',true);};
		$lap_detail= $this->input->post('laporan_detail',true);
		if($this->input->post('laporan_alamat',true)==""){ $lap_alamat="0";}else{ $lap_alamat= $this->input->post('laporan_alamat',true);};
		if($lap_foto=="0" && $lap_tlp=="0" && $lap_alamat=="0" && $lap_harga=="0" && $lap_lain=="0" && $lap_fasilitas=="0" && $lap_detail==""){
			$data['text']= "Tidak ada perihal yang dilaporkan!";
			$data['link']= "welcome/detail/".$tipe."/".$id_rumah;
			$this->load->view('alert',$data);
		}else{
			$data=array(
			'id_rumah'=>$id_rumah,
			'foto_unmatch'=>$lap_foto,
			'alamat_unmatch'=>$lap_alamat,
			'tlp_unmatch'=>$lap_tlp,
			'harga_unmatch'=>$lap_harga,
			'fasilitas_unmatch'=>$lap_fasilitas,
			'isi_laporan'=>$lap_detail,
			'id_user'=>$id_user,
			);
			$this->Model_kos->insert_data('pelaporan',$data);
			$data['text']= "Terimakasih sudah melapor<h5>Laporan Anda akan segera kami proses</h5>";
			$data['link']= "welcome/detail/".$tipe."/".$id_rumah;
			$this->load->view('alert',$data);
		}
	}

	function pro_survei()
	{
		$id_user= $this->input->post('id_user',true);
		$tipe= $this->input->post('tipe',true);
		$id_rumah= $this->input->post('id_rumah',true);
		$tgl_survei= date('Y-m-d',strtotime($this->input->post('tgl_survei',true)));
		$time_survei= $this->input->post('time_survei',true);
		$pesan= $this->input->post('pesan',true);
		$data=array(
			'id_rumah'=>$id_rumah,
			'id_user'=>$id_user,
			'tgl_survei'=>$tgl_survei,
			'jam_survei'=>$time_survei,
			'pesan'=>$pesan
			);
			$this->Model_kos->insert_data('survei',$data);
			$data['text']= "Terimakasih Anda sudah buat janji survei<h5>Sampai bertemu nanti</h5>";
			$data['link']= "welcome/detail/".$tipe."/".$id_rumah;
			$this->load->view('alert',$data);
	}

	function edit_rumah($id_rumah)
	{
		$this->Model_kos->anysessions('log_user','welcome');
		$this->Model_kos->previlages('previlage','Pengelola','welcome');
		$cek= $this->Model_kos->one_where('rumah_sewa','id_rumah',$id_rumah)->num_rows();
		if($cek==0){
			redirect('welcome/detail_rumah/'.$id_rumah);
		}else{
			if($this->input->post('pict_save')=="1"){
				$foto_no= $this->input->post('foto_no',true);
				$tipe= $this->input->post('tipe',true);
				$nm_pict= $tipe.'_id_'.$id_rumah.'_part_'.$foto_no;
				$config['upload_path']= './assets/img/rumah_kos/';
				$config['allowed_types']= 'jpg|png|jpeg';
				$config['max_size']= '200';
				$config['max_height']= '1000';
				$config['max_width']= '600';
				$config['file_name']= $nm_pict;
				$field= "foto_".$foto_no;
				$this->load->library('upload',$config);
				if(!$this->upload->do_upload('userfile')){
					$error= $this->upload->display_errors();
					$data['text']= "Gambar gagal upload<br/><h6>".$error."</h6>";
					$data['link']= "welcome/detail_rumah/".$id_rumah;
					$this->load->view('alert',$data);
				}else{
					$pict= $this->upload->data();
					$data= array(
						$field=>$pict['file_name']
					);
					$this->Model_kos->update_data('rumah_sewa','id_rumah',$id_rumah,$data);
					$data['text']= "Gambar berhasil diupload";
					$data['link']= "welcome/detail_rumah/".$id_rumah;
					$this->load->view('alert',$data);
				}
			}else if($this->input->post('kontrakan_save',true)=="1"){
				$jml_kamar= $this->input->post('jml_kamar',true);
				$luas_tanah= $this->input->post('luas_tanah',true);
				$luas_bangunan= $this->input->post('luas_bangunan',true);
				$id_kontrakan= $this->input->post('id_kontrakan',true);
				$data= array(
					'jml_kamar'=>$jml_kamar,
					'luas_tanah'=>$luas_tanah,
					'luas_bangunan'=>$luas_bangunan,
				);
				$this->Model_kos->update_data('rumah_kontrakan','id_rumah_kontrakan',$id_kontrakan,$data);
				$data['text']= "Data berhasil disimpan";
				$data['link']= "welcome/detail_rumah/".$id_rumah;
				$this->load->view('alert',$data);
			}else if($this->input->post('ket_umum_save')=="1"){
				$harga_perhari= $this->input->post('harga_perhari',true);
				$deskripsi= $this->input->post('deskripsi',true);
				$kat= $this->input->post('kat',true);
				$tipe= $this->input->post('tipe',true);
				$harga_perbulan= $this->input->post('harga_perbulan',true);
				$harga_pertahun= $this->input->post('harga_pertahun',true);
				$listrik= $this->input->post('listrik',true);
				$alamat= $this->input->post('alamat',true);
				$rt= $this->input->post('rt',true);
				$tlp= $this->input->post('tlp',true);
				$no_whatsapp= $this->input->post('no_whatsapp',true);
				$foto_1= $this->input->post('foto_1',true);
				$foto_2= $this->input->post('foto_2',true);
				$foto_3= $this->input->post('foto_3',true);
				$foto_4= $this->input->post('foto_4',true);
				if($foto_1=="" || $foto_2=="" || $foto_3=="" || $foto_4==""){
					$data['text']= "Anda harus melengkapi photo ".$tipe." Anda";
					$data['link']= "welcome/detail_rumah/".$id_rumah;
					$this->load->view('alert',$data);
				}else{
					$data= array(
						'harga_perhari'=>$harga_perhari,
						'harga_perbulan'=>$harga_perbulan,
						'harga_pertahun'=>$harga_pertahun,
						'alamat_rumah'=>$alamat,
						'deskripsi_rumah'=>$deskripsi,
						'id_rt'=>$rt,
						'tlp_rumah'=>$tlp,
						'no_whatsapp'=>$no_whatsapp,
						'listrik'=>$listrik
					);
					$this->Model_kos->update_data('rumah_sewa','id_rumah',$id_rumah,$data);
					if($this->input->post('jml_kamar',true)=="0"){
						$data['text']= "Data berhasil disimpan<br/><h5>Lengkapi jumlah ".$tipe." </h5>";
						$data['link']= "welcome/".$tipe."/".$id_rumah;
						$this->load->view('alert',$data);
					}else{
						$data['text']= "Data berhasil disimpan";
						$data['link']= "welcome/detail_rumah/".$id_rumah;
						$this->load->view('alert',$data);
					}
				}
			}else if ($this->input->post('fas_umum_save',true)=="1") {
				$this->Model_kos->del_fasilitas($id_rumah,'Fasilitas Umum');
				$fasilitas_umum= $this->Model_kos->one_where('fasilitas','kategori_fasilitas','Fasilitas Umum')->result();
				foreach ($fasilitas_umum as $fasilitas_umum) {
				 	$id= "fas_".$fasilitas_umum->id_fasilitas;
				 	$id_input= $this->input->post($id,true);
				 	if($id_input!=""){
					 	$data= array('id_rumah'=>$id_rumah,'id_fasilitas'=>$id_input);
					 	$this->Model_kos->insert_data('relasi_fasilitas',$data);
					}
				}
				$data['text']= "Fasilitas Umum berhasil disimpan";
				$data['link']= "welcome/detail_rumah/".$id_rumah;
				$this->load->view('alert',$data);
			}elseif ($this->input->post('fas_ruang_save',true)=="1") {
				$this->Model_kos->del_fasilitas($id_rumah,'Fasilitas Ruang');
				$fasilitas_ruang= $this->Model_kos->one_where('fasilitas','kategori_fasilitas','Fasilitas Ruang')->result();
				foreach ($fasilitas_ruang as $fasilitas_ruang) {
				 	$id= "fas_".$fasilitas_ruang->id_fasilitas;
				 	$id_input= $this->input->post($id,true);
				 	if($id_input!=""){
					 	$data= array('id_rumah'=>$id_rumah,'id_fasilitas'=>$id_input);
					 	$this->Model_kos->insert_data('relasi_fasilitas',$data);
					}
				}
				$data['text']= "Fasilitas Ruang berhasil disimpan";
				$data['link']= "welcome/detail_rumah/".$id_rumah;
				$this->load->view('alert',$data);
			}elseif ($this->input->post('fas_mck_save',true)=="1") {
				$this->Model_kos->del_fasilitas($id_rumah,'Fasilitas MCK');
				$fasilitas_mck= $this->Model_kos->one_where('fasilitas','kategori_fasilitas','Fasilitas MCK')->result();
				foreach ($fasilitas_mck as $fasilitas_mck) {
				 	$id= "fas_".$fasilitas_mck->id_fasilitas;
				 	$id_input= $this->input->post($id,true);
				 	if($id_input!=""){
				 	$data= array('id_rumah'=>$id_rumah,'id_fasilitas'=>$id_input);
				 	$this->Model_kos->insert_data('relasi_fasilitas',$data);
				 	}
				}
				$data['text']= "Fasilitas MCK berhasil disimpan";
				$data['link']= "welcome/detail_rumah/".$id_rumah;
				$this->load->view('alert',$data);
			}elseif ($this->input->post('fas_parkir_save',true)=="1") {
				$this->Model_kos->del_fasilitas($id_rumah,'Fasilitas Parkir');
				$fasilitas_parkir= $this->Model_kos->one_where('fasilitas','kategori_fasilitas','Fasilitas Parkir')->result();
				foreach ($fasilitas_parkir as $fasilitas_parkir) {
				 	$id= "fas_".$fasilitas_parkir->id_fasilitas;
				 	$id_input= $this->input->post($id,true);
				 	if($id_input!=""){
				 	$data= array('id_rumah'=>$id_rumah,'id_fasilitas'=>$id_input);
				 	$this->Model_kos->insert_data('relasi_fasilitas',$data);
				 	}
				}
				$data['text']= "Fasilitas Parkir berhasil disimpan";
				$data['link']= "welcome/detail_rumah/".$id_rumah;
				$this->load->view('alert',$data);
			}elseif ($this->input->post('fas_lingkungan_save',true)=="1") {
				$this->Model_kos->del_fasilitas($id_rumah,'Fasilitas Lingkungan');
				$fasilitas_lingkungan= $this->Model_kos->one_where('fasilitas','kategori_fasilitas','Fasilitas Lingkungan')->result();
				foreach ($fasilitas_lingkungan as $fasilitas_lingkungan) {
				 	$id= "fas_".$fasilitas_lingkungan->id_fasilitas;
				 	$id_input= $this->input->post($id,true);
				 	if($id_input!=""){
				 	$data= array('id_rumah'=>$id_rumah,'id_fasilitas'=>$id_input);
				 	$this->Model_kos->insert_data('relasi_fasilitas',$data);
				 	}
				}
				$data['text']= "Fasilitas Lingkungan berhasil disimpan";
				$data['link']= "welcome/detail_rumah/".$id_rumah;
				$this->load->view('alert',$data);
			}
		}
	}

	function kelola_kos()
	{
		$this->Model_kos->anysessions('log_user','welcome');
		$this->Model_kos->previlages('previlage','Pengelola','welcome');
		if($this->session->userdata('previlage')=="Pengelola"){
			$username= $this->session->userdata('log_user');
			$data['user']= $this->Model_kos->one_where('user','username',$username)->row();
			$data['header_background']= $this->Model_kos->get_data('header_background')->result();
			$this->load->view('kelola_kos',$data);
		}else{
			redirect('welcome');
		}
	}

	function edit_foto()
	{
		$this->Model_kos->anysessions('log_user','welcome');
		$id_user=$this->input->post('id_user',true);
		$nm_pict= "user_".$id_user;
		$config['upload_path']= './assets/img/users/';
		$config['allowed_types']= 'jpg|png|jpeg';
		$config['max_size']= '200';
		$config['file_name']= $nm_pict;
		$this->load->library('upload',$config);
		if(!$this->upload->do_upload('userfile')){
			$error= $this->upload->display_errors();
			$data['text']= "Gambar gagal upload<br/><h6>".$error."</h6>";
			$data['link']= "welcome/profile";
			$this->load->view('alert',$data);
		}else{
			$pict= $this->upload->data();
			$data= array(
				'foto_user'=>$pict['file_name']
			);
			$this->Model_kos->update_data('user','id_user',$id_user,$data);
			$data['text']= "Gambar berhasil diupload";
			$data['link']= "welcome/profile";
			$this->load->view('alert',$data);
		}
	}

	function ubahpassword()
	{
		$this->Model_kos->anysessions('log_user','welcome');
		$id_user=$this->input->post('id_user',true);
		$current = MD5($this->input->post('current',true));
		$cek= $this->Model_kos->two_where('user','id_user',$id_user,'password',$current)->num_rows();
		$new_pass = MD5($this->input->post('new_password',true));
		$cfm_pass = MD5($this->input->post('cfm_password',true));
		if($cek <= 0){
			$data['text']= "Password lama salah ";
			$data['link']= "welcome/profile";
			$this->load->view('alert',$data);
		}else{
			if($new_pass!=$cfm_pass){
				$data['text']= "Confirmasi password baru tidak sama";
				$data['link']= "welcome/profile";
				$this->load->view('alert',$data);	
			}else{
				$data = array('password'=>$new_pass);
				$this->Model_kos->update_data('user','id_user',$id_user,$data);
				$data['text']= "Password berhasil dirubah ";
				$data['link']= "welcome/logout";
				$this->load->view('alert',$data);
			}		
		}
	}

	function ubahprofile()
	{
		$this->Model_kos->anysessions('log_user','welcome');
		$nama = $this->input->post('nama',true);
		$id_user = $this->input->post('id_user',true);
		$tlp = $this->input->post('tlp',true);
		$alamat = $this->input->post('alamat',true);
		$jk = $this->input->post('jk',true);
		$ktp = $this->input->post('ktp',true);
		$kitas = $this->input->post('kitas',true);
		$paspor = $this->input->post('paspor',true);
		$kk = $this->input->post('kk',true);
		$email = $this->input->post('email',true);
		$data = array(
			'nama_user'=>$nama,
			'tlp_user'=>$tlp,
			'jk_user'=>$jk,
			'email_user'=>$email,
			'alamat_user'=>$alamat,
			'ktp_user'=>$ktp,
			'kitas_user'=>$kitas,
			'paspor_user'=>$paspor,
			'no_kk_user'=>$kk
		);
		$this->Model_kos->update_data('user','id_user',$id_user,$data);
		$data['text']= "Data berhasil diupdate";
		$data['link']= "welcome/profile";
		$this->load->view('alert',$data);
	}

	function laporan_kunjungan($tipe)
	{
		$this->Model_kos->anysessions('log_user','welcome');
		$this->Model_kos->previlages('previlage','Pengelola','welcome');
		$username= $this->session->userdata('log_user');
		$data['user']= $this->Model_kos->one_where('user','username',$username)->row();
		if(empty($tipe)){
			redirect('welcome');
		}else{
			IF($tipe=="Rumah_Kos"){
				$data['jenis']= "Kamar"; $data['no_SubUnit']= "no_kamar"; $data['tipe']= $tipe; $data['id_sewa']= 'id_sewa_kamar';
				$data['unit']= $this->Model_kos->select_unit($tipe);
				$pilihan="cek_in,cek_out,id_rumah,alamat_user,tlp_user,nama_user,id_sewa_kamar,no_kamar,nama_rumah,status_sewa";
				if($this->input->post('show')=='1'){
					$date_from= date('Y-m-d', strtotime($this->input->post('date_from',true)));
					$date_end= date('Y-m-d', strtotime($this->input->post('date_end',true)));
					$id_rumah= $this->input->post('select_unit',true);
					$data['id_unit']=$id_rumah; $data['date_first']=$date_from; $data['date_last']=$date_end;
					$data['penyewa']= $this->Model_kos->table_unit($pilihan,'penyewa_kos',$id_rumah,$date_from,$date_end);
				}else{
					$date_from=""; $date_end="";$id_rumah=""; $data['id_unit']=""; $data['date_first']=""; $data['date_last']="";
					$data['penyewa']= $this->Model_kos->table_unit($pilihan,'penyewa_kos',$id_rumah,$date_from,$date_end);
				}
				$this->load->view('laporan_kunjungan',$data);
			}elseif ($tipe=="Kontrakan") {
				$data['jenis']= "Rumah"; $data['no_SubUnit']= "no_rumah"; $data['tipe']= $tipe; $data['id_sewa']= 'id_sewa_kontrakan';
				$data['unit']= $this->Model_kos->select_unit($tipe);
				$pilihan="cek_in,cek_out,id_rumah,alamat_user,tlp_user,nama_user,id_sewa_kontrakan,no_rumah,nama_rumah,status_sewa";
				if($this->input->post('show')=='1'){
					$date_from= date('Y-m-d', strtotime($this->input->post('date_from',true)));
					$date_end= date('Y-m-d', strtotime($this->input->post('date_end',true)));
					$id_rumah= $this->input->post('select_unit',true);
					$data['id_unit']=$id_rumah; $data['date_first']=$date_from; $data['date_last']=$date_end;
					$data['penyewa']= $this->Model_kos->table_unit($pilihan,'penyewa_kontrakan',$id_rumah,$date_from,$date_end);
				}else{
					$date_from=""; $date_end="";$id_rumah=""; $data['id_unit']=""; $data['date_first']=""; $data['date_last']="";
					$data['penyewa']= $this->Model_kos->table_unit($pilihan,'penyewa_kontrakan',$id_rumah,$date_from,$date_end);
				}
				$this->load->view('laporan_kunjungan',$data);
			}else{
				redirect('welcome');
			}
		}

	}

	function print_laporan($tipe,$id_rumah,$date_first,$date_end)
	{
		$this->Model_kos->anysessions('log_user','welcome');
		$this->Model_kos->previlages('previlage','Pengelola','welcome');
		IF($tipe=="Rumah_Kos"){
			$data['jenis']= "Kamar"; $data['tipe']= $tipe;  $data['no_SubUnit']= "no_kamar";
			$pilihan="cek_in,cek_out,id_rumah,alamat_user,tlp_user,nama_user,id_sewa_kamar,no_kamar,nama_rumah,status_sewa";
			$data['penyewa']= $this->Model_kos->table_unit($pilihan,'penyewa_kos',$id_rumah,$date_first,$date_end);
		}elseif ($tipe=="Kontrakan") {
			$data['jenis']= "Rumah"; $data['no_SubUnit']= "no_rumah"; $data['tipe']= $tipe;
			$pilihan="cek_in,cek_out,id_rumah,alamat_user,tlp_user,nama_user,id_sewa_kontrakan,no_rumah,nama_rumah,status_sewa";
			$data['penyewa']= $this->Model_kos->table_unit($pilihan,'penyewa_kontrakan',$id_rumah,$date_first,$date_end);
		}else{
			redirect('welcome');
		}
		$this->load->view('print_laporan',$data);
	}

	function pengaduan()
	{
		$this->Model_kos->anysessions('log_user','welcome');
		$this->Model_kos->previlages('previlage','Pengelola','welcome');
		if($this->session->userdata('previlage')=="Pengelola"){
			$username= $this->session->userdata('log_user');
			$data['user']= $this->Model_kos->one_where('user','username',$username)->row();
			$data['pelanggaran']= $this->Model_kos->pelaporan($username)->result();
			$this->load->view('kritik',$data);
		}else{
			redirect('welcome');
		}
	}

	function survei()
	{
		$this->Model_kos->anysessions('log_user','welcome');
		$this->Model_kos->previlages('previlage','Pengelola','welcome');
		$username= $this->session->userdata('log_user');
		$data['user']= $this->Model_kos->one_where('user','username',$username)->row();
		$data['survei']= $this->Model_kos->survei($username)->result();
		$this->load->view('survei',$data);
	}

	function daftar()
	{
		if(!empty($this->session->userdata('log_user'))){
		$username= $this->session->userdata('log_user');
		$data['user']= $this->Model_kos->one_where('user','username',$username)->row();
		$this->load->view('daftar',$data);
		}else{
			$this->load->view('daftar');
		}
	}

	function signup_user()
	{
		$nama = $this->input->post('nama',true);
		$username = $this->input->post('username',true);
		$password = MD5($this->input->post('password',true));
		$previlage = $this->input->post('previlage',true);
		$tlp = $this->input->post('tlp',true);
		$alamat = $this->input->post('alamat',true);
		$jk = $this->input->post('jk',true);
		if($this->input->post('ktp',true)!=""){ $ktp = $this->input->post('ktp',true);}else{ $ktp="";}
		if($this->input->post('kitas',true)!=""){ $kitas = $this->input->post('kitas',true);}else{ $kitas="";}
		if($this->input->post('paspor',true)!=""){ $paspor = $this->input->post('paspor',true);}else{ $paspor="";}
		$kk = $this->input->post('kk',true);
		$email = $this->input->post('email',true);
		if($this->input->post('userfile')==""){
			$data = array(
				'nama_user'=>$nama,
				'username'=>$username,
				'password'=>$password,
				'previlage_user'=>$previlage,
				'tlp_user'=>$tlp,
				'jk_user'=>$jk,
				'email_user'=>$email,
				'alamat_user'=>$alamat,
				'ktp_user'=>$ktp,
				'kitas_user'=>$kitas,
				'paspor_user'=>$paspor,
				'no_kk_user'=>$kk
			);
			$this->Model_kos->insert_data('user',$data);
			$this->session->set_flashdata('result_form', 'Selamat Anda sudah bergabung dengan kami.');
			header('location:'.base_url().'welcome/daftar');
		}else{
			$nm_pict= "user_".$id_user;
			$config['upload_path']= './assets/img/users/';
			$config['allowed_types']= 'jpg|png|jpeg';
			$config['max_size']= '200';
			$config['file_name']= $nm_pict;
			$this->load->library('upload',$config);
			if(!$this->upload->do_upload('userfile')){
				$error= $this->upload->display_errors();
				$this->session->set_flashdata('result_form', $error);
				header('location:'.base_url().'welcome/daftar');
			}else{
				$pict= $this->upload->data();
				$data= array(
					'nama_user'=>$nama,
					'username'=>$username,
					'password'=>$password,
					'previlage_user'=>$previlage,
					'tlp_user'=>$tlp,
					'jk_user'=>$jk,
					'email_user'=>$email,
					'alamat_user'=>$alamat,
					'ktp_user'=>$ktp,
					'kitas_user'=>$kitas,
					'paspor_user'=>$paspor,
					'no_kk_user'=>$kk,
					'foto_user'=>$pict['file_name']
				);
				$this->Model_kos->insert_data('user',$data);
				$this->session->set_flashdata('result_form', 'Selamat Anda sudah bergabung dengan kami.');
				header('location:'.base_url().'welcome/daftar');
			}
		}
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}
}