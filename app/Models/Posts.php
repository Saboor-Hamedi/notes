<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Redirect;

class Posts extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'content', 'completed'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function isModified(array $data)
    {
        foreach ($data as $key => $value) {
            if ($this->{$key} != $value) {
                return true;
            }
        }
        return false;
    }
}
