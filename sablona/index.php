<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sablona</title>
    <?php wp_head(); ?>
</head>
<body>
    
    <?php

        // if (have_posts()) {
        //     while (have_posts()) {
        //         the_post();
        //         echo get_the_title();
        //         echo "<br>";
        //         echo get_the_permalink();
        //         echo "<br>";
        //         echo get_the_content();
        //         echo "<br>";
        //         echo "<br>";
        //     }
        // }
        if (is_home()) {
            echo "Jsi doma";
            preview();
        }else {
            echo "Jsi na stránce";
            full_page();
        }
        // }else
        //     echo "Jsi na stránce";
        //     full_page();
        
        // get_html_box($pole);
        // function preview(){
        //     if (have_posts()) {
        //         $output = null;
        //         while (have_posts()) {
        //             the_post();
        //             $title = get_the_title();
        //             $link = get_the_permalink();
        //             $short_content = wp_trim_words(get_the_content(), 50);
        //             $linked_title = "<h2><a href=\"".$link."\">".$title."</a></h2>";
        //             $output .= "<h1>".$linked_title."</h1><p>".$short_content."</p>";
        //         }
        //     }
        //     if (is_home()) {
        //         $content = get_the_content();
        //         return $output;
        //     }else {
        //         $title = get_the_title();
        //         $content = get_the_content();
        //         $html_article = "<h2>".$title."</h2><p>".$content."</p>";
        //         // $content = get_the_content();
        //         // echo $content;
        //         return $html_article;
        //     }
        // }
        // echo preview();
    ?>

    <?php wp_footer(); ?>
</body>
</html>