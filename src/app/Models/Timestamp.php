<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timestamp extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    use HasFactory;
    
    protected $fillable = [
       'user_id',
       'start_work',
       'end_work',
       'stamp_date',
    ];

    protected $guarded = [
        'id', 'stamp_date',
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
