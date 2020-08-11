<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponse\instances\instance;

use AlibabaCloud\Tea\Model;

class metadataOptions extends Model
{
    /**
     * @var string
     */
    public $httpEndpoint;

    /**
     * @var string
     */
    public $httpTokens;

    /**
     * @var int
     */
    public $httpPutResponseHopLimit;
    protected $_name = [
        'httpEndpoint'            => 'HttpEndpoint',
        'httpTokens'              => 'HttpTokens',
        'httpPutResponseHopLimit' => 'HttpPutResponseHopLimit',
    ];

    public function validate()
    {
        Model::validateRequired('httpEndpoint', $this->httpEndpoint, true);
        Model::validateRequired('httpTokens', $this->httpTokens, true);
        Model::validateRequired('httpPutResponseHopLimit', $this->httpPutResponseHopLimit, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->httpEndpoint) {
            $res['HttpEndpoint'] = $this->httpEndpoint;
        }
        if (null !== $this->httpTokens) {
            $res['HttpTokens'] = $this->httpTokens;
        }
        if (null !== $this->httpPutResponseHopLimit) {
            $res['HttpPutResponseHopLimit'] = $this->httpPutResponseHopLimit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metadataOptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HttpEndpoint'])) {
            $model->httpEndpoint = $map['HttpEndpoint'];
        }
        if (isset($map['HttpTokens'])) {
            $model->httpTokens = $map['HttpTokens'];
        }
        if (isset($map['HttpPutResponseHopLimit'])) {
            $model->httpPutResponseHopLimit = $map['HttpPutResponseHopLimit'];
        }

        return $model;
    }
}
