<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrow extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_id',
        'borrow_name',
        'borrow_start',
        'borrow_finish',
        'borrow_status',
    ];

    public function Items()
    {
        return $this->belongsToMany(Item::class, 'item_borrow');
    }

    // public function setBorrowStatusAttribute($value)
    // {
    //     $this->attributes['borrow_status'] = $value;
    //     if ($value === 'pending') {
    //         $this->Item->update(['item_state' => 0]);
    //     } elseif ($value === 'finish') {
    //         $this->Item->update(['item_state' => 1]);
    //     }
    // }
    // public static function booted()
    // {
    //     static::creating(function ($model) {
    //         $model->borrow_status = 'pending';

    //     });
    // }
}
