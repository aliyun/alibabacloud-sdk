<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetPlayInfoResponse\playInfoList;

use AlibabaCloud\Tea\Model;

class playInfo extends Model
{
    /**
     * @description width
     *
     * @var int
     */
    public $width;

    /**
     * @description height
     *
     * @var int
     */
    public $height;

    /**
     * @description size
     *
     * @var int
     */
    public $size;

    /**
     * @description playURL
     *
     * @var string
     */
    public $playURL;

    /**
     * @description bitrate
     *
     * @var string
     */
    public $bitrate;

    /**
     * @description definition
     *
     * @var string
     */
    public $definition;

    /**
     * @description duration
     *
     * @var string
     */
    public $duration;

    /**
     * @description format
     *
     * @var string
     */
    public $format;

    /**
     * @description fps
     *
     * @var string
     */
    public $fps;

    /**
     * @description encrypt
     *
     * @var int
     */
    public $encrypt;

    /**
     * @description plaintext
     *
     * @var string
     */
    public $plaintext;

    /**
     * @description complexity
     *
     * @var string
     */
    public $complexity;

    /**
     * @description streamType
     *
     * @var string
     */
    public $streamType;

    /**
     * @description rand
     *
     * @var string
     */
    public $rand;

    /**
     * @description jobId
     *
     * @var string
     */
    public $jobId;

    /**
     * @description preprocessStatus
     *
     * @var string
     */
    public $preprocessStatus;

    /**
     * @description watermarkId
     *
     * @var string
     */
    public $watermarkId;

    /**
     * @description status
     *
     * @var string
     */
    public $status;

    /**
     * @description creationTime
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description modificationTime
     *
     * @var string
     */
    public $modificationTime;

    /**
     * @description encryptType
     *
     * @var string
     */
    public $encryptType;

    /**
     * @description narrowBandType
     *
     * @var string
     */
    public $narrowBandType;

    /**
     * @description specification
     *
     * @var string
     */
    public $specification;
    protected $_name = [
        'width'            => 'Width',
        'height'           => 'Height',
        'size'             => 'Size',
        'playURL'          => 'PlayURL',
        'bitrate'          => 'Bitrate',
        'definition'       => 'Definition',
        'duration'         => 'Duration',
        'format'           => 'Format',
        'fps'              => 'Fps',
        'encrypt'          => 'Encrypt',
        'plaintext'        => 'Plaintext',
        'complexity'       => 'Complexity',
        'streamType'       => 'StreamType',
        'rand'             => 'Rand',
        'jobId'            => 'JobId',
        'preprocessStatus' => 'PreprocessStatus',
        'watermarkId'      => 'WatermarkId',
        'status'           => 'Status',
        'creationTime'     => 'CreationTime',
        'modificationTime' => 'ModificationTime',
        'encryptType'      => 'EncryptType',
        'narrowBandType'   => 'NarrowBandType',
        'specification'    => 'Specification',
    ];

    public function validate()
    {
        Model::validateRequired('width', $this->width, true);
        Model::validateRequired('height', $this->height, true);
        Model::validateRequired('size', $this->size, true);
        Model::validateRequired('playURL', $this->playURL, true);
        Model::validateRequired('bitrate', $this->bitrate, true);
        Model::validateRequired('definition', $this->definition, true);
        Model::validateRequired('duration', $this->duration, true);
        Model::validateRequired('format', $this->format, true);
        Model::validateRequired('fps', $this->fps, true);
        Model::validateRequired('encrypt', $this->encrypt, true);
        Model::validateRequired('plaintext', $this->plaintext, true);
        Model::validateRequired('complexity', $this->complexity, true);
        Model::validateRequired('streamType', $this->streamType, true);
        Model::validateRequired('rand', $this->rand, true);
        Model::validateRequired('jobId', $this->jobId, true);
        Model::validateRequired('preprocessStatus', $this->preprocessStatus, true);
        Model::validateRequired('watermarkId', $this->watermarkId, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('modificationTime', $this->modificationTime, true);
        Model::validateRequired('encryptType', $this->encryptType, true);
        Model::validateRequired('narrowBandType', $this->narrowBandType, true);
        Model::validateRequired('specification', $this->specification, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->playURL) {
            $res['PlayURL'] = $this->playURL;
        }
        if (null !== $this->bitrate) {
            $res['Bitrate'] = $this->bitrate;
        }
        if (null !== $this->definition) {
            $res['Definition'] = $this->definition;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->format) {
            $res['Format'] = $this->format;
        }
        if (null !== $this->fps) {
            $res['Fps'] = $this->fps;
        }
        if (null !== $this->encrypt) {
            $res['Encrypt'] = $this->encrypt;
        }
        if (null !== $this->plaintext) {
            $res['Plaintext'] = $this->plaintext;
        }
        if (null !== $this->complexity) {
            $res['Complexity'] = $this->complexity;
        }
        if (null !== $this->streamType) {
            $res['StreamType'] = $this->streamType;
        }
        if (null !== $this->rand) {
            $res['Rand'] = $this->rand;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->preprocessStatus) {
            $res['PreprocessStatus'] = $this->preprocessStatus;
        }
        if (null !== $this->watermarkId) {
            $res['WatermarkId'] = $this->watermarkId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->modificationTime) {
            $res['ModificationTime'] = $this->modificationTime;
        }
        if (null !== $this->encryptType) {
            $res['EncryptType'] = $this->encryptType;
        }
        if (null !== $this->narrowBandType) {
            $res['NarrowBandType'] = $this->narrowBandType;
        }
        if (null !== $this->specification) {
            $res['Specification'] = $this->specification;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return playInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['PlayURL'])) {
            $model->playURL = $map['PlayURL'];
        }
        if (isset($map['Bitrate'])) {
            $model->bitrate = $map['Bitrate'];
        }
        if (isset($map['Definition'])) {
            $model->definition = $map['Definition'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Format'])) {
            $model->format = $map['Format'];
        }
        if (isset($map['Fps'])) {
            $model->fps = $map['Fps'];
        }
        if (isset($map['Encrypt'])) {
            $model->encrypt = $map['Encrypt'];
        }
        if (isset($map['Plaintext'])) {
            $model->plaintext = $map['Plaintext'];
        }
        if (isset($map['Complexity'])) {
            $model->complexity = $map['Complexity'];
        }
        if (isset($map['StreamType'])) {
            $model->streamType = $map['StreamType'];
        }
        if (isset($map['Rand'])) {
            $model->rand = $map['Rand'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['PreprocessStatus'])) {
            $model->preprocessStatus = $map['PreprocessStatus'];
        }
        if (isset($map['WatermarkId'])) {
            $model->watermarkId = $map['WatermarkId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['ModificationTime'])) {
            $model->modificationTime = $map['ModificationTime'];
        }
        if (isset($map['EncryptType'])) {
            $model->encryptType = $map['EncryptType'];
        }
        if (isset($map['NarrowBandType'])) {
            $model->narrowBandType = $map['NarrowBandType'];
        }
        if (isset($map['Specification'])) {
            $model->specification = $map['Specification'];
        }

        return $model;
    }
}
