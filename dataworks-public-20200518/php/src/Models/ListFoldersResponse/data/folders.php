<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListFoldersResponse\data;

use AlibabaCloud\Tea\Model;

class folders extends Model
{
    /**
     * @description folderId
     *
     * @var string
     */
    public $folderId;

    /**
     * @description absolutePath
     *
     * @var string
     */
    public $folderPath;
    protected $_name = [
        'folderId'   => 'FolderId',
        'folderPath' => 'FolderPath',
    ];

    public function validate()
    {
        Model::validateRequired('folderId', $this->folderId, true);
        Model::validateRequired('folderPath', $this->folderPath, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->folderId) {
            $res['FolderId'] = $this->folderId;
        }
        if (null !== $this->folderPath) {
            $res['FolderPath'] = $this->folderPath;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return folders
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FolderId'])) {
            $model->folderId = $map['FolderId'];
        }
        if (isset($map['FolderPath'])) {
            $model->folderPath = $map['FolderPath'];
        }

        return $model;
    }
}
