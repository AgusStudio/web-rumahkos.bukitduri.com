<?php
defined('BASEPATH') OR EXIT('No direct access allowed');

class Model_kos extends CI_Model
{
	public	function __construct()
	{
		parent::__construct();
	}
	
	public function get_data($table)
	{
		return $this->db->get($table);
	}

	public function update_data($table,$field,$id,$data)
	{
		return $this->db->where($field,$id)->update($table,$data);
	}

	public function delete_data($table,$field,$id)
	{
		return $this->db->where($field,$id)->delete($table);
	}

	public function del_fasilitas($id,$kat)
	{
		return $this->db->query("DELETE FROM relasi_fasilitas WHERE id_rumah = '$id' and id_fasilitas in (select m2.id_fasilitas from fasilitas m2 where kategori_fasilitas='$kat')");
	}

	function pelaporan($username)
	{
		return $this->db->query("select m1.*,m2.nama_rumah FROM pelaporan m1 join view_pemilik m2 on m2.id_rumah = m1.id_rumah where m2.username='$username'");
	}

	function survei($username)
	{
		return $this->db->query("select m1.*,m2.nama_rumah,m3.nama_user,m3.tlp_user FROM survei m1 join view_pemilik m2 on m2.id_rumah = m1.id_rumah join user m3 on m3.id_user=m1.id_user where m2.username='$username'");
	}

	function pelaporan_admin()
	{
		return $this->db->query("select m1.*,m2.nama_rumah,m2.alamat_rumah,m4.rt,m4.rw,m4.nama_desa,m4.kecamatan,m4.kota,m4.provinsi,m3.nama_user,m3.tlp_user FROM pelaporan m1 join rumah_sewa m2 on m2.id_rumah = m1.id_rumah join user m3 on m3.id_user=m1.id_user join wilayah m4 on m4.id_rt=m2.id_rt");
	}
	function pelaporan_rt($id_ketua_rt)
	{
		return $this->db->query("select m1.*,m2.nama_rumah,m2.alamat_rumah,m4.rt,m4.rw,m4.nama_desa,m4.kecamatan,m4.kota,m4.provinsi,m3.nama_user,m3.tlp_user FROM pelaporan m1 join rumah_sewa m2 on m2.id_rumah = m1.id_rumah join user m3 on m3.id_user=m1.id_user join wilayah m4 on m4.id_rt=m2.id_rt where m4.id_ketua_rt=$id_ketua_rt");
	}

	public function insert_data($table,$data)
	{
		return $this->db->insert($table,$data);
	}

	function select_unit($tipe)
	{
		return $this->db->select('id_rumah,nama_rumah')->from('view_pemilik')->where("kategori_rumah='$tipe'")->where("status_rumah='1'")->where("status_delete_rumah='0'")->get()->result();
	}

	function table_unit($pilihan,$tab,$id,$date_from,$date_end)
	{
		return $this->db->select($pilihan)->from($tab)->where("id_rumah='$id'")->where("cek_in between '$date_from' and '$date_end'")->get()->result();
	}


	function search($src1,$src2,$str,$f,$v)
	{
		$this->db->like($src1,$str);
		$this->db->or_like($src2,$str);
		$this->db->or_like('nama_desa',$str);
		$this->db->or_like('kecamatan',$str);
		$this->db->or_like('kota',$str);
		$this->db->or_like('provinsi',$str);
		$this->db->join('wilayah m2','m2.id_rt=m1.id_rt');
		$this->db->where($f,$v);
		$this->db->where('status_delete_rumah','0');
		return $this->db->get('rumah_sewa m1');
	}

	function page_search($start,$limit,$src1,$src2,$str)
	{
		return $this->db->order_by('tgl_update','asc')->limit($start,$limit)->like($src1,$str)->or_like($src2,$str)->or_like('nama_desa',$str)->or_like('kecamatan',$str)->or_like('kota',$str)->or_like('provinsi',$str)->join('wilayah m2','m2.id_rt=m1.id_rt')->where('status_rumah','1')->where('status_delete_rumah','0')->get('rumah_sewa m1');
	}

	function search_byfilter($a,$b,$c1,$c2,$c3,$c4,$c5,$z)
	{
		return $this->db->select($z)->from('view_fasilitas m1')->join('rumah_sewa m2','m2.id_rumah=m1.id_rumah')->where("id_fasilitas in ('$c1','$c2','$c3','$c4','$c5')")->where("harga_perbulan between '$a' and '$b'")->where('m2.status_rumah','1')->where('m2.status_delete_rumah','0')->get();
	}

	function page_search_byfilter($start,$limit,$a,$b,$c1,$c2,$c3,$c4,$c5,$z)
	{
		return $this->db->select($z)->from('view_fasilitas m1')->join('rumah_sewa m2','m2.id_rumah=m1.id_rumah')->order_by('tgl_update','asc')->limit($start,$limit)->where("id_fasilitas in ('$c1','$c2','$c3','$c4','$c5')")->where("harga_perbulan between '$a' and '$b'")->where('m2.status_rumah','1')->where('m2.status_delete_rumah','0')->get();
	}

	function search_byfilter2($a,$b,$z)
	{
		return $this->db->select($z)->from('view_fasilitas m1')->join('rumah_sewa m2','m2.id_rumah=m1.id_rumah')->where("harga_perbulan between '$a' and '$b'")->where('m2.status_rumah','1')->where('m2.status_delete_rumah','0')->get();
	}

	function page_search_byfilter2($start,$limit,$a,$b,$z)
	{
		return $this->db->select($z)->from('view_fasilitas m1')->join('rumah_sewa m2','m2.id_rumah=m1.id_rumah')->order_by('tgl_update','asc')->limit($start,$limit)->where("harga_perbulan between '$a' and '$b'")->where('m2.status_rumah','1')->where('m2.status_delete_rumah','0')->get();
	}

	function one_where($table,$field,$id)
	{
		return $this->db->where($field,$id)->get($table);
	}

	function two_where($table,$field1,$id1,$field2,$id2)
	{
		return $this->db->where($field1,$id1)->where($field2,$id2)->get($table);
	}

	function three_where($table,$field1,$id1,$field2,$id2,$field3,$id3)
	{
		return $this->db->where($field1,$id1)->where($field2,$id2)->where($field3,$id3)->get($table);
	}

	function one_join($table,$join,$r,$field,$id)
	{
		return $this->db->join($join,$r)->where($field,$id)->get($table);
	}

	function one_join_two_where($table,$join,$r,$field,$id,$field2,$id2)
	{
		return $this->db->join($join,$r)->where($field,$id)->where($field2,$id2)->get($table);
	}

	function two_join($table,$join1,$r1,$join2,$r2,$field1,$id1,$field2,$id2)
	{
		return $this->db->join($join1,$r1)->join($join2,$r2)->where($field1,$id1)->where($field2,$id2)->get($table);
	}

	function inc_table($table){
		$query = $this->db->query("show table status like '$table'");
		return $query->row();
	}

	function halaman($per_page,$segment,$site_url,$tabel)
	{
		$config['base_url'] = site_url($site_url);
		$config['total_rows'] = $tabel;
		$config['per_page'] = $per_page;
		$config['uri_segment'] = $segment;
		$config['full_tag_open'] = '<ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul>';
		$config['first_link'] = '&laquo; First';
		$config['first_tag_open'] = '<li class="page-link">';
		$config['first_tag_close'] = '</li>';
		$config['last_link'] = 'Last &raquo;';
		$config['last_tag_open'] = '<li class="page-link">';
		$config['last_tag_close'] = '</li>';
		$config['next_link'] = '&raquo;';
        $config['next_tag_open'] = '<li class="page-link">';
        $config['next_tag_close'] = '</li>';
		$config['prev_link'] = '&laquo;';
		$config['prev_tag_open'] = '<li class="page-link">';
		$config['prev_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li class="page-link">';
		$config['num_tag_close'] = '</li>';
		$this->pagination->initialize($config);
	}

	function page_data($start,$limit,$orderby,$tabel)
	{
		return $this->db->order_by($orderby,'asc')->limit($start,$limit)->where('status_rumah','1')->where('status_delete_rumah','0')->get($tabel);
	}

	function fasilitas($start,$limit,$f,$v,$f2,$v2,$tabel)
	{
		return $this->db->limit($start,$limit)->where($f,$v)->where($f2,$v2)->get($tabel);
	}

	function anysessions($user,$control)
	{
		if(!$this->session->userdata($user)){
			redirect($control);
		}
	}
	
	function previlages($user,$previlage,$control)
	{
		if($this->session->userdata($user)!=$previlage){
			redirect($control);
		}
	}

}