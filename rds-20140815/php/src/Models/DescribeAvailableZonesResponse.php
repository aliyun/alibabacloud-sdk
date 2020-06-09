<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableZonesResponse\availableZones;

class DescribeAvailableZonesResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'availableZones' => 'AvailableZones',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('availableZones', $this->availableZones, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['AvailableZones'] = [];
        if(null !== $this->availableZones && is_array($this->availableZones)){
            $n = 0;
            foreach($this->availableZones as $item){
                $res['AvailableZones'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeAvailableZonesResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['AvailableZones'])){
            if(!empty($map['AvailableZones'])){
                $model->availableZones = [];
                $n = 0;
                foreach($map['AvailableZones'] as $item) {
                    $model->availableZones[$n++] = null !== $item ? availableZones::fromMap($item) : $item;
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
     * @description data.availableZones
     * @var array
     */
    public $availableZones;

}
