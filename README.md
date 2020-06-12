# Header & Footer Code Injection for WHMCS
A module designed to inject static code (i.e. js, css, html) to head, header &amp; footer of clientarea.
Example- Google Analytics or other analytics code, Live Chat Code, Messenger Chat, FB Pixel tracking etc and anything you can add.

<h5> 1. Code in Head (between <head></head> tag i.e. JS, CSS, Meta, OG etc)</h5>
  Example- FB Pixel Tracking.

<h5> 2. Code in Header (after <body> tag starts i.e. JS, CSS, HTML)</h5>
  Example- Topbar for displaying offer or coupon code.
  
<h5> 3. Code in Footer (before </body> i.e. JS, CSS, HTML)</h5>
  Example- Google Analytics, Live Chat, Messenger Chat etc code.
  
<h4> Features</h4>
<ul>
  <li>You can disable injection for every segment i.e. head, header, footer by turning that off.</li>
  <li>Only a single database query.</li>
</ul>

<h4> How to Install</h4>
<ul>
  <li>Go to Your %WHMCS_PATH%/modules/addons and create the folder "arafatkn_header_footer_injection" and upload the two files "arafatkn_header_footer_injection.php" & "hooks.php"</li>
  <li>Then Go to Admin Panel >> Addon Modules >> Active the "Header & Footer Injection"</li>
  <li>Then click on "Configure" and paste the codes and "Save Changes".</li>
</ul>

<h4> License</h4>
GPL License. Free to use, share, modify and redistribute.
