<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $filllabel = ['From', 'To', 'Date', 'Departure', 'Arrival', 'Time_in_road', 'Price'];
    use HasFactory;
}
