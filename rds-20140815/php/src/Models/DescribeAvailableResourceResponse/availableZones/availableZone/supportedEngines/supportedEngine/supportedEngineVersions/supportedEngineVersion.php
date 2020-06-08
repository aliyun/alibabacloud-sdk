<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableResourceResponse\availableZones\availableZone\supportedEngines\supportedEngine\supportedEngineVersions;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableResourceResponse\availableZones\availableZone\supportedEngines\supportedEngine\supportedEngineVersions\supportedEngineVersion\supportedCategorys;

class supportedEngineVersion extends Model {
    protected $_name = [
        'version' => 'Version',
        'supportedCategorys' => 'SupportedCategorys',
    ];
    public function validate() {
        Model::validateRequired('version', $this->version, true);
        Model::validateRequired('supportedCategorys', $this->supportedCategorys, true);
    }
    public function toMap() {
        $res = [];
        $res['Version'] = $this->version;
        $res['SupportedCategorys'] = null !== $this->supportedCategorys ? $this->supportedCategorys->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return supportedEngineVersion
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Version'])){
            $model->version = $map['Version'];
        }
        if(isset($map['SupportedCategorys'])){
            $model->supportedCategorys = supportedCategorys::fromMap($map['SupportedCategorys']);
        }
        return $model;
    }
    /**
     * @description version
     * @var string
     */
    public $version;

    /**
     * @description categorys
     * @var supportedCategorys
     */
    public $supportedCategorys;

}
