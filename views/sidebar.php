<?php
/**
 *
 * DONATION FORM BY CONTACTUS.COM
 *
 * Initialization Sidebar View
 * @since 1.0 First time this was introduced into plugin.
 * @author ContactUs.com <support@contactus.com>
 * @copyright 2014 ContactUs.com Inc.
 * Company      : contactus.com
 * Updated  	: 20140603
 * */
?>

<div id="sidebar-cta" class="text-center">
    <h3>Upgrade Your Account</h3>
    <hr>
    <ul class="list-unstyled">
        <li>Remove ContactUs.com Branding</li>
        <li>Add Lead Analytics</li>
        <li>Add 2-Way Email Tracking</li>
        <li>Add Call Tracking</li>
        <li>Add Premium Chat Features</li>
        <li>Add Multiple User Accounts</li>
    </ul>

    <a href="http://www.contactus.com/premium-features/" target="_blank" class="btn btn-info btn-block">View Premium Features</a>
    <?php if(!empty($cUs_API_Account)){ ?>
    <a href="<?php echo cUsDF_CRED_URL; ?>&confirmed=1&redir_url=<?php echo urlencode(trim($upgrade)); ?>" target="_blank" class="btn btn-success btn-block">Get Started with an Upgrade Account</a>
        <hr/>
        <a href="http://wordpress.org/support/view/plugin-reviews/donation-form" class="btn btn-review btn-lg btn-block" target="_blank"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i> <br> <span>Write a Review<i class="icon-pencil"></i></span></a>
    <?php } ?>

</div>