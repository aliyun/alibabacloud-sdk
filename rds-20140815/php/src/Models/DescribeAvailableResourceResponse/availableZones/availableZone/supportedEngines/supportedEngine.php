<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableResourceResponse\availableZones\availableZone\supportedEngines;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableResourceResponse\availableZones\availableZone\supportedEngines\supportedEngine\supportedEngineVersions;
use AlibabaCloud\Tea\Model;

class supportedEngine extends Model
{
    /**
     * @description engine
     *
     * @var string
     */
    public $engine;

    /**
     * @description versions
     *
     * @var supportedEngineVersions
     */
    public $supportedEngineVersions;
    protected $_name = [
        'engine'                  => 'Engine',
        'supportedEngineVersions' => 'SupportedEngineVersions',
    ];

    public function validate()
    {
        Model::validateRequired('engine', $this->engine, true);
        Model::validateRequired('supportedEngineVersions', $this->supportedEngineVersions, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->supportedEngineVersions) {
            $res['SupportedEngineVersions'] = null !== $this->supportedEngineVersions ? $this->supportedEngineVersions->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportedEngine
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['SupportedEngineVersions'])) {
            $model->supportedEngineVersions = supportedEngineVersions::fromMap($map['SupportedEngineVersions']);
        }

        return $model;
    }
}
