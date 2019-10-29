<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
    {
        $result['bus'] = "";

        if(! $this->input->get_post('search'))
        {
            $this->load->view('view_home',$result);
            return ;
        }else {
            $this->load->model('homemodel');
            $result['buses'] = $this->homemodel->getAll();

            $this->load->view('view_home',$result);
        }

    }

    public function test(){
        $this->load->view('view_home');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
