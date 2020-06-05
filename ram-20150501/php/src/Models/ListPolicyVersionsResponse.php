<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Ram\V20150501\Models\ListPolicyVersionsResponse\policyVersions;

class ListPolicyVersionsResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'policyVersions' => 'PolicyVersions',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('policyVersions', $this->policyVersions, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['PolicyVersions'] = null !== $this->policyVersions ? $this->policyVersions->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return ListPolicyVersionsResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['PolicyVersions'])){
            $model->policyVersions = policyVersions::fromMap($map['PolicyVersions']);
        }
        return $model;
    }
    /**
     * @description RequestId
     * @var string
     */
    public $requestId;

    /**
     * @description PolicyVersions
     * @var policyVersions
     */
    public $policyVersions;

}
