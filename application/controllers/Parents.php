<?php


class Parents extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Message_model');
		$this->load->library('session');
	}

	public function display_price_list()
	{
		$out=$this->Message_model->get_price_list();
		return $out;
	}

	//paypal api???
	public function pay()
	{
		$parent_email = $this->session->users_email;
		$data = array(
			'payment_name' => $this->input->post($parent_email),
			'member_email' => $this->input->post('member_email'),
		);

		$error = $this->Activity_model->save_payment($data);
		if ($error) {
			echo json_encode(array('error' => true,'db_error' => $error['message']));
			return;
		}
	}

	public function fill_health_declare()
	{
		$parent_email = $this->session->users_email;
		$data = array(
			'payment_name' => $this->input->post($parent_email),
			'member_email' => $this->input->post('member_email')
		);

		$error = $this->Activity_model->save_health_declare($data);
		if ($error) {
			echo json_encode(array('error' => true,'db_error' => $error['message']));
			return;
		}

	}

}
