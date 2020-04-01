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
       case 'OrgAuth':
        $core=new OrgAuth_core();
        break;
       case 'user':
        $core = new user_core();
      break;
    }

    $core->{ $action }();
  }
    // we're adding an entry for the new core and its actions
  $cores = array('client' => ['signin_signup','sign_up','sign_in','logout','signin_signup'],
    'IndivAuth'=>['auths', 'new_auth','add_Auth'],
    'user' => ['signin_signup_user','sign_up_user','sign_in_user','logout_user','signin_signup_user','updateApprove','updateRej','userdash','statistics'],
  'OrgAuth'=>['auths', 'new_auth','add_Auth',]);

  if (array_key_exists($core, $cores)) {
    if (in_array($action, $cores[$core])) {
      call($core, $action);
    
  } else {
    call('client', 'signin_signup');
  }}
?>