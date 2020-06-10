<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\ImportSwaggerResponse\modelFailed;

use AlibabaCloud\Tea\Model;

class apiImportModelFailed extends Model
{
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

    /**
     * @description errorMsg
     *
     * @var string
     */
    public $errorMsg;
    protected $_name = [
        'groupId'   => 'GroupId',
        'modelName' => 'ModelName',
        'errorMsg'  => 'ErrorMsg',
    ];

    public function validate()
    {
        Model::validateRequired('groupId', $this->groupId, true);
        Model::validateRequired('modelName', $this->modelName, true);
        Model::validateRequired('errorMsg', $this->errorMsg, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
        }
        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apiImportModelFailed
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
        }
        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }

        return $model;
    }
}
