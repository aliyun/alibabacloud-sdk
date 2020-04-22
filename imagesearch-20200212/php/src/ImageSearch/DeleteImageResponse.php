<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20200212\ImageSearch;

use AlibabaCloud\Tea\Model;

class DeleteImageResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description success
     *
     * @var bool
     */
    public $success;

    /**
     * @description msg
     *
     * @var string
     */
    public $message;

    /**
     * @description code
     *
     * @var int
     */
    public $code;
    protected $_name = [
        'requestId' => 'RequestId',
        'success'   => 'Success',
        'message'   => 'Message',
        'code'      => 'Code',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('success', $this->success, true);
        Model::validateRequired('message', $this->message, true);
        Model::validateRequired('code', $this->code, true);
    }

    public function toMap()
    {
        $res              = [];
        $res['RequestId'] = $this->requestId;
        $res['Success']   = $this->success;
        $res['Message']   = $this->message;
        $res['Code']      = $this->code;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteImageResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}
