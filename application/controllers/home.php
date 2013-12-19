<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	 public function __construct()
 	{
    parent::__construct();
 		$this->load->library('twig');
 		$this->load->helper('url');
 	}

	public function index($args=null)
	{
	  
        $pagevars = array(
               "appenv"=>$_SERVER["APPENV"], // THIS ALLOWS US TO WRITE VARIABLES BASE ON ENVIRONMENT
               "baseurl"=> base_url(), // THE BASE URL OF THE SITE
               "titlebase" => "Armani/Casa - ", // THE FIRST PART OF THE PAGE TITLE
               "title"=>"Dress your home", // THE SECOND PART OF PAGE TITLE. THIS SHOULD BE EXTENDED BELOW BASED ON CONTENT
               "description" => "", // THIS IS FOR META TAGS
               "keywords" => "", // THIS TOO, THESE BOTH SHOULD BE EXTENDED BASED ON CONTEXT
               "og" => array("image"=> base_url()."assets/img/kwikileaks-kwikdesk_logo.png",
                             "title"=> "Armani/Casa - Dress your home") // THESE ARE FOR SOCIAL CHANNELS LIKE FACEBOOK WHERE AN IMAGE IS SHARED.
          );
       
    $this->twig->display('index.inc', array('pagevars'=> (object) $pagevars));
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */