<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableChangeLogResponse\data;

use AlibabaCloud\Tea\Model;

class dataEntityList extends Model
{
    /**
     * @description createTimestamp
     *
     * @var int
     */
    public $createTime;

    /**
     * @description modifiedTimestamp
     *
     * @var int
     */
    public $modifiedTime;

    /**
     * @description changeType
     *
     * @var string
     */
    public $changeType;

    /**
     * @description operator
     *
     * @var string
     */
    public $operator;

    /**
     * @description objectType
     *
     * @var string
     */
    public $objectType;

    /**
     * @description changeContent
     *
     * @var string
     */
    public $changeContent;
    protected $_name = [
        'createTime'    => 'CreateTime',
        'modifiedTime'  => 'ModifiedTime',
        'changeType'    => 'ChangeType',
        'operator'      => 'Operator',
        'objectType'    => 'ObjectType',
        'changeContent' => 'ChangeContent',
    ];

    public function validate()
    {
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('modifiedTime', $this->modifiedTime, true);
        Model::validateRequired('changeType', $this->changeType, true);
        Model::validateRequired('operator', $this->operator, true);
        Model::validateRequired('objectType', $this->objectType, true);
        Model::validateRequired('changeContent', $this->changeContent, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->changeType) {
            $res['ChangeType'] = $this->changeType;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->objectType) {
            $res['ObjectType'] = $this->objectType;
        }
        if (null !== $this->changeContent) {
            $res['ChangeContent'] = $this->changeContent;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataEntityList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['ChangeType'])) {
            $model->changeType = $map['ChangeType'];
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }
        if (isset($map['ObjectType'])) {
            $model->objectType = $map['ObjectType'];
        }
        if (isset($map['ChangeContent'])) {
            $model->changeContent = $map['ChangeContent'];
        }

        return $model;
    }
}
