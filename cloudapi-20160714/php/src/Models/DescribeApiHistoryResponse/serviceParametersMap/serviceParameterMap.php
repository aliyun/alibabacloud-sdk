<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiHistoryResponse\serviceParametersMap;

use AlibabaCloud\Tea\Model;

class serviceParameterMap extends Model
{
    /**
     * @description serviceParameterName
     *
     * @var string
     */
    public $serviceParameterName;

    /**
     * @description requestParameterName
     *
     * @var string
     */
    public $requestParameterName;
    protected $_name = [
        'serviceParameterName' => 'ServiceParameterName',
        'requestParameterName' => 'RequestParameterName',
    ];

    public function validate()
    {
        Model::validateRequired('serviceParameterName', $this->serviceParameterName, true);
        Model::validateRequired('requestParameterName', $this->requestParameterName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serviceParameterName) {
            $res['ServiceParameterName'] = $this->serviceParameterName;
        }
        if (null !== $this->requestParameterName) {
            $res['RequestParameterName'] = $this->requestParameterName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serviceParameterMap
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServiceParameterName'])) {
            $model->serviceParameterName = $map['ServiceParameterName'];
        }
        if (isset($map['RequestParameterName'])) {
            $model->requestParameterName = $map['RequestParameterName'];
        }

        return $model;
    }
}
