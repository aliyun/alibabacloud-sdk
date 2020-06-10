<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class ModifyModelRequest extends Model
{
    /**
     * @description accessKeyId
     *
     * @var string
     */
    public $accessKeyId;

    /**
     * @description securityToken
     *
     * @var string
     */
    public $securityToken;

    /**
     * @description modelName
     *
     * @var string
     */
    public $modelName;

    /**
     * @description description
     *
     * @var string
     */
    public $description;

    /**
     * @description schema
     *
     * @var string
     */
    public $schema;

    /**
     * @description groupId
     *
     * @var string
     */
    public $groupId;

    /**
     * @description newName
     *
     * @var string
     */
    public $newModelName;
    protected $_name = [
        'accessKeyId'   => 'AccessKeyId',
        'securityToken' => 'SecurityToken',
        'modelName'     => 'ModelName',
        'description'   => 'Description',
        'schema'        => 'Schema',
        'groupId'       => 'GroupId',
        'newModelName'  => 'NewModelName',
    ];

    public function validate()
    {
        Model::validateRequired('modelName', $this->modelName, true);
        Model::validateRequired('groupId', $this->groupId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessKeyId) {
            $res['AccessKeyId'] = $this->accessKeyId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->schema) {
            $res['Schema'] = $this->schema;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->newModelName) {
            $res['NewModelName'] = $this->newModelName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyModelRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessKeyId'])) {
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Schema'])) {
            $model->schema = $map['Schema'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['NewModelName'])) {
            $model->newModelName = $map['NewModelName'];
        }

        return $model;
    }
}
