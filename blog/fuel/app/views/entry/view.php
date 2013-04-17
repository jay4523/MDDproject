<h2>Viewing #<?php echo $entry->id; ?></h2>

<p>
	<strong>Title:</strong>
	<?php echo $entry->title; ?></p>
<p>
	<strong>Content:</strong>
	<?php echo $entry->content; ?></p>

<?php echo Html::anchor('entry/edit/'.$entry->id, 'Edit'); ?> |
<?php echo Html::anchor('entry', 'Back'); ?>