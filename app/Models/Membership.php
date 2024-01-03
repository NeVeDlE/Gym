<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function owner()
    {
        return $this->belongsTo(User::class, 'id');
    }
    public function activate()
    {
        return $this->update(['active'=>'1']);

    }
    public function deactivate()
    {
        return $this->update(['active'=>'0']);
    }
}
