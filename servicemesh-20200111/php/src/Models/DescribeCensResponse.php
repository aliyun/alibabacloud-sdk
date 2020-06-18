<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class DescribeCensResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description clusters
     *
     * @var array
     */
    public $clusters;
    protected $_name = [
        'requestId' => 'RequestId',
        'clusters'  => 'Clusters',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('clusters', $this->clusters, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->clusters) {
            $res['Clusters'] = [];
            if (null !== $this->clusters) {
                $res['Clusters'] = $this->clusters;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCensResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Clusters'])) {
            if (!empty($map['Clusters'])) {
                $model->clusters = [];
                $model->clusters = $map['Clusters'];
            }
        }

        return $model;
    }
}
