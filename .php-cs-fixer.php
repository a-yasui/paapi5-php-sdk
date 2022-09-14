<?php
declare(strict_types=1);

$finder = \PhpCsFixer\Finder::create()
    ->in([
        __DIR__,
        './src'
    ]);

$config = new PhpCsFixer\Config();
return $config->setRiskyAllowed(true)
    ->setRules([
        '@PSR12' => true,
        '@PHP81Migration' => true,
        'strict_param' => true,
        'array_syntax' => ['syntax' => 'short'],
    ])
    ->setFinder($finder);

