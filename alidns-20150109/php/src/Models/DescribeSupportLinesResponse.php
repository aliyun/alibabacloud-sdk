<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeSupportLinesResponse\recordLines;

class DescribeSupportLinesResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'recordLines' => 'RecordLines',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('recordLines', $this->recordLines, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['RecordLines'] = null !== $this->recordLines ? $this->recordLines->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeSupportLinesResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['RecordLines'])){
            $model->recordLines = recordLines::fromMap($map['RecordLines']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description module
     * @var recordLines
     */
    public $recordLines;

}
