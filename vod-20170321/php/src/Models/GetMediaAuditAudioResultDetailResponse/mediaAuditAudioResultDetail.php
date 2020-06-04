<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditAudioResultDetailResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditAudioResultDetailResponse\mediaAuditAudioResultDetail\list_;

class mediaAuditAudioResultDetail extends Model {
    protected $_name = [
        'total' => 'Total',
        'pageTotal' => 'PageTotal',
        'list' => 'List',
    ];
    public function validate() {
        Model::validateRequired('total', $this->total, true);
        Model::validateRequired('pageTotal', $this->pageTotal, true);
        Model::validateRequired('list', $this->list, true);
    }
    public function toMap() {
        $res = [];
        $res['Total'] = $this->total;
        $res['PageTotal'] = $this->pageTotal;
        $res['List'] = [];
        if(null !== $this->list && is_array($this->list)){
            $n = 0;
            foreach($this->list as $item){
                $res['List'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return mediaAuditAudioResultDetail
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Total'])){
            $model->total = $map['Total'];
        }
        if(isset($map['PageTotal'])){
            $model->pageTotal = $map['PageTotal'];
        }
        if(isset($map['List'])){
            if(!empty($map['List'])){
                $model->list = [];
                $n = 0;
                foreach($map['List'] as $item) {
                    $model->list[$n++] = null !== $item ? list_::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description total
     * @var integer
     */
    public $total;

    /**
     * @description pageTotal
     * @var integer
     */
    public $pageTotal;

    /**
     * @description list
     * @var array
     */
    public $list;

}
