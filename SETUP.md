<strong><h1>GETTING STARTED</h1></strong>

<strong><h2>1. TECHNICAL REQUIREMENTS:</h2></strong><br/>
&nbsp;&nbsp; <strong><h3>a. SERVER CAPACITY</h3></strong> <br/>
&nbsp;&nbsp;&nbsp;&nbsp;**The Sun hosts Trends behind a CDN and as a subdomain on an Amazon S3 instance, but this isn't a necessity). If you're not familiar with this setup, contact your market's IT specialist or contact TribTech.<br/><br/>

&nbsp;&nbsp; <strong><h3>b. XML FEED</h3></strong> <br/>
&nbsp;&nbsp;&nbsp;&nbsp;**Example: http://www.baltimoresun.com/mostviewed_rss2.0.xml (This will need to be setup for you by TribTech, if you don't already have one).<br/><br/>

&nbsp;&nbsp; <strong><h3>c. Cache</h3></strong> <br/>
&nbsp;&nbsp;&nbsp;&nbsp;**Sun Trends automatically refreshes every 3 minutes as part of it's subdomain setup (recommended). However, caching is written into index.php to be executed by SimplePie.php (see lines 21-69). Fill in the name of the cache folder as well as the time you'd like to allow between caching (dafault is 3 minutes).<br/><br/>


<strong><h2>2. BRANDING</h2></strong><br/>
Remember to brand Trends with your market's colors, fonts, logos, etc. These changes can easily be made in style.css
&nbsp;&nbsp;<strong><h3> a. COLORS</h3></strong><br/>
&nbsp;&nbsp;&nbsp;&nbsp;**Sun Trends uses goldenrod (#1c3454) and black (#000000) as it's primary colors with light gray (#e0e0e0) and dark gray (#a9a9a9) as accents. Be sure to change these colors in style.css to fit your market's palette.
&nbsp;&nbsp; <strong><h3>b. FONTS</h3></strong><br/>
&nbsp;&nbsp;&nbsp;&nbsp;**Sun Tr
&nbsp;&nbsp; <strong><h3>c. LOGOS</h3></strong><br/>
  


5 - base path (Example: /var/www/html/...)

11 - folder paths

32, 60 & 63 - caching

53 - XML feed path

 

<strong>Ad scripts</strong> <br/>
**Contact your advertising representatives for market-specific ad scripts 

Trends is designed to contain a leaderboard ad at desktop width and a cube ad at mobile width. You'll need ad scripts specific to your market.

Omniture tags also need to be included at the bottom of index.php
