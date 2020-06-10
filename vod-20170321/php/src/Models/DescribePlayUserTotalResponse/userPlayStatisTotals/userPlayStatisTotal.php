<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayUserTotalResponse\userPlayStatisTotals;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayUserTotalResponse\userPlayStatisTotals\userPlayStatisTotal\UV;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayUserTotalResponse\userPlayStatisTotals\userPlayStatisTotal\VV;
use AlibabaCloud\Tea\Model;

class userPlayStatisTotal extends Model
{
    /**
     * @description date
     *
     * @var string
     */
    public $date;

    /**
     * @description playTime
     *
     * @var string
     */
    public $playDuration;

    /**
     * @description playRange
     *
     * @var string
     */
    public $playRange;

    /**
     * @description vv
     *
     * @var VV
     */
    public $VV;

    /**
     * @description uv
     *
     * @var UV
     */
    public $UV;
    protected $_name = [
        'date'         => 'Date',
        'playDuration' => 'PlayDuration',
        'playRange'    => 'PlayRange',
        'VV'           => 'VV',
        'UV'           => 'UV',
    ];

    public function validate()
    {
        Model::validateRequired('date', $this->date, true);
        Model::validateRequired('playDuration', $this->playDuration, true);
        Model::validateRequired('playRange', $this->playRange, true);
        Model::validateRequired('VV', $this->VV, true);
        Model::validateRequired('UV', $this->UV, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->date) {
            $res['Date'] = $this->date;
        }
        if (null !== $this->playDuration) {
            $res['PlayDuration'] = $this->playDuration;
        }
        if (null !== $this->playRange) {
            $res['PlayRange'] = $this->playRange;
        }
        if (null !== $this->VV) {
            $res['VV'] = null !== $this->VV ? $this->VV->toMap() : null;
        }
        if (null !== $this->UV) {
            $res['UV'] = null !== $this->UV ? $this->UV->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userPlayStatisTotal
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Date'])) {
            $model->date = $map['Date'];
        }
        if (isset($map['PlayDuration'])) {
            $model->playDuration = $map['PlayDuration'];
        }
        if (isset($map['PlayRange'])) {
            $model->playRange = $map['PlayRange'];
        }
        if (isset($map['VV'])) {
            $model->VV = VV::fromMap($map['VV']);
        }
        if (isset($map['UV'])) {
            $model->UV = UV::fromMap($map['UV']);
        }

        return $model;
    }
}
