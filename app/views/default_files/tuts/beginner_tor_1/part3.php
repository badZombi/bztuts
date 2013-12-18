

<div class="content">
	<h1>Part 3: Create your first droplet...</h1>
	<p>Back in the DigitalOcean browser window, click the big green &quot;Create&quot; button...</p>
	<p>From top to bottom... </p>
	<ul>
	  <li><strong>Enter a host name.</strong> For the purpose of this tut, it really doesn't matter what you choose. Just use something significant to you. I opted for &quot;zombizu&quot; because its the first bit of the onion address I intend to use. </li>
	  <li><strong>Select droplet size.</strong> <span class="tiny">(512mb | 1 CPU etc)</span> I'd start with the smallest. Even if I intend to create larger droplets in the future I always make the image as a tiny one first and just scale it up later as needed.</li>
	  <li><strong>Select region.</strong> I've seen no real data on what makes one better than the other. Some people claim that performance is better in certain regions but I haven't done any testing of my own to determine if this is true. I'd usually suggest picking a region closest to your main target user base but since we're talking about TOR here that doesn't really matter much.</li>
	  <li><strong>Select image.</strong> For this tut I'm using <strong>Debian 7.0 x64</strong>. It should work on Ubuntu with no changes... May require a few slight modifications for the others. </li>
	  <li><strong>SSH Key.</strong> If you created an SSH key you can select it here. I ended up naming mine &quot;stuff&quot; for this tut. If you didn't make one or don't want to use one just ignore. You will be emailed a password after the droplet is created.</li>
	  <li><strong>Settings.</strong> By default it will select VirtIO in most regions. Don't change anything here for this tut. </li>
	</ul>
	<p class="image"><?= img('assets/tut_images/'.$tut.'/create_droplet_1.jpg') ?></p>
	<p>Once you're all set... click &quot;Create Droplet&quot; </p>
	<p class="image"><?= img('assets/tut_images/'.$tut.'/creating_droplet.JPG') ?></p>
	<p>How long this takes is based on how busy the region you selected is and what options you chose on the last page. It shouldn't take much more than a minute for the example I used here. Once its done you'll be forwarded here:</p>
	<p class="image"><?= img('assets/tut_images/'.$tut.'/droplet_created.JPG') ?></p>
</div>