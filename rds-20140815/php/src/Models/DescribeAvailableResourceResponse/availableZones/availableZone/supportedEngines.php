<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableResourceResponse\availableZones\availableZone;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableResourceResponse\availableZones\availableZone\supportedEngines\supportedEngine;
use AlibabaCloud\Tea\Model;

class supportedEngines extends Model
{
    /**
     * @description SupportedEngine
     *
     * @var array
     */
    public $supportedEngine;
    protected $_name = [
        'supportedEngine' => 'SupportedEngine',
    ];

    public function validate()
    {
        Model::validateRequired('supportedEngine', $this->supportedEngine, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supportedEngine) {
            $res['SupportedEngine'] = [];
            if (null !== $this->supportedEngine && \is_array($this->supportedEngine)) {
                $n = 0;
                foreach ($this->supportedEngine as $item) {
                    $res['SupportedEngine'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportedEngines
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SupportedEngine'])) {
            if (!empty($map['SupportedEngine'])) {
                $model->supportedEngine = [];
                $n                      = 0;
                foreach ($map['SupportedEngine'] as $item) {
                    $model->supportedEngine[$n++] = null !== $item ? supportedEngine::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
