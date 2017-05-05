<?
    function technicalportfolio_enqueue_style()
    {
        wp_enqueue_style("customstyle",
            get_template_directory_uri() . "/css/technicalportfolio.css",
            array(),
            "1.0.0",
            "all"
        );

        wp_enqueue_style("bootstraptheme",
            "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css",
            array(),
            "1.0.0",
            "all"
        );

        wp_enqueue_style("bootstrap",
            "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css",
            array(),
            "1.0.0",
            "all"
        );

        wp_enqueue_style("material",
            "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/css/materialize.min.css",
            array(),
            "1.0.0",
            "all"
        );

        wp_enqueue_style("fontroboto",
            "https://fonts.googleapis.com/css?family=Roboto",
            array(),
            "1.0.0",
            "all"
        );

        wp_enqueue_script("customjs",
            get_template_directory_uri(). "/js/technicalportfolio.js",
            array(),
            "1.0.0",
            true
        );
        wp_enqueue_script("customjs",
            "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js",
            array(),
            "1.0.0",
            true
        );
        wp_enqueue_script("customjs",
            "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js",
            array(),
            "1.0.0",
            true
        );
        wp_enqueue_script("customjs",
            "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js",
            array(),
            "1.0.0",
            true
        );
    }

    add_action("wp_enqueue_scripts", "technicalportfolio_enqueue_style");

    function technicalportfolio_theme_setup()
    {
        add_theme_support("menus");

        register_nav_menu("primary", "Primary Header Nav");
    }

    add_action("init", "technicalportfolio_theme_setup");
