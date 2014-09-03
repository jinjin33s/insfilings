<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Fileupload extends Controller {

    public function Fileupload() {
        parent::Controller();
        log_message('debug', 'skyzone: Fileupload my controller');
    }

    function index() {

        $this->browse();
    }

    //display list of contacts
    public function browse() {

        
        $data['view_name'] = "filebrowse";

        $this->load->view("admin/common/template", $data);
    }

    public function upload() {
        $data['view_name'] = "fileupload";
        $this->load->view("admin/common/template", $data);
    }

}