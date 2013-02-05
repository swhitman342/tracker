 <html lang="en">
<head>
  <meta charset="utf-8" />
  <title>description animation</title>
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.0/themes/base/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
  <script src="http://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css" />
  <style>
    .toggler { width: 500px; height: 200px; position: relative; }
    #button { padding: .5em 1em; text-decoration: none; }
    #effect { width: 240px; height: 115px; padding: 0.4em; position: relative; background: #fff; }
    #effect h3 { margin: 0; padding: 0.4em; text-align: center; }
  </style>
  <script>
  $(function() {
    var state = true;
    $( "#button" ).click(function() {
      if ( state ) {
        $( "#effect" ).animate({
          backgroundColor: "#000",
          color: "#5E0B96",
          width: 420
        }, 1000 );
      } else {
        $( "#effect" ).animate({
          backgroundColor: "#FFF",
          color: "FFF",
          width: 240
        }, 1000 );
      }
      state = !state;
    });
  });
  </script>
</head>
<body>
 
<div class="toggler">
  <div id="effect" class="ui-widget-content ui-corner-all">
    <h3 class="ui-widget-header ui-corner-all">?</h3>
    <p>
      MAKE AN INTERACTIVE LIST OF ALL YOUR FAVORITE MOVIES.!
    </p>
  </div>
</div>
 
<a href="#" id="button" class="ui-state-default ui-corner-all">Toggle Effect</a>
 
 
</body>
</html>