<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class RefreshVodObjectCachesRequest extends Model {
    protected $_name = [
        'ownerId' => 'OwnerId',
        'securityToken' => 'SecurityToken',
        'objectPath' => 'ObjectPath',
        'objectType' => 'ObjectType',
    ];
    public function validate() {
        Model::validateRequired('objectPath', $this->objectPath, true);
    }
    public function toMap() {
        $res = [];
        $res['OwnerId'] = $this->ownerId;
        $res['SecurityToken'] = $this->securityToken;
        $res['ObjectPath'] = $this->objectPath;
        $res['ObjectType'] = $this->objectType;
        return $res;
    }
    /**
     * @param array $map
     * @return RefreshVodObjectCachesRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['OwnerId'])){
            $model->ownerId = $map['OwnerId'];
        }
        if(isset($map['SecurityToken'])){
            $model->securityToken = $map['SecurityToken'];
        }
        if(isset($map['ObjectPath'])){
            $model->objectPath = $map['ObjectPath'];
        }
        if(isset($map['ObjectType'])){
            $model->objectType = $map['ObjectType'];
        }
        return $model;
    }
    /**
     * @description ownerId
     * @var integer
     */
    public $ownerId;

    /**
     * @description securityToken
     * @var string
     */
    public $securityToken;

    /**
     * @description objectPath
     * @var string
     */
    public $objectPath;

    /**
     * @description objectType
     * @var string
     */
    public $objectType;

}
