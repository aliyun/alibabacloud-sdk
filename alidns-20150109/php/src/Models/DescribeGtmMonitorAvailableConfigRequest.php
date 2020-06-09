<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeGtmMonitorAvailableConfigRequest extends Model {
    protected $_name = [
        'lang' => 'Lang',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['Lang'] = $this->lang;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeGtmMonitorAvailableConfigRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Lang'])){
            $model->lang = $map['Lang'];
        }
        return $model;
    }
    /**
     * @description lang
     * @var string
     */
    public $lang;

}
