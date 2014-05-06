

<!DOCTYPE html>
<html lang="en">
	<? $this->load->view($tpl_path.'html_head'); ?>
	<body>
		
		<? $this->load->view($tpl_path.'header'); ?>
		<div class="container">
		<?= $body ?>
		<? $this->load->view($tpl_path.'footer'); ?>
		</div>
	</body>
</html>