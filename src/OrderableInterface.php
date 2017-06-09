<?php

namespace Clapp\Shop\Contracts;

/**
 * egy rekord a kosárban
 *
 * több OrderableItemUnit-ot tartalmazhat
 */
interface OrderableItemInterface{
    /**
     * egy megjeleníthető név (nyelvesítve)
     *
     * @return string
     */
    public function getDisplayNameAttribute();
    /**
     * egy megjeleníthető nettó ár pénznemmel együtt formázva (az összes unit árának összege)
     *
     * @return string
     */
    public function getDisplayNetPriceAttribute();
    /**
     * a nettó ár (az összes unit árának összege)
     *
     * @return double
     */
    public function getNetPriceAttribute();
    //public function setNetPriceAttribute($value);
    /**
     * egy megjeleníthető akciós nettó ár pénznemmel együtt formázva (az összes unit árának összege)
     *
     * @return string
     */
    public function getDisplayDiscountFullPriceAttribute();
    /**
     * az akciós nettó ár (az összes unit árának összege)
     *
     * @return double
     */
    public function getDiscountNetPriceAttribute();
    //public function setDiscountNetPriceAttribute($value);
    /**
     * egy megjeleníthető adó ár pénznemmel együtt formázva (az összes unit árának összege)
     *
     * @return string
     */
    public function getDisplayTaxAttribute();
    /**
     * egy megjeleníthető végleges bruttó ár pénznemmel együtt formázva (az összes unit árának összege)
     *
     * @return string
     */
    public function getDisplayFullPriceAttribute();
    /**
     * egy megjeleníthető akciós bruttó ár pénznemmel együtt formázva (az összes unit árának összege)
     *
     * @return string
     */
    public function getDisplayDiscountFullPriceAttribute();
}
