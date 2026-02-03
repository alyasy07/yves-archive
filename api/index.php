<?php

// Vercel Serverless Function Entry Point for Laravel

// Register the Composer autoloader
require __DIR__ . '/../vendor/autoload.php';

// Bootstrap Laravel application
$app = require_once __DIR__ . '/../bootstrap/app.php';

// Set the storage path to /tmp for Vercel serverless environment
// This must be done before the request is handled so that configs use the correct path
$storagePath = '/tmp/storage';
$app->useStoragePath($storagePath);

// Ensure all necessary storage directories exist in the writable temporary directory
if (!is_dir($storagePath)) {
    mkdir($storagePath, 0755, true);
}
if (!is_dir($storagePath . '/app')) {
    mkdir($storagePath . '/app', 0755, true);
}
if (!is_dir($storagePath . '/framework/cache')) {
    mkdir($storagePath . '/framework/cache', 0755, true);
}
if (!is_dir($storagePath . '/framework/cache/data')) {
    mkdir($storagePath . '/framework/cache/data', 0755, true);
}
if (!is_dir($storagePath . '/framework/sessions')) {
    mkdir($storagePath . '/framework/sessions', 0755, true);
}
if (!is_dir($storagePath . '/framework/views')) {
    mkdir($storagePath . '/framework/views', 0755, true);
}
if (!is_dir($storagePath . '/framework/testing')) {
    mkdir($storagePath . '/framework/testing', 0755, true);
}
if (!is_dir($storagePath . '/logs')) {
    mkdir($storagePath . '/logs', 0755, true);
}

// Create and handle the HTTP request
$app->handleRequest(
    Illuminate\Http\Request::capture()
);
