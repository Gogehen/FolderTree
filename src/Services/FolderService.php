<?php

namespace PhpSquad\FolderTree\Services;

use PhpSquad\FolderTree\Models\Folder;
use PhpSquad\FolderTree\Repositories\FolderRepository;

class FolderService
{
    private FolderRepository $folderRepository;

    public function __construct(FolderRepository $folderRepository)
    {
        $this->folderRepository = $folderRepository;
    }

    public function create(
        string $accountId,
        string $userId,
        ?string $parentId,
        string $type,
        string $name,
        string $icon
    ): Folder {
        return $this->folderRepository->create($accountId, $userId, $parentId, $type, $name, $icon);
    }

    public function list(string $accountId, string $rootId)
    {
        return $this->folderRepository->list($accountId, $rootId);
    }

    public function update(
        string $id,
        string $accountId,
        string $userId,
        ?string $parentId,
        string $type,
        string $name,
        string $icon
    ) {
        return $this->folderRepository->update($id, $accountId, $userId, $parentId, $type, $name, $icon);
    }

}