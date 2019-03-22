<html>
<?php include 'includes/config.php';?>
<?php include 'includes/albums_header.php';?>

<link rel="stylesheet" href="css/index.css" />

<link href="https://fonts.googleapis.com/css?family=Knewave" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Reenie+Beanie" rel="stylesheet">

<style>
    * {
  box-sizing: border-box;
}

.row::after {
  content: "";
  clear: both;
  display: table;
}

[class*="col-"] {
  float: left;
  padding: 15px;
}

.col-1 {width: 8.33%;}
.col-2 {width: 16.66%;}
.col-3 {width: 25%;}
.col-4 {width: 33.33%;}
.col-5 {width: 41.66%;}
.col-6 {width: 50%;}
.col-7 {width: 58.33%;}
.col-8 {width: 66.66%;}
.col-9 {width: 75%;}
.col-10 {width: 83.33%;}
.col-11 {width: 91.66%;}
.col-12 {width: 100%;}

.menu ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

.menu li {
  padding: 8px;
  margin-bottom: 7px;
  background-color: #33b5e5;
  color: #ffffff;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.menu li:hover {
  background-color: #0099cc;
}

li a, .dropbtn {
  display: inline;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

li.dropdown {
  display: inline-block;
  padding: 8px;
  margin-bottom: 7px;
  background-color: #33b5e5;
  color: #ffffff;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
  
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}


</style>    
<head>

</head>
<body>

<section>
 <center style="font-family: 'Knewave', cursive;"> <font size="6"> Hella FitzGerald </font></center> 
</section>

<div class="row">
  <div class="col-3 menu">
    <ul>
      <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">wishful thinking EP</a>
        <div class="dropdown-content">
            <a href="https://soundcloud.com/shelfnunny/sets/wishful-thinking-singles">Soundcloud</a>
            <a href="https://open.spotify.com/album/1re406xCXJVyQceu5fmCDI">Spotify</a>
            <a href="https://itunes.apple.com/lu/album/wishful-thinking-ep/1072314855">Apple Music</a>
        </div>    

      </li>
      <li>Wishful Thinking Remixes</li>
      <li>Little Time We Have EP</li>
      <li>Different Light EP</li>
    </ul>
  </div>

  <div class="col-9">
    <iframe src="https://bandcamp.com/EmbeddedPlayer/album=3890675169/size=large/bgcol=ffffff/linkcol=333333/tracklist=false/artwork=small/transparent=true/" style="border: 0; width: 100%; height: 120px;" allowfullscreen allow="autoplay; encrypted-media">
    </iframe>
    <p></p>
    <br>
    <iframe src="https://bandcamp.com/EmbeddedPlayer/album=3028060797/size=large/bgcol=ffffff/linkcol=333333/tracklist=false/artwork=small/transparent=true/" style="border: 0; width: 100%; height: 120px;" allowfullscreen allow="autoplay; encrypted-media">
    </iframe>
    <p></P>
    <br>
    <iframe src="https://bandcamp.com/EmbeddedPlayer/album=1299486333/size=large/bgcol=ffffff/linkcol=333333/tracklist=false/artwork=small/transparent=true/" style="border: 0; width: 100%; height: 120px;" allowfullscreen allow="autoplay; encrypted-media">
    </iframe>
    <p></p>
    <br>
    <iframe src="https://bandcamp.com/EmbeddedPlayer/album=1018757113/size=large/bgcol=ffffff/linkcol=333333/tracklist=false/artwork=small/transparent=true/" style="border: 0; width: 100%; height: 120px;" allowfullscreen allow="autoplay; encrypted-media">
    </iframe>


  </div>
</div>


</body>

<?php include 'includes/footer.php'?>