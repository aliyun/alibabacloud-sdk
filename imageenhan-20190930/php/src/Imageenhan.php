<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\AssessCompositionAdvanceRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\AssessCompositionRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\AssessCompositionResponse;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\AssessExposureAdvanceRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\AssessExposureRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\AssessExposureResponse;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\AssessSharpnessAdvanceRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\AssessSharpnessRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\AssessSharpnessResponse;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\ChangeImageSizeAdvanceRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\ChangeImageSizeRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\ChangeImageSizeResponse;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\ExtendImageStyleRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\ExtendImageStyleResponse;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\ImageBlindCharacterWatermarkAdvanceRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\ImageBlindCharacterWatermarkRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\ImageBlindCharacterWatermarkResponse;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\ImageBlindPicWatermarkAdvanceRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\ImageBlindPicWatermarkRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\ImageBlindPicWatermarkResponse;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\IntelligentCompositionAdvanceRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\IntelligentCompositionRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\IntelligentCompositionResponse;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\MakeSuperResolutionImageAdvanceRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\MakeSuperResolutionImageRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\MakeSuperResolutionImageResponse;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\RecolorImageRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\RecolorImageResponse;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\RemoveImageSubtitlesAdvanceRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\RemoveImageSubtitlesRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\RemoveImageSubtitlesResponse;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\RemoveImageWatermarkAdvanceRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\RemoveImageWatermarkRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\RemoveImageWatermarkResponse;
use AlibabaCloud\SDK\OpenPlatform\V20191219\Models\AuthorizeFileUploadRequest;
use AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform;
use AlibabaCloud\SDK\OSS\OSS;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest\header;
use AlibabaCloud\Tea\FileForm\FileForm\FileField;
use AlibabaCloud\Tea\Rpc\Rpc;
use AlibabaCloud\Tea\Rpc\Rpc\Config;
use AlibabaCloud\Tea\RpcUtils\RpcUtils;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;

class Imageenhan extends Rpc
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('imageenhan', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @throws \Exception
     *
     * @return AssessCompositionResponse
     */
    public function assessComposition(AssessCompositionRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return AssessCompositionResponse::fromMap($this->doRequest('AssessComposition', 'HTTPS', 'POST', '2019-09-30', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return AssessCompositionResponse
     */
    public function assessCompositionAdvance(AssessCompositionAdvanceRequest $request, RuntimeOptions $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'imageenhan',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        // Step 1: request OSS api to upload file
        $ossConfig = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $authResponse->accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType),
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj   = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->imageURLObject,
            'contentType' => '',
        ]);
        $ossHeader = new header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        // Step 2: request final api
        $assessCompositionreq = new AssessCompositionRequest([]);
        RpcUtils::convert($request, $assessCompositionreq);
        $assessCompositionreq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->assessComposition($assessCompositionreq, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return AssessSharpnessResponse
     */
    public function assessSharpness(AssessSharpnessRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return AssessSharpnessResponse::fromMap($this->doRequest('AssessSharpness', 'HTTPS', 'POST', '2019-09-30', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return AssessSharpnessResponse
     */
    public function assessSharpnessAdvance(AssessSharpnessAdvanceRequest $request, RuntimeOptions $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'imageenhan',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        // Step 1: request OSS api to upload file
        $ossConfig = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $authResponse->accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType),
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj   = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->imageURLObject,
            'contentType' => '',
        ]);
        $ossHeader = new header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        // Step 2: request final api
        $assessSharpnessreq = new AssessSharpnessRequest([]);
        RpcUtils::convert($request, $assessSharpnessreq);
        $assessSharpnessreq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->assessSharpness($assessSharpnessreq, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return AssessExposureResponse
     */
    public function assessExposure(AssessExposureRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return AssessExposureResponse::fromMap($this->doRequest('AssessExposure', 'HTTPS', 'POST', '2019-09-30', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return AssessExposureResponse
     */
    public function assessExposureAdvance(AssessExposureAdvanceRequest $request, RuntimeOptions $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'imageenhan',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        // Step 1: request OSS api to upload file
        $ossConfig = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $authResponse->accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType),
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj   = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->imageURLObject,
            'contentType' => '',
        ]);
        $ossHeader = new header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        // Step 2: request final api
        $assessExposurereq = new AssessExposureRequest([]);
        RpcUtils::convert($request, $assessExposurereq);
        $assessExposurereq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->assessExposure($assessExposurereq, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ImageBlindCharacterWatermarkResponse
     */
    public function imageBlindCharacterWatermark(ImageBlindCharacterWatermarkRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ImageBlindCharacterWatermarkResponse::fromMap($this->doRequest('ImageBlindCharacterWatermark', 'HTTPS', 'POST', '2019-09-30', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ImageBlindCharacterWatermarkResponse
     */
    public function imageBlindCharacterWatermarkAdvance(ImageBlindCharacterWatermarkAdvanceRequest $request, RuntimeOptions $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'imageenhan',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        // Step 1: request OSS api to upload file
        $ossConfig = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $authResponse->accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType),
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj   = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->originImageURLObject,
            'contentType' => '',
        ]);
        $ossHeader = new header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        // Step 2: request final api
        $imageBlindCharacterWatermarkreq = new ImageBlindCharacterWatermarkRequest([]);
        RpcUtils::convert($request, $imageBlindCharacterWatermarkreq);
        $imageBlindCharacterWatermarkreq->originImageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->imageBlindCharacterWatermark($imageBlindCharacterWatermarkreq, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RemoveImageSubtitlesResponse
     */
    public function removeImageSubtitles(RemoveImageSubtitlesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return RemoveImageSubtitlesResponse::fromMap($this->doRequest('RemoveImageSubtitles', 'HTTPS', 'POST', '2019-09-30', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return RemoveImageSubtitlesResponse
     */
    public function removeImageSubtitlesAdvance(RemoveImageSubtitlesAdvanceRequest $request, RuntimeOptions $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'imageenhan',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        // Step 1: request OSS api to upload file
        $ossConfig = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $authResponse->accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType),
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj   = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->imageURLObject,
            'contentType' => '',
        ]);
        $ossHeader = new header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        // Step 2: request final api
        $removeImageSubtitlesreq = new RemoveImageSubtitlesRequest([]);
        RpcUtils::convert($request, $removeImageSubtitlesreq);
        $removeImageSubtitlesreq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->removeImageSubtitles($removeImageSubtitlesreq, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RemoveImageWatermarkResponse
     */
    public function removeImageWatermark(RemoveImageWatermarkRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return RemoveImageWatermarkResponse::fromMap($this->doRequest('RemoveImageWatermark', 'HTTPS', 'POST', '2019-09-30', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return RemoveImageWatermarkResponse
     */
    public function removeImageWatermarkAdvance(RemoveImageWatermarkAdvanceRequest $request, RuntimeOptions $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'imageenhan',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        // Step 1: request OSS api to upload file
        $ossConfig = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $authResponse->accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType),
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj   = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->imageURLObject,
            'contentType' => '',
        ]);
        $ossHeader = new header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        // Step 2: request final api
        $removeImageWatermarkreq = new RemoveImageWatermarkRequest([]);
        RpcUtils::convert($request, $removeImageWatermarkreq);
        $removeImageWatermarkreq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->removeImageWatermark($removeImageWatermarkreq, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ImageBlindPicWatermarkResponse
     */
    public function imageBlindPicWatermark(ImageBlindPicWatermarkRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ImageBlindPicWatermarkResponse::fromMap($this->doRequest('ImageBlindPicWatermark', 'HTTPS', 'POST', '2019-09-30', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ImageBlindPicWatermarkResponse
     */
    public function imageBlindPicWatermarkAdvance(ImageBlindPicWatermarkAdvanceRequest $request, RuntimeOptions $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'imageenhan',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        // Step 1: request OSS api to upload file
        $ossConfig = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $authResponse->accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType),
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj   = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->originImageURLObject,
            'contentType' => '',
        ]);
        $ossHeader = new header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        // Step 2: request final api
        $imageBlindPicWatermarkreq = new ImageBlindPicWatermarkRequest([]);
        RpcUtils::convert($request, $imageBlindPicWatermarkreq);
        $imageBlindPicWatermarkreq->originImageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->imageBlindPicWatermark($imageBlindPicWatermarkreq, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return IntelligentCompositionResponse
     */
    public function intelligentComposition(IntelligentCompositionRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return IntelligentCompositionResponse::fromMap($this->doRequest('IntelligentComposition', 'HTTPS', 'POST', '2019-09-30', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return IntelligentCompositionResponse
     */
    public function intelligentCompositionAdvance(IntelligentCompositionAdvanceRequest $request, RuntimeOptions $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'imageenhan',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        // Step 1: request OSS api to upload file
        $ossConfig = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $authResponse->accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType),
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj   = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->imageURLObject,
            'contentType' => '',
        ]);
        $ossHeader = new header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        // Step 2: request final api
        $intelligentCompositionreq = new IntelligentCompositionRequest([]);
        RpcUtils::convert($request, $intelligentCompositionreq);
        $intelligentCompositionreq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->intelligentComposition($intelligentCompositionreq, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ChangeImageSizeResponse
     */
    public function changeImageSize(ChangeImageSizeRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ChangeImageSizeResponse::fromMap($this->doRequest('ChangeImageSize', 'HTTPS', 'POST', '2019-09-30', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ChangeImageSizeResponse
     */
    public function changeImageSizeAdvance(ChangeImageSizeAdvanceRequest $request, RuntimeOptions $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'imageenhan',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        // Step 1: request OSS api to upload file
        $ossConfig = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $authResponse->accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType),
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj   = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->urlObject,
            'contentType' => '',
        ]);
        $ossHeader = new header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        // Step 2: request final api
        $changeImageSizereq = new ChangeImageSizeRequest([]);
        RpcUtils::convert($request, $changeImageSizereq);
        $changeImageSizereq->url = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->changeImageSize($changeImageSizereq, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ExtendImageStyleResponse
     */
    public function extendImageStyle(ExtendImageStyleRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ExtendImageStyleResponse::fromMap($this->doRequest('ExtendImageStyle', 'HTTPS', 'POST', '2019-09-30', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return MakeSuperResolutionImageResponse
     */
    public function makeSuperResolutionImage(MakeSuperResolutionImageRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return MakeSuperResolutionImageResponse::fromMap($this->doRequest('MakeSuperResolutionImage', 'HTTPS', 'POST', '2019-09-30', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return MakeSuperResolutionImageResponse
     */
    public function makeSuperResolutionImageAdvance(MakeSuperResolutionImageAdvanceRequest $request, RuntimeOptions $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'imageenhan',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        // Step 1: request OSS api to upload file
        $ossConfig = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $authResponse->accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType),
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj   = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->urlObject,
            'contentType' => '',
        ]);
        $ossHeader = new header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        // Step 2: request final api
        $makeSuperResolutionImagereq = new MakeSuperResolutionImageRequest([]);
        RpcUtils::convert($request, $makeSuperResolutionImagereq);
        $makeSuperResolutionImagereq->url = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->makeSuperResolutionImage($makeSuperResolutionImagereq, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RecolorImageResponse
     */
    public function recolorImage(RecolorImageRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return RecolorImageResponse::fromMap($this->doRequest('RecolorImage', 'HTTPS', 'POST', '2019-09-30', 'AK', null, $request, $runtime));
    }

    /**
     * @param string $productId
     * @param string $regionId
     * @param string $endpointRule
     * @param string $network
     * @param string $suffix
     * @param array  $endpointMap
     * @param string $endpoint
     *
     * @throws \Exception
     *
     * @return string
     */
    public function getEndpoint($productId, $regionId, $endpointRule, $network, $suffix, $endpointMap, $endpoint)
    {
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_($endpointMap['regionId'])) {
            return $endpointMap['regionId'];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }
}
