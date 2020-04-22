<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\DescribeContainerGroupMetricResponse\records;

use AlibabaCloud\Tea\Model;

class memory extends Model
{
    /**
     * @description availableBytes
     *
     * @var int
     */
    public $availableBytes;

    /**
     * @description usageBytes
     *
     * @var int
     */
    public $usageBytes;

    /**
     * @description cache
     *
     * @var int
     */
    public $cache;

    /**
     * @description workingSet
     *
     * @var int
     */
    public $workingSet;

    /**
     * @description rss
     *
     * @var int
     */
    public $rss;
    protected $_name = [
        'availableBytes' => 'AvailableBytes',
        'usageBytes'     => 'UsageBytes',
        'cache'          => 'Cache',
        'workingSet'     => 'WorkingSet',
        'rss'            => 'Rss',
    ];

    public function validate()
    {
        Model::validateRequired('availableBytes', $this->availableBytes, true);
        Model::validateRequired('usageBytes', $this->usageBytes, true);
        Model::validateRequired('cache', $this->cache, true);
        Model::validateRequired('workingSet', $this->workingSet, true);
        Model::validateRequired('rss', $this->rss, true);
    }

    public function toMap()
    {
        $res                   = [];
        $res['AvailableBytes'] = $this->availableBytes;
        $res['UsageBytes']     = $this->usageBytes;
        $res['Cache']          = $this->cache;
        $res['WorkingSet']     = $this->workingSet;
        $res['Rss']            = $this->rss;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return memory
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvailableBytes'])) {
            $model->availableBytes = $map['AvailableBytes'];
        }
        if (isset($map['UsageBytes'])) {
            $model->usageBytes = $map['UsageBytes'];
        }
        if (isset($map['Cache'])) {
            $model->cache = $map['Cache'];
        }
        if (isset($map['WorkingSet'])) {
            $model->workingSet = $map['WorkingSet'];
        }
        if (isset($map['Rss'])) {
            $model->rss = $map['Rss'];
        }

        return $model;
    }
}
