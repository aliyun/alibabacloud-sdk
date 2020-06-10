<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class DeleteAccessRuleRequest extends Model
{
    /**
     * @description accessGroupName
     *
     * @var string
     */
    public $accessGroupName;

    /**
     * @description ruleId
     *
     * @var string
     */
    public $accessRuleId;

    /**
     * @description fileSystemType
     *
     * @var string
     */
    public $fileSystemType;
    protected $_name = [
        'accessGroupName' => 'AccessGroupName',
        'accessRuleId'    => 'AccessRuleId',
        'fileSystemType'  => 'FileSystemType',
    ];

    public function validate()
    {
        Model::validateRequired('accessGroupName', $this->accessGroupName, true);
        Model::validateRequired('accessRuleId', $this->accessRuleId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessGroupName) {
            $res['AccessGroupName'] = $this->accessGroupName;
        }
        if (null !== $this->accessRuleId) {
            $res['AccessRuleId'] = $this->accessRuleId;
        }
        if (null !== $this->fileSystemType) {
            $res['FileSystemType'] = $this->fileSystemType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteAccessRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessGroupName'])) {
            $model->accessGroupName = $map['AccessGroupName'];
        }
        if (isset($map['AccessRuleId'])) {
            $model->accessRuleId = $map['AccessRuleId'];
        }
        if (isset($map['FileSystemType'])) {
            $model->fileSystemType = $map['FileSystemType'];
        }

        return $model;
    }
}
