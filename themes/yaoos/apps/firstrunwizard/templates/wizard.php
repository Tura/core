<div id="firstrunwizard">

<a id="closeWizard" class="close">
	<img class="svg" src="<?php print_unescaped(OCP\Util::imagePath('core', 'actions/close.svg')); ?>">
</a>

<h1>YAOOS</h1>
<?php if (OC_Util::getEditionString() === ''): ?>
<p><?php p($l->t('Your personal web services. All your files, contacts, calendar and more, in one place.'));?></p>
<?php else: ?>
<p><?php p($theme->getSlogan()); ?></p>
<?php endif; ?>


<h2><?php p($l->t('Get the apps to sync your files'));?></h2>
<a target="_blank" href="<?php p($_['clients']['desktop']); ?>">
	<img src="<?php print_unescaped(OCP\Util::imagePath('core', 'desktopapp.png')); ?>" />
</a>
<a target="_blank" href="<?php p($_['clients']['android']); ?>">
	<img src="<?php print_unescaped(OCP\Util::imagePath('core', 'googleplay.png')); ?>" />
</a>
<a target="_blank" href="<?php p($_['clients']['ios']); ?>">
	<img src="<?php print_unescaped(OCP\Util::imagePath('core', 'appstore.png')); ?>" />
</a>

<h2>&nbsp;</h2>
<?php if (OC_Util::getEditionString() === ''): ?>
<a target="_blank" class="button" href="<?php p(link_to_docs('user-sync-calendars')) ?>">
	<img class="appsmall appsmall-calendar svg" src="<?php print_unescaped(OCP\Util::imagePath('core', 'places/calendar-dark.svg')); ?>" /> <?php p($l->t('Connect your Calendar'));?>
</a>
<a target="_blank" class="button" href="<?php p(link_to_docs('user-sync-contacts')) ?>">
	<img class="appsmall appsmall-contacts svg" src="<?php print_unescaped(OCP\Util::imagePath('core', 'places/contacts-dark.svg')); ?>" /> <?php p($l->t('Connect your Contacts'));?>
</a>
<?php endif; ?>
<a target="_blank" class="button" href="<?php p(link_to_docs('user-webdav')); ?>">
	<img class="appsmall svg" src="<?php print_unescaped(OCP\Util::imagePath('core', 'places/folder.svg')); ?>" /> <?php p($l->t('Access files via WebDAV'));?>
</a>


</div>
