<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterAccessWhitelistResponse\DBClusterSecurityGroups;

use AlibabaCloud\Tea\Model;

class DBClusterSecurityGroup extends Model {
    protected $_name = [
        'securityGroupId' => 'SecurityGroupId',
        'securityGroupName' => 'SecurityGroupName',
    ];
    public function validate() {
        Model::validateRequired('securityGroupId', $this->securityGroupId, true);
        Model::validateRequired('securityGroupName', $this->securityGroupName, true);
    }
    public function toMap() {
        $res = [];
        $res['SecurityGroupId'] = $this->securityGroupId;
        $res['SecurityGroupName'] = $this->securityGroupName;
        return $res;
    }
    /**
     * @param array $map
     * @return DBClusterSecurityGroup
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['SecurityGroupId'])){
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if(isset($map['SecurityGroupName'])){
            $model->securityGroupName = $map['SecurityGroupName'];
        }
        return $model;
    }
    /**
     * @description securityGroupId
     * @var string
     */
    public $securityGroupId;

    /**
     * @description securityGroupName
     * @var string
     */
    public $securityGroupName;

}
