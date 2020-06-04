# This file is auto-generated, don't edit it. Thanks.
from Tea.model import TeaModel


class SubmitMediaDNADeleteJobRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_id=None, resource_owner_account=None, owner_account=None, media_id=None, fp_dbid=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_id = resource_owner_id
        self.resource_owner_account = resource_owner_account
        self.owner_account = owner_account
        self.media_id = media_id
        self.fp_dbid = fp_dbid

    def validate(self):
        self.validate_required(self.media_id, 'media_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerId'] = self.resource_owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['OwnerAccount'] = self.owner_account
        result['MediaId'] = self.media_id
        result['FpDBId'] = self.fp_dbid
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.owner_account = map.get('OwnerAccount')
        self.media_id = map.get('MediaId')
        self.fp_dbid = map.get('FpDBId')
        return self


class SubmitMediaDNADeleteJobResponse(TeaModel):
    def __init__(self, request_id=None, media_id=None, job_id=None):
        self.request_id = request_id
        self.media_id = media_id
        self.job_id = job_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.media_id, 'media_id')
        self.validate_required(self.job_id, 'job_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['MediaId'] = self.media_id
        result['JobId'] = self.job_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.media_id = map.get('MediaId')
        self.job_id = map.get('JobId')
        return self


class ListMediaDNADeleteJobRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_id=None, resource_owner_account=None, owner_account=None, job_ids=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_id = resource_owner_id
        self.resource_owner_account = resource_owner_account
        self.owner_account = owner_account
        self.job_ids = job_ids

    def validate(self):
        self.validate_required(self.job_ids, 'job_ids')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerId'] = self.resource_owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['OwnerAccount'] = self.owner_account
        result['JobIds'] = self.job_ids
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.owner_account = map.get('OwnerAccount')
        self.job_ids = map.get('JobIds')
        return self


class ListMediaDNADeleteJobResponse(TeaModel):
    def __init__(self, request_id=None, aijob_list=None, non_exist_aijob_ids=None):
        self.request_id = request_id
        self.aijob_list = aijob_list
        self.non_exist_aijob_ids = non_exist_aijob_ids

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.aijob_list, 'aijob_list')
        if self.aijob_list:
            self.aijob_list.validate()
        self.validate_required(self.non_exist_aijob_ids, 'non_exist_aijob_ids')
        if self.non_exist_aijob_ids:
            self.non_exist_aijob_ids.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.aijob_list is not None:
            result['AIJobList'] = self.aijob_list.to_map()
        else:
            result['AIJobList'] = None
        if self.non_exist_aijob_ids is not None:
            result['NonExistAIJobIds'] = self.non_exist_aijob_ids.to_map()
        else:
            result['NonExistAIJobIds'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('AIJobList') is not None:
            temp_model = ListMediaDNADeleteJobResponseAIJobList()
            self.aijob_list = temp_model.from_map(map['AIJobList'])
        else:
            self.aijob_list = None
        if map.get('NonExistAIJobIds') is not None:
            temp_model = ListMediaDNADeleteJobResponseNonExistAIJobIds()
            self.non_exist_aijob_ids = temp_model.from_map(map['NonExistAIJobIds'])
        else:
            self.non_exist_aijob_ids = None
        return self


class ListMediaDNADeleteJobResponseAIJobListAIJob(TeaModel):
    def __init__(self, job_id=None, media_id=None, status=None, code=None, message=None, fp_dbid=None):
        self.job_id = job_id
        self.media_id = media_id
        self.status = status
        self.code = code
        self.message = message
        self.fp_dbid = fp_dbid

    def validate(self):
        self.validate_required(self.job_id, 'job_id')
        self.validate_required(self.media_id, 'media_id')
        self.validate_required(self.status, 'status')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.fp_dbid, 'fp_dbid')

    def to_map(self):
        result = {}
        result['JobId'] = self.job_id
        result['MediaId'] = self.media_id
        result['Status'] = self.status
        result['Code'] = self.code
        result['Message'] = self.message
        result['FpDBId'] = self.fp_dbid
        return result

    def from_map(self, map={}):
        self.job_id = map.get('JobId')
        self.media_id = map.get('MediaId')
        self.status = map.get('Status')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.fp_dbid = map.get('FpDBId')
        return self


class ListMediaDNADeleteJobResponseAIJobList(TeaModel):
    def __init__(self, aijob=None):
        self.aijob = []

    def validate(self):
        self.validate_required(self.aijob, 'aijob')
        if self.aijob:
            for k in self.aijob:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['AIJob'] = []
        if self.aijob is not None:
            for k in self.aijob:
                result['AIJob'].append(k.to_map() if k else None)
        else:
            result['AIJob'] = None
        return result

    def from_map(self, map={}):
        self.aijob = []
        if map.get('AIJob') is not None:
            for k in map.get('AIJob'):
                temp_model = ListMediaDNADeleteJobResponseAIJobListAIJob()
                temp_model = temp_model.from_map(k)
                self.aijob.append(temp_model)
        else:
            self.aijob = None
        return self


class ListMediaDNADeleteJobResponseNonExistAIJobIds(TeaModel):
    def __init__(self, string=None):
        self.string = []

    def validate(self):
        self.validate_required(self.string, 'string')

    def to_map(self):
        result = {}
        result['String'] = []
        if self.string is not None:
            for k in self.string:
                result['String'].append(k)
        else:
            result['String'] = None
        return result

    def from_map(self, map={}):
        self.string = []
        if map.get('String') is not None:
            for k in map.get('String'):
                self.string.append(k)
        else:
            self.string = None
        return self


class GetMediaAuditAudioResultDetailRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_id=None, resource_owner_account=None, owner_account=None, media_id=None, page_no=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_id = resource_owner_id
        self.resource_owner_account = resource_owner_account
        self.owner_account = owner_account
        self.media_id = media_id
        self.page_no = page_no

    def validate(self):
        self.validate_required(self.media_id, 'media_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerId'] = self.resource_owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['OwnerAccount'] = self.owner_account
        result['MediaId'] = self.media_id
        result['PageNo'] = self.page_no
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.owner_account = map.get('OwnerAccount')
        self.media_id = map.get('MediaId')
        self.page_no = map.get('PageNo')
        return self


class GetMediaAuditAudioResultDetailResponse(TeaModel):
    def __init__(self, request_id=None, media_audit_audio_result_detail=None):
        self.request_id = request_id
        self.media_audit_audio_result_detail = media_audit_audio_result_detail

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.media_audit_audio_result_detail, 'media_audit_audio_result_detail')
        if self.media_audit_audio_result_detail:
            self.media_audit_audio_result_detail.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.media_audit_audio_result_detail is not None:
            result['MediaAuditAudioResultDetail'] = self.media_audit_audio_result_detail.to_map()
        else:
            result['MediaAuditAudioResultDetail'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('MediaAuditAudioResultDetail') is not None:
            temp_model = GetMediaAuditAudioResultDetailResponseMediaAuditAudioResultDetail()
            self.media_audit_audio_result_detail = temp_model.from_map(map['MediaAuditAudioResultDetail'])
        else:
            self.media_audit_audio_result_detail = None
        return self


class GetMediaAuditAudioResultDetailResponseMediaAuditAudioResultDetailList(TeaModel):
    def __init__(self, start_time=None, end_time=None, text=None, label=None):
        self.start_time = start_time
        self.end_time = end_time
        self.text = text
        self.label = label

    def validate(self):
        self.validate_required(self.start_time, 'start_time')
        self.validate_required(self.end_time, 'end_time')
        self.validate_required(self.text, 'text')
        self.validate_required(self.label, 'label')

    def to_map(self):
        result = {}
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        result['Text'] = self.text
        result['Label'] = self.label
        return result

    def from_map(self, map={}):
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        self.text = map.get('Text')
        self.label = map.get('Label')
        return self


class GetMediaAuditAudioResultDetailResponseMediaAuditAudioResultDetail(TeaModel):
    def __init__(self, total=None, page_total=None, list_=None):
        self.total = total
        self.page_total = page_total
        self.list_ = []

    def validate(self):
        self.validate_required(self.total, 'total')
        self.validate_required(self.page_total, 'page_total')
        self.validate_required(self.list_, 'list_')
        if self.list_:
            for k in self.list_:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Total'] = self.total
        result['PageTotal'] = self.page_total
        result['List'] = []
        if self.list_ is not None:
            for k in self.list_:
                result['List'].append(k.to_map() if k else None)
        else:
            result['List'] = None
        return result

    def from_map(self, map={}):
        self.total = map.get('Total')
        self.page_total = map.get('PageTotal')
        self.list_ = []
        if map.get('List') is not None:
            for k in map.get('List'):
                temp_model = GetMediaAuditAudioResultDetailResponseMediaAuditAudioResultDetailList()
                temp_model = temp_model.from_map(k)
                self.list_.append(temp_model)
        else:
            self.list_ = None
        return self


class SubmitDynamicImageJobRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, video_id=None, dynamic_image_template_id=None, override_params=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.video_id = video_id
        self.dynamic_image_template_id = dynamic_image_template_id
        self.override_params = override_params

    def validate(self):
        self.validate_required(self.video_id, 'video_id')
        self.validate_required(self.dynamic_image_template_id, 'dynamic_image_template_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['VideoId'] = self.video_id
        result['DynamicImageTemplateId'] = self.dynamic_image_template_id
        result['OverrideParams'] = self.override_params
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.video_id = map.get('VideoId')
        self.dynamic_image_template_id = map.get('DynamicImageTemplateId')
        self.override_params = map.get('OverrideParams')
        return self


class SubmitDynamicImageJobResponse(TeaModel):
    def __init__(self, request_id=None, dynamic_image_job=None):
        self.request_id = request_id
        self.dynamic_image_job = dynamic_image_job

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.dynamic_image_job, 'dynamic_image_job')
        if self.dynamic_image_job:
            self.dynamic_image_job.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.dynamic_image_job is not None:
            result['DynamicImageJob'] = self.dynamic_image_job.to_map()
        else:
            result['DynamicImageJob'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('DynamicImageJob') is not None:
            temp_model = SubmitDynamicImageJobResponseDynamicImageJob()
            self.dynamic_image_job = temp_model.from_map(map['DynamicImageJob'])
        else:
            self.dynamic_image_job = None
        return self


class SubmitDynamicImageJobResponseDynamicImageJob(TeaModel):
    def __init__(self, job_id=None):
        self.job_id = job_id

    def validate(self):
        self.validate_required(self.job_id, 'job_id')

    def to_map(self):
        result = {}
        result['JobId'] = self.job_id
        return result

    def from_map(self, map={}):
        self.job_id = map.get('JobId')
        return self


class SubmitWorkflowJobRequest(TeaModel):
    def __init__(self, owner_id=None, resource_owner_account=None, resource_owner_id=None, workflow_id=None, media_id=None, file_url=None):
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.workflow_id = workflow_id
        self.media_id = media_id
        self.file_url = file_url

    def validate(self):
        self.validate_required(self.workflow_id, 'workflow_id')

    def to_map(self):
        result = {}
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['WorkflowId'] = self.workflow_id
        result['MediaId'] = self.media_id
        result['FileUrl'] = self.file_url
        return result

    def from_map(self, map={}):
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.workflow_id = map.get('WorkflowId')
        self.media_id = map.get('MediaId')
        self.file_url = map.get('FileUrl')
        return self


class SubmitWorkflowJobResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class GetAIVideoTagResultRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_id=None, resource_owner_account=None, owner_account=None, media_id=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_id = resource_owner_id
        self.resource_owner_account = resource_owner_account
        self.owner_account = owner_account
        self.media_id = media_id

    def validate(self):
        self.validate_required(self.media_id, 'media_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerId'] = self.resource_owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['OwnerAccount'] = self.owner_account
        result['MediaId'] = self.media_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.owner_account = map.get('OwnerAccount')
        self.media_id = map.get('MediaId')
        return self


class GetAIVideoTagResultResponse(TeaModel):
    def __init__(self, request_id=None, video_tag_result=None):
        self.request_id = request_id
        self.video_tag_result = video_tag_result

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.video_tag_result, 'video_tag_result')
        if self.video_tag_result:
            self.video_tag_result.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.video_tag_result is not None:
            result['VideoTagResult'] = self.video_tag_result.to_map()
        else:
            result['VideoTagResult'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('VideoTagResult') is not None:
            temp_model = GetAIVideoTagResultResponseVideoTagResult()
            self.video_tag_result = temp_model.from_map(map['VideoTagResult'])
        else:
            self.video_tag_result = None
        return self


class GetAIVideoTagResultResponseVideoTagResultCategory(TeaModel):
    def __init__(self, tag=None):
        self.tag = tag

    def validate(self):
        self.validate_required(self.tag, 'tag')

    def to_map(self):
        result = {}
        result['Tag'] = self.tag
        return result

    def from_map(self, map={}):
        self.tag = map.get('Tag')
        return self


class GetAIVideoTagResultResponseVideoTagResultPerson(TeaModel):
    def __init__(self, face_url=None, tag=None, times=None):
        self.face_url = face_url
        self.tag = tag
        self.times = []

    def validate(self):
        self.validate_required(self.face_url, 'face_url')
        self.validate_required(self.tag, 'tag')
        self.validate_required(self.times, 'times')

    def to_map(self):
        result = {}
        result['FaceUrl'] = self.face_url
        result['Tag'] = self.tag
        result['Times'] = []
        if self.times is not None:
            for k in self.times:
                result['Times'].append(k)
        else:
            result['Times'] = None
        return result

    def from_map(self, map={}):
        self.face_url = map.get('FaceUrl')
        self.tag = map.get('Tag')
        self.times = []
        if map.get('Times') is not None:
            for k in map.get('Times'):
                self.times.append(k)
        else:
            self.times = None
        return self


class GetAIVideoTagResultResponseVideoTagResultTime(TeaModel):
    def __init__(self, tag=None, times=None):
        self.tag = tag
        self.times = []

    def validate(self):
        self.validate_required(self.tag, 'tag')
        self.validate_required(self.times, 'times')

    def to_map(self):
        result = {}
        result['Tag'] = self.tag
        result['Times'] = []
        if self.times is not None:
            for k in self.times:
                result['Times'].append(k)
        else:
            result['Times'] = None
        return result

    def from_map(self, map={}):
        self.tag = map.get('Tag')
        self.times = []
        if map.get('Times') is not None:
            for k in map.get('Times'):
                self.times.append(k)
        else:
            self.times = None
        return self


class GetAIVideoTagResultResponseVideoTagResultLocation(TeaModel):
    def __init__(self, tag=None, times=None):
        self.tag = tag
        self.times = []

    def validate(self):
        self.validate_required(self.tag, 'tag')
        self.validate_required(self.times, 'times')

    def to_map(self):
        result = {}
        result['Tag'] = self.tag
        result['Times'] = []
        if self.times is not None:
            for k in self.times:
                result['Times'].append(k)
        else:
            result['Times'] = None
        return result

    def from_map(self, map={}):
        self.tag = map.get('Tag')
        self.times = []
        if map.get('Times') is not None:
            for k in map.get('Times'):
                self.times.append(k)
        else:
            self.times = None
        return self


class GetAIVideoTagResultResponseVideoTagResultKeyword(TeaModel):
    def __init__(self, tag=None, times=None):
        self.tag = tag
        self.times = []

    def validate(self):
        self.validate_required(self.tag, 'tag')
        self.validate_required(self.times, 'times')

    def to_map(self):
        result = {}
        result['Tag'] = self.tag
        result['Times'] = []
        if self.times is not None:
            for k in self.times:
                result['Times'].append(k)
        else:
            result['Times'] = None
        return result

    def from_map(self, map={}):
        self.tag = map.get('Tag')
        self.times = []
        if map.get('Times') is not None:
            for k in map.get('Times'):
                self.times.append(k)
        else:
            self.times = None
        return self


class GetAIVideoTagResultResponseVideoTagResult(TeaModel):
    def __init__(self, category=None, person=None, time=None, location=None, keyword=None):
        self.category = []
        self.person = []
        self.time = []
        self.location = []
        self.keyword = []

    def validate(self):
        self.validate_required(self.category, 'category')
        if self.category:
            for k in self.category:
                if k :
                    k.validate()
        self.validate_required(self.person, 'person')
        if self.person:
            for k in self.person:
                if k :
                    k.validate()
        self.validate_required(self.time, 'time')
        if self.time:
            for k in self.time:
                if k :
                    k.validate()
        self.validate_required(self.location, 'location')
        if self.location:
            for k in self.location:
                if k :
                    k.validate()
        self.validate_required(self.keyword, 'keyword')
        if self.keyword:
            for k in self.keyword:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Category'] = []
        if self.category is not None:
            for k in self.category:
                result['Category'].append(k.to_map() if k else None)
        else:
            result['Category'] = None
        result['Person'] = []
        if self.person is not None:
            for k in self.person:
                result['Person'].append(k.to_map() if k else None)
        else:
            result['Person'] = None
        result['Time'] = []
        if self.time is not None:
            for k in self.time:
                result['Time'].append(k.to_map() if k else None)
        else:
            result['Time'] = None
        result['Location'] = []
        if self.location is not None:
            for k in self.location:
                result['Location'].append(k.to_map() if k else None)
        else:
            result['Location'] = None
        result['Keyword'] = []
        if self.keyword is not None:
            for k in self.keyword:
                result['Keyword'].append(k.to_map() if k else None)
        else:
            result['Keyword'] = None
        return result

    def from_map(self, map={}):
        self.category = []
        if map.get('Category') is not None:
            for k in map.get('Category'):
                temp_model = GetAIVideoTagResultResponseVideoTagResultCategory()
                temp_model = temp_model.from_map(k)
                self.category.append(temp_model)
        else:
            self.category = None
        self.person = []
        if map.get('Person') is not None:
            for k in map.get('Person'):
                temp_model = GetAIVideoTagResultResponseVideoTagResultPerson()
                temp_model = temp_model.from_map(k)
                self.person.append(temp_model)
        else:
            self.person = None
        self.time = []
        if map.get('Time') is not None:
            for k in map.get('Time'):
                temp_model = GetAIVideoTagResultResponseVideoTagResultTime()
                temp_model = temp_model.from_map(k)
                self.time.append(temp_model)
        else:
            self.time = None
        self.location = []
        if map.get('Location') is not None:
            for k in map.get('Location'):
                temp_model = GetAIVideoTagResultResponseVideoTagResultLocation()
                temp_model = temp_model.from_map(k)
                self.location.append(temp_model)
        else:
            self.location = None
        self.keyword = []
        if map.get('Keyword') is not None:
            for k in map.get('Keyword'):
                temp_model = GetAIVideoTagResultResponseVideoTagResultKeyword()
                temp_model = temp_model.from_map(k)
                self.keyword.append(temp_model)
        else:
            self.keyword = None
        return self


class GetUploadDetailsRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, resource_real_owner_id=None, media_ids=None, media_type=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.resource_real_owner_id = resource_real_owner_id
        self.media_ids = media_ids
        self.media_type = media_type

    def validate(self):
        self.validate_required(self.media_ids, 'media_ids')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['ResourceRealOwnerId'] = self.resource_real_owner_id
        result['MediaIds'] = self.media_ids
        result['MediaType'] = self.media_type
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.resource_real_owner_id = map.get('ResourceRealOwnerId')
        self.media_ids = map.get('MediaIds')
        self.media_type = map.get('MediaType')
        return self


class GetUploadDetailsResponse(TeaModel):
    def __init__(self, request_id=None, upload_details=None, non_exist_media_ids=None, forbidden_media_ids=None):
        self.request_id = request_id
        self.upload_details = []
        self.non_exist_media_ids = []
        self.forbidden_media_ids = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.upload_details, 'upload_details')
        if self.upload_details:
            for k in self.upload_details:
                if k :
                    k.validate()
        self.validate_required(self.non_exist_media_ids, 'non_exist_media_ids')
        self.validate_required(self.forbidden_media_ids, 'forbidden_media_ids')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['UploadDetails'] = []
        if self.upload_details is not None:
            for k in self.upload_details:
                result['UploadDetails'].append(k.to_map() if k else None)
        else:
            result['UploadDetails'] = None
        result['NonExistMediaIds'] = []
        if self.non_exist_media_ids is not None:
            for k in self.non_exist_media_ids:
                result['NonExistMediaIds'].append(k)
        else:
            result['NonExistMediaIds'] = None
        result['ForbiddenMediaIds'] = []
        if self.forbidden_media_ids is not None:
            for k in self.forbidden_media_ids:
                result['ForbiddenMediaIds'].append(k)
        else:
            result['ForbiddenMediaIds'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.upload_details = []
        if map.get('UploadDetails') is not None:
            for k in map.get('UploadDetails'):
                temp_model = GetUploadDetailsResponseUploadDetails()
                temp_model = temp_model.from_map(k)
                self.upload_details.append(temp_model)
        else:
            self.upload_details = None
        self.non_exist_media_ids = []
        if map.get('NonExistMediaIds') is not None:
            for k in map.get('NonExistMediaIds'):
                self.non_exist_media_ids.append(k)
        else:
            self.non_exist_media_ids = None
        self.forbidden_media_ids = []
        if map.get('ForbiddenMediaIds') is not None:
            for k in map.get('ForbiddenMediaIds'):
                self.forbidden_media_ids.append(k)
        else:
            self.forbidden_media_ids = None
        return self


class GetUploadDetailsResponseUploadDetails(TeaModel):
    def __init__(self, media_id=None, title=None, file_size=None, status=None, upload_status=None, creation_time=None, modification_time=None, completion_time=None, upload_size=None, upload_ratio=None, upload_ip=None, upload_source=None, device_model=None):
        self.media_id = media_id
        self.title = title
        self.file_size = file_size
        self.status = status
        self.upload_status = upload_status
        self.creation_time = creation_time
        self.modification_time = modification_time
        self.completion_time = completion_time
        self.upload_size = upload_size
        self.upload_ratio = upload_ratio
        self.upload_ip = upload_ip
        self.upload_source = upload_source
        self.device_model = device_model

    def validate(self):
        self.validate_required(self.media_id, 'media_id')
        self.validate_required(self.title, 'title')
        self.validate_required(self.file_size, 'file_size')
        self.validate_required(self.status, 'status')
        self.validate_required(self.upload_status, 'upload_status')
        self.validate_required(self.creation_time, 'creation_time')
        self.validate_required(self.modification_time, 'modification_time')
        self.validate_required(self.completion_time, 'completion_time')
        self.validate_required(self.upload_size, 'upload_size')
        self.validate_required(self.upload_ratio, 'upload_ratio')
        self.validate_required(self.upload_ip, 'upload_ip')
        self.validate_required(self.upload_source, 'upload_source')
        self.validate_required(self.device_model, 'device_model')

    def to_map(self):
        result = {}
        result['MediaId'] = self.media_id
        result['Title'] = self.title
        result['FileSize'] = self.file_size
        result['Status'] = self.status
        result['UploadStatus'] = self.upload_status
        result['CreationTime'] = self.creation_time
        result['ModificationTime'] = self.modification_time
        result['CompletionTime'] = self.completion_time
        result['UploadSize'] = self.upload_size
        result['UploadRatio'] = self.upload_ratio
        result['UploadIP'] = self.upload_ip
        result['UploadSource'] = self.upload_source
        result['DeviceModel'] = self.device_model
        return result

    def from_map(self, map={}):
        self.media_id = map.get('MediaId')
        self.title = map.get('Title')
        self.file_size = map.get('FileSize')
        self.status = map.get('Status')
        self.upload_status = map.get('UploadStatus')
        self.creation_time = map.get('CreationTime')
        self.modification_time = map.get('ModificationTime')
        self.completion_time = map.get('CompletionTime')
        self.upload_size = map.get('UploadSize')
        self.upload_ratio = map.get('UploadRatio')
        self.upload_ip = map.get('UploadIP')
        self.upload_source = map.get('UploadSource')
        self.device_model = map.get('DeviceModel')
        return self


class DescribeVodStorageDataRequest(TeaModel):
    def __init__(self, owner_id=None, start_time=None, end_time=None, region=None, storage_type=None, storage=None):
        self.owner_id = owner_id
        self.start_time = start_time
        self.end_time = end_time
        self.region = region
        self.storage_type = storage_type
        self.storage = storage

    def validate(self):
        self.validate_required(self.start_time, 'start_time')
        self.validate_required(self.end_time, 'end_time')

    def to_map(self):
        result = {}
        result['OwnerId'] = self.owner_id
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        result['Region'] = self.region
        result['StorageType'] = self.storage_type
        result['Storage'] = self.storage
        return result

    def from_map(self, map={}):
        self.owner_id = map.get('OwnerId')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        self.region = map.get('Region')
        self.storage_type = map.get('StorageType')
        self.storage = map.get('Storage')
        return self


class DescribeVodStorageDataResponse(TeaModel):
    def __init__(self, request_id=None, data_interval=None, storage_data=None):
        self.request_id = request_id
        self.data_interval = data_interval
        self.storage_data = storage_data

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.data_interval, 'data_interval')
        self.validate_required(self.storage_data, 'storage_data')
        if self.storage_data:
            self.storage_data.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['DataInterval'] = self.data_interval
        if self.storage_data is not None:
            result['StorageData'] = self.storage_data.to_map()
        else:
            result['StorageData'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.data_interval = map.get('DataInterval')
        if map.get('StorageData') is not None:
            temp_model = DescribeVodStorageDataResponseStorageData()
            self.storage_data = temp_model.from_map(map['StorageData'])
        else:
            self.storage_data = None
        return self


class DescribeVodStorageDataResponseStorageDataStorageDataItem(TeaModel):
    def __init__(self, time_stamp=None, storage_utilization=None, network_out=None):
        self.time_stamp = time_stamp
        self.storage_utilization = storage_utilization
        self.network_out = network_out

    def validate(self):
        self.validate_required(self.time_stamp, 'time_stamp')
        self.validate_required(self.storage_utilization, 'storage_utilization')
        self.validate_required(self.network_out, 'network_out')

    def to_map(self):
        result = {}
        result['TimeStamp'] = self.time_stamp
        result['StorageUtilization'] = self.storage_utilization
        result['NetworkOut'] = self.network_out
        return result

    def from_map(self, map={}):
        self.time_stamp = map.get('TimeStamp')
        self.storage_utilization = map.get('StorageUtilization')
        self.network_out = map.get('NetworkOut')
        return self


class DescribeVodStorageDataResponseStorageData(TeaModel):
    def __init__(self, storage_data_item=None):
        self.storage_data_item = []

    def validate(self):
        self.validate_required(self.storage_data_item, 'storage_data_item')
        if self.storage_data_item:
            for k in self.storage_data_item:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['StorageDataItem'] = []
        if self.storage_data_item is not None:
            for k in self.storage_data_item:
                result['StorageDataItem'].append(k.to_map() if k else None)
        else:
            result['StorageDataItem'] = None
        return result

    def from_map(self, map={}):
        self.storage_data_item = []
        if map.get('StorageDataItem') is not None:
            for k in map.get('StorageDataItem'):
                temp_model = DescribeVodStorageDataResponseStorageDataStorageDataItem()
                temp_model = temp_model.from_map(k)
                self.storage_data_item.append(temp_model)
        else:
            self.storage_data_item = None
        return self


class DescribeVodAIDataRequest(TeaModel):
    def __init__(self, owner_id=None, start_time=None, end_time=None, region=None, aitype=None):
        self.owner_id = owner_id
        self.start_time = start_time
        self.end_time = end_time
        self.region = region
        self.aitype = aitype

    def validate(self):
        self.validate_required(self.start_time, 'start_time')
        self.validate_required(self.end_time, 'end_time')

    def to_map(self):
        result = {}
        result['OwnerId'] = self.owner_id
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        result['Region'] = self.region
        result['AIType'] = self.aitype
        return result

    def from_map(self, map={}):
        self.owner_id = map.get('OwnerId')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        self.region = map.get('Region')
        self.aitype = map.get('AIType')
        return self


class DescribeVodAIDataResponse(TeaModel):
    def __init__(self, request_id=None, data_interval=None, aidata=None):
        self.request_id = request_id
        self.data_interval = data_interval
        self.aidata = aidata

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.data_interval, 'data_interval')
        self.validate_required(self.aidata, 'aidata')
        if self.aidata:
            self.aidata.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['DataInterval'] = self.data_interval
        if self.aidata is not None:
            result['AIData'] = self.aidata.to_map()
        else:
            result['AIData'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.data_interval = map.get('DataInterval')
        if map.get('AIData') is not None:
            temp_model = DescribeVodAIDataResponseAIData()
            self.aidata = temp_model.from_map(map['AIData'])
        else:
            self.aidata = None
        return self


class DescribeVodAIDataResponseAIDataAIDataItemDataDataItem(TeaModel):
    def __init__(self, name=None, value=None):
        self.name = name
        self.value = value

    def validate(self):
        self.validate_required(self.name, 'name')
        self.validate_required(self.value, 'value')

    def to_map(self):
        result = {}
        result['Name'] = self.name
        result['Value'] = self.value
        return result

    def from_map(self, map={}):
        self.name = map.get('Name')
        self.value = map.get('Value')
        return self


class DescribeVodAIDataResponseAIDataAIDataItemData(TeaModel):
    def __init__(self, data_item=None):
        self.data_item = []

    def validate(self):
        self.validate_required(self.data_item, 'data_item')
        if self.data_item:
            for k in self.data_item:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['DataItem'] = []
        if self.data_item is not None:
            for k in self.data_item:
                result['DataItem'].append(k.to_map() if k else None)
        else:
            result['DataItem'] = None
        return result

    def from_map(self, map={}):
        self.data_item = []
        if map.get('DataItem') is not None:
            for k in map.get('DataItem'):
                temp_model = DescribeVodAIDataResponseAIDataAIDataItemDataDataItem()
                temp_model = temp_model.from_map(k)
                self.data_item.append(temp_model)
        else:
            self.data_item = None
        return self


class DescribeVodAIDataResponseAIDataAIDataItem(TeaModel):
    def __init__(self, time_stamp=None, data=None):
        self.time_stamp = time_stamp
        self.data = data

    def validate(self):
        self.validate_required(self.time_stamp, 'time_stamp')
        self.validate_required(self.data, 'data')
        if self.data:
            self.data.validate()

    def to_map(self):
        result = {}
        result['TimeStamp'] = self.time_stamp
        if self.data is not None:
            result['Data'] = self.data.to_map()
        else:
            result['Data'] = None
        return result

    def from_map(self, map={}):
        self.time_stamp = map.get('TimeStamp')
        if map.get('Data') is not None:
            temp_model = DescribeVodAIDataResponseAIDataAIDataItemData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class DescribeVodAIDataResponseAIData(TeaModel):
    def __init__(self, aidata_item=None):
        self.aidata_item = []

    def validate(self):
        self.validate_required(self.aidata_item, 'aidata_item')
        if self.aidata_item:
            for k in self.aidata_item:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['AIDataItem'] = []
        if self.aidata_item is not None:
            for k in self.aidata_item:
                result['AIDataItem'].append(k.to_map() if k else None)
        else:
            result['AIDataItem'] = None
        return result

    def from_map(self, map={}):
        self.aidata_item = []
        if map.get('AIDataItem') is not None:
            for k in map.get('AIDataItem'):
                temp_model = DescribeVodAIDataResponseAIDataAIDataItem()
                temp_model = temp_model.from_map(k)
                self.aidata_item.append(temp_model)
        else:
            self.aidata_item = None
        return self


class DescribeVodTranscodeDataRequest(TeaModel):
    def __init__(self, owner_id=None, start_time=None, end_time=None, region=None, interval=None, storage=None, specification=None):
        self.owner_id = owner_id
        self.start_time = start_time
        self.end_time = end_time
        self.region = region
        self.interval = interval
        self.storage = storage
        self.specification = specification

    def validate(self):
        self.validate_required(self.start_time, 'start_time')
        self.validate_required(self.end_time, 'end_time')

    def to_map(self):
        result = {}
        result['OwnerId'] = self.owner_id
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        result['Region'] = self.region
        result['Interval'] = self.interval
        result['Storage'] = self.storage
        result['Specification'] = self.specification
        return result

    def from_map(self, map={}):
        self.owner_id = map.get('OwnerId')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        self.region = map.get('Region')
        self.interval = map.get('Interval')
        self.storage = map.get('Storage')
        self.specification = map.get('Specification')
        return self


class DescribeVodTranscodeDataResponse(TeaModel):
    def __init__(self, request_id=None, data_interval=None, transcode_data=None):
        self.request_id = request_id
        self.data_interval = data_interval
        self.transcode_data = transcode_data

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.data_interval, 'data_interval')
        self.validate_required(self.transcode_data, 'transcode_data')
        if self.transcode_data:
            self.transcode_data.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['DataInterval'] = self.data_interval
        if self.transcode_data is not None:
            result['TranscodeData'] = self.transcode_data.to_map()
        else:
            result['TranscodeData'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.data_interval = map.get('DataInterval')
        if map.get('TranscodeData') is not None:
            temp_model = DescribeVodTranscodeDataResponseTranscodeData()
            self.transcode_data = temp_model.from_map(map['TranscodeData'])
        else:
            self.transcode_data = None
        return self


class DescribeVodTranscodeDataResponseTranscodeDataTranscodeDataItemDataDataItem(TeaModel):
    def __init__(self, name=None, value=None):
        self.name = name
        self.value = value

    def validate(self):
        self.validate_required(self.name, 'name')
        self.validate_required(self.value, 'value')

    def to_map(self):
        result = {}
        result['Name'] = self.name
        result['Value'] = self.value
        return result

    def from_map(self, map={}):
        self.name = map.get('Name')
        self.value = map.get('Value')
        return self


class DescribeVodTranscodeDataResponseTranscodeDataTranscodeDataItemData(TeaModel):
    def __init__(self, data_item=None):
        self.data_item = []

    def validate(self):
        self.validate_required(self.data_item, 'data_item')
        if self.data_item:
            for k in self.data_item:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['DataItem'] = []
        if self.data_item is not None:
            for k in self.data_item:
                result['DataItem'].append(k.to_map() if k else None)
        else:
            result['DataItem'] = None
        return result

    def from_map(self, map={}):
        self.data_item = []
        if map.get('DataItem') is not None:
            for k in map.get('DataItem'):
                temp_model = DescribeVodTranscodeDataResponseTranscodeDataTranscodeDataItemDataDataItem()
                temp_model = temp_model.from_map(k)
                self.data_item.append(temp_model)
        else:
            self.data_item = None
        return self


class DescribeVodTranscodeDataResponseTranscodeDataTranscodeDataItem(TeaModel):
    def __init__(self, time_stamp=None, data=None):
        self.time_stamp = time_stamp
        self.data = data

    def validate(self):
        self.validate_required(self.time_stamp, 'time_stamp')
        self.validate_required(self.data, 'data')
        if self.data:
            self.data.validate()

    def to_map(self):
        result = {}
        result['TimeStamp'] = self.time_stamp
        if self.data is not None:
            result['Data'] = self.data.to_map()
        else:
            result['Data'] = None
        return result

    def from_map(self, map={}):
        self.time_stamp = map.get('TimeStamp')
        if map.get('Data') is not None:
            temp_model = DescribeVodTranscodeDataResponseTranscodeDataTranscodeDataItemData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class DescribeVodTranscodeDataResponseTranscodeData(TeaModel):
    def __init__(self, transcode_data_item=None):
        self.transcode_data_item = []

    def validate(self):
        self.validate_required(self.transcode_data_item, 'transcode_data_item')
        if self.transcode_data_item:
            for k in self.transcode_data_item:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['TranscodeDataItem'] = []
        if self.transcode_data_item is not None:
            for k in self.transcode_data_item:
                result['TranscodeDataItem'].append(k.to_map() if k else None)
        else:
            result['TranscodeDataItem'] = None
        return result

    def from_map(self, map={}):
        self.transcode_data_item = []
        if map.get('TranscodeDataItem') is not None:
            for k in map.get('TranscodeDataItem'):
                temp_model = DescribeVodTranscodeDataResponseTranscodeDataTranscodeDataItem()
                temp_model = temp_model.from_map(k)
                self.transcode_data_item.append(temp_model)
        else:
            self.transcode_data_item = None
        return self


class DeleteMultipartUploadRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_id=None, resource_owner_account=None, owner_account=None, resource_real_owner_id=None, media_id=None, media_type=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_id = resource_owner_id
        self.resource_owner_account = resource_owner_account
        self.owner_account = owner_account
        self.resource_real_owner_id = resource_real_owner_id
        self.media_id = media_id
        self.media_type = media_type

    def validate(self):
        self.validate_required(self.media_id, 'media_id')
        self.validate_required(self.media_type, 'media_type')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerId'] = self.resource_owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['OwnerAccount'] = self.owner_account
        result['ResourceRealOwnerId'] = self.resource_real_owner_id
        result['MediaId'] = self.media_id
        result['MediaType'] = self.media_type
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.owner_account = map.get('OwnerAccount')
        self.resource_real_owner_id = map.get('ResourceRealOwnerId')
        self.media_id = map.get('MediaId')
        self.media_type = map.get('MediaType')
        return self


class DeleteMultipartUploadResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class GetAttachedMediaInfoRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, media_ids=None, auth_timeout=None, resource_real_owner_id=None, output_type=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.media_ids = media_ids
        self.auth_timeout = auth_timeout
        self.resource_real_owner_id = resource_real_owner_id
        self.output_type = output_type

    def validate(self):
        self.validate_required(self.media_ids, 'media_ids')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['MediaIds'] = self.media_ids
        result['AuthTimeout'] = self.auth_timeout
        result['ResourceRealOwnerId'] = self.resource_real_owner_id
        result['OutputType'] = self.output_type
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.media_ids = map.get('MediaIds')
        self.auth_timeout = map.get('AuthTimeout')
        self.resource_real_owner_id = map.get('ResourceRealOwnerId')
        self.output_type = map.get('OutputType')
        return self


class GetAttachedMediaInfoResponse(TeaModel):
    def __init__(self, request_id=None, attached_media_list=None, non_exist_media_ids=None):
        self.request_id = request_id
        self.attached_media_list = []
        self.non_exist_media_ids = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.attached_media_list, 'attached_media_list')
        if self.attached_media_list:
            for k in self.attached_media_list:
                if k :
                    k.validate()
        self.validate_required(self.non_exist_media_ids, 'non_exist_media_ids')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['AttachedMediaList'] = []
        if self.attached_media_list is not None:
            for k in self.attached_media_list:
                result['AttachedMediaList'].append(k.to_map() if k else None)
        else:
            result['AttachedMediaList'] = None
        result['NonExistMediaIds'] = []
        if self.non_exist_media_ids is not None:
            for k in self.non_exist_media_ids:
                result['NonExistMediaIds'].append(k)
        else:
            result['NonExistMediaIds'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.attached_media_list = []
        if map.get('AttachedMediaList') is not None:
            for k in map.get('AttachedMediaList'):
                temp_model = GetAttachedMediaInfoResponseAttachedMediaList()
                temp_model = temp_model.from_map(k)
                self.attached_media_list.append(temp_model)
        else:
            self.attached_media_list = None
        self.non_exist_media_ids = []
        if map.get('NonExistMediaIds') is not None:
            for k in map.get('NonExistMediaIds'):
                self.non_exist_media_ids.append(k)
        else:
            self.non_exist_media_ids = None
        return self


class GetAttachedMediaInfoResponseAttachedMediaListCategories(TeaModel):
    def __init__(self, cate_id=None, cate_name=None, level=None, parent_id=None):
        self.cate_id = cate_id
        self.cate_name = cate_name
        self.level = level
        self.parent_id = parent_id

    def validate(self):
        self.validate_required(self.cate_id, 'cate_id')
        self.validate_required(self.cate_name, 'cate_name')
        self.validate_required(self.level, 'level')
        self.validate_required(self.parent_id, 'parent_id')

    def to_map(self):
        result = {}
        result['CateId'] = self.cate_id
        result['CateName'] = self.cate_name
        result['Level'] = self.level
        result['ParentId'] = self.parent_id
        return result

    def from_map(self, map={}):
        self.cate_id = map.get('CateId')
        self.cate_name = map.get('CateName')
        self.level = map.get('Level')
        self.parent_id = map.get('ParentId')
        return self


class GetAttachedMediaInfoResponseAttachedMediaList(TeaModel):
    def __init__(self, media_id=None, title=None, type=None, tags=None, _url=None, description=None, file_size=None, storage_location=None, creation_time=None, modification_time=None, app_id=None, status=None, online_status=None, icon=None, region_id=None, categories=None):
        self.media_id = media_id
        self.title = title
        self.type = type
        self.tags = tags
        self._url = _url
        self.description = description
        self.file_size = file_size
        self.storage_location = storage_location
        self.creation_time = creation_time
        self.modification_time = modification_time
        self.app_id = app_id
        self.status = status
        self.online_status = online_status
        self.icon = icon
        self.region_id = region_id
        self.categories = []

    def validate(self):
        self.validate_required(self.media_id, 'media_id')
        self.validate_required(self.title, 'title')
        self.validate_required(self.type, 'type')
        self.validate_required(self.tags, 'tags')
        self.validate_required(self._url, '_url')
        self.validate_required(self.description, 'description')
        self.validate_required(self.file_size, 'file_size')
        self.validate_required(self.storage_location, 'storage_location')
        self.validate_required(self.creation_time, 'creation_time')
        self.validate_required(self.modification_time, 'modification_time')
        self.validate_required(self.app_id, 'app_id')
        self.validate_required(self.status, 'status')
        self.validate_required(self.online_status, 'online_status')
        self.validate_required(self.icon, 'icon')
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.categories, 'categories')
        if self.categories:
            for k in self.categories:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['MediaId'] = self.media_id
        result['Title'] = self.title
        result['Type'] = self.type
        result['Tags'] = self.tags
        result['URL'] = self._url
        result['Description'] = self.description
        result['FileSize'] = self.file_size
        result['StorageLocation'] = self.storage_location
        result['CreationTime'] = self.creation_time
        result['ModificationTime'] = self.modification_time
        result['AppId'] = self.app_id
        result['Status'] = self.status
        result['OnlineStatus'] = self.online_status
        result['Icon'] = self.icon
        result['RegionId'] = self.region_id
        result['Categories'] = []
        if self.categories is not None:
            for k in self.categories:
                result['Categories'].append(k.to_map() if k else None)
        else:
            result['Categories'] = None
        return result

    def from_map(self, map={}):
        self.media_id = map.get('MediaId')
        self.title = map.get('Title')
        self.type = map.get('Type')
        self.tags = map.get('Tags')
        self._url = map.get('URL')
        self.description = map.get('Description')
        self.file_size = map.get('FileSize')
        self.storage_location = map.get('StorageLocation')
        self.creation_time = map.get('CreationTime')
        self.modification_time = map.get('ModificationTime')
        self.app_id = map.get('AppId')
        self.status = map.get('Status')
        self.online_status = map.get('OnlineStatus')
        self.icon = map.get('Icon')
        self.region_id = map.get('RegionId')
        self.categories = []
        if map.get('Categories') is not None:
            for k in map.get('Categories'):
                temp_model = GetAttachedMediaInfoResponseAttachedMediaListCategories()
                temp_model = temp_model.from_map(k)
                self.categories.append(temp_model)
        else:
            self.categories = None
        return self


class DeleteAttachedMediaRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, media_ids=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.media_ids = media_ids

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['MediaIds'] = self.media_ids
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.media_ids = map.get('MediaIds')
        return self


class DeleteAttachedMediaResponse(TeaModel):
    def __init__(self, request_id=None, non_exist_media_ids=None):
        self.request_id = request_id
        self.non_exist_media_ids = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.non_exist_media_ids, 'non_exist_media_ids')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['NonExistMediaIds'] = []
        if self.non_exist_media_ids is not None:
            for k in self.non_exist_media_ids:
                result['NonExistMediaIds'].append(k)
        else:
            result['NonExistMediaIds'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.non_exist_media_ids = []
        if map.get('NonExistMediaIds') is not None:
            for k in map.get('NonExistMediaIds'):
                self.non_exist_media_ids.append(k)
        else:
            self.non_exist_media_ids = None
        return self


class UpdateAttachedMediaInfosRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, resource_real_owner_id=None, update_content=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.resource_real_owner_id = resource_real_owner_id
        self.update_content = update_content

    def validate(self):
        self.validate_required(self.update_content, 'update_content')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['ResourceRealOwnerId'] = self.resource_real_owner_id
        result['UpdateContent'] = self.update_content
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.resource_real_owner_id = map.get('ResourceRealOwnerId')
        self.update_content = map.get('UpdateContent')
        return self


class UpdateAttachedMediaInfosResponse(TeaModel):
    def __init__(self, request_id=None, non_exist_media_ids=None):
        self.request_id = request_id
        self.non_exist_media_ids = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.non_exist_media_ids, 'non_exist_media_ids')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['NonExistMediaIds'] = []
        if self.non_exist_media_ids is not None:
            for k in self.non_exist_media_ids:
                result['NonExistMediaIds'].append(k)
        else:
            result['NonExistMediaIds'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.non_exist_media_ids = []
        if map.get('NonExistMediaIds') is not None:
            for k in map.get('NonExistMediaIds'):
                self.non_exist_media_ids.append(k)
        else:
            self.non_exist_media_ids = None
        return self


class AttachAppPolicyToIdentityRequest(TeaModel):
    def __init__(self, owner_id=None, resource_owner_account=None, resource_owner_id=None, identity_type=None, identity_name=None, app_id=None, policy_names=None):
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.identity_type = identity_type
        self.identity_name = identity_name
        self.app_id = app_id
        self.policy_names = policy_names

    def validate(self):
        self.validate_required(self.identity_type, 'identity_type')
        self.validate_required(self.identity_name, 'identity_name')
        self.validate_required(self.policy_names, 'policy_names')

    def to_map(self):
        result = {}
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['IdentityType'] = self.identity_type
        result['IdentityName'] = self.identity_name
        result['AppId'] = self.app_id
        result['PolicyNames'] = self.policy_names
        return result

    def from_map(self, map={}):
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.identity_type = map.get('IdentityType')
        self.identity_name = map.get('IdentityName')
        self.app_id = map.get('AppId')
        self.policy_names = map.get('PolicyNames')
        return self


class AttachAppPolicyToIdentityResponse(TeaModel):
    def __init__(self, request_id=None, non_exist_policy_names=None, failed_policy_names=None):
        self.request_id = request_id
        self.non_exist_policy_names = []
        self.failed_policy_names = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.non_exist_policy_names, 'non_exist_policy_names')
        self.validate_required(self.failed_policy_names, 'failed_policy_names')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['NonExistPolicyNames'] = []
        if self.non_exist_policy_names is not None:
            for k in self.non_exist_policy_names:
                result['NonExistPolicyNames'].append(k)
        else:
            result['NonExistPolicyNames'] = None
        result['FailedPolicyNames'] = []
        if self.failed_policy_names is not None:
            for k in self.failed_policy_names:
                result['FailedPolicyNames'].append(k)
        else:
            result['FailedPolicyNames'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.non_exist_policy_names = []
        if map.get('NonExistPolicyNames') is not None:
            for k in map.get('NonExistPolicyNames'):
                self.non_exist_policy_names.append(k)
        else:
            self.non_exist_policy_names = None
        self.failed_policy_names = []
        if map.get('FailedPolicyNames') is not None:
            for k in map.get('FailedPolicyNames'):
                self.failed_policy_names.append(k)
        else:
            self.failed_policy_names = None
        return self


class DetachAppPolicyFromIdentityRequest(TeaModel):
    def __init__(self, owner_id=None, resource_owner_account=None, resource_owner_id=None, identity_type=None, identity_name=None, app_id=None, policy_names=None):
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.identity_type = identity_type
        self.identity_name = identity_name
        self.app_id = app_id
        self.policy_names = policy_names

    def validate(self):
        self.validate_required(self.identity_type, 'identity_type')
        self.validate_required(self.identity_name, 'identity_name')
        self.validate_required(self.policy_names, 'policy_names')

    def to_map(self):
        result = {}
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['IdentityType'] = self.identity_type
        result['IdentityName'] = self.identity_name
        result['AppId'] = self.app_id
        result['PolicyNames'] = self.policy_names
        return result

    def from_map(self, map={}):
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.identity_type = map.get('IdentityType')
        self.identity_name = map.get('IdentityName')
        self.app_id = map.get('AppId')
        self.policy_names = map.get('PolicyNames')
        return self


class DetachAppPolicyFromIdentityResponse(TeaModel):
    def __init__(self, request_id=None, non_exist_policy_names=None, failed_policy_names=None):
        self.request_id = request_id
        self.non_exist_policy_names = []
        self.failed_policy_names = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.non_exist_policy_names, 'non_exist_policy_names')
        self.validate_required(self.failed_policy_names, 'failed_policy_names')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['NonExistPolicyNames'] = []
        if self.non_exist_policy_names is not None:
            for k in self.non_exist_policy_names:
                result['NonExistPolicyNames'].append(k)
        else:
            result['NonExistPolicyNames'] = None
        result['FailedPolicyNames'] = []
        if self.failed_policy_names is not None:
            for k in self.failed_policy_names:
                result['FailedPolicyNames'].append(k)
        else:
            result['FailedPolicyNames'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.non_exist_policy_names = []
        if map.get('NonExistPolicyNames') is not None:
            for k in map.get('NonExistPolicyNames'):
                self.non_exist_policy_names.append(k)
        else:
            self.non_exist_policy_names = None
        self.failed_policy_names = []
        if map.get('FailedPolicyNames') is not None:
            for k in map.get('FailedPolicyNames'):
                self.failed_policy_names.append(k)
        else:
            self.failed_policy_names = None
        return self


class ListAppPoliciesForIdentityRequest(TeaModel):
    def __init__(self, owner_id=None, resource_owner_account=None, resource_owner_id=None, identity_type=None, identity_name=None, app_id=None):
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.identity_type = identity_type
        self.identity_name = identity_name
        self.app_id = app_id

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['IdentityType'] = self.identity_type
        result['IdentityName'] = self.identity_name
        result['AppId'] = self.app_id
        return result

    def from_map(self, map={}):
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.identity_type = map.get('IdentityType')
        self.identity_name = map.get('IdentityName')
        self.app_id = map.get('AppId')
        return self


class ListAppPoliciesForIdentityResponse(TeaModel):
    def __init__(self, request_id=None, app_policy_list=None):
        self.request_id = request_id
        self.app_policy_list = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.app_policy_list, 'app_policy_list')
        if self.app_policy_list:
            for k in self.app_policy_list:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['AppPolicyList'] = []
        if self.app_policy_list is not None:
            for k in self.app_policy_list:
                result['AppPolicyList'].append(k.to_map() if k else None)
        else:
            result['AppPolicyList'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.app_policy_list = []
        if map.get('AppPolicyList') is not None:
            for k in map.get('AppPolicyList'):
                temp_model = ListAppPoliciesForIdentityResponseAppPolicyList()
                temp_model = temp_model.from_map(k)
                self.app_policy_list.append(temp_model)
        else:
            self.app_policy_list = None
        return self


class ListAppPoliciesForIdentityResponseAppPolicyList(TeaModel):
    def __init__(self, app_id=None, creation_time=None, policy_name=None, policy_type=None, policy_value=None, description=None, modification_time=None):
        self.app_id = app_id
        self.creation_time = creation_time
        self.policy_name = policy_name
        self.policy_type = policy_type
        self.policy_value = policy_value
        self.description = description
        self.modification_time = modification_time

    def validate(self):
        self.validate_required(self.app_id, 'app_id')
        self.validate_required(self.creation_time, 'creation_time')
        self.validate_required(self.policy_name, 'policy_name')
        self.validate_required(self.policy_type, 'policy_type')
        self.validate_required(self.policy_value, 'policy_value')
        self.validate_required(self.description, 'description')
        self.validate_required(self.modification_time, 'modification_time')

    def to_map(self):
        result = {}
        result['AppId'] = self.app_id
        result['CreationTime'] = self.creation_time
        result['PolicyName'] = self.policy_name
        result['PolicyType'] = self.policy_type
        result['PolicyValue'] = self.policy_value
        result['Description'] = self.description
        result['ModificationTime'] = self.modification_time
        return result

    def from_map(self, map={}):
        self.app_id = map.get('AppId')
        self.creation_time = map.get('CreationTime')
        self.policy_name = map.get('PolicyName')
        self.policy_type = map.get('PolicyType')
        self.policy_value = map.get('PolicyValue')
        self.description = map.get('Description')
        self.modification_time = map.get('ModificationTime')
        return self


class CreateAppInfoRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, app_name=None, description=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.app_name = app_name
        self.description = description

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['AppName'] = self.app_name
        result['Description'] = self.description
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.app_name = map.get('AppName')
        self.description = map.get('Description')
        return self


class CreateAppInfoResponse(TeaModel):
    def __init__(self, request_id=None, app_id=None):
        self.request_id = request_id
        self.app_id = app_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.app_id, 'app_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['AppId'] = self.app_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.app_id = map.get('AppId')
        return self


class GetAppInfosRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, app_ids=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.app_ids = app_ids

    def validate(self):
        self.validate_required(self.app_ids, 'app_ids')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['AppIds'] = self.app_ids
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.app_ids = map.get('AppIds')
        return self


class GetAppInfosResponse(TeaModel):
    def __init__(self, request_id=None, app_info_list=None, non_exist_app_ids=None):
        self.request_id = request_id
        self.app_info_list = []
        self.non_exist_app_ids = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.app_info_list, 'app_info_list')
        if self.app_info_list:
            for k in self.app_info_list:
                if k :
                    k.validate()
        self.validate_required(self.non_exist_app_ids, 'non_exist_app_ids')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['AppInfoList'] = []
        if self.app_info_list is not None:
            for k in self.app_info_list:
                result['AppInfoList'].append(k.to_map() if k else None)
        else:
            result['AppInfoList'] = None
        result['NonExistAppIds'] = []
        if self.non_exist_app_ids is not None:
            for k in self.non_exist_app_ids:
                result['NonExistAppIds'].append(k)
        else:
            result['NonExistAppIds'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.app_info_list = []
        if map.get('AppInfoList') is not None:
            for k in map.get('AppInfoList'):
                temp_model = GetAppInfosResponseAppInfoList()
                temp_model = temp_model.from_map(k)
                self.app_info_list.append(temp_model)
        else:
            self.app_info_list = None
        self.non_exist_app_ids = []
        if map.get('NonExistAppIds') is not None:
            for k in map.get('NonExistAppIds'):
                self.non_exist_app_ids.append(k)
        else:
            self.non_exist_app_ids = None
        return self


class GetAppInfosResponseAppInfoList(TeaModel):
    def __init__(self, app_id=None, app_name=None, type=None, description=None, status=None, creation_time=None, modification_time=None):
        self.app_id = app_id
        self.app_name = app_name
        self.type = type
        self.description = description
        self.status = status
        self.creation_time = creation_time
        self.modification_time = modification_time

    def validate(self):
        self.validate_required(self.app_id, 'app_id')
        self.validate_required(self.app_name, 'app_name')
        self.validate_required(self.type, 'type')
        self.validate_required(self.description, 'description')
        self.validate_required(self.status, 'status')
        self.validate_required(self.creation_time, 'creation_time')
        self.validate_required(self.modification_time, 'modification_time')

    def to_map(self):
        result = {}
        result['AppId'] = self.app_id
        result['AppName'] = self.app_name
        result['Type'] = self.type
        result['Description'] = self.description
        result['Status'] = self.status
        result['CreationTime'] = self.creation_time
        result['ModificationTime'] = self.modification_time
        return result

    def from_map(self, map={}):
        self.app_id = map.get('AppId')
        self.app_name = map.get('AppName')
        self.type = map.get('Type')
        self.description = map.get('Description')
        self.status = map.get('Status')
        self.creation_time = map.get('CreationTime')
        self.modification_time = map.get('ModificationTime')
        return self


class UpdateAppInfoRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, app_id=None, app_name=None, description=None, status=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.app_id = app_id
        self.app_name = app_name
        self.description = description
        self.status = status

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['AppId'] = self.app_id
        result['AppName'] = self.app_name
        result['Description'] = self.description
        result['Status'] = self.status
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.app_id = map.get('AppId')
        self.app_name = map.get('AppName')
        self.description = map.get('Description')
        self.status = map.get('Status')
        return self


class UpdateAppInfoResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class DeleteAppInfoRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, app_id=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.app_id = app_id

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['AppId'] = self.app_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.app_id = map.get('AppId')
        return self


class DeleteAppInfoResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class ListAppInfoRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, status=None, page_no=None, page_size=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.status = status
        self.page_no = page_no
        self.page_size = page_size

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['Status'] = self.status
        result['PageNo'] = self.page_no
        result['PageSize'] = self.page_size
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.status = map.get('Status')
        self.page_no = map.get('PageNo')
        self.page_size = map.get('PageSize')
        return self


class ListAppInfoResponse(TeaModel):
    def __init__(self, request_id=None, total=None, app_info_list=None):
        self.request_id = request_id
        self.total = total
        self.app_info_list = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.total, 'total')
        self.validate_required(self.app_info_list, 'app_info_list')
        if self.app_info_list:
            for k in self.app_info_list:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Total'] = self.total
        result['AppInfoList'] = []
        if self.app_info_list is not None:
            for k in self.app_info_list:
                result['AppInfoList'].append(k.to_map() if k else None)
        else:
            result['AppInfoList'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.total = map.get('Total')
        self.app_info_list = []
        if map.get('AppInfoList') is not None:
            for k in map.get('AppInfoList'):
                temp_model = ListAppInfoResponseAppInfoList()
                temp_model = temp_model.from_map(k)
                self.app_info_list.append(temp_model)
        else:
            self.app_info_list = None
        return self


class ListAppInfoResponseAppInfoList(TeaModel):
    def __init__(self, app_id=None, app_name=None, type=None, description=None, status=None, creation_time=None, modification_time=None):
        self.app_id = app_id
        self.app_name = app_name
        self.type = type
        self.description = description
        self.status = status
        self.creation_time = creation_time
        self.modification_time = modification_time

    def validate(self):
        self.validate_required(self.app_id, 'app_id')
        self.validate_required(self.app_name, 'app_name')
        self.validate_required(self.type, 'type')
        self.validate_required(self.description, 'description')
        self.validate_required(self.status, 'status')
        self.validate_required(self.creation_time, 'creation_time')
        self.validate_required(self.modification_time, 'modification_time')

    def to_map(self):
        result = {}
        result['AppId'] = self.app_id
        result['AppName'] = self.app_name
        result['Type'] = self.type
        result['Description'] = self.description
        result['Status'] = self.status
        result['CreationTime'] = self.creation_time
        result['ModificationTime'] = self.modification_time
        return result

    def from_map(self, map={}):
        self.app_id = map.get('AppId')
        self.app_name = map.get('AppName')
        self.type = map.get('Type')
        self.description = map.get('Description')
        self.status = map.get('Status')
        self.creation_time = map.get('CreationTime')
        self.modification_time = map.get('ModificationTime')
        return self


class MoveAppResourceRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, target_app_id=None, resource_type=None, resource_ids=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.target_app_id = target_app_id
        self.resource_type = resource_type
        self.resource_ids = resource_ids

    def validate(self):
        self.validate_required(self.target_app_id, 'target_app_id')
        self.validate_required(self.resource_type, 'resource_type')
        self.validate_required(self.resource_ids, 'resource_ids')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['TargetAppId'] = self.target_app_id
        result['ResourceType'] = self.resource_type
        result['ResourceIds'] = self.resource_ids
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.target_app_id = map.get('TargetAppId')
        self.resource_type = map.get('ResourceType')
        self.resource_ids = map.get('ResourceIds')
        return self


class MoveAppResourceResponse(TeaModel):
    def __init__(self, request_id=None, non_exist_resource_ids=None, failed_resource_ids=None):
        self.request_id = request_id
        self.non_exist_resource_ids = []
        self.failed_resource_ids = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.non_exist_resource_ids, 'non_exist_resource_ids')
        self.validate_required(self.failed_resource_ids, 'failed_resource_ids')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['NonExistResourceIds'] = []
        if self.non_exist_resource_ids is not None:
            for k in self.non_exist_resource_ids:
                result['NonExistResourceIds'].append(k)
        else:
            result['NonExistResourceIds'] = None
        result['FailedResourceIds'] = []
        if self.failed_resource_ids is not None:
            for k in self.failed_resource_ids:
                result['FailedResourceIds'].append(k)
        else:
            result['FailedResourceIds'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.non_exist_resource_ids = []
        if map.get('NonExistResourceIds') is not None:
            for k in map.get('NonExistResourceIds'):
                self.non_exist_resource_ids.append(k)
        else:
            self.non_exist_resource_ids = None
        self.failed_resource_ids = []
        if map.get('FailedResourceIds') is not None:
            for k in map.get('FailedResourceIds'):
                self.failed_resource_ids.append(k)
        else:
            self.failed_resource_ids = None
        return self


class DeleteMessageCallbackRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_id=None, resource_owner_account=None, owner_account=None, resource_real_owner_id=None, app_id=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_id = resource_owner_id
        self.resource_owner_account = resource_owner_account
        self.owner_account = owner_account
        self.resource_real_owner_id = resource_real_owner_id
        self.app_id = app_id

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerId'] = self.resource_owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['OwnerAccount'] = self.owner_account
        result['ResourceRealOwnerId'] = self.resource_real_owner_id
        result['AppId'] = self.app_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.owner_account = map.get('OwnerAccount')
        self.resource_real_owner_id = map.get('ResourceRealOwnerId')
        self.app_id = map.get('AppId')
        return self


class DeleteMessageCallbackResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class GetTranscodeSummaryRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, video_ids=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.video_ids = video_ids

    def validate(self):
        self.validate_required(self.video_ids, 'video_ids')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['VideoIds'] = self.video_ids
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.video_ids = map.get('VideoIds')
        return self


class GetTranscodeSummaryResponse(TeaModel):
    def __init__(self, request_id=None, transcode_summary_list=None, non_exist_video_ids=None):
        self.request_id = request_id
        self.transcode_summary_list = []
        self.non_exist_video_ids = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.transcode_summary_list, 'transcode_summary_list')
        if self.transcode_summary_list:
            for k in self.transcode_summary_list:
                if k :
                    k.validate()
        self.validate_required(self.non_exist_video_ids, 'non_exist_video_ids')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['TranscodeSummaryList'] = []
        if self.transcode_summary_list is not None:
            for k in self.transcode_summary_list:
                result['TranscodeSummaryList'].append(k.to_map() if k else None)
        else:
            result['TranscodeSummaryList'] = None
        result['NonExistVideoIds'] = []
        if self.non_exist_video_ids is not None:
            for k in self.non_exist_video_ids:
                result['NonExistVideoIds'].append(k)
        else:
            result['NonExistVideoIds'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.transcode_summary_list = []
        if map.get('TranscodeSummaryList') is not None:
            for k in map.get('TranscodeSummaryList'):
                temp_model = GetTranscodeSummaryResponseTranscodeSummaryList()
                temp_model = temp_model.from_map(k)
                self.transcode_summary_list.append(temp_model)
        else:
            self.transcode_summary_list = None
        self.non_exist_video_ids = []
        if map.get('NonExistVideoIds') is not None:
            for k in map.get('NonExistVideoIds'):
                self.non_exist_video_ids.append(k)
        else:
            self.non_exist_video_ids = None
        return self


class GetTranscodeSummaryResponseTranscodeSummaryListTranscodeJobInfoSummaryList(TeaModel):
    def __init__(self, transcode_template_id=None, transcode_job_status=None, creation_time=None, complete_time=None, transcode_progress=None, error_code=None, error_message=None, definition=None, encryption=None, width=None, height=None, bitrate=None, fps=None, format=None, duration=None, filesize=None, watermark_id_list=None):
        self.transcode_template_id = transcode_template_id
        self.transcode_job_status = transcode_job_status
        self.creation_time = creation_time
        self.complete_time = complete_time
        self.transcode_progress = transcode_progress
        self.error_code = error_code
        self.error_message = error_message
        self.definition = definition
        self.encryption = encryption
        self.width = width
        self.height = height
        self.bitrate = bitrate
        self.fps = fps
        self.format = format
        self.duration = duration
        self.filesize = filesize
        self.watermark_id_list = []

    def validate(self):
        self.validate_required(self.transcode_template_id, 'transcode_template_id')
        self.validate_required(self.transcode_job_status, 'transcode_job_status')
        self.validate_required(self.creation_time, 'creation_time')
        self.validate_required(self.complete_time, 'complete_time')
        self.validate_required(self.transcode_progress, 'transcode_progress')
        self.validate_required(self.error_code, 'error_code')
        self.validate_required(self.error_message, 'error_message')
        self.validate_required(self.definition, 'definition')
        self.validate_required(self.encryption, 'encryption')
        self.validate_required(self.width, 'width')
        self.validate_required(self.height, 'height')
        self.validate_required(self.bitrate, 'bitrate')
        self.validate_required(self.fps, 'fps')
        self.validate_required(self.format, 'format')
        self.validate_required(self.duration, 'duration')
        self.validate_required(self.filesize, 'filesize')
        self.validate_required(self.watermark_id_list, 'watermark_id_list')

    def to_map(self):
        result = {}
        result['TranscodeTemplateId'] = self.transcode_template_id
        result['TranscodeJobStatus'] = self.transcode_job_status
        result['CreationTime'] = self.creation_time
        result['CompleteTime'] = self.complete_time
        result['TranscodeProgress'] = self.transcode_progress
        result['ErrorCode'] = self.error_code
        result['ErrorMessage'] = self.error_message
        result['Definition'] = self.definition
        result['Encryption'] = self.encryption
        result['Width'] = self.width
        result['Height'] = self.height
        result['Bitrate'] = self.bitrate
        result['Fps'] = self.fps
        result['Format'] = self.format
        result['Duration'] = self.duration
        result['Filesize'] = self.filesize
        result['WatermarkIdList'] = []
        if self.watermark_id_list is not None:
            for k in self.watermark_id_list:
                result['WatermarkIdList'].append(k)
        else:
            result['WatermarkIdList'] = None
        return result

    def from_map(self, map={}):
        self.transcode_template_id = map.get('TranscodeTemplateId')
        self.transcode_job_status = map.get('TranscodeJobStatus')
        self.creation_time = map.get('CreationTime')
        self.complete_time = map.get('CompleteTime')
        self.transcode_progress = map.get('TranscodeProgress')
        self.error_code = map.get('ErrorCode')
        self.error_message = map.get('ErrorMessage')
        self.definition = map.get('Definition')
        self.encryption = map.get('Encryption')
        self.width = map.get('Width')
        self.height = map.get('Height')
        self.bitrate = map.get('Bitrate')
        self.fps = map.get('Fps')
        self.format = map.get('Format')
        self.duration = map.get('Duration')
        self.filesize = map.get('Filesize')
        self.watermark_id_list = []
        if map.get('WatermarkIdList') is not None:
            for k in map.get('WatermarkIdList'):
                self.watermark_id_list.append(k)
        else:
            self.watermark_id_list = None
        return self


class GetTranscodeSummaryResponseTranscodeSummaryList(TeaModel):
    def __init__(self, video_id=None, transcode_status=None, creation_time=None, complete_time=None, trigger=None, transcode_template_group_id=None, transcode_job_info_summary_list=None):
        self.video_id = video_id
        self.transcode_status = transcode_status
        self.creation_time = creation_time
        self.complete_time = complete_time
        self.trigger = trigger
        self.transcode_template_group_id = transcode_template_group_id
        self.transcode_job_info_summary_list = []

    def validate(self):
        self.validate_required(self.video_id, 'video_id')
        self.validate_required(self.transcode_status, 'transcode_status')
        self.validate_required(self.creation_time, 'creation_time')
        self.validate_required(self.complete_time, 'complete_time')
        self.validate_required(self.trigger, 'trigger')
        self.validate_required(self.transcode_template_group_id, 'transcode_template_group_id')
        self.validate_required(self.transcode_job_info_summary_list, 'transcode_job_info_summary_list')
        if self.transcode_job_info_summary_list:
            for k in self.transcode_job_info_summary_list:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['VideoId'] = self.video_id
        result['TranscodeStatus'] = self.transcode_status
        result['CreationTime'] = self.creation_time
        result['CompleteTime'] = self.complete_time
        result['Trigger'] = self.trigger
        result['TranscodeTemplateGroupId'] = self.transcode_template_group_id
        result['TranscodeJobInfoSummaryList'] = []
        if self.transcode_job_info_summary_list is not None:
            for k in self.transcode_job_info_summary_list:
                result['TranscodeJobInfoSummaryList'].append(k.to_map() if k else None)
        else:
            result['TranscodeJobInfoSummaryList'] = None
        return result

    def from_map(self, map={}):
        self.video_id = map.get('VideoId')
        self.transcode_status = map.get('TranscodeStatus')
        self.creation_time = map.get('CreationTime')
        self.complete_time = map.get('CompleteTime')
        self.trigger = map.get('Trigger')
        self.transcode_template_group_id = map.get('TranscodeTemplateGroupId')
        self.transcode_job_info_summary_list = []
        if map.get('TranscodeJobInfoSummaryList') is not None:
            for k in map.get('TranscodeJobInfoSummaryList'):
                temp_model = GetTranscodeSummaryResponseTranscodeSummaryListTranscodeJobInfoSummaryList()
                temp_model = temp_model.from_map(k)
                self.transcode_job_info_summary_list.append(temp_model)
        else:
            self.transcode_job_info_summary_list = None
        return self


class ListTranscodeTaskRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, video_id=None, start_time=None, end_time=None, page_size=None, page_no=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.video_id = video_id
        self.start_time = start_time
        self.end_time = end_time
        self.page_size = page_size
        self.page_no = page_no

    def validate(self):
        self.validate_required(self.video_id, 'video_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['VideoId'] = self.video_id
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        result['PageSize'] = self.page_size
        result['PageNo'] = self.page_no
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.video_id = map.get('VideoId')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        self.page_size = map.get('PageSize')
        self.page_no = map.get('PageNo')
        return self


class ListTranscodeTaskResponse(TeaModel):
    def __init__(self, request_id=None, transcode_task_list=None):
        self.request_id = request_id
        self.transcode_task_list = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.transcode_task_list, 'transcode_task_list')
        if self.transcode_task_list:
            for k in self.transcode_task_list:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['TranscodeTaskList'] = []
        if self.transcode_task_list is not None:
            for k in self.transcode_task_list:
                result['TranscodeTaskList'].append(k.to_map() if k else None)
        else:
            result['TranscodeTaskList'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.transcode_task_list = []
        if map.get('TranscodeTaskList') is not None:
            for k in map.get('TranscodeTaskList'):
                temp_model = ListTranscodeTaskResponseTranscodeTaskList()
                temp_model = temp_model.from_map(k)
                self.transcode_task_list.append(temp_model)
        else:
            self.transcode_task_list = None
        return self


class ListTranscodeTaskResponseTranscodeTaskList(TeaModel):
    def __init__(self, transcode_task_id=None, video_id=None, task_status=None, transcode_template_group_id=None, creation_time=None, complete_time=None, trigger=None):
        self.transcode_task_id = transcode_task_id
        self.video_id = video_id
        self.task_status = task_status
        self.transcode_template_group_id = transcode_template_group_id
        self.creation_time = creation_time
        self.complete_time = complete_time
        self.trigger = trigger

    def validate(self):
        self.validate_required(self.transcode_task_id, 'transcode_task_id')
        self.validate_required(self.video_id, 'video_id')
        self.validate_required(self.task_status, 'task_status')
        self.validate_required(self.transcode_template_group_id, 'transcode_template_group_id')
        self.validate_required(self.creation_time, 'creation_time')
        self.validate_required(self.complete_time, 'complete_time')
        self.validate_required(self.trigger, 'trigger')

    def to_map(self):
        result = {}
        result['TranscodeTaskId'] = self.transcode_task_id
        result['VideoId'] = self.video_id
        result['TaskStatus'] = self.task_status
        result['TranscodeTemplateGroupId'] = self.transcode_template_group_id
        result['CreationTime'] = self.creation_time
        result['CompleteTime'] = self.complete_time
        result['Trigger'] = self.trigger
        return result

    def from_map(self, map={}):
        self.transcode_task_id = map.get('TranscodeTaskId')
        self.video_id = map.get('VideoId')
        self.task_status = map.get('TaskStatus')
        self.transcode_template_group_id = map.get('TranscodeTemplateGroupId')
        self.creation_time = map.get('CreationTime')
        self.complete_time = map.get('CompleteTime')
        self.trigger = map.get('Trigger')
        return self


class GetTranscodeTaskRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, transcode_task_id=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.transcode_task_id = transcode_task_id

    def validate(self):
        self.validate_required(self.transcode_task_id, 'transcode_task_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['TranscodeTaskId'] = self.transcode_task_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.transcode_task_id = map.get('TranscodeTaskId')
        return self


class GetTranscodeTaskResponse(TeaModel):
    def __init__(self, request_id=None, transcode_task=None):
        self.request_id = request_id
        self.transcode_task = transcode_task

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.transcode_task, 'transcode_task')
        if self.transcode_task:
            self.transcode_task.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.transcode_task is not None:
            result['TranscodeTask'] = self.transcode_task.to_map()
        else:
            result['TranscodeTask'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('TranscodeTask') is not None:
            temp_model = GetTranscodeTaskResponseTranscodeTask()
            self.transcode_task = temp_model.from_map(map['TranscodeTask'])
        else:
            self.transcode_task = None
        return self


class GetTranscodeTaskResponseTranscodeTaskTranscodeJobInfoListOutputFile(TeaModel):
    def __init__(self, width=None, height=None, bitrate=None, fps=None, format=None, duration=None, filesize=None, encryption=None, audio_stream_list=None, video_stream_list=None, subtitle_stream_list=None, output_file_url=None, watermark_id_list=None):
        self.width = width
        self.height = height
        self.bitrate = bitrate
        self.fps = fps
        self.format = format
        self.duration = duration
        self.filesize = filesize
        self.encryption = encryption
        self.audio_stream_list = audio_stream_list
        self.video_stream_list = video_stream_list
        self.subtitle_stream_list = subtitle_stream_list
        self.output_file_url = output_file_url
        self.watermark_id_list = []

    def validate(self):
        self.validate_required(self.width, 'width')
        self.validate_required(self.height, 'height')
        self.validate_required(self.bitrate, 'bitrate')
        self.validate_required(self.fps, 'fps')
        self.validate_required(self.format, 'format')
        self.validate_required(self.duration, 'duration')
        self.validate_required(self.filesize, 'filesize')
        self.validate_required(self.encryption, 'encryption')
        self.validate_required(self.audio_stream_list, 'audio_stream_list')
        self.validate_required(self.video_stream_list, 'video_stream_list')
        self.validate_required(self.subtitle_stream_list, 'subtitle_stream_list')
        self.validate_required(self.output_file_url, 'output_file_url')
        self.validate_required(self.watermark_id_list, 'watermark_id_list')

    def to_map(self):
        result = {}
        result['Width'] = self.width
        result['Height'] = self.height
        result['Bitrate'] = self.bitrate
        result['Fps'] = self.fps
        result['Format'] = self.format
        result['Duration'] = self.duration
        result['Filesize'] = self.filesize
        result['Encryption'] = self.encryption
        result['AudioStreamList'] = self.audio_stream_list
        result['VideoStreamList'] = self.video_stream_list
        result['SubtitleStreamList'] = self.subtitle_stream_list
        result['OutputFileUrl'] = self.output_file_url
        result['WatermarkIdList'] = []
        if self.watermark_id_list is not None:
            for k in self.watermark_id_list:
                result['WatermarkIdList'].append(k)
        else:
            result['WatermarkIdList'] = None
        return result

    def from_map(self, map={}):
        self.width = map.get('Width')
        self.height = map.get('Height')
        self.bitrate = map.get('Bitrate')
        self.fps = map.get('Fps')
        self.format = map.get('Format')
        self.duration = map.get('Duration')
        self.filesize = map.get('Filesize')
        self.encryption = map.get('Encryption')
        self.audio_stream_list = map.get('AudioStreamList')
        self.video_stream_list = map.get('VideoStreamList')
        self.subtitle_stream_list = map.get('SubtitleStreamList')
        self.output_file_url = map.get('OutputFileUrl')
        self.watermark_id_list = []
        if map.get('WatermarkIdList') is not None:
            for k in map.get('WatermarkIdList'):
                self.watermark_id_list.append(k)
        else:
            self.watermark_id_list = None
        return self


class GetTranscodeTaskResponseTranscodeTaskTranscodeJobInfoList(TeaModel):
    def __init__(self, transcode_job_id=None, transcode_template_id=None, transcode_job_status=None, creation_time=None, complete_time=None, transcode_progress=None, input_file_url=None, priority=None, error_code=None, error_message=None, definition=None, output_file=None):
        self.transcode_job_id = transcode_job_id
        self.transcode_template_id = transcode_template_id
        self.transcode_job_status = transcode_job_status
        self.creation_time = creation_time
        self.complete_time = complete_time
        self.transcode_progress = transcode_progress
        self.input_file_url = input_file_url
        self.priority = priority
        self.error_code = error_code
        self.error_message = error_message
        self.definition = definition
        self.output_file = output_file

    def validate(self):
        self.validate_required(self.transcode_job_id, 'transcode_job_id')
        self.validate_required(self.transcode_template_id, 'transcode_template_id')
        self.validate_required(self.transcode_job_status, 'transcode_job_status')
        self.validate_required(self.creation_time, 'creation_time')
        self.validate_required(self.complete_time, 'complete_time')
        self.validate_required(self.transcode_progress, 'transcode_progress')
        self.validate_required(self.input_file_url, 'input_file_url')
        self.validate_required(self.priority, 'priority')
        self.validate_required(self.error_code, 'error_code')
        self.validate_required(self.error_message, 'error_message')
        self.validate_required(self.definition, 'definition')
        self.validate_required(self.output_file, 'output_file')
        if self.output_file:
            self.output_file.validate()

    def to_map(self):
        result = {}
        result['TranscodeJobId'] = self.transcode_job_id
        result['TranscodeTemplateId'] = self.transcode_template_id
        result['TranscodeJobStatus'] = self.transcode_job_status
        result['CreationTime'] = self.creation_time
        result['CompleteTime'] = self.complete_time
        result['TranscodeProgress'] = self.transcode_progress
        result['InputFileUrl'] = self.input_file_url
        result['Priority'] = self.priority
        result['ErrorCode'] = self.error_code
        result['ErrorMessage'] = self.error_message
        result['Definition'] = self.definition
        if self.output_file is not None:
            result['OutputFile'] = self.output_file.to_map()
        else:
            result['OutputFile'] = None
        return result

    def from_map(self, map={}):
        self.transcode_job_id = map.get('TranscodeJobId')
        self.transcode_template_id = map.get('TranscodeTemplateId')
        self.transcode_job_status = map.get('TranscodeJobStatus')
        self.creation_time = map.get('CreationTime')
        self.complete_time = map.get('CompleteTime')
        self.transcode_progress = map.get('TranscodeProgress')
        self.input_file_url = map.get('InputFileUrl')
        self.priority = map.get('Priority')
        self.error_code = map.get('ErrorCode')
        self.error_message = map.get('ErrorMessage')
        self.definition = map.get('Definition')
        if map.get('OutputFile') is not None:
            temp_model = GetTranscodeTaskResponseTranscodeTaskTranscodeJobInfoListOutputFile()
            self.output_file = temp_model.from_map(map['OutputFile'])
        else:
            self.output_file = None
        return self


class GetTranscodeTaskResponseTranscodeTask(TeaModel):
    def __init__(self, transcode_task_id=None, video_id=None, task_status=None, creation_time=None, complete_time=None, trigger=None, transcode_template_group_id=None, transcode_job_info_list=None):
        self.transcode_task_id = transcode_task_id
        self.video_id = video_id
        self.task_status = task_status
        self.creation_time = creation_time
        self.complete_time = complete_time
        self.trigger = trigger
        self.transcode_template_group_id = transcode_template_group_id
        self.transcode_job_info_list = []

    def validate(self):
        self.validate_required(self.transcode_task_id, 'transcode_task_id')
        self.validate_required(self.video_id, 'video_id')
        self.validate_required(self.task_status, 'task_status')
        self.validate_required(self.creation_time, 'creation_time')
        self.validate_required(self.complete_time, 'complete_time')
        self.validate_required(self.trigger, 'trigger')
        self.validate_required(self.transcode_template_group_id, 'transcode_template_group_id')
        self.validate_required(self.transcode_job_info_list, 'transcode_job_info_list')
        if self.transcode_job_info_list:
            for k in self.transcode_job_info_list:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['TranscodeTaskId'] = self.transcode_task_id
        result['VideoId'] = self.video_id
        result['TaskStatus'] = self.task_status
        result['CreationTime'] = self.creation_time
        result['CompleteTime'] = self.complete_time
        result['Trigger'] = self.trigger
        result['TranscodeTemplateGroupId'] = self.transcode_template_group_id
        result['TranscodeJobInfoList'] = []
        if self.transcode_job_info_list is not None:
            for k in self.transcode_job_info_list:
                result['TranscodeJobInfoList'].append(k.to_map() if k else None)
        else:
            result['TranscodeJobInfoList'] = None
        return result

    def from_map(self, map={}):
        self.transcode_task_id = map.get('TranscodeTaskId')
        self.video_id = map.get('VideoId')
        self.task_status = map.get('TaskStatus')
        self.creation_time = map.get('CreationTime')
        self.complete_time = map.get('CompleteTime')
        self.trigger = map.get('Trigger')
        self.transcode_template_group_id = map.get('TranscodeTemplateGroupId')
        self.transcode_job_info_list = []
        if map.get('TranscodeJobInfoList') is not None:
            for k in map.get('TranscodeJobInfoList'):
                temp_model = GetTranscodeTaskResponseTranscodeTaskTranscodeJobInfoList()
                temp_model = temp_model.from_map(k)
                self.transcode_job_info_list.append(temp_model)
        else:
            self.transcode_job_info_list = None
        return self


class GetURLUploadInfosRequest(TeaModel):
    def __init__(self, owner_id=None, resource_owner_account=None, resource_owner_id=None, job_ids=None, upload_urls=None):
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.job_ids = job_ids
        self.upload_urls = upload_urls

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['JobIds'] = self.job_ids
        result['UploadURLs'] = self.upload_urls
        return result

    def from_map(self, map={}):
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.job_ids = map.get('JobIds')
        self.upload_urls = map.get('UploadURLs')
        return self


class GetURLUploadInfosResponse(TeaModel):
    def __init__(self, request_id=None, urlupload_info_list=None, non_exists=None):
        self.request_id = request_id
        self.urlupload_info_list = []
        self.non_exists = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.urlupload_info_list, 'urlupload_info_list')
        if self.urlupload_info_list:
            for k in self.urlupload_info_list:
                if k :
                    k.validate()
        self.validate_required(self.non_exists, 'non_exists')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['URLUploadInfoList'] = []
        if self.urlupload_info_list is not None:
            for k in self.urlupload_info_list:
                result['URLUploadInfoList'].append(k.to_map() if k else None)
        else:
            result['URLUploadInfoList'] = None
        result['NonExists'] = []
        if self.non_exists is not None:
            for k in self.non_exists:
                result['NonExists'].append(k)
        else:
            result['NonExists'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.urlupload_info_list = []
        if map.get('URLUploadInfoList') is not None:
            for k in map.get('URLUploadInfoList'):
                temp_model = GetURLUploadInfosResponseURLUploadInfoList()
                temp_model = temp_model.from_map(k)
                self.urlupload_info_list.append(temp_model)
        else:
            self.urlupload_info_list = None
        self.non_exists = []
        if map.get('NonExists') is not None:
            for k in map.get('NonExists'):
                self.non_exists.append(k)
        else:
            self.non_exists = None
        return self


class GetURLUploadInfosResponseURLUploadInfoList(TeaModel):
    def __init__(self, job_id=None, upload_url=None, media_id=None, file_size=None, status=None, user_data=None, error_code=None, error_message=None, creation_time=None, complete_time=None):
        self.job_id = job_id
        self.upload_url = upload_url
        self.media_id = media_id
        self.file_size = file_size
        self.status = status
        self.user_data = user_data
        self.error_code = error_code
        self.error_message = error_message
        self.creation_time = creation_time
        self.complete_time = complete_time

    def validate(self):
        self.validate_required(self.job_id, 'job_id')
        self.validate_required(self.upload_url, 'upload_url')
        self.validate_required(self.media_id, 'media_id')
        self.validate_required(self.file_size, 'file_size')
        self.validate_required(self.status, 'status')
        self.validate_required(self.user_data, 'user_data')
        self.validate_required(self.error_code, 'error_code')
        self.validate_required(self.error_message, 'error_message')
        self.validate_required(self.creation_time, 'creation_time')
        self.validate_required(self.complete_time, 'complete_time')

    def to_map(self):
        result = {}
        result['JobId'] = self.job_id
        result['UploadURL'] = self.upload_url
        result['MediaId'] = self.media_id
        result['FileSize'] = self.file_size
        result['Status'] = self.status
        result['UserData'] = self.user_data
        result['ErrorCode'] = self.error_code
        result['ErrorMessage'] = self.error_message
        result['CreationTime'] = self.creation_time
        result['CompleteTime'] = self.complete_time
        return result

    def from_map(self, map={}):
        self.job_id = map.get('JobId')
        self.upload_url = map.get('UploadURL')
        self.media_id = map.get('MediaId')
        self.file_size = map.get('FileSize')
        self.status = map.get('Status')
        self.user_data = map.get('UserData')
        self.error_code = map.get('ErrorCode')
        self.error_message = map.get('ErrorMessage')
        self.creation_time = map.get('CreationTime')
        self.complete_time = map.get('CompleteTime')
        return self


class UpdateTranscodeTemplateGroupRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, name=None, transcode_template_list=None, locked=None, transcode_template_group_id=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.name = name
        self.transcode_template_list = transcode_template_list
        self.locked = locked
        self.transcode_template_group_id = transcode_template_group_id

    def validate(self):
        self.validate_required(self.transcode_template_group_id, 'transcode_template_group_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['Name'] = self.name
        result['TranscodeTemplateList'] = self.transcode_template_list
        result['Locked'] = self.locked
        result['TranscodeTemplateGroupId'] = self.transcode_template_group_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.name = map.get('Name')
        self.transcode_template_list = map.get('TranscodeTemplateList')
        self.locked = map.get('Locked')
        self.transcode_template_group_id = map.get('TranscodeTemplateGroupId')
        return self


class UpdateTranscodeTemplateGroupResponse(TeaModel):
    def __init__(self, request_id=None, transcode_template_group_id=None):
        self.request_id = request_id
        self.transcode_template_group_id = transcode_template_group_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.transcode_template_group_id, 'transcode_template_group_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['TranscodeTemplateGroupId'] = self.transcode_template_group_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.transcode_template_group_id = map.get('TranscodeTemplateGroupId')
        return self


class AddTranscodeTemplateGroupRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, name=None, transcode_template_list=None, transcode_template_group_id=None, app_id=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.name = name
        self.transcode_template_list = transcode_template_list
        self.transcode_template_group_id = transcode_template_group_id
        self.app_id = app_id

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['Name'] = self.name
        result['TranscodeTemplateList'] = self.transcode_template_list
        result['TranscodeTemplateGroupId'] = self.transcode_template_group_id
        result['AppId'] = self.app_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.name = map.get('Name')
        self.transcode_template_list = map.get('TranscodeTemplateList')
        self.transcode_template_group_id = map.get('TranscodeTemplateGroupId')
        self.app_id = map.get('AppId')
        return self


class AddTranscodeTemplateGroupResponse(TeaModel):
    def __init__(self, request_id=None, transcode_template_group_id=None):
        self.request_id = request_id
        self.transcode_template_group_id = transcode_template_group_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.transcode_template_group_id, 'transcode_template_group_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['TranscodeTemplateGroupId'] = self.transcode_template_group_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.transcode_template_group_id = map.get('TranscodeTemplateGroupId')
        return self


class DeleteTranscodeTemplateGroupRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, transcode_template_group_id=None, transcode_template_ids=None, force_del_group=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.transcode_template_group_id = transcode_template_group_id
        self.transcode_template_ids = transcode_template_ids
        self.force_del_group = force_del_group

    def validate(self):
        self.validate_required(self.transcode_template_group_id, 'transcode_template_group_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['TranscodeTemplateGroupId'] = self.transcode_template_group_id
        result['TranscodeTemplateIds'] = self.transcode_template_ids
        result['ForceDelGroup'] = self.force_del_group
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.transcode_template_group_id = map.get('TranscodeTemplateGroupId')
        self.transcode_template_ids = map.get('TranscodeTemplateIds')
        self.force_del_group = map.get('ForceDelGroup')
        return self


class DeleteTranscodeTemplateGroupResponse(TeaModel):
    def __init__(self, request_id=None, non_exist_transcode_template_ids=None):
        self.request_id = request_id
        self.non_exist_transcode_template_ids = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.non_exist_transcode_template_ids, 'non_exist_transcode_template_ids')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['NonExistTranscodeTemplateIds'] = []
        if self.non_exist_transcode_template_ids is not None:
            for k in self.non_exist_transcode_template_ids:
                result['NonExistTranscodeTemplateIds'].append(k)
        else:
            result['NonExistTranscodeTemplateIds'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.non_exist_transcode_template_ids = []
        if map.get('NonExistTranscodeTemplateIds') is not None:
            for k in map.get('NonExistTranscodeTemplateIds'):
                self.non_exist_transcode_template_ids.append(k)
        else:
            self.non_exist_transcode_template_ids = None
        return self


class GetTranscodeTemplateGroupRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, transcode_template_group_id=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.transcode_template_group_id = transcode_template_group_id

    def validate(self):
        self.validate_required(self.transcode_template_group_id, 'transcode_template_group_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['TranscodeTemplateGroupId'] = self.transcode_template_group_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.transcode_template_group_id = map.get('TranscodeTemplateGroupId')
        return self


class GetTranscodeTemplateGroupResponse(TeaModel):
    def __init__(self, request_id=None, transcode_template_group=None):
        self.request_id = request_id
        self.transcode_template_group = transcode_template_group

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.transcode_template_group, 'transcode_template_group')
        if self.transcode_template_group:
            self.transcode_template_group.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.transcode_template_group is not None:
            result['TranscodeTemplateGroup'] = self.transcode_template_group.to_map()
        else:
            result['TranscodeTemplateGroup'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('TranscodeTemplateGroup') is not None:
            temp_model = GetTranscodeTemplateGroupResponseTranscodeTemplateGroup()
            self.transcode_template_group = temp_model.from_map(map['TranscodeTemplateGroup'])
        else:
            self.transcode_template_group = None
        return self


class GetTranscodeTemplateGroupResponseTranscodeTemplateGroupTranscodeTemplateList(TeaModel):
    def __init__(self, transcode_template_id=None, video=None, audio=None, container=None, mux_config=None, trans_config=None, definition=None, encrypt_setting=None, package_setting=None, subtitle_list=None, opening_list=None, tail_slate_list=None, template_name=None, transcode_file_regular=None, clip=None, rotate=None, type=None, user_data=None, watermark_ids=None):
        self.transcode_template_id = transcode_template_id
        self.video = video
        self.audio = audio
        self.container = container
        self.mux_config = mux_config
        self.trans_config = trans_config
        self.definition = definition
        self.encrypt_setting = encrypt_setting
        self.package_setting = package_setting
        self.subtitle_list = subtitle_list
        self.opening_list = opening_list
        self.tail_slate_list = tail_slate_list
        self.template_name = template_name
        self.transcode_file_regular = transcode_file_regular
        self.clip = clip
        self.rotate = rotate
        self.type = type
        self.user_data = user_data
        self.watermark_ids = []

    def validate(self):
        self.validate_required(self.transcode_template_id, 'transcode_template_id')
        self.validate_required(self.video, 'video')
        self.validate_required(self.audio, 'audio')
        self.validate_required(self.container, 'container')
        self.validate_required(self.mux_config, 'mux_config')
        self.validate_required(self.trans_config, 'trans_config')
        self.validate_required(self.definition, 'definition')
        self.validate_required(self.encrypt_setting, 'encrypt_setting')
        self.validate_required(self.package_setting, 'package_setting')
        self.validate_required(self.subtitle_list, 'subtitle_list')
        self.validate_required(self.opening_list, 'opening_list')
        self.validate_required(self.tail_slate_list, 'tail_slate_list')
        self.validate_required(self.template_name, 'template_name')
        self.validate_required(self.transcode_file_regular, 'transcode_file_regular')
        self.validate_required(self.clip, 'clip')
        self.validate_required(self.rotate, 'rotate')
        self.validate_required(self.type, 'type')
        self.validate_required(self.user_data, 'user_data')
        self.validate_required(self.watermark_ids, 'watermark_ids')

    def to_map(self):
        result = {}
        result['TranscodeTemplateId'] = self.transcode_template_id
        result['Video'] = self.video
        result['Audio'] = self.audio
        result['Container'] = self.container
        result['MuxConfig'] = self.mux_config
        result['TransConfig'] = self.trans_config
        result['Definition'] = self.definition
        result['EncryptSetting'] = self.encrypt_setting
        result['PackageSetting'] = self.package_setting
        result['SubtitleList'] = self.subtitle_list
        result['OpeningList'] = self.opening_list
        result['TailSlateList'] = self.tail_slate_list
        result['TemplateName'] = self.template_name
        result['TranscodeFileRegular'] = self.transcode_file_regular
        result['Clip'] = self.clip
        result['Rotate'] = self.rotate
        result['Type'] = self.type
        result['UserData'] = self.user_data
        result['WatermarkIds'] = []
        if self.watermark_ids is not None:
            for k in self.watermark_ids:
                result['WatermarkIds'].append(k)
        else:
            result['WatermarkIds'] = None
        return result

    def from_map(self, map={}):
        self.transcode_template_id = map.get('TranscodeTemplateId')
        self.video = map.get('Video')
        self.audio = map.get('Audio')
        self.container = map.get('Container')
        self.mux_config = map.get('MuxConfig')
        self.trans_config = map.get('TransConfig')
        self.definition = map.get('Definition')
        self.encrypt_setting = map.get('EncryptSetting')
        self.package_setting = map.get('PackageSetting')
        self.subtitle_list = map.get('SubtitleList')
        self.opening_list = map.get('OpeningList')
        self.tail_slate_list = map.get('TailSlateList')
        self.template_name = map.get('TemplateName')
        self.transcode_file_regular = map.get('TranscodeFileRegular')
        self.clip = map.get('Clip')
        self.rotate = map.get('Rotate')
        self.type = map.get('Type')
        self.user_data = map.get('UserData')
        self.watermark_ids = []
        if map.get('WatermarkIds') is not None:
            for k in map.get('WatermarkIds'):
                self.watermark_ids.append(k)
        else:
            self.watermark_ids = None
        return self


class GetTranscodeTemplateGroupResponseTranscodeTemplateGroup(TeaModel):
    def __init__(self, creation_time=None, modify_time=None, name=None, is_default=None, locked=None, transcode_mode=None, app_id=None, transcode_template_group_id=None, transcode_template_list=None):
        self.creation_time = creation_time
        self.modify_time = modify_time
        self.name = name
        self.is_default = is_default
        self.locked = locked
        self.transcode_mode = transcode_mode
        self.app_id = app_id
        self.transcode_template_group_id = transcode_template_group_id
        self.transcode_template_list = []

    def validate(self):
        self.validate_required(self.creation_time, 'creation_time')
        self.validate_required(self.modify_time, 'modify_time')
        self.validate_required(self.name, 'name')
        self.validate_required(self.is_default, 'is_default')
        self.validate_required(self.locked, 'locked')
        self.validate_required(self.transcode_mode, 'transcode_mode')
        self.validate_required(self.app_id, 'app_id')
        self.validate_required(self.transcode_template_group_id, 'transcode_template_group_id')
        self.validate_required(self.transcode_template_list, 'transcode_template_list')
        if self.transcode_template_list:
            for k in self.transcode_template_list:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['CreationTime'] = self.creation_time
        result['ModifyTime'] = self.modify_time
        result['Name'] = self.name
        result['IsDefault'] = self.is_default
        result['Locked'] = self.locked
        result['TranscodeMode'] = self.transcode_mode
        result['AppId'] = self.app_id
        result['TranscodeTemplateGroupId'] = self.transcode_template_group_id
        result['TranscodeTemplateList'] = []
        if self.transcode_template_list is not None:
            for k in self.transcode_template_list:
                result['TranscodeTemplateList'].append(k.to_map() if k else None)
        else:
            result['TranscodeTemplateList'] = None
        return result

    def from_map(self, map={}):
        self.creation_time = map.get('CreationTime')
        self.modify_time = map.get('ModifyTime')
        self.name = map.get('Name')
        self.is_default = map.get('IsDefault')
        self.locked = map.get('Locked')
        self.transcode_mode = map.get('TranscodeMode')
        self.app_id = map.get('AppId')
        self.transcode_template_group_id = map.get('TranscodeTemplateGroupId')
        self.transcode_template_list = []
        if map.get('TranscodeTemplateList') is not None:
            for k in map.get('TranscodeTemplateList'):
                temp_model = GetTranscodeTemplateGroupResponseTranscodeTemplateGroupTranscodeTemplateList()
                temp_model = temp_model.from_map(k)
                self.transcode_template_list.append(temp_model)
        else:
            self.transcode_template_list = None
        return self


class SetDefaultTranscodeTemplateGroupRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, transcode_template_group_id=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.transcode_template_group_id = transcode_template_group_id

    def validate(self):
        self.validate_required(self.transcode_template_group_id, 'transcode_template_group_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['TranscodeTemplateGroupId'] = self.transcode_template_group_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.transcode_template_group_id = map.get('TranscodeTemplateGroupId')
        return self


class SetDefaultTranscodeTemplateGroupResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class ListTranscodeTemplateGroupRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, page_size=None, page_no=None, app_id=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.page_size = page_size
        self.page_no = page_no
        self.app_id = app_id

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['PageSize'] = self.page_size
        result['PageNo'] = self.page_no
        result['AppId'] = self.app_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.page_size = map.get('PageSize')
        self.page_no = map.get('PageNo')
        self.app_id = map.get('AppId')
        return self


class ListTranscodeTemplateGroupResponse(TeaModel):
    def __init__(self, request_id=None, transcode_template_group_list=None):
        self.request_id = request_id
        self.transcode_template_group_list = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.transcode_template_group_list, 'transcode_template_group_list')
        if self.transcode_template_group_list:
            for k in self.transcode_template_group_list:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['TranscodeTemplateGroupList'] = []
        if self.transcode_template_group_list is not None:
            for k in self.transcode_template_group_list:
                result['TranscodeTemplateGroupList'].append(k.to_map() if k else None)
        else:
            result['TranscodeTemplateGroupList'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.transcode_template_group_list = []
        if map.get('TranscodeTemplateGroupList') is not None:
            for k in map.get('TranscodeTemplateGroupList'):
                temp_model = ListTranscodeTemplateGroupResponseTranscodeTemplateGroupList()
                temp_model = temp_model.from_map(k)
                self.transcode_template_group_list.append(temp_model)
        else:
            self.transcode_template_group_list = None
        return self


class ListTranscodeTemplateGroupResponseTranscodeTemplateGroupList(TeaModel):
    def __init__(self, creation_time=None, modify_time=None, name=None, is_default=None, locked=None, transcode_template_group_id=None, transcode_mode=None, app_id=None):
        self.creation_time = creation_time
        self.modify_time = modify_time
        self.name = name
        self.is_default = is_default
        self.locked = locked
        self.transcode_template_group_id = transcode_template_group_id
        self.transcode_mode = transcode_mode
        self.app_id = app_id

    def validate(self):
        self.validate_required(self.creation_time, 'creation_time')
        self.validate_required(self.modify_time, 'modify_time')
        self.validate_required(self.name, 'name')
        self.validate_required(self.is_default, 'is_default')
        self.validate_required(self.locked, 'locked')
        self.validate_required(self.transcode_template_group_id, 'transcode_template_group_id')
        self.validate_required(self.transcode_mode, 'transcode_mode')
        self.validate_required(self.app_id, 'app_id')

    def to_map(self):
        result = {}
        result['CreationTime'] = self.creation_time
        result['ModifyTime'] = self.modify_time
        result['Name'] = self.name
        result['IsDefault'] = self.is_default
        result['Locked'] = self.locked
        result['TranscodeTemplateGroupId'] = self.transcode_template_group_id
        result['TranscodeMode'] = self.transcode_mode
        result['AppId'] = self.app_id
        return result

    def from_map(self, map={}):
        self.creation_time = map.get('CreationTime')
        self.modify_time = map.get('ModifyTime')
        self.name = map.get('Name')
        self.is_default = map.get('IsDefault')
        self.locked = map.get('Locked')
        self.transcode_template_group_id = map.get('TranscodeTemplateGroupId')
        self.transcode_mode = map.get('TranscodeMode')
        self.app_id = map.get('AppId')
        return self


class GetAIMediaAuditJobRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, job_id=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.job_id = job_id

    def validate(self):
        self.validate_required(self.job_id, 'job_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['JobId'] = self.job_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.job_id = map.get('JobId')
        return self


class GetAIMediaAuditJobResponse(TeaModel):
    def __init__(self, request_id=None, media_audit_job=None):
        self.request_id = request_id
        self.media_audit_job = media_audit_job

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.media_audit_job, 'media_audit_job')
        if self.media_audit_job:
            self.media_audit_job.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.media_audit_job is not None:
            result['MediaAuditJob'] = self.media_audit_job.to_map()
        else:
            result['MediaAuditJob'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('MediaAuditJob') is not None:
            temp_model = GetAIMediaAuditJobResponseMediaAuditJob()
            self.media_audit_job = temp_model.from_map(map['MediaAuditJob'])
        else:
            self.media_audit_job = None
        return self


class GetAIMediaAuditJobResponseMediaAuditJobDataImageResultResult(TeaModel):
    def __init__(self, suggestion=None, label=None, score=None, scene=None):
        self.suggestion = suggestion
        self.label = label
        self.score = score
        self.scene = scene

    def validate(self):
        self.validate_required(self.suggestion, 'suggestion')
        self.validate_required(self.label, 'label')
        self.validate_required(self.score, 'score')
        self.validate_required(self.scene, 'scene')

    def to_map(self):
        result = {}
        result['Suggestion'] = self.suggestion
        result['Label'] = self.label
        result['Score'] = self.score
        result['Scene'] = self.scene
        return result

    def from_map(self, map={}):
        self.suggestion = map.get('Suggestion')
        self.label = map.get('Label')
        self.score = map.get('Score')
        self.scene = map.get('Scene')
        return self


class GetAIMediaAuditJobResponseMediaAuditJobDataImageResult(TeaModel):
    def __init__(self, suggestion=None, label=None, type=None, url=None, result=None):
        self.suggestion = suggestion
        self.label = label
        self.type = type
        self.url = url
        self.result = []

    def validate(self):
        self.validate_required(self.suggestion, 'suggestion')
        self.validate_required(self.label, 'label')
        self.validate_required(self.type, 'type')
        self.validate_required(self.url, 'url')
        self.validate_required(self.result, 'result')
        if self.result:
            for k in self.result:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Suggestion'] = self.suggestion
        result['Label'] = self.label
        result['Type'] = self.type
        result['Url'] = self.url
        result['Result'] = []
        if self.result is not None:
            for k in self.result:
                result['Result'].append(k.to_map() if k else None)
        else:
            result['Result'] = None
        return result

    def from_map(self, map={}):
        self.suggestion = map.get('Suggestion')
        self.label = map.get('Label')
        self.type = map.get('Type')
        self.url = map.get('Url')
        self.result = []
        if map.get('Result') is not None:
            for k in map.get('Result'):
                temp_model = GetAIMediaAuditJobResponseMediaAuditJobDataImageResultResult()
                temp_model = temp_model.from_map(k)
                self.result.append(temp_model)
        else:
            self.result = None
        return self


class GetAIMediaAuditJobResponseMediaAuditJobDataTextResult(TeaModel):
    def __init__(self, suggestion=None, label=None, score=None, scene=None, type=None, content=None):
        self.suggestion = suggestion
        self.label = label
        self.score = score
        self.scene = scene
        self.type = type
        self.content = content

    def validate(self):
        self.validate_required(self.suggestion, 'suggestion')
        self.validate_required(self.label, 'label')
        self.validate_required(self.score, 'score')
        self.validate_required(self.scene, 'scene')
        self.validate_required(self.type, 'type')
        self.validate_required(self.content, 'content')

    def to_map(self):
        result = {}
        result['Suggestion'] = self.suggestion
        result['Label'] = self.label
        result['Score'] = self.score
        result['Scene'] = self.scene
        result['Type'] = self.type
        result['Content'] = self.content
        return result

    def from_map(self, map={}):
        self.suggestion = map.get('Suggestion')
        self.label = map.get('Label')
        self.score = map.get('Score')
        self.scene = map.get('Scene')
        self.type = map.get('Type')
        self.content = map.get('Content')
        return self


class GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultTerrorismResultCounterList(TeaModel):
    def __init__(self, label=None, count=None):
        self.label = label
        self.count = count

    def validate(self):
        self.validate_required(self.label, 'label')
        self.validate_required(self.count, 'count')

    def to_map(self):
        result = {}
        result['Label'] = self.label
        result['Count'] = self.count
        return result

    def from_map(self, map={}):
        self.label = map.get('Label')
        self.count = map.get('Count')
        return self


class GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultTerrorismResultTopList(TeaModel):
    def __init__(self, label=None, score=None, timestamp=None, url=None):
        self.label = label
        self.score = score
        self.timestamp = timestamp
        self.url = url

    def validate(self):
        self.validate_required(self.label, 'label')
        self.validate_required(self.score, 'score')
        self.validate_required(self.timestamp, 'timestamp')
        self.validate_required(self.url, 'url')

    def to_map(self):
        result = {}
        result['Label'] = self.label
        result['Score'] = self.score
        result['Timestamp'] = self.timestamp
        result['Url'] = self.url
        return result

    def from_map(self, map={}):
        self.label = map.get('Label')
        self.score = map.get('Score')
        self.timestamp = map.get('Timestamp')
        self.url = map.get('Url')
        return self


class GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultTerrorismResult(TeaModel):
    def __init__(self, suggestion=None, label=None, max_score=None, average_score=None, counter_list=None, top_list=None):
        self.suggestion = suggestion
        self.label = label
        self.max_score = max_score
        self.average_score = average_score
        self.counter_list = []
        self.top_list = []

    def validate(self):
        self.validate_required(self.suggestion, 'suggestion')
        self.validate_required(self.label, 'label')
        self.validate_required(self.max_score, 'max_score')
        self.validate_required(self.average_score, 'average_score')
        self.validate_required(self.counter_list, 'counter_list')
        if self.counter_list:
            for k in self.counter_list:
                if k :
                    k.validate()
        self.validate_required(self.top_list, 'top_list')
        if self.top_list:
            for k in self.top_list:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Suggestion'] = self.suggestion
        result['Label'] = self.label
        result['MaxScore'] = self.max_score
        result['AverageScore'] = self.average_score
        result['CounterList'] = []
        if self.counter_list is not None:
            for k in self.counter_list:
                result['CounterList'].append(k.to_map() if k else None)
        else:
            result['CounterList'] = None
        result['TopList'] = []
        if self.top_list is not None:
            for k in self.top_list:
                result['TopList'].append(k.to_map() if k else None)
        else:
            result['TopList'] = None
        return result

    def from_map(self, map={}):
        self.suggestion = map.get('Suggestion')
        self.label = map.get('Label')
        self.max_score = map.get('MaxScore')
        self.average_score = map.get('AverageScore')
        self.counter_list = []
        if map.get('CounterList') is not None:
            for k in map.get('CounterList'):
                temp_model = GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultTerrorismResultCounterList()
                temp_model = temp_model.from_map(k)
                self.counter_list.append(temp_model)
        else:
            self.counter_list = None
        self.top_list = []
        if map.get('TopList') is not None:
            for k in map.get('TopList'):
                temp_model = GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultTerrorismResultTopList()
                temp_model = temp_model.from_map(k)
                self.top_list.append(temp_model)
        else:
            self.top_list = None
        return self


class GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultPornResultCounterList(TeaModel):
    def __init__(self, label=None, count=None):
        self.label = label
        self.count = count

    def validate(self):
        self.validate_required(self.label, 'label')
        self.validate_required(self.count, 'count')

    def to_map(self):
        result = {}
        result['Label'] = self.label
        result['Count'] = self.count
        return result

    def from_map(self, map={}):
        self.label = map.get('Label')
        self.count = map.get('Count')
        return self


class GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultPornResultTopList(TeaModel):
    def __init__(self, label=None, score=None, timestamp=None, url=None):
        self.label = label
        self.score = score
        self.timestamp = timestamp
        self.url = url

    def validate(self):
        self.validate_required(self.label, 'label')
        self.validate_required(self.score, 'score')
        self.validate_required(self.timestamp, 'timestamp')
        self.validate_required(self.url, 'url')

    def to_map(self):
        result = {}
        result['Label'] = self.label
        result['Score'] = self.score
        result['Timestamp'] = self.timestamp
        result['Url'] = self.url
        return result

    def from_map(self, map={}):
        self.label = map.get('Label')
        self.score = map.get('Score')
        self.timestamp = map.get('Timestamp')
        self.url = map.get('Url')
        return self


class GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultPornResult(TeaModel):
    def __init__(self, suggestion=None, label=None, max_score=None, average_score=None, counter_list=None, top_list=None):
        self.suggestion = suggestion
        self.label = label
        self.max_score = max_score
        self.average_score = average_score
        self.counter_list = []
        self.top_list = []

    def validate(self):
        self.validate_required(self.suggestion, 'suggestion')
        self.validate_required(self.label, 'label')
        self.validate_required(self.max_score, 'max_score')
        self.validate_required(self.average_score, 'average_score')
        self.validate_required(self.counter_list, 'counter_list')
        if self.counter_list:
            for k in self.counter_list:
                if k :
                    k.validate()
        self.validate_required(self.top_list, 'top_list')
        if self.top_list:
            for k in self.top_list:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Suggestion'] = self.suggestion
        result['Label'] = self.label
        result['MaxScore'] = self.max_score
        result['AverageScore'] = self.average_score
        result['CounterList'] = []
        if self.counter_list is not None:
            for k in self.counter_list:
                result['CounterList'].append(k.to_map() if k else None)
        else:
            result['CounterList'] = None
        result['TopList'] = []
        if self.top_list is not None:
            for k in self.top_list:
                result['TopList'].append(k.to_map() if k else None)
        else:
            result['TopList'] = None
        return result

    def from_map(self, map={}):
        self.suggestion = map.get('Suggestion')
        self.label = map.get('Label')
        self.max_score = map.get('MaxScore')
        self.average_score = map.get('AverageScore')
        self.counter_list = []
        if map.get('CounterList') is not None:
            for k in map.get('CounterList'):
                temp_model = GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultPornResultCounterList()
                temp_model = temp_model.from_map(k)
                self.counter_list.append(temp_model)
        else:
            self.counter_list = None
        self.top_list = []
        if map.get('TopList') is not None:
            for k in map.get('TopList'):
                temp_model = GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultPornResultTopList()
                temp_model = temp_model.from_map(k)
                self.top_list.append(temp_model)
        else:
            self.top_list = None
        return self


class GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultAdResultCounterList(TeaModel):
    def __init__(self, label=None, count=None):
        self.label = label
        self.count = count

    def validate(self):
        self.validate_required(self.label, 'label')
        self.validate_required(self.count, 'count')

    def to_map(self):
        result = {}
        result['Label'] = self.label
        result['Count'] = self.count
        return result

    def from_map(self, map={}):
        self.label = map.get('Label')
        self.count = map.get('Count')
        return self


class GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultAdResultTopList(TeaModel):
    def __init__(self, label=None, score=None, timestamp=None, url=None):
        self.label = label
        self.score = score
        self.timestamp = timestamp
        self.url = url

    def validate(self):
        self.validate_required(self.label, 'label')
        self.validate_required(self.score, 'score')
        self.validate_required(self.timestamp, 'timestamp')
        self.validate_required(self.url, 'url')

    def to_map(self):
        result = {}
        result['Label'] = self.label
        result['Score'] = self.score
        result['Timestamp'] = self.timestamp
        result['Url'] = self.url
        return result

    def from_map(self, map={}):
        self.label = map.get('Label')
        self.score = map.get('Score')
        self.timestamp = map.get('Timestamp')
        self.url = map.get('Url')
        return self


class GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultAdResult(TeaModel):
    def __init__(self, suggestion=None, label=None, max_score=None, average_score=None, counter_list=None, top_list=None):
        self.suggestion = suggestion
        self.label = label
        self.max_score = max_score
        self.average_score = average_score
        self.counter_list = []
        self.top_list = []

    def validate(self):
        self.validate_required(self.suggestion, 'suggestion')
        self.validate_required(self.label, 'label')
        self.validate_required(self.max_score, 'max_score')
        self.validate_required(self.average_score, 'average_score')
        self.validate_required(self.counter_list, 'counter_list')
        if self.counter_list:
            for k in self.counter_list:
                if k :
                    k.validate()
        self.validate_required(self.top_list, 'top_list')
        if self.top_list:
            for k in self.top_list:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Suggestion'] = self.suggestion
        result['Label'] = self.label
        result['MaxScore'] = self.max_score
        result['AverageScore'] = self.average_score
        result['CounterList'] = []
        if self.counter_list is not None:
            for k in self.counter_list:
                result['CounterList'].append(k.to_map() if k else None)
        else:
            result['CounterList'] = None
        result['TopList'] = []
        if self.top_list is not None:
            for k in self.top_list:
                result['TopList'].append(k.to_map() if k else None)
        else:
            result['TopList'] = None
        return result

    def from_map(self, map={}):
        self.suggestion = map.get('Suggestion')
        self.label = map.get('Label')
        self.max_score = map.get('MaxScore')
        self.average_score = map.get('AverageScore')
        self.counter_list = []
        if map.get('CounterList') is not None:
            for k in map.get('CounterList'):
                temp_model = GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultAdResultCounterList()
                temp_model = temp_model.from_map(k)
                self.counter_list.append(temp_model)
        else:
            self.counter_list = None
        self.top_list = []
        if map.get('TopList') is not None:
            for k in map.get('TopList'):
                temp_model = GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultAdResultTopList()
                temp_model = temp_model.from_map(k)
                self.top_list.append(temp_model)
        else:
            self.top_list = None
        return self


class GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLiveResultCounterList(TeaModel):
    def __init__(self, label=None, count=None):
        self.label = label
        self.count = count

    def validate(self):
        self.validate_required(self.label, 'label')
        self.validate_required(self.count, 'count')

    def to_map(self):
        result = {}
        result['Label'] = self.label
        result['Count'] = self.count
        return result

    def from_map(self, map={}):
        self.label = map.get('Label')
        self.count = map.get('Count')
        return self


class GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLiveResultTopList(TeaModel):
    def __init__(self, label=None, score=None, timestamp=None, url=None):
        self.label = label
        self.score = score
        self.timestamp = timestamp
        self.url = url

    def validate(self):
        self.validate_required(self.label, 'label')
        self.validate_required(self.score, 'score')
        self.validate_required(self.timestamp, 'timestamp')
        self.validate_required(self.url, 'url')

    def to_map(self):
        result = {}
        result['Label'] = self.label
        result['Score'] = self.score
        result['Timestamp'] = self.timestamp
        result['Url'] = self.url
        return result

    def from_map(self, map={}):
        self.label = map.get('Label')
        self.score = map.get('Score')
        self.timestamp = map.get('Timestamp')
        self.url = map.get('Url')
        return self


class GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLiveResult(TeaModel):
    def __init__(self, suggestion=None, label=None, max_score=None, average_score=None, counter_list=None, top_list=None):
        self.suggestion = suggestion
        self.label = label
        self.max_score = max_score
        self.average_score = average_score
        self.counter_list = []
        self.top_list = []

    def validate(self):
        self.validate_required(self.suggestion, 'suggestion')
        self.validate_required(self.label, 'label')
        self.validate_required(self.max_score, 'max_score')
        self.validate_required(self.average_score, 'average_score')
        self.validate_required(self.counter_list, 'counter_list')
        if self.counter_list:
            for k in self.counter_list:
                if k :
                    k.validate()
        self.validate_required(self.top_list, 'top_list')
        if self.top_list:
            for k in self.top_list:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Suggestion'] = self.suggestion
        result['Label'] = self.label
        result['MaxScore'] = self.max_score
        result['AverageScore'] = self.average_score
        result['CounterList'] = []
        if self.counter_list is not None:
            for k in self.counter_list:
                result['CounterList'].append(k.to_map() if k else None)
        else:
            result['CounterList'] = None
        result['TopList'] = []
        if self.top_list is not None:
            for k in self.top_list:
                result['TopList'].append(k.to_map() if k else None)
        else:
            result['TopList'] = None
        return result

    def from_map(self, map={}):
        self.suggestion = map.get('Suggestion')
        self.label = map.get('Label')
        self.max_score = map.get('MaxScore')
        self.average_score = map.get('AverageScore')
        self.counter_list = []
        if map.get('CounterList') is not None:
            for k in map.get('CounterList'):
                temp_model = GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLiveResultCounterList()
                temp_model = temp_model.from_map(k)
                self.counter_list.append(temp_model)
        else:
            self.counter_list = None
        self.top_list = []
        if map.get('TopList') is not None:
            for k in map.get('TopList'):
                temp_model = GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLiveResultTopList()
                temp_model = temp_model.from_map(k)
                self.top_list.append(temp_model)
        else:
            self.top_list = None
        return self


class GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLogoResultCounterList(TeaModel):
    def __init__(self, label=None, count=None):
        self.label = label
        self.count = count

    def validate(self):
        self.validate_required(self.label, 'label')
        self.validate_required(self.count, 'count')

    def to_map(self):
        result = {}
        result['Label'] = self.label
        result['Count'] = self.count
        return result

    def from_map(self, map={}):
        self.label = map.get('Label')
        self.count = map.get('Count')
        return self


class GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLogoResultTopList(TeaModel):
    def __init__(self, label=None, score=None, timestamp=None, url=None):
        self.label = label
        self.score = score
        self.timestamp = timestamp
        self.url = url

    def validate(self):
        self.validate_required(self.label, 'label')
        self.validate_required(self.score, 'score')
        self.validate_required(self.timestamp, 'timestamp')
        self.validate_required(self.url, 'url')

    def to_map(self):
        result = {}
        result['Label'] = self.label
        result['Score'] = self.score
        result['Timestamp'] = self.timestamp
        result['Url'] = self.url
        return result

    def from_map(self, map={}):
        self.label = map.get('Label')
        self.score = map.get('Score')
        self.timestamp = map.get('Timestamp')
        self.url = map.get('Url')
        return self


class GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLogoResult(TeaModel):
    def __init__(self, suggestion=None, label=None, max_score=None, average_score=None, counter_list=None, top_list=None):
        self.suggestion = suggestion
        self.label = label
        self.max_score = max_score
        self.average_score = average_score
        self.counter_list = []
        self.top_list = []

    def validate(self):
        self.validate_required(self.suggestion, 'suggestion')
        self.validate_required(self.label, 'label')
        self.validate_required(self.max_score, 'max_score')
        self.validate_required(self.average_score, 'average_score')
        self.validate_required(self.counter_list, 'counter_list')
        if self.counter_list:
            for k in self.counter_list:
                if k :
                    k.validate()
        self.validate_required(self.top_list, 'top_list')
        if self.top_list:
            for k in self.top_list:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Suggestion'] = self.suggestion
        result['Label'] = self.label
        result['MaxScore'] = self.max_score
        result['AverageScore'] = self.average_score
        result['CounterList'] = []
        if self.counter_list is not None:
            for k in self.counter_list:
                result['CounterList'].append(k.to_map() if k else None)
        else:
            result['CounterList'] = None
        result['TopList'] = []
        if self.top_list is not None:
            for k in self.top_list:
                result['TopList'].append(k.to_map() if k else None)
        else:
            result['TopList'] = None
        return result

    def from_map(self, map={}):
        self.suggestion = map.get('Suggestion')
        self.label = map.get('Label')
        self.max_score = map.get('MaxScore')
        self.average_score = map.get('AverageScore')
        self.counter_list = []
        if map.get('CounterList') is not None:
            for k in map.get('CounterList'):
                temp_model = GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLogoResultCounterList()
                temp_model = temp_model.from_map(k)
                self.counter_list.append(temp_model)
        else:
            self.counter_list = None
        self.top_list = []
        if map.get('TopList') is not None:
            for k in map.get('TopList'):
                temp_model = GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLogoResultTopList()
                temp_model = temp_model.from_map(k)
                self.top_list.append(temp_model)
        else:
            self.top_list = None
        return self


class GetAIMediaAuditJobResponseMediaAuditJobDataVideoResult(TeaModel):
    def __init__(self, suggestion=None, label=None, terrorism_result=None, porn_result=None, ad_result=None, live_result=None, logo_result=None):
        self.suggestion = suggestion
        self.label = label
        self.terrorism_result = terrorism_result
        self.porn_result = porn_result
        self.ad_result = ad_result
        self.live_result = live_result
        self.logo_result = logo_result

    def validate(self):
        self.validate_required(self.suggestion, 'suggestion')
        self.validate_required(self.label, 'label')
        self.validate_required(self.terrorism_result, 'terrorism_result')
        if self.terrorism_result:
            self.terrorism_result.validate()
        self.validate_required(self.porn_result, 'porn_result')
        if self.porn_result:
            self.porn_result.validate()
        self.validate_required(self.ad_result, 'ad_result')
        if self.ad_result:
            self.ad_result.validate()
        self.validate_required(self.live_result, 'live_result')
        if self.live_result:
            self.live_result.validate()
        self.validate_required(self.logo_result, 'logo_result')
        if self.logo_result:
            self.logo_result.validate()

    def to_map(self):
        result = {}
        result['Suggestion'] = self.suggestion
        result['Label'] = self.label
        if self.terrorism_result is not None:
            result['TerrorismResult'] = self.terrorism_result.to_map()
        else:
            result['TerrorismResult'] = None
        if self.porn_result is not None:
            result['PornResult'] = self.porn_result.to_map()
        else:
            result['PornResult'] = None
        if self.ad_result is not None:
            result['AdResult'] = self.ad_result.to_map()
        else:
            result['AdResult'] = None
        if self.live_result is not None:
            result['LiveResult'] = self.live_result.to_map()
        else:
            result['LiveResult'] = None
        if self.logo_result is not None:
            result['LogoResult'] = self.logo_result.to_map()
        else:
            result['LogoResult'] = None
        return result

    def from_map(self, map={}):
        self.suggestion = map.get('Suggestion')
        self.label = map.get('Label')
        if map.get('TerrorismResult') is not None:
            temp_model = GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultTerrorismResult()
            self.terrorism_result = temp_model.from_map(map['TerrorismResult'])
        else:
            self.terrorism_result = None
        if map.get('PornResult') is not None:
            temp_model = GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultPornResult()
            self.porn_result = temp_model.from_map(map['PornResult'])
        else:
            self.porn_result = None
        if map.get('AdResult') is not None:
            temp_model = GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultAdResult()
            self.ad_result = temp_model.from_map(map['AdResult'])
        else:
            self.ad_result = None
        if map.get('LiveResult') is not None:
            temp_model = GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLiveResult()
            self.live_result = temp_model.from_map(map['LiveResult'])
        else:
            self.live_result = None
        if map.get('LogoResult') is not None:
            temp_model = GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLogoResult()
            self.logo_result = temp_model.from_map(map['LogoResult'])
        else:
            self.logo_result = None
        return self


class GetAIMediaAuditJobResponseMediaAuditJobData(TeaModel):
    def __init__(self, suggestion=None, abnormal_modules=None, label=None, image_result=None, text_result=None, video_result=None):
        self.suggestion = suggestion
        self.abnormal_modules = abnormal_modules
        self.label = label
        self.image_result = []
        self.text_result = []
        self.video_result = video_result

    def validate(self):
        self.validate_required(self.suggestion, 'suggestion')
        self.validate_required(self.abnormal_modules, 'abnormal_modules')
        self.validate_required(self.label, 'label')
        self.validate_required(self.image_result, 'image_result')
        if self.image_result:
            for k in self.image_result:
                if k :
                    k.validate()
        self.validate_required(self.text_result, 'text_result')
        if self.text_result:
            for k in self.text_result:
                if k :
                    k.validate()
        self.validate_required(self.video_result, 'video_result')
        if self.video_result:
            self.video_result.validate()

    def to_map(self):
        result = {}
        result['Suggestion'] = self.suggestion
        result['AbnormalModules'] = self.abnormal_modules
        result['Label'] = self.label
        result['ImageResult'] = []
        if self.image_result is not None:
            for k in self.image_result:
                result['ImageResult'].append(k.to_map() if k else None)
        else:
            result['ImageResult'] = None
        result['TextResult'] = []
        if self.text_result is not None:
            for k in self.text_result:
                result['TextResult'].append(k.to_map() if k else None)
        else:
            result['TextResult'] = None
        if self.video_result is not None:
            result['VideoResult'] = self.video_result.to_map()
        else:
            result['VideoResult'] = None
        return result

    def from_map(self, map={}):
        self.suggestion = map.get('Suggestion')
        self.abnormal_modules = map.get('AbnormalModules')
        self.label = map.get('Label')
        self.image_result = []
        if map.get('ImageResult') is not None:
            for k in map.get('ImageResult'):
                temp_model = GetAIMediaAuditJobResponseMediaAuditJobDataImageResult()
                temp_model = temp_model.from_map(k)
                self.image_result.append(temp_model)
        else:
            self.image_result = None
        self.text_result = []
        if map.get('TextResult') is not None:
            for k in map.get('TextResult'):
                temp_model = GetAIMediaAuditJobResponseMediaAuditJobDataTextResult()
                temp_model = temp_model.from_map(k)
                self.text_result.append(temp_model)
        else:
            self.text_result = None
        if map.get('VideoResult') is not None:
            temp_model = GetAIMediaAuditJobResponseMediaAuditJobDataVideoResult()
            self.video_result = temp_model.from_map(map['VideoResult'])
        else:
            self.video_result = None
        return self


class GetAIMediaAuditJobResponseMediaAuditJob(TeaModel):
    def __init__(self, job_id=None, media_id=None, type=None, status=None, code=None, message=None, creation_time=None, complete_time=None, data=None):
        self.job_id = job_id
        self.media_id = media_id
        self.type = type
        self.status = status
        self.code = code
        self.message = message
        self.creation_time = creation_time
        self.complete_time = complete_time
        self.data = data

    def validate(self):
        self.validate_required(self.job_id, 'job_id')
        self.validate_required(self.media_id, 'media_id')
        self.validate_required(self.type, 'type')
        self.validate_required(self.status, 'status')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.creation_time, 'creation_time')
        self.validate_required(self.complete_time, 'complete_time')
        self.validate_required(self.data, 'data')
        if self.data:
            self.data.validate()

    def to_map(self):
        result = {}
        result['JobId'] = self.job_id
        result['MediaId'] = self.media_id
        result['Type'] = self.type
        result['Status'] = self.status
        result['Code'] = self.code
        result['Message'] = self.message
        result['CreationTime'] = self.creation_time
        result['CompleteTime'] = self.complete_time
        if self.data is not None:
            result['Data'] = self.data.to_map()
        else:
            result['Data'] = None
        return result

    def from_map(self, map={}):
        self.job_id = map.get('JobId')
        self.media_id = map.get('MediaId')
        self.type = map.get('Type')
        self.status = map.get('Status')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.creation_time = map.get('CreationTime')
        self.complete_time = map.get('CompleteTime')
        if map.get('Data') is not None:
            temp_model = GetAIMediaAuditJobResponseMediaAuditJobData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class SubmitAIMediaAuditJobRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, media_id=None, template_id=None, user_data=None, media_type=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.media_id = media_id
        self.template_id = template_id
        self.user_data = user_data
        self.media_type = media_type

    def validate(self):
        self.validate_required(self.media_id, 'media_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['MediaId'] = self.media_id
        result['TemplateId'] = self.template_id
        result['UserData'] = self.user_data
        result['MediaType'] = self.media_type
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.media_id = map.get('MediaId')
        self.template_id = map.get('TemplateId')
        self.user_data = map.get('UserData')
        self.media_type = map.get('MediaType')
        return self


class SubmitAIMediaAuditJobResponse(TeaModel):
    def __init__(self, request_id=None, media_id=None, job_id=None):
        self.request_id = request_id
        self.media_id = media_id
        self.job_id = job_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.media_id, 'media_id')
        self.validate_required(self.job_id, 'job_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['MediaId'] = self.media_id
        result['JobId'] = self.job_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.media_id = map.get('MediaId')
        self.job_id = map.get('JobId')
        return self


class GetMediaAuditResultRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, media_id=None, resource_real_owner_id=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.media_id = media_id
        self.resource_real_owner_id = resource_real_owner_id

    def validate(self):
        self.validate_required(self.media_id, 'media_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['MediaId'] = self.media_id
        result['ResourceRealOwnerId'] = self.resource_real_owner_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.media_id = map.get('MediaId')
        self.resource_real_owner_id = map.get('ResourceRealOwnerId')
        return self


class GetMediaAuditResultResponse(TeaModel):
    def __init__(self, request_id=None, media_audit_result=None):
        self.request_id = request_id
        self.media_audit_result = media_audit_result

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.media_audit_result, 'media_audit_result')
        if self.media_audit_result:
            self.media_audit_result.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.media_audit_result is not None:
            result['MediaAuditResult'] = self.media_audit_result.to_map()
        else:
            result['MediaAuditResult'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('MediaAuditResult') is not None:
            temp_model = GetMediaAuditResultResponseMediaAuditResult()
            self.media_audit_result = temp_model.from_map(map['MediaAuditResult'])
        else:
            self.media_audit_result = None
        return self


class GetMediaAuditResultResponseMediaAuditResultAudioResult(TeaModel):
    def __init__(self, label=None, scene=None, score=None, suggestion=None):
        self.label = label
        self.scene = scene
        self.score = score
        self.suggestion = suggestion

    def validate(self):
        self.validate_required(self.label, 'label')
        self.validate_required(self.scene, 'scene')
        self.validate_required(self.score, 'score')
        self.validate_required(self.suggestion, 'suggestion')

    def to_map(self):
        result = {}
        result['Label'] = self.label
        result['Scene'] = self.scene
        result['Score'] = self.score
        result['Suggestion'] = self.suggestion
        return result

    def from_map(self, map={}):
        self.label = map.get('Label')
        self.scene = map.get('Scene')
        self.score = map.get('Score')
        self.suggestion = map.get('Suggestion')
        return self


class GetMediaAuditResultResponseMediaAuditResultImageResultResult(TeaModel):
    def __init__(self, label=None, scene=None, score=None, suggestion=None):
        self.label = label
        self.scene = scene
        self.score = score
        self.suggestion = suggestion

    def validate(self):
        self.validate_required(self.label, 'label')
        self.validate_required(self.scene, 'scene')
        self.validate_required(self.score, 'score')
        self.validate_required(self.suggestion, 'suggestion')

    def to_map(self):
        result = {}
        result['Label'] = self.label
        result['Scene'] = self.scene
        result['Score'] = self.score
        result['Suggestion'] = self.suggestion
        return result

    def from_map(self, map={}):
        self.label = map.get('Label')
        self.scene = map.get('Scene')
        self.score = map.get('Score')
        self.suggestion = map.get('Suggestion')
        return self


class GetMediaAuditResultResponseMediaAuditResultImageResult(TeaModel):
    def __init__(self, label=None, suggestion=None, type=None, url=None, result=None):
        self.label = label
        self.suggestion = suggestion
        self.type = type
        self.url = url
        self.result = []

    def validate(self):
        self.validate_required(self.label, 'label')
        self.validate_required(self.suggestion, 'suggestion')
        self.validate_required(self.type, 'type')
        self.validate_required(self.url, 'url')
        self.validate_required(self.result, 'result')
        if self.result:
            for k in self.result:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Label'] = self.label
        result['Suggestion'] = self.suggestion
        result['Type'] = self.type
        result['Url'] = self.url
        result['Result'] = []
        if self.result is not None:
            for k in self.result:
                result['Result'].append(k.to_map() if k else None)
        else:
            result['Result'] = None
        return result

    def from_map(self, map={}):
        self.label = map.get('Label')
        self.suggestion = map.get('Suggestion')
        self.type = map.get('Type')
        self.url = map.get('Url')
        self.result = []
        if map.get('Result') is not None:
            for k in map.get('Result'):
                temp_model = GetMediaAuditResultResponseMediaAuditResultImageResultResult()
                temp_model = temp_model.from_map(k)
                self.result.append(temp_model)
        else:
            self.result = None
        return self


class GetMediaAuditResultResponseMediaAuditResultTextResult(TeaModel):
    def __init__(self, content=None, label=None, scene=None, score=None, suggestion=None, type=None):
        self.content = content
        self.label = label
        self.scene = scene
        self.score = score
        self.suggestion = suggestion
        self.type = type

    def validate(self):
        self.validate_required(self.content, 'content')
        self.validate_required(self.label, 'label')
        self.validate_required(self.scene, 'scene')
        self.validate_required(self.score, 'score')
        self.validate_required(self.suggestion, 'suggestion')
        self.validate_required(self.type, 'type')

    def to_map(self):
        result = {}
        result['Content'] = self.content
        result['Label'] = self.label
        result['Scene'] = self.scene
        result['Score'] = self.score
        result['Suggestion'] = self.suggestion
        result['Type'] = self.type
        return result

    def from_map(self, map={}):
        self.content = map.get('Content')
        self.label = map.get('Label')
        self.scene = map.get('Scene')
        self.score = map.get('Score')
        self.suggestion = map.get('Suggestion')
        self.type = map.get('Type')
        return self


class GetMediaAuditResultResponseMediaAuditResultVideoResultPornResultCounterList(TeaModel):
    def __init__(self, count=None, label=None):
        self.count = count
        self.label = label

    def validate(self):
        self.validate_required(self.count, 'count')
        self.validate_required(self.label, 'label')

    def to_map(self):
        result = {}
        result['Count'] = self.count
        result['Label'] = self.label
        return result

    def from_map(self, map={}):
        self.count = map.get('Count')
        self.label = map.get('Label')
        return self


class GetMediaAuditResultResponseMediaAuditResultVideoResultPornResultTopList(TeaModel):
    def __init__(self, label=None, score=None, timestamp=None, url=None):
        self.label = label
        self.score = score
        self.timestamp = timestamp
        self.url = url

    def validate(self):
        self.validate_required(self.label, 'label')
        self.validate_required(self.score, 'score')
        self.validate_required(self.timestamp, 'timestamp')
        self.validate_required(self.url, 'url')

    def to_map(self):
        result = {}
        result['Label'] = self.label
        result['Score'] = self.score
        result['Timestamp'] = self.timestamp
        result['Url'] = self.url
        return result

    def from_map(self, map={}):
        self.label = map.get('Label')
        self.score = map.get('Score')
        self.timestamp = map.get('Timestamp')
        self.url = map.get('Url')
        return self


class GetMediaAuditResultResponseMediaAuditResultVideoResultPornResult(TeaModel):
    def __init__(self, average_score=None, label=None, max_score=None, suggestion=None, counter_list=None, top_list=None):
        self.average_score = average_score
        self.label = label
        self.max_score = max_score
        self.suggestion = suggestion
        self.counter_list = []
        self.top_list = []

    def validate(self):
        self.validate_required(self.average_score, 'average_score')
        self.validate_required(self.label, 'label')
        self.validate_required(self.max_score, 'max_score')
        self.validate_required(self.suggestion, 'suggestion')
        self.validate_required(self.counter_list, 'counter_list')
        if self.counter_list:
            for k in self.counter_list:
                if k :
                    k.validate()
        self.validate_required(self.top_list, 'top_list')
        if self.top_list:
            for k in self.top_list:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['AverageScore'] = self.average_score
        result['Label'] = self.label
        result['MaxScore'] = self.max_score
        result['Suggestion'] = self.suggestion
        result['CounterList'] = []
        if self.counter_list is not None:
            for k in self.counter_list:
                result['CounterList'].append(k.to_map() if k else None)
        else:
            result['CounterList'] = None
        result['TopList'] = []
        if self.top_list is not None:
            for k in self.top_list:
                result['TopList'].append(k.to_map() if k else None)
        else:
            result['TopList'] = None
        return result

    def from_map(self, map={}):
        self.average_score = map.get('AverageScore')
        self.label = map.get('Label')
        self.max_score = map.get('MaxScore')
        self.suggestion = map.get('Suggestion')
        self.counter_list = []
        if map.get('CounterList') is not None:
            for k in map.get('CounterList'):
                temp_model = GetMediaAuditResultResponseMediaAuditResultVideoResultPornResultCounterList()
                temp_model = temp_model.from_map(k)
                self.counter_list.append(temp_model)
        else:
            self.counter_list = None
        self.top_list = []
        if map.get('TopList') is not None:
            for k in map.get('TopList'):
                temp_model = GetMediaAuditResultResponseMediaAuditResultVideoResultPornResultTopList()
                temp_model = temp_model.from_map(k)
                self.top_list.append(temp_model)
        else:
            self.top_list = None
        return self


class GetMediaAuditResultResponseMediaAuditResultVideoResultAdResultCounterList(TeaModel):
    def __init__(self, count=None, label=None):
        self.count = count
        self.label = label

    def validate(self):
        self.validate_required(self.count, 'count')
        self.validate_required(self.label, 'label')

    def to_map(self):
        result = {}
        result['Count'] = self.count
        result['Label'] = self.label
        return result

    def from_map(self, map={}):
        self.count = map.get('Count')
        self.label = map.get('Label')
        return self


class GetMediaAuditResultResponseMediaAuditResultVideoResultAdResultTopList(TeaModel):
    def __init__(self, label=None, score=None, timestamp=None, url=None):
        self.label = label
        self.score = score
        self.timestamp = timestamp
        self.url = url

    def validate(self):
        self.validate_required(self.label, 'label')
        self.validate_required(self.score, 'score')
        self.validate_required(self.timestamp, 'timestamp')
        self.validate_required(self.url, 'url')

    def to_map(self):
        result = {}
        result['Label'] = self.label
        result['Score'] = self.score
        result['Timestamp'] = self.timestamp
        result['Url'] = self.url
        return result

    def from_map(self, map={}):
        self.label = map.get('Label')
        self.score = map.get('Score')
        self.timestamp = map.get('Timestamp')
        self.url = map.get('Url')
        return self


class GetMediaAuditResultResponseMediaAuditResultVideoResultAdResult(TeaModel):
    def __init__(self, average_score=None, label=None, max_score=None, suggestion=None, counter_list=None, top_list=None):
        self.average_score = average_score
        self.label = label
        self.max_score = max_score
        self.suggestion = suggestion
        self.counter_list = []
        self.top_list = []

    def validate(self):
        self.validate_required(self.average_score, 'average_score')
        self.validate_required(self.label, 'label')
        self.validate_required(self.max_score, 'max_score')
        self.validate_required(self.suggestion, 'suggestion')
        self.validate_required(self.counter_list, 'counter_list')
        if self.counter_list:
            for k in self.counter_list:
                if k :
                    k.validate()
        self.validate_required(self.top_list, 'top_list')
        if self.top_list:
            for k in self.top_list:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['AverageScore'] = self.average_score
        result['Label'] = self.label
        result['MaxScore'] = self.max_score
        result['Suggestion'] = self.suggestion
        result['CounterList'] = []
        if self.counter_list is not None:
            for k in self.counter_list:
                result['CounterList'].append(k.to_map() if k else None)
        else:
            result['CounterList'] = None
        result['TopList'] = []
        if self.top_list is not None:
            for k in self.top_list:
                result['TopList'].append(k.to_map() if k else None)
        else:
            result['TopList'] = None
        return result

    def from_map(self, map={}):
        self.average_score = map.get('AverageScore')
        self.label = map.get('Label')
        self.max_score = map.get('MaxScore')
        self.suggestion = map.get('Suggestion')
        self.counter_list = []
        if map.get('CounterList') is not None:
            for k in map.get('CounterList'):
                temp_model = GetMediaAuditResultResponseMediaAuditResultVideoResultAdResultCounterList()
                temp_model = temp_model.from_map(k)
                self.counter_list.append(temp_model)
        else:
            self.counter_list = None
        self.top_list = []
        if map.get('TopList') is not None:
            for k in map.get('TopList'):
                temp_model = GetMediaAuditResultResponseMediaAuditResultVideoResultAdResultTopList()
                temp_model = temp_model.from_map(k)
                self.top_list.append(temp_model)
        else:
            self.top_list = None
        return self


class GetMediaAuditResultResponseMediaAuditResultVideoResultLogoResultCounterList(TeaModel):
    def __init__(self, count=None, label=None):
        self.count = count
        self.label = label

    def validate(self):
        self.validate_required(self.count, 'count')
        self.validate_required(self.label, 'label')

    def to_map(self):
        result = {}
        result['Count'] = self.count
        result['Label'] = self.label
        return result

    def from_map(self, map={}):
        self.count = map.get('Count')
        self.label = map.get('Label')
        return self


class GetMediaAuditResultResponseMediaAuditResultVideoResultLogoResultTopList(TeaModel):
    def __init__(self, label=None, score=None, timestamp=None, url=None):
        self.label = label
        self.score = score
        self.timestamp = timestamp
        self.url = url

    def validate(self):
        self.validate_required(self.label, 'label')
        self.validate_required(self.score, 'score')
        self.validate_required(self.timestamp, 'timestamp')
        self.validate_required(self.url, 'url')

    def to_map(self):
        result = {}
        result['Label'] = self.label
        result['Score'] = self.score
        result['Timestamp'] = self.timestamp
        result['Url'] = self.url
        return result

    def from_map(self, map={}):
        self.label = map.get('Label')
        self.score = map.get('Score')
        self.timestamp = map.get('Timestamp')
        self.url = map.get('Url')
        return self


class GetMediaAuditResultResponseMediaAuditResultVideoResultLogoResult(TeaModel):
    def __init__(self, average_score=None, label=None, max_score=None, suggestion=None, counter_list=None, top_list=None):
        self.average_score = average_score
        self.label = label
        self.max_score = max_score
        self.suggestion = suggestion
        self.counter_list = []
        self.top_list = []

    def validate(self):
        self.validate_required(self.average_score, 'average_score')
        self.validate_required(self.label, 'label')
        self.validate_required(self.max_score, 'max_score')
        self.validate_required(self.suggestion, 'suggestion')
        self.validate_required(self.counter_list, 'counter_list')
        if self.counter_list:
            for k in self.counter_list:
                if k :
                    k.validate()
        self.validate_required(self.top_list, 'top_list')
        if self.top_list:
            for k in self.top_list:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['AverageScore'] = self.average_score
        result['Label'] = self.label
        result['MaxScore'] = self.max_score
        result['Suggestion'] = self.suggestion
        result['CounterList'] = []
        if self.counter_list is not None:
            for k in self.counter_list:
                result['CounterList'].append(k.to_map() if k else None)
        else:
            result['CounterList'] = None
        result['TopList'] = []
        if self.top_list is not None:
            for k in self.top_list:
                result['TopList'].append(k.to_map() if k else None)
        else:
            result['TopList'] = None
        return result

    def from_map(self, map={}):
        self.average_score = map.get('AverageScore')
        self.label = map.get('Label')
        self.max_score = map.get('MaxScore')
        self.suggestion = map.get('Suggestion')
        self.counter_list = []
        if map.get('CounterList') is not None:
            for k in map.get('CounterList'):
                temp_model = GetMediaAuditResultResponseMediaAuditResultVideoResultLogoResultCounterList()
                temp_model = temp_model.from_map(k)
                self.counter_list.append(temp_model)
        else:
            self.counter_list = None
        self.top_list = []
        if map.get('TopList') is not None:
            for k in map.get('TopList'):
                temp_model = GetMediaAuditResultResponseMediaAuditResultVideoResultLogoResultTopList()
                temp_model = temp_model.from_map(k)
                self.top_list.append(temp_model)
        else:
            self.top_list = None
        return self


class GetMediaAuditResultResponseMediaAuditResultVideoResultLiveResultCounterList(TeaModel):
    def __init__(self, count=None, label=None):
        self.count = count
        self.label = label

    def validate(self):
        self.validate_required(self.count, 'count')
        self.validate_required(self.label, 'label')

    def to_map(self):
        result = {}
        result['Count'] = self.count
        result['Label'] = self.label
        return result

    def from_map(self, map={}):
        self.count = map.get('Count')
        self.label = map.get('Label')
        return self


class GetMediaAuditResultResponseMediaAuditResultVideoResultLiveResultTopList(TeaModel):
    def __init__(self, label=None, score=None, timestamp=None, url=None):
        self.label = label
        self.score = score
        self.timestamp = timestamp
        self.url = url

    def validate(self):
        self.validate_required(self.label, 'label')
        self.validate_required(self.score, 'score')
        self.validate_required(self.timestamp, 'timestamp')
        self.validate_required(self.url, 'url')

    def to_map(self):
        result = {}
        result['Label'] = self.label
        result['Score'] = self.score
        result['Timestamp'] = self.timestamp
        result['Url'] = self.url
        return result

    def from_map(self, map={}):
        self.label = map.get('Label')
        self.score = map.get('Score')
        self.timestamp = map.get('Timestamp')
        self.url = map.get('Url')
        return self


class GetMediaAuditResultResponseMediaAuditResultVideoResultLiveResult(TeaModel):
    def __init__(self, average_score=None, label=None, max_score=None, suggestion=None, counter_list=None, top_list=None):
        self.average_score = average_score
        self.label = label
        self.max_score = max_score
        self.suggestion = suggestion
        self.counter_list = []
        self.top_list = []

    def validate(self):
        self.validate_required(self.average_score, 'average_score')
        self.validate_required(self.label, 'label')
        self.validate_required(self.max_score, 'max_score')
        self.validate_required(self.suggestion, 'suggestion')
        self.validate_required(self.counter_list, 'counter_list')
        if self.counter_list:
            for k in self.counter_list:
                if k :
                    k.validate()
        self.validate_required(self.top_list, 'top_list')
        if self.top_list:
            for k in self.top_list:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['AverageScore'] = self.average_score
        result['Label'] = self.label
        result['MaxScore'] = self.max_score
        result['Suggestion'] = self.suggestion
        result['CounterList'] = []
        if self.counter_list is not None:
            for k in self.counter_list:
                result['CounterList'].append(k.to_map() if k else None)
        else:
            result['CounterList'] = None
        result['TopList'] = []
        if self.top_list is not None:
            for k in self.top_list:
                result['TopList'].append(k.to_map() if k else None)
        else:
            result['TopList'] = None
        return result

    def from_map(self, map={}):
        self.average_score = map.get('AverageScore')
        self.label = map.get('Label')
        self.max_score = map.get('MaxScore')
        self.suggestion = map.get('Suggestion')
        self.counter_list = []
        if map.get('CounterList') is not None:
            for k in map.get('CounterList'):
                temp_model = GetMediaAuditResultResponseMediaAuditResultVideoResultLiveResultCounterList()
                temp_model = temp_model.from_map(k)
                self.counter_list.append(temp_model)
        else:
            self.counter_list = None
        self.top_list = []
        if map.get('TopList') is not None:
            for k in map.get('TopList'):
                temp_model = GetMediaAuditResultResponseMediaAuditResultVideoResultLiveResultTopList()
                temp_model = temp_model.from_map(k)
                self.top_list.append(temp_model)
        else:
            self.top_list = None
        return self


class GetMediaAuditResultResponseMediaAuditResultVideoResultTerrorismResultCounterList(TeaModel):
    def __init__(self, count=None, label=None):
        self.count = count
        self.label = label

    def validate(self):
        self.validate_required(self.count, 'count')
        self.validate_required(self.label, 'label')

    def to_map(self):
        result = {}
        result['Count'] = self.count
        result['Label'] = self.label
        return result

    def from_map(self, map={}):
        self.count = map.get('Count')
        self.label = map.get('Label')
        return self


class GetMediaAuditResultResponseMediaAuditResultVideoResultTerrorismResultTopList(TeaModel):
    def __init__(self, label=None, score=None, timestamp=None, url=None):
        self.label = label
        self.score = score
        self.timestamp = timestamp
        self.url = url

    def validate(self):
        self.validate_required(self.label, 'label')
        self.validate_required(self.score, 'score')
        self.validate_required(self.timestamp, 'timestamp')
        self.validate_required(self.url, 'url')

    def to_map(self):
        result = {}
        result['Label'] = self.label
        result['Score'] = self.score
        result['Timestamp'] = self.timestamp
        result['Url'] = self.url
        return result

    def from_map(self, map={}):
        self.label = map.get('Label')
        self.score = map.get('Score')
        self.timestamp = map.get('Timestamp')
        self.url = map.get('Url')
        return self


class GetMediaAuditResultResponseMediaAuditResultVideoResultTerrorismResult(TeaModel):
    def __init__(self, average_score=None, label=None, max_score=None, suggestion=None, counter_list=None, top_list=None):
        self.average_score = average_score
        self.label = label
        self.max_score = max_score
        self.suggestion = suggestion
        self.counter_list = []
        self.top_list = []

    def validate(self):
        self.validate_required(self.average_score, 'average_score')
        self.validate_required(self.label, 'label')
        self.validate_required(self.max_score, 'max_score')
        self.validate_required(self.suggestion, 'suggestion')
        self.validate_required(self.counter_list, 'counter_list')
        if self.counter_list:
            for k in self.counter_list:
                if k :
                    k.validate()
        self.validate_required(self.top_list, 'top_list')
        if self.top_list:
            for k in self.top_list:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['AverageScore'] = self.average_score
        result['Label'] = self.label
        result['MaxScore'] = self.max_score
        result['Suggestion'] = self.suggestion
        result['CounterList'] = []
        if self.counter_list is not None:
            for k in self.counter_list:
                result['CounterList'].append(k.to_map() if k else None)
        else:
            result['CounterList'] = None
        result['TopList'] = []
        if self.top_list is not None:
            for k in self.top_list:
                result['TopList'].append(k.to_map() if k else None)
        else:
            result['TopList'] = None
        return result

    def from_map(self, map={}):
        self.average_score = map.get('AverageScore')
        self.label = map.get('Label')
        self.max_score = map.get('MaxScore')
        self.suggestion = map.get('Suggestion')
        self.counter_list = []
        if map.get('CounterList') is not None:
            for k in map.get('CounterList'):
                temp_model = GetMediaAuditResultResponseMediaAuditResultVideoResultTerrorismResultCounterList()
                temp_model = temp_model.from_map(k)
                self.counter_list.append(temp_model)
        else:
            self.counter_list = None
        self.top_list = []
        if map.get('TopList') is not None:
            for k in map.get('TopList'):
                temp_model = GetMediaAuditResultResponseMediaAuditResultVideoResultTerrorismResultTopList()
                temp_model = temp_model.from_map(k)
                self.top_list.append(temp_model)
        else:
            self.top_list = None
        return self


class GetMediaAuditResultResponseMediaAuditResultVideoResult(TeaModel):
    def __init__(self, label=None, suggestion=None, porn_result=None, ad_result=None, logo_result=None, live_result=None, terrorism_result=None):
        self.label = label
        self.suggestion = suggestion
        self.porn_result = porn_result
        self.ad_result = ad_result
        self.logo_result = logo_result
        self.live_result = live_result
        self.terrorism_result = terrorism_result

    def validate(self):
        self.validate_required(self.label, 'label')
        self.validate_required(self.suggestion, 'suggestion')
        self.validate_required(self.porn_result, 'porn_result')
        if self.porn_result:
            self.porn_result.validate()
        self.validate_required(self.ad_result, 'ad_result')
        if self.ad_result:
            self.ad_result.validate()
        self.validate_required(self.logo_result, 'logo_result')
        if self.logo_result:
            self.logo_result.validate()
        self.validate_required(self.live_result, 'live_result')
        if self.live_result:
            self.live_result.validate()
        self.validate_required(self.terrorism_result, 'terrorism_result')
        if self.terrorism_result:
            self.terrorism_result.validate()

    def to_map(self):
        result = {}
        result['Label'] = self.label
        result['Suggestion'] = self.suggestion
        if self.porn_result is not None:
            result['PornResult'] = self.porn_result.to_map()
        else:
            result['PornResult'] = None
        if self.ad_result is not None:
            result['AdResult'] = self.ad_result.to_map()
        else:
            result['AdResult'] = None
        if self.logo_result is not None:
            result['LogoResult'] = self.logo_result.to_map()
        else:
            result['LogoResult'] = None
        if self.live_result is not None:
            result['LiveResult'] = self.live_result.to_map()
        else:
            result['LiveResult'] = None
        if self.terrorism_result is not None:
            result['TerrorismResult'] = self.terrorism_result.to_map()
        else:
            result['TerrorismResult'] = None
        return result

    def from_map(self, map={}):
        self.label = map.get('Label')
        self.suggestion = map.get('Suggestion')
        if map.get('PornResult') is not None:
            temp_model = GetMediaAuditResultResponseMediaAuditResultVideoResultPornResult()
            self.porn_result = temp_model.from_map(map['PornResult'])
        else:
            self.porn_result = None
        if map.get('AdResult') is not None:
            temp_model = GetMediaAuditResultResponseMediaAuditResultVideoResultAdResult()
            self.ad_result = temp_model.from_map(map['AdResult'])
        else:
            self.ad_result = None
        if map.get('LogoResult') is not None:
            temp_model = GetMediaAuditResultResponseMediaAuditResultVideoResultLogoResult()
            self.logo_result = temp_model.from_map(map['LogoResult'])
        else:
            self.logo_result = None
        if map.get('LiveResult') is not None:
            temp_model = GetMediaAuditResultResponseMediaAuditResultVideoResultLiveResult()
            self.live_result = temp_model.from_map(map['LiveResult'])
        else:
            self.live_result = None
        if map.get('TerrorismResult') is not None:
            temp_model = GetMediaAuditResultResponseMediaAuditResultVideoResultTerrorismResult()
            self.terrorism_result = temp_model.from_map(map['TerrorismResult'])
        else:
            self.terrorism_result = None
        return self


class GetMediaAuditResultResponseMediaAuditResult(TeaModel):
    def __init__(self, abnormal_modules=None, label=None, suggestion=None, audio_result=None, image_result=None, text_result=None, video_result=None):
        self.abnormal_modules = abnormal_modules
        self.label = label
        self.suggestion = suggestion
        self.audio_result = []
        self.image_result = []
        self.text_result = []
        self.video_result = video_result

    def validate(self):
        self.validate_required(self.abnormal_modules, 'abnormal_modules')
        self.validate_required(self.label, 'label')
        self.validate_required(self.suggestion, 'suggestion')
        self.validate_required(self.audio_result, 'audio_result')
        if self.audio_result:
            for k in self.audio_result:
                if k :
                    k.validate()
        self.validate_required(self.image_result, 'image_result')
        if self.image_result:
            for k in self.image_result:
                if k :
                    k.validate()
        self.validate_required(self.text_result, 'text_result')
        if self.text_result:
            for k in self.text_result:
                if k :
                    k.validate()
        self.validate_required(self.video_result, 'video_result')
        if self.video_result:
            self.video_result.validate()

    def to_map(self):
        result = {}
        result['AbnormalModules'] = self.abnormal_modules
        result['Label'] = self.label
        result['Suggestion'] = self.suggestion
        result['AudioResult'] = []
        if self.audio_result is not None:
            for k in self.audio_result:
                result['AudioResult'].append(k.to_map() if k else None)
        else:
            result['AudioResult'] = None
        result['ImageResult'] = []
        if self.image_result is not None:
            for k in self.image_result:
                result['ImageResult'].append(k.to_map() if k else None)
        else:
            result['ImageResult'] = None
        result['TextResult'] = []
        if self.text_result is not None:
            for k in self.text_result:
                result['TextResult'].append(k.to_map() if k else None)
        else:
            result['TextResult'] = None
        if self.video_result is not None:
            result['VideoResult'] = self.video_result.to_map()
        else:
            result['VideoResult'] = None
        return result

    def from_map(self, map={}):
        self.abnormal_modules = map.get('AbnormalModules')
        self.label = map.get('Label')
        self.suggestion = map.get('Suggestion')
        self.audio_result = []
        if map.get('AudioResult') is not None:
            for k in map.get('AudioResult'):
                temp_model = GetMediaAuditResultResponseMediaAuditResultAudioResult()
                temp_model = temp_model.from_map(k)
                self.audio_result.append(temp_model)
        else:
            self.audio_result = None
        self.image_result = []
        if map.get('ImageResult') is not None:
            for k in map.get('ImageResult'):
                temp_model = GetMediaAuditResultResponseMediaAuditResultImageResult()
                temp_model = temp_model.from_map(k)
                self.image_result.append(temp_model)
        else:
            self.image_result = None
        self.text_result = []
        if map.get('TextResult') is not None:
            for k in map.get('TextResult'):
                temp_model = GetMediaAuditResultResponseMediaAuditResultTextResult()
                temp_model = temp_model.from_map(k)
                self.text_result.append(temp_model)
        else:
            self.text_result = None
        if map.get('VideoResult') is not None:
            temp_model = GetMediaAuditResultResponseMediaAuditResultVideoResult()
            self.video_result = temp_model.from_map(map['VideoResult'])
        else:
            self.video_result = None
        return self


class GetMediaAuditResultDetailRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, media_id=None, page_no=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.media_id = media_id
        self.page_no = page_no

    def validate(self):
        self.validate_required(self.media_id, 'media_id')
        self.validate_required(self.page_no, 'page_no')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['MediaId'] = self.media_id
        result['PageNo'] = self.page_no
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.media_id = map.get('MediaId')
        self.page_no = map.get('PageNo')
        return self


class GetMediaAuditResultDetailResponse(TeaModel):
    def __init__(self, request_id=None, media_audit_result_detail=None):
        self.request_id = request_id
        self.media_audit_result_detail = media_audit_result_detail

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.media_audit_result_detail, 'media_audit_result_detail')
        if self.media_audit_result_detail:
            self.media_audit_result_detail.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.media_audit_result_detail is not None:
            result['MediaAuditResultDetail'] = self.media_audit_result_detail.to_map()
        else:
            result['MediaAuditResultDetail'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('MediaAuditResultDetail') is not None:
            temp_model = GetMediaAuditResultDetailResponseMediaAuditResultDetail()
            self.media_audit_result_detail = temp_model.from_map(map['MediaAuditResultDetail'])
        else:
            self.media_audit_result_detail = None
        return self


class GetMediaAuditResultDetailResponseMediaAuditResultDetailList(TeaModel):
    def __init__(self, porn_label=None, porn_score=None, terrorism_label=None, terrorism_score=None, timestamp=None, url=None, ad_label=None, ad_score=None, live_label=None, live_score=None, logo_label=None, logo_score=None):
        self.porn_label = porn_label
        self.porn_score = porn_score
        self.terrorism_label = terrorism_label
        self.terrorism_score = terrorism_score
        self.timestamp = timestamp
        self.url = url
        self.ad_label = ad_label
        self.ad_score = ad_score
        self.live_label = live_label
        self.live_score = live_score
        self.logo_label = logo_label
        self.logo_score = logo_score

    def validate(self):
        self.validate_required(self.porn_label, 'porn_label')
        self.validate_required(self.porn_score, 'porn_score')
        self.validate_required(self.terrorism_label, 'terrorism_label')
        self.validate_required(self.terrorism_score, 'terrorism_score')
        self.validate_required(self.timestamp, 'timestamp')
        self.validate_required(self.url, 'url')
        self.validate_required(self.ad_label, 'ad_label')
        self.validate_required(self.ad_score, 'ad_score')
        self.validate_required(self.live_label, 'live_label')
        self.validate_required(self.live_score, 'live_score')
        self.validate_required(self.logo_label, 'logo_label')
        self.validate_required(self.logo_score, 'logo_score')

    def to_map(self):
        result = {}
        result['PornLabel'] = self.porn_label
        result['PornScore'] = self.porn_score
        result['TerrorismLabel'] = self.terrorism_label
        result['TerrorismScore'] = self.terrorism_score
        result['Timestamp'] = self.timestamp
        result['Url'] = self.url
        result['AdLabel'] = self.ad_label
        result['AdScore'] = self.ad_score
        result['LiveLabel'] = self.live_label
        result['LiveScore'] = self.live_score
        result['LogoLabel'] = self.logo_label
        result['LogoScore'] = self.logo_score
        return result

    def from_map(self, map={}):
        self.porn_label = map.get('PornLabel')
        self.porn_score = map.get('PornScore')
        self.terrorism_label = map.get('TerrorismLabel')
        self.terrorism_score = map.get('TerrorismScore')
        self.timestamp = map.get('Timestamp')
        self.url = map.get('Url')
        self.ad_label = map.get('AdLabel')
        self.ad_score = map.get('AdScore')
        self.live_label = map.get('LiveLabel')
        self.live_score = map.get('LiveScore')
        self.logo_label = map.get('LogoLabel')
        self.logo_score = map.get('LogoScore')
        return self


class GetMediaAuditResultDetailResponseMediaAuditResultDetail(TeaModel):
    def __init__(self, total=None, list_=None):
        self.total = total
        self.list_ = []

    def validate(self):
        self.validate_required(self.total, 'total')
        self.validate_required(self.list_, 'list_')
        if self.list_:
            for k in self.list_:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Total'] = self.total
        result['List'] = []
        if self.list_ is not None:
            for k in self.list_:
                result['List'].append(k.to_map() if k else None)
        else:
            result['List'] = None
        return result

    def from_map(self, map={}):
        self.total = map.get('Total')
        self.list_ = []
        if map.get('List') is not None:
            for k in map.get('List'):
                temp_model = GetMediaAuditResultDetailResponseMediaAuditResultDetailList()
                temp_model = temp_model.from_map(k)
                self.list_.append(temp_model)
        else:
            self.list_ = None
        return self


class GetMediaAuditResultTimelineRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, media_id=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.media_id = media_id

    def validate(self):
        self.validate_required(self.media_id, 'media_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['MediaId'] = self.media_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.media_id = map.get('MediaId')
        return self


class GetMediaAuditResultTimelineResponse(TeaModel):
    def __init__(self, request_id=None, media_audit_result_timeline=None):
        self.request_id = request_id
        self.media_audit_result_timeline = media_audit_result_timeline

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.media_audit_result_timeline, 'media_audit_result_timeline')
        if self.media_audit_result_timeline:
            self.media_audit_result_timeline.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.media_audit_result_timeline is not None:
            result['MediaAuditResultTimeline'] = self.media_audit_result_timeline.to_map()
        else:
            result['MediaAuditResultTimeline'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('MediaAuditResultTimeline') is not None:
            temp_model = GetMediaAuditResultTimelineResponseMediaAuditResultTimeline()
            self.media_audit_result_timeline = temp_model.from_map(map['MediaAuditResultTimeline'])
        else:
            self.media_audit_result_timeline = None
        return self


class GetMediaAuditResultTimelineResponseMediaAuditResultTimelinePorn(TeaModel):
    def __init__(self, label=None, score=None, timestamp=None):
        self.label = label
        self.score = score
        self.timestamp = timestamp

    def validate(self):
        self.validate_required(self.label, 'label')
        self.validate_required(self.score, 'score')
        self.validate_required(self.timestamp, 'timestamp')

    def to_map(self):
        result = {}
        result['Label'] = self.label
        result['Score'] = self.score
        result['Timestamp'] = self.timestamp
        return result

    def from_map(self, map={}):
        self.label = map.get('Label')
        self.score = map.get('Score')
        self.timestamp = map.get('Timestamp')
        return self


class GetMediaAuditResultTimelineResponseMediaAuditResultTimelineTerrorism(TeaModel):
    def __init__(self, label=None, score=None, timestamp=None):
        self.label = label
        self.score = score
        self.timestamp = timestamp

    def validate(self):
        self.validate_required(self.label, 'label')
        self.validate_required(self.score, 'score')
        self.validate_required(self.timestamp, 'timestamp')

    def to_map(self):
        result = {}
        result['Label'] = self.label
        result['Score'] = self.score
        result['Timestamp'] = self.timestamp
        return result

    def from_map(self, map={}):
        self.label = map.get('Label')
        self.score = map.get('Score')
        self.timestamp = map.get('Timestamp')
        return self


class GetMediaAuditResultTimelineResponseMediaAuditResultTimelineLogo(TeaModel):
    def __init__(self, label=None, score=None, timestamp=None):
        self.label = label
        self.score = score
        self.timestamp = timestamp

    def validate(self):
        self.validate_required(self.label, 'label')
        self.validate_required(self.score, 'score')
        self.validate_required(self.timestamp, 'timestamp')

    def to_map(self):
        result = {}
        result['Label'] = self.label
        result['Score'] = self.score
        result['Timestamp'] = self.timestamp
        return result

    def from_map(self, map={}):
        self.label = map.get('Label')
        self.score = map.get('Score')
        self.timestamp = map.get('Timestamp')
        return self


class GetMediaAuditResultTimelineResponseMediaAuditResultTimelineLive(TeaModel):
    def __init__(self, label=None, score=None, timestamp=None):
        self.label = label
        self.score = score
        self.timestamp = timestamp

    def validate(self):
        self.validate_required(self.label, 'label')
        self.validate_required(self.score, 'score')
        self.validate_required(self.timestamp, 'timestamp')

    def to_map(self):
        result = {}
        result['Label'] = self.label
        result['Score'] = self.score
        result['Timestamp'] = self.timestamp
        return result

    def from_map(self, map={}):
        self.label = map.get('Label')
        self.score = map.get('Score')
        self.timestamp = map.get('Timestamp')
        return self


class GetMediaAuditResultTimelineResponseMediaAuditResultTimelineAd(TeaModel):
    def __init__(self, label=None, score=None, timestamp=None):
        self.label = label
        self.score = score
        self.timestamp = timestamp

    def validate(self):
        self.validate_required(self.label, 'label')
        self.validate_required(self.score, 'score')
        self.validate_required(self.timestamp, 'timestamp')

    def to_map(self):
        result = {}
        result['Label'] = self.label
        result['Score'] = self.score
        result['Timestamp'] = self.timestamp
        return result

    def from_map(self, map={}):
        self.label = map.get('Label')
        self.score = map.get('Score')
        self.timestamp = map.get('Timestamp')
        return self


class GetMediaAuditResultTimelineResponseMediaAuditResultTimeline(TeaModel):
    def __init__(self, porn=None, terrorism=None, logo=None, live=None, ad=None):
        self.porn = []
        self.terrorism = []
        self.logo = []
        self.live = []
        self.ad = []

    def validate(self):
        self.validate_required(self.porn, 'porn')
        if self.porn:
            for k in self.porn:
                if k :
                    k.validate()
        self.validate_required(self.terrorism, 'terrorism')
        if self.terrorism:
            for k in self.terrorism:
                if k :
                    k.validate()
        self.validate_required(self.logo, 'logo')
        if self.logo:
            for k in self.logo:
                if k :
                    k.validate()
        self.validate_required(self.live, 'live')
        if self.live:
            for k in self.live:
                if k :
                    k.validate()
        self.validate_required(self.ad, 'ad')
        if self.ad:
            for k in self.ad:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Porn'] = []
        if self.porn is not None:
            for k in self.porn:
                result['Porn'].append(k.to_map() if k else None)
        else:
            result['Porn'] = None
        result['Terrorism'] = []
        if self.terrorism is not None:
            for k in self.terrorism:
                result['Terrorism'].append(k.to_map() if k else None)
        else:
            result['Terrorism'] = None
        result['Logo'] = []
        if self.logo is not None:
            for k in self.logo:
                result['Logo'].append(k.to_map() if k else None)
        else:
            result['Logo'] = None
        result['Live'] = []
        if self.live is not None:
            for k in self.live:
                result['Live'].append(k.to_map() if k else None)
        else:
            result['Live'] = None
        result['Ad'] = []
        if self.ad is not None:
            for k in self.ad:
                result['Ad'].append(k.to_map() if k else None)
        else:
            result['Ad'] = None
        return result

    def from_map(self, map={}):
        self.porn = []
        if map.get('Porn') is not None:
            for k in map.get('Porn'):
                temp_model = GetMediaAuditResultTimelineResponseMediaAuditResultTimelinePorn()
                temp_model = temp_model.from_map(k)
                self.porn.append(temp_model)
        else:
            self.porn = None
        self.terrorism = []
        if map.get('Terrorism') is not None:
            for k in map.get('Terrorism'):
                temp_model = GetMediaAuditResultTimelineResponseMediaAuditResultTimelineTerrorism()
                temp_model = temp_model.from_map(k)
                self.terrorism.append(temp_model)
        else:
            self.terrorism = None
        self.logo = []
        if map.get('Logo') is not None:
            for k in map.get('Logo'):
                temp_model = GetMediaAuditResultTimelineResponseMediaAuditResultTimelineLogo()
                temp_model = temp_model.from_map(k)
                self.logo.append(temp_model)
        else:
            self.logo = None
        self.live = []
        if map.get('Live') is not None:
            for k in map.get('Live'):
                temp_model = GetMediaAuditResultTimelineResponseMediaAuditResultTimelineLive()
                temp_model = temp_model.from_map(k)
                self.live.append(temp_model)
        else:
            self.live = None
        self.ad = []
        if map.get('Ad') is not None:
            for k in map.get('Ad'):
                temp_model = GetMediaAuditResultTimelineResponseMediaAuditResultTimelineAd()
                temp_model = temp_model.from_map(k)
                self.ad.append(temp_model)
        else:
            self.ad = None
        return self


class AddAITemplateRequest(TeaModel):
    def __init__(self, owner_id=None, resource_owner_account=None, resource_owner_id=None, template_name=None, template_type=None, template_config=None):
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.template_name = template_name
        self.template_type = template_type
        self.template_config = template_config

    def validate(self):
        self.validate_required(self.template_name, 'template_name')
        self.validate_required(self.template_type, 'template_type')
        self.validate_required(self.template_config, 'template_config')

    def to_map(self):
        result = {}
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['TemplateName'] = self.template_name
        result['TemplateType'] = self.template_type
        result['TemplateConfig'] = self.template_config
        return result

    def from_map(self, map={}):
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.template_name = map.get('TemplateName')
        self.template_type = map.get('TemplateType')
        self.template_config = map.get('TemplateConfig')
        return self


class AddAITemplateResponse(TeaModel):
    def __init__(self, request_id=None, template_id=None):
        self.request_id = request_id
        self.template_id = template_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.template_id, 'template_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['TemplateId'] = self.template_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.template_id = map.get('TemplateId')
        return self


class DeleteAITemplateRequest(TeaModel):
    def __init__(self, owner_id=None, resource_owner_account=None, resource_owner_id=None, template_id=None):
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.template_id = template_id

    def validate(self):
        self.validate_required(self.template_id, 'template_id')

    def to_map(self):
        result = {}
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['TemplateId'] = self.template_id
        return result

    def from_map(self, map={}):
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.template_id = map.get('TemplateId')
        return self


class DeleteAITemplateResponse(TeaModel):
    def __init__(self, request_id=None, template_id=None):
        self.request_id = request_id
        self.template_id = template_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.template_id, 'template_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['TemplateId'] = self.template_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.template_id = map.get('TemplateId')
        return self


class UpdateAITemplateRequest(TeaModel):
    def __init__(self, owner_id=None, resource_owner_account=None, resource_owner_id=None, template_id=None, template_name=None, template_config=None):
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.template_id = template_id
        self.template_name = template_name
        self.template_config = template_config

    def validate(self):
        self.validate_required(self.template_id, 'template_id')
        self.validate_required(self.template_name, 'template_name')
        self.validate_required(self.template_config, 'template_config')

    def to_map(self):
        result = {}
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['TemplateId'] = self.template_id
        result['TemplateName'] = self.template_name
        result['TemplateConfig'] = self.template_config
        return result

    def from_map(self, map={}):
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.template_id = map.get('TemplateId')
        self.template_name = map.get('TemplateName')
        self.template_config = map.get('TemplateConfig')
        return self


class UpdateAITemplateResponse(TeaModel):
    def __init__(self, request_id=None, template_id=None):
        self.request_id = request_id
        self.template_id = template_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.template_id, 'template_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['TemplateId'] = self.template_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.template_id = map.get('TemplateId')
        return self


class GetAITemplateRequest(TeaModel):
    def __init__(self, owner_id=None, resource_owner_account=None, resource_owner_id=None, template_id=None):
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.template_id = template_id

    def validate(self):
        self.validate_required(self.template_id, 'template_id')

    def to_map(self):
        result = {}
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['TemplateId'] = self.template_id
        return result

    def from_map(self, map={}):
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.template_id = map.get('TemplateId')
        return self


class GetAITemplateResponse(TeaModel):
    def __init__(self, request_id=None, template_info=None):
        self.request_id = request_id
        self.template_info = template_info

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.template_info, 'template_info')
        if self.template_info:
            self.template_info.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.template_info is not None:
            result['TemplateInfo'] = self.template_info.to_map()
        else:
            result['TemplateInfo'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('TemplateInfo') is not None:
            temp_model = GetAITemplateResponseTemplateInfo()
            self.template_info = temp_model.from_map(map['TemplateInfo'])
        else:
            self.template_info = None
        return self


class GetAITemplateResponseTemplateInfo(TeaModel):
    def __init__(self, template_id=None, template_type=None, template_name=None, template_config=None, source=None, is_default=None, creation_time=None, modify_time=None):
        self.template_id = template_id
        self.template_type = template_type
        self.template_name = template_name
        self.template_config = template_config
        self.source = source
        self.is_default = is_default
        self.creation_time = creation_time
        self.modify_time = modify_time

    def validate(self):
        self.validate_required(self.template_id, 'template_id')
        self.validate_required(self.template_type, 'template_type')
        self.validate_required(self.template_name, 'template_name')
        self.validate_required(self.template_config, 'template_config')
        self.validate_required(self.source, 'source')
        self.validate_required(self.is_default, 'is_default')
        self.validate_required(self.creation_time, 'creation_time')
        self.validate_required(self.modify_time, 'modify_time')

    def to_map(self):
        result = {}
        result['TemplateId'] = self.template_id
        result['TemplateType'] = self.template_type
        result['TemplateName'] = self.template_name
        result['TemplateConfig'] = self.template_config
        result['Source'] = self.source
        result['IsDefault'] = self.is_default
        result['CreationTime'] = self.creation_time
        result['ModifyTime'] = self.modify_time
        return result

    def from_map(self, map={}):
        self.template_id = map.get('TemplateId')
        self.template_type = map.get('TemplateType')
        self.template_name = map.get('TemplateName')
        self.template_config = map.get('TemplateConfig')
        self.source = map.get('Source')
        self.is_default = map.get('IsDefault')
        self.creation_time = map.get('CreationTime')
        self.modify_time = map.get('ModifyTime')
        return self


class ListAITemplateRequest(TeaModel):
    def __init__(self, owner_id=None, resource_owner_account=None, resource_owner_id=None, template_type=None):
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.template_type = template_type

    def validate(self):
        self.validate_required(self.template_type, 'template_type')

    def to_map(self):
        result = {}
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['TemplateType'] = self.template_type
        return result

    def from_map(self, map={}):
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.template_type = map.get('TemplateType')
        return self


class ListAITemplateResponse(TeaModel):
    def __init__(self, request_id=None, template_info_list=None):
        self.request_id = request_id
        self.template_info_list = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.template_info_list, 'template_info_list')
        if self.template_info_list:
            for k in self.template_info_list:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['TemplateInfoList'] = []
        if self.template_info_list is not None:
            for k in self.template_info_list:
                result['TemplateInfoList'].append(k.to_map() if k else None)
        else:
            result['TemplateInfoList'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.template_info_list = []
        if map.get('TemplateInfoList') is not None:
            for k in map.get('TemplateInfoList'):
                temp_model = ListAITemplateResponseTemplateInfoList()
                temp_model = temp_model.from_map(k)
                self.template_info_list.append(temp_model)
        else:
            self.template_info_list = None
        return self


class ListAITemplateResponseTemplateInfoList(TeaModel):
    def __init__(self, template_id=None, template_type=None, template_name=None, template_config=None, source=None, is_default=None, creation_time=None, modify_time=None):
        self.template_id = template_id
        self.template_type = template_type
        self.template_name = template_name
        self.template_config = template_config
        self.source = source
        self.is_default = is_default
        self.creation_time = creation_time
        self.modify_time = modify_time

    def validate(self):
        self.validate_required(self.template_id, 'template_id')
        self.validate_required(self.template_type, 'template_type')
        self.validate_required(self.template_name, 'template_name')
        self.validate_required(self.template_config, 'template_config')
        self.validate_required(self.source, 'source')
        self.validate_required(self.is_default, 'is_default')
        self.validate_required(self.creation_time, 'creation_time')
        self.validate_required(self.modify_time, 'modify_time')

    def to_map(self):
        result = {}
        result['TemplateId'] = self.template_id
        result['TemplateType'] = self.template_type
        result['TemplateName'] = self.template_name
        result['TemplateConfig'] = self.template_config
        result['Source'] = self.source
        result['IsDefault'] = self.is_default
        result['CreationTime'] = self.creation_time
        result['ModifyTime'] = self.modify_time
        return result

    def from_map(self, map={}):
        self.template_id = map.get('TemplateId')
        self.template_type = map.get('TemplateType')
        self.template_name = map.get('TemplateName')
        self.template_config = map.get('TemplateConfig')
        self.source = map.get('Source')
        self.is_default = map.get('IsDefault')
        self.creation_time = map.get('CreationTime')
        self.modify_time = map.get('ModifyTime')
        return self


class GetDefaultAITemplateRequest(TeaModel):
    def __init__(self, owner_id=None, resource_owner_account=None, resource_owner_id=None, template_type=None):
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.template_type = template_type

    def validate(self):
        self.validate_required(self.template_type, 'template_type')

    def to_map(self):
        result = {}
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['TemplateType'] = self.template_type
        return result

    def from_map(self, map={}):
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.template_type = map.get('TemplateType')
        return self


class GetDefaultAITemplateResponse(TeaModel):
    def __init__(self, request_id=None, template_info=None):
        self.request_id = request_id
        self.template_info = template_info

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.template_info, 'template_info')
        if self.template_info:
            self.template_info.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.template_info is not None:
            result['TemplateInfo'] = self.template_info.to_map()
        else:
            result['TemplateInfo'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('TemplateInfo') is not None:
            temp_model = GetDefaultAITemplateResponseTemplateInfo()
            self.template_info = temp_model.from_map(map['TemplateInfo'])
        else:
            self.template_info = None
        return self


class GetDefaultAITemplateResponseTemplateInfo(TeaModel):
    def __init__(self, template_id=None, template_type=None, template_name=None, template_config=None, source=None, is_default=None, creation_time=None, modify_time=None):
        self.template_id = template_id
        self.template_type = template_type
        self.template_name = template_name
        self.template_config = template_config
        self.source = source
        self.is_default = is_default
        self.creation_time = creation_time
        self.modify_time = modify_time

    def validate(self):
        self.validate_required(self.template_id, 'template_id')
        self.validate_required(self.template_type, 'template_type')
        self.validate_required(self.template_name, 'template_name')
        self.validate_required(self.template_config, 'template_config')
        self.validate_required(self.source, 'source')
        self.validate_required(self.is_default, 'is_default')
        self.validate_required(self.creation_time, 'creation_time')
        self.validate_required(self.modify_time, 'modify_time')

    def to_map(self):
        result = {}
        result['TemplateId'] = self.template_id
        result['TemplateType'] = self.template_type
        result['TemplateName'] = self.template_name
        result['TemplateConfig'] = self.template_config
        result['Source'] = self.source
        result['IsDefault'] = self.is_default
        result['CreationTime'] = self.creation_time
        result['ModifyTime'] = self.modify_time
        return result

    def from_map(self, map={}):
        self.template_id = map.get('TemplateId')
        self.template_type = map.get('TemplateType')
        self.template_name = map.get('TemplateName')
        self.template_config = map.get('TemplateConfig')
        self.source = map.get('Source')
        self.is_default = map.get('IsDefault')
        self.creation_time = map.get('CreationTime')
        self.modify_time = map.get('ModifyTime')
        return self


class SetDefaultAITemplateRequest(TeaModel):
    def __init__(self, owner_id=None, resource_owner_account=None, resource_owner_id=None, template_id=None):
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.template_id = template_id

    def validate(self):
        self.validate_required(self.template_id, 'template_id')

    def to_map(self):
        result = {}
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['TemplateId'] = self.template_id
        return result

    def from_map(self, map={}):
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.template_id = map.get('TemplateId')
        return self


class SetDefaultAITemplateResponse(TeaModel):
    def __init__(self, request_id=None, template_id=None):
        self.request_id = request_id
        self.template_id = template_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.template_id, 'template_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['TemplateId'] = self.template_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.template_id = map.get('TemplateId')
        return self


class DescribeVodDomainLogRequest(TeaModel):
    def __init__(self, owner_id=None, domain_name=None, page_size=None, page_number=None, start_time=None, end_time=None):
        self.owner_id = owner_id
        self.domain_name = domain_name
        self.page_size = page_size
        self.page_number = page_number
        self.start_time = start_time
        self.end_time = end_time

    def validate(self):
        self.validate_required(self.domain_name, 'domain_name')

    def to_map(self):
        result = {}
        result['OwnerId'] = self.owner_id
        result['DomainName'] = self.domain_name
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        return result

    def from_map(self, map={}):
        self.owner_id = map.get('OwnerId')
        self.domain_name = map.get('DomainName')
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        return self


class DescribeVodDomainLogResponse(TeaModel):
    def __init__(self, request_id=None, domain_log_details=None):
        self.request_id = request_id
        self.domain_log_details = domain_log_details

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.domain_log_details, 'domain_log_details')
        if self.domain_log_details:
            self.domain_log_details.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.domain_log_details is not None:
            result['DomainLogDetails'] = self.domain_log_details.to_map()
        else:
            result['DomainLogDetails'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('DomainLogDetails') is not None:
            temp_model = DescribeVodDomainLogResponseDomainLogDetails()
            self.domain_log_details = temp_model.from_map(map['DomainLogDetails'])
        else:
            self.domain_log_details = None
        return self


class DescribeVodDomainLogResponseDomainLogDetailsDomainLogDetailLogInfosLogInfoDetail(TeaModel):
    def __init__(self, log_name=None, log_path=None, log_size=None, start_time=None, end_time=None):
        self.log_name = log_name
        self.log_path = log_path
        self.log_size = log_size
        self.start_time = start_time
        self.end_time = end_time

    def validate(self):
        self.validate_required(self.log_name, 'log_name')
        self.validate_required(self.log_path, 'log_path')
        self.validate_required(self.log_size, 'log_size')
        self.validate_required(self.start_time, 'start_time')
        self.validate_required(self.end_time, 'end_time')

    def to_map(self):
        result = {}
        result['LogName'] = self.log_name
        result['LogPath'] = self.log_path
        result['LogSize'] = self.log_size
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        return result

    def from_map(self, map={}):
        self.log_name = map.get('LogName')
        self.log_path = map.get('LogPath')
        self.log_size = map.get('LogSize')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        return self


class DescribeVodDomainLogResponseDomainLogDetailsDomainLogDetailLogInfos(TeaModel):
    def __init__(self, log_info_detail=None):
        self.log_info_detail = []

    def validate(self):
        self.validate_required(self.log_info_detail, 'log_info_detail')
        if self.log_info_detail:
            for k in self.log_info_detail:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['LogInfoDetail'] = []
        if self.log_info_detail is not None:
            for k in self.log_info_detail:
                result['LogInfoDetail'].append(k.to_map() if k else None)
        else:
            result['LogInfoDetail'] = None
        return result

    def from_map(self, map={}):
        self.log_info_detail = []
        if map.get('LogInfoDetail') is not None:
            for k in map.get('LogInfoDetail'):
                temp_model = DescribeVodDomainLogResponseDomainLogDetailsDomainLogDetailLogInfosLogInfoDetail()
                temp_model = temp_model.from_map(k)
                self.log_info_detail.append(temp_model)
        else:
            self.log_info_detail = None
        return self


class DescribeVodDomainLogResponseDomainLogDetailsDomainLogDetailPageInfos(TeaModel):
    def __init__(self, page_number=None, page_size=None, total=None):
        self.page_number = page_number
        self.page_size = page_size
        self.total = total

    def validate(self):
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.total, 'total')

    def to_map(self):
        result = {}
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        result['Total'] = self.total
        return result

    def from_map(self, map={}):
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        self.total = map.get('Total')
        return self


class DescribeVodDomainLogResponseDomainLogDetailsDomainLogDetail(TeaModel):
    def __init__(self, domain_name=None, log_count=None, log_infos=None, page_infos=None):
        self.domain_name = domain_name
        self.log_count = log_count
        self.log_infos = log_infos
        self.page_infos = page_infos

    def validate(self):
        self.validate_required(self.domain_name, 'domain_name')
        self.validate_required(self.log_count, 'log_count')
        self.validate_required(self.log_infos, 'log_infos')
        if self.log_infos:
            self.log_infos.validate()
        self.validate_required(self.page_infos, 'page_infos')
        if self.page_infos:
            self.page_infos.validate()

    def to_map(self):
        result = {}
        result['DomainName'] = self.domain_name
        result['LogCount'] = self.log_count
        if self.log_infos is not None:
            result['LogInfos'] = self.log_infos.to_map()
        else:
            result['LogInfos'] = None
        if self.page_infos is not None:
            result['PageInfos'] = self.page_infos.to_map()
        else:
            result['PageInfos'] = None
        return result

    def from_map(self, map={}):
        self.domain_name = map.get('DomainName')
        self.log_count = map.get('LogCount')
        if map.get('LogInfos') is not None:
            temp_model = DescribeVodDomainLogResponseDomainLogDetailsDomainLogDetailLogInfos()
            self.log_infos = temp_model.from_map(map['LogInfos'])
        else:
            self.log_infos = None
        if map.get('PageInfos') is not None:
            temp_model = DescribeVodDomainLogResponseDomainLogDetailsDomainLogDetailPageInfos()
            self.page_infos = temp_model.from_map(map['PageInfos'])
        else:
            self.page_infos = None
        return self


class DescribeVodDomainLogResponseDomainLogDetails(TeaModel):
    def __init__(self, domain_log_detail=None):
        self.domain_log_detail = []

    def validate(self):
        self.validate_required(self.domain_log_detail, 'domain_log_detail')
        if self.domain_log_detail:
            for k in self.domain_log_detail:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['DomainLogDetail'] = []
        if self.domain_log_detail is not None:
            for k in self.domain_log_detail:
                result['DomainLogDetail'].append(k.to_map() if k else None)
        else:
            result['DomainLogDetail'] = None
        return result

    def from_map(self, map={}):
        self.domain_log_detail = []
        if map.get('DomainLogDetail') is not None:
            for k in map.get('DomainLogDetail'):
                temp_model = DescribeVodDomainLogResponseDomainLogDetailsDomainLogDetail()
                temp_model = temp_model.from_map(k)
                self.domain_log_detail.append(temp_model)
        else:
            self.domain_log_detail = None
        return self


class DescribeVodDomainCertificateInfoRequest(TeaModel):
    def __init__(self, owner_id=None, domain_name=None):
        self.owner_id = owner_id
        self.domain_name = domain_name

    def validate(self):
        self.validate_required(self.domain_name, 'domain_name')

    def to_map(self):
        result = {}
        result['OwnerId'] = self.owner_id
        result['DomainName'] = self.domain_name
        return result

    def from_map(self, map={}):
        self.owner_id = map.get('OwnerId')
        self.domain_name = map.get('DomainName')
        return self


class DescribeVodDomainCertificateInfoResponse(TeaModel):
    def __init__(self, request_id=None, cert_infos=None):
        self.request_id = request_id
        self.cert_infos = cert_infos

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.cert_infos, 'cert_infos')
        if self.cert_infos:
            self.cert_infos.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.cert_infos is not None:
            result['CertInfos'] = self.cert_infos.to_map()
        else:
            result['CertInfos'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('CertInfos') is not None:
            temp_model = DescribeVodDomainCertificateInfoResponseCertInfos()
            self.cert_infos = temp_model.from_map(map['CertInfos'])
        else:
            self.cert_infos = None
        return self


class DescribeVodDomainCertificateInfoResponseCertInfosCertInfo(TeaModel):
    def __init__(self, domain_name=None, cert_name=None, cert_domain_name=None, cert_expire_time=None, cert_life=None, cert_org=None, cert_type=None, server_certificate_status=None, status=None):
        self.domain_name = domain_name
        self.cert_name = cert_name
        self.cert_domain_name = cert_domain_name
        self.cert_expire_time = cert_expire_time
        self.cert_life = cert_life
        self.cert_org = cert_org
        self.cert_type = cert_type
        self.server_certificate_status = server_certificate_status
        self.status = status

    def validate(self):
        self.validate_required(self.domain_name, 'domain_name')
        self.validate_required(self.cert_name, 'cert_name')
        self.validate_required(self.cert_domain_name, 'cert_domain_name')
        self.validate_required(self.cert_expire_time, 'cert_expire_time')
        self.validate_required(self.cert_life, 'cert_life')
        self.validate_required(self.cert_org, 'cert_org')
        self.validate_required(self.cert_type, 'cert_type')
        self.validate_required(self.server_certificate_status, 'server_certificate_status')
        self.validate_required(self.status, 'status')

    def to_map(self):
        result = {}
        result['DomainName'] = self.domain_name
        result['CertName'] = self.cert_name
        result['CertDomainName'] = self.cert_domain_name
        result['CertExpireTime'] = self.cert_expire_time
        result['CertLife'] = self.cert_life
        result['CertOrg'] = self.cert_org
        result['CertType'] = self.cert_type
        result['ServerCertificateStatus'] = self.server_certificate_status
        result['Status'] = self.status
        return result

    def from_map(self, map={}):
        self.domain_name = map.get('DomainName')
        self.cert_name = map.get('CertName')
        self.cert_domain_name = map.get('CertDomainName')
        self.cert_expire_time = map.get('CertExpireTime')
        self.cert_life = map.get('CertLife')
        self.cert_org = map.get('CertOrg')
        self.cert_type = map.get('CertType')
        self.server_certificate_status = map.get('ServerCertificateStatus')
        self.status = map.get('Status')
        return self


class DescribeVodDomainCertificateInfoResponseCertInfos(TeaModel):
    def __init__(self, cert_info=None):
        self.cert_info = []

    def validate(self):
        self.validate_required(self.cert_info, 'cert_info')
        if self.cert_info:
            for k in self.cert_info:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['CertInfo'] = []
        if self.cert_info is not None:
            for k in self.cert_info:
                result['CertInfo'].append(k.to_map() if k else None)
        else:
            result['CertInfo'] = None
        return result

    def from_map(self, map={}):
        self.cert_info = []
        if map.get('CertInfo') is not None:
            for k in map.get('CertInfo'):
                temp_model = DescribeVodDomainCertificateInfoResponseCertInfosCertInfo()
                temp_model = temp_model.from_map(k)
                self.cert_info.append(temp_model)
        else:
            self.cert_info = None
        return self


class DescribeVodDomainTrafficDataRequest(TeaModel):
    def __init__(self, owner_id=None, domain_name=None, start_time=None, end_time=None, interval=None, isp_name_en=None, location_name_en=None):
        self.owner_id = owner_id
        self.domain_name = domain_name
        self.start_time = start_time
        self.end_time = end_time
        self.interval = interval
        self.isp_name_en = isp_name_en
        self.location_name_en = location_name_en

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['OwnerId'] = self.owner_id
        result['DomainName'] = self.domain_name
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        result['Interval'] = self.interval
        result['IspNameEn'] = self.isp_name_en
        result['LocationNameEn'] = self.location_name_en
        return result

    def from_map(self, map={}):
        self.owner_id = map.get('OwnerId')
        self.domain_name = map.get('DomainName')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        self.interval = map.get('Interval')
        self.isp_name_en = map.get('IspNameEn')
        self.location_name_en = map.get('LocationNameEn')
        return self


class DescribeVodDomainTrafficDataResponse(TeaModel):
    def __init__(self, request_id=None, domain_name=None, start_time=None, end_time=None, data_interval=None, traffic_data_per_interval=None):
        self.request_id = request_id
        self.domain_name = domain_name
        self.start_time = start_time
        self.end_time = end_time
        self.data_interval = data_interval
        self.traffic_data_per_interval = traffic_data_per_interval

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.domain_name, 'domain_name')
        self.validate_required(self.start_time, 'start_time')
        self.validate_required(self.end_time, 'end_time')
        self.validate_required(self.data_interval, 'data_interval')
        self.validate_required(self.traffic_data_per_interval, 'traffic_data_per_interval')
        if self.traffic_data_per_interval:
            self.traffic_data_per_interval.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['DomainName'] = self.domain_name
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        result['DataInterval'] = self.data_interval
        if self.traffic_data_per_interval is not None:
            result['TrafficDataPerInterval'] = self.traffic_data_per_interval.to_map()
        else:
            result['TrafficDataPerInterval'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.domain_name = map.get('DomainName')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        self.data_interval = map.get('DataInterval')
        if map.get('TrafficDataPerInterval') is not None:
            temp_model = DescribeVodDomainTrafficDataResponseTrafficDataPerInterval()
            self.traffic_data_per_interval = temp_model.from_map(map['TrafficDataPerInterval'])
        else:
            self.traffic_data_per_interval = None
        return self


class DescribeVodDomainTrafficDataResponseTrafficDataPerIntervalDataModule(TeaModel):
    def __init__(self, time_stamp=None, value=None, domestic_value=None, overseas_value=None, https_value=None, https_domestic_value=None, https_overseas_value=None):
        self.time_stamp = time_stamp
        self.value = value
        self.domestic_value = domestic_value
        self.overseas_value = overseas_value
        self.https_value = https_value
        self.https_domestic_value = https_domestic_value
        self.https_overseas_value = https_overseas_value

    def validate(self):
        self.validate_required(self.time_stamp, 'time_stamp')
        self.validate_required(self.value, 'value')
        self.validate_required(self.domestic_value, 'domestic_value')
        self.validate_required(self.overseas_value, 'overseas_value')
        self.validate_required(self.https_value, 'https_value')
        self.validate_required(self.https_domestic_value, 'https_domestic_value')
        self.validate_required(self.https_overseas_value, 'https_overseas_value')

    def to_map(self):
        result = {}
        result['TimeStamp'] = self.time_stamp
        result['Value'] = self.value
        result['DomesticValue'] = self.domestic_value
        result['OverseasValue'] = self.overseas_value
        result['HttpsValue'] = self.https_value
        result['HttpsDomesticValue'] = self.https_domestic_value
        result['HttpsOverseasValue'] = self.https_overseas_value
        return result

    def from_map(self, map={}):
        self.time_stamp = map.get('TimeStamp')
        self.value = map.get('Value')
        self.domestic_value = map.get('DomesticValue')
        self.overseas_value = map.get('OverseasValue')
        self.https_value = map.get('HttpsValue')
        self.https_domestic_value = map.get('HttpsDomesticValue')
        self.https_overseas_value = map.get('HttpsOverseasValue')
        return self


class DescribeVodDomainTrafficDataResponseTrafficDataPerInterval(TeaModel):
    def __init__(self, data_module=None):
        self.data_module = []

    def validate(self):
        self.validate_required(self.data_module, 'data_module')
        if self.data_module:
            for k in self.data_module:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['DataModule'] = []
        if self.data_module is not None:
            for k in self.data_module:
                result['DataModule'].append(k.to_map() if k else None)
        else:
            result['DataModule'] = None
        return result

    def from_map(self, map={}):
        self.data_module = []
        if map.get('DataModule') is not None:
            for k in map.get('DataModule'):
                temp_model = DescribeVodDomainTrafficDataResponseTrafficDataPerIntervalDataModule()
                temp_model = temp_model.from_map(k)
                self.data_module.append(temp_model)
        else:
            self.data_module = None
        return self


class DescribeVodDomainBpsDataRequest(TeaModel):
    def __init__(self, owner_id=None, domain_name=None, start_time=None, end_time=None, interval=None, isp_name_en=None, location_name_en=None):
        self.owner_id = owner_id
        self.domain_name = domain_name
        self.start_time = start_time
        self.end_time = end_time
        self.interval = interval
        self.isp_name_en = isp_name_en
        self.location_name_en = location_name_en

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['OwnerId'] = self.owner_id
        result['DomainName'] = self.domain_name
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        result['Interval'] = self.interval
        result['IspNameEn'] = self.isp_name_en
        result['LocationNameEn'] = self.location_name_en
        return result

    def from_map(self, map={}):
        self.owner_id = map.get('OwnerId')
        self.domain_name = map.get('DomainName')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        self.interval = map.get('Interval')
        self.isp_name_en = map.get('IspNameEn')
        self.location_name_en = map.get('LocationNameEn')
        return self


class DescribeVodDomainBpsDataResponse(TeaModel):
    def __init__(self, request_id=None, domain_name=None, start_time=None, end_time=None, location_name_en=None, isp_name_en=None, data_interval=None, bps_data_per_interval=None):
        self.request_id = request_id
        self.domain_name = domain_name
        self.start_time = start_time
        self.end_time = end_time
        self.location_name_en = location_name_en
        self.isp_name_en = isp_name_en
        self.data_interval = data_interval
        self.bps_data_per_interval = bps_data_per_interval

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.domain_name, 'domain_name')
        self.validate_required(self.start_time, 'start_time')
        self.validate_required(self.end_time, 'end_time')
        self.validate_required(self.location_name_en, 'location_name_en')
        self.validate_required(self.isp_name_en, 'isp_name_en')
        self.validate_required(self.data_interval, 'data_interval')
        self.validate_required(self.bps_data_per_interval, 'bps_data_per_interval')
        if self.bps_data_per_interval:
            self.bps_data_per_interval.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['DomainName'] = self.domain_name
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        result['LocationNameEn'] = self.location_name_en
        result['IspNameEn'] = self.isp_name_en
        result['DataInterval'] = self.data_interval
        if self.bps_data_per_interval is not None:
            result['BpsDataPerInterval'] = self.bps_data_per_interval.to_map()
        else:
            result['BpsDataPerInterval'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.domain_name = map.get('DomainName')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        self.location_name_en = map.get('LocationNameEn')
        self.isp_name_en = map.get('IspNameEn')
        self.data_interval = map.get('DataInterval')
        if map.get('BpsDataPerInterval') is not None:
            temp_model = DescribeVodDomainBpsDataResponseBpsDataPerInterval()
            self.bps_data_per_interval = temp_model.from_map(map['BpsDataPerInterval'])
        else:
            self.bps_data_per_interval = None
        return self


class DescribeVodDomainBpsDataResponseBpsDataPerIntervalDataModule(TeaModel):
    def __init__(self, time_stamp=None, value=None, domestic_value=None, overseas_value=None, https_value=None, https_domestic_value=None, https_overseas_value=None):
        self.time_stamp = time_stamp
        self.value = value
        self.domestic_value = domestic_value
        self.overseas_value = overseas_value
        self.https_value = https_value
        self.https_domestic_value = https_domestic_value
        self.https_overseas_value = https_overseas_value

    def validate(self):
        self.validate_required(self.time_stamp, 'time_stamp')
        self.validate_required(self.value, 'value')
        self.validate_required(self.domestic_value, 'domestic_value')
        self.validate_required(self.overseas_value, 'overseas_value')
        self.validate_required(self.https_value, 'https_value')
        self.validate_required(self.https_domestic_value, 'https_domestic_value')
        self.validate_required(self.https_overseas_value, 'https_overseas_value')

    def to_map(self):
        result = {}
        result['TimeStamp'] = self.time_stamp
        result['Value'] = self.value
        result['DomesticValue'] = self.domestic_value
        result['OverseasValue'] = self.overseas_value
        result['HttpsValue'] = self.https_value
        result['HttpsDomesticValue'] = self.https_domestic_value
        result['HttpsOverseasValue'] = self.https_overseas_value
        return result

    def from_map(self, map={}):
        self.time_stamp = map.get('TimeStamp')
        self.value = map.get('Value')
        self.domestic_value = map.get('DomesticValue')
        self.overseas_value = map.get('OverseasValue')
        self.https_value = map.get('HttpsValue')
        self.https_domestic_value = map.get('HttpsDomesticValue')
        self.https_overseas_value = map.get('HttpsOverseasValue')
        return self


class DescribeVodDomainBpsDataResponseBpsDataPerInterval(TeaModel):
    def __init__(self, data_module=None):
        self.data_module = []

    def validate(self):
        self.validate_required(self.data_module, 'data_module')
        if self.data_module:
            for k in self.data_module:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['DataModule'] = []
        if self.data_module is not None:
            for k in self.data_module:
                result['DataModule'].append(k.to_map() if k else None)
        else:
            result['DataModule'] = None
        return result

    def from_map(self, map={}):
        self.data_module = []
        if map.get('DataModule') is not None:
            for k in map.get('DataModule'):
                temp_model = DescribeVodDomainBpsDataResponseBpsDataPerIntervalDataModule()
                temp_model = temp_model.from_map(k)
                self.data_module.append(temp_model)
        else:
            self.data_module = None
        return self


class DescribeVodDomainUsageDataRequest(TeaModel):
    def __init__(self, owner_id=None, domain_name=None, start_time=None, end_time=None, type=None, area=None, field=None):
        self.owner_id = owner_id
        self.domain_name = domain_name
        self.start_time = start_time
        self.end_time = end_time
        self.type = type
        self.area = area
        self.field = field

    def validate(self):
        self.validate_required(self.start_time, 'start_time')
        self.validate_required(self.end_time, 'end_time')
        self.validate_required(self.field, 'field')

    def to_map(self):
        result = {}
        result['OwnerId'] = self.owner_id
        result['DomainName'] = self.domain_name
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        result['Type'] = self.type
        result['Area'] = self.area
        result['Field'] = self.field
        return result

    def from_map(self, map={}):
        self.owner_id = map.get('OwnerId')
        self.domain_name = map.get('DomainName')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        self.type = map.get('Type')
        self.area = map.get('Area')
        self.field = map.get('Field')
        return self


class DescribeVodDomainUsageDataResponse(TeaModel):
    def __init__(self, request_id=None, domain_name=None, start_time=None, end_time=None, type=None, area=None, data_interval=None, usage_data_per_interval=None):
        self.request_id = request_id
        self.domain_name = domain_name
        self.start_time = start_time
        self.end_time = end_time
        self.type = type
        self.area = area
        self.data_interval = data_interval
        self.usage_data_per_interval = usage_data_per_interval

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.domain_name, 'domain_name')
        self.validate_required(self.start_time, 'start_time')
        self.validate_required(self.end_time, 'end_time')
        self.validate_required(self.type, 'type')
        self.validate_required(self.area, 'area')
        self.validate_required(self.data_interval, 'data_interval')
        self.validate_required(self.usage_data_per_interval, 'usage_data_per_interval')
        if self.usage_data_per_interval:
            self.usage_data_per_interval.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['DomainName'] = self.domain_name
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        result['Type'] = self.type
        result['Area'] = self.area
        result['DataInterval'] = self.data_interval
        if self.usage_data_per_interval is not None:
            result['UsageDataPerInterval'] = self.usage_data_per_interval.to_map()
        else:
            result['UsageDataPerInterval'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.domain_name = map.get('DomainName')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        self.type = map.get('Type')
        self.area = map.get('Area')
        self.data_interval = map.get('DataInterval')
        if map.get('UsageDataPerInterval') is not None:
            temp_model = DescribeVodDomainUsageDataResponseUsageDataPerInterval()
            self.usage_data_per_interval = temp_model.from_map(map['UsageDataPerInterval'])
        else:
            self.usage_data_per_interval = None
        return self


class DescribeVodDomainUsageDataResponseUsageDataPerIntervalDataModule(TeaModel):
    def __init__(self, time_stamp=None, value=None):
        self.time_stamp = time_stamp
        self.value = value

    def validate(self):
        self.validate_required(self.time_stamp, 'time_stamp')
        self.validate_required(self.value, 'value')

    def to_map(self):
        result = {}
        result['TimeStamp'] = self.time_stamp
        result['Value'] = self.value
        return result

    def from_map(self, map={}):
        self.time_stamp = map.get('TimeStamp')
        self.value = map.get('Value')
        return self


class DescribeVodDomainUsageDataResponseUsageDataPerInterval(TeaModel):
    def __init__(self, data_module=None):
        self.data_module = []

    def validate(self):
        self.validate_required(self.data_module, 'data_module')
        if self.data_module:
            for k in self.data_module:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['DataModule'] = []
        if self.data_module is not None:
            for k in self.data_module:
                result['DataModule'].append(k.to_map() if k else None)
        else:
            result['DataModule'] = None
        return result

    def from_map(self, map={}):
        self.data_module = []
        if map.get('DataModule') is not None:
            for k in map.get('DataModule'):
                temp_model = DescribeVodDomainUsageDataResponseUsageDataPerIntervalDataModule()
                temp_model = temp_model.from_map(k)
                self.data_module.append(temp_model)
        else:
            self.data_module = None
        return self


class DescribeVodCertificateListRequest(TeaModel):
    def __init__(self, owner_id=None, security_token=None, domain_name=None):
        self.owner_id = owner_id
        self.security_token = security_token
        self.domain_name = domain_name

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['OwnerId'] = self.owner_id
        result['SecurityToken'] = self.security_token
        result['DomainName'] = self.domain_name
        return result

    def from_map(self, map={}):
        self.owner_id = map.get('OwnerId')
        self.security_token = map.get('SecurityToken')
        self.domain_name = map.get('DomainName')
        return self


class DescribeVodCertificateListResponse(TeaModel):
    def __init__(self, request_id=None, certificate_list_model=None):
        self.request_id = request_id
        self.certificate_list_model = certificate_list_model

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.certificate_list_model, 'certificate_list_model')
        if self.certificate_list_model:
            self.certificate_list_model.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.certificate_list_model is not None:
            result['CertificateListModel'] = self.certificate_list_model.to_map()
        else:
            result['CertificateListModel'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('CertificateListModel') is not None:
            temp_model = DescribeVodCertificateListResponseCertificateListModel()
            self.certificate_list_model = temp_model.from_map(map['CertificateListModel'])
        else:
            self.certificate_list_model = None
        return self


class DescribeVodCertificateListResponseCertificateListModelCertListCert(TeaModel):
    def __init__(self, cert_name=None, cert_id=None, fingerprint=None, common=None, issuer=None, last_time=None):
        self.cert_name = cert_name
        self.cert_id = cert_id
        self.fingerprint = fingerprint
        self.common = common
        self.issuer = issuer
        self.last_time = last_time

    def validate(self):
        self.validate_required(self.cert_name, 'cert_name')
        self.validate_required(self.cert_id, 'cert_id')
        self.validate_required(self.fingerprint, 'fingerprint')
        self.validate_required(self.common, 'common')
        self.validate_required(self.issuer, 'issuer')
        self.validate_required(self.last_time, 'last_time')

    def to_map(self):
        result = {}
        result['CertName'] = self.cert_name
        result['CertId'] = self.cert_id
        result['Fingerprint'] = self.fingerprint
        result['Common'] = self.common
        result['Issuer'] = self.issuer
        result['LastTime'] = self.last_time
        return result

    def from_map(self, map={}):
        self.cert_name = map.get('CertName')
        self.cert_id = map.get('CertId')
        self.fingerprint = map.get('Fingerprint')
        self.common = map.get('Common')
        self.issuer = map.get('Issuer')
        self.last_time = map.get('LastTime')
        return self


class DescribeVodCertificateListResponseCertificateListModelCertList(TeaModel):
    def __init__(self, cert=None):
        self.cert = []

    def validate(self):
        self.validate_required(self.cert, 'cert')
        if self.cert:
            for k in self.cert:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Cert'] = []
        if self.cert is not None:
            for k in self.cert:
                result['Cert'].append(k.to_map() if k else None)
        else:
            result['Cert'] = None
        return result

    def from_map(self, map={}):
        self.cert = []
        if map.get('Cert') is not None:
            for k in map.get('Cert'):
                temp_model = DescribeVodCertificateListResponseCertificateListModelCertListCert()
                temp_model = temp_model.from_map(k)
                self.cert.append(temp_model)
        else:
            self.cert = None
        return self


class DescribeVodCertificateListResponseCertificateListModel(TeaModel):
    def __init__(self, count=None, cert_list=None):
        self.count = count
        self.cert_list = cert_list

    def validate(self):
        self.validate_required(self.count, 'count')
        self.validate_required(self.cert_list, 'cert_list')
        if self.cert_list:
            self.cert_list.validate()

    def to_map(self):
        result = {}
        result['Count'] = self.count
        if self.cert_list is not None:
            result['CertList'] = self.cert_list.to_map()
        else:
            result['CertList'] = None
        return result

    def from_map(self, map={}):
        self.count = map.get('Count')
        if map.get('CertList') is not None:
            temp_model = DescribeVodCertificateListResponseCertificateListModelCertList()
            self.cert_list = temp_model.from_map(map['CertList'])
        else:
            self.cert_list = None
        return self


class BatchStopVodDomainRequest(TeaModel):
    def __init__(self, owner_id=None, security_token=None, domain_names=None):
        self.owner_id = owner_id
        self.security_token = security_token
        self.domain_names = domain_names

    def validate(self):
        self.validate_required(self.domain_names, 'domain_names')

    def to_map(self):
        result = {}
        result['OwnerId'] = self.owner_id
        result['SecurityToken'] = self.security_token
        result['DomainNames'] = self.domain_names
        return result

    def from_map(self, map={}):
        self.owner_id = map.get('OwnerId')
        self.security_token = map.get('SecurityToken')
        self.domain_names = map.get('DomainNames')
        return self


class BatchStopVodDomainResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class DeleteVodDomainRequest(TeaModel):
    def __init__(self, owner_id=None, owner_account=None, security_token=None, domain_name=None):
        self.owner_id = owner_id
        self.owner_account = owner_account
        self.security_token = security_token
        self.domain_name = domain_name

    def validate(self):
        self.validate_required(self.domain_name, 'domain_name')

    def to_map(self):
        result = {}
        result['OwnerId'] = self.owner_id
        result['OwnerAccount'] = self.owner_account
        result['SecurityToken'] = self.security_token
        result['DomainName'] = self.domain_name
        return result

    def from_map(self, map={}):
        self.owner_id = map.get('OwnerId')
        self.owner_account = map.get('OwnerAccount')
        self.security_token = map.get('SecurityToken')
        self.domain_name = map.get('DomainName')
        return self


class DeleteVodDomainResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class SetVodDomainCertificateRequest(TeaModel):
    def __init__(self, owner_id=None, security_token=None, domain_name=None, cert_name=None, sslprotocol=None, sslpub=None, sslpri=None, region=None):
        self.owner_id = owner_id
        self.security_token = security_token
        self.domain_name = domain_name
        self.cert_name = cert_name
        self.sslprotocol = sslprotocol
        self.sslpub = sslpub
        self.sslpri = sslpri
        self.region = region

    def validate(self):
        self.validate_required(self.domain_name, 'domain_name')
        self.validate_required(self.sslprotocol, 'sslprotocol')

    def to_map(self):
        result = {}
        result['OwnerId'] = self.owner_id
        result['SecurityToken'] = self.security_token
        result['DomainName'] = self.domain_name
        result['CertName'] = self.cert_name
        result['SSLProtocol'] = self.sslprotocol
        result['SSLPub'] = self.sslpub
        result['SSLPri'] = self.sslpri
        result['Region'] = self.region
        return result

    def from_map(self, map={}):
        self.owner_id = map.get('OwnerId')
        self.security_token = map.get('SecurityToken')
        self.domain_name = map.get('DomainName')
        self.cert_name = map.get('CertName')
        self.sslprotocol = map.get('SSLProtocol')
        self.sslpub = map.get('SSLPub')
        self.sslpri = map.get('SSLPri')
        self.region = map.get('Region')
        return self


class SetVodDomainCertificateResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class DeleteVodSpecificConfigRequest(TeaModel):
    def __init__(self, owner_id=None, security_token=None, domain_name=None, config_id=None):
        self.owner_id = owner_id
        self.security_token = security_token
        self.domain_name = domain_name
        self.config_id = config_id

    def validate(self):
        self.validate_required(self.domain_name, 'domain_name')
        self.validate_required(self.config_id, 'config_id')

    def to_map(self):
        result = {}
        result['OwnerId'] = self.owner_id
        result['SecurityToken'] = self.security_token
        result['DomainName'] = self.domain_name
        result['ConfigId'] = self.config_id
        return result

    def from_map(self, map={}):
        self.owner_id = map.get('OwnerId')
        self.security_token = map.get('SecurityToken')
        self.domain_name = map.get('DomainName')
        self.config_id = map.get('ConfigId')
        return self


class DeleteVodSpecificConfigResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class BatchSetVodDomainConfigsRequest(TeaModel):
    def __init__(self, owner_id=None, owner_account=None, security_token=None, domain_names=None, functions=None):
        self.owner_id = owner_id
        self.owner_account = owner_account
        self.security_token = security_token
        self.domain_names = domain_names
        self.functions = functions

    def validate(self):
        self.validate_required(self.domain_names, 'domain_names')
        self.validate_required(self.functions, 'functions')

    def to_map(self):
        result = {}
        result['OwnerId'] = self.owner_id
        result['OwnerAccount'] = self.owner_account
        result['SecurityToken'] = self.security_token
        result['DomainNames'] = self.domain_names
        result['Functions'] = self.functions
        return result

    def from_map(self, map={}):
        self.owner_id = map.get('OwnerId')
        self.owner_account = map.get('OwnerAccount')
        self.security_token = map.get('SecurityToken')
        self.domain_names = map.get('DomainNames')
        self.functions = map.get('Functions')
        return self


class BatchSetVodDomainConfigsResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class AddVodDomainRequest(TeaModel):
    def __init__(self, owner_id=None, owner_account=None, security_token=None, domain_name=None, sources=None, check_url=None, scope=None):
        self.owner_id = owner_id
        self.owner_account = owner_account
        self.security_token = security_token
        self.domain_name = domain_name
        self.sources = sources
        self.check_url = check_url
        self.scope = scope

    def validate(self):
        self.validate_required(self.domain_name, 'domain_name')
        self.validate_required(self.sources, 'sources')

    def to_map(self):
        result = {}
        result['OwnerId'] = self.owner_id
        result['OwnerAccount'] = self.owner_account
        result['SecurityToken'] = self.security_token
        result['DomainName'] = self.domain_name
        result['Sources'] = self.sources
        result['CheckUrl'] = self.check_url
        result['Scope'] = self.scope
        return result

    def from_map(self, map={}):
        self.owner_id = map.get('OwnerId')
        self.owner_account = map.get('OwnerAccount')
        self.security_token = map.get('SecurityToken')
        self.domain_name = map.get('DomainName')
        self.sources = map.get('Sources')
        self.check_url = map.get('CheckUrl')
        self.scope = map.get('Scope')
        return self


class AddVodDomainResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class DescribeVodRefreshQuotaRequest(TeaModel):
    def __init__(self, owner_id=None, security_token=None):
        self.owner_id = owner_id
        self.security_token = security_token

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['OwnerId'] = self.owner_id
        result['SecurityToken'] = self.security_token
        return result

    def from_map(self, map={}):
        self.owner_id = map.get('OwnerId')
        self.security_token = map.get('SecurityToken')
        return self


class DescribeVodRefreshQuotaResponse(TeaModel):
    def __init__(self, request_id=None, url_quota=None, dir_quota=None, url_remain=None, dir_remain=None, preload_quota=None, block_quota=None, preload_remain=None, block_remain=None):
        self.request_id = request_id
        self.url_quota = url_quota
        self.dir_quota = dir_quota
        self.url_remain = url_remain
        self.dir_remain = dir_remain
        self.preload_quota = preload_quota
        self.block_quota = block_quota
        self.preload_remain = preload_remain
        self.block_remain = block_remain

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.url_quota, 'url_quota')
        self.validate_required(self.dir_quota, 'dir_quota')
        self.validate_required(self.url_remain, 'url_remain')
        self.validate_required(self.dir_remain, 'dir_remain')
        self.validate_required(self.preload_quota, 'preload_quota')
        self.validate_required(self.block_quota, 'block_quota')
        self.validate_required(self.preload_remain, 'preload_remain')
        self.validate_required(self.block_remain, 'block_remain')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['UrlQuota'] = self.url_quota
        result['DirQuota'] = self.dir_quota
        result['UrlRemain'] = self.url_remain
        result['DirRemain'] = self.dir_remain
        result['PreloadQuota'] = self.preload_quota
        result['BlockQuota'] = self.block_quota
        result['PreloadRemain'] = self.preload_remain
        result['blockRemain'] = self.block_remain
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.url_quota = map.get('UrlQuota')
        self.dir_quota = map.get('DirQuota')
        self.url_remain = map.get('UrlRemain')
        self.dir_remain = map.get('DirRemain')
        self.preload_quota = map.get('PreloadQuota')
        self.block_quota = map.get('BlockQuota')
        self.preload_remain = map.get('PreloadRemain')
        self.block_remain = map.get('blockRemain')
        return self


class DescribeVodRefreshTasksRequest(TeaModel):
    def __init__(self, owner_id=None, security_token=None, task_id=None, object_path=None, page_number=None, object_type=None, domain_name=None, status=None, page_size=None, start_time=None, end_time=None, resource_group_id=None):
        self.owner_id = owner_id
        self.security_token = security_token
        self.task_id = task_id
        self.object_path = object_path
        self.page_number = page_number
        self.object_type = object_type
        self.domain_name = domain_name
        self.status = status
        self.page_size = page_size
        self.start_time = start_time
        self.end_time = end_time
        self.resource_group_id = resource_group_id

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['OwnerId'] = self.owner_id
        result['SecurityToken'] = self.security_token
        result['TaskId'] = self.task_id
        result['ObjectPath'] = self.object_path
        result['PageNumber'] = self.page_number
        result['ObjectType'] = self.object_type
        result['DomainName'] = self.domain_name
        result['Status'] = self.status
        result['PageSize'] = self.page_size
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        result['ResourceGroupId'] = self.resource_group_id
        return result

    def from_map(self, map={}):
        self.owner_id = map.get('OwnerId')
        self.security_token = map.get('SecurityToken')
        self.task_id = map.get('TaskId')
        self.object_path = map.get('ObjectPath')
        self.page_number = map.get('PageNumber')
        self.object_type = map.get('ObjectType')
        self.domain_name = map.get('DomainName')
        self.status = map.get('Status')
        self.page_size = map.get('PageSize')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        self.resource_group_id = map.get('ResourceGroupId')
        return self


class DescribeVodRefreshTasksResponse(TeaModel):
    def __init__(self, request_id=None, page_number=None, page_size=None, total_count=None, tasks=None):
        self.request_id = request_id
        self.page_number = page_number
        self.page_size = page_size
        self.total_count = total_count
        self.tasks = tasks

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.total_count, 'total_count')
        self.validate_required(self.tasks, 'tasks')
        if self.tasks:
            self.tasks.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        result['TotalCount'] = self.total_count
        if self.tasks is not None:
            result['Tasks'] = self.tasks.to_map()
        else:
            result['Tasks'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        self.total_count = map.get('TotalCount')
        if map.get('Tasks') is not None:
            temp_model = DescribeVodRefreshTasksResponseTasks()
            self.tasks = temp_model.from_map(map['Tasks'])
        else:
            self.tasks = None
        return self


class DescribeVodRefreshTasksResponseTasksTask(TeaModel):
    def __init__(self, task_id=None, object_path=None, process=None, status=None, creation_time=None, description=None, object_type=None):
        self.task_id = task_id
        self.object_path = object_path
        self.process = process
        self.status = status
        self.creation_time = creation_time
        self.description = description
        self.object_type = object_type

    def validate(self):
        self.validate_required(self.task_id, 'task_id')
        self.validate_required(self.object_path, 'object_path')
        self.validate_required(self.process, 'process')
        self.validate_required(self.status, 'status')
        self.validate_required(self.creation_time, 'creation_time')
        self.validate_required(self.description, 'description')
        self.validate_required(self.object_type, 'object_type')

    def to_map(self):
        result = {}
        result['TaskId'] = self.task_id
        result['ObjectPath'] = self.object_path
        result['Process'] = self.process
        result['Status'] = self.status
        result['CreationTime'] = self.creation_time
        result['Description'] = self.description
        result['ObjectType'] = self.object_type
        return result

    def from_map(self, map={}):
        self.task_id = map.get('TaskId')
        self.object_path = map.get('ObjectPath')
        self.process = map.get('Process')
        self.status = map.get('Status')
        self.creation_time = map.get('CreationTime')
        self.description = map.get('Description')
        self.object_type = map.get('ObjectType')
        return self


class DescribeVodRefreshTasksResponseTasks(TeaModel):
    def __init__(self, task=None):
        self.task = []

    def validate(self):
        self.validate_required(self.task, 'task')
        if self.task:
            for k in self.task:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Task'] = []
        if self.task is not None:
            for k in self.task:
                result['Task'].append(k.to_map() if k else None)
        else:
            result['Task'] = None
        return result

    def from_map(self, map={}):
        self.task = []
        if map.get('Task') is not None:
            for k in map.get('Task'):
                temp_model = DescribeVodRefreshTasksResponseTasksTask()
                temp_model = temp_model.from_map(k)
                self.task.append(temp_model)
        else:
            self.task = None
        return self


class DescribeVodDomainConfigsRequest(TeaModel):
    def __init__(self, owner_id=None, security_token=None, domain_name=None, function_names=None):
        self.owner_id = owner_id
        self.security_token = security_token
        self.domain_name = domain_name
        self.function_names = function_names

    def validate(self):
        self.validate_required(self.domain_name, 'domain_name')
        self.validate_required(self.function_names, 'function_names')

    def to_map(self):
        result = {}
        result['OwnerId'] = self.owner_id
        result['SecurityToken'] = self.security_token
        result['DomainName'] = self.domain_name
        result['FunctionNames'] = self.function_names
        return result

    def from_map(self, map={}):
        self.owner_id = map.get('OwnerId')
        self.security_token = map.get('SecurityToken')
        self.domain_name = map.get('DomainName')
        self.function_names = map.get('FunctionNames')
        return self


class DescribeVodDomainConfigsResponse(TeaModel):
    def __init__(self, request_id=None, domain_configs=None):
        self.request_id = request_id
        self.domain_configs = domain_configs

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.domain_configs, 'domain_configs')
        if self.domain_configs:
            self.domain_configs.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.domain_configs is not None:
            result['DomainConfigs'] = self.domain_configs.to_map()
        else:
            result['DomainConfigs'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('DomainConfigs') is not None:
            temp_model = DescribeVodDomainConfigsResponseDomainConfigs()
            self.domain_configs = temp_model.from_map(map['DomainConfigs'])
        else:
            self.domain_configs = None
        return self


class DescribeVodDomainConfigsResponseDomainConfigsDomainConfigFunctionArgsFunctionArg(TeaModel):
    def __init__(self, arg_name=None, arg_value=None):
        self.arg_name = arg_name
        self.arg_value = arg_value

    def validate(self):
        self.validate_required(self.arg_name, 'arg_name')
        self.validate_required(self.arg_value, 'arg_value')

    def to_map(self):
        result = {}
        result['ArgName'] = self.arg_name
        result['ArgValue'] = self.arg_value
        return result

    def from_map(self, map={}):
        self.arg_name = map.get('ArgName')
        self.arg_value = map.get('ArgValue')
        return self


class DescribeVodDomainConfigsResponseDomainConfigsDomainConfigFunctionArgs(TeaModel):
    def __init__(self, function_arg=None):
        self.function_arg = []

    def validate(self):
        self.validate_required(self.function_arg, 'function_arg')
        if self.function_arg:
            for k in self.function_arg:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['FunctionArg'] = []
        if self.function_arg is not None:
            for k in self.function_arg:
                result['FunctionArg'].append(k.to_map() if k else None)
        else:
            result['FunctionArg'] = None
        return result

    def from_map(self, map={}):
        self.function_arg = []
        if map.get('FunctionArg') is not None:
            for k in map.get('FunctionArg'):
                temp_model = DescribeVodDomainConfigsResponseDomainConfigsDomainConfigFunctionArgsFunctionArg()
                temp_model = temp_model.from_map(k)
                self.function_arg.append(temp_model)
        else:
            self.function_arg = None
        return self


class DescribeVodDomainConfigsResponseDomainConfigsDomainConfig(TeaModel):
    def __init__(self, function_name=None, config_id=None, status=None, function_args=None):
        self.function_name = function_name
        self.config_id = config_id
        self.status = status
        self.function_args = function_args

    def validate(self):
        self.validate_required(self.function_name, 'function_name')
        self.validate_required(self.config_id, 'config_id')
        self.validate_required(self.status, 'status')
        self.validate_required(self.function_args, 'function_args')
        if self.function_args:
            self.function_args.validate()

    def to_map(self):
        result = {}
        result['FunctionName'] = self.function_name
        result['ConfigId'] = self.config_id
        result['Status'] = self.status
        if self.function_args is not None:
            result['FunctionArgs'] = self.function_args.to_map()
        else:
            result['FunctionArgs'] = None
        return result

    def from_map(self, map={}):
        self.function_name = map.get('FunctionName')
        self.config_id = map.get('ConfigId')
        self.status = map.get('Status')
        if map.get('FunctionArgs') is not None:
            temp_model = DescribeVodDomainConfigsResponseDomainConfigsDomainConfigFunctionArgs()
            self.function_args = temp_model.from_map(map['FunctionArgs'])
        else:
            self.function_args = None
        return self


class DescribeVodDomainConfigsResponseDomainConfigs(TeaModel):
    def __init__(self, domain_config=None):
        self.domain_config = []

    def validate(self):
        self.validate_required(self.domain_config, 'domain_config')
        if self.domain_config:
            for k in self.domain_config:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['DomainConfig'] = []
        if self.domain_config is not None:
            for k in self.domain_config:
                result['DomainConfig'].append(k.to_map() if k else None)
        else:
            result['DomainConfig'] = None
        return result

    def from_map(self, map={}):
        self.domain_config = []
        if map.get('DomainConfig') is not None:
            for k in map.get('DomainConfig'):
                temp_model = DescribeVodDomainConfigsResponseDomainConfigsDomainConfig()
                temp_model = temp_model.from_map(k)
                self.domain_config.append(temp_model)
        else:
            self.domain_config = None
        return self


class DescribeVodUserDomainsRequest(TeaModel):
    def __init__(self, owner_id=None, security_token=None, page_size=None, page_number=None, domain_name=None, domain_status=None, domain_search_type=None, cdn_type=None, check_domain_show=None, func_id=None, func_filter=None):
        self.owner_id = owner_id
        self.security_token = security_token
        self.page_size = page_size
        self.page_number = page_number
        self.domain_name = domain_name
        self.domain_status = domain_status
        self.domain_search_type = domain_search_type
        self.cdn_type = cdn_type
        self.check_domain_show = check_domain_show
        self.func_id = func_id
        self.func_filter = func_filter

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['OwnerId'] = self.owner_id
        result['SecurityToken'] = self.security_token
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        result['DomainName'] = self.domain_name
        result['DomainStatus'] = self.domain_status
        result['DomainSearchType'] = self.domain_search_type
        result['CdnType'] = self.cdn_type
        result['CheckDomainShow'] = self.check_domain_show
        result['FuncId'] = self.func_id
        result['FuncFilter'] = self.func_filter
        return result

    def from_map(self, map={}):
        self.owner_id = map.get('OwnerId')
        self.security_token = map.get('SecurityToken')
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        self.domain_name = map.get('DomainName')
        self.domain_status = map.get('DomainStatus')
        self.domain_search_type = map.get('DomainSearchType')
        self.cdn_type = map.get('CdnType')
        self.check_domain_show = map.get('CheckDomainShow')
        self.func_id = map.get('FuncId')
        self.func_filter = map.get('FuncFilter')
        return self


class DescribeVodUserDomainsResponse(TeaModel):
    def __init__(self, request_id=None, page_number=None, page_size=None, total_count=None, domains=None):
        self.request_id = request_id
        self.page_number = page_number
        self.page_size = page_size
        self.total_count = total_count
        self.domains = domains

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.total_count, 'total_count')
        self.validate_required(self.domains, 'domains')
        if self.domains:
            self.domains.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        result['TotalCount'] = self.total_count
        if self.domains is not None:
            result['Domains'] = self.domains.to_map()
        else:
            result['Domains'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        self.total_count = map.get('TotalCount')
        if map.get('Domains') is not None:
            temp_model = DescribeVodUserDomainsResponseDomains()
            self.domains = temp_model.from_map(map['Domains'])
        else:
            self.domains = None
        return self


class DescribeVodUserDomainsResponseDomainsPageDataSourcesSource(TeaModel):
    def __init__(self, type=None, content=None, port=None, priority=None):
        self.type = type
        self.content = content
        self.port = port
        self.priority = priority

    def validate(self):
        self.validate_required(self.type, 'type')
        self.validate_required(self.content, 'content')
        self.validate_required(self.port, 'port')
        self.validate_required(self.priority, 'priority')

    def to_map(self):
        result = {}
        result['Type'] = self.type
        result['Content'] = self.content
        result['Port'] = self.port
        result['Priority'] = self.priority
        return result

    def from_map(self, map={}):
        self.type = map.get('Type')
        self.content = map.get('Content')
        self.port = map.get('Port')
        self.priority = map.get('Priority')
        return self


class DescribeVodUserDomainsResponseDomainsPageDataSources(TeaModel):
    def __init__(self, source=None):
        self.source = []

    def validate(self):
        self.validate_required(self.source, 'source')
        if self.source:
            for k in self.source:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Source'] = []
        if self.source is not None:
            for k in self.source:
                result['Source'].append(k.to_map() if k else None)
        else:
            result['Source'] = None
        return result

    def from_map(self, map={}):
        self.source = []
        if map.get('Source') is not None:
            for k in map.get('Source'):
                temp_model = DescribeVodUserDomainsResponseDomainsPageDataSourcesSource()
                temp_model = temp_model.from_map(k)
                self.source.append(temp_model)
        else:
            self.source = None
        return self


class DescribeVodUserDomainsResponseDomainsPageData(TeaModel):
    def __init__(self, domain_name=None, cname=None, cdn_type=None, domain_status=None, gmt_created=None, gmt_modified=None, description=None, ssl_protocol=None, weight=None, sandbox=None, sources=None):
        self.domain_name = domain_name
        self.cname = cname
        self.cdn_type = cdn_type
        self.domain_status = domain_status
        self.gmt_created = gmt_created
        self.gmt_modified = gmt_modified
        self.description = description
        self.ssl_protocol = ssl_protocol
        self.weight = weight
        self.sandbox = sandbox
        self.sources = sources

    def validate(self):
        self.validate_required(self.domain_name, 'domain_name')
        self.validate_required(self.cname, 'cname')
        self.validate_required(self.cdn_type, 'cdn_type')
        self.validate_required(self.domain_status, 'domain_status')
        self.validate_required(self.gmt_created, 'gmt_created')
        self.validate_required(self.gmt_modified, 'gmt_modified')
        self.validate_required(self.description, 'description')
        self.validate_required(self.ssl_protocol, 'ssl_protocol')
        self.validate_required(self.weight, 'weight')
        self.validate_required(self.sandbox, 'sandbox')
        self.validate_required(self.sources, 'sources')
        if self.sources:
            self.sources.validate()

    def to_map(self):
        result = {}
        result['DomainName'] = self.domain_name
        result['Cname'] = self.cname
        result['CdnType'] = self.cdn_type
        result['DomainStatus'] = self.domain_status
        result['GmtCreated'] = self.gmt_created
        result['GmtModified'] = self.gmt_modified
        result['Description'] = self.description
        result['SslProtocol'] = self.ssl_protocol
        result['Weight'] = self.weight
        result['Sandbox'] = self.sandbox
        if self.sources is not None:
            result['Sources'] = self.sources.to_map()
        else:
            result['Sources'] = None
        return result

    def from_map(self, map={}):
        self.domain_name = map.get('DomainName')
        self.cname = map.get('Cname')
        self.cdn_type = map.get('CdnType')
        self.domain_status = map.get('DomainStatus')
        self.gmt_created = map.get('GmtCreated')
        self.gmt_modified = map.get('GmtModified')
        self.description = map.get('Description')
        self.ssl_protocol = map.get('SslProtocol')
        self.weight = map.get('Weight')
        self.sandbox = map.get('Sandbox')
        if map.get('Sources') is not None:
            temp_model = DescribeVodUserDomainsResponseDomainsPageDataSources()
            self.sources = temp_model.from_map(map['Sources'])
        else:
            self.sources = None
        return self


class DescribeVodUserDomainsResponseDomains(TeaModel):
    def __init__(self, page_data=None):
        self.page_data = []

    def validate(self):
        self.validate_required(self.page_data, 'page_data')
        if self.page_data:
            for k in self.page_data:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['PageData'] = []
        if self.page_data is not None:
            for k in self.page_data:
                result['PageData'].append(k.to_map() if k else None)
        else:
            result['PageData'] = None
        return result

    def from_map(self, map={}):
        self.page_data = []
        if map.get('PageData') is not None:
            for k in map.get('PageData'):
                temp_model = DescribeVodUserDomainsResponseDomainsPageData()
                temp_model = temp_model.from_map(k)
                self.page_data.append(temp_model)
        else:
            self.page_data = None
        return self


class UpdateVodDomainRequest(TeaModel):
    def __init__(self, owner_id=None, security_token=None, domain_name=None, sources=None, top_level_domain=None):
        self.owner_id = owner_id
        self.security_token = security_token
        self.domain_name = domain_name
        self.sources = sources
        self.top_level_domain = top_level_domain

    def validate(self):
        self.validate_required(self.domain_name, 'domain_name')

    def to_map(self):
        result = {}
        result['OwnerId'] = self.owner_id
        result['SecurityToken'] = self.security_token
        result['DomainName'] = self.domain_name
        result['Sources'] = self.sources
        result['TopLevelDomain'] = self.top_level_domain
        return result

    def from_map(self, map={}):
        self.owner_id = map.get('OwnerId')
        self.security_token = map.get('SecurityToken')
        self.domain_name = map.get('DomainName')
        self.sources = map.get('Sources')
        self.top_level_domain = map.get('TopLevelDomain')
        return self


class UpdateVodDomainResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class RefreshVodObjectCachesRequest(TeaModel):
    def __init__(self, owner_id=None, security_token=None, object_path=None, object_type=None):
        self.owner_id = owner_id
        self.security_token = security_token
        self.object_path = object_path
        self.object_type = object_type

    def validate(self):
        self.validate_required(self.object_path, 'object_path')

    def to_map(self):
        result = {}
        result['OwnerId'] = self.owner_id
        result['SecurityToken'] = self.security_token
        result['ObjectPath'] = self.object_path
        result['ObjectType'] = self.object_type
        return result

    def from_map(self, map={}):
        self.owner_id = map.get('OwnerId')
        self.security_token = map.get('SecurityToken')
        self.object_path = map.get('ObjectPath')
        self.object_type = map.get('ObjectType')
        return self


class RefreshVodObjectCachesResponse(TeaModel):
    def __init__(self, request_id=None, refresh_task_id=None):
        self.request_id = request_id
        self.refresh_task_id = refresh_task_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.refresh_task_id, 'refresh_task_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['RefreshTaskId'] = self.refresh_task_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.refresh_task_id = map.get('RefreshTaskId')
        return self


class PreloadVodObjectCachesRequest(TeaModel):
    def __init__(self, owner_id=None, security_token=None, object_path=None):
        self.owner_id = owner_id
        self.security_token = security_token
        self.object_path = object_path

    def validate(self):
        self.validate_required(self.object_path, 'object_path')

    def to_map(self):
        result = {}
        result['OwnerId'] = self.owner_id
        result['SecurityToken'] = self.security_token
        result['ObjectPath'] = self.object_path
        return result

    def from_map(self, map={}):
        self.owner_id = map.get('OwnerId')
        self.security_token = map.get('SecurityToken')
        self.object_path = map.get('ObjectPath')
        return self


class PreloadVodObjectCachesResponse(TeaModel):
    def __init__(self, request_id=None, preload_task_id=None):
        self.request_id = request_id
        self.preload_task_id = preload_task_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.preload_task_id, 'preload_task_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['PreloadTaskId'] = self.preload_task_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.preload_task_id = map.get('PreloadTaskId')
        return self


class BatchStartVodDomainRequest(TeaModel):
    def __init__(self, owner_id=None, security_token=None, domain_names=None):
        self.owner_id = owner_id
        self.security_token = security_token
        self.domain_names = domain_names

    def validate(self):
        self.validate_required(self.domain_names, 'domain_names')

    def to_map(self):
        result = {}
        result['OwnerId'] = self.owner_id
        result['SecurityToken'] = self.security_token
        result['DomainNames'] = self.domain_names
        return result

    def from_map(self, map={}):
        self.owner_id = map.get('OwnerId')
        self.security_token = map.get('SecurityToken')
        self.domain_names = map.get('DomainNames')
        return self


class BatchStartVodDomainResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class DescribeVodDomainDetailRequest(TeaModel):
    def __init__(self, owner_id=None, security_token=None, domain_name=None):
        self.owner_id = owner_id
        self.security_token = security_token
        self.domain_name = domain_name

    def validate(self):
        self.validate_required(self.domain_name, 'domain_name')

    def to_map(self):
        result = {}
        result['OwnerId'] = self.owner_id
        result['SecurityToken'] = self.security_token
        result['DomainName'] = self.domain_name
        return result

    def from_map(self, map={}):
        self.owner_id = map.get('OwnerId')
        self.security_token = map.get('SecurityToken')
        self.domain_name = map.get('DomainName')
        return self


class DescribeVodDomainDetailResponse(TeaModel):
    def __init__(self, request_id=None, domain_detail=None):
        self.request_id = request_id
        self.domain_detail = domain_detail

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.domain_detail, 'domain_detail')
        if self.domain_detail:
            self.domain_detail.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.domain_detail is not None:
            result['DomainDetail'] = self.domain_detail.to_map()
        else:
            result['DomainDetail'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('DomainDetail') is not None:
            temp_model = DescribeVodDomainDetailResponseDomainDetail()
            self.domain_detail = temp_model.from_map(map['DomainDetail'])
        else:
            self.domain_detail = None
        return self


class DescribeVodDomainDetailResponseDomainDetailSourcesSource(TeaModel):
    def __init__(self, content=None, type=None, port=None, enabled=None, priority=None):
        self.content = content
        self.type = type
        self.port = port
        self.enabled = enabled
        self.priority = priority

    def validate(self):
        self.validate_required(self.content, 'content')
        self.validate_required(self.type, 'type')
        self.validate_required(self.port, 'port')
        self.validate_required(self.enabled, 'enabled')
        self.validate_required(self.priority, 'priority')

    def to_map(self):
        result = {}
        result['Content'] = self.content
        result['Type'] = self.type
        result['Port'] = self.port
        result['Enabled'] = self.enabled
        result['Priority'] = self.priority
        return result

    def from_map(self, map={}):
        self.content = map.get('Content')
        self.type = map.get('Type')
        self.port = map.get('Port')
        self.enabled = map.get('Enabled')
        self.priority = map.get('Priority')
        return self


class DescribeVodDomainDetailResponseDomainDetailSources(TeaModel):
    def __init__(self, source=None):
        self.source = []

    def validate(self):
        self.validate_required(self.source, 'source')
        if self.source:
            for k in self.source:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Source'] = []
        if self.source is not None:
            for k in self.source:
                result['Source'].append(k.to_map() if k else None)
        else:
            result['Source'] = None
        return result

    def from_map(self, map={}):
        self.source = []
        if map.get('Source') is not None:
            for k in map.get('Source'):
                temp_model = DescribeVodDomainDetailResponseDomainDetailSourcesSource()
                temp_model = temp_model.from_map(k)
                self.source.append(temp_model)
        else:
            self.source = None
        return self


class DescribeVodDomainDetailResponseDomainDetail(TeaModel):
    def __init__(self, gmt_created=None, gmt_modified=None, domain_status=None, cname=None, domain_name=None, description=None, sslprotocol=None, sslpub=None, scope=None, cert_name=None, weight=None, sources=None):
        self.gmt_created = gmt_created
        self.gmt_modified = gmt_modified
        self.domain_status = domain_status
        self.cname = cname
        self.domain_name = domain_name
        self.description = description
        self.sslprotocol = sslprotocol
        self.sslpub = sslpub
        self.scope = scope
        self.cert_name = cert_name
        self.weight = weight
        self.sources = sources

    def validate(self):
        self.validate_required(self.gmt_created, 'gmt_created')
        self.validate_required(self.gmt_modified, 'gmt_modified')
        self.validate_required(self.domain_status, 'domain_status')
        self.validate_required(self.cname, 'cname')
        self.validate_required(self.domain_name, 'domain_name')
        self.validate_required(self.description, 'description')
        self.validate_required(self.sslprotocol, 'sslprotocol')
        self.validate_required(self.sslpub, 'sslpub')
        self.validate_required(self.scope, 'scope')
        self.validate_required(self.cert_name, 'cert_name')
        self.validate_required(self.weight, 'weight')
        self.validate_required(self.sources, 'sources')
        if self.sources:
            self.sources.validate()

    def to_map(self):
        result = {}
        result['GmtCreated'] = self.gmt_created
        result['GmtModified'] = self.gmt_modified
        result['DomainStatus'] = self.domain_status
        result['Cname'] = self.cname
        result['DomainName'] = self.domain_name
        result['Description'] = self.description
        result['SSLProtocol'] = self.sslprotocol
        result['SSLPub'] = self.sslpub
        result['Scope'] = self.scope
        result['CertName'] = self.cert_name
        result['Weight'] = self.weight
        if self.sources is not None:
            result['Sources'] = self.sources.to_map()
        else:
            result['Sources'] = None
        return result

    def from_map(self, map={}):
        self.gmt_created = map.get('GmtCreated')
        self.gmt_modified = map.get('GmtModified')
        self.domain_status = map.get('DomainStatus')
        self.cname = map.get('Cname')
        self.domain_name = map.get('DomainName')
        self.description = map.get('Description')
        self.sslprotocol = map.get('SSLProtocol')
        self.sslpub = map.get('SSLPub')
        self.scope = map.get('Scope')
        self.cert_name = map.get('CertName')
        self.weight = map.get('Weight')
        if map.get('Sources') is not None:
            temp_model = DescribeVodDomainDetailResponseDomainDetailSources()
            self.sources = temp_model.from_map(map['Sources'])
        else:
            self.sources = None
        return self


class DeleteVodTemplateRequest(TeaModel):
    def __init__(self, owner_id=None, resource_owner_account=None, resource_owner_id=None, vod_template_id=None):
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.vod_template_id = vod_template_id

    def validate(self):
        self.validate_required(self.vod_template_id, 'vod_template_id')

    def to_map(self):
        result = {}
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['VodTemplateId'] = self.vod_template_id
        return result

    def from_map(self, map={}):
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.vod_template_id = map.get('VodTemplateId')
        return self


class DeleteVodTemplateResponse(TeaModel):
    def __init__(self, request_id=None, vod_template_id=None):
        self.request_id = request_id
        self.vod_template_id = vod_template_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.vod_template_id, 'vod_template_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['VodTemplateId'] = self.vod_template_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.vod_template_id = map.get('VodTemplateId')
        return self


class GetVodTemplateRequest(TeaModel):
    def __init__(self, owner_id=None, resource_owner_account=None, resource_owner_id=None, vod_template_id=None):
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.vod_template_id = vod_template_id

    def validate(self):
        self.validate_required(self.vod_template_id, 'vod_template_id')

    def to_map(self):
        result = {}
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['VodTemplateId'] = self.vod_template_id
        return result

    def from_map(self, map={}):
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.vod_template_id = map.get('VodTemplateId')
        return self


class GetVodTemplateResponse(TeaModel):
    def __init__(self, request_id=None, vod_template_info=None):
        self.request_id = request_id
        self.vod_template_info = vod_template_info

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.vod_template_info, 'vod_template_info')
        if self.vod_template_info:
            self.vod_template_info.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.vod_template_info is not None:
            result['VodTemplateInfo'] = self.vod_template_info.to_map()
        else:
            result['VodTemplateInfo'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('VodTemplateInfo') is not None:
            temp_model = GetVodTemplateResponseVodTemplateInfo()
            self.vod_template_info = temp_model.from_map(map['VodTemplateInfo'])
        else:
            self.vod_template_info = None
        return self


class GetVodTemplateResponseVodTemplateInfo(TeaModel):
    def __init__(self, name=None, vod_template_id=None, template_type=None, sub_template_type=None, source=None, is_default=None, template_config=None, creation_time=None, modify_time=None):
        self.name = name
        self.vod_template_id = vod_template_id
        self.template_type = template_type
        self.sub_template_type = sub_template_type
        self.source = source
        self.is_default = is_default
        self.template_config = template_config
        self.creation_time = creation_time
        self.modify_time = modify_time

    def validate(self):
        self.validate_required(self.name, 'name')
        self.validate_required(self.vod_template_id, 'vod_template_id')
        self.validate_required(self.template_type, 'template_type')
        self.validate_required(self.sub_template_type, 'sub_template_type')
        self.validate_required(self.source, 'source')
        self.validate_required(self.is_default, 'is_default')
        self.validate_required(self.template_config, 'template_config')
        self.validate_required(self.creation_time, 'creation_time')
        self.validate_required(self.modify_time, 'modify_time')

    def to_map(self):
        result = {}
        result['Name'] = self.name
        result['VodTemplateId'] = self.vod_template_id
        result['TemplateType'] = self.template_type
        result['SubTemplateType'] = self.sub_template_type
        result['Source'] = self.source
        result['IsDefault'] = self.is_default
        result['TemplateConfig'] = self.template_config
        result['CreationTime'] = self.creation_time
        result['ModifyTime'] = self.modify_time
        return result

    def from_map(self, map={}):
        self.name = map.get('Name')
        self.vod_template_id = map.get('VodTemplateId')
        self.template_type = map.get('TemplateType')
        self.sub_template_type = map.get('SubTemplateType')
        self.source = map.get('Source')
        self.is_default = map.get('IsDefault')
        self.template_config = map.get('TemplateConfig')
        self.creation_time = map.get('CreationTime')
        self.modify_time = map.get('ModifyTime')
        return self


class ListVodTemplateRequest(TeaModel):
    def __init__(self, owner_id=None, resource_owner_account=None, resource_owner_id=None, template_type=None, app_id=None):
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.template_type = template_type
        self.app_id = app_id

    def validate(self):
        self.validate_required(self.template_type, 'template_type')

    def to_map(self):
        result = {}
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['TemplateType'] = self.template_type
        result['AppId'] = self.app_id
        return result

    def from_map(self, map={}):
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.template_type = map.get('TemplateType')
        self.app_id = map.get('AppId')
        return self


class ListVodTemplateResponse(TeaModel):
    def __init__(self, request_id=None, vod_template_info_list=None):
        self.request_id = request_id
        self.vod_template_info_list = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.vod_template_info_list, 'vod_template_info_list')
        if self.vod_template_info_list:
            for k in self.vod_template_info_list:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['VodTemplateInfoList'] = []
        if self.vod_template_info_list is not None:
            for k in self.vod_template_info_list:
                result['VodTemplateInfoList'].append(k.to_map() if k else None)
        else:
            result['VodTemplateInfoList'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.vod_template_info_list = []
        if map.get('VodTemplateInfoList') is not None:
            for k in map.get('VodTemplateInfoList'):
                temp_model = ListVodTemplateResponseVodTemplateInfoList()
                temp_model = temp_model.from_map(k)
                self.vod_template_info_list.append(temp_model)
        else:
            self.vod_template_info_list = None
        return self


class ListVodTemplateResponseVodTemplateInfoList(TeaModel):
    def __init__(self, name=None, vod_template_id=None, template_type=None, sub_template_type=None, source=None, is_default=None, template_config=None, creation_time=None, modify_time=None, app_id=None):
        self.name = name
        self.vod_template_id = vod_template_id
        self.template_type = template_type
        self.sub_template_type = sub_template_type
        self.source = source
        self.is_default = is_default
        self.template_config = template_config
        self.creation_time = creation_time
        self.modify_time = modify_time
        self.app_id = app_id

    def validate(self):
        self.validate_required(self.name, 'name')
        self.validate_required(self.vod_template_id, 'vod_template_id')
        self.validate_required(self.template_type, 'template_type')
        self.validate_required(self.sub_template_type, 'sub_template_type')
        self.validate_required(self.source, 'source')
        self.validate_required(self.is_default, 'is_default')
        self.validate_required(self.template_config, 'template_config')
        self.validate_required(self.creation_time, 'creation_time')
        self.validate_required(self.modify_time, 'modify_time')
        self.validate_required(self.app_id, 'app_id')

    def to_map(self):
        result = {}
        result['Name'] = self.name
        result['VodTemplateId'] = self.vod_template_id
        result['TemplateType'] = self.template_type
        result['SubTemplateType'] = self.sub_template_type
        result['Source'] = self.source
        result['IsDefault'] = self.is_default
        result['TemplateConfig'] = self.template_config
        result['CreationTime'] = self.creation_time
        result['ModifyTime'] = self.modify_time
        result['AppId'] = self.app_id
        return result

    def from_map(self, map={}):
        self.name = map.get('Name')
        self.vod_template_id = map.get('VodTemplateId')
        self.template_type = map.get('TemplateType')
        self.sub_template_type = map.get('SubTemplateType')
        self.source = map.get('Source')
        self.is_default = map.get('IsDefault')
        self.template_config = map.get('TemplateConfig')
        self.creation_time = map.get('CreationTime')
        self.modify_time = map.get('ModifyTime')
        self.app_id = map.get('AppId')
        return self


class UpdateVodTemplateRequest(TeaModel):
    def __init__(self, owner_id=None, resource_owner_account=None, resource_owner_id=None, vod_template_id=None, name=None, template_config=None):
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.vod_template_id = vod_template_id
        self.name = name
        self.template_config = template_config

    def validate(self):
        self.validate_required(self.vod_template_id, 'vod_template_id')

    def to_map(self):
        result = {}
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['VodTemplateId'] = self.vod_template_id
        result['Name'] = self.name
        result['TemplateConfig'] = self.template_config
        return result

    def from_map(self, map={}):
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.vod_template_id = map.get('VodTemplateId')
        self.name = map.get('Name')
        self.template_config = map.get('TemplateConfig')
        return self


class UpdateVodTemplateResponse(TeaModel):
    def __init__(self, request_id=None, vod_template_id=None):
        self.request_id = request_id
        self.vod_template_id = vod_template_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.vod_template_id, 'vod_template_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['VodTemplateId'] = self.vod_template_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.vod_template_id = map.get('VodTemplateId')
        return self


class AddVodTemplateRequest(TeaModel):
    def __init__(self, owner_id=None, resource_owner_account=None, resource_owner_id=None, name=None, template_type=None, sub_template_type=None, template_config=None, app_id=None):
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.name = name
        self.template_type = template_type
        self.sub_template_type = sub_template_type
        self.template_config = template_config
        self.app_id = app_id

    def validate(self):
        self.validate_required(self.name, 'name')
        self.validate_required(self.template_type, 'template_type')
        self.validate_required(self.template_config, 'template_config')

    def to_map(self):
        result = {}
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['Name'] = self.name
        result['TemplateType'] = self.template_type
        result['SubTemplateType'] = self.sub_template_type
        result['TemplateConfig'] = self.template_config
        result['AppId'] = self.app_id
        return result

    def from_map(self, map={}):
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.name = map.get('Name')
        self.template_type = map.get('TemplateType')
        self.sub_template_type = map.get('SubTemplateType')
        self.template_config = map.get('TemplateConfig')
        self.app_id = map.get('AppId')
        return self


class AddVodTemplateResponse(TeaModel):
    def __init__(self, request_id=None, vod_template_id=None):
        self.request_id = request_id
        self.vod_template_id = vod_template_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.vod_template_id, 'vod_template_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['VodTemplateId'] = self.vod_template_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.vod_template_id = map.get('VodTemplateId')
        return self


class CreateUploadAttachedMediaRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, title=None, business_type=None, media_ext=None, file_name=None, file_size=None, tags=None, cate_id=None, storage_location=None, description=None, user_data=None, cate_ids=None, app_id=None, icon=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.title = title
        self.business_type = business_type
        self.media_ext = media_ext
        self.file_name = file_name
        self.file_size = file_size
        self.tags = tags
        self.cate_id = cate_id
        self.storage_location = storage_location
        self.description = description
        self.user_data = user_data
        self.cate_ids = cate_ids
        self.app_id = app_id
        self.icon = icon

    def validate(self):
        self.validate_required(self.business_type, 'business_type')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['Title'] = self.title
        result['BusinessType'] = self.business_type
        result['MediaExt'] = self.media_ext
        result['FileName'] = self.file_name
        result['FileSize'] = self.file_size
        result['Tags'] = self.tags
        result['CateId'] = self.cate_id
        result['StorageLocation'] = self.storage_location
        result['Description'] = self.description
        result['UserData'] = self.user_data
        result['CateIds'] = self.cate_ids
        result['AppId'] = self.app_id
        result['Icon'] = self.icon
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.title = map.get('Title')
        self.business_type = map.get('BusinessType')
        self.media_ext = map.get('MediaExt')
        self.file_name = map.get('FileName')
        self.file_size = map.get('FileSize')
        self.tags = map.get('Tags')
        self.cate_id = map.get('CateId')
        self.storage_location = map.get('StorageLocation')
        self.description = map.get('Description')
        self.user_data = map.get('UserData')
        self.cate_ids = map.get('CateIds')
        self.app_id = map.get('AppId')
        self.icon = map.get('Icon')
        return self


class CreateUploadAttachedMediaResponse(TeaModel):
    def __init__(self, request_id=None, media_id=None, media_url=None, upload_address=None, upload_auth=None, file_url=None):
        self.request_id = request_id
        self.media_id = media_id
        self.media_url = media_url
        self.upload_address = upload_address
        self.upload_auth = upload_auth
        self.file_url = file_url

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.media_id, 'media_id')
        self.validate_required(self.media_url, 'media_url')
        self.validate_required(self.upload_address, 'upload_address')
        self.validate_required(self.upload_auth, 'upload_auth')
        self.validate_required(self.file_url, 'file_url')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['MediaId'] = self.media_id
        result['MediaURL'] = self.media_url
        result['UploadAddress'] = self.upload_address
        result['UploadAuth'] = self.upload_auth
        result['FileURL'] = self.file_url
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.media_id = map.get('MediaId')
        self.media_url = map.get('MediaURL')
        self.upload_address = map.get('UploadAddress')
        self.upload_auth = map.get('UploadAuth')
        self.file_url = map.get('FileURL')
        return self


class RegisterMediaRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, register_metadatas=None, template_group_id=None, user_data=None, workflow_id=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.register_metadatas = register_metadatas
        self.template_group_id = template_group_id
        self.user_data = user_data
        self.workflow_id = workflow_id

    def validate(self):
        self.validate_required(self.register_metadatas, 'register_metadatas')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['RegisterMetadatas'] = self.register_metadatas
        result['TemplateGroupId'] = self.template_group_id
        result['UserData'] = self.user_data
        result['WorkflowId'] = self.workflow_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.register_metadatas = map.get('RegisterMetadatas')
        self.template_group_id = map.get('TemplateGroupId')
        self.user_data = map.get('UserData')
        self.workflow_id = map.get('WorkflowId')
        return self


class RegisterMediaResponse(TeaModel):
    def __init__(self, request_id=None, registered_media_list=None, failed_file_urls=None):
        self.request_id = request_id
        self.registered_media_list = []
        self.failed_file_urls = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.registered_media_list, 'registered_media_list')
        if self.registered_media_list:
            for k in self.registered_media_list:
                if k :
                    k.validate()
        self.validate_required(self.failed_file_urls, 'failed_file_urls')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['RegisteredMediaList'] = []
        if self.registered_media_list is not None:
            for k in self.registered_media_list:
                result['RegisteredMediaList'].append(k.to_map() if k else None)
        else:
            result['RegisteredMediaList'] = None
        result['FailedFileURLs'] = []
        if self.failed_file_urls is not None:
            for k in self.failed_file_urls:
                result['FailedFileURLs'].append(k)
        else:
            result['FailedFileURLs'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.registered_media_list = []
        if map.get('RegisteredMediaList') is not None:
            for k in map.get('RegisteredMediaList'):
                temp_model = RegisterMediaResponseRegisteredMediaList()
                temp_model = temp_model.from_map(k)
                self.registered_media_list.append(temp_model)
        else:
            self.registered_media_list = None
        self.failed_file_urls = []
        if map.get('FailedFileURLs') is not None:
            for k in map.get('FailedFileURLs'):
                self.failed_file_urls.append(k)
        else:
            self.failed_file_urls = None
        return self


class RegisterMediaResponseRegisteredMediaList(TeaModel):
    def __init__(self, media_id=None, file_url=None, new_register=None):
        self.media_id = media_id
        self.file_url = file_url
        self.new_register = new_register

    def validate(self):
        self.validate_required(self.media_id, 'media_id')
        self.validate_required(self.file_url, 'file_url')
        self.validate_required(self.new_register, 'new_register')

    def to_map(self):
        result = {}
        result['MediaId'] = self.media_id
        result['FileURL'] = self.file_url
        result['NewRegister'] = self.new_register
        return result

    def from_map(self, map={}):
        self.media_id = map.get('MediaId')
        self.file_url = map.get('FileURL')
        self.new_register = map.get('NewRegister')
        return self


class DeleteWatermarkRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, watermark_id=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.watermark_id = watermark_id

    def validate(self):
        self.validate_required(self.watermark_id, 'watermark_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['WatermarkId'] = self.watermark_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.watermark_id = map.get('WatermarkId')
        return self


class DeleteWatermarkResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class GetWatermarkRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, watermark_id=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.watermark_id = watermark_id

    def validate(self):
        self.validate_required(self.watermark_id, 'watermark_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['WatermarkId'] = self.watermark_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.watermark_id = map.get('WatermarkId')
        return self


class GetWatermarkResponse(TeaModel):
    def __init__(self, request_id=None, watermark_info=None):
        self.request_id = request_id
        self.watermark_info = watermark_info

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.watermark_info, 'watermark_info')
        if self.watermark_info:
            self.watermark_info.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.watermark_info is not None:
            result['WatermarkInfo'] = self.watermark_info.to_map()
        else:
            result['WatermarkInfo'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('WatermarkInfo') is not None:
            temp_model = GetWatermarkResponseWatermarkInfo()
            self.watermark_info = temp_model.from_map(map['WatermarkInfo'])
        else:
            self.watermark_info = None
        return self


class GetWatermarkResponseWatermarkInfo(TeaModel):
    def __init__(self, creation_time=None, type=None, is_default=None, watermark_id=None, name=None, file_url=None, watermark_config=None, app_id=None):
        self.creation_time = creation_time
        self.type = type
        self.is_default = is_default
        self.watermark_id = watermark_id
        self.name = name
        self.file_url = file_url
        self.watermark_config = watermark_config
        self.app_id = app_id

    def validate(self):
        self.validate_required(self.creation_time, 'creation_time')
        self.validate_required(self.type, 'type')
        self.validate_required(self.is_default, 'is_default')
        self.validate_required(self.watermark_id, 'watermark_id')
        self.validate_required(self.name, 'name')
        self.validate_required(self.file_url, 'file_url')
        self.validate_required(self.watermark_config, 'watermark_config')
        self.validate_required(self.app_id, 'app_id')

    def to_map(self):
        result = {}
        result['CreationTime'] = self.creation_time
        result['Type'] = self.type
        result['IsDefault'] = self.is_default
        result['WatermarkId'] = self.watermark_id
        result['Name'] = self.name
        result['FileUrl'] = self.file_url
        result['WatermarkConfig'] = self.watermark_config
        result['AppId'] = self.app_id
        return result

    def from_map(self, map={}):
        self.creation_time = map.get('CreationTime')
        self.type = map.get('Type')
        self.is_default = map.get('IsDefault')
        self.watermark_id = map.get('WatermarkId')
        self.name = map.get('Name')
        self.file_url = map.get('FileUrl')
        self.watermark_config = map.get('WatermarkConfig')
        self.app_id = map.get('AppId')
        return self


class SetDefaultWatermarkRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, watermark_id=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.watermark_id = watermark_id

    def validate(self):
        self.validate_required(self.watermark_id, 'watermark_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['WatermarkId'] = self.watermark_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.watermark_id = map.get('WatermarkId')
        return self


class SetDefaultWatermarkResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class ListWatermarkRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, page_size=None, page_no=None, app_id=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.page_size = page_size
        self.page_no = page_no
        self.app_id = app_id

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['PageSize'] = self.page_size
        result['PageNo'] = self.page_no
        result['AppId'] = self.app_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.page_size = map.get('PageSize')
        self.page_no = map.get('PageNo')
        self.app_id = map.get('AppId')
        return self


class ListWatermarkResponse(TeaModel):
    def __init__(self, request_id=None, watermark_infos=None):
        self.request_id = request_id
        self.watermark_infos = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.watermark_infos, 'watermark_infos')
        if self.watermark_infos:
            for k in self.watermark_infos:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['WatermarkInfos'] = []
        if self.watermark_infos is not None:
            for k in self.watermark_infos:
                result['WatermarkInfos'].append(k.to_map() if k else None)
        else:
            result['WatermarkInfos'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.watermark_infos = []
        if map.get('WatermarkInfos') is not None:
            for k in map.get('WatermarkInfos'):
                temp_model = ListWatermarkResponseWatermarkInfos()
                temp_model = temp_model.from_map(k)
                self.watermark_infos.append(temp_model)
        else:
            self.watermark_infos = None
        return self


class ListWatermarkResponseWatermarkInfos(TeaModel):
    def __init__(self, creation_time=None, type=None, is_default=None, watermark_id=None, name=None, file_url=None, watermark_config=None, app_id=None):
        self.creation_time = creation_time
        self.type = type
        self.is_default = is_default
        self.watermark_id = watermark_id
        self.name = name
        self.file_url = file_url
        self.watermark_config = watermark_config
        self.app_id = app_id

    def validate(self):
        self.validate_required(self.creation_time, 'creation_time')
        self.validate_required(self.type, 'type')
        self.validate_required(self.is_default, 'is_default')
        self.validate_required(self.watermark_id, 'watermark_id')
        self.validate_required(self.name, 'name')
        self.validate_required(self.file_url, 'file_url')
        self.validate_required(self.watermark_config, 'watermark_config')
        self.validate_required(self.app_id, 'app_id')

    def to_map(self):
        result = {}
        result['CreationTime'] = self.creation_time
        result['Type'] = self.type
        result['IsDefault'] = self.is_default
        result['WatermarkId'] = self.watermark_id
        result['Name'] = self.name
        result['FileUrl'] = self.file_url
        result['WatermarkConfig'] = self.watermark_config
        result['AppId'] = self.app_id
        return result

    def from_map(self, map={}):
        self.creation_time = map.get('CreationTime')
        self.type = map.get('Type')
        self.is_default = map.get('IsDefault')
        self.watermark_id = map.get('WatermarkId')
        self.name = map.get('Name')
        self.file_url = map.get('FileUrl')
        self.watermark_config = map.get('WatermarkConfig')
        self.app_id = map.get('AppId')
        return self


class UpdateWatermarkRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, name=None, watermark_id=None, watermark_config=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.name = name
        self.watermark_id = watermark_id
        self.watermark_config = watermark_config

    def validate(self):
        self.validate_required(self.watermark_id, 'watermark_id')
        self.validate_required(self.watermark_config, 'watermark_config')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['Name'] = self.name
        result['WatermarkId'] = self.watermark_id
        result['WatermarkConfig'] = self.watermark_config
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.name = map.get('Name')
        self.watermark_id = map.get('WatermarkId')
        self.watermark_config = map.get('WatermarkConfig')
        return self


class UpdateWatermarkResponse(TeaModel):
    def __init__(self, request_id=None, watermark_info=None):
        self.request_id = request_id
        self.watermark_info = watermark_info

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.watermark_info, 'watermark_info')
        if self.watermark_info:
            self.watermark_info.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.watermark_info is not None:
            result['WatermarkInfo'] = self.watermark_info.to_map()
        else:
            result['WatermarkInfo'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('WatermarkInfo') is not None:
            temp_model = UpdateWatermarkResponseWatermarkInfo()
            self.watermark_info = temp_model.from_map(map['WatermarkInfo'])
        else:
            self.watermark_info = None
        return self


class UpdateWatermarkResponseWatermarkInfo(TeaModel):
    def __init__(self, creation_time=None, type=None, is_default=None, watermark_id=None, name=None, file_url=None, watermark_config=None):
        self.creation_time = creation_time
        self.type = type
        self.is_default = is_default
        self.watermark_id = watermark_id
        self.name = name
        self.file_url = file_url
        self.watermark_config = watermark_config

    def validate(self):
        self.validate_required(self.creation_time, 'creation_time')
        self.validate_required(self.type, 'type')
        self.validate_required(self.is_default, 'is_default')
        self.validate_required(self.watermark_id, 'watermark_id')
        self.validate_required(self.name, 'name')
        self.validate_required(self.file_url, 'file_url')
        self.validate_required(self.watermark_config, 'watermark_config')

    def to_map(self):
        result = {}
        result['CreationTime'] = self.creation_time
        result['Type'] = self.type
        result['IsDefault'] = self.is_default
        result['WatermarkId'] = self.watermark_id
        result['Name'] = self.name
        result['FileUrl'] = self.file_url
        result['WatermarkConfig'] = self.watermark_config
        return result

    def from_map(self, map={}):
        self.creation_time = map.get('CreationTime')
        self.type = map.get('Type')
        self.is_default = map.get('IsDefault')
        self.watermark_id = map.get('WatermarkId')
        self.name = map.get('Name')
        self.file_url = map.get('FileUrl')
        self.watermark_config = map.get('WatermarkConfig')
        return self


class AddWatermarkRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, type=None, name=None, watermark_config=None, file_url=None, app_id=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.type = type
        self.name = name
        self.watermark_config = watermark_config
        self.file_url = file_url
        self.app_id = app_id

    def validate(self):
        self.validate_required(self.type, 'type')
        self.validate_required(self.name, 'name')
        self.validate_required(self.watermark_config, 'watermark_config')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['Type'] = self.type
        result['Name'] = self.name
        result['WatermarkConfig'] = self.watermark_config
        result['FileUrl'] = self.file_url
        result['AppId'] = self.app_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.type = map.get('Type')
        self.name = map.get('Name')
        self.watermark_config = map.get('WatermarkConfig')
        self.file_url = map.get('FileUrl')
        self.app_id = map.get('AppId')
        return self


class AddWatermarkResponse(TeaModel):
    def __init__(self, request_id=None, watermark_info=None):
        self.request_id = request_id
        self.watermark_info = watermark_info

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.watermark_info, 'watermark_info')
        if self.watermark_info:
            self.watermark_info.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.watermark_info is not None:
            result['WatermarkInfo'] = self.watermark_info.to_map()
        else:
            result['WatermarkInfo'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('WatermarkInfo') is not None:
            temp_model = AddWatermarkResponseWatermarkInfo()
            self.watermark_info = temp_model.from_map(map['WatermarkInfo'])
        else:
            self.watermark_info = None
        return self


class AddWatermarkResponseWatermarkInfo(TeaModel):
    def __init__(self, creation_time=None, type=None, is_default=None, watermark_id=None, name=None, file_url=None, watermark_config=None):
        self.creation_time = creation_time
        self.type = type
        self.is_default = is_default
        self.watermark_id = watermark_id
        self.name = name
        self.file_url = file_url
        self.watermark_config = watermark_config

    def validate(self):
        self.validate_required(self.creation_time, 'creation_time')
        self.validate_required(self.type, 'type')
        self.validate_required(self.is_default, 'is_default')
        self.validate_required(self.watermark_id, 'watermark_id')
        self.validate_required(self.name, 'name')
        self.validate_required(self.file_url, 'file_url')
        self.validate_required(self.watermark_config, 'watermark_config')

    def to_map(self):
        result = {}
        result['CreationTime'] = self.creation_time
        result['Type'] = self.type
        result['IsDefault'] = self.is_default
        result['WatermarkId'] = self.watermark_id
        result['Name'] = self.name
        result['FileUrl'] = self.file_url
        result['WatermarkConfig'] = self.watermark_config
        return result

    def from_map(self, map={}):
        self.creation_time = map.get('CreationTime')
        self.type = map.get('Type')
        self.is_default = map.get('IsDefault')
        self.watermark_id = map.get('WatermarkId')
        self.name = map.get('Name')
        self.file_url = map.get('FileUrl')
        self.watermark_config = map.get('WatermarkConfig')
        return self


class GetMediaDNAResultRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_id=None, resource_owner_account=None, owner_account=None, media_id=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_id = resource_owner_id
        self.resource_owner_account = resource_owner_account
        self.owner_account = owner_account
        self.media_id = media_id

    def validate(self):
        self.validate_required(self.media_id, 'media_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerId'] = self.resource_owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['OwnerAccount'] = self.owner_account
        result['MediaId'] = self.media_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.owner_account = map.get('OwnerAccount')
        self.media_id = map.get('MediaId')
        return self


class GetMediaDNAResultResponse(TeaModel):
    def __init__(self, request_id=None, dnaresult=None):
        self.request_id = request_id
        self.dnaresult = dnaresult

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.dnaresult, 'dnaresult')
        if self.dnaresult:
            self.dnaresult.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.dnaresult is not None:
            result['DNAResult'] = self.dnaresult.to_map()
        else:
            result['DNAResult'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('DNAResult') is not None:
            temp_model = GetMediaDNAResultResponseDNAResult()
            self.dnaresult = temp_model.from_map(map['DNAResult'])
        else:
            self.dnaresult = None
        return self


class GetMediaDNAResultResponseDNAResultVideoDNADetailInput(TeaModel):
    def __init__(self, start=None, duration=None):
        self.start = start
        self.duration = duration

    def validate(self):
        self.validate_required(self.start, 'start')
        self.validate_required(self.duration, 'duration')

    def to_map(self):
        result = {}
        result['Start'] = self.start
        result['Duration'] = self.duration
        return result

    def from_map(self, map={}):
        self.start = map.get('Start')
        self.duration = map.get('Duration')
        return self


class GetMediaDNAResultResponseDNAResultVideoDNADetailDuplication(TeaModel):
    def __init__(self, start=None, duration=None):
        self.start = start
        self.duration = duration

    def validate(self):
        self.validate_required(self.start, 'start')
        self.validate_required(self.duration, 'duration')

    def to_map(self):
        result = {}
        result['Start'] = self.start
        result['Duration'] = self.duration
        return result

    def from_map(self, map={}):
        self.start = map.get('Start')
        self.duration = map.get('Duration')
        return self


class GetMediaDNAResultResponseDNAResultVideoDNADetail(TeaModel):
    def __init__(self, input=None, duplication=None):
        self.input = input
        self.duplication = duplication

    def validate(self):
        self.validate_required(self.input, 'input')
        if self.input:
            self.input.validate()
        self.validate_required(self.duplication, 'duplication')
        if self.duplication:
            self.duplication.validate()

    def to_map(self):
        result = {}
        if self.input is not None:
            result['Input'] = self.input.to_map()
        else:
            result['Input'] = None
        if self.duplication is not None:
            result['Duplication'] = self.duplication.to_map()
        else:
            result['Duplication'] = None
        return result

    def from_map(self, map={}):
        if map.get('Input') is not None:
            temp_model = GetMediaDNAResultResponseDNAResultVideoDNADetailInput()
            self.input = temp_model.from_map(map['Input'])
        else:
            self.input = None
        if map.get('Duplication') is not None:
            temp_model = GetMediaDNAResultResponseDNAResultVideoDNADetailDuplication()
            self.duplication = temp_model.from_map(map['Duplication'])
        else:
            self.duplication = None
        return self


class GetMediaDNAResultResponseDNAResultVideoDNA(TeaModel):
    def __init__(self, primary_key=None, similarity=None, detail=None):
        self.primary_key = primary_key
        self.similarity = similarity
        self.detail = []

    def validate(self):
        self.validate_required(self.primary_key, 'primary_key')
        self.validate_required(self.similarity, 'similarity')
        self.validate_required(self.detail, 'detail')
        if self.detail:
            for k in self.detail:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['PrimaryKey'] = self.primary_key
        result['Similarity'] = self.similarity
        result['Detail'] = []
        if self.detail is not None:
            for k in self.detail:
                result['Detail'].append(k.to_map() if k else None)
        else:
            result['Detail'] = None
        return result

    def from_map(self, map={}):
        self.primary_key = map.get('PrimaryKey')
        self.similarity = map.get('Similarity')
        self.detail = []
        if map.get('Detail') is not None:
            for k in map.get('Detail'):
                temp_model = GetMediaDNAResultResponseDNAResultVideoDNADetail()
                temp_model = temp_model.from_map(k)
                self.detail.append(temp_model)
        else:
            self.detail = None
        return self


class GetMediaDNAResultResponseDNAResult(TeaModel):
    def __init__(self, video_dna=None):
        self.video_dna = []

    def validate(self):
        self.validate_required(self.video_dna, 'video_dna')
        if self.video_dna:
            for k in self.video_dna:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['VideoDNA'] = []
        if self.video_dna is not None:
            for k in self.video_dna:
                result['VideoDNA'].append(k.to_map() if k else None)
        else:
            result['VideoDNA'] = None
        return result

    def from_map(self, map={}):
        self.video_dna = []
        if map.get('VideoDNA') is not None:
            for k in map.get('VideoDNA'):
                temp_model = GetMediaDNAResultResponseDNAResultVideoDNA()
                temp_model = temp_model.from_map(k)
                self.video_dna.append(temp_model)
        else:
            self.video_dna = None
        return self


class DeleteMezzaninesRequest(TeaModel):
    def __init__(self, owner_id=None, resource_owner_account=None, resource_owner_id=None, video_ids=None, force=None):
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.video_ids = video_ids
        self.force = force

    def validate(self):
        self.validate_required(self.video_ids, 'video_ids')

    def to_map(self):
        result = {}
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['VideoIds'] = self.video_ids
        result['Force'] = self.force
        return result

    def from_map(self, map={}):
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.video_ids = map.get('VideoIds')
        self.force = map.get('Force')
        return self


class DeleteMezzaninesResponse(TeaModel):
    def __init__(self, request_id=None, non_exist_video_ids=None, un_removeable_video_ids=None):
        self.request_id = request_id
        self.non_exist_video_ids = []
        self.un_removeable_video_ids = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.non_exist_video_ids, 'non_exist_video_ids')
        self.validate_required(self.un_removeable_video_ids, 'un_removeable_video_ids')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['NonExistVideoIds'] = []
        if self.non_exist_video_ids is not None:
            for k in self.non_exist_video_ids:
                result['NonExistVideoIds'].append(k)
        else:
            result['NonExistVideoIds'] = None
        result['UnRemoveableVideoIds'] = []
        if self.un_removeable_video_ids is not None:
            for k in self.un_removeable_video_ids:
                result['UnRemoveableVideoIds'].append(k)
        else:
            result['UnRemoveableVideoIds'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.non_exist_video_ids = []
        if map.get('NonExistVideoIds') is not None:
            for k in map.get('NonExistVideoIds'):
                self.non_exist_video_ids.append(k)
        else:
            self.non_exist_video_ids = None
        self.un_removeable_video_ids = []
        if map.get('UnRemoveableVideoIds') is not None:
            for k in map.get('UnRemoveableVideoIds'):
                self.un_removeable_video_ids.append(k)
        else:
            self.un_removeable_video_ids = None
        return self


class UpdateImageInfosRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, resource_real_owner_id=None, update_content=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.resource_real_owner_id = resource_real_owner_id
        self.update_content = update_content

    def validate(self):
        self.validate_required(self.update_content, 'update_content')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['ResourceRealOwnerId'] = self.resource_real_owner_id
        result['UpdateContent'] = self.update_content
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.resource_real_owner_id = map.get('ResourceRealOwnerId')
        self.update_content = map.get('UpdateContent')
        return self


class UpdateImageInfosResponse(TeaModel):
    def __init__(self, request_id=None, non_exist_image_ids=None):
        self.request_id = request_id
        self.non_exist_image_ids = non_exist_image_ids

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.non_exist_image_ids, 'non_exist_image_ids')
        if self.non_exist_image_ids:
            self.non_exist_image_ids.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.non_exist_image_ids is not None:
            result['NonExistImageIds'] = self.non_exist_image_ids.to_map()
        else:
            result['NonExistImageIds'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('NonExistImageIds') is not None:
            temp_model = UpdateImageInfosResponseNonExistImageIds()
            self.non_exist_image_ids = temp_model.from_map(map['NonExistImageIds'])
        else:
            self.non_exist_image_ids = None
        return self


class UpdateImageInfosResponseNonExistImageIds(TeaModel):
    def __init__(self, image_id=None):
        self.image_id = []

    def validate(self):
        self.validate_required(self.image_id, 'image_id')

    def to_map(self):
        result = {}
        result['ImageId'] = []
        if self.image_id is not None:
            for k in self.image_id:
                result['ImageId'].append(k)
        else:
            result['ImageId'] = None
        return result

    def from_map(self, map={}):
        self.image_id = []
        if map.get('ImageId') is not None:
            for k in map.get('ImageId'):
                self.image_id.append(k)
        else:
            self.image_id = None
        return self


class DeleteImageRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, delete_image_type=None, image_urls=None, image_ids=None, video_id=None, image_type=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.delete_image_type = delete_image_type
        self.image_urls = image_urls
        self.image_ids = image_ids
        self.video_id = video_id
        self.image_type = image_type

    def validate(self):
        self.validate_required(self.delete_image_type, 'delete_image_type')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DeleteImageType'] = self.delete_image_type
        result['ImageURLs'] = self.image_urls
        result['ImageIds'] = self.image_ids
        result['VideoId'] = self.video_id
        result['ImageType'] = self.image_type
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.delete_image_type = map.get('DeleteImageType')
        self.image_urls = map.get('ImageURLs')
        self.image_ids = map.get('ImageIds')
        self.video_id = map.get('VideoId')
        self.image_type = map.get('ImageType')
        return self


class DeleteImageResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class ListAuditSecurityIpRequest(TeaModel):
    def __init__(self, security_group_name=None):
        self.security_group_name = security_group_name

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['SecurityGroupName'] = self.security_group_name
        return result

    def from_map(self, map={}):
        self.security_group_name = map.get('SecurityGroupName')
        return self


class ListAuditSecurityIpResponse(TeaModel):
    def __init__(self, request_id=None, security_ip_list=None):
        self.request_id = request_id
        self.security_ip_list = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.security_ip_list, 'security_ip_list')
        if self.security_ip_list:
            for k in self.security_ip_list:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['SecurityIpList'] = []
        if self.security_ip_list is not None:
            for k in self.security_ip_list:
                result['SecurityIpList'].append(k.to_map() if k else None)
        else:
            result['SecurityIpList'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.security_ip_list = []
        if map.get('SecurityIpList') is not None:
            for k in map.get('SecurityIpList'):
                temp_model = ListAuditSecurityIpResponseSecurityIpList()
                temp_model = temp_model.from_map(k)
                self.security_ip_list.append(temp_model)
        else:
            self.security_ip_list = None
        return self


class ListAuditSecurityIpResponseSecurityIpList(TeaModel):
    def __init__(self, security_group_name=None, ips=None, creation_time=None, modification_time=None):
        self.security_group_name = security_group_name
        self.ips = ips
        self.creation_time = creation_time
        self.modification_time = modification_time

    def validate(self):
        self.validate_required(self.security_group_name, 'security_group_name')
        self.validate_required(self.ips, 'ips')
        self.validate_required(self.creation_time, 'creation_time')
        self.validate_required(self.modification_time, 'modification_time')

    def to_map(self):
        result = {}
        result['SecurityGroupName'] = self.security_group_name
        result['Ips'] = self.ips
        result['CreationTime'] = self.creation_time
        result['ModificationTime'] = self.modification_time
        return result

    def from_map(self, map={}):
        self.security_group_name = map.get('SecurityGroupName')
        self.ips = map.get('Ips')
        self.creation_time = map.get('CreationTime')
        self.modification_time = map.get('ModificationTime')
        return self


class SetAuditSecurityIpRequest(TeaModel):
    def __init__(self, security_group_name=None, ips=None, operate_mode=None):
        self.security_group_name = security_group_name
        self.ips = ips
        self.operate_mode = operate_mode

    def validate(self):
        self.validate_required(self.ips, 'ips')

    def to_map(self):
        result = {}
        result['SecurityGroupName'] = self.security_group_name
        result['Ips'] = self.ips
        result['OperateMode'] = self.operate_mode
        return result

    def from_map(self, map={}):
        self.security_group_name = map.get('SecurityGroupName')
        self.ips = map.get('Ips')
        self.operate_mode = map.get('OperateMode')
        return self


class SetAuditSecurityIpResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class UploadMediaByURLRequest(TeaModel):
    def __init__(self, owner_id=None, resource_owner_account=None, resource_owner_id=None, upload_urls=None, template_group_id=None, storage_location=None, upload_metadatas=None, priority=None, message_callback=None, user_data=None, app_id=None, workflow_id=None):
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.upload_urls = upload_urls
        self.template_group_id = template_group_id
        self.storage_location = storage_location
        self.upload_metadatas = upload_metadatas
        self.priority = priority
        self.message_callback = message_callback
        self.user_data = user_data
        self.app_id = app_id
        self.workflow_id = workflow_id

    def validate(self):
        self.validate_required(self.upload_urls, 'upload_urls')

    def to_map(self):
        result = {}
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['UploadURLs'] = self.upload_urls
        result['TemplateGroupId'] = self.template_group_id
        result['StorageLocation'] = self.storage_location
        result['UploadMetadatas'] = self.upload_metadatas
        result['Priority'] = self.priority
        result['MessageCallback'] = self.message_callback
        result['UserData'] = self.user_data
        result['AppId'] = self.app_id
        result['WorkflowId'] = self.workflow_id
        return result

    def from_map(self, map={}):
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.upload_urls = map.get('UploadURLs')
        self.template_group_id = map.get('TemplateGroupId')
        self.storage_location = map.get('StorageLocation')
        self.upload_metadatas = map.get('UploadMetadatas')
        self.priority = map.get('Priority')
        self.message_callback = map.get('MessageCallback')
        self.user_data = map.get('UserData')
        self.app_id = map.get('AppId')
        self.workflow_id = map.get('WorkflowId')
        return self


class UploadMediaByURLResponse(TeaModel):
    def __init__(self, request_id=None, upload_jobs=None):
        self.request_id = request_id
        self.upload_jobs = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.upload_jobs, 'upload_jobs')
        if self.upload_jobs:
            for k in self.upload_jobs:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['UploadJobs'] = []
        if self.upload_jobs is not None:
            for k in self.upload_jobs:
                result['UploadJobs'].append(k.to_map() if k else None)
        else:
            result['UploadJobs'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.upload_jobs = []
        if map.get('UploadJobs') is not None:
            for k in map.get('UploadJobs'):
                temp_model = UploadMediaByURLResponseUploadJobs()
                temp_model = temp_model.from_map(k)
                self.upload_jobs.append(temp_model)
        else:
            self.upload_jobs = None
        return self


class UploadMediaByURLResponseUploadJobs(TeaModel):
    def __init__(self, job_id=None, source_url=None):
        self.job_id = job_id
        self.source_url = source_url

    def validate(self):
        self.validate_required(self.job_id, 'job_id')
        self.validate_required(self.source_url, 'source_url')

    def to_map(self):
        result = {}
        result['JobId'] = self.job_id
        result['SourceURL'] = self.source_url
        return result

    def from_map(self, map={}):
        self.job_id = map.get('JobId')
        self.source_url = map.get('SourceURL')
        return self


class UpdateVideoInfosRequest(TeaModel):
    def __init__(self, owner_id=None, resource_owner_account=None, resource_owner_id=None, update_content=None):
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.update_content = update_content

    def validate(self):
        self.validate_required(self.update_content, 'update_content')

    def to_map(self):
        result = {}
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['UpdateContent'] = self.update_content
        return result

    def from_map(self, map={}):
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.update_content = map.get('UpdateContent')
        return self


class UpdateVideoInfosResponse(TeaModel):
    def __init__(self, request_id=None, non_exist_video_ids=None, forbidden_video_ids=None):
        self.request_id = request_id
        self.non_exist_video_ids = []
        self.forbidden_video_ids = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.non_exist_video_ids, 'non_exist_video_ids')
        self.validate_required(self.forbidden_video_ids, 'forbidden_video_ids')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['NonExistVideoIds'] = []
        if self.non_exist_video_ids is not None:
            for k in self.non_exist_video_ids:
                result['NonExistVideoIds'].append(k)
        else:
            result['NonExistVideoIds'] = None
        result['ForbiddenVideoIds'] = []
        if self.forbidden_video_ids is not None:
            for k in self.forbidden_video_ids:
                result['ForbiddenVideoIds'].append(k)
        else:
            result['ForbiddenVideoIds'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.non_exist_video_ids = []
        if map.get('NonExistVideoIds') is not None:
            for k in map.get('NonExistVideoIds'):
                self.non_exist_video_ids.append(k)
        else:
            self.non_exist_video_ids = None
        self.forbidden_video_ids = []
        if map.get('ForbiddenVideoIds') is not None:
            for k in map.get('ForbiddenVideoIds'):
                self.forbidden_video_ids.append(k)
        else:
            self.forbidden_video_ids = None
        return self


class SearchMediaRequest(TeaModel):
    def __init__(self, owner_id=None, resource_owner_account=None, resource_owner_id=None, search_type=None, fields=None, match=None, sort_by=None, page_no=None, page_size=None, scroll_token=None, session_id=None):
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.search_type = search_type
        self.fields = fields
        self.match = match
        self.sort_by = sort_by
        self.page_no = page_no
        self.page_size = page_size
        self.scroll_token = scroll_token
        self.session_id = session_id

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['SearchType'] = self.search_type
        result['Fields'] = self.fields
        result['Match'] = self.match
        result['SortBy'] = self.sort_by
        result['PageNo'] = self.page_no
        result['PageSize'] = self.page_size
        result['ScrollToken'] = self.scroll_token
        result['SessionId'] = self.session_id
        return result

    def from_map(self, map={}):
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.search_type = map.get('SearchType')
        self.fields = map.get('Fields')
        self.match = map.get('Match')
        self.sort_by = map.get('SortBy')
        self.page_no = map.get('PageNo')
        self.page_size = map.get('PageSize')
        self.scroll_token = map.get('ScrollToken')
        self.session_id = map.get('SessionId')
        return self


class SearchMediaResponse(TeaModel):
    def __init__(self, request_id=None, scroll_token=None, total=None, media_list=None):
        self.request_id = request_id
        self.scroll_token = scroll_token
        self.total = total
        self.media_list = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.scroll_token, 'scroll_token')
        self.validate_required(self.total, 'total')
        self.validate_required(self.media_list, 'media_list')
        if self.media_list:
            for k in self.media_list:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['ScrollToken'] = self.scroll_token
        result['Total'] = self.total
        result['MediaList'] = []
        if self.media_list is not None:
            for k in self.media_list:
                result['MediaList'].append(k.to_map() if k else None)
        else:
            result['MediaList'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.scroll_token = map.get('ScrollToken')
        self.total = map.get('Total')
        self.media_list = []
        if map.get('MediaList') is not None:
            for k in map.get('MediaList'):
                temp_model = SearchMediaResponseMediaList()
                temp_model = temp_model.from_map(k)
                self.media_list.append(temp_model)
        else:
            self.media_list = None
        return self


class SearchMediaResponseMediaListVideo(TeaModel):
    def __init__(self, video_id=None, media_source=None, media_type=None, title=None, tags=None, status=None, size=None, duration=None, description=None, modification_time=None, creation_time=None, cover_url=None, cate_id=None, cate_name=None, download_switch=None, preprocess_status=None, storage_location=None, region_id=None, transcode_mode=None, audit_status=None, audit_aistatus=None, audit_manual_status=None, audit_airesult=None, audit_template_id=None, custom_media_info=None, app_id=None, snapshots=None, sprite_snapshots=None):
        self.video_id = video_id
        self.media_source = media_source
        self.media_type = media_type
        self.title = title
        self.tags = tags
        self.status = status
        self.size = size
        self.duration = duration
        self.description = description
        self.modification_time = modification_time
        self.creation_time = creation_time
        self.cover_url = cover_url
        self.cate_id = cate_id
        self.cate_name = cate_name
        self.download_switch = download_switch
        self.preprocess_status = preprocess_status
        self.storage_location = storage_location
        self.region_id = region_id
        self.transcode_mode = transcode_mode
        self.audit_status = audit_status
        self.audit_aistatus = audit_aistatus
        self.audit_manual_status = audit_manual_status
        self.audit_airesult = audit_airesult
        self.audit_template_id = audit_template_id
        self.custom_media_info = custom_media_info
        self.app_id = app_id
        self.snapshots = []
        self.sprite_snapshots = []

    def validate(self):
        self.validate_required(self.video_id, 'video_id')
        self.validate_required(self.media_source, 'media_source')
        self.validate_required(self.media_type, 'media_type')
        self.validate_required(self.title, 'title')
        self.validate_required(self.tags, 'tags')
        self.validate_required(self.status, 'status')
        self.validate_required(self.size, 'size')
        self.validate_required(self.duration, 'duration')
        self.validate_required(self.description, 'description')
        self.validate_required(self.modification_time, 'modification_time')
        self.validate_required(self.creation_time, 'creation_time')
        self.validate_required(self.cover_url, 'cover_url')
        self.validate_required(self.cate_id, 'cate_id')
        self.validate_required(self.cate_name, 'cate_name')
        self.validate_required(self.download_switch, 'download_switch')
        self.validate_required(self.preprocess_status, 'preprocess_status')
        self.validate_required(self.storage_location, 'storage_location')
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.transcode_mode, 'transcode_mode')
        self.validate_required(self.audit_status, 'audit_status')
        self.validate_required(self.audit_aistatus, 'audit_aistatus')
        self.validate_required(self.audit_manual_status, 'audit_manual_status')
        self.validate_required(self.audit_airesult, 'audit_airesult')
        self.validate_required(self.audit_template_id, 'audit_template_id')
        self.validate_required(self.custom_media_info, 'custom_media_info')
        self.validate_required(self.app_id, 'app_id')
        self.validate_required(self.snapshots, 'snapshots')
        self.validate_required(self.sprite_snapshots, 'sprite_snapshots')

    def to_map(self):
        result = {}
        result['VideoId'] = self.video_id
        result['MediaSource'] = self.media_source
        result['MediaType'] = self.media_type
        result['Title'] = self.title
        result['Tags'] = self.tags
        result['Status'] = self.status
        result['Size'] = self.size
        result['Duration'] = self.duration
        result['Description'] = self.description
        result['ModificationTime'] = self.modification_time
        result['CreationTime'] = self.creation_time
        result['CoverURL'] = self.cover_url
        result['CateId'] = self.cate_id
        result['CateName'] = self.cate_name
        result['DownloadSwitch'] = self.download_switch
        result['PreprocessStatus'] = self.preprocess_status
        result['StorageLocation'] = self.storage_location
        result['RegionId'] = self.region_id
        result['TranscodeMode'] = self.transcode_mode
        result['AuditStatus'] = self.audit_status
        result['AuditAIStatus'] = self.audit_aistatus
        result['AuditManualStatus'] = self.audit_manual_status
        result['AuditAIResult'] = self.audit_airesult
        result['AuditTemplateId'] = self.audit_template_id
        result['CustomMediaInfo'] = self.custom_media_info
        result['AppId'] = self.app_id
        result['Snapshots'] = []
        if self.snapshots is not None:
            for k in self.snapshots:
                result['Snapshots'].append(k)
        else:
            result['Snapshots'] = None
        result['SpriteSnapshots'] = []
        if self.sprite_snapshots is not None:
            for k in self.sprite_snapshots:
                result['SpriteSnapshots'].append(k)
        else:
            result['SpriteSnapshots'] = None
        return result

    def from_map(self, map={}):
        self.video_id = map.get('VideoId')
        self.media_source = map.get('MediaSource')
        self.media_type = map.get('MediaType')
        self.title = map.get('Title')
        self.tags = map.get('Tags')
        self.status = map.get('Status')
        self.size = map.get('Size')
        self.duration = map.get('Duration')
        self.description = map.get('Description')
        self.modification_time = map.get('ModificationTime')
        self.creation_time = map.get('CreationTime')
        self.cover_url = map.get('CoverURL')
        self.cate_id = map.get('CateId')
        self.cate_name = map.get('CateName')
        self.download_switch = map.get('DownloadSwitch')
        self.preprocess_status = map.get('PreprocessStatus')
        self.storage_location = map.get('StorageLocation')
        self.region_id = map.get('RegionId')
        self.transcode_mode = map.get('TranscodeMode')
        self.audit_status = map.get('AuditStatus')
        self.audit_aistatus = map.get('AuditAIStatus')
        self.audit_manual_status = map.get('AuditManualStatus')
        self.audit_airesult = map.get('AuditAIResult')
        self.audit_template_id = map.get('AuditTemplateId')
        self.custom_media_info = map.get('CustomMediaInfo')
        self.app_id = map.get('AppId')
        self.snapshots = []
        if map.get('Snapshots') is not None:
            for k in map.get('Snapshots'):
                self.snapshots.append(k)
        else:
            self.snapshots = None
        self.sprite_snapshots = []
        if map.get('SpriteSnapshots') is not None:
            for k in map.get('SpriteSnapshots'):
                self.sprite_snapshots.append(k)
        else:
            self.sprite_snapshots = None
        return self


class SearchMediaResponseMediaListAudio(TeaModel):
    def __init__(self, audio_id=None, media_source=None, title=None, tags=None, status=None, size=None, duration=None, description=None, modification_time=None, creation_time=None, cover_url=None, cate_id=None, cate_name=None, download_switch=None, preprocess_status=None, storage_location=None, region_id=None, transcode_mode=None, audit_status=None, audit_aistatus=None, audit_manual_status=None, audit_airesult=None, audit_template_id=None, custom_media_info=None, app_id=None, snapshots=None, sprite_snapshots=None):
        self.audio_id = audio_id
        self.media_source = media_source
        self.title = title
        self.tags = tags
        self.status = status
        self.size = size
        self.duration = duration
        self.description = description
        self.modification_time = modification_time
        self.creation_time = creation_time
        self.cover_url = cover_url
        self.cate_id = cate_id
        self.cate_name = cate_name
        self.download_switch = download_switch
        self.preprocess_status = preprocess_status
        self.storage_location = storage_location
        self.region_id = region_id
        self.transcode_mode = transcode_mode
        self.audit_status = audit_status
        self.audit_aistatus = audit_aistatus
        self.audit_manual_status = audit_manual_status
        self.audit_airesult = audit_airesult
        self.audit_template_id = audit_template_id
        self.custom_media_info = custom_media_info
        self.app_id = app_id
        self.snapshots = []
        self.sprite_snapshots = []

    def validate(self):
        self.validate_required(self.audio_id, 'audio_id')
        self.validate_required(self.media_source, 'media_source')
        self.validate_required(self.title, 'title')
        self.validate_required(self.tags, 'tags')
        self.validate_required(self.status, 'status')
        self.validate_required(self.size, 'size')
        self.validate_required(self.duration, 'duration')
        self.validate_required(self.description, 'description')
        self.validate_required(self.modification_time, 'modification_time')
        self.validate_required(self.creation_time, 'creation_time')
        self.validate_required(self.cover_url, 'cover_url')
        self.validate_required(self.cate_id, 'cate_id')
        self.validate_required(self.cate_name, 'cate_name')
        self.validate_required(self.download_switch, 'download_switch')
        self.validate_required(self.preprocess_status, 'preprocess_status')
        self.validate_required(self.storage_location, 'storage_location')
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.transcode_mode, 'transcode_mode')
        self.validate_required(self.audit_status, 'audit_status')
        self.validate_required(self.audit_aistatus, 'audit_aistatus')
        self.validate_required(self.audit_manual_status, 'audit_manual_status')
        self.validate_required(self.audit_airesult, 'audit_airesult')
        self.validate_required(self.audit_template_id, 'audit_template_id')
        self.validate_required(self.custom_media_info, 'custom_media_info')
        self.validate_required(self.app_id, 'app_id')
        self.validate_required(self.snapshots, 'snapshots')
        self.validate_required(self.sprite_snapshots, 'sprite_snapshots')

    def to_map(self):
        result = {}
        result['AudioId'] = self.audio_id
        result['MediaSource'] = self.media_source
        result['Title'] = self.title
        result['Tags'] = self.tags
        result['Status'] = self.status
        result['Size'] = self.size
        result['Duration'] = self.duration
        result['Description'] = self.description
        result['ModificationTime'] = self.modification_time
        result['CreationTime'] = self.creation_time
        result['CoverURL'] = self.cover_url
        result['CateId'] = self.cate_id
        result['CateName'] = self.cate_name
        result['DownloadSwitch'] = self.download_switch
        result['PreprocessStatus'] = self.preprocess_status
        result['StorageLocation'] = self.storage_location
        result['RegionId'] = self.region_id
        result['TranscodeMode'] = self.transcode_mode
        result['AuditStatus'] = self.audit_status
        result['AuditAIStatus'] = self.audit_aistatus
        result['AuditManualStatus'] = self.audit_manual_status
        result['AuditAIResult'] = self.audit_airesult
        result['AuditTemplateId'] = self.audit_template_id
        result['CustomMediaInfo'] = self.custom_media_info
        result['AppId'] = self.app_id
        result['Snapshots'] = []
        if self.snapshots is not None:
            for k in self.snapshots:
                result['Snapshots'].append(k)
        else:
            result['Snapshots'] = None
        result['SpriteSnapshots'] = []
        if self.sprite_snapshots is not None:
            for k in self.sprite_snapshots:
                result['SpriteSnapshots'].append(k)
        else:
            result['SpriteSnapshots'] = None
        return result

    def from_map(self, map={}):
        self.audio_id = map.get('AudioId')
        self.media_source = map.get('MediaSource')
        self.title = map.get('Title')
        self.tags = map.get('Tags')
        self.status = map.get('Status')
        self.size = map.get('Size')
        self.duration = map.get('Duration')
        self.description = map.get('Description')
        self.modification_time = map.get('ModificationTime')
        self.creation_time = map.get('CreationTime')
        self.cover_url = map.get('CoverURL')
        self.cate_id = map.get('CateId')
        self.cate_name = map.get('CateName')
        self.download_switch = map.get('DownloadSwitch')
        self.preprocess_status = map.get('PreprocessStatus')
        self.storage_location = map.get('StorageLocation')
        self.region_id = map.get('RegionId')
        self.transcode_mode = map.get('TranscodeMode')
        self.audit_status = map.get('AuditStatus')
        self.audit_aistatus = map.get('AuditAIStatus')
        self.audit_manual_status = map.get('AuditManualStatus')
        self.audit_airesult = map.get('AuditAIResult')
        self.audit_template_id = map.get('AuditTemplateId')
        self.custom_media_info = map.get('CustomMediaInfo')
        self.app_id = map.get('AppId')
        self.snapshots = []
        if map.get('Snapshots') is not None:
            for k in map.get('Snapshots'):
                self.snapshots.append(k)
        else:
            self.snapshots = None
        self.sprite_snapshots = []
        if map.get('SpriteSnapshots') is not None:
            for k in map.get('SpriteSnapshots'):
                self.sprite_snapshots.append(k)
        else:
            self.sprite_snapshots = None
        return self


class SearchMediaResponseMediaListImage(TeaModel):
    def __init__(self, title=None, image_id=None, cate_id=None, cate_name=None, ext=None, creation_time=None, modification_time=None, tags=None, type=None, _url=None, status=None, description=None, storage_location=None, region_id=None, app_id=None):
        self.title = title
        self.image_id = image_id
        self.cate_id = cate_id
        self.cate_name = cate_name
        self.ext = ext
        self.creation_time = creation_time
        self.modification_time = modification_time
        self.tags = tags
        self.type = type
        self._url = _url
        self.status = status
        self.description = description
        self.storage_location = storage_location
        self.region_id = region_id
        self.app_id = app_id

    def validate(self):
        self.validate_required(self.title, 'title')
        self.validate_required(self.image_id, 'image_id')
        self.validate_required(self.cate_id, 'cate_id')
        self.validate_required(self.cate_name, 'cate_name')
        self.validate_required(self.ext, 'ext')
        self.validate_required(self.creation_time, 'creation_time')
        self.validate_required(self.modification_time, 'modification_time')
        self.validate_required(self.tags, 'tags')
        self.validate_required(self.type, 'type')
        self.validate_required(self._url, '_url')
        self.validate_required(self.status, 'status')
        self.validate_required(self.description, 'description')
        self.validate_required(self.storage_location, 'storage_location')
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.app_id, 'app_id')

    def to_map(self):
        result = {}
        result['Title'] = self.title
        result['ImageId'] = self.image_id
        result['CateId'] = self.cate_id
        result['CateName'] = self.cate_name
        result['Ext'] = self.ext
        result['CreationTime'] = self.creation_time
        result['ModificationTime'] = self.modification_time
        result['Tags'] = self.tags
        result['Type'] = self.type
        result['URL'] = self._url
        result['Status'] = self.status
        result['Description'] = self.description
        result['StorageLocation'] = self.storage_location
        result['RegionId'] = self.region_id
        result['AppId'] = self.app_id
        return result

    def from_map(self, map={}):
        self.title = map.get('Title')
        self.image_id = map.get('ImageId')
        self.cate_id = map.get('CateId')
        self.cate_name = map.get('CateName')
        self.ext = map.get('Ext')
        self.creation_time = map.get('CreationTime')
        self.modification_time = map.get('ModificationTime')
        self.tags = map.get('Tags')
        self.type = map.get('Type')
        self._url = map.get('URL')
        self.status = map.get('Status')
        self.description = map.get('Description')
        self.storage_location = map.get('StorageLocation')
        self.region_id = map.get('RegionId')
        self.app_id = map.get('AppId')
        return self


class SearchMediaResponseMediaListAttachedMediaCategories(TeaModel):
    def __init__(self, cate_id=None, cate_name=None, level=None, parent_id=None):
        self.cate_id = cate_id
        self.cate_name = cate_name
        self.level = level
        self.parent_id = parent_id

    def validate(self):
        self.validate_required(self.cate_id, 'cate_id')
        self.validate_required(self.cate_name, 'cate_name')
        self.validate_required(self.level, 'level')
        self.validate_required(self.parent_id, 'parent_id')

    def to_map(self):
        result = {}
        result['CateId'] = self.cate_id
        result['CateName'] = self.cate_name
        result['Level'] = self.level
        result['ParentId'] = self.parent_id
        return result

    def from_map(self, map={}):
        self.cate_id = map.get('CateId')
        self.cate_name = map.get('CateName')
        self.level = map.get('Level')
        self.parent_id = map.get('ParentId')
        return self


class SearchMediaResponseMediaListAttachedMedia(TeaModel):
    def __init__(self, title=None, media_id=None, ext=None, creation_time=None, modification_time=None, tags=None, business_type=None, _url=None, status=None, description=None, storage_location=None, region_id=None, app_id=None, icon=None, online_status=None, categories=None):
        self.title = title
        self.media_id = media_id
        self.ext = ext
        self.creation_time = creation_time
        self.modification_time = modification_time
        self.tags = tags
        self.business_type = business_type
        self._url = _url
        self.status = status
        self.description = description
        self.storage_location = storage_location
        self.region_id = region_id
        self.app_id = app_id
        self.icon = icon
        self.online_status = online_status
        self.categories = []

    def validate(self):
        self.validate_required(self.title, 'title')
        self.validate_required(self.media_id, 'media_id')
        self.validate_required(self.ext, 'ext')
        self.validate_required(self.creation_time, 'creation_time')
        self.validate_required(self.modification_time, 'modification_time')
        self.validate_required(self.tags, 'tags')
        self.validate_required(self.business_type, 'business_type')
        self.validate_required(self._url, '_url')
        self.validate_required(self.status, 'status')
        self.validate_required(self.description, 'description')
        self.validate_required(self.storage_location, 'storage_location')
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.app_id, 'app_id')
        self.validate_required(self.icon, 'icon')
        self.validate_required(self.online_status, 'online_status')
        self.validate_required(self.categories, 'categories')
        if self.categories:
            for k in self.categories:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Title'] = self.title
        result['MediaId'] = self.media_id
        result['Ext'] = self.ext
        result['CreationTime'] = self.creation_time
        result['ModificationTime'] = self.modification_time
        result['Tags'] = self.tags
        result['BusinessType'] = self.business_type
        result['URL'] = self._url
        result['Status'] = self.status
        result['Description'] = self.description
        result['StorageLocation'] = self.storage_location
        result['RegionId'] = self.region_id
        result['AppId'] = self.app_id
        result['Icon'] = self.icon
        result['OnlineStatus'] = self.online_status
        result['Categories'] = []
        if self.categories is not None:
            for k in self.categories:
                result['Categories'].append(k.to_map() if k else None)
        else:
            result['Categories'] = None
        return result

    def from_map(self, map={}):
        self.title = map.get('Title')
        self.media_id = map.get('MediaId')
        self.ext = map.get('Ext')
        self.creation_time = map.get('CreationTime')
        self.modification_time = map.get('ModificationTime')
        self.tags = map.get('Tags')
        self.business_type = map.get('BusinessType')
        self._url = map.get('URL')
        self.status = map.get('Status')
        self.description = map.get('Description')
        self.storage_location = map.get('StorageLocation')
        self.region_id = map.get('RegionId')
        self.app_id = map.get('AppId')
        self.icon = map.get('Icon')
        self.online_status = map.get('OnlineStatus')
        self.categories = []
        if map.get('Categories') is not None:
            for k in map.get('Categories'):
                temp_model = SearchMediaResponseMediaListAttachedMediaCategories()
                temp_model = temp_model.from_map(k)
                self.categories.append(temp_model)
        else:
            self.categories = None
        return self


class SearchMediaResponseMediaList(TeaModel):
    def __init__(self, media_type=None, creation_time=None, media_id=None, video=None, audio=None, image=None, attached_media=None):
        self.media_type = media_type
        self.creation_time = creation_time
        self.media_id = media_id
        self.video = video
        self.audio = audio
        self.image = image
        self.attached_media = attached_media

    def validate(self):
        self.validate_required(self.media_type, 'media_type')
        self.validate_required(self.creation_time, 'creation_time')
        self.validate_required(self.media_id, 'media_id')
        self.validate_required(self.video, 'video')
        if self.video:
            self.video.validate()
        self.validate_required(self.audio, 'audio')
        if self.audio:
            self.audio.validate()
        self.validate_required(self.image, 'image')
        if self.image:
            self.image.validate()
        self.validate_required(self.attached_media, 'attached_media')
        if self.attached_media:
            self.attached_media.validate()

    def to_map(self):
        result = {}
        result['MediaType'] = self.media_type
        result['CreationTime'] = self.creation_time
        result['MediaId'] = self.media_id
        if self.video is not None:
            result['Video'] = self.video.to_map()
        else:
            result['Video'] = None
        if self.audio is not None:
            result['Audio'] = self.audio.to_map()
        else:
            result['Audio'] = None
        if self.image is not None:
            result['Image'] = self.image.to_map()
        else:
            result['Image'] = None
        if self.attached_media is not None:
            result['AttachedMedia'] = self.attached_media.to_map()
        else:
            result['AttachedMedia'] = None
        return result

    def from_map(self, map={}):
        self.media_type = map.get('MediaType')
        self.creation_time = map.get('CreationTime')
        self.media_id = map.get('MediaId')
        if map.get('Video') is not None:
            temp_model = SearchMediaResponseMediaListVideo()
            self.video = temp_model.from_map(map['Video'])
        else:
            self.video = None
        if map.get('Audio') is not None:
            temp_model = SearchMediaResponseMediaListAudio()
            self.audio = temp_model.from_map(map['Audio'])
        else:
            self.audio = None
        if map.get('Image') is not None:
            temp_model = SearchMediaResponseMediaListImage()
            self.image = temp_model.from_map(map['Image'])
        else:
            self.image = None
        if map.get('AttachedMedia') is not None:
            temp_model = SearchMediaResponseMediaListAttachedMedia()
            self.attached_media = temp_model.from_map(map['AttachedMedia'])
        else:
            self.attached_media = None
        return self


class GetVideoInfosRequest(TeaModel):
    def __init__(self, owner_id=None, resource_owner_account=None, resource_owner_id=None, video_ids=None, addition_type=None):
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.video_ids = video_ids
        self.addition_type = addition_type

    def validate(self):
        self.validate_required(self.video_ids, 'video_ids')

    def to_map(self):
        result = {}
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['VideoIds'] = self.video_ids
        result['AdditionType'] = self.addition_type
        return result

    def from_map(self, map={}):
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.video_ids = map.get('VideoIds')
        self.addition_type = map.get('AdditionType')
        return self


class GetVideoInfosResponse(TeaModel):
    def __init__(self, request_id=None, video_list=None, non_exist_video_ids=None):
        self.request_id = request_id
        self.video_list = []
        self.non_exist_video_ids = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.video_list, 'video_list')
        if self.video_list:
            for k in self.video_list:
                if k :
                    k.validate()
        self.validate_required(self.non_exist_video_ids, 'non_exist_video_ids')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['VideoList'] = []
        if self.video_list is not None:
            for k in self.video_list:
                result['VideoList'].append(k.to_map() if k else None)
        else:
            result['VideoList'] = None
        result['NonExistVideoIds'] = []
        if self.non_exist_video_ids is not None:
            for k in self.non_exist_video_ids:
                result['NonExistVideoIds'].append(k)
        else:
            result['NonExistVideoIds'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.video_list = []
        if map.get('VideoList') is not None:
            for k in map.get('VideoList'):
                temp_model = GetVideoInfosResponseVideoList()
                temp_model = temp_model.from_map(k)
                self.video_list.append(temp_model)
        else:
            self.video_list = None
        self.non_exist_video_ids = []
        if map.get('NonExistVideoIds') is not None:
            for k in map.get('NonExistVideoIds'):
                self.non_exist_video_ids.append(k)
        else:
            self.non_exist_video_ids = None
        return self


class GetVideoInfosResponseVideoListThumbnailList(TeaModel):
    def __init__(self, _url=None):
        self._url = _url

    def validate(self):
        self.validate_required(self._url, '_url')

    def to_map(self):
        result = {}
        result['URL'] = self._url
        return result

    def from_map(self, map={}):
        self._url = map.get('URL')
        return self


class GetVideoInfosResponseVideoList(TeaModel):
    def __init__(self, video_id=None, title=None, tags=None, status=None, size=None, duration=None, description=None, modification_time=None, creation_time=None, cover_url=None, cate_id=None, cate_name=None, download_switch=None, template_group_id=None, preprocess_status=None, storage_location=None, region_id=None, custom_media_info=None, app_id=None, thumbnail_list=None, snapshots=None):
        self.video_id = video_id
        self.title = title
        self.tags = tags
        self.status = status
        self.size = size
        self.duration = duration
        self.description = description
        self.modification_time = modification_time
        self.creation_time = creation_time
        self.cover_url = cover_url
        self.cate_id = cate_id
        self.cate_name = cate_name
        self.download_switch = download_switch
        self.template_group_id = template_group_id
        self.preprocess_status = preprocess_status
        self.storage_location = storage_location
        self.region_id = region_id
        self.custom_media_info = custom_media_info
        self.app_id = app_id
        self.thumbnail_list = []
        self.snapshots = []

    def validate(self):
        self.validate_required(self.video_id, 'video_id')
        self.validate_required(self.title, 'title')
        self.validate_required(self.tags, 'tags')
        self.validate_required(self.status, 'status')
        self.validate_required(self.size, 'size')
        self.validate_required(self.duration, 'duration')
        self.validate_required(self.description, 'description')
        self.validate_required(self.modification_time, 'modification_time')
        self.validate_required(self.creation_time, 'creation_time')
        self.validate_required(self.cover_url, 'cover_url')
        self.validate_required(self.cate_id, 'cate_id')
        self.validate_required(self.cate_name, 'cate_name')
        self.validate_required(self.download_switch, 'download_switch')
        self.validate_required(self.template_group_id, 'template_group_id')
        self.validate_required(self.preprocess_status, 'preprocess_status')
        self.validate_required(self.storage_location, 'storage_location')
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.custom_media_info, 'custom_media_info')
        self.validate_required(self.app_id, 'app_id')
        self.validate_required(self.thumbnail_list, 'thumbnail_list')
        if self.thumbnail_list:
            for k in self.thumbnail_list:
                if k :
                    k.validate()
        self.validate_required(self.snapshots, 'snapshots')

    def to_map(self):
        result = {}
        result['VideoId'] = self.video_id
        result['Title'] = self.title
        result['Tags'] = self.tags
        result['Status'] = self.status
        result['Size'] = self.size
        result['Duration'] = self.duration
        result['Description'] = self.description
        result['ModificationTime'] = self.modification_time
        result['CreationTime'] = self.creation_time
        result['CoverURL'] = self.cover_url
        result['CateId'] = self.cate_id
        result['CateName'] = self.cate_name
        result['DownloadSwitch'] = self.download_switch
        result['TemplateGroupId'] = self.template_group_id
        result['PreprocessStatus'] = self.preprocess_status
        result['StorageLocation'] = self.storage_location
        result['RegionId'] = self.region_id
        result['CustomMediaInfo'] = self.custom_media_info
        result['AppId'] = self.app_id
        result['ThumbnailList'] = []
        if self.thumbnail_list is not None:
            for k in self.thumbnail_list:
                result['ThumbnailList'].append(k.to_map() if k else None)
        else:
            result['ThumbnailList'] = None
        result['Snapshots'] = []
        if self.snapshots is not None:
            for k in self.snapshots:
                result['Snapshots'].append(k)
        else:
            result['Snapshots'] = None
        return result

    def from_map(self, map={}):
        self.video_id = map.get('VideoId')
        self.title = map.get('Title')
        self.tags = map.get('Tags')
        self.status = map.get('Status')
        self.size = map.get('Size')
        self.duration = map.get('Duration')
        self.description = map.get('Description')
        self.modification_time = map.get('ModificationTime')
        self.creation_time = map.get('CreationTime')
        self.cover_url = map.get('CoverURL')
        self.cate_id = map.get('CateId')
        self.cate_name = map.get('CateName')
        self.download_switch = map.get('DownloadSwitch')
        self.template_group_id = map.get('TemplateGroupId')
        self.preprocess_status = map.get('PreprocessStatus')
        self.storage_location = map.get('StorageLocation')
        self.region_id = map.get('RegionId')
        self.custom_media_info = map.get('CustomMediaInfo')
        self.app_id = map.get('AppId')
        self.thumbnail_list = []
        if map.get('ThumbnailList') is not None:
            for k in map.get('ThumbnailList'):
                temp_model = GetVideoInfosResponseVideoListThumbnailList()
                temp_model = temp_model.from_map(k)
                self.thumbnail_list.append(temp_model)
        else:
            self.thumbnail_list = None
        self.snapshots = []
        if map.get('Snapshots') is not None:
            for k in map.get('Snapshots'):
                self.snapshots.append(k)
        else:
            self.snapshots = None
        return self


class SubmitPreprocessJobsRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, video_id=None, preprocess_type=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.video_id = video_id
        self.preprocess_type = preprocess_type

    def validate(self):
        self.validate_required(self.video_id, 'video_id')
        self.validate_required(self.preprocess_type, 'preprocess_type')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['VideoId'] = self.video_id
        result['PreprocessType'] = self.preprocess_type
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.video_id = map.get('VideoId')
        self.preprocess_type = map.get('PreprocessType')
        return self


class SubmitPreprocessJobsResponse(TeaModel):
    def __init__(self, request_id=None, preprocess_jobs=None):
        self.request_id = request_id
        self.preprocess_jobs = preprocess_jobs

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.preprocess_jobs, 'preprocess_jobs')
        if self.preprocess_jobs:
            self.preprocess_jobs.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.preprocess_jobs is not None:
            result['PreprocessJobs'] = self.preprocess_jobs.to_map()
        else:
            result['PreprocessJobs'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('PreprocessJobs') is not None:
            temp_model = SubmitPreprocessJobsResponsePreprocessJobs()
            self.preprocess_jobs = temp_model.from_map(map['PreprocessJobs'])
        else:
            self.preprocess_jobs = None
        return self


class SubmitPreprocessJobsResponsePreprocessJobsPreprocessJob(TeaModel):
    def __init__(self, job_id=None):
        self.job_id = job_id

    def validate(self):
        self.validate_required(self.job_id, 'job_id')

    def to_map(self):
        result = {}
        result['JobId'] = self.job_id
        return result

    def from_map(self, map={}):
        self.job_id = map.get('JobId')
        return self


class SubmitPreprocessJobsResponsePreprocessJobs(TeaModel):
    def __init__(self, preprocess_job=None):
        self.preprocess_job = []

    def validate(self):
        self.validate_required(self.preprocess_job, 'preprocess_job')
        if self.preprocess_job:
            for k in self.preprocess_job:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['PreprocessJob'] = []
        if self.preprocess_job is not None:
            for k in self.preprocess_job:
                result['PreprocessJob'].append(k.to_map() if k else None)
        else:
            result['PreprocessJob'] = None
        return result

    def from_map(self, map={}):
        self.preprocess_job = []
        if map.get('PreprocessJob') is not None:
            for k in map.get('PreprocessJob'):
                temp_model = SubmitPreprocessJobsResponsePreprocessJobsPreprocessJob()
                temp_model = temp_model.from_map(k)
                self.preprocess_job.append(temp_model)
        else:
            self.preprocess_job = None
        return self


class DescribePlayVideoStatisRequest(TeaModel):
    def __init__(self, owner_id=None, start_time=None, end_time=None, video_id=None):
        self.owner_id = owner_id
        self.start_time = start_time
        self.end_time = end_time
        self.video_id = video_id

    def validate(self):
        self.validate_required(self.start_time, 'start_time')
        self.validate_required(self.end_time, 'end_time')
        self.validate_required(self.video_id, 'video_id')

    def to_map(self):
        result = {}
        result['OwnerId'] = self.owner_id
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        result['VideoId'] = self.video_id
        return result

    def from_map(self, map={}):
        self.owner_id = map.get('OwnerId')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        self.video_id = map.get('VideoId')
        return self


class DescribePlayVideoStatisResponse(TeaModel):
    def __init__(self, request_id=None, video_play_statis_details=None):
        self.request_id = request_id
        self.video_play_statis_details = video_play_statis_details

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.video_play_statis_details, 'video_play_statis_details')
        if self.video_play_statis_details:
            self.video_play_statis_details.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.video_play_statis_details is not None:
            result['VideoPlayStatisDetails'] = self.video_play_statis_details.to_map()
        else:
            result['VideoPlayStatisDetails'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('VideoPlayStatisDetails') is not None:
            temp_model = DescribePlayVideoStatisResponseVideoPlayStatisDetails()
            self.video_play_statis_details = temp_model.from_map(map['VideoPlayStatisDetails'])
        else:
            self.video_play_statis_details = None
        return self


class DescribePlayVideoStatisResponseVideoPlayStatisDetailsVideoPlayStatisDetail(TeaModel):
    def __init__(self, date=None, play_duration=None, _vv=None, _uv=None, play_range=None, title=None):
        self.date = date
        self.play_duration = play_duration
        self._vv = _vv
        self._uv = _uv
        self.play_range = play_range
        self.title = title

    def validate(self):
        self.validate_required(self.date, 'date')
        self.validate_required(self.play_duration, 'play_duration')
        self.validate_required(self._vv, '_vv')
        self.validate_required(self._uv, '_uv')
        self.validate_required(self.play_range, 'play_range')
        self.validate_required(self.title, 'title')

    def to_map(self):
        result = {}
        result['Date'] = self.date
        result['PlayDuration'] = self.play_duration
        result['VV'] = self._vv
        result['UV'] = self._uv
        result['PlayRange'] = self.play_range
        result['Title'] = self.title
        return result

    def from_map(self, map={}):
        self.date = map.get('Date')
        self.play_duration = map.get('PlayDuration')
        self._vv = map.get('VV')
        self._uv = map.get('UV')
        self.play_range = map.get('PlayRange')
        self.title = map.get('Title')
        return self


class DescribePlayVideoStatisResponseVideoPlayStatisDetails(TeaModel):
    def __init__(self, video_play_statis_detail=None):
        self.video_play_statis_detail = []

    def validate(self):
        self.validate_required(self.video_play_statis_detail, 'video_play_statis_detail')
        if self.video_play_statis_detail:
            for k in self.video_play_statis_detail:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['VideoPlayStatisDetail'] = []
        if self.video_play_statis_detail is not None:
            for k in self.video_play_statis_detail:
                result['VideoPlayStatisDetail'].append(k.to_map() if k else None)
        else:
            result['VideoPlayStatisDetail'] = None
        return result

    def from_map(self, map={}):
        self.video_play_statis_detail = []
        if map.get('VideoPlayStatisDetail') is not None:
            for k in map.get('VideoPlayStatisDetail'):
                temp_model = DescribePlayVideoStatisResponseVideoPlayStatisDetailsVideoPlayStatisDetail()
                temp_model = temp_model.from_map(k)
                self.video_play_statis_detail.append(temp_model)
        else:
            self.video_play_statis_detail = None
        return self


class DescribePlayUserTotalRequest(TeaModel):
    def __init__(self, owner_id=None, start_time=None, end_time=None):
        self.owner_id = owner_id
        self.start_time = start_time
        self.end_time = end_time

    def validate(self):
        self.validate_required(self.start_time, 'start_time')
        self.validate_required(self.end_time, 'end_time')

    def to_map(self):
        result = {}
        result['OwnerId'] = self.owner_id
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        return result

    def from_map(self, map={}):
        self.owner_id = map.get('OwnerId')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        return self


class DescribePlayUserTotalResponse(TeaModel):
    def __init__(self, request_id=None, user_play_statis_totals=None):
        self.request_id = request_id
        self.user_play_statis_totals = user_play_statis_totals

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.user_play_statis_totals, 'user_play_statis_totals')
        if self.user_play_statis_totals:
            self.user_play_statis_totals.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.user_play_statis_totals is not None:
            result['UserPlayStatisTotals'] = self.user_play_statis_totals.to_map()
        else:
            result['UserPlayStatisTotals'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('UserPlayStatisTotals') is not None:
            temp_model = DescribePlayUserTotalResponseUserPlayStatisTotals()
            self.user_play_statis_totals = temp_model.from_map(map['UserPlayStatisTotals'])
        else:
            self.user_play_statis_totals = None
        return self


class DescribePlayUserTotalResponseUserPlayStatisTotalsUserPlayStatisTotalVV(TeaModel):
    def __init__(self, android=None, i_os=None, flash=None, _html5=None):
        self.android = android
        self.i_os = i_os
        self.flash = flash
        self._html5 = _html5

    def validate(self):
        self.validate_required(self.android, 'android')
        self.validate_required(self.i_os, 'i_os')
        self.validate_required(self.flash, 'flash')
        self.validate_required(self._html5, '_html5')

    def to_map(self):
        result = {}
        result['Android'] = self.android
        result['iOS'] = self.i_os
        result['Flash'] = self.flash
        result['HTML5'] = self._html5
        return result

    def from_map(self, map={}):
        self.android = map.get('Android')
        self.i_os = map.get('iOS')
        self.flash = map.get('Flash')
        self._html5 = map.get('HTML5')
        return self


class DescribePlayUserTotalResponseUserPlayStatisTotalsUserPlayStatisTotalUV(TeaModel):
    def __init__(self, android=None, i_os=None, flash=None, _html5=None):
        self.android = android
        self.i_os = i_os
        self.flash = flash
        self._html5 = _html5

    def validate(self):
        self.validate_required(self.android, 'android')
        self.validate_required(self.i_os, 'i_os')
        self.validate_required(self.flash, 'flash')
        self.validate_required(self._html5, '_html5')

    def to_map(self):
        result = {}
        result['Android'] = self.android
        result['iOS'] = self.i_os
        result['Flash'] = self.flash
        result['HTML5'] = self._html5
        return result

    def from_map(self, map={}):
        self.android = map.get('Android')
        self.i_os = map.get('iOS')
        self.flash = map.get('Flash')
        self._html5 = map.get('HTML5')
        return self


class DescribePlayUserTotalResponseUserPlayStatisTotalsUserPlayStatisTotal(TeaModel):
    def __init__(self, date=None, play_duration=None, play_range=None, _vv=None, _uv=None):
        self.date = date
        self.play_duration = play_duration
        self.play_range = play_range
        self._vv = _vv
        self._uv = _uv

    def validate(self):
        self.validate_required(self.date, 'date')
        self.validate_required(self.play_duration, 'play_duration')
        self.validate_required(self.play_range, 'play_range')
        self.validate_required(self._vv, '_vv')
        if self._vv:
            self._vv.validate()
        self.validate_required(self._uv, '_uv')
        if self._uv:
            self._uv.validate()

    def to_map(self):
        result = {}
        result['Date'] = self.date
        result['PlayDuration'] = self.play_duration
        result['PlayRange'] = self.play_range
        if self._vv is not None:
            result['VV'] = self._vv.to_map()
        else:
            result['VV'] = None
        if self._uv is not None:
            result['UV'] = self._uv.to_map()
        else:
            result['UV'] = None
        return result

    def from_map(self, map={}):
        self.date = map.get('Date')
        self.play_duration = map.get('PlayDuration')
        self.play_range = map.get('PlayRange')
        if map.get('VV') is not None:
            temp_model = DescribePlayUserTotalResponseUserPlayStatisTotalsUserPlayStatisTotalVV()
            self._vv = temp_model.from_map(map['VV'])
        else:
            self._vv = None
        if map.get('UV') is not None:
            temp_model = DescribePlayUserTotalResponseUserPlayStatisTotalsUserPlayStatisTotalUV()
            self._uv = temp_model.from_map(map['UV'])
        else:
            self._uv = None
        return self


class DescribePlayUserTotalResponseUserPlayStatisTotals(TeaModel):
    def __init__(self, user_play_statis_total=None):
        self.user_play_statis_total = []

    def validate(self):
        self.validate_required(self.user_play_statis_total, 'user_play_statis_total')
        if self.user_play_statis_total:
            for k in self.user_play_statis_total:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['UserPlayStatisTotal'] = []
        if self.user_play_statis_total is not None:
            for k in self.user_play_statis_total:
                result['UserPlayStatisTotal'].append(k.to_map() if k else None)
        else:
            result['UserPlayStatisTotal'] = None
        return result

    def from_map(self, map={}):
        self.user_play_statis_total = []
        if map.get('UserPlayStatisTotal') is not None:
            for k in map.get('UserPlayStatisTotal'):
                temp_model = DescribePlayUserTotalResponseUserPlayStatisTotalsUserPlayStatisTotal()
                temp_model = temp_model.from_map(k)
                self.user_play_statis_total.append(temp_model)
        else:
            self.user_play_statis_total = None
        return self


class DescribePlayUserAvgRequest(TeaModel):
    def __init__(self, owner_id=None, start_time=None, end_time=None):
        self.owner_id = owner_id
        self.start_time = start_time
        self.end_time = end_time

    def validate(self):
        self.validate_required(self.start_time, 'start_time')
        self.validate_required(self.end_time, 'end_time')

    def to_map(self):
        result = {}
        result['OwnerId'] = self.owner_id
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        return result

    def from_map(self, map={}):
        self.owner_id = map.get('OwnerId')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        return self


class DescribePlayUserAvgResponse(TeaModel):
    def __init__(self, request_id=None, user_play_statis_avgs=None):
        self.request_id = request_id
        self.user_play_statis_avgs = user_play_statis_avgs

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.user_play_statis_avgs, 'user_play_statis_avgs')
        if self.user_play_statis_avgs:
            self.user_play_statis_avgs.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.user_play_statis_avgs is not None:
            result['UserPlayStatisAvgs'] = self.user_play_statis_avgs.to_map()
        else:
            result['UserPlayStatisAvgs'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('UserPlayStatisAvgs') is not None:
            temp_model = DescribePlayUserAvgResponseUserPlayStatisAvgs()
            self.user_play_statis_avgs = temp_model.from_map(map['UserPlayStatisAvgs'])
        else:
            self.user_play_statis_avgs = None
        return self


class DescribePlayUserAvgResponseUserPlayStatisAvgsUserPlayStatisAvg(TeaModel):
    def __init__(self, date=None, avg_play_duration=None, avg_play_count=None):
        self.date = date
        self.avg_play_duration = avg_play_duration
        self.avg_play_count = avg_play_count

    def validate(self):
        self.validate_required(self.date, 'date')
        self.validate_required(self.avg_play_duration, 'avg_play_duration')
        self.validate_required(self.avg_play_count, 'avg_play_count')

    def to_map(self):
        result = {}
        result['Date'] = self.date
        result['AvgPlayDuration'] = self.avg_play_duration
        result['AvgPlayCount'] = self.avg_play_count
        return result

    def from_map(self, map={}):
        self.date = map.get('Date')
        self.avg_play_duration = map.get('AvgPlayDuration')
        self.avg_play_count = map.get('AvgPlayCount')
        return self


class DescribePlayUserAvgResponseUserPlayStatisAvgs(TeaModel):
    def __init__(self, user_play_statis_avg=None):
        self.user_play_statis_avg = []

    def validate(self):
        self.validate_required(self.user_play_statis_avg, 'user_play_statis_avg')
        if self.user_play_statis_avg:
            for k in self.user_play_statis_avg:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['UserPlayStatisAvg'] = []
        if self.user_play_statis_avg is not None:
            for k in self.user_play_statis_avg:
                result['UserPlayStatisAvg'].append(k.to_map() if k else None)
        else:
            result['UserPlayStatisAvg'] = None
        return result

    def from_map(self, map={}):
        self.user_play_statis_avg = []
        if map.get('UserPlayStatisAvg') is not None:
            for k in map.get('UserPlayStatisAvg'):
                temp_model = DescribePlayUserAvgResponseUserPlayStatisAvgsUserPlayStatisAvg()
                temp_model = temp_model.from_map(k)
                self.user_play_statis_avg.append(temp_model)
        else:
            self.user_play_statis_avg = None
        return self


class DescribePlayTopVideosRequest(TeaModel):
    def __init__(self, owner_id=None, biz_date=None, page_no=None, page_size=None):
        self.owner_id = owner_id
        self.biz_date = biz_date
        self.page_no = page_no
        self.page_size = page_size

    def validate(self):
        self.validate_required(self.biz_date, 'biz_date')

    def to_map(self):
        result = {}
        result['OwnerId'] = self.owner_id
        result['BizDate'] = self.biz_date
        result['PageNo'] = self.page_no
        result['PageSize'] = self.page_size
        return result

    def from_map(self, map={}):
        self.owner_id = map.get('OwnerId')
        self.biz_date = map.get('BizDate')
        self.page_no = map.get('PageNo')
        self.page_size = map.get('PageSize')
        return self


class DescribePlayTopVideosResponse(TeaModel):
    def __init__(self, request_id=None, page_no=None, page_size=None, total_num=None, top_play_videos=None):
        self.request_id = request_id
        self.page_no = page_no
        self.page_size = page_size
        self.total_num = total_num
        self.top_play_videos = top_play_videos

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.page_no, 'page_no')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.total_num, 'total_num')
        self.validate_required(self.top_play_videos, 'top_play_videos')
        if self.top_play_videos:
            self.top_play_videos.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['PageNo'] = self.page_no
        result['PageSize'] = self.page_size
        result['TotalNum'] = self.total_num
        if self.top_play_videos is not None:
            result['TopPlayVideos'] = self.top_play_videos.to_map()
        else:
            result['TopPlayVideos'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.page_no = map.get('PageNo')
        self.page_size = map.get('PageSize')
        self.total_num = map.get('TotalNum')
        if map.get('TopPlayVideos') is not None:
            temp_model = DescribePlayTopVideosResponseTopPlayVideos()
            self.top_play_videos = temp_model.from_map(map['TopPlayVideos'])
        else:
            self.top_play_videos = None
        return self


class DescribePlayTopVideosResponseTopPlayVideosTopPlayVideoStatis(TeaModel):
    def __init__(self, play_duration=None, _vv=None, _uv=None, video_id=None, title=None):
        self.play_duration = play_duration
        self._vv = _vv
        self._uv = _uv
        self.video_id = video_id
        self.title = title

    def validate(self):
        self.validate_required(self.play_duration, 'play_duration')
        self.validate_required(self._vv, '_vv')
        self.validate_required(self._uv, '_uv')
        self.validate_required(self.video_id, 'video_id')
        self.validate_required(self.title, 'title')

    def to_map(self):
        result = {}
        result['PlayDuration'] = self.play_duration
        result['VV'] = self._vv
        result['UV'] = self._uv
        result['VideoId'] = self.video_id
        result['Title'] = self.title
        return result

    def from_map(self, map={}):
        self.play_duration = map.get('PlayDuration')
        self._vv = map.get('VV')
        self._uv = map.get('UV')
        self.video_id = map.get('VideoId')
        self.title = map.get('Title')
        return self


class DescribePlayTopVideosResponseTopPlayVideos(TeaModel):
    def __init__(self, top_play_video_statis=None):
        self.top_play_video_statis = []

    def validate(self):
        self.validate_required(self.top_play_video_statis, 'top_play_video_statis')
        if self.top_play_video_statis:
            for k in self.top_play_video_statis:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['TopPlayVideoStatis'] = []
        if self.top_play_video_statis is not None:
            for k in self.top_play_video_statis:
                result['TopPlayVideoStatis'].append(k.to_map() if k else None)
        else:
            result['TopPlayVideoStatis'] = None
        return result

    def from_map(self, map={}):
        self.top_play_video_statis = []
        if map.get('TopPlayVideoStatis') is not None:
            for k in map.get('TopPlayVideoStatis'):
                temp_model = DescribePlayTopVideosResponseTopPlayVideosTopPlayVideoStatis()
                temp_model = temp_model.from_map(k)
                self.top_play_video_statis.append(temp_model)
        else:
            self.top_play_video_statis = None
        return self


class ListSnapshotsRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, video_id=None, snapshot_type=None, auth_timeout=None, page_size=None, page_no=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.video_id = video_id
        self.snapshot_type = snapshot_type
        self.auth_timeout = auth_timeout
        self.page_size = page_size
        self.page_no = page_no

    def validate(self):
        self.validate_required(self.video_id, 'video_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['VideoId'] = self.video_id
        result['SnapshotType'] = self.snapshot_type
        result['AuthTimeout'] = self.auth_timeout
        result['PageSize'] = self.page_size
        result['PageNo'] = self.page_no
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.video_id = map.get('VideoId')
        self.snapshot_type = map.get('SnapshotType')
        self.auth_timeout = map.get('AuthTimeout')
        self.page_size = map.get('PageSize')
        self.page_no = map.get('PageNo')
        return self


class ListSnapshotsResponse(TeaModel):
    def __init__(self, request_id=None, media_snapshot=None):
        self.request_id = request_id
        self.media_snapshot = media_snapshot

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.media_snapshot, 'media_snapshot')
        if self.media_snapshot:
            self.media_snapshot.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.media_snapshot is not None:
            result['MediaSnapshot'] = self.media_snapshot.to_map()
        else:
            result['MediaSnapshot'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('MediaSnapshot') is not None:
            temp_model = ListSnapshotsResponseMediaSnapshot()
            self.media_snapshot = temp_model.from_map(map['MediaSnapshot'])
        else:
            self.media_snapshot = None
        return self


class ListSnapshotsResponseMediaSnapshotSnapshotsSnapshot(TeaModel):
    def __init__(self, index=None, url=None):
        self.index = index
        self.url = url

    def validate(self):
        self.validate_required(self.index, 'index')
        self.validate_required(self.url, 'url')

    def to_map(self):
        result = {}
        result['Index'] = self.index
        result['Url'] = self.url
        return result

    def from_map(self, map={}):
        self.index = map.get('Index')
        self.url = map.get('Url')
        return self


class ListSnapshotsResponseMediaSnapshotSnapshots(TeaModel):
    def __init__(self, snapshot=None):
        self.snapshot = []

    def validate(self):
        self.validate_required(self.snapshot, 'snapshot')
        if self.snapshot:
            for k in self.snapshot:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Snapshot'] = []
        if self.snapshot is not None:
            for k in self.snapshot:
                result['Snapshot'].append(k.to_map() if k else None)
        else:
            result['Snapshot'] = None
        return result

    def from_map(self, map={}):
        self.snapshot = []
        if map.get('Snapshot') is not None:
            for k in map.get('Snapshot'):
                temp_model = ListSnapshotsResponseMediaSnapshotSnapshotsSnapshot()
                temp_model = temp_model.from_map(k)
                self.snapshot.append(temp_model)
        else:
            self.snapshot = None
        return self


class ListSnapshotsResponseMediaSnapshot(TeaModel):
    def __init__(self, total=None, regular=None, creation_time=None, job_id=None, snapshots=None):
        self.total = total
        self.regular = regular
        self.creation_time = creation_time
        self.job_id = job_id
        self.snapshots = snapshots

    def validate(self):
        self.validate_required(self.total, 'total')
        self.validate_required(self.regular, 'regular')
        self.validate_required(self.creation_time, 'creation_time')
        self.validate_required(self.job_id, 'job_id')
        self.validate_required(self.snapshots, 'snapshots')
        if self.snapshots:
            self.snapshots.validate()

    def to_map(self):
        result = {}
        result['Total'] = self.total
        result['Regular'] = self.regular
        result['CreationTime'] = self.creation_time
        result['JobId'] = self.job_id
        if self.snapshots is not None:
            result['Snapshots'] = self.snapshots.to_map()
        else:
            result['Snapshots'] = None
        return result

    def from_map(self, map={}):
        self.total = map.get('Total')
        self.regular = map.get('Regular')
        self.creation_time = map.get('CreationTime')
        self.job_id = map.get('JobId')
        if map.get('Snapshots') is not None:
            temp_model = ListSnapshotsResponseMediaSnapshotSnapshots()
            self.snapshots = temp_model.from_map(map['Snapshots'])
        else:
            self.snapshots = None
        return self


class SubmitTranscodeJobsRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, video_id=None, template_group_id=None, pipeline_id=None, encrypt_config=None, override_params=None, priority=None, user_data=None, file_url=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.video_id = video_id
        self.template_group_id = template_group_id
        self.pipeline_id = pipeline_id
        self.encrypt_config = encrypt_config
        self.override_params = override_params
        self.priority = priority
        self.user_data = user_data
        self.file_url = file_url

    def validate(self):
        self.validate_required(self.template_group_id, 'template_group_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['VideoId'] = self.video_id
        result['TemplateGroupId'] = self.template_group_id
        result['PipelineId'] = self.pipeline_id
        result['EncryptConfig'] = self.encrypt_config
        result['OverrideParams'] = self.override_params
        result['Priority'] = self.priority
        result['UserData'] = self.user_data
        result['FileUrl'] = self.file_url
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.video_id = map.get('VideoId')
        self.template_group_id = map.get('TemplateGroupId')
        self.pipeline_id = map.get('PipelineId')
        self.encrypt_config = map.get('EncryptConfig')
        self.override_params = map.get('OverrideParams')
        self.priority = map.get('Priority')
        self.user_data = map.get('UserData')
        self.file_url = map.get('FileUrl')
        return self


class SubmitTranscodeJobsResponse(TeaModel):
    def __init__(self, request_id=None, transcode_task_id=None, transcode_jobs=None):
        self.request_id = request_id
        self.transcode_task_id = transcode_task_id
        self.transcode_jobs = transcode_jobs

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.transcode_task_id, 'transcode_task_id')
        self.validate_required(self.transcode_jobs, 'transcode_jobs')
        if self.transcode_jobs:
            self.transcode_jobs.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['TranscodeTaskId'] = self.transcode_task_id
        if self.transcode_jobs is not None:
            result['TranscodeJobs'] = self.transcode_jobs.to_map()
        else:
            result['TranscodeJobs'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.transcode_task_id = map.get('TranscodeTaskId')
        if map.get('TranscodeJobs') is not None:
            temp_model = SubmitTranscodeJobsResponseTranscodeJobs()
            self.transcode_jobs = temp_model.from_map(map['TranscodeJobs'])
        else:
            self.transcode_jobs = None
        return self


class SubmitTranscodeJobsResponseTranscodeJobsTranscodeJob(TeaModel):
    def __init__(self, job_id=None):
        self.job_id = job_id

    def validate(self):
        self.validate_required(self.job_id, 'job_id')

    def to_map(self):
        result = {}
        result['JobId'] = self.job_id
        return result

    def from_map(self, map={}):
        self.job_id = map.get('JobId')
        return self


class SubmitTranscodeJobsResponseTranscodeJobs(TeaModel):
    def __init__(self, transcode_job=None):
        self.transcode_job = []

    def validate(self):
        self.validate_required(self.transcode_job, 'transcode_job')
        if self.transcode_job:
            for k in self.transcode_job:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['TranscodeJob'] = []
        if self.transcode_job is not None:
            for k in self.transcode_job:
                result['TranscodeJob'].append(k.to_map() if k else None)
        else:
            result['TranscodeJob'] = None
        return result

    def from_map(self, map={}):
        self.transcode_job = []
        if map.get('TranscodeJob') is not None:
            for k in map.get('TranscodeJob'):
                temp_model = SubmitTranscodeJobsResponseTranscodeJobsTranscodeJob()
                temp_model = temp_model.from_map(k)
                self.transcode_job.append(temp_model)
        else:
            self.transcode_job = None
        return self


class ListLiveRecordVideoRequest(TeaModel):
    def __init__(self, owner_id=None, resource_owner_account=None, resource_owner_id=None, stream_name=None, domain_name=None, app_name=None, query_type=None, page_no=None, page_size=None, sort_by=None, start_time=None, end_time=None):
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.stream_name = stream_name
        self.domain_name = domain_name
        self.app_name = app_name
        self.query_type = query_type
        self.page_no = page_no
        self.page_size = page_size
        self.sort_by = sort_by
        self.start_time = start_time
        self.end_time = end_time

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['StreamName'] = self.stream_name
        result['DomainName'] = self.domain_name
        result['AppName'] = self.app_name
        result['QueryType'] = self.query_type
        result['PageNo'] = self.page_no
        result['PageSize'] = self.page_size
        result['SortBy'] = self.sort_by
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        return result

    def from_map(self, map={}):
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.stream_name = map.get('StreamName')
        self.domain_name = map.get('DomainName')
        self.app_name = map.get('AppName')
        self.query_type = map.get('QueryType')
        self.page_no = map.get('PageNo')
        self.page_size = map.get('PageSize')
        self.sort_by = map.get('SortBy')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        return self


class ListLiveRecordVideoResponse(TeaModel):
    def __init__(self, request_id=None, total=None, live_record_video_list=None):
        self.request_id = request_id
        self.total = total
        self.live_record_video_list = live_record_video_list

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.total, 'total')
        self.validate_required(self.live_record_video_list, 'live_record_video_list')
        if self.live_record_video_list:
            self.live_record_video_list.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Total'] = self.total
        if self.live_record_video_list is not None:
            result['LiveRecordVideoList'] = self.live_record_video_list.to_map()
        else:
            result['LiveRecordVideoList'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.total = map.get('Total')
        if map.get('LiveRecordVideoList') is not None:
            temp_model = ListLiveRecordVideoResponseLiveRecordVideoList()
            self.live_record_video_list = temp_model.from_map(map['LiveRecordVideoList'])
        else:
            self.live_record_video_list = None
        return self


class ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoPlayInfoListPlayInfo(TeaModel):
    def __init__(self, width=None, height=None, size=None, play_url=None, bitrate=None, definition=None, duration=None, format=None, fps=None, encrypt=None, plaintext=None, complexity=None, stream_type=None, rand=None, job_id=None):
        self.width = width
        self.height = height
        self.size = size
        self.play_url = play_url
        self.bitrate = bitrate
        self.definition = definition
        self.duration = duration
        self.format = format
        self.fps = fps
        self.encrypt = encrypt
        self.plaintext = plaintext
        self.complexity = complexity
        self.stream_type = stream_type
        self.rand = rand
        self.job_id = job_id

    def validate(self):
        self.validate_required(self.width, 'width')
        self.validate_required(self.height, 'height')
        self.validate_required(self.size, 'size')
        self.validate_required(self.play_url, 'play_url')
        self.validate_required(self.bitrate, 'bitrate')
        self.validate_required(self.definition, 'definition')
        self.validate_required(self.duration, 'duration')
        self.validate_required(self.format, 'format')
        self.validate_required(self.fps, 'fps')
        self.validate_required(self.encrypt, 'encrypt')
        self.validate_required(self.plaintext, 'plaintext')
        self.validate_required(self.complexity, 'complexity')
        self.validate_required(self.stream_type, 'stream_type')
        self.validate_required(self.rand, 'rand')
        self.validate_required(self.job_id, 'job_id')

    def to_map(self):
        result = {}
        result['Width'] = self.width
        result['Height'] = self.height
        result['Size'] = self.size
        result['PlayURL'] = self.play_url
        result['Bitrate'] = self.bitrate
        result['Definition'] = self.definition
        result['Duration'] = self.duration
        result['Format'] = self.format
        result['Fps'] = self.fps
        result['Encrypt'] = self.encrypt
        result['Plaintext'] = self.plaintext
        result['Complexity'] = self.complexity
        result['StreamType'] = self.stream_type
        result['Rand'] = self.rand
        result['JobId'] = self.job_id
        return result

    def from_map(self, map={}):
        self.width = map.get('Width')
        self.height = map.get('Height')
        self.size = map.get('Size')
        self.play_url = map.get('PlayURL')
        self.bitrate = map.get('Bitrate')
        self.definition = map.get('Definition')
        self.duration = map.get('Duration')
        self.format = map.get('Format')
        self.fps = map.get('Fps')
        self.encrypt = map.get('Encrypt')
        self.plaintext = map.get('Plaintext')
        self.complexity = map.get('Complexity')
        self.stream_type = map.get('StreamType')
        self.rand = map.get('Rand')
        self.job_id = map.get('JobId')
        return self


class ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoPlayInfoList(TeaModel):
    def __init__(self, play_info=None):
        self.play_info = []

    def validate(self):
        self.validate_required(self.play_info, 'play_info')
        if self.play_info:
            for k in self.play_info:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['PlayInfo'] = []
        if self.play_info is not None:
            for k in self.play_info:
                result['PlayInfo'].append(k.to_map() if k else None)
        else:
            result['PlayInfo'] = None
        return result

    def from_map(self, map={}):
        self.play_info = []
        if map.get('PlayInfo') is not None:
            for k in map.get('PlayInfo'):
                temp_model = ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoPlayInfoListPlayInfo()
                temp_model = temp_model.from_map(k)
                self.play_info.append(temp_model)
        else:
            self.play_info = None
        return self


class ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoVideoSnapshots(TeaModel):
    def __init__(self, snapshot=None):
        self.snapshot = []

    def validate(self):
        self.validate_required(self.snapshot, 'snapshot')

    def to_map(self):
        result = {}
        result['Snapshot'] = []
        if self.snapshot is not None:
            for k in self.snapshot:
                result['Snapshot'].append(k)
        else:
            result['Snapshot'] = None
        return result

    def from_map(self, map={}):
        self.snapshot = []
        if map.get('Snapshot') is not None:
            for k in map.get('Snapshot'):
                self.snapshot.append(k)
        else:
            self.snapshot = None
        return self


class ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoVideo(TeaModel):
    def __init__(self, video_id=None, title=None, tags=None, status=None, size=None, privilege=None, duration=None, description=None, customer_id=None, create_time=None, creation_time=None, modify_time=None, cover_url=None, cate_id=None, cate_name=None, download_switch=None, template_group_id=None, snapshots=None):
        self.video_id = video_id
        self.title = title
        self.tags = tags
        self.status = status
        self.size = size
        self.privilege = privilege
        self.duration = duration
        self.description = description
        self.customer_id = customer_id
        self.create_time = create_time
        self.creation_time = creation_time
        self.modify_time = modify_time
        self.cover_url = cover_url
        self.cate_id = cate_id
        self.cate_name = cate_name
        self.download_switch = download_switch
        self.template_group_id = template_group_id
        self.snapshots = snapshots

    def validate(self):
        self.validate_required(self.video_id, 'video_id')
        self.validate_required(self.title, 'title')
        self.validate_required(self.tags, 'tags')
        self.validate_required(self.status, 'status')
        self.validate_required(self.size, 'size')
        self.validate_required(self.privilege, 'privilege')
        self.validate_required(self.duration, 'duration')
        self.validate_required(self.description, 'description')
        self.validate_required(self.customer_id, 'customer_id')
        self.validate_required(self.create_time, 'create_time')
        self.validate_required(self.creation_time, 'creation_time')
        self.validate_required(self.modify_time, 'modify_time')
        self.validate_required(self.cover_url, 'cover_url')
        self.validate_required(self.cate_id, 'cate_id')
        self.validate_required(self.cate_name, 'cate_name')
        self.validate_required(self.download_switch, 'download_switch')
        self.validate_required(self.template_group_id, 'template_group_id')
        self.validate_required(self.snapshots, 'snapshots')
        if self.snapshots:
            self.snapshots.validate()

    def to_map(self):
        result = {}
        result['VideoId'] = self.video_id
        result['Title'] = self.title
        result['Tags'] = self.tags
        result['Status'] = self.status
        result['Size'] = self.size
        result['Privilege'] = self.privilege
        result['Duration'] = self.duration
        result['Description'] = self.description
        result['CustomerId'] = self.customer_id
        result['CreateTime'] = self.create_time
        result['CreationTime'] = self.creation_time
        result['ModifyTime'] = self.modify_time
        result['CoverURL'] = self.cover_url
        result['CateId'] = self.cate_id
        result['CateName'] = self.cate_name
        result['DownloadSwitch'] = self.download_switch
        result['TemplateGroupId'] = self.template_group_id
        if self.snapshots is not None:
            result['Snapshots'] = self.snapshots.to_map()
        else:
            result['Snapshots'] = None
        return result

    def from_map(self, map={}):
        self.video_id = map.get('VideoId')
        self.title = map.get('Title')
        self.tags = map.get('Tags')
        self.status = map.get('Status')
        self.size = map.get('Size')
        self.privilege = map.get('Privilege')
        self.duration = map.get('Duration')
        self.description = map.get('Description')
        self.customer_id = map.get('CustomerId')
        self.create_time = map.get('CreateTime')
        self.creation_time = map.get('CreationTime')
        self.modify_time = map.get('ModifyTime')
        self.cover_url = map.get('CoverURL')
        self.cate_id = map.get('CateId')
        self.cate_name = map.get('CateName')
        self.download_switch = map.get('DownloadSwitch')
        self.template_group_id = map.get('TemplateGroupId')
        if map.get('Snapshots') is not None:
            temp_model = ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoVideoSnapshots()
            self.snapshots = temp_model.from_map(map['Snapshots'])
        else:
            self.snapshots = None
        return self


class ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideo(TeaModel):
    def __init__(self, stream_name=None, domain_name=None, app_name=None, playlist_id=None, record_start_time=None, record_end_time=None, play_info_list=None, video=None):
        self.stream_name = stream_name
        self.domain_name = domain_name
        self.app_name = app_name
        self.playlist_id = playlist_id
        self.record_start_time = record_start_time
        self.record_end_time = record_end_time
        self.play_info_list = play_info_list
        self.video = video

    def validate(self):
        self.validate_required(self.stream_name, 'stream_name')
        self.validate_required(self.domain_name, 'domain_name')
        self.validate_required(self.app_name, 'app_name')
        self.validate_required(self.playlist_id, 'playlist_id')
        self.validate_required(self.record_start_time, 'record_start_time')
        self.validate_required(self.record_end_time, 'record_end_time')
        self.validate_required(self.play_info_list, 'play_info_list')
        if self.play_info_list:
            self.play_info_list.validate()
        self.validate_required(self.video, 'video')
        if self.video:
            self.video.validate()

    def to_map(self):
        result = {}
        result['StreamName'] = self.stream_name
        result['DomainName'] = self.domain_name
        result['AppName'] = self.app_name
        result['PlaylistId'] = self.playlist_id
        result['RecordStartTime'] = self.record_start_time
        result['RecordEndTime'] = self.record_end_time
        if self.play_info_list is not None:
            result['PlayInfoList'] = self.play_info_list.to_map()
        else:
            result['PlayInfoList'] = None
        if self.video is not None:
            result['Video'] = self.video.to_map()
        else:
            result['Video'] = None
        return result

    def from_map(self, map={}):
        self.stream_name = map.get('StreamName')
        self.domain_name = map.get('DomainName')
        self.app_name = map.get('AppName')
        self.playlist_id = map.get('PlaylistId')
        self.record_start_time = map.get('RecordStartTime')
        self.record_end_time = map.get('RecordEndTime')
        if map.get('PlayInfoList') is not None:
            temp_model = ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoPlayInfoList()
            self.play_info_list = temp_model.from_map(map['PlayInfoList'])
        else:
            self.play_info_list = None
        if map.get('Video') is not None:
            temp_model = ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoVideo()
            self.video = temp_model.from_map(map['Video'])
        else:
            self.video = None
        return self


class ListLiveRecordVideoResponseLiveRecordVideoList(TeaModel):
    def __init__(self, live_record_video=None):
        self.live_record_video = []

    def validate(self):
        self.validate_required(self.live_record_video, 'live_record_video')
        if self.live_record_video:
            for k in self.live_record_video:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['LiveRecordVideo'] = []
        if self.live_record_video is not None:
            for k in self.live_record_video:
                result['LiveRecordVideo'].append(k.to_map() if k else None)
        else:
            result['LiveRecordVideo'] = None
        return result

    def from_map(self, map={}):
        self.live_record_video = []
        if map.get('LiveRecordVideo') is not None:
            for k in map.get('LiveRecordVideo'):
                temp_model = ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideo()
                temp_model = temp_model.from_map(k)
                self.live_record_video.append(temp_model)
        else:
            self.live_record_video = None
        return self


class CreateAuditRequest(TeaModel):
    def __init__(self, audit_content=None):
        self.audit_content = audit_content

    def validate(self):
        self.validate_required(self.audit_content, 'audit_content')

    def to_map(self):
        result = {}
        result['AuditContent'] = self.audit_content
        return result

    def from_map(self, map={}):
        self.audit_content = map.get('AuditContent')
        return self


class CreateAuditResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class GetAuditHistoryRequest(TeaModel):
    def __init__(self, video_id=None, page_no=None, page_size=None, sort_by=None):
        self.video_id = video_id
        self.page_no = page_no
        self.page_size = page_size
        self.sort_by = sort_by

    def validate(self):
        self.validate_required(self.video_id, 'video_id')

    def to_map(self):
        result = {}
        result['VideoId'] = self.video_id
        result['PageNo'] = self.page_no
        result['PageSize'] = self.page_size
        result['SortBy'] = self.sort_by
        return result

    def from_map(self, map={}):
        self.video_id = map.get('VideoId')
        self.page_no = map.get('PageNo')
        self.page_size = map.get('PageSize')
        self.sort_by = map.get('SortBy')
        return self


class GetAuditHistoryResponse(TeaModel):
    def __init__(self, request_id=None, status=None, total=None, histories=None):
        self.request_id = request_id
        self.status = status
        self.total = total
        self.histories = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.status, 'status')
        self.validate_required(self.total, 'total')
        self.validate_required(self.histories, 'histories')
        if self.histories:
            for k in self.histories:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Status'] = self.status
        result['Total'] = self.total
        result['Histories'] = []
        if self.histories is not None:
            for k in self.histories:
                result['Histories'].append(k.to_map() if k else None)
        else:
            result['Histories'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.status = map.get('Status')
        self.total = map.get('Total')
        self.histories = []
        if map.get('Histories') is not None:
            for k in map.get('Histories'):
                temp_model = GetAuditHistoryResponseHistories()
                temp_model = temp_model.from_map(k)
                self.histories.append(temp_model)
        else:
            self.histories = None
        return self


class GetAuditHistoryResponseHistories(TeaModel):
    def __init__(self, creation_time=None, status=None, reason=None, comment=None, auditor=None):
        self.creation_time = creation_time
        self.status = status
        self.reason = reason
        self.comment = comment
        self.auditor = auditor

    def validate(self):
        self.validate_required(self.creation_time, 'creation_time')
        self.validate_required(self.status, 'status')
        self.validate_required(self.reason, 'reason')
        self.validate_required(self.comment, 'comment')
        self.validate_required(self.auditor, 'auditor')

    def to_map(self):
        result = {}
        result['CreationTime'] = self.creation_time
        result['Status'] = self.status
        result['Reason'] = self.reason
        result['Comment'] = self.comment
        result['Auditor'] = self.auditor
        return result

    def from_map(self, map={}):
        self.creation_time = map.get('CreationTime')
        self.status = map.get('Status')
        self.reason = map.get('Reason')
        self.comment = map.get('Comment')
        self.auditor = map.get('Auditor')
        return self


class ListAIJobRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_id=None, resource_owner_account=None, owner_account=None, job_ids=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_id = resource_owner_id
        self.resource_owner_account = resource_owner_account
        self.owner_account = owner_account
        self.job_ids = job_ids

    def validate(self):
        self.validate_required(self.job_ids, 'job_ids')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerId'] = self.resource_owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['OwnerAccount'] = self.owner_account
        result['JobIds'] = self.job_ids
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.owner_account = map.get('OwnerAccount')
        self.job_ids = map.get('JobIds')
        return self


class ListAIJobResponse(TeaModel):
    def __init__(self, request_id=None, aijob_list=None, non_exist_aijob_ids=None):
        self.request_id = request_id
        self.aijob_list = aijob_list
        self.non_exist_aijob_ids = non_exist_aijob_ids

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.aijob_list, 'aijob_list')
        if self.aijob_list:
            self.aijob_list.validate()
        self.validate_required(self.non_exist_aijob_ids, 'non_exist_aijob_ids')
        if self.non_exist_aijob_ids:
            self.non_exist_aijob_ids.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.aijob_list is not None:
            result['AIJobList'] = self.aijob_list.to_map()
        else:
            result['AIJobList'] = None
        if self.non_exist_aijob_ids is not None:
            result['NonExistAIJobIds'] = self.non_exist_aijob_ids.to_map()
        else:
            result['NonExistAIJobIds'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('AIJobList') is not None:
            temp_model = ListAIJobResponseAIJobList()
            self.aijob_list = temp_model.from_map(map['AIJobList'])
        else:
            self.aijob_list = None
        if map.get('NonExistAIJobIds') is not None:
            temp_model = ListAIJobResponseNonExistAIJobIds()
            self.non_exist_aijob_ids = temp_model.from_map(map['NonExistAIJobIds'])
        else:
            self.non_exist_aijob_ids = None
        return self


class ListAIJobResponseAIJobListAIJob(TeaModel):
    def __init__(self, job_id=None, media_id=None, type=None, status=None, code=None, message=None, creation_time=None, complete_time=None, data=None):
        self.job_id = job_id
        self.media_id = media_id
        self.type = type
        self.status = status
        self.code = code
        self.message = message
        self.creation_time = creation_time
        self.complete_time = complete_time
        self.data = data

    def validate(self):
        self.validate_required(self.job_id, 'job_id')
        self.validate_required(self.media_id, 'media_id')
        self.validate_required(self.type, 'type')
        self.validate_required(self.status, 'status')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.creation_time, 'creation_time')
        self.validate_required(self.complete_time, 'complete_time')
        self.validate_required(self.data, 'data')

    def to_map(self):
        result = {}
        result['JobId'] = self.job_id
        result['MediaId'] = self.media_id
        result['Type'] = self.type
        result['Status'] = self.status
        result['Code'] = self.code
        result['Message'] = self.message
        result['CreationTime'] = self.creation_time
        result['CompleteTime'] = self.complete_time
        result['Data'] = self.data
        return result

    def from_map(self, map={}):
        self.job_id = map.get('JobId')
        self.media_id = map.get('MediaId')
        self.type = map.get('Type')
        self.status = map.get('Status')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.creation_time = map.get('CreationTime')
        self.complete_time = map.get('CompleteTime')
        self.data = map.get('Data')
        return self


class ListAIJobResponseAIJobList(TeaModel):
    def __init__(self, aijob=None):
        self.aijob = []

    def validate(self):
        self.validate_required(self.aijob, 'aijob')
        if self.aijob:
            for k in self.aijob:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['AIJob'] = []
        if self.aijob is not None:
            for k in self.aijob:
                result['AIJob'].append(k.to_map() if k else None)
        else:
            result['AIJob'] = None
        return result

    def from_map(self, map={}):
        self.aijob = []
        if map.get('AIJob') is not None:
            for k in map.get('AIJob'):
                temp_model = ListAIJobResponseAIJobListAIJob()
                temp_model = temp_model.from_map(k)
                self.aijob.append(temp_model)
        else:
            self.aijob = None
        return self


class ListAIJobResponseNonExistAIJobIds(TeaModel):
    def __init__(self, string=None):
        self.string = []

    def validate(self):
        self.validate_required(self.string, 'string')

    def to_map(self):
        result = {}
        result['String'] = []
        if self.string is not None:
            for k in self.string:
                result['String'].append(k)
        else:
            result['String'] = None
        return result

    def from_map(self, map={}):
        self.string = []
        if map.get('String') is not None:
            for k in map.get('String'):
                self.string.append(k)
        else:
            self.string = None
        return self


class SubmitAIJobRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_id=None, resource_owner_account=None, owner_account=None, media_id=None, types=None, config=None, user_data=None, input=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_id = resource_owner_id
        self.resource_owner_account = resource_owner_account
        self.owner_account = owner_account
        self.media_id = media_id
        self.types = types
        self.config = config
        self.user_data = user_data
        self.input = input

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerId'] = self.resource_owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['OwnerAccount'] = self.owner_account
        result['MediaId'] = self.media_id
        result['Types'] = self.types
        result['Config'] = self.config
        result['UserData'] = self.user_data
        result['Input'] = self.input
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.owner_account = map.get('OwnerAccount')
        self.media_id = map.get('MediaId')
        self.types = map.get('Types')
        self.config = map.get('Config')
        self.user_data = map.get('UserData')
        self.input = map.get('Input')
        return self


class SubmitAIJobResponse(TeaModel):
    def __init__(self, request_id=None, aijob_list=None):
        self.request_id = request_id
        self.aijob_list = aijob_list

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.aijob_list, 'aijob_list')
        if self.aijob_list:
            self.aijob_list.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.aijob_list is not None:
            result['AIJobList'] = self.aijob_list.to_map()
        else:
            result['AIJobList'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('AIJobList') is not None:
            temp_model = SubmitAIJobResponseAIJobList()
            self.aijob_list = temp_model.from_map(map['AIJobList'])
        else:
            self.aijob_list = None
        return self


class SubmitAIJobResponseAIJobListAIJob(TeaModel):
    def __init__(self, job_id=None, type=None, media_id=None, status=None, code=None, message=None, creation_time=None, data=None):
        self.job_id = job_id
        self.type = type
        self.media_id = media_id
        self.status = status
        self.code = code
        self.message = message
        self.creation_time = creation_time
        self.data = data

    def validate(self):
        self.validate_required(self.job_id, 'job_id')
        self.validate_required(self.type, 'type')
        self.validate_required(self.media_id, 'media_id')
        self.validate_required(self.status, 'status')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.creation_time, 'creation_time')
        self.validate_required(self.data, 'data')

    def to_map(self):
        result = {}
        result['JobId'] = self.job_id
        result['Type'] = self.type
        result['MediaId'] = self.media_id
        result['Status'] = self.status
        result['Code'] = self.code
        result['Message'] = self.message
        result['CreationTime'] = self.creation_time
        result['Data'] = self.data
        return result

    def from_map(self, map={}):
        self.job_id = map.get('JobId')
        self.type = map.get('Type')
        self.media_id = map.get('MediaId')
        self.status = map.get('Status')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.creation_time = map.get('CreationTime')
        self.data = map.get('Data')
        return self


class SubmitAIJobResponseAIJobList(TeaModel):
    def __init__(self, aijob=None):
        self.aijob = []

    def validate(self):
        self.validate_required(self.aijob, 'aijob')
        if self.aijob:
            for k in self.aijob:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['AIJob'] = []
        if self.aijob is not None:
            for k in self.aijob:
                result['AIJob'].append(k.to_map() if k else None)
        else:
            result['AIJob'] = None
        return result

    def from_map(self, map={}):
        self.aijob = []
        if map.get('AIJob') is not None:
            for k in map.get('AIJob'):
                temp_model = SubmitAIJobResponseAIJobListAIJob()
                temp_model = temp_model.from_map(k)
                self.aijob.append(temp_model)
        else:
            self.aijob = None
        return self


class GetImageInfoRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, image_id=None, auth_timeout=None, output_type=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.image_id = image_id
        self.auth_timeout = auth_timeout
        self.output_type = output_type

    def validate(self):
        self.validate_required(self.image_id, 'image_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['ImageId'] = self.image_id
        result['AuthTimeout'] = self.auth_timeout
        result['OutputType'] = self.output_type
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.image_id = map.get('ImageId')
        self.auth_timeout = map.get('AuthTimeout')
        self.output_type = map.get('OutputType')
        return self


class GetImageInfoResponse(TeaModel):
    def __init__(self, request_id=None, image_info=None):
        self.request_id = request_id
        self.image_info = image_info

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.image_info, 'image_info')
        if self.image_info:
            self.image_info.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.image_info is not None:
            result['ImageInfo'] = self.image_info.to_map()
        else:
            result['ImageInfo'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('ImageInfo') is not None:
            temp_model = GetImageInfoResponseImageInfo()
            self.image_info = temp_model.from_map(map['ImageInfo'])
        else:
            self.image_info = None
        return self


class GetImageInfoResponseImageInfoMezzanine(TeaModel):
    def __init__(self, original_file_name=None, file_size=None, width=None, height=None, file_url=None):
        self.original_file_name = original_file_name
        self.file_size = file_size
        self.width = width
        self.height = height
        self.file_url = file_url

    def validate(self):
        self.validate_required(self.original_file_name, 'original_file_name')
        self.validate_required(self.file_size, 'file_size')
        self.validate_required(self.width, 'width')
        self.validate_required(self.height, 'height')
        self.validate_required(self.file_url, 'file_url')

    def to_map(self):
        result = {}
        result['OriginalFileName'] = self.original_file_name
        result['FileSize'] = self.file_size
        result['Width'] = self.width
        result['Height'] = self.height
        result['FileURL'] = self.file_url
        return result

    def from_map(self, map={}):
        self.original_file_name = map.get('OriginalFileName')
        self.file_size = map.get('FileSize')
        self.width = map.get('Width')
        self.height = map.get('Height')
        self.file_url = map.get('FileURL')
        return self


class GetImageInfoResponseImageInfo(TeaModel):
    def __init__(self, image_id=None, title=None, creation_time=None, image_type=None, tags=None, _url=None, cate_id=None, cate_name=None, description=None, storage_location=None, status=None, app_id=None, region_id=None, audit_status=None, mezzanine=None):
        self.image_id = image_id
        self.title = title
        self.creation_time = creation_time
        self.image_type = image_type
        self.tags = tags
        self._url = _url
        self.cate_id = cate_id
        self.cate_name = cate_name
        self.description = description
        self.storage_location = storage_location
        self.status = status
        self.app_id = app_id
        self.region_id = region_id
        self.audit_status = audit_status
        self.mezzanine = mezzanine

    def validate(self):
        self.validate_required(self.image_id, 'image_id')
        self.validate_required(self.title, 'title')
        self.validate_required(self.creation_time, 'creation_time')
        self.validate_required(self.image_type, 'image_type')
        self.validate_required(self.tags, 'tags')
        self.validate_required(self._url, '_url')
        self.validate_required(self.cate_id, 'cate_id')
        self.validate_required(self.cate_name, 'cate_name')
        self.validate_required(self.description, 'description')
        self.validate_required(self.storage_location, 'storage_location')
        self.validate_required(self.status, 'status')
        self.validate_required(self.app_id, 'app_id')
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.audit_status, 'audit_status')
        self.validate_required(self.mezzanine, 'mezzanine')
        if self.mezzanine:
            self.mezzanine.validate()

    def to_map(self):
        result = {}
        result['ImageId'] = self.image_id
        result['Title'] = self.title
        result['CreationTime'] = self.creation_time
        result['ImageType'] = self.image_type
        result['Tags'] = self.tags
        result['URL'] = self._url
        result['CateId'] = self.cate_id
        result['CateName'] = self.cate_name
        result['Description'] = self.description
        result['StorageLocation'] = self.storage_location
        result['Status'] = self.status
        result['AppId'] = self.app_id
        result['RegionId'] = self.region_id
        result['AuditStatus'] = self.audit_status
        if self.mezzanine is not None:
            result['Mezzanine'] = self.mezzanine.to_map()
        else:
            result['Mezzanine'] = None
        return result

    def from_map(self, map={}):
        self.image_id = map.get('ImageId')
        self.title = map.get('Title')
        self.creation_time = map.get('CreationTime')
        self.image_type = map.get('ImageType')
        self.tags = map.get('Tags')
        self._url = map.get('URL')
        self.cate_id = map.get('CateId')
        self.cate_name = map.get('CateName')
        self.description = map.get('Description')
        self.storage_location = map.get('StorageLocation')
        self.status = map.get('Status')
        self.app_id = map.get('AppId')
        self.region_id = map.get('RegionId')
        self.audit_status = map.get('AuditStatus')
        if map.get('Mezzanine') is not None:
            temp_model = GetImageInfoResponseImageInfoMezzanine()
            self.mezzanine = temp_model.from_map(map['Mezzanine'])
        else:
            self.mezzanine = None
        return self


class DeleteStreamRequest(TeaModel):
    def __init__(self, owner_id=None, resource_owner_account=None, resource_owner_id=None, job_ids=None, video_id=None):
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.job_ids = job_ids
        self.video_id = video_id

    def validate(self):
        self.validate_required(self.job_ids, 'job_ids')
        self.validate_required(self.video_id, 'video_id')

    def to_map(self):
        result = {}
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['JobIds'] = self.job_ids
        result['VideoId'] = self.video_id
        return result

    def from_map(self, map={}):
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.job_ids = map.get('JobIds')
        self.video_id = map.get('VideoId')
        return self


class DeleteStreamResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class SubmitSnapshotJobRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, video_id=None, specified_offset_time=None, width=None, height=None, count=None, interval=None, sprite_snapshot_config=None, snapshot_template_id=None, user_data=None, file_url=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.video_id = video_id
        self.specified_offset_time = specified_offset_time
        self.width = width
        self.height = height
        self.count = count
        self.interval = interval
        self.sprite_snapshot_config = sprite_snapshot_config
        self.snapshot_template_id = snapshot_template_id
        self.user_data = user_data
        self.file_url = file_url

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['VideoId'] = self.video_id
        result['SpecifiedOffsetTime'] = self.specified_offset_time
        result['Width'] = self.width
        result['Height'] = self.height
        result['Count'] = self.count
        result['Interval'] = self.interval
        result['SpriteSnapshotConfig'] = self.sprite_snapshot_config
        result['SnapshotTemplateId'] = self.snapshot_template_id
        result['UserData'] = self.user_data
        result['FileUrl'] = self.file_url
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.video_id = map.get('VideoId')
        self.specified_offset_time = map.get('SpecifiedOffsetTime')
        self.width = map.get('Width')
        self.height = map.get('Height')
        self.count = map.get('Count')
        self.interval = map.get('Interval')
        self.sprite_snapshot_config = map.get('SpriteSnapshotConfig')
        self.snapshot_template_id = map.get('SnapshotTemplateId')
        self.user_data = map.get('UserData')
        self.file_url = map.get('FileUrl')
        return self


class SubmitSnapshotJobResponse(TeaModel):
    def __init__(self, request_id=None, snapshot_job=None):
        self.request_id = request_id
        self.snapshot_job = snapshot_job

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.snapshot_job, 'snapshot_job')
        if self.snapshot_job:
            self.snapshot_job.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.snapshot_job is not None:
            result['SnapshotJob'] = self.snapshot_job.to_map()
        else:
            result['SnapshotJob'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('SnapshotJob') is not None:
            temp_model = SubmitSnapshotJobResponseSnapshotJob()
            self.snapshot_job = temp_model.from_map(map['SnapshotJob'])
        else:
            self.snapshot_job = None
        return self


class SubmitSnapshotJobResponseSnapshotJob(TeaModel):
    def __init__(self, job_id=None):
        self.job_id = job_id

    def validate(self):
        self.validate_required(self.job_id, 'job_id')

    def to_map(self):
        result = {}
        result['JobId'] = self.job_id
        return result

    def from_map(self, map={}):
        self.job_id = map.get('JobId')
        return self


class UpdateEditingProjectRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_id=None, resource_owner_account=None, owner_account=None, project_id=None, title=None, timeline=None, description=None, cover_url=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_id = resource_owner_id
        self.resource_owner_account = resource_owner_account
        self.owner_account = owner_account
        self.project_id = project_id
        self.title = title
        self.timeline = timeline
        self.description = description
        self.cover_url = cover_url

    def validate(self):
        self.validate_required(self.project_id, 'project_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerId'] = self.resource_owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['OwnerAccount'] = self.owner_account
        result['ProjectId'] = self.project_id
        result['Title'] = self.title
        result['Timeline'] = self.timeline
        result['Description'] = self.description
        result['CoverURL'] = self.cover_url
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.owner_account = map.get('OwnerAccount')
        self.project_id = map.get('ProjectId')
        self.title = map.get('Title')
        self.timeline = map.get('Timeline')
        self.description = map.get('Description')
        self.cover_url = map.get('CoverURL')
        return self


class UpdateEditingProjectResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class SetEditingProjectMaterialsRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_id=None, resource_owner_account=None, owner_account=None, project_id=None, material_ids=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_id = resource_owner_id
        self.resource_owner_account = resource_owner_account
        self.owner_account = owner_account
        self.project_id = project_id
        self.material_ids = material_ids

    def validate(self):
        self.validate_required(self.project_id, 'project_id')
        self.validate_required(self.material_ids, 'material_ids')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerId'] = self.resource_owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['OwnerAccount'] = self.owner_account
        result['ProjectId'] = self.project_id
        result['MaterialIds'] = self.material_ids
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.owner_account = map.get('OwnerAccount')
        self.project_id = map.get('ProjectId')
        self.material_ids = map.get('MaterialIds')
        return self


class SetEditingProjectMaterialsResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class SearchEditingProjectRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_id=None, resource_owner_account=None, owner_account=None, end_time=None, start_time=None, status=None, page_no=None, page_size=None, sort_by=None, title=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_id = resource_owner_id
        self.resource_owner_account = resource_owner_account
        self.owner_account = owner_account
        self.end_time = end_time
        self.start_time = start_time
        self.status = status
        self.page_no = page_no
        self.page_size = page_size
        self.sort_by = sort_by
        self.title = title

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerId'] = self.resource_owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['OwnerAccount'] = self.owner_account
        result['EndTime'] = self.end_time
        result['StartTime'] = self.start_time
        result['Status'] = self.status
        result['PageNo'] = self.page_no
        result['PageSize'] = self.page_size
        result['SortBy'] = self.sort_by
        result['Title'] = self.title
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.owner_account = map.get('OwnerAccount')
        self.end_time = map.get('EndTime')
        self.start_time = map.get('StartTime')
        self.status = map.get('Status')
        self.page_no = map.get('PageNo')
        self.page_size = map.get('PageSize')
        self.sort_by = map.get('SortBy')
        self.title = map.get('Title')
        return self


class SearchEditingProjectResponse(TeaModel):
    def __init__(self, request_id=None, total=None, project_list=None):
        self.request_id = request_id
        self.total = total
        self.project_list = project_list

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.total, 'total')
        self.validate_required(self.project_list, 'project_list')
        if self.project_list:
            self.project_list.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Total'] = self.total
        if self.project_list is not None:
            result['ProjectList'] = self.project_list.to_map()
        else:
            result['ProjectList'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.total = map.get('Total')
        if map.get('ProjectList') is not None:
            temp_model = SearchEditingProjectResponseProjectList()
            self.project_list = temp_model.from_map(map['ProjectList'])
        else:
            self.project_list = None
        return self


class SearchEditingProjectResponseProjectListProject(TeaModel):
    def __init__(self, project_id=None, creation_time=None, modified_time=None, status=None, description=None, title=None, cover_url=None, storage_location=None, region_id=None, duration=None):
        self.project_id = project_id
        self.creation_time = creation_time
        self.modified_time = modified_time
        self.status = status
        self.description = description
        self.title = title
        self.cover_url = cover_url
        self.storage_location = storage_location
        self.region_id = region_id
        self.duration = duration

    def validate(self):
        self.validate_required(self.project_id, 'project_id')
        self.validate_required(self.creation_time, 'creation_time')
        self.validate_required(self.modified_time, 'modified_time')
        self.validate_required(self.status, 'status')
        self.validate_required(self.description, 'description')
        self.validate_required(self.title, 'title')
        self.validate_required(self.cover_url, 'cover_url')
        self.validate_required(self.storage_location, 'storage_location')
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.duration, 'duration')

    def to_map(self):
        result = {}
        result['ProjectId'] = self.project_id
        result['CreationTime'] = self.creation_time
        result['ModifiedTime'] = self.modified_time
        result['Status'] = self.status
        result['Description'] = self.description
        result['Title'] = self.title
        result['CoverURL'] = self.cover_url
        result['StorageLocation'] = self.storage_location
        result['RegionId'] = self.region_id
        result['Duration'] = self.duration
        return result

    def from_map(self, map={}):
        self.project_id = map.get('ProjectId')
        self.creation_time = map.get('CreationTime')
        self.modified_time = map.get('ModifiedTime')
        self.status = map.get('Status')
        self.description = map.get('Description')
        self.title = map.get('Title')
        self.cover_url = map.get('CoverURL')
        self.storage_location = map.get('StorageLocation')
        self.region_id = map.get('RegionId')
        self.duration = map.get('Duration')
        return self


class SearchEditingProjectResponseProjectList(TeaModel):
    def __init__(self, project=None):
        self.project = []

    def validate(self):
        self.validate_required(self.project, 'project')
        if self.project:
            for k in self.project:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Project'] = []
        if self.project is not None:
            for k in self.project:
                result['Project'].append(k.to_map() if k else None)
        else:
            result['Project'] = None
        return result

    def from_map(self, map={}):
        self.project = []
        if map.get('Project') is not None:
            for k in map.get('Project'):
                temp_model = SearchEditingProjectResponseProjectListProject()
                temp_model = temp_model.from_map(k)
                self.project.append(temp_model)
        else:
            self.project = None
        return self


class ProduceEditingProjectVideoRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, project_id=None, timeline=None, title=None, description=None, cover_url=None, media_metadata=None, produce_config=None, user_data=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.project_id = project_id
        self.timeline = timeline
        self.title = title
        self.description = description
        self.cover_url = cover_url
        self.media_metadata = media_metadata
        self.produce_config = produce_config
        self.user_data = user_data

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['ProjectId'] = self.project_id
        result['Timeline'] = self.timeline
        result['Title'] = self.title
        result['Description'] = self.description
        result['CoverURL'] = self.cover_url
        result['MediaMetadata'] = self.media_metadata
        result['ProduceConfig'] = self.produce_config
        result['UserData'] = self.user_data
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.project_id = map.get('ProjectId')
        self.timeline = map.get('Timeline')
        self.title = map.get('Title')
        self.description = map.get('Description')
        self.cover_url = map.get('CoverURL')
        self.media_metadata = map.get('MediaMetadata')
        self.produce_config = map.get('ProduceConfig')
        self.user_data = map.get('UserData')
        return self


class ProduceEditingProjectVideoResponse(TeaModel):
    def __init__(self, request_id=None, media_id=None, project_id=None):
        self.request_id = request_id
        self.media_id = media_id
        self.project_id = project_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.media_id, 'media_id')
        self.validate_required(self.project_id, 'project_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['MediaId'] = self.media_id
        result['ProjectId'] = self.project_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.media_id = map.get('MediaId')
        self.project_id = map.get('ProjectId')
        return self


class GetEditingProjectMaterialsRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_id=None, resource_owner_account=None, owner_account=None, project_id=None, type=None, material_type=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_id = resource_owner_id
        self.resource_owner_account = resource_owner_account
        self.owner_account = owner_account
        self.project_id = project_id
        self.type = type
        self.material_type = material_type

    def validate(self):
        self.validate_required(self.project_id, 'project_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerId'] = self.resource_owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['OwnerAccount'] = self.owner_account
        result['ProjectId'] = self.project_id
        result['Type'] = self.type
        result['MaterialType'] = self.material_type
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.owner_account = map.get('OwnerAccount')
        self.project_id = map.get('ProjectId')
        self.type = map.get('Type')
        self.material_type = map.get('MaterialType')
        return self


class GetEditingProjectMaterialsResponse(TeaModel):
    def __init__(self, request_id=None, material_list=None):
        self.request_id = request_id
        self.material_list = material_list

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.material_list, 'material_list')
        if self.material_list:
            self.material_list.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.material_list is not None:
            result['MaterialList'] = self.material_list.to_map()
        else:
            result['MaterialList'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('MaterialList') is not None:
            temp_model = GetEditingProjectMaterialsResponseMaterialList()
            self.material_list = temp_model.from_map(map['MaterialList'])
        else:
            self.material_list = None
        return self


class GetEditingProjectMaterialsResponseMaterialListMaterialSnapshots(TeaModel):
    def __init__(self, snapshot=None):
        self.snapshot = []

    def validate(self):
        self.validate_required(self.snapshot, 'snapshot')

    def to_map(self):
        result = {}
        result['Snapshot'] = []
        if self.snapshot is not None:
            for k in self.snapshot:
                result['Snapshot'].append(k)
        else:
            result['Snapshot'] = None
        return result

    def from_map(self, map={}):
        self.snapshot = []
        if map.get('Snapshot') is not None:
            for k in map.get('Snapshot'):
                self.snapshot.append(k)
        else:
            self.snapshot = None
        return self


class GetEditingProjectMaterialsResponseMaterialListMaterialSprites(TeaModel):
    def __init__(self, sprite=None):
        self.sprite = []

    def validate(self):
        self.validate_required(self.sprite, 'sprite')

    def to_map(self):
        result = {}
        result['Sprite'] = []
        if self.sprite is not None:
            for k in self.sprite:
                result['Sprite'].append(k)
        else:
            result['Sprite'] = None
        return result

    def from_map(self, map={}):
        self.sprite = []
        if map.get('Sprite') is not None:
            for k in map.get('Sprite'):
                self.sprite.append(k)
        else:
            self.sprite = None
        return self


class GetEditingProjectMaterialsResponseMaterialListMaterial(TeaModel):
    def __init__(self, material_id=None, title=None, tags=None, status=None, size=None, duration=None, description=None, creation_time=None, modified_time=None, cover_url=None, cate_id=None, cate_name=None, source=None, sprite_config=None, snapshots=None, sprites=None):
        self.material_id = material_id
        self.title = title
        self.tags = tags
        self.status = status
        self.size = size
        self.duration = duration
        self.description = description
        self.creation_time = creation_time
        self.modified_time = modified_time
        self.cover_url = cover_url
        self.cate_id = cate_id
        self.cate_name = cate_name
        self.source = source
        self.sprite_config = sprite_config
        self.snapshots = snapshots
        self.sprites = sprites

    def validate(self):
        self.validate_required(self.material_id, 'material_id')
        self.validate_required(self.title, 'title')
        self.validate_required(self.tags, 'tags')
        self.validate_required(self.status, 'status')
        self.validate_required(self.size, 'size')
        self.validate_required(self.duration, 'duration')
        self.validate_required(self.description, 'description')
        self.validate_required(self.creation_time, 'creation_time')
        self.validate_required(self.modified_time, 'modified_time')
        self.validate_required(self.cover_url, 'cover_url')
        self.validate_required(self.cate_id, 'cate_id')
        self.validate_required(self.cate_name, 'cate_name')
        self.validate_required(self.source, 'source')
        self.validate_required(self.sprite_config, 'sprite_config')
        self.validate_required(self.snapshots, 'snapshots')
        if self.snapshots:
            self.snapshots.validate()
        self.validate_required(self.sprites, 'sprites')
        if self.sprites:
            self.sprites.validate()

    def to_map(self):
        result = {}
        result['MaterialId'] = self.material_id
        result['Title'] = self.title
        result['Tags'] = self.tags
        result['Status'] = self.status
        result['Size'] = self.size
        result['Duration'] = self.duration
        result['Description'] = self.description
        result['CreationTime'] = self.creation_time
        result['ModifiedTime'] = self.modified_time
        result['CoverURL'] = self.cover_url
        result['CateId'] = self.cate_id
        result['CateName'] = self.cate_name
        result['Source'] = self.source
        result['SpriteConfig'] = self.sprite_config
        if self.snapshots is not None:
            result['Snapshots'] = self.snapshots.to_map()
        else:
            result['Snapshots'] = None
        if self.sprites is not None:
            result['Sprites'] = self.sprites.to_map()
        else:
            result['Sprites'] = None
        return result

    def from_map(self, map={}):
        self.material_id = map.get('MaterialId')
        self.title = map.get('Title')
        self.tags = map.get('Tags')
        self.status = map.get('Status')
        self.size = map.get('Size')
        self.duration = map.get('Duration')
        self.description = map.get('Description')
        self.creation_time = map.get('CreationTime')
        self.modified_time = map.get('ModifiedTime')
        self.cover_url = map.get('CoverURL')
        self.cate_id = map.get('CateId')
        self.cate_name = map.get('CateName')
        self.source = map.get('Source')
        self.sprite_config = map.get('SpriteConfig')
        if map.get('Snapshots') is not None:
            temp_model = GetEditingProjectMaterialsResponseMaterialListMaterialSnapshots()
            self.snapshots = temp_model.from_map(map['Snapshots'])
        else:
            self.snapshots = None
        if map.get('Sprites') is not None:
            temp_model = GetEditingProjectMaterialsResponseMaterialListMaterialSprites()
            self.sprites = temp_model.from_map(map['Sprites'])
        else:
            self.sprites = None
        return self


class GetEditingProjectMaterialsResponseMaterialList(TeaModel):
    def __init__(self, material=None):
        self.material = []

    def validate(self):
        self.validate_required(self.material, 'material')
        if self.material:
            for k in self.material:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Material'] = []
        if self.material is not None:
            for k in self.material:
                result['Material'].append(k.to_map() if k else None)
        else:
            result['Material'] = None
        return result

    def from_map(self, map={}):
        self.material = []
        if map.get('Material') is not None:
            for k in map.get('Material'):
                temp_model = GetEditingProjectMaterialsResponseMaterialListMaterial()
                temp_model = temp_model.from_map(k)
                self.material.append(temp_model)
        else:
            self.material = None
        return self


class GetEditingProjectRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_id=None, resource_owner_account=None, owner_account=None, project_id=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_id = resource_owner_id
        self.resource_owner_account = resource_owner_account
        self.owner_account = owner_account
        self.project_id = project_id

    def validate(self):
        self.validate_required(self.project_id, 'project_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerId'] = self.resource_owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['OwnerAccount'] = self.owner_account
        result['ProjectId'] = self.project_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.owner_account = map.get('OwnerAccount')
        self.project_id = map.get('ProjectId')
        return self


class GetEditingProjectResponse(TeaModel):
    def __init__(self, request_id=None, project=None):
        self.request_id = request_id
        self.project = project

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.project, 'project')
        if self.project:
            self.project.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.project is not None:
            result['Project'] = self.project.to_map()
        else:
            result['Project'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('Project') is not None:
            temp_model = GetEditingProjectResponseProject()
            self.project = temp_model.from_map(map['Project'])
        else:
            self.project = None
        return self


class GetEditingProjectResponseProject(TeaModel):
    def __init__(self, project_id=None, creation_time=None, modified_time=None, status=None, description=None, title=None, timeline=None, cover_url=None, storage_location=None, region_id=None):
        self.project_id = project_id
        self.creation_time = creation_time
        self.modified_time = modified_time
        self.status = status
        self.description = description
        self.title = title
        self.timeline = timeline
        self.cover_url = cover_url
        self.storage_location = storage_location
        self.region_id = region_id

    def validate(self):
        self.validate_required(self.project_id, 'project_id')
        self.validate_required(self.creation_time, 'creation_time')
        self.validate_required(self.modified_time, 'modified_time')
        self.validate_required(self.status, 'status')
        self.validate_required(self.description, 'description')
        self.validate_required(self.title, 'title')
        self.validate_required(self.timeline, 'timeline')
        self.validate_required(self.cover_url, 'cover_url')
        self.validate_required(self.storage_location, 'storage_location')
        self.validate_required(self.region_id, 'region_id')

    def to_map(self):
        result = {}
        result['ProjectId'] = self.project_id
        result['CreationTime'] = self.creation_time
        result['ModifiedTime'] = self.modified_time
        result['Status'] = self.status
        result['Description'] = self.description
        result['Title'] = self.title
        result['Timeline'] = self.timeline
        result['CoverURL'] = self.cover_url
        result['StorageLocation'] = self.storage_location
        result['RegionId'] = self.region_id
        return result

    def from_map(self, map={}):
        self.project_id = map.get('ProjectId')
        self.creation_time = map.get('CreationTime')
        self.modified_time = map.get('ModifiedTime')
        self.status = map.get('Status')
        self.description = map.get('Description')
        self.title = map.get('Title')
        self.timeline = map.get('Timeline')
        self.cover_url = map.get('CoverURL')
        self.storage_location = map.get('StorageLocation')
        self.region_id = map.get('RegionId')
        return self


class DeleteEditingProjectRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_id=None, resource_owner_account=None, owner_account=None, project_ids=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_id = resource_owner_id
        self.resource_owner_account = resource_owner_account
        self.owner_account = owner_account
        self.project_ids = project_ids

    def validate(self):
        self.validate_required(self.project_ids, 'project_ids')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerId'] = self.resource_owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['OwnerAccount'] = self.owner_account
        result['ProjectIds'] = self.project_ids
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.owner_account = map.get('OwnerAccount')
        self.project_ids = map.get('ProjectIds')
        return self


class DeleteEditingProjectResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class AddEditingProjectRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_id=None, resource_owner_account=None, owner_account=None, title=None, description=None, timeline=None, cover_url=None, division=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_id = resource_owner_id
        self.resource_owner_account = resource_owner_account
        self.owner_account = owner_account
        self.title = title
        self.description = description
        self.timeline = timeline
        self.cover_url = cover_url
        self.division = division

    def validate(self):
        self.validate_required(self.title, 'title')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerId'] = self.resource_owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['OwnerAccount'] = self.owner_account
        result['Title'] = self.title
        result['Description'] = self.description
        result['Timeline'] = self.timeline
        result['CoverURL'] = self.cover_url
        result['Division'] = self.division
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.owner_account = map.get('OwnerAccount')
        self.title = map.get('Title')
        self.description = map.get('Description')
        self.timeline = map.get('Timeline')
        self.cover_url = map.get('CoverURL')
        self.division = map.get('Division')
        return self


class AddEditingProjectResponse(TeaModel):
    def __init__(self, request_id=None, project=None):
        self.request_id = request_id
        self.project = project

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.project, 'project')
        if self.project:
            self.project.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.project is not None:
            result['Project'] = self.project.to_map()
        else:
            result['Project'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('Project') is not None:
            temp_model = AddEditingProjectResponseProject()
            self.project = temp_model.from_map(map['Project'])
        else:
            self.project = None
        return self


class AddEditingProjectResponseProject(TeaModel):
    def __init__(self, project_id=None, creation_time=None, modified_time=None, status=None, description=None, title=None):
        self.project_id = project_id
        self.creation_time = creation_time
        self.modified_time = modified_time
        self.status = status
        self.description = description
        self.title = title

    def validate(self):
        self.validate_required(self.project_id, 'project_id')
        self.validate_required(self.creation_time, 'creation_time')
        self.validate_required(self.modified_time, 'modified_time')
        self.validate_required(self.status, 'status')
        self.validate_required(self.description, 'description')
        self.validate_required(self.title, 'title')

    def to_map(self):
        result = {}
        result['ProjectId'] = self.project_id
        result['CreationTime'] = self.creation_time
        result['ModifiedTime'] = self.modified_time
        result['Status'] = self.status
        result['Description'] = self.description
        result['Title'] = self.title
        return result

    def from_map(self, map={}):
        self.project_id = map.get('ProjectId')
        self.creation_time = map.get('CreationTime')
        self.modified_time = map.get('ModifiedTime')
        self.status = map.get('Status')
        self.description = map.get('Description')
        self.title = map.get('Title')
        return self


class GetMezzanineInfoRequest(TeaModel):
    def __init__(self, owner_id=None, resource_owner_account=None, resource_owner_id=None, video_id=None, auth_timeout=None, preview_segment=None, output_type=None, addition_type=None):
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.video_id = video_id
        self.auth_timeout = auth_timeout
        self.preview_segment = preview_segment
        self.output_type = output_type
        self.addition_type = addition_type

    def validate(self):
        self.validate_required(self.video_id, 'video_id')

    def to_map(self):
        result = {}
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['VideoId'] = self.video_id
        result['AuthTimeout'] = self.auth_timeout
        result['PreviewSegment'] = self.preview_segment
        result['OutputType'] = self.output_type
        result['AdditionType'] = self.addition_type
        return result

    def from_map(self, map={}):
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.video_id = map.get('VideoId')
        self.auth_timeout = map.get('AuthTimeout')
        self.preview_segment = map.get('PreviewSegment')
        self.output_type = map.get('OutputType')
        self.addition_type = map.get('AdditionType')
        return self


class GetMezzanineInfoResponse(TeaModel):
    def __init__(self, request_id=None, mezzanine=None):
        self.request_id = request_id
        self.mezzanine = mezzanine

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.mezzanine, 'mezzanine')
        if self.mezzanine:
            self.mezzanine.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.mezzanine is not None:
            result['Mezzanine'] = self.mezzanine.to_map()
        else:
            result['Mezzanine'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('Mezzanine') is not None:
            temp_model = GetMezzanineInfoResponseMezzanine()
            self.mezzanine = temp_model.from_map(map['Mezzanine'])
        else:
            self.mezzanine = None
        return self


class GetMezzanineInfoResponseMezzanineAudioStreamList(TeaModel):
    def __init__(self, index=None, codec_name=None, codec_long_name=None, codec_time_base=None, codec_tag_string=None, codec_tag=None, sample_fmt=None, sample_rate=None, channels=None, channel_layout=None, timebase=None, start_time=None, duration=None, bitrate=None, num_frames=None, lang=None):
        self.index = index
        self.codec_name = codec_name
        self.codec_long_name = codec_long_name
        self.codec_time_base = codec_time_base
        self.codec_tag_string = codec_tag_string
        self.codec_tag = codec_tag
        self.sample_fmt = sample_fmt
        self.sample_rate = sample_rate
        self.channels = channels
        self.channel_layout = channel_layout
        self.timebase = timebase
        self.start_time = start_time
        self.duration = duration
        self.bitrate = bitrate
        self.num_frames = num_frames
        self.lang = lang

    def validate(self):
        self.validate_required(self.index, 'index')
        self.validate_required(self.codec_name, 'codec_name')
        self.validate_required(self.codec_long_name, 'codec_long_name')
        self.validate_required(self.codec_time_base, 'codec_time_base')
        self.validate_required(self.codec_tag_string, 'codec_tag_string')
        self.validate_required(self.codec_tag, 'codec_tag')
        self.validate_required(self.sample_fmt, 'sample_fmt')
        self.validate_required(self.sample_rate, 'sample_rate')
        self.validate_required(self.channels, 'channels')
        self.validate_required(self.channel_layout, 'channel_layout')
        self.validate_required(self.timebase, 'timebase')
        self.validate_required(self.start_time, 'start_time')
        self.validate_required(self.duration, 'duration')
        self.validate_required(self.bitrate, 'bitrate')
        self.validate_required(self.num_frames, 'num_frames')
        self.validate_required(self.lang, 'lang')

    def to_map(self):
        result = {}
        result['Index'] = self.index
        result['CodecName'] = self.codec_name
        result['CodecLongName'] = self.codec_long_name
        result['CodecTimeBase'] = self.codec_time_base
        result['CodecTagString'] = self.codec_tag_string
        result['CodecTag'] = self.codec_tag
        result['SampleFmt'] = self.sample_fmt
        result['SampleRate'] = self.sample_rate
        result['Channels'] = self.channels
        result['ChannelLayout'] = self.channel_layout
        result['Timebase'] = self.timebase
        result['StartTime'] = self.start_time
        result['Duration'] = self.duration
        result['Bitrate'] = self.bitrate
        result['NumFrames'] = self.num_frames
        result['Lang'] = self.lang
        return result

    def from_map(self, map={}):
        self.index = map.get('Index')
        self.codec_name = map.get('CodecName')
        self.codec_long_name = map.get('CodecLongName')
        self.codec_time_base = map.get('CodecTimeBase')
        self.codec_tag_string = map.get('CodecTagString')
        self.codec_tag = map.get('CodecTag')
        self.sample_fmt = map.get('SampleFmt')
        self.sample_rate = map.get('SampleRate')
        self.channels = map.get('Channels')
        self.channel_layout = map.get('ChannelLayout')
        self.timebase = map.get('Timebase')
        self.start_time = map.get('StartTime')
        self.duration = map.get('Duration')
        self.bitrate = map.get('Bitrate')
        self.num_frames = map.get('NumFrames')
        self.lang = map.get('Lang')
        return self


class GetMezzanineInfoResponseMezzanineVideoStreamList(TeaModel):
    def __init__(self, index=None, codec_name=None, codec_long_name=None, profile=None, codec_time_base=None, codec_tag_string=None, codec_tag=None, width=None, height=None, has_bframes=None, sar=None, dar=None, pix_fmt=None, level=None, fps=None, avg_fps=None, timebase=None, start_time=None, duration=None, num_frames=None, lang=None, rotate=None):
        self.index = index
        self.codec_name = codec_name
        self.codec_long_name = codec_long_name
        self.profile = profile
        self.codec_time_base = codec_time_base
        self.codec_tag_string = codec_tag_string
        self.codec_tag = codec_tag
        self.width = width
        self.height = height
        self.has_bframes = has_bframes
        self.sar = sar
        self.dar = dar
        self.pix_fmt = pix_fmt
        self.level = level
        self.fps = fps
        self.avg_fps = avg_fps
        self.timebase = timebase
        self.start_time = start_time
        self.duration = duration
        self.num_frames = num_frames
        self.lang = lang
        self.rotate = rotate

    def validate(self):
        self.validate_required(self.index, 'index')
        self.validate_required(self.codec_name, 'codec_name')
        self.validate_required(self.codec_long_name, 'codec_long_name')
        self.validate_required(self.profile, 'profile')
        self.validate_required(self.codec_time_base, 'codec_time_base')
        self.validate_required(self.codec_tag_string, 'codec_tag_string')
        self.validate_required(self.codec_tag, 'codec_tag')
        self.validate_required(self.width, 'width')
        self.validate_required(self.height, 'height')
        self.validate_required(self.has_bframes, 'has_bframes')
        self.validate_required(self.sar, 'sar')
        self.validate_required(self.dar, 'dar')
        self.validate_required(self.pix_fmt, 'pix_fmt')
        self.validate_required(self.level, 'level')
        self.validate_required(self.fps, 'fps')
        self.validate_required(self.avg_fps, 'avg_fps')
        self.validate_required(self.timebase, 'timebase')
        self.validate_required(self.start_time, 'start_time')
        self.validate_required(self.duration, 'duration')
        self.validate_required(self.num_frames, 'num_frames')
        self.validate_required(self.lang, 'lang')
        self.validate_required(self.rotate, 'rotate')

    def to_map(self):
        result = {}
        result['Index'] = self.index
        result['CodecName'] = self.codec_name
        result['CodecLongName'] = self.codec_long_name
        result['Profile'] = self.profile
        result['CodecTimeBase'] = self.codec_time_base
        result['CodecTagString'] = self.codec_tag_string
        result['CodecTag'] = self.codec_tag
        result['Width'] = self.width
        result['Height'] = self.height
        result['HasBFrames'] = self.has_bframes
        result['Sar'] = self.sar
        result['Dar'] = self.dar
        result['PixFmt'] = self.pix_fmt
        result['Level'] = self.level
        result['Fps'] = self.fps
        result['AvgFPS'] = self.avg_fps
        result['Timebase'] = self.timebase
        result['StartTime'] = self.start_time
        result['Duration'] = self.duration
        result['NumFrames'] = self.num_frames
        result['Lang'] = self.lang
        result['Rotate'] = self.rotate
        return result

    def from_map(self, map={}):
        self.index = map.get('Index')
        self.codec_name = map.get('CodecName')
        self.codec_long_name = map.get('CodecLongName')
        self.profile = map.get('Profile')
        self.codec_time_base = map.get('CodecTimeBase')
        self.codec_tag_string = map.get('CodecTagString')
        self.codec_tag = map.get('CodecTag')
        self.width = map.get('Width')
        self.height = map.get('Height')
        self.has_bframes = map.get('HasBFrames')
        self.sar = map.get('Sar')
        self.dar = map.get('Dar')
        self.pix_fmt = map.get('PixFmt')
        self.level = map.get('Level')
        self.fps = map.get('Fps')
        self.avg_fps = map.get('AvgFPS')
        self.timebase = map.get('Timebase')
        self.start_time = map.get('StartTime')
        self.duration = map.get('Duration')
        self.num_frames = map.get('NumFrames')
        self.lang = map.get('Lang')
        self.rotate = map.get('Rotate')
        return self


class GetMezzanineInfoResponseMezzanine(TeaModel):
    def __init__(self, video_id=None, bitrate=None, creation_time=None, duration=None, fps=None, height=None, width=None, size=None, status=None, file_url=None, file_name=None, _crc64=None, preprocess_status=None, output_type=None, audio_stream_list=None, video_stream_list=None):
        self.video_id = video_id
        self.bitrate = bitrate
        self.creation_time = creation_time
        self.duration = duration
        self.fps = fps
        self.height = height
        self.width = width
        self.size = size
        self.status = status
        self.file_url = file_url
        self.file_name = file_name
        self._crc64 = _crc64
        self.preprocess_status = preprocess_status
        self.output_type = output_type
        self.audio_stream_list = []
        self.video_stream_list = []

    def validate(self):
        self.validate_required(self.video_id, 'video_id')
        self.validate_required(self.bitrate, 'bitrate')
        self.validate_required(self.creation_time, 'creation_time')
        self.validate_required(self.duration, 'duration')
        self.validate_required(self.fps, 'fps')
        self.validate_required(self.height, 'height')
        self.validate_required(self.width, 'width')
        self.validate_required(self.size, 'size')
        self.validate_required(self.status, 'status')
        self.validate_required(self.file_url, 'file_url')
        self.validate_required(self.file_name, 'file_name')
        self.validate_required(self._crc64, '_crc64')
        self.validate_required(self.preprocess_status, 'preprocess_status')
        self.validate_required(self.output_type, 'output_type')
        self.validate_required(self.audio_stream_list, 'audio_stream_list')
        if self.audio_stream_list:
            for k in self.audio_stream_list:
                if k :
                    k.validate()
        self.validate_required(self.video_stream_list, 'video_stream_list')
        if self.video_stream_list:
            for k in self.video_stream_list:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['VideoId'] = self.video_id
        result['Bitrate'] = self.bitrate
        result['CreationTime'] = self.creation_time
        result['Duration'] = self.duration
        result['Fps'] = self.fps
        result['Height'] = self.height
        result['Width'] = self.width
        result['Size'] = self.size
        result['Status'] = self.status
        result['FileURL'] = self.file_url
        result['FileName'] = self.file_name
        result['CRC64'] = self._crc64
        result['PreprocessStatus'] = self.preprocess_status
        result['OutputType'] = self.output_type
        result['AudioStreamList'] = []
        if self.audio_stream_list is not None:
            for k in self.audio_stream_list:
                result['AudioStreamList'].append(k.to_map() if k else None)
        else:
            result['AudioStreamList'] = None
        result['VideoStreamList'] = []
        if self.video_stream_list is not None:
            for k in self.video_stream_list:
                result['VideoStreamList'].append(k.to_map() if k else None)
        else:
            result['VideoStreamList'] = None
        return result

    def from_map(self, map={}):
        self.video_id = map.get('VideoId')
        self.bitrate = map.get('Bitrate')
        self.creation_time = map.get('CreationTime')
        self.duration = map.get('Duration')
        self.fps = map.get('Fps')
        self.height = map.get('Height')
        self.width = map.get('Width')
        self.size = map.get('Size')
        self.status = map.get('Status')
        self.file_url = map.get('FileURL')
        self.file_name = map.get('FileName')
        self._crc64 = map.get('CRC64')
        self.preprocess_status = map.get('PreprocessStatus')
        self.output_type = map.get('OutputType')
        self.audio_stream_list = []
        if map.get('AudioStreamList') is not None:
            for k in map.get('AudioStreamList'):
                temp_model = GetMezzanineInfoResponseMezzanineAudioStreamList()
                temp_model = temp_model.from_map(k)
                self.audio_stream_list.append(temp_model)
        else:
            self.audio_stream_list = None
        self.video_stream_list = []
        if map.get('VideoStreamList') is not None:
            for k in map.get('VideoStreamList'):
                temp_model = GetMezzanineInfoResponseMezzanineVideoStreamList()
                temp_model = temp_model.from_map(k)
                self.video_stream_list.append(temp_model)
        else:
            self.video_stream_list = None
        return self


class UpdateCategoryRequest(TeaModel):
    def __init__(self, owner_id=None, resource_owner_id=None, resource_owner_account=None, cate_name=None, cate_id=None):
        self.owner_id = owner_id
        self.resource_owner_id = resource_owner_id
        self.resource_owner_account = resource_owner_account
        self.cate_name = cate_name
        self.cate_id = cate_id

    def validate(self):
        self.validate_required(self.cate_name, 'cate_name')
        self.validate_required(self.cate_id, 'cate_id')

    def to_map(self):
        result = {}
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerId'] = self.resource_owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['CateName'] = self.cate_name
        result['CateId'] = self.cate_id
        return result

    def from_map(self, map={}):
        self.owner_id = map.get('OwnerId')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.cate_name = map.get('CateName')
        self.cate_id = map.get('CateId')
        return self


class UpdateCategoryResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class GetCategoriesRequest(TeaModel):
    def __init__(self, owner_id=None, resource_owner_id=None, resource_owner_account=None, cate_id=None, page_no=None, page_size=None, sort_by=None, type=None):
        self.owner_id = owner_id
        self.resource_owner_id = resource_owner_id
        self.resource_owner_account = resource_owner_account
        self.cate_id = cate_id
        self.page_no = page_no
        self.page_size = page_size
        self.sort_by = sort_by
        self.type = type

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerId'] = self.resource_owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['CateId'] = self.cate_id
        result['PageNo'] = self.page_no
        result['PageSize'] = self.page_size
        result['SortBy'] = self.sort_by
        result['Type'] = self.type
        return result

    def from_map(self, map={}):
        self.owner_id = map.get('OwnerId')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.cate_id = map.get('CateId')
        self.page_no = map.get('PageNo')
        self.page_size = map.get('PageSize')
        self.sort_by = map.get('SortBy')
        self.type = map.get('Type')
        return self


class GetCategoriesResponse(TeaModel):
    def __init__(self, request_id=None, sub_total=None, sub_categories=None, category=None):
        self.request_id = request_id
        self.sub_total = sub_total
        self.sub_categories = sub_categories
        self.category = category

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.sub_total, 'sub_total')
        self.validate_required(self.sub_categories, 'sub_categories')
        if self.sub_categories:
            self.sub_categories.validate()
        self.validate_required(self.category, 'category')
        if self.category:
            self.category.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['SubTotal'] = self.sub_total
        if self.sub_categories is not None:
            result['SubCategories'] = self.sub_categories.to_map()
        else:
            result['SubCategories'] = None
        if self.category is not None:
            result['Category'] = self.category.to_map()
        else:
            result['Category'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.sub_total = map.get('SubTotal')
        if map.get('SubCategories') is not None:
            temp_model = GetCategoriesResponseSubCategories()
            self.sub_categories = temp_model.from_map(map['SubCategories'])
        else:
            self.sub_categories = None
        if map.get('Category') is not None:
            temp_model = GetCategoriesResponseCategory()
            self.category = temp_model.from_map(map['Category'])
        else:
            self.category = None
        return self


class GetCategoriesResponseSubCategoriesCategory(TeaModel):
    def __init__(self, cate_id=None, cate_name=None, level=None, parent_id=None, sub_total=None, type=None):
        self.cate_id = cate_id
        self.cate_name = cate_name
        self.level = level
        self.parent_id = parent_id
        self.sub_total = sub_total
        self.type = type

    def validate(self):
        self.validate_required(self.cate_id, 'cate_id')
        self.validate_required(self.cate_name, 'cate_name')
        self.validate_required(self.level, 'level')
        self.validate_required(self.parent_id, 'parent_id')
        self.validate_required(self.sub_total, 'sub_total')
        self.validate_required(self.type, 'type')

    def to_map(self):
        result = {}
        result['CateId'] = self.cate_id
        result['CateName'] = self.cate_name
        result['Level'] = self.level
        result['ParentId'] = self.parent_id
        result['SubTotal'] = self.sub_total
        result['Type'] = self.type
        return result

    def from_map(self, map={}):
        self.cate_id = map.get('CateId')
        self.cate_name = map.get('CateName')
        self.level = map.get('Level')
        self.parent_id = map.get('ParentId')
        self.sub_total = map.get('SubTotal')
        self.type = map.get('Type')
        return self


class GetCategoriesResponseSubCategories(TeaModel):
    def __init__(self, category=None):
        self.category = []

    def validate(self):
        self.validate_required(self.category, 'category')
        if self.category:
            for k in self.category:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Category'] = []
        if self.category is not None:
            for k in self.category:
                result['Category'].append(k.to_map() if k else None)
        else:
            result['Category'] = None
        return result

    def from_map(self, map={}):
        self.category = []
        if map.get('Category') is not None:
            for k in map.get('Category'):
                temp_model = GetCategoriesResponseSubCategoriesCategory()
                temp_model = temp_model.from_map(k)
                self.category.append(temp_model)
        else:
            self.category = None
        return self


class GetCategoriesResponseCategory(TeaModel):
    def __init__(self, cate_id=None, cate_name=None, level=None, parent_id=None, type=None):
        self.cate_id = cate_id
        self.cate_name = cate_name
        self.level = level
        self.parent_id = parent_id
        self.type = type

    def validate(self):
        self.validate_required(self.cate_id, 'cate_id')
        self.validate_required(self.cate_name, 'cate_name')
        self.validate_required(self.level, 'level')
        self.validate_required(self.parent_id, 'parent_id')
        self.validate_required(self.type, 'type')

    def to_map(self):
        result = {}
        result['CateId'] = self.cate_id
        result['CateName'] = self.cate_name
        result['Level'] = self.level
        result['ParentId'] = self.parent_id
        result['Type'] = self.type
        return result

    def from_map(self, map={}):
        self.cate_id = map.get('CateId')
        self.cate_name = map.get('CateName')
        self.level = map.get('Level')
        self.parent_id = map.get('ParentId')
        self.type = map.get('Type')
        return self


class DeleteCategoryRequest(TeaModel):
    def __init__(self, owner_id=None, resource_owner_id=None, resource_owner_account=None, cate_id=None):
        self.owner_id = owner_id
        self.resource_owner_id = resource_owner_id
        self.resource_owner_account = resource_owner_account
        self.cate_id = cate_id

    def validate(self):
        self.validate_required(self.cate_id, 'cate_id')

    def to_map(self):
        result = {}
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerId'] = self.resource_owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['CateId'] = self.cate_id
        return result

    def from_map(self, map={}):
        self.owner_id = map.get('OwnerId')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.cate_id = map.get('CateId')
        return self


class DeleteCategoryResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class AddCategoryRequest(TeaModel):
    def __init__(self, owner_id=None, resource_owner_id=None, resource_owner_account=None, cate_name=None, parent_id=None, type=None):
        self.owner_id = owner_id
        self.resource_owner_id = resource_owner_id
        self.resource_owner_account = resource_owner_account
        self.cate_name = cate_name
        self.parent_id = parent_id
        self.type = type

    def validate(self):
        self.validate_required(self.cate_name, 'cate_name')

    def to_map(self):
        result = {}
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerId'] = self.resource_owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['CateName'] = self.cate_name
        result['ParentId'] = self.parent_id
        result['Type'] = self.type
        return result

    def from_map(self, map={}):
        self.owner_id = map.get('OwnerId')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.cate_name = map.get('CateName')
        self.parent_id = map.get('ParentId')
        self.type = map.get('Type')
        return self


class AddCategoryResponse(TeaModel):
    def __init__(self, request_id=None, category=None):
        self.request_id = request_id
        self.category = category

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.category, 'category')
        if self.category:
            self.category.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.category is not None:
            result['Category'] = self.category.to_map()
        else:
            result['Category'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('Category') is not None:
            temp_model = AddCategoryResponseCategory()
            self.category = temp_model.from_map(map['Category'])
        else:
            self.category = None
        return self


class AddCategoryResponseCategory(TeaModel):
    def __init__(self, cate_id=None, cate_name=None, parent_id=None, level=None, type=None):
        self.cate_id = cate_id
        self.cate_name = cate_name
        self.parent_id = parent_id
        self.level = level
        self.type = type

    def validate(self):
        self.validate_required(self.cate_id, 'cate_id')
        self.validate_required(self.cate_name, 'cate_name')
        self.validate_required(self.parent_id, 'parent_id')
        self.validate_required(self.level, 'level')
        self.validate_required(self.type, 'type')

    def to_map(self):
        result = {}
        result['CateId'] = self.cate_id
        result['CateName'] = self.cate_name
        result['ParentId'] = self.parent_id
        result['Level'] = self.level
        result['Type'] = self.type
        return result

    def from_map(self, map={}):
        self.cate_id = map.get('CateId')
        self.cate_name = map.get('CateName')
        self.parent_id = map.get('ParentId')
        self.level = map.get('Level')
        self.type = map.get('Type')
        return self


class GetPlayInfoRequest(TeaModel):
    def __init__(self, owner_id=None, resource_owner_account=None, resource_owner_id=None, video_id=None, formats=None, auth_timeout=None, output_type=None, stream_type=None, re_auth_info=None, definition=None, result_type=None, play_config=None):
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.video_id = video_id
        self.formats = formats
        self.auth_timeout = auth_timeout
        self.output_type = output_type
        self.stream_type = stream_type
        self.re_auth_info = re_auth_info
        self.definition = definition
        self.result_type = result_type
        self.play_config = play_config

    def validate(self):
        self.validate_required(self.video_id, 'video_id')

    def to_map(self):
        result = {}
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['VideoId'] = self.video_id
        result['Formats'] = self.formats
        result['AuthTimeout'] = self.auth_timeout
        result['OutputType'] = self.output_type
        result['StreamType'] = self.stream_type
        result['ReAuthInfo'] = self.re_auth_info
        result['Definition'] = self.definition
        result['ResultType'] = self.result_type
        result['PlayConfig'] = self.play_config
        return result

    def from_map(self, map={}):
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.video_id = map.get('VideoId')
        self.formats = map.get('Formats')
        self.auth_timeout = map.get('AuthTimeout')
        self.output_type = map.get('OutputType')
        self.stream_type = map.get('StreamType')
        self.re_auth_info = map.get('ReAuthInfo')
        self.definition = map.get('Definition')
        self.result_type = map.get('ResultType')
        self.play_config = map.get('PlayConfig')
        return self


class GetPlayInfoResponse(TeaModel):
    def __init__(self, request_id=None, play_info_list=None, video_base=None):
        self.request_id = request_id
        self.play_info_list = play_info_list
        self.video_base = video_base

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.play_info_list, 'play_info_list')
        if self.play_info_list:
            self.play_info_list.validate()
        self.validate_required(self.video_base, 'video_base')
        if self.video_base:
            self.video_base.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.play_info_list is not None:
            result['PlayInfoList'] = self.play_info_list.to_map()
        else:
            result['PlayInfoList'] = None
        if self.video_base is not None:
            result['VideoBase'] = self.video_base.to_map()
        else:
            result['VideoBase'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('PlayInfoList') is not None:
            temp_model = GetPlayInfoResponsePlayInfoList()
            self.play_info_list = temp_model.from_map(map['PlayInfoList'])
        else:
            self.play_info_list = None
        if map.get('VideoBase') is not None:
            temp_model = GetPlayInfoResponseVideoBase()
            self.video_base = temp_model.from_map(map['VideoBase'])
        else:
            self.video_base = None
        return self


class GetPlayInfoResponsePlayInfoListPlayInfo(TeaModel):
    def __init__(self, width=None, height=None, size=None, play_url=None, bitrate=None, definition=None, duration=None, format=None, fps=None, encrypt=None, plaintext=None, complexity=None, stream_type=None, rand=None, job_id=None, preprocess_status=None, watermark_id=None, status=None, creation_time=None, modification_time=None, encrypt_type=None, narrow_band_type=None, specification=None):
        self.width = width
        self.height = height
        self.size = size
        self.play_url = play_url
        self.bitrate = bitrate
        self.definition = definition
        self.duration = duration
        self.format = format
        self.fps = fps
        self.encrypt = encrypt
        self.plaintext = plaintext
        self.complexity = complexity
        self.stream_type = stream_type
        self.rand = rand
        self.job_id = job_id
        self.preprocess_status = preprocess_status
        self.watermark_id = watermark_id
        self.status = status
        self.creation_time = creation_time
        self.modification_time = modification_time
        self.encrypt_type = encrypt_type
        self.narrow_band_type = narrow_band_type
        self.specification = specification

    def validate(self):
        self.validate_required(self.width, 'width')
        self.validate_required(self.height, 'height')
        self.validate_required(self.size, 'size')
        self.validate_required(self.play_url, 'play_url')
        self.validate_required(self.bitrate, 'bitrate')
        self.validate_required(self.definition, 'definition')
        self.validate_required(self.duration, 'duration')
        self.validate_required(self.format, 'format')
        self.validate_required(self.fps, 'fps')
        self.validate_required(self.encrypt, 'encrypt')
        self.validate_required(self.plaintext, 'plaintext')
        self.validate_required(self.complexity, 'complexity')
        self.validate_required(self.stream_type, 'stream_type')
        self.validate_required(self.rand, 'rand')
        self.validate_required(self.job_id, 'job_id')
        self.validate_required(self.preprocess_status, 'preprocess_status')
        self.validate_required(self.watermark_id, 'watermark_id')
        self.validate_required(self.status, 'status')
        self.validate_required(self.creation_time, 'creation_time')
        self.validate_required(self.modification_time, 'modification_time')
        self.validate_required(self.encrypt_type, 'encrypt_type')
        self.validate_required(self.narrow_band_type, 'narrow_band_type')
        self.validate_required(self.specification, 'specification')

    def to_map(self):
        result = {}
        result['Width'] = self.width
        result['Height'] = self.height
        result['Size'] = self.size
        result['PlayURL'] = self.play_url
        result['Bitrate'] = self.bitrate
        result['Definition'] = self.definition
        result['Duration'] = self.duration
        result['Format'] = self.format
        result['Fps'] = self.fps
        result['Encrypt'] = self.encrypt
        result['Plaintext'] = self.plaintext
        result['Complexity'] = self.complexity
        result['StreamType'] = self.stream_type
        result['Rand'] = self.rand
        result['JobId'] = self.job_id
        result['PreprocessStatus'] = self.preprocess_status
        result['WatermarkId'] = self.watermark_id
        result['Status'] = self.status
        result['CreationTime'] = self.creation_time
        result['ModificationTime'] = self.modification_time
        result['EncryptType'] = self.encrypt_type
        result['NarrowBandType'] = self.narrow_band_type
        result['Specification'] = self.specification
        return result

    def from_map(self, map={}):
        self.width = map.get('Width')
        self.height = map.get('Height')
        self.size = map.get('Size')
        self.play_url = map.get('PlayURL')
        self.bitrate = map.get('Bitrate')
        self.definition = map.get('Definition')
        self.duration = map.get('Duration')
        self.format = map.get('Format')
        self.fps = map.get('Fps')
        self.encrypt = map.get('Encrypt')
        self.plaintext = map.get('Plaintext')
        self.complexity = map.get('Complexity')
        self.stream_type = map.get('StreamType')
        self.rand = map.get('Rand')
        self.job_id = map.get('JobId')
        self.preprocess_status = map.get('PreprocessStatus')
        self.watermark_id = map.get('WatermarkId')
        self.status = map.get('Status')
        self.creation_time = map.get('CreationTime')
        self.modification_time = map.get('ModificationTime')
        self.encrypt_type = map.get('EncryptType')
        self.narrow_band_type = map.get('NarrowBandType')
        self.specification = map.get('Specification')
        return self


class GetPlayInfoResponsePlayInfoList(TeaModel):
    def __init__(self, play_info=None):
        self.play_info = []

    def validate(self):
        self.validate_required(self.play_info, 'play_info')
        if self.play_info:
            for k in self.play_info:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['PlayInfo'] = []
        if self.play_info is not None:
            for k in self.play_info:
                result['PlayInfo'].append(k.to_map() if k else None)
        else:
            result['PlayInfo'] = None
        return result

    def from_map(self, map={}):
        self.play_info = []
        if map.get('PlayInfo') is not None:
            for k in map.get('PlayInfo'):
                temp_model = GetPlayInfoResponsePlayInfoListPlayInfo()
                temp_model = temp_model.from_map(k)
                self.play_info.append(temp_model)
        else:
            self.play_info = None
        return self


class GetPlayInfoResponseVideoBaseThumbnailListThumbnail(TeaModel):
    def __init__(self, _url=None):
        self._url = _url

    def validate(self):
        self.validate_required(self._url, '_url')

    def to_map(self):
        result = {}
        result['URL'] = self._url
        return result

    def from_map(self, map={}):
        self._url = map.get('URL')
        return self


class GetPlayInfoResponseVideoBaseThumbnailList(TeaModel):
    def __init__(self, thumbnail=None):
        self.thumbnail = []

    def validate(self):
        self.validate_required(self.thumbnail, 'thumbnail')
        if self.thumbnail:
            for k in self.thumbnail:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Thumbnail'] = []
        if self.thumbnail is not None:
            for k in self.thumbnail:
                result['Thumbnail'].append(k.to_map() if k else None)
        else:
            result['Thumbnail'] = None
        return result

    def from_map(self, map={}):
        self.thumbnail = []
        if map.get('Thumbnail') is not None:
            for k in map.get('Thumbnail'):
                temp_model = GetPlayInfoResponseVideoBaseThumbnailListThumbnail()
                temp_model = temp_model.from_map(k)
                self.thumbnail.append(temp_model)
        else:
            self.thumbnail = None
        return self


class GetPlayInfoResponseVideoBase(TeaModel):
    def __init__(self, output_type=None, cover_url=None, duration=None, status=None, title=None, video_id=None, media_type=None, creation_time=None, transcode_mode=None, thumbnail_list=None):
        self.output_type = output_type
        self.cover_url = cover_url
        self.duration = duration
        self.status = status
        self.title = title
        self.video_id = video_id
        self.media_type = media_type
        self.creation_time = creation_time
        self.transcode_mode = transcode_mode
        self.thumbnail_list = thumbnail_list

    def validate(self):
        self.validate_required(self.output_type, 'output_type')
        self.validate_required(self.cover_url, 'cover_url')
        self.validate_required(self.duration, 'duration')
        self.validate_required(self.status, 'status')
        self.validate_required(self.title, 'title')
        self.validate_required(self.video_id, 'video_id')
        self.validate_required(self.media_type, 'media_type')
        self.validate_required(self.creation_time, 'creation_time')
        self.validate_required(self.transcode_mode, 'transcode_mode')
        self.validate_required(self.thumbnail_list, 'thumbnail_list')
        if self.thumbnail_list:
            self.thumbnail_list.validate()

    def to_map(self):
        result = {}
        result['OutputType'] = self.output_type
        result['CoverURL'] = self.cover_url
        result['Duration'] = self.duration
        result['Status'] = self.status
        result['Title'] = self.title
        result['VideoId'] = self.video_id
        result['MediaType'] = self.media_type
        result['CreationTime'] = self.creation_time
        result['TranscodeMode'] = self.transcode_mode
        if self.thumbnail_list is not None:
            result['ThumbnailList'] = self.thumbnail_list.to_map()
        else:
            result['ThumbnailList'] = None
        return result

    def from_map(self, map={}):
        self.output_type = map.get('OutputType')
        self.cover_url = map.get('CoverURL')
        self.duration = map.get('Duration')
        self.status = map.get('Status')
        self.title = map.get('Title')
        self.video_id = map.get('VideoId')
        self.media_type = map.get('MediaType')
        self.creation_time = map.get('CreationTime')
        self.transcode_mode = map.get('TranscodeMode')
        if map.get('ThumbnailList') is not None:
            temp_model = GetPlayInfoResponseVideoBaseThumbnailList()
            self.thumbnail_list = temp_model.from_map(map['ThumbnailList'])
        else:
            self.thumbnail_list = None
        return self


class CreateUploadImageRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, title=None, image_type=None, image_ext=None, original_file_name=None, tags=None, storage_location=None, cate_id=None, user_data=None, description=None, app_id=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.title = title
        self.image_type = image_type
        self.image_ext = image_ext
        self.original_file_name = original_file_name
        self.tags = tags
        self.storage_location = storage_location
        self.cate_id = cate_id
        self.user_data = user_data
        self.description = description
        self.app_id = app_id

    def validate(self):
        self.validate_required(self.image_type, 'image_type')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['Title'] = self.title
        result['ImageType'] = self.image_type
        result['ImageExt'] = self.image_ext
        result['OriginalFileName'] = self.original_file_name
        result['Tags'] = self.tags
        result['StorageLocation'] = self.storage_location
        result['CateId'] = self.cate_id
        result['UserData'] = self.user_data
        result['Description'] = self.description
        result['AppId'] = self.app_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.title = map.get('Title')
        self.image_type = map.get('ImageType')
        self.image_ext = map.get('ImageExt')
        self.original_file_name = map.get('OriginalFileName')
        self.tags = map.get('Tags')
        self.storage_location = map.get('StorageLocation')
        self.cate_id = map.get('CateId')
        self.user_data = map.get('UserData')
        self.description = map.get('Description')
        self.app_id = map.get('AppId')
        return self


class CreateUploadImageResponse(TeaModel):
    def __init__(self, request_id=None, image_id=None, image_url=None, upload_address=None, upload_auth=None, file_url=None):
        self.request_id = request_id
        self.image_id = image_id
        self.image_url = image_url
        self.upload_address = upload_address
        self.upload_auth = upload_auth
        self.file_url = file_url

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.image_id, 'image_id')
        self.validate_required(self.image_url, 'image_url')
        self.validate_required(self.upload_address, 'upload_address')
        self.validate_required(self.upload_auth, 'upload_auth')
        self.validate_required(self.file_url, 'file_url')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['ImageId'] = self.image_id
        result['ImageURL'] = self.image_url
        result['UploadAddress'] = self.upload_address
        result['UploadAuth'] = self.upload_auth
        result['FileURL'] = self.file_url
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.image_id = map.get('ImageId')
        self.image_url = map.get('ImageURL')
        self.upload_address = map.get('UploadAddress')
        self.upload_auth = map.get('UploadAuth')
        self.file_url = map.get('FileURL')
        return self


class SetMessageCallbackRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_id=None, resource_owner_account=None, owner_account=None, callback_type=None, callback_url=None, event_type_list=None, auth_switch=None, auth_key=None, resource_real_owner_id=None, mns_endpoint=None, mns_queue_name=None, app_id=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_id = resource_owner_id
        self.resource_owner_account = resource_owner_account
        self.owner_account = owner_account
        self.callback_type = callback_type
        self.callback_url = callback_url
        self.event_type_list = event_type_list
        self.auth_switch = auth_switch
        self.auth_key = auth_key
        self.resource_real_owner_id = resource_real_owner_id
        self.mns_endpoint = mns_endpoint
        self.mns_queue_name = mns_queue_name
        self.app_id = app_id

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerId'] = self.resource_owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['OwnerAccount'] = self.owner_account
        result['CallbackType'] = self.callback_type
        result['CallbackURL'] = self.callback_url
        result['EventTypeList'] = self.event_type_list
        result['AuthSwitch'] = self.auth_switch
        result['AuthKey'] = self.auth_key
        result['ResourceRealOwnerId'] = self.resource_real_owner_id
        result['MnsEndpoint'] = self.mns_endpoint
        result['MnsQueueName'] = self.mns_queue_name
        result['AppId'] = self.app_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.owner_account = map.get('OwnerAccount')
        self.callback_type = map.get('CallbackType')
        self.callback_url = map.get('CallbackURL')
        self.event_type_list = map.get('EventTypeList')
        self.auth_switch = map.get('AuthSwitch')
        self.auth_key = map.get('AuthKey')
        self.resource_real_owner_id = map.get('ResourceRealOwnerId')
        self.mns_endpoint = map.get('MnsEndpoint')
        self.mns_queue_name = map.get('MnsQueueName')
        self.app_id = map.get('AppId')
        return self


class SetMessageCallbackResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class GetMessageCallbackRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_id=None, resource_owner_account=None, owner_account=None, resource_real_owner_id=None, app_id=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_id = resource_owner_id
        self.resource_owner_account = resource_owner_account
        self.owner_account = owner_account
        self.resource_real_owner_id = resource_real_owner_id
        self.app_id = app_id

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerId'] = self.resource_owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['OwnerAccount'] = self.owner_account
        result['ResourceRealOwnerId'] = self.resource_real_owner_id
        result['AppId'] = self.app_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.owner_account = map.get('OwnerAccount')
        self.resource_real_owner_id = map.get('ResourceRealOwnerId')
        self.app_id = map.get('AppId')
        return self


class GetMessageCallbackResponse(TeaModel):
    def __init__(self, request_id=None, message_callback=None):
        self.request_id = request_id
        self.message_callback = message_callback

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.message_callback, 'message_callback')
        if self.message_callback:
            self.message_callback.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.message_callback is not None:
            result['MessageCallback'] = self.message_callback.to_map()
        else:
            result['MessageCallback'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('MessageCallback') is not None:
            temp_model = GetMessageCallbackResponseMessageCallback()
            self.message_callback = temp_model.from_map(map['MessageCallback'])
        else:
            self.message_callback = None
        return self


class GetMessageCallbackResponseMessageCallback(TeaModel):
    def __init__(self, callback_type=None, callback_url=None, event_type_list=None, auth_switch=None, auth_key=None, mns_endpoint=None, mns_queue_name=None, app_id=None):
        self.callback_type = callback_type
        self.callback_url = callback_url
        self.event_type_list = event_type_list
        self.auth_switch = auth_switch
        self.auth_key = auth_key
        self.mns_endpoint = mns_endpoint
        self.mns_queue_name = mns_queue_name
        self.app_id = app_id

    def validate(self):
        self.validate_required(self.callback_type, 'callback_type')
        self.validate_required(self.callback_url, 'callback_url')
        self.validate_required(self.event_type_list, 'event_type_list')
        self.validate_required(self.auth_switch, 'auth_switch')
        self.validate_required(self.auth_key, 'auth_key')
        self.validate_required(self.mns_endpoint, 'mns_endpoint')
        self.validate_required(self.mns_queue_name, 'mns_queue_name')
        self.validate_required(self.app_id, 'app_id')

    def to_map(self):
        result = {}
        result['CallbackType'] = self.callback_type
        result['CallbackURL'] = self.callback_url
        result['EventTypeList'] = self.event_type_list
        result['AuthSwitch'] = self.auth_switch
        result['AuthKey'] = self.auth_key
        result['MnsEndpoint'] = self.mns_endpoint
        result['MnsQueueName'] = self.mns_queue_name
        result['AppId'] = self.app_id
        return result

    def from_map(self, map={}):
        self.callback_type = map.get('CallbackType')
        self.callback_url = map.get('CallbackURL')
        self.event_type_list = map.get('EventTypeList')
        self.auth_switch = map.get('AuthSwitch')
        self.auth_key = map.get('AuthKey')
        self.mns_endpoint = map.get('MnsEndpoint')
        self.mns_queue_name = map.get('MnsQueueName')
        self.app_id = map.get('AppId')
        return self


class UpdateVideoInfoRequest(TeaModel):
    def __init__(self, owner_id=None, resource_owner_account=None, resource_owner_id=None, video_id=None, title=None, tags=None, description=None, cover_url=None, cate_id=None, custom_media_info=None):
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.video_id = video_id
        self.title = title
        self.tags = tags
        self.description = description
        self.cover_url = cover_url
        self.cate_id = cate_id
        self.custom_media_info = custom_media_info

    def validate(self):
        self.validate_required(self.video_id, 'video_id')

    def to_map(self):
        result = {}
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['VideoId'] = self.video_id
        result['Title'] = self.title
        result['Tags'] = self.tags
        result['Description'] = self.description
        result['CoverURL'] = self.cover_url
        result['CateId'] = self.cate_id
        result['CustomMediaInfo'] = self.custom_media_info
        return result

    def from_map(self, map={}):
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.video_id = map.get('VideoId')
        self.title = map.get('Title')
        self.tags = map.get('Tags')
        self.description = map.get('Description')
        self.cover_url = map.get('CoverURL')
        self.cate_id = map.get('CateId')
        self.custom_media_info = map.get('CustomMediaInfo')
        return self


class UpdateVideoInfoResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class GetVideoPlayAuthRequest(TeaModel):
    def __init__(self, owner_id=None, resource_owner_account=None, resource_owner_id=None, video_id=None, auth_info_timeout=None, play_config=None):
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.video_id = video_id
        self.auth_info_timeout = auth_info_timeout
        self.play_config = play_config

    def validate(self):
        self.validate_required(self.video_id, 'video_id')

    def to_map(self):
        result = {}
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['VideoId'] = self.video_id
        result['AuthInfoTimeout'] = self.auth_info_timeout
        result['PlayConfig'] = self.play_config
        return result

    def from_map(self, map={}):
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.video_id = map.get('VideoId')
        self.auth_info_timeout = map.get('AuthInfoTimeout')
        self.play_config = map.get('PlayConfig')
        return self


class GetVideoPlayAuthResponse(TeaModel):
    def __init__(self, request_id=None, play_auth=None, video_meta=None):
        self.request_id = request_id
        self.play_auth = play_auth
        self.video_meta = video_meta

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.play_auth, 'play_auth')
        self.validate_required(self.video_meta, 'video_meta')
        if self.video_meta:
            self.video_meta.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['PlayAuth'] = self.play_auth
        if self.video_meta is not None:
            result['VideoMeta'] = self.video_meta.to_map()
        else:
            result['VideoMeta'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.play_auth = map.get('PlayAuth')
        if map.get('VideoMeta') is not None:
            temp_model = GetVideoPlayAuthResponseVideoMeta()
            self.video_meta = temp_model.from_map(map['VideoMeta'])
        else:
            self.video_meta = None
        return self


class GetVideoPlayAuthResponseVideoMeta(TeaModel):
    def __init__(self, cover_url=None, duration=None, status=None, title=None, video_id=None):
        self.cover_url = cover_url
        self.duration = duration
        self.status = status
        self.title = title
        self.video_id = video_id

    def validate(self):
        self.validate_required(self.cover_url, 'cover_url')
        self.validate_required(self.duration, 'duration')
        self.validate_required(self.status, 'status')
        self.validate_required(self.title, 'title')
        self.validate_required(self.video_id, 'video_id')

    def to_map(self):
        result = {}
        result['CoverURL'] = self.cover_url
        result['Duration'] = self.duration
        result['Status'] = self.status
        result['Title'] = self.title
        result['VideoId'] = self.video_id
        return result

    def from_map(self, map={}):
        self.cover_url = map.get('CoverURL')
        self.duration = map.get('Duration')
        self.status = map.get('Status')
        self.title = map.get('Title')
        self.video_id = map.get('VideoId')
        return self


class GetVideoListRequest(TeaModel):
    def __init__(self, owner_id=None, resource_owner_account=None, resource_owner_id=None, cate_id=None, status=None, page_no=None, page_size=None, sort_by=None, start_time=None, end_time=None, storage_location=None):
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.cate_id = cate_id
        self.status = status
        self.page_no = page_no
        self.page_size = page_size
        self.sort_by = sort_by
        self.start_time = start_time
        self.end_time = end_time
        self.storage_location = storage_location

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['CateId'] = self.cate_id
        result['Status'] = self.status
        result['PageNo'] = self.page_no
        result['PageSize'] = self.page_size
        result['SortBy'] = self.sort_by
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        result['StorageLocation'] = self.storage_location
        return result

    def from_map(self, map={}):
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.cate_id = map.get('CateId')
        self.status = map.get('Status')
        self.page_no = map.get('PageNo')
        self.page_size = map.get('PageSize')
        self.sort_by = map.get('SortBy')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        self.storage_location = map.get('StorageLocation')
        return self


class GetVideoListResponse(TeaModel):
    def __init__(self, request_id=None, total=None, video_list=None):
        self.request_id = request_id
        self.total = total
        self.video_list = video_list

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.total, 'total')
        self.validate_required(self.video_list, 'video_list')
        if self.video_list:
            self.video_list.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Total'] = self.total
        if self.video_list is not None:
            result['VideoList'] = self.video_list.to_map()
        else:
            result['VideoList'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.total = map.get('Total')
        if map.get('VideoList') is not None:
            temp_model = GetVideoListResponseVideoList()
            self.video_list = temp_model.from_map(map['VideoList'])
        else:
            self.video_list = None
        return self


class GetVideoListResponseVideoListVideoSnapshots(TeaModel):
    def __init__(self, snapshot=None):
        self.snapshot = []

    def validate(self):
        self.validate_required(self.snapshot, 'snapshot')

    def to_map(self):
        result = {}
        result['Snapshot'] = []
        if self.snapshot is not None:
            for k in self.snapshot:
                result['Snapshot'].append(k)
        else:
            result['Snapshot'] = None
        return result

    def from_map(self, map={}):
        self.snapshot = []
        if map.get('Snapshot') is not None:
            for k in map.get('Snapshot'):
                self.snapshot.append(k)
        else:
            self.snapshot = None
        return self


class GetVideoListResponseVideoListVideo(TeaModel):
    def __init__(self, video_id=None, title=None, tags=None, status=None, size=None, duration=None, description=None, create_time=None, modify_time=None, modification_time=None, creation_time=None, cover_url=None, cate_id=None, cate_name=None, storage_location=None, app_id=None, snapshots=None):
        self.video_id = video_id
        self.title = title
        self.tags = tags
        self.status = status
        self.size = size
        self.duration = duration
        self.description = description
        self.create_time = create_time
        self.modify_time = modify_time
        self.modification_time = modification_time
        self.creation_time = creation_time
        self.cover_url = cover_url
        self.cate_id = cate_id
        self.cate_name = cate_name
        self.storage_location = storage_location
        self.app_id = app_id
        self.snapshots = snapshots

    def validate(self):
        self.validate_required(self.video_id, 'video_id')
        self.validate_required(self.title, 'title')
        self.validate_required(self.tags, 'tags')
        self.validate_required(self.status, 'status')
        self.validate_required(self.size, 'size')
        self.validate_required(self.duration, 'duration')
        self.validate_required(self.description, 'description')
        self.validate_required(self.create_time, 'create_time')
        self.validate_required(self.modify_time, 'modify_time')
        self.validate_required(self.modification_time, 'modification_time')
        self.validate_required(self.creation_time, 'creation_time')
        self.validate_required(self.cover_url, 'cover_url')
        self.validate_required(self.cate_id, 'cate_id')
        self.validate_required(self.cate_name, 'cate_name')
        self.validate_required(self.storage_location, 'storage_location')
        self.validate_required(self.app_id, 'app_id')
        self.validate_required(self.snapshots, 'snapshots')
        if self.snapshots:
            self.snapshots.validate()

    def to_map(self):
        result = {}
        result['VideoId'] = self.video_id
        result['Title'] = self.title
        result['Tags'] = self.tags
        result['Status'] = self.status
        result['Size'] = self.size
        result['Duration'] = self.duration
        result['Description'] = self.description
        result['CreateTime'] = self.create_time
        result['ModifyTime'] = self.modify_time
        result['ModificationTime'] = self.modification_time
        result['CreationTime'] = self.creation_time
        result['CoverURL'] = self.cover_url
        result['CateId'] = self.cate_id
        result['CateName'] = self.cate_name
        result['StorageLocation'] = self.storage_location
        result['AppId'] = self.app_id
        if self.snapshots is not None:
            result['Snapshots'] = self.snapshots.to_map()
        else:
            result['Snapshots'] = None
        return result

    def from_map(self, map={}):
        self.video_id = map.get('VideoId')
        self.title = map.get('Title')
        self.tags = map.get('Tags')
        self.status = map.get('Status')
        self.size = map.get('Size')
        self.duration = map.get('Duration')
        self.description = map.get('Description')
        self.create_time = map.get('CreateTime')
        self.modify_time = map.get('ModifyTime')
        self.modification_time = map.get('ModificationTime')
        self.creation_time = map.get('CreationTime')
        self.cover_url = map.get('CoverURL')
        self.cate_id = map.get('CateId')
        self.cate_name = map.get('CateName')
        self.storage_location = map.get('StorageLocation')
        self.app_id = map.get('AppId')
        if map.get('Snapshots') is not None:
            temp_model = GetVideoListResponseVideoListVideoSnapshots()
            self.snapshots = temp_model.from_map(map['Snapshots'])
        else:
            self.snapshots = None
        return self


class GetVideoListResponseVideoList(TeaModel):
    def __init__(self, video=None):
        self.video = []

    def validate(self):
        self.validate_required(self.video, 'video')
        if self.video:
            for k in self.video:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Video'] = []
        if self.video is not None:
            for k in self.video:
                result['Video'].append(k.to_map() if k else None)
        else:
            result['Video'] = None
        return result

    def from_map(self, map={}):
        self.video = []
        if map.get('Video') is not None:
            for k in map.get('Video'):
                temp_model = GetVideoListResponseVideoListVideo()
                temp_model = temp_model.from_map(k)
                self.video.append(temp_model)
        else:
            self.video = None
        return self


class GetVideoInfoRequest(TeaModel):
    def __init__(self, owner_id=None, resource_owner_account=None, resource_owner_id=None, video_id=None, addition_type=None):
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.video_id = video_id
        self.addition_type = addition_type

    def validate(self):
        self.validate_required(self.video_id, 'video_id')

    def to_map(self):
        result = {}
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['VideoId'] = self.video_id
        result['AdditionType'] = self.addition_type
        return result

    def from_map(self, map={}):
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.video_id = map.get('VideoId')
        self.addition_type = map.get('AdditionType')
        return self


class GetVideoInfoResponse(TeaModel):
    def __init__(self, request_id=None, _ai=None, video=None):
        self.request_id = request_id
        self._ai = _ai
        self.video = video

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self._ai, '_ai')
        self.validate_required(self.video, 'video')
        if self.video:
            self.video.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['AI'] = self._ai
        if self.video is not None:
            result['Video'] = self.video.to_map()
        else:
            result['Video'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self._ai = map.get('AI')
        if map.get('Video') is not None:
            temp_model = GetVideoInfoResponseVideo()
            self.video = temp_model.from_map(map['Video'])
        else:
            self.video = None
        return self


class GetVideoInfoResponseVideoThumbnailListThumbnail(TeaModel):
    def __init__(self, _url=None):
        self._url = _url

    def validate(self):
        self.validate_required(self._url, '_url')

    def to_map(self):
        result = {}
        result['URL'] = self._url
        return result

    def from_map(self, map={}):
        self._url = map.get('URL')
        return self


class GetVideoInfoResponseVideoThumbnailList(TeaModel):
    def __init__(self, thumbnail=None):
        self.thumbnail = []

    def validate(self):
        self.validate_required(self.thumbnail, 'thumbnail')
        if self.thumbnail:
            for k in self.thumbnail:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Thumbnail'] = []
        if self.thumbnail is not None:
            for k in self.thumbnail:
                result['Thumbnail'].append(k.to_map() if k else None)
        else:
            result['Thumbnail'] = None
        return result

    def from_map(self, map={}):
        self.thumbnail = []
        if map.get('Thumbnail') is not None:
            for k in map.get('Thumbnail'):
                temp_model = GetVideoInfoResponseVideoThumbnailListThumbnail()
                temp_model = temp_model.from_map(k)
                self.thumbnail.append(temp_model)
        else:
            self.thumbnail = None
        return self


class GetVideoInfoResponseVideoSnapshots(TeaModel):
    def __init__(self, snapshot=None):
        self.snapshot = []

    def validate(self):
        self.validate_required(self.snapshot, 'snapshot')

    def to_map(self):
        result = {}
        result['Snapshot'] = []
        if self.snapshot is not None:
            for k in self.snapshot:
                result['Snapshot'].append(k)
        else:
            result['Snapshot'] = None
        return result

    def from_map(self, map={}):
        self.snapshot = []
        if map.get('Snapshot') is not None:
            for k in map.get('Snapshot'):
                self.snapshot.append(k)
        else:
            self.snapshot = None
        return self


class GetVideoInfoResponseVideo(TeaModel):
    def __init__(self, video_id=None, title=None, tags=None, status=None, size=None, duration=None, description=None, create_time=None, modify_time=None, modification_time=None, creation_time=None, cover_url=None, cate_id=None, cate_name=None, download_switch=None, template_group_id=None, preprocess_status=None, storage_location=None, region_id=None, custom_media_info=None, audit_status=None, app_id=None, thumbnail_list=None, snapshots=None):
        self.video_id = video_id
        self.title = title
        self.tags = tags
        self.status = status
        self.size = size
        self.duration = duration
        self.description = description
        self.create_time = create_time
        self.modify_time = modify_time
        self.modification_time = modification_time
        self.creation_time = creation_time
        self.cover_url = cover_url
        self.cate_id = cate_id
        self.cate_name = cate_name
        self.download_switch = download_switch
        self.template_group_id = template_group_id
        self.preprocess_status = preprocess_status
        self.storage_location = storage_location
        self.region_id = region_id
        self.custom_media_info = custom_media_info
        self.audit_status = audit_status
        self.app_id = app_id
        self.thumbnail_list = thumbnail_list
        self.snapshots = snapshots

    def validate(self):
        self.validate_required(self.video_id, 'video_id')
        self.validate_required(self.title, 'title')
        self.validate_required(self.tags, 'tags')
        self.validate_required(self.status, 'status')
        self.validate_required(self.size, 'size')
        self.validate_required(self.duration, 'duration')
        self.validate_required(self.description, 'description')
        self.validate_required(self.create_time, 'create_time')
        self.validate_required(self.modify_time, 'modify_time')
        self.validate_required(self.modification_time, 'modification_time')
        self.validate_required(self.creation_time, 'creation_time')
        self.validate_required(self.cover_url, 'cover_url')
        self.validate_required(self.cate_id, 'cate_id')
        self.validate_required(self.cate_name, 'cate_name')
        self.validate_required(self.download_switch, 'download_switch')
        self.validate_required(self.template_group_id, 'template_group_id')
        self.validate_required(self.preprocess_status, 'preprocess_status')
        self.validate_required(self.storage_location, 'storage_location')
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.custom_media_info, 'custom_media_info')
        self.validate_required(self.audit_status, 'audit_status')
        self.validate_required(self.app_id, 'app_id')
        self.validate_required(self.thumbnail_list, 'thumbnail_list')
        if self.thumbnail_list:
            self.thumbnail_list.validate()
        self.validate_required(self.snapshots, 'snapshots')
        if self.snapshots:
            self.snapshots.validate()

    def to_map(self):
        result = {}
        result['VideoId'] = self.video_id
        result['Title'] = self.title
        result['Tags'] = self.tags
        result['Status'] = self.status
        result['Size'] = self.size
        result['Duration'] = self.duration
        result['Description'] = self.description
        result['CreateTime'] = self.create_time
        result['ModifyTime'] = self.modify_time
        result['ModificationTime'] = self.modification_time
        result['CreationTime'] = self.creation_time
        result['CoverURL'] = self.cover_url
        result['CateId'] = self.cate_id
        result['CateName'] = self.cate_name
        result['DownloadSwitch'] = self.download_switch
        result['TemplateGroupId'] = self.template_group_id
        result['PreprocessStatus'] = self.preprocess_status
        result['StorageLocation'] = self.storage_location
        result['RegionId'] = self.region_id
        result['CustomMediaInfo'] = self.custom_media_info
        result['AuditStatus'] = self.audit_status
        result['AppId'] = self.app_id
        if self.thumbnail_list is not None:
            result['ThumbnailList'] = self.thumbnail_list.to_map()
        else:
            result['ThumbnailList'] = None
        if self.snapshots is not None:
            result['Snapshots'] = self.snapshots.to_map()
        else:
            result['Snapshots'] = None
        return result

    def from_map(self, map={}):
        self.video_id = map.get('VideoId')
        self.title = map.get('Title')
        self.tags = map.get('Tags')
        self.status = map.get('Status')
        self.size = map.get('Size')
        self.duration = map.get('Duration')
        self.description = map.get('Description')
        self.create_time = map.get('CreateTime')
        self.modify_time = map.get('ModifyTime')
        self.modification_time = map.get('ModificationTime')
        self.creation_time = map.get('CreationTime')
        self.cover_url = map.get('CoverURL')
        self.cate_id = map.get('CateId')
        self.cate_name = map.get('CateName')
        self.download_switch = map.get('DownloadSwitch')
        self.template_group_id = map.get('TemplateGroupId')
        self.preprocess_status = map.get('PreprocessStatus')
        self.storage_location = map.get('StorageLocation')
        self.region_id = map.get('RegionId')
        self.custom_media_info = map.get('CustomMediaInfo')
        self.audit_status = map.get('AuditStatus')
        self.app_id = map.get('AppId')
        if map.get('ThumbnailList') is not None:
            temp_model = GetVideoInfoResponseVideoThumbnailList()
            self.thumbnail_list = temp_model.from_map(map['ThumbnailList'])
        else:
            self.thumbnail_list = None
        if map.get('Snapshots') is not None:
            temp_model = GetVideoInfoResponseVideoSnapshots()
            self.snapshots = temp_model.from_map(map['Snapshots'])
        else:
            self.snapshots = None
        return self


class DeleteVideoRequest(TeaModel):
    def __init__(self, owner_id=None, resource_owner_account=None, resource_owner_id=None, video_ids=None):
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.video_ids = video_ids

    def validate(self):
        self.validate_required(self.video_ids, 'video_ids')

    def to_map(self):
        result = {}
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['VideoIds'] = self.video_ids
        return result

    def from_map(self, map={}):
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.video_ids = map.get('VideoIds')
        return self


class DeleteVideoResponse(TeaModel):
    def __init__(self, request_id=None, non_exist_video_ids=None, forbidden_video_ids=None):
        self.request_id = request_id
        self.non_exist_video_ids = []
        self.forbidden_video_ids = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.non_exist_video_ids, 'non_exist_video_ids')
        self.validate_required(self.forbidden_video_ids, 'forbidden_video_ids')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['NonExistVideoIds'] = []
        if self.non_exist_video_ids is not None:
            for k in self.non_exist_video_ids:
                result['NonExistVideoIds'].append(k)
        else:
            result['NonExistVideoIds'] = None
        result['ForbiddenVideoIds'] = []
        if self.forbidden_video_ids is not None:
            for k in self.forbidden_video_ids:
                result['ForbiddenVideoIds'].append(k)
        else:
            result['ForbiddenVideoIds'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.non_exist_video_ids = []
        if map.get('NonExistVideoIds') is not None:
            for k in map.get('NonExistVideoIds'):
                self.non_exist_video_ids.append(k)
        else:
            self.non_exist_video_ids = None
        self.forbidden_video_ids = []
        if map.get('ForbiddenVideoIds') is not None:
            for k in map.get('ForbiddenVideoIds'):
                self.forbidden_video_ids.append(k)
        else:
            self.forbidden_video_ids = None
        return self


class RefreshUploadVideoRequest(TeaModel):
    def __init__(self, owner_id=None, resource_owner_account=None, resource_owner_id=None, video_id=None):
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.video_id = video_id

    def validate(self):
        self.validate_required(self.video_id, 'video_id')

    def to_map(self):
        result = {}
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['VideoId'] = self.video_id
        return result

    def from_map(self, map={}):
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.video_id = map.get('VideoId')
        return self


class RefreshUploadVideoResponse(TeaModel):
    def __init__(self, request_id=None, upload_auth=None, upload_address=None, video_id=None):
        self.request_id = request_id
        self.upload_auth = upload_auth
        self.upload_address = upload_address
        self.video_id = video_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.upload_auth, 'upload_auth')
        self.validate_required(self.upload_address, 'upload_address')
        self.validate_required(self.video_id, 'video_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['UploadAuth'] = self.upload_auth
        result['UploadAddress'] = self.upload_address
        result['VideoId'] = self.video_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.upload_auth = map.get('UploadAuth')
        self.upload_address = map.get('UploadAddress')
        self.video_id = map.get('VideoId')
        return self


class CreateUploadVideoRequest(TeaModel):
    def __init__(self, owner_id=None, resource_owner_account=None, resource_owner_id=None, cover_url=None, description=None, file_name=None, file_size=None, _ip=None, title=None, cate_id=None, tags=None, transcode_mode=None, user_data=None, template_group_id=None, workflow_id=None, storage_location=None, custom_media_info=None, app_id=None):
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.cover_url = cover_url
        self.description = description
        self.file_name = file_name
        self.file_size = file_size
        self._ip = _ip
        self.title = title
        self.cate_id = cate_id
        self.tags = tags
        self.transcode_mode = transcode_mode
        self.user_data = user_data
        self.template_group_id = template_group_id
        self.workflow_id = workflow_id
        self.storage_location = storage_location
        self.custom_media_info = custom_media_info
        self.app_id = app_id

    def validate(self):
        self.validate_required(self.file_name, 'file_name')
        self.validate_required(self.title, 'title')

    def to_map(self):
        result = {}
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['CoverURL'] = self.cover_url
        result['Description'] = self.description
        result['FileName'] = self.file_name
        result['FileSize'] = self.file_size
        result['IP'] = self._ip
        result['Title'] = self.title
        result['CateId'] = self.cate_id
        result['Tags'] = self.tags
        result['TranscodeMode'] = self.transcode_mode
        result['UserData'] = self.user_data
        result['TemplateGroupId'] = self.template_group_id
        result['WorkflowId'] = self.workflow_id
        result['StorageLocation'] = self.storage_location
        result['CustomMediaInfo'] = self.custom_media_info
        result['AppId'] = self.app_id
        return result

    def from_map(self, map={}):
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.cover_url = map.get('CoverURL')
        self.description = map.get('Description')
        self.file_name = map.get('FileName')
        self.file_size = map.get('FileSize')
        self._ip = map.get('IP')
        self.title = map.get('Title')
        self.cate_id = map.get('CateId')
        self.tags = map.get('Tags')
        self.transcode_mode = map.get('TranscodeMode')
        self.user_data = map.get('UserData')
        self.template_group_id = map.get('TemplateGroupId')
        self.workflow_id = map.get('WorkflowId')
        self.storage_location = map.get('StorageLocation')
        self.custom_media_info = map.get('CustomMediaInfo')
        self.app_id = map.get('AppId')
        return self


class CreateUploadVideoResponse(TeaModel):
    def __init__(self, request_id=None, video_id=None, upload_address=None, upload_auth=None):
        self.request_id = request_id
        self.video_id = video_id
        self.upload_address = upload_address
        self.upload_auth = upload_auth

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.video_id, 'video_id')
        self.validate_required(self.upload_address, 'upload_address')
        self.validate_required(self.upload_auth, 'upload_auth')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['VideoId'] = self.video_id
        result['UploadAddress'] = self.upload_address
        result['UploadAuth'] = self.upload_auth
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.video_id = map.get('VideoId')
        self.upload_address = map.get('UploadAddress')
        self.upload_auth = map.get('UploadAuth')
        return self
