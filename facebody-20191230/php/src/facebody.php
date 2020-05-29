<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\facebody\V20191230;

use AlibabaCloud\Tea\Rpc\Rpc;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform;
use AlibabaCloud\Tea\RpcUtils\RpcUtils;
use AlibabaCloud\SDK\OSS\OSS;
use AlibabaCloud\Endpoint\Endpoint;

use AlibabaCloud\SDK\facebody\V20191230\Models\DetectVideoLivingFaceRequest;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use AlibabaCloud\SDK\facebody\V20191230\Models\DetectVideoLivingFaceResponse;
use AlibabaCloud\SDK\facebody\V20191230\Models\DetectVideoLivingFaceAdvanceRequest;
use AlibabaCloud\Tea\Rpc\Rpc\Config;
use AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform\AuthorizeFileUploadRequest;
use AlibabaCloud\Tea\FileForm\FileForm\FileField;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest\header;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest;
use AlibabaCloud\SDK\facebody\V20191230\Models\SwapFacialFeaturesRequest;
use AlibabaCloud\SDK\facebody\V20191230\Models\SwapFacialFeaturesResponse;
use AlibabaCloud\SDK\facebody\V20191230\Models\SwapFacialFeaturesAdvanceRequest;
use AlibabaCloud\SDK\facebody\V20191230\Models\AddFaceEntityRequest;
use AlibabaCloud\SDK\facebody\V20191230\Models\AddFaceEntityResponse;
use AlibabaCloud\SDK\facebody\V20191230\Models\DeleteFaceEntityRequest;
use AlibabaCloud\SDK\facebody\V20191230\Models\DeleteFaceEntityResponse;
use AlibabaCloud\SDK\facebody\V20191230\Models\ListFaceEntitiesRequest;
use AlibabaCloud\SDK\facebody\V20191230\Models\ListFaceEntitiesResponse;
use AlibabaCloud\SDK\facebody\V20191230\Models\GetFaceEntityRequest;
use AlibabaCloud\SDK\facebody\V20191230\Models\GetFaceEntityResponse;
use AlibabaCloud\SDK\facebody\V20191230\Models\UpdateFaceEntityRequest;
use AlibabaCloud\SDK\facebody\V20191230\Models\UpdateFaceEntityResponse;
use AlibabaCloud\SDK\facebody\V20191230\Models\FaceMakeupRequest;
use AlibabaCloud\SDK\facebody\V20191230\Models\FaceMakeupResponse;
use AlibabaCloud\SDK\facebody\V20191230\Models\FaceMakeupAdvanceRequest;
use AlibabaCloud\SDK\facebody\V20191230\Models\HandPostureRequest;
use AlibabaCloud\SDK\facebody\V20191230\Models\HandPostureResponse;
use AlibabaCloud\SDK\facebody\V20191230\Models\HandPostureAdvanceRequest;
use AlibabaCloud\SDK\facebody\V20191230\Models\BodyPostureRequest;
use AlibabaCloud\SDK\facebody\V20191230\Models\BodyPostureResponse;
use AlibabaCloud\SDK\facebody\V20191230\Models\BodyPostureAdvanceRequest;
use AlibabaCloud\SDK\facebody\V20191230\Models\DetectPedestrianRequest;
use AlibabaCloud\SDK\facebody\V20191230\Models\DetectPedestrianResponse;
use AlibabaCloud\SDK\facebody\V20191230\Models\DetectPedestrianAdvanceRequest;
use AlibabaCloud\SDK\facebody\V20191230\Models\FaceBeautyRequest;
use AlibabaCloud\SDK\facebody\V20191230\Models\FaceBeautyResponse;
use AlibabaCloud\SDK\facebody\V20191230\Models\FaceBeautyAdvanceRequest;
use AlibabaCloud\SDK\facebody\V20191230\Models\FaceFilterRequest;
use AlibabaCloud\SDK\facebody\V20191230\Models\FaceFilterResponse;
use AlibabaCloud\SDK\facebody\V20191230\Models\FaceFilterAdvanceRequest;
use AlibabaCloud\SDK\facebody\V20191230\Models\EnhanceFaceRequest;
use AlibabaCloud\SDK\facebody\V20191230\Models\EnhanceFaceResponse;
use AlibabaCloud\SDK\facebody\V20191230\Models\EnhanceFaceAdvanceRequest;
use AlibabaCloud\SDK\facebody\V20191230\Models\FaceTidyupRequest;
use AlibabaCloud\SDK\facebody\V20191230\Models\FaceTidyupResponse;
use AlibabaCloud\SDK\facebody\V20191230\Models\FaceTidyupAdvanceRequest;
use AlibabaCloud\SDK\facebody\V20191230\Models\SearchFaceRequest;
use AlibabaCloud\SDK\facebody\V20191230\Models\SearchFaceResponse;
use AlibabaCloud\SDK\facebody\V20191230\Models\SearchFaceAdvanceRequest;
use AlibabaCloud\SDK\facebody\V20191230\Models\ListFaceDbsRequest;
use AlibabaCloud\SDK\facebody\V20191230\Models\ListFaceDbsResponse;
use AlibabaCloud\SDK\facebody\V20191230\Models\CreateFaceDbRequest;
use AlibabaCloud\SDK\facebody\V20191230\Models\CreateFaceDbResponse;
use AlibabaCloud\SDK\facebody\V20191230\Models\DeleteFaceRequest;
use AlibabaCloud\SDK\facebody\V20191230\Models\DeleteFaceResponse;
use AlibabaCloud\SDK\facebody\V20191230\Models\DeleteFaceDbRequest;
use AlibabaCloud\SDK\facebody\V20191230\Models\DeleteFaceDbResponse;
use AlibabaCloud\SDK\facebody\V20191230\Models\AddFaceRequest;
use AlibabaCloud\SDK\facebody\V20191230\Models\AddFaceResponse;
use AlibabaCloud\SDK\facebody\V20191230\Models\AddFaceAdvanceRequest;
use AlibabaCloud\SDK\facebody\V20191230\Models\RecognizeExpressionRequest;
use AlibabaCloud\SDK\facebody\V20191230\Models\RecognizeExpressionResponse;
use AlibabaCloud\SDK\facebody\V20191230\Models\RecognizeExpressionAdvanceRequest;
use AlibabaCloud\SDK\facebody\V20191230\Models\RecognizePublicFaceRequest;
use AlibabaCloud\SDK\facebody\V20191230\Models\RecognizePublicFaceResponse;
use AlibabaCloud\SDK\facebody\V20191230\Models\DetectLivingFaceRequest;
use AlibabaCloud\SDK\facebody\V20191230\Models\DetectLivingFaceResponse;
use AlibabaCloud\SDK\facebody\V20191230\Models\DetectBodyCountRequest;
use AlibabaCloud\SDK\facebody\V20191230\Models\DetectBodyCountResponse;
use AlibabaCloud\SDK\facebody\V20191230\Models\DetectBodyCountAdvanceRequest;
use AlibabaCloud\SDK\facebody\V20191230\Models\DetectMaskRequest;
use AlibabaCloud\SDK\facebody\V20191230\Models\DetectMaskResponse;
use AlibabaCloud\SDK\facebody\V20191230\Models\DetectMaskAdvanceRequest;
use AlibabaCloud\SDK\facebody\V20191230\Models\RecognizeFaceRequest;
use AlibabaCloud\SDK\facebody\V20191230\Models\RecognizeFaceResponse;
use AlibabaCloud\SDK\facebody\V20191230\Models\RecognizeFaceAdvanceRequest;
use AlibabaCloud\SDK\facebody\V20191230\Models\CompareFaceRequest;
use AlibabaCloud\SDK\facebody\V20191230\Models\CompareFaceResponse;
use AlibabaCloud\SDK\facebody\V20191230\Models\DetectFaceRequest;
use AlibabaCloud\SDK\facebody\V20191230\Models\DetectFaceResponse;
use AlibabaCloud\SDK\facebody\V20191230\Models\DetectFaceAdvanceRequest;

class facebody extends Rpc {
    public function __construct($config){
        parent::__construct($config);
        $this->_endpointRule = "regional";
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint($this->_productId, $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param DetectVideoLivingFaceRequest $request
     * @param RuntimeOptions $runtime
     * @return DetectVideoLivingFaceResponse
     * @throws \Exception
     */
    public function detectVideoLivingFace(DetectVideoLivingFaceRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DetectVideoLivingFaceResponse::fromMap($this->doRequest("DetectVideoLivingFace", "HTTPS", "POST", "2019-12-30", "AK", null, $request, $runtime));
    }

    /**
     * @param DetectVideoLivingFaceAdvanceRequest $request
     * @param RuntimeOptions $runtime
     * @return DetectVideoLivingFaceResponse
     * @throws \Exception
     */
    public function detectVideoLivingFaceAdvance(DetectVideoLivingFaceAdvanceRequest $request, RuntimeOptions $runtime){
        // Step 0: init client
        $accessKeyId = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig = new Config([
            "accessKeyId" => $accessKeyId,
            "accessKeySecret" => $accessKeySecret,
            "type" => "access_key",
            "endpoint" => "openplatform.aliyuncs.com",
            "protocol" => $this->_protocol,
            "regionId" => $this->_regionId
            ]);
        $authClient = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            "product" => "facebody",
            "regionId" => $this->_regionId
            ]);
        $authResponse = $authClient->authorizeFileUpload($authRequest, $runtime);
        // Step 1: request OSS api to upload file
        $ossConfig = new \AlibabaCloud\SDK\OSS\OSS\Config([
            "accessKeyId" => $authResponse->accessKeyId,
            "accessKeySecret" => $accessKeySecret,
            "type" => "access_key",
            "endpoint" => RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType),
            "protocol" => $this->_protocol,
            "regionId" => $this->_regionId
            ]);
        $ossClient = new OSS($ossConfig);
        $fileObj = new FileField([
            "filename" => $authResponse->objectKey,
            "content" => $request->videoUrlObject,
            "contentType" => ""
            ]);
        $ossHeader = new header([
            "accessKeyId" => $authResponse->accessKeyId,
            "policy" => $authResponse->encodedPolicy,
            "signature" => $authResponse->signature,
            "key" => $authResponse->objectKey,
            "file" => $fileObj,
            "successActionStatus" => "201"
            ]);
        $uploadRequest = new PostObjectRequest([
            "bucketName" => $authResponse->bucket,
            "header" => $ossHeader
            ]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        // Step 2: request final api
        $detectVideoLivingFacereq = new DetectVideoLivingFaceRequest([]);
        RpcUtils::convert($request, $detectVideoLivingFacereq);
        $detectVideoLivingFacereq->videoUrl = "http://" . $authResponse->bucket . "." . $authResponse->endpoint . "/" . $authResponse->objectKey . "";
        $detectVideoLivingFaceResp = $this->detectVideoLivingFace($detectVideoLivingFacereq, $runtime);
        return $detectVideoLivingFaceResp;
    }

    /**
     * @param SwapFacialFeaturesRequest $request
     * @param RuntimeOptions $runtime
     * @return SwapFacialFeaturesResponse
     * @throws \Exception
     */
    public function swapFacialFeatures(SwapFacialFeaturesRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return SwapFacialFeaturesResponse::fromMap($this->doRequest("SwapFacialFeatures", "HTTPS", "POST", "2019-12-30", "AK", null, $request, $runtime));
    }

    /**
     * @param SwapFacialFeaturesAdvanceRequest $request
     * @param RuntimeOptions $runtime
     * @return SwapFacialFeaturesResponse
     * @throws \Exception
     */
    public function swapFacialFeaturesAdvance(SwapFacialFeaturesAdvanceRequest $request, RuntimeOptions $runtime){
        // Step 0: init client
        $accessKeyId = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig = new Config([
            "accessKeyId" => $accessKeyId,
            "accessKeySecret" => $accessKeySecret,
            "type" => "access_key",
            "endpoint" => "openplatform.aliyuncs.com",
            "protocol" => $this->_protocol,
            "regionId" => $this->_regionId
            ]);
        $authClient = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            "product" => "facebody",
            "regionId" => $this->_regionId
            ]);
        $authResponse = $authClient->authorizeFileUpload($authRequest, $runtime);
        // Step 1: request OSS api to upload file
        $ossConfig = new \AlibabaCloud\SDK\OSS\OSS\Config([
            "accessKeyId" => $authResponse->accessKeyId,
            "accessKeySecret" => $accessKeySecret,
            "type" => "access_key",
            "endpoint" => RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType),
            "protocol" => $this->_protocol,
            "regionId" => $this->_regionId
            ]);
        $ossClient = new OSS($ossConfig);
        $fileObj = new FileField([
            "filename" => $authResponse->objectKey,
            "content" => $request->sourceImageURLObject,
            "contentType" => ""
            ]);
        $ossHeader = new header([
            "accessKeyId" => $authResponse->accessKeyId,
            "policy" => $authResponse->encodedPolicy,
            "signature" => $authResponse->signature,
            "key" => $authResponse->objectKey,
            "file" => $fileObj,
            "successActionStatus" => "201"
            ]);
        $uploadRequest = new PostObjectRequest([
            "bucketName" => $authResponse->bucket,
            "header" => $ossHeader
            ]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        // Step 2: request final api
        $swapFacialFeaturesreq = new SwapFacialFeaturesRequest([]);
        RpcUtils::convert($request, $swapFacialFeaturesreq);
        $swapFacialFeaturesreq->sourceImageURL = "http://" . $authResponse->bucket . "." . $authResponse->endpoint . "/" . $authResponse->objectKey . "";
        $swapFacialFeaturesResp = $this->swapFacialFeatures($swapFacialFeaturesreq, $runtime);
        return $swapFacialFeaturesResp;
    }

    /**
     * @param AddFaceEntityRequest $request
     * @param RuntimeOptions $runtime
     * @return AddFaceEntityResponse
     * @throws \Exception
     */
    public function addFaceEntity(AddFaceEntityRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return AddFaceEntityResponse::fromMap($this->doRequest("AddFaceEntity", "HTTPS", "POST", "2019-12-30", "AK", null, $request, $runtime));
    }

    /**
     * @param DeleteFaceEntityRequest $request
     * @param RuntimeOptions $runtime
     * @return DeleteFaceEntityResponse
     * @throws \Exception
     */
    public function deleteFaceEntity(DeleteFaceEntityRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DeleteFaceEntityResponse::fromMap($this->doRequest("DeleteFaceEntity", "HTTPS", "POST", "2019-12-30", "AK", null, $request, $runtime));
    }

    /**
     * @param ListFaceEntitiesRequest $request
     * @param RuntimeOptions $runtime
     * @return ListFaceEntitiesResponse
     * @throws \Exception
     */
    public function listFaceEntities(ListFaceEntitiesRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ListFaceEntitiesResponse::fromMap($this->doRequest("ListFaceEntities", "HTTPS", "POST", "2019-12-30", "AK", null, $request, $runtime));
    }

    /**
     * @param GetFaceEntityRequest $request
     * @param RuntimeOptions $runtime
     * @return GetFaceEntityResponse
     * @throws \Exception
     */
    public function getFaceEntity(GetFaceEntityRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetFaceEntityResponse::fromMap($this->doRequest("GetFaceEntity", "HTTPS", "POST", "2019-12-30", "AK", null, $request, $runtime));
    }

    /**
     * @param UpdateFaceEntityRequest $request
     * @param RuntimeOptions $runtime
     * @return UpdateFaceEntityResponse
     * @throws \Exception
     */
    public function updateFaceEntity(UpdateFaceEntityRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return UpdateFaceEntityResponse::fromMap($this->doRequest("UpdateFaceEntity", "HTTPS", "POST", "2019-12-30", "AK", null, $request, $runtime));
    }

    /**
     * @param FaceMakeupRequest $request
     * @param RuntimeOptions $runtime
     * @return FaceMakeupResponse
     * @throws \Exception
     */
    public function faceMakeup(FaceMakeupRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return FaceMakeupResponse::fromMap($this->doRequest("FaceMakeup", "HTTPS", "POST", "2019-12-30", "AK", null, $request, $runtime));
    }

    /**
     * @param FaceMakeupAdvanceRequest $request
     * @param RuntimeOptions $runtime
     * @return FaceMakeupResponse
     * @throws \Exception
     */
    public function faceMakeupAdvance(FaceMakeupAdvanceRequest $request, RuntimeOptions $runtime){
        // Step 0: init client
        $accessKeyId = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig = new Config([
            "accessKeyId" => $accessKeyId,
            "accessKeySecret" => $accessKeySecret,
            "type" => "access_key",
            "endpoint" => "openplatform.aliyuncs.com",
            "protocol" => $this->_protocol,
            "regionId" => $this->_regionId
            ]);
        $authClient = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            "product" => "facebody",
            "regionId" => $this->_regionId
            ]);
        $authResponse = $authClient->authorizeFileUpload($authRequest, $runtime);
        // Step 1: request OSS api to upload file
        $ossConfig = new \AlibabaCloud\SDK\OSS\OSS\Config([
            "accessKeyId" => $authResponse->accessKeyId,
            "accessKeySecret" => $accessKeySecret,
            "type" => "access_key",
            "endpoint" => RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType),
            "protocol" => $this->_protocol,
            "regionId" => $this->_regionId
            ]);
        $ossClient = new OSS($ossConfig);
        $fileObj = new FileField([
            "filename" => $authResponse->objectKey,
            "content" => $request->imageURLObject,
            "contentType" => ""
            ]);
        $ossHeader = new header([
            "accessKeyId" => $authResponse->accessKeyId,
            "policy" => $authResponse->encodedPolicy,
            "signature" => $authResponse->signature,
            "key" => $authResponse->objectKey,
            "file" => $fileObj,
            "successActionStatus" => "201"
            ]);
        $uploadRequest = new PostObjectRequest([
            "bucketName" => $authResponse->bucket,
            "header" => $ossHeader
            ]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        // Step 2: request final api
        $faceMakeupreq = new FaceMakeupRequest([]);
        RpcUtils::convert($request, $faceMakeupreq);
        $faceMakeupreq->imageURL = "http://" . $authResponse->bucket . "." . $authResponse->endpoint . "/" . $authResponse->objectKey . "";
        $faceMakeupResp = $this->faceMakeup($faceMakeupreq, $runtime);
        return $faceMakeupResp;
    }

    /**
     * @param HandPostureRequest $request
     * @param RuntimeOptions $runtime
     * @return HandPostureResponse
     * @throws \Exception
     */
    public function handPosture(HandPostureRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return HandPostureResponse::fromMap($this->doRequest("HandPosture", "HTTPS", "POST", "2019-12-30", "AK", null, $request, $runtime));
    }

    /**
     * @param HandPostureAdvanceRequest $request
     * @param RuntimeOptions $runtime
     * @return HandPostureResponse
     * @throws \Exception
     */
    public function handPostureAdvance(HandPostureAdvanceRequest $request, RuntimeOptions $runtime){
        // Step 0: init client
        $accessKeyId = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig = new Config([
            "accessKeyId" => $accessKeyId,
            "accessKeySecret" => $accessKeySecret,
            "type" => "access_key",
            "endpoint" => "openplatform.aliyuncs.com",
            "protocol" => $this->_protocol,
            "regionId" => $this->_regionId
            ]);
        $authClient = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            "product" => "facebody",
            "regionId" => $this->_regionId
            ]);
        $authResponse = $authClient->authorizeFileUpload($authRequest, $runtime);
        // Step 1: request OSS api to upload file
        $ossConfig = new \AlibabaCloud\SDK\OSS\OSS\Config([
            "accessKeyId" => $authResponse->accessKeyId,
            "accessKeySecret" => $accessKeySecret,
            "type" => "access_key",
            "endpoint" => RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType),
            "protocol" => $this->_protocol,
            "regionId" => $this->_regionId
            ]);
        $ossClient = new OSS($ossConfig);
        $fileObj = new FileField([
            "filename" => $authResponse->objectKey,
            "content" => $request->imageURLObject,
            "contentType" => ""
            ]);
        $ossHeader = new header([
            "accessKeyId" => $authResponse->accessKeyId,
            "policy" => $authResponse->encodedPolicy,
            "signature" => $authResponse->signature,
            "key" => $authResponse->objectKey,
            "file" => $fileObj,
            "successActionStatus" => "201"
            ]);
        $uploadRequest = new PostObjectRequest([
            "bucketName" => $authResponse->bucket,
            "header" => $ossHeader
            ]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        // Step 2: request final api
        $handPosturereq = new HandPostureRequest([]);
        RpcUtils::convert($request, $handPosturereq);
        $handPosturereq->imageURL = "http://" . $authResponse->bucket . "." . $authResponse->endpoint . "/" . $authResponse->objectKey . "";
        $handPostureResp = $this->handPosture($handPosturereq, $runtime);
        return $handPostureResp;
    }

    /**
     * @param BodyPostureRequest $request
     * @param RuntimeOptions $runtime
     * @return BodyPostureResponse
     * @throws \Exception
     */
    public function bodyPosture(BodyPostureRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return BodyPostureResponse::fromMap($this->doRequest("BodyPosture", "HTTPS", "POST", "2019-12-30", "AK", null, $request, $runtime));
    }

    /**
     * @param BodyPostureAdvanceRequest $request
     * @param RuntimeOptions $runtime
     * @return BodyPostureResponse
     * @throws \Exception
     */
    public function bodyPostureAdvance(BodyPostureAdvanceRequest $request, RuntimeOptions $runtime){
        // Step 0: init client
        $accessKeyId = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig = new Config([
            "accessKeyId" => $accessKeyId,
            "accessKeySecret" => $accessKeySecret,
            "type" => "access_key",
            "endpoint" => "openplatform.aliyuncs.com",
            "protocol" => $this->_protocol,
            "regionId" => $this->_regionId
            ]);
        $authClient = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            "product" => "facebody",
            "regionId" => $this->_regionId
            ]);
        $authResponse = $authClient->authorizeFileUpload($authRequest, $runtime);
        // Step 1: request OSS api to upload file
        $ossConfig = new \AlibabaCloud\SDK\OSS\OSS\Config([
            "accessKeyId" => $authResponse->accessKeyId,
            "accessKeySecret" => $accessKeySecret,
            "type" => "access_key",
            "endpoint" => RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType),
            "protocol" => $this->_protocol,
            "regionId" => $this->_regionId
            ]);
        $ossClient = new OSS($ossConfig);
        $fileObj = new FileField([
            "filename" => $authResponse->objectKey,
            "content" => $request->imageURLObject,
            "contentType" => ""
            ]);
        $ossHeader = new header([
            "accessKeyId" => $authResponse->accessKeyId,
            "policy" => $authResponse->encodedPolicy,
            "signature" => $authResponse->signature,
            "key" => $authResponse->objectKey,
            "file" => $fileObj,
            "successActionStatus" => "201"
            ]);
        $uploadRequest = new PostObjectRequest([
            "bucketName" => $authResponse->bucket,
            "header" => $ossHeader
            ]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        // Step 2: request final api
        $bodyPosturereq = new BodyPostureRequest([]);
        RpcUtils::convert($request, $bodyPosturereq);
        $bodyPosturereq->imageURL = "http://" . $authResponse->bucket . "." . $authResponse->endpoint . "/" . $authResponse->objectKey . "";
        $bodyPostureResp = $this->bodyPosture($bodyPosturereq, $runtime);
        return $bodyPostureResp;
    }

    /**
     * @param DetectPedestrianRequest $request
     * @param RuntimeOptions $runtime
     * @return DetectPedestrianResponse
     * @throws \Exception
     */
    public function detectPedestrian(DetectPedestrianRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DetectPedestrianResponse::fromMap($this->doRequest("DetectPedestrian", "HTTPS", "POST", "2019-12-30", "AK", null, $request, $runtime));
    }

    /**
     * @param DetectPedestrianAdvanceRequest $request
     * @param RuntimeOptions $runtime
     * @return DetectPedestrianResponse
     * @throws \Exception
     */
    public function detectPedestrianAdvance(DetectPedestrianAdvanceRequest $request, RuntimeOptions $runtime){
        // Step 0: init client
        $accessKeyId = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig = new Config([
            "accessKeyId" => $accessKeyId,
            "accessKeySecret" => $accessKeySecret,
            "type" => "access_key",
            "endpoint" => "openplatform.aliyuncs.com",
            "protocol" => $this->_protocol,
            "regionId" => $this->_regionId
            ]);
        $authClient = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            "product" => "facebody",
            "regionId" => $this->_regionId
            ]);
        $authResponse = $authClient->authorizeFileUpload($authRequest, $runtime);
        // Step 1: request OSS api to upload file
        $ossConfig = new \AlibabaCloud\SDK\OSS\OSS\Config([
            "accessKeyId" => $authResponse->accessKeyId,
            "accessKeySecret" => $accessKeySecret,
            "type" => "access_key",
            "endpoint" => RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType),
            "protocol" => $this->_protocol,
            "regionId" => $this->_regionId
            ]);
        $ossClient = new OSS($ossConfig);
        $fileObj = new FileField([
            "filename" => $authResponse->objectKey,
            "content" => $request->imageURLObject,
            "contentType" => ""
            ]);
        $ossHeader = new header([
            "accessKeyId" => $authResponse->accessKeyId,
            "policy" => $authResponse->encodedPolicy,
            "signature" => $authResponse->signature,
            "key" => $authResponse->objectKey,
            "file" => $fileObj,
            "successActionStatus" => "201"
            ]);
        $uploadRequest = new PostObjectRequest([
            "bucketName" => $authResponse->bucket,
            "header" => $ossHeader
            ]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        // Step 2: request final api
        $detectPedestrianreq = new DetectPedestrianRequest([]);
        RpcUtils::convert($request, $detectPedestrianreq);
        $detectPedestrianreq->imageURL = "http://" . $authResponse->bucket . "." . $authResponse->endpoint . "/" . $authResponse->objectKey . "";
        $detectPedestrianResp = $this->detectPedestrian($detectPedestrianreq, $runtime);
        return $detectPedestrianResp;
    }

    /**
     * @param FaceBeautyRequest $request
     * @param RuntimeOptions $runtime
     * @return FaceBeautyResponse
     * @throws \Exception
     */
    public function faceBeauty(FaceBeautyRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return FaceBeautyResponse::fromMap($this->doRequest("FaceBeauty", "HTTPS", "POST", "2019-12-30", "AK", null, $request, $runtime));
    }

    /**
     * @param FaceBeautyAdvanceRequest $request
     * @param RuntimeOptions $runtime
     * @return FaceBeautyResponse
     * @throws \Exception
     */
    public function faceBeautyAdvance(FaceBeautyAdvanceRequest $request, RuntimeOptions $runtime){
        // Step 0: init client
        $accessKeyId = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig = new Config([
            "accessKeyId" => $accessKeyId,
            "accessKeySecret" => $accessKeySecret,
            "type" => "access_key",
            "endpoint" => "openplatform.aliyuncs.com",
            "protocol" => $this->_protocol,
            "regionId" => $this->_regionId
            ]);
        $authClient = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            "product" => "facebody",
            "regionId" => $this->_regionId
            ]);
        $authResponse = $authClient->authorizeFileUpload($authRequest, $runtime);
        // Step 1: request OSS api to upload file
        $ossConfig = new \AlibabaCloud\SDK\OSS\OSS\Config([
            "accessKeyId" => $authResponse->accessKeyId,
            "accessKeySecret" => $accessKeySecret,
            "type" => "access_key",
            "endpoint" => RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType),
            "protocol" => $this->_protocol,
            "regionId" => $this->_regionId
            ]);
        $ossClient = new OSS($ossConfig);
        $fileObj = new FileField([
            "filename" => $authResponse->objectKey,
            "content" => $request->imageURLObject,
            "contentType" => ""
            ]);
        $ossHeader = new header([
            "accessKeyId" => $authResponse->accessKeyId,
            "policy" => $authResponse->encodedPolicy,
            "signature" => $authResponse->signature,
            "key" => $authResponse->objectKey,
            "file" => $fileObj,
            "successActionStatus" => "201"
            ]);
        $uploadRequest = new PostObjectRequest([
            "bucketName" => $authResponse->bucket,
            "header" => $ossHeader
            ]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        // Step 2: request final api
        $faceBeautyreq = new FaceBeautyRequest([]);
        RpcUtils::convert($request, $faceBeautyreq);
        $faceBeautyreq->imageURL = "http://" . $authResponse->bucket . "." . $authResponse->endpoint . "/" . $authResponse->objectKey . "";
        $faceBeautyResp = $this->faceBeauty($faceBeautyreq, $runtime);
        return $faceBeautyResp;
    }

    /**
     * @param FaceFilterRequest $request
     * @param RuntimeOptions $runtime
     * @return FaceFilterResponse
     * @throws \Exception
     */
    public function faceFilter(FaceFilterRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return FaceFilterResponse::fromMap($this->doRequest("FaceFilter", "HTTPS", "POST", "2019-12-30", "AK", null, $request, $runtime));
    }

    /**
     * @param FaceFilterAdvanceRequest $request
     * @param RuntimeOptions $runtime
     * @return FaceFilterResponse
     * @throws \Exception
     */
    public function faceFilterAdvance(FaceFilterAdvanceRequest $request, RuntimeOptions $runtime){
        // Step 0: init client
        $accessKeyId = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig = new Config([
            "accessKeyId" => $accessKeyId,
            "accessKeySecret" => $accessKeySecret,
            "type" => "access_key",
            "endpoint" => "openplatform.aliyuncs.com",
            "protocol" => $this->_protocol,
            "regionId" => $this->_regionId
            ]);
        $authClient = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            "product" => "facebody",
            "regionId" => $this->_regionId
            ]);
        $authResponse = $authClient->authorizeFileUpload($authRequest, $runtime);
        // Step 1: request OSS api to upload file
        $ossConfig = new \AlibabaCloud\SDK\OSS\OSS\Config([
            "accessKeyId" => $authResponse->accessKeyId,
            "accessKeySecret" => $accessKeySecret,
            "type" => "access_key",
            "endpoint" => RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType),
            "protocol" => $this->_protocol,
            "regionId" => $this->_regionId
            ]);
        $ossClient = new OSS($ossConfig);
        $fileObj = new FileField([
            "filename" => $authResponse->objectKey,
            "content" => $request->imageURLObject,
            "contentType" => ""
            ]);
        $ossHeader = new header([
            "accessKeyId" => $authResponse->accessKeyId,
            "policy" => $authResponse->encodedPolicy,
            "signature" => $authResponse->signature,
            "key" => $authResponse->objectKey,
            "file" => $fileObj,
            "successActionStatus" => "201"
            ]);
        $uploadRequest = new PostObjectRequest([
            "bucketName" => $authResponse->bucket,
            "header" => $ossHeader
            ]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        // Step 2: request final api
        $faceFilterreq = new FaceFilterRequest([]);
        RpcUtils::convert($request, $faceFilterreq);
        $faceFilterreq->imageURL = "http://" . $authResponse->bucket . "." . $authResponse->endpoint . "/" . $authResponse->objectKey . "";
        $faceFilterResp = $this->faceFilter($faceFilterreq, $runtime);
        return $faceFilterResp;
    }

    /**
     * @param EnhanceFaceRequest $request
     * @param RuntimeOptions $runtime
     * @return EnhanceFaceResponse
     * @throws \Exception
     */
    public function enhanceFace(EnhanceFaceRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return EnhanceFaceResponse::fromMap($this->doRequest("EnhanceFace", "HTTPS", "POST", "2019-12-30", "AK", null, $request, $runtime));
    }

    /**
     * @param EnhanceFaceAdvanceRequest $request
     * @param RuntimeOptions $runtime
     * @return EnhanceFaceResponse
     * @throws \Exception
     */
    public function enhanceFaceAdvance(EnhanceFaceAdvanceRequest $request, RuntimeOptions $runtime){
        // Step 0: init client
        $accessKeyId = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig = new Config([
            "accessKeyId" => $accessKeyId,
            "accessKeySecret" => $accessKeySecret,
            "type" => "access_key",
            "endpoint" => "openplatform.aliyuncs.com",
            "protocol" => $this->_protocol,
            "regionId" => $this->_regionId
            ]);
        $authClient = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            "product" => "facebody",
            "regionId" => $this->_regionId
            ]);
        $authResponse = $authClient->authorizeFileUpload($authRequest, $runtime);
        // Step 1: request OSS api to upload file
        $ossConfig = new \AlibabaCloud\SDK\OSS\OSS\Config([
            "accessKeyId" => $authResponse->accessKeyId,
            "accessKeySecret" => $accessKeySecret,
            "type" => "access_key",
            "endpoint" => RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType),
            "protocol" => $this->_protocol,
            "regionId" => $this->_regionId
            ]);
        $ossClient = new OSS($ossConfig);
        $fileObj = new FileField([
            "filename" => $authResponse->objectKey,
            "content" => $request->imageURLObject,
            "contentType" => ""
            ]);
        $ossHeader = new header([
            "accessKeyId" => $authResponse->accessKeyId,
            "policy" => $authResponse->encodedPolicy,
            "signature" => $authResponse->signature,
            "key" => $authResponse->objectKey,
            "file" => $fileObj,
            "successActionStatus" => "201"
            ]);
        $uploadRequest = new PostObjectRequest([
            "bucketName" => $authResponse->bucket,
            "header" => $ossHeader
            ]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        // Step 2: request final api
        $enhanceFacereq = new EnhanceFaceRequest([]);
        RpcUtils::convert($request, $enhanceFacereq);
        $enhanceFacereq->imageURL = "http://" . $authResponse->bucket . "." . $authResponse->endpoint . "/" . $authResponse->objectKey . "";
        $enhanceFaceResp = $this->enhanceFace($enhanceFacereq, $runtime);
        return $enhanceFaceResp;
    }

    /**
     * @param FaceTidyupRequest $request
     * @param RuntimeOptions $runtime
     * @return FaceTidyupResponse
     * @throws \Exception
     */
    public function faceTidyup(FaceTidyupRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return FaceTidyupResponse::fromMap($this->doRequest("FaceTidyup", "HTTPS", "POST", "2019-12-30", "AK", null, $request, $runtime));
    }

    /**
     * @param FaceTidyupAdvanceRequest $request
     * @param RuntimeOptions $runtime
     * @return FaceTidyupResponse
     * @throws \Exception
     */
    public function faceTidyupAdvance(FaceTidyupAdvanceRequest $request, RuntimeOptions $runtime){
        // Step 0: init client
        $accessKeyId = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig = new Config([
            "accessKeyId" => $accessKeyId,
            "accessKeySecret" => $accessKeySecret,
            "type" => "access_key",
            "endpoint" => "openplatform.aliyuncs.com",
            "protocol" => $this->_protocol,
            "regionId" => $this->_regionId
            ]);
        $authClient = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            "product" => "facebody",
            "regionId" => $this->_regionId
            ]);
        $authResponse = $authClient->authorizeFileUpload($authRequest, $runtime);
        // Step 1: request OSS api to upload file
        $ossConfig = new \AlibabaCloud\SDK\OSS\OSS\Config([
            "accessKeyId" => $authResponse->accessKeyId,
            "accessKeySecret" => $accessKeySecret,
            "type" => "access_key",
            "endpoint" => RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType),
            "protocol" => $this->_protocol,
            "regionId" => $this->_regionId
            ]);
        $ossClient = new OSS($ossConfig);
        $fileObj = new FileField([
            "filename" => $authResponse->objectKey,
            "content" => $request->imageURLObject,
            "contentType" => ""
            ]);
        $ossHeader = new header([
            "accessKeyId" => $authResponse->accessKeyId,
            "policy" => $authResponse->encodedPolicy,
            "signature" => $authResponse->signature,
            "key" => $authResponse->objectKey,
            "file" => $fileObj,
            "successActionStatus" => "201"
            ]);
        $uploadRequest = new PostObjectRequest([
            "bucketName" => $authResponse->bucket,
            "header" => $ossHeader
            ]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        // Step 2: request final api
        $faceTidyupreq = new FaceTidyupRequest([]);
        RpcUtils::convert($request, $faceTidyupreq);
        $faceTidyupreq->imageURL = "http://" . $authResponse->bucket . "." . $authResponse->endpoint . "/" . $authResponse->objectKey . "";
        $faceTidyupResp = $this->faceTidyup($faceTidyupreq, $runtime);
        return $faceTidyupResp;
    }

    /**
     * @param SearchFaceRequest $request
     * @param RuntimeOptions $runtime
     * @return SearchFaceResponse
     * @throws \Exception
     */
    public function searchFace(SearchFaceRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return SearchFaceResponse::fromMap($this->doRequest("SearchFace", "HTTPS", "POST", "2019-12-30", "AK", null, $request, $runtime));
    }

    /**
     * @param SearchFaceAdvanceRequest $request
     * @param RuntimeOptions $runtime
     * @return SearchFaceResponse
     * @throws \Exception
     */
    public function searchFaceAdvance(SearchFaceAdvanceRequest $request, RuntimeOptions $runtime){
        // Step 0: init client
        $accessKeyId = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig = new Config([
            "accessKeyId" => $accessKeyId,
            "accessKeySecret" => $accessKeySecret,
            "type" => "access_key",
            "endpoint" => "openplatform.aliyuncs.com",
            "protocol" => $this->_protocol,
            "regionId" => $this->_regionId
            ]);
        $authClient = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            "product" => "facebody",
            "regionId" => $this->_regionId
            ]);
        $authResponse = $authClient->authorizeFileUpload($authRequest, $runtime);
        // Step 1: request OSS api to upload file
        $ossConfig = new \AlibabaCloud\SDK\OSS\OSS\Config([
            "accessKeyId" => $authResponse->accessKeyId,
            "accessKeySecret" => $accessKeySecret,
            "type" => "access_key",
            "endpoint" => RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType),
            "protocol" => $this->_protocol,
            "regionId" => $this->_regionId
            ]);
        $ossClient = new OSS($ossConfig);
        $fileObj = new FileField([
            "filename" => $authResponse->objectKey,
            "content" => $request->imageUrlObject,
            "contentType" => ""
            ]);
        $ossHeader = new header([
            "accessKeyId" => $authResponse->accessKeyId,
            "policy" => $authResponse->encodedPolicy,
            "signature" => $authResponse->signature,
            "key" => $authResponse->objectKey,
            "file" => $fileObj,
            "successActionStatus" => "201"
            ]);
        $uploadRequest = new PostObjectRequest([
            "bucketName" => $authResponse->bucket,
            "header" => $ossHeader
            ]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        // Step 2: request final api
        $searchFacereq = new SearchFaceRequest([]);
        RpcUtils::convert($request, $searchFacereq);
        $searchFacereq->imageUrl = "http://" . $authResponse->bucket . "." . $authResponse->endpoint . "/" . $authResponse->objectKey . "";
        $searchFaceResp = $this->searchFace($searchFacereq, $runtime);
        return $searchFaceResp;
    }

    /**
     * @param ListFaceDbsRequest $request
     * @param RuntimeOptions $runtime
     * @return ListFaceDbsResponse
     * @throws \Exception
     */
    public function listFaceDbs(ListFaceDbsRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ListFaceDbsResponse::fromMap($this->doRequest("ListFaceDbs", "HTTPS", "POST", "2019-12-30", "AK", null, $request, $runtime));
    }

    /**
     * @param CreateFaceDbRequest $request
     * @param RuntimeOptions $runtime
     * @return CreateFaceDbResponse
     * @throws \Exception
     */
    public function createFaceDb(CreateFaceDbRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return CreateFaceDbResponse::fromMap($this->doRequest("CreateFaceDb", "HTTPS", "POST", "2019-12-30", "AK", null, $request, $runtime));
    }

    /**
     * @param DeleteFaceRequest $request
     * @param RuntimeOptions $runtime
     * @return DeleteFaceResponse
     * @throws \Exception
     */
    public function deleteFace(DeleteFaceRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DeleteFaceResponse::fromMap($this->doRequest("DeleteFace", "HTTPS", "POST", "2019-12-30", "AK", null, $request, $runtime));
    }

    /**
     * @param DeleteFaceDbRequest $request
     * @param RuntimeOptions $runtime
     * @return DeleteFaceDbResponse
     * @throws \Exception
     */
    public function deleteFaceDb(DeleteFaceDbRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DeleteFaceDbResponse::fromMap($this->doRequest("DeleteFaceDb", "HTTPS", "POST", "2019-12-30", "AK", null, $request, $runtime));
    }

    /**
     * @param AddFaceRequest $request
     * @param RuntimeOptions $runtime
     * @return AddFaceResponse
     * @throws \Exception
     */
    public function addFace(AddFaceRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return AddFaceResponse::fromMap($this->doRequest("AddFace", "HTTPS", "POST", "2019-12-30", "AK", null, $request, $runtime));
    }

    /**
     * @param AddFaceAdvanceRequest $request
     * @param RuntimeOptions $runtime
     * @return AddFaceResponse
     * @throws \Exception
     */
    public function addFaceAdvance(AddFaceAdvanceRequest $request, RuntimeOptions $runtime){
        // Step 0: init client
        $accessKeyId = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig = new Config([
            "accessKeyId" => $accessKeyId,
            "accessKeySecret" => $accessKeySecret,
            "type" => "access_key",
            "endpoint" => "openplatform.aliyuncs.com",
            "protocol" => $this->_protocol,
            "regionId" => $this->_regionId
            ]);
        $authClient = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            "product" => "facebody",
            "regionId" => $this->_regionId
            ]);
        $authResponse = $authClient->authorizeFileUpload($authRequest, $runtime);
        // Step 1: request OSS api to upload file
        $ossConfig = new \AlibabaCloud\SDK\OSS\OSS\Config([
            "accessKeyId" => $authResponse->accessKeyId,
            "accessKeySecret" => $accessKeySecret,
            "type" => "access_key",
            "endpoint" => RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType),
            "protocol" => $this->_protocol,
            "regionId" => $this->_regionId
            ]);
        $ossClient = new OSS($ossConfig);
        $fileObj = new FileField([
            "filename" => $authResponse->objectKey,
            "content" => $request->imageUrlObject,
            "contentType" => ""
            ]);
        $ossHeader = new header([
            "accessKeyId" => $authResponse->accessKeyId,
            "policy" => $authResponse->encodedPolicy,
            "signature" => $authResponse->signature,
            "key" => $authResponse->objectKey,
            "file" => $fileObj,
            "successActionStatus" => "201"
            ]);
        $uploadRequest = new PostObjectRequest([
            "bucketName" => $authResponse->bucket,
            "header" => $ossHeader
            ]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        // Step 2: request final api
        $addFacereq = new AddFaceRequest([]);
        RpcUtils::convert($request, $addFacereq);
        $addFacereq->imageUrl = "http://" . $authResponse->bucket . "." . $authResponse->endpoint . "/" . $authResponse->objectKey . "";
        $addFaceResp = $this->addFace($addFacereq, $runtime);
        return $addFaceResp;
    }

    /**
     * @param RecognizeExpressionRequest $request
     * @param RuntimeOptions $runtime
     * @return RecognizeExpressionResponse
     * @throws \Exception
     */
    public function recognizeExpression(RecognizeExpressionRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return RecognizeExpressionResponse::fromMap($this->doRequest("RecognizeExpression", "HTTPS", "POST", "2019-12-30", "AK", null, $request, $runtime));
    }

    /**
     * @param RecognizeExpressionAdvanceRequest $request
     * @param RuntimeOptions $runtime
     * @return RecognizeExpressionResponse
     * @throws \Exception
     */
    public function recognizeExpressionAdvance(RecognizeExpressionAdvanceRequest $request, RuntimeOptions $runtime){
        // Step 0: init client
        $accessKeyId = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig = new Config([
            "accessKeyId" => $accessKeyId,
            "accessKeySecret" => $accessKeySecret,
            "type" => "access_key",
            "endpoint" => "openplatform.aliyuncs.com",
            "protocol" => $this->_protocol,
            "regionId" => $this->_regionId
            ]);
        $authClient = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            "product" => "facebody",
            "regionId" => $this->_regionId
            ]);
        $authResponse = $authClient->authorizeFileUpload($authRequest, $runtime);
        // Step 1: request OSS api to upload file
        $ossConfig = new \AlibabaCloud\SDK\OSS\OSS\Config([
            "accessKeyId" => $authResponse->accessKeyId,
            "accessKeySecret" => $accessKeySecret,
            "type" => "access_key",
            "endpoint" => RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType),
            "protocol" => $this->_protocol,
            "regionId" => $this->_regionId
            ]);
        $ossClient = new OSS($ossConfig);
        $fileObj = new FileField([
            "filename" => $authResponse->objectKey,
            "content" => $request->imageURLObject,
            "contentType" => ""
            ]);
        $ossHeader = new header([
            "accessKeyId" => $authResponse->accessKeyId,
            "policy" => $authResponse->encodedPolicy,
            "signature" => $authResponse->signature,
            "key" => $authResponse->objectKey,
            "file" => $fileObj,
            "successActionStatus" => "201"
            ]);
        $uploadRequest = new PostObjectRequest([
            "bucketName" => $authResponse->bucket,
            "header" => $ossHeader
            ]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        // Step 2: request final api
        $recognizeExpressionreq = new RecognizeExpressionRequest([]);
        RpcUtils::convert($request, $recognizeExpressionreq);
        $recognizeExpressionreq->imageURL = "http://" . $authResponse->bucket . "." . $authResponse->endpoint . "/" . $authResponse->objectKey . "";
        $recognizeExpressionResp = $this->recognizeExpression($recognizeExpressionreq, $runtime);
        return $recognizeExpressionResp;
    }

    /**
     * @param RecognizePublicFaceRequest $request
     * @param RuntimeOptions $runtime
     * @return RecognizePublicFaceResponse
     * @throws \Exception
     */
    public function recognizePublicFace(RecognizePublicFaceRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return RecognizePublicFaceResponse::fromMap($this->doRequest("RecognizePublicFace", "HTTPS", "POST", "2019-12-30", "AK", null, $request, $runtime));
    }

    /**
     * @param DetectLivingFaceRequest $request
     * @param RuntimeOptions $runtime
     * @return DetectLivingFaceResponse
     * @throws \Exception
     */
    public function detectLivingFace(DetectLivingFaceRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DetectLivingFaceResponse::fromMap($this->doRequest("DetectLivingFace", "HTTPS", "POST", "2019-12-30", "AK", null, $request, $runtime));
    }

    /**
     * @param DetectBodyCountRequest $request
     * @param RuntimeOptions $runtime
     * @return DetectBodyCountResponse
     * @throws \Exception
     */
    public function detectBodyCount(DetectBodyCountRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DetectBodyCountResponse::fromMap($this->doRequest("DetectBodyCount", "HTTPS", "POST", "2019-12-30", "AK", null, $request, $runtime));
    }

    /**
     * @param DetectBodyCountAdvanceRequest $request
     * @param RuntimeOptions $runtime
     * @return DetectBodyCountResponse
     * @throws \Exception
     */
    public function detectBodyCountAdvance(DetectBodyCountAdvanceRequest $request, RuntimeOptions $runtime){
        // Step 0: init client
        $accessKeyId = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig = new Config([
            "accessKeyId" => $accessKeyId,
            "accessKeySecret" => $accessKeySecret,
            "type" => "access_key",
            "endpoint" => "openplatform.aliyuncs.com",
            "protocol" => $this->_protocol,
            "regionId" => $this->_regionId
            ]);
        $authClient = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            "product" => "facebody",
            "regionId" => $this->_regionId
            ]);
        $authResponse = $authClient->authorizeFileUpload($authRequest, $runtime);
        // Step 1: request OSS api to upload file
        $ossConfig = new \AlibabaCloud\SDK\OSS\OSS\Config([
            "accessKeyId" => $authResponse->accessKeyId,
            "accessKeySecret" => $accessKeySecret,
            "type" => "access_key",
            "endpoint" => RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType),
            "protocol" => $this->_protocol,
            "regionId" => $this->_regionId
            ]);
        $ossClient = new OSS($ossConfig);
        $fileObj = new FileField([
            "filename" => $authResponse->objectKey,
            "content" => $request->imageURLObject,
            "contentType" => ""
            ]);
        $ossHeader = new header([
            "accessKeyId" => $authResponse->accessKeyId,
            "policy" => $authResponse->encodedPolicy,
            "signature" => $authResponse->signature,
            "key" => $authResponse->objectKey,
            "file" => $fileObj,
            "successActionStatus" => "201"
            ]);
        $uploadRequest = new PostObjectRequest([
            "bucketName" => $authResponse->bucket,
            "header" => $ossHeader
            ]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        // Step 2: request final api
        $detectBodyCountreq = new DetectBodyCountRequest([]);
        RpcUtils::convert($request, $detectBodyCountreq);
        $detectBodyCountreq->imageURL = "http://" . $authResponse->bucket . "." . $authResponse->endpoint . "/" . $authResponse->objectKey . "";
        $detectBodyCountResp = $this->detectBodyCount($detectBodyCountreq, $runtime);
        return $detectBodyCountResp;
    }

    /**
     * @param DetectMaskRequest $request
     * @param RuntimeOptions $runtime
     * @return DetectMaskResponse
     * @throws \Exception
     */
    public function detectMask(DetectMaskRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DetectMaskResponse::fromMap($this->doRequest("DetectMask", "HTTPS", "POST", "2019-12-30", "AK", null, $request, $runtime));
    }

    /**
     * @param DetectMaskAdvanceRequest $request
     * @param RuntimeOptions $runtime
     * @return DetectMaskResponse
     * @throws \Exception
     */
    public function detectMaskAdvance(DetectMaskAdvanceRequest $request, RuntimeOptions $runtime){
        // Step 0: init client
        $accessKeyId = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig = new Config([
            "accessKeyId" => $accessKeyId,
            "accessKeySecret" => $accessKeySecret,
            "type" => "access_key",
            "endpoint" => "openplatform.aliyuncs.com",
            "protocol" => $this->_protocol,
            "regionId" => $this->_regionId
            ]);
        $authClient = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            "product" => "facebody",
            "regionId" => $this->_regionId
            ]);
        $authResponse = $authClient->authorizeFileUpload($authRequest, $runtime);
        // Step 1: request OSS api to upload file
        $ossConfig = new \AlibabaCloud\SDK\OSS\OSS\Config([
            "accessKeyId" => $authResponse->accessKeyId,
            "accessKeySecret" => $accessKeySecret,
            "type" => "access_key",
            "endpoint" => RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType),
            "protocol" => $this->_protocol,
            "regionId" => $this->_regionId
            ]);
        $ossClient = new OSS($ossConfig);
        $fileObj = new FileField([
            "filename" => $authResponse->objectKey,
            "content" => $request->imageURLObject,
            "contentType" => ""
            ]);
        $ossHeader = new header([
            "accessKeyId" => $authResponse->accessKeyId,
            "policy" => $authResponse->encodedPolicy,
            "signature" => $authResponse->signature,
            "key" => $authResponse->objectKey,
            "file" => $fileObj,
            "successActionStatus" => "201"
            ]);
        $uploadRequest = new PostObjectRequest([
            "bucketName" => $authResponse->bucket,
            "header" => $ossHeader
            ]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        // Step 2: request final api
        $detectMaskreq = new DetectMaskRequest([]);
        RpcUtils::convert($request, $detectMaskreq);
        $detectMaskreq->imageURL = "http://" . $authResponse->bucket . "." . $authResponse->endpoint . "/" . $authResponse->objectKey . "";
        $detectMaskResp = $this->detectMask($detectMaskreq, $runtime);
        return $detectMaskResp;
    }

    /**
     * @param RecognizeFaceRequest $request
     * @param RuntimeOptions $runtime
     * @return RecognizeFaceResponse
     * @throws \Exception
     */
    public function recognizeFace(RecognizeFaceRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return RecognizeFaceResponse::fromMap($this->doRequest("RecognizeFace", "HTTPS", "POST", "2019-12-30", "AK", null, $request, $runtime));
    }

    /**
     * @param RecognizeFaceAdvanceRequest $request
     * @param RuntimeOptions $runtime
     * @return RecognizeFaceResponse
     * @throws \Exception
     */
    public function recognizeFaceAdvance(RecognizeFaceAdvanceRequest $request, RuntimeOptions $runtime){
        // Step 0: init client
        $accessKeyId = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig = new Config([
            "accessKeyId" => $accessKeyId,
            "accessKeySecret" => $accessKeySecret,
            "type" => "access_key",
            "endpoint" => "openplatform.aliyuncs.com",
            "protocol" => $this->_protocol,
            "regionId" => $this->_regionId
            ]);
        $authClient = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            "product" => "facebody",
            "regionId" => $this->_regionId
            ]);
        $authResponse = $authClient->authorizeFileUpload($authRequest, $runtime);
        // Step 1: request OSS api to upload file
        $ossConfig = new \AlibabaCloud\SDK\OSS\OSS\Config([
            "accessKeyId" => $authResponse->accessKeyId,
            "accessKeySecret" => $accessKeySecret,
            "type" => "access_key",
            "endpoint" => RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType),
            "protocol" => $this->_protocol,
            "regionId" => $this->_regionId
            ]);
        $ossClient = new OSS($ossConfig);
        $fileObj = new FileField([
            "filename" => $authResponse->objectKey,
            "content" => $request->imageURLObject,
            "contentType" => ""
            ]);
        $ossHeader = new header([
            "accessKeyId" => $authResponse->accessKeyId,
            "policy" => $authResponse->encodedPolicy,
            "signature" => $authResponse->signature,
            "key" => $authResponse->objectKey,
            "file" => $fileObj,
            "successActionStatus" => "201"
            ]);
        $uploadRequest = new PostObjectRequest([
            "bucketName" => $authResponse->bucket,
            "header" => $ossHeader
            ]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        // Step 2: request final api
        $recognizeFacereq = new RecognizeFaceRequest([]);
        RpcUtils::convert($request, $recognizeFacereq);
        $recognizeFacereq->imageURL = "http://" . $authResponse->bucket . "." . $authResponse->endpoint . "/" . $authResponse->objectKey . "";
        $recognizeFaceResp = $this->recognizeFace($recognizeFacereq, $runtime);
        return $recognizeFaceResp;
    }

    /**
     * @param CompareFaceRequest $request
     * @param RuntimeOptions $runtime
     * @return CompareFaceResponse
     * @throws \Exception
     */
    public function compareFace(CompareFaceRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return CompareFaceResponse::fromMap($this->doRequest("CompareFace", "HTTPS", "POST", "2019-12-30", "AK", null, $request, $runtime));
    }

    /**
     * @param DetectFaceRequest $request
     * @param RuntimeOptions $runtime
     * @return DetectFaceResponse
     * @throws \Exception
     */
    public function detectFace(DetectFaceRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DetectFaceResponse::fromMap($this->doRequest("DetectFace", "HTTPS", "POST", "2019-12-30", "AK", null, $request, $runtime));
    }

    /**
     * @param DetectFaceAdvanceRequest $request
     * @param RuntimeOptions $runtime
     * @return DetectFaceResponse
     * @throws \Exception
     */
    public function detectFaceAdvance(DetectFaceAdvanceRequest $request, RuntimeOptions $runtime){
        // Step 0: init client
        $accessKeyId = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig = new Config([
            "accessKeyId" => $accessKeyId,
            "accessKeySecret" => $accessKeySecret,
            "type" => "access_key",
            "endpoint" => "openplatform.aliyuncs.com",
            "protocol" => $this->_protocol,
            "regionId" => $this->_regionId
            ]);
        $authClient = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            "product" => "facebody",
            "regionId" => $this->_regionId
            ]);
        $authResponse = $authClient->authorizeFileUpload($authRequest, $runtime);
        // Step 1: request OSS api to upload file
        $ossConfig = new \AlibabaCloud\SDK\OSS\OSS\Config([
            "accessKeyId" => $authResponse->accessKeyId,
            "accessKeySecret" => $accessKeySecret,
            "type" => "access_key",
            "endpoint" => RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType),
            "protocol" => $this->_protocol,
            "regionId" => $this->_regionId
            ]);
        $ossClient = new OSS($ossConfig);
        $fileObj = new FileField([
            "filename" => $authResponse->objectKey,
            "content" => $request->imageURLObject,
            "contentType" => ""
            ]);
        $ossHeader = new header([
            "accessKeyId" => $authResponse->accessKeyId,
            "policy" => $authResponse->encodedPolicy,
            "signature" => $authResponse->signature,
            "key" => $authResponse->objectKey,
            "file" => $fileObj,
            "successActionStatus" => "201"
            ]);
        $uploadRequest = new PostObjectRequest([
            "bucketName" => $authResponse->bucket,
            "header" => $ossHeader
            ]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        // Step 2: request final api
        $detectFacereq = new DetectFaceRequest([]);
        RpcUtils::convert($request, $detectFacereq);
        $detectFacereq->imageURL = "http://" . $authResponse->bucket . "." . $authResponse->endpoint . "/" . $authResponse->objectKey . "";
        $detectFaceResp = $this->detectFace($detectFacereq, $runtime);
        return $detectFaceResp;
    }

    /**
     * @param string $productId
     * @param string $regionId
     * @param string $endpointRule
     * @param string $network
     * @param string $suffix
     * @param array $endpointMap
     * @param string $endpoint
     * @return string
     * @throws \Exception
     */
    public function getEndpoint($productId, $regionId, $endpointRule, $network, $suffix, $endpointMap, $endpoint){
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_($endpointMap["regionId"])) {
            return $endpointMap["regionId"];
        }
        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }
}
