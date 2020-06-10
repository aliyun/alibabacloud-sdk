<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models;

use AlibabaCloud\Tea\Model;

class GetDeviceLiveUrlResponse extends Model
{
    /**
     * @description code
     *
     * @var string
     */
    public $code;

    /**
     * @description data
     *
     * @var string
     */
    public $url;

    /**
     * @description message
     *
     * @var string
     */
    public $message;

    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'      => 'Code',
        'url'       => 'Url',
        'message'   => 'Message',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('url', $this->url, true);
        Model::validateRequired('message', $this->message, true);
        Model::validateRequired('requestId', $this->requestId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDeviceLiveUrlResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
