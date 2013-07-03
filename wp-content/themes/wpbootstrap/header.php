<head>
    <meta charset="utf-8">
    <title><?php wp_title('|',1,'right'); ?> <?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Le styles -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/font-awesome.min.css">

    <link href='http://fonts.googleapis.com/css?family=Pathway+Gothic+One' rel='stylesheet' type='text/css'>
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    
    <?php wp_head(); ?>
  </head>
  <body>

    <aside id="aside">
      <header>
        <h1>ANDRADE</h1>
      </header>
      <nav id="navbar">
        <ul id="menu">
          <?php 
            //wp_list_pages(array('title_li' => ''));
            // wp_menu_lateral();
            $sWalker = new Walker_MenuLateral();
            wp_list_pages( array(  'title_li' => null, 'walker' => $sWalker ) );

           ?>
        </ul>
      </nav> <!-- nav /  end -->
      <div id="social">
         <div class="row-fluid">
          <a href="https://www.facebook.com/luisfdeandrade" target="_blank" class="span4"><i class="icon-facebook-sign"></i></a>
          <a href="https://twitter.com/luisfdeandrade"      target="_blank" class="span4"><i class="icon-twitter-sign"></i></a>
          <a href="https://github.com/luisfdeandrade"       target="_blank" class="span4"><i class="icon-github"></i></a>
         </div>
      </div>
    </aside>
    <!-- .aside -->
    <div id="main" class="container-fluid">
  
    
    
    