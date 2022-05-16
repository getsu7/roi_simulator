<?php

namespace App\Models;

use App\Models\City;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Country extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'user',
    ];

    public function city()
    {
        return $this->hasMany(City::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function addCountry(Request $request)
    {
        $this->name = $request->name;
        $this->user_id = Auth::id();
        if($this->save()) {
            return true;
        }
        return false;

    }

    public function updateCountry(Request $request)
    {
        DB::table('countries')
            ->where('id', $request->id)
            ->update(['name' => $request->name], ['user_id' => Auth::id()]);
    }

}
