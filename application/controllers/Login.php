<?php
defined('BASEPATH') OR EXIT('No direct script access allowed');

class Login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	
	function index()
	{
		$username = $this->input->post('username',true);
		$password = $this->input->post('password',true);
		$previlage = $this->input->post('previlage',true);
		$hast = MD5($password);
		if($previlage=="Pengelola"){
			$akun = $this->Model_kos->three_where('user','username',$username,'password',$hast,'previlage_user','Pengelola')->num_rows();	
			if($akun > 0)
			{
				$data = array(
					'log_user'=>$username,
					'previlage'=>$previlage,
					'logged_in'=>true
				);	
				$this->session->set_userdata($data);
				redirect ('welcome');
			}
			else
			{
				$data['text']="Login Gagal";
				$data['link']= 'welcome';
				$this->load->view('alert',$data);
			}
		}else{
			$akun = $this->Model_kos->three_where('user','username',$username,'password',$hast,'previlage_user','User')->num_rows();	
			if($akun > 0)
			{
				$data = array(
					'log_user'=>$username,
					'previlage'=>$previlage,
					'logged_in'=>true
				);	
				$this->session->set_userdata($data);
				redirect ('welcome');
			}
			else
			{
				$data['text']="Login Gagal";
				$data['link']= 'welcome';
				$this->load->view('alert',$data);
			}
		}
	}
	
	function admin()
	{
		$this->load->view('admin/login');
	}

	function login_admin()
	{
    	$username= $this->input->post('username',true);
    	$password= MD5($this->input->post('password',true));
    	$previlage = $this->input->post('previlage',true);
    	if($previlage=="Ketua RT"){
    		$cek= $this->Model_kos->three_where('ketua_rt','username',$username,'password',$password,'status_rt','1');
    	}else{
    		$cek= $this->Model_kos->three_where('user','username',$username,'password',$password,'previlage_user','Administrator');
    	}
    	if($cek->num_rows()>0){
    		$user= $cek->row();
			$data = array(
                'log_username'=>$user->username,
                'log_previlage'=>$previlage,
                'logged_in'=>true
            	);
        $this->session->set_userdata($data);
        redirect('admin');
        }else{
            $this->session->set_flashdata('result_login', 'Username atau Password yang anda masukkan salah.');
        	header('location:'.base_url().'login/admin');
        }
	}
}