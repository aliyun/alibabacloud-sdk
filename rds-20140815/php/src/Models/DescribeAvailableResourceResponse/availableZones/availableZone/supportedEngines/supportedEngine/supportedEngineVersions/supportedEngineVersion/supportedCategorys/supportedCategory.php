<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableResourceResponse\availableZones\availableZone\supportedEngines\supportedEngine\supportedEngineVersions\supportedEngineVersion\supportedCategorys;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableResourceResponse\availableZones\availableZone\supportedEngines\supportedEngine\supportedEngineVersions\supportedEngineVersion\supportedCategorys\supportedCategory\supportedStorageTypes;
use AlibabaCloud\Tea\Model;

class supportedCategory extends Model
{
    /**
     * @description category
     *
     * @var string
     */
    public $category;

    /**
     * @description storageTypes
     *
     * @var supportedStorageTypes
     */
    public $supportedStorageTypes;
    protected $_name = [
        'category'              => 'Category',
        'supportedStorageTypes' => 'SupportedStorageTypes',
    ];

    public function validate()
    {
        Model::validateRequired('category', $this->category, true);
        Model::validateRequired('supportedStorageTypes', $this->supportedStorageTypes, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->supportedStorageTypes) {
            $res['SupportedStorageTypes'] = null !== $this->supportedStorageTypes ? $this->supportedStorageTypes->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportedCategory
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['SupportedStorageTypes'])) {
            $model->supportedStorageTypes = supportedStorageTypes::fromMap($map['SupportedStorageTypes']);
        }

        return $model;
    }
}
