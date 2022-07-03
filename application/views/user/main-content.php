<?php defined('BASEPATH') OR exit("No direct script access allowed");
$this->load->view("layouts/user-header");
$this->load->view($page);
$this->load->view("layouts/user-footer");
