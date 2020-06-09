<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CreateDiagnosticReportResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'reportId' => 'ReportId',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('reportId', $this->reportId, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['ReportId'] = $this->reportId;
        return $res;
    }
    /**
     * @param array $map
     * @return CreateDiagnosticReportResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['ReportId'])){
            $model->reportId = $map['ReportId'];
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.reportId
     * @var string
     */
    public $reportId;

}
