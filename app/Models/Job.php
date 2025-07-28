<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{

    protected $table = 'job_listings';

    protected $fillable = [
        'title',
        'description',
        'salary',
        'tags',
        'type',
        'remote',
        'requirements',
        'benefits',
        'address',
        'city',
        'state',
        'zipcode',
        'contact_email',
        'contact_phone',
        'company_name',
        'company_description',
        'company_website',
        'company_logo',
        'user_id'
    ];

    //Relationship with User model
    public function user() :BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}


