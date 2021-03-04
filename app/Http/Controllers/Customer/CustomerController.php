<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Repositories\CustomerRepositoryInterface;
use Cassandra\Custom;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    private $customerRepository;
    /*
     * this constructor we use to pull the customer repository class data
     * */
    public function __construct(CustomerRepositoryInterface  $customerRepository)
    {
        $this->customerRepository = $customerRepository;
    }

    public function index()
    {
        return $this->customerRepository->all();

    }

    public function show($customerId)
    {
        return $this->customerRepository->findById($customerId);
    }

    public function update($customerid)
    {
        $this->customerRepository->updateById($customerid);
        return redirect('customer/'. $customerid);
    }

    public function destroy($customerId)
    {
        $this->customerRepository->deleteById($customerId);
        return redirect('/customer');
    }
}
