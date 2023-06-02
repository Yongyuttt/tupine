<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Account extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Account_model');
	}

	/** ------------------------------------------------------- **
	 **           MANDATORY SCRIPT
    /** ------------------------------------------------------- **/
	public function login()
	{
		if ($this->input->post()) {

			$postData = $this->input->post();

			// get data and post
			$login = $this->Account_model->login_user($postData);

			// get data response
			$login = json_decode($login);

			$this->response_library->responseJSON($login->code, $login->message, $login->data);
		} else {
			$this->load->view('login');
		}
	}

	public function register()
	{
		if ($this->input->post()) {

			$postData = $this->input->post();

			// get data and post
			$account = $this->Account_model->add_user($postData);

			// get data response
			$account = json_decode($account);

			$this->response_library->responseJSON($account->code, $account->message, $account->data);
		} else {
			$this->load->view('register');
		}
	}

	public function add_user()
	{
		if ($this->input->post()) {

			$postData = $this->input->post();

			// get data and post
			$account = $this->Account_model->add_user($postData);

			// get data response
			$account = json_decode($account);

			$this->response_library->responseJSON($account->code, $account->message, $account->data);
		}
	}

	public function profile()
	{
		$codeigniter_instance = &get_instance();
		$user_idtoken = Encryption_library::decode($codeigniter_instance->session->userdata('users::token'));
		// echo '<pre>';
		// print_r($user_idtoken);
		// exit();
		if (isset($user_idtoken)) {
			$this->db->select('users.id as users_id,users.email as email,users.password as password,users.firstname as firstname,users.lastname as lastname');
			$this->db->where('id', $user_idtoken);
			$users = $this->db->get('users')->row();
			$this->load->view('profile', compact('users'));
		} else {
			redirect('');
			die();
		}
	}

	public function logout()
    {
        session_destroy();
        redirect('');
    }

	public function enroll()
	{
		$codeigniter_instance = &get_instance();
		$user_idtoken = Encryption_library::decode($codeigniter_instance->session->userdata('users::token'));
		// echo '<pre>';
		// print_r($user_idtoken);
		// exit();
		if (isset($user_idtoken)) {
			$this->db->select('users.id as users_id, users.email as email,users.password as password,users.firstname as firstname, users.lastname as lastname, users.firstnamethai as firstnamethai, users.lastnamethai as lastnamethai, users.idType as idType, users.idCardInput as idCardInput, users.idPassportInput as idPassportInput, users.birthday as birthday, users.telephonenumber as telephonenumber, users.address as address, users.schoolname as schoolname, users.grade as grade,');
			$this->db->where('id', $user_idtoken);
			$users = $this->db->get('users')->row();

			if ($this->input->post()) {

				 //echo '<pre>';
				 //print_r($_FILES['resulttest']);
				 //exit();

				 if (!empty($_FILES['resulttest'])) {
					$file = $_FILES['resulttest'];
					if ($file['error'] == UPLOAD_ERR_OK) {
						$filename = uniqid() . '' . $file['name'];
						$filepath = 'assets/upload/img/' . $filename;
						if (move_uploaded_file($file['tmp_name'], $filepath)) {
							$resulttest = base_url('') . $filepath;
						}
					}
				} else {
					$resulttest = null;
				}

				if (!empty($_FILES['copyidcard'])) {
					$file = $_FILES['copyidcard'];
					if ($file['error'] == UPLOAD_ERR_OK) {
						$filename = uniqid() . '' . $file['name'];
						$filepath = 'assets/upload/img/' . $filename;
						if (move_uploaded_file($file['tmp_name'], $filepath)) {
							$copyidcard = base_url('') . $filepath;
						}
					}
				} else {
					$copyidcard = null;
				}

				if (!empty($_FILES['photocolor'])) {
					$file = $_FILES['photocolor'];
					if ($file['error'] == UPLOAD_ERR_OK) {
						$filename = uniqid() . '' . $file['name'];
						$filepath = 'assets/upload/img/' . $filename;
						if (move_uploaded_file($file['tmp_name'], $filepath)) {
							$photocolor = base_url('') . $filepath;
						}
					}
				} else {
					$photocolor = null;
				}
				
				if (!empty($_FILES['transcript'])) {
					$file = $_FILES['transcript'];
					if ($file['error'] == UPLOAD_ERR_OK) {
						$filename = uniqid() . '' . $file['name'];
						$filepath = 'assets/upload/img/' . $filename;
						if (move_uploaded_file($file['tmp_name'], $filepath)) {
							$transcript = base_url('') . $filepath;
						}
					}
				} else {
					$transcript = null;
				}

				$postData = array(
					'id' => null,
					'user_id' => $user_idtoken,
					'cgpa' => $this->input->post('cgpa'),
					'engscore_type' => $this->input->post('engscore_type'),
					'engscore' => $this->input->post('engscore'),

					'engscore_file' => $resulttest,
					'idcard_file' => $copyidcard,
					'photo_file' => $photocolor,
					'transcript_file' => $transcript,

				);
				$enroll = $this->Account_model->enroll_user($postData);
				$enroll = json_decode($enroll);
				$this->response_library->responseJSON($enroll->code, $enroll->message, $enroll->data);

			} else {
				$this->load->view('enroll', compact('users'));
			}

		} else {
			redirect('');
			die();
		}


	}
			

}

