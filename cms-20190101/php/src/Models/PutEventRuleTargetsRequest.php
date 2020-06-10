<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\PutEventRuleTargetsRequest\contactParameters;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutEventRuleTargetsRequest\fcParameters;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutEventRuleTargetsRequest\mnsParameters;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutEventRuleTargetsRequest\slsParameters;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutEventRuleTargetsRequest\webhookParameters;
use AlibabaCloud\Tea\Model;

class PutEventRuleTargetsRequest extends Model
{
    /**
     * @description ruleName
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description fcParameterList
     *
     * @var array
     */
    public $fcParameters;

    /**
     * @description contactParameterList
     *
     * @var array
     */
    public $contactParameters;

    /**
     * @description mnsParameterList
     *
     * @var array
     */
    public $mnsParameters;

    /**
     * @description webhookParameterList
     *
     * @var array
     */
    public $webhookParameters;

    /**
     * @description slsParameterList
     *
     * @var array
     */
    public $slsParameters;
    protected $_name = [
        'ruleName'          => 'RuleName',
        'fcParameters'      => 'FcParameters',
        'contactParameters' => 'ContactParameters',
        'mnsParameters'     => 'MnsParameters',
        'webhookParameters' => 'WebhookParameters',
        'slsParameters'     => 'SlsParameters',
    ];

    public function validate()
    {
        Model::validateRequired('ruleName', $this->ruleName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->fcParameters) {
            $res['FcParameters'] = [];
            if (null !== $this->fcParameters && \is_array($this->fcParameters)) {
                $n = 0;
                foreach ($this->fcParameters as $item) {
                    $res['FcParameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->contactParameters) {
            $res['ContactParameters'] = [];
            if (null !== $this->contactParameters && \is_array($this->contactParameters)) {
                $n = 0;
                foreach ($this->contactParameters as $item) {
                    $res['ContactParameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->mnsParameters) {
            $res['MnsParameters'] = [];
            if (null !== $this->mnsParameters && \is_array($this->mnsParameters)) {
                $n = 0;
                foreach ($this->mnsParameters as $item) {
                    $res['MnsParameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->webhookParameters) {
            $res['WebhookParameters'] = [];
            if (null !== $this->webhookParameters && \is_array($this->webhookParameters)) {
                $n = 0;
                foreach ($this->webhookParameters as $item) {
                    $res['WebhookParameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->slsParameters) {
            $res['SlsParameters'] = [];
            if (null !== $this->slsParameters && \is_array($this->slsParameters)) {
                $n = 0;
                foreach ($this->slsParameters as $item) {
                    $res['SlsParameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutEventRuleTargetsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['FcParameters'])) {
            if (!empty($map['FcParameters'])) {
                $model->fcParameters = [];
                $n                   = 0;
                foreach ($map['FcParameters'] as $item) {
                    $model->fcParameters[$n++] = null !== $item ? fcParameters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ContactParameters'])) {
            if (!empty($map['ContactParameters'])) {
                $model->contactParameters = [];
                $n                        = 0;
                foreach ($map['ContactParameters'] as $item) {
                    $model->contactParameters[$n++] = null !== $item ? contactParameters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MnsParameters'])) {
            if (!empty($map['MnsParameters'])) {
                $model->mnsParameters = [];
                $n                    = 0;
                foreach ($map['MnsParameters'] as $item) {
                    $model->mnsParameters[$n++] = null !== $item ? mnsParameters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['WebhookParameters'])) {
            if (!empty($map['WebhookParameters'])) {
                $model->webhookParameters = [];
                $n                        = 0;
                foreach ($map['WebhookParameters'] as $item) {
                    $model->webhookParameters[$n++] = null !== $item ? webhookParameters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SlsParameters'])) {
            if (!empty($map['SlsParameters'])) {
                $model->slsParameters = [];
                $n                    = 0;
                foreach ($map['SlsParameters'] as $item) {
                    $model->slsParameters[$n++] = null !== $item ? slsParameters::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
