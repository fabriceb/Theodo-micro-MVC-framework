<?php

// here we fill the $variables array that will be passed to the view, depending on the $request : CONTROLLER part
 
$langue = $request->getParameter('langue');
switch ($langue)
{
  case 'en':
    $variables['bonjour'] = 'Hello';
    $variables['nom'] = 'you';
    $variables['langue'] = 'en';
    break;
  case 'fr':
  default:
    $variables['bonjour'] = 'Bonjour'; 
    $variables['nom'] = 'toi ';
    $variables['langue'] = 'fr';
    break;
}

if ($request->getParameter('nom'))
{
  $variables['nom'] = $request->getParameter('nom');
}

// here we decide of the name of the template
$template_name = 'exemple';