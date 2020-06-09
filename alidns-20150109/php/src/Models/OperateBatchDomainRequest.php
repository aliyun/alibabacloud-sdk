<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Alidns\V20150109\Models\OperateBatchDomainRequest\domainRecordInfo;

class OperateBatchDomainRequest extends Model {
    protected $_name = [
        'lang' => 'Lang',
        'type' => 'Type',
        'domainRecordInfo' => 'DomainRecordInfo',
    ];
    public function validate() {
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('domainRecordInfo', $this->domainRecordInfo, true);
    }
    public function toMap() {
        $res = [];
        $res['Lang'] = $this->lang;
        $res['Type'] = $this->type;
        $res['DomainRecordInfo'] = [];
        if(null !== $this->domainRecordInfo && is_array($this->domainRecordInfo)){
            $n = 0;
            foreach($this->domainRecordInfo as $item){
                $res['DomainRecordInfo'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return OperateBatchDomainRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Lang'])){
            $model->lang = $map['Lang'];
        }
        if(isset($map['Type'])){
            $model->type = $map['Type'];
        }
        if(isset($map['DomainRecordInfo'])){
            if(!empty($map['DomainRecordInfo'])){
                $model->domainRecordInfo = [];
                $n = 0;
                foreach($map['DomainRecordInfo'] as $item) {
                    $model->domainRecordInfo[$n++] = null !== $item ? domainRecordInfo::fromMap($item) : $item;
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
     * @description type
     * @var string
     */
    public $type;

    /**
     * @description data
     * @var array
     */
    public $domainRecordInfo;

}
