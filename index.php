<?php 

/**
 * 
 * Micro Framework MVC
 * @author fabriceb
 */

require_once(dirname(__FILE__).'/framework/Request.class.php');
require_once(dirname(__FILE__).'/framework/Controller.class.php');
require_once(dirname(__FILE__).'/framework/Template.class.php');
require_once(dirname(__FILE__).'/framework/Response.class.php');

// get the request
$request = new Request($_REQUEST);

// get the name of the page
$page_name = $request->getParameter('page');
if (!$page_name)
{
  $page_name = 'exemple';
}

// execute the CONTROLLER part
$controller = new Controller($page_name, $request);
$controller->execute();

// get the variables that will be passed to the VIEW part 
$variables = $controller->getVariables();
$template_name = $controller->getTemplateName();

// execute our templating engine part of the VIEW
$template = new Template($template_name, $variables);
$html = $template->renderHtml();

// send to the browser
$response = new Response($html);
$response->send();