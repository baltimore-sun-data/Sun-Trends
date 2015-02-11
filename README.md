# Sun Trends
<strong><em>Display the most viewed stories in real time</em></strong>

Sun Trends is a tool to track the most-viewed stories on Tribune Publishing websites. It's aim is to replace the most-viewed module which was lost in the company-wide NGUX site redesigns.

Paired with Chartbeat, Trends is a great new way to track what's most popular among readers in real time.


REQUIREMENTS:

<strong>Server space</strong> <br/>
**The Sun hosts Trends behind a CDN and as a subdomain on an Amazon S3 instance, but this isn't a necessity)

<strong>XML feed </strong>of most-viewed stories to stream from  <br/>
**Example: http://www.baltimoresun.com/mostviewed_rss2.0.xml

<strong>Cache</strong>  <br/>
**Sun Trends refreshes every 3 minutes (recommended)

<strong>Ad scripts</strong> <br/>
**Contact your advertising representatives for market-specific ad scripts 

GETTING STARTED
While the code is commented, these are the lines in index.php you need to change to customize Trends to your market.

5 - base path (Example: /var/www/html/...)

11 - folder paths

32, 60 & 63 - caching

53 - XML feed path

Remember to brand Trends with your market's colors, fonts, logos, etc. These changes can easily be made in style.css 

Trends is designed to contain a leaderboard ad at desktop width and a cube ad at mobile width. You'll need ad scripts specific to your market.

Omniture tags also need to be included at the bottom of index.php
