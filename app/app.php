<?php

    // DEPENDENCIES
        require_once __DIR__."/../vendor/autoload.php"; // frameworks
        require_once __DIR__."/../src/Scrabble.php"; // example of filepath to first Object created

    // INITIALIZE COOKIE SESSION

    // INITIALIZE APPLICATION
        $app = new Silex\Application();
        $app->register(new Silex\Provider\TwigServiceProvider(), array(
            'twig.path' => __DIR__."/../views"
        ));
    // ROUTES

        // display index webpage
        $app->get('/', function() use ($app) {

            return $app['twig']->render('index.html.twig');
        });

        $app->get("/result", function() use($app) {
            $my_ScrabbleGenerator = new ScrabbleGenerator;
            $calculated_score = $my_ScrabbleGenerator->calculateScore($_GET['word']);
            return $app['twig']->render('result.html.twig', array('result' => $calculated_score));
        });


    return $app;
?>
