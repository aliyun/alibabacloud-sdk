<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20190810\Models\DescribeSceneResponse\scene;

use AlibabaCloud\Tea\Model;

class status extends Model
{
    /**
     * @description operations
     *
     * @var array
     */
    public $operations;

    /**
     * @description tips
     *
     * @var string
     */
    public $tips;

    /**
     * @description debugging
     *
     * @var bool
     */
    public $debugging;

    /**
     * @description testing
     *
     * @var bool
     */
    public $testing;

    /**
     * @description isCronable
     *
     * @var bool
     */
    public $isCronable;

    /**
     * @description isReusable
     *
     * @var bool
     */
    public $isReusable;

    /**
     * @description cronEditable
     *
     * @var bool
     */
    public $cronEditable;
    protected $_name = [
        'operations'   => 'Operations',
        'tips'         => 'Tips',
        'debugging'    => 'Debugging',
        'testing'      => 'Testing',
        'isCronable'   => 'IsCronable',
        'isReusable'   => 'IsReusable',
        'cronEditable' => 'CronEditable',
    ];

    public function validate()
    {
        Model::validateRequired('operations', $this->operations, true);
        Model::validateRequired('tips', $this->tips, true);
        Model::validateRequired('debugging', $this->debugging, true);
        Model::validateRequired('testing', $this->testing, true);
        Model::validateRequired('isCronable', $this->isCronable, true);
        Model::validateRequired('isReusable', $this->isReusable, true);
        Model::validateRequired('cronEditable', $this->cronEditable, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->operations) {
            $res['Operations'] = $this->operations;
        }
        if (null !== $this->tips) {
            $res['Tips'] = $this->tips;
        }
        if (null !== $this->debugging) {
            $res['Debugging'] = $this->debugging;
        }
        if (null !== $this->testing) {
            $res['Testing'] = $this->testing;
        }
        if (null !== $this->isCronable) {
            $res['IsCronable'] = $this->isCronable;
        }
        if (null !== $this->isReusable) {
            $res['IsReusable'] = $this->isReusable;
        }
        if (null !== $this->cronEditable) {
            $res['CronEditable'] = $this->cronEditable;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return status
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Operations'])) {
            $model->operations = $map['Operations'];
        }
        if (isset($map['Tips'])) {
            $model->tips = $map['Tips'];
        }
        if (isset($map['Debugging'])) {
            $model->debugging = $map['Debugging'];
        }
        if (isset($map['Testing'])) {
            $model->testing = $map['Testing'];
        }
        if (isset($map['IsCronable'])) {
            $model->isCronable = $map['IsCronable'];
        }
        if (isset($map['IsReusable'])) {
            $model->isReusable = $map['IsReusable'];
        }
        if (isset($map['CronEditable'])) {
            $model->cronEditable = $map['CronEditable'];
        }

        return $model;
    }
}
