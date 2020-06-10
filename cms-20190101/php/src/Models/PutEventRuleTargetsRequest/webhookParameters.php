<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\PutEventRuleTargetsRequest;

use AlibabaCloud\Tea\Model;

class webhookParameters extends Model
{
    /**
     * @description id
     *
     * @var string
     */
    public $id;

    /**
     * @description protocol
     *
     * @var string
     */
    public $protocol;

    /**
     * @description url
     *
     * @var string
     */
    public $url;

    /**
     * @description method
     *
     * @var string
     */
    public $method;
    protected $_name = [
        'id'       => 'Id',
        'protocol' => 'Protocol',
        'url'      => 'Url',
        'method'   => 'Method',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }
        if (null !== $this->method) {
            $res['Method'] = $this->method;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return webhookParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['Method'])) {
            $model->method = $map['Method'];
        }

        return $model;
    }
}
