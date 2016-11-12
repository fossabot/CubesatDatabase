<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class StreetAddress extends Model
{
    protected $table = 'street_addresses';
	public $timestamps = false;

    public function address()
    {
    	return $this->belongsTo("App\Models\Address","address_id","id");
    }
}
