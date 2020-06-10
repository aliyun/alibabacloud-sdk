<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20190810\Models\DescribeReportResponse;

use AlibabaCloud\Tea\Model;

class agentsLocation extends Model
{
    /**
     * @description region
     *
     * @var string
     */
    public $region;

    /**
     * @description province
     *
     * @var string
     */
    public $province;

    /**
     * @description isp
     *
     * @var string
     */
    public $isp;

    /**
     * @description count
     *
     * @var int
     */
    public $count;
    protected $_name = [
        'region'   => 'Region',
        'province' => 'Province',
        'isp'      => 'Isp',
        'count'    => 'Count',
    ];

    public function validate()
    {
        Model::validateRequired('region', $this->region, true);
        Model::validateRequired('province', $this->province, true);
        Model::validateRequired('isp', $this->isp, true);
        Model::validateRequired('count', $this->count, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }
        if (null !== $this->isp) {
            $res['Isp'] = $this->isp;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return agentsLocation
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }
        if (isset($map['Isp'])) {
            $model->isp = $map['Isp'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        return $model;
    }
}
