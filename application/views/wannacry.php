<!DOCTYPE html>
<html>
<head>
	<title>WannaCry V 2.0.0</title>
<style type="text/css">
	html,body{
    margin:0;
    height:100%;
    overflow:hidden;
}
img{
    min-height:100%;
    min-width:65%;
    height:auto;
    width:auto;
    position:absolute;
    top:-65%; bottom:-65%;
    left:-100%; right:-100%;
    margin:auto;
}
</style>
</head>
<body>
	<img src="<?php echo base_url('foto/cry.jpg');?>">
	<script type="text/javascript">
		// 		setTimeout(function(){
		//    window.location.href("<?php echo site_url('Vote');?>");
		// }, 5000);
		window.setTimeout(function(){

        // Move to a new location or you can do something else
        window.location.href = "<?php echo site_url('Vote/finals');?>";

    }, 2000);
	</script>
</body>
</html>