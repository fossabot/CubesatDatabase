<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mission extends Model
{
   use \Venturecraft\Revisionable\RevisionableTrait;

	protected $revisionEnabled = true;
    protected $revisionCleanup = true; //Remove old revisions (works only when used with $historyLimit)
    protected $historyLimit = 500; //Maintain a maximum of 500 changes at any point of time, while cleaning up old revisions.
   
    public function getUrlAttribute()
    {
        return $this->attributes['url'] = url("/api/mission/".$this->attributes['id']);
    }

    public function organization()
    {
    	return $this->belongsTo('App\Models\Organization','organization_id','id');
    }

    protected $appends = ['url'];
}
