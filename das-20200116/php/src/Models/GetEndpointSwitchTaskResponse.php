<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\SDK\DAS\V20200116\Models\GetEndpointSwitchTaskResponse\data;
use AlibabaCloud\Tea\Model;

class GetEndpointSwitchTaskResponse extends Model
{
    /**
     * @description Code
     *
     * @var string
     */
    public $code;

    /**
     * @description Message
     *
     * @var string
     */
    public $message;

    /**
     * @description RequestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Success
     *
     * @var string
     */
    public $success;

    /**
     * @description Synchro
     *
     * @var string
     */
    public $synchro;

    /**
     * @description Data
     *
     * @var data
     */
    public $data;
    protected $_name = [
        'code'      => 'Code',
        'message'   => 'Message',
        'requestId' => 'RequestId',
        'success'   => 'Success',
        'synchro'   => 'Synchro',
        'data'      => 'Data',
    ];

    public function validate()
    {
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('message', $this->message, true);
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('success', $this->success, true);
        Model::validateRequired('synchro', $this->synchro, true);
        Model::validateRequired('data', $this->data, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->synchro) {
            $res['Synchro'] = $this->synchro;
        }
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetEndpointSwitchTaskResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Synchro'])) {
            $model->synchro = $map['Synchro'];
        }
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }

        return $model;
    }
}
