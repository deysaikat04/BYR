<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 

class Pages extends CI_Controller {
 
    public function view($page = 'Home')
    {
				$data['admin'] = 'http://127.0.0.1/byr_admin/';
        if (!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
            show_404();
        }
        if($page === 'Home'){
            $this->load->model('HotelModel');
            /*$recomOne = $this->HotelModel->get_recomSetOne();
            $data['recomSetOne'] = $recomOne;
            $recomTwo = $this->HotelModel->get_recomSetTwo();
            $data['recomSetTwo'] = $recomTwo;
            $data['noticesetFirst']= $this->HotelModel->get_noticeFirst();
            $data['noticeset']= $this->HotelModel->get_notice();*/
            $data['hotelSet'] = $this->HotelModel->select_allHotel();            
					
            $data['title'] = ucfirst($page);
            $this->load->view('common/header/Header');
            $this->load->view('pages/'.$page, $data);
            $this->load->view('common/footer/Footer');
        } 
			else if($page === 'Contact'){
            $data['title'] = ucfirst($page);
            $this->load->view('common/header/Header');
            $this->load->view('pages/'.$page, $data);
            $this->load->view('common/footer/Footer');
			}
			else {
            $data['title'] = ucfirst($page);
            $this->load->view('common/header/Header');
            $this->load->view('pages/'.$page, $data);
            $this->load->view('common/footer/Footer');
        }
    }
}
