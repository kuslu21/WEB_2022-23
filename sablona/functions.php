<?php
    /*
    $category = query_posts( 'category_name=products' );
    query_posts($category);
    function preview() {
        while (have_posts()) {
            the_post();
            add_theme_support('post-thumbnails');
            $preview = "";
        }
    };*/
    function preview() {
            if (have_posts()) {
                // query_posts( 'category_name=news' );
                while (have_posts()) {
                    the_post();
                    add_theme_support('post-thumbnails');
                    $pole = [
                        'title' => get_the_title(),
                        'link' => get_the_permalink(),
                        'short_content' => wp_trim_words(get_the_content(), 15),
                        'thumbnail' => get_the_post_thumbnail()
                    ];
                    echo get_html_box($pole);
                }
            }else {
                echo "Není co zobrazit";
            }
    }

    function full_page() {
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                add_theme_support('post-thumbnails');
                $pole2 = [
                    'title' => get_the_title(),
                    'link' => get_the_permalink(),
                    'short_content' => get_the_content(),
                ];
                echo get_html_box($pole2);
                echo $link;
                echo '<a class="twitter-share-button"
                href="https://twitter.com/intent/tweet?text=Nejlepší%20článek%20na%20planetě!%20'.$pole2['link'].'"
                data-size="large">
              Tweet</a>';
            }
        }else {
            echo "Není co zobrazit";
        }
}

    // preview_bullshit_fucking_shit();
    function get_html_box($pole) {
        $preview = "<div class='card'>";
        $preview .= "<div class='img'>";
        $preview .= "<a href=".$pole['title'].">";
        $preview .= $pole['thumbnail'];
        $preview .= "</a>";
        $preview .= "</div>";
        $preview .= "<div class='text'>";
        $preview .= "<a href='#'>".$pole['title']."</a>";
        $preview .= "<p>".$pole['short_content']."</p>";
        $preview .= "<button>2500 Kč</button>";
        $preview .= "</div>";
        $preview .= "<a href='".$pole['link']."' class='hover'>
                        <p>Parametry</p>
                        <table>
                            <tr>
                            <td>Délka</td>
                            <td>205cm</td>
                            </tr>
                            <tr>
                                <td>Výška</td>
                                <td>30=38cm</td>
                            </tr>
                            <tr>
                                <td>Šířka</td>
                                <td>75cm</td>
                            </tr>
                            <tr>
                                <td>Nosnost</td>
                                <td>140 kg</td>
                            </tr>
                            <tr>
                                <td>Trensportní rozměry</td>
                                <td>80x60x30cm</td>
                            </tr>
                            <tr>
                                <td>Hmotnost</td>
                                <td>9,5kg</td>
                            </tr>
                        </table>
                    </a>";
        $preview .= "</div>";
        return $preview;
    }
    
?>