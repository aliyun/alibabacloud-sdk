<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterAvailableResourcesResponse\availableZones;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterAvailableResourcesResponse\availableZones\supportedEngines\availableResources;

class supportedEngines extends Model {
    protected $_name = [
        'engine' => 'Engine',
        'availableResources' => 'AvailableResources',
    ];
    public function validate() {
        Model::validateRequired('engine', $this->engine, true);
        Model::validateRequired('availableResources', $this->availableResources, true);
    }
    public function toMap() {
        $res = [];
        $res['Engine'] = $this->engine;
        $res['AvailableResources'] = [];
        if(null !== $this->availableResources && is_array($this->availableResources)){
            $n = 0;
            foreach($this->availableResources as $item){
                $res['AvailableResources'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return supportedEngines
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Engine'])){
            $model->engine = $map['Engine'];
        }
        if(isset($map['AvailableResources'])){
            if(!empty($map['AvailableResources'])){
                $model->availableResources = [];
                $n = 0;
                foreach($map['AvailableResources'] as $item) {
                    $model->availableResources[$n++] = null !== $item ? availableResources::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description engine
     * @var string
     */
    public $engine;

    /**
     * @description availableResources
     * @var array
     */
    public $availableResources;

}
