<?php

namespace App\Http\Controllers;

use App\Interfaces\OrderRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class OrderController extends Controller
{
    private OrderRepositoryInterface $orderRepository;

    public function __construct(OrderRepositoryInterface $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }

    public function index(): JsonResponse
    {
        return response()->json([$this->orderRepository->getAll()]);
    }

    public function store(Request $request): JsonResponse
    {
        $orderDetails = $request->only([
            'total',
            'subtotal',
            'tax',
            'client_name',
        ]);

        return response()->json([
                $this->orderRepository->create($orderDetails)
            ],
            Response::HTTP_CREATED
        );
    }

    public function show(Request $request): JsonResponse
    {
        $orderId = $request->route('id');

        return response()->json([
            $this->orderRepository->getById($orderId)
        ]);
    }

    public function update(Request $request): JsonResponse
    {
        $orderId = $request->route('id');
        $orderDetails = $request->only([
            'total',
            'subtotal',
            'tax',
            'client_name',
            'finished'
        ]);

        return response()->json([
            $this->orderRepository->update($orderId, $orderDetails)
        ]);
    }

    public function destroy(Request $request): JsonResponse
    {
        $orderId = $request->route('id');
        $this->orderRepository->delete($orderId);

        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
