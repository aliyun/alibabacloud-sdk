<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeSupportLinesResponse\recordLines;
use AlibabaCloud\Tea\Model;

class DescribeSupportLinesResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description module
     *
     * @var recordLines
     */
    public $recordLines;
    protected $_name = [
        'requestId'   => 'RequestId',
        'recordLines' => 'RecordLines',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('recordLines', $this->recordLines, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->recordLines) {
            $res['RecordLines'] = null !== $this->recordLines ? $this->recordLines->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSupportLinesResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RecordLines'])) {
            $model->recordLines = recordLines::fromMap($map['RecordLines']);
        }

        return $model;
    }
}
