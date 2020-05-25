<?php

namespace Pratik;

use Illuminate\Database\Eloquent\Model;

class Graph extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'keyword', 'user_id'
    ];

    public function nodes()
    {
        return $this->hasMany('Pratik\Node');
    }
    public function users()
    {
        return $this->belongsTo('Pratik\User');
    }
}
