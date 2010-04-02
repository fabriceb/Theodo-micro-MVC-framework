<?php

/**
 * Class which handles the request coming from the browser
 * 
 * @author fabriceb
 * @since Apr 2, 2010
 *
 */
class Request
{
  
  protected $parameters = array();
  
  /**
   * 
   * @param array $parameters
   * @author fabriceb
   * @since Apr 2, 2010
   */
  public function __construct($parameters)
  {
    $this->parameters = $parameters;
  }
  
  /**
   * 
   * @param string $parameter_name
   * @return mixed
   * @author fabriceb
   * @since Apr 2, 2010
   */
  public function getParameter($parameter_name)
  {
    if (array_key_exists($parameter_name, $this->parameters))
    {
      
      return $this->parameters[$parameter_name];
    }
    
    return null;
  }
}