

<div class="row"><div class="col-lg-12">
	<h4>Tutorial 1: An absolute beginners guide to setting up a basic Tor hidden service / web server on a remote VM.</h4>
	<p>This tutorial is intended to help anyone set up a Tor hidden web service on a remote virtual server. While I use windows apps in the example, most of the actions taken should be easily reproducible on any OS. I chose <a href="https://www.digitalocean.com/?refcode=c2cd2b85cb87" target="_blank">DigitalOcean</a> as the hosting company due to their easy setup and current offer of free credit so new customers can try their service at no cost. The main steps in this tutorial will work on Amazon EC2 and probably any other server, virtual or not, where you have root access. I would not expect to be able to reproduce this exactly on shared hosting.</p>
	<p>Please read the disclaimer before you get started. There are some pretty important things in there to consider based on the intended use of your new hidden service.</p>
	<ul>
	  <? foreach($parts as $key => $value): ?>
	    <? if(!is_numeric($key)): ?>
	      <li><strong><?= ucfirst($key) ?>:</strong> <?= anchor('tuts/'.$this->uri->segment(2).'/'.$key, $value['title']) ?></li>
	    <? else: ?>
	      <li><strong>Part <?= $key ?>:</strong> <?= anchor('tuts/'.$this->uri->segment(2).'/'.$key, $value['title']) ?></li>
	    <? endif; ?>


	  <? endforeach; ?>
	  
	</ul>
	<p>This is, hopefully, just the first in a long list of tutorials I've been thinking of writing. If people like this and the general response is good I'll make more as soon as possible.</p>
</div></div>