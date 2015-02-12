<strong><h1>GETTING STARTED</h1></strong>

<strong>1. TECHNICAL REQUIREMENTS:</strong>
&nbsp;&nbsp; a.SERVER CAPACITY <br/>
**The Sun hosts Trends behind a CDN and as a subdomain on an Amazon S3 instance, but this isn't a necessity). If you're not familiar with this setup, contact your market's IT specialist or contact TribTech.<
&nbsp;&nbsp; b.
<strong>XML feed </strong>of most-viewed stories to stream from  <br/>
**Example: http://www.baltimoresun.com/mostviewed_rss2.0.xml (This will need to be setup for you by TribTech, if you don't already have one).

<strong>Cache</strong>  <br/>
**Sun Trends automatically refreshes every 3 minutes as part of it's subdomain setup (recommended). However, caching is written into index.php to be executed by SimplePie.php (see lines 21-69).

<strong></strong><br/>


<strong> CSS CUSTOMIZATION</strong><br/>
Remember to brand Trends with your market's colors, fonts, logos, etc. These changes can easily be made in style.css
&nbsp;&nbsp; a. COLORS<br/>
&nbsp;&nbsp; b. FONTS<br/>
&nbsp;&nbsp; c.<br/>
  


5 - base path (Example: /var/www/html/...)

11 - folder paths

32, 60 & 63 - caching

53 - XML feed path

 

<strong>Ad scripts</strong> <br/>
**Contact your advertising representatives for market-specific ad scripts 

Trends is designed to contain a leaderboard ad at desktop width and a cube ad at mobile width. You'll need ad scripts specific to your market.

Omniture tags also need to be included at the bottom of index.php
