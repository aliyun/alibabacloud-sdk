<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Ram\V20150501\Models\ListPoliciesForGroupResponse\policies;

class ListPoliciesForGroupResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'policies' => 'Policies',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('policies', $this->policies, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['Policies'] = null !== $this->policies ? $this->policies->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return ListPoliciesForGroupResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['Policies'])){
            $model->policies = policies::fromMap($map['Policies']);
        }
        return $model;
    }
    /**
     * @description RequestId
     * @var string
     */
    public $requestId;

    /**
     * @description Policies
     * @var policies
     */
    public $policies;

}
