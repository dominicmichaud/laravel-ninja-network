<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// TINKER
// use App\Models\Ninja
// Ninja::create(['name' => 'Mario', 'skill' => 75, 'bio' => 'lorem ipsum'])
// Ninja::all()
// Ninja::find(1)

class Ninja extends Model
{
    // Determine which table columns can be massed assigned without any security risks
    protected $fillable = ['name', 'skill', 'bio', 'dojo_id'];

    /** @use HasFactory<\Database\Factories\NinjaFactory> */
    use HasFactory;

    // Foreign key relationship
    public function dojo() {
        return $this->belongsTo(Dojo::class);
    }
}
