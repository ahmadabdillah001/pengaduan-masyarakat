<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'status',
        'image',
        'user_id',
        'guest_name',
        'guest_email',
        'guest_telp',
    ];

    public function getStatusBadgeAttribute()
    {
        return match ($this->status) {
            'pending' => '<span class="badge" style="background-color: #ff7976;">' . strtoupper($this->status) . '</span>',
            'selesai' => '<span class="badge" style="background-color: #5ddab4;">' . strtoupper($this->status) . '</span>',
            default => '<span class="badge" style="background-color: #57caeb;">' . strtoupper($this->status) . '</span>',
        };
    }

    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn ($image) => url('/storage/complaints/' . $image),
        );
    }    
}
