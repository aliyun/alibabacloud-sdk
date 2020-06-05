<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\Tea\Model;

class UpdateAccessKeyRequest extends Model {
    protected $_name = [
        'userName' => 'UserName',
        'userAccessKeyId' => 'UserAccessKeyId',
        'status' => 'Status',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['UserName'] = $this->userName;
        $res['UserAccessKeyId'] = $this->userAccessKeyId;
        $res['Status'] = $this->status;
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateAccessKeyRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['UserName'])){
            $model->userName = $map['UserName'];
        }
        if(isset($map['UserAccessKeyId'])){
            $model->userAccessKeyId = $map['UserAccessKeyId'];
        }
        if(isset($map['Status'])){
            $model->status = $map['Status'];
        }
        return $model;
    }
    /**
     * @description UserName
     * @var string
     */
    public $userName;

    /**
     * @description UserAccessKeyId
     * @var string
     */
    public $userAccessKeyId;

    /**
     * @description Status
     * @var string
     */
    public $status;

}
