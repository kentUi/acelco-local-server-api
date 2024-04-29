<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {   
    public $Billing;
    
	public function index(){

    }
	public function billing()
	{
	    header("Content-type: application/json; charset=UTF-8");
        header("Access-Control-Allow-Origin: *"); 
        header("Access-Control-Allow-Methods: POST"); 
        header("Access-Control-Max-Age: 86400");
        header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Methods, Authorization, X-Request-With");
        
        // $data = json_decode(file_get_contents('php://input'));
		// if ($data) {
		    
		    $accessToken = '';
			
		    $this->load->model('Billing');
            $forward = $this->Billing->getBilling();
            
            echo json_encode(['billing' => $forward]);
		//}
	}

    public function payments()
	{
	    header("Content-type: application/json; charset=UTF-8");
        header("Access-Control-Allow-Origin: *"); 
        header("Access-Control-Allow-Methods: POST"); 
        header("Access-Control-Max-Age: 86400");
        header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Methods, Authorization, X-Request-With");
        
        // $data = json_decode(file_get_contents('php://input'));
		// if ($data) {
			
		    $this->load->model('Billing');
            $forward = $this->Billing->getBilling();
            
            echo json_encode(['billing' => $forward]);
		//}
	}
}

