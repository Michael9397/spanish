<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConjugateList extends Model
{
    use HasFactory;

    protected $casts = [
      'conjugate_list' => 'object',
    ];
}
