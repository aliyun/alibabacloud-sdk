<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSQLLogReportListResponse\items\item\latencyTopNItems;

use AlibabaCloud\Tea\Model;

class latencyTopNItem extends Model {
    protected $_name = [
        'SQLText' => 'SQLText',
        'avgLatency' => 'AvgLatency',
        'SQLExecuteTimes' => 'SQLExecuteTimes',
    ];
    public function validate() {
        Model::validateRequired('SQLText', $this->SQLText, true);
        Model::validateRequired('avgLatency', $this->avgLatency, true);
        Model::validateRequired('SQLExecuteTimes', $this->SQLExecuteTimes, true);
    }
    public function toMap() {
        $res = [];
        $res['SQLText'] = $this->SQLText;
        $res['AvgLatency'] = $this->avgLatency;
        $res['SQLExecuteTimes'] = $this->SQLExecuteTimes;
        return $res;
    }
    /**
     * @param array $map
     * @return latencyTopNItem
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['SQLText'])){
            $model->SQLText = $map['SQLText'];
        }
        if(isset($map['AvgLatency'])){
            $model->avgLatency = $map['AvgLatency'];
        }
        if(isset($map['SQLExecuteTimes'])){
            $model->SQLExecuteTimes = $map['SQLExecuteTimes'];
        }
        return $model;
    }
    /**
     * @description sqlText
     * @var string
     */
    public $SQLText;

    /**
     * @description avgLatency
     * @var integer
     */
    public $avgLatency;

    /**
     * @description sqlExecuteTimes
     * @var integer
     */
    public $SQLExecuteTimes;

}
