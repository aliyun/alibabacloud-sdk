<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudwifipop\V20191118\Models;

use AlibabaCloud\Tea\Model;

class GetApgroupSsidConfigResponse extends Model
{
    /**
     * @description success
     *
     * @var bool
     */
    public $isSuccess;

    /**
     * @description errorCode
     *
     * @var int
     */
    public $errorCode;

    /**
     * @description errorMsg
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description data
     *
     * @var array
     */
    public $data;
    protected $_name = [
        'isSuccess'    => 'IsSuccess',
        'errorCode'    => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'data'         => 'Data',
    ];

    public function validate()
    {
        Model::validateRequired('isSuccess', $this->isSuccess, true);
        Model::validateRequired('errorCode', $this->errorCode, true);
        Model::validateRequired('errorMessage', $this->errorMessage, true);
        Model::validateRequired('data', $this->data, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isSuccess) {
            $res['IsSuccess'] = $this->isSuccess;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->data) {
            $res['Data'] = [];
            if (null !== $this->data) {
                $res['Data'] = $this->data;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetApgroupSsidConfigResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsSuccess'])) {
            $model->isSuccess = $map['IsSuccess'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['Data'])) {
            if (!empty($map['Data'])) {
                $model->data = [];
                $model->data = $map['Data'];
            }
        }

        return $model;
    }
}
