<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\Tea\Model;

class DeletePolicyVersionRequest extends Model {
    protected $_name = [
        'policyName' => 'PolicyName',
        'versionId' => 'VersionId',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['PolicyName'] = $this->policyName;
        $res['VersionId'] = $this->versionId;
        return $res;
    }
    /**
     * @param array $map
     * @return DeletePolicyVersionRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['PolicyName'])){
            $model->policyName = $map['PolicyName'];
        }
        if(isset($map['VersionId'])){
            $model->versionId = $map['VersionId'];
        }
        return $model;
    }
    /**
     * @description PolicyName
     * @var string
     */
    public $policyName;

    /**
     * @description VersionId
     * @var string
     */
    public $versionId;

}
