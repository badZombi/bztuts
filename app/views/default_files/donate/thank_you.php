<div class="row">
	<div class="col-lg-12">
		<h4>Thank You!</h4>
		<p>I appreciate any and all donations! You can click or scan the QR code below if your client supports that... or just send whatever amount you decide using the address below. donation comments will be listed and ranked appropriately after 3 confirmations.</p>
	</div>
</div>
<div class="row">
	<div class="col-lg-12 text-center">
		<p><?= anchor('bitcoin:'.$address.'/'.$amount.'/BadZombi%20Donation', img('img/qr/'.$address.'/'.$amount.'/BadZombi%20Donation')) ?></p>
		<p>Donation address: <b><?= $address ?></b></p>
	</div>

</div>
