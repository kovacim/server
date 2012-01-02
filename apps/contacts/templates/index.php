<?php // Include Style and Script
//OC_Util::addScript('contacts','interface'); // this line caused entry duplication, cause contacts/index.php already inlcudes it
OC_Util::addScript('contacts','jquery.inview');
OC_Util::addStyle('contacts','styles');
OC_Util::addStyle('contacts','formtastic');
?>

<script type='text/javascript'>
	var totalurl = '<?php echo OC_Helper::linkTo('contacts', 'carddav.php', null, true); ?>/addressbooks';
</script>
<div id="controls">
	<form>
		<input type="button" id="contacts_newcontact" value="<?php echo $l->t('Add Contact'); ?>">
		<input type="button" id="chooseaddressbook" value="<?php echo $l->t('Address Books'); ?>">
	</form>
</div>
<div id="leftcontent" class="leftcontent">
	<ul id="contacts">
		<?php echo $this->inc("part.contacts"); ?>
	</ul>
</div>
<div id="rightcontent" class="rightcontent" data-id="<?php echo $_['id']; ?>">
	<?php
		if ($_['id']){
			echo $this->inc("part.details");
		}
		else{
			echo $this->inc("part.addcardform");
		}
	?>
</div>
<!-- Dialogs -->
<div id="dialog_holder"></div>
<div id="parsingfail_dialog" title="Parsing Fail">
	<?php echo $l->t("There was a fail, while parsing the file."); ?>
</div>
<!-- End of Dialogs -->
