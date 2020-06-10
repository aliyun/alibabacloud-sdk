<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\SDK\Ram\V20150501\Models\ListPoliciesResponse\policies;
use AlibabaCloud\Tea\Model;

class ListPoliciesResponse extends Model
{
    /**
     * @description RequestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description IsTruncated
     *
     * @var bool
     */
    public $isTruncated;

    /**
     * @description Marker
     *
     * @var string
     */
    public $marker;

    /**
     * @description Policies
     *
     * @var policies
     */
    public $policies;
    protected $_name = [
        'requestId'   => 'RequestId',
        'isTruncated' => 'IsTruncated',
        'marker'      => 'Marker',
        'policies'    => 'Policies',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('isTruncated', $this->isTruncated, true);
        Model::validateRequired('marker', $this->marker, true);
        Model::validateRequired('policies', $this->policies, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->isTruncated) {
            $res['IsTruncated'] = $this->isTruncated;
        }
        if (null !== $this->marker) {
            $res['Marker'] = $this->marker;
        }
        if (null !== $this->policies) {
            $res['Policies'] = null !== $this->policies ? $this->policies->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPoliciesResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['IsTruncated'])) {
            $model->isTruncated = $map['IsTruncated'];
        }
        if (isset($map['Marker'])) {
            $model->marker = $map['Marker'];
        }
        if (isset($map['Policies'])) {
            $model->policies = policies::fromMap($map['Policies']);
        }

        return $model;
    }
}
