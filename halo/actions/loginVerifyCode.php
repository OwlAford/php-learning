<?php
  require_once '../config.php';
  require_once UTILPATH . 'image/verifyCode.php';
  securityCoder::$useNoise = true;
  securityCoder::$useCurve = true; 
  securityCoder::$fontSize = 18;
  securityCoder::entry();
?>