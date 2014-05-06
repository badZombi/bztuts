

<div class="row"><div class="col-lg-12">
	<h4>Part 7: Configuring tor...</h4>
	<p>The last step we completed on the server was creating a new tor configuration file from the sample config provided in the install package.</p>
	<p>Using the &quot;Remote site&quot; file system in FileZilla, navigate to <strong>/etc/tor/</strong> just as you would navigate through folders in Windows Explorer. Optionally you can just type the path in to the text field above the file system and hit enter.</p>
	<p>You should see 3 files in the folder. tor-socks.conf, torrc and the backup we made. If we really mess something up and want to start from scratch we can just delete torrc and rename the .bak file to have a fresh start.</p>
	<p>For now though, rt-click on torrc and select &quot;View/Edit&quot; as shown here:</p>
	<p class="image"><?= img('assets/tut_images/'.$tut.'/view_edit_torrc.jpg') ?></p>
	<p>Assuming everything worked right, FileZilla should download the file and open it in SublimeText.</p>
	<p>The configuration changes are pretty simple. First you need to know that anything after a '#' will be ignored by the system. These can be used to leave information or &quot;Comments&quot; in the file for humans while the machine will just ignore them. In this example a line beginning with '##' is intended as a comment and a line beginning with a single '#' is being intentionally hidden from the software. This is commonly called &quot;commenting out&quot; a line. It allows options to easily be added or removed without having to re-enter them in the file. </p>
	<p>So first thing we need to do is find and &quot;Uncomment&quot; the line that sets the &quot;SocksPort&quot; config variable. You should see it around line 18 of the config file:</p>
	<p class="image"><?= img('assets/tut_images/'.$tut.'/st_socks_port.jpg') ?></p>
	<p>Sorry if my SublimeText install looks different (colors and font etc) than the default install. I don't remember what the theme settings were when I originally installed it. The ideas should still come across just fine. </p>
	<p>Anyway, just delete the '#' from the beginning of the line and change the value from 9050 to just 0:</p>
	<pre>SocksPort 0</pre>
	<p>Next we need to scroll down to lines ~71 and 72, HiddenServicesDir and HiddenServicesPort. Uncomment both lines and set the values as below&quot; </p>
	<pre>HiddenServiceDir /tor/hidden_service/  
HiddenServicePort 80 127.0.0.1:8765</pre>
	<p>The port '8765' in this case can be any unused port you want. I chose 8765 because it seems to be relatively common for http and even tor related services. If you want this site hidden from the 'clear web' just don't use port 80 as that would leave it accessible. If, however you want it accessible form both the clearweb and tor, go ahead and set it like so: 'HiddenServicePort 80 127.0.0.1:80'</p>
	<p>Whatever port you choose, just make sure to remember it so we can configure our web server to listen at the right place.</p>
	<p>That about wraps our tor config for now. Save your file in SublimeText.</p>
	<p>When you switch back to FileZilla you should see a prompt to upload it back to the server:</p>
	<p class="image"><?= img('assets/tut_images/'.$tut.'/upload_torrc.jpg') ?></p>
	<p>Click &quot;Yes&quot; and the file will be saved back on the server.</p>
	<p>An optional next step... which my next tutorial will probably be written about is creating a custom .onion hostname for your server. I wont get into it right now but if I have enough time or enough people are interested Ill write a tut on how to generate your own using a simple install on DogitalOcean or any other linux VM. Maybe we'll use AWS Ec2 for that one...</p>
	<p>For now though, we need to run one final command in PuTTY:</p>
	<pre>mkdir -p /tor/hidden_service</pre>
	<p>This will create the directory for storing the individual hidden service info files, keys and whatnot.</p>
	<p>Ok, we're done with the tor config.</p>
</div></div>