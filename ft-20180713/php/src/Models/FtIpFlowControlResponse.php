<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Ft\V20180713\Models;

use AlibabaCloud\Tea\Model;

class FtIpFlowControlResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'name' => 'Name',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('name', $this->name, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['Name'] = $this->name;
        return $res;
    }
    /**
     * @param array $map
     * @return FtIpFlowControlResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['Name'])){
            $model->name = $map['Name'];
        }
        return $model;
    }
    /**
     * @description Params.requestId
     * @var string
     */
    public $requestId;

    /**
     * @description Params.name
     * @var string
     */
    public $name;

}
