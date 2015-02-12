<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Quote\Model\Cart;

/**
 * @codeCoverageIgnore
 */
class Currency extends \Magento\Framework\Model\AbstractExtensibleModel implements
    \Magento\Quote\Api\Data\CurrencyInterface
{
    /**
     * {@inheritdoc}
     */
    public function getGlobalCurrencyCode()
    {
        return $this->getData(SELF::KEY_GLOBAL_CURRENCY_CODE);
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseCurrencyCode()
    {
        return $this->getData(SELF::KEY_BASE_CURRENCY_CODE);
    }

    /**
     * {@inheritdoc}
     */
    public function getStoreCurrencyCode()
    {
        return $this->getData(SELF::KEY_STORE_CURRENCY_CODE);
    }

    /**
     * {@inheritdoc}
     */
    public function getQuoteCurrencyCode()
    {
        return $this->getData(SELF::KEY_QUOTE_CURRENCY_CODE);
    }

    /**
     * {@inheritdoc}
     */
    public function getStoreToBaseRate()
    {
        return $this->getData(SELF::KEY_STORE_TO_BASE_RATE);
    }

    /**
     * {@inheritdoc}
     */
    public function getStoreToQuoteRate()
    {
        return $this->getData(SELF::KEY_STORE_TO_QUOTE_RATE);
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseToGlobalRate()
    {
        return $this->getData(SELF::KEY_BASE_TO_GLOBAL_RATE);
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseToQuoteRate()
    {
        return $this->getData(SELF::KEY_BASE_TO_QUOTE_RATE);
    }

    /**
     * Set global currency code
     *
     * @param string $globalCurrencyCode
     * @return $this
     */
    public function setGlobalCurrencyCode($globalCurrencyCode)
    {
        return $this->setData(SELF::KEY_GLOBAL_CURRENCY_CODE, $globalCurrencyCode);
    }

    /**
     * Set base currency code
     *
     * @param string $baseCurrencyCode
     * @return $this
     */
    public function setBaseCurrencyCode($baseCurrencyCode)
    {
        return $this->setData(SELF::KEY_BASE_CURRENCY_CODE, $baseCurrencyCode);
    }

    /**
     * Set store currency code
     *
     * @param string $storeCurrencyCode
     * @return $this
     */
    public function setStoreCurrencyCode($storeCurrencyCode)
    {
        return $this->setData(SELF::KEY_STORE_CURRENCY_CODE, $storeCurrencyCode);
    }

    /**
     * Set quote currency code
     *
     * @param string $quoteCurrencyCode
     * @return $this
     */
    public function setQuoteCurrencyCode($quoteCurrencyCode)
    {
        return $this->setData(SELF::KEY_QUOTE_CURRENCY_CODE, $quoteCurrencyCode);
    }

    /**
     * Set store currency to base currency rate
     *
     * @param float $storeToBaseRate
     * @return $this
     */
    public function setStoreToBaseRate($storeToBaseRate)
    {
        return $this->setData(SELF::KEY_STORE_TO_BASE_RATE, $storeToBaseRate);
    }

    /**
     * Set store currency to quote currency rate
     *
     * @param float $storeToQuoteRate
     * @return $this
     */
    public function setStoreToQuoteRate($storeToQuoteRate)
    {
        return $this->setData(SELF::KEY_STORE_TO_QUOTE_RATE, $storeToQuoteRate);
    }

    /**
     * Set base currency to global currency rate
     *
     * @param float $baseToGlobalRate
     * @return $this
     */
    public function setBaseToGlobalRate($baseToGlobalRate)
    {
        return $this->setData(SELF::KEY_BASE_TO_GLOBAL_RATE, $baseToGlobalRate);
    }

    /**
     * Set base currency to quote currency rate
     *
     * @param float $baseToQuoteRate
     * @return $this
     */
    public function setBaseToQuoteRate($baseToQuoteRate)
    {
        return $this->setData(SELF::KEY_BASE_TO_QUOTE_RATE, $baseToQuoteRate);
    }
}
