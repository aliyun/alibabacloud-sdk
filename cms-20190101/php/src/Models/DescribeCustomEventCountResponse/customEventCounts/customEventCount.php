<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeCustomEventCountResponse\customEventCounts;

use AlibabaCloud\Tea\Model;

class customEventCount extends Model
{
    /**
     * @description name
     *
     * @var string
     */
    public $name;

    /**
     * @description num
     *
     * @var int
     */
    public $num;

    /**
     * @description time
     *
     * @var int
     */
    public $time;
    protected $_name = [
        'name' => 'Name',
        'num'  => 'Num',
        'time' => 'Time',
    ];

    public function validate()
    {
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('num', $this->num, true);
        Model::validateRequired('time', $this->time, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->num) {
            $res['Num'] = $this->num;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customEventCount
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Num'])) {
            $model->num = $map['Num'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}
