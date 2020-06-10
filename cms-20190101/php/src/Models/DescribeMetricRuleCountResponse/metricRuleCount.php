<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleCountResponse;

use AlibabaCloud\Tea\Model;

class metricRuleCount extends Model
{
    /**
     * @description alarm
     *
     * @var int
     */
    public $alarm;

    /**
     * @description disable
     *
     * @var int
     */
    public $disable;

    /**
     * @description nodata
     *
     * @var int
     */
    public $nodata;

    /**
     * @description ok
     *
     * @var int
     */
    public $ok;

    /**
     * @description total
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'alarm'   => 'Alarm',
        'disable' => 'Disable',
        'nodata'  => 'Nodata',
        'ok'      => 'Ok',
        'total'   => 'Total',
    ];

    public function validate()
    {
        Model::validateRequired('alarm', $this->alarm, true);
        Model::validateRequired('disable', $this->disable, true);
        Model::validateRequired('nodata', $this->nodata, true);
        Model::validateRequired('ok', $this->ok, true);
        Model::validateRequired('total', $this->total, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarm) {
            $res['Alarm'] = $this->alarm;
        }
        if (null !== $this->disable) {
            $res['Disable'] = $this->disable;
        }
        if (null !== $this->nodata) {
            $res['Nodata'] = $this->nodata;
        }
        if (null !== $this->ok) {
            $res['Ok'] = $this->ok;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metricRuleCount
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Alarm'])) {
            $model->alarm = $map['Alarm'];
        }
        if (isset($map['Disable'])) {
            $model->disable = $map['Disable'];
        }
        if (isset($map['Nodata'])) {
            $model->nodata = $map['Nodata'];
        }
        if (isset($map['Ok'])) {
            $model->ok = $map['Ok'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
