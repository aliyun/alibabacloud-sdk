<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableDedicatedHostClassesResponse\hostClasses;

class DescribeAvailableDedicatedHostClassesResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'hostClasses' => 'HostClasses',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('hostClasses', $this->hostClasses, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['HostClasses'] = null !== $this->hostClasses ? $this->hostClasses->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeAvailableDedicatedHostClassesResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['HostClasses'])){
            $model->hostClasses = hostClasses::fromMap($map['HostClasses']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.hostClasses
     * @var hostClasses
     */
    public $hostClasses;

}
