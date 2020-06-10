<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodStorageDataResponse\storageData;

use AlibabaCloud\Tea\Model;

class storageDataItem extends Model
{
    /**
     * @description time_stp
     *
     * @var string
     */
    public $timeStamp;

    /**
     * @description storage_utilization
     *
     * @var string
     */
    public $storageUtilization;

    /**
     * @description network_out
     *
     * @var string
     */
    public $networkOut;
    protected $_name = [
        'timeStamp'          => 'TimeStamp',
        'storageUtilization' => 'StorageUtilization',
        'networkOut'         => 'NetworkOut',
    ];

    public function validate()
    {
        Model::validateRequired('timeStamp', $this->timeStamp, true);
        Model::validateRequired('storageUtilization', $this->storageUtilization, true);
        Model::validateRequired('networkOut', $this->networkOut, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }
        if (null !== $this->storageUtilization) {
            $res['StorageUtilization'] = $this->storageUtilization;
        }
        if (null !== $this->networkOut) {
            $res['NetworkOut'] = $this->networkOut;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return storageDataItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }
        if (isset($map['StorageUtilization'])) {
            $model->storageUtilization = $map['StorageUtilization'];
        }
        if (isset($map['NetworkOut'])) {
            $model->networkOut = $map['NetworkOut'];
        }

        return $model;
    }
}
