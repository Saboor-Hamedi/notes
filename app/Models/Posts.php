<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Redirect;

class Posts extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'content', 'completed'];

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
}
