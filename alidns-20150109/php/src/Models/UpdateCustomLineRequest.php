<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateCustomLineRequest\ipSegment;

class UpdateCustomLineRequest extends Model {
    protected $_name = [
        'lang' => 'Lang',
        'lineName' => 'LineName',
        'ipSegment' => 'IpSegment',
        'lineId' => 'LineId',
    ];
    public function validate() {
        Model::validateRequired('lineId', $this->lineId, true);
    }
    public function toMap() {
        $res = [];
        $res['Lang'] = $this->lang;
        $res['LineName'] = $this->lineName;
        $res['IpSegment'] = [];
        if(null !== $this->ipSegment && is_array($this->ipSegment)){
            $n = 0;
            foreach($this->ipSegment as $item){
                $res['IpSegment'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['LineId'] = $this->lineId;
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateCustomLineRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Lang'])){
            $model->lang = $map['Lang'];
        }
        if(isset($map['LineName'])){
            $model->lineName = $map['LineName'];
        }
        if(isset($map['IpSegment'])){
            if(!empty($map['IpSegment'])){
                $model->ipSegment = [];
                $n = 0;
                foreach($map['IpSegment'] as $item) {
                    $model->ipSegment[$n++] = null !== $item ? ipSegment::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['LineId'])){
            $model->lineId = $map['LineId'];
        }
        return $model;
    }
    /**
     * @description lang
     * @var string
     */
    public $lang;

    /**
     * @description lineName
     * @var string
     */
    public $lineName;

    /**
     * @description ipSegments
     * @var array
     */
    public $ipSegment;

    /**
     * @description lineId
     * @var integer
     */
    public $lineId;

}
