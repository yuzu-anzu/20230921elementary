<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rest extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'rest_start', 'rest_end', 'rest_time',
    ];

    protected $guarded = [
        'id', 'rest_time',
    ];

    /**
     * 
     */
    public function user()
    {
        $this->belongsTo(User::class);
    }
}

class RegisterController extends Controller
{
    public function store(Register $register, StoreRequest $request)
    {
        $article->fill([''])
    }
}
