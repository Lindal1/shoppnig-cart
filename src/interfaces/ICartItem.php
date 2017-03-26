<?php
namespace lindal1\interfaces;
/**
 * User: lindal
 * Date: 21.03.17
 * Time: 7:36
 */
interface ICartItem
{

    /**
     * @return ICartItem
     */
    public function save(): ICartItem;

    /**
     * @return null
     */
    public function delete(): null;

    /**
     * @return ICart
     */
    public function getCart(): ICart;

    /**
     * @return int
     */
    public function getCartId(): int;

    /**
     * @param int $cartId
     * @return ICartItem
     */
    public function setCartId(int $cartId): ICartItem;

    /**
     * @return int
     */
    public function getQty(): int;

    /**
     * @param int $qty
     * @return ICartItem
     */
    public function setQty(int $qty): ICartItem;

    /**
     * @param int $productId
     * @return ICartItem
     */
    public function setProductId(int $productId): ICartItem;

    /**
     * @return int
     */
    public function getProductId(): int;

    /**
     * @param float $price
     * @return ICartItem
     */
    public function setPricePerOne(float $price): ICartItem;

    /**
     * @return float
     */
    public function getPricePerOne(): float;

    /**
     * @return float
     */
    public function getTotalPrice(): float;
}