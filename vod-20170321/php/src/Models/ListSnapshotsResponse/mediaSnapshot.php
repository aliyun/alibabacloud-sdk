<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\ListSnapshotsResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\ListSnapshotsResponse\mediaSnapshot\snapshots;

class mediaSnapshot extends Model {
    protected $_name = [
        'total' => 'Total',
        'regular' => 'Regular',
        'creationTime' => 'CreationTime',
        'jobId' => 'JobId',
        'snapshots' => 'Snapshots',
    ];
    public function validate() {
        Model::validateRequired('total', $this->total, true);
        Model::validateRequired('regular', $this->regular, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('jobId', $this->jobId, true);
        Model::validateRequired('snapshots', $this->snapshots, true);
    }
    public function toMap() {
        $res = [];
        $res['Total'] = $this->total;
        $res['Regular'] = $this->regular;
        $res['CreationTime'] = $this->creationTime;
        $res['JobId'] = $this->jobId;
        $res['Snapshots'] = null !== $this->snapshots ? $this->snapshots->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return mediaSnapshot
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Total'])){
            $model->total = $map['Total'];
        }
        if(isset($map['Regular'])){
            $model->regular = $map['Regular'];
        }
        if(isset($map['CreationTime'])){
            $model->creationTime = $map['CreationTime'];
        }
        if(isset($map['JobId'])){
            $model->jobId = $map['JobId'];
        }
        if(isset($map['Snapshots'])){
            $model->snapshots = snapshots::fromMap($map['Snapshots']);
        }
        return $model;
    }
    /**
     * @description total
     * @var integer
     */
    public $total;

    /**
     * @description regular
     * @var string
     */
    public $regular;

    /**
     * @description creationTime
     * @var string
     */
    public $creationTime;

    /**
     * @description jobId
     * @var string
     */
    public $jobId;

    /**
     * @description snapshots
     * @var snapshots
     */
    public $snapshots;

}
