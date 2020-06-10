<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleTargetListResponse\webhookParameters;

use AlibabaCloud\Tea\Model;

class webhookParameter extends Model
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
     * @description method
     *
     * @var string
     */
    public $method;

    /**
     * @description url
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'id'       => 'Id',
        'protocol' => 'Protocol',
        'method'   => 'Method',
        'url'      => 'Url',
    ];

    public function validate()
    {
        Model::validateRequired('id', $this->id, true);
        Model::validateRequired('protocol', $this->protocol, true);
        Model::validateRequired('method', $this->method, true);
        Model::validateRequired('url', $this->url, true);
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
        if (null !== $this->method) {
            $res['Method'] = $this->method;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return webhookParameter
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
        if (isset($map['Method'])) {
            $model->method = $map['Method'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
