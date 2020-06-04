<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobResponse\mediaAuditJob\data\videoResult\liveResult;

use AlibabaCloud\Tea\Model;

class counterList extends Model {
    protected $_name = [
        'label' => 'Label',
        'count' => 'Count',
    ];
    public function validate() {
        Model::validateRequired('label', $this->label, true);
        Model::validateRequired('count', $this->count, true);
    }
    public function toMap() {
        $res = [];
        $res['Label'] = $this->label;
        $res['Count'] = $this->count;
        return $res;
    }
    /**
     * @param array $map
     * @return counterList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Label'])){
            $model->label = $map['Label'];
        }
        if(isset($map['Count'])){
            $model->count = $map['Count'];
        }
        return $model;
    }
    /**
     * @description label
     * @var string
     */
    public $label;

    /**
     * @description count
     * @var integer
     */
    public $count;

}
