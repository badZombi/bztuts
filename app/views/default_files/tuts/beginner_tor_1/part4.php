

<div class="content">
	<h1>Part 4: Log in to your droplet...</h1>
	<p>You need to copy your new IP address from this page. </p>
	<p class="image"><?= img('assets/tut_images/'.$tut.'/IP_address.jpg') ?></p>
	<p>Now we're gonna use PuTTY...</p>
	<p>enter <strong>root@your_ip_address</strong> into the &quot;Host Name (or IP address)&quot; text field.</p>
	<p class="image"><?= img('assets/tut_images/'.$tut.'/connecting_ssh_1.jpg') ?></p>
	<p>optionally you can enter a name to easily re-load this session later. Enter the name in the text box under &quot;Load, save or delete a stored session&quot; ... I opted to use the name of my droplet (zombizu) in this case. I modified this image a bit to protect the names of other (private) sessions I have saved. </p>
	<p>If you opted not to use an SSH key... Just click &quot;Save&quot; on the right and then &quot;Open&quot; at the bottom. You may get a prompt asking you to confirm the connection here... Once you click &quot;Yes&quot; you will be prompted for your password. This would have been emailed to you by DigitalOcean when your droplet was created.</p>
	<p>If you did follow all the instructions for the SSH key setup, click the + sign by SSH and click &quot;Auth&quot; </p>
	<p class="image"><?= img('assets/tut_images/'.$tut.'/connecting_ssh_2.jpg') ?></p>
	<p>Click &quot;Browse&quot; below &quot;Private key file for authentication&quot; and select the .ppk file you saved earlier. Now, before you clock on open, scroll to the top in the left panel and click on the top option &quot;Session&quot; so you can save.</p>
	<p>Click &quot;Save&quot; and then &quot;Open&quot; to connect to your server.</p>
	<p>As mentioned above you may get prompted to confirm the connection. Once you click &quot;Yes&quot; you should be logged in. If you opted to use a passphrase on your private key you should enter it when prompted. As I said before, in this example I opted out of the passphrase:</p>
	<p class="image"><?= img('assets/tut_images/'.$tut.'/logged_in.jpg') ?></p>
	<p class="tiny">I slightly edited the image but you should see something quite similar.</p>
	<p>If everything went well, you are now logged into your droplet and we can really get started.</p>
</div>