<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiHistoryResponse\serviceConfig\mockHeaders;

use AlibabaCloud\Tea\Model;

class mockHeader extends Model
{
    /**
     * @description headerName
     *
     * @var string
     */
    public $headerName;

    /**
     * @description headerValue
     *
     * @var string
     */
    public $headerValue;
    protected $_name = [
        'headerName'  => 'HeaderName',
        'headerValue' => 'HeaderValue',
    ];

    public function validate()
    {
        Model::validateRequired('headerName', $this->headerName, true);
        Model::validateRequired('headerValue', $this->headerValue, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->headerName) {
            $res['HeaderName'] = $this->headerName;
        }
        if (null !== $this->headerValue) {
            $res['HeaderValue'] = $this->headerValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mockHeader
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HeaderName'])) {
            $model->headerName = $map['HeaderName'];
        }
        if (isset($map['HeaderValue'])) {
            $model->headerValue = $map['HeaderValue'];
        }

        return $model;
    }
}
