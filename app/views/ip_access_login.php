<html>

<head>
	<meta charset="utf-8">
	<title><?= $title ?></title>	


	
</head>


<body>

<h1>Ok... enter your password:</h1>

<div>
	<?= validation_errors() ?>
	<?= form_open('ip_block/bypass', $form_attribs) ?>

		<?= form_password($pass_attribs) ?>

		<?= form_submit('Submit', 'Submit') ?>

	<?= form_close() ?>
</div>

</body>

</html>