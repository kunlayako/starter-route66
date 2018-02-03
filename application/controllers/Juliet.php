<?php

class Juliet extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $record = $this->quotes->get(1);
        header("Content-type: application/json");
        echo json_encode($record);
    }

}