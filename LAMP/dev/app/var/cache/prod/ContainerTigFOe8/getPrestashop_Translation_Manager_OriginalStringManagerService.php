<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.translation.manager.original_string_manager' shared service.

return $this->services['prestashop.translation.manager.original_string_manager'] = new \PrestaShop\TranslationToolsBundle\Translation\Manager\OriginalStringManager(($this->services['prestashop.translation.parser.crowdin_php_parser'] ?? ($this->services['prestashop.translation.parser.crowdin_php_parser'] = new \PrestaShop\TranslationToolsBundle\Translation\Parser\CrowdinPhpParser())));