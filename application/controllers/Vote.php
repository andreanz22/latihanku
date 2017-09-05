<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vote extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('Models');
	}

	public function index()
	{

		$this->load->view('home');
	}

	public function view_kandidat()
	{
		$datasuara1=$this->Models->getSelectedData2('kandidat',array('id'=>1))->row()->suara;
		$datasuara2=$this->Models->getSelectedData2('kandidat',array('id'=>2))->row()->suara;
		$datasuara3=$this->Models->getSelectedData2('kandidat',array('id'=>3))->row()->suara;
		$data=array(
				'suara1'=>$datasuara1,
				'suara2'=>$datasuara2,
				'suara3'=>$datasuara3,
			);
		$this->load->view('view_kandidat',$data);
	}

	public function pilih($no)
	{
		$this->Models->updatesuara($no);
		redirect('Vote/view_kandidat');
	}

	public function close_vote()
	{
		$this->load->view('wannacry');
	}

	public function finals()
	{
		$hasil=$this->Models->allq("select * from kandidat where suara = (select max(suara) from kandidat)")->row();
		$data=array(
				'title'=>'SELAMAT',
				'hasil'=>$hasil,
			);
		$this->load->view('finals',$data);
	}

	public function kurang($no)
	{
		$this->Models->kurangsuara($no);
		redirect('Vote/view_kandidat');
	}
}
