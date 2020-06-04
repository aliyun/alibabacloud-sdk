<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Eci\V20180808\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponse\monitorDatas;

class DescribeMultiContainerGroupMetricResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'monitorDatas' => 'MonitorDatas',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('monitorDatas', $this->monitorDatas, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['MonitorDatas'] = [];
        if(null !== $this->monitorDatas && is_array($this->monitorDatas)){
            $n = 0;
            foreach($this->monitorDatas as $item){
                $res['MonitorDatas'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeMultiContainerGroupMetricResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['MonitorDatas'])){
            if(!empty($map['MonitorDatas'])){
                $model->monitorDatas = [];
                $n = 0;
                foreach($map['MonitorDatas'] as $item) {
                    $model->monitorDatas[$n++] = null !== $item ? monitorDatas::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data
     * @var array
     */
    public $monitorDatas;

}
