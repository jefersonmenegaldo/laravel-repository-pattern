<?php

namespace App\Http\Controllers;

use App\Services\OrderService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class OrderController extends Controller
{
    private $orderService;

    public function __construct(OrderService $orderService)
    {
        $this->orderService = $orderService;
    }

    public function index(): JsonResponse
    {
        return response()->json([$this->orderService->getAllOrders()]);
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
                $this->orderService->createOrder($orderDetails)
            ],
            Response::HTTP_CREATED
        );
    }

    public function show(Request $request): JsonResponse
    {
        $orderId = $request->route('id');

        return response()->json([
            $this->orderService->getOrderById($orderId)
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
            $this->orderService->updateOrder($orderId, $orderDetails)
        ]);
    }

    public function destroy(Request $request): JsonResponse
    {
        $orderId = $request->route('id');
        $this->orderService->destroyOrder($orderId);

        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
