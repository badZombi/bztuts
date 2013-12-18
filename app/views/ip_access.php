<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?= $title ?></title>

<style>
	.dodo {
		text-align: center;
		margin-top: 100px;
		margin-right: auto;
		margin-left: auto;
	}

	.txt{
		width:600px;
		margin:10px auto;
	}

	.ctr{
		text-align:center;
	}

	.small{
		font-size:8px;
	}
</style>
</head>

<body>

	<div class="dodo">
		<?= img('assets/img/logo.png') ?>
		<p><b>Sorry!</b> The site is still under construction... Please be patient.</p>
	</div>



	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>

	<script>

		$(document).ready(function() {

			var _0xef6a=["\x33\x38\x2C\x33\x38\x2C\x34\x30\x2C\x34\x30\x2C\x33\x37\x2C\x33\x39\x2C\x33\x37\x2C\x33\x39","\x6B\x65\x79\x43\x6F\x64\x65","\x70\x75\x73\x68","\x69\x6E\x64\x65\x78\x4F\x66","\x6B\x65\x79\x64\x6F\x77\x6E","\x63\x61\x6C\x6C\x65\x65","\x75\x6E\x62\x69\x6E\x64","\x6C\x6F\x63\x61\x74\x69\x6F\x6E","\x69\x70\x5F\x62\x6C\x6F\x63\x6B\x2F\x62\x79\x70\x61\x73\x73"];var kkeys=[],code=_0xef6a[0];$(document)[_0xef6a[4]](function (_0x688ax3){kkeys[_0xef6a[2]](_0x688ax3[_0xef6a[1]]);if(kkeys.toString()[_0xef6a[3]](code)>=0){$(document)[_0xef6a[6]](_0xef6a[4],arguments[_0xef6a[5]]);window[_0xef6a[7]]=_0xef6a[8];} ;} );

			<? if(1 == 2): ?>
			// this is just saved because Im obfuscating the code above...
			var kkeys = [], code = "38,38,40,40,37,39,37,39";
			$(document).keydown(function(e) {
				//alert(e.keyCode);
			  kkeys.push( e.keyCode );
			  if ( kkeys.toString().indexOf( code ) >= 0 ){
			    $(document).unbind('keydown',arguments.callee);
			    //alert('fdsg');
			    window.location = 'ip_block/bypass';
			  }
			});

			<? endif; ?>

		});

	</script>
	
</body>
</html>


