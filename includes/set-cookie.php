<!DOCTYPE html>
<html>
<head>
	<script>
	function webdam_set_cookie(cname, cvalue, exdays) {
		var d = new Date();
		d.setTime(d.getTime() + (exdays*24*60*60*1000));
		var expires = "expires="+d.toUTCString();
		document.cookie = cname + "=" + cvalue + ";path=/;";
	}

	function getParameterByName(name) {
		name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
		var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
			results = regex.exec(location.search);
		return results == null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
	}

	webdam_set_cookie('widgetEmbedValue', getParameterByName('widgetEmbedValue'), 1);
	</script>
</head>
<body>
	<div style="font-size: 14px; color: #ccc; font-family: Arial, sans-serif;">Please wait...</div>
</body>
</html>