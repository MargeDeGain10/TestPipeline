<?php
$finder = (new PhpCsFixer\Finder())
    ->in([
        __DIR__ . '/src', // Adaptez à votre structure
        __DIR__ . '/tests',
    ]);
return (new PhpCsFixer\Config())
->setRules(['@PSR12' => true])
->setFinder($finder)
->setUsingCache(true);