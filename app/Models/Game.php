<?php
declare(strict_types = 1);

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $guarded = ['_token'];
}
