<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableResourceResponse\availableZones\availableZone\supportedEngines\supportedEngine\supportedEngineVersions\supportedEngineVersion\supportedCategorys\supportedCategory\supportedStorageTypes\supportedStorageType;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableResourceResponse\availableZones\availableZone\supportedEngines\supportedEngine\supportedEngineVersions\supportedEngineVersion\supportedCategorys\supportedCategory\supportedStorageTypes\supportedStorageType\availableResources\availableResource;

class availableResources extends Model {
    protected $_name = [
        'availableResource' => 'AvailableResource',
    ];
    public function validate() {
        Model::validateRequired('availableResource', $this->availableResource, true);
    }
    public function toMap() {
        $res = [];
        $res['AvailableResource'] = [];
        if(null !== $this->availableResource && is_array($this->availableResource)){
            $n = 0;
            foreach($this->availableResource as $item){
                $res['AvailableResource'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return availableResources
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['AvailableResource'])){
            if(!empty($map['AvailableResource'])){
                $model->availableResource = [];
                $n = 0;
                foreach($map['AvailableResource'] as $item) {
                    $model->availableResource[$n++] = null !== $item ? availableResource::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description AvailableResource
     * @var array
     */
    public $availableResource;

}
