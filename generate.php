<?php
// Simple placeholder endpoint for AI suggestions
header('Content-Type: application/json');
$input = json_decode(file_get_contents('php://input'), true);
$text = $input['text'] ?? '';
// TODO: Integrate with a real AI service
$suggestion = $text . " (IA suggestion)";
echo json_encode(['suggestion' => $suggestion]);

