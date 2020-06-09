<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainRecordsResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainRecordsResponse\domainRecords\record;

class domainRecords extends Model {
    protected $_name = [
        'record' => 'Record',
    ];
    public function validate() {
        Model::validateRequired('record', $this->record, true);
    }
    public function toMap() {
        $res = [];
        $res['Record'] = [];
        if(null !== $this->record && is_array($this->record)){
            $n = 0;
            foreach($this->record as $item){
                $res['Record'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return domainRecords
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Record'])){
            if(!empty($map['Record'])){
                $model->record = [];
                $n = 0;
                foreach($map['Record'] as $item) {
                    $model->record[$n++] = null !== $item ? record::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description Record
     * @var array
     */
    public $record;

}
