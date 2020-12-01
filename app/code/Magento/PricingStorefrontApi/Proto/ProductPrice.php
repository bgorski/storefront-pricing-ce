<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: prices.proto

namespace Magento\PricingStorefrontApi\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>magento.pricingStorefrontApi.proto.ProductPrice</code>
 */
class ProductPrice extends \Google\Protobuf\Internal\Message
{
    /**
     * Represent Product ID or Option ID like custom option, downloadable link, etc.
     * E.g. option/<product_id>/<custom_option_id>
     *
     * Generated from protobuf field <code>string entity_id = 2;</code>
     */
    protected $entity_id = '';
    /**
     * Minimum product price
     *
     * Generated from protobuf field <code>.magento.pricingStorefrontApi.proto.Price minimum_price = 3;</code>
     */
    protected $minimum_price = null;
    /**
     * Maximum product price used for complex products or products with custom options
     *
     * Generated from protobuf field <code>.magento.pricingStorefrontApi.proto.Price maximum_price = 4;</code>
     */
    protected $maximum_price = null;
    /**
     * Represent price for given quantity. If not specified assumes it as "1"
     *
     * Generated from protobuf field <code>float qty = 5;</code>
     */
    protected $qty = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $entity_id
     *           Represent Product ID or Option ID like custom option, downloadable link, etc.
     *           E.g. option/<product_id>/<custom_option_id>
     *     @type \Magento\PricingStorefrontApi\Proto\Price $minimum_price
     *           Minimum product price
     *     @type \Magento\PricingStorefrontApi\Proto\Price $maximum_price
     *           Maximum product price used for complex products or products with custom options
     *     @type float $qty
     *           Represent price for given quantity. If not specified assumes it as "1"
     * }
     */
    public function __construct($data = null)
    {
        \Magento\PricingStorefrontApi\Metadata\Prices::initOnce();
        parent::__construct($data);
    }

    /**
     * Represent Product ID or Option ID like custom option, downloadable link, etc.
     * E.g. option/<product_id>/<custom_option_id>
     *
     * Generated from protobuf field <code>string entity_id = 2;</code>
     * @return string
     */
    public function getEntityId()
    {
        return $this->entity_id;
    }

    /**
     * Represent Product ID or Option ID like custom option, downloadable link, etc.
     * E.g. option/<product_id>/<custom_option_id>
     *
     * Generated from protobuf field <code>string entity_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setEntityId($var)
    {
        GPBUtil::checkString($var, true);
        $this->entity_id = $var;

        return $this;
    }

    /**
     * Minimum product price
     *
     * Generated from protobuf field <code>.magento.pricingStorefrontApi.proto.Price minimum_price = 3;</code>
     * @return \Magento\PricingStorefrontApi\Proto\Price
     */
    public function getMinimumPrice()
    {
        return $this->minimum_price;
    }

    /**
     * Minimum product price
     *
     * Generated from protobuf field <code>.magento.pricingStorefrontApi.proto.Price minimum_price = 3;</code>
     * @param \Magento\PricingStorefrontApi\Proto\Price $var
     * @return $this
     */
    public function setMinimumPrice($var)
    {
        GPBUtil::checkMessage($var, \Magento\PricingStorefrontApi\Proto\Price::class);
        $this->minimum_price = $var;

        return $this;
    }

    /**
     * Maximum product price used for complex products or products with custom options
     *
     * Generated from protobuf field <code>.magento.pricingStorefrontApi.proto.Price maximum_price = 4;</code>
     * @return \Magento\PricingStorefrontApi\Proto\Price
     */
    public function getMaximumPrice()
    {
        return $this->maximum_price;
    }

    /**
     * Maximum product price used for complex products or products with custom options
     *
     * Generated from protobuf field <code>.magento.pricingStorefrontApi.proto.Price maximum_price = 4;</code>
     * @param \Magento\PricingStorefrontApi\Proto\Price $var
     * @return $this
     */
    public function setMaximumPrice($var)
    {
        GPBUtil::checkMessage($var, \Magento\PricingStorefrontApi\Proto\Price::class);
        $this->maximum_price = $var;

        return $this;
    }

    /**
     * Represent price for given quantity. If not specified assumes it as "1"
     *
     * Generated from protobuf field <code>float qty = 5;</code>
     * @return float
     */
    public function getQty()
    {
        return $this->qty;
    }

    /**
     * Represent price for given quantity. If not specified assumes it as "1"
     *
     * Generated from protobuf field <code>float qty = 5;</code>
     * @param float $var
     * @return $this
     */
    public function setQty($var)
    {
        GPBUtil::checkFloat($var);
        $this->qty = $var;

        return $this;
    }
}