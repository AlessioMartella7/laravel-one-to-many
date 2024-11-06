<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'title',
        'description',
        'url',
        'start_date',
        'end_date',
        'programming_language',
        'type_id'
    ];

    public function type(){
        return $this->belongsTo(Type::class);
    }
}
