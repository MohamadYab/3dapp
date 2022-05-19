<?php
Class Controller {

    public $model;
    public $load;

    public function __construct($pageURI = NULL) {
        $this->model = new Model();
        $this->load = new Load();

        // Call function based on URI...
        $this->$pageURI();
    }

    // Home Page...
    function home() {
        $data = $this->model->dbGetData();
        $this->load->view('index', $data);
    }

    function apiCreateTable() {
	  	// echo "Create table function";
		$data = $this->model->dbCreateTable();
		$this->load->view('viewMessage', $data);
	}

	function apiInsertData() {
		$data = $this->model->dbInsertData();
	   	$this->load->view('viewMessage', $data);
	}

	function apiGetData() {
		$data = $this->model->dbGetData();
		$this->load->storeJSON($data);
	}
}
?>