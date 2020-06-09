<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDiagnosticReportListResponse;

use AlibabaCloud\Tea\Model;

class reportList extends Model {
    protected $_name = [
        'diagnosticTime' => 'DiagnosticTime',
        'score' => 'Score',
        'startTime' => 'StartTime',
        'endTime' => 'EndTime',
        'downloadURL' => 'DownloadURL',
    ];
    public function validate() {
        Model::validateRequired('diagnosticTime', $this->diagnosticTime, true);
        Model::validateRequired('score', $this->score, true);
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('endTime', $this->endTime, true);
        Model::validateRequired('downloadURL', $this->downloadURL, true);
    }
    public function toMap() {
        $res = [];
        $res['DiagnosticTime'] = $this->diagnosticTime;
        $res['Score'] = $this->score;
        $res['StartTime'] = $this->startTime;
        $res['EndTime'] = $this->endTime;
        $res['DownloadURL'] = $this->downloadURL;
        return $res;
    }
    /**
     * @param array $map
     * @return reportList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['DiagnosticTime'])){
            $model->diagnosticTime = $map['DiagnosticTime'];
        }
        if(isset($map['Score'])){
            $model->score = $map['Score'];
        }
        if(isset($map['StartTime'])){
            $model->startTime = $map['StartTime'];
        }
        if(isset($map['EndTime'])){
            $model->endTime = $map['EndTime'];
        }
        if(isset($map['DownloadURL'])){
            $model->downloadURL = $map['DownloadURL'];
        }
        return $model;
    }
    /**
     * @description diagnosticTime
     * @var string
     */
    public $diagnosticTime;

    /**
     * @description score
     * @var integer
     */
    public $score;

    /**
     * @description startTime
     * @var string
     */
    public $startTime;

    /**
     * @description endTime
     * @var string
     */
    public $endTime;

    /**
     * @description downloadURL
     * @var string
     */
    public $downloadURL;

}
