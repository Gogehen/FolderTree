<?php

namespace PhpSquad\FolderTree\Models;

class Folder extends BaseModel
{
    protected $guarded = [];

    public function children()
    {
        return $this->hasMany(self::class, 'parent_id','id')->with('children');
    }
}