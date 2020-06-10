<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableZonesResponse\availableZones\supportedEngines;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableZonesResponse\availableZones\supportedEngines\supportedEngineVersions\supportedCategorys;
use AlibabaCloud\Tea\Model;

class supportedEngineVersions extends Model
{
    /**
     * @description version
     *
     * @var string
     */
    public $version;

    /**
     * @description categorys
     *
     * @var array
     */
    public $supportedCategorys;
    protected $_name = [
        'version'            => 'Version',
        'supportedCategorys' => 'SupportedCategorys',
    ];

    public function validate()
    {
        Model::validateRequired('version', $this->version, true);
        Model::validateRequired('supportedCategorys', $this->supportedCategorys, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->supportedCategorys) {
            $res['SupportedCategorys'] = [];
            if (null !== $this->supportedCategorys && \is_array($this->supportedCategorys)) {
                $n = 0;
                foreach ($this->supportedCategorys as $item) {
                    $res['SupportedCategorys'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['SupportedCategorys'])) {
            if (!empty($map['SupportedCategorys'])) {
                $model->supportedCategorys = [];
                $n                         = 0;
                foreach ($map['SupportedCategorys'] as $item) {
                    $model->supportedCategorys[$n++] = null !== $item ? supportedCategorys::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
