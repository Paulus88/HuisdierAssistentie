<!doctype html><html lang="nl"><head>
		<title>Huisdier Assistentie</title>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/0.js"></script>
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" id="camera-css"  href="css/camera.css" type="text/css" media="all">
		<link rel="stylesheet" href="css/style.css" type="text/css"/>
		<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen" charset="utf-8" />
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
		<link rel="icon" sizes="192x192" href="images/icon.png">
		<meta charset utf="8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
		<meta name="theme-color" content="#F789DB">
		<meta name="description" content="De individuele/persoonlijke dieren uitlaten, oppas en verblijf met veel ervaring">
		<meta name="keywords" content="hilversum,hondhulp,huisdier,assistentie,verzorg,hond,cat,huisdieren,dog,pet">
		<meta name="author" content="Paul Hemmens">
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MBZ3D9T');</script>
    <script type="text/javascript" src="js/jquery.mobile.customized.min.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/camera.js"></script>
	<script>
	(function($){
	  'use strict';
	    $(window).on('load', function () {
	        if ($(".pre-loader").length > 0)
	        {
	            $(".pre-loader").fadeOut("slow");
	        }
	    });
	})(jQuery)
		paceOptions = {
					elements: true
		};
		jQuery(function(){

		 jQuery('#camera_wrap_3').camera({
		 height: '56%',
		 pagination: false,
		 thumbnails: true,
		 imagePath: 'images/'
		});
		});
		function resizeInput() {
				$(this).attr('size', $(this).val().length);
		}

		$('input[type="text"], input[type="email"]')
				// event handler
				.keyup(resizeInput)
				// resize on page load
				.each(resizeInput);


		console.clear();
		// Adapted from georgepapadakis.me/demo/expanding-textarea.html
		(function(){

			var textareas = document.querySelectorAll('.expanding'),

					resize = function(t) {
						t.style.height = 'auto';
						t.style.overflow = 'hidden'; // Ensure scrollbar doesn't interfere with the true height of the text.
						t.style.height = (t.scrollHeight + t.offset ) + 'px';
						t.style.overflow = '';
					},

					attachResize = function(t) {
						if ( t ) {
							console.log('t.className',t.className);
							t.offset = !window.opera ? (t.offsetHeight - t.clientHeight) : (t.offsetHeight + parseInt(window.getComputedStyle(t, null).getPropertyValue('border-top-width')));

							resize(t);

							if ( t.addEventListener ) {
								t.addEventListener('input', function() { resize(t); });
								t.addEventListener('mouseup', function() { resize(t); }); // set height after user resize
							}

							t['attachEvent'] && t.attachEvent('onkeyup', function() { resize(t); });
						}
					};

			// IE7 support
			if ( !document.querySelectorAll ) {

				function getElementsByClass(searchClass,node,tag) {
					var classElements = new Array();
					node = node || document;
					tag = tag || '*';
					var els = node.getElementsByTagName(tag);
					var elsLen = els.length;
					var pattern = new RegExp("(^|\\s)"+searchClass+"(\\s|$)");
					for (i = 0, j = 0; i < elsLen; i++) {
						if ( pattern.test(els[i].className) ) {
							classElements[j] = els[i];
							j++;
						}
					}
					return classElements;
				}

				textareas = getElementsByClass('expanding');
			}

			for (var i = 0; i < textareas.length; i++ ) {
				attachResize(textareas[i]);
			}});
				function load(time){
					var x = new XMLHttpRequest()
					x.open('GET', "/" + time, true);
					x.send();
				};
		</script>
</head>
<body>
<div class="pre-loader"><div class="loader">
<a href=""><h1><span class="hlh">Huisdier </span><span class="hlf">Assistentie</span></a></h1><br />Bel: <a href="tel:+31657941463">+31 6 57 94 14 63</a><br />E-Mail: <a href="mailto:info@huisdierassistentie.nl" alt="E-Mail">info@huisdierassistentie.nl</a><br /><br />Pagina wordt geladen...</div><div class="paw-wrapper">
<img class = "paw" src="images/paw.png" alt="paw"></img>
<img class = "paw" src="images/paw.png" alt="paw"></img>
<img class = "paw" src="images/paw.png" alt="paw"></img>
<img class = "paw" src="images/paw.png" alt="paw"></img>
<img class = "paw" src="images/paw.png" alt="paw"></img>
</div></div>
<div class="fluid_container">
        <div class="camera_wrap camera_emboss" id="camera_wrap_3">
            <div data-thumb="images/slides/thumbs/intro-tn.png" data-src="images/slides/intro.png">
<iframe width="100%" height="100%" src="//www.youtube.com/embed/0Fnae_Bv-So" frameborder="0" allowfullscreen></iframe>
            </div>
            <div data-thumb="images/slides/thumbs/00.jpg" data-src="images/slides/20170522_135330.jpg">
                <div style="position:absolute; top:5%; left:5%; background:#000; color:#fff; padding:5px; width:25%" class="fadeIn camera_effected">This is an HTML element included in the transition effect</div>
            </div>
            <div data-thumb="images/slides/thumbs/01.jpg" data-src="images/slides/Teddy-01.jpg" data-time="1500" data-trasPeriod="4000">
                <div class="camera_caption fadeFromTop">
                    Teddy
                </div>
            </div>
						<div data-thumb="images/slides/thumbs/02.jpg" data-src="images/slides/Rani-01.jpg" >
                <div style="position:absolute; top:5%; left:5%; background:#000; color:#fff; padding:5px; width:25%" class="fadeIn camera_effected">Rani</div>
            </div>
						<div data-thumb="images/slides/thumbs/06.jpg" data-src="images/slides/Freddy-01.jpg" data-time="1500" data-trasPeriod="4000">
                <div class="camera_caption fadeFromTop">
                    Freddy
                </div>
            </div>
        </div>
		<div class="clearfix"> </div>
		</div>
</body>
</html>
