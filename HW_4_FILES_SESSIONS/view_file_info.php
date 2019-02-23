<?php

$filePath = "uploads/text.txt";

if (file_exists($filePath)) {

    echo "<p>file name: " . basename($filePath) . "</p>";
    echo "<p>file path: " . realpath($filePath) . "</p>";
    echo "<p>file size: " . filesize($filePath). " bites</p>";
    echo "<p>file string count: " . count(file($filePath)) . "</p>";
    echo "<p>file text:</p> <pre>" . file_get_contents($filePath) . "</pre>";
} else {
    echo "can't find the file text.txt";
}

