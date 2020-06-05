<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\Tea\Model;

class CreatePolicyRequest extends Model {
    protected $_name = [
        'policyName' => 'PolicyName',
        'description' => 'Description',
        'policyDocument' => 'PolicyDocument',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['PolicyName'] = $this->policyName;
        $res['Description'] = $this->description;
        $res['PolicyDocument'] = $this->policyDocument;
        return $res;
    }
    /**
     * @param array $map
     * @return CreatePolicyRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['PolicyName'])){
            $model->policyName = $map['PolicyName'];
        }
        if(isset($map['Description'])){
            $model->description = $map['Description'];
        }
        if(isset($map['PolicyDocument'])){
            $model->policyDocument = $map['PolicyDocument'];
        }
        return $model;
    }
    /**
     * @description PolicyName
     * @var string
     */
    public $policyName;

    /**
     * @description Description
     * @var string
     */
    public $description;

    /**
     * @description PolicyDocument
     * @var string
     */
    public $policyDocument;

}
