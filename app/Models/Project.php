<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $table = 'projects';
    protected $primaryKey = 'id';
    protected $fillable = ['titleproject', 'projectcode', 'client', 'PMO', 'Engineers', 'startdate', 'enddateenddate', 'scope', 'type', 'status'];
    public $timestamps = false;
}
