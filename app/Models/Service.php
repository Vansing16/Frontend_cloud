<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $table = "services";
    protected $fillable = [
        'title',
        'thumbnail',
        'category',
        'cost',
        'rate_hour',
        'description',
    ];
    public function freelancer()
    {
        return $this->belongsTo(freelancer::class);
    }
}
