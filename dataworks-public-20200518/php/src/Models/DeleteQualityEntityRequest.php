<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class DeleteQualityEntityRequest extends Model
{
    /**
     * @description entityId
     *
     * @var int
     */
    public $entityId;

    /**
     * @description projectName
     *
     * @var string
     */
    public $projectName;

    /**
     * @description envType
     *
     * @var string
     */
    public $envType;
    protected $_name = [
        'entityId'    => 'EntityId',
        'projectName' => 'ProjectName',
        'envType'     => 'EnvType',
    ];

    public function validate()
    {
        Model::validateRequired('entityId', $this->entityId, true);
        Model::validateRequired('projectName', $this->projectName, true);
        Model::validateRequired('envType', $this->envType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteQualityEntityRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }

        return $model;
    }
}
