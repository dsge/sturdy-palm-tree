<?php

namespace Clapp\Shop\Contracts;

/**
 * egy megvásárolható elem a kosár egy rekordjában
 *
 * ezt extendelik a termékek, de kosárba rakni csak akkor lehet, ha OrderableItem-be rakjuk előbb az OrderableItemUnit-ot
 */
interface OrderableItemUnitInterface{
    /**
     * egy megjeleníthető név (nyelvesítve)
     *
     * @return string
     */
    public function getDisplayNameAttribute();
    /**
     * egy megjeleníthető nettó ár pénznemmel együtt formázva
     *
     * @return string
     */
    public function getDisplayNetPriceAttribute();
    /**
     * a nettó ár
     *
     * @return double
     */
    public function getNetPriceAttribute();
    //public function setNetPriceAttribute($value);
    /**
     * egy megjeleníthető akciós nettó ár pénznemmel együtt formázva
     *
     * @return string
     */
    public function getDisplayDiscountFullPriceAttribute();
    /**
     * az akciós nettó ár
     *
     * @return double
     */
    public function getDiscountNetPriceAttribute();
    //public function setDiscountNetPriceAttribute($value);
    /**
     * egy megjeleníthető adó ár pénznemmel együtt formázva
     *
     * @return string
     */
    public function getDisplayTaxAttribute();
    /**
     * egy megjeleníthető végleges bruttó ár pénznemmel együtt formázva
     *
     * @return string
     */
    public function getDisplayFullPriceAttribute();
    /**
     * egy megjeleníthető akciós bruttó ár pénznemmel együtt formázva
     *
     * @return string
     */
    public function getDisplayDiscountFullPriceAttribute();

}
