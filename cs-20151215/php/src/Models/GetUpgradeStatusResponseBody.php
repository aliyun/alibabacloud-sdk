<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class GetUpgradeStatusResponseBody extends Model
{
    /**
     * @description status
     *
     * @var string
     */
    public $status;

    /**
     * @description precheck_report_id
     *
     * @var string
     */
    public $precheckReportId;

    /**
     * @description upgrade_step
     *
     * @var string
     */
    public $upgradeStep;

    /**
     * @description error_message
     *
     * @var string
     */
    public $errorMessage;
    protected $_name = [
        'status'           => 'status',
        'precheckReportId' => 'precheck_report_id',
        'upgradeStep'      => 'upgrade_step',
        'errorMessage'     => 'error_message',
    ];

    public function validate()
    {
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('precheckReportId', $this->precheckReportId, true);
        Model::validateRequired('upgradeStep', $this->upgradeStep, true);
        Model::validateRequired('errorMessage', $this->errorMessage, true);
    }

    public function toMap()
    {
        $res                       = [];
        $res['status']             = $this->status;
        $res['precheck_report_id'] = $this->precheckReportId;
        $res['upgrade_step']       = $this->upgradeStep;
        $res['error_message']      = $this->errorMessage;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUpgradeStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['precheck_report_id'])) {
            $model->precheckReportId = $map['precheck_report_id'];
        }
        if (isset($map['upgrade_step'])) {
            $model->upgradeStep = $map['upgrade_step'];
        }
        if (isset($map['error_message'])) {
            $model->errorMessage = $map['error_message'];
        }

        return $model;
    }
}
