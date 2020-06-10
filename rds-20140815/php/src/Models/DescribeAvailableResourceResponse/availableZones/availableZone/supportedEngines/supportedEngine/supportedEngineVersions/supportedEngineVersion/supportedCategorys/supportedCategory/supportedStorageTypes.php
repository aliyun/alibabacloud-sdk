<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableResourceResponse\availableZones\availableZone\supportedEngines\supportedEngine\supportedEngineVersions\supportedEngineVersion\supportedCategorys\supportedCategory;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableResourceResponse\availableZones\availableZone\supportedEngines\supportedEngine\supportedEngineVersions\supportedEngineVersion\supportedCategorys\supportedCategory\supportedStorageTypes\supportedStorageType;
use AlibabaCloud\Tea\Model;

class supportedStorageTypes extends Model
{
    /**
     * @description SupportedStorageType
     *
     * @var array
     */
    public $supportedStorageType;
    protected $_name = [
        'supportedStorageType' => 'SupportedStorageType',
    ];

    public function validate()
    {
        Model::validateRequired('supportedStorageType', $this->supportedStorageType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supportedStorageType) {
            $res['SupportedStorageType'] = [];
            if (null !== $this->supportedStorageType && \is_array($this->supportedStorageType)) {
                $n = 0;
                foreach ($this->supportedStorageType as $item) {
                    $res['SupportedStorageType'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportedStorageTypes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SupportedStorageType'])) {
            if (!empty($map['SupportedStorageType'])) {
                $model->supportedStorageType = [];
                $n                           = 0;
                foreach ($map['SupportedStorageType'] as $item) {
                    $model->supportedStorageType[$n++] = null !== $item ? supportedStorageType::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
