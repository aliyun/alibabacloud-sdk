<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemsResponse\fileSystems\fileSystem;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemsResponse\fileSystems\fileSystem\packages\package;

class packages extends Model {
    protected $_name = [
        'package' => 'Package',
    ];
    public function validate() {
        Model::validateRequired('package', $this->package, true);
    }
    public function toMap() {
        $res = [];
        $res['Package'] = [];
        if(null !== $this->package && is_array($this->package)){
            $n = 0;
            foreach($this->package as $item){
                $res['Package'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return packages
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Package'])){
            if(!empty($map['Package'])){
                $model->package = [];
                $n = 0;
                foreach($map['Package'] as $item) {
                    $model->package[$n++] = null !== $item ? package::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description Package
     * @var array
     */
    public $package;

}
