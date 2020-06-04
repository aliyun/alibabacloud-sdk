<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponse\monitorDatas\containerInfos\containerStats\memoryStats;

use AlibabaCloud\Tea\Model;

class hierarchicalData extends Model {
    protected $_name = [
        'pgFault' => 'PgFault',
        'pgmajFault' => 'PgmajFault',
    ];
    public function validate() {
        Model::validateRequired('pgFault', $this->pgFault, true);
        Model::validateRequired('pgmajFault', $this->pgmajFault, true);
    }
    public function toMap() {
        $res = [];
        $res['PgFault'] = $this->pgFault;
        $res['PgmajFault'] = $this->pgmajFault;
        return $res;
    }
    /**
     * @param array $map
     * @return hierarchicalData
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['PgFault'])){
            $model->pgFault = $map['PgFault'];
        }
        if(isset($map['PgmajFault'])){
            $model->pgmajFault = $map['PgmajFault'];
        }
        return $model;
    }
    /**
     * @description pgFault
     * @var integer
     */
    public $pgFault;

    /**
     * @description pgmajFault
     * @var integer
     */
    public $pgmajFault;

}
