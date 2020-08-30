<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];
    //
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }

    public function default()
    {
        return ($this->image ? '/storage/'.$this->image : '/storage/default/no-image.png');
        // return '/storage/' . ($this->image) ? $this->image : '/storage/default-image/no-image.png';
    }
}
