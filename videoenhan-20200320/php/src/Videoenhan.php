<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\OpenPlatform\V20191219\Models\AuthorizeFileUploadRequest;
use AlibabaCloud\SDK\OpenPlatform\V20191219\Models\AuthorizeFileUploadResponse;
use AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform;
use AlibabaCloud\SDK\OSS\OSS;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest\header;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\AbstractEcommerceVideoAdvanceRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\AbstractEcommerceVideoRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\AbstractEcommerceVideoResponse;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\AbstractFilmVideoAdvanceRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\AbstractFilmVideoRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\AbstractFilmVideoResponse;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\AdjustVideoColorAdvanceRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\AdjustVideoColorRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\AdjustVideoColorResponse;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\ChangeVideoSizeAdvanceRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\ChangeVideoSizeRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\ChangeVideoSizeResponse;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\ConvertHdrVideoAdvanceRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\ConvertHdrVideoRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\ConvertHdrVideoResponse;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\EnhanceVideoQualityAdvanceRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\EnhanceVideoQualityRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\EnhanceVideoQualityResponse;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\EraseVideoLogoAdvanceRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\EraseVideoLogoRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\EraseVideoLogoResponse;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\EraseVideoSubtitlesAdvanceRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\EraseVideoSubtitlesRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\EraseVideoSubtitlesResponse;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\GenerateVideoRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\GenerateVideoResponse;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\GetAsyncJobResultRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\GetAsyncJobResultResponse;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\InterpolateVideoFrameAdvanceRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\InterpolateVideoFrameRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\InterpolateVideoFrameResponse;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\MergeVideoFaceAdvanceRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\MergeVideoFaceRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\MergeVideoFaceResponse;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\SuperResolveVideoAdvanceRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\SuperResolveVideoRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\SuperResolveVideoResponse;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\ToneSdrVideoAdvanceRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\ToneSdrVideoRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\ToneSdrVideoResponse;
use AlibabaCloud\Tea\FileForm\FileForm\FileField;
use AlibabaCloud\Tea\Rpc\Rpc;
use AlibabaCloud\Tea\Rpc\Rpc\Config;
use AlibabaCloud\Tea\RpcUtils\RpcUtils;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;

class Videoenhan extends Rpc
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('videoenhan', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param ConvertHdrVideoRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ConvertHdrVideoResponse
     */
    public function convertHdrVideo($request, $runtime)
    {
        Utils::validateModel($request);

        return ConvertHdrVideoResponse::fromMap($this->doRequest('ConvertHdrVideo', 'HTTPS', 'POST', '2020-03-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ConvertHdrVideoRequest $request
     *
     * @return ConvertHdrVideoResponse
     */
    public function convertHdrVideoSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->convertHdrVideo($request, $runtime);
    }

    /**
     * @param ConvertHdrVideoAdvanceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ConvertHdrVideoResponse
     */
    public function convertHdrVideoAdvance($request, $runtime)
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
            'product'  => 'videoenhan',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig    = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient     = null;
        $fileObj       = new FileField([]);
        $ossHeader     = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime    = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $convertHdrVideoReq = new ConvertHdrVideoRequest([]);
        RpcUtils::convert($request, $convertHdrVideoReq);
        $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        $ossConfig->accessKeyId = $authResponse->accessKeyId;
        $ossConfig->endpoint    = RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
        $ossClient              = new OSS($ossConfig);
        $fileObj                = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->videoURLObject,
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
        $ossClient->postObject($uploadRequest, $ossRuntime);
        $convertHdrVideoReq->videoURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->convertHdrVideo($convertHdrVideoReq, $runtime);
    }

    /**
     * @param InterpolateVideoFrameRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return InterpolateVideoFrameResponse
     */
    public function interpolateVideoFrame($request, $runtime)
    {
        Utils::validateModel($request);

        return InterpolateVideoFrameResponse::fromMap($this->doRequest('InterpolateVideoFrame', 'HTTPS', 'POST', '2020-03-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param InterpolateVideoFrameRequest $request
     *
     * @return InterpolateVideoFrameResponse
     */
    public function interpolateVideoFrameSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->interpolateVideoFrame($request, $runtime);
    }

    /**
     * @param InterpolateVideoFrameAdvanceRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return InterpolateVideoFrameResponse
     */
    public function interpolateVideoFrameAdvance($request, $runtime)
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
            'product'  => 'videoenhan',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig    = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient     = null;
        $fileObj       = new FileField([]);
        $ossHeader     = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime    = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $interpolateVideoFrameReq = new InterpolateVideoFrameRequest([]);
        RpcUtils::convert($request, $interpolateVideoFrameReq);
        $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        $ossConfig->accessKeyId = $authResponse->accessKeyId;
        $ossConfig->endpoint    = RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
        $ossClient              = new OSS($ossConfig);
        $fileObj                = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->videoURLObject,
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
        $ossClient->postObject($uploadRequest, $ossRuntime);
        $interpolateVideoFrameReq->videoURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->interpolateVideoFrame($interpolateVideoFrameReq, $runtime);
    }

    /**
     * @param ToneSdrVideoRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ToneSdrVideoResponse
     */
    public function toneSdrVideo($request, $runtime)
    {
        Utils::validateModel($request);

        return ToneSdrVideoResponse::fromMap($this->doRequest('ToneSdrVideo', 'HTTPS', 'POST', '2020-03-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ToneSdrVideoRequest $request
     *
     * @return ToneSdrVideoResponse
     */
    public function toneSdrVideoSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->toneSdrVideo($request, $runtime);
    }

    /**
     * @param ToneSdrVideoAdvanceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ToneSdrVideoResponse
     */
    public function toneSdrVideoAdvance($request, $runtime)
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
            'product'  => 'videoenhan',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig    = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient     = null;
        $fileObj       = new FileField([]);
        $ossHeader     = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime    = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $toneSdrVideoReq = new ToneSdrVideoRequest([]);
        RpcUtils::convert($request, $toneSdrVideoReq);
        $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        $ossConfig->accessKeyId = $authResponse->accessKeyId;
        $ossConfig->endpoint    = RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
        $ossClient              = new OSS($ossConfig);
        $fileObj                = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->videoURLObject,
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
        $ossClient->postObject($uploadRequest, $ossRuntime);
        $toneSdrVideoReq->videoURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->toneSdrVideo($toneSdrVideoReq, $runtime);
    }

    /**
     * @param EnhanceVideoQualityRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return EnhanceVideoQualityResponse
     */
    public function enhanceVideoQuality($request, $runtime)
    {
        Utils::validateModel($request);

        return EnhanceVideoQualityResponse::fromMap($this->doRequest('EnhanceVideoQuality', 'HTTPS', 'POST', '2020-03-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param EnhanceVideoQualityRequest $request
     *
     * @return EnhanceVideoQualityResponse
     */
    public function enhanceVideoQualitySimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enhanceVideoQuality($request, $runtime);
    }

    /**
     * @param EnhanceVideoQualityAdvanceRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return EnhanceVideoQualityResponse
     */
    public function enhanceVideoQualityAdvance($request, $runtime)
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
            'product'  => 'videoenhan',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig    = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient     = null;
        $fileObj       = new FileField([]);
        $ossHeader     = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime    = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $enhanceVideoQualityReq = new EnhanceVideoQualityRequest([]);
        RpcUtils::convert($request, $enhanceVideoQualityReq);
        $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        $ossConfig->accessKeyId = $authResponse->accessKeyId;
        $ossConfig->endpoint    = RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
        $ossClient              = new OSS($ossConfig);
        $fileObj                = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->videoURLObject,
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
        $ossClient->postObject($uploadRequest, $ossRuntime);
        $enhanceVideoQualityReq->videoURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->enhanceVideoQuality($enhanceVideoQualityReq, $runtime);
    }

    /**
     * @param MergeVideoFaceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return MergeVideoFaceResponse
     */
    public function mergeVideoFace($request, $runtime)
    {
        Utils::validateModel($request);

        return MergeVideoFaceResponse::fromMap($this->doRequest('MergeVideoFace', 'HTTPS', 'POST', '2020-03-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param MergeVideoFaceRequest $request
     *
     * @return MergeVideoFaceResponse
     */
    public function mergeVideoFaceSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->mergeVideoFace($request, $runtime);
    }

    /**
     * @param MergeVideoFaceAdvanceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return MergeVideoFaceResponse
     */
    public function mergeVideoFaceAdvance($request, $runtime)
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
            'product'  => 'videoenhan',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig    = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient     = null;
        $fileObj       = new FileField([]);
        $ossHeader     = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime    = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $mergeVideoFaceReq = new MergeVideoFaceRequest([]);
        RpcUtils::convert($request, $mergeVideoFaceReq);
        $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        $ossConfig->accessKeyId = $authResponse->accessKeyId;
        $ossConfig->endpoint    = RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
        $ossClient              = new OSS($ossConfig);
        $fileObj                = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->videoURLObject,
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
        $ossClient->postObject($uploadRequest, $ossRuntime);
        $mergeVideoFaceReq->videoURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->mergeVideoFace($mergeVideoFaceReq, $runtime);
    }

    /**
     * @param ChangeVideoSizeRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ChangeVideoSizeResponse
     */
    public function changeVideoSize($request, $runtime)
    {
        Utils::validateModel($request);

        return ChangeVideoSizeResponse::fromMap($this->doRequest('ChangeVideoSize', 'HTTPS', 'POST', '2020-03-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ChangeVideoSizeRequest $request
     *
     * @return ChangeVideoSizeResponse
     */
    public function changeVideoSizeSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeVideoSize($request, $runtime);
    }

    /**
     * @param ChangeVideoSizeAdvanceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ChangeVideoSizeResponse
     */
    public function changeVideoSizeAdvance($request, $runtime)
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
            'product'  => 'videoenhan',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig    = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient     = null;
        $fileObj       = new FileField([]);
        $ossHeader     = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime    = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $changeVideoSizeReq = new ChangeVideoSizeRequest([]);
        RpcUtils::convert($request, $changeVideoSizeReq);
        $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        $ossConfig->accessKeyId = $authResponse->accessKeyId;
        $ossConfig->endpoint    = RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
        $ossClient              = new OSS($ossConfig);
        $fileObj                = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->videoUrlObject,
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
        $ossClient->postObject($uploadRequest, $ossRuntime);
        $changeVideoSizeReq->videoUrl = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->changeVideoSize($changeVideoSizeReq, $runtime);
    }

    /**
     * @param GenerateVideoRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GenerateVideoResponse
     */
    public function generateVideo($request, $runtime)
    {
        Utils::validateModel($request);

        return GenerateVideoResponse::fromMap($this->doRequest('GenerateVideo', 'HTTPS', 'POST', '2020-03-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GenerateVideoRequest $request
     *
     * @return GenerateVideoResponse
     */
    public function generateVideoSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateVideo($request, $runtime);
    }

    /**
     * @param GetAsyncJobResultRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetAsyncJobResultResponse
     */
    public function getAsyncJobResult($request, $runtime)
    {
        Utils::validateModel($request);

        return GetAsyncJobResultResponse::fromMap($this->doRequest('GetAsyncJobResult', 'HTTPS', 'POST', '2020-03-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetAsyncJobResultRequest $request
     *
     * @return GetAsyncJobResultResponse
     */
    public function getAsyncJobResultSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAsyncJobResult($request, $runtime);
    }

    /**
     * @param SuperResolveVideoRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SuperResolveVideoResponse
     */
    public function superResolveVideo($request, $runtime)
    {
        Utils::validateModel($request);

        return SuperResolveVideoResponse::fromMap($this->doRequest('SuperResolveVideo', 'HTTPS', 'POST', '2020-03-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param SuperResolveVideoRequest $request
     *
     * @return SuperResolveVideoResponse
     */
    public function superResolveVideoSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->superResolveVideo($request, $runtime);
    }

    /**
     * @param SuperResolveVideoAdvanceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return SuperResolveVideoResponse
     */
    public function superResolveVideoAdvance($request, $runtime)
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
            'product'  => 'videoenhan',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig    = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient     = null;
        $fileObj       = new FileField([]);
        $ossHeader     = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime    = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $superResolveVideoReq = new SuperResolveVideoRequest([]);
        RpcUtils::convert($request, $superResolveVideoReq);
        $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        $ossConfig->accessKeyId = $authResponse->accessKeyId;
        $ossConfig->endpoint    = RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
        $ossClient              = new OSS($ossConfig);
        $fileObj                = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->videoUrlObject,
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
        $ossClient->postObject($uploadRequest, $ossRuntime);
        $superResolveVideoReq->videoUrl = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->superResolveVideo($superResolveVideoReq, $runtime);
    }

    /**
     * @param EraseVideoLogoRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return EraseVideoLogoResponse
     */
    public function eraseVideoLogo($request, $runtime)
    {
        Utils::validateModel($request);

        return EraseVideoLogoResponse::fromMap($this->doRequest('EraseVideoLogo', 'HTTPS', 'POST', '2020-03-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param EraseVideoLogoRequest $request
     *
     * @return EraseVideoLogoResponse
     */
    public function eraseVideoLogoSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->eraseVideoLogo($request, $runtime);
    }

    /**
     * @param EraseVideoLogoAdvanceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return EraseVideoLogoResponse
     */
    public function eraseVideoLogoAdvance($request, $runtime)
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
            'product'  => 'videoenhan',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig    = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient     = null;
        $fileObj       = new FileField([]);
        $ossHeader     = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime    = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $eraseVideoLogoReq = new EraseVideoLogoRequest([]);
        RpcUtils::convert($request, $eraseVideoLogoReq);
        $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        $ossConfig->accessKeyId = $authResponse->accessKeyId;
        $ossConfig->endpoint    = RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
        $ossClient              = new OSS($ossConfig);
        $fileObj                = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->videoUrlObject,
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
        $ossClient->postObject($uploadRequest, $ossRuntime);
        $eraseVideoLogoReq->videoUrl = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->eraseVideoLogo($eraseVideoLogoReq, $runtime);
    }

    /**
     * @param EraseVideoSubtitlesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return EraseVideoSubtitlesResponse
     */
    public function eraseVideoSubtitles($request, $runtime)
    {
        Utils::validateModel($request);

        return EraseVideoSubtitlesResponse::fromMap($this->doRequest('EraseVideoSubtitles', 'HTTPS', 'POST', '2020-03-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param EraseVideoSubtitlesRequest $request
     *
     * @return EraseVideoSubtitlesResponse
     */
    public function eraseVideoSubtitlesSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->eraseVideoSubtitles($request, $runtime);
    }

    /**
     * @param EraseVideoSubtitlesAdvanceRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return EraseVideoSubtitlesResponse
     */
    public function eraseVideoSubtitlesAdvance($request, $runtime)
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
            'product'  => 'videoenhan',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig    = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient     = null;
        $fileObj       = new FileField([]);
        $ossHeader     = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime    = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $eraseVideoSubtitlesReq = new EraseVideoSubtitlesRequest([]);
        RpcUtils::convert($request, $eraseVideoSubtitlesReq);
        $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        $ossConfig->accessKeyId = $authResponse->accessKeyId;
        $ossConfig->endpoint    = RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
        $ossClient              = new OSS($ossConfig);
        $fileObj                = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->videoUrlObject,
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
        $ossClient->postObject($uploadRequest, $ossRuntime);
        $eraseVideoSubtitlesReq->videoUrl = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->eraseVideoSubtitles($eraseVideoSubtitlesReq, $runtime);
    }

    /**
     * @param AbstractEcommerceVideoRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return AbstractEcommerceVideoResponse
     */
    public function abstractEcommerceVideo($request, $runtime)
    {
        Utils::validateModel($request);

        return AbstractEcommerceVideoResponse::fromMap($this->doRequest('AbstractEcommerceVideo', 'HTTPS', 'POST', '2020-03-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param AbstractEcommerceVideoRequest $request
     *
     * @return AbstractEcommerceVideoResponse
     */
    public function abstractEcommerceVideoSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->abstractEcommerceVideo($request, $runtime);
    }

    /**
     * @param AbstractEcommerceVideoAdvanceRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return AbstractEcommerceVideoResponse
     */
    public function abstractEcommerceVideoAdvance($request, $runtime)
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
            'product'  => 'videoenhan',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig    = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient     = null;
        $fileObj       = new FileField([]);
        $ossHeader     = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime    = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $abstractEcommerceVideoReq = new AbstractEcommerceVideoRequest([]);
        RpcUtils::convert($request, $abstractEcommerceVideoReq);
        $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        $ossConfig->accessKeyId = $authResponse->accessKeyId;
        $ossConfig->endpoint    = RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
        $ossClient              = new OSS($ossConfig);
        $fileObj                = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->videoUrlObject,
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
        $ossClient->postObject($uploadRequest, $ossRuntime);
        $abstractEcommerceVideoReq->videoUrl = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->abstractEcommerceVideo($abstractEcommerceVideoReq, $runtime);
    }

    /**
     * @param AbstractFilmVideoRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return AbstractFilmVideoResponse
     */
    public function abstractFilmVideo($request, $runtime)
    {
        Utils::validateModel($request);

        return AbstractFilmVideoResponse::fromMap($this->doRequest('AbstractFilmVideo', 'HTTPS', 'POST', '2020-03-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param AbstractFilmVideoRequest $request
     *
     * @return AbstractFilmVideoResponse
     */
    public function abstractFilmVideoSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->abstractFilmVideo($request, $runtime);
    }

    /**
     * @param AbstractFilmVideoAdvanceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return AbstractFilmVideoResponse
     */
    public function abstractFilmVideoAdvance($request, $runtime)
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
            'product'  => 'videoenhan',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig    = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient     = null;
        $fileObj       = new FileField([]);
        $ossHeader     = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime    = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $abstractFilmVideoReq = new AbstractFilmVideoRequest([]);
        RpcUtils::convert($request, $abstractFilmVideoReq);
        $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        $ossConfig->accessKeyId = $authResponse->accessKeyId;
        $ossConfig->endpoint    = RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
        $ossClient              = new OSS($ossConfig);
        $fileObj                = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->videoUrlObject,
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
        $ossClient->postObject($uploadRequest, $ossRuntime);
        $abstractFilmVideoReq->videoUrl = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->abstractFilmVideo($abstractFilmVideoReq, $runtime);
    }

    /**
     * @param AdjustVideoColorRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return AdjustVideoColorResponse
     */
    public function adjustVideoColor($request, $runtime)
    {
        Utils::validateModel($request);

        return AdjustVideoColorResponse::fromMap($this->doRequest('AdjustVideoColor', 'HTTPS', 'POST', '2020-03-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param AdjustVideoColorRequest $request
     *
     * @return AdjustVideoColorResponse
     */
    public function adjustVideoColorSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->adjustVideoColor($request, $runtime);
    }

    /**
     * @param AdjustVideoColorAdvanceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return AdjustVideoColorResponse
     */
    public function adjustVideoColorAdvance($request, $runtime)
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
            'product'  => 'videoenhan',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig    = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient     = null;
        $fileObj       = new FileField([]);
        $ossHeader     = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime    = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $adjustVideoColorReq = new AdjustVideoColorRequest([]);
        RpcUtils::convert($request, $adjustVideoColorReq);
        $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        $ossConfig->accessKeyId = $authResponse->accessKeyId;
        $ossConfig->endpoint    = RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
        $ossClient              = new OSS($ossConfig);
        $fileObj                = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->videoUrlObject,
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
        $ossClient->postObject($uploadRequest, $ossRuntime);
        $adjustVideoColorReq->videoUrl = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->adjustVideoColor($adjustVideoColorReq, $runtime);
    }

    /**
     * @param string   $productId
     * @param string   $regionId
     * @param string   $endpointRule
     * @param string   $network
     * @param string   $suffix
     * @param string[] $endpointMap
     * @param string   $endpoint
     *
     * @return string
     */
    public function getEndpoint($productId, $regionId, $endpointRule, $network, $suffix, $endpointMap, $endpoint)
    {
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }
}
