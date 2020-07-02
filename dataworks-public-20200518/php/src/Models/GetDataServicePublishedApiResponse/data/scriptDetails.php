<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServicePublishedApiResponse\data;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServicePublishedApiResponse\data\scriptDetails\scriptConnection;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServicePublishedApiResponse\data\scriptDetails\scriptErrorCodes;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServicePublishedApiResponse\data\scriptDetails\scriptRequestParameters;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServicePublishedApiResponse\data\scriptDetails\scriptResponseParameters;
use AlibabaCloud\Tea\Model;

class scriptDetails extends Model
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
     * @description apiSql
     *
     * @var string
     */
    public $script;

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
    public $scriptErrorCodes;

    /**
     * @description requestParams
     *
     * @var array
     */
    public $scriptRequestParameters;

    /**
     * @description responseParams
     *
     * @var array
     */
    public $scriptResponseParameters;

    /**
     * @description connection
     *
     * @var scriptConnection
     */
    public $scriptConnection;
    protected $_name = [
        'failedResultSample'       => 'FailedResultSample',
        'isPagedResponse'          => 'IsPagedResponse',
        'script'                   => 'Script',
        'successfulResultSample'   => 'SuccessfulResultSample',
        'scriptErrorCodes'         => 'ScriptErrorCodes',
        'scriptRequestParameters'  => 'ScriptRequestParameters',
        'scriptResponseParameters' => 'ScriptResponseParameters',
        'scriptConnection'         => 'ScriptConnection',
    ];

    public function validate()
    {
        Model::validateRequired('failedResultSample', $this->failedResultSample, true);
        Model::validateRequired('isPagedResponse', $this->isPagedResponse, true);
        Model::validateRequired('script', $this->script, true);
        Model::validateRequired('successfulResultSample', $this->successfulResultSample, true);
        Model::validateRequired('scriptErrorCodes', $this->scriptErrorCodes, true);
        Model::validateRequired('scriptRequestParameters', $this->scriptRequestParameters, true);
        Model::validateRequired('scriptResponseParameters', $this->scriptResponseParameters, true);
        Model::validateRequired('scriptConnection', $this->scriptConnection, true);
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
        if (null !== $this->script) {
            $res['Script'] = $this->script;
        }
        if (null !== $this->successfulResultSample) {
            $res['SuccessfulResultSample'] = $this->successfulResultSample;
        }
        if (null !== $this->scriptErrorCodes) {
            $res['ScriptErrorCodes'] = [];
            if (null !== $this->scriptErrorCodes && \is_array($this->scriptErrorCodes)) {
                $n = 0;
                foreach ($this->scriptErrorCodes as $item) {
                    $res['ScriptErrorCodes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->scriptRequestParameters) {
            $res['ScriptRequestParameters'] = [];
            if (null !== $this->scriptRequestParameters && \is_array($this->scriptRequestParameters)) {
                $n = 0;
                foreach ($this->scriptRequestParameters as $item) {
                    $res['ScriptRequestParameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->scriptResponseParameters) {
            $res['ScriptResponseParameters'] = [];
            if (null !== $this->scriptResponseParameters && \is_array($this->scriptResponseParameters)) {
                $n = 0;
                foreach ($this->scriptResponseParameters as $item) {
                    $res['ScriptResponseParameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->scriptConnection) {
            $res['ScriptConnection'] = null !== $this->scriptConnection ? $this->scriptConnection->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scriptDetails
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
        if (isset($map['Script'])) {
            $model->script = $map['Script'];
        }
        if (isset($map['SuccessfulResultSample'])) {
            $model->successfulResultSample = $map['SuccessfulResultSample'];
        }
        if (isset($map['ScriptErrorCodes'])) {
            if (!empty($map['ScriptErrorCodes'])) {
                $model->scriptErrorCodes = [];
                $n                       = 0;
                foreach ($map['ScriptErrorCodes'] as $item) {
                    $model->scriptErrorCodes[$n++] = null !== $item ? scriptErrorCodes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ScriptRequestParameters'])) {
            if (!empty($map['ScriptRequestParameters'])) {
                $model->scriptRequestParameters = [];
                $n                              = 0;
                foreach ($map['ScriptRequestParameters'] as $item) {
                    $model->scriptRequestParameters[$n++] = null !== $item ? scriptRequestParameters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ScriptResponseParameters'])) {
            if (!empty($map['ScriptResponseParameters'])) {
                $model->scriptResponseParameters = [];
                $n                               = 0;
                foreach ($map['ScriptResponseParameters'] as $item) {
                    $model->scriptResponseParameters[$n++] = null !== $item ? scriptResponseParameters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ScriptConnection'])) {
            $model->scriptConnection = scriptConnection::fromMap($map['ScriptConnection']);
        }

        return $model;
    }
}
