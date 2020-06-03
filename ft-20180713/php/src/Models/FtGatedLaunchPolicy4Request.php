<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Ft\V20180713\Models;

use AlibabaCloud\Tea\Model;

class FtGatedLaunchPolicy4Request extends Model {
    protected $_name = [
        'isGatedLaunch' => 'IsGatedLaunch',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['IsGatedLaunch'] = $this->isGatedLaunch;
        return $res;
    }
    /**
     * @param array $map
     * @return FtGatedLaunchPolicy4Request
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['IsGatedLaunch'])){
            $model->isGatedLaunch = $map['IsGatedLaunch'];
        }
        return $model;
    }
    /**
     * @description isGatedLaunch
     * @var string
     */
    public $isGatedLaunch;

}
