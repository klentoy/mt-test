<?php

// Define your endpoint URL
$endpoint = 'http://localhost:8080/mt5/';

// Get the HTTP method (GET, POST, PUT, DELETE)
$method = $_SERVER['REQUEST_METHOD'];

// If it's a GET request, retrieve the parameters from the query string
if ($method == 'GET') {
    $params = $_GET;
} else { // For other HTTP methods, retrieve the parameters from the request body
    $params = json_decode(file_get_contents("php://input"), true);
}

// Handle the request based on the HTTP method
switch ($method) {
    case 'GET':
        echo json_encode([
            'accounts' => [66622900, 66622901, 66622902, 66622903, 66622904],
            'account_names' => ["Klent Fermano", "MetaTrader 5 Desktop Demo","Richard Gutierrez","Wanmig Bundoks","Something"]
        ]);
        break;
    case 'POST':
        // Implement your POST functionality here
        break;
    case 'PUT':
        // Implement your PUT functionality here
        break;
    case 'DELETE':
        // Implement your DELETE functionality here
        break;
    default:
        // Return an error message for unsupported HTTP methods
        http_response_code(405);
        echo json_encode(['error' => 'Method not allowed']);
        break;
}

?>
