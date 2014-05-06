<div class="row">
	<div class="col-lg-12">
		<h3>Help us keep going... leave us a donation, a tip or just a comment...</h3>
		<p>Donations are completely optional. Anyone can leave a comment, a tip or a donation is just extra appreciated. Comments will be displayed in order of donation amount though. All comments will be displayed immediately but will not be placed in their appropriate order until at least 3 verifications have been received.</p>
		<p>All fields are optional. Your comment or donation will just be marked as 'Anonymous' if you don't provide a name. Comments can be up to 250 characters. No html allowed but you can put a url in if you like. It will not be linked at this time. The reason for the amount selection is just to provide a quick link or qr code on the next page. You can obviously send any amount you would like. We're using the blockchain.info <?= anchor('https://blockchain.info/api/api_receive', 'receive payments api', 'target="_blank"') ?> though so a minimum of <b>0.0005 BTC</b> is set by them.</p>
		<p>I personally reserve the right to remove any comment that is inappropriate. I won't generally censor anything... just don't post urls for CP or anything like that.</p>
		<p>Donation amount exchange rates are provided by the blockchain.info <?= anchor('https://blockchain.info/api/exchange_rates_api', 'exchange rates api', 'target="_blank"') ?></p>
	</div>

</div>

<div class="row">
	<div class="col-lg-12">
		<?= form_open("donate", array('class' => "form")) ?>
			<div class="row">
				<div class="col-lg-6">
					<label class="control-label" for="display_name">Display name:</label>
					<input class="form-control" type="text" id="display_name" name="display_name" placeholder="Optional name to display on comment... 25 characters max..." value="<?= $this->input->post('display_name') ?>" maxlength="25" >
				</div>

				<div class="col-lg-6">
					<label class="control-label" for="amount">Donation Amount:</label>
					<select class="form-control" name="amount" id="amount">
						<? foreach($dropdown as $key => $option): ?>
							<option value="<?= $option['value'] ?>" <?= ($key == 1 ? 'selected' : '') ?>><?= $option['label'] ?></option>
						<? endforeach; ?>
							<option value="0">I'll Enter my own amount</option>
							<option value="0">No Donation</option>
					</select>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">
					<label class="control-label" for="comment">Comment:</label>
					<textarea class="form-control" rows="6" id="comment" name="comment" placeholder="Enter a comment if you would like... 250 characters max..." maxlength="250" ><?= $this->input->post('comment') ?></textarea>
				</div>
			</div>
			
			<div class="row">
				<div class="col-lg-12" style="margin-top:10px">
					<p>After you click continue a new address will be created. Feel free to donate if you wish.<button type="submit" class="btn pull-right">Continue</button></p>
					
				</div>
			</div>
			
			

		<?= form_close() ?>
	</div>
</div>