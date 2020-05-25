<?php

namespace Pratik;

use Illuminate\Database\Eloquent\Model;

class Node extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'frequency', 'graph_id'
    ];

    public function nodes()
    {
        return $this->belongsTo('Pratik\Graph');
    }


}
