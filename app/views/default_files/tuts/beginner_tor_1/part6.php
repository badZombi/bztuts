

<div class="row"><div class="col-lg-12">
	<h4>Part 6: Installing TOR...</h4>
	<p>Your droplet shutting down will have killed your SSH connection by now. </p>
	<p class="image"><?= img('assets/tut_images/'.$tut.'/dead_connection.jpg') ?></p>
	<p>The quick way to reconnect is to rt-click on the title of the window and select &quot;Restart Session&quot;</p>
	<p class="image"><?= img('assets/tut_images/'.$tut.'/putty_reconnect.jpg') ?></p>
	<p>At this point you just log back in as you did in <strong>Step 4</strong>.</p>
	<p>If, however, you'd like to start &quot;from scratch&quot; as you would if you were connecting at a later date with no previous session... just close the existing PuTTY window...</p>
	<p>Restart PuTTY as if you hadn't just closed it... select the saved session from earlier and click &quot;Open&quot; ... now, just log in as usual. </p>
	<p>Now on to the real stuff:</p>
	<p>We should have already installed everything we need here. Just enter the following line and hit enter:</p>
	<pre>apt-get install tor</pre>
	<p>enter a &quot;y&quot; as required to complete the install.</p>
	<p>TOR is installed! <em>Easy huh?</em></p>
	<p>We need to make a few config changes but we're most of the way there already. </p>
	<p>Next we want to make a backup of the tor config file... We need to copy the supplied  config to a backup config in case we ever want to revert and start over without having to rebuild the server and reinstall everything. Enter the following line and hit enter.</p>
	<pre>cp /etc/tor/torrc /etc/tor/torrc.bak</pre>
	<p>For those of you used to a linux command line you can just use vi or nano to edit the config file (torrc). For this tutorial though (intended for windows users) I want to show you how to use an FTP client and a good text editor to make the changes. This part is also beneficial for those who will be using sftp to upload/edit your website files later. I highly recommend you revisit this later and learn how to use linux command line editors... It really saves a lot of time in the long run. </p>
</div></div>
<div class="row"><div class="col-lg-12"><hr></div></div>
<div class="row"><div class="col-lg-12">
	<h4>Part 6.5: Windows tools and &quot;easy&quot; file editing...</h4>
	<p>As mentioned in the beginning of this step, you can just skip the software installs here if you are comfortable with vi or nano or some other command line editor. This part is really intended for people who will rely on windows gui apps to manage their site.</p>
	<p>We're gonna need a decent ftp client and a good text editor. My suggestion would be downloading and installing <a href="https://filezilla-project.org/download.php?type=client" target="_blank">FileZilla</a> and <a href="http://www.sublimetext.com/2" target="_blank">Sublime Text</a>. Go ahead and click those links to download and install. </p>
	<p>Once you have them fully installed we can continue...</p>
	<p>First part is using FileZilla to connect to your droplet. I'm going forward assuming you went with the SSH key option for connecting to your server. </p>
	<p>Run FileZilla...</p>
	<p>Click on the &quot;Site Manager&quot; icon. (not the dropdown)</p>
	<p class="image"><?= img('assets/tut_images/'.$tut.'/site_manager.jpg') ?></p>
	<p>in the next window you'll need to enter all the info about your droplet...</p>
	<p>Click the &quot;New Site&quot; button. A new entry will be created in the left file structure area. I'd suggest naming it whatever you have already been calling your server. Obviously in this case I named mine &quot;zombizu&quot;</p>
	<p>Enter you droplets IP address as the &quot;Host&quot;</p>
	<p>Change the protocol dropdown to &quot;SFTP&quot;</p>
	<p>Change the &quot;Logon Type&quot; to &quot;Normal&quot;</p>
	<p>Enter &quot;root&quot; as the &quot;User&quot;</p>
	<p class="image"><?= img('assets/tut_images/'.$tut.'/filezilla_site_setup_1.jpg') ?></p>
	<p>if you decided not to use an SSH key, you can enter your password in the &quot;Password&quot; field and skip ahead. Otherwise, leave the password blank and continue...</p>
	<p>We're gonna need to run Pageant from the PuTTY install. This is what will manage your SSH keys for FileZilla. I've had it installed so long that I honestly don't know if it opens direct to the tray by default... In my case though it does... find it in the tray and rt-click the icon. Select &quot;Add Key&quot; from the menu...</p>
	<p>You need to browse to the .ppk file you created earlier in this tutorial. Once you've found it, select it and click &quot;Open&quot;</p>
	<p>The window should close. Nothing obvious really happens at this point if I remember correctly. To verify that your key is in place though... rt-click the Pageant tray icon again and select &quot;View Keys&quot;</p>
	<p class="image"><?= img('assets/tut_images/'.$tut.'/key_list.jpg') ?></p>
	<p>You should see your key listed in the output. If so... just click &quot;Close&quot; and we can continue. <span class="tiny">Sorry its so censored but you should get the idea</span></p>
	<p>Now, back in FileZilla... Just click the &quot;Connect&quot; button... Filezilla should connect to your server using the key you generated earlier. You should see something like the following image:</p>
	<p class="image"><?= img('assets/tut_images/'.$tut.'/fz_connected.jpg') ?></p>
	<p>The top panel shows the actual commands and responses sent between your pc and the server. The left Column &quot;Local Files&quot; is the file system of your pc... the right column &quot;Remote site&quot; is the file system of the droplet you are connected to.</p>
	<p>If you have opted to install SublimeText, we now need to tell FileZilla to use it as the default editor...</p>
	<p>In FileZilla, click &quot;Edit&quot; in the menu bar and select &quot;Settings&quot;</p>
	<p class="image"><?= img('assets/tut_images/'.$tut.'/FZ_settings.jpg') ?></p>
	<p>Scroll down on the left and click &quot;File Editing&quot; ... select &quot;Use custom editor&quot; and browse to the location of SublimeText or whatever editor you would prefer to use. If you want to manage different editors for different file types you can leave &quot;Use filetype associations if available&quot; selected. For the simplicity of this tutorial though I chose to &quot;Always use the default editor&quot;</p>
	<p>Click &quot;OK&quot; and we should be all set.</p>
</div></div>