<style>
<?php 
	require "less/lessc.inc.php";
	$less = new lessc;
	echo $less->compileFile("less/main.less");
?>
</style>

<p class="deneme bg">Deneme metni</p>