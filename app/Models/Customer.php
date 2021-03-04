<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Customer extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function format()
    {
        return [
            'customer_id' => $this->id,
            'name' => $this->name,
            'created_by' => $this->user->email,
            'updated_at' => $this->updated_at->diffForHumans(),
        ];
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
