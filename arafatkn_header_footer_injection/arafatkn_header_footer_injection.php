<?php
/**
 * Header & Footer Code Injection
 * https://arafatkn.com
 * https://github.com/arafatkn
 */
if (!defined("WHMCS")) {
    die("This file cannot be accessed directly");
}

function arafatkn_header_footer_injection_config() {
	$configarray = array(
    	"name" => "Header & Footer Code Injection",
    	"description" => "A module designed to inject static code (js, css, html) to header & footer of clientarea.",
    	"version" => "0.0.1",
    	"author" => "<a href='https://github.com/arafatkn'>Arafat Islam</a>",
    	"language" => "english",
    	"fields" => array(
                "header" => array (
                    "FriendlyName" => "Header (JS, CSS, HTML)", 
                    "Type" => "textarea", 
                    "Rows" => "10",
                    "Cols" => "100", 
                    "Description" => "Enter the codes here", 
                    "Default" => "", 
                ),
                "footer" => array (
                    "FriendlyName" => "Header (JS, CSS, HTML)", 
                    "Type" => "textarea", 
                    "Rows" => "10",
                    "Cols" => "100", 
                    "Description" => "Enter the codes here", 
                    "Default" => "", 
                ),
                "header-enable" => array (
                    "FriendlyName" => "Enable Header?", 
                    "Type" =>  "yesno", 
                    "Size" => "55", 
                    "Description" => "A quick way to enable or disable the header code on your website ", 
                    "Default" => "yes", 
                ),
                "footer-enable" => array (
                    "FriendlyName" => "Enable Footer?", 
                    "Type" =>  "yesno", 
                    "Size" => "55", 
                    "Description" => "A quick way to enable or disable the footer code on your website ", 
                    "Default" => "yes", 
                )
        	)
    );
	return $configarray;
}
