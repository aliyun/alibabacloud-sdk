<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class ModifyApiMarketAttributesRequest extends Model
{
    /**
     * @description securityToken
     *
     * @var string
     */
    public $securityToken;

    /**
     * @description accessKeyId
     *
     * @var string
     */
    public $accessKeyId;

    /**
     * @description groupId
     *
     * @var string
     */
    public $groupId;

    /**
     * @description apiUid
     *
     * @var string
     */
    public $apiId;

    /**
     * @description needCharging
     *
     * @var bool
     */
    public $needCharging;

    /**
     * @description marketChargingMode
     *
     * @var string
     */
    public $marketChargingMode;
    protected $_name = [
        'securityToken'      => 'SecurityToken',
        'accessKeyId'        => 'AccessKeyId',
        'groupId'            => 'GroupId',
        'apiId'              => 'ApiId',
        'needCharging'       => 'NeedCharging',
        'marketChargingMode' => 'MarketChargingMode',
    ];

    public function validate()
    {
        Model::validateRequired('groupId', $this->groupId, true);
        Model::validateRequired('apiId', $this->apiId, true);
        Model::validateRequired('needCharging', $this->needCharging, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->accessKeyId) {
            $res['AccessKeyId'] = $this->accessKeyId;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->needCharging) {
            $res['NeedCharging'] = $this->needCharging;
        }
        if (null !== $this->marketChargingMode) {
            $res['MarketChargingMode'] = $this->marketChargingMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyApiMarketAttributesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['AccessKeyId'])) {
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['NeedCharging'])) {
            $model->needCharging = $map['NeedCharging'];
        }
        if (isset($map['MarketChargingMode'])) {
            $model->marketChargingMode = $map['MarketChargingMode'];
        }

        return $model;
    }
}
