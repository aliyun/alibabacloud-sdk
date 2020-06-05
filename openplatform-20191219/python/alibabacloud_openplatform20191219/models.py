# This file is auto-generated, don't edit it. Thanks.
from Tea.model import TeaModel


class AuthorizeFileUploadRequest(TeaModel):
    def __init__(self, product=None, region_id=None):
        self.product = product
        self.region_id = region_id

    def validate(self):
        self.validate_required(self.product, 'product')

    def to_map(self):
        result = {}
        result['Product'] = self.product
        result['RegionId'] = self.region_id
        return result

    def from_map(self, map={}):
        self.product = map.get('Product')
        self.region_id = map.get('RegionId')
        return self


class AuthorizeFileUploadResponse(TeaModel):
    def __init__(self, access_key_id=None, bucket=None, encoded_policy=None, endpoint=None, object_key=None, request_id=None, signature=None, use_accelerate=None):
        self.access_key_id = access_key_id
        self.bucket = bucket
        self.encoded_policy = encoded_policy
        self.endpoint = endpoint
        self.object_key = object_key
        self.request_id = request_id
        self.signature = signature
        self.use_accelerate = use_accelerate

    def validate(self):
        self.validate_required(self.access_key_id, 'access_key_id')
        self.validate_required(self.bucket, 'bucket')
        self.validate_required(self.encoded_policy, 'encoded_policy')
        self.validate_required(self.endpoint, 'endpoint')
        self.validate_required(self.object_key, 'object_key')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.signature, 'signature')
        self.validate_required(self.use_accelerate, 'use_accelerate')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['Bucket'] = self.bucket
        result['EncodedPolicy'] = self.encoded_policy
        result['Endpoint'] = self.endpoint
        result['ObjectKey'] = self.object_key
        result['RequestId'] = self.request_id
        result['Signature'] = self.signature
        result['UseAccelerate'] = self.use_accelerate
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.bucket = map.get('Bucket')
        self.encoded_policy = map.get('EncodedPolicy')
        self.endpoint = map.get('Endpoint')
        self.object_key = map.get('ObjectKey')
        self.request_id = map.get('RequestId')
        self.signature = map.get('Signature')
        self.use_accelerate = map.get('UseAccelerate')
        return self
