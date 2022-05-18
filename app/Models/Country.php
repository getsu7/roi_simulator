<?php

namespace App\Models;

use App\Models\City;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Country extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function city(): HasMany
    {
        return $this->hasMany(City::class);
    }

    public function user(): BelongsTo 
    {
        return $this->belongsTo(User::class);
    }

    public function setCountryAttributes(Request $request)
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
        $this->name = $request->name;
        $this->user_id = Auth::id();
        if($this->update()) {
            return true;
        }
        return false;
    }

    public function deleteCountry()
    {
        if($this->delete()) {
            return true;
        }
        return false;
    }

}
