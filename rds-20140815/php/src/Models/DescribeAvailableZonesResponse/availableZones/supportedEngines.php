<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableZonesResponse\availableZones;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableZonesResponse\availableZones\supportedEngines\supportedEngineVersions;

class supportedEngines extends Model {
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
        $res['SupportedEngineVersions'] = [];
        if(null !== $this->supportedEngineVersions && is_array($this->supportedEngineVersions)){
            $n = 0;
            foreach($this->supportedEngineVersions as $item){
                $res['SupportedEngineVersions'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return supportedEngines
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Engine'])){
            $model->engine = $map['Engine'];
        }
        if(isset($map['SupportedEngineVersions'])){
            if(!empty($map['SupportedEngineVersions'])){
                $model->supportedEngineVersions = [];
                $n = 0;
                foreach($map['SupportedEngineVersions'] as $item) {
                    $model->supportedEngineVersions[$n++] = null !== $item ? supportedEngineVersions::fromMap($item) : $item;
                }
            }
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
     * @var array
     */
    public $supportedEngineVersions;

}
