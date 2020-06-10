<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class ModifyTrafficControlRequest extends Model
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
     * @description trafficControlId
     *
     * @var string
     */
    public $trafficControlId;

    /**
     * @description trafficControlName
     *
     * @var string
     */
    public $trafficControlName;

    /**
     * @description trafficControlUnit
     *
     * @var string
     */
    public $trafficControlUnit;

    /**
     * @description apiDefault
     *
     * @var int
     */
    public $apiDefault;

    /**
     * @description userDefault
     *
     * @var int
     */
    public $userDefault;

    /**
     * @description appDefault
     *
     * @var int
     */
    public $appDefault;

    /**
     * @description description
     *
     * @var string
     */
    public $description;
    protected $_name = [
        'securityToken'      => 'SecurityToken',
        'accessKeyId'        => 'AccessKeyId',
        'trafficControlId'   => 'TrafficControlId',
        'trafficControlName' => 'TrafficControlName',
        'trafficControlUnit' => 'TrafficControlUnit',
        'apiDefault'         => 'ApiDefault',
        'userDefault'        => 'UserDefault',
        'appDefault'         => 'AppDefault',
        'description'        => 'Description',
    ];

    public function validate()
    {
        Model::validateRequired('trafficControlId', $this->trafficControlId, true);
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
        if (null !== $this->trafficControlId) {
            $res['TrafficControlId'] = $this->trafficControlId;
        }
        if (null !== $this->trafficControlName) {
            $res['TrafficControlName'] = $this->trafficControlName;
        }
        if (null !== $this->trafficControlUnit) {
            $res['TrafficControlUnit'] = $this->trafficControlUnit;
        }
        if (null !== $this->apiDefault) {
            $res['ApiDefault'] = $this->apiDefault;
        }
        if (null !== $this->userDefault) {
            $res['UserDefault'] = $this->userDefault;
        }
        if (null !== $this->appDefault) {
            $res['AppDefault'] = $this->appDefault;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyTrafficControlRequest
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
        if (isset($map['TrafficControlId'])) {
            $model->trafficControlId = $map['TrafficControlId'];
        }
        if (isset($map['TrafficControlName'])) {
            $model->trafficControlName = $map['TrafficControlName'];
        }
        if (isset($map['TrafficControlUnit'])) {
            $model->trafficControlUnit = $map['TrafficControlUnit'];
        }
        if (isset($map['ApiDefault'])) {
            $model->apiDefault = $map['ApiDefault'];
        }
        if (isset($map['UserDefault'])) {
            $model->userDefault = $map['UserDefault'];
        }
        if (isset($map['AppDefault'])) {
            $model->appDefault = $map['AppDefault'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        return $model;
    }
}
