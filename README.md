# Gogehen/ProjectManager *Folder-Tree*

>Create and Get Navigation Directory. 

### Usage

```shell script
composer install gogehen/folder-tree
```

#### Example Usage

create a directory
```php
$folder->create($accountId, $userId, $rootId, $type, $name, $icon);
```
update a directory
```php
$folder->update($accountId, $userId, $rootId, $type, $name, $icon);
```

get List of directories
```php
$folder->list(string $accountId, string $rootId)
```
