<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class DeleteFileSystemRequest extends Model
{
    /**
     * @description volume
     *
     * @var string
     */
    public $fileSystemId;
    protected $_name = [
        'fileSystemId' => 'FileSystemId',
    ];

    public function validate()
    {
        Model::validateRequired('fileSystemId', $this->fileSystemId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteFileSystemRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }

        return $model;
    }
}
