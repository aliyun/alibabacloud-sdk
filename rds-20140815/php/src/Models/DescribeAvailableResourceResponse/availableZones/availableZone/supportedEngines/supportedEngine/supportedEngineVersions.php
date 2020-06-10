<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableResourceResponse\availableZones\availableZone\supportedEngines\supportedEngine;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableResourceResponse\availableZones\availableZone\supportedEngines\supportedEngine\supportedEngineVersions\supportedEngineVersion;
use AlibabaCloud\Tea\Model;

class supportedEngineVersions extends Model
{
    /**
     * @description SupportedEngineVersion
     *
     * @var array
     */
    public $supportedEngineVersion;
    protected $_name = [
        'supportedEngineVersion' => 'SupportedEngineVersion',
    ];

    public function validate()
    {
        Model::validateRequired('supportedEngineVersion', $this->supportedEngineVersion, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supportedEngineVersion) {
            $res['SupportedEngineVersion'] = [];
            if (null !== $this->supportedEngineVersion && \is_array($this->supportedEngineVersion)) {
                $n = 0;
                foreach ($this->supportedEngineVersion as $item) {
                    $res['SupportedEngineVersion'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportedEngineVersions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SupportedEngineVersion'])) {
            if (!empty($map['SupportedEngineVersion'])) {
                $model->supportedEngineVersion = [];
                $n                             = 0;
                foreach ($map['SupportedEngineVersion'] as $item) {
                    $model->supportedEngineVersion[$n++] = null !== $item ? supportedEngineVersion::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
