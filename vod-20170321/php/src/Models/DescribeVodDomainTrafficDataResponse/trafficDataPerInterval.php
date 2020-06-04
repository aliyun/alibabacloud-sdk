<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainTrafficDataResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainTrafficDataResponse\trafficDataPerInterval\dataModule;

class trafficDataPerInterval extends Model {
    protected $_name = [
        'dataModule' => 'DataModule',
    ];
    public function validate() {
        Model::validateRequired('dataModule', $this->dataModule, true);
    }
    public function toMap() {
        $res = [];
        $res['DataModule'] = [];
        if(null !== $this->dataModule && is_array($this->dataModule)){
            $n = 0;
            foreach($this->dataModule as $item){
                $res['DataModule'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return trafficDataPerInterval
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['DataModule'])){
            if(!empty($map['DataModule'])){
                $model->dataModule = [];
                $n = 0;
                foreach($map['DataModule'] as $item) {
                    $model->dataModule[$n++] = null !== $item ? dataModule::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description DataModule
     * @var array
     */
    public $dataModule;

}
