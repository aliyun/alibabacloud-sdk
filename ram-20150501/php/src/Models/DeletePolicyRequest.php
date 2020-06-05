<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\Tea\Model;

class DeletePolicyRequest extends Model {
    protected $_name = [
        'policyName' => 'PolicyName',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['PolicyName'] = $this->policyName;
        return $res;
    }
    /**
     * @param array $map
     * @return DeletePolicyRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['PolicyName'])){
            $model->policyName = $map['PolicyName'];
        }
        return $model;
    }
    /**
     * @description PolicyName
     * @var string
     */
    public $policyName;

}
