<strong><h1>GETTING STARTED</h1></strong>

<strong><h2>1. TECHNICAL REQUIREMENTS</h2></strong>
&nbsp;&nbsp; <strong><h3>a. SERVER CAPACITY</h3></strong>
&nbsp;&nbsp;**The Sun hosts Trends behind a CDN and as a subdomain on an Amazon S3 instance, but this isn't a necessity). If you're not familiar with this setup, contact your market's IT specialist or contact TribTech. The server path must be set in index.php on line 5 - i.e. /var/www/html/...)
&nbsp;&nbsp; <strong><h3>b. XML FEED</h3></strong>
&nbsp;&nbsp;**Example: http://www.baltimoresun.com/mostviewed_rss2.0.xml <br/>
This will need to be setup for you by TribTech, if you don't already have one. The XML feed URL must be inserted in line 53.
&nbsp;&nbsp;<strong><h3>c. Cache</h3></strong> 
&nbsp;&nbsp;**Sun Trends automatically refreshes every 3 minutes as part of it's subdomain setup (recommended). However, caching is written into index.php to be executed by SimplePie.php (see lines 21-69). Fill in the name of the cache folder (lines 32 and 60) as well as the time you'd like to allow between caching (lines 35 and 63).
<strong><h2>2. BRANDING</h2></strong>
Remember to brand Trends with your market's colors, fonts, logos, etc. These changes can easily be made in style.css
&nbsp;&nbsp;<strong><h3> a. COLORS</h3></strong>
&nbsp;&nbsp;**Sun Trends uses goldenrod (#1c3454) and black (#000000) as it's primary colors with light gray (#e0e0e0) and dark gray (#a9a9a9) as accents. Be sure to change these colors in style.css to fit your market's palette.
&nbsp;&nbsp;<strong><h3>b. FONTS</h3></strong>
&nbsp;&nbsp;**Sun Trends uses the font-families Georgia (with Times, serif as fallbacks) and Lato (with sans-serif as a fallback). Be sure to change these fonts in style.css to fit your market's style guide. Trends also utitlizes the Font Awesome icon font library (free and open source). The icons are written into the HTML (lines 135 and 169) in index.php but can easily be removed.
&nbsp;&nbsp;<strong><h3>c. LOGO</h3></strong>
&nbsp;&nbsp;**Trends masthead logo is a text treatment in Georgia with bottom borders. However, this treatment can easily be swapped out for an image (line 162).<br/><br/>
<strong><h2>3. ADVERTISING</h2></strong>
&nbsp;&nbsp;**Trends is designed to contain a leaderboard ad at desktop width and a cube ad at mobile width. You'll need ad scripts specific to your market. Contact your advertising representative(s) for market-specific ad scripts to be inserted in the "head" and on lines 201 and 260). 

<strong><h2>4. OMNITURE</h2></strong>
&nbsp;&nbsp;**Omniture tags also need to be included at the bottom of index.php at line 270.
