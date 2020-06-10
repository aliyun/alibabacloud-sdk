<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\ListSnapshotsResponse;

use AlibabaCloud\SDK\Vod\V20170321\Models\ListSnapshotsResponse\mediaSnapshot\snapshots;
use AlibabaCloud\Tea\Model;

class mediaSnapshot extends Model
{
    /**
     * @description total
     *
     * @var int
     */
    public $total;

    /**
     * @description regular
     *
     * @var string
     */
    public $regular;

    /**
     * @description creationTime
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description jobId
     *
     * @var string
     */
    public $jobId;

    /**
     * @description snapshots
     *
     * @var snapshots
     */
    public $snapshots;
    protected $_name = [
        'total'        => 'Total',
        'regular'      => 'Regular',
        'creationTime' => 'CreationTime',
        'jobId'        => 'JobId',
        'snapshots'    => 'Snapshots',
    ];

    public function validate()
    {
        Model::validateRequired('total', $this->total, true);
        Model::validateRequired('regular', $this->regular, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('jobId', $this->jobId, true);
        Model::validateRequired('snapshots', $this->snapshots, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->regular) {
            $res['Regular'] = $this->regular;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->snapshots) {
            $res['Snapshots'] = null !== $this->snapshots ? $this->snapshots->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mediaSnapshot
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['Regular'])) {
            $model->regular = $map['Regular'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Snapshots'])) {
            $model->snapshots = snapshots::fromMap($map['Snapshots']);
        }

        return $model;
    }
}
