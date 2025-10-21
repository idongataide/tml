<?php

function updateImageReferences($directory) {
    $files = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($directory)
    );

    foreach ($files as $file) {
        if ($file->isFile() && $file->getExtension() === 'php') {
            $content = file_get_contents($file->getPathname());
            
            // Replace image extensions in src attributes
            $content = preg_replace(
                '/(src=["\'])([^"\']+)\.(png|jpg|jpeg)(["\'])/i',
                '$1$2.webp$4',
                $content
            );
            
            // Replace image extensions in background-image URLs
            $content = preg_replace(
                '/(background-image:\s*url\(["\']?)([^"\']+)\.(png|jpg|jpeg)(["\']?\))/i',
                '$1$2.webp$4',
                $content
            );
            
            // Replace image extensions in href attributes
            $content = preg_replace(
                '/(href=["\'])([^"\']+)\.(png|jpg|jpeg)(["\'])/i',
                '$1$2.webp$4',
                $content
            );
            
            file_put_contents($file->getPathname(), $content);
            echo "Updated: " . $file->getPathname() . "\n";
        }
    }
}

// Update image references in views directory
updateImageReferences(__DIR__ . '/views');

// Update image references in careers directory
updateImageReferences(__DIR__ . '/views/careers');

echo "Image references updated successfully!\n";
?> 