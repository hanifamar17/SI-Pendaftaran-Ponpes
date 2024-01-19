<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Categories extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);		     
    }

    //Menampilkan data 
    public function index_get() {		
		$id = $this->get('id');
		try{
			if ($id == '') {
				$data = $this->db->get('categories')->result();
			} else {
				$this->db->where('CategoryID', $id);
				$data = $this->db->get('categories')->result();
			}				
			$result = ["took"=>$_SERVER["REQUEST_TIME_FLOAT"],
					  "code"=>200,
					  "message"=>"Response successfully",
					  "data"=>$data];	
				$this->response($result, 200);
		}catch (Exception $e){
			$result = ["took"=>$_SERVER["REQUEST_TIME_FLOAT"],
					  "code"=>401,
					  "message"=>"Access denied",
					  "data"=>null];	
			$this->response($result, 401);
		}			
    }


	//Menambah data 
	public function index_post() {
        $data = array('CategoryName' => $this->post('CategoryName'),                   
					  'Description'  => $this->post('Description'));
        $insert = $this->db->insert('categories', $data);
        if ($insert) {            
			$result = ["took"=>$_SERVER["REQUEST_TIME_FLOAT"],
						"code"=>201,
						"message"=>"Data has successfully added",
						"data"=>$data];	
			$this->response($result, 201);
        } else {
			$result = ["took"=>$_SERVER["REQUEST_TIME_FLOAT"],
                  "code"=>502,
                  "message"=>"Failed adding data",
                  "data"=>null];	
			$this->response($result, 502);            
        }
    }
	
	//Memperbarui data yang telah ada
    public function index_put() {
        $id = $this->put('CategoryID');
        $data = array('CategoryName' => $this->put('CategoryName'),                   
					  'Description'    => $this->put('Description'));			
        $this->db->where('CategoryID', $id);
        $update = $this->db->update('categories', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
	
	// Menghapus data customers
	public function index_delete() {
        $id = $this->delete('id');
        $this->db->where('CategoryID', $id);
        $delete = $this->db->delete('categories');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
    
}
?>