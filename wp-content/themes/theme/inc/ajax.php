<?php
function sendform()
{  
    $message = implode(",", [$_POST["name"], $_POST["email"], $_POST["tel"], $_POST["comment"]]);
    $res = wp_mail(get_theme_mod('email'), "Зарегистрирована заявка на услуги", $message);
	echo json_encode($res);
    wp_die();
}
add_action('wp_ajax_sendform', 'sendform');
add_action('wp_ajax_nopriv_sendform', 'sendform');

function pagination()
{  
    $posts = "";
    $count = 0;
    $def = "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQ4AAAC7CAMAAACjH4DlAAAAXVBMVEUpMTRnjLEiJiNcfJxrkbgkKSgoLzEmLS5EWWxXdpM0QkxAVGUuOT9kiKslKytSbohPaYJggqM+UF8wO0I6SldIX3Q2RE9LY3oyP0crNDk+UWFWdJA7S1lPaH9jhacMRR/OAAADlElEQVR4nO3c7XKqMBSFYSi4CSCB8CGkKvd/mUfAVoNgHUiPdbuef51aprwDAQLiOAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP6NAbiySAT17jVYIZFNloUVZ1cjg2Wu1WJypxLUqUVn87LVaiLbKtxuj46vti+4wwvKmMUjEs9drkaBSv1HDdVX1isOHPA45fIuGHLV89rot8DH8861oIksa0Q6BP569bgucc3gbsmbjMchhb5HIYeCWo9/kly+SVQ4K9GlU3RXLT7M55dBNlXbXHfu6WrqBMMpBTfx1zq6KhT3Y5CAdeZcLmHa37LqDTY5tap5o74sli2ScY8nmwSVHUI0uw/wqWtCDTY56PPNRl/M5Zs9NuOSQ2aiGG4r5s4/oc2ZXYpMjHefw5ictxN7NDpM93jAH6dM6t+nklPn75aAy7H+fTu0vXHLcHFnmdgfKz2Nu0k4cetjkEKMavmimclBwmW0Ob2cGuOSgnWfmULvJv9nGV58pb3YnLjkcKcxpdTG5bezMZDeXemxyUCSSy5mYX01tHAGZI0ySCGn2YJPDISevPZWctF74OTmM5sfxbSpVlcYn+OQ4BZFadNM/x6aYOsaSbt0bbWh8lFMOx9GlOPkstlMf11O3MBOVX/fgleN0HD2ZPt8o5+5uX4+nzHLMIhnP1EhUeVnAu+TQ4Z1HH7LvJTDNMdpf6HNiFL0S7s5/wDMHRdr4udjfreG2mR56sMxBjrfPrzYQEd6v0e0vh/4AwzGHLivfVeXXBhLE9/eUgddfADPMQU3abQ3ZefvQdDMVMqmfHmGYQ59nkVXe/USifuwBsrR74odhju9L/bS7Exf8PG4wzkEkLvcms1LK+NFHLVnmOJinW573aA2OOUgezEmg5PEHT/nloObeqfi75SA5e9X6hjkoEt699X2vHNtov+p5fV45qBHrvr3AKseqUZRfDpmt/WYLrxyPXachB3IgB3Ighwk5DMhhMHOsPO/weeXIkpUyTjkcvV2pvw/BJoez9kuS/UL45LACOQwMcqhSB5boUr1wjuEQmWQitkRk55n3V8zx9UoCi+8kGJanjq/4SgLK10wV3+HlL/k+k039Ozlqi4Pz/xQcbh6cXS05Hl7xZSYdKoTVl5n0w4dY+p3kv6DIhVX5ou/f/hlEtk46Bmve7wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABj/wCGXEuzlUGJPAAAAABJRU5ErkJggg==";
    global $wp_query;

    if($_POST["tax_id"] != ""){
        $wp_query = new WP_Query([
            "post_type" => $_POST["post_type"],
            "posts_per_page" => $_POST["posts_per_page"],
            "paged" => $_POST["paged"],
            "tax_query" => [
                [
                    "taxonomy" => $_POST["taxonomy"],
                    "field" => "id",
                    "terms" => $_POST["tax_id"],
                ]
            ]
        ]);
    }
    else{
        $wp_query = new WP_Query([
            "post_type" => $_POST["post_type"],
            "posts_per_page" => $_POST["posts_per_page"],
            "paged" => $_POST["paged"],
        ]);
    }

    while(have_posts()){
        the_post();
        $posts .= sprintf('
            <div class="news-item anim">
                <img src="%s" alt="">
                <h2>%s</h2>
                <span>%s</span>
                <p>%s</p>
                <a href="%s">%s</a>
            </div>',
            get_the_post_thumbnail_url() ?: $def,
            get_the_title(),
            get_the_date(),
            get_the_excerpt(),
            get_the_permalink(),
            "Per saperne di più",
        );
        $count++;
    }
    
    wp_reset_query();
	echo json_encode([
        "posts" => $posts,
        "count" => $count,
    ]);
    wp_die();
}
add_action('wp_ajax_pagination', 'pagination');
add_action('wp_ajax_nopriv_pagination', 'pagination');

