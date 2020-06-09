<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ReplaceDedicatedHostResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'taskId' => 'TaskId',
        'dedicatedHostId' => 'DedicatedHostId',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('taskId', $this->taskId, true);
        Model::validateRequired('dedicatedHostId', $this->dedicatedHostId, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['TaskId'] = $this->taskId;
        $res['DedicatedHostId'] = $this->dedicatedHostId;
        return $res;
    }
    /**
     * @param array $map
     * @return ReplaceDedicatedHostResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['TaskId'])){
            $model->taskId = $map['TaskId'];
        }
        if(isset($map['DedicatedHostId'])){
            $model->dedicatedHostId = $map['DedicatedHostId'];
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.taskId
     * @var integer
     */
    public $taskId;

    /**
     * @description data.dedicatedHostId
     * @var string
     */
    public $dedicatedHostId;

}
