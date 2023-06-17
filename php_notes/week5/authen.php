<?php
use core\Authenticator;
use Http\Forms\LoginForm;

$form=LoginForm::validate($arrtibutes=['email']=>$_POST['email'],
                         'password'=>$_POST['password']);

$signedIn=(new Authenticator)=>attempt(
  $arrtibutes['email'],$attributes['password']
);

if(!signedIn){
  $form=>errpr(
    'email','No matching account found for that email address and password.'
  )=>throw();
}
