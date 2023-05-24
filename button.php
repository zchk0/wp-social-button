<html>
<head>
<title>Social button</title>
<script type="text/javascript">
var vklinkk,twtrtlink,facebblink;Share={go:window.onload=function(pimg,text){pimg='<?php the_post_thumbnail_url(); ?>';text='<?php echo strip_tags(get_the_excerpt($post->ID)); ?>';text=text.substr(0,text.length-130);vklinkk='http://vk.com/share.php?url='+encodeURIComponent(location.href)+'&title='+encodeURIComponent(document.title)+'&description='+encodeURIComponent(text)+'&image='+encodeURIComponent(pimg)+'&noparse=true';twtrtlink='http://twitter.com/share?text='+encodeURIComponent(document.title)+'&url='+encodeURIComponent(location.href)+'&counturl='+encodeURIComponent(location.href);facebblink='http://www.facebook.com/sharer.php?u='+encodeURIComponent(location.href)},vkk:function(url){window.open(vklinkk,'','toolbar=0,status=0,width=700,height=436')},twtr:function(url){window.open(twtrtlink,'','toolbar=0,status=0,width=700,height=436')},faceb:function(url){window.open(facebblink,'','toolbar=0,status=0,width=700,height=436')}};
</script>
</head>
<style>
button, .button {color:white;border: none;cursor: pointer;}
.allsociall {margin-bottom: 9.5px;padding: 5px 15px 5px 41px!important;height: 40px!important;border-radius: 10px!important;font-size: 16px;text-transform: none;}
#vklink:hover {background-color: #4a76a8!important;box-shadow: 0px 4px 20px -5px rgba(72, 133, 185, 0.6)!important;}
#twtrlink:hover{background-color: #4a9fd4!important;box-shadow: 0px 4px 20px -5px rgba(72, 169, 185, 0.6)!important;}
#faceblink:hover{background-color: #3b5998!important;box-shadow: 0px 4px 20px -5px rgba(84, 72, 185, 0.6)!important;}
</style>
<body>
<div style="padding: 11px 1px 2px;position: relative;">
<button style="background: url(/img/vkk2.png) no-repeat 10px;background-color: rgba(74, 118, 168, 0.74);margin-right: 5px;box-shadow: 0px 4px 20px -5px rgba(72, 133, 185, 0.3);"  onclick="Share.vkk()" class="allsociall" id="vklink">Поделиться</button>
<button style="background: url(/img/twtr1.png) no-repeat 10px;background-color: rgba(74, 159, 212, 0.74);margin-right: 5px;box-shadow: 0px 4px 20px -5px rgba(72, 169, 185, 0.3);" onclick="Share.twtr()" class="allsociall" id="twtrlink">Твитнуть</button>
<button style="background: url(/img/faceb1.png) no-repeat 10px;background-color: rgba(59, 89, 152, 0.78);box-shadow: 0px 4px 20px -5px rgba(72, 91, 185, 0.3);" onclick="Share.faceb()" class="allsociall" id="faceblink">Поделиться</button></div>
</div>
</body>
</html>
