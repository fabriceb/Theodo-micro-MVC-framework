<?php

/**
 * The CONTROLLER part, makes the liaison between the request and the view 
 * 
 * @author fabriceb
 * @since Apr 2, 2010
 *
 */
class Controller
{
  
  protected $name = null;
  protected $request = null;
  
  protected $variables = array();
  protected $template_name = null;
  
  /**
   * 
   * @param string $name
   * @author fabriceb
   * @since Apr 2, 2010
   */
  public function __construct($name, $request)
  {
    $this->name = $name;
    $this->request = $request;
  }
  
  /**
   * 
   * 
   * @author fabriceb
   * @since Apr 2, 2010
   */
  public function execute()
  {
    $request = $this->request;
    $variables = array();

    require_once(dirname(__FILE__).'/../controllers/'.$this->name.'.php');
    
    $this->variables = $variables;
    $this->template_name = $template_name;
  }
  
  /**
   * 
   * @return array
   * @author fabriceb
   * @since Apr 2, 2010
   */
  public function getVariables()
  {
    
    return $this->variables;
  }
  
  /**
   * 
   * @return string
   * @author fabriceb
   * @since Apr 2, 2010
   */
  public function getTemplateName()
  {
    
    return $this->template_name;
  }
}