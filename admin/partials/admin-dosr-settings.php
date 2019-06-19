<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://www.codexwp.com/about
 * @since      1.0.0
 *
 * @package    Cwp_Dosr
 * @subpackage Cwp_Dosr/admin/partials
 */
if(isset($_POST['cwp-dosr-settings']) && isset($_POST['cwp-dosr-rec-email']) && !empty($_POST['cwp-dosr-rec-email']))
{
    update_option('cwp-dosr-rec-email',$_POST['cwp-dosr-rec-email']);
    echo 'Email has been saved';
}
$cwp_rec_email = get_option('cwp-dosr-rec-email');
?>

<h3>DOSR SETTINGS</h3>
<hr>
<form method="post">
    <label>Receiver Email</label>
    <input style="width:200px;" type="email" name="cwp-dosr-rec-email" value="<?=$cwp_rec_email?$cwp_rec_email:''?>">
    <br><br>
    <input type="hidden" name="cwp-dosr-settings" value="true">
    <button>Save</button>
</form>

<br><br>
<strong>Notes</strong><hr>
1. Create a page<br>
2. Put this shortcode [cwp-dosr-form]