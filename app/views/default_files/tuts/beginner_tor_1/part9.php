

<div class="row"><div class="col-lg-12">
	<h4>Part 9.1: A little info on using screen...</h4>
	<p>In the next step we'll be using &quot;Screen&quot; to manage tor. This will allow it to keep running independent of your local computer/connection etc.</p>
	<p>We'll be using the following command to start tor using screen:</p>
	<pre>screen tor</pre>
	<p>So... what is screen? Its a tool you can use to run programs on your linux install that aren't dependent on your current session. If you lose your connection through PuTTY or accidentally disconnect, the process being managed by screen will continue running and allow you to reconnect to it later.</p>
	<p>To keep this simple, here is what you really need to know:</p>
	<p>if you want to go back to the command prompt after running something with screen, press and hold CTRL and press 'a' ... then release and hit the 'd' key. This will 'detach' from the screen and you will be back at your normal prompt. Screen will keep it running in the background. You can close PuTTY or shut down your local machine. The process will continue running on the server until something stops it.</p>
	<p>Now you want to reconnect to the process you ran with screen. We can pull up a list of all screens like so:</p>
	<pre>screen -ls</pre>
	<p>This will give you a list of all screen processes which will look something like: </p>
	<pre class="output">There is a screen on:
        5934.pts-1.zombizu     (12/16/2013 09:44:28 PM)        (Detached)
1 Socket in /var/run/screen/S-root.</pre>
	<p>The part we're interested in is the screen id. In this case: <span><strong>5934.pts-1.zombizu</strong></span></p>
	<p>we can reattach to any screen using the following command:</p>
	<pre>screen -r 5934.pts-1.zombizu</pre>
	<p>with that, (obviously using your own id) you should now be reconnected as if you had just run the command yourself.</p>
	<p>Ok... moving on...</p>
</div></div>
<div class="row"><div class="col-lg-12"><hr></div></div>
<div class="row"><div class="col-lg-12">
	<h4>Step 9.2: Run and test your new hidden service...</h4>
	<p>If you didn't run tor in the last little sub-section, do it now:</p>
	<pre>screen tor</pre>
	<p>You should see some output... ultimately ending in something like <span class="output">[notice] Bootstrapped 100%: Done.</span></p>
	<p>Once thats done tor is running. Press CTRL+a and then d to disconnect from the process while leaving tor running in the background.</p>
	<p>Now, since we didn't supply a custom hostname yet, tor would have created one for us. The fastest way to find out your new hidden service address is to enter the following command:</p>
	<pre>nano /tor/hidden_service/hostname</pre>
	<p>The <strong>hostname</strong> file and a <strong>private_key</strong> file were generated by tor. You should see something like <strong>khushmmba2aggrgn.onion</strong> as the contents of hostname. hit CTRL+x to exit nano. We're gonna back up these files to your local machine using FileZilla.</p>
	<p>If you are connected already, just navigate the &quot;Remote Site&quot; to <strong>/tor/hidden_service</strong> otherwise, run FileZilla and reconnect to your server.</p>
	<p>Navigate the left column (your local machine) to a place you can backup these files. For the moment maybe just something like <strong>C:\tor_backup</strong> you can rt-click and &quot;Create directory&quot; if you need to. Then all you have to do is drag the files from the server to your new backup location. Once downloaded you have everything you need so you can rebuild or recreate this address later. It should look something like this:</p>
	<p class="image"><?= img('assets/tut_images/'.$tut.'/backup_tor_files.JPG') ?></p>
	<p>Now... fire up the tor browser bundle and we can see if your site is working! I assume if you've already gone this far that you already know how to use tor for browsing the web. If not there are plenty of good tutorials out there on that topic already so just Google it and see what you can learn.</p>
	<p>Once your TorBrowser is up and running... post the .onion address form your hostname file into the address bar and connect. If everything is working right... you should see something like the following page:</p>
	<p class="image"><?= img('assets/tut_images/'.$tut.'/onion_first_look.jpg') ?></p>
	<p>It will sometimes take a minute or two to connect everything on the first go-round. Give it a minute and refresh once or twice if the connection times out. </p>
	<p>Once you've got it working we'll do a quick php test.</p>
	<p>For the sake of simplicity and speed... as well as a quick intro into using a command line editor we'll use nano to create a phpInfo page.</p>
	<p>Our web root is currently set to <strong>/var/www</strong> so enter the following command through PuTTY:</p>
	<pre>nano /var/www/info.php</pre>
	You should have a new blank file opened.
	<p>Enter the following just as you would with a regular text editor:</p>
	<pre>&lt;?php

	phpinfo();

?&gt;</pre>
	</p>
	<p>To save and exit: CTRL+x then 'y' to confirm save... then enter to confirm file name.</p>
	<p>now back in your browser go to http://youronionaddress.onion/info.php</p>
	<p class="image"><?= img('assets/tut_images/'.$tut.'/php_test.jpg') ?></p>
	<p>Congratulations! You now have everything set up and running properly! This is good for a test/practice server. Please read <?= anchor('tuts/'.$this->uri->segment(2).'/disclaimer', 'my disclaimer') ?> and make sure you understand that this is not a &quot;properly secured&quot; install. If you life or liberty would be dependent on the anonymity of this website... there is a LOT more work you will need to do to assure your safety. </p>
</div></div>