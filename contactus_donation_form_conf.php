<?php
/**
 * 
 *  DONATION FORM BY CONTACTUS.COM
 * 
 * Initialization Donation Form Config File
 * @since 1.0 First time this was introduced into Donation Form plugin.
 * @author ContactUs.com <support@contactus.com>
 * @copyright 2014 ContactUs.com Inc.
 * Company      : contactus.com
 * Updated  	: 20140311
 **/

//PLUGIN NAME
$cUs_plug_name = 'Donation Form Plugin v.3.0';

//DEBUG MODE OFF
error_reporting(0);
error_reporting(E_ERROR);

$cus_dirbase = trailingslashit(basename(dirname(__FILE__)));
$cus_dir = trailingslashit(WP_PLUGIN_DIR) . $cus_dirbase;
$cus_url = trailingslashit(WP_PLUGIN_URL) . $cus_dirbase;

//LIVE ENVIROMENT
$cus_env_url = '//cdn.contactus.com/cdn/forms/';
$cus_par_url = 'https://admin.contactus.com/partners';
$cus_api_enviroment = 'https://api.contactus.com/api2.php';

$cus_api_form_template = 'donateTemplate2';
$cus_api_tab_template = 'donateTab2/glue_short_gift';

//WP KEYS
$cus_api_ApiAccountKey = 'AC132f1ca7ff5040732b787564996a02b46cc4b58d';
$cus_api_ApiKey = 'cd690cf4f450950e857b417710b656923cf4b579';

//DEFINE GLOBAL ENVIROMENT VARS
define('cUsDF_DIR', $cus_dir);
define('cUsDF_URL', $cus_url);
define('cUsDF_ENV_URL', $cus_env_url);
define('cUsDF_PARTNER_URL', $cus_par_url);
define('cUsDF_API_ENV', $cus_api_enviroment);
define('cUsDF_API_ACC', $cus_api_ApiAccountKey);
define('cUsDF_API_AKY', $cus_api_ApiKey);
define('cUsDF_PLUGINNAME', $cUs_plug_name);
define('cUsDF_FORM_TPL', $cus_api_form_template);
define('cUsDF_TAB_TPL', $cus_api_tab_template);