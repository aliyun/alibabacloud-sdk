<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\DescribeRegionsResponse;

use AlibabaCloud\Tea\Model;

class regions extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $localName;

    /**
     * @var string
     */
    public $regionEndpoint;
    protected $_name = [
        'regionId'       => 'RegionId',
        'localName'      => 'LocalName',
        'regionEndpoint' => 'RegionEndpoint',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('localName', $this->localName, true);
        Model::validateRequired('regionEndpoint', $this->regionEndpoint, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->localName) {
            $res['LocalName'] = $this->localName;
        }
        if (null !== $this->regionEndpoint) {
            $res['RegionEndpoint'] = $this->regionEndpoint;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['LocalName'])) {
            $model->localName = $map['LocalName'];
        }
        if (isset($map['RegionEndpoint'])) {
            $model->regionEndpoint = $map['RegionEndpoint'];
        }

        return $model;
    }
}
