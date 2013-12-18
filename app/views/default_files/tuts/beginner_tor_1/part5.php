

<div class="content">
	<h1>Part 5: Update, upgrade... save a quick snapshot...</h1>
	<p>This step is really quick. We want to upgrade the system and install a couple tools and things we may need in the future.</p>
	<p>Enter the following commands one by one. </p>
	<pre>apt-get update
apt-get upgrade
apt-get install nano screen build-essential libevent-dev openssl zlib1g-dev libssl-dev libnss3 libgcc1-dbg</pre>
	<p>you may have to respond with a &quot;y&quot; once or twice to confirm disk space usage and whatnot. </p>
	<p>Once you have run all three of the commands above we'll save an image of your droplet which we can use in the future for new installs. When you're ready, switch back to your DigitalOcean browser window.</p>
	<p>If you've followed this guide exactly you should be able to click on the &quot;Power Off&quot; tab from your droplet control panel. </p>
	<p class="image"><?= img('assets/tut_images/'.$tut.'/power_off_page.JPG') ?></p>
	<p>Once you're there, click the big blue &quot;Power off&quot; button. </p>
	<p>It should only take a moment or two to shut down. Once its done, click the &quot;Snapshots&quot; Icon:</p>
	<p class="image"><?= img('assets/tut_images/'.$tut.'/snapshots_menu.JPG') ?></p>
	<p>Enter a name... something like &quot;D7x64 - updated, upgraded tools installed&quot; then click the big blue &quot;Take Snapshot&quot; button. It will take a few more moments and should then auto boot your image. (Sometimes it will fail to auto-start your instance after an image... if that happens just click the big blue &quot;Boot&quot; button and you should be where you need to be to continue...</p>
</div>