<?php
// Routes

$app->get('/[{name}]', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});

$app->get('/hackpad/ruby/{pad_id}[/{body_width}]', function ($request, $response, $args) {
	return $this->view->render($response, 'treat_ruby.html', [
		'pad_id' => $args['pad_id'],
		'body_width' => ((array_key_exists('body_width', $args) and $args['body_width']) ? $args['body_width'] : 1280),
	]);
})->setName('treat_ruby');