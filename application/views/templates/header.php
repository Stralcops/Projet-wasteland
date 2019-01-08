

<!DOCTYPE html>
  <html>
    <head>

      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/css/materialize.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css"  media="screen,projection"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
      <nav class="nav-extended green darken-4">
         <div class="nav-wrapper">
           <a href="#" class="brand-logo">Wasteland</a>
           <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
           <ul id="nav-mobile" class="right hide-on-med-and-down">
             <li><a href="sass.html">Joueurs</a></li>
             <li><a href="badges.html">Bestiaire</a></li>
             <li><a href="collapsible.html">Combats</a></li>
           </ul>
         </div>
         <div class="nav-content">
           <ul class="tabs tabs-transparent">
             <li class="tab"><a href="#test1">Test 1</a></li>
             <li class="tab"><a class="active" href="#test2">Test 2</a></li>
             <li class="tab disabled"><a href="#test3">Disabled Tab</a></li>
             <li class="tab"><a href="#test4">Test 4</a></li>
           </ul>
         </div>
       </nav>

       <ul class="sidenav" id="mobile-demo">
         <li><a href="sass.html">Sass</a></li>
         <li><a href="badges.html">Components</a></li>
         <li><a href="collapsible.html">JavaScript</a></li>
       </ul>

       <div id="test1" class="col s12">Test 1</div>
       <div id="test2" class="col s12">Test 2</div>
       <div id="test3" class="col s12">Test 3</div>
       <div id="test4" class="col s12">Test 4</div>
