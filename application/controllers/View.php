<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
				// load Session Library
		$this->load->library('session');
		$this->load->model("HotelModel");
		$this->load->library("pagination");
	}

	
	public function Search(){
		$data['admin'] = 'http://127.0.0.1/byr_admin/';
		$this->form_validation->set_rules('location', 'Location', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('fromDate', 'Primary Contact Number', 'trim');
		$this->form_validation->set_rules('toDate', 'From date', 'trim');
		$this->form_validation->set_rules('people', 'To date', 'trim');
		$this->form_validation->set_rules('rooms', 'Room', 'trim');

//    $this->form_validation->set_rules('leadImg', 'Lead Image', 'trim|required');
		$recom = false;
		if($this->input->post('recom') !== null){
			$recom = true;
		}
		$loc = $this->input->post('location');
				// set array of items in session
		$data['searchInfo']= array(
			'city' => $this->input->post('location'),
			'fDate' => $this->input->post('fromDate'),
			'tDate' => $this->input->post('toDate'),
			'people' => $this->input->post('people'),
			'room' => $this->input->post('rooms')
		);
		$this->session->set_userdata($data['searchInfo']); 
		
		if ($this->form_validation->run() == FALSE)
		{
			$valERR = validation_errors();
			$this->session->set_flashdata('addFromValErr', $valERR);
			redirect(base_url());
		}
		$count = $this->HotelModel->get_count_hotel($loc);
		if($count > 0)
		{
			$this->load->model('HotelModel');
			$data['hotelset']= $this->HotelModel->get_hotel($loc);
			$data['city'] = $loc;
					/*echo "<pre>";
					print_r($data); exit;*/
					$this->load->view('common/header/Header');
					$this->load->view('pages/Room', $data);
					$this->load->view('common/footer/Footer');
				}
				else{
					$this->load->view('common/header/Header');
					$this->load->view('pages/EmptyHotel');
					$this->load->view('common/footer/Footer');
				}
				//$keys = array('city', 'fDate','tDate','people','room');
        //$this->session->unset_userdata($keys);
			}
			public function hotel($id)
			{
				$data['admin'] = 'http://127.0.0.1/byr_admin/';
				$count = $this->HotelModel->get_count($id);
				$data['city'] = $this->session->userdata('city');
				if($count == 1){
					$v_data = $this->HotelModel->get_hotelDetail($id);
					$i_data = $this->HotelModel->get_images($id);
					$data['vcs'] = $v_data;
					$data['imgs'] = $i_data;
						//echo '<pre>';
        //print_r($data); exit;
					$this->load->view('common/header/Header');
					$this->load->view('pages/roomDetail', $data);
					$this->load->view('common/footer/Footer');
				}
				else{
					$this->load->view('common/header/Header');
					$this->load->view('pages/EmptyHotel');
					$this->load->view('common/footer/Footer');
				}
			}
			public function hotelBook($id){
				$data['admin'] = 'http://127.0.0.1/byr_admin/';
				$data['id'] = $id;
				$count = $this->HotelModel->get_count($id);
				
				$this->session->set_userdata('fDate', $this->input->post('fromDate'));
				$this->session->set_userdata('tDate', $this->input->post('toDate'));
				$this->session->set_userdata('people', $this->input->post('people'));
				$this->session->set_userdata('room', $this->input->post('rooms'));			 
				
				$start = $this->session->userdata('fDate');
				$end = $this->session->userdata('tDate');
				$diff = date_diff(date_create($start), date_create($end));				
				$data['rooms'] = $this->session->userdata('room');
				$totNight = $diff->format('%d');
				if($totNight == 0)
					$data['days'] = 1;
				else
					$data['days'] = $totNight;
				
				
				if($count == 1){
					$v_data = $this->HotelModel->get_hotelDetail($id);
					$data['vcs'] = $v_data;
					$u_name = $this->session->userdata('username');
					$pass = $this->session->userdata('password');
					
					  // fetching the user details using unane, pass stored in session
					$data['user_data'] = $this->HotelModel->get_userDetail($u_name,$pass);						
					
					$this->load->view('common/header/Header');
					$this->load->view('pages/Reservation', $data);
					$this->load->view('common/footer/Footer');
				}
				else{
					$this->load->view('common/header/Header');
					$this->load->view('pages/Home');
					$this->load->view('common/footer/Footer');
				}
			}
			public function reservation(){
				$id = $this->input->post('id');
				$uid = $this->input->post('uid');
				$cpn = $this->input->post('cpn');
				
				$this->form_validation->set_rules('fname', 'Name', 'trim');
				$this->form_validation->set_rules('address', 'Street Address', 'trim');
				$this->form_validation->set_rules('mail', 'Mail Address', 'trim');		 
				$this->form_validation->set_rules('phone', 'Phone', 'trim');		 
				$this->form_validation->set_rules('bank', 'bank', 'trim');		 
				$userDetails = array(
					'fname' => $this->input->post('fname'),
					'address' => $this->input->post('address'),
					'mail' => $this->input->post('mail'),
					'mob' => $this->input->post('phone'),
					'payment' => $this->input->post('bank')
				);
				
				$start = $this->session->userdata('fDate');
				$end = $this->session->userdata('tDate');
				$diff = date_diff(date_create($start), date_create($end));
				$totNight = $diff->format('%d');
				if($totNight == 0)
					$data['days'] = 1;
				else
					$data['days'] = $totNight;
				
		  $cost = $cpn * $data['days'] * $this->session->userdata('room'); //net total
		  $gst = $cost * 0.09;
		  $grand = $cost + (2 * $gst);
		  
		  $bookingData = array(
		  	'h_id' => $id,
		  	'u_id' => $uid,
		  	'rooms' => $this->session->userdata('room'),
		  	'people' => $this->session->userdata('people'),	
		  	'nights' => $data['days'],
		  	'dateFrom' => $this->session->userdata('fDate'),
		  	'dateTo' => $this->session->userdata('tDate'),
		  	'netTotal' => $cost,
		  	'cgst' => $gst,
		  	'sgst' => $gst,				
		  	'grand' => $grand
		  );
			//echo "<pre>";
			//print_r($bookingData);
			//exit;			 	
		  
		  $isUploaded = $this->HotelModel->insertBooking($bookingData);
		  if ($isUploaded) {
		  	$this->session->set_flashdata('updateAlbumSucc', "Record has been Updated.");
		  	header("Location: " . base_url('Checkout'));
		  } else {
		  	$this->session->set_flashdata('updateAlbumErr', "We couldn't update the record.");
		  	header("Location: " . base_url('View/reservation/'.$id));
		  }
		  
		  
		}
		public function register()
		{
			$this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[3]');
			$this->form_validation->set_rules('email', 'Email', 'trim');
			$this->form_validation->set_rules('password', 'Password', 'trim');
			$this->form_validation->set_rules('password', 'Confirm Password', 'trim');
			$this->form_validation->set_rules('address', 'Address', 'trim');
			$this->form_validation->set_rules('mobile', 'Mobile', 'trim');
			$recom = false;
			if($this->input->post('recom') !== null){
				$recom = true;
			}

			$vFormData = array(
				'name' => $this->input->post('name'),
				'mail' => $this->input->post('mail'),
				'mobile' => $this->input->post('mobile'),
				'address' => $this->input->post('address'),
				'u_name' => $this->input->post('uname'),
				'pass' => $this->input->post('password')
			);
//        echo "<pre>";
//        print_r($vFormData); exit;

			if ($this->form_validation->run() == FALSE)
			{
				$valERR = validation_errors();
				$this->session->set_flashdata('addFromValErr', $valERR);
				redirect(base_url().'Signup');
			}
			else
			{
            // Insert form data in table
				$lastInsertedId = $this->HotelModel->registerNew($vFormData);

				if ($lastInsertedId) 
            { // if last inserted ID exist
            	$this->session->set_flashdata('addFromSucc', 'Data Added Successfully.');
            	
            } else {
            	$this->session->set_flashdata('addFromErr', 'Encountered an Error While Saving Data.');
            	$data['page'] = 'Signup';
            	redirect(base_url().'Signup');
            }

        }
        $data['page'] = 'Signup';
        redirect(base_url().'Signup');
    }
    public function login()
    {
    	$this->form_validation->set_rules('uname', 'User Name', 'trim|required|min_length[3]');
    	$this->form_validation->set_rules('password', 'password', 'trim');
    	$recom = false;
    	if($this->input->post('recom') !== null){
    		$recom = true;
    	}        
    	$u_name = $this->input->post('uname');
    	$pass = $this->input->post('password');
    	
        //echo "<pre>";
        //print_r($vFormData); exit;

    	if ($this->form_validation->run() == FALSE)
    	{
    		$valERR = validation_errors();
    		$this->session->set_flashdata('addFromValErr', $valERR);
    		redirect(base_url().'Signup');
    	}
    	else
    	{
            // Insert form data in table
    		$count = $this->HotelModel->loginCheck($u_name,$pass);

    		if ($count == 1) 
    		{ 
    			$this->session->set_userdata('username', $u_name);
    			$this->session->set_userdata('password', $pass);
    			
    			
    			$this->load->view('common/header/Header');
    			
    			$this->load->view('pages/Reservation', $data);
    			$this->load->view('common/footer/Footer');
    			redirect(base_url().'Home');
    			
    			
    		} else {
    			$this->session->set_flashdata('addFromErr', 'Error!Please Check your credentials.');
    			$data['page'] = 'LogIn';
    			redirect(base_url().'LogIn');
    		}

    	}
    	
    }
    public function Logout(){
		 //$keys = array('city', 'fDate','tDate','people','room');
    	$this->session->unset_userdata('username');
    	$this->session->unset_userdata('password');
    	
    	redirect(base_url().'Home');
    }

}