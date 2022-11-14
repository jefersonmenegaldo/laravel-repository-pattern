<?php

namespace App\Repositories;

use App\Interfaces\OrderRepositoryInterface;
use App\Models\Order;

class OrderRepository implements OrderRepositoryInterface
{
    protected $entity;

    public function __construct(Order $model)
    {
        $this->entity = $model;
    }

    public function getAll()
    {
        return $this->entity->all();
    }

    public function getById($orderId)
    {
        return $this->entity->findOrFail($orderId);
    }

    public function delete($orderId)
    {
        $this->entity->destroy($orderId);
    }

    public function create(array $orderDetails)
    {
        return $this->entity->create($orderDetails);
    }

    public function update($orderId, array $newDetails)
    {
        return $this->entity->whereId($orderId)->update($newDetails);
    }

    public function getAllFinished()
    {
        return $this->entity->where('is_fulfilled', true);
    }
}
