<style type="text/css">
* {
 margin: 0;
 padding: 0;
 border: 0;
}

article, aside, details, figcaption, figure, footer, header, main, nav, section, summary {
   display:block;
}

body {
 background-image: url(images/clouds.jpg);
 background-position: center;
 background-attachment: fixed;
 background-size: cover;
 font-family: 'Avenir', 'Lato', sans-serif;
 font-size: 16px;
 color: #73394e;
 display: flex;
 min-height: 100vh;
 flex-direction: column;
}

/* *************************** HAMBURGER MENU *************************** */

.hamburger{
 background:none;
 position:absolute;
 top:0;
 left:0;
 line-height:45px;
 padding:5px 15px 0px 15px;
 color:#ffffff;
 border:0;
 font-size:1.4em;
 font-weight:bold;
 cursor:pointer;
 outline:none;
 z-index:10000000000000;
}
.cross{
 background:none;
 position:absolute;
 top:0px;
 left:0;
 padding:7px 15px 0px 15px;
 color:#73394e;
 border:0;
 font-size:3em;
 line-height:65px;
 font-weight:bold;
 cursor:pointer;
 outline:none;
 z-index:10000000000000;
}
.menu{z-index:1000000; font-weight:bold; font-size:0.8em; width:100%; background:#f1f1f1;  position:absolute; text-align:center; font-size:12px;}
.menu ul {margin: 0; padding: 0; list-style-type: none; list-style-image: none;}
.menu li {display: block;   padding:15px 0 15px 0; border-bottom:#dddddd 1px solid;}
.menu li:hover{display: block;    background:#ffffff; padding:15px 0 15px 0; border-bottom:#dddddd 1px solid;}
.menu ul li a { text-decoration:none;  margin: 0px; color:#73394e;}
.menu ul li a:hover {  color: #666; text-decoration:none;}
.menu a{text-decoration:none; color:#666;}
.menu a:hover{text-decoration:none; color:#666;}

/* *************************** HAMBURGER MENU *************************** */
/* ************************ HEADER ************************ */

header {
 width: 100%;
}

header nav {
 width: 100%;
 text-align: center;
 margin-top: 20px;
 margin-bottom: 20px;
}

.menu {
 margin-top: 0;
 padding-top: 5px;
}

.desktop-menu {
 display: none;
}

.desktop-menu ul li {
 display: inline;
}

.desktop-menu ul li a {
 text-decoration: none;
 color: #ffffff;
 font-size: 2.5rem;
 padding: 0 55px;
}

.desktop-menu ul li a:hover {
 color: #73394e;
}

/* ************************ HEADER ************************ */
/* ******************************* CONTENT ******************************* */

main {
 flex: 1;
}

/* ******************************* CONTENT ******************************* */
/* ************************ FOOTER ************************ */

footer {
 height: 8px;
 display: flex;
 justify-content: flex-end;
 align-items: flex-end;
 padding-right: 15px;
 margin-top: 40px;
}

footer div {
 padding-bottom: 8px;
}


footer div img {
 width: 70%;
 max-width: 50px;
 padding-left: 5px;
}

/* ************************ FOOTER ************************ */
/* ******************************* MIN-WIDTH: 1000PX MEDIA QUERY ******************************* */

@media (min-width: 1000px) {
 .desktop-menu {
   display: block;
 }

 .menu, .hamburger, .cross {
   display: none;
 }
}
/* ******************************* MIN-WIDTH: 1000PX MEDIA QUERY ******************************* */
</style>

<header>

  <button class="hamburger">&#9776;</button>
  <button class="cross">&#735;</button>

  <nav class="menu">
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="about.html">About</a></li>
      <li><a href="portfolio.html">Portfolio</a></li>
      <li><a href="contact.html">Contact</a></li>
    </ul>
  </nav>

  <nav class="desktop-menu">
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="about.html">About</a></li>
      <li><a href="portfolio.html">Portfolio</a></li>
      <li><a href="contact.html">Contact</a></li>
    </ul>
  </nav>

</header>

<div class="container">
	<h1>Missing fields</h1>
	<p>Sorry, you have not completed all of the required fields.</p>
	<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

	<ul>
	<?php
		for($i=0; $i<count($this->missing_required_fields); $i++){
			echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
		}
	?>
	</ul>

	<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
</div>

<footer>
  <div>
    <a href="https://www.linkedin.com/in/gabrielamsuazo/" target="_blank"><img src="images/linkedin.png" alt="Linkedin" title="LinkedIn"></a>
    <a href="https://www.facebook.com/gabby.suazo" target="_blank"><img src="images/facebook.png" alt="Facebook" title="Facebook"></a>
    <a href="https://www.instagram.com/gabrielamarinasuazo/" target="_blank"><img src="images/instagram.png" alt="Instagram" title="Instagram"></a>
  </div>
</footer>
