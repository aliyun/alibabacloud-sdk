<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\SearchMediaResponse;

use AlibabaCloud\SDK\Vod\V20170321\Models\SearchMediaResponse\mediaList\attachedMedia;
use AlibabaCloud\SDK\Vod\V20170321\Models\SearchMediaResponse\mediaList\audio;
use AlibabaCloud\SDK\Vod\V20170321\Models\SearchMediaResponse\mediaList\image;
use AlibabaCloud\SDK\Vod\V20170321\Models\SearchMediaResponse\mediaList\video;
use AlibabaCloud\Tea\Model;

class mediaList extends Model
{
    /**
     * @description mediaType
     *
     * @var string
     */
    public $mediaType;

    /**
     * @description creationTime
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description mediaId
     *
     * @var string
     */
    public $mediaId;

    /**
     * @description video
     *
     * @var video
     */
    public $video;

    /**
     * @description audio
     *
     * @var audio
     */
    public $audio;

    /**
     * @description image
     *
     * @var image
     */
    public $image;

    /**
     * @description attachedMedia
     *
     * @var attachedMedia
     */
    public $attachedMedia;
    protected $_name = [
        'mediaType'     => 'MediaType',
        'creationTime'  => 'CreationTime',
        'mediaId'       => 'MediaId',
        'video'         => 'Video',
        'audio'         => 'Audio',
        'image'         => 'Image',
        'attachedMedia' => 'AttachedMedia',
    ];

    public function validate()
    {
        Model::validateRequired('mediaType', $this->mediaType, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('mediaId', $this->mediaId, true);
        Model::validateRequired('video', $this->video, true);
        Model::validateRequired('audio', $this->audio, true);
        Model::validateRequired('image', $this->image, true);
        Model::validateRequired('attachedMedia', $this->attachedMedia, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mediaType) {
            $res['MediaType'] = $this->mediaType;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->video) {
            $res['Video'] = null !== $this->video ? $this->video->toMap() : null;
        }
        if (null !== $this->audio) {
            $res['Audio'] = null !== $this->audio ? $this->audio->toMap() : null;
        }
        if (null !== $this->image) {
            $res['Image'] = null !== $this->image ? $this->image->toMap() : null;
        }
        if (null !== $this->attachedMedia) {
            $res['AttachedMedia'] = null !== $this->attachedMedia ? $this->attachedMedia->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mediaList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MediaType'])) {
            $model->mediaType = $map['MediaType'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['Video'])) {
            $model->video = video::fromMap($map['Video']);
        }
        if (isset($map['Audio'])) {
            $model->audio = audio::fromMap($map['Audio']);
        }
        if (isset($map['Image'])) {
            $model->image = image::fromMap($map['Image']);
        }
        if (isset($map['AttachedMedia'])) {
            $model->attachedMedia = attachedMedia::fromMap($map['AttachedMedia']);
        }

        return $model;
    }
}
