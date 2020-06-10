<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class ModifyMountTargetRequest extends Model
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
     * @description accessGroupName
     *
     * @var string
     */
    public $accessGroupName;

    /**
     * @description status
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'fileSystemId'      => 'FileSystemId',
        'mountTargetDomain' => 'MountTargetDomain',
        'accessGroupName'   => 'AccessGroupName',
        'status'            => 'Status',
    ];

    public function validate()
    {
        Model::validateRequired('fileSystemId', $this->fileSystemId, true);
        Model::validateRequired('mountTargetDomain', $this->mountTargetDomain, true);
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
        if (null !== $this->accessGroupName) {
            $res['AccessGroupName'] = $this->accessGroupName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyMountTargetRequest
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
        if (isset($map['AccessGroupName'])) {
            $model->accessGroupName = $map['AccessGroupName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
