<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServicePublishedApisResponse\data\apis;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServicePublishedApisResponse\data\apis\wizardDetails\wizardConnection;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServicePublishedApisResponse\data\apis\wizardDetails\wizardErrorCodes;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServicePublishedApisResponse\data\apis\wizardDetails\wizardRequestParameters;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServicePublishedApisResponse\data\apis\wizardDetails\wizardResponseParameters;
use AlibabaCloud\Tea\Model;

class wizardDetails extends Model
{
    /**
     * @description failResultSample
     *
     * @var string
     */
    public $failedResultSample;

    /**
     * @description responsePaged
     *
     * @var bool
     */
    public $isPagedResponse;

    /**
     * @description successResultSample
     *
     * @var string
     */
    public $successfulResultSample;

    /**
     * @description apiErrorCodes
     *
     * @var array
     */
    public $wizardErrorCodes;

    /**
     * @description requestParams
     *
     * @var array
     */
    public $wizardRequestParameters;

    /**
     * @description responseParams
     *
     * @var array
     */
    public $wizardResponseParameters;

    /**
     * @description connection
     *
     * @var wizardConnection
     */
    public $wizardConnection;
    protected $_name = [
        'failedResultSample'       => 'FailedResultSample',
        'isPagedResponse'          => 'IsPagedResponse',
        'successfulResultSample'   => 'SuccessfulResultSample',
        'wizardErrorCodes'         => 'WizardErrorCodes',
        'wizardRequestParameters'  => 'WizardRequestParameters',
        'wizardResponseParameters' => 'WizardResponseParameters',
        'wizardConnection'         => 'WizardConnection',
    ];

    public function validate()
    {
        Model::validateRequired('failedResultSample', $this->failedResultSample, true);
        Model::validateRequired('isPagedResponse', $this->isPagedResponse, true);
        Model::validateRequired('successfulResultSample', $this->successfulResultSample, true);
        Model::validateRequired('wizardErrorCodes', $this->wizardErrorCodes, true);
        Model::validateRequired('wizardRequestParameters', $this->wizardRequestParameters, true);
        Model::validateRequired('wizardResponseParameters', $this->wizardResponseParameters, true);
        Model::validateRequired('wizardConnection', $this->wizardConnection, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failedResultSample) {
            $res['FailedResultSample'] = $this->failedResultSample;
        }
        if (null !== $this->isPagedResponse) {
            $res['IsPagedResponse'] = $this->isPagedResponse;
        }
        if (null !== $this->successfulResultSample) {
            $res['SuccessfulResultSample'] = $this->successfulResultSample;
        }
        if (null !== $this->wizardErrorCodes) {
            $res['WizardErrorCodes'] = [];
            if (null !== $this->wizardErrorCodes && \is_array($this->wizardErrorCodes)) {
                $n = 0;
                foreach ($this->wizardErrorCodes as $item) {
                    $res['WizardErrorCodes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->wizardRequestParameters) {
            $res['WizardRequestParameters'] = [];
            if (null !== $this->wizardRequestParameters && \is_array($this->wizardRequestParameters)) {
                $n = 0;
                foreach ($this->wizardRequestParameters as $item) {
                    $res['WizardRequestParameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->wizardResponseParameters) {
            $res['WizardResponseParameters'] = [];
            if (null !== $this->wizardResponseParameters && \is_array($this->wizardResponseParameters)) {
                $n = 0;
                foreach ($this->wizardResponseParameters as $item) {
                    $res['WizardResponseParameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->wizardConnection) {
            $res['WizardConnection'] = null !== $this->wizardConnection ? $this->wizardConnection->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return wizardDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailedResultSample'])) {
            $model->failedResultSample = $map['FailedResultSample'];
        }
        if (isset($map['IsPagedResponse'])) {
            $model->isPagedResponse = $map['IsPagedResponse'];
        }
        if (isset($map['SuccessfulResultSample'])) {
            $model->successfulResultSample = $map['SuccessfulResultSample'];
        }
        if (isset($map['WizardErrorCodes'])) {
            if (!empty($map['WizardErrorCodes'])) {
                $model->wizardErrorCodes = [];
                $n                       = 0;
                foreach ($map['WizardErrorCodes'] as $item) {
                    $model->wizardErrorCodes[$n++] = null !== $item ? wizardErrorCodes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['WizardRequestParameters'])) {
            if (!empty($map['WizardRequestParameters'])) {
                $model->wizardRequestParameters = [];
                $n                              = 0;
                foreach ($map['WizardRequestParameters'] as $item) {
                    $model->wizardRequestParameters[$n++] = null !== $item ? wizardRequestParameters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['WizardResponseParameters'])) {
            if (!empty($map['WizardResponseParameters'])) {
                $model->wizardResponseParameters = [];
                $n                               = 0;
                foreach ($map['WizardResponseParameters'] as $item) {
                    $model->wizardResponseParameters[$n++] = null !== $item ? wizardResponseParameters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['WizardConnection'])) {
            $model->wizardConnection = wizardConnection::fromMap($map['WizardConnection']);
        }

        return $model;
    }
}
