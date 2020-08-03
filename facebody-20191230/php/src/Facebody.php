<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Facebody\V20191230\Models\AddFaceAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\AddFaceEntityRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\AddFaceEntityResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\AddFaceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\AddFaceResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\BodyPostureAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\BodyPostureRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\BodyPostureResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\CompareFaceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\CompareFaceResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\CreateFaceDbRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\CreateFaceDbResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DeleteFaceDbRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DeleteFaceDbResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DeleteFaceEntityRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DeleteFaceEntityResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DeleteFaceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DeleteFaceResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectBodyCountAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectBodyCountRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectBodyCountResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectCelebrityAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectCelebrityRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectCelebrityResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectFaceAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectFaceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectFaceResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectLivingFaceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectLivingFaceResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectMaskAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectMaskRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectMaskResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectPedestrianAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectPedestrianRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectPedestrianResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectVideoLivingFaceAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectVideoLivingFaceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectVideoLivingFaceResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\EnhanceFaceAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\EnhanceFaceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\EnhanceFaceResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\ExtractPedestrianFeatureAttributeAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\ExtractPedestrianFeatureAttributeRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\ExtractPedestrianFeatureAttributeResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\FaceBeautyAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\FaceBeautyRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\FaceBeautyResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\FaceFilterAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\FaceFilterRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\FaceFilterResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\FaceMakeupAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\FaceMakeupRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\FaceMakeupResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\FaceTidyupAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\FaceTidyupRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\FaceTidyupResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\GetFaceEntityRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\GetFaceEntityResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\HandPostureAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\HandPostureRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\HandPostureResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\ListFaceDbsRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\ListFaceDbsResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\ListFaceEntitiesRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\ListFaceEntitiesResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\RecognizeActionRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\RecognizeActionResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\RecognizeExpressionAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\RecognizeExpressionRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\RecognizeExpressionResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\RecognizeFaceAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\RecognizeFaceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\RecognizeFaceResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\RecognizePublicFaceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\RecognizePublicFaceResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\SearchFaceAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\SearchFaceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\SearchFaceResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\SwapFacialFeaturesAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\SwapFacialFeaturesRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\SwapFacialFeaturesResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\UpdateFaceEntityRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\UpdateFaceEntityResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\VerifyFaceMaskAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\VerifyFaceMaskRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\VerifyFaceMaskResponse;
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

class Facebody extends Rpc
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('facebody', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param ExtractPedestrianFeatureAttributeRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return ExtractPedestrianFeatureAttributeResponse
     */
    public function extractPedestrianFeatureAttribute($request, $runtime)
    {
        Utils::validateModel($request);

        return ExtractPedestrianFeatureAttributeResponse::fromMap($this->doRequest('ExtractPedestrianFeatureAttribute', 'HTTPS', 'POST', '2019-12-30', 'AK', null, $request, $runtime));
    }

    /**
     * @param ExtractPedestrianFeatureAttributeAdvanceRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return ExtractPedestrianFeatureAttributeResponse
     */
    public function extractPedestrianFeatureAttributeAdvance($request, $runtime)
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
            'product'  => 'facebody',
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
        $extractPedestrianFeatureAttributereq = new ExtractPedestrianFeatureAttributeRequest([]);
        RpcUtils::convert($request, $extractPedestrianFeatureAttributereq);
        $extractPedestrianFeatureAttributereq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->extractPedestrianFeatureAttribute($extractPedestrianFeatureAttributereq, $runtime);
    }

    /**
     * @param DetectCelebrityRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DetectCelebrityResponse
     */
    public function detectCelebrity($request, $runtime)
    {
        Utils::validateModel($request);

        return DetectCelebrityResponse::fromMap($this->doRequest('DetectCelebrity', 'HTTPS', 'POST', '2019-12-30', 'AK', null, $request, $runtime));
    }

    /**
     * @param DetectCelebrityAdvanceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DetectCelebrityResponse
     */
    public function detectCelebrityAdvance($request, $runtime)
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
            'product'  => 'facebody',
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
        $detectCelebrityreq = new DetectCelebrityRequest([]);
        RpcUtils::convert($request, $detectCelebrityreq);
        $detectCelebrityreq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->detectCelebrity($detectCelebrityreq, $runtime);
    }

    /**
     * @param VerifyFaceMaskRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return VerifyFaceMaskResponse
     */
    public function verifyFaceMask($request, $runtime)
    {
        Utils::validateModel($request);

        return VerifyFaceMaskResponse::fromMap($this->doRequest('VerifyFaceMask', 'HTTPS', 'POST', '2019-12-30', 'AK', null, $request, $runtime));
    }

    /**
     * @param VerifyFaceMaskAdvanceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return VerifyFaceMaskResponse
     */
    public function verifyFaceMaskAdvance($request, $runtime)
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
            'product'  => 'facebody',
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
        $verifyFaceMaskreq = new VerifyFaceMaskRequest([]);
        RpcUtils::convert($request, $verifyFaceMaskreq);
        $verifyFaceMaskreq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->verifyFaceMask($verifyFaceMaskreq, $runtime);
    }

    /**
     * @param RecognizeActionRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return RecognizeActionResponse
     */
    public function recognizeAction($request, $runtime)
    {
        Utils::validateModel($request);

        return RecognizeActionResponse::fromMap($this->doRequest('RecognizeAction', 'HTTPS', 'POST', '2019-12-30', 'AK', null, $request, $runtime));
    }

    /**
     * @param DetectVideoLivingFaceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DetectVideoLivingFaceResponse
     */
    public function detectVideoLivingFace($request, $runtime)
    {
        Utils::validateModel($request);

        return DetectVideoLivingFaceResponse::fromMap($this->doRequest('DetectVideoLivingFace', 'HTTPS', 'POST', '2019-12-30', 'AK', null, $request, $runtime));
    }

    /**
     * @param DetectVideoLivingFaceAdvanceRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DetectVideoLivingFaceResponse
     */
    public function detectVideoLivingFaceAdvance($request, $runtime)
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
            'product'  => 'facebody',
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
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        // Step 2: request final api
        $detectVideoLivingFacereq = new DetectVideoLivingFaceRequest([]);
        RpcUtils::convert($request, $detectVideoLivingFacereq);
        $detectVideoLivingFacereq->videoUrl = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->detectVideoLivingFace($detectVideoLivingFacereq, $runtime);
    }

    /**
     * @param SwapFacialFeaturesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SwapFacialFeaturesResponse
     */
    public function swapFacialFeatures($request, $runtime)
    {
        Utils::validateModel($request);

        return SwapFacialFeaturesResponse::fromMap($this->doRequest('SwapFacialFeatures', 'HTTPS', 'POST', '2019-12-30', 'AK', null, $request, $runtime));
    }

    /**
     * @param SwapFacialFeaturesAdvanceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return SwapFacialFeaturesResponse
     */
    public function swapFacialFeaturesAdvance($request, $runtime)
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
            'product'  => 'facebody',
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
            'content'     => $request->sourceImageURLObject,
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
        $swapFacialFeaturesreq = new SwapFacialFeaturesRequest([]);
        RpcUtils::convert($request, $swapFacialFeaturesreq);
        $swapFacialFeaturesreq->sourceImageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->swapFacialFeatures($swapFacialFeaturesreq, $runtime);
    }

    /**
     * @param AddFaceEntityRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return AddFaceEntityResponse
     */
    public function addFaceEntity($request, $runtime)
    {
        Utils::validateModel($request);

        return AddFaceEntityResponse::fromMap($this->doRequest('AddFaceEntity', 'HTTPS', 'POST', '2019-12-30', 'AK', null, $request, $runtime));
    }

    /**
     * @param DeleteFaceEntityRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteFaceEntityResponse
     */
    public function deleteFaceEntity($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteFaceEntityResponse::fromMap($this->doRequest('DeleteFaceEntity', 'HTTPS', 'POST', '2019-12-30', 'AK', null, $request, $runtime));
    }

    /**
     * @param ListFaceEntitiesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListFaceEntitiesResponse
     */
    public function listFaceEntities($request, $runtime)
    {
        Utils::validateModel($request);

        return ListFaceEntitiesResponse::fromMap($this->doRequest('ListFaceEntities', 'HTTPS', 'POST', '2019-12-30', 'AK', null, $request, $runtime));
    }

    /**
     * @param GetFaceEntityRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetFaceEntityResponse
     */
    public function getFaceEntity($request, $runtime)
    {
        Utils::validateModel($request);

        return GetFaceEntityResponse::fromMap($this->doRequest('GetFaceEntity', 'HTTPS', 'POST', '2019-12-30', 'AK', null, $request, $runtime));
    }

    /**
     * @param UpdateFaceEntityRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateFaceEntityResponse
     */
    public function updateFaceEntity($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateFaceEntityResponse::fromMap($this->doRequest('UpdateFaceEntity', 'HTTPS', 'POST', '2019-12-30', 'AK', null, $request, $runtime));
    }

    /**
     * @param FaceMakeupRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return FaceMakeupResponse
     */
    public function faceMakeup($request, $runtime)
    {
        Utils::validateModel($request);

        return FaceMakeupResponse::fromMap($this->doRequest('FaceMakeup', 'HTTPS', 'POST', '2019-12-30', 'AK', null, $request, $runtime));
    }

    /**
     * @param FaceMakeupAdvanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return FaceMakeupResponse
     */
    public function faceMakeupAdvance($request, $runtime)
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
            'product'  => 'facebody',
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
        $faceMakeupreq = new FaceMakeupRequest([]);
        RpcUtils::convert($request, $faceMakeupreq);
        $faceMakeupreq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->faceMakeup($faceMakeupreq, $runtime);
    }

    /**
     * @param HandPostureRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return HandPostureResponse
     */
    public function handPosture($request, $runtime)
    {
        Utils::validateModel($request);

        return HandPostureResponse::fromMap($this->doRequest('HandPosture', 'HTTPS', 'POST', '2019-12-30', 'AK', null, $request, $runtime));
    }

    /**
     * @param HandPostureAdvanceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return HandPostureResponse
     */
    public function handPostureAdvance($request, $runtime)
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
            'product'  => 'facebody',
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
        $handPosturereq = new HandPostureRequest([]);
        RpcUtils::convert($request, $handPosturereq);
        $handPosturereq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->handPosture($handPosturereq, $runtime);
    }

    /**
     * @param BodyPostureRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return BodyPostureResponse
     */
    public function bodyPosture($request, $runtime)
    {
        Utils::validateModel($request);

        return BodyPostureResponse::fromMap($this->doRequest('BodyPosture', 'HTTPS', 'POST', '2019-12-30', 'AK', null, $request, $runtime));
    }

    /**
     * @param BodyPostureAdvanceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return BodyPostureResponse
     */
    public function bodyPostureAdvance($request, $runtime)
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
            'product'  => 'facebody',
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
        $bodyPosturereq = new BodyPostureRequest([]);
        RpcUtils::convert($request, $bodyPosturereq);
        $bodyPosturereq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->bodyPosture($bodyPosturereq, $runtime);
    }

    /**
     * @param DetectPedestrianRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DetectPedestrianResponse
     */
    public function detectPedestrian($request, $runtime)
    {
        Utils::validateModel($request);

        return DetectPedestrianResponse::fromMap($this->doRequest('DetectPedestrian', 'HTTPS', 'POST', '2019-12-30', 'AK', null, $request, $runtime));
    }

    /**
     * @param DetectPedestrianAdvanceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DetectPedestrianResponse
     */
    public function detectPedestrianAdvance($request, $runtime)
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
            'product'  => 'facebody',
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
        $detectPedestrianreq = new DetectPedestrianRequest([]);
        RpcUtils::convert($request, $detectPedestrianreq);
        $detectPedestrianreq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->detectPedestrian($detectPedestrianreq, $runtime);
    }

    /**
     * @param FaceBeautyRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return FaceBeautyResponse
     */
    public function faceBeauty($request, $runtime)
    {
        Utils::validateModel($request);

        return FaceBeautyResponse::fromMap($this->doRequest('FaceBeauty', 'HTTPS', 'POST', '2019-12-30', 'AK', null, $request, $runtime));
    }

    /**
     * @param FaceBeautyAdvanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return FaceBeautyResponse
     */
    public function faceBeautyAdvance($request, $runtime)
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
            'product'  => 'facebody',
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
        $faceBeautyreq = new FaceBeautyRequest([]);
        RpcUtils::convert($request, $faceBeautyreq);
        $faceBeautyreq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->faceBeauty($faceBeautyreq, $runtime);
    }

    /**
     * @param FaceFilterRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return FaceFilterResponse
     */
    public function faceFilter($request, $runtime)
    {
        Utils::validateModel($request);

        return FaceFilterResponse::fromMap($this->doRequest('FaceFilter', 'HTTPS', 'POST', '2019-12-30', 'AK', null, $request, $runtime));
    }

    /**
     * @param FaceFilterAdvanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return FaceFilterResponse
     */
    public function faceFilterAdvance($request, $runtime)
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
            'product'  => 'facebody',
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
        $faceFilterreq = new FaceFilterRequest([]);
        RpcUtils::convert($request, $faceFilterreq);
        $faceFilterreq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->faceFilter($faceFilterreq, $runtime);
    }

    /**
     * @param EnhanceFaceRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return EnhanceFaceResponse
     */
    public function enhanceFace($request, $runtime)
    {
        Utils::validateModel($request);

        return EnhanceFaceResponse::fromMap($this->doRequest('EnhanceFace', 'HTTPS', 'POST', '2019-12-30', 'AK', null, $request, $runtime));
    }

    /**
     * @param EnhanceFaceAdvanceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return EnhanceFaceResponse
     */
    public function enhanceFaceAdvance($request, $runtime)
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
            'product'  => 'facebody',
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
        $enhanceFacereq = new EnhanceFaceRequest([]);
        RpcUtils::convert($request, $enhanceFacereq);
        $enhanceFacereq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->enhanceFace($enhanceFacereq, $runtime);
    }

    /**
     * @param FaceTidyupRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return FaceTidyupResponse
     */
    public function faceTidyup($request, $runtime)
    {
        Utils::validateModel($request);

        return FaceTidyupResponse::fromMap($this->doRequest('FaceTidyup', 'HTTPS', 'POST', '2019-12-30', 'AK', null, $request, $runtime));
    }

    /**
     * @param FaceTidyupAdvanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return FaceTidyupResponse
     */
    public function faceTidyupAdvance($request, $runtime)
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
            'product'  => 'facebody',
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
        $faceTidyupreq = new FaceTidyupRequest([]);
        RpcUtils::convert($request, $faceTidyupreq);
        $faceTidyupreq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->faceTidyup($faceTidyupreq, $runtime);
    }

    /**
     * @param SearchFaceRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return SearchFaceResponse
     */
    public function searchFace($request, $runtime)
    {
        Utils::validateModel($request);

        return SearchFaceResponse::fromMap($this->doRequest('SearchFace', 'HTTPS', 'POST', '2019-12-30', 'AK', null, $request, $runtime));
    }

    /**
     * @param SearchFaceAdvanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SearchFaceResponse
     */
    public function searchFaceAdvance($request, $runtime)
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
            'product'  => 'facebody',
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
            'content'     => $request->imageUrlObject,
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
        $searchFacereq = new SearchFaceRequest([]);
        RpcUtils::convert($request, $searchFacereq);
        $searchFacereq->imageUrl = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->searchFace($searchFacereq, $runtime);
    }

    /**
     * @param ListFaceDbsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListFaceDbsResponse
     */
    public function listFaceDbs($request, $runtime)
    {
        Utils::validateModel($request);

        return ListFaceDbsResponse::fromMap($this->doRequest('ListFaceDbs', 'HTTPS', 'POST', '2019-12-30', 'AK', null, $request, $runtime));
    }

    /**
     * @param CreateFaceDbRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateFaceDbResponse
     */
    public function createFaceDb($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateFaceDbResponse::fromMap($this->doRequest('CreateFaceDb', 'HTTPS', 'POST', '2019-12-30', 'AK', null, $request, $runtime));
    }

    /**
     * @param DeleteFaceRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteFaceResponse
     */
    public function deleteFace($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteFaceResponse::fromMap($this->doRequest('DeleteFace', 'HTTPS', 'POST', '2019-12-30', 'AK', null, $request, $runtime));
    }

    /**
     * @param DeleteFaceDbRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteFaceDbResponse
     */
    public function deleteFaceDb($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteFaceDbResponse::fromMap($this->doRequest('DeleteFaceDb', 'HTTPS', 'POST', '2019-12-30', 'AK', null, $request, $runtime));
    }

    /**
     * @param AddFaceRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return AddFaceResponse
     */
    public function addFace($request, $runtime)
    {
        Utils::validateModel($request);

        return AddFaceResponse::fromMap($this->doRequest('AddFace', 'HTTPS', 'POST', '2019-12-30', 'AK', null, $request, $runtime));
    }

    /**
     * @param AddFaceAdvanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return AddFaceResponse
     */
    public function addFaceAdvance($request, $runtime)
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
            'product'  => 'facebody',
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
            'content'     => $request->imageUrlObject,
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
        $addFacereq = new AddFaceRequest([]);
        RpcUtils::convert($request, $addFacereq);
        $addFacereq->imageUrl = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->addFace($addFacereq, $runtime);
    }

    /**
     * @param RecognizeExpressionRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RecognizeExpressionResponse
     */
    public function recognizeExpression($request, $runtime)
    {
        Utils::validateModel($request);

        return RecognizeExpressionResponse::fromMap($this->doRequest('RecognizeExpression', 'HTTPS', 'POST', '2019-12-30', 'AK', null, $request, $runtime));
    }

    /**
     * @param RecognizeExpressionAdvanceRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return RecognizeExpressionResponse
     */
    public function recognizeExpressionAdvance($request, $runtime)
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
            'product'  => 'facebody',
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
        $recognizeExpressionreq = new RecognizeExpressionRequest([]);
        RpcUtils::convert($request, $recognizeExpressionreq);
        $recognizeExpressionreq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->recognizeExpression($recognizeExpressionreq, $runtime);
    }

    /**
     * @param RecognizePublicFaceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RecognizePublicFaceResponse
     */
    public function recognizePublicFace($request, $runtime)
    {
        Utils::validateModel($request);

        return RecognizePublicFaceResponse::fromMap($this->doRequest('RecognizePublicFace', 'HTTPS', 'POST', '2019-12-30', 'AK', null, $request, $runtime));
    }

    /**
     * @param DetectLivingFaceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DetectLivingFaceResponse
     */
    public function detectLivingFace($request, $runtime)
    {
        Utils::validateModel($request);

        return DetectLivingFaceResponse::fromMap($this->doRequest('DetectLivingFace', 'HTTPS', 'POST', '2019-12-30', 'AK', null, $request, $runtime));
    }

    /**
     * @param DetectBodyCountRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DetectBodyCountResponse
     */
    public function detectBodyCount($request, $runtime)
    {
        Utils::validateModel($request);

        return DetectBodyCountResponse::fromMap($this->doRequest('DetectBodyCount', 'HTTPS', 'POST', '2019-12-30', 'AK', null, $request, $runtime));
    }

    /**
     * @param DetectBodyCountAdvanceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DetectBodyCountResponse
     */
    public function detectBodyCountAdvance($request, $runtime)
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
            'product'  => 'facebody',
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
        $detectBodyCountreq = new DetectBodyCountRequest([]);
        RpcUtils::convert($request, $detectBodyCountreq);
        $detectBodyCountreq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->detectBodyCount($detectBodyCountreq, $runtime);
    }

    /**
     * @param DetectMaskRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DetectMaskResponse
     */
    public function detectMask($request, $runtime)
    {
        Utils::validateModel($request);

        return DetectMaskResponse::fromMap($this->doRequest('DetectMask', 'HTTPS', 'POST', '2019-12-30', 'AK', null, $request, $runtime));
    }

    /**
     * @param DetectMaskAdvanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DetectMaskResponse
     */
    public function detectMaskAdvance($request, $runtime)
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
            'product'  => 'facebody',
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
        $detectMaskreq = new DetectMaskRequest([]);
        RpcUtils::convert($request, $detectMaskreq);
        $detectMaskreq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->detectMask($detectMaskreq, $runtime);
    }

    /**
     * @param RecognizeFaceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return RecognizeFaceResponse
     */
    public function recognizeFace($request, $runtime)
    {
        Utils::validateModel($request);

        return RecognizeFaceResponse::fromMap($this->doRequest('RecognizeFace', 'HTTPS', 'POST', '2019-12-30', 'AK', null, $request, $runtime));
    }

    /**
     * @param RecognizeFaceAdvanceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return RecognizeFaceResponse
     */
    public function recognizeFaceAdvance($request, $runtime)
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
            'product'  => 'facebody',
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
        $recognizeFacereq = new RecognizeFaceRequest([]);
        RpcUtils::convert($request, $recognizeFacereq);
        $recognizeFacereq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->recognizeFace($recognizeFacereq, $runtime);
    }

    /**
     * @param CompareFaceRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CompareFaceResponse
     */
    public function compareFace($request, $runtime)
    {
        Utils::validateModel($request);

        return CompareFaceResponse::fromMap($this->doRequest('CompareFace', 'HTTPS', 'POST', '2019-12-30', 'AK', null, $request, $runtime));
    }

    /**
     * @param DetectFaceRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DetectFaceResponse
     */
    public function detectFace($request, $runtime)
    {
        Utils::validateModel($request);

        return DetectFaceResponse::fromMap($this->doRequest('DetectFace', 'HTTPS', 'POST', '2019-12-30', 'AK', null, $request, $runtime));
    }

    /**
     * @param DetectFaceAdvanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DetectFaceResponse
     */
    public function detectFaceAdvance($request, $runtime)
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
            'product'  => 'facebody',
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
        $detectFacereq = new DetectFaceRequest([]);
        RpcUtils::convert($request, $detectFacereq);
        $detectFacereq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->detectFace($detectFacereq, $runtime);
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
