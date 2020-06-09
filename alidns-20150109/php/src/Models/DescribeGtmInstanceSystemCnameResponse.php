<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeGtmInstanceSystemCnameResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'systemCname' => 'SystemCname',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('systemCname', $this->systemCname, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['SystemCname'] = $this->systemCname;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeGtmInstanceSystemCnameResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['SystemCname'])){
            $model->systemCname = $map['SystemCname'];
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description module
     * @var string
     */
    public $systemCname;

}
