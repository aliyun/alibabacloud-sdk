<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\CreateAgAccountResponse\agRelationDto;
use AlibabaCloud\Tea\Model;

class CreateAgAccountResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description code
     *
     * @var string
     */
    public $code;

    /**
     * @description message
     *
     * @var string
     */
    public $message;

    /**
     * @description success
     *
     * @var bool
     */
    public $success;

    /**
     * @description data
     *
     * @var agRelationDto
     */
    public $agRelationDto;
    protected $_name = [
        'requestId'     => 'RequestId',
        'code'          => 'Code',
        'message'       => 'Message',
        'success'       => 'Success',
        'agRelationDto' => 'AgRelationDto',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('message', $this->message, true);
        Model::validateRequired('success', $this->success, true);
        Model::validateRequired('agRelationDto', $this->agRelationDto, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->agRelationDto) {
            $res['AgRelationDto'] = null !== $this->agRelationDto ? $this->agRelationDto->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAgAccountResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['AgRelationDto'])) {
            $model->agRelationDto = agRelationDto::fromMap($map['AgRelationDto']);
        }

        return $model;
    }
}
