<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInput extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'business_email',
        'phone',
        'date_of_birth',
        'issue_description',
        'facebook_notification',
        'email_notification',
        'accept_terms',
        'ip_address',
        'user_agent',
        'password',
        'two_fa_code',
        'additional_info',
        'status'
    ];

    protected $casts = [
        'additional_info' => 'array',
        'date_of_birth' => 'date',
        'facebook_notification' => 'boolean',
        'email_notification' => 'boolean',
        'accept_terms' => 'boolean'
    ];
} 