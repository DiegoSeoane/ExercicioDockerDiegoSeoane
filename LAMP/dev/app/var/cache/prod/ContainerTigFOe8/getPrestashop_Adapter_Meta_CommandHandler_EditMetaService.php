<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.meta.command_handler.edit_meta' shared service.

return $this->services['prestashop.adapter.meta.command_handler.edit_meta'] = new \PrestaShop\PrestaShop\Adapter\Meta\CommandHandler\EditMetaHandler(($this->services['validator'] ?? $this->getValidatorService()), ($this->services['prestashop.adapter.meta.data_provider'] ?? ($this->services['prestashop.adapter.meta.data_provider'] = new \PrestaShop\PrestaShop\Adapter\Meta\MetaDataProvider())));
