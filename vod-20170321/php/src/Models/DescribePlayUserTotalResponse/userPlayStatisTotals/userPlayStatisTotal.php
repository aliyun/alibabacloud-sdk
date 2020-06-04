<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayUserTotalResponse\userPlayStatisTotals;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayUserTotalResponse\userPlayStatisTotals\userPlayStatisTotal\VV;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayUserTotalResponse\userPlayStatisTotals\userPlayStatisTotal\UV;

class userPlayStatisTotal extends Model {
    protected $_name = [
        'date' => 'Date',
        'playDuration' => 'PlayDuration',
        'playRange' => 'PlayRange',
        'VV' => 'VV',
        'UV' => 'UV',
    ];
    public function validate() {
        Model::validateRequired('date', $this->date, true);
        Model::validateRequired('playDuration', $this->playDuration, true);
        Model::validateRequired('playRange', $this->playRange, true);
        Model::validateRequired('VV', $this->VV, true);
        Model::validateRequired('UV', $this->UV, true);
    }
    public function toMap() {
        $res = [];
        $res['Date'] = $this->date;
        $res['PlayDuration'] = $this->playDuration;
        $res['PlayRange'] = $this->playRange;
        $res['VV'] = null !== $this->VV ? $this->VV->toMap() : null;
        $res['UV'] = null !== $this->UV ? $this->UV->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return userPlayStatisTotal
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Date'])){
            $model->date = $map['Date'];
        }
        if(isset($map['PlayDuration'])){
            $model->playDuration = $map['PlayDuration'];
        }
        if(isset($map['PlayRange'])){
            $model->playRange = $map['PlayRange'];
        }
        if(isset($map['VV'])){
            $model->VV = VV::fromMap($map['VV']);
        }
        if(isset($map['UV'])){
            $model->UV = UV::fromMap($map['UV']);
        }
        return $model;
    }
    /**
     * @description date
     * @var string
     */
    public $date;

    /**
     * @description playTime
     * @var string
     */
    public $playDuration;

    /**
     * @description playRange
     * @var string
     */
    public $playRange;

    /**
     * @description vv
     * @var VV
     */
    public $VV;

    /**
     * @description uv
     * @var UV
     */
    public $UV;

}
