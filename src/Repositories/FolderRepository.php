<?php

namespace PhpSquad\FolderTree\Repositories;

use PhpSquad\FolderTree\Models\Folder;

class FolderRepository
{
    public function create(string $accountId, string $userId, ?string $parentId, string $type, string $name, string $icon): Folder
    {
        $parentId = $parentId ? $parentId : 'base_nav_element';

        $dir = new Folder();
        $dir->account_id = $accountId;
        $dir->user_id = $userId;
        $dir->parent_id = $parentId;
        $dir->icon = $icon;
        $dir->type = $type;
        $dir->name =$name;
        $dir->save();

        return $dir;
    }

    public function list(string $accountId, string $rootId)
    {
        return Folder::where('account_id', '=', $accountId)
            ->where('parent_id', '=', $rootId)
            ->with('children')
            ->get();
    }

    public function update(string $id, string $accountId, string $userId, ?string $parentId, string $type, string $name, string $icon)
    {
        $dir = Folder::find($id);
        $dir->account_id = $accountId;
        $dir->user_id = $userId;
        $dir->parent_id = $parentId;
        $dir->type = $type;
        $dir->name = $name;
        $dir->icon = $icon;
        $dir->save();

        return $dir;

    }
}