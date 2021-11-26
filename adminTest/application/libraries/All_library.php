<?php

/**
 *
 */
class All_library {

  public function __construct() {
    $this->ci =& get_instance();
    $this->ci->load->model('all_model');
    $this->ci->load->library('encryption');
    $this->key    = '488f2677480d21d3feca2c49e496dadc';
    $this->config = ['cipher' => 'aes-256', 'mode' => 'ctr', 'key' => $this->key];
  }

  public function encodeString($string) {
    $this->ci->encryption->initialize($this->config);
    return $this->ci->encryption->encrypt($string);
  }

  public function decodeString($string) {
    $this->ci->encryption->initialize($this->config);
    return $this->ci->encryption->decrypt($string);
  }

}

 ?>
