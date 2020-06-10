<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiResponse;

use AlibabaCloud\Tea\Model;

class requestConfig extends Model
{
    /**
     * @description requestProtocol
     *
     * @var string
     */
    public $requestProtocol;

    /**
     * @description requestHttpMethod
     *
     * @var string
     */
    public $requestHttpMethod;

    /**
     * @description requestPath
     *
     * @var string
     */
    public $requestPath;

    /**
     * @description bodyFormat
     *
     * @var string
     */
    public $bodyFormat;

    /**
     * @description postBodyDescription
     *
     * @var string
     */
    public $postBodyDescription;

    /**
     * @description requestMode
     *
     * @var string
     */
    public $requestMode;

    /**
     * @description bodyModel
     *
     * @var string
     */
    public $bodyModel;
    protected $_name = [
        'requestProtocol'     => 'RequestProtocol',
        'requestHttpMethod'   => 'RequestHttpMethod',
        'requestPath'         => 'RequestPath',
        'bodyFormat'          => 'BodyFormat',
        'postBodyDescription' => 'PostBodyDescription',
        'requestMode'         => 'RequestMode',
        'bodyModel'           => 'BodyModel',
    ];

    public function validate()
    {
        Model::validateRequired('requestProtocol', $this->requestProtocol, true);
        Model::validateRequired('requestHttpMethod', $this->requestHttpMethod, true);
        Model::validateRequired('requestPath', $this->requestPath, true);
        Model::validateRequired('bodyFormat', $this->bodyFormat, true);
        Model::validateRequired('postBodyDescription', $this->postBodyDescription, true);
        Model::validateRequired('requestMode', $this->requestMode, true);
        Model::validateRequired('bodyModel', $this->bodyModel, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestProtocol) {
            $res['RequestProtocol'] = $this->requestProtocol;
        }
        if (null !== $this->requestHttpMethod) {
            $res['RequestHttpMethod'] = $this->requestHttpMethod;
        }
        if (null !== $this->requestPath) {
            $res['RequestPath'] = $this->requestPath;
        }
        if (null !== $this->bodyFormat) {
            $res['BodyFormat'] = $this->bodyFormat;
        }
        if (null !== $this->postBodyDescription) {
            $res['PostBodyDescription'] = $this->postBodyDescription;
        }
        if (null !== $this->requestMode) {
            $res['RequestMode'] = $this->requestMode;
        }
        if (null !== $this->bodyModel) {
            $res['BodyModel'] = $this->bodyModel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return requestConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestProtocol'])) {
            $model->requestProtocol = $map['RequestProtocol'];
        }
        if (isset($map['RequestHttpMethod'])) {
            $model->requestHttpMethod = $map['RequestHttpMethod'];
        }
        if (isset($map['RequestPath'])) {
            $model->requestPath = $map['RequestPath'];
        }
        if (isset($map['BodyFormat'])) {
            $model->bodyFormat = $map['BodyFormat'];
        }
        if (isset($map['PostBodyDescription'])) {
            $model->postBodyDescription = $map['PostBodyDescription'];
        }
        if (isset($map['RequestMode'])) {
            $model->requestMode = $map['RequestMode'];
        }
        if (isset($map['BodyModel'])) {
            $model->bodyModel = $map['BodyModel'];
        }

        return $model;
    }
}
