<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetTranscodeTemplateGroupResponse\transcodeTemplateGroup;

use AlibabaCloud\Tea\Model;

class transcodeTemplateList extends Model {
    protected $_name = [
        'transcodeTemplateId' => 'TranscodeTemplateId',
        'video' => 'Video',
        'audio' => 'Audio',
        'container' => 'Container',
        'muxConfig' => 'MuxConfig',
        'transConfig' => 'TransConfig',
        'definition' => 'Definition',
        'encryptSetting' => 'EncryptSetting',
        'packageSetting' => 'PackageSetting',
        'subtitleList' => 'SubtitleList',
        'openingList' => 'OpeningList',
        'tailSlateList' => 'TailSlateList',
        'templateName' => 'TemplateName',
        'transcodeFileRegular' => 'TranscodeFileRegular',
        'clip' => 'Clip',
        'rotate' => 'Rotate',
        'type' => 'Type',
        'userData' => 'UserData',
        'watermarkIds' => 'WatermarkIds',
    ];
    public function validate() {
        Model::validateRequired('transcodeTemplateId', $this->transcodeTemplateId, true);
        Model::validateRequired('video', $this->video, true);
        Model::validateRequired('audio', $this->audio, true);
        Model::validateRequired('container', $this->container, true);
        Model::validateRequired('muxConfig', $this->muxConfig, true);
        Model::validateRequired('transConfig', $this->transConfig, true);
        Model::validateRequired('definition', $this->definition, true);
        Model::validateRequired('encryptSetting', $this->encryptSetting, true);
        Model::validateRequired('packageSetting', $this->packageSetting, true);
        Model::validateRequired('subtitleList', $this->subtitleList, true);
        Model::validateRequired('openingList', $this->openingList, true);
        Model::validateRequired('tailSlateList', $this->tailSlateList, true);
        Model::validateRequired('templateName', $this->templateName, true);
        Model::validateRequired('transcodeFileRegular', $this->transcodeFileRegular, true);
        Model::validateRequired('clip', $this->clip, true);
        Model::validateRequired('rotate', $this->rotate, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('userData', $this->userData, true);
        Model::validateRequired('watermarkIds', $this->watermarkIds, true);
    }
    public function toMap() {
        $res = [];
        $res['TranscodeTemplateId'] = $this->transcodeTemplateId;
        $res['Video'] = $this->video;
        $res['Audio'] = $this->audio;
        $res['Container'] = $this->container;
        $res['MuxConfig'] = $this->muxConfig;
        $res['TransConfig'] = $this->transConfig;
        $res['Definition'] = $this->definition;
        $res['EncryptSetting'] = $this->encryptSetting;
        $res['PackageSetting'] = $this->packageSetting;
        $res['SubtitleList'] = $this->subtitleList;
        $res['OpeningList'] = $this->openingList;
        $res['TailSlateList'] = $this->tailSlateList;
        $res['TemplateName'] = $this->templateName;
        $res['TranscodeFileRegular'] = $this->transcodeFileRegular;
        $res['Clip'] = $this->clip;
        $res['Rotate'] = $this->rotate;
        $res['Type'] = $this->type;
        $res['UserData'] = $this->userData;
        $res['WatermarkIds'] = [];
        if(null !== $this->watermarkIds){
            $res['WatermarkIds'] = $this->watermarkIds;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return transcodeTemplateList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['TranscodeTemplateId'])){
            $model->transcodeTemplateId = $map['TranscodeTemplateId'];
        }
        if(isset($map['Video'])){
            $model->video = $map['Video'];
        }
        if(isset($map['Audio'])){
            $model->audio = $map['Audio'];
        }
        if(isset($map['Container'])){
            $model->container = $map['Container'];
        }
        if(isset($map['MuxConfig'])){
            $model->muxConfig = $map['MuxConfig'];
        }
        if(isset($map['TransConfig'])){
            $model->transConfig = $map['TransConfig'];
        }
        if(isset($map['Definition'])){
            $model->definition = $map['Definition'];
        }
        if(isset($map['EncryptSetting'])){
            $model->encryptSetting = $map['EncryptSetting'];
        }
        if(isset($map['PackageSetting'])){
            $model->packageSetting = $map['PackageSetting'];
        }
        if(isset($map['SubtitleList'])){
            $model->subtitleList = $map['SubtitleList'];
        }
        if(isset($map['OpeningList'])){
            $model->openingList = $map['OpeningList'];
        }
        if(isset($map['TailSlateList'])){
            $model->tailSlateList = $map['TailSlateList'];
        }
        if(isset($map['TemplateName'])){
            $model->templateName = $map['TemplateName'];
        }
        if(isset($map['TranscodeFileRegular'])){
            $model->transcodeFileRegular = $map['TranscodeFileRegular'];
        }
        if(isset($map['Clip'])){
            $model->clip = $map['Clip'];
        }
        if(isset($map['Rotate'])){
            $model->rotate = $map['Rotate'];
        }
        if(isset($map['Type'])){
            $model->type = $map['Type'];
        }
        if(isset($map['UserData'])){
            $model->userData = $map['UserData'];
        }
        if(isset($map['WatermarkIds'])){
            if(!empty($map['WatermarkIds'])){
                $model->watermarkIds = [];
                $model->watermarkIds = $map['WatermarkIds'];
            }
        }
        return $model;
    }
    /**
     * @description transcodeStreamId
     * @var string
     */
    public $transcodeTemplateId;

    /**
     * @description video
     * @var string
     */
    public $video;

    /**
     * @description audio
     * @var string
     */
    public $audio;

    /**
     * @description container
     * @var string
     */
    public $container;

    /**
     * @description muxConfig
     * @var string
     */
    public $muxConfig;

    /**
     * @description transConfig
     * @var string
     */
    public $transConfig;

    /**
     * @description definition
     * @var string
     */
    public $definition;

    /**
     * @description encryptSetting
     * @var string
     */
    public $encryptSetting;

    /**
     * @description packageSetting
     * @var string
     */
    public $packageSetting;

    /**
     * @description subtitleList
     * @var string
     */
    public $subtitleList;

    /**
     * @description openingList
     * @var string
     */
    public $openingList;

    /**
     * @description tailSlateList
     * @var string
     */
    public $tailSlateList;

    /**
     * @description templateName
     * @var string
     */
    public $templateName;

    /**
     * @description transcodeFileRegular
     * @var string
     */
    public $transcodeFileRegular;

    /**
     * @description clip
     * @var string
     */
    public $clip;

    /**
     * @description rotate
     * @var string
     */
    public $rotate;

    /**
     * @description type
     * @var string
     */
    public $type;

    /**
     * @description userData
     * @var string
     */
    public $userData;

    /**
     * @description watermarkIds
     * @var array
     */
    public $watermarkIds;

}
