<strong><h1>GETTING STARTED</h1></strong>

<strong><h3>1. TECHNICAL REQUIREMENTS</h3></strong>
<strong>Step 1.</strong> Download files from Github as a .zip<br/>
<strong>Step 2.</strong> Unzip .zip and upload the files to your server. Step 3. Edit index.php file.<br/>
<strong>a.</strong> The server path must be changed on line 5.  Replace INSERT RELATIVE PATH HERE  (see <strong>**Identifying Server base path below for help identifying this path</strong>). Leave quotes and slashes.<br/>    

<strong>b.</strong>Insert the XML feed URL on line 25 and 53.<br/>
<em>**Example: http://www.baltimoresun.com/mostviewed_rss2.0.xml</em> <br/>
This will need to be setup for you by TribTech, if you don't already have one. <br/>

<strong>c.</strong> Modify page title on line 164 and tagline on line 169. <br/>

<strong>d.</strong> Modify the tophat by adding your newspaper.com site logo to line 141 (166x15px) and navigation links on line 145. <br/>

<strong>e.</strong> Modify styles based on info below in “Branding.”

<strong>f.</strong> Add in your market’s ad tags and omniture code.  See “ADVERTISING & OMNITURE” below for more information. <br/>

<strong>g.</strong> OPTIONAL: Edit the amount of time you'd like to allow between caching on lines 35 and 63.  See “SUBDOMAIN & CACHING” below for more info. <br/>

<strong><em>** Identifying Server base path</em></strong>
We created a page to help you identify the server base path.  

-- Open the file php/getcwd.php in text editor and uncomment the single commented command in that file by removing the double slashes. 
 
-- Upload the file to the same folder where you are hosting trends and view in your web browser. This is your server path.  (ours is “/var/www/html/trends-baltimoresun-com” results may vary)
  
-- For security purposes, DELETE THIS FILE FROM THE SERVER.


<strong><h3>2. BRANDING</h3></strong>
Remember to brand Trends with your market's colors, fonts, logos, etc. These changes can easily be made in style.css
<strong>a.</strong> COLORS
*Sun Trends uses goldenrod (#1c3454) and black (#000000) as it's primary colors with light gray (#e0e0e0) and dark gray (#a9a9a9) as accents. Be sure to change these colors in style.css to fit your market's palette. <br/>
<strong>b.</strong> FONTS
*Sun Trends uses the font-families Georgia (with Times, serif as fallbacks) and Lato (with sans-serif as a fallback).
<stron>a.</strong> Be sure to change these fonts in style.css to fit your market's style guide. Trends also utitlizes the Font Awesome icon font library (free and open source). The icons are written into the HTML (lines 135 and 169) in index.php but can easily be commented out or removed. NOTE:The Font Awesome library isn't included in the repository, but can be <a href="http://fontawesome.io/">downloaded here</a>.

<strong>b.</strong> Change out the "header" (lines 157-193) for your market's third party tophat. <br/>

<strong>c.</strong> LOGO
*Trends masthead logo is a text treatment in Georgia with bottom borders. However, this treatment can easily be swapped out for an image (line 162).  

<strong><h3>3. ADVERTISING & OMNITURE</h3></strong>
*Trends is designed to contain a leaderboard ad at desktop width and a cube ad at mobile width. You'll need ad scripts specific to your market. Contact your advertising representative(s) for market-specific ad scripts to be inserted in the "head" of the HTML and on lines 201 and 260). Omniture tags also need to be included at the bottom of index.php on line 270.<br/>


<strong><h3>4. SUBDOMAIN AND CACHING</h3></strong>
The Baltimore Sun hosts Sun Trends behind a CDN as a subdomain on an Amazon EC2 instance. If you're not familiar with this process, contact your market's IT specialist or contact TribTech. A subdomain isn't a necessity, however. Simply uploading the files to your server is sufficient. <br/>

Sun Trends automatically refreshes every 3 minutes (recommended) as part of it's CDN setup. However, caching is written into index.php to be executed by SimplePie.php (see lines 21-69) so a CDN set up is not needed.


<strong><em>See our original install at <a href="http://trends.baltimoresun.com">http://trends.baltimoresun.com</a></em></strong> 
