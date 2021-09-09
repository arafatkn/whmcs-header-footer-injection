<?php
use WHMCS\Database\Capsule;

function arafat_hfi_getData()
{
    if(isset($_POST["arafat_hfi"]))
        return $_POST["arafat_hfi"];
    
    $query = Capsule::table('tbladdonmodules')->where('module', '=' , 'arafatkn_header_footer_injection');

    $data = [];
    foreach($query->get() as $res)
        $data[$res->setting] = $res->value;

    $_POST["arafat_hfi"] = $data;

    return $_POST["arafat_hfi"];
}

function arafat_hfi_head($vars)
{   
    $data = arafat_hfi_getData();
    
    return $data["head-enable"] == "on" && $data["head"]? trim($data["head"]): '';
}

function arafat_hfi_header($vars) 
{   
    $data = arafat_hfi_getData();
    
    return $data["header-enable"] == "on" && $data["header"]? trim($data["header"]): '';
}

function arafat_hfi_footer($vars) 
{
	$data = arafat_hfi_getData();
    
    return $data["footer-enable"] == "on" && $data["footer"]? trim($data["footer"]): '';
}

add_hook("ClientAreaHeadOutput",1,"arafat_hfi_head");
add_hook("ClientAreaHeaderOutput",1,"arafat_hfi_header");
add_hook("ClientAreaFooterOutput",1,"arafat_hfi_footer");

