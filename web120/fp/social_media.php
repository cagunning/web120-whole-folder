<?php include 'includes/config.php';?>
<?php include 'includes/social_media_header.php';?>
<link rel="stylesheet" href="css/social_media.css" />

<link href="https://fonts.googleapis.com/css?family=Knewave" rel="stylesheet">
<style>
P {
    overflow: scroll;
}
#wrapper {
    width: 500px;
    margin: 0 auto;
    overflow: scroll;
}
.div2 {
    width: 200px;
}
#example1 {
  margin: auto;
  width: 60%;  
  width: 500px;
  padding: 40px;  
  border: 25px solid green;
  box-shadow: 5px 10px 8px 10px #888888;
  overflow: scroll;
}

.center {
  text-align: center;
  border: 3px solid green;
}

</style>


<body>

<section>
 <center style="font-family: 'Knewave', cursive;"> <font size="6"> social media </font></center> 
</section>
<div id="example1" class="center">
    <p><a class="twitter-timeline" href="https://twitter.com/Herafitzgera?ref_src=twsrc%5Etfw">
    Tweets by Herafitzgera</a>
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8">
    </script>

    <p>
    
    <!--facebook link goes right about here -->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2"></script>

    <!-- this is the actual code of the facebook page though-->

    <div class="fb-page" data-href="https://www.facebook.com/Hellafitzgerald-225966971217327/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Hellafitzgerald-225966971217327/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Hellafitzgerald-225966971217327/">Hellafitzgerald</a></blockquote></div>

    <!-- this is the instagram feed code -->
    <p>
    <div>   
        <div class='embedsocial-instagram' data-ref="0f7b0c21692dec3a29cad2caf8b00a32bb23e9fc">
        </div><script>(function(d, s, id){var js; if (d.getElementById(id)) {return;} js = d.createElement(s); js.id = id; js.src = "https://embedsocial.com/embedscript/in.js"; d.getElementsByTagName("head")[0].appendChild(js);}(document, "script", "EmbedSocialInstagramScript"));</script>
    </div>
    </p>
</div>    
</body>


<?php include 'includes/footer.php'?>
