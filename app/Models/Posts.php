<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Auth;

class Posts extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'content', 'completed', 'user_id'];
    public function isModified($data = [])
    {
        foreach ($data as $key => $value) {
            if ($this->{$key} != $value) {
                return true;
            }
        }
        return false;
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function guest()
    {
        return Auth::check() && Auth::user()->id === $this->user_id;
    }
}
