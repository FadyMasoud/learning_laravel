<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Comments;

class Posts extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['title','body','status'];
      protected $guarded = ['user_id'];

      
    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function comments()
    {
        return $this->hasMany(Comments::class , 'post_id', 'id'); // force FK name
    }
}
