<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeUpgradeVersionResponse\version;
use AlibabaCloud\Tea\Model;

class DescribeUpgradeVersionResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var version
     */
    public $version;
    protected $_name = [
        'requestId' => 'RequestId',
        'version'   => 'Version',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('version', $this->version, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->version) {
            $res['Version'] = null !== $this->version ? $this->version->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUpgradeVersionResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Version'])) {
            $model->version = version::fromMap($map['Version']);
        }

        return $model;
    }
}
