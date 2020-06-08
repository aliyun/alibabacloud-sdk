<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableResourceResponse\availableZones\availableZone\supportedEngines\supportedEngine\supportedEngineVersions\supportedEngineVersion\supportedCategorys\supportedCategory\supportedStorageTypes;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableResourceResponse\availableZones\availableZone\supportedEngines\supportedEngine\supportedEngineVersions\supportedEngineVersion\supportedCategorys\supportedCategory\supportedStorageTypes\supportedStorageType\availableResources;

class supportedStorageType extends Model {
    protected $_name = [
        'storageType' => 'StorageType',
        'availableResources' => 'AvailableResources',
    ];
    public function validate() {
        Model::validateRequired('storageType', $this->storageType, true);
        Model::validateRequired('availableResources', $this->availableResources, true);
    }
    public function toMap() {
        $res = [];
        $res['StorageType'] = $this->storageType;
        $res['AvailableResources'] = null !== $this->availableResources ? $this->availableResources->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return supportedStorageType
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['StorageType'])){
            $model->storageType = $map['StorageType'];
        }
        if(isset($map['AvailableResources'])){
            $model->availableResources = availableResources::fromMap($map['AvailableResources']);
        }
        return $model;
    }
    /**
     * @description dbInstanceStorageType
     * @var string
     */
    public $storageType;

    /**
     * @description availableResources
     * @var availableResources
     */
    public $availableResources;

}
