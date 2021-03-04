<?php
namespace App\Repositories;

use App\Models\Customer;
use App\Repositories\CustomerRepositoryInterface;

class CustomerRepository implements CustomerRepositoryInterface
{
    public function all()
    {
         /*return $customer = Customer::orderBy('name')
            ->where('status', 'Active')
            ->with('user')//this is uses for foreign key or pulling data from user
            ->get()
            ->map(function ($customer){
                //$this->format($customer); #this we use to acces the format function bellow
                return $customer->format();
            });*/

         /*
          * there is also a short form of upper code
          * */

        return $customer = Customer::orderBy('name')
            ->where('status', 'Active')
            ->with('user')
            ->get()
            ->map->format();
    }

    public function findById($customerId)
    {
        $customer =  Customer::where('id', $customerId)
            ->with('user')
            ->where('status', 'Active')
            ->firstOrFail();

        return $this->format($customer);
    }

    public function findByUsername()
    {

    }

    /*
     * this is a function for format or showing how we want to see the data
     * */
    public function format($customer)
    {
        return [
            'customer_id' => $customer->id,
            'name' => $customer->name,
            'created_by' => $customer->user->email,
            'updated_at' => $customer->updated_at->diffForHumans(),
        ];
    }

    public function updateById($customerId)
    {
        $customer = Customer::where('id', $customerId)->firstOrFail();
        $customer->update(request()->only('name'));
    }

    public function deleteById($customerId)
    {
        $customer = Customer::where('id', $customerId)->delete();
    }
}

