<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Ram\V20150501\Models\CreateAccessKeyResponse;

use AlibabaCloud\Tea\Model;

class accessKey extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'accessKeySecret' => 'AccessKeySecret',
        'status' => 'Status',
        'createDate' => 'CreateDate',
    ];
    public function validate() {
        Model::validateRequired('accessKeyId', $this->accessKeyId, true);
        Model::validateRequired('accessKeySecret', $this->accessKeySecret, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('createDate', $this->createDate, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['AccessKeySecret'] = $this->accessKeySecret;
        $res['Status'] = $this->status;
        $res['CreateDate'] = $this->createDate;
        return $res;
    }
    /**
     * @param array $map
     * @return accessKey
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['AccessKeyId'])){
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if(isset($map['AccessKeySecret'])){
            $model->accessKeySecret = $map['AccessKeySecret'];
        }
        if(isset($map['Status'])){
            $model->status = $map['Status'];
        }
        if(isset($map['CreateDate'])){
            $model->createDate = $map['CreateDate'];
        }
        return $model;
    }
    /**
     * @description AccessKeyId
     * @var string
     */
    public $accessKeyId;

    /**
     * @description AccessKeySecret
     * @var string
     */
    public $accessKeySecret;

    /**
     * @description Status
     * @var string
     */
    public $status;

    /**
     * @description CreateDate
     * @var string
     */
    public $createDate;

}
