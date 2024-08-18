<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Posts extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'content', 'completed', 'user_id'];

    // public function isModified($title, $content, $completed)
    // {
    //     return !(
    //         $this->title == $title &&
    //         $this->content == $content &&
    //         $this->completed == $completed
    //     );
    // }
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
}
