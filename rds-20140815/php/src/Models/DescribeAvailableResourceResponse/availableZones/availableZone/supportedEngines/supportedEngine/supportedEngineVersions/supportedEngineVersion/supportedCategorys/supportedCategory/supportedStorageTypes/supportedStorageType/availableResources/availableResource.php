<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableResourceResponse\availableZones\availableZone\supportedEngines\supportedEngine\supportedEngineVersions\supportedEngineVersion\supportedCategorys\supportedCategory\supportedStorageTypes\supportedStorageType\availableResources;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableResourceResponse\availableZones\availableZone\supportedEngines\supportedEngine\supportedEngineVersions\supportedEngineVersion\supportedCategorys\supportedCategory\supportedStorageTypes\supportedStorageType\availableResources\availableResource\DBInstanceStorageRange;

class availableResource extends Model {
    protected $_name = [
        'DBInstanceClass' => 'DBInstanceClass',
        'storageRange' => 'StorageRange',
        'DBInstanceStorageRange' => 'DBInstanceStorageRange',
    ];
    public function validate() {
        Model::validateRequired('DBInstanceClass', $this->DBInstanceClass, true);
        Model::validateRequired('storageRange', $this->storageRange, true);
        Model::validateRequired('DBInstanceStorageRange', $this->DBInstanceStorageRange, true);
    }
    public function toMap() {
        $res = [];
        $res['DBInstanceClass'] = $this->DBInstanceClass;
        $res['StorageRange'] = $this->storageRange;
        $res['DBInstanceStorageRange'] = null !== $this->DBInstanceStorageRange ? $this->DBInstanceStorageRange->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return availableResource
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['DBInstanceClass'])){
            $model->DBInstanceClass = $map['DBInstanceClass'];
        }
        if(isset($map['StorageRange'])){
            $model->storageRange = $map['StorageRange'];
        }
        if(isset($map['DBInstanceStorageRange'])){
            $model->DBInstanceStorageRange = DBInstanceStorageRange::fromMap($map['DBInstanceStorageRange']);
        }
        return $model;
    }
    /**
     * @description value
     * @var string
     */
    public $DBInstanceClass;

    /**
     * @description storageRange
     * @var string
     */
    public $storageRange;

    /**
     * @description range
     * @var DBInstanceStorageRange
     */
    public $DBInstanceStorageRange;

}
