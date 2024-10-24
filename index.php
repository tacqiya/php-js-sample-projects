<?php 
require('vendor/autoload.php');

// with default base URL
$client = \ArdaGnsrn\Ollama\Ollama::client();

// or with custom base URL
// $client = \ArdaGnsrn\Ollama\Ollama::client('http://localhost:11434');


$completions = $client->completions()->create([
    'model' => 'llama3.1',
    'prompt' => 'Once upon a time',
]);

$completions->response; // '...in a land far, far away...'

$response->toArray(); // ['model' => 'llama3.1', 'response' => '...in a land far, far away...', ...]

echo "<pre>"; print_r($completions);