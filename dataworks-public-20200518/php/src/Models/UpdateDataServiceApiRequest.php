<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class UpdateDataServiceApiRequest extends Model
{
    /**
     * @description tenantId
     *
     * @var int
     */
    public $tenantId;

    /**
     * @description projectId
     *
     * @var int
     */
    public $projectId;

    /**
     * @description apiId
     *
     * @var int
     */
    public $apiId;

    /**
     * @description apiHttpMethod
     *
     * @var int
     */
    public $requestMethod;

    /**
     * @description apiResultType
     *
     * @var int
     */
    public $responseContentType;

    /**
     * @description apiTimeout
     *
     * @var int
     */
    public $timeout;

    /**
     * @description securityLevel
     *
     * @var int
     */
    public $visibleRange;

    /**
     * @description apiProtocolsStr
     *
     * @var string
     */
    public $protocols;

    /**
     * @description wizardDetailsStr
     *
     * @var string
     */
    public $wizardDetails;

    /**
     * @description scriptDetailsStr
     *
     * @var string
     */
    public $scriptDetails;

    /**
     * @description registrationDetailsStr
     *
     * @var string
     */
    public $registrationDetails;

    /**
     * @description apiPath
     *
     * @var string
     */
    public $apiPath;

    /**
     * @description apiDesc
     *
     * @var string
     */
    public $apiDescription;
    protected $_name = [
        'tenantId'            => 'TenantId',
        'projectId'           => 'ProjectId',
        'apiId'               => 'ApiId',
        'requestMethod'       => 'RequestMethod',
        'responseContentType' => 'ResponseContentType',
        'timeout'             => 'Timeout',
        'visibleRange'        => 'VisibleRange',
        'protocols'           => 'Protocols',
        'wizardDetails'       => 'WizardDetails',
        'scriptDetails'       => 'ScriptDetails',
        'registrationDetails' => 'RegistrationDetails',
        'apiPath'             => 'ApiPath',
        'apiDescription'      => 'ApiDescription',
    ];

    public function validate()
    {
        Model::validateRequired('tenantId', $this->tenantId, true);
        Model::validateRequired('projectId', $this->projectId, true);
        Model::validateRequired('apiId', $this->apiId, true);
        Model::validateRequired('requestMethod', $this->requestMethod, true);
        Model::validateRequired('responseContentType', $this->responseContentType, true);
        Model::validateRequired('timeout', $this->timeout, true);
        Model::validateRequired('visibleRange', $this->visibleRange, true);
        Model::validateRequired('protocols', $this->protocols, true);
        Model::validateRequired('apiPath', $this->apiPath, true);
        Model::validateRequired('apiDescription', $this->apiDescription, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->requestMethod) {
            $res['RequestMethod'] = $this->requestMethod;
        }
        if (null !== $this->responseContentType) {
            $res['ResponseContentType'] = $this->responseContentType;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }
        if (null !== $this->visibleRange) {
            $res['VisibleRange'] = $this->visibleRange;
        }
        if (null !== $this->protocols) {
            $res['Protocols'] = $this->protocols;
        }
        if (null !== $this->wizardDetails) {
            $res['WizardDetails'] = $this->wizardDetails;
        }
        if (null !== $this->scriptDetails) {
            $res['ScriptDetails'] = $this->scriptDetails;
        }
        if (null !== $this->registrationDetails) {
            $res['RegistrationDetails'] = $this->registrationDetails;
        }
        if (null !== $this->apiPath) {
            $res['ApiPath'] = $this->apiPath;
        }
        if (null !== $this->apiDescription) {
            $res['ApiDescription'] = $this->apiDescription;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDataServiceApiRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['RequestMethod'])) {
            $model->requestMethod = $map['RequestMethod'];
        }
        if (isset($map['ResponseContentType'])) {
            $model->responseContentType = $map['ResponseContentType'];
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }
        if (isset($map['VisibleRange'])) {
            $model->visibleRange = $map['VisibleRange'];
        }
        if (isset($map['Protocols'])) {
            $model->protocols = $map['Protocols'];
        }
        if (isset($map['WizardDetails'])) {
            $model->wizardDetails = $map['WizardDetails'];
        }
        if (isset($map['ScriptDetails'])) {
            $model->scriptDetails = $map['ScriptDetails'];
        }
        if (isset($map['RegistrationDetails'])) {
            $model->registrationDetails = $map['RegistrationDetails'];
        }
        if (isset($map['ApiPath'])) {
            $model->apiPath = $map['ApiPath'];
        }
        if (isset($map['ApiDescription'])) {
            $model->apiDescription = $map['ApiDescription'];
        }

        return $model;
    }
}
