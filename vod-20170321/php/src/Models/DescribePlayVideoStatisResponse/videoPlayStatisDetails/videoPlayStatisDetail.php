<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayVideoStatisResponse\videoPlayStatisDetails;

use AlibabaCloud\Tea\Model;

class videoPlayStatisDetail extends Model
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
     * @description vv
     *
     * @var string
     */
    public $VV;

    /**
     * @description uv
     *
     * @var string
     */
    public $UV;

    /**
     * @description playRange
     *
     * @var string
     */
    public $playRange;

    /**
     * @description title
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'date'         => 'Date',
        'playDuration' => 'PlayDuration',
        'VV'           => 'VV',
        'UV'           => 'UV',
        'playRange'    => 'PlayRange',
        'title'        => 'Title',
    ];

    public function validate()
    {
        Model::validateRequired('date', $this->date, true);
        Model::validateRequired('playDuration', $this->playDuration, true);
        Model::validateRequired('VV', $this->VV, true);
        Model::validateRequired('UV', $this->UV, true);
        Model::validateRequired('playRange', $this->playRange, true);
        Model::validateRequired('title', $this->title, true);
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
        if (null !== $this->VV) {
            $res['VV'] = $this->VV;
        }
        if (null !== $this->UV) {
            $res['UV'] = $this->UV;
        }
        if (null !== $this->playRange) {
            $res['PlayRange'] = $this->playRange;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return videoPlayStatisDetail
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
        if (isset($map['VV'])) {
            $model->VV = $map['VV'];
        }
        if (isset($map['UV'])) {
            $model->UV = $map['UV'];
        }
        if (isset($map['PlayRange'])) {
            $model->playRange = $map['PlayRange'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
