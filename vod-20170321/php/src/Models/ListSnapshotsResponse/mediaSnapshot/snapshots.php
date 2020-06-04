<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\ListSnapshotsResponse\mediaSnapshot;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\ListSnapshotsResponse\mediaSnapshot\snapshots\snapshot;

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
        if(null !== $this->snapshot && is_array($this->snapshot)){
            $n = 0;
            foreach($this->snapshot as $item){
                $res['Snapshot'][$n++] = null !== $item ? $item->toMap() : $item;
            }
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
                $n = 0;
                foreach($map['Snapshot'] as $item) {
                    $model->snapshot[$n++] = null !== $item ? snapshot::fromMap($item) : $item;
                }
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
