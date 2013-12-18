

<!DOCTYPE html>
<html lang="en">
	<? $this->load->view($tpl_path.'html_head'); ?>
	<body>
		
		<? $this->load->view($tpl_path.'header'); ?>
		<?= $body ?>
		<? $this->load->view($tpl_path.'footer'); ?>

	</body>
</html>