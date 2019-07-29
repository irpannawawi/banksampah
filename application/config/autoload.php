<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$autoload['packages'] = array();


$autoload['libraries'] = array('database','session');


$autoload['drivers'] = array();


$autoload['helper'] = array('url','form',);


$autoload['config'] = array();


$autoload['language'] = array();

$autoload['model'] = array('account','model_nasabah','harga','model_log_input','model_tarik_tunai','model_transfer');
