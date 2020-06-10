<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableCrossRegionResponse;

use AlibabaCloud\Tea\Model;

class regions extends Model
{
    /**
     * @description Region
     *
     * @var array
     */
    public $region;
    protected $_name = [
        'region' => 'Region',
    ];

    public function validate()
    {
        Model::validateRequired('region', $this->region, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->region) {
            $res['Region'] = [];
            if (null !== $this->region) {
                $res['Region'] = $this->region;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return regions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Region'])) {
            if (!empty($map['Region'])) {
                $model->region = [];
                $model->region = $map['Region'];
            }
        }

        return $model;
    }
}
