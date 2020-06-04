<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultResponse\mediaAuditResult\videoResult\adResult;

use AlibabaCloud\Tea\Model;

class counterList extends Model {
    protected $_name = [
        'count' => 'Count',
        'label' => 'Label',
    ];
    public function validate() {
        Model::validateRequired('count', $this->count, true);
        Model::validateRequired('label', $this->label, true);
    }
    public function toMap() {
        $res = [];
        $res['Count'] = $this->count;
        $res['Label'] = $this->label;
        return $res;
    }
    /**
     * @param array $map
     * @return counterList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Count'])){
            $model->count = $map['Count'];
        }
        if(isset($map['Label'])){
            $model->label = $map['Label'];
        }
        return $model;
    }
    /**
     * @description count
     * @var integer
     */
    public $count;

    /**
     * @description label
     * @var string
     */
    public $label;

}
