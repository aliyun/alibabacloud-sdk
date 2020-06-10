<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableResourceResponse\availableZones\availableZone\supportedEngines\supportedEngine\supportedEngineVersions\supportedEngineVersion;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableResourceResponse\availableZones\availableZone\supportedEngines\supportedEngine\supportedEngineVersions\supportedEngineVersion\supportedCategorys\supportedCategory;
use AlibabaCloud\Tea\Model;

class supportedCategorys extends Model
{
    /**
     * @description SupportedCategory
     *
     * @var array
     */
    public $supportedCategory;
    protected $_name = [
        'supportedCategory' => 'SupportedCategory',
    ];

    public function validate()
    {
        Model::validateRequired('supportedCategory', $this->supportedCategory, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supportedCategory) {
            $res['SupportedCategory'] = [];
            if (null !== $this->supportedCategory && \is_array($this->supportedCategory)) {
                $n = 0;
                foreach ($this->supportedCategory as $item) {
                    $res['SupportedCategory'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportedCategorys
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SupportedCategory'])) {
            if (!empty($map['SupportedCategory'])) {
                $model->supportedCategory = [];
                $n                        = 0;
                foreach ($map['SupportedCategory'] as $item) {
                    $model->supportedCategory[$n++] = null !== $item ? supportedCategory::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
