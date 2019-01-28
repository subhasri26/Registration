
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {
        public function __construct()
        {
                parent:: __construct();
                $this->load->helper('url');
                $this->load->library('email');
                $this->load->library('session');
                $this->load->model('Registration_model');
                //Do your magic here
        }
            
        public function index()
        {
            $this->load->view('Registration');
        }

       public function RegisterProcess()
        {
            $this->load->view('Registration');
        }
        public function Register_insert()
        {
            $this->load->view('header.php');
            $firstname = $this->input->post('firstname');
            $lastname = $this->input->post('lastname');
            $email = $this->input->post('email');
            $mobile = $this->input->post('mobile');
            $this->sendMail($email,$firstname);
            $data = array('firstname' => $firstname ,
                            'lastname' => $lastname,
                            'email' => $email,
                            'mobile' => $mobile);
            $result['getdb'] = $this->Registration_model->insert_db($data);
            redirect(base_url().'selectdb');
        }

        public function selectdb()
        {
            $result['getdb'] = $this->Registration_model->selectdb();
            $this->load->view('select',$result);
        }

     public function edit($id = NULL)
        {
            $result['getdb'] = $this->Registration_model->getdata($id);
            $this->load->view('updatedata', $result);
        }
    public function afterEdit($id = NULL)
       {
            $id = $this->input->post('id');
            $firstname = $this->input->post('firstname');
            $lastname = $this->input->post('lastname');
            $email = $this->input->post('email');
            $mobile = $this->input->post('mobile');
            $data = array('firstname' => $firstname ,
                            'lastname' => $lastname,
                            'email' => $email,
                            'mobile' => $mobile);
          $result['getdb'] = $this->Registration_model->editdb($id,$data);
          redirect(base_url().'selectdb');
          //$this->load->view('selectdb', $result);
       }
    public function deletedb($id = NULL)
        {
            $result['getdb'] = $this->Registration_model->deletedb($id);
            redirect(base_url().'selectdb');
        }

  public function sendMail($mailid=NULL,$firstname=NULL)
   {
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.googlemail.com'; 
        $config['smtp_port'] = '465';
        $config['smtp_user'] = ''; // please enter your email 
        $config['smtp_pass'] = '';  //Enter your password
        $config['mailtype'] = 'html';
        $config['charset'] = 'iso-8859-1';
        $this->load->library('email');
        $this->email->initialize($config);
        $this->email->set_newline("\r\n");  
        $message = 'Hai'.$firstname.'Your Registration Process Completed Successfully';
        $this->email->from('example@gmail.com'); 
        $this->email->to($mailid);
        $this->email->subject('Registration Complete');
        $this->email->message($message);
        $result = $this->email->send();
        if(!$this->email->send())
        {
            echo $this->email->print_debugger();
        }   
  }
   

}


/* End of file Registration.php */
/* Location: ./application/controllers/Registration.php */
