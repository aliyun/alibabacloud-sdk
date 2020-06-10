<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class ModifyAccessGroupRequest extends Model
{
    /**
     * @description accessGroupName
     *
     * @var string
     */
    public $accessGroupName;

    /**
     * @description description
     *
     * @var string
     */
    public $description;

    /**
     * @description fileSystemType
     *
     * @var string
     */
    public $fileSystemType;
    protected $_name = [
        'accessGroupName' => 'AccessGroupName',
        'description'     => 'Description',
        'fileSystemType'  => 'FileSystemType',
    ];

    public function validate()
    {
        Model::validateRequired('accessGroupName', $this->accessGroupName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessGroupName) {
            $res['AccessGroupName'] = $this->accessGroupName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->fileSystemType) {
            $res['FileSystemType'] = $this->fileSystemType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyAccessGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessGroupName'])) {
            $model->accessGroupName = $map['AccessGroupName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['FileSystemType'])) {
            $model->fileSystemType = $map['FileSystemType'];
        }

        return $model;
    }
}
