<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.module.data_provider.tab_module_list' shared service.

@trigger_error('The "prestashop.adapter.module.data_provider.tab_module_list" service is deprecated since 1.7.8.0 and will be removed in next major.', E_USER_DEPRECATED);

return $this->services['prestashop.adapter.module.data_provider.tab_module_list'] = new \PrestaShop\PrestaShop\Adapter\Module\TabModuleListProvider();
