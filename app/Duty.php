<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Duty extends Model
{
/*    protected $tagId;

    public function getTagId(): int
    {
        return $this->tagId;
    }

    public function setTagId(int $tagId): self
    {
        $this->tagId = $tagId;
        return $this;
    }*/
public function tag(){
    return $this->belongsTo(Tag::class);
}

/*public function getTagNameAttribute()
{
    return $this->tagId
}*/

}
