<strong><h1>GETTING STARTED</h1></strong>
<strong><h2>1. TECHNICAL REQUIREMENTS</h2></strong>
<strong>Step 1.</strong> Download files from Github as a .zip<br/>

<strong>Step 2.</strong> Unzip .zip and upload the files to your server.<br/>
**The Baltimore Sun hosts Sun Trends behind a <a href="http://aws.amazon.com/cloudfront/">CDN</a> as a subdomain on an Amazon EC2 instance. If you're not familiar with this process, contact your market's IT specialist or contact TribTech. A subdomain isn't a necessity, however. Simply uploading the files to your server is sufficient.  <br/>

<strong>Step 3.</strong> Edit index.php file.<br/>
<strong>a.</strong> The server path must be on line 5 as a relative path- i.e. /folder-where-trends-lives)<br/>

<strong>b.</strong> Insert the XML feed URL on line 53.<br/>
**Example: http://www.baltimoresun.com/mostviewed_rss2.0.xml <br/>
This will need to be setup for you by TribTech, if you don't already have one.<br/>

<strong>c.</strong> OPTIONAL: Edit the amount of time you'd like to allow between caching on lines 35 and 63.<br/>
**Sun Trends automatically refreshes every 3 minutes (recommended) as part of it's CDN setup. However, caching is written into index.php to be executed by SimplePie.php (see lines 21-69).<br/>

<strong><h2>2. BRANDING</h2></strong>
Remember to brand Trends with your market's colors, fonts, logos, etc. These changes can easily be made in style.css
&nbsp;&nbsp;<strong><h3> a. COLORS</h3></strong>
**Sun Trends uses goldenrod (#1c3454) and black (#000000) as it's primary colors with light gray (#e0e0e0) and dark gray (#a9a9a9) as accents. Be sure to change these colors in style.css to fit your market's palette.
&nbsp;&nbsp;<strong><h3>b. FONTS</h3></strong>
**Sun Trends uses the font-families Georgia (with Times, serif as fallbacks) and Lato (with sans-serif as a fallback). Be sure to change these fonts in style.css to fit your market's style guide. Trends also utitlizes the Font Awesome icon font library (free and open source). The icons are written into the HTML (lines 135 and 169) in index.php but can easily be removed. NOTE:The Font Awesome library isn't included in the repository, but can be <a href="http://fontawesome.io/">downloaded here</a>.
&nbsp;&nbsp;<strong><h3>c. LOGO</h3></strong>
**Trends masthead logo is a text treatment in Georgia with bottom borders. However, this treatment can easily be swapped out for an image (line 162).<br/><br/>
<strong><h2>3. ADVERTISING &amp; OMNITURE</h2></strong>
**Trends is designed to contain a leaderboard ad at desktop width and a cube ad at mobile width. You'll need ad scripts specific to your market. Contact your advertising representative(s) for market-specific ad scripts to be inserted in the "head" of the HTML and on lines 201 and 260). Omniture tags also need to be included at the bottom of index.php on line 270.
