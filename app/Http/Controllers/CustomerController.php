<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Lookup;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eloquentColl = Customer::all();
        $justCollect = collect(['Abdul Quader', 'Rahat', 'Akhi Parvin']);
        echo "<pre>";
        var_dump($justCollect);

        $collection = collect(['Taylor', 'Abigail', ''])->map(function (?string $name) {
            return empty($name);
        });//->reject(function (string $name) {
            //return empty($name);
        //});
        echo "<pre>";
        print_r($collection);
        die;
die;

        $customers = Customer::with('lookup')->get();
        echo "<pre>";
        print_r($customers);
        die;    
        return view('customers.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //genders from lookup table
        $genders = Lookup::where('type','gender')->pluck('title','id');
        return view('customers.create', compact('genders'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCustomerRequest $request)
    {
        $data = $request->validated();
        Customer::create($data);
        return redirect()->route('customers.index')->with('success', 'Customer created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        $genders = Lookup::where('type','gender')->pluck('title','id');
        return view('customers.update', compact('genders', 'customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCustomerRequest $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
