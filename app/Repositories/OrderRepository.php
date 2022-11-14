<?php

namespace App\Repositories;

use App\Interfaces\OrderRepositoryInterface;
use App\Models\Order;

class OrderRepository implements OrderRepositoryInterface
{
    public function getAll()
    {
        return Order::all();
    }

    public function getById($orderId)
    {
        return Order::findOrFail($orderId);
    }

    public function delete($orderId)
    {
        Order::destroy($orderId);
    }

    public function create(array $orderDetails)
    {
        return Order::create($orderDetails);
    }

    public function update($orderId, array $newDetails)
    {
        return Order::whereId($orderId)->update($newDetails);
    }

    public function getAllFinished()
    {
        return Order::where('is_fulfilled', true);
    }
}
