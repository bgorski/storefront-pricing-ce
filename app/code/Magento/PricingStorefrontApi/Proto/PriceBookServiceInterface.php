<?php
# Generated by the protocol buffer compiler (spiral/php-grpc). DO NOT EDIT!
# source: prices.proto

namespace Magento\PricingStorefrontApi\Proto;

use Spiral\GRPC;

interface PriceBookServiceInterface extends GRPC\ServiceInterface
{
    // GRPC specific service name.
    public const NAME = "magento.pricingStorefrontApi.proto.PriceBookService";

    /**
    * @param GRPC\ContextInterface $ctx
    * @param PriceBookScopeRequest $in
    * @return PriceBookResponse
    *
    * @throws GRPC\Exception\InvokeException
    */
    public function buildPriceBookId(GRPC\ContextInterface $ctx, PriceBookScopeRequest $in): PriceBookResponse;

    /**
    * @param GRPC\ContextInterface $ctx
    * @param PriceBookScopeRequest $in
    * @return PriceBookResponse
    *
    * @throws GRPC\Exception\InvokeException
    */
    public function findPriceBook(GRPC\ContextInterface $ctx, PriceBookScopeRequest $in): PriceBookResponse;

    /**
    * @param GRPC\ContextInterface $ctx
    * @param PriceBookRequest $in
    * @return PriceBookCreateResponse
    *
    * @throws GRPC\Exception\InvokeException
    */
    public function createPriceBook(GRPC\ContextInterface $ctx, PriceBookRequest $in): PriceBookCreateResponse;

    /**
    * @param GRPC\ContextInterface $ctx
    * @param PriceBookDeleteRequest $in
    * @return PriceBookDeleteResponse
    *
    * @throws GRPC\Exception\InvokeException
    */
    public function deletePriceBook(GRPC\ContextInterface $ctx, PriceBookDeleteRequest $in): PriceBookDeleteResponse;

    /**
    * @param GRPC\ContextInterface $ctx
    * @param AssignPricesRequest $in
    * @return PriceBookAssignPricesResponse
    *
    * @throws GRPC\Exception\InvokeException
    */
    public function assignPrices(GRPC\ContextInterface $ctx, AssignPricesRequest $in): PriceBookAssignPricesResponse;

    /**
    * @param GRPC\ContextInterface $ctx
    * @param UnassignPricesRequest $in
    * @return PriceBookUnassignPricesResponse
    *
    * @throws GRPC\Exception\InvokeException
    */
    public function unassignPrices(GRPC\ContextInterface $ctx, UnassignPricesRequest $in): PriceBookUnassignPricesResponse;

    /**
    * @param GRPC\ContextInterface $ctx
    * @param GetPricesRequest $in
    * @return GetPricesOutput
    *
    * @throws GRPC\Exception\InvokeException
    */
    public function getPrices(GRPC\ContextInterface $ctx, GetPricesRequest $in): GetPricesOutput;

    /**
    * @param GRPC\ContextInterface $ctx
    * @param GetPricesRequest $in
    * @return GetPricesOutput
    *
    * @throws GRPC\Exception\InvokeException
    */
    public function getTierPrices(GRPC\ContextInterface $ctx, GetPricesRequest $in): GetPricesOutput;
}
