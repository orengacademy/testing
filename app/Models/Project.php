<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $table = 'projects';
    protected $primaryKey = 'id';
    protected $fillable = ['titleproject', 'projectcode', 'year', 'client', 'PMO', 'Engineers', 'startdate', 'enddate', 'scope', 'type', 'status'];
    public $timestamps = false;

    public function setCategoryAttribute($value)
    {
        $this->attributes['Engineers'] = json_encode($value);
    }

    public function getCategoryAttribute($value)
    {
        return $this->attributes['Engineers'] = json_decode($value);
    }

}
