<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models\ListAccessKeysResponse\accessKeys;

use AlibabaCloud\Tea\Model;

class accessKey extends Model
{
    /**
     * @description AccessKeyId
     *
     * @var string
     */
    public $accessKeyId;

    /**
     * @description Status
     *
     * @var string
     */
    public $status;

    /**
     * @description CreateDate
     *
     * @var string
     */
    public $createDate;
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'status'      => 'Status',
        'createDate'  => 'CreateDate',
    ];

    public function validate()
    {
        Model::validateRequired('accessKeyId', $this->accessKeyId, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('createDate', $this->createDate, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessKeyId) {
            $res['AccessKeyId'] = $this->accessKeyId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accessKey
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessKeyId'])) {
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }

        return $model;
    }
}
