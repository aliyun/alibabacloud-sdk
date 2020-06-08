<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableResourceResponse\availableZones\availableZone\supportedEngines;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableResourceResponse\availableZones\availableZone\supportedEngines\supportedEngine\supportedEngineVersions;

class supportedEngine extends Model {
    protected $_name = [
        'engine' => 'Engine',
        'supportedEngineVersions' => 'SupportedEngineVersions',
    ];
    public function validate() {
        Model::validateRequired('engine', $this->engine, true);
        Model::validateRequired('supportedEngineVersions', $this->supportedEngineVersions, true);
    }
    public function toMap() {
        $res = [];
        $res['Engine'] = $this->engine;
        $res['SupportedEngineVersions'] = null !== $this->supportedEngineVersions ? $this->supportedEngineVersions->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return supportedEngine
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Engine'])){
            $model->engine = $map['Engine'];
        }
        if(isset($map['SupportedEngineVersions'])){
            $model->supportedEngineVersions = supportedEngineVersions::fromMap($map['SupportedEngineVersions']);
        }
        return $model;
    }
    /**
     * @description engine
     * @var string
     */
    public $engine;

    /**
     * @description versions
     * @var supportedEngineVersions
     */
    public $supportedEngineVersions;

}
