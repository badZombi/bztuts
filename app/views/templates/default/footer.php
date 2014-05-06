<footer>
	<hr>
	<? if(isset($prev) || isset($next)): ?>
	<div class="row tutnav">
		<div class="col-lg-12 text-center">
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
		</div>
	</div>
	<? endif; ?>

	<div class="row">
		<div class="col-lg-12 text-center small">
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

	<div class="row">
		<div class="col-lg-12 text-center small">
			<p class="pull-right"><a href="#">Back to top</a></p>
			<p class="pull-left">&copy; 2013 Company, Inc. &middot; <a href="#">Privacy</a> </p>
		</div>
	</div>
</footer>
