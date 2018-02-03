<?php

class India extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $source = '../data/icon.jpeg';
        header("Content-Type: image/jpeg");
        header('Content-Disposition: inline');
        readfile($source); // dish it
    }

}