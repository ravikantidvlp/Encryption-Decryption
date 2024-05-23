<?php
class Environment {
    // Properties
    public $encryption_method;
    public $secret_key;
    public $secret_iv;
    public $key;
    public $initialization_vector;
    
    
  }
  $CFG = new Environment();
  $CFG->encryption_method = "AES-256-CBC";
  $CFG->secret_key = 'samsung@lms2023';
  $CFG->secret_iv = 'eadfdfdjhew898wejkjdf';
  $CFG->key = hash('sha256',$CFG->secret_key);
  $CFG->initialization_vector = substr(hash('sha256',$CFG->secret_iv),0,16);
 return $CFG;
