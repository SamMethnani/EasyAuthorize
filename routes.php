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
  $cores = array('client' => ['signin_signup','sign_up','sign_in','logout','signin_signup','signin_signup_ar' , 'sign_up_ar','sign_in_ar','logout_ar'],
    'IndivAuth'=>['auths', 'new_auth','add_Auth','auths_ar','new_auth_ar','add_Auth_ar'],
    'user' => ['signin_signup_user','sign_up_user','sign_in_user','logout_user','signin_signup_user','updateApprove','updateRej','userdash','statistics','signin_signup_user_ar','sign_up_user_ar','sign_in_user_ar','logout','logout_ar'],
  'OrgAuth'=>['auths', 'new_auth','add_Auth','add_Auth_ar','new_auth_ar','auths_ar']);

  if (array_key_exists($core, $cores)) {
    if (in_array($action, $cores[$core])) {
      call($core, $action);
    
  } else {
    call('client', 'signin_signup');
  }}
?>