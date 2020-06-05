<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\Tea\Model;

class ListEntitiesForPolicyRequest extends Model {
    protected $_name = [
        'policyType' => 'PolicyType',
        'policyName' => 'PolicyName',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['PolicyType'] = $this->policyType;
        $res['PolicyName'] = $this->policyName;
        return $res;
    }
    /**
     * @param array $map
     * @return ListEntitiesForPolicyRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['PolicyType'])){
            $model->policyType = $map['PolicyType'];
        }
        if(isset($map['PolicyName'])){
            $model->policyName = $map['PolicyName'];
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

}
