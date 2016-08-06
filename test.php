<script src="jquery-1.9.1.js"></script>
<script>
$(document).ready(function(){
	var data = '<div><div class="test form-group col-xs-6 repeat" id="repeat_py">\n <div class="kv col-lg-2">index:\n<pre class="num">0</pre></div>\n<div><span class="kv">value: <pre class="num">m</pre></span></div></div></div>'
alert($(data).find('div.repeat').html())
});
</script>

