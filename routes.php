<?php
  function call($core, $action) {
    require_once('cores/' . $core . '_core.php');

    switch($core) {
       case 'client':
        $core = new client_core();
      break;
      case 'IndivAuth':
       $core=new IndivAuth_core();
       break;
    }

    $core->{ $action }();
  }
    // we're adding an entry for the new core and its actions
  $cores = array('client' => ['signin_signup','sign_up','sign_in','logout'],
    'IndivAuth'=>['auths', 'new_auth','add_Auth'])
  ;

  if (array_key_exists($core, $cores)) {
    if (in_array($action, $cores[$core])) {
      call($core, $action);
    
  } else {
    call('client', 'signin_signup');
  }}
?>