<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CreateDedicatedHostGroupResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'dedicatedHostGroupId' => 'DedicatedHostGroupId',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('dedicatedHostGroupId', $this->dedicatedHostGroupId, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['DedicatedHostGroupId'] = $this->dedicatedHostGroupId;
        return $res;
    }
    /**
     * @param array $map
     * @return CreateDedicatedHostGroupResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['DedicatedHostGroupId'])){
            $model->dedicatedHostGroupId = $map['DedicatedHostGroupId'];
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.dedicatedHostGroupId
     * @var string
     */
    public $dedicatedHostGroupId;

}
