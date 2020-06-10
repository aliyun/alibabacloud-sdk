<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20190810\Models\DescribeJMeterSceneResponse\scene;

use AlibabaCloud\Tea\Model;

class plan extends Model
{
    /**
     * @description gmtModified
     *
     * @var int
     */
    public $modifiedTime;

    /**
     * @description lastActive
     *
     * @var int
     */
    public $lastActive;

    /**
     * @description vum
     *
     * @var int
     */
    public $vum;

    /**
     * @description hasReport
     *
     * @var bool
     */
    public $hasReport;

    /**
     * @description vumWeight
     *
     * @var int
     */
    public $vumWeight;

    /**
     * @description startTime
     *
     * @var int
     */
    public $beginTime;
    protected $_name = [
        'modifiedTime' => 'ModifiedTime',
        'lastActive'   => 'LastActive',
        'vum'          => 'Vum',
        'hasReport'    => 'HasReport',
        'vumWeight'    => 'VumWeight',
        'beginTime'    => 'BeginTime',
    ];

    public function validate()
    {
        Model::validateRequired('modifiedTime', $this->modifiedTime, true);
        Model::validateRequired('lastActive', $this->lastActive, true);
        Model::validateRequired('vum', $this->vum, true);
        Model::validateRequired('hasReport', $this->hasReport, true);
        Model::validateRequired('vumWeight', $this->vumWeight, true);
        Model::validateRequired('beginTime', $this->beginTime, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->lastActive) {
            $res['LastActive'] = $this->lastActive;
        }
        if (null !== $this->vum) {
            $res['Vum'] = $this->vum;
        }
        if (null !== $this->hasReport) {
            $res['HasReport'] = $this->hasReport;
        }
        if (null !== $this->vumWeight) {
            $res['VumWeight'] = $this->vumWeight;
        }
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return plan
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['LastActive'])) {
            $model->lastActive = $map['LastActive'];
        }
        if (isset($map['Vum'])) {
            $model->vum = $map['Vum'];
        }
        if (isset($map['HasReport'])) {
            $model->hasReport = $map['HasReport'];
        }
        if (isset($map['VumWeight'])) {
            $model->vumWeight = $map['VumWeight'];
        }
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }

        return $model;
    }
}
