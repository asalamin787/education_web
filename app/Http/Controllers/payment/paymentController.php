<?php

namespace App\Http\Controllers\payment;

use App\Http\Controllers\Controller;
use App\Models\Admission;
use App\Models\Course;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class paymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Admission $admission)
    {
        $courses=Course::latest()->get();
        return view('Admin.Payment.add_payment',compact('admission', 'courses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Admission $admission)
    {
        Payment::create([
            'admission_id'=>$admission->id,
            'money'=>$request->money,
        ]);
        return redirect('view_payments'); 
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $payments=Payment::latest()->get();
        return view('Admin.Payment.view_payments', compact('payments'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Payment $payment)
    {
        return view('Admin.Payment.edit_payment', compact('payment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Payment $payment)
    {
        if($request->has('image')){
            $image=$request->file('image')->store('public/payment');
            Storage::delete($request->image);
        }else{
            $image = $payment->image;
        }
        $payment->update([
            'image'=>$image,
            'money'=>$request->money,
        ]);
        return redirect('view_payments');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payment $payment)
    {
        Storage::delete($payment->image);
        $payment->delete();
        return redirect('view_payments');
    }

    public function payment_students_view(Admission $admission){
        $payments=Payment::latest()->get();
        return view('Admin.Payment.payment_students_view', compact('admission', 'payments'));
    }
}
