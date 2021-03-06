<?php

require_once 'vendor/autoload.php';

$app = new \Slim\App([
    'settings' => [
        'displayErrorDetails' => true
    ]
]);

/*
// Get container
$container = $app->getContainer();

// Register component on container
$container['view'] = function ($container) {
    $view = new \Slim\Views\Twig('views', [
        'cache' => false
    ]);

    // Instantiate and add Slim specific extension
    $router = $container->get('router');
    $uri = \Slim\Http\Uri::createFromEnvironment(new \Slim\Http\Environment($_SERVER));
    $view->addExtension(new \Slim\Views\TwigExtension($router, $uri));

    return $view;
};


# PERSONALIZAÇÃO DE ERROS, OCULTADO EM PRODUÇÃO

$container['errorHandler'] = function ($container) {
    return function ($request, $response, $exception) use ($container) {
        return $response->withHeader('Content-Type', 'text/html')
            ->write('<h1>Erro na requisição</h1><br>Houve um erro interno no servidor');
    };
};

// Register provider
$container['flash'] = function () {
    return new \Slim\Flash\Messages();
};*/

/*$app->add(new \Tuupola\Middleware\JwtAuthentication([
    "path" => "/api",
    "ignore" => ["/jwt/v1/login"],
    "attribute" => "decoded_token_data",
    "secret" => JWT_KEY,
    "error" => function ($response, $arguments) {
        $data["status"] = "error";
        $data["message"] = $arguments["message"];
        return $response
            ->withHeader("Content-Type", "application/json")
            ->write(json_encode($data, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT));
    }
]));*/