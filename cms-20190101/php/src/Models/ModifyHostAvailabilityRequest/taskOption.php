<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\ModifyHostAvailabilityRequest;

use AlibabaCloud\Tea\Model;

class taskOption extends Model
{
    /**
     * @description uri
     *
     * @var string
     */
    public $httpURI;

    /**
     * @description host
     *
     * @var string
     */
    public $telnetOrPingHost;

    /**
     * @description resposeCharset
     *
     * @var string
     */
    public $httpResponseCharset;

    /**
     * @description keyword
     *
     * @var string
     */
    public $httpResponseMatchContent;

    /**
     * @description method
     *
     * @var string
     */
    public $httpMethod;

    /**
     * @description negative
     *
     * @var bool
     */
    public $httpNegative;
    protected $_name = [
        'httpURI'                  => 'HttpURI',
        'telnetOrPingHost'         => 'TelnetOrPingHost',
        'httpResponseCharset'      => 'HttpResponseCharset',
        'httpResponseMatchContent' => 'HttpResponseMatchContent',
        'httpMethod'               => 'HttpMethod',
        'httpNegative'             => 'HttpNegative',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->httpURI) {
            $res['HttpURI'] = $this->httpURI;
        }
        if (null !== $this->telnetOrPingHost) {
            $res['TelnetOrPingHost'] = $this->telnetOrPingHost;
        }
        if (null !== $this->httpResponseCharset) {
            $res['HttpResponseCharset'] = $this->httpResponseCharset;
        }
        if (null !== $this->httpResponseMatchContent) {
            $res['HttpResponseMatchContent'] = $this->httpResponseMatchContent;
        }
        if (null !== $this->httpMethod) {
            $res['HttpMethod'] = $this->httpMethod;
        }
        if (null !== $this->httpNegative) {
            $res['HttpNegative'] = $this->httpNegative;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskOption
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HttpURI'])) {
            $model->httpURI = $map['HttpURI'];
        }
        if (isset($map['TelnetOrPingHost'])) {
            $model->telnetOrPingHost = $map['TelnetOrPingHost'];
        }
        if (isset($map['HttpResponseCharset'])) {
            $model->httpResponseCharset = $map['HttpResponseCharset'];
        }
        if (isset($map['HttpResponseMatchContent'])) {
            $model->httpResponseMatchContent = $map['HttpResponseMatchContent'];
        }
        if (isset($map['HttpMethod'])) {
            $model->httpMethod = $map['HttpMethod'];
        }
        if (isset($map['HttpNegative'])) {
            $model->httpNegative = $map['HttpNegative'];
        }

        return $model;
    }
}
