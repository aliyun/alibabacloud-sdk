<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDetachedBackupsResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDetachedBackupsResponse\items\backup;

class items extends Model {
    protected $_name = [
        'backup' => 'Backup',
    ];
    public function validate() {
        Model::validateRequired('backup', $this->backup, true);
    }
    public function toMap() {
        $res = [];
        $res['Backup'] = [];
        if(null !== $this->backup && is_array($this->backup)){
            $n = 0;
            foreach($this->backup as $item){
                $res['Backup'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return items
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Backup'])){
            if(!empty($map['Backup'])){
                $model->backup = [];
                $n = 0;
                foreach($map['Backup'] as $item) {
                    $model->backup[$n++] = null !== $item ? backup::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description Backup
     * @var array
     */
    public $backup;

}
