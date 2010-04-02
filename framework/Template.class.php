<?php

/**
 * Templating engine
 * 
 * @author fabriceb
 * @since Apr 2, 2010
 *
 */
class Template
{
  
  protected $name = null;
  
  protected $variables = array();
  
  /**
   * 
   * @param string $name
   * @author fabriceb
   * @since Apr 2, 2010
   */
  public function __construct($name, $variables)
  {
    $this->name = $name;
    $this->variables = $variables;
  }
  
  /**
   * 
   * @return string 
   * @author fabriceb
   * @since Apr 2, 2010
   */
  public function renderHtml()
  {
    ob_start();
    extract($this->variables);
    
    require_once(dirname(__FILE__).'/../views/'.$this->name.'.php');
    
    return ob_get_clean();
  }

}