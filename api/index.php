<?php

// Vercel Serverless Function Entry Point for Laravel

// Register the Composer autoloader
require __DIR__ . '/../vendor/autoload.php';

// Bootstrap Laravel application
$app = require_once __DIR__ . '/../bootstrap/app.php';

// Set the storage path to /tmp for Vercel serverless environment
$app->useStoragePath('/tmp/storage');

// Create and handle the HTTP request
$app->handleRequest(
    Illuminate\Http\Request::capture()
);
