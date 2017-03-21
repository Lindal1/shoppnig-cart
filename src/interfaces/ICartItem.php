<?php

/**
 * User: lindal
 * Date: 21.03.17
 * Time: 7:36
 */
interface ICartItem
{

    public function save(): ICartItem;

    public function delete();

    public function getCart(): ICart;

    public function getQty();

    public function getProduct();

    public function setProductId(int $productId): ICartItem;

    public function setPricePerOne(float $price): ICartItem;

    public function setQty(int $qty): ICartItem;

    public function getPricePerOne(): float;

    public function getTotalPrice(): float;
}