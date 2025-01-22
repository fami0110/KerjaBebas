<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Langganan extends Model
{
    /** @use HasFactory<\Database\Factories\LanggananFactory> */
    use HasFactory, HasUuids;

    private $table = "langganan";

    private $fillable = [
        ''
    ];
}
