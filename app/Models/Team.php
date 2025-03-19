<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', // ✅ Add this field
        'position', // ✅ Add this field (if it exists)
        'image', // ✅ Add this field (if it exists)
    ];
}
