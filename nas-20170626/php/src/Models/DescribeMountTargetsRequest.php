<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class DescribeMountTargetsRequest extends Model
{
    /**
     * @description volume
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @description domainName
     *
     * @var string
     */
    public $mountTargetDomain;

    /**
     * @description pageSize
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description pageNumber
     *
     * @var int
     */
    public $pageNumber;
    protected $_name = [
        'fileSystemId'      => 'FileSystemId',
        'mountTargetDomain' => 'MountTargetDomain',
        'pageSize'          => 'PageSize',
        'pageNumber'        => 'PageNumber',
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
        if (null !== $this->mountTargetDomain) {
            $res['MountTargetDomain'] = $this->mountTargetDomain;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMountTargetsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['MountTargetDomain'])) {
            $model->mountTargetDomain = $map['MountTargetDomain'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        return $model;
    }
}
