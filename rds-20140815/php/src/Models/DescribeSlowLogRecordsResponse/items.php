<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSlowLogRecordsResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSlowLogRecordsResponse\items\SQLSlowRecord;

class items extends Model {
    protected $_name = [
        'SQLSlowRecord' => 'SQLSlowRecord',
    ];
    public function validate() {
        Model::validateRequired('SQLSlowRecord', $this->SQLSlowRecord, true);
    }
    public function toMap() {
        $res = [];
        $res['SQLSlowRecord'] = [];
        if(null !== $this->SQLSlowRecord && is_array($this->SQLSlowRecord)){
            $n = 0;
            foreach($this->SQLSlowRecord as $item){
                $res['SQLSlowRecord'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return items
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['SQLSlowRecord'])){
            if(!empty($map['SQLSlowRecord'])){
                $model->SQLSlowRecord = [];
                $n = 0;
                foreach($map['SQLSlowRecord'] as $item) {
                    $model->SQLSlowRecord[$n++] = null !== $item ? SQLSlowRecord::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description SQLSlowRecord
     * @var array
     */
    public $SQLSlowRecord;

}
