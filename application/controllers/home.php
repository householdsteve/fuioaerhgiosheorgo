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
 		$this->load->helper('file'); 		
 	}

	public function index($args=null)
	{
	  
        $pagevars = array(
               "appenv"=>$_SERVER["APPENV"], // THIS ALLOWS US TO WRITE VARIABLES BASE ON ENVIRONMENT
               "baseurl"=> base_url(), // THE BASE URL OF THE SITE
               "titlebase" => "Armani/Casa - ", // THE FIRST PART OF THE PAGE TITLE
               "title"=>"Dress your home", // THE SECOND PART OF PAGE TITLE. THIS SHOULD BE EXTENDED BELOW BASED ON CONTENT
               "description" => "Welcome to Armani Casa. Take a glance at our catalog then come visit us. Big things are coming in 2014.", // THIS IS FOR META TAGS
               "keywords" => "armani, casa, interior, design, service, home, giorgio, milano, new york, paris", // THIS TOO, THESE BOTH SHOULD BE EXTENDED BASED ON CONTEXT
               "og" => array("image"=> base_url()."assets/img/og.jpg",
                             "title"=> "Armani/Casa - Dress your home") // THESE ARE FOR SOCIAL CHANNELS LIKE FACEBOOK WHERE AN IMAGE IS SHARED.
          );
       
    $this->twig->display('index.inc', array('pagevars'=> (object) $pagevars));
	}
	
	public function catalog($args=null)
	{
	  
        $pagevars = array(
               "appenv"=>$_SERVER["APPENV"], // THIS ALLOWS US TO WRITE VARIABLES BASE ON ENVIRONMENT
               "baseurl"=> base_url(), // THE BASE URL OF THE SITE
               "titlebase" => "Armani/Casa - ", // THE FIRST PART OF THE PAGE TITLE
               "title"=>"The catalog at a glance", // THE SECOND PART OF PAGE TITLE. THIS SHOULD BE EXTENDED BELOW BASED ON CONTENT
               "description" => "Take a look into our catalog. For a complete catalog or further details please feel to contact us.", // THIS IS FOR META TAGS
               "keywords" => "", // THIS TOO, THESE BOTH SHOULD BE EXTENDED BASED ON CONTEXT
               "og" => array("image"=> base_url()."assets/img/og.jpg",
                             "title"=> "Armani/Casa - Dress your home") // THESE ARE FOR SOCIAL CHANNELS LIKE FACEBOOK WHERE AN IMAGE IS SHARED.
          );
        
    $fullcatalog = explode(",",read_file("assets/catalog.txt"));
    $sorted = array();
    //echo "<pre>"; print_r($fullcatalog); echo "</pre>";
    foreach($fullcatalog as $row){
      $val = preg_match("/(\S+)\/+(\d*\_*)(\S+)\.(\S+)/",$row,$matches);
      //this gives us:
      // Array
      //       (
      //           [0] => 1_Limited_Edition/1_Aida.jpg
      //           [1] => 1_Limited_Edition
      //           [2] => 1_
      //           [3] => Aida
      //           [4] => jpg
      //       )

      $sorted[] = $matches;
    }
    
       
    $this->twig->display('catalog.inc', array('pagevars'=> (object) $pagevars,'catalog'=>$sorted));
	}
	
	public function ids($args=null)
	{
	  
        $pagevars = array(
               "appenv"=>$_SERVER["APPENV"], // THIS ALLOWS US TO WRITE VARIABLES BASE ON ENVIRONMENT
               "baseurl"=> base_url(), // THE BASE URL OF THE SITE
               "titlebase" => "Armani/Casa - ", // THE FIRST PART OF THE PAGE TITLE
               "title"=>"Interior Design Service", // THE SECOND PART OF PAGE TITLE. THIS SHOULD BE EXTENDED BELOW BASED ON CONTENT
               "description" => "The strategy for the growth of the brand has been reinforced by a commitment to developing an exclusive personal service for an international clientele: Armani/Casa has launched an Interior Design Studio created in response to clients’ demands for complete projects conceived according to the Armani style and philosophy.", // THIS IS FOR META TAGS
               "keywords" => "", // THIS TOO, THESE BOTH SHOULD BE EXTENDED BASED ON CONTEXT
               "og" => array("image"=> base_url()."assets/img/og.jpg",
                             "title"=> "Armani/Casa - Dress your home") // THESE ARE FOR SOCIAL CHANNELS LIKE FACEBOOK WHERE AN IMAGE IS SHARED.
          );
       
    $this->twig->display('ids.inc', array('pagevars'=> (object) $pagevars));
	}
	
	public function philosophy($args=null)
	{
	  
        $pagevars = array(
               "appenv"=>$_SERVER["APPENV"], // THIS ALLOWS US TO WRITE VARIABLES BASE ON ENVIRONMENT
               "baseurl"=> base_url(), // THE BASE URL OF THE SITE
               "titlebase" => "Armani/Casa - ", // THE FIRST PART OF THE PAGE TITLE
               "title"=>"Design Philosophy", // THE SECOND PART OF PAGE TITLE. THIS SHOULD BE EXTENDED BELOW BASED ON CONTENT
               "description" => "Armani/Casa was founded in the year 2000 as a separate division, though seamlessly linked to the other worlds within the Armani Group, providing a platform for Giorgio Armani to set out his vision of the living space: an intimate and very special place, at one and the same time both comfortable and sophisticated.", // THIS IS FOR META TAGS
               "keywords" => "", // THIS TOO, THESE BOTH SHOULD BE EXTENDED BASED ON CONTEXT
               "og" => array("image"=> base_url()."assets/img/og.jpg",
                             "title"=> "Armani/Casa - Dress your home") // THESE ARE FOR SOCIAL CHANNELS LIKE FACEBOOK WHERE AN IMAGE IS SHARED.
          );
       
    $this->twig->display('philosphy.inc', array('pagevars'=> (object) $pagevars));
	}
	
	public function contact($args=null)
	{
	  
        $pagevars = array(
               "appenv"=>$_SERVER["APPENV"], // THIS ALLOWS US TO WRITE VARIABLES BASE ON ENVIRONMENT
               "baseurl"=> base_url(), // THE BASE URL OF THE SITE
               "titlebase" => "Armani/Casa - ", // THE FIRST PART OF THE PAGE TITLE
               "title"=>"Contact", // THE SECOND PART OF PAGE TITLE. THIS SHOULD BE EXTENDED BELOW BASED ON CONTENT
               "description" => "For information and requests please reach out to us.", // THIS IS FOR META TAGS
               "keywords" => "contact, point of sale, stores, locations", // THIS TOO, THESE BOTH SHOULD BE EXTENDED BASED ON CONTEXT
               "og" => array("image"=> base_url()."assets/img/og.jpg",
                             "title"=> "Armani/Casa - Dress your home") // THESE ARE FOR SOCIAL CHANNELS LIKE FACEBOOK WHERE AN IMAGE IS SHARED.
          );
       
    $this->twig->display('contact.inc', array('pagevars'=> (object) $pagevars));
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */