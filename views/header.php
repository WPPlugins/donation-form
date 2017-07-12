<?php
/**
 *
 * DONATION FORM BY CONTACTUS.COM
 *
 * Initialization Plugin Header
 * @since 5.0 First time this was introduced into plugin.
 * @author ContactUs.com <support@contactus.com>
 * @copyright 2014 ContactUs.com Inc.
 * Company      : contactus.com
 * Updated  	: 20140602
 * */
?>

<div class="cUsDF_preloadbox"><div class="cUsDF_loadmessage"><span class="loadingBx"></span></div></div>
<span class="save_message_placement"><p></p></span>
<div id="cu_header">
    <div class="row">
        <div class="col-sm-8">
            <a href="admin.php?page=cUs_malchimp_plugin" title="<?php echo cUsDF_PLUGINNAME; ?>"><img src="<?php echo plugins_url('assets/img/contactus.logo.png', dirname(__FILE__) ) ;  ?>" alt="<?php echo cUsDF_PLUGINNAME; ?>"></a>
            <span>|</span>
            <span><?php echo cUsDF_PLUGINNAME; ?></span>
        </div>
        <div class="col-sm-4">
            <?php if(!empty($aryUserCredentials) && is_array($aryUserCredentials)){ ?>
                <div class="help_section pull-right">
                    <a class="setLabels ug" data-placement="bottom" href="javascript:;" title="Show User Guide"><img src="<?php echo plugins_url('assets/style/images/cu-help-m.png', dirname(__FILE__)) ;  ?> " alt="Show User Guide"/></a>
                    <a class="setLabels chat" data-placement="bottom" href="javascript:contactusOpenByFormKey('MTEzZGIxMTI4MmQ,');" title="Any Questions? Chat Now!"><img src="<?php echo plugins_url('assets/style/images/cu-chat-m.png', dirname(__FILE__)) ;  ?> " alt="Any Questions? Chat Now!"/></a>
                </div>
            <?php } ?>
        </div>
    </div>
</div>