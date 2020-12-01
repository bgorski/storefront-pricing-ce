<?php
# Generated by the Magento PHP proto generator.  DO NOT EDIT!

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\PricingStorefrontApi\Api;

use \Magento\PricingStorefrontApi\Api\Data\PriceBookScopeRequestInterface;
use \Magento\PricingStorefrontApi\Api\Data\PriceBookResponseInterface;
use \Magento\PricingStorefrontApi\Api\Data\PriceBookRequestInterface;
use \Magento\PricingStorefrontApi\Api\Data\PriceBookCreateResponseInterface;
use \Magento\PricingStorefrontApi\Api\Data\PriceBookDeleteRequestInterface;
use \Magento\PricingStorefrontApi\Api\Data\PriceBookDeleteResponseInterface;
use \Magento\PricingStorefrontApi\Api\Data\AssignPricesRequestInterface;
use \Magento\PricingStorefrontApi\Api\Data\PriceBookAssignPricesResponseInterface;
use \Magento\PricingStorefrontApi\Api\Data\UnassignPricesRequestInterface;
use \Magento\PricingStorefrontApi\Api\Data\PriceBookUnassignPricesResponseInterface;
use \Magento\PricingStorefrontApi\Api\Data\GetPricesRequestInterface;
use \Magento\PricingStorefrontApi\Api\Data\GetPricesOutputInterface;

/**
 * Autogenerated description for InMemoryPriceBookService class
 *
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class InMemoryPriceBookService implements PriceBookServiceInterface
{
    /**
     * @var PriceBookServiceServerInterface
     */
    private $service;

    /**
     * @param PriceBookServiceServerInterface $service
     */
    public function __construct(
        PriceBookServiceServerInterface $service
    ) {
        $this->service = $service;
    }

    /**
     * Autogenerated description for buildPriceBookId in memory client service method
     *
     * @param PriceBookScopeRequestInterface $request
     * @return PriceBookResponseInterface
     */
    public function buildPriceBookId(PriceBookScopeRequestInterface $request): PriceBookResponseInterface
    {
        return $this->service->buildPriceBookId($request);
    }

    /**
     * Autogenerated description for findPriceBook in memory client service method
     *
     * @param PriceBookScopeRequestInterface $request
     * @return PriceBookResponseInterface
     */
    public function findPriceBook(PriceBookScopeRequestInterface $request): PriceBookResponseInterface
    {
        return $this->service->findPriceBook($request);
    }

    /**
     * Autogenerated description for createPriceBook in memory client service method
     *
     * @param PriceBookRequestInterface $request
     * @return PriceBookCreateResponseInterface
     */
    public function createPriceBook(PriceBookRequestInterface $request): PriceBookCreateResponseInterface
    {
        return $this->service->createPriceBook($request);
    }

    /**
     * Autogenerated description for deletePriceBook in memory client service method
     *
     * @param PriceBookDeleteRequestInterface $request
     * @return PriceBookDeleteResponseInterface
     */
    public function deletePriceBook(PriceBookDeleteRequestInterface $request): PriceBookDeleteResponseInterface
    {
        return $this->service->deletePriceBook($request);
    }

    /**
     * Autogenerated description for assignPrices in memory client service method
     *
     * @param AssignPricesRequestInterface $request
     * @return PriceBookAssignPricesResponseInterface
     */
    public function assignPrices(AssignPricesRequestInterface $request): PriceBookAssignPricesResponseInterface
    {
        return $this->service->assignPrices($request);
    }

    /**
     * Autogenerated description for unassignPrices in memory client service method
     *
     * @param UnassignPricesRequestInterface $request
     * @return PriceBookUnassignPricesResponseInterface
     */
    public function unassignPrices(UnassignPricesRequestInterface $request): PriceBookUnassignPricesResponseInterface
    {
        return $this->service->unassignPrices($request);
    }

    /**
     * Autogenerated description for getPrices in memory client service method
     *
     * @param GetPricesRequestInterface $request
     * @return GetPricesOutputInterface
     */
    public function getPrices(GetPricesRequestInterface $request): GetPricesOutputInterface
    {
        return $this->service->getPrices($request);
    }

    /**
     * Autogenerated description for getTierPrices in memory client service method
     *
     * @param GetPricesRequestInterface $request
     * @return GetPricesOutputInterface
     */
    public function getTierPrices(GetPricesRequestInterface $request): GetPricesOutputInterface
    {
        return $this->service->getTierPrices($request);
    }
}
