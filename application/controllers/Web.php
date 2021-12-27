<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Web extends CI_Controller
{

	public function index()
	{
		$data['web_ppdb']	 = $this->web->web_utama();
		$this->load->view('web/index', $data);
	}

	public function idbaru($value = '')
	{
		echo $this->web->pendaftaran('id_baru');
	}

	public function pendaftaran()
	{
		$data = array(
			'id_daftar'			=> $this->web->pendaftaran('id_baru'),
			'web_ppdb'			=> $this->web->pendaftaran('status_ppdb'),
			'v_pdd'				=> $this->web->pendaftaran('v_pdd'),
			'v_penghasilan'		=> $this->web->pendaftaran('v_penghasilan'),
			'v_pekerjaan_ayah'	=> $this->web->pendaftaran('v_pekerjaan_ayah'),
			'v_pekerjaan_ibu'	=> $this->web->pendaftaran('v_pekerjaan_ibu'),
			'v_pekerjaan_wali'	=> $this->web->pendaftaran('v_pekerjaan_wali')
		);

		if ($data['web_ppdb']->status_ppdb == 'tutup') {
			// redirect('404');
			return $this->load->view('pendaftaran_tutup');
		}

		$this->load->view('web/pendaftaran', $data);

		if (isset($_POST['btndaftar'])) {
			// var_dump($this->input->post()); exit();

			// add by myself
			$this->load->library('upload');
			$dataInfo = array();
			$files = $_FILES;
			$cpt = count($_FILES['userfile']['name']);
			for ($i = 0; $i < $cpt; $i++) {
				$_FILES['userfile']['name']     = $files['userfile']['name'][$i];
				$_FILES['userfile']['type']     = $files['userfile']['type'][$i];
				$_FILES['userfile']['tmp_name'] = $files['userfile']['tmp_name'][$i];
				$_FILES['userfile']['error']    = $files['userfile']['error'][$i];
				$_FILES['userfile']['size']     = $files['userfile']['size'][$i];

				$this->upload->initialize($this->set_upload_options());
				// $this->upload->do_upload();

				if (!$this->upload->do_upload('userfile')) {
					$this->session->set_flashdata('message', $this->upload->display_errors());
				} else {
					// $this->upload->do_upload();
					$dataInfo[] = $this->upload->data();
				}
			}

			$file_kk_dan_ktp = array(
				'kk'  => $dataInfo[0]['file_name'],
				'ktp' => $dataInfo[1]['file_name'],
			);

			$acts = $this->web->pendaftaran('daftar', $this->input, $file_kk_dan_ktp);
			// 

			$this->session->set_userdata('no_pendaftaran', $this->input->post('nis'));
			redirect('panel_siswa');
		}
	}

	private function set_upload_options()
	{
		//upload an image options
		$config = array();
		$config['image_library']  = 'gd2';
		$config['create_thumb']   = TRUE;
		$config['maintain_ratio'] = TRUE;
		$config['upload_path']    = './uploads';
		$config['allowed_types']  = 'gif|jpg|png|jpeg';
		$config['max_size']       = '0';
		$config['overwrite']      = FALSE;

		$this->load->library('image_lib', $config);
		$this->image_lib->resize();

		return $config;
	}

	public function logcs()
	{
		$data['web_ppdb']	 = $this->web->pendaftaran('status_ppdb');
		if ($data['web_ppdb']->status_ppdb == 'tutup') {
			redirect('404');
		}

		if ($this->session->userdata('no_pendaftaran') != NULL) {
			redirect('panel_siswa');
		} else {
			$this->load->view('web/index', $data);

			if (isset($_POST['btnlogin'])) {
				$send = array(
					'username' => $this->input->post('username'),
					'password' => $this->input->post('password')
				);
				$auth = $this->web->auth('cek-masuk', $send);

				if ($auth['sum'] == 0) {
					$this->session->set_flashdata('msg', $this->err->wrong_auth());
					redirect('logcs');
				} else {
					$this->session->set_userdata('no_pendaftaran', $auth['res']->no_pendaftaran);
					redirect('panel_siswa');
				}
			}
		}
	}

	function error_not_found()
	{
		$this->load->view('404_content');
	}
}
