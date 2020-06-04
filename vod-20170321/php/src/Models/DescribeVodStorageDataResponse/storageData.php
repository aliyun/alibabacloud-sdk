<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodStorageDataResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodStorageDataResponse\storageData\storageDataItem;

class storageData extends Model {
    protected $_name = [
        'storageDataItem' => 'StorageDataItem',
    ];
    public function validate() {
        Model::validateRequired('storageDataItem', $this->storageDataItem, true);
    }
    public function toMap() {
        $res = [];
        $res['StorageDataItem'] = [];
        if(null !== $this->storageDataItem && is_array($this->storageDataItem)){
            $n = 0;
            foreach($this->storageDataItem as $item){
                $res['StorageDataItem'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return storageData
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['StorageDataItem'])){
            if(!empty($map['StorageDataItem'])){
                $model->storageDataItem = [];
                $n = 0;
                foreach($map['StorageDataItem'] as $item) {
                    $model->storageDataItem[$n++] = null !== $item ? storageDataItem::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description StorageDataItem
     * @var array
     */
    public $storageDataItem;

}
