#!/usr/bin/env bash
php bin/magento maintenance:enable
composer update
php bin/magento setup:upgrade
php bin/magento setup:di:compile
php bin/magento setup:static-content:deploy
php bin/magento maintenance:disable