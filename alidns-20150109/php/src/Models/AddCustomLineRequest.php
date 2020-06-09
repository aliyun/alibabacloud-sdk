<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Alidns\V20150109\Models\AddCustomLineRequest\ipSegment;

class AddCustomLineRequest extends Model {
    protected $_name = [
        'lang' => 'Lang',
        'domainName' => 'DomainName',
        'lineName' => 'LineName',
        'ipSegment' => 'IpSegment',
    ];
    public function validate() {
        Model::validateRequired('domainName', $this->domainName, true);
        Model::validateRequired('lineName', $this->lineName, true);
        Model::validateRequired('ipSegment', $this->ipSegment, true);
    }
    public function toMap() {
        $res = [];
        $res['Lang'] = $this->lang;
        $res['DomainName'] = $this->domainName;
        $res['LineName'] = $this->lineName;
        $res['IpSegment'] = [];
        if(null !== $this->ipSegment && is_array($this->ipSegment)){
            $n = 0;
            foreach($this->ipSegment as $item){
                $res['IpSegment'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return AddCustomLineRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Lang'])){
            $model->lang = $map['Lang'];
        }
        if(isset($map['DomainName'])){
            $model->domainName = $map['DomainName'];
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
        return $model;
    }
    /**
     * @description lang
     * @var string
     */
    public $lang;

    /**
     * @description domainName
     * @var string
     */
    public $domainName;

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

}
