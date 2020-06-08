<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models\ModifySecurityGroupConfigurationResponse\items;

use AlibabaCloud\Tea\Model;

class ecsSecurityGroupRelation extends Model {
    protected $_name = [
        'regionId' => 'RegionId',
        'securityGroupId' => 'SecurityGroupId',
        'networkType' => 'NetworkType',
    ];
    public function validate() {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('securityGroupId', $this->securityGroupId, true);
        Model::validateRequired('networkType', $this->networkType, true);
    }
    public function toMap() {
        $res = [];
        $res['RegionId'] = $this->regionId;
        $res['SecurityGroupId'] = $this->securityGroupId;
        $res['NetworkType'] = $this->networkType;
        return $res;
    }
    /**
     * @param array $map
     * @return ecsSecurityGroupRelation
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RegionId'])){
            $model->regionId = $map['RegionId'];
        }
        if(isset($map['SecurityGroupId'])){
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if(isset($map['NetworkType'])){
            $model->networkType = $map['NetworkType'];
        }
        return $model;
    }
    /**
     * @description regionId
     * @var string
     */
    public $regionId;

    /**
     * @description securityGroupId
     * @var string
     */
    public $securityGroupId;

    /**
     * @description netType
     * @var string
     */
    public $networkType;

}
