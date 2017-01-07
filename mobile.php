<!DOCTYPE html>
<html>
    <head>
        <title>Real DJ Name Generator</title>

        <meta charset="utf-8">
        <meta name="description" content="Description">
        <meta name="keywords" content="">

        <meta name="viewport" content="user-scalable=no, minimal-ui, initial-scale=.56">

        <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="./favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png">

        <meta property="og:title" content="Real DJ Name Generator" />
        <meta property="og:type" content="article" />
        <meta property="og:image" content="http://realdjnamegenerator.com/img/share_this_001.png" />
        <meta property="og:url" content="http://realdjnamegenerator.com/" />
        <meta property="og:description" content="What's the one thing all great DJs have in common?" />

        <meta name="twitter:card" value="summary">
        <meta name="twitter:url" content="http://realdjnamegenerator.com/">
        <meta name="twitter:domain" content="http://realdjnamegenerator.com">
        <meta name="twitter:title" content="Real DJ Name Generator">
        <meta name="twitter:description" content="What's the one thing all great DJs have in common?">
        <meta name="twitter:image" content="http://realdjnamegenerator.com/img/share_this_001.png" />
        
        <link href='./css/reset.css' media='all' rel='stylesheet' type='text/css' />
        <link href='./css/mobile.css' media='all' rel='stylesheet' type='text/css' />

        <script src='./js/jquery-2.1.1.min.js' type='text/javascript'></script>
        <script src='./js/mobile.js' type='text/javascript'></script>
        <script src='./js/plugins.js' type='text/javascript'></script>
        
        <script type="text/javascript">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-89921460-1']);
            _gaq.push(['_trackPageview']);

            (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
        </script>
    </head>
    <body>
        <div id="wrapper">
            <a href="./"><img class="logo" src="./img/logo.png" /></a>
            
            <div id="create">
                <p class="info first">Whether you're playing sold out stadiums or making bedroom bangerz, you need a DJ name that's as unique as you are.</p>
                <p class="info last">Enter your first and last name below...</p>
                <div id="tape">
                    <form>
                        <div class="first clear">
                            <p>First:</p>
                            <input type="text" maxlength="13" />
                        </div>
                        <div class="last clear">
                            <p>Last:</p>
                            <input type="text" maxlength="13" />
                        </div>
                        <input class="submit" type="submit" />
                    </form>
                    <div class="wheel"></div>
                    <div class="material"></div>
                    <div class="wheel two"></div>
                </div>
                <div id="drop">
                    <p>Drop!</p>
                </div>
            </div>

            <div id="loading">
                <p class="generating">Generating...</p>
                <div class="loading">
                </div>
            </div>

            <div id="label">
                <p class="label">Congratulations!<br/>Your Real DJ name is:</p>
                <div class="djbooth">
                    <p class="name">DJ</p>
                    <p class="name first">Chris</p>
                    <p class="name last">Allick</p>
                </div>
            </div>

            <div id="about">
                <a class="close" href="#">+</a>
                <p class="about">Designed by <a href="http://www.michaelkleinman.net" target="_blank">Michael Kleinman</a></p>
                <p class="about">Developed by <a href="http://chrisallick.com" target="_blank">Chris Allick</a></p>
            </div>

            <div id="footer">
                <div class="links">
                    <a class="goback" href="#">Go back</a>
                    <a class="about" href="#">About</a>
                </div>
                <div class="social clear">
                    <a href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent('http://realdjnamegenerator.com'),'facebook-share-dialog','width=626,height=436'); return false;" target="_blank"><img src="./img/facebook.png" /></a>
                    <a href="javascript:(function(){window.twttr=window.twttr||{};var D=550,A=450,C=screen.height,B=screen.width,H=Math.round((B/2)-(D/2)),G=0,F=document,E;if(C>A){G=Math.round((C/2)-(A/2))}window.twttr.shareWin=window.open('https://twitter.com/intent/tweet?text=What\'s the one thing all great DJs have in common? http://realdjnamegenerator.com','','left='+H+',top='+G+',width='+D+',height='+A+',personalbar=0,toolbar=0,scrollbars=1,resizable=1');E=F.createElement('script');E.src='http://platform.twitter.com/widgets.js';F.getElementsByTagName('head')[0].appendChild(E)}());" target="_blank"><img src="./img/twitter.png" /></a>
                </div>
            </div>
        </div>
    </body>
</html>