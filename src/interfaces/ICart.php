<?php
namespace lindal1\interfaces;
/**
 * User: lindal
 * Date: 21.03.17
 * Time: 7:34
 */
interface ICart
{

    /**
     * Returned items from cart
     * @return ICartItem[]
     */
    public function getItems(): array;

    /**
     * Returned cart by customerId
     * @param int $customerId
     * @return ICart
     */
    public static function getCart(int $customerId): ICart;

    /**
     * Returned new cart item related with this cart
     * @return ICartItem
     */
    public function createItem(): ICartItem;

    /**
     * Remove all items from cart
     * @return null
     */
    public function clear(): null;

    /**
     * @return int
     */
    public function getItemCount(): int;

    /**
     * @return float
     */
    public function getTotalPrice(): float;

    /**
     * @return int
     */
    public function getCustomerId(): int;

    /**
     * @return int
     */
    public function getTotalQty(): int;
}