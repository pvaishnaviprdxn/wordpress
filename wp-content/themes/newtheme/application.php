<?php 
  /* 
  Template name:Application
  */
  get_header();
  if(have_rows('application_content')) {
    while(have_rows('application_content')) {
      the_row(); 
      switch (get_row_layout()) {
        case "banner" :
          get_template_part('template-part/content','banner');
        break;
        case "content_section" :
          get_template_part('template-part/content','section');
        break;
        case "content_with_video" :
          get_template_part('template-part/content','video');
        break;
        case "content_with_image" :
          get_template_part('template-part/content','image');
        break;
        case "link" :
          get_template_part('template-part/content','application');
        break;
        case "block_quote" :
          get_template_part('template-part/content','blockquote');
        break;
        case "process" :
          get_template_part('template-part/content','process');
        break;
      }
    }
  } 
  get_footer();
?>