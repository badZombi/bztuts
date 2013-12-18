

<div class="content">
	<h1>Part 8: Install and configure an http server...</h1>
	<p>We're gonna use lighttpd for this server. Its fast and easy to configure. Also seems to take quite a few anonymity concerns out of the equation by default. It's not &quot;the best&quot; in my opinion but it is more than adequate for this tut. </p>
	<p>We'll use apt-get just as we did for tor:</p>
	<pre>apt-get install lighttpd php5-cgi
	</pre>
	<p>when you enter that command and hit enter it will begin the install process for the lighttpd server and php5 (as a cgi module) ... again, not ideal but suitable for this purpose. You will probably have to enter 'y' once to confirm the install. </p>
	<p>Next:</p>
	<pre>lighty-enable-mod fastcgi
lighty-enable-mod fastcgi-php</pre>
	<p>will enable the php fastcgi mod to allow execution of php scripts.</p>
	<p>We'll use FileZilla again to make a few small config changes to lighttpd... In FileZilla, navigate to <strong>/etc/lighttpd</strong> and rt-click the 'lighttpd.conf' file... select 'View/Edit' just as you did with the torrc file ... it should open in SublimeText.</p>
	<p>Change the value for 'Server Port' on line ~15 to 8765 (or whatever port you chose in your torrc file) </p>
	<pre>server.port = 8765
	</pre>
	<p>Now copy/paste the following underneath the rest of the config variables:</p>
	<pre>$HTTP[&quot;remoteip&quot;] !~ &quot;127.0.0.1&quot; {
	url.access-deny = ( &quot;&quot; )   
}    

server.dir-listing = &quot;disable&quot;</pre>
	<p>This is what ties both services together and offers a bit of security. We are now set to listen on the right port, deny traffic from any http requests not made through the intended route. (local form tor only) and we'll disallow listing of directory contents.</p>
	<p>One last command to wrap this part up:</p>
	<pre>/etc/init.d/lighttpd restart</pre>
	<p>this restarts the http (web) server with the new settings.</p>
</div>