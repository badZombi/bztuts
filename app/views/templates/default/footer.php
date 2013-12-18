<div class="footer">
	<hr>
	<div>
		<?
			if(isset($prev) && $prev == TRUE){
				echo anchor(base_url('tuts/'.$this->uri->segment(2).'/'.$prev), '< previous') ;
			}
		
		?>

		<?= ($this->uri->segment(3) && isset($prev) && $prev == TRUE ? ' | ' : '') ?>
		
		<?= ($this->uri->segment(3) ? anchor(base_url('tuts/'.$this->uri->segment(2)), 'index') : '')  ?>

		<?= ($this->uri->segment(3) && isset($next) && $next == TRUE ? ' | ' : '') ?>

		<?
			if(isset($next) && $next == TRUE){
				echo anchor(base_url('tuts/'.$this->uri->segment(2).'/'.$next), 'next >') ;
			}
		
		?>
	</div><br>

	<div class="small">
		<? $current_hostname = $_SERVER['SERVER_NAME']; ?>
		This site is also available via: <br>
		<? if($current_hostname != $this->config->item('clearnet_address')): ?>
			Clearnet: <?= anchor('http://'.$this->config->item('clearnet_address')) ?>
		<? endif; ?>

		<? if($current_hostname != $this->config->item('tor_address')): ?>
			Tor: <?= anchor('http://'.$this->config->item('tor_address')) ?>
		<? endif; ?>
	</div>
</div>

</body>
</html>