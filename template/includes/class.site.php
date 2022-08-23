<?php

class FuncoesSite
{

  public $url_site;

  public function get_url($string)
  {
    $get_url = $string;
    $explode_url = explode("/", $get_url);

    return $explode_url[3];
  }

  public function transformUrl()
  {
    $actual_link = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
    $transform = $this->get_url($actual_link);

    return $url_site = "http://localhost/" . $transform . "/";
  }
}
