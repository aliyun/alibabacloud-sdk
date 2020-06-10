<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDomainsResolutionResponse\domainResolutions;
use AlibabaCloud\Tea\Model;

class DescribeDomainsResolutionResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.groupId
     *
     * @var string
     */
    public $groupId;

    /**
     * @description data.domainNameResolutions
     *
     * @var domainResolutions
     */
    public $domainResolutions;
    protected $_name = [
        'requestId'         => 'RequestId',
        'groupId'           => 'GroupId',
        'domainResolutions' => 'DomainResolutions',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('groupId', $this->groupId, true);
        Model::validateRequired('domainResolutions', $this->domainResolutions, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->domainResolutions) {
            $res['DomainResolutions'] = null !== $this->domainResolutions ? $this->domainResolutions->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainsResolutionResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['DomainResolutions'])) {
            $model->domainResolutions = domainResolutions::fromMap($map['DomainResolutions']);
        }

        return $model;
    }
}
