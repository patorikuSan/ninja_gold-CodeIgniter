<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sources extends CI_Controller {

	public function index()
	{
		$total = $this->session->userdata("total_golds");
		if(!isset($total)){
			$this->session->set_userdata("total_golds", 0);
			$this->session->set_userdata("messages", "");
		} else {
			$total = $this->session->userdata("total_golds");
		}
		$data = array(
			"totals" => $total,
			"messages" => $this->session->userdata("messages")
		);
		$this->load->view("activity",$data);
	}

	public function process_money()
	{
		$post = $this->input->post('building');
		$msg_box = $this->session->userdata('messages');
		$cash = $this->session->userdata('total_golds');
		if($post != NULL && $post == 'Farm'){
			// $cash = $this->session->userdata('total_golds');
			$farm_cash = rand(10, 20);
			$date = date("d/m/Y h:i a");
			$farm_msg = 'Earned '.$farm_cash .' golds from farm on ' .$date; 
			$this->session->set_userdata('farm_cash', $farm_cash);
			$this->session->set_userdata('total_golds', $cash + $farm_cash);
			$this->session->set_userdata('messages', $msg_box . "_" . $farm_msg);
			// $this->session->unset_userdata('messages');

		}
		if($post != NULL && $post == 'Cave'){
			// $cash = $this->session->userdata('total_golds');
			$cave_cash = rand(5, 10);
			$this->session->set_userdata('total_golds', $cash + $cave_cash);
			$date = date("d/m/Y h:i a");
			$cave_msg = 'Earned '.$cave_cash .' golds from cave on ' .$date; 
			$this->session->set_userdata('messages', $msg_box . "_" . $cave_msg);

		}
		
		if($post != NULL && $post == 'House'){
			// $cash = $this->session->userdata('total_golds');
			$house_cash = rand(2, 5);
			$date = date("d/m/Y h:i a");
			$house_msg = 'Earned '.$house_cash .' golds from house on ' .$date; 
			$this->session->set_userdata('total_golds', $cash + $house_cash);
			$this->session->set_userdata('messages', $msg_box . "_" . $house_msg);
		 }

		if($post != NULL && $post == 'Casino'){
			// $cash = $this->session->userdata('total_golds');
			$date = date("d/m/Y h:i a");
			$chance = rand(0,1);
            $casino_cash = rand(0, 50);
			$casino_msg;
            if($chance == 1){
                $casino_cash *= -1;
				$casino_msg = 'Lost ' .$casino_cash .' golds from casino on '.$date;
            } else {
				$casino_msg = 'Earned ' .$casino_cash .' golds from casino on '.$date;
			}
			$this->session->set_userdata('total_golds', $cash + $casino_cash);
			$this->session->set_userdata('messages', $msg_box . "_" . $casino_msg);
		}
		redirect("/");
	}
}
	