

<div class="content">
	<h1>Part 2: Install PuTTY &amp; generate a new key pair...</h1>
	<p>Download PuTTY <a href="http://www.chiark.greenend.org.uk/~sgtatham/putty/download.html" target="_blank">from here</a> and install. You'll need at least PuTTY itself, PuTTYgen and Pageant to follow everything in this guide. I'd suggest just installing the full package.</p>
	<p>Once installed, run PuTTYgen. By default SSH-2 RSA should be selected. All you need to do is select your key strength. I prefer 4096 bits. Set it to whatever you like in the bottom right text box. You don't need to go higher but I usually do. It takes a bit longer but I think its worth it. Once you're all set, click the Generate button.</p>
	<p class="image"><?= img('assets/tut_images/'.$tut.'/1_puttygen1.jpg') ?></p>
	<p>Move your mouse cursor around in the window for a while. It will show you its progress as it generates your key pair. With stronger keys this takes a while but be patient... its really not that bad. Once bot have been generated you will see something like this: <span class="tiny">I have no intention of actually using this key so I didn't blur anything out.</span></p>
	<p class="image"><?= img('assets/tut_images/'.$tut.'/1_puttygen2.jpg') ?></p>
	<p>Click in the &quot;Public key for pasting into...&quot; window. It may auto select the text but you may need to rt-click and select all... then rt-click and copy. Switch back over to your DigitalOcean browser window and click on &quot;SSH Keys&quot; in the left side nav.</p>
	<p>Click the big blue &quot;Add SSH Key&quot; button in the upper right. You'll need to give this key a name you will remember it by in case you create more. Then paste your key from PuTTYgen in the text-area below. It should look something like this:</p>
	<p class="image"><?= img('assets/tut_images/'.$tut.'/add_ssh_key1.JPG') ?></p>
	<p>Click &quot;Create SSH Key&quot; and you're all ready to create your first droplet... First we need to do a little more in PuTTYgen though.</p>
	<p>Switch back over to PuTTYgen and click the &quot;Save public key&quot; button. Select a folder to store your keys in. I usually use C:\Users\&lt;user&gt;\.ssh on windows machines. It doesn't really matter what you name the public key. I usually go for something like the_key_name.pub though just to keep it simple. Save the public key and we can continue.</p>
	<p>You can choose to passphrase protect the private key or not. Sometimes I do and sometimes I don't. It really just depends on how much security I feel is needed on a case by case basis. For the purpose of this tutorial I wont be adding a passphrase. Use you best judgment based on the security you require as well as how securely you store your keys. If you choose to add one, enter it and repeat it in the text boxes. Whether you choose to passphrase protect or not, it wont really change much in this tut. </p>
	<p>Now click &quot;Save private key&quot; ... if you did not use a passphrase it will confirm that this was intentional... choose where to store it just as you did with the public key. save the file as whatever_you_want.ppk</p>
	<p>We're now done with PuTTYgen! Close the window and we'll move on...</p>
</div>