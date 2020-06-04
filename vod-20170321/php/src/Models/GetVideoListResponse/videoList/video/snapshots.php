<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetVideoListResponse\videoList\video;

use AlibabaCloud\Tea\Model;

class snapshots extends Model {
    protected $_name = [
        'snapshot' => 'Snapshot',
    ];
    public function validate() {
        Model::validateRequired('snapshot', $this->snapshot, true);
    }
    public function toMap() {
        $res = [];
        $res['Snapshot'] = [];
        if(null !== $this->snapshot){
            $res['Snapshot'] = $this->snapshot;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return snapshots
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Snapshot'])){
            if(!empty($map['Snapshot'])){
                $model->snapshot = [];
                $model->snapshot = $map['Snapshot'];
            }
        }
        return $model;
    }
    /**
     * @description Snapshot
     * @var array
     */
    public $snapshot;

}
