<?php
defined('BASEPATH') OR EXIT('No direct script access allowed');

class Admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('download');
		$log_admin = $this->session->userdata('log_username');
		if(empty($log_admin)){
			redirect('login/admin');
		}
	}
	
	function index()
	{
		$username= $this->session->userdata('log_username');
		$previlage= $this->session->userdata('log_previlage');
		$data['header_background']= $this->Model_kos->get_data('header_background')->result();
		if($previlage=="Ketua RT"){
			$data['user']= $this->Model_kos->one_where('ketua_rt','username',$username)->row();
		}else{
			$data['user']= $this->Model_kos->one_where('user','username',$username)->row();
		}
		$this->load->view('admin/beranda.php',$data);
	}

	function rumah_sewa($tipe)
	{
		$this->Model_kos->anysessions('log_username','login/admin');
		$username= $this->session->userdata('log_username');
		$previlage= $this->session->userdata('log_previlage');
		if($previlage=="Ketua RT"){
			$user= $this->Model_kos->one_where('ketua_rt','username',$username)->row();
			$data['user']= $user;
		}else{
			$data['user']= $this->Model_kos->one_where('user','username',$username)->row();
		}
		if($tipe=="Rumah_Kos"){
			$data['tipe']="Rumah Kos";
			if($previlage=="Ketua RT"){
				$data['rumah_sewa']= $this->Model_kos->three_where('view_kos','kategori_rumah','Rumah_Kos','status_delete_rumah','0','id_ketua_rt',$user->id_ketua_rt)->result();		
			}else{
				$data['rumah_sewa']= $this->Model_kos->two_where('rumah_sewa','kategori_rumah','Rumah_Kos','status_delete_rumah','0')->result();
			}
		}else{
			$data['tipe']="Rumah Kontrakan";
			if($previlage=="Ketua RT"){
				$data['rumah_sewa']= $this->Model_kos->three_where('view_kontrakan','kategori_rumah','Kontrakan','status_delete_rumah','0','id_ketua_rt',$user->id_ketua_rt)->result();
			}else{
				$data['rumah_sewa']= $this->Model_kos->two_where('rumah_sewa','kategori_rumah','Kontrakan','status_delete_rumah','0')->result();
			}
		}
		$this->load->view('admin/rumah_sewa',$data);
	}

	function detail_rumah($id_rumah,$tipe)
	{
		$this->Model_kos->anysessions('log_username','login/admin');
		if($tipe=="Rumah_Kos"){
			$table="view_kos"; $data['kat']="Rumah Kos"; $table_kamar="kamar_kos"; $status_kamar="status_aktif_kamar";
		}else{ 
			$table="view_kontrakan"; $data['kat']="Kontrakan"; $table_kamar="rumah_kontrakan"; $status_kamar="status_aktif_kontrakan";
		}
		$data['jml_kamar']= $this->Model_kos->two_where($table_kamar,'id_rumah',$id_rumah,$status_kamar,'1')->num_rows();
		$username= $this->session->userdata('log_username');
		$previlage= $this->session->userdata('log_previlage');
		if($previlage=="Ketua RT"){
			$data['user']= $this->Model_kos->one_where('ketua_rt','username',$username)->row();
		}else{
			$data['user']= $this->Model_kos->one_where('user','username',$username)->row();
		}
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
		$this->load->view('admin/detail_rumah',$data);
	}

	function pengaduan()
	{
		$this->Model_kos->anysessions('log_username','login/admin');
		$username= $this->session->userdata('log_username');
		$previlage= $this->session->userdata('log_previlage');
		if($previlage=="Ketua RT"){
			$user= $this->Model_kos->one_where('ketua_rt','username',$username)->row();
			$data['user']= $user;
			$data['pelanggaran'] = $this->Model_kos->pelaporan_rt($user->id_ketua_rt)->result();
		}else{
			$data['user']= $this->Model_kos->one_where('user','username',$username)->row();
			$data['pelanggaran'] = $this->Model_kos->pelaporan_admin()->result();
		}
		$this->load->view('admin/kritik',$data);
	}

	function pesan()
	{
		$this->Model_kos->anysessions('log_username','login/admin');
		$username= $this->session->userdata('log_username');
		$previlage= $this->session->userdata('log_previlage');
		if($previlage=="Administrator"){
			$data['user']= $this->Model_kos->one_where('user','username',$username)->row();
			$data['pesan'] = $this->Model_kos->get_data('komentar')->result();
			$this->load->view('admin/pesan',$data);
		}else{
			redirect('login/admin');
		}
	}

	function ketua_rt()
	{
		$this->Model_kos->anysessions('log_username','login/admin');
		$username= $this->session->userdata('log_username');
		$previlage= $this->session->userdata('log_previlage');
		if($previlage=="Administrator"){
			$data['user']= $this->Model_kos->one_where('user','username',$username)->row();
			$data['ketua_rt'] = $this->Model_kos->get_data('wilayah')->result();
			$data['rt'] = $this->Model_kos->get_data('rt')->result();
			$this->load->view('admin/ketua_rt',$data);
		}else{
			redirect('login/admin');
		}
	}

	function addketua_rt()
	{
		$this->Model_kos->anysessions('log_username','login/admin');
		$previlage= $this->session->userdata('log_previlage');
		if($previlage=="Administrator"){
			$nama= $this->input->post('nama_rt',true);
			$nip= $this->input->post('nip',true);
			$password= MD5($nip);
			$tempat_lahir= $this->input->post('tempat',true);
			$tgl_lahir= date('Y-m-d',strtotime($this->input->post('tgl_lahir',true)));
			$id_rt= $this->input->post('wilayah',true);
			$data= array(
				'nama_user'=>$nama,
				'username'=>$nip,
				'password'=>$password,
				'tempat_lahir'=>$tempat_lahir,
				'tgl_lahir'=>$tgl_lahir,
				'id_rt'=>$id_rt,
				'status_rt'=>'1',
			);
			$cek= $this->Model_kos->two_where('ketua_rt','id_rt',$id_rt,'status_rt','1')->num_rows();
			$cek_nip= $this->Model_kos->one_where('ketua_rt','username',$nip)->num_rows();
			if($cek>=1){
				$this->session->set_flashdata('result_add', 'Wilayah RT/RW sudah eksis.<br/> Pilih wilayah lain!');
	        	header('location:'.base_url().'admin/ketua_rt');
			}else if($cek_nip>=1){
				$this->session->set_flashdata('result_add', 'NIP Ketua RT sudah eksis.<br/> Pastikan NIP yang Anda input benar!');
	        	header('location:'.base_url().'admin/ketua_rt');
			}else{
				$this->Model_kos->insert_data('ketua_rt',$data);
				$this->session->set_flashdata('result_add', 'Data berhasil disimpan.');
	        	header('location:'.base_url().'admin/ketua_rt');
			}	
		}else{
			redirect('login/admin');
		}
	}

	function del_ketua_rt()
	{
		$this->Model_kos->anysessions('log_username','login/admin');
		$previlage= $this->session->userdata('log_previlage');
		if($previlage=="Administrator"){
			$id= $this->input->post('id',true);
			$data= array('status_rt'=>'0');
			$this->Model_kos->update_data('ketua_rt','id_ketua_rt',$id,$data);
			$this->session->set_flashdata('result_del', 'Data berhasil dihapus.');
        	header('location:'.base_url().'admin/ketua_rt');
		}else{
			redirect('login/admin');
		}
	}

	function laporan_kunjungan($tipe)
	{
		$this->Model_kos->anysessions('log_username','login/admin');
		$username= $this->session->userdata('log_username');
		$previlage= $this->session->userdata('log_previlage');
		if($previlage=="Ketua RT"){
			$user= $this->Model_kos->one_where('ketua_rt','username',$username)->row();
			$data['user']= $user;
			$data['unit']= $this->Model_kos->one_join_two_where('rumah_sewa','rt','rt.id_rt=rumah_sewa.id_rt','kategori_rumah',$tipe,'rt.id_rt',$user->id_rt)->result();
		}else{
			$data['user']= $this->Model_kos->one_where('user','username',$username)->row();
			$data['unit']= $this->Model_kos->one_where('rumah_sewa','kategori_rumah',$tipe)->result();
		}
		if(empty($tipe)){
			redirect('login/admin');
		}else{	
			IF($tipe=="Rumah_Kos"){
				$data['jenis']= "Kamar"; $data['no_SubUnit']= "no_kamar"; $data['tipe']= $tipe; $data['id_sewa']= 'id_sewa_kamar';			
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
				$this->load->view('admin/laporan_kunjungan',$data);
			}elseif ($tipe=="Kontrakan") {
				$data['jenis']= "Rumah"; $data['no_SubUnit']= "no_rumah"; $data['tipe']= $tipe; $data['id_sewa']= 'id_sewa_kontrakan';
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
				$this->load->view('admin/laporan_kunjungan',$data);
			}else{
				redirect('login/admin');
			}
		}

	}

	function print_laporan($tipe,$id_rumah,$date_first,$date_end)
	{
		$this->Model_kos->anysessions('log_username','login/admin');
		$data['date_first']= $date_first; $data['date_end']= $date_end;
		IF($tipe=="Rumah_Kos"){
			$data['jenis']= "Kamar"; $data['tipe']= "Rumah Kos";  $data['no_SubUnit']= "no_kamar";
			$pilihan="cek_in,cek_out,id_rumah,alamat_user,tlp_user,nama_user,id_sewa_kamar,no_kamar,nama_rumah,status_sewa";
			$data['penyewa']= $this->Model_kos->table_unit($pilihan,'penyewa_kos',$id_rumah,$date_first,$date_end);
		}elseif ($tipe=="Kontrakan") {
			$data['jenis']= "Rumah"; $data['no_SubUnit']= "no_rumah"; $data['tipe']= "Rumah Kontrakan";
			$pilihan="cek_in,cek_out,id_rumah,alamat_user,tlp_user,nama_user,id_sewa_kontrakan,no_rumah,nama_rumah,status_sewa";
			$data['penyewa']= $this->Model_kos->table_unit($pilihan,'penyewa_kontrakan',$id_rumah,$date_first,$date_end);
		}else{
			redirect('login/admin');
		}
		$this->load->view('admin/print_laporan',$data);
	}

	function profile()
	{
		$this->Model_kos->anysessions('log_username','login/admin');
		$username= $this->session->userdata('log_username');
		$previlage= $this->session->userdata('log_previlage');
		if($previlage=="Ketua RT"){
			$user = $this->Model_kos->one_where('ketua_rt','username',$username)->row();
			$data['user']= $user;
			$data['user_id']= $user->id_ketua_rt;
		}else{
			$user= $this->Model_kos->one_where('user','username',$username)->row();
			$data['user']= $user;
			$data['user_id']= $user->id_user;
		}
		$this->load->view('admin/profile',$data);
	}

	function edit_foto()
	{
		$this->Model_kos->anysessions('log_username','login/admin');
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
			$data['link']= "admin/profile";
			$this->load->view('alert',$data);
		}else{
			$pict= $this->upload->data();
			$data= array(
				'foto_user'=>$pict['file_name']
			);
			$previlage= $this->session->userdata('log_previlage');
			if($previlage=="Ketua RT"){
				$this->Model_kos->update_data('ketua_rt','id_ketua_rt',$id_user,$data);
			}else{
				$this->Model_kos->update_data('user','id_user',$id_user,$data);
			}	
			$data['text']= "Gambar berhasil diupload";
			$data['link']= "admin/profile";
			$this->load->view('alert',$data);
		}
	}

	function ubahprofile()
	{
		$this->Model_kos->anysessions('log_username','login/admin');
		$nama = $this->input->post('nama',true);
		$id_user = $this->input->post('id_user',true);
		$tlp = $this->input->post('tlp',true);
		$alamat = $this->input->post('alamat',true);
		$jk = $this->input->post('jk',true);
		$email = $this->input->post('email',true);
		$data = array(
			'nama_user'=>$nama,
			'tlp_user'=>$tlp,
			'jk_user'=>$jk,
			'email_user'=>$email,
			'alamat_user'=>$alamat,
		);
		$previlage= $this->session->userdata('log_previlage');
		if($previlage=="Ketua RT"){
			$this->Model_kos->update_data('ketua_rt','id_ketua_rt',$id_user,$data);
		}else{
			$this->Model_kos->update_data('user','id_user',$id_user,$data);
		}	
		$data['text']= "Data berhasil diupdate";
		$data['link']= "admin/profile";
		$this->load->view('alert',$data);
	}

	function ubahpassword()
	{
		$this->Model_kos->anysessions('log_username','login/admin');
		$id_user=$this->input->post('id_user',true);
		$current = MD5($this->input->post('current',true));
		$previlage= $this->session->userdata('log_previlage');
		if($previlage=="Ketua RT"){
			$cek= $this->Model_kos->two_where('ketua_rt','id_ketua_rt',$id_user,'password',$current)->num_rows();
		}else{
			$cek= $this->Model_kos->two_where('user','id_user',$id_user,'password',$current)->num_rows();
		}
		$new_pass = MD5($this->input->post('new_password',true));
		$cfm_pass = MD5($this->input->post('cfm_password',true));
		if($cek <= 0){
			$data['text']= "Password lama salah ";
			$data['link']= "admin/profile";
			$this->load->view('alert',$data);
		}else{
			if($new_pass!=$cfm_pass){
				$data['text']= "Confirmasi password baru tidak sama";
				$data['link']= "admin/profile";
				$this->load->view('alert',$data);	
			}else{
				$data = array('password'=>$new_pass);
				if($previlage=="Ketua RT"){
					$this->Model_kos->update_data('ketua_rt','id_ketua_rt',$id_user,$data);
				}else{
					$this->Model_kos->update_data('user','id_user',$id_user,$data);
				}	
				$data['text']= "Password berhasil dirubah ";
				$data['link']= "admin/logout";
				$this->load->view('alert',$data);
			}		
		}
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('login/admin'));
	}
}