<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: dipan
 * Date: 20-08-2017
 * Time: 10:51
 */
class HotelModel extends CI_Model{
    
    public function get_hotel($loc){
        $query = $this->db->query("SELECT * FROM hotel_tb h, image_tb i where h.id = i.h_id AND i.is_cover=1 AND city = '$loc'");
        $result = $query->result();
        return $result;
    }
    public function get_hotelDetail($id) {
        $query = $this->db->query('SELECT * FROM hotel_tb WHERE Id='.$id.'');
        $result = $query->result();
        return $result;
    }
    public function get_images($id) {
        $this->db->limit(9);
        $query = $this->db->query('SELECT * FROM image_tb WHERE h_id='.$id.'');
        $result = $query->result();
        return $result;
    }
    public function get_count($id) {
        $query = $this->db->query("SELECT * FROM hotel_tb  where id=$id");
        $row_count = $query->num_rows();
        return $row_count;
    } // used
		public function get_count_hotel($city) {
        $query = $this->db->query("SELECT * FROM hotel_tb  where city='$city'");
        $row_count = $query->num_rows();
        return $row_count;
    }
		public function select_allHotel(){
			$query = $this->db->query("SELECT * FROM hotel_tb h, image_tb i where h.id = i.h_id AND i.is_cover=1");
			$result = $query->result();
			return $result;
		}
		public function registerNew($vFormData){
        if($this->db->insert('user_tb', $vFormData)){
            $lastDataId = $this->db->insert_id();
            return $lastDataId;
        } else {
            return false;
        }

    }
		public function loginCheck($u_name,$pass){
				$query = $this->db->query("SELECT * FROM user_tb  where u_name='$u_name' AND pass='$pass'");			
        $row_count = $query->num_rows();
        return $row_count;
		}
    public function get_userDetail($u_name,$pass){
				$query = $this->db->query("SELECT * FROM user_tb  where u_name='$u_name' AND pass='$pass'");			
        $result = $query->result();
        return $result;
		}
	  public function insertBooking($bookingData){
        if($this->db->insert('booking_detail', $bookingData)){
            $lastDataId = $this->db->insert_id();
            return $lastDataId;
        } else {
            return false;
        }

    }
}