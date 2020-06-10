<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\CreateGroupMetricRulesResponse\resources;

use AlibabaCloud\Tea\Model;

class alertResult extends Model
{
    /**
     * @description alertName
     *
     * @var string
     */
    public $ruleId;

    /**
     * @description displayName
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description message
     *
     * @var string
     */
    public $message;

    /**
     * @description code
     *
     * @var int
     */
    public $code;

    /**
     * @description success
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'ruleId'   => 'RuleId',
        'ruleName' => 'RuleName',
        'message'  => 'Message',
        'code'     => 'Code',
        'success'  => 'Success',
    ];

    public function validate()
    {
        Model::validateRequired('ruleId', $this->ruleId, true);
        Model::validateRequired('ruleName', $this->ruleName, true);
        Model::validateRequired('message', $this->message, true);
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('success', $this->success, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alertResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
