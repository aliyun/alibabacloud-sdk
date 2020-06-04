<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class UpgradeClusterBody extends Model {
    protected $_name = [
        'version' => 'version',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['version'] = $this->version;
        return $res;
    }
    /**
     * @param array $map
     * @return UpgradeClusterBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['version'])){
            $model->version = $map['version'];
        }
        return $model;
    }
    /**
     * @description version
     * @var string
     */
    public $version;

}
