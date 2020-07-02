<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class CreateUdfFileRequest extends Model
{
    /**
     * @description FileFolderPath
     *
     * @var string
     */
    public $fileFolderPath;

    /**
     * @description ProjectId
     *
     * @var int
     */
    public $projectId;

    /**
     * @description FileName
     *
     * @var string
     */
    public $fileName;

    /**
     * @description FunctionType
     *
     * @var string
     */
    public $functionType;

    /**
     * @description ClassName
     *
     * @var string
     */
    public $className;

    /**
     * @description Resources
     *
     * @var string
     */
    public $resources;

    /**
     * @description UdfDescription
     *
     * @var string
     */
    public $udfDescription;

    /**
     * @description CmdDescription
     *
     * @var string
     */
    public $cmdDescription;

    /**
     * @description ParameterDescription
     *
     * @var string
     */
    public $parameterDescription;

    /**
     * @description ReturnValue
     *
     * @var string
     */
    public $returnValue;

    /**
     * @description Example
     *
     * @var string
     */
    public $example;

    /**
     * @description ProjectIdentifier
     *
     * @var string
     */
    public $projectIdentifier;
    protected $_name = [
        'fileFolderPath'       => 'FileFolderPath',
        'projectId'            => 'ProjectId',
        'fileName'             => 'FileName',
        'functionType'         => 'FunctionType',
        'className'            => 'ClassName',
        'resources'            => 'Resources',
        'udfDescription'       => 'UdfDescription',
        'cmdDescription'       => 'CmdDescription',
        'parameterDescription' => 'ParameterDescription',
        'returnValue'          => 'ReturnValue',
        'example'              => 'Example',
        'projectIdentifier'    => 'ProjectIdentifier',
    ];

    public function validate()
    {
        Model::validateRequired('fileName', $this->fileName, true);
        Model::validateRequired('functionType', $this->functionType, true);
        Model::validateRequired('className', $this->className, true);
        Model::validateRequired('resources', $this->resources, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileFolderPath) {
            $res['FileFolderPath'] = $this->fileFolderPath;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->functionType) {
            $res['FunctionType'] = $this->functionType;
        }
        if (null !== $this->className) {
            $res['ClassName'] = $this->className;
        }
        if (null !== $this->resources) {
            $res['Resources'] = $this->resources;
        }
        if (null !== $this->udfDescription) {
            $res['UdfDescription'] = $this->udfDescription;
        }
        if (null !== $this->cmdDescription) {
            $res['CmdDescription'] = $this->cmdDescription;
        }
        if (null !== $this->parameterDescription) {
            $res['ParameterDescription'] = $this->parameterDescription;
        }
        if (null !== $this->returnValue) {
            $res['ReturnValue'] = $this->returnValue;
        }
        if (null !== $this->example) {
            $res['Example'] = $this->example;
        }
        if (null !== $this->projectIdentifier) {
            $res['ProjectIdentifier'] = $this->projectIdentifier;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateUdfFileRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileFolderPath'])) {
            $model->fileFolderPath = $map['FileFolderPath'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['FunctionType'])) {
            $model->functionType = $map['FunctionType'];
        }
        if (isset($map['ClassName'])) {
            $model->className = $map['ClassName'];
        }
        if (isset($map['Resources'])) {
            $model->resources = $map['Resources'];
        }
        if (isset($map['UdfDescription'])) {
            $model->udfDescription = $map['UdfDescription'];
        }
        if (isset($map['CmdDescription'])) {
            $model->cmdDescription = $map['CmdDescription'];
        }
        if (isset($map['ParameterDescription'])) {
            $model->parameterDescription = $map['ParameterDescription'];
        }
        if (isset($map['ReturnValue'])) {
            $model->returnValue = $map['ReturnValue'];
        }
        if (isset($map['Example'])) {
            $model->example = $map['Example'];
        }
        if (isset($map['ProjectIdentifier'])) {
            $model->projectIdentifier = $map['ProjectIdentifier'];
        }

        return $model;
    }
}
