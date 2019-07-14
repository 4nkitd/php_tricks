<?php
function php_split_js_make_email($phpemail)
{
    $pieces = explode("@", $phpemail);

    echo '
			<script type="text/javascript">
				var a = "<a href=\'mailto:";
				var b = "' . $pieces[0] . '";
				var c = "' . $pieces[1] . '";
				var d = "\' class=\'email\'>";
				var e = "</a>";
				document.write(a+b+"@"+c+d+b+"@"+c+e);
			</script>
			<noscript>Please enable JavaScript to view emails</noscript>
		';
}

php_split_js_make_email('4nkitd@gmail.com');
