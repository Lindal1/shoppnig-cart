<?php

/**
 * User: lindal
 * Date: 21.03.17
 * Time: 7:34
 */
interface ICart
{

    /**
     * @return ICartItem[]
     */
    public function getItems(): array;

    /**
     * @return ICart
     */
    public static function getCart(): ICart;

    /**
     * @return ICartItem
     */
    public function createItem(): ICartItem;

    /**
     * Clear shopping cart
     * @return null
     */
    public function clear(): null;

    public function getItemCount();

    public function getTotalPrice();

    public function getCustomerId();
}