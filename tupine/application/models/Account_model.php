<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Account_model extends CI_Model
{
    function login_user($postData)
    {
        $response = array();
        // Select record
        $this->db->select('users.id as users_id,users.email as email,users.password as password');
        $this->db->where('email', $postData['email']);
        $users = $this->db->get('users')->row();
        // echo '<pre>';
        // print_r($users);
        // exit();
        if (isset($users)) {
            if (Encryption_library::verifyPassword($postData['password'], $users->password)) {
                // JWT encode 
                $access_token = Encryption_library::encode($users->users_id);
                // set session access_token
                $this->session->set_userdata(array("users::token" => $access_token));
                $response = array('code' => '0x0000-00000', 'message' => 'Login success.', 'data' => null,);
            } else {

                $response = array('code' => '1x0000-00000', 'message' => 'User or Password incorrect.', 'data' => null,);
            }
        } else {
            $response = array('code' => '1x0000-00000', 'message' => 'User or Password incorrect.', 'data' => null,);
        }

        $response = json_encode($response);
        // $response = json_encode ("code" = "0x0000-00000", $response["message"] = "The sever respone success.", $response["data"]= $q->result_array(),);
        return $response;
    }

    function add_user($postData)
    {
        $response = "";
        if ($postData['email'] != '') {
            // Check entry
            $this->db->select('count(*) as allcount');
            $this->db->where('email', $postData['email']);
            $user = $this->db->get('users');
            $user_check = $user->result_array();

            if ($user_check[0]['allcount'] == 0) {
                // Insert record
                $data = array(
                    "id" => null,
                    "email" =>  trim($postData['email']),
                    "password" => Encryption_library::encryptPassword($postData['password']),
                    "title" =>  trim($postData['title']),
                    "firstname" => trim($postData['firstname']),
                    "lastname" =>  trim($postData['lastname']),
                    "firstnamethai" =>  trim($postData['firstnamethai']),
                    "lastnamethai" => trim($postData['lastnamethai']),
                    "idType" =>  trim($postData['idType']),
                    "idCardInput" => trim($postData['idCardInput']),
                    "idPassportInput" => trim($postData['idPassportInput']),
                    "telephonenumber" =>  trim($postData['telephonenumber']),
                    "address" => trim($postData['address']),
                    "schoolname" =>  trim($postData['schoolname']),
                    "grade" =>  trim($postData['grade']),
                    "urole" => trim($postData['urole']),
                    "birthday" => trim($postData['birthday']),
                    "created_at" =>  null,
                );
                $this->db->insert('users', $data);

                $response = array('code' => '0x0000-00000', 'message' => 'The sever respone success.', 'data' => null,);
                $response = json_encode($response);
            } else {
                $response = array('code' => '1x0000-00000', 'message' => 'The server response user name in duplicate.', 'data' => null,);
                $response = json_encode($response);
            }
        } else {
            $response = array('code' => '2x0000-00000', 'message' => 'The sever respone fail.', 'data' => null,);
            $response = json_encode($response);
        }

        return $response;
    }

    public function enroll_user($postData)
    {
        $response = "";

        if ($postData['user_id'] != '') {
            // Check entry
            $this->db->select('count(*) as allcount');
            $this->db->where('userid', $postData['user_id']);
            $enroll = $this->db->get('enroll');
            $enroll_check = $enroll->result_array();

            if ($enroll_check[0]['allcount'] == 0) {

                $data = array(
                    "id" => trim($postData['id']),
                    "userid" => trim($postData['user_id']),
                    "cgpa" => trim($postData['cgpa']),
                    "engscore_type" => trim($postData['engscore_type']),
                    "engscore" => trim($postData['engscore']),
                    "engscore_file" => trim($postData['engscore_file']),
                    "idcard_file" => trim($postData['idcard_file']),
                    "photo_file" => trim($postData['photo_file']),
                    "transcript_file" => trim($postData['transcript_file']),
                );
                // Insert record

                $this->db->insert('enroll', $data);

                $response = array('code' => '0x0000-00000', 'message' => 'The server response success.', 'data' => null);
                $response = json_encode($response);
            } else {
                $response = array('code' => '1x0000-00000', 'message' => 'Enroll is duplicate!', 'data' => null);
                $response = json_encode($response);
            }
        } else {
            $response = array('code' => '2x0000-00000', 'message' => 'The server response fail.', 'data' => null);
            $response = json_encode($response);

        }

        return $response;
    }

   
}
