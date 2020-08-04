// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections;
using System.Collections.Generic;
using System.IO;
using System.Threading.Tasks;

using Tea;
using Tea.Utils;

using AlibabaCloud.SDK.Ocr20191230.Models;

namespace AlibabaCloud.SDK.Ocr20191230
{
    public class Client : AlibabaCloud.RPCClient.Client
    {

        public Client(AlibabaCloud.RPCClient.Models.Config config): base(config)
        {
            this._endpointRule = "regional";
            CheckConfig(config);
            this._endpoint = GetEndpoint("ocr", _regionId, _endpointRule, _network, _suffix, _endpointMap, _endpoint);
        }


        public GetAsyncJobResultResponse GetAsyncJobResult(GetAsyncJobResultRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetAsyncJobResultResponse>(DoRequest("GetAsyncJobResult", "HTTPS", "POST", "2019-12-30", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetAsyncJobResultResponse> GetAsyncJobResultAsync(GetAsyncJobResultRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetAsyncJobResultResponse>(await DoRequestAsync("GetAsyncJobResult", "HTTPS", "POST", "2019-12-30", "AK", null, request.ToMap(), runtime));
        }

        public TrimDocumentResponse TrimDocument(TrimDocumentRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<TrimDocumentResponse>(DoRequest("TrimDocument", "HTTPS", "POST", "2019-12-30", "AK", null, request.ToMap(), runtime));
        }

        public async Task<TrimDocumentResponse> TrimDocumentAsync(TrimDocumentRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<TrimDocumentResponse>(await DoRequestAsync("TrimDocument", "HTTPS", "POST", "2019-12-30", "AK", null, request.ToMap(), runtime));
        }

        public TrimDocumentResponse TrimDocumentAdvance(TrimDocumentAdvanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            // Step 0: init client
            string accessKeyId = this._credential.GetAccessKeyId();
            string accessKeySecret = this._credential.GetAccessKeySecret();
            AlibabaCloud.RPCClient.Models.Config authConfig = new AlibabaCloud.RPCClient.Models.Config
            {
                AccessKeyId = accessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Client authClient = new AlibabaCloud.SDK.OpenPlatform20191219.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest
            {
                Product = "ocr",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadResponse authResponse = authClient.AuthorizeFileUploadWithOptions(authRequest, runtime);
            // Step 1: request OSS api to upload file
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            AlibabaCloud.SDK.TeaFileform.Models.FileField fileObj = new AlibabaCloud.SDK.TeaFileform.Models.FileField
            {
                Filename = authResponse.ObjectKey,
                Content = request.FileURLObject,
                ContentType = "",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader ossHeader = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader
            {
                AccessKeyId = authResponse.AccessKeyId,
                Policy = authResponse.EncodedPolicy,
                Signature = authResponse.Signature,
                Key = authResponse.ObjectKey,
                File = fileObj,
                SuccessActionStatus = "201",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest uploadRequest = new AlibabaCloud.OSS.Models.PostObjectRequest
            {
                BucketName = authResponse.Bucket,
                Header = ossHeader,
            };
            AlibabaCloud.OSSUtil.Models.RuntimeOptions ossRuntime = new AlibabaCloud.OSSUtil.Models.RuntimeOptions();
            AlibabaCloud.Commons.Common.Convert(runtime, ossRuntime);
            ossClient.PostObject(uploadRequest, ossRuntime);
            // Step 2: request final api
            TrimDocumentRequest trimDocumentreq = new TrimDocumentRequest();
            AlibabaCloud.Commons.Common.Convert(request, trimDocumentreq);
            trimDocumentreq.FileURL = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            TrimDocumentResponse trimDocumentResp = TrimDocument(trimDocumentreq, runtime);
            return trimDocumentResp;
        }

        public async Task<TrimDocumentResponse> TrimDocumentAdvanceAsync(TrimDocumentAdvanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            // Step 0: init client
            string accessKeyId = await this._credential.GetAccessKeyIdAsync();
            string accessKeySecret = await this._credential.GetAccessKeySecretAsync();
            AlibabaCloud.RPCClient.Models.Config authConfig = new AlibabaCloud.RPCClient.Models.Config
            {
                AccessKeyId = accessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Client authClient = new AlibabaCloud.SDK.OpenPlatform20191219.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest
            {
                Product = "ocr",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadResponse authResponse = await authClient.AuthorizeFileUploadWithOptionsAsync(authRequest, runtime);
            // Step 1: request OSS api to upload file
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            AlibabaCloud.SDK.TeaFileform.Models.FileField fileObj = new AlibabaCloud.SDK.TeaFileform.Models.FileField
            {
                Filename = authResponse.ObjectKey,
                Content = request.FileURLObject,
                ContentType = "",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader ossHeader = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader
            {
                AccessKeyId = authResponse.AccessKeyId,
                Policy = authResponse.EncodedPolicy,
                Signature = authResponse.Signature,
                Key = authResponse.ObjectKey,
                File = fileObj,
                SuccessActionStatus = "201",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest uploadRequest = new AlibabaCloud.OSS.Models.PostObjectRequest
            {
                BucketName = authResponse.Bucket,
                Header = ossHeader,
            };
            AlibabaCloud.OSSUtil.Models.RuntimeOptions ossRuntime = new AlibabaCloud.OSSUtil.Models.RuntimeOptions();
            AlibabaCloud.Commons.Common.Convert(runtime, ossRuntime);
            await ossClient.PostObjectAsync(uploadRequest, ossRuntime);
            // Step 2: request final api
            TrimDocumentRequest trimDocumentreq = new TrimDocumentRequest();
            AlibabaCloud.Commons.Common.Convert(request, trimDocumentreq);
            trimDocumentreq.FileURL = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            TrimDocumentResponse trimDocumentResp = await TrimDocumentAsync(trimDocumentreq, runtime);
            return trimDocumentResp;
        }

        public RecognizeChinapassportResponse RecognizeChinapassport(RecognizeChinapassportRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RecognizeChinapassportResponse>(DoRequest("RecognizeChinapassport", "HTTPS", "POST", "2019-12-30", "AK", null, request.ToMap(), runtime));
        }

        public async Task<RecognizeChinapassportResponse> RecognizeChinapassportAsync(RecognizeChinapassportRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RecognizeChinapassportResponse>(await DoRequestAsync("RecognizeChinapassport", "HTTPS", "POST", "2019-12-30", "AK", null, request.ToMap(), runtime));
        }

        public RecognizeChinapassportResponse RecognizeChinapassportAdvance(RecognizeChinapassportAdvanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            // Step 0: init client
            string accessKeyId = this._credential.GetAccessKeyId();
            string accessKeySecret = this._credential.GetAccessKeySecret();
            AlibabaCloud.RPCClient.Models.Config authConfig = new AlibabaCloud.RPCClient.Models.Config
            {
                AccessKeyId = accessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Client authClient = new AlibabaCloud.SDK.OpenPlatform20191219.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest
            {
                Product = "ocr",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadResponse authResponse = authClient.AuthorizeFileUploadWithOptions(authRequest, runtime);
            // Step 1: request OSS api to upload file
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            AlibabaCloud.SDK.TeaFileform.Models.FileField fileObj = new AlibabaCloud.SDK.TeaFileform.Models.FileField
            {
                Filename = authResponse.ObjectKey,
                Content = request.ImageURLObject,
                ContentType = "",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader ossHeader = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader
            {
                AccessKeyId = authResponse.AccessKeyId,
                Policy = authResponse.EncodedPolicy,
                Signature = authResponse.Signature,
                Key = authResponse.ObjectKey,
                File = fileObj,
                SuccessActionStatus = "201",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest uploadRequest = new AlibabaCloud.OSS.Models.PostObjectRequest
            {
                BucketName = authResponse.Bucket,
                Header = ossHeader,
            };
            AlibabaCloud.OSSUtil.Models.RuntimeOptions ossRuntime = new AlibabaCloud.OSSUtil.Models.RuntimeOptions();
            AlibabaCloud.Commons.Common.Convert(runtime, ossRuntime);
            ossClient.PostObject(uploadRequest, ossRuntime);
            // Step 2: request final api
            RecognizeChinapassportRequest recognizeChinapassportreq = new RecognizeChinapassportRequest();
            AlibabaCloud.Commons.Common.Convert(request, recognizeChinapassportreq);
            recognizeChinapassportreq.ImageURL = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            RecognizeChinapassportResponse recognizeChinapassportResp = RecognizeChinapassport(recognizeChinapassportreq, runtime);
            return recognizeChinapassportResp;
        }

        public async Task<RecognizeChinapassportResponse> RecognizeChinapassportAdvanceAsync(RecognizeChinapassportAdvanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            // Step 0: init client
            string accessKeyId = await this._credential.GetAccessKeyIdAsync();
            string accessKeySecret = await this._credential.GetAccessKeySecretAsync();
            AlibabaCloud.RPCClient.Models.Config authConfig = new AlibabaCloud.RPCClient.Models.Config
            {
                AccessKeyId = accessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Client authClient = new AlibabaCloud.SDK.OpenPlatform20191219.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest
            {
                Product = "ocr",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadResponse authResponse = await authClient.AuthorizeFileUploadWithOptionsAsync(authRequest, runtime);
            // Step 1: request OSS api to upload file
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            AlibabaCloud.SDK.TeaFileform.Models.FileField fileObj = new AlibabaCloud.SDK.TeaFileform.Models.FileField
            {
                Filename = authResponse.ObjectKey,
                Content = request.ImageURLObject,
                ContentType = "",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader ossHeader = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader
            {
                AccessKeyId = authResponse.AccessKeyId,
                Policy = authResponse.EncodedPolicy,
                Signature = authResponse.Signature,
                Key = authResponse.ObjectKey,
                File = fileObj,
                SuccessActionStatus = "201",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest uploadRequest = new AlibabaCloud.OSS.Models.PostObjectRequest
            {
                BucketName = authResponse.Bucket,
                Header = ossHeader,
            };
            AlibabaCloud.OSSUtil.Models.RuntimeOptions ossRuntime = new AlibabaCloud.OSSUtil.Models.RuntimeOptions();
            AlibabaCloud.Commons.Common.Convert(runtime, ossRuntime);
            await ossClient.PostObjectAsync(uploadRequest, ossRuntime);
            // Step 2: request final api
            RecognizeChinapassportRequest recognizeChinapassportreq = new RecognizeChinapassportRequest();
            AlibabaCloud.Commons.Common.Convert(request, recognizeChinapassportreq);
            recognizeChinapassportreq.ImageURL = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            RecognizeChinapassportResponse recognizeChinapassportResp = await RecognizeChinapassportAsync(recognizeChinapassportreq, runtime);
            return recognizeChinapassportResp;
        }

        public RecognizeVerificationcodeResponse RecognizeVerificationcode(RecognizeVerificationcodeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RecognizeVerificationcodeResponse>(DoRequest("RecognizeVerificationcode", "HTTPS", "POST", "2019-12-30", "AK", null, request.ToMap(), runtime));
        }

        public async Task<RecognizeVerificationcodeResponse> RecognizeVerificationcodeAsync(RecognizeVerificationcodeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RecognizeVerificationcodeResponse>(await DoRequestAsync("RecognizeVerificationcode", "HTTPS", "POST", "2019-12-30", "AK", null, request.ToMap(), runtime));
        }

        public RecognizeVerificationcodeResponse RecognizeVerificationcodeAdvance(RecognizeVerificationcodeAdvanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            // Step 0: init client
            string accessKeyId = this._credential.GetAccessKeyId();
            string accessKeySecret = this._credential.GetAccessKeySecret();
            AlibabaCloud.RPCClient.Models.Config authConfig = new AlibabaCloud.RPCClient.Models.Config
            {
                AccessKeyId = accessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Client authClient = new AlibabaCloud.SDK.OpenPlatform20191219.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest
            {
                Product = "ocr",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadResponse authResponse = authClient.AuthorizeFileUploadWithOptions(authRequest, runtime);
            // Step 1: request OSS api to upload file
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            AlibabaCloud.SDK.TeaFileform.Models.FileField fileObj = new AlibabaCloud.SDK.TeaFileform.Models.FileField
            {
                Filename = authResponse.ObjectKey,
                Content = request.ImageURLObject,
                ContentType = "",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader ossHeader = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader
            {
                AccessKeyId = authResponse.AccessKeyId,
                Policy = authResponse.EncodedPolicy,
                Signature = authResponse.Signature,
                Key = authResponse.ObjectKey,
                File = fileObj,
                SuccessActionStatus = "201",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest uploadRequest = new AlibabaCloud.OSS.Models.PostObjectRequest
            {
                BucketName = authResponse.Bucket,
                Header = ossHeader,
            };
            AlibabaCloud.OSSUtil.Models.RuntimeOptions ossRuntime = new AlibabaCloud.OSSUtil.Models.RuntimeOptions();
            AlibabaCloud.Commons.Common.Convert(runtime, ossRuntime);
            ossClient.PostObject(uploadRequest, ossRuntime);
            // Step 2: request final api
            RecognizeVerificationcodeRequest recognizeVerificationcodereq = new RecognizeVerificationcodeRequest();
            AlibabaCloud.Commons.Common.Convert(request, recognizeVerificationcodereq);
            recognizeVerificationcodereq.ImageURL = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            RecognizeVerificationcodeResponse recognizeVerificationcodeResp = RecognizeVerificationcode(recognizeVerificationcodereq, runtime);
            return recognizeVerificationcodeResp;
        }

        public async Task<RecognizeVerificationcodeResponse> RecognizeVerificationcodeAdvanceAsync(RecognizeVerificationcodeAdvanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            // Step 0: init client
            string accessKeyId = await this._credential.GetAccessKeyIdAsync();
            string accessKeySecret = await this._credential.GetAccessKeySecretAsync();
            AlibabaCloud.RPCClient.Models.Config authConfig = new AlibabaCloud.RPCClient.Models.Config
            {
                AccessKeyId = accessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Client authClient = new AlibabaCloud.SDK.OpenPlatform20191219.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest
            {
                Product = "ocr",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadResponse authResponse = await authClient.AuthorizeFileUploadWithOptionsAsync(authRequest, runtime);
            // Step 1: request OSS api to upload file
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            AlibabaCloud.SDK.TeaFileform.Models.FileField fileObj = new AlibabaCloud.SDK.TeaFileform.Models.FileField
            {
                Filename = authResponse.ObjectKey,
                Content = request.ImageURLObject,
                ContentType = "",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader ossHeader = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader
            {
                AccessKeyId = authResponse.AccessKeyId,
                Policy = authResponse.EncodedPolicy,
                Signature = authResponse.Signature,
                Key = authResponse.ObjectKey,
                File = fileObj,
                SuccessActionStatus = "201",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest uploadRequest = new AlibabaCloud.OSS.Models.PostObjectRequest
            {
                BucketName = authResponse.Bucket,
                Header = ossHeader,
            };
            AlibabaCloud.OSSUtil.Models.RuntimeOptions ossRuntime = new AlibabaCloud.OSSUtil.Models.RuntimeOptions();
            AlibabaCloud.Commons.Common.Convert(runtime, ossRuntime);
            await ossClient.PostObjectAsync(uploadRequest, ossRuntime);
            // Step 2: request final api
            RecognizeVerificationcodeRequest recognizeVerificationcodereq = new RecognizeVerificationcodeRequest();
            AlibabaCloud.Commons.Common.Convert(request, recognizeVerificationcodereq);
            recognizeVerificationcodereq.ImageURL = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            RecognizeVerificationcodeResponse recognizeVerificationcodeResp = await RecognizeVerificationcodeAsync(recognizeVerificationcodereq, runtime);
            return recognizeVerificationcodeResp;
        }

        public RecognizePassportMRZResponse RecognizePassportMRZ(RecognizePassportMRZRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RecognizePassportMRZResponse>(DoRequest("RecognizePassportMRZ", "HTTPS", "POST", "2019-12-30", "AK", null, request.ToMap(), runtime));
        }

        public async Task<RecognizePassportMRZResponse> RecognizePassportMRZAsync(RecognizePassportMRZRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RecognizePassportMRZResponse>(await DoRequestAsync("RecognizePassportMRZ", "HTTPS", "POST", "2019-12-30", "AK", null, request.ToMap(), runtime));
        }

        public RecognizePassportMRZResponse RecognizePassportMRZAdvance(RecognizePassportMRZAdvanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            // Step 0: init client
            string accessKeyId = this._credential.GetAccessKeyId();
            string accessKeySecret = this._credential.GetAccessKeySecret();
            AlibabaCloud.RPCClient.Models.Config authConfig = new AlibabaCloud.RPCClient.Models.Config
            {
                AccessKeyId = accessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Client authClient = new AlibabaCloud.SDK.OpenPlatform20191219.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest
            {
                Product = "ocr",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadResponse authResponse = authClient.AuthorizeFileUploadWithOptions(authRequest, runtime);
            // Step 1: request OSS api to upload file
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            AlibabaCloud.SDK.TeaFileform.Models.FileField fileObj = new AlibabaCloud.SDK.TeaFileform.Models.FileField
            {
                Filename = authResponse.ObjectKey,
                Content = request.ImageURLObject,
                ContentType = "",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader ossHeader = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader
            {
                AccessKeyId = authResponse.AccessKeyId,
                Policy = authResponse.EncodedPolicy,
                Signature = authResponse.Signature,
                Key = authResponse.ObjectKey,
                File = fileObj,
                SuccessActionStatus = "201",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest uploadRequest = new AlibabaCloud.OSS.Models.PostObjectRequest
            {
                BucketName = authResponse.Bucket,
                Header = ossHeader,
            };
            AlibabaCloud.OSSUtil.Models.RuntimeOptions ossRuntime = new AlibabaCloud.OSSUtil.Models.RuntimeOptions();
            AlibabaCloud.Commons.Common.Convert(runtime, ossRuntime);
            ossClient.PostObject(uploadRequest, ossRuntime);
            // Step 2: request final api
            RecognizePassportMRZRequest recognizePassportMRZreq = new RecognizePassportMRZRequest();
            AlibabaCloud.Commons.Common.Convert(request, recognizePassportMRZreq);
            recognizePassportMRZreq.ImageURL = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            RecognizePassportMRZResponse recognizePassportMRZResp = RecognizePassportMRZ(recognizePassportMRZreq, runtime);
            return recognizePassportMRZResp;
        }

        public async Task<RecognizePassportMRZResponse> RecognizePassportMRZAdvanceAsync(RecognizePassportMRZAdvanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            // Step 0: init client
            string accessKeyId = await this._credential.GetAccessKeyIdAsync();
            string accessKeySecret = await this._credential.GetAccessKeySecretAsync();
            AlibabaCloud.RPCClient.Models.Config authConfig = new AlibabaCloud.RPCClient.Models.Config
            {
                AccessKeyId = accessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Client authClient = new AlibabaCloud.SDK.OpenPlatform20191219.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest
            {
                Product = "ocr",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadResponse authResponse = await authClient.AuthorizeFileUploadWithOptionsAsync(authRequest, runtime);
            // Step 1: request OSS api to upload file
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            AlibabaCloud.SDK.TeaFileform.Models.FileField fileObj = new AlibabaCloud.SDK.TeaFileform.Models.FileField
            {
                Filename = authResponse.ObjectKey,
                Content = request.ImageURLObject,
                ContentType = "",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader ossHeader = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader
            {
                AccessKeyId = authResponse.AccessKeyId,
                Policy = authResponse.EncodedPolicy,
                Signature = authResponse.Signature,
                Key = authResponse.ObjectKey,
                File = fileObj,
                SuccessActionStatus = "201",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest uploadRequest = new AlibabaCloud.OSS.Models.PostObjectRequest
            {
                BucketName = authResponse.Bucket,
                Header = ossHeader,
            };
            AlibabaCloud.OSSUtil.Models.RuntimeOptions ossRuntime = new AlibabaCloud.OSSUtil.Models.RuntimeOptions();
            AlibabaCloud.Commons.Common.Convert(runtime, ossRuntime);
            await ossClient.PostObjectAsync(uploadRequest, ossRuntime);
            // Step 2: request final api
            RecognizePassportMRZRequest recognizePassportMRZreq = new RecognizePassportMRZRequest();
            AlibabaCloud.Commons.Common.Convert(request, recognizePassportMRZreq);
            recognizePassportMRZreq.ImageURL = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            RecognizePassportMRZResponse recognizePassportMRZResp = await RecognizePassportMRZAsync(recognizePassportMRZreq, runtime);
            return recognizePassportMRZResp;
        }

        public RecognizeTakeoutOrderResponse RecognizeTakeoutOrder(RecognizeTakeoutOrderRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RecognizeTakeoutOrderResponse>(DoRequest("RecognizeTakeoutOrder", "HTTPS", "POST", "2019-12-30", "AK", null, request.ToMap(), runtime));
        }

        public async Task<RecognizeTakeoutOrderResponse> RecognizeTakeoutOrderAsync(RecognizeTakeoutOrderRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RecognizeTakeoutOrderResponse>(await DoRequestAsync("RecognizeTakeoutOrder", "HTTPS", "POST", "2019-12-30", "AK", null, request.ToMap(), runtime));
        }

        public RecognizeTakeoutOrderResponse RecognizeTakeoutOrderAdvance(RecognizeTakeoutOrderAdvanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            // Step 0: init client
            string accessKeyId = this._credential.GetAccessKeyId();
            string accessKeySecret = this._credential.GetAccessKeySecret();
            AlibabaCloud.RPCClient.Models.Config authConfig = new AlibabaCloud.RPCClient.Models.Config
            {
                AccessKeyId = accessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Client authClient = new AlibabaCloud.SDK.OpenPlatform20191219.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest
            {
                Product = "ocr",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadResponse authResponse = authClient.AuthorizeFileUploadWithOptions(authRequest, runtime);
            // Step 1: request OSS api to upload file
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            AlibabaCloud.SDK.TeaFileform.Models.FileField fileObj = new AlibabaCloud.SDK.TeaFileform.Models.FileField
            {
                Filename = authResponse.ObjectKey,
                Content = request.ImageURLObject,
                ContentType = "",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader ossHeader = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader
            {
                AccessKeyId = authResponse.AccessKeyId,
                Policy = authResponse.EncodedPolicy,
                Signature = authResponse.Signature,
                Key = authResponse.ObjectKey,
                File = fileObj,
                SuccessActionStatus = "201",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest uploadRequest = new AlibabaCloud.OSS.Models.PostObjectRequest
            {
                BucketName = authResponse.Bucket,
                Header = ossHeader,
            };
            AlibabaCloud.OSSUtil.Models.RuntimeOptions ossRuntime = new AlibabaCloud.OSSUtil.Models.RuntimeOptions();
            AlibabaCloud.Commons.Common.Convert(runtime, ossRuntime);
            ossClient.PostObject(uploadRequest, ossRuntime);
            // Step 2: request final api
            RecognizeTakeoutOrderRequest recognizeTakeoutOrderreq = new RecognizeTakeoutOrderRequest();
            AlibabaCloud.Commons.Common.Convert(request, recognizeTakeoutOrderreq);
            recognizeTakeoutOrderreq.ImageURL = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            RecognizeTakeoutOrderResponse recognizeTakeoutOrderResp = RecognizeTakeoutOrder(recognizeTakeoutOrderreq, runtime);
            return recognizeTakeoutOrderResp;
        }

        public async Task<RecognizeTakeoutOrderResponse> RecognizeTakeoutOrderAdvanceAsync(RecognizeTakeoutOrderAdvanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            // Step 0: init client
            string accessKeyId = await this._credential.GetAccessKeyIdAsync();
            string accessKeySecret = await this._credential.GetAccessKeySecretAsync();
            AlibabaCloud.RPCClient.Models.Config authConfig = new AlibabaCloud.RPCClient.Models.Config
            {
                AccessKeyId = accessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Client authClient = new AlibabaCloud.SDK.OpenPlatform20191219.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest
            {
                Product = "ocr",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadResponse authResponse = await authClient.AuthorizeFileUploadWithOptionsAsync(authRequest, runtime);
            // Step 1: request OSS api to upload file
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            AlibabaCloud.SDK.TeaFileform.Models.FileField fileObj = new AlibabaCloud.SDK.TeaFileform.Models.FileField
            {
                Filename = authResponse.ObjectKey,
                Content = request.ImageURLObject,
                ContentType = "",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader ossHeader = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader
            {
                AccessKeyId = authResponse.AccessKeyId,
                Policy = authResponse.EncodedPolicy,
                Signature = authResponse.Signature,
                Key = authResponse.ObjectKey,
                File = fileObj,
                SuccessActionStatus = "201",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest uploadRequest = new AlibabaCloud.OSS.Models.PostObjectRequest
            {
                BucketName = authResponse.Bucket,
                Header = ossHeader,
            };
            AlibabaCloud.OSSUtil.Models.RuntimeOptions ossRuntime = new AlibabaCloud.OSSUtil.Models.RuntimeOptions();
            AlibabaCloud.Commons.Common.Convert(runtime, ossRuntime);
            await ossClient.PostObjectAsync(uploadRequest, ossRuntime);
            // Step 2: request final api
            RecognizeTakeoutOrderRequest recognizeTakeoutOrderreq = new RecognizeTakeoutOrderRequest();
            AlibabaCloud.Commons.Common.Convert(request, recognizeTakeoutOrderreq);
            recognizeTakeoutOrderreq.ImageURL = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            RecognizeTakeoutOrderResponse recognizeTakeoutOrderResp = await RecognizeTakeoutOrderAsync(recognizeTakeoutOrderreq, runtime);
            return recognizeTakeoutOrderResp;
        }

        public RecognizeQrCodeResponse RecognizeQrCode(RecognizeQrCodeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RecognizeQrCodeResponse>(DoRequest("RecognizeQrCode", "HTTPS", "POST", "2019-12-30", "AK", null, request.ToMap(), runtime));
        }

        public async Task<RecognizeQrCodeResponse> RecognizeQrCodeAsync(RecognizeQrCodeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RecognizeQrCodeResponse>(await DoRequestAsync("RecognizeQrCode", "HTTPS", "POST", "2019-12-30", "AK", null, request.ToMap(), runtime));
        }

        public RecognizeVATInvoiceResponse RecognizeVATInvoice(RecognizeVATInvoiceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RecognizeVATInvoiceResponse>(DoRequest("RecognizeVATInvoice", "HTTPS", "POST", "2019-12-30", "AK", null, request.ToMap(), runtime));
        }

        public async Task<RecognizeVATInvoiceResponse> RecognizeVATInvoiceAsync(RecognizeVATInvoiceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RecognizeVATInvoiceResponse>(await DoRequestAsync("RecognizeVATInvoice", "HTTPS", "POST", "2019-12-30", "AK", null, request.ToMap(), runtime));
        }

        public RecognizeVATInvoiceResponse RecognizeVATInvoiceAdvance(RecognizeVATInvoiceAdvanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            // Step 0: init client
            string accessKeyId = this._credential.GetAccessKeyId();
            string accessKeySecret = this._credential.GetAccessKeySecret();
            AlibabaCloud.RPCClient.Models.Config authConfig = new AlibabaCloud.RPCClient.Models.Config
            {
                AccessKeyId = accessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Client authClient = new AlibabaCloud.SDK.OpenPlatform20191219.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest
            {
                Product = "ocr",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadResponse authResponse = authClient.AuthorizeFileUploadWithOptions(authRequest, runtime);
            // Step 1: request OSS api to upload file
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            AlibabaCloud.SDK.TeaFileform.Models.FileField fileObj = new AlibabaCloud.SDK.TeaFileform.Models.FileField
            {
                Filename = authResponse.ObjectKey,
                Content = request.FileURLObject,
                ContentType = "",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader ossHeader = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader
            {
                AccessKeyId = authResponse.AccessKeyId,
                Policy = authResponse.EncodedPolicy,
                Signature = authResponse.Signature,
                Key = authResponse.ObjectKey,
                File = fileObj,
                SuccessActionStatus = "201",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest uploadRequest = new AlibabaCloud.OSS.Models.PostObjectRequest
            {
                BucketName = authResponse.Bucket,
                Header = ossHeader,
            };
            AlibabaCloud.OSSUtil.Models.RuntimeOptions ossRuntime = new AlibabaCloud.OSSUtil.Models.RuntimeOptions();
            AlibabaCloud.Commons.Common.Convert(runtime, ossRuntime);
            ossClient.PostObject(uploadRequest, ossRuntime);
            // Step 2: request final api
            RecognizeVATInvoiceRequest recognizeVATInvoicereq = new RecognizeVATInvoiceRequest();
            AlibabaCloud.Commons.Common.Convert(request, recognizeVATInvoicereq);
            recognizeVATInvoicereq.FileURL = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            RecognizeVATInvoiceResponse recognizeVATInvoiceResp = RecognizeVATInvoice(recognizeVATInvoicereq, runtime);
            return recognizeVATInvoiceResp;
        }

        public async Task<RecognizeVATInvoiceResponse> RecognizeVATInvoiceAdvanceAsync(RecognizeVATInvoiceAdvanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            // Step 0: init client
            string accessKeyId = await this._credential.GetAccessKeyIdAsync();
            string accessKeySecret = await this._credential.GetAccessKeySecretAsync();
            AlibabaCloud.RPCClient.Models.Config authConfig = new AlibabaCloud.RPCClient.Models.Config
            {
                AccessKeyId = accessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Client authClient = new AlibabaCloud.SDK.OpenPlatform20191219.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest
            {
                Product = "ocr",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadResponse authResponse = await authClient.AuthorizeFileUploadWithOptionsAsync(authRequest, runtime);
            // Step 1: request OSS api to upload file
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            AlibabaCloud.SDK.TeaFileform.Models.FileField fileObj = new AlibabaCloud.SDK.TeaFileform.Models.FileField
            {
                Filename = authResponse.ObjectKey,
                Content = request.FileURLObject,
                ContentType = "",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader ossHeader = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader
            {
                AccessKeyId = authResponse.AccessKeyId,
                Policy = authResponse.EncodedPolicy,
                Signature = authResponse.Signature,
                Key = authResponse.ObjectKey,
                File = fileObj,
                SuccessActionStatus = "201",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest uploadRequest = new AlibabaCloud.OSS.Models.PostObjectRequest
            {
                BucketName = authResponse.Bucket,
                Header = ossHeader,
            };
            AlibabaCloud.OSSUtil.Models.RuntimeOptions ossRuntime = new AlibabaCloud.OSSUtil.Models.RuntimeOptions();
            AlibabaCloud.Commons.Common.Convert(runtime, ossRuntime);
            await ossClient.PostObjectAsync(uploadRequest, ossRuntime);
            // Step 2: request final api
            RecognizeVATInvoiceRequest recognizeVATInvoicereq = new RecognizeVATInvoiceRequest();
            AlibabaCloud.Commons.Common.Convert(request, recognizeVATInvoicereq);
            recognizeVATInvoicereq.FileURL = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            RecognizeVATInvoiceResponse recognizeVATInvoiceResp = await RecognizeVATInvoiceAsync(recognizeVATInvoicereq, runtime);
            return recognizeVATInvoiceResp;
        }

        public RecognizeCharacterResponse RecognizeCharacter(RecognizeCharacterRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RecognizeCharacterResponse>(DoRequest("RecognizeCharacter", "HTTPS", "POST", "2019-12-30", "AK", null, request.ToMap(), runtime));
        }

        public async Task<RecognizeCharacterResponse> RecognizeCharacterAsync(RecognizeCharacterRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RecognizeCharacterResponse>(await DoRequestAsync("RecognizeCharacter", "HTTPS", "POST", "2019-12-30", "AK", null, request.ToMap(), runtime));
        }

        public RecognizeCharacterResponse RecognizeCharacterAdvance(RecognizeCharacterAdvanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            // Step 0: init client
            string accessKeyId = this._credential.GetAccessKeyId();
            string accessKeySecret = this._credential.GetAccessKeySecret();
            AlibabaCloud.RPCClient.Models.Config authConfig = new AlibabaCloud.RPCClient.Models.Config
            {
                AccessKeyId = accessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Client authClient = new AlibabaCloud.SDK.OpenPlatform20191219.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest
            {
                Product = "ocr",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadResponse authResponse = authClient.AuthorizeFileUploadWithOptions(authRequest, runtime);
            // Step 1: request OSS api to upload file
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            AlibabaCloud.SDK.TeaFileform.Models.FileField fileObj = new AlibabaCloud.SDK.TeaFileform.Models.FileField
            {
                Filename = authResponse.ObjectKey,
                Content = request.ImageURLObject,
                ContentType = "",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader ossHeader = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader
            {
                AccessKeyId = authResponse.AccessKeyId,
                Policy = authResponse.EncodedPolicy,
                Signature = authResponse.Signature,
                Key = authResponse.ObjectKey,
                File = fileObj,
                SuccessActionStatus = "201",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest uploadRequest = new AlibabaCloud.OSS.Models.PostObjectRequest
            {
                BucketName = authResponse.Bucket,
                Header = ossHeader,
            };
            AlibabaCloud.OSSUtil.Models.RuntimeOptions ossRuntime = new AlibabaCloud.OSSUtil.Models.RuntimeOptions();
            AlibabaCloud.Commons.Common.Convert(runtime, ossRuntime);
            ossClient.PostObject(uploadRequest, ossRuntime);
            // Step 2: request final api
            RecognizeCharacterRequest recognizeCharacterreq = new RecognizeCharacterRequest();
            AlibabaCloud.Commons.Common.Convert(request, recognizeCharacterreq);
            recognizeCharacterreq.ImageURL = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            RecognizeCharacterResponse recognizeCharacterResp = RecognizeCharacter(recognizeCharacterreq, runtime);
            return recognizeCharacterResp;
        }

        public async Task<RecognizeCharacterResponse> RecognizeCharacterAdvanceAsync(RecognizeCharacterAdvanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            // Step 0: init client
            string accessKeyId = await this._credential.GetAccessKeyIdAsync();
            string accessKeySecret = await this._credential.GetAccessKeySecretAsync();
            AlibabaCloud.RPCClient.Models.Config authConfig = new AlibabaCloud.RPCClient.Models.Config
            {
                AccessKeyId = accessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Client authClient = new AlibabaCloud.SDK.OpenPlatform20191219.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest
            {
                Product = "ocr",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadResponse authResponse = await authClient.AuthorizeFileUploadWithOptionsAsync(authRequest, runtime);
            // Step 1: request OSS api to upload file
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            AlibabaCloud.SDK.TeaFileform.Models.FileField fileObj = new AlibabaCloud.SDK.TeaFileform.Models.FileField
            {
                Filename = authResponse.ObjectKey,
                Content = request.ImageURLObject,
                ContentType = "",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader ossHeader = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader
            {
                AccessKeyId = authResponse.AccessKeyId,
                Policy = authResponse.EncodedPolicy,
                Signature = authResponse.Signature,
                Key = authResponse.ObjectKey,
                File = fileObj,
                SuccessActionStatus = "201",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest uploadRequest = new AlibabaCloud.OSS.Models.PostObjectRequest
            {
                BucketName = authResponse.Bucket,
                Header = ossHeader,
            };
            AlibabaCloud.OSSUtil.Models.RuntimeOptions ossRuntime = new AlibabaCloud.OSSUtil.Models.RuntimeOptions();
            AlibabaCloud.Commons.Common.Convert(runtime, ossRuntime);
            await ossClient.PostObjectAsync(uploadRequest, ossRuntime);
            // Step 2: request final api
            RecognizeCharacterRequest recognizeCharacterreq = new RecognizeCharacterRequest();
            AlibabaCloud.Commons.Common.Convert(request, recognizeCharacterreq);
            recognizeCharacterreq.ImageURL = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            RecognizeCharacterResponse recognizeCharacterResp = await RecognizeCharacterAsync(recognizeCharacterreq, runtime);
            return recognizeCharacterResp;
        }

        public RecognizeTaxiInvoiceResponse RecognizeTaxiInvoice(RecognizeTaxiInvoiceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RecognizeTaxiInvoiceResponse>(DoRequest("RecognizeTaxiInvoice", "HTTPS", "POST", "2019-12-30", "AK", null, request.ToMap(), runtime));
        }

        public async Task<RecognizeTaxiInvoiceResponse> RecognizeTaxiInvoiceAsync(RecognizeTaxiInvoiceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RecognizeTaxiInvoiceResponse>(await DoRequestAsync("RecognizeTaxiInvoice", "HTTPS", "POST", "2019-12-30", "AK", null, request.ToMap(), runtime));
        }

        public RecognizeTaxiInvoiceResponse RecognizeTaxiInvoiceAdvance(RecognizeTaxiInvoiceAdvanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            // Step 0: init client
            string accessKeyId = this._credential.GetAccessKeyId();
            string accessKeySecret = this._credential.GetAccessKeySecret();
            AlibabaCloud.RPCClient.Models.Config authConfig = new AlibabaCloud.RPCClient.Models.Config
            {
                AccessKeyId = accessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Client authClient = new AlibabaCloud.SDK.OpenPlatform20191219.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest
            {
                Product = "ocr",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadResponse authResponse = authClient.AuthorizeFileUploadWithOptions(authRequest, runtime);
            // Step 1: request OSS api to upload file
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            AlibabaCloud.SDK.TeaFileform.Models.FileField fileObj = new AlibabaCloud.SDK.TeaFileform.Models.FileField
            {
                Filename = authResponse.ObjectKey,
                Content = request.ImageURLObject,
                ContentType = "",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader ossHeader = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader
            {
                AccessKeyId = authResponse.AccessKeyId,
                Policy = authResponse.EncodedPolicy,
                Signature = authResponse.Signature,
                Key = authResponse.ObjectKey,
                File = fileObj,
                SuccessActionStatus = "201",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest uploadRequest = new AlibabaCloud.OSS.Models.PostObjectRequest
            {
                BucketName = authResponse.Bucket,
                Header = ossHeader,
            };
            AlibabaCloud.OSSUtil.Models.RuntimeOptions ossRuntime = new AlibabaCloud.OSSUtil.Models.RuntimeOptions();
            AlibabaCloud.Commons.Common.Convert(runtime, ossRuntime);
            ossClient.PostObject(uploadRequest, ossRuntime);
            // Step 2: request final api
            RecognizeTaxiInvoiceRequest recognizeTaxiInvoicereq = new RecognizeTaxiInvoiceRequest();
            AlibabaCloud.Commons.Common.Convert(request, recognizeTaxiInvoicereq);
            recognizeTaxiInvoicereq.ImageURL = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            RecognizeTaxiInvoiceResponse recognizeTaxiInvoiceResp = RecognizeTaxiInvoice(recognizeTaxiInvoicereq, runtime);
            return recognizeTaxiInvoiceResp;
        }

        public async Task<RecognizeTaxiInvoiceResponse> RecognizeTaxiInvoiceAdvanceAsync(RecognizeTaxiInvoiceAdvanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            // Step 0: init client
            string accessKeyId = await this._credential.GetAccessKeyIdAsync();
            string accessKeySecret = await this._credential.GetAccessKeySecretAsync();
            AlibabaCloud.RPCClient.Models.Config authConfig = new AlibabaCloud.RPCClient.Models.Config
            {
                AccessKeyId = accessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Client authClient = new AlibabaCloud.SDK.OpenPlatform20191219.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest
            {
                Product = "ocr",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadResponse authResponse = await authClient.AuthorizeFileUploadWithOptionsAsync(authRequest, runtime);
            // Step 1: request OSS api to upload file
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            AlibabaCloud.SDK.TeaFileform.Models.FileField fileObj = new AlibabaCloud.SDK.TeaFileform.Models.FileField
            {
                Filename = authResponse.ObjectKey,
                Content = request.ImageURLObject,
                ContentType = "",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader ossHeader = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader
            {
                AccessKeyId = authResponse.AccessKeyId,
                Policy = authResponse.EncodedPolicy,
                Signature = authResponse.Signature,
                Key = authResponse.ObjectKey,
                File = fileObj,
                SuccessActionStatus = "201",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest uploadRequest = new AlibabaCloud.OSS.Models.PostObjectRequest
            {
                BucketName = authResponse.Bucket,
                Header = ossHeader,
            };
            AlibabaCloud.OSSUtil.Models.RuntimeOptions ossRuntime = new AlibabaCloud.OSSUtil.Models.RuntimeOptions();
            AlibabaCloud.Commons.Common.Convert(runtime, ossRuntime);
            await ossClient.PostObjectAsync(uploadRequest, ossRuntime);
            // Step 2: request final api
            RecognizeTaxiInvoiceRequest recognizeTaxiInvoicereq = new RecognizeTaxiInvoiceRequest();
            AlibabaCloud.Commons.Common.Convert(request, recognizeTaxiInvoicereq);
            recognizeTaxiInvoicereq.ImageURL = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            RecognizeTaxiInvoiceResponse recognizeTaxiInvoiceResp = await RecognizeTaxiInvoiceAsync(recognizeTaxiInvoicereq, runtime);
            return recognizeTaxiInvoiceResp;
        }

        public RecognizeIdentityCardResponse RecognizeIdentityCard(RecognizeIdentityCardRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RecognizeIdentityCardResponse>(DoRequest("RecognizeIdentityCard", "HTTPS", "POST", "2019-12-30", "AK", null, request.ToMap(), runtime));
        }

        public async Task<RecognizeIdentityCardResponse> RecognizeIdentityCardAsync(RecognizeIdentityCardRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RecognizeIdentityCardResponse>(await DoRequestAsync("RecognizeIdentityCard", "HTTPS", "POST", "2019-12-30", "AK", null, request.ToMap(), runtime));
        }

        public RecognizeIdentityCardResponse RecognizeIdentityCardAdvance(RecognizeIdentityCardAdvanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            // Step 0: init client
            string accessKeyId = this._credential.GetAccessKeyId();
            string accessKeySecret = this._credential.GetAccessKeySecret();
            AlibabaCloud.RPCClient.Models.Config authConfig = new AlibabaCloud.RPCClient.Models.Config
            {
                AccessKeyId = accessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Client authClient = new AlibabaCloud.SDK.OpenPlatform20191219.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest
            {
                Product = "ocr",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadResponse authResponse = authClient.AuthorizeFileUploadWithOptions(authRequest, runtime);
            // Step 1: request OSS api to upload file
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            AlibabaCloud.SDK.TeaFileform.Models.FileField fileObj = new AlibabaCloud.SDK.TeaFileform.Models.FileField
            {
                Filename = authResponse.ObjectKey,
                Content = request.ImageURLObject,
                ContentType = "",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader ossHeader = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader
            {
                AccessKeyId = authResponse.AccessKeyId,
                Policy = authResponse.EncodedPolicy,
                Signature = authResponse.Signature,
                Key = authResponse.ObjectKey,
                File = fileObj,
                SuccessActionStatus = "201",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest uploadRequest = new AlibabaCloud.OSS.Models.PostObjectRequest
            {
                BucketName = authResponse.Bucket,
                Header = ossHeader,
            };
            AlibabaCloud.OSSUtil.Models.RuntimeOptions ossRuntime = new AlibabaCloud.OSSUtil.Models.RuntimeOptions();
            AlibabaCloud.Commons.Common.Convert(runtime, ossRuntime);
            ossClient.PostObject(uploadRequest, ossRuntime);
            // Step 2: request final api
            RecognizeIdentityCardRequest recognizeIdentityCardreq = new RecognizeIdentityCardRequest();
            AlibabaCloud.Commons.Common.Convert(request, recognizeIdentityCardreq);
            recognizeIdentityCardreq.ImageURL = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            RecognizeIdentityCardResponse recognizeIdentityCardResp = RecognizeIdentityCard(recognizeIdentityCardreq, runtime);
            return recognizeIdentityCardResp;
        }

        public async Task<RecognizeIdentityCardResponse> RecognizeIdentityCardAdvanceAsync(RecognizeIdentityCardAdvanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            // Step 0: init client
            string accessKeyId = await this._credential.GetAccessKeyIdAsync();
            string accessKeySecret = await this._credential.GetAccessKeySecretAsync();
            AlibabaCloud.RPCClient.Models.Config authConfig = new AlibabaCloud.RPCClient.Models.Config
            {
                AccessKeyId = accessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Client authClient = new AlibabaCloud.SDK.OpenPlatform20191219.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest
            {
                Product = "ocr",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadResponse authResponse = await authClient.AuthorizeFileUploadWithOptionsAsync(authRequest, runtime);
            // Step 1: request OSS api to upload file
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            AlibabaCloud.SDK.TeaFileform.Models.FileField fileObj = new AlibabaCloud.SDK.TeaFileform.Models.FileField
            {
                Filename = authResponse.ObjectKey,
                Content = request.ImageURLObject,
                ContentType = "",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader ossHeader = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader
            {
                AccessKeyId = authResponse.AccessKeyId,
                Policy = authResponse.EncodedPolicy,
                Signature = authResponse.Signature,
                Key = authResponse.ObjectKey,
                File = fileObj,
                SuccessActionStatus = "201",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest uploadRequest = new AlibabaCloud.OSS.Models.PostObjectRequest
            {
                BucketName = authResponse.Bucket,
                Header = ossHeader,
            };
            AlibabaCloud.OSSUtil.Models.RuntimeOptions ossRuntime = new AlibabaCloud.OSSUtil.Models.RuntimeOptions();
            AlibabaCloud.Commons.Common.Convert(runtime, ossRuntime);
            await ossClient.PostObjectAsync(uploadRequest, ossRuntime);
            // Step 2: request final api
            RecognizeIdentityCardRequest recognizeIdentityCardreq = new RecognizeIdentityCardRequest();
            AlibabaCloud.Commons.Common.Convert(request, recognizeIdentityCardreq);
            recognizeIdentityCardreq.ImageURL = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            RecognizeIdentityCardResponse recognizeIdentityCardResp = await RecognizeIdentityCardAsync(recognizeIdentityCardreq, runtime);
            return recognizeIdentityCardResp;
        }

        public RecognizeLicensePlateResponse RecognizeLicensePlate(RecognizeLicensePlateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RecognizeLicensePlateResponse>(DoRequest("RecognizeLicensePlate", "HTTPS", "POST", "2019-12-30", "AK", null, request.ToMap(), runtime));
        }

        public async Task<RecognizeLicensePlateResponse> RecognizeLicensePlateAsync(RecognizeLicensePlateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RecognizeLicensePlateResponse>(await DoRequestAsync("RecognizeLicensePlate", "HTTPS", "POST", "2019-12-30", "AK", null, request.ToMap(), runtime));
        }

        public RecognizeLicensePlateResponse RecognizeLicensePlateAdvance(RecognizeLicensePlateAdvanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            // Step 0: init client
            string accessKeyId = this._credential.GetAccessKeyId();
            string accessKeySecret = this._credential.GetAccessKeySecret();
            AlibabaCloud.RPCClient.Models.Config authConfig = new AlibabaCloud.RPCClient.Models.Config
            {
                AccessKeyId = accessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Client authClient = new AlibabaCloud.SDK.OpenPlatform20191219.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest
            {
                Product = "ocr",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadResponse authResponse = authClient.AuthorizeFileUploadWithOptions(authRequest, runtime);
            // Step 1: request OSS api to upload file
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            AlibabaCloud.SDK.TeaFileform.Models.FileField fileObj = new AlibabaCloud.SDK.TeaFileform.Models.FileField
            {
                Filename = authResponse.ObjectKey,
                Content = request.ImageURLObject,
                ContentType = "",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader ossHeader = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader
            {
                AccessKeyId = authResponse.AccessKeyId,
                Policy = authResponse.EncodedPolicy,
                Signature = authResponse.Signature,
                Key = authResponse.ObjectKey,
                File = fileObj,
                SuccessActionStatus = "201",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest uploadRequest = new AlibabaCloud.OSS.Models.PostObjectRequest
            {
                BucketName = authResponse.Bucket,
                Header = ossHeader,
            };
            AlibabaCloud.OSSUtil.Models.RuntimeOptions ossRuntime = new AlibabaCloud.OSSUtil.Models.RuntimeOptions();
            AlibabaCloud.Commons.Common.Convert(runtime, ossRuntime);
            ossClient.PostObject(uploadRequest, ossRuntime);
            // Step 2: request final api
            RecognizeLicensePlateRequest recognizeLicensePlatereq = new RecognizeLicensePlateRequest();
            AlibabaCloud.Commons.Common.Convert(request, recognizeLicensePlatereq);
            recognizeLicensePlatereq.ImageURL = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            RecognizeLicensePlateResponse recognizeLicensePlateResp = RecognizeLicensePlate(recognizeLicensePlatereq, runtime);
            return recognizeLicensePlateResp;
        }

        public async Task<RecognizeLicensePlateResponse> RecognizeLicensePlateAdvanceAsync(RecognizeLicensePlateAdvanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            // Step 0: init client
            string accessKeyId = await this._credential.GetAccessKeyIdAsync();
            string accessKeySecret = await this._credential.GetAccessKeySecretAsync();
            AlibabaCloud.RPCClient.Models.Config authConfig = new AlibabaCloud.RPCClient.Models.Config
            {
                AccessKeyId = accessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Client authClient = new AlibabaCloud.SDK.OpenPlatform20191219.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest
            {
                Product = "ocr",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadResponse authResponse = await authClient.AuthorizeFileUploadWithOptionsAsync(authRequest, runtime);
            // Step 1: request OSS api to upload file
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            AlibabaCloud.SDK.TeaFileform.Models.FileField fileObj = new AlibabaCloud.SDK.TeaFileform.Models.FileField
            {
                Filename = authResponse.ObjectKey,
                Content = request.ImageURLObject,
                ContentType = "",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader ossHeader = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader
            {
                AccessKeyId = authResponse.AccessKeyId,
                Policy = authResponse.EncodedPolicy,
                Signature = authResponse.Signature,
                Key = authResponse.ObjectKey,
                File = fileObj,
                SuccessActionStatus = "201",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest uploadRequest = new AlibabaCloud.OSS.Models.PostObjectRequest
            {
                BucketName = authResponse.Bucket,
                Header = ossHeader,
            };
            AlibabaCloud.OSSUtil.Models.RuntimeOptions ossRuntime = new AlibabaCloud.OSSUtil.Models.RuntimeOptions();
            AlibabaCloud.Commons.Common.Convert(runtime, ossRuntime);
            await ossClient.PostObjectAsync(uploadRequest, ossRuntime);
            // Step 2: request final api
            RecognizeLicensePlateRequest recognizeLicensePlatereq = new RecognizeLicensePlateRequest();
            AlibabaCloud.Commons.Common.Convert(request, recognizeLicensePlatereq);
            recognizeLicensePlatereq.ImageURL = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            RecognizeLicensePlateResponse recognizeLicensePlateResp = await RecognizeLicensePlateAsync(recognizeLicensePlatereq, runtime);
            return recognizeLicensePlateResp;
        }

        public RecognizeTableResponse RecognizeTable(RecognizeTableRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RecognizeTableResponse>(DoRequest("RecognizeTable", "HTTPS", "POST", "2019-12-30", "AK", null, request.ToMap(), runtime));
        }

        public async Task<RecognizeTableResponse> RecognizeTableAsync(RecognizeTableRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RecognizeTableResponse>(await DoRequestAsync("RecognizeTable", "HTTPS", "POST", "2019-12-30", "AK", null, request.ToMap(), runtime));
        }

        public RecognizeTableResponse RecognizeTableAdvance(RecognizeTableAdvanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            // Step 0: init client
            string accessKeyId = this._credential.GetAccessKeyId();
            string accessKeySecret = this._credential.GetAccessKeySecret();
            AlibabaCloud.RPCClient.Models.Config authConfig = new AlibabaCloud.RPCClient.Models.Config
            {
                AccessKeyId = accessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Client authClient = new AlibabaCloud.SDK.OpenPlatform20191219.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest
            {
                Product = "ocr",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadResponse authResponse = authClient.AuthorizeFileUploadWithOptions(authRequest, runtime);
            // Step 1: request OSS api to upload file
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            AlibabaCloud.SDK.TeaFileform.Models.FileField fileObj = new AlibabaCloud.SDK.TeaFileform.Models.FileField
            {
                Filename = authResponse.ObjectKey,
                Content = request.ImageURLObject,
                ContentType = "",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader ossHeader = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader
            {
                AccessKeyId = authResponse.AccessKeyId,
                Policy = authResponse.EncodedPolicy,
                Signature = authResponse.Signature,
                Key = authResponse.ObjectKey,
                File = fileObj,
                SuccessActionStatus = "201",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest uploadRequest = new AlibabaCloud.OSS.Models.PostObjectRequest
            {
                BucketName = authResponse.Bucket,
                Header = ossHeader,
            };
            AlibabaCloud.OSSUtil.Models.RuntimeOptions ossRuntime = new AlibabaCloud.OSSUtil.Models.RuntimeOptions();
            AlibabaCloud.Commons.Common.Convert(runtime, ossRuntime);
            ossClient.PostObject(uploadRequest, ossRuntime);
            // Step 2: request final api
            RecognizeTableRequest recognizeTablereq = new RecognizeTableRequest();
            AlibabaCloud.Commons.Common.Convert(request, recognizeTablereq);
            recognizeTablereq.ImageURL = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            RecognizeTableResponse recognizeTableResp = RecognizeTable(recognizeTablereq, runtime);
            return recognizeTableResp;
        }

        public async Task<RecognizeTableResponse> RecognizeTableAdvanceAsync(RecognizeTableAdvanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            // Step 0: init client
            string accessKeyId = await this._credential.GetAccessKeyIdAsync();
            string accessKeySecret = await this._credential.GetAccessKeySecretAsync();
            AlibabaCloud.RPCClient.Models.Config authConfig = new AlibabaCloud.RPCClient.Models.Config
            {
                AccessKeyId = accessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Client authClient = new AlibabaCloud.SDK.OpenPlatform20191219.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest
            {
                Product = "ocr",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadResponse authResponse = await authClient.AuthorizeFileUploadWithOptionsAsync(authRequest, runtime);
            // Step 1: request OSS api to upload file
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            AlibabaCloud.SDK.TeaFileform.Models.FileField fileObj = new AlibabaCloud.SDK.TeaFileform.Models.FileField
            {
                Filename = authResponse.ObjectKey,
                Content = request.ImageURLObject,
                ContentType = "",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader ossHeader = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader
            {
                AccessKeyId = authResponse.AccessKeyId,
                Policy = authResponse.EncodedPolicy,
                Signature = authResponse.Signature,
                Key = authResponse.ObjectKey,
                File = fileObj,
                SuccessActionStatus = "201",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest uploadRequest = new AlibabaCloud.OSS.Models.PostObjectRequest
            {
                BucketName = authResponse.Bucket,
                Header = ossHeader,
            };
            AlibabaCloud.OSSUtil.Models.RuntimeOptions ossRuntime = new AlibabaCloud.OSSUtil.Models.RuntimeOptions();
            AlibabaCloud.Commons.Common.Convert(runtime, ossRuntime);
            await ossClient.PostObjectAsync(uploadRequest, ossRuntime);
            // Step 2: request final api
            RecognizeTableRequest recognizeTablereq = new RecognizeTableRequest();
            AlibabaCloud.Commons.Common.Convert(request, recognizeTablereq);
            recognizeTablereq.ImageURL = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            RecognizeTableResponse recognizeTableResp = await RecognizeTableAsync(recognizeTablereq, runtime);
            return recognizeTableResp;
        }

        public RecognizeDrivingLicenseResponse RecognizeDrivingLicense(RecognizeDrivingLicenseRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RecognizeDrivingLicenseResponse>(DoRequest("RecognizeDrivingLicense", "HTTPS", "POST", "2019-12-30", "AK", null, request.ToMap(), runtime));
        }

        public async Task<RecognizeDrivingLicenseResponse> RecognizeDrivingLicenseAsync(RecognizeDrivingLicenseRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RecognizeDrivingLicenseResponse>(await DoRequestAsync("RecognizeDrivingLicense", "HTTPS", "POST", "2019-12-30", "AK", null, request.ToMap(), runtime));
        }

        public RecognizeDrivingLicenseResponse RecognizeDrivingLicenseAdvance(RecognizeDrivingLicenseAdvanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            // Step 0: init client
            string accessKeyId = this._credential.GetAccessKeyId();
            string accessKeySecret = this._credential.GetAccessKeySecret();
            AlibabaCloud.RPCClient.Models.Config authConfig = new AlibabaCloud.RPCClient.Models.Config
            {
                AccessKeyId = accessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Client authClient = new AlibabaCloud.SDK.OpenPlatform20191219.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest
            {
                Product = "ocr",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadResponse authResponse = authClient.AuthorizeFileUploadWithOptions(authRequest, runtime);
            // Step 1: request OSS api to upload file
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            AlibabaCloud.SDK.TeaFileform.Models.FileField fileObj = new AlibabaCloud.SDK.TeaFileform.Models.FileField
            {
                Filename = authResponse.ObjectKey,
                Content = request.ImageURLObject,
                ContentType = "",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader ossHeader = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader
            {
                AccessKeyId = authResponse.AccessKeyId,
                Policy = authResponse.EncodedPolicy,
                Signature = authResponse.Signature,
                Key = authResponse.ObjectKey,
                File = fileObj,
                SuccessActionStatus = "201",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest uploadRequest = new AlibabaCloud.OSS.Models.PostObjectRequest
            {
                BucketName = authResponse.Bucket,
                Header = ossHeader,
            };
            AlibabaCloud.OSSUtil.Models.RuntimeOptions ossRuntime = new AlibabaCloud.OSSUtil.Models.RuntimeOptions();
            AlibabaCloud.Commons.Common.Convert(runtime, ossRuntime);
            ossClient.PostObject(uploadRequest, ossRuntime);
            // Step 2: request final api
            RecognizeDrivingLicenseRequest recognizeDrivingLicensereq = new RecognizeDrivingLicenseRequest();
            AlibabaCloud.Commons.Common.Convert(request, recognizeDrivingLicensereq);
            recognizeDrivingLicensereq.ImageURL = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            RecognizeDrivingLicenseResponse recognizeDrivingLicenseResp = RecognizeDrivingLicense(recognizeDrivingLicensereq, runtime);
            return recognizeDrivingLicenseResp;
        }

        public async Task<RecognizeDrivingLicenseResponse> RecognizeDrivingLicenseAdvanceAsync(RecognizeDrivingLicenseAdvanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            // Step 0: init client
            string accessKeyId = await this._credential.GetAccessKeyIdAsync();
            string accessKeySecret = await this._credential.GetAccessKeySecretAsync();
            AlibabaCloud.RPCClient.Models.Config authConfig = new AlibabaCloud.RPCClient.Models.Config
            {
                AccessKeyId = accessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Client authClient = new AlibabaCloud.SDK.OpenPlatform20191219.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest
            {
                Product = "ocr",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadResponse authResponse = await authClient.AuthorizeFileUploadWithOptionsAsync(authRequest, runtime);
            // Step 1: request OSS api to upload file
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            AlibabaCloud.SDK.TeaFileform.Models.FileField fileObj = new AlibabaCloud.SDK.TeaFileform.Models.FileField
            {
                Filename = authResponse.ObjectKey,
                Content = request.ImageURLObject,
                ContentType = "",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader ossHeader = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader
            {
                AccessKeyId = authResponse.AccessKeyId,
                Policy = authResponse.EncodedPolicy,
                Signature = authResponse.Signature,
                Key = authResponse.ObjectKey,
                File = fileObj,
                SuccessActionStatus = "201",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest uploadRequest = new AlibabaCloud.OSS.Models.PostObjectRequest
            {
                BucketName = authResponse.Bucket,
                Header = ossHeader,
            };
            AlibabaCloud.OSSUtil.Models.RuntimeOptions ossRuntime = new AlibabaCloud.OSSUtil.Models.RuntimeOptions();
            AlibabaCloud.Commons.Common.Convert(runtime, ossRuntime);
            await ossClient.PostObjectAsync(uploadRequest, ossRuntime);
            // Step 2: request final api
            RecognizeDrivingLicenseRequest recognizeDrivingLicensereq = new RecognizeDrivingLicenseRequest();
            AlibabaCloud.Commons.Common.Convert(request, recognizeDrivingLicensereq);
            recognizeDrivingLicensereq.ImageURL = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            RecognizeDrivingLicenseResponse recognizeDrivingLicenseResp = await RecognizeDrivingLicenseAsync(recognizeDrivingLicensereq, runtime);
            return recognizeDrivingLicenseResp;
        }

        public RecognizeBankCardResponse RecognizeBankCard(RecognizeBankCardRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RecognizeBankCardResponse>(DoRequest("RecognizeBankCard", "HTTPS", "POST", "2019-12-30", "AK", null, request.ToMap(), runtime));
        }

        public async Task<RecognizeBankCardResponse> RecognizeBankCardAsync(RecognizeBankCardRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RecognizeBankCardResponse>(await DoRequestAsync("RecognizeBankCard", "HTTPS", "POST", "2019-12-30", "AK", null, request.ToMap(), runtime));
        }

        public RecognizeBankCardResponse RecognizeBankCardAdvance(RecognizeBankCardAdvanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            // Step 0: init client
            string accessKeyId = this._credential.GetAccessKeyId();
            string accessKeySecret = this._credential.GetAccessKeySecret();
            AlibabaCloud.RPCClient.Models.Config authConfig = new AlibabaCloud.RPCClient.Models.Config
            {
                AccessKeyId = accessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Client authClient = new AlibabaCloud.SDK.OpenPlatform20191219.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest
            {
                Product = "ocr",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadResponse authResponse = authClient.AuthorizeFileUploadWithOptions(authRequest, runtime);
            // Step 1: request OSS api to upload file
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            AlibabaCloud.SDK.TeaFileform.Models.FileField fileObj = new AlibabaCloud.SDK.TeaFileform.Models.FileField
            {
                Filename = authResponse.ObjectKey,
                Content = request.ImageURLObject,
                ContentType = "",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader ossHeader = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader
            {
                AccessKeyId = authResponse.AccessKeyId,
                Policy = authResponse.EncodedPolicy,
                Signature = authResponse.Signature,
                Key = authResponse.ObjectKey,
                File = fileObj,
                SuccessActionStatus = "201",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest uploadRequest = new AlibabaCloud.OSS.Models.PostObjectRequest
            {
                BucketName = authResponse.Bucket,
                Header = ossHeader,
            };
            AlibabaCloud.OSSUtil.Models.RuntimeOptions ossRuntime = new AlibabaCloud.OSSUtil.Models.RuntimeOptions();
            AlibabaCloud.Commons.Common.Convert(runtime, ossRuntime);
            ossClient.PostObject(uploadRequest, ossRuntime);
            // Step 2: request final api
            RecognizeBankCardRequest recognizeBankCardreq = new RecognizeBankCardRequest();
            AlibabaCloud.Commons.Common.Convert(request, recognizeBankCardreq);
            recognizeBankCardreq.ImageURL = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            RecognizeBankCardResponse recognizeBankCardResp = RecognizeBankCard(recognizeBankCardreq, runtime);
            return recognizeBankCardResp;
        }

        public async Task<RecognizeBankCardResponse> RecognizeBankCardAdvanceAsync(RecognizeBankCardAdvanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            // Step 0: init client
            string accessKeyId = await this._credential.GetAccessKeyIdAsync();
            string accessKeySecret = await this._credential.GetAccessKeySecretAsync();
            AlibabaCloud.RPCClient.Models.Config authConfig = new AlibabaCloud.RPCClient.Models.Config
            {
                AccessKeyId = accessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Client authClient = new AlibabaCloud.SDK.OpenPlatform20191219.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest
            {
                Product = "ocr",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadResponse authResponse = await authClient.AuthorizeFileUploadWithOptionsAsync(authRequest, runtime);
            // Step 1: request OSS api to upload file
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            AlibabaCloud.SDK.TeaFileform.Models.FileField fileObj = new AlibabaCloud.SDK.TeaFileform.Models.FileField
            {
                Filename = authResponse.ObjectKey,
                Content = request.ImageURLObject,
                ContentType = "",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader ossHeader = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader
            {
                AccessKeyId = authResponse.AccessKeyId,
                Policy = authResponse.EncodedPolicy,
                Signature = authResponse.Signature,
                Key = authResponse.ObjectKey,
                File = fileObj,
                SuccessActionStatus = "201",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest uploadRequest = new AlibabaCloud.OSS.Models.PostObjectRequest
            {
                BucketName = authResponse.Bucket,
                Header = ossHeader,
            };
            AlibabaCloud.OSSUtil.Models.RuntimeOptions ossRuntime = new AlibabaCloud.OSSUtil.Models.RuntimeOptions();
            AlibabaCloud.Commons.Common.Convert(runtime, ossRuntime);
            await ossClient.PostObjectAsync(uploadRequest, ossRuntime);
            // Step 2: request final api
            RecognizeBankCardRequest recognizeBankCardreq = new RecognizeBankCardRequest();
            AlibabaCloud.Commons.Common.Convert(request, recognizeBankCardreq);
            recognizeBankCardreq.ImageURL = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            RecognizeBankCardResponse recognizeBankCardResp = await RecognizeBankCardAsync(recognizeBankCardreq, runtime);
            return recognizeBankCardResp;
        }

        public RecognizeTrainTicketResponse RecognizeTrainTicket(RecognizeTrainTicketRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RecognizeTrainTicketResponse>(DoRequest("RecognizeTrainTicket", "HTTPS", "POST", "2019-12-30", "AK", null, request.ToMap(), runtime));
        }

        public async Task<RecognizeTrainTicketResponse> RecognizeTrainTicketAsync(RecognizeTrainTicketRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RecognizeTrainTicketResponse>(await DoRequestAsync("RecognizeTrainTicket", "HTTPS", "POST", "2019-12-30", "AK", null, request.ToMap(), runtime));
        }

        public RecognizeTrainTicketResponse RecognizeTrainTicketAdvance(RecognizeTrainTicketAdvanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            // Step 0: init client
            string accessKeyId = this._credential.GetAccessKeyId();
            string accessKeySecret = this._credential.GetAccessKeySecret();
            AlibabaCloud.RPCClient.Models.Config authConfig = new AlibabaCloud.RPCClient.Models.Config
            {
                AccessKeyId = accessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Client authClient = new AlibabaCloud.SDK.OpenPlatform20191219.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest
            {
                Product = "ocr",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadResponse authResponse = authClient.AuthorizeFileUploadWithOptions(authRequest, runtime);
            // Step 1: request OSS api to upload file
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            AlibabaCloud.SDK.TeaFileform.Models.FileField fileObj = new AlibabaCloud.SDK.TeaFileform.Models.FileField
            {
                Filename = authResponse.ObjectKey,
                Content = request.ImageURLObject,
                ContentType = "",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader ossHeader = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader
            {
                AccessKeyId = authResponse.AccessKeyId,
                Policy = authResponse.EncodedPolicy,
                Signature = authResponse.Signature,
                Key = authResponse.ObjectKey,
                File = fileObj,
                SuccessActionStatus = "201",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest uploadRequest = new AlibabaCloud.OSS.Models.PostObjectRequest
            {
                BucketName = authResponse.Bucket,
                Header = ossHeader,
            };
            AlibabaCloud.OSSUtil.Models.RuntimeOptions ossRuntime = new AlibabaCloud.OSSUtil.Models.RuntimeOptions();
            AlibabaCloud.Commons.Common.Convert(runtime, ossRuntime);
            ossClient.PostObject(uploadRequest, ossRuntime);
            // Step 2: request final api
            RecognizeTrainTicketRequest recognizeTrainTicketreq = new RecognizeTrainTicketRequest();
            AlibabaCloud.Commons.Common.Convert(request, recognizeTrainTicketreq);
            recognizeTrainTicketreq.ImageURL = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            RecognizeTrainTicketResponse recognizeTrainTicketResp = RecognizeTrainTicket(recognizeTrainTicketreq, runtime);
            return recognizeTrainTicketResp;
        }

        public async Task<RecognizeTrainTicketResponse> RecognizeTrainTicketAdvanceAsync(RecognizeTrainTicketAdvanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            // Step 0: init client
            string accessKeyId = await this._credential.GetAccessKeyIdAsync();
            string accessKeySecret = await this._credential.GetAccessKeySecretAsync();
            AlibabaCloud.RPCClient.Models.Config authConfig = new AlibabaCloud.RPCClient.Models.Config
            {
                AccessKeyId = accessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Client authClient = new AlibabaCloud.SDK.OpenPlatform20191219.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest
            {
                Product = "ocr",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadResponse authResponse = await authClient.AuthorizeFileUploadWithOptionsAsync(authRequest, runtime);
            // Step 1: request OSS api to upload file
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            AlibabaCloud.SDK.TeaFileform.Models.FileField fileObj = new AlibabaCloud.SDK.TeaFileform.Models.FileField
            {
                Filename = authResponse.ObjectKey,
                Content = request.ImageURLObject,
                ContentType = "",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader ossHeader = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader
            {
                AccessKeyId = authResponse.AccessKeyId,
                Policy = authResponse.EncodedPolicy,
                Signature = authResponse.Signature,
                Key = authResponse.ObjectKey,
                File = fileObj,
                SuccessActionStatus = "201",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest uploadRequest = new AlibabaCloud.OSS.Models.PostObjectRequest
            {
                BucketName = authResponse.Bucket,
                Header = ossHeader,
            };
            AlibabaCloud.OSSUtil.Models.RuntimeOptions ossRuntime = new AlibabaCloud.OSSUtil.Models.RuntimeOptions();
            AlibabaCloud.Commons.Common.Convert(runtime, ossRuntime);
            await ossClient.PostObjectAsync(uploadRequest, ossRuntime);
            // Step 2: request final api
            RecognizeTrainTicketRequest recognizeTrainTicketreq = new RecognizeTrainTicketRequest();
            AlibabaCloud.Commons.Common.Convert(request, recognizeTrainTicketreq);
            recognizeTrainTicketreq.ImageURL = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            RecognizeTrainTicketResponse recognizeTrainTicketResp = await RecognizeTrainTicketAsync(recognizeTrainTicketreq, runtime);
            return recognizeTrainTicketResp;
        }

        public RecognizeDriverLicenseResponse RecognizeDriverLicense(RecognizeDriverLicenseRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RecognizeDriverLicenseResponse>(DoRequest("RecognizeDriverLicense", "HTTPS", "POST", "2019-12-30", "AK", null, request.ToMap(), runtime));
        }

        public async Task<RecognizeDriverLicenseResponse> RecognizeDriverLicenseAsync(RecognizeDriverLicenseRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RecognizeDriverLicenseResponse>(await DoRequestAsync("RecognizeDriverLicense", "HTTPS", "POST", "2019-12-30", "AK", null, request.ToMap(), runtime));
        }

        public RecognizeDriverLicenseResponse RecognizeDriverLicenseAdvance(RecognizeDriverLicenseAdvanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            // Step 0: init client
            string accessKeyId = this._credential.GetAccessKeyId();
            string accessKeySecret = this._credential.GetAccessKeySecret();
            AlibabaCloud.RPCClient.Models.Config authConfig = new AlibabaCloud.RPCClient.Models.Config
            {
                AccessKeyId = accessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Client authClient = new AlibabaCloud.SDK.OpenPlatform20191219.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest
            {
                Product = "ocr",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadResponse authResponse = authClient.AuthorizeFileUploadWithOptions(authRequest, runtime);
            // Step 1: request OSS api to upload file
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            AlibabaCloud.SDK.TeaFileform.Models.FileField fileObj = new AlibabaCloud.SDK.TeaFileform.Models.FileField
            {
                Filename = authResponse.ObjectKey,
                Content = request.ImageURLObject,
                ContentType = "",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader ossHeader = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader
            {
                AccessKeyId = authResponse.AccessKeyId,
                Policy = authResponse.EncodedPolicy,
                Signature = authResponse.Signature,
                Key = authResponse.ObjectKey,
                File = fileObj,
                SuccessActionStatus = "201",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest uploadRequest = new AlibabaCloud.OSS.Models.PostObjectRequest
            {
                BucketName = authResponse.Bucket,
                Header = ossHeader,
            };
            AlibabaCloud.OSSUtil.Models.RuntimeOptions ossRuntime = new AlibabaCloud.OSSUtil.Models.RuntimeOptions();
            AlibabaCloud.Commons.Common.Convert(runtime, ossRuntime);
            ossClient.PostObject(uploadRequest, ossRuntime);
            // Step 2: request final api
            RecognizeDriverLicenseRequest recognizeDriverLicensereq = new RecognizeDriverLicenseRequest();
            AlibabaCloud.Commons.Common.Convert(request, recognizeDriverLicensereq);
            recognizeDriverLicensereq.ImageURL = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            RecognizeDriverLicenseResponse recognizeDriverLicenseResp = RecognizeDriverLicense(recognizeDriverLicensereq, runtime);
            return recognizeDriverLicenseResp;
        }

        public async Task<RecognizeDriverLicenseResponse> RecognizeDriverLicenseAdvanceAsync(RecognizeDriverLicenseAdvanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            // Step 0: init client
            string accessKeyId = await this._credential.GetAccessKeyIdAsync();
            string accessKeySecret = await this._credential.GetAccessKeySecretAsync();
            AlibabaCloud.RPCClient.Models.Config authConfig = new AlibabaCloud.RPCClient.Models.Config
            {
                AccessKeyId = accessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Client authClient = new AlibabaCloud.SDK.OpenPlatform20191219.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest
            {
                Product = "ocr",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadResponse authResponse = await authClient.AuthorizeFileUploadWithOptionsAsync(authRequest, runtime);
            // Step 1: request OSS api to upload file
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            AlibabaCloud.SDK.TeaFileform.Models.FileField fileObj = new AlibabaCloud.SDK.TeaFileform.Models.FileField
            {
                Filename = authResponse.ObjectKey,
                Content = request.ImageURLObject,
                ContentType = "",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader ossHeader = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader
            {
                AccessKeyId = authResponse.AccessKeyId,
                Policy = authResponse.EncodedPolicy,
                Signature = authResponse.Signature,
                Key = authResponse.ObjectKey,
                File = fileObj,
                SuccessActionStatus = "201",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest uploadRequest = new AlibabaCloud.OSS.Models.PostObjectRequest
            {
                BucketName = authResponse.Bucket,
                Header = ossHeader,
            };
            AlibabaCloud.OSSUtil.Models.RuntimeOptions ossRuntime = new AlibabaCloud.OSSUtil.Models.RuntimeOptions();
            AlibabaCloud.Commons.Common.Convert(runtime, ossRuntime);
            await ossClient.PostObjectAsync(uploadRequest, ossRuntime);
            // Step 2: request final api
            RecognizeDriverLicenseRequest recognizeDriverLicensereq = new RecognizeDriverLicenseRequest();
            AlibabaCloud.Commons.Common.Convert(request, recognizeDriverLicensereq);
            recognizeDriverLicensereq.ImageURL = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            RecognizeDriverLicenseResponse recognizeDriverLicenseResp = await RecognizeDriverLicenseAsync(recognizeDriverLicensereq, runtime);
            return recognizeDriverLicenseResp;
        }

        public RecognizeAccountPageResponse RecognizeAccountPage(RecognizeAccountPageRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RecognizeAccountPageResponse>(DoRequest("RecognizeAccountPage", "HTTPS", "POST", "2019-12-30", "AK", null, request.ToMap(), runtime));
        }

        public async Task<RecognizeAccountPageResponse> RecognizeAccountPageAsync(RecognizeAccountPageRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RecognizeAccountPageResponse>(await DoRequestAsync("RecognizeAccountPage", "HTTPS", "POST", "2019-12-30", "AK", null, request.ToMap(), runtime));
        }

        public RecognizeAccountPageResponse RecognizeAccountPageAdvance(RecognizeAccountPageAdvanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            // Step 0: init client
            string accessKeyId = this._credential.GetAccessKeyId();
            string accessKeySecret = this._credential.GetAccessKeySecret();
            AlibabaCloud.RPCClient.Models.Config authConfig = new AlibabaCloud.RPCClient.Models.Config
            {
                AccessKeyId = accessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Client authClient = new AlibabaCloud.SDK.OpenPlatform20191219.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest
            {
                Product = "ocr",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadResponse authResponse = authClient.AuthorizeFileUploadWithOptions(authRequest, runtime);
            // Step 1: request OSS api to upload file
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            AlibabaCloud.SDK.TeaFileform.Models.FileField fileObj = new AlibabaCloud.SDK.TeaFileform.Models.FileField
            {
                Filename = authResponse.ObjectKey,
                Content = request.ImageURLObject,
                ContentType = "",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader ossHeader = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader
            {
                AccessKeyId = authResponse.AccessKeyId,
                Policy = authResponse.EncodedPolicy,
                Signature = authResponse.Signature,
                Key = authResponse.ObjectKey,
                File = fileObj,
                SuccessActionStatus = "201",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest uploadRequest = new AlibabaCloud.OSS.Models.PostObjectRequest
            {
                BucketName = authResponse.Bucket,
                Header = ossHeader,
            };
            AlibabaCloud.OSSUtil.Models.RuntimeOptions ossRuntime = new AlibabaCloud.OSSUtil.Models.RuntimeOptions();
            AlibabaCloud.Commons.Common.Convert(runtime, ossRuntime);
            ossClient.PostObject(uploadRequest, ossRuntime);
            // Step 2: request final api
            RecognizeAccountPageRequest recognizeAccountPagereq = new RecognizeAccountPageRequest();
            AlibabaCloud.Commons.Common.Convert(request, recognizeAccountPagereq);
            recognizeAccountPagereq.ImageURL = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            RecognizeAccountPageResponse recognizeAccountPageResp = RecognizeAccountPage(recognizeAccountPagereq, runtime);
            return recognizeAccountPageResp;
        }

        public async Task<RecognizeAccountPageResponse> RecognizeAccountPageAdvanceAsync(RecognizeAccountPageAdvanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            // Step 0: init client
            string accessKeyId = await this._credential.GetAccessKeyIdAsync();
            string accessKeySecret = await this._credential.GetAccessKeySecretAsync();
            AlibabaCloud.RPCClient.Models.Config authConfig = new AlibabaCloud.RPCClient.Models.Config
            {
                AccessKeyId = accessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Client authClient = new AlibabaCloud.SDK.OpenPlatform20191219.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest
            {
                Product = "ocr",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadResponse authResponse = await authClient.AuthorizeFileUploadWithOptionsAsync(authRequest, runtime);
            // Step 1: request OSS api to upload file
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            AlibabaCloud.SDK.TeaFileform.Models.FileField fileObj = new AlibabaCloud.SDK.TeaFileform.Models.FileField
            {
                Filename = authResponse.ObjectKey,
                Content = request.ImageURLObject,
                ContentType = "",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader ossHeader = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader
            {
                AccessKeyId = authResponse.AccessKeyId,
                Policy = authResponse.EncodedPolicy,
                Signature = authResponse.Signature,
                Key = authResponse.ObjectKey,
                File = fileObj,
                SuccessActionStatus = "201",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest uploadRequest = new AlibabaCloud.OSS.Models.PostObjectRequest
            {
                BucketName = authResponse.Bucket,
                Header = ossHeader,
            };
            AlibabaCloud.OSSUtil.Models.RuntimeOptions ossRuntime = new AlibabaCloud.OSSUtil.Models.RuntimeOptions();
            AlibabaCloud.Commons.Common.Convert(runtime, ossRuntime);
            await ossClient.PostObjectAsync(uploadRequest, ossRuntime);
            // Step 2: request final api
            RecognizeAccountPageRequest recognizeAccountPagereq = new RecognizeAccountPageRequest();
            AlibabaCloud.Commons.Common.Convert(request, recognizeAccountPagereq);
            recognizeAccountPagereq.ImageURL = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            RecognizeAccountPageResponse recognizeAccountPageResp = await RecognizeAccountPageAsync(recognizeAccountPagereq, runtime);
            return recognizeAccountPageResp;
        }

        public RecognizeStampResponse RecognizeStamp(RecognizeStampRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RecognizeStampResponse>(DoRequest("RecognizeStamp", "HTTPS", "POST", "2019-12-30", "AK", null, request.ToMap(), runtime));
        }

        public async Task<RecognizeStampResponse> RecognizeStampAsync(RecognizeStampRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RecognizeStampResponse>(await DoRequestAsync("RecognizeStamp", "HTTPS", "POST", "2019-12-30", "AK", null, request.ToMap(), runtime));
        }

        public RecognizeStampResponse RecognizeStampAdvance(RecognizeStampAdvanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            // Step 0: init client
            string accessKeyId = this._credential.GetAccessKeyId();
            string accessKeySecret = this._credential.GetAccessKeySecret();
            AlibabaCloud.RPCClient.Models.Config authConfig = new AlibabaCloud.RPCClient.Models.Config
            {
                AccessKeyId = accessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Client authClient = new AlibabaCloud.SDK.OpenPlatform20191219.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest
            {
                Product = "ocr",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadResponse authResponse = authClient.AuthorizeFileUploadWithOptions(authRequest, runtime);
            // Step 1: request OSS api to upload file
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            AlibabaCloud.SDK.TeaFileform.Models.FileField fileObj = new AlibabaCloud.SDK.TeaFileform.Models.FileField
            {
                Filename = authResponse.ObjectKey,
                Content = request.ImageURLObject,
                ContentType = "",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader ossHeader = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader
            {
                AccessKeyId = authResponse.AccessKeyId,
                Policy = authResponse.EncodedPolicy,
                Signature = authResponse.Signature,
                Key = authResponse.ObjectKey,
                File = fileObj,
                SuccessActionStatus = "201",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest uploadRequest = new AlibabaCloud.OSS.Models.PostObjectRequest
            {
                BucketName = authResponse.Bucket,
                Header = ossHeader,
            };
            AlibabaCloud.OSSUtil.Models.RuntimeOptions ossRuntime = new AlibabaCloud.OSSUtil.Models.RuntimeOptions();
            AlibabaCloud.Commons.Common.Convert(runtime, ossRuntime);
            ossClient.PostObject(uploadRequest, ossRuntime);
            // Step 2: request final api
            RecognizeStampRequest recognizeStampreq = new RecognizeStampRequest();
            AlibabaCloud.Commons.Common.Convert(request, recognizeStampreq);
            recognizeStampreq.ImageURL = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            RecognizeStampResponse recognizeStampResp = RecognizeStamp(recognizeStampreq, runtime);
            return recognizeStampResp;
        }

        public async Task<RecognizeStampResponse> RecognizeStampAdvanceAsync(RecognizeStampAdvanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            // Step 0: init client
            string accessKeyId = await this._credential.GetAccessKeyIdAsync();
            string accessKeySecret = await this._credential.GetAccessKeySecretAsync();
            AlibabaCloud.RPCClient.Models.Config authConfig = new AlibabaCloud.RPCClient.Models.Config
            {
                AccessKeyId = accessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Client authClient = new AlibabaCloud.SDK.OpenPlatform20191219.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest
            {
                Product = "ocr",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadResponse authResponse = await authClient.AuthorizeFileUploadWithOptionsAsync(authRequest, runtime);
            // Step 1: request OSS api to upload file
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            AlibabaCloud.SDK.TeaFileform.Models.FileField fileObj = new AlibabaCloud.SDK.TeaFileform.Models.FileField
            {
                Filename = authResponse.ObjectKey,
                Content = request.ImageURLObject,
                ContentType = "",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader ossHeader = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader
            {
                AccessKeyId = authResponse.AccessKeyId,
                Policy = authResponse.EncodedPolicy,
                Signature = authResponse.Signature,
                Key = authResponse.ObjectKey,
                File = fileObj,
                SuccessActionStatus = "201",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest uploadRequest = new AlibabaCloud.OSS.Models.PostObjectRequest
            {
                BucketName = authResponse.Bucket,
                Header = ossHeader,
            };
            AlibabaCloud.OSSUtil.Models.RuntimeOptions ossRuntime = new AlibabaCloud.OSSUtil.Models.RuntimeOptions();
            AlibabaCloud.Commons.Common.Convert(runtime, ossRuntime);
            await ossClient.PostObjectAsync(uploadRequest, ossRuntime);
            // Step 2: request final api
            RecognizeStampRequest recognizeStampreq = new RecognizeStampRequest();
            AlibabaCloud.Commons.Common.Convert(request, recognizeStampreq);
            recognizeStampreq.ImageURL = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            RecognizeStampResponse recognizeStampResp = await RecognizeStampAsync(recognizeStampreq, runtime);
            return recognizeStampResp;
        }

        public RecognizeBusinessCardResponse RecognizeBusinessCard(RecognizeBusinessCardRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RecognizeBusinessCardResponse>(DoRequest("RecognizeBusinessCard", "HTTPS", "POST", "2019-12-30", "AK", null, request.ToMap(), runtime));
        }

        public async Task<RecognizeBusinessCardResponse> RecognizeBusinessCardAsync(RecognizeBusinessCardRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RecognizeBusinessCardResponse>(await DoRequestAsync("RecognizeBusinessCard", "HTTPS", "POST", "2019-12-30", "AK", null, request.ToMap(), runtime));
        }

        public RecognizeBusinessCardResponse RecognizeBusinessCardAdvance(RecognizeBusinessCardAdvanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            // Step 0: init client
            string accessKeyId = this._credential.GetAccessKeyId();
            string accessKeySecret = this._credential.GetAccessKeySecret();
            AlibabaCloud.RPCClient.Models.Config authConfig = new AlibabaCloud.RPCClient.Models.Config
            {
                AccessKeyId = accessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Client authClient = new AlibabaCloud.SDK.OpenPlatform20191219.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest
            {
                Product = "ocr",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadResponse authResponse = authClient.AuthorizeFileUploadWithOptions(authRequest, runtime);
            // Step 1: request OSS api to upload file
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            AlibabaCloud.SDK.TeaFileform.Models.FileField fileObj = new AlibabaCloud.SDK.TeaFileform.Models.FileField
            {
                Filename = authResponse.ObjectKey,
                Content = request.ImageURLObject,
                ContentType = "",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader ossHeader = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader
            {
                AccessKeyId = authResponse.AccessKeyId,
                Policy = authResponse.EncodedPolicy,
                Signature = authResponse.Signature,
                Key = authResponse.ObjectKey,
                File = fileObj,
                SuccessActionStatus = "201",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest uploadRequest = new AlibabaCloud.OSS.Models.PostObjectRequest
            {
                BucketName = authResponse.Bucket,
                Header = ossHeader,
            };
            AlibabaCloud.OSSUtil.Models.RuntimeOptions ossRuntime = new AlibabaCloud.OSSUtil.Models.RuntimeOptions();
            AlibabaCloud.Commons.Common.Convert(runtime, ossRuntime);
            ossClient.PostObject(uploadRequest, ossRuntime);
            // Step 2: request final api
            RecognizeBusinessCardRequest recognizeBusinessCardreq = new RecognizeBusinessCardRequest();
            AlibabaCloud.Commons.Common.Convert(request, recognizeBusinessCardreq);
            recognizeBusinessCardreq.ImageURL = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            RecognizeBusinessCardResponse recognizeBusinessCardResp = RecognizeBusinessCard(recognizeBusinessCardreq, runtime);
            return recognizeBusinessCardResp;
        }

        public async Task<RecognizeBusinessCardResponse> RecognizeBusinessCardAdvanceAsync(RecognizeBusinessCardAdvanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            // Step 0: init client
            string accessKeyId = await this._credential.GetAccessKeyIdAsync();
            string accessKeySecret = await this._credential.GetAccessKeySecretAsync();
            AlibabaCloud.RPCClient.Models.Config authConfig = new AlibabaCloud.RPCClient.Models.Config
            {
                AccessKeyId = accessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Client authClient = new AlibabaCloud.SDK.OpenPlatform20191219.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest
            {
                Product = "ocr",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadResponse authResponse = await authClient.AuthorizeFileUploadWithOptionsAsync(authRequest, runtime);
            // Step 1: request OSS api to upload file
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            AlibabaCloud.SDK.TeaFileform.Models.FileField fileObj = new AlibabaCloud.SDK.TeaFileform.Models.FileField
            {
                Filename = authResponse.ObjectKey,
                Content = request.ImageURLObject,
                ContentType = "",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader ossHeader = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader
            {
                AccessKeyId = authResponse.AccessKeyId,
                Policy = authResponse.EncodedPolicy,
                Signature = authResponse.Signature,
                Key = authResponse.ObjectKey,
                File = fileObj,
                SuccessActionStatus = "201",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest uploadRequest = new AlibabaCloud.OSS.Models.PostObjectRequest
            {
                BucketName = authResponse.Bucket,
                Header = ossHeader,
            };
            AlibabaCloud.OSSUtil.Models.RuntimeOptions ossRuntime = new AlibabaCloud.OSSUtil.Models.RuntimeOptions();
            AlibabaCloud.Commons.Common.Convert(runtime, ossRuntime);
            await ossClient.PostObjectAsync(uploadRequest, ossRuntime);
            // Step 2: request final api
            RecognizeBusinessCardRequest recognizeBusinessCardreq = new RecognizeBusinessCardRequest();
            AlibabaCloud.Commons.Common.Convert(request, recognizeBusinessCardreq);
            recognizeBusinessCardreq.ImageURL = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            RecognizeBusinessCardResponse recognizeBusinessCardResp = await RecognizeBusinessCardAsync(recognizeBusinessCardreq, runtime);
            return recognizeBusinessCardResp;
        }

        public RecognizeVINCodeResponse RecognizeVINCode(RecognizeVINCodeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RecognizeVINCodeResponse>(DoRequest("RecognizeVINCode", "HTTPS", "POST", "2019-12-30", "AK", null, request.ToMap(), runtime));
        }

        public async Task<RecognizeVINCodeResponse> RecognizeVINCodeAsync(RecognizeVINCodeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RecognizeVINCodeResponse>(await DoRequestAsync("RecognizeVINCode", "HTTPS", "POST", "2019-12-30", "AK", null, request.ToMap(), runtime));
        }

        public RecognizeVINCodeResponse RecognizeVINCodeAdvance(RecognizeVINCodeAdvanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            // Step 0: init client
            string accessKeyId = this._credential.GetAccessKeyId();
            string accessKeySecret = this._credential.GetAccessKeySecret();
            AlibabaCloud.RPCClient.Models.Config authConfig = new AlibabaCloud.RPCClient.Models.Config
            {
                AccessKeyId = accessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Client authClient = new AlibabaCloud.SDK.OpenPlatform20191219.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest
            {
                Product = "ocr",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadResponse authResponse = authClient.AuthorizeFileUploadWithOptions(authRequest, runtime);
            // Step 1: request OSS api to upload file
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            AlibabaCloud.SDK.TeaFileform.Models.FileField fileObj = new AlibabaCloud.SDK.TeaFileform.Models.FileField
            {
                Filename = authResponse.ObjectKey,
                Content = request.ImageURLObject,
                ContentType = "",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader ossHeader = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader
            {
                AccessKeyId = authResponse.AccessKeyId,
                Policy = authResponse.EncodedPolicy,
                Signature = authResponse.Signature,
                Key = authResponse.ObjectKey,
                File = fileObj,
                SuccessActionStatus = "201",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest uploadRequest = new AlibabaCloud.OSS.Models.PostObjectRequest
            {
                BucketName = authResponse.Bucket,
                Header = ossHeader,
            };
            AlibabaCloud.OSSUtil.Models.RuntimeOptions ossRuntime = new AlibabaCloud.OSSUtil.Models.RuntimeOptions();
            AlibabaCloud.Commons.Common.Convert(runtime, ossRuntime);
            ossClient.PostObject(uploadRequest, ossRuntime);
            // Step 2: request final api
            RecognizeVINCodeRequest recognizeVINCodereq = new RecognizeVINCodeRequest();
            AlibabaCloud.Commons.Common.Convert(request, recognizeVINCodereq);
            recognizeVINCodereq.ImageURL = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            RecognizeVINCodeResponse recognizeVINCodeResp = RecognizeVINCode(recognizeVINCodereq, runtime);
            return recognizeVINCodeResp;
        }

        public async Task<RecognizeVINCodeResponse> RecognizeVINCodeAdvanceAsync(RecognizeVINCodeAdvanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            // Step 0: init client
            string accessKeyId = await this._credential.GetAccessKeyIdAsync();
            string accessKeySecret = await this._credential.GetAccessKeySecretAsync();
            AlibabaCloud.RPCClient.Models.Config authConfig = new AlibabaCloud.RPCClient.Models.Config
            {
                AccessKeyId = accessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Client authClient = new AlibabaCloud.SDK.OpenPlatform20191219.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest
            {
                Product = "ocr",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadResponse authResponse = await authClient.AuthorizeFileUploadWithOptionsAsync(authRequest, runtime);
            // Step 1: request OSS api to upload file
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            AlibabaCloud.SDK.TeaFileform.Models.FileField fileObj = new AlibabaCloud.SDK.TeaFileform.Models.FileField
            {
                Filename = authResponse.ObjectKey,
                Content = request.ImageURLObject,
                ContentType = "",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader ossHeader = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader
            {
                AccessKeyId = authResponse.AccessKeyId,
                Policy = authResponse.EncodedPolicy,
                Signature = authResponse.Signature,
                Key = authResponse.ObjectKey,
                File = fileObj,
                SuccessActionStatus = "201",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest uploadRequest = new AlibabaCloud.OSS.Models.PostObjectRequest
            {
                BucketName = authResponse.Bucket,
                Header = ossHeader,
            };
            AlibabaCloud.OSSUtil.Models.RuntimeOptions ossRuntime = new AlibabaCloud.OSSUtil.Models.RuntimeOptions();
            AlibabaCloud.Commons.Common.Convert(runtime, ossRuntime);
            await ossClient.PostObjectAsync(uploadRequest, ossRuntime);
            // Step 2: request final api
            RecognizeVINCodeRequest recognizeVINCodereq = new RecognizeVINCodeRequest();
            AlibabaCloud.Commons.Common.Convert(request, recognizeVINCodereq);
            recognizeVINCodereq.ImageURL = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            RecognizeVINCodeResponse recognizeVINCodeResp = await RecognizeVINCodeAsync(recognizeVINCodereq, runtime);
            return recognizeVINCodeResp;
        }

        public RecognizeBusinessLicenseResponse RecognizeBusinessLicense(RecognizeBusinessLicenseRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RecognizeBusinessLicenseResponse>(DoRequest("RecognizeBusinessLicense", "HTTPS", "POST", "2019-12-30", "AK", null, request.ToMap(), runtime));
        }

        public async Task<RecognizeBusinessLicenseResponse> RecognizeBusinessLicenseAsync(RecognizeBusinessLicenseRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RecognizeBusinessLicenseResponse>(await DoRequestAsync("RecognizeBusinessLicense", "HTTPS", "POST", "2019-12-30", "AK", null, request.ToMap(), runtime));
        }

        public RecognizeBusinessLicenseResponse RecognizeBusinessLicenseAdvance(RecognizeBusinessLicenseAdvanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            // Step 0: init client
            string accessKeyId = this._credential.GetAccessKeyId();
            string accessKeySecret = this._credential.GetAccessKeySecret();
            AlibabaCloud.RPCClient.Models.Config authConfig = new AlibabaCloud.RPCClient.Models.Config
            {
                AccessKeyId = accessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Client authClient = new AlibabaCloud.SDK.OpenPlatform20191219.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest
            {
                Product = "ocr",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadResponse authResponse = authClient.AuthorizeFileUploadWithOptions(authRequest, runtime);
            // Step 1: request OSS api to upload file
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            AlibabaCloud.SDK.TeaFileform.Models.FileField fileObj = new AlibabaCloud.SDK.TeaFileform.Models.FileField
            {
                Filename = authResponse.ObjectKey,
                Content = request.ImageURLObject,
                ContentType = "",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader ossHeader = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader
            {
                AccessKeyId = authResponse.AccessKeyId,
                Policy = authResponse.EncodedPolicy,
                Signature = authResponse.Signature,
                Key = authResponse.ObjectKey,
                File = fileObj,
                SuccessActionStatus = "201",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest uploadRequest = new AlibabaCloud.OSS.Models.PostObjectRequest
            {
                BucketName = authResponse.Bucket,
                Header = ossHeader,
            };
            AlibabaCloud.OSSUtil.Models.RuntimeOptions ossRuntime = new AlibabaCloud.OSSUtil.Models.RuntimeOptions();
            AlibabaCloud.Commons.Common.Convert(runtime, ossRuntime);
            ossClient.PostObject(uploadRequest, ossRuntime);
            // Step 2: request final api
            RecognizeBusinessLicenseRequest recognizeBusinessLicensereq = new RecognizeBusinessLicenseRequest();
            AlibabaCloud.Commons.Common.Convert(request, recognizeBusinessLicensereq);
            recognizeBusinessLicensereq.ImageURL = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            RecognizeBusinessLicenseResponse recognizeBusinessLicenseResp = RecognizeBusinessLicense(recognizeBusinessLicensereq, runtime);
            return recognizeBusinessLicenseResp;
        }

        public async Task<RecognizeBusinessLicenseResponse> RecognizeBusinessLicenseAdvanceAsync(RecognizeBusinessLicenseAdvanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            // Step 0: init client
            string accessKeyId = await this._credential.GetAccessKeyIdAsync();
            string accessKeySecret = await this._credential.GetAccessKeySecretAsync();
            AlibabaCloud.RPCClient.Models.Config authConfig = new AlibabaCloud.RPCClient.Models.Config
            {
                AccessKeyId = accessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Client authClient = new AlibabaCloud.SDK.OpenPlatform20191219.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadRequest
            {
                Product = "ocr",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform20191219.Models.AuthorizeFileUploadResponse authResponse = await authClient.AuthorizeFileUploadWithOptionsAsync(authRequest, runtime);
            // Step 1: request OSS api to upload file
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = accessKeySecret,
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            AlibabaCloud.SDK.TeaFileform.Models.FileField fileObj = new AlibabaCloud.SDK.TeaFileform.Models.FileField
            {
                Filename = authResponse.ObjectKey,
                Content = request.ImageURLObject,
                ContentType = "",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader ossHeader = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader
            {
                AccessKeyId = authResponse.AccessKeyId,
                Policy = authResponse.EncodedPolicy,
                Signature = authResponse.Signature,
                Key = authResponse.ObjectKey,
                File = fileObj,
                SuccessActionStatus = "201",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest uploadRequest = new AlibabaCloud.OSS.Models.PostObjectRequest
            {
                BucketName = authResponse.Bucket,
                Header = ossHeader,
            };
            AlibabaCloud.OSSUtil.Models.RuntimeOptions ossRuntime = new AlibabaCloud.OSSUtil.Models.RuntimeOptions();
            AlibabaCloud.Commons.Common.Convert(runtime, ossRuntime);
            await ossClient.PostObjectAsync(uploadRequest, ossRuntime);
            // Step 2: request final api
            RecognizeBusinessLicenseRequest recognizeBusinessLicensereq = new RecognizeBusinessLicenseRequest();
            AlibabaCloud.Commons.Common.Convert(request, recognizeBusinessLicensereq);
            recognizeBusinessLicensereq.ImageURL = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            RecognizeBusinessLicenseResponse recognizeBusinessLicenseResp = await RecognizeBusinessLicenseAsync(recognizeBusinessLicensereq, runtime);
            return recognizeBusinessLicenseResp;
        }

        public string GetEndpoint(string productId, string regionId, string endpointRule, string network, string suffix, Dictionary<string, string> endpointMap, string endpoint)
        {
            if (!AlibabaCloud.TeaUtil.Common.Empty(endpoint))
            {
                return endpoint;
            }
            if (!AlibabaCloud.TeaUtil.Common.IsUnset(endpointMap) && !AlibabaCloud.TeaUtil.Common.Empty(endpointMap.Get(regionId)))
            {
                return endpointMap.Get(regionId);
            }
            return AlibabaCloud.EndpointUtil.Common.GetEndpointRules(productId, regionId, endpointRule, network, suffix);
        }

    }
}
