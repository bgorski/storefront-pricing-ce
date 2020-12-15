<?php
# Generated by the Magento PHP proto generator.  DO NOT EDIT!

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\PricingStorefrontApi\Api\Data;

/**
 * Autogenerated description for PriceBookScopeRequest class
 *
 * phpcs:disable Magento2.PHP.FinalImplementation
 * @SuppressWarnings(PHPMD)
 * @SuppressWarnings(PHPCPD)
 */
final class PriceBookScopeRequest implements PriceBookScopeRequestInterface
{

    /**
     * @var \Magento\PricingStorefrontApi\Api\Data\ScopeInterface
     */
    private $scope;

    /**
     * @inheritdoc
     *
     * @return \Magento\PricingStorefrontApi\Api\Data\ScopeInterface|null
     */
    public function getScope(): ?\Magento\PricingStorefrontApi\Api\Data\ScopeInterface
    {
        return $this->scope;
    }

    /**
     * @inheritdoc
     *
     * @param \Magento\PricingStorefrontApi\Api\Data\ScopeInterface $value
     * @return void
     */
    public function setScope(\Magento\PricingStorefrontApi\Api\Data\ScopeInterface $value): void
    {
        $this->scope = $value;
    }
}
