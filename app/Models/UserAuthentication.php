<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAuthentication extends Model
{
    use HasFactory;

    protected $fillable = [
        'realname',
        'company_name',
        'logo',
        'brief',
        'status',
        'credit_code',
        'registered_capital',
        'legal_representative',
        'industry',
        'establish_date',
        'approval_date',
        'type',
        'address',
        'registration_authority',
        'business_scope',
        'staff_size',
        'qualifications',
        'examine_status',
        'examine_at',
        'reject_at'
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
