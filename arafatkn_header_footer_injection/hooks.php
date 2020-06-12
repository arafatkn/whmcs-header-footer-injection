<?php
use Illuminate\Database\Capsule\Manager as Capsule;

function arafat_hfi_header($vars) 
{   
	$isEnabled =  Capsule::table('tbladdonmodules')->select('value')-> WHERE('module', '=' , 'arafatkn_header_footer_injection')->WHERE('setting' , '=', 'header-enable')->WHERE('value' , 'on')->count();
	if (empty($isEnabled)) {
		return;
    }
    
    $code =  Capsule::table('tbladdonmodules')->select('value')-> WHERE('module', '=' , 'arafatkn_header_footer_injection')->WHERE('setting' , '=', 'header')->pluck('value');
    if (is_array($code)) {
        $code = current($code);
    }

    return $code? trim($code): '';
}

function arafat_hfi_footer($vars) 
{   
	$isEnabled =  Capsule::table('tbladdonmodules')->select('value')-> WHERE('module', '=' , 'arafatkn_header_footer_injection')->WHERE('setting' , '=', 'footer-enable')->WHERE('value' , 'on')->count();
	if (empty($isEnabled)) {
		return;
    }
    
    $code =  Capsule::table('tbladdonmodules')->select('value')-> WHERE('module', '=' , 'arafatkn_header_footer_injection')->WHERE('setting' , '=', 'footer')->pluck('value');
    if (is_array($code)) {
        $code = current($code);
    }

    return $code? trim($code): '';
}

add_hook("ClientAreaFooterOutput",1,"arafat_hfi_footer");
add_hook("ClientAreaHeaderOutput",1,"arafat_hfi_header");

