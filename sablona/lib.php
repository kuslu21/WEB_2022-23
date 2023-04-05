<?php

    function get_html_box($pole){
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