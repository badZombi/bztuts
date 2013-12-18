

<div class="content">
	
	<?= form_open("donate", array('class' => "form-horizontal")) ?>
		<label class="control-label" for="display_name">Display name:</label><br>
		<input type="text" id="display_name" name="display_name" placeholder="Optional name to display on comment... 25 characters max..." value="<?= $this->input->post('display_name') ?>" maxlength="25" style="width:500px">
		<br>
		<label class="control-label" for="comment">Comment:</label><br>
		<textarea rows="6" id="comment" name="comment" placeholder="Enter a comment if you would like... 250 characters max..." maxlength="250" style="width:500px"><?= $this->input->post('comment') ?></textarea>
		<br>
		<button type="submit" class="btn btn-primary btn-xs ">Continue</button>

	<?= form_close() ?>
</div>