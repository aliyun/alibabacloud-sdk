<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Ft\V20180713\Models;

use AlibabaCloud\Tea\Model;

class FtIpFlowControlRequest extends Model {
    protected $_name = [
        'name' => 'Name',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['Name'] = $this->name;
        return $res;
    }
    /**
     * @param array $map
     * @return FtIpFlowControlRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Name'])){
            $model->name = $map['Name'];
        }
        return $model;
    }
    /**
     * @description name
     * @var string
     */
    public $name;

}
