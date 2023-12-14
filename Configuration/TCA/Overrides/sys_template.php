<?php
defined('TYPO3') or die();

call_user_func(function()
{
   $extensionKey = 'typografix1';

   /**
    * Default TypoScript
    */
   \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
      $extensionKey,
      'Configuration/TypoScript',
      'TYPO3 Template'
   );
});