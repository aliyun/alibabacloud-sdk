<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponse\monitorDatas\containerInfos\containerStats\diskIoStats;

use AlibabaCloud\Tea\Model;

class ioQueued extends Model {
    protected $_name = [
        'device' => 'Device',
        'major' => 'Major',
        'minor' => 'Minor',
        'stats' => 'Stats',
    ];
    public function validate() {
        Model::validateRequired('device', $this->device, true);
        Model::validateRequired('major', $this->major, true);
        Model::validateRequired('minor', $this->minor, true);
        Model::validateRequired('stats', $this->stats, true);
    }
    public function toMap() {
        $res = [];
        $res['Device'] = $this->device;
        $res['Major'] = $this->major;
        $res['Minor'] = $this->minor;
        $res['Stats'] = $this->stats;
        return $res;
    }
    /**
     * @param array $map
     * @return ioQueued
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Device'])){
            $model->device = $map['Device'];
        }
        if(isset($map['Major'])){
            $model->major = $map['Major'];
        }
        if(isset($map['Minor'])){
            $model->minor = $map['Minor'];
        }
        if(isset($map['Stats'])){
            $model->stats = $map['Stats'];
        }
        return $model;
    }
    /**
     * @description device
     * @var string
     */
    public $device;

    /**
     * @description major
     * @var integer
     */
    public $major;

    /**
     * @description minor
     * @var integer
     */
    public $minor;

    /**
     * @description statsForPop
     * @var string
     */
    public $stats;

}
