<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20190810\Models\DescribeSceneResponse\scene;

use AlibabaCloud\SDK\PTS\V20190810\Models\DescribeSceneResponse\scene\files\exportedParams;
use AlibabaCloud\Tea\Model;

class files extends Model
{
    /**
     * @description fileKey
     *
     * @var string
     */
    public $fileKey;

    /**
     * @description fileName
     *
     * @var string
     */
    public $fileName;

    /**
     * @description skipFirstLine
     *
     * @var bool
     */
    public $skipFirstLine;

    /**
     * @description previewData
     *
     * @var array
     */
    public $previewData;

    /**
     * @description remoteUrl
     *
     * @var string
     */
    public $remoteUrl;

    /**
     * @description exportParams
     *
     * @var array
     */
    public $exportedParams;
    protected $_name = [
        'fileKey'        => 'FileKey',
        'fileName'       => 'FileName',
        'skipFirstLine'  => 'SkipFirstLine',
        'previewData'    => 'PreviewData',
        'remoteUrl'      => 'RemoteUrl',
        'exportedParams' => 'ExportedParams',
    ];

    public function validate()
    {
        Model::validateRequired('fileKey', $this->fileKey, true);
        Model::validateRequired('fileName', $this->fileName, true);
        Model::validateRequired('skipFirstLine', $this->skipFirstLine, true);
        Model::validateRequired('previewData', $this->previewData, true);
        Model::validateRequired('remoteUrl', $this->remoteUrl, true);
        Model::validateRequired('exportedParams', $this->exportedParams, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileKey) {
            $res['FileKey'] = $this->fileKey;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->skipFirstLine) {
            $res['SkipFirstLine'] = $this->skipFirstLine;
        }
        if (null !== $this->previewData) {
            $res['PreviewData'] = $this->previewData;
        }
        if (null !== $this->remoteUrl) {
            $res['RemoteUrl'] = $this->remoteUrl;
        }
        if (null !== $this->exportedParams) {
            $res['ExportedParams'] = [];
            if (null !== $this->exportedParams && \is_array($this->exportedParams)) {
                $n = 0;
                foreach ($this->exportedParams as $item) {
                    $res['ExportedParams'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return files
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileKey'])) {
            $model->fileKey = $map['FileKey'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['SkipFirstLine'])) {
            $model->skipFirstLine = $map['SkipFirstLine'];
        }
        if (isset($map['PreviewData'])) {
            $model->previewData = $map['PreviewData'];
        }
        if (isset($map['RemoteUrl'])) {
            $model->remoteUrl = $map['RemoteUrl'];
        }
        if (isset($map['ExportedParams'])) {
            if (!empty($map['ExportedParams'])) {
                $model->exportedParams = [];
                $n                     = 0;
                foreach ($map['ExportedParams'] as $item) {
                    $model->exportedParams[$n++] = null !== $item ? exportedParams::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
