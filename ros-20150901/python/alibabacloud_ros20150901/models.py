# This file is auto-generated, don't edit it. Thanks.
from Tea.model import TeaModel


class CreateChangeSetRequest(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class CreateChangeSetResponseBody(TeaModel):
    def __init__(self, dummy=None):
        self.dummy = dummy

    def validate(self):
        self.validate_required(self.dummy, 'dummy')

    def to_map(self):
        result = {}
        result['Dummy'] = self.dummy
        return result

    def from_map(self, map={}):
        self.dummy = map.get('Dummy')
        return self


class CreateChangeSetResponse(TeaModel):
    def __init__(self, headers=None, body=None):
        self.headers = {}
        self.body = body

    def validate(self):
        self.validate_required(self.headers, 'headers')
        self.validate_required(self.body, 'body')
        if self.body:
            self.body.validate()

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        if self.body is not None:
            result['body'] = self.body.to_map()
        else:
            result['body'] = None
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        if map.get('body') is not None:
            temp_model = CreateChangeSetResponseBody()
            self.body = temp_model.from_map(map['body'])
        else:
            self.body = None
        return self


class DescribeChangeSetDetailRequest(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class DescribeChangeSetDetailResponseBody(TeaModel):
    def __init__(self, dummy=None):
        self.dummy = dummy

    def validate(self):
        self.validate_required(self.dummy, 'dummy')

    def to_map(self):
        result = {}
        result['Dummy'] = self.dummy
        return result

    def from_map(self, map={}):
        self.dummy = map.get('Dummy')
        return self


class DescribeChangeSetDetailResponse(TeaModel):
    def __init__(self, headers=None, body=None):
        self.headers = {}
        self.body = body

    def validate(self):
        self.validate_required(self.headers, 'headers')
        self.validate_required(self.body, 'body')
        if self.body:
            self.body.validate()

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        if self.body is not None:
            result['body'] = self.body.to_map()
        else:
            result['body'] = None
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        if map.get('body') is not None:
            temp_model = DescribeChangeSetDetailResponseBody()
            self.body = temp_model.from_map(map['body'])
        else:
            self.body = None
        return self


class DescribeChangeSetsRequest(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class DescribeChangeSetsResponseBody(TeaModel):
    def __init__(self, dummy=None):
        self.dummy = dummy

    def validate(self):
        self.validate_required(self.dummy, 'dummy')

    def to_map(self):
        result = {}
        result['Dummy'] = self.dummy
        return result

    def from_map(self, map={}):
        self.dummy = map.get('Dummy')
        return self


class DescribeChangeSetsResponse(TeaModel):
    def __init__(self, headers=None, body=None):
        self.headers = {}
        self.body = body

    def validate(self):
        self.validate_required(self.headers, 'headers')
        self.validate_required(self.body, 'body')
        if self.body:
            self.body.validate()

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        if self.body is not None:
            result['body'] = self.body.to_map()
        else:
            result['body'] = None
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        if map.get('body') is not None:
            temp_model = DescribeChangeSetsResponseBody()
            self.body = temp_model.from_map(map['body'])
        else:
            self.body = None
        return self


class ExecuteChangeSetRequest(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class ExecuteChangeSetResponseBody(TeaModel):
    def __init__(self, dummy=None):
        self.dummy = dummy

    def validate(self):
        self.validate_required(self.dummy, 'dummy')

    def to_map(self):
        result = {}
        result['Dummy'] = self.dummy
        return result

    def from_map(self, map={}):
        self.dummy = map.get('Dummy')
        return self


class ExecuteChangeSetResponse(TeaModel):
    def __init__(self, headers=None, body=None):
        self.headers = {}
        self.body = body

    def validate(self):
        self.validate_required(self.headers, 'headers')
        self.validate_required(self.body, 'body')
        if self.body:
            self.body.validate()

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        if self.body is not None:
            result['body'] = self.body.to_map()
        else:
            result['body'] = None
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        if map.get('body') is not None:
            temp_model = ExecuteChangeSetResponseBody()
            self.body = temp_model.from_map(map['body'])
        else:
            self.body = None
        return self


class DeleteChangeSetRequest(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class DeleteChangeSetResponseBody(TeaModel):
    def __init__(self, dummy=None):
        self.dummy = dummy

    def validate(self):
        self.validate_required(self.dummy, 'dummy')

    def to_map(self):
        result = {}
        result['Dummy'] = self.dummy
        return result

    def from_map(self, map={}):
        self.dummy = map.get('Dummy')
        return self


class DeleteChangeSetResponse(TeaModel):
    def __init__(self, headers=None, body=None):
        self.headers = {}
        self.body = body

    def validate(self):
        self.validate_required(self.headers, 'headers')
        self.validate_required(self.body, 'body')
        if self.body:
            self.body.validate()

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        if self.body is not None:
            result['body'] = self.body.to_map()
        else:
            result['body'] = None
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        if map.get('body') is not None:
            temp_model = DeleteChangeSetResponseBody()
            self.body = temp_model.from_map(map['body'])
        else:
            self.body = None
        return self


class ContinueCreateStackRequest(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class ContinueCreateStackResponse(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        self.validate_required(self.headers, 'headers')

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class CancelUpdateStackRequest(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class CancelUpdateStackResponse(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        self.validate_required(self.headers, 'headers')

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class GetStackPolicyRequest(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class GetStackPolicyResponse(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        self.validate_required(self.headers, 'headers')

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class SetStackPolicyRequest(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class SetStackPolicyResponse(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        self.validate_required(self.headers, 'headers')

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class UpdateStackRequest(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class UpdateStackResponse(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        self.validate_required(self.headers, 'headers')

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class WaitConditionsQuery(TeaModel):
    def __init__(self, stackname=None, stackid=None, resource=None, expire=None, signature=None):
        self.stackname = stackname
        self.stackid = stackid
        self.resource = resource
        self.expire = expire
        self.signature = signature

    def validate(self):
        self.validate_required(self.stackname, 'stackname')
        self.validate_required(self.stackid, 'stackid')
        self.validate_required(self.resource, 'resource')
        self.validate_required(self.expire, 'expire')
        self.validate_required(self.signature, 'signature')

    def to_map(self):
        result = {}
        result['stackname'] = self.stackname
        result['stackid'] = self.stackid
        result['resource'] = self.resource
        result['expire'] = self.expire
        result['signature'] = self.signature
        return result

    def from_map(self, map={}):
        self.stackname = map.get('stackname')
        self.stackid = map.get('stackid')
        self.resource = map.get('resource')
        self.expire = map.get('expire')
        self.signature = map.get('signature')
        return self


class WaitConditionsRequest(TeaModel):
    def __init__(self, headers=None, query=None):
        self.headers = {}
        self.query = query

    def validate(self):
        self.validate_required(self.query, 'query')
        if self.query:
            self.query.validate()

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        if self.query is not None:
            result['query'] = self.query.to_map()
        else:
            result['query'] = None
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        if map.get('query') is not None:
            temp_model = WaitConditionsQuery()
            self.query = temp_model.from_map(map['query'])
        else:
            self.query = None
        return self


class WaitConditionsResponse(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        self.validate_required(self.headers, 'headers')

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class InquiryStackRequest(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class InquiryStackResponse(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        self.validate_required(self.headers, 'headers')

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class PreviewStackRequest(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class PreviewStackResponse(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        self.validate_required(self.headers, 'headers')

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class DoActionsRequest(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class DoActionsResponse(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        self.validate_required(self.headers, 'headers')

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class DescribeRegionsRequest(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class DescribeRegionsResponse(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        self.validate_required(self.headers, 'headers')

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class DescribeEventsQuery(TeaModel):
    def __init__(self, resource_status=None, resource_name=None, resource_type=None, page_size=None, page_number=None):
        self.resource_status = resource_status
        self.resource_name = resource_name
        self.resource_type = resource_type
        self.page_size = page_size
        self.page_number = page_number

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['ResourceStatus'] = self.resource_status
        result['ResourceName'] = self.resource_name
        result['ResourceType'] = self.resource_type
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        return result

    def from_map(self, map={}):
        self.resource_status = map.get('ResourceStatus')
        self.resource_name = map.get('ResourceName')
        self.resource_type = map.get('ResourceType')
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        return self


class DescribeEventsRequest(TeaModel):
    def __init__(self, headers=None, query=None):
        self.headers = {}
        self.query = query

    def validate(self):
        if self.query:
            self.query.validate()

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        if self.query is not None:
            result['query'] = self.query.to_map()
        else:
            result['query'] = None
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        if map.get('query') is not None:
            temp_model = DescribeEventsQuery()
            self.query = temp_model.from_map(map['query'])
        else:
            self.query = None
        return self


class DescribeEventsResponse(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        self.validate_required(self.headers, 'headers')

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class DeleteStackQuery(TeaModel):
    def __init__(self, region_id=None):
        self.region_id = region_id

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        return result

    def from_map(self, map={}):
        self.region_id = map.get('RegionId')
        return self


class DeleteStackRequest(TeaModel):
    def __init__(self, headers=None, query=None):
        self.headers = {}
        self.query = query

    def validate(self):
        if self.query:
            self.query.validate()

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        if self.query is not None:
            result['query'] = self.query.to_map()
        else:
            result['query'] = None
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        if map.get('query') is not None:
            temp_model = DeleteStackQuery()
            self.query = temp_model.from_map(map['query'])
        else:
            self.query = None
        return self


class DeleteStackResponse(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        self.validate_required(self.headers, 'headers')

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class CreateStacksRequest(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class CreateStacksResponse(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        self.validate_required(self.headers, 'headers')

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class AbandonStackRequest(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class AbandonStackResponse(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        self.validate_required(self.headers, 'headers')

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class DescribeResourceTypesQuery(TeaModel):
    def __init__(self, support_status=None):
        self.support_status = support_status

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['SupportStatus'] = self.support_status
        return result

    def from_map(self, map={}):
        self.support_status = map.get('SupportStatus')
        return self


class DescribeResourceTypesRequest(TeaModel):
    def __init__(self, headers=None, query=None):
        self.headers = {}
        self.query = query

    def validate(self):
        if self.query:
            self.query.validate()

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        if self.query is not None:
            result['query'] = self.query.to_map()
        else:
            result['query'] = None
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        if map.get('query') is not None:
            temp_model = DescribeResourceTypesQuery()
            self.query = temp_model.from_map(map['query'])
        else:
            self.query = None
        return self


class DescribeResourceTypesResponse(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        self.validate_required(self.headers, 'headers')

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class DescribeResourceTypeDetailRequest(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class DescribeResourceTypeDetailResponse(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        self.validate_required(self.headers, 'headers')

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class DescribeResourcesRequest(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class DescribeResourcesResponse(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        self.validate_required(self.headers, 'headers')

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class DescribeResourceDetailRequest(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class DescribeResourceDetailResponse(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        self.validate_required(self.headers, 'headers')

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class DescribeResourceTypeTemplateRequest(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class DescribeResourceTypeTemplateResponse(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        self.validate_required(self.headers, 'headers')

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class DescribeStacksQuery(TeaModel):
    def __init__(self, status=None, name=None, stack_id=None, page_size=None, page_number=None):
        self.status = status
        self.name = name
        self.stack_id = stack_id
        self.page_size = page_size
        self.page_number = page_number

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Status'] = self.status
        result['Name'] = self.name
        result['StackId'] = self.stack_id
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        return result

    def from_map(self, map={}):
        self.status = map.get('Status')
        self.name = map.get('Name')
        self.stack_id = map.get('StackId')
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        return self


class DescribeStacksRequest(TeaModel):
    def __init__(self, headers=None, query=None):
        self.headers = {}
        self.query = query

    def validate(self):
        if self.query:
            self.query.validate()

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        if self.query is not None:
            result['query'] = self.query.to_map()
        else:
            result['query'] = None
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        if map.get('query') is not None:
            temp_model = DescribeStacksQuery()
            self.query = temp_model.from_map(map['query'])
        else:
            self.query = None
        return self


class DescribeStacksResponse(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        self.validate_required(self.headers, 'headers')

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class DescribeStackDetailRequest(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class DescribeStackDetailResponse(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        self.validate_required(self.headers, 'headers')

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class ValidateTemplateRequest(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class ValidateTemplateResponse(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        self.validate_required(self.headers, 'headers')

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class DescribeTemplateRequest(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self


class DescribeTemplateResponse(TeaModel):
    def __init__(self, headers=None):
        self.headers = {}

    def validate(self):
        self.validate_required(self.headers, 'headers')

    def to_map(self):
        result = {}
        result['headers'] = self.headers
        return result

    def from_map(self, map={}):
        self.headers = map.get('headers')
        return self
