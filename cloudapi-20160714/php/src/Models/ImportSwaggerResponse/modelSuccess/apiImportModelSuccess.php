<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\ImportSwaggerResponse\modelSuccess;

use AlibabaCloud\Tea\Model;

class apiImportModelSuccess extends Model
{
    /**
     * @description modelUid
     *
     * @var string
     */
    public $modelUid;

    /**
     * @description modelOperation
     *
     * @var string
     */
    public $modelOperation;

    /**
     * @description groupId
     *
     * @var string
     */
    public $groupId;

    /**
     * @description modelName
     *
     * @var string
     */
    public $modelName;
    protected $_name = [
        'modelUid'       => 'ModelUid',
        'modelOperation' => 'ModelOperation',
        'groupId'        => 'GroupId',
        'modelName'      => 'ModelName',
    ];

    public function validate()
    {
        Model::validateRequired('modelUid', $this->modelUid, true);
        Model::validateRequired('modelOperation', $this->modelOperation, true);
        Model::validateRequired('groupId', $this->groupId, true);
        Model::validateRequired('modelName', $this->modelName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->modelUid) {
            $res['ModelUid'] = $this->modelUid;
        }
        if (null !== $this->modelOperation) {
            $res['ModelOperation'] = $this->modelOperation;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apiImportModelSuccess
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ModelUid'])) {
            $model->modelUid = $map['ModelUid'];
        }
        if (isset($map['ModelOperation'])) {
            $model->modelOperation = $map['ModelOperation'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
        }

        return $model;
    }
}
