<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'order_id'     => 'required|exists:orders,id',
            'amount'       => 'required|numeric|min:0.01',
            'type'         => 'required|in:deposit,balance',
            'payment_date' => 'required|date',
        ]);

        $order = Order::findOrFail($validated['order_id']);

        // Rule 2: Payment cannot be larger than outstanding balance
        if ($validated['amount'] > $order->balance()) {
            return back()->withErrors([
                'amount' => 'Payment cannot exceed the outstanding balance (KES ' . number_format($order->balance(), 2) . ').'
            ])->withInput();
        }

        Payment::create($validated);

        return back()->with('success', 'Payment recorded successfully.');
    }
}