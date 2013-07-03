  <hr>

  <footer>
    <p>© Company 2012</p>
  </footer>

  </div>
    <?php 
    wp_enqueue_script("jquery"); 
    wp_enqueue_script("custom-script");
    wp_enqueue_script("jquery.backstrech");
    ?>
    <?php wp_footer(); ?>
    <script>
    (function($) {
      var img_path = '<?php echo bloginfo("template_directory"); ?>' + "/img/";
    
      if($("#main").find("#frontpage")) {
        $("#main").backstretch(img_path+"/batman.jpg");
      }
      // $('#frontpage').css("background-color", "red");
    })(jQuery);

    </script>
  </body>
</html>