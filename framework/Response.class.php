<?php

/**
 * Class which sends the response to the browser
 * 
 * @author fabriceb
 * @since Apr 2, 2010
 *
 */
class Response
{
  
  protected $content = '';
  
  /**
   * 
   * @param string $content
   * @author fabriceb
   * @since Apr 2, 2010
   */
  public function __construct($content)
  {
    $this->content = $content;
  }
  
  /**
   * 
   * 
   * @author fabriceb
   * @since Apr 2, 2010
   */
  public function send()
  {
    // native UTF-8 support !
    header('Content-Type: text/html; charset=utf-8');
    echo $this->content;
  }
}