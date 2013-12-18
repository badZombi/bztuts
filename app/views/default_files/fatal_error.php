<h1 class="font1"><?= $title ?></h1>

<p>We're sorry. There has been an error. If this error persists, please contact us and let us know what you were trying to do when it happened.</p>

<? if($this->session->flashdata('fatal')): ?>
	<p>Please include the following info in your email:</p>
	<div class="well"><?= $this->session->flashdata('fatal') ?></div>
<? endif; ?>