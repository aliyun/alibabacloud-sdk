<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Ft\V20180713\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Ft\V20180713\Models\FtParamListRequest\disk;

class FtParamListRequest extends Model {
    protected $_name = [
        'name' => 'Name',
        'disk' => 'Disk',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['Name'] = $this->name;
        $res['Disk'] = [];
        if(null !== $this->disk && is_array($this->disk)){
            $n = 0;
            foreach($this->disk as $item){
                $res['Disk'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return FtParamListRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Name'])){
            $model->name = $map['Name'];
        }
        if(isset($map['Disk'])){
            if(!empty($map['Disk'])){
                $model->disk = [];
                $n = 0;
                foreach($map['Disk'] as $item) {
                    $model->disk[$n++] = null !== $item ? disk::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description name
     * @var string
     */
    public $name;

    /**
     * @description disks
     * @var array
     */
    public $disk;

}
