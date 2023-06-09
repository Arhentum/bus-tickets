<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    /**
     * Свойства модели, которые могут быть заполнены массовым назначением.
     *
     * @var array
     */
    protected $filllabel = ['Name','From', 'To', 'Date', 'Departure'];
    use HasFactory;
}
