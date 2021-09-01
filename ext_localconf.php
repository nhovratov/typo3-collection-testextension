<?php

defined('TYPO3_MODE') or die();

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'testextension',
    'Index',
    [\NH\Testextension\Controller\TreeController::class => 'index, create'],
    [\NH\Testextension\Controller\TreeController::class => 'index, create']
);
