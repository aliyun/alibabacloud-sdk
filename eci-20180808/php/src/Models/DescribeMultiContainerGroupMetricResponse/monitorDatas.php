<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponse\monitorDatas\records;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponse\monitorDatas\containerInfos;

class monitorDatas extends Model {
    protected $_name = [
        'containerGroupId' => 'ContainerGroupId',
        'records' => 'Records',
        'containerInfos' => 'ContainerInfos',
    ];
    public function validate() {
        Model::validateRequired('containerGroupId', $this->containerGroupId, true);
        Model::validateRequired('records', $this->records, true);
        Model::validateRequired('containerInfos', $this->containerInfos, true);
    }
    public function toMap() {
        $res = [];
        $res['ContainerGroupId'] = $this->containerGroupId;
        $res['Records'] = [];
        if(null !== $this->records && is_array($this->records)){
            $n = 0;
            foreach($this->records as $item){
                $res['Records'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['ContainerInfos'] = [];
        if(null !== $this->containerInfos && is_array($this->containerInfos)){
            $n = 0;
            foreach($this->containerInfos as $item){
                $res['ContainerInfos'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return monitorDatas
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['ContainerGroupId'])){
            $model->containerGroupId = $map['ContainerGroupId'];
        }
        if(isset($map['Records'])){
            if(!empty($map['Records'])){
                $model->records = [];
                $n = 0;
                foreach($map['Records'] as $item) {
                    $model->records[$n++] = null !== $item ? records::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['ContainerInfos'])){
            if(!empty($map['ContainerInfos'])){
                $model->containerInfos = [];
                $n = 0;
                foreach($map['ContainerInfos'] as $item) {
                    $model->containerInfos[$n++] = null !== $item ? containerInfos::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description containerGroupId
     * @var string
     */
    public $containerGroupId;

    /**
     * @description podStats
     * @var array
     */
    public $records;

    /**
     * @description containerInfos
     * @var array
     */
    public $containerInfos;

}
