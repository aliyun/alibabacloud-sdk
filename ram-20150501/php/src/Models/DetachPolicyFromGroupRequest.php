<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\Tea\Model;

class DetachPolicyFromGroupRequest extends Model {
    protected $_name = [
        'policyType' => 'PolicyType',
        'policyName' => 'PolicyName',
        'groupName' => 'GroupName',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['PolicyType'] = $this->policyType;
        $res['PolicyName'] = $this->policyName;
        $res['GroupName'] = $this->groupName;
        return $res;
    }
    /**
     * @param array $map
     * @return DetachPolicyFromGroupRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['PolicyType'])){
            $model->policyType = $map['PolicyType'];
        }
        if(isset($map['PolicyName'])){
            $model->policyName = $map['PolicyName'];
        }
        if(isset($map['GroupName'])){
            $model->groupName = $map['GroupName'];
        }
        return $model;
    }
    /**
     * @description PolicyType
     * @var string
     */
    public $policyType;

    /**
     * @description PolicyName
     * @var string
     */
    public $policyName;

    /**
     * @description GroupName
     * @var string
     */
    public $groupName;

}
