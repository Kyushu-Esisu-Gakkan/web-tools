<?php
// Routes

$app->get('/[{name}]', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});

$app->get('/hackpad/ruby/{pad_id}', function ($request, $response, $args) {
	return $this->view->render($response, 'treat_ruby.html', [
		'pad_id' => $args['pad_id']
	]);
})->setName('treat_ruby');