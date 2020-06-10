<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponse\monitorDatas\containerInfos\containerStats\diskIoStats;

use AlibabaCloud\Tea\Model;

class sectors extends Model
{
    /**
     * @description device
     *
     * @var string
     */
    public $device;

    /**
     * @description major
     *
     * @var int
     */
    public $major;

    /**
     * @description minor
     *
     * @var int
     */
    public $minor;

    /**
     * @description statsForPop
     *
     * @var string
     */
    public $stats;
    protected $_name = [
        'device' => 'Device',
        'major'  => 'Major',
        'minor'  => 'Minor',
        'stats'  => 'Stats',
    ];

    public function validate()
    {
        Model::validateRequired('device', $this->device, true);
        Model::validateRequired('major', $this->major, true);
        Model::validateRequired('minor', $this->minor, true);
        Model::validateRequired('stats', $this->stats, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->device) {
            $res['Device'] = $this->device;
        }
        if (null !== $this->major) {
            $res['Major'] = $this->major;
        }
        if (null !== $this->minor) {
            $res['Minor'] = $this->minor;
        }
        if (null !== $this->stats) {
            $res['Stats'] = $this->stats;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sectors
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Device'])) {
            $model->device = $map['Device'];
        }
        if (isset($map['Major'])) {
            $model->major = $map['Major'];
        }
        if (isset($map['Minor'])) {
            $model->minor = $map['Minor'];
        }
        if (isset($map['Stats'])) {
            $model->stats = $map['Stats'];
        }

        return $model;
    }
}
