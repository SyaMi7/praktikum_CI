<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {

    
    public function index(){
        
            $this->load->model('pasien_model','pasien1');
            $this->pasien1->id=1;
            $this->pasien1->kode='010001';
            $this->pasien1->nama='Faiz Fikri';
            $this->pasien1->gender='L';
           

            $this->load->model('pasien_model','pasien2');
            $this->pasien2->id=2;
            $this->pasien2->kode='020001';
            $this->pasien2->nama='Pandan Wangi';
            $this->pasien2->gender='P';

            $this->load->model('pasien_model','pasien3');
            $this->pasien3->id=3;
            $this->pasien3->kode='010002';
            $this->pasien3->nama='Riyadi Salim';
            $this->pasien3->gender='L';
    
            $data['Judul']='Data Pasien';
            $data['list_pasien']=[$this->pasien1,
                            $this->pasien2,$this->pasien3];
              
            
            
            $this->load->view('header');
            $this->load->view('pasien/index',$data);
            $this->load->view('footer');
	}
    
    public function list(){
        $this->load->model('pasien_model');// load model
        $data['pasien'] = $this->pasien_model->getAll();// query

        $this->load->view('header');
        $this->load->view('pasien/list',$data);
        $this->load->view('footer');
    }

    public function view($id){
        $this->load->model('pasien_model');
        $data['pasien']=$this->pasien_model->findById($id);
        
        $this->load->view('header');
        $this->load->view('pasien/view',$data);
        $this->load->view('footer');
    }

}