<?php
/** Dev **/
function dd( $target ){
    echo "<pre>";
    var_dump( $target );
    echo "</pre>";
    die();
}

/** Themes  **/
add_action("admin_enqueue_scripts", "load_js");
function load_js(){
    wp_enqueue_script( "colorjs", get_template_directory_uri()."/js/jscolor.min.js" );
}
// On va déclencher une action au moment ou le menu admin se charge
add_action("admin_menu", "generate_theme_menu");
add_action("admin_init", "add_option_customs");

function add_option_customs(){

    // On créer une option dans la bdd pour le choix de la categorie
    add_option("home_category", "");
    add_option("custom_colors", []);
}
function generate_theme_menu(){
    add_menu_page(
        "Pierre Theme",
        "Pierre Theme",
        "administrator",
        "pierre_theme_menu", // Slug : un nom tout accroché sans charactere special en minuscule
        "generate_theme_menu_page", // Fonction appelé pour afficher la page
        "dashicons-welcome-widgets-menus",
        60
    );
}

function generate_theme_menu_page(){

    if( isset( $_POST["home_category"] ) ){
        update_option( "home_category", $_POST["home_category"] );
    }
    if( isset( $_POST["color_h"] ) && $_POST["color_c"] && $_POST["color_b"] ){
        $colors = [
            "headers" => $_POST["color_h"],
            "content" => $_POST["color_c"],
            "background" => $_POST["color_b"],
        ];
        update_option( "custom_colors", $colors);
    }

    $colors_val = [
        "headers" => [],
        "content" => "",
        "background" => "",
    ];
    $option_val = get_option("home_category");
    if(get_option("custom_colors")){
        $colors_val = get_option("custom_colors");
    }
    $categories = get_categories();

    ?> 

    <h1> Administration de Pierre Theme </h1>

    <h2> Page d'accueil </h2> 

    <form method="post">

        <label>

            <span> Choix de la catégorie a afficher: </span>
            <select name="home_category">

                <?php foreach( $categories as $category ){ ?> 
                        
                    <option value="<?= $category->cat_ID ?>" <?php isSelected($category->cat_ID) ?> > 

                        <?= $category->name ?> 

                    </option>

                <?php } ?>

            </select>

        </label>
        <?php 
        for($i=0; $i<6;$i++){?>
            <br><label>Title h<?= $i+1 ?>: <input type="text" class="jscolor" value="<?= $colors_val["headers"][$i] ?>" name="color_h[]" ></label>
        <?php }?>
        <br><label>Content: <input type="text" class="jscolor" value="<?= $colors_val["content"] ?>" name="color_c"></label>
        <br><label>Background: <input type="text" class="jscolor" value="<?= $colors_val["background"] ?>" name="color_b"></label>
        <br><input type="submit" value="Valider">
    </form>

    <?php 
}

function isSelected( $value ){
    if( $value == get_option("home_category") ){
        echo "selected";
    }
}