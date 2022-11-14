<?php

namespace App\Services;

use App\Interfaces\OrderRepositoryInterface;
use Illuminate\Support\Str;

class OrderService
{
    protected $orderRepository;

    public function __construct(OrderRepositoryInterface $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }

    public function getAllOrders()
    {
        return $this->orderRepository->getAll();
    }

    public function createOrder(array $data)
    {
        return $this->orderRepository->create($data);
    }

    public function getOrderById(int $id)
    {
        return $this->orderRepository->getById($id);
    }

    public function updateOrder(int $id, array $data)
    {
        $order = $this->orderRepository->getById($id);

        if (!$order) {
            return response()->json(['message' => 'Order Not Found'], 404);
        }
        $data = $this->orderRepository->update($order->id, $data);

        return response()->json([
            'message' => 'Order Updated',
            'data' => $data
        ], 200);
    }

    public function destroyOrder(int $id)
    {
        $order = $this->orderRepository->getById($id);
        $this->orderRepository->delete($id);

        return response()->json(['message' => 'Order Deleted'], 200);
    }
}
