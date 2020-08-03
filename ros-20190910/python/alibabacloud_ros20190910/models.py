# This file is auto-generated, don't edit it. Thanks.
from Tea.model import TeaModel


class ListStackOperationRisksRequest(TeaModel):
    def __init__(self, region_id=None, stack_id=None, operation_type=None, client_token=None, ram_role_name=None, retain_all_resources=None, retain_resources=None):
        self.region_id = region_id
        self.stack_id = stack_id
        self.operation_type = operation_type
        self.client_token = client_token
        self.ram_role_name = ram_role_name
        self.retain_all_resources = retain_all_resources
        self.retain_resources = []

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.stack_id, 'stack_id')

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        result['StackId'] = self.stack_id
        result['OperationType'] = self.operation_type
        result['ClientToken'] = self.client_token
        result['RamRoleName'] = self.ram_role_name
        result['RetainAllResources'] = self.retain_all_resources
        result['RetainResources'] = []
        if self.retain_resources is not None:
            for k in self.retain_resources:
                result['RetainResources'].append(k)
        else:
            result['RetainResources'] = None
        return result

    def from_map(self, map={}):
        self.region_id = map.get('RegionId')
        self.stack_id = map.get('StackId')
        self.operation_type = map.get('OperationType')
        self.client_token = map.get('ClientToken')
        self.ram_role_name = map.get('RamRoleName')
        self.retain_all_resources = map.get('RetainAllResources')
        self.retain_resources = []
        if map.get('RetainResources') is not None:
            for k in map.get('RetainResources'):
                self.retain_resources.append(k)
        else:
            self.retain_resources = None
        return self


class ListStackOperationRisksResponse(TeaModel):
    def __init__(self, request_id=None, risk_resources=None):
        self.request_id = request_id
        self.risk_resources = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.risk_resources, 'risk_resources')
        if self.risk_resources:
            for k in self.risk_resources:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['RiskResources'] = []
        if self.risk_resources is not None:
            for k in self.risk_resources:
                result['RiskResources'].append(k.to_map() if k else None)
        else:
            result['RiskResources'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.risk_resources = []
        if map.get('RiskResources') is not None:
            for k in map.get('RiskResources'):
                temp_model = ListStackOperationRisksResponseRiskResources()
                temp_model = temp_model.from_map(k)
                self.risk_resources.append(temp_model)
        else:
            self.risk_resources = None
        return self


class ListStackOperationRisksResponseRiskResources(TeaModel):
    def __init__(self, logical_resource_id=None, physical_resource_id=None, resource_type=None, reason=None, risk_type=None, code=None, message=None, request_id=None):
        self.logical_resource_id = logical_resource_id
        self.physical_resource_id = physical_resource_id
        self.resource_type = resource_type
        self.reason = reason
        self.risk_type = risk_type
        self.code = code
        self.message = message
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.logical_resource_id, 'logical_resource_id')
        self.validate_required(self.physical_resource_id, 'physical_resource_id')
        self.validate_required(self.resource_type, 'resource_type')
        self.validate_required(self.reason, 'reason')
        self.validate_required(self.risk_type, 'risk_type')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['LogicalResourceId'] = self.logical_resource_id
        result['PhysicalResourceId'] = self.physical_resource_id
        result['ResourceType'] = self.resource_type
        result['Reason'] = self.reason
        result['RiskType'] = self.risk_type
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.logical_resource_id = map.get('LogicalResourceId')
        self.physical_resource_id = map.get('PhysicalResourceId')
        self.resource_type = map.get('ResourceType')
        self.reason = map.get('Reason')
        self.risk_type = map.get('RiskType')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        return self
class GetTemplateSummaryRequest(TeaModel):
    def __init__(self, stack_id=None, template_body=None, region_id=None, template_id=None, template_url=None, change_set_id=None):
        self.stack_id = stack_id
        self.template_body = template_body
        self.region_id = region_id
        self.template_id = template_id
        self.template_url = template_url
        self.change_set_id = change_set_id

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['StackId'] = self.stack_id
        result['TemplateBody'] = self.template_body
        result['RegionId'] = self.region_id
        result['TemplateId'] = self.template_id
        result['TemplateURL'] = self.template_url
        result['ChangeSetId'] = self.change_set_id
        return result

    def from_map(self, map={}):
        self.stack_id = map.get('StackId')
        self.template_body = map.get('TemplateBody')
        self.region_id = map.get('RegionId')
        self.template_id = map.get('TemplateId')
        self.template_url = map.get('TemplateURL')
        self.change_set_id = map.get('ChangeSetId')
        return self


class GetTemplateSummaryResponse(TeaModel):
    def __init__(self, request_id=None, description=None, metadata=None, version=None, resource_identifier_summaries=None, parameters=None, resource_types=None):
        self.request_id = request_id
        self.description = description
        self.metadata = {}
        self.version = version
        self.resource_identifier_summaries = []
        self.parameters = []
        self.resource_types = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.description, 'description')
        self.validate_required(self.metadata, 'metadata')
        self.validate_required(self.version, 'version')
        self.validate_required(self.resource_identifier_summaries, 'resource_identifier_summaries')
        if self.resource_identifier_summaries:
            for k in self.resource_identifier_summaries:
                if k :
                    k.validate()
        self.validate_required(self.parameters, 'parameters')
        if self.parameters:
            for k in self.parameters:
                if k :
                    k.validate()
        self.validate_required(self.resource_types, 'resource_types')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Description'] = self.description
        result['Metadata'] = self.metadata
        result['Version'] = self.version
        result['ResourceIdentifierSummaries'] = []
        if self.resource_identifier_summaries is not None:
            for k in self.resource_identifier_summaries:
                result['ResourceIdentifierSummaries'].append(k.to_map() if k else None)
        else:
            result['ResourceIdentifierSummaries'] = None
        result['Parameters'] = []
        if self.parameters is not None:
            for k in self.parameters:
                result['Parameters'].append(k.to_map() if k else None)
        else:
            result['Parameters'] = None
        result['ResourceTypes'] = []
        if self.resource_types is not None:
            for k in self.resource_types:
                result['ResourceTypes'].append(k)
        else:
            result['ResourceTypes'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.description = map.get('Description')
        self.metadata = map.get('Metadata')
        self.version = map.get('Version')
        self.resource_identifier_summaries = []
        if map.get('ResourceIdentifierSummaries') is not None:
            for k in map.get('ResourceIdentifierSummaries'):
                temp_model = GetTemplateSummaryResponseResourceIdentifierSummaries()
                temp_model = temp_model.from_map(k)
                self.resource_identifier_summaries.append(temp_model)
        else:
            self.resource_identifier_summaries = None
        self.parameters = []
        if map.get('Parameters') is not None:
            for k in map.get('Parameters'):
                temp_model = map()
                temp_model = temp_model.from_map(k)
                self.parameters.append(temp_model)
        else:
            self.parameters = None
        self.resource_types = []
        if map.get('ResourceTypes') is not None:
            for k in map.get('ResourceTypes'):
                self.resource_types.append(k)
        else:
            self.resource_types = None
        return self


class GetTemplateSummaryResponseResourceIdentifierSummaries(TeaModel):
    def __init__(self, resource_type=None, logical_resource_ids=None, resource_identifiers=None):
        self.resource_type = resource_type
        self.logical_resource_ids = []
        self.resource_identifiers = []

    def validate(self):
        self.validate_required(self.resource_type, 'resource_type')
        self.validate_required(self.logical_resource_ids, 'logical_resource_ids')
        self.validate_required(self.resource_identifiers, 'resource_identifiers')

    def to_map(self):
        result = {}
        result['ResourceType'] = self.resource_type
        result['LogicalResourceIds'] = []
        if self.logical_resource_ids is not None:
            for k in self.logical_resource_ids:
                result['LogicalResourceIds'].append(k)
        else:
            result['LogicalResourceIds'] = None
        result['ResourceIdentifiers'] = []
        if self.resource_identifiers is not None:
            for k in self.resource_identifiers:
                result['ResourceIdentifiers'].append(k)
        else:
            result['ResourceIdentifiers'] = None
        return result

    def from_map(self, map={}):
        self.resource_type = map.get('ResourceType')
        self.logical_resource_ids = []
        if map.get('LogicalResourceIds') is not None:
            for k in map.get('LogicalResourceIds'):
                self.logical_resource_ids.append(k)
        else:
            self.logical_resource_ids = None
        self.resource_identifiers = []
        if map.get('ResourceIdentifiers') is not None:
            for k in map.get('ResourceIdentifiers'):
                self.resource_identifiers.append(k)
        else:
            self.resource_identifiers = None
        return self
class ListTagValuesRequest(TeaModel):
    def __init__(self, region_id=None, resource_type=None, next_token=None, key=None):
        self.region_id = region_id
        self.resource_type = resource_type
        self.next_token = next_token
        self.key = key

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.resource_type, 'resource_type')
        self.validate_required(self.key, 'key')

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        result['ResourceType'] = self.resource_type
        result['NextToken'] = self.next_token
        result['Key'] = self.key
        return result

    def from_map(self, map={}):
        self.region_id = map.get('RegionId')
        self.resource_type = map.get('ResourceType')
        self.next_token = map.get('NextToken')
        self.key = map.get('Key')
        return self


class ListTagValuesResponse(TeaModel):
    def __init__(self, request_id=None, next_token=None, values=None):
        self.request_id = request_id
        self.next_token = next_token
        self.values = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.next_token, 'next_token')
        self.validate_required(self.values, 'values')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['NextToken'] = self.next_token
        result['Values'] = []
        if self.values is not None:
            for k in self.values:
                result['Values'].append(k)
        else:
            result['Values'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.next_token = map.get('NextToken')
        self.values = []
        if map.get('Values') is not None:
            for k in map.get('Values'):
                self.values.append(k)
        else:
            self.values = None
        return self


class ListTagKeysRequest(TeaModel):
    def __init__(self, region_id=None, resource_type=None, next_token=None):
        self.region_id = region_id
        self.resource_type = resource_type
        self.next_token = next_token

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.resource_type, 'resource_type')

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        result['ResourceType'] = self.resource_type
        result['NextToken'] = self.next_token
        return result

    def from_map(self, map={}):
        self.region_id = map.get('RegionId')
        self.resource_type = map.get('ResourceType')
        self.next_token = map.get('NextToken')
        return self


class ListTagKeysResponse(TeaModel):
    def __init__(self, request_id=None, next_token=None, keys=None):
        self.request_id = request_id
        self.next_token = next_token
        self.keys = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.next_token, 'next_token')
        self.validate_required(self.keys, 'keys')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['NextToken'] = self.next_token
        result['Keys'] = []
        if self.keys is not None:
            for k in self.keys:
                result['Keys'].append(k)
        else:
            result['Keys'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.next_token = map.get('NextToken')
        self.keys = []
        if map.get('Keys') is not None:
            for k in map.get('Keys'):
                self.keys.append(k)
        else:
            self.keys = None
        return self


class SetDeletionProtectionRequest(TeaModel):
    def __init__(self, stack_id=None, deletion_protection=None, region_id=None):
        self.stack_id = stack_id
        self.deletion_protection = deletion_protection
        self.region_id = region_id

    def validate(self):
        self.validate_required(self.stack_id, 'stack_id')
        self.validate_required(self.deletion_protection, 'deletion_protection')
        self.validate_required(self.region_id, 'region_id')

    def to_map(self):
        result = {}
        result['StackId'] = self.stack_id
        result['DeletionProtection'] = self.deletion_protection
        result['RegionId'] = self.region_id
        return result

    def from_map(self, map={}):
        self.stack_id = map.get('StackId')
        self.deletion_protection = map.get('DeletionProtection')
        self.region_id = map.get('RegionId')
        return self


class SetDeletionProtectionResponse(TeaModel):
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


class UpdateStackTemplateByResourcesRequest(TeaModel):
    def __init__(self, stack_id=None, dry_run=None, region_id=None, client_token=None, template_format=None, logical_resource_id=None):
        self.stack_id = stack_id
        self.dry_run = dry_run
        self.region_id = region_id
        self.client_token = client_token
        self.template_format = template_format
        self.logical_resource_id = []

    def validate(self):
        self.validate_required(self.stack_id, 'stack_id')
        self.validate_required(self.region_id, 'region_id')

    def to_map(self):
        result = {}
        result['StackId'] = self.stack_id
        result['DryRun'] = self.dry_run
        result['RegionId'] = self.region_id
        result['ClientToken'] = self.client_token
        result['TemplateFormat'] = self.template_format
        result['LogicalResourceId'] = []
        if self.logical_resource_id is not None:
            for k in self.logical_resource_id:
                result['LogicalResourceId'].append(k)
        else:
            result['LogicalResourceId'] = None
        return result

    def from_map(self, map={}):
        self.stack_id = map.get('StackId')
        self.dry_run = map.get('DryRun')
        self.region_id = map.get('RegionId')
        self.client_token = map.get('ClientToken')
        self.template_format = map.get('TemplateFormat')
        self.logical_resource_id = []
        if map.get('LogicalResourceId') is not None:
            for k in map.get('LogicalResourceId'):
                self.logical_resource_id.append(k)
        else:
            self.logical_resource_id = None
        return self


class UpdateStackTemplateByResourcesResponse(TeaModel):
    def __init__(self, request_id=None, old_template_body=None, new_template_body=None):
        self.request_id = request_id
        self.old_template_body = old_template_body
        self.new_template_body = new_template_body

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.old_template_body, 'old_template_body')
        self.validate_required(self.new_template_body, 'new_template_body')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['OldTemplateBody'] = self.old_template_body
        result['NewTemplateBody'] = self.new_template_body
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.old_template_body = map.get('OldTemplateBody')
        self.new_template_body = map.get('NewTemplateBody')
        return self


class GetStackDriftDetectionStatusRequest(TeaModel):
    def __init__(self, region_id=None, drift_detection_id=None):
        self.region_id = region_id
        self.drift_detection_id = drift_detection_id

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.drift_detection_id, 'drift_detection_id')

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        result['DriftDetectionId'] = self.drift_detection_id
        return result

    def from_map(self, map={}):
        self.region_id = map.get('RegionId')
        self.drift_detection_id = map.get('DriftDetectionId')
        return self


class GetStackDriftDetectionStatusResponse(TeaModel):
    def __init__(self, request_id=None, drift_detection_id=None, drift_detection_time=None, drift_detection_status=None, drift_detection_status_reason=None, stack_drift_status=None, stack_id=None, drifted_stack_resource_count=None):
        self.request_id = request_id
        self.drift_detection_id = drift_detection_id
        self.drift_detection_time = drift_detection_time
        self.drift_detection_status = drift_detection_status
        self.drift_detection_status_reason = drift_detection_status_reason
        self.stack_drift_status = stack_drift_status
        self.stack_id = stack_id
        self.drifted_stack_resource_count = drifted_stack_resource_count

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.drift_detection_id, 'drift_detection_id')
        self.validate_required(self.drift_detection_time, 'drift_detection_time')
        self.validate_required(self.drift_detection_status, 'drift_detection_status')
        self.validate_required(self.drift_detection_status_reason, 'drift_detection_status_reason')
        self.validate_required(self.stack_drift_status, 'stack_drift_status')
        self.validate_required(self.stack_id, 'stack_id')
        self.validate_required(self.drifted_stack_resource_count, 'drifted_stack_resource_count')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['DriftDetectionId'] = self.drift_detection_id
        result['DriftDetectionTime'] = self.drift_detection_time
        result['DriftDetectionStatus'] = self.drift_detection_status
        result['DriftDetectionStatusReason'] = self.drift_detection_status_reason
        result['StackDriftStatus'] = self.stack_drift_status
        result['StackId'] = self.stack_id
        result['DriftedStackResourceCount'] = self.drifted_stack_resource_count
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.drift_detection_id = map.get('DriftDetectionId')
        self.drift_detection_time = map.get('DriftDetectionTime')
        self.drift_detection_status = map.get('DriftDetectionStatus')
        self.drift_detection_status_reason = map.get('DriftDetectionStatusReason')
        self.stack_drift_status = map.get('StackDriftStatus')
        self.stack_id = map.get('StackId')
        self.drifted_stack_resource_count = map.get('DriftedStackResourceCount')
        return self


class DetectStackGroupDriftRequest(TeaModel):
    def __init__(self, client_token=None, region_id=None, stack_group_name=None, operation_preferences=None):
        self.client_token = client_token
        self.region_id = region_id
        self.stack_group_name = stack_group_name
        self.operation_preferences = {}

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.stack_group_name, 'stack_group_name')

    def to_map(self):
        result = {}
        result['ClientToken'] = self.client_token
        result['RegionId'] = self.region_id
        result['StackGroupName'] = self.stack_group_name
        result['OperationPreferences'] = self.operation_preferences
        return result

    def from_map(self, map={}):
        self.client_token = map.get('ClientToken')
        self.region_id = map.get('RegionId')
        self.stack_group_name = map.get('StackGroupName')
        self.operation_preferences = map.get('OperationPreferences')
        return self


class DetectStackGroupDriftResponse(TeaModel):
    def __init__(self, request_id=None, operation_id=None):
        self.request_id = request_id
        self.operation_id = operation_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.operation_id, 'operation_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['OperationId'] = self.operation_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.operation_id = map.get('OperationId')
        return self


class ListStackResourceDriftsRequest(TeaModel):
    def __init__(self, stack_id=None, region_id=None, max_results=None, resource_drift_status=None, next_token=None):
        self.stack_id = stack_id
        self.region_id = region_id
        self.max_results = max_results
        self.resource_drift_status = []
        self.next_token = next_token

    def validate(self):
        self.validate_required(self.stack_id, 'stack_id')
        self.validate_required(self.region_id, 'region_id')

    def to_map(self):
        result = {}
        result['StackId'] = self.stack_id
        result['RegionId'] = self.region_id
        result['MaxResults'] = self.max_results
        result['ResourceDriftStatus'] = []
        if self.resource_drift_status is not None:
            for k in self.resource_drift_status:
                result['ResourceDriftStatus'].append(k)
        else:
            result['ResourceDriftStatus'] = None
        result['NextToken'] = self.next_token
        return result

    def from_map(self, map={}):
        self.stack_id = map.get('StackId')
        self.region_id = map.get('RegionId')
        self.max_results = map.get('MaxResults')
        self.resource_drift_status = []
        if map.get('ResourceDriftStatus') is not None:
            for k in map.get('ResourceDriftStatus'):
                self.resource_drift_status.append(k)
        else:
            self.resource_drift_status = None
        self.next_token = map.get('NextToken')
        return self


class ListStackResourceDriftsResponse(TeaModel):
    def __init__(self, request_id=None, next_token=None, resource_drifts=None):
        self.request_id = request_id
        self.next_token = next_token
        self.resource_drifts = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.next_token, 'next_token')
        self.validate_required(self.resource_drifts, 'resource_drifts')
        if self.resource_drifts:
            for k in self.resource_drifts:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['NextToken'] = self.next_token
        result['ResourceDrifts'] = []
        if self.resource_drifts is not None:
            for k in self.resource_drifts:
                result['ResourceDrifts'].append(k.to_map() if k else None)
        else:
            result['ResourceDrifts'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.next_token = map.get('NextToken')
        self.resource_drifts = []
        if map.get('ResourceDrifts') is not None:
            for k in map.get('ResourceDrifts'):
                temp_model = ListStackResourceDriftsResponseResourceDrifts()
                temp_model = temp_model.from_map(k)
                self.resource_drifts.append(temp_model)
        else:
            self.resource_drifts = None
        return self


class ListStackResourceDriftsResponseResourceDriftsPropertyDifferences(TeaModel):
    def __init__(self, property_path=None, actual_value=None, expected_value=None, difference_type=None):
        self.property_path = property_path
        self.actual_value = actual_value
        self.expected_value = expected_value
        self.difference_type = difference_type

    def validate(self):
        self.validate_required(self.property_path, 'property_path')
        self.validate_required(self.actual_value, 'actual_value')
        self.validate_required(self.expected_value, 'expected_value')
        self.validate_required(self.difference_type, 'difference_type')

    def to_map(self):
        result = {}
        result['PropertyPath'] = self.property_path
        result['ActualValue'] = self.actual_value
        result['ExpectedValue'] = self.expected_value
        result['DifferenceType'] = self.difference_type
        return result

    def from_map(self, map={}):
        self.property_path = map.get('PropertyPath')
        self.actual_value = map.get('ActualValue')
        self.expected_value = map.get('ExpectedValue')
        self.difference_type = map.get('DifferenceType')
        return self


class ListStackResourceDriftsResponseResourceDrifts(TeaModel):
    def __init__(self, drift_detection_time=None, resource_drift_status=None, stack_id=None, resource_type=None, physical_resource_id=None, logical_resource_id=None, actual_properties=None, expected_properties=None, property_differences=None):
        self.drift_detection_time = drift_detection_time
        self.resource_drift_status = resource_drift_status
        self.stack_id = stack_id
        self.resource_type = resource_type
        self.physical_resource_id = physical_resource_id
        self.logical_resource_id = logical_resource_id
        self.actual_properties = actual_properties
        self.expected_properties = expected_properties
        self.property_differences = []

    def validate(self):
        self.validate_required(self.drift_detection_time, 'drift_detection_time')
        self.validate_required(self.resource_drift_status, 'resource_drift_status')
        self.validate_required(self.stack_id, 'stack_id')
        self.validate_required(self.resource_type, 'resource_type')
        self.validate_required(self.physical_resource_id, 'physical_resource_id')
        self.validate_required(self.logical_resource_id, 'logical_resource_id')
        self.validate_required(self.actual_properties, 'actual_properties')
        self.validate_required(self.expected_properties, 'expected_properties')
        self.validate_required(self.property_differences, 'property_differences')
        if self.property_differences:
            for k in self.property_differences:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['DriftDetectionTime'] = self.drift_detection_time
        result['ResourceDriftStatus'] = self.resource_drift_status
        result['StackId'] = self.stack_id
        result['ResourceType'] = self.resource_type
        result['PhysicalResourceId'] = self.physical_resource_id
        result['LogicalResourceId'] = self.logical_resource_id
        result['ActualProperties'] = self.actual_properties
        result['ExpectedProperties'] = self.expected_properties
        result['PropertyDifferences'] = []
        if self.property_differences is not None:
            for k in self.property_differences:
                result['PropertyDifferences'].append(k.to_map() if k else None)
        else:
            result['PropertyDifferences'] = None
        return result

    def from_map(self, map={}):
        self.drift_detection_time = map.get('DriftDetectionTime')
        self.resource_drift_status = map.get('ResourceDriftStatus')
        self.stack_id = map.get('StackId')
        self.resource_type = map.get('ResourceType')
        self.physical_resource_id = map.get('PhysicalResourceId')
        self.logical_resource_id = map.get('LogicalResourceId')
        self.actual_properties = map.get('ActualProperties')
        self.expected_properties = map.get('ExpectedProperties')
        self.property_differences = []
        if map.get('PropertyDifferences') is not None:
            for k in map.get('PropertyDifferences'):
                temp_model = ListStackResourceDriftsResponseResourceDriftsPropertyDifferences()
                temp_model = temp_model.from_map(k)
                self.property_differences.append(temp_model)
        else:
            self.property_differences = None
        return self
class DetectStackResourceDriftRequest(TeaModel):
    def __init__(self, stack_id=None, client_token=None, region_id=None, logical_resource_id=None):
        self.stack_id = stack_id
        self.client_token = client_token
        self.region_id = region_id
        self.logical_resource_id = logical_resource_id

    def validate(self):
        self.validate_required(self.stack_id, 'stack_id')
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.logical_resource_id, 'logical_resource_id')

    def to_map(self):
        result = {}
        result['StackId'] = self.stack_id
        result['ClientToken'] = self.client_token
        result['RegionId'] = self.region_id
        result['LogicalResourceId'] = self.logical_resource_id
        return result

    def from_map(self, map={}):
        self.stack_id = map.get('StackId')
        self.client_token = map.get('ClientToken')
        self.region_id = map.get('RegionId')
        self.logical_resource_id = map.get('LogicalResourceId')
        return self


class DetectStackResourceDriftResponse(TeaModel):
    def __init__(self, request_id=None, drift_detection_time=None, resource_drift_status=None, stack_id=None, resource_type=None, physical_resource_id=None, logical_resource_id=None, actual_properties=None, expected_properties=None, property_differences=None):
        self.request_id = request_id
        self.drift_detection_time = drift_detection_time
        self.resource_drift_status = resource_drift_status
        self.stack_id = stack_id
        self.resource_type = resource_type
        self.physical_resource_id = physical_resource_id
        self.logical_resource_id = logical_resource_id
        self.actual_properties = actual_properties
        self.expected_properties = expected_properties
        self.property_differences = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.drift_detection_time, 'drift_detection_time')
        self.validate_required(self.resource_drift_status, 'resource_drift_status')
        self.validate_required(self.stack_id, 'stack_id')
        self.validate_required(self.resource_type, 'resource_type')
        self.validate_required(self.physical_resource_id, 'physical_resource_id')
        self.validate_required(self.logical_resource_id, 'logical_resource_id')
        self.validate_required(self.actual_properties, 'actual_properties')
        self.validate_required(self.expected_properties, 'expected_properties')
        self.validate_required(self.property_differences, 'property_differences')
        if self.property_differences:
            for k in self.property_differences:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['DriftDetectionTime'] = self.drift_detection_time
        result['ResourceDriftStatus'] = self.resource_drift_status
        result['StackId'] = self.stack_id
        result['ResourceType'] = self.resource_type
        result['PhysicalResourceId'] = self.physical_resource_id
        result['LogicalResourceId'] = self.logical_resource_id
        result['ActualProperties'] = self.actual_properties
        result['ExpectedProperties'] = self.expected_properties
        result['PropertyDifferences'] = []
        if self.property_differences is not None:
            for k in self.property_differences:
                result['PropertyDifferences'].append(k.to_map() if k else None)
        else:
            result['PropertyDifferences'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.drift_detection_time = map.get('DriftDetectionTime')
        self.resource_drift_status = map.get('ResourceDriftStatus')
        self.stack_id = map.get('StackId')
        self.resource_type = map.get('ResourceType')
        self.physical_resource_id = map.get('PhysicalResourceId')
        self.logical_resource_id = map.get('LogicalResourceId')
        self.actual_properties = map.get('ActualProperties')
        self.expected_properties = map.get('ExpectedProperties')
        self.property_differences = []
        if map.get('PropertyDifferences') is not None:
            for k in map.get('PropertyDifferences'):
                temp_model = DetectStackResourceDriftResponsePropertyDifferences()
                temp_model = temp_model.from_map(k)
                self.property_differences.append(temp_model)
        else:
            self.property_differences = None
        return self


class DetectStackResourceDriftResponsePropertyDifferences(TeaModel):
    def __init__(self, property_path=None, actual_value=None, expected_value=None, difference_type=None):
        self.property_path = property_path
        self.actual_value = actual_value
        self.expected_value = expected_value
        self.difference_type = difference_type

    def validate(self):
        self.validate_required(self.property_path, 'property_path')
        self.validate_required(self.actual_value, 'actual_value')
        self.validate_required(self.expected_value, 'expected_value')
        self.validate_required(self.difference_type, 'difference_type')

    def to_map(self):
        result = {}
        result['PropertyPath'] = self.property_path
        result['ActualValue'] = self.actual_value
        result['ExpectedValue'] = self.expected_value
        result['DifferenceType'] = self.difference_type
        return result

    def from_map(self, map={}):
        self.property_path = map.get('PropertyPath')
        self.actual_value = map.get('ActualValue')
        self.expected_value = map.get('ExpectedValue')
        self.difference_type = map.get('DifferenceType')
        return self
class DetectStackDriftRequest(TeaModel):
    def __init__(self, stack_id=None, region_id=None, logical_resource_id=None, client_token=None):
        self.stack_id = stack_id
        self.region_id = region_id
        self.logical_resource_id = []
        self.client_token = client_token

    def validate(self):
        self.validate_required(self.stack_id, 'stack_id')
        self.validate_required(self.region_id, 'region_id')

    def to_map(self):
        result = {}
        result['StackId'] = self.stack_id
        result['RegionId'] = self.region_id
        result['LogicalResourceId'] = []
        if self.logical_resource_id is not None:
            for k in self.logical_resource_id:
                result['LogicalResourceId'].append(k)
        else:
            result['LogicalResourceId'] = None
        result['ClientToken'] = self.client_token
        return result

    def from_map(self, map={}):
        self.stack_id = map.get('StackId')
        self.region_id = map.get('RegionId')
        self.logical_resource_id = []
        if map.get('LogicalResourceId') is not None:
            for k in map.get('LogicalResourceId'):
                self.logical_resource_id.append(k)
        else:
            self.logical_resource_id = None
        self.client_token = map.get('ClientToken')
        return self


class DetectStackDriftResponse(TeaModel):
    def __init__(self, request_id=None, drift_detection_id=None):
        self.request_id = request_id
        self.drift_detection_id = drift_detection_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.drift_detection_id, 'drift_detection_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['DriftDetectionId'] = self.drift_detection_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.drift_detection_id = map.get('DriftDetectionId')
        return self


class UpdateStackInstancesRequest(TeaModel):
    def __init__(self, region_id=None, stack_group_name=None, parameter_overrides=None, account_ids=None, region_ids=None, client_token=None, operation_description=None, operation_preferences=None):
        self.region_id = region_id
        self.stack_group_name = stack_group_name
        self.parameter_overrides = []
        self.account_ids = {}
        self.region_ids = {}
        self.client_token = client_token
        self.operation_description = operation_description
        self.operation_preferences = {}

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.stack_group_name, 'stack_group_name')
        if self.parameter_overrides:
            for k in self.parameter_overrides:
                if k :
                    k.validate()
        self.validate_required(self.account_ids, 'account_ids')
        self.validate_required(self.region_ids, 'region_ids')

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        result['StackGroupName'] = self.stack_group_name
        result['ParameterOverrides'] = []
        if self.parameter_overrides is not None:
            for k in self.parameter_overrides:
                result['ParameterOverrides'].append(k.to_map() if k else None)
        else:
            result['ParameterOverrides'] = None
        result['AccountIds'] = self.account_ids
        result['RegionIds'] = self.region_ids
        result['ClientToken'] = self.client_token
        result['OperationDescription'] = self.operation_description
        result['OperationPreferences'] = self.operation_preferences
        return result

    def from_map(self, map={}):
        self.region_id = map.get('RegionId')
        self.stack_group_name = map.get('StackGroupName')
        self.parameter_overrides = []
        if map.get('ParameterOverrides') is not None:
            for k in map.get('ParameterOverrides'):
                temp_model = UpdateStackInstancesRequestParameterOverrides()
                temp_model = temp_model.from_map(k)
                self.parameter_overrides.append(temp_model)
        else:
            self.parameter_overrides = None
        self.account_ids = map.get('AccountIds')
        self.region_ids = map.get('RegionIds')
        self.client_token = map.get('ClientToken')
        self.operation_description = map.get('OperationDescription')
        self.operation_preferences = map.get('OperationPreferences')
        return self


class UpdateStackInstancesRequestParameterOverrides(TeaModel):
    def __init__(self, parameter_value=None, parameter_key=None):
        self.parameter_value = parameter_value
        self.parameter_key = parameter_key

    def validate(self):
        self.validate_required(self.parameter_value, 'parameter_value')
        self.validate_required(self.parameter_key, 'parameter_key')

    def to_map(self):
        result = {}
        result['ParameterValue'] = self.parameter_value
        result['ParameterKey'] = self.parameter_key
        return result

    def from_map(self, map={}):
        self.parameter_value = map.get('ParameterValue')
        self.parameter_key = map.get('ParameterKey')
        return self
class UpdateStackInstancesResponse(TeaModel):
    def __init__(self, request_id=None, operation_id=None):
        self.request_id = request_id
        self.operation_id = operation_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.operation_id, 'operation_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['OperationId'] = self.operation_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.operation_id = map.get('OperationId')
        return self


class ListStackGroupOperationsRequest(TeaModel):
    def __init__(self, region_id=None, stack_group_name=None, page_size=None, page_number=None):
        self.region_id = region_id
        self.stack_group_name = stack_group_name
        self.page_size = page_size
        self.page_number = page_number

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.stack_group_name, 'stack_group_name')

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        result['StackGroupName'] = self.stack_group_name
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        return result

    def from_map(self, map={}):
        self.region_id = map.get('RegionId')
        self.stack_group_name = map.get('StackGroupName')
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        return self


class ListStackGroupOperationsResponse(TeaModel):
    def __init__(self, request_id=None, page_number=None, page_size=None, total_count=None, stack_group_operations=None):
        self.request_id = request_id
        self.page_number = page_number
        self.page_size = page_size
        self.total_count = total_count
        self.stack_group_operations = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.total_count, 'total_count')
        self.validate_required(self.stack_group_operations, 'stack_group_operations')
        if self.stack_group_operations:
            for k in self.stack_group_operations:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        result['TotalCount'] = self.total_count
        result['StackGroupOperations'] = []
        if self.stack_group_operations is not None:
            for k in self.stack_group_operations:
                result['StackGroupOperations'].append(k.to_map() if k else None)
        else:
            result['StackGroupOperations'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        self.total_count = map.get('TotalCount')
        self.stack_group_operations = []
        if map.get('StackGroupOperations') is not None:
            for k in map.get('StackGroupOperations'):
                temp_model = ListStackGroupOperationsResponseStackGroupOperations()
                temp_model = temp_model.from_map(k)
                self.stack_group_operations.append(temp_model)
        else:
            self.stack_group_operations = None
        return self


class ListStackGroupOperationsResponseStackGroupOperations(TeaModel):
    def __init__(self, stack_group_name=None, stack_group_id=None, operation_id=None, operation_description=None, create_time=None, end_time=None, action=None, status=None):
        self.stack_group_name = stack_group_name
        self.stack_group_id = stack_group_id
        self.operation_id = operation_id
        self.operation_description = operation_description
        self.create_time = create_time
        self.end_time = end_time
        self.action = action
        self.status = status

    def validate(self):
        self.validate_required(self.stack_group_name, 'stack_group_name')
        self.validate_required(self.stack_group_id, 'stack_group_id')
        self.validate_required(self.operation_id, 'operation_id')
        self.validate_required(self.operation_description, 'operation_description')
        self.validate_required(self.create_time, 'create_time')
        self.validate_required(self.end_time, 'end_time')
        self.validate_required(self.action, 'action')
        self.validate_required(self.status, 'status')

    def to_map(self):
        result = {}
        result['StackGroupName'] = self.stack_group_name
        result['StackGroupId'] = self.stack_group_id
        result['OperationId'] = self.operation_id
        result['OperationDescription'] = self.operation_description
        result['CreateTime'] = self.create_time
        result['EndTime'] = self.end_time
        result['Action'] = self.action
        result['Status'] = self.status
        return result

    def from_map(self, map={}):
        self.stack_group_name = map.get('StackGroupName')
        self.stack_group_id = map.get('StackGroupId')
        self.operation_id = map.get('OperationId')
        self.operation_description = map.get('OperationDescription')
        self.create_time = map.get('CreateTime')
        self.end_time = map.get('EndTime')
        self.action = map.get('Action')
        self.status = map.get('Status')
        return self
class GetStackGroupRequest(TeaModel):
    def __init__(self, region_id=None, stack_group_name=None):
        self.region_id = region_id
        self.stack_group_name = stack_group_name

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.stack_group_name, 'stack_group_name')

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        result['StackGroupName'] = self.stack_group_name
        return result

    def from_map(self, map={}):
        self.region_id = map.get('RegionId')
        self.stack_group_name = map.get('StackGroupName')
        return self


class GetStackGroupResponse(TeaModel):
    def __init__(self, request_id=None, stack_group=None):
        self.request_id = request_id
        self.stack_group = stack_group

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.stack_group, 'stack_group')
        if self.stack_group:
            self.stack_group.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.stack_group is not None:
            result['StackGroup'] = self.stack_group.to_map()
        else:
            result['StackGroup'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('StackGroup') is not None:
            temp_model = GetStackGroupResponseStackGroup()
            self.stack_group = temp_model.from_map(map['StackGroup'])
        else:
            self.stack_group = None
        return self


class GetStackGroupResponseStackGroupParameters(TeaModel):
    def __init__(self, parameter_key=None, parameter_value=None):
        self.parameter_key = parameter_key
        self.parameter_value = parameter_value

    def validate(self):
        self.validate_required(self.parameter_key, 'parameter_key')
        self.validate_required(self.parameter_value, 'parameter_value')

    def to_map(self):
        result = {}
        result['ParameterKey'] = self.parameter_key
        result['ParameterValue'] = self.parameter_value
        return result

    def from_map(self, map={}):
        self.parameter_key = map.get('ParameterKey')
        self.parameter_value = map.get('ParameterValue')
        return self


class GetStackGroupResponseStackGroupStackGroupDriftDetectionDetail(TeaModel):
    def __init__(self, drift_detection_time=None, stack_group_drift_status=None, drift_detection_status=None, drifted_stack_instances_count=None, failed_stack_instances_count=None, cancelled_stack_instances_count=None, in_progress_stack_instances_count=None, in_sync_stack_instances_count=None, total_stack_instances_count=None):
        self.drift_detection_time = drift_detection_time
        self.stack_group_drift_status = stack_group_drift_status
        self.drift_detection_status = drift_detection_status
        self.drifted_stack_instances_count = drifted_stack_instances_count
        self.failed_stack_instances_count = failed_stack_instances_count
        self.cancelled_stack_instances_count = cancelled_stack_instances_count
        self.in_progress_stack_instances_count = in_progress_stack_instances_count
        self.in_sync_stack_instances_count = in_sync_stack_instances_count
        self.total_stack_instances_count = total_stack_instances_count

    def validate(self):
        self.validate_required(self.drift_detection_time, 'drift_detection_time')
        self.validate_required(self.stack_group_drift_status, 'stack_group_drift_status')
        self.validate_required(self.drift_detection_status, 'drift_detection_status')
        self.validate_required(self.drifted_stack_instances_count, 'drifted_stack_instances_count')
        self.validate_required(self.failed_stack_instances_count, 'failed_stack_instances_count')
        self.validate_required(self.cancelled_stack_instances_count, 'cancelled_stack_instances_count')
        self.validate_required(self.in_progress_stack_instances_count, 'in_progress_stack_instances_count')
        self.validate_required(self.in_sync_stack_instances_count, 'in_sync_stack_instances_count')
        self.validate_required(self.total_stack_instances_count, 'total_stack_instances_count')

    def to_map(self):
        result = {}
        result['DriftDetectionTime'] = self.drift_detection_time
        result['StackGroupDriftStatus'] = self.stack_group_drift_status
        result['DriftDetectionStatus'] = self.drift_detection_status
        result['DriftedStackInstancesCount'] = self.drifted_stack_instances_count
        result['FailedStackInstancesCount'] = self.failed_stack_instances_count
        result['CancelledStackInstancesCount'] = self.cancelled_stack_instances_count
        result['InProgressStackInstancesCount'] = self.in_progress_stack_instances_count
        result['InSyncStackInstancesCount'] = self.in_sync_stack_instances_count
        result['TotalStackInstancesCount'] = self.total_stack_instances_count
        return result

    def from_map(self, map={}):
        self.drift_detection_time = map.get('DriftDetectionTime')
        self.stack_group_drift_status = map.get('StackGroupDriftStatus')
        self.drift_detection_status = map.get('DriftDetectionStatus')
        self.drifted_stack_instances_count = map.get('DriftedStackInstancesCount')
        self.failed_stack_instances_count = map.get('FailedStackInstancesCount')
        self.cancelled_stack_instances_count = map.get('CancelledStackInstancesCount')
        self.in_progress_stack_instances_count = map.get('InProgressStackInstancesCount')
        self.in_sync_stack_instances_count = map.get('InSyncStackInstancesCount')
        self.total_stack_instances_count = map.get('TotalStackInstancesCount')
        return self


class GetStackGroupResponseStackGroup(TeaModel):
    def __init__(self, stack_group_name=None, stack_group_id=None, status=None, description=None, template_body=None, execution_role_name=None, administration_role_name=None, parameters=None, stack_group_drift_detection_detail=None):
        self.stack_group_name = stack_group_name
        self.stack_group_id = stack_group_id
        self.status = status
        self.description = description
        self.template_body = template_body
        self.execution_role_name = execution_role_name
        self.administration_role_name = administration_role_name
        self.parameters = []
        self.stack_group_drift_detection_detail = stack_group_drift_detection_detail

    def validate(self):
        self.validate_required(self.stack_group_name, 'stack_group_name')
        self.validate_required(self.stack_group_id, 'stack_group_id')
        self.validate_required(self.status, 'status')
        self.validate_required(self.description, 'description')
        self.validate_required(self.template_body, 'template_body')
        self.validate_required(self.execution_role_name, 'execution_role_name')
        self.validate_required(self.administration_role_name, 'administration_role_name')
        self.validate_required(self.parameters, 'parameters')
        if self.parameters:
            for k in self.parameters:
                if k :
                    k.validate()
        self.validate_required(self.stack_group_drift_detection_detail, 'stack_group_drift_detection_detail')
        if self.stack_group_drift_detection_detail:
            self.stack_group_drift_detection_detail.validate()

    def to_map(self):
        result = {}
        result['StackGroupName'] = self.stack_group_name
        result['StackGroupId'] = self.stack_group_id
        result['Status'] = self.status
        result['Description'] = self.description
        result['TemplateBody'] = self.template_body
        result['ExecutionRoleName'] = self.execution_role_name
        result['AdministrationRoleName'] = self.administration_role_name
        result['Parameters'] = []
        if self.parameters is not None:
            for k in self.parameters:
                result['Parameters'].append(k.to_map() if k else None)
        else:
            result['Parameters'] = None
        if self.stack_group_drift_detection_detail is not None:
            result['StackGroupDriftDetectionDetail'] = self.stack_group_drift_detection_detail.to_map()
        else:
            result['StackGroupDriftDetectionDetail'] = None
        return result

    def from_map(self, map={}):
        self.stack_group_name = map.get('StackGroupName')
        self.stack_group_id = map.get('StackGroupId')
        self.status = map.get('Status')
        self.description = map.get('Description')
        self.template_body = map.get('TemplateBody')
        self.execution_role_name = map.get('ExecutionRoleName')
        self.administration_role_name = map.get('AdministrationRoleName')
        self.parameters = []
        if map.get('Parameters') is not None:
            for k in map.get('Parameters'):
                temp_model = GetStackGroupResponseStackGroupParameters()
                temp_model = temp_model.from_map(k)
                self.parameters.append(temp_model)
        else:
            self.parameters = None
        if map.get('StackGroupDriftDetectionDetail') is not None:
            temp_model = GetStackGroupResponseStackGroupStackGroupDriftDetectionDetail()
            self.stack_group_drift_detection_detail = temp_model.from_map(map['StackGroupDriftDetectionDetail'])
        else:
            self.stack_group_drift_detection_detail = None
        return self
class GetStackGroupOperationRequest(TeaModel):
    def __init__(self, region_id=None, operation_id=None):
        self.region_id = region_id
        self.operation_id = operation_id

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.operation_id, 'operation_id')

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        result['OperationId'] = self.operation_id
        return result

    def from_map(self, map={}):
        self.region_id = map.get('RegionId')
        self.operation_id = map.get('OperationId')
        return self


class GetStackGroupOperationResponse(TeaModel):
    def __init__(self, request_id=None, stack_group_operation=None):
        self.request_id = request_id
        self.stack_group_operation = stack_group_operation

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.stack_group_operation, 'stack_group_operation')
        if self.stack_group_operation:
            self.stack_group_operation.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.stack_group_operation is not None:
            result['StackGroupOperation'] = self.stack_group_operation.to_map()
        else:
            result['StackGroupOperation'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('StackGroupOperation') is not None:
            temp_model = GetStackGroupOperationResponseStackGroupOperation()
            self.stack_group_operation = temp_model.from_map(map['StackGroupOperation'])
        else:
            self.stack_group_operation = None
        return self


class GetStackGroupOperationResponseStackGroupOperationOperationPreferences(TeaModel):
    def __init__(self, failure_tolerance_count=None, failure_tolerance_percentage=None, max_concurrent_count=None, max_concurrent_percentage=None, region_ids_order=None):
        self.failure_tolerance_count = failure_tolerance_count
        self.failure_tolerance_percentage = failure_tolerance_percentage
        self.max_concurrent_count = max_concurrent_count
        self.max_concurrent_percentage = max_concurrent_percentage
        self.region_ids_order = []

    def validate(self):
        self.validate_required(self.failure_tolerance_count, 'failure_tolerance_count')
        self.validate_required(self.failure_tolerance_percentage, 'failure_tolerance_percentage')
        self.validate_required(self.max_concurrent_count, 'max_concurrent_count')
        self.validate_required(self.max_concurrent_percentage, 'max_concurrent_percentage')
        self.validate_required(self.region_ids_order, 'region_ids_order')

    def to_map(self):
        result = {}
        result['FailureToleranceCount'] = self.failure_tolerance_count
        result['FailureTolerancePercentage'] = self.failure_tolerance_percentage
        result['MaxConcurrentCount'] = self.max_concurrent_count
        result['MaxConcurrentPercentage'] = self.max_concurrent_percentage
        result['RegionIdsOrder'] = []
        if self.region_ids_order is not None:
            for k in self.region_ids_order:
                result['RegionIdsOrder'].append(k)
        else:
            result['RegionIdsOrder'] = None
        return result

    def from_map(self, map={}):
        self.failure_tolerance_count = map.get('FailureToleranceCount')
        self.failure_tolerance_percentage = map.get('FailureTolerancePercentage')
        self.max_concurrent_count = map.get('MaxConcurrentCount')
        self.max_concurrent_percentage = map.get('MaxConcurrentPercentage')
        self.region_ids_order = []
        if map.get('RegionIdsOrder') is not None:
            for k in map.get('RegionIdsOrder'):
                self.region_ids_order.append(k)
        else:
            self.region_ids_order = None
        return self


class GetStackGroupOperationResponseStackGroupOperationStackGroupDriftDetectionDetail(TeaModel):
    def __init__(self, drift_detection_time=None, stack_group_drift_status=None, drift_detection_status=None, drifted_stack_instances_count=None, failed_stack_instances_count=None, cancelled_stack_instances_count=None, in_progress_stack_instances_count=None, in_sync_stack_instances_count=None, total_stack_instances_count=None):
        self.drift_detection_time = drift_detection_time
        self.stack_group_drift_status = stack_group_drift_status
        self.drift_detection_status = drift_detection_status
        self.drifted_stack_instances_count = drifted_stack_instances_count
        self.failed_stack_instances_count = failed_stack_instances_count
        self.cancelled_stack_instances_count = cancelled_stack_instances_count
        self.in_progress_stack_instances_count = in_progress_stack_instances_count
        self.in_sync_stack_instances_count = in_sync_stack_instances_count
        self.total_stack_instances_count = total_stack_instances_count

    def validate(self):
        self.validate_required(self.drift_detection_time, 'drift_detection_time')
        self.validate_required(self.stack_group_drift_status, 'stack_group_drift_status')
        self.validate_required(self.drift_detection_status, 'drift_detection_status')
        self.validate_required(self.drifted_stack_instances_count, 'drifted_stack_instances_count')
        self.validate_required(self.failed_stack_instances_count, 'failed_stack_instances_count')
        self.validate_required(self.cancelled_stack_instances_count, 'cancelled_stack_instances_count')
        self.validate_required(self.in_progress_stack_instances_count, 'in_progress_stack_instances_count')
        self.validate_required(self.in_sync_stack_instances_count, 'in_sync_stack_instances_count')
        self.validate_required(self.total_stack_instances_count, 'total_stack_instances_count')

    def to_map(self):
        result = {}
        result['DriftDetectionTime'] = self.drift_detection_time
        result['StackGroupDriftStatus'] = self.stack_group_drift_status
        result['DriftDetectionStatus'] = self.drift_detection_status
        result['DriftedStackInstancesCount'] = self.drifted_stack_instances_count
        result['FailedStackInstancesCount'] = self.failed_stack_instances_count
        result['CancelledStackInstancesCount'] = self.cancelled_stack_instances_count
        result['InProgressStackInstancesCount'] = self.in_progress_stack_instances_count
        result['InSyncStackInstancesCount'] = self.in_sync_stack_instances_count
        result['TotalStackInstancesCount'] = self.total_stack_instances_count
        return result

    def from_map(self, map={}):
        self.drift_detection_time = map.get('DriftDetectionTime')
        self.stack_group_drift_status = map.get('StackGroupDriftStatus')
        self.drift_detection_status = map.get('DriftDetectionStatus')
        self.drifted_stack_instances_count = map.get('DriftedStackInstancesCount')
        self.failed_stack_instances_count = map.get('FailedStackInstancesCount')
        self.cancelled_stack_instances_count = map.get('CancelledStackInstancesCount')
        self.in_progress_stack_instances_count = map.get('InProgressStackInstancesCount')
        self.in_sync_stack_instances_count = map.get('InSyncStackInstancesCount')
        self.total_stack_instances_count = map.get('TotalStackInstancesCount')
        return self


class GetStackGroupOperationResponseStackGroupOperation(TeaModel):
    def __init__(self, stack_group_name=None, stack_group_id=None, operation_id=None, operation_description=None, create_time=None, end_time=None, action=None, status=None, retain_stacks=None, administrator_role_name=None, execution_role_name=None, operation_preferences=None, stack_group_drift_detection_detail=None):
        self.stack_group_name = stack_group_name
        self.stack_group_id = stack_group_id
        self.operation_id = operation_id
        self.operation_description = operation_description
        self.create_time = create_time
        self.end_time = end_time
        self.action = action
        self.status = status
        self.retain_stacks = retain_stacks
        self.administrator_role_name = administrator_role_name
        self.execution_role_name = execution_role_name
        self.operation_preferences = operation_preferences
        self.stack_group_drift_detection_detail = stack_group_drift_detection_detail

    def validate(self):
        self.validate_required(self.stack_group_name, 'stack_group_name')
        self.validate_required(self.stack_group_id, 'stack_group_id')
        self.validate_required(self.operation_id, 'operation_id')
        self.validate_required(self.operation_description, 'operation_description')
        self.validate_required(self.create_time, 'create_time')
        self.validate_required(self.end_time, 'end_time')
        self.validate_required(self.action, 'action')
        self.validate_required(self.status, 'status')
        self.validate_required(self.retain_stacks, 'retain_stacks')
        self.validate_required(self.administrator_role_name, 'administrator_role_name')
        self.validate_required(self.execution_role_name, 'execution_role_name')
        self.validate_required(self.operation_preferences, 'operation_preferences')
        if self.operation_preferences:
            self.operation_preferences.validate()
        self.validate_required(self.stack_group_drift_detection_detail, 'stack_group_drift_detection_detail')
        if self.stack_group_drift_detection_detail:
            self.stack_group_drift_detection_detail.validate()

    def to_map(self):
        result = {}
        result['StackGroupName'] = self.stack_group_name
        result['StackGroupId'] = self.stack_group_id
        result['OperationId'] = self.operation_id
        result['OperationDescription'] = self.operation_description
        result['CreateTime'] = self.create_time
        result['EndTime'] = self.end_time
        result['Action'] = self.action
        result['Status'] = self.status
        result['RetainStacks'] = self.retain_stacks
        result['AdministratorRoleName'] = self.administrator_role_name
        result['ExecutionRoleName'] = self.execution_role_name
        if self.operation_preferences is not None:
            result['OperationPreferences'] = self.operation_preferences.to_map()
        else:
            result['OperationPreferences'] = None
        if self.stack_group_drift_detection_detail is not None:
            result['StackGroupDriftDetectionDetail'] = self.stack_group_drift_detection_detail.to_map()
        else:
            result['StackGroupDriftDetectionDetail'] = None
        return result

    def from_map(self, map={}):
        self.stack_group_name = map.get('StackGroupName')
        self.stack_group_id = map.get('StackGroupId')
        self.operation_id = map.get('OperationId')
        self.operation_description = map.get('OperationDescription')
        self.create_time = map.get('CreateTime')
        self.end_time = map.get('EndTime')
        self.action = map.get('Action')
        self.status = map.get('Status')
        self.retain_stacks = map.get('RetainStacks')
        self.administrator_role_name = map.get('AdministratorRoleName')
        self.execution_role_name = map.get('ExecutionRoleName')
        if map.get('OperationPreferences') is not None:
            temp_model = GetStackGroupOperationResponseStackGroupOperationOperationPreferences()
            self.operation_preferences = temp_model.from_map(map['OperationPreferences'])
        else:
            self.operation_preferences = None
        if map.get('StackGroupDriftDetectionDetail') is not None:
            temp_model = GetStackGroupOperationResponseStackGroupOperationStackGroupDriftDetectionDetail()
            self.stack_group_drift_detection_detail = temp_model.from_map(map['StackGroupDriftDetectionDetail'])
        else:
            self.stack_group_drift_detection_detail = None
        return self
class ListStackGroupsRequest(TeaModel):
    def __init__(self, region_id=None, status=None, page_size=None, page_number=None):
        self.region_id = region_id
        self.status = status
        self.page_size = page_size
        self.page_number = page_number

    def validate(self):
        self.validate_required(self.region_id, 'region_id')

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        result['Status'] = self.status
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        return result

    def from_map(self, map={}):
        self.region_id = map.get('RegionId')
        self.status = map.get('Status')
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        return self


class ListStackGroupsResponse(TeaModel):
    def __init__(self, request_id=None, page_number=None, page_size=None, total_count=None, stack_groups=None):
        self.request_id = request_id
        self.page_number = page_number
        self.page_size = page_size
        self.total_count = total_count
        self.stack_groups = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.total_count, 'total_count')
        self.validate_required(self.stack_groups, 'stack_groups')
        if self.stack_groups:
            for k in self.stack_groups:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        result['TotalCount'] = self.total_count
        result['StackGroups'] = []
        if self.stack_groups is not None:
            for k in self.stack_groups:
                result['StackGroups'].append(k.to_map() if k else None)
        else:
            result['StackGroups'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        self.total_count = map.get('TotalCount')
        self.stack_groups = []
        if map.get('StackGroups') is not None:
            for k in map.get('StackGroups'):
                temp_model = ListStackGroupsResponseStackGroups()
                temp_model = temp_model.from_map(k)
                self.stack_groups.append(temp_model)
        else:
            self.stack_groups = None
        return self


class ListStackGroupsResponseStackGroups(TeaModel):
    def __init__(self, stack_group_name=None, stack_group_id=None, status=None, description=None, drift_detection_time=None, stack_group_drift_status=None):
        self.stack_group_name = stack_group_name
        self.stack_group_id = stack_group_id
        self.status = status
        self.description = description
        self.drift_detection_time = drift_detection_time
        self.stack_group_drift_status = stack_group_drift_status

    def validate(self):
        self.validate_required(self.stack_group_name, 'stack_group_name')
        self.validate_required(self.stack_group_id, 'stack_group_id')
        self.validate_required(self.status, 'status')
        self.validate_required(self.description, 'description')
        self.validate_required(self.drift_detection_time, 'drift_detection_time')
        self.validate_required(self.stack_group_drift_status, 'stack_group_drift_status')

    def to_map(self):
        result = {}
        result['StackGroupName'] = self.stack_group_name
        result['StackGroupId'] = self.stack_group_id
        result['Status'] = self.status
        result['Description'] = self.description
        result['DriftDetectionTime'] = self.drift_detection_time
        result['StackGroupDriftStatus'] = self.stack_group_drift_status
        return result

    def from_map(self, map={}):
        self.stack_group_name = map.get('StackGroupName')
        self.stack_group_id = map.get('StackGroupId')
        self.status = map.get('Status')
        self.description = map.get('Description')
        self.drift_detection_time = map.get('DriftDetectionTime')
        self.stack_group_drift_status = map.get('StackGroupDriftStatus')
        return self
class CreateStackInstancesRequest(TeaModel):
    def __init__(self, region_id=None, stack_group_name=None, parameter_overrides=None, account_ids=None, region_ids=None, client_token=None, operation_description=None, operation_preferences=None):
        self.region_id = region_id
        self.stack_group_name = stack_group_name
        self.parameter_overrides = []
        self.account_ids = {}
        self.region_ids = {}
        self.client_token = client_token
        self.operation_description = operation_description
        self.operation_preferences = {}

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.stack_group_name, 'stack_group_name')
        if self.parameter_overrides:
            for k in self.parameter_overrides:
                if k :
                    k.validate()
        self.validate_required(self.account_ids, 'account_ids')
        self.validate_required(self.region_ids, 'region_ids')

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        result['StackGroupName'] = self.stack_group_name
        result['ParameterOverrides'] = []
        if self.parameter_overrides is not None:
            for k in self.parameter_overrides:
                result['ParameterOverrides'].append(k.to_map() if k else None)
        else:
            result['ParameterOverrides'] = None
        result['AccountIds'] = self.account_ids
        result['RegionIds'] = self.region_ids
        result['ClientToken'] = self.client_token
        result['OperationDescription'] = self.operation_description
        result['OperationPreferences'] = self.operation_preferences
        return result

    def from_map(self, map={}):
        self.region_id = map.get('RegionId')
        self.stack_group_name = map.get('StackGroupName')
        self.parameter_overrides = []
        if map.get('ParameterOverrides') is not None:
            for k in map.get('ParameterOverrides'):
                temp_model = CreateStackInstancesRequestParameterOverrides()
                temp_model = temp_model.from_map(k)
                self.parameter_overrides.append(temp_model)
        else:
            self.parameter_overrides = None
        self.account_ids = map.get('AccountIds')
        self.region_ids = map.get('RegionIds')
        self.client_token = map.get('ClientToken')
        self.operation_description = map.get('OperationDescription')
        self.operation_preferences = map.get('OperationPreferences')
        return self


class CreateStackInstancesRequestParameterOverrides(TeaModel):
    def __init__(self, parameter_value=None, parameter_key=None):
        self.parameter_value = parameter_value
        self.parameter_key = parameter_key

    def validate(self):
        self.validate_required(self.parameter_value, 'parameter_value')
        self.validate_required(self.parameter_key, 'parameter_key')

    def to_map(self):
        result = {}
        result['ParameterValue'] = self.parameter_value
        result['ParameterKey'] = self.parameter_key
        return result

    def from_map(self, map={}):
        self.parameter_value = map.get('ParameterValue')
        self.parameter_key = map.get('ParameterKey')
        return self
class CreateStackInstancesResponse(TeaModel):
    def __init__(self, request_id=None, operation_id=None):
        self.request_id = request_id
        self.operation_id = operation_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.operation_id, 'operation_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['OperationId'] = self.operation_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.operation_id = map.get('OperationId')
        return self


class CreateStackGroupRequest(TeaModel):
    def __init__(self, region_id=None, stack_group_name=None, description=None, parameters=None, template_body=None, template_url=None, client_token=None, administration_role_name=None, execution_role_name=None):
        self.region_id = region_id
        self.stack_group_name = stack_group_name
        self.description = description
        self.parameters = []
        self.template_body = template_body
        self.template_url = template_url
        self.client_token = client_token
        self.administration_role_name = administration_role_name
        self.execution_role_name = execution_role_name

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.stack_group_name, 'stack_group_name')
        if self.parameters:
            for k in self.parameters:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        result['StackGroupName'] = self.stack_group_name
        result['Description'] = self.description
        result['Parameters'] = []
        if self.parameters is not None:
            for k in self.parameters:
                result['Parameters'].append(k.to_map() if k else None)
        else:
            result['Parameters'] = None
        result['TemplateBody'] = self.template_body
        result['TemplateURL'] = self.template_url
        result['ClientToken'] = self.client_token
        result['AdministrationRoleName'] = self.administration_role_name
        result['ExecutionRoleName'] = self.execution_role_name
        return result

    def from_map(self, map={}):
        self.region_id = map.get('RegionId')
        self.stack_group_name = map.get('StackGroupName')
        self.description = map.get('Description')
        self.parameters = []
        if map.get('Parameters') is not None:
            for k in map.get('Parameters'):
                temp_model = CreateStackGroupRequestParameters()
                temp_model = temp_model.from_map(k)
                self.parameters.append(temp_model)
        else:
            self.parameters = None
        self.template_body = map.get('TemplateBody')
        self.template_url = map.get('TemplateURL')
        self.client_token = map.get('ClientToken')
        self.administration_role_name = map.get('AdministrationRoleName')
        self.execution_role_name = map.get('ExecutionRoleName')
        return self


class CreateStackGroupRequestParameters(TeaModel):
    def __init__(self, parameter_value=None, parameter_key=None):
        self.parameter_value = parameter_value
        self.parameter_key = parameter_key

    def validate(self):
        self.validate_required(self.parameter_value, 'parameter_value')
        self.validate_required(self.parameter_key, 'parameter_key')

    def to_map(self):
        result = {}
        result['ParameterValue'] = self.parameter_value
        result['ParameterKey'] = self.parameter_key
        return result

    def from_map(self, map={}):
        self.parameter_value = map.get('ParameterValue')
        self.parameter_key = map.get('ParameterKey')
        return self
class CreateStackGroupResponse(TeaModel):
    def __init__(self, request_id=None, stack_group_id=None):
        self.request_id = request_id
        self.stack_group_id = stack_group_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.stack_group_id, 'stack_group_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['StackGroupId'] = self.stack_group_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.stack_group_id = map.get('StackGroupId')
        return self


class GetStackInstanceRequest(TeaModel):
    def __init__(self, region_id=None, stack_group_name=None, stack_instance_account_id=None, stack_instance_region_id=None):
        self.region_id = region_id
        self.stack_group_name = stack_group_name
        self.stack_instance_account_id = stack_instance_account_id
        self.stack_instance_region_id = stack_instance_region_id

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.stack_group_name, 'stack_group_name')
        self.validate_required(self.stack_instance_account_id, 'stack_instance_account_id')
        self.validate_required(self.stack_instance_region_id, 'stack_instance_region_id')

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        result['StackGroupName'] = self.stack_group_name
        result['StackInstanceAccountId'] = self.stack_instance_account_id
        result['StackInstanceRegionId'] = self.stack_instance_region_id
        return result

    def from_map(self, map={}):
        self.region_id = map.get('RegionId')
        self.stack_group_name = map.get('StackGroupName')
        self.stack_instance_account_id = map.get('StackInstanceAccountId')
        self.stack_instance_region_id = map.get('StackInstanceRegionId')
        return self


class GetStackInstanceResponse(TeaModel):
    def __init__(self, request_id=None, stack_instance=None):
        self.request_id = request_id
        self.stack_instance = stack_instance

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.stack_instance, 'stack_instance')
        if self.stack_instance:
            self.stack_instance.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.stack_instance is not None:
            result['StackInstance'] = self.stack_instance.to_map()
        else:
            result['StackInstance'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('StackInstance') is not None:
            temp_model = GetStackInstanceResponseStackInstance()
            self.stack_instance = temp_model.from_map(map['StackInstance'])
        else:
            self.stack_instance = None
        return self


class GetStackInstanceResponseStackInstanceParameterOverrides(TeaModel):
    def __init__(self, parameter_key=None, parameter_value=None):
        self.parameter_key = parameter_key
        self.parameter_value = parameter_value

    def validate(self):
        self.validate_required(self.parameter_key, 'parameter_key')
        self.validate_required(self.parameter_value, 'parameter_value')

    def to_map(self):
        result = {}
        result['ParameterKey'] = self.parameter_key
        result['ParameterValue'] = self.parameter_value
        return result

    def from_map(self, map={}):
        self.parameter_key = map.get('ParameterKey')
        self.parameter_value = map.get('ParameterValue')
        return self


class GetStackInstanceResponseStackInstance(TeaModel):
    def __init__(self, stack_group_name=None, stack_group_id=None, stack_id=None, account_id=None, region_id=None, status=None, status_reason=None, stack_drift_status=None, drift_detection_time=None, parameter_overrides=None):
        self.stack_group_name = stack_group_name
        self.stack_group_id = stack_group_id
        self.stack_id = stack_id
        self.account_id = account_id
        self.region_id = region_id
        self.status = status
        self.status_reason = status_reason
        self.stack_drift_status = stack_drift_status
        self.drift_detection_time = drift_detection_time
        self.parameter_overrides = []

    def validate(self):
        self.validate_required(self.stack_group_name, 'stack_group_name')
        self.validate_required(self.stack_group_id, 'stack_group_id')
        self.validate_required(self.stack_id, 'stack_id')
        self.validate_required(self.account_id, 'account_id')
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.status, 'status')
        self.validate_required(self.status_reason, 'status_reason')
        self.validate_required(self.stack_drift_status, 'stack_drift_status')
        self.validate_required(self.drift_detection_time, 'drift_detection_time')
        self.validate_required(self.parameter_overrides, 'parameter_overrides')
        if self.parameter_overrides:
            for k in self.parameter_overrides:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['StackGroupName'] = self.stack_group_name
        result['StackGroupId'] = self.stack_group_id
        result['StackId'] = self.stack_id
        result['AccountId'] = self.account_id
        result['RegionId'] = self.region_id
        result['Status'] = self.status
        result['StatusReason'] = self.status_reason
        result['StackDriftStatus'] = self.stack_drift_status
        result['DriftDetectionTime'] = self.drift_detection_time
        result['ParameterOverrides'] = []
        if self.parameter_overrides is not None:
            for k in self.parameter_overrides:
                result['ParameterOverrides'].append(k.to_map() if k else None)
        else:
            result['ParameterOverrides'] = None
        return result

    def from_map(self, map={}):
        self.stack_group_name = map.get('StackGroupName')
        self.stack_group_id = map.get('StackGroupId')
        self.stack_id = map.get('StackId')
        self.account_id = map.get('AccountId')
        self.region_id = map.get('RegionId')
        self.status = map.get('Status')
        self.status_reason = map.get('StatusReason')
        self.stack_drift_status = map.get('StackDriftStatus')
        self.drift_detection_time = map.get('DriftDetectionTime')
        self.parameter_overrides = []
        if map.get('ParameterOverrides') is not None:
            for k in map.get('ParameterOverrides'):
                temp_model = GetStackInstanceResponseStackInstanceParameterOverrides()
                temp_model = temp_model.from_map(k)
                self.parameter_overrides.append(temp_model)
        else:
            self.parameter_overrides = None
        return self
class UpdateStackGroupRequest(TeaModel):
    def __init__(self, region_id=None, stack_group_name=None, description=None, parameters=None, account_ids=None, region_ids=None, template_body=None, template_url=None, client_token=None, operation_description=None, operation_preferences=None, administration_role_name=None, execution_role_name=None):
        self.region_id = region_id
        self.stack_group_name = stack_group_name
        self.description = description
        self.parameters = []
        self.account_ids = {}
        self.region_ids = {}
        self.template_body = template_body
        self.template_url = template_url
        self.client_token = client_token
        self.operation_description = operation_description
        self.operation_preferences = {}
        self.administration_role_name = administration_role_name
        self.execution_role_name = execution_role_name

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.stack_group_name, 'stack_group_name')
        if self.parameters:
            for k in self.parameters:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        result['StackGroupName'] = self.stack_group_name
        result['Description'] = self.description
        result['Parameters'] = []
        if self.parameters is not None:
            for k in self.parameters:
                result['Parameters'].append(k.to_map() if k else None)
        else:
            result['Parameters'] = None
        result['AccountIds'] = self.account_ids
        result['RegionIds'] = self.region_ids
        result['TemplateBody'] = self.template_body
        result['TemplateURL'] = self.template_url
        result['ClientToken'] = self.client_token
        result['OperationDescription'] = self.operation_description
        result['OperationPreferences'] = self.operation_preferences
        result['AdministrationRoleName'] = self.administration_role_name
        result['ExecutionRoleName'] = self.execution_role_name
        return result

    def from_map(self, map={}):
        self.region_id = map.get('RegionId')
        self.stack_group_name = map.get('StackGroupName')
        self.description = map.get('Description')
        self.parameters = []
        if map.get('Parameters') is not None:
            for k in map.get('Parameters'):
                temp_model = UpdateStackGroupRequestParameters()
                temp_model = temp_model.from_map(k)
                self.parameters.append(temp_model)
        else:
            self.parameters = None
        self.account_ids = map.get('AccountIds')
        self.region_ids = map.get('RegionIds')
        self.template_body = map.get('TemplateBody')
        self.template_url = map.get('TemplateURL')
        self.client_token = map.get('ClientToken')
        self.operation_description = map.get('OperationDescription')
        self.operation_preferences = map.get('OperationPreferences')
        self.administration_role_name = map.get('AdministrationRoleName')
        self.execution_role_name = map.get('ExecutionRoleName')
        return self


class UpdateStackGroupRequestParameters(TeaModel):
    def __init__(self, parameter_value=None, parameter_key=None):
        self.parameter_value = parameter_value
        self.parameter_key = parameter_key

    def validate(self):
        self.validate_required(self.parameter_value, 'parameter_value')
        self.validate_required(self.parameter_key, 'parameter_key')

    def to_map(self):
        result = {}
        result['ParameterValue'] = self.parameter_value
        result['ParameterKey'] = self.parameter_key
        return result

    def from_map(self, map={}):
        self.parameter_value = map.get('ParameterValue')
        self.parameter_key = map.get('ParameterKey')
        return self
class UpdateStackGroupResponse(TeaModel):
    def __init__(self, request_id=None, operation_id=None):
        self.request_id = request_id
        self.operation_id = operation_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.operation_id, 'operation_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['OperationId'] = self.operation_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.operation_id = map.get('OperationId')
        return self


class ListStackInstancesRequest(TeaModel):
    def __init__(self, region_id=None, stack_group_name=None, stack_instance_account_id=None, stack_instance_region_id=None, page_size=None, page_number=None):
        self.region_id = region_id
        self.stack_group_name = stack_group_name
        self.stack_instance_account_id = stack_instance_account_id
        self.stack_instance_region_id = stack_instance_region_id
        self.page_size = page_size
        self.page_number = page_number

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.stack_group_name, 'stack_group_name')

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        result['StackGroupName'] = self.stack_group_name
        result['StackInstanceAccountId'] = self.stack_instance_account_id
        result['StackInstanceRegionId'] = self.stack_instance_region_id
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        return result

    def from_map(self, map={}):
        self.region_id = map.get('RegionId')
        self.stack_group_name = map.get('StackGroupName')
        self.stack_instance_account_id = map.get('StackInstanceAccountId')
        self.stack_instance_region_id = map.get('StackInstanceRegionId')
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        return self


class ListStackInstancesResponse(TeaModel):
    def __init__(self, request_id=None, page_number=None, page_size=None, total_count=None, stack_instances=None):
        self.request_id = request_id
        self.page_number = page_number
        self.page_size = page_size
        self.total_count = total_count
        self.stack_instances = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.total_count, 'total_count')
        self.validate_required(self.stack_instances, 'stack_instances')
        if self.stack_instances:
            for k in self.stack_instances:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        result['TotalCount'] = self.total_count
        result['StackInstances'] = []
        if self.stack_instances is not None:
            for k in self.stack_instances:
                result['StackInstances'].append(k.to_map() if k else None)
        else:
            result['StackInstances'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        self.total_count = map.get('TotalCount')
        self.stack_instances = []
        if map.get('StackInstances') is not None:
            for k in map.get('StackInstances'):
                temp_model = ListStackInstancesResponseStackInstances()
                temp_model = temp_model.from_map(k)
                self.stack_instances.append(temp_model)
        else:
            self.stack_instances = None
        return self


class ListStackInstancesResponseStackInstances(TeaModel):
    def __init__(self, stack_group_name=None, stack_group_id=None, stack_id=None, account_id=None, region_id=None, status=None, status_reason=None, stack_drift_status=None, drift_detection_time=None):
        self.stack_group_name = stack_group_name
        self.stack_group_id = stack_group_id
        self.stack_id = stack_id
        self.account_id = account_id
        self.region_id = region_id
        self.status = status
        self.status_reason = status_reason
        self.stack_drift_status = stack_drift_status
        self.drift_detection_time = drift_detection_time

    def validate(self):
        self.validate_required(self.stack_group_name, 'stack_group_name')
        self.validate_required(self.stack_group_id, 'stack_group_id')
        self.validate_required(self.stack_id, 'stack_id')
        self.validate_required(self.account_id, 'account_id')
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.status, 'status')
        self.validate_required(self.status_reason, 'status_reason')
        self.validate_required(self.stack_drift_status, 'stack_drift_status')
        self.validate_required(self.drift_detection_time, 'drift_detection_time')

    def to_map(self):
        result = {}
        result['StackGroupName'] = self.stack_group_name
        result['StackGroupId'] = self.stack_group_id
        result['StackId'] = self.stack_id
        result['AccountId'] = self.account_id
        result['RegionId'] = self.region_id
        result['Status'] = self.status
        result['StatusReason'] = self.status_reason
        result['StackDriftStatus'] = self.stack_drift_status
        result['DriftDetectionTime'] = self.drift_detection_time
        return result

    def from_map(self, map={}):
        self.stack_group_name = map.get('StackGroupName')
        self.stack_group_id = map.get('StackGroupId')
        self.stack_id = map.get('StackId')
        self.account_id = map.get('AccountId')
        self.region_id = map.get('RegionId')
        self.status = map.get('Status')
        self.status_reason = map.get('StatusReason')
        self.stack_drift_status = map.get('StackDriftStatus')
        self.drift_detection_time = map.get('DriftDetectionTime')
        return self
class ListStackGroupOperationResultsRequest(TeaModel):
    def __init__(self, region_id=None, operation_id=None, page_size=None, page_number=None):
        self.region_id = region_id
        self.operation_id = operation_id
        self.page_size = page_size
        self.page_number = page_number

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.operation_id, 'operation_id')

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        result['OperationId'] = self.operation_id
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        return result

    def from_map(self, map={}):
        self.region_id = map.get('RegionId')
        self.operation_id = map.get('OperationId')
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        return self


class ListStackGroupOperationResultsResponse(TeaModel):
    def __init__(self, request_id=None, page_number=None, page_size=None, total_count=None, stack_group_operation_results=None):
        self.request_id = request_id
        self.page_number = page_number
        self.page_size = page_size
        self.total_count = total_count
        self.stack_group_operation_results = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.total_count, 'total_count')
        self.validate_required(self.stack_group_operation_results, 'stack_group_operation_results')
        if self.stack_group_operation_results:
            for k in self.stack_group_operation_results:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        result['TotalCount'] = self.total_count
        result['StackGroupOperationResults'] = []
        if self.stack_group_operation_results is not None:
            for k in self.stack_group_operation_results:
                result['StackGroupOperationResults'].append(k.to_map() if k else None)
        else:
            result['StackGroupOperationResults'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        self.total_count = map.get('TotalCount')
        self.stack_group_operation_results = []
        if map.get('StackGroupOperationResults') is not None:
            for k in map.get('StackGroupOperationResults'):
                temp_model = ListStackGroupOperationResultsResponseStackGroupOperationResults()
                temp_model = temp_model.from_map(k)
                self.stack_group_operation_results.append(temp_model)
        else:
            self.stack_group_operation_results = None
        return self


class ListStackGroupOperationResultsResponseStackGroupOperationResults(TeaModel):
    def __init__(self, account_id=None, region_id=None, status=None, status_reason=None):
        self.account_id = account_id
        self.region_id = region_id
        self.status = status
        self.status_reason = status_reason

    def validate(self):
        self.validate_required(self.account_id, 'account_id')
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.status, 'status')
        self.validate_required(self.status_reason, 'status_reason')

    def to_map(self):
        result = {}
        result['AccountId'] = self.account_id
        result['RegionId'] = self.region_id
        result['Status'] = self.status
        result['StatusReason'] = self.status_reason
        return result

    def from_map(self, map={}):
        self.account_id = map.get('AccountId')
        self.region_id = map.get('RegionId')
        self.status = map.get('Status')
        self.status_reason = map.get('StatusReason')
        return self
class StopStackGroupOperationRequest(TeaModel):
    def __init__(self, region_id=None, operation_id=None):
        self.region_id = region_id
        self.operation_id = operation_id

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.operation_id, 'operation_id')

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        result['OperationId'] = self.operation_id
        return result

    def from_map(self, map={}):
        self.region_id = map.get('RegionId')
        self.operation_id = map.get('OperationId')
        return self


class StopStackGroupOperationResponse(TeaModel):
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


class DeleteStackGroupRequest(TeaModel):
    def __init__(self, region_id=None, stack_group_name=None):
        self.region_id = region_id
        self.stack_group_name = stack_group_name

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.stack_group_name, 'stack_group_name')

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        result['StackGroupName'] = self.stack_group_name
        return result

    def from_map(self, map={}):
        self.region_id = map.get('RegionId')
        self.stack_group_name = map.get('StackGroupName')
        return self


class DeleteStackGroupResponse(TeaModel):
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


class DeleteStackInstancesRequest(TeaModel):
    def __init__(self, region_id=None, stack_group_name=None, account_ids=None, region_ids=None, retain_stacks=None, client_token=None, operation_description=None, operation_preferences=None):
        self.region_id = region_id
        self.stack_group_name = stack_group_name
        self.account_ids = {}
        self.region_ids = {}
        self.retain_stacks = retain_stacks
        self.client_token = client_token
        self.operation_description = operation_description
        self.operation_preferences = {}

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.stack_group_name, 'stack_group_name')
        self.validate_required(self.account_ids, 'account_ids')
        self.validate_required(self.region_ids, 'region_ids')
        self.validate_required(self.retain_stacks, 'retain_stacks')

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        result['StackGroupName'] = self.stack_group_name
        result['AccountIds'] = self.account_ids
        result['RegionIds'] = self.region_ids
        result['RetainStacks'] = self.retain_stacks
        result['ClientToken'] = self.client_token
        result['OperationDescription'] = self.operation_description
        result['OperationPreferences'] = self.operation_preferences
        return result

    def from_map(self, map={}):
        self.region_id = map.get('RegionId')
        self.stack_group_name = map.get('StackGroupName')
        self.account_ids = map.get('AccountIds')
        self.region_ids = map.get('RegionIds')
        self.retain_stacks = map.get('RetainStacks')
        self.client_token = map.get('ClientToken')
        self.operation_description = map.get('OperationDescription')
        self.operation_preferences = map.get('OperationPreferences')
        return self


class DeleteStackInstancesResponse(TeaModel):
    def __init__(self, request_id=None, operation_id=None):
        self.request_id = request_id
        self.operation_id = operation_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.operation_id, 'operation_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['OperationId'] = self.operation_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.operation_id = map.get('OperationId')
        return self


class ListTagResourcesRequest(TeaModel):
    def __init__(self, region_id=None, resource_id=None, resource_type=None, tag=None, next_token=None):
        self.region_id = region_id
        self.resource_id = []
        self.resource_type = resource_type
        self.tag = []
        self.next_token = next_token

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.resource_type, 'resource_type')
        if self.tag:
            for k in self.tag:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        result['ResourceId'] = []
        if self.resource_id is not None:
            for k in self.resource_id:
                result['ResourceId'].append(k)
        else:
            result['ResourceId'] = None
        result['ResourceType'] = self.resource_type
        result['Tag'] = []
        if self.tag is not None:
            for k in self.tag:
                result['Tag'].append(k.to_map() if k else None)
        else:
            result['Tag'] = None
        result['NextToken'] = self.next_token
        return result

    def from_map(self, map={}):
        self.region_id = map.get('RegionId')
        self.resource_id = []
        if map.get('ResourceId') is not None:
            for k in map.get('ResourceId'):
                self.resource_id.append(k)
        else:
            self.resource_id = None
        self.resource_type = map.get('ResourceType')
        self.tag = []
        if map.get('Tag') is not None:
            for k in map.get('Tag'):
                temp_model = ListTagResourcesRequestTag()
                temp_model = temp_model.from_map(k)
                self.tag.append(temp_model)
        else:
            self.tag = None
        self.next_token = map.get('NextToken')
        return self


class ListTagResourcesRequestTag(TeaModel):
    def __init__(self, key=None, value=None):
        self.key = key
        self.value = value

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Key'] = self.key
        result['Value'] = self.value
        return result

    def from_map(self, map={}):
        self.key = map.get('Key')
        self.value = map.get('Value')
        return self
class ListTagResourcesResponse(TeaModel):
    def __init__(self, request_id=None, next_token=None, tag_resources=None):
        self.request_id = request_id
        self.next_token = next_token
        self.tag_resources = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.next_token, 'next_token')
        self.validate_required(self.tag_resources, 'tag_resources')
        if self.tag_resources:
            for k in self.tag_resources:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['NextToken'] = self.next_token
        result['TagResources'] = []
        if self.tag_resources is not None:
            for k in self.tag_resources:
                result['TagResources'].append(k.to_map() if k else None)
        else:
            result['TagResources'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.next_token = map.get('NextToken')
        self.tag_resources = []
        if map.get('TagResources') is not None:
            for k in map.get('TagResources'):
                temp_model = ListTagResourcesResponseTagResources()
                temp_model = temp_model.from_map(k)
                self.tag_resources.append(temp_model)
        else:
            self.tag_resources = None
        return self


class ListTagResourcesResponseTagResources(TeaModel):
    def __init__(self, resource_id=None, resource_type=None, tag_key=None, tag_value=None):
        self.resource_id = resource_id
        self.resource_type = resource_type
        self.tag_key = tag_key
        self.tag_value = tag_value

    def validate(self):
        self.validate_required(self.resource_id, 'resource_id')
        self.validate_required(self.resource_type, 'resource_type')
        self.validate_required(self.tag_key, 'tag_key')
        self.validate_required(self.tag_value, 'tag_value')

    def to_map(self):
        result = {}
        result['ResourceId'] = self.resource_id
        result['ResourceType'] = self.resource_type
        result['TagKey'] = self.tag_key
        result['TagValue'] = self.tag_value
        return result

    def from_map(self, map={}):
        self.resource_id = map.get('ResourceId')
        self.resource_type = map.get('ResourceType')
        self.tag_key = map.get('TagKey')
        self.tag_value = map.get('TagValue')
        return self
class UntagResourcesRequest(TeaModel):
    def __init__(self, region_id=None, resource_id=None, resource_type=None, tag_key=None, all=None):
        self.region_id = region_id
        self.resource_id = []
        self.resource_type = resource_type
        self.tag_key = []
        self.all = all

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.resource_id, 'resource_id')
        self.validate_required(self.resource_type, 'resource_type')

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        result['ResourceId'] = []
        if self.resource_id is not None:
            for k in self.resource_id:
                result['ResourceId'].append(k)
        else:
            result['ResourceId'] = None
        result['ResourceType'] = self.resource_type
        result['TagKey'] = []
        if self.tag_key is not None:
            for k in self.tag_key:
                result['TagKey'].append(k)
        else:
            result['TagKey'] = None
        result['All'] = self.all
        return result

    def from_map(self, map={}):
        self.region_id = map.get('RegionId')
        self.resource_id = []
        if map.get('ResourceId') is not None:
            for k in map.get('ResourceId'):
                self.resource_id.append(k)
        else:
            self.resource_id = None
        self.resource_type = map.get('ResourceType')
        self.tag_key = []
        if map.get('TagKey') is not None:
            for k in map.get('TagKey'):
                self.tag_key.append(k)
        else:
            self.tag_key = None
        self.all = map.get('All')
        return self


class UntagResourcesResponse(TeaModel):
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


class TagResourcesRequest(TeaModel):
    def __init__(self, region_id=None, resource_id=None, resource_type=None, tag=None):
        self.region_id = region_id
        self.resource_id = []
        self.resource_type = resource_type
        self.tag = []

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.resource_id, 'resource_id')
        self.validate_required(self.resource_type, 'resource_type')
        self.validate_required(self.tag, 'tag')
        if self.tag:
            for k in self.tag:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        result['ResourceId'] = []
        if self.resource_id is not None:
            for k in self.resource_id:
                result['ResourceId'].append(k)
        else:
            result['ResourceId'] = None
        result['ResourceType'] = self.resource_type
        result['Tag'] = []
        if self.tag is not None:
            for k in self.tag:
                result['Tag'].append(k.to_map() if k else None)
        else:
            result['Tag'] = None
        return result

    def from_map(self, map={}):
        self.region_id = map.get('RegionId')
        self.resource_id = []
        if map.get('ResourceId') is not None:
            for k in map.get('ResourceId'):
                self.resource_id.append(k)
        else:
            self.resource_id = None
        self.resource_type = map.get('ResourceType')
        self.tag = []
        if map.get('Tag') is not None:
            for k in map.get('Tag'):
                temp_model = TagResourcesRequestTag()
                temp_model = temp_model.from_map(k)
                self.tag.append(temp_model)
        else:
            self.tag = None
        return self


class TagResourcesRequestTag(TeaModel):
    def __init__(self, key=None, value=None):
        self.key = key
        self.value = value

    def validate(self):
        self.validate_required(self.key, 'key')
        self.validate_required(self.value, 'value')

    def to_map(self):
        result = {}
        result['Key'] = self.key
        result['Value'] = self.value
        return result

    def from_map(self, map={}):
        self.key = map.get('Key')
        self.value = map.get('Value')
        return self
class TagResourcesResponse(TeaModel):
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


class DeleteTemplateRequest(TeaModel):
    def __init__(self, template_id=None):
        self.template_id = template_id

    def validate(self):
        self.validate_required(self.template_id, 'template_id')

    def to_map(self):
        result = {}
        result['TemplateId'] = self.template_id
        return result

    def from_map(self, map={}):
        self.template_id = map.get('TemplateId')
        return self


class DeleteTemplateResponse(TeaModel):
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


class UpdateTemplateRequest(TeaModel):
    def __init__(self, template_url=None, template_name=None, description=None, template_body=None, template_id=None):
        self.template_url = template_url
        self.template_name = template_name
        self.description = description
        self.template_body = template_body
        self.template_id = template_id

    def validate(self):
        self.validate_required(self.template_id, 'template_id')

    def to_map(self):
        result = {}
        result['TemplateURL'] = self.template_url
        result['TemplateName'] = self.template_name
        result['Description'] = self.description
        result['TemplateBody'] = self.template_body
        result['TemplateId'] = self.template_id
        return result

    def from_map(self, map={}):
        self.template_url = map.get('TemplateURL')
        self.template_name = map.get('TemplateName')
        self.description = map.get('Description')
        self.template_body = map.get('TemplateBody')
        self.template_id = map.get('TemplateId')
        return self


class UpdateTemplateResponse(TeaModel):
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


class ListTemplatesRequest(TeaModel):
    def __init__(self, page_number=None, page_size=None, template_name=None, tag=None):
        self.page_number = page_number
        self.page_size = page_size
        self.template_name = template_name
        self.tag = []

    def validate(self):
        if self.tag:
            for k in self.tag:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        result['TemplateName'] = self.template_name
        result['Tag'] = []
        if self.tag is not None:
            for k in self.tag:
                result['Tag'].append(k.to_map() if k else None)
        else:
            result['Tag'] = None
        return result

    def from_map(self, map={}):
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        self.template_name = map.get('TemplateName')
        self.tag = []
        if map.get('Tag') is not None:
            for k in map.get('Tag'):
                temp_model = ListTemplatesRequestTag()
                temp_model = temp_model.from_map(k)
                self.tag.append(temp_model)
        else:
            self.tag = None
        return self


class ListTemplatesRequestTag(TeaModel):
    def __init__(self, key=None, value=None):
        self.key = key
        self.value = value

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Key'] = self.key
        result['Value'] = self.value
        return result

    def from_map(self, map={}):
        self.key = map.get('Key')
        self.value = map.get('Value')
        return self
class ListTemplatesResponse(TeaModel):
    def __init__(self, page_number=None, page_size=None, request_id=None, total_count=None, templates=None):
        self.page_number = page_number
        self.page_size = page_size
        self.request_id = request_id
        self.total_count = total_count
        self.templates = []

    def validate(self):
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.total_count, 'total_count')
        self.validate_required(self.templates, 'templates')
        if self.templates:
            for k in self.templates:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        result['RequestId'] = self.request_id
        result['TotalCount'] = self.total_count
        result['Templates'] = []
        if self.templates is not None:
            for k in self.templates:
                result['Templates'].append(k.to_map() if k else None)
        else:
            result['Templates'] = None
        return result

    def from_map(self, map={}):
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        self.request_id = map.get('RequestId')
        self.total_count = map.get('TotalCount')
        self.templates = []
        if map.get('Templates') is not None:
            for k in map.get('Templates'):
                temp_model = ListTemplatesResponseTemplates()
                temp_model = temp_model.from_map(k)
                self.templates.append(temp_model)
        else:
            self.templates = None
        return self


class ListTemplatesResponseTemplates(TeaModel):
    def __init__(self, create_time=None, description=None, template_id=None, template_name=None, update_time=None):
        self.create_time = create_time
        self.description = description
        self.template_id = template_id
        self.template_name = template_name
        self.update_time = update_time

    def validate(self):
        self.validate_required(self.create_time, 'create_time')
        self.validate_required(self.description, 'description')
        self.validate_required(self.template_id, 'template_id')
        self.validate_required(self.template_name, 'template_name')
        self.validate_required(self.update_time, 'update_time')

    def to_map(self):
        result = {}
        result['CreateTime'] = self.create_time
        result['Description'] = self.description
        result['TemplateId'] = self.template_id
        result['TemplateName'] = self.template_name
        result['UpdateTime'] = self.update_time
        return result

    def from_map(self, map={}):
        self.create_time = map.get('CreateTime')
        self.description = map.get('Description')
        self.template_id = map.get('TemplateId')
        self.template_name = map.get('TemplateName')
        self.update_time = map.get('UpdateTime')
        return self
class CreateTemplateRequest(TeaModel):
    def __init__(self, template_url=None, description=None, template_body=None, template_name=None):
        self.template_url = template_url
        self.description = description
        self.template_body = template_body
        self.template_name = template_name

    def validate(self):
        self.validate_required(self.template_name, 'template_name')

    def to_map(self):
        result = {}
        result['TemplateURL'] = self.template_url
        result['Description'] = self.description
        result['TemplateBody'] = self.template_body
        result['TemplateName'] = self.template_name
        return result

    def from_map(self, map={}):
        self.template_url = map.get('TemplateURL')
        self.description = map.get('Description')
        self.template_body = map.get('TemplateBody')
        self.template_name = map.get('TemplateName')
        return self


class CreateTemplateResponse(TeaModel):
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


class CreateStackRequest(TeaModel):
    def __init__(self, disable_rollback=None, template_body=None, parameters=None, stack_policy_url=None, timeout_in_minutes=None, stack_policy_body=None, stack_name=None, region_id=None, client_token=None, template_url=None, notification_urls=None, ram_role_name=None, deletion_protection=None):
        self.disable_rollback = disable_rollback
        self.template_body = template_body
        self.parameters = []
        self.stack_policy_url = stack_policy_url
        self.timeout_in_minutes = timeout_in_minutes
        self.stack_policy_body = stack_policy_body
        self.stack_name = stack_name
        self.region_id = region_id
        self.client_token = client_token
        self.template_url = template_url
        self.notification_urls = []
        self.ram_role_name = ram_role_name
        self.deletion_protection = deletion_protection

    def validate(self):
        if self.parameters:
            for k in self.parameters:
                if k :
                    k.validate()
        self.validate_required(self.stack_name, 'stack_name')
        self.validate_required(self.region_id, 'region_id')

    def to_map(self):
        result = {}
        result['DisableRollback'] = self.disable_rollback
        result['TemplateBody'] = self.template_body
        result['Parameters'] = []
        if self.parameters is not None:
            for k in self.parameters:
                result['Parameters'].append(k.to_map() if k else None)
        else:
            result['Parameters'] = None
        result['StackPolicyURL'] = self.stack_policy_url
        result['TimeoutInMinutes'] = self.timeout_in_minutes
        result['StackPolicyBody'] = self.stack_policy_body
        result['StackName'] = self.stack_name
        result['RegionId'] = self.region_id
        result['ClientToken'] = self.client_token
        result['TemplateURL'] = self.template_url
        result['NotificationURLs'] = []
        if self.notification_urls is not None:
            for k in self.notification_urls:
                result['NotificationURLs'].append(k)
        else:
            result['NotificationURLs'] = None
        result['RamRoleName'] = self.ram_role_name
        result['DeletionProtection'] = self.deletion_protection
        return result

    def from_map(self, map={}):
        self.disable_rollback = map.get('DisableRollback')
        self.template_body = map.get('TemplateBody')
        self.parameters = []
        if map.get('Parameters') is not None:
            for k in map.get('Parameters'):
                temp_model = CreateStackRequestParameters()
                temp_model = temp_model.from_map(k)
                self.parameters.append(temp_model)
        else:
            self.parameters = None
        self.stack_policy_url = map.get('StackPolicyURL')
        self.timeout_in_minutes = map.get('TimeoutInMinutes')
        self.stack_policy_body = map.get('StackPolicyBody')
        self.stack_name = map.get('StackName')
        self.region_id = map.get('RegionId')
        self.client_token = map.get('ClientToken')
        self.template_url = map.get('TemplateURL')
        self.notification_urls = []
        if map.get('NotificationURLs') is not None:
            for k in map.get('NotificationURLs'):
                self.notification_urls.append(k)
        else:
            self.notification_urls = None
        self.ram_role_name = map.get('RamRoleName')
        self.deletion_protection = map.get('DeletionProtection')
        return self


class CreateStackRequestParameters(TeaModel):
    def __init__(self, parameter_value=None, parameter_key=None):
        self.parameter_value = parameter_value
        self.parameter_key = parameter_key

    def validate(self):
        self.validate_required(self.parameter_value, 'parameter_value')
        self.validate_required(self.parameter_key, 'parameter_key')

    def to_map(self):
        result = {}
        result['ParameterValue'] = self.parameter_value
        result['ParameterKey'] = self.parameter_key
        return result

    def from_map(self, map={}):
        self.parameter_value = map.get('ParameterValue')
        self.parameter_key = map.get('ParameterKey')
        return self
class CreateStackResponse(TeaModel):
    def __init__(self, request_id=None, stack_id=None):
        self.request_id = request_id
        self.stack_id = stack_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.stack_id, 'stack_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['StackId'] = self.stack_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.stack_id = map.get('StackId')
        return self


class GetStackRequest(TeaModel):
    def __init__(self, stack_id=None, region_id=None, client_token=None):
        self.stack_id = stack_id
        self.region_id = region_id
        self.client_token = client_token

    def validate(self):
        self.validate_required(self.stack_id, 'stack_id')
        self.validate_required(self.region_id, 'region_id')

    def to_map(self):
        result = {}
        result['StackId'] = self.stack_id
        result['RegionId'] = self.region_id
        result['ClientToken'] = self.client_token
        return result

    def from_map(self, map={}):
        self.stack_id = map.get('StackId')
        self.region_id = map.get('RegionId')
        self.client_token = map.get('ClientToken')
        return self


class GetStackResponse(TeaModel):
    def __init__(self, create_time=None, description=None, disable_rollback=None, region_id=None, request_id=None, stack_id=None, stack_name=None, status=None, status_reason=None, template_description=None, timeout_in_minutes=None, update_time=None, parent_stack_id=None, stack_drift_status=None, drift_detection_time=None, ram_role_name=None, deletion_protection=None, root_stack_id=None, stack_type=None, parameters=None, outputs=None, notification_urls=None):
        self.create_time = create_time
        self.description = description
        self.disable_rollback = disable_rollback
        self.region_id = region_id
        self.request_id = request_id
        self.stack_id = stack_id
        self.stack_name = stack_name
        self.status = status
        self.status_reason = status_reason
        self.template_description = template_description
        self.timeout_in_minutes = timeout_in_minutes
        self.update_time = update_time
        self.parent_stack_id = parent_stack_id
        self.stack_drift_status = stack_drift_status
        self.drift_detection_time = drift_detection_time
        self.ram_role_name = ram_role_name
        self.deletion_protection = deletion_protection
        self.root_stack_id = root_stack_id
        self.stack_type = stack_type
        self.parameters = []
        self.outputs = []
        self.notification_urls = []

    def validate(self):
        self.validate_required(self.create_time, 'create_time')
        self.validate_required(self.description, 'description')
        self.validate_required(self.disable_rollback, 'disable_rollback')
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.stack_id, 'stack_id')
        self.validate_required(self.stack_name, 'stack_name')
        self.validate_required(self.status, 'status')
        self.validate_required(self.status_reason, 'status_reason')
        self.validate_required(self.template_description, 'template_description')
        self.validate_required(self.timeout_in_minutes, 'timeout_in_minutes')
        self.validate_required(self.update_time, 'update_time')
        self.validate_required(self.parent_stack_id, 'parent_stack_id')
        self.validate_required(self.stack_drift_status, 'stack_drift_status')
        self.validate_required(self.drift_detection_time, 'drift_detection_time')
        self.validate_required(self.ram_role_name, 'ram_role_name')
        self.validate_required(self.deletion_protection, 'deletion_protection')
        self.validate_required(self.root_stack_id, 'root_stack_id')
        self.validate_required(self.stack_type, 'stack_type')
        self.validate_required(self.parameters, 'parameters')
        if self.parameters:
            for k in self.parameters:
                if k :
                    k.validate()
        self.validate_required(self.outputs, 'outputs')
        if self.outputs:
            for k in self.outputs:
                if k :
                    k.validate()
        self.validate_required(self.notification_urls, 'notification_urls')

    def to_map(self):
        result = {}
        result['CreateTime'] = self.create_time
        result['Description'] = self.description
        result['DisableRollback'] = self.disable_rollback
        result['RegionId'] = self.region_id
        result['RequestId'] = self.request_id
        result['StackId'] = self.stack_id
        result['StackName'] = self.stack_name
        result['Status'] = self.status
        result['StatusReason'] = self.status_reason
        result['TemplateDescription'] = self.template_description
        result['TimeoutInMinutes'] = self.timeout_in_minutes
        result['UpdateTime'] = self.update_time
        result['ParentStackId'] = self.parent_stack_id
        result['StackDriftStatus'] = self.stack_drift_status
        result['DriftDetectionTime'] = self.drift_detection_time
        result['RamRoleName'] = self.ram_role_name
        result['DeletionProtection'] = self.deletion_protection
        result['RootStackId'] = self.root_stack_id
        result['StackType'] = self.stack_type
        result['Parameters'] = []
        if self.parameters is not None:
            for k in self.parameters:
                result['Parameters'].append(k.to_map() if k else None)
        else:
            result['Parameters'] = None
        result['Outputs'] = []
        if self.outputs is not None:
            for k in self.outputs:
                result['Outputs'].append(k.to_map() if k else None)
        else:
            result['Outputs'] = None
        result['NotificationURLs'] = []
        if self.notification_urls is not None:
            for k in self.notification_urls:
                result['NotificationURLs'].append(k)
        else:
            result['NotificationURLs'] = None
        return result

    def from_map(self, map={}):
        self.create_time = map.get('CreateTime')
        self.description = map.get('Description')
        self.disable_rollback = map.get('DisableRollback')
        self.region_id = map.get('RegionId')
        self.request_id = map.get('RequestId')
        self.stack_id = map.get('StackId')
        self.stack_name = map.get('StackName')
        self.status = map.get('Status')
        self.status_reason = map.get('StatusReason')
        self.template_description = map.get('TemplateDescription')
        self.timeout_in_minutes = map.get('TimeoutInMinutes')
        self.update_time = map.get('UpdateTime')
        self.parent_stack_id = map.get('ParentStackId')
        self.stack_drift_status = map.get('StackDriftStatus')
        self.drift_detection_time = map.get('DriftDetectionTime')
        self.ram_role_name = map.get('RamRoleName')
        self.deletion_protection = map.get('DeletionProtection')
        self.root_stack_id = map.get('RootStackId')
        self.stack_type = map.get('StackType')
        self.parameters = []
        if map.get('Parameters') is not None:
            for k in map.get('Parameters'):
                temp_model = GetStackResponseParameters()
                temp_model = temp_model.from_map(k)
                self.parameters.append(temp_model)
        else:
            self.parameters = None
        self.outputs = []
        if map.get('Outputs') is not None:
            for k in map.get('Outputs'):
                temp_model = map()
                temp_model = temp_model.from_map(k)
                self.outputs.append(temp_model)
        else:
            self.outputs = None
        self.notification_urls = []
        if map.get('NotificationURLs') is not None:
            for k in map.get('NotificationURLs'):
                self.notification_urls.append(k)
        else:
            self.notification_urls = None
        return self


class GetStackResponseParameters(TeaModel):
    def __init__(self, parameter_key=None, parameter_value=None):
        self.parameter_key = parameter_key
        self.parameter_value = parameter_value

    def validate(self):
        self.validate_required(self.parameter_key, 'parameter_key')
        self.validate_required(self.parameter_value, 'parameter_value')

    def to_map(self):
        result = {}
        result['ParameterKey'] = self.parameter_key
        result['ParameterValue'] = self.parameter_value
        return result

    def from_map(self, map={}):
        self.parameter_key = map.get('ParameterKey')
        self.parameter_value = map.get('ParameterValue')
        return self
class DeleteStackRequest(TeaModel):
    def __init__(self, stack_id=None, retain_all_resources=None, region_id=None, retain_resources=None, ram_role_name=None):
        self.stack_id = stack_id
        self.retain_all_resources = retain_all_resources
        self.region_id = region_id
        self.retain_resources = []
        self.ram_role_name = ram_role_name

    def validate(self):
        self.validate_required(self.stack_id, 'stack_id')
        self.validate_required(self.region_id, 'region_id')

    def to_map(self):
        result = {}
        result['StackId'] = self.stack_id
        result['RetainAllResources'] = self.retain_all_resources
        result['RegionId'] = self.region_id
        result['RetainResources'] = []
        if self.retain_resources is not None:
            for k in self.retain_resources:
                result['RetainResources'].append(k)
        else:
            result['RetainResources'] = None
        result['RamRoleName'] = self.ram_role_name
        return result

    def from_map(self, map={}):
        self.stack_id = map.get('StackId')
        self.retain_all_resources = map.get('RetainAllResources')
        self.region_id = map.get('RegionId')
        self.retain_resources = []
        if map.get('RetainResources') is not None:
            for k in map.get('RetainResources'):
                self.retain_resources.append(k)
        else:
            self.retain_resources = None
        self.ram_role_name = map.get('RamRoleName')
        return self


class DeleteStackResponse(TeaModel):
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


class UpdateStackRequest(TeaModel):
    def __init__(self, stack_id=None, client_token=None, stack_policy_during_update_body=None, timeout_in_minutes=None, template_body=None, parameters=None, stack_policy_url=None, stack_policy_during_update_url=None, stack_policy_body=None, use_previous_parameters=None, region_id=None, disable_rollback=None, template_url=None, ram_role_name=None, replacement_option=None):
        self.stack_id = stack_id
        self.client_token = client_token
        self.stack_policy_during_update_body = stack_policy_during_update_body
        self.timeout_in_minutes = timeout_in_minutes
        self.template_body = template_body
        self.parameters = []
        self.stack_policy_url = stack_policy_url
        self.stack_policy_during_update_url = stack_policy_during_update_url
        self.stack_policy_body = stack_policy_body
        self.use_previous_parameters = use_previous_parameters
        self.region_id = region_id
        self.disable_rollback = disable_rollback
        self.template_url = template_url
        self.ram_role_name = ram_role_name
        self.replacement_option = replacement_option

    def validate(self):
        self.validate_required(self.stack_id, 'stack_id')
        if self.parameters:
            for k in self.parameters:
                if k :
                    k.validate()
        self.validate_required(self.region_id, 'region_id')

    def to_map(self):
        result = {}
        result['StackId'] = self.stack_id
        result['ClientToken'] = self.client_token
        result['StackPolicyDuringUpdateBody'] = self.stack_policy_during_update_body
        result['TimeoutInMinutes'] = self.timeout_in_minutes
        result['TemplateBody'] = self.template_body
        result['Parameters'] = []
        if self.parameters is not None:
            for k in self.parameters:
                result['Parameters'].append(k.to_map() if k else None)
        else:
            result['Parameters'] = None
        result['StackPolicyURL'] = self.stack_policy_url
        result['StackPolicyDuringUpdateURL'] = self.stack_policy_during_update_url
        result['StackPolicyBody'] = self.stack_policy_body
        result['UsePreviousParameters'] = self.use_previous_parameters
        result['RegionId'] = self.region_id
        result['DisableRollback'] = self.disable_rollback
        result['TemplateURL'] = self.template_url
        result['RamRoleName'] = self.ram_role_name
        result['ReplacementOption'] = self.replacement_option
        return result

    def from_map(self, map={}):
        self.stack_id = map.get('StackId')
        self.client_token = map.get('ClientToken')
        self.stack_policy_during_update_body = map.get('StackPolicyDuringUpdateBody')
        self.timeout_in_minutes = map.get('TimeoutInMinutes')
        self.template_body = map.get('TemplateBody')
        self.parameters = []
        if map.get('Parameters') is not None:
            for k in map.get('Parameters'):
                temp_model = UpdateStackRequestParameters()
                temp_model = temp_model.from_map(k)
                self.parameters.append(temp_model)
        else:
            self.parameters = None
        self.stack_policy_url = map.get('StackPolicyURL')
        self.stack_policy_during_update_url = map.get('StackPolicyDuringUpdateURL')
        self.stack_policy_body = map.get('StackPolicyBody')
        self.use_previous_parameters = map.get('UsePreviousParameters')
        self.region_id = map.get('RegionId')
        self.disable_rollback = map.get('DisableRollback')
        self.template_url = map.get('TemplateURL')
        self.ram_role_name = map.get('RamRoleName')
        self.replacement_option = map.get('ReplacementOption')
        return self


class UpdateStackRequestParameters(TeaModel):
    def __init__(self, parameter_value=None, parameter_key=None):
        self.parameter_value = parameter_value
        self.parameter_key = parameter_key

    def validate(self):
        self.validate_required(self.parameter_value, 'parameter_value')
        self.validate_required(self.parameter_key, 'parameter_key')

    def to_map(self):
        result = {}
        result['ParameterValue'] = self.parameter_value
        result['ParameterKey'] = self.parameter_key
        return result

    def from_map(self, map={}):
        self.parameter_value = map.get('ParameterValue')
        self.parameter_key = map.get('ParameterKey')
        return self
class UpdateStackResponse(TeaModel):
    def __init__(self, request_id=None, stack_id=None):
        self.request_id = request_id
        self.stack_id = stack_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.stack_id, 'stack_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['StackId'] = self.stack_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.stack_id = map.get('StackId')
        return self


class ListStacksRequest(TeaModel):
    def __init__(self, status=None, page_size=None, parent_stack_id=None, region_id=None, stack_name=None, page_number=None, show_nested_stack=None, tag=None, stack_id=None):
        self.status = []
        self.page_size = page_size
        self.parent_stack_id = parent_stack_id
        self.region_id = region_id
        self.stack_name = []
        self.page_number = page_number
        self.show_nested_stack = show_nested_stack
        self.tag = []
        self.stack_id = stack_id

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        if self.tag:
            for k in self.tag:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Status'] = []
        if self.status is not None:
            for k in self.status:
                result['Status'].append(k)
        else:
            result['Status'] = None
        result['PageSize'] = self.page_size
        result['ParentStackId'] = self.parent_stack_id
        result['RegionId'] = self.region_id
        result['StackName'] = []
        if self.stack_name is not None:
            for k in self.stack_name:
                result['StackName'].append(k)
        else:
            result['StackName'] = None
        result['PageNumber'] = self.page_number
        result['ShowNestedStack'] = self.show_nested_stack
        result['Tag'] = []
        if self.tag is not None:
            for k in self.tag:
                result['Tag'].append(k.to_map() if k else None)
        else:
            result['Tag'] = None
        result['StackId'] = self.stack_id
        return result

    def from_map(self, map={}):
        self.status = []
        if map.get('Status') is not None:
            for k in map.get('Status'):
                self.status.append(k)
        else:
            self.status = None
        self.page_size = map.get('PageSize')
        self.parent_stack_id = map.get('ParentStackId')
        self.region_id = map.get('RegionId')
        self.stack_name = []
        if map.get('StackName') is not None:
            for k in map.get('StackName'):
                self.stack_name.append(k)
        else:
            self.stack_name = None
        self.page_number = map.get('PageNumber')
        self.show_nested_stack = map.get('ShowNestedStack')
        self.tag = []
        if map.get('Tag') is not None:
            for k in map.get('Tag'):
                temp_model = ListStacksRequestTag()
                temp_model = temp_model.from_map(k)
                self.tag.append(temp_model)
        else:
            self.tag = None
        self.stack_id = map.get('StackId')
        return self


class ListStacksRequestTag(TeaModel):
    def __init__(self, key=None, value=None):
        self.key = key
        self.value = value

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Key'] = self.key
        result['Value'] = self.value
        return result

    def from_map(self, map={}):
        self.key = map.get('Key')
        self.value = map.get('Value')
        return self
class ListStacksResponse(TeaModel):
    def __init__(self, page_number=None, page_size=None, request_id=None, total_count=None, stacks=None):
        self.page_number = page_number
        self.page_size = page_size
        self.request_id = request_id
        self.total_count = total_count
        self.stacks = []

    def validate(self):
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.total_count, 'total_count')
        self.validate_required(self.stacks, 'stacks')
        if self.stacks:
            for k in self.stacks:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        result['RequestId'] = self.request_id
        result['TotalCount'] = self.total_count
        result['Stacks'] = []
        if self.stacks is not None:
            for k in self.stacks:
                result['Stacks'].append(k.to_map() if k else None)
        else:
            result['Stacks'] = None
        return result

    def from_map(self, map={}):
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        self.request_id = map.get('RequestId')
        self.total_count = map.get('TotalCount')
        self.stacks = []
        if map.get('Stacks') is not None:
            for k in map.get('Stacks'):
                temp_model = ListStacksResponseStacks()
                temp_model = temp_model.from_map(k)
                self.stacks.append(temp_model)
        else:
            self.stacks = None
        return self


class ListStacksResponseStacks(TeaModel):
    def __init__(self, create_time=None, disable_rollback=None, region_id=None, stack_id=None, stack_name=None, status=None, status_reason=None, timeout_in_minutes=None, parent_stack_id=None, update_time=None, stack_drift_status=None, drift_detection_time=None):
        self.create_time = create_time
        self.disable_rollback = disable_rollback
        self.region_id = region_id
        self.stack_id = stack_id
        self.stack_name = stack_name
        self.status = status
        self.status_reason = status_reason
        self.timeout_in_minutes = timeout_in_minutes
        self.parent_stack_id = parent_stack_id
        self.update_time = update_time
        self.stack_drift_status = stack_drift_status
        self.drift_detection_time = drift_detection_time

    def validate(self):
        self.validate_required(self.create_time, 'create_time')
        self.validate_required(self.disable_rollback, 'disable_rollback')
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.stack_id, 'stack_id')
        self.validate_required(self.stack_name, 'stack_name')
        self.validate_required(self.status, 'status')
        self.validate_required(self.status_reason, 'status_reason')
        self.validate_required(self.timeout_in_minutes, 'timeout_in_minutes')
        self.validate_required(self.parent_stack_id, 'parent_stack_id')
        self.validate_required(self.update_time, 'update_time')
        self.validate_required(self.stack_drift_status, 'stack_drift_status')
        self.validate_required(self.drift_detection_time, 'drift_detection_time')

    def to_map(self):
        result = {}
        result['CreateTime'] = self.create_time
        result['DisableRollback'] = self.disable_rollback
        result['RegionId'] = self.region_id
        result['StackId'] = self.stack_id
        result['StackName'] = self.stack_name
        result['Status'] = self.status
        result['StatusReason'] = self.status_reason
        result['TimeoutInMinutes'] = self.timeout_in_minutes
        result['ParentStackId'] = self.parent_stack_id
        result['UpdateTime'] = self.update_time
        result['StackDriftStatus'] = self.stack_drift_status
        result['DriftDetectionTime'] = self.drift_detection_time
        return result

    def from_map(self, map={}):
        self.create_time = map.get('CreateTime')
        self.disable_rollback = map.get('DisableRollback')
        self.region_id = map.get('RegionId')
        self.stack_id = map.get('StackId')
        self.stack_name = map.get('StackName')
        self.status = map.get('Status')
        self.status_reason = map.get('StatusReason')
        self.timeout_in_minutes = map.get('TimeoutInMinutes')
        self.parent_stack_id = map.get('ParentStackId')
        self.update_time = map.get('UpdateTime')
        self.stack_drift_status = map.get('StackDriftStatus')
        self.drift_detection_time = map.get('DriftDetectionTime')
        return self
class PreviewStackRequest(TeaModel):
    def __init__(self, disable_rollback=None, timeout_in_minutes=None, parameters=None, template_body=None, stack_policy_url=None, region_id=None, stack_policy_body=None, stack_name=None, client_token=None, template_url=None):
        self.disable_rollback = disable_rollback
        self.timeout_in_minutes = timeout_in_minutes
        self.parameters = []
        self.template_body = template_body
        self.stack_policy_url = stack_policy_url
        self.region_id = region_id
        self.stack_policy_body = stack_policy_body
        self.stack_name = stack_name
        self.client_token = client_token
        self.template_url = template_url

    def validate(self):
        if self.parameters:
            for k in self.parameters:
                if k :
                    k.validate()
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.stack_name, 'stack_name')

    def to_map(self):
        result = {}
        result['DisableRollback'] = self.disable_rollback
        result['TimeoutInMinutes'] = self.timeout_in_minutes
        result['Parameters'] = []
        if self.parameters is not None:
            for k in self.parameters:
                result['Parameters'].append(k.to_map() if k else None)
        else:
            result['Parameters'] = None
        result['TemplateBody'] = self.template_body
        result['StackPolicyURL'] = self.stack_policy_url
        result['RegionId'] = self.region_id
        result['StackPolicyBody'] = self.stack_policy_body
        result['StackName'] = self.stack_name
        result['ClientToken'] = self.client_token
        result['TemplateURL'] = self.template_url
        return result

    def from_map(self, map={}):
        self.disable_rollback = map.get('DisableRollback')
        self.timeout_in_minutes = map.get('TimeoutInMinutes')
        self.parameters = []
        if map.get('Parameters') is not None:
            for k in map.get('Parameters'):
                temp_model = PreviewStackRequestParameters()
                temp_model = temp_model.from_map(k)
                self.parameters.append(temp_model)
        else:
            self.parameters = None
        self.template_body = map.get('TemplateBody')
        self.stack_policy_url = map.get('StackPolicyURL')
        self.region_id = map.get('RegionId')
        self.stack_policy_body = map.get('StackPolicyBody')
        self.stack_name = map.get('StackName')
        self.client_token = map.get('ClientToken')
        self.template_url = map.get('TemplateURL')
        return self


class PreviewStackRequestParameters(TeaModel):
    def __init__(self, parameter_value=None, parameter_key=None):
        self.parameter_value = parameter_value
        self.parameter_key = parameter_key

    def validate(self):
        self.validate_required(self.parameter_value, 'parameter_value')
        self.validate_required(self.parameter_key, 'parameter_key')

    def to_map(self):
        result = {}
        result['ParameterValue'] = self.parameter_value
        result['ParameterKey'] = self.parameter_key
        return result

    def from_map(self, map={}):
        self.parameter_value = map.get('ParameterValue')
        self.parameter_key = map.get('ParameterKey')
        return self
class PreviewStackResponse(TeaModel):
    def __init__(self, request_id=None, stack=None):
        self.request_id = request_id
        self.stack = stack

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.stack, 'stack')
        if self.stack:
            self.stack.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.stack is not None:
            result['Stack'] = self.stack.to_map()
        else:
            result['Stack'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('Stack') is not None:
            temp_model = PreviewStackResponseStack()
            self.stack = temp_model.from_map(map['Stack'])
        else:
            self.stack = None
        return self


class PreviewStackResponseStackParameters(TeaModel):
    def __init__(self, parameter_key=None, parameter_value=None):
        self.parameter_key = parameter_key
        self.parameter_value = parameter_value

    def validate(self):
        self.validate_required(self.parameter_key, 'parameter_key')
        self.validate_required(self.parameter_value, 'parameter_value')

    def to_map(self):
        result = {}
        result['ParameterKey'] = self.parameter_key
        result['ParameterValue'] = self.parameter_value
        return result

    def from_map(self, map={}):
        self.parameter_key = map.get('ParameterKey')
        self.parameter_value = map.get('ParameterValue')
        return self


class PreviewStackResponseStackResources(TeaModel):
    def __init__(self, description=None, logical_resource_id=None, properties=None, resource_type=None, stack=None, required_by=None):
        self.description = description
        self.logical_resource_id = logical_resource_id
        self.properties = {}
        self.resource_type = resource_type
        self.stack = {}
        self.required_by = []

    def validate(self):
        self.validate_required(self.description, 'description')
        self.validate_required(self.logical_resource_id, 'logical_resource_id')
        self.validate_required(self.properties, 'properties')
        self.validate_required(self.resource_type, 'resource_type')
        self.validate_required(self.stack, 'stack')
        self.validate_required(self.required_by, 'required_by')

    def to_map(self):
        result = {}
        result['Description'] = self.description
        result['LogicalResourceId'] = self.logical_resource_id
        result['Properties'] = self.properties
        result['ResourceType'] = self.resource_type
        result['Stack'] = self.stack
        result['RequiredBy'] = []
        if self.required_by is not None:
            for k in self.required_by:
                result['RequiredBy'].append(k)
        else:
            result['RequiredBy'] = None
        return result

    def from_map(self, map={}):
        self.description = map.get('Description')
        self.logical_resource_id = map.get('LogicalResourceId')
        self.properties = map.get('Properties')
        self.resource_type = map.get('ResourceType')
        self.stack = map.get('Stack')
        self.required_by = []
        if map.get('RequiredBy') is not None:
            for k in map.get('RequiredBy'):
                self.required_by.append(k)
        else:
            self.required_by = None
        return self


class PreviewStackResponseStack(TeaModel):
    def __init__(self, description=None, disable_rollback=None, region_id=None, stack_name=None, stack_policy_body=None, template_description=None, timeout_in_minutes=None, parameters=None, resources=None):
        self.description = description
        self.disable_rollback = disable_rollback
        self.region_id = region_id
        self.stack_name = stack_name
        self.stack_policy_body = {}
        self.template_description = template_description
        self.timeout_in_minutes = timeout_in_minutes
        self.parameters = []
        self.resources = []

    def validate(self):
        self.validate_required(self.description, 'description')
        self.validate_required(self.disable_rollback, 'disable_rollback')
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.stack_name, 'stack_name')
        self.validate_required(self.stack_policy_body, 'stack_policy_body')
        self.validate_required(self.template_description, 'template_description')
        self.validate_required(self.timeout_in_minutes, 'timeout_in_minutes')
        self.validate_required(self.parameters, 'parameters')
        if self.parameters:
            for k in self.parameters:
                if k :
                    k.validate()
        self.validate_required(self.resources, 'resources')
        if self.resources:
            for k in self.resources:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Description'] = self.description
        result['DisableRollback'] = self.disable_rollback
        result['RegionId'] = self.region_id
        result['StackName'] = self.stack_name
        result['StackPolicyBody'] = self.stack_policy_body
        result['TemplateDescription'] = self.template_description
        result['TimeoutInMinutes'] = self.timeout_in_minutes
        result['Parameters'] = []
        if self.parameters is not None:
            for k in self.parameters:
                result['Parameters'].append(k.to_map() if k else None)
        else:
            result['Parameters'] = None
        result['Resources'] = []
        if self.resources is not None:
            for k in self.resources:
                result['Resources'].append(k.to_map() if k else None)
        else:
            result['Resources'] = None
        return result

    def from_map(self, map={}):
        self.description = map.get('Description')
        self.disable_rollback = map.get('DisableRollback')
        self.region_id = map.get('RegionId')
        self.stack_name = map.get('StackName')
        self.stack_policy_body = map.get('StackPolicyBody')
        self.template_description = map.get('TemplateDescription')
        self.timeout_in_minutes = map.get('TimeoutInMinutes')
        self.parameters = []
        if map.get('Parameters') is not None:
            for k in map.get('Parameters'):
                temp_model = PreviewStackResponseStackParameters()
                temp_model = temp_model.from_map(k)
                self.parameters.append(temp_model)
        else:
            self.parameters = None
        self.resources = []
        if map.get('Resources') is not None:
            for k in map.get('Resources'):
                temp_model = PreviewStackResponseStackResources()
                temp_model = temp_model.from_map(k)
                self.resources.append(temp_model)
        else:
            self.resources = None
        return self
class GetTemplateEstimateCostRequest(TeaModel):
    def __init__(self, template_url=None, region_id=None, parameters=None, template_body=None, client_token=None):
        self.template_url = template_url
        self.region_id = region_id
        self.parameters = []
        self.template_body = template_body
        self.client_token = client_token

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        if self.parameters:
            for k in self.parameters:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['TemplateURL'] = self.template_url
        result['RegionId'] = self.region_id
        result['Parameters'] = []
        if self.parameters is not None:
            for k in self.parameters:
                result['Parameters'].append(k.to_map() if k else None)
        else:
            result['Parameters'] = None
        result['TemplateBody'] = self.template_body
        result['ClientToken'] = self.client_token
        return result

    def from_map(self, map={}):
        self.template_url = map.get('TemplateURL')
        self.region_id = map.get('RegionId')
        self.parameters = []
        if map.get('Parameters') is not None:
            for k in map.get('Parameters'):
                temp_model = GetTemplateEstimateCostRequestParameters()
                temp_model = temp_model.from_map(k)
                self.parameters.append(temp_model)
        else:
            self.parameters = None
        self.template_body = map.get('TemplateBody')
        self.client_token = map.get('ClientToken')
        return self


class GetTemplateEstimateCostRequestParameters(TeaModel):
    def __init__(self, parameter_value=None, parameter_key=None):
        self.parameter_value = parameter_value
        self.parameter_key = parameter_key

    def validate(self):
        self.validate_required(self.parameter_value, 'parameter_value')
        self.validate_required(self.parameter_key, 'parameter_key')

    def to_map(self):
        result = {}
        result['ParameterValue'] = self.parameter_value
        result['ParameterKey'] = self.parameter_key
        return result

    def from_map(self, map={}):
        self.parameter_value = map.get('ParameterValue')
        self.parameter_key = map.get('ParameterKey')
        return self
class GetTemplateEstimateCostResponse(TeaModel):
    def __init__(self, request_id=None, resources=None):
        self.request_id = request_id
        self.resources = {}

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.resources, 'resources')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Resources'] = self.resources
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.resources = map.get('Resources')
        return self


class CancelUpdateStackRequest(TeaModel):
    def __init__(self, stack_id=None, region_id=None, cancel_type=None):
        self.stack_id = stack_id
        self.region_id = region_id
        self.cancel_type = cancel_type

    def validate(self):
        self.validate_required(self.stack_id, 'stack_id')
        self.validate_required(self.region_id, 'region_id')

    def to_map(self):
        result = {}
        result['StackId'] = self.stack_id
        result['RegionId'] = self.region_id
        result['CancelType'] = self.cancel_type
        return result

    def from_map(self, map={}):
        self.stack_id = map.get('StackId')
        self.region_id = map.get('RegionId')
        self.cancel_type = map.get('CancelType')
        return self


class CancelUpdateStackResponse(TeaModel):
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


class ContinueCreateStackRequest(TeaModel):
    def __init__(self, stack_id=None, recreating_resources=None, region_id=None, ram_role_name=None, mode=None, template_body=None, template_url=None, parameters=None, dry_run=None):
        self.stack_id = stack_id
        self.recreating_resources = []
        self.region_id = region_id
        self.ram_role_name = ram_role_name
        self.mode = mode
        self.template_body = template_body
        self.template_url = template_url
        self.parameters = []
        self.dry_run = dry_run

    def validate(self):
        self.validate_required(self.stack_id, 'stack_id')
        self.validate_required(self.region_id, 'region_id')
        if self.parameters:
            for k in self.parameters:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['StackId'] = self.stack_id
        result['RecreatingResources'] = []
        if self.recreating_resources is not None:
            for k in self.recreating_resources:
                result['RecreatingResources'].append(k)
        else:
            result['RecreatingResources'] = None
        result['RegionId'] = self.region_id
        result['RamRoleName'] = self.ram_role_name
        result['Mode'] = self.mode
        result['TemplateBody'] = self.template_body
        result['TemplateURL'] = self.template_url
        result['Parameters'] = []
        if self.parameters is not None:
            for k in self.parameters:
                result['Parameters'].append(k.to_map() if k else None)
        else:
            result['Parameters'] = None
        result['DryRun'] = self.dry_run
        return result

    def from_map(self, map={}):
        self.stack_id = map.get('StackId')
        self.recreating_resources = []
        if map.get('RecreatingResources') is not None:
            for k in map.get('RecreatingResources'):
                self.recreating_resources.append(k)
        else:
            self.recreating_resources = None
        self.region_id = map.get('RegionId')
        self.ram_role_name = map.get('RamRoleName')
        self.mode = map.get('Mode')
        self.template_body = map.get('TemplateBody')
        self.template_url = map.get('TemplateURL')
        self.parameters = []
        if map.get('Parameters') is not None:
            for k in map.get('Parameters'):
                temp_model = ContinueCreateStackRequestParameters()
                temp_model = temp_model.from_map(k)
                self.parameters.append(temp_model)
        else:
            self.parameters = None
        self.dry_run = map.get('DryRun')
        return self


class ContinueCreateStackRequestParameters(TeaModel):
    def __init__(self, parameter_key=None, parameter_value=None):
        self.parameter_key = parameter_key
        self.parameter_value = parameter_value

    def validate(self):
        self.validate_required(self.parameter_key, 'parameter_key')
        self.validate_required(self.parameter_value, 'parameter_value')

    def to_map(self):
        result = {}
        result['ParameterKey'] = self.parameter_key
        result['ParameterValue'] = self.parameter_value
        return result

    def from_map(self, map={}):
        self.parameter_key = map.get('ParameterKey')
        self.parameter_value = map.get('ParameterValue')
        return self
class ContinueCreateStackResponse(TeaModel):
    def __init__(self, request_id=None, stack_id=None):
        self.request_id = request_id
        self.stack_id = stack_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.stack_id, 'stack_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['StackId'] = self.stack_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.stack_id = map.get('StackId')
        return self


class SetStackPolicyRequest(TeaModel):
    def __init__(self, stack_id=None, region_id=None, stack_policy_body=None, stack_policy_url=None):
        self.stack_id = stack_id
        self.region_id = region_id
        self.stack_policy_body = stack_policy_body
        self.stack_policy_url = stack_policy_url

    def validate(self):
        self.validate_required(self.stack_id, 'stack_id')
        self.validate_required(self.region_id, 'region_id')

    def to_map(self):
        result = {}
        result['StackId'] = self.stack_id
        result['RegionId'] = self.region_id
        result['StackPolicyBody'] = self.stack_policy_body
        result['StackPolicyURL'] = self.stack_policy_url
        return result

    def from_map(self, map={}):
        self.stack_id = map.get('StackId')
        self.region_id = map.get('RegionId')
        self.stack_policy_body = map.get('StackPolicyBody')
        self.stack_policy_url = map.get('StackPolicyURL')
        return self


class SetStackPolicyResponse(TeaModel):
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


class GetStackPolicyRequest(TeaModel):
    def __init__(self, stack_id=None, region_id=None):
        self.stack_id = stack_id
        self.region_id = region_id

    def validate(self):
        self.validate_required(self.stack_id, 'stack_id')
        self.validate_required(self.region_id, 'region_id')

    def to_map(self):
        result = {}
        result['StackId'] = self.stack_id
        result['RegionId'] = self.region_id
        return result

    def from_map(self, map={}):
        self.stack_id = map.get('StackId')
        self.region_id = map.get('RegionId')
        return self


class GetStackPolicyResponse(TeaModel):
    def __init__(self, request_id=None, stack_policy_body=None):
        self.request_id = request_id
        self.stack_policy_body = {}

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.stack_policy_body, 'stack_policy_body')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['StackPolicyBody'] = self.stack_policy_body
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.stack_policy_body = map.get('StackPolicyBody')
        return self


class ValidateTemplateRequest(TeaModel):
    def __init__(self, template_url=None, region_id=None, template_body=None):
        self.template_url = template_url
        self.region_id = region_id
        self.template_body = template_body

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['TemplateURL'] = self.template_url
        result['RegionId'] = self.region_id
        result['TemplateBody'] = self.template_body
        return result

    def from_map(self, map={}):
        self.template_url = map.get('TemplateURL')
        self.region_id = map.get('RegionId')
        self.template_body = map.get('TemplateBody')
        return self


class ValidateTemplateResponse(TeaModel):
    def __init__(self, description=None, request_id=None, parameters=None):
        self.description = description
        self.request_id = request_id
        self.parameters = []

    def validate(self):
        self.validate_required(self.description, 'description')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.parameters, 'parameters')
        if self.parameters:
            for k in self.parameters:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Description'] = self.description
        result['RequestId'] = self.request_id
        result['Parameters'] = []
        if self.parameters is not None:
            for k in self.parameters:
                result['Parameters'].append(k.to_map() if k else None)
        else:
            result['Parameters'] = None
        return result

    def from_map(self, map={}):
        self.description = map.get('Description')
        self.request_id = map.get('RequestId')
        self.parameters = []
        if map.get('Parameters') is not None:
            for k in map.get('Parameters'):
                temp_model = map()
                temp_model = temp_model.from_map(k)
                self.parameters.append(temp_model)
        else:
            self.parameters = None
        return self


class GetTemplateRequest(TeaModel):
    def __init__(self, stack_id=None, region_id=None, change_set_id=None, template_id=None):
        self.stack_id = stack_id
        self.region_id = region_id
        self.change_set_id = change_set_id
        self.template_id = template_id

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['StackId'] = self.stack_id
        result['RegionId'] = self.region_id
        result['ChangeSetId'] = self.change_set_id
        result['TemplateId'] = self.template_id
        return result

    def from_map(self, map={}):
        self.stack_id = map.get('StackId')
        self.region_id = map.get('RegionId')
        self.change_set_id = map.get('ChangeSetId')
        self.template_id = map.get('TemplateId')
        return self


class GetTemplateResponse(TeaModel):
    def __init__(self, request_id=None, template_body=None):
        self.request_id = request_id
        self.template_body = template_body

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.template_body, 'template_body')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['TemplateBody'] = self.template_body
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.template_body = map.get('TemplateBody')
        return self


class GetChangeSetRequest(TeaModel):
    def __init__(self, show_template=None, region_id=None, change_set_id=None):
        self.show_template = show_template
        self.region_id = region_id
        self.change_set_id = change_set_id

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.change_set_id, 'change_set_id')

    def to_map(self):
        result = {}
        result['ShowTemplate'] = self.show_template
        result['RegionId'] = self.region_id
        result['ChangeSetId'] = self.change_set_id
        return result

    def from_map(self, map={}):
        self.show_template = map.get('ShowTemplate')
        self.region_id = map.get('RegionId')
        self.change_set_id = map.get('ChangeSetId')
        return self


class GetChangeSetResponse(TeaModel):
    def __init__(self, change_set_id=None, change_set_name=None, change_set_type=None, create_time=None, description=None, disable_rollback=None, execution_status=None, region_id=None, request_id=None, stack_id=None, stack_name=None, status=None, template_body=None, timeout_in_minutes=None, status_reason=None, parameters=None, changes=None):
        self.change_set_id = change_set_id
        self.change_set_name = change_set_name
        self.change_set_type = change_set_type
        self.create_time = create_time
        self.description = description
        self.disable_rollback = disable_rollback
        self.execution_status = execution_status
        self.region_id = region_id
        self.request_id = request_id
        self.stack_id = stack_id
        self.stack_name = stack_name
        self.status = status
        self.template_body = template_body
        self.timeout_in_minutes = timeout_in_minutes
        self.status_reason = status_reason
        self.parameters = []
        self.changes = []

    def validate(self):
        self.validate_required(self.change_set_id, 'change_set_id')
        self.validate_required(self.change_set_name, 'change_set_name')
        self.validate_required(self.change_set_type, 'change_set_type')
        self.validate_required(self.create_time, 'create_time')
        self.validate_required(self.description, 'description')
        self.validate_required(self.disable_rollback, 'disable_rollback')
        self.validate_required(self.execution_status, 'execution_status')
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.stack_id, 'stack_id')
        self.validate_required(self.stack_name, 'stack_name')
        self.validate_required(self.status, 'status')
        self.validate_required(self.template_body, 'template_body')
        self.validate_required(self.timeout_in_minutes, 'timeout_in_minutes')
        self.validate_required(self.status_reason, 'status_reason')
        self.validate_required(self.parameters, 'parameters')
        if self.parameters:
            for k in self.parameters:
                if k :
                    k.validate()
        self.validate_required(self.changes, 'changes')
        if self.changes:
            for k in self.changes:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['ChangeSetId'] = self.change_set_id
        result['ChangeSetName'] = self.change_set_name
        result['ChangeSetType'] = self.change_set_type
        result['CreateTime'] = self.create_time
        result['Description'] = self.description
        result['DisableRollback'] = self.disable_rollback
        result['ExecutionStatus'] = self.execution_status
        result['RegionId'] = self.region_id
        result['RequestId'] = self.request_id
        result['StackId'] = self.stack_id
        result['StackName'] = self.stack_name
        result['Status'] = self.status
        result['TemplateBody'] = self.template_body
        result['TimeoutInMinutes'] = self.timeout_in_minutes
        result['StatusReason'] = self.status_reason
        result['Parameters'] = []
        if self.parameters is not None:
            for k in self.parameters:
                result['Parameters'].append(k.to_map() if k else None)
        else:
            result['Parameters'] = None
        result['Changes'] = []
        if self.changes is not None:
            for k in self.changes:
                result['Changes'].append(k.to_map() if k else None)
        else:
            result['Changes'] = None
        return result

    def from_map(self, map={}):
        self.change_set_id = map.get('ChangeSetId')
        self.change_set_name = map.get('ChangeSetName')
        self.change_set_type = map.get('ChangeSetType')
        self.create_time = map.get('CreateTime')
        self.description = map.get('Description')
        self.disable_rollback = map.get('DisableRollback')
        self.execution_status = map.get('ExecutionStatus')
        self.region_id = map.get('RegionId')
        self.request_id = map.get('RequestId')
        self.stack_id = map.get('StackId')
        self.stack_name = map.get('StackName')
        self.status = map.get('Status')
        self.template_body = map.get('TemplateBody')
        self.timeout_in_minutes = map.get('TimeoutInMinutes')
        self.status_reason = map.get('StatusReason')
        self.parameters = []
        if map.get('Parameters') is not None:
            for k in map.get('Parameters'):
                temp_model = GetChangeSetResponseParameters()
                temp_model = temp_model.from_map(k)
                self.parameters.append(temp_model)
        else:
            self.parameters = None
        self.changes = []
        if map.get('Changes') is not None:
            for k in map.get('Changes'):
                temp_model = map()
                temp_model = temp_model.from_map(k)
                self.changes.append(temp_model)
        else:
            self.changes = None
        return self


class GetChangeSetResponseParameters(TeaModel):
    def __init__(self, parameter_key=None, parameter_value=None):
        self.parameter_key = parameter_key
        self.parameter_value = parameter_value

    def validate(self):
        self.validate_required(self.parameter_key, 'parameter_key')
        self.validate_required(self.parameter_value, 'parameter_value')

    def to_map(self):
        result = {}
        result['ParameterKey'] = self.parameter_key
        result['ParameterValue'] = self.parameter_value
        return result

    def from_map(self, map={}):
        self.parameter_key = map.get('ParameterKey')
        self.parameter_value = map.get('ParameterValue')
        return self
class ListChangeSetsRequest(TeaModel):
    def __init__(self, stack_id=None, status=None, change_set_name=None, page_size=None, region_id=None, page_number=None, execution_status=None, change_set_id=None):
        self.stack_id = stack_id
        self.status = []
        self.change_set_name = []
        self.page_size = page_size
        self.region_id = region_id
        self.page_number = page_number
        self.execution_status = []
        self.change_set_id = change_set_id

    def validate(self):
        self.validate_required(self.stack_id, 'stack_id')
        self.validate_required(self.region_id, 'region_id')

    def to_map(self):
        result = {}
        result['StackId'] = self.stack_id
        result['Status'] = []
        if self.status is not None:
            for k in self.status:
                result['Status'].append(k)
        else:
            result['Status'] = None
        result['ChangeSetName'] = []
        if self.change_set_name is not None:
            for k in self.change_set_name:
                result['ChangeSetName'].append(k)
        else:
            result['ChangeSetName'] = None
        result['PageSize'] = self.page_size
        result['RegionId'] = self.region_id
        result['PageNumber'] = self.page_number
        result['ExecutionStatus'] = []
        if self.execution_status is not None:
            for k in self.execution_status:
                result['ExecutionStatus'].append(k)
        else:
            result['ExecutionStatus'] = None
        result['ChangeSetId'] = self.change_set_id
        return result

    def from_map(self, map={}):
        self.stack_id = map.get('StackId')
        self.status = []
        if map.get('Status') is not None:
            for k in map.get('Status'):
                self.status.append(k)
        else:
            self.status = None
        self.change_set_name = []
        if map.get('ChangeSetName') is not None:
            for k in map.get('ChangeSetName'):
                self.change_set_name.append(k)
        else:
            self.change_set_name = None
        self.page_size = map.get('PageSize')
        self.region_id = map.get('RegionId')
        self.page_number = map.get('PageNumber')
        self.execution_status = []
        if map.get('ExecutionStatus') is not None:
            for k in map.get('ExecutionStatus'):
                self.execution_status.append(k)
        else:
            self.execution_status = None
        self.change_set_id = map.get('ChangeSetId')
        return self


class ListChangeSetsResponse(TeaModel):
    def __init__(self, page_number=None, page_size=None, request_id=None, total_count=None, change_sets=None):
        self.page_number = page_number
        self.page_size = page_size
        self.request_id = request_id
        self.total_count = total_count
        self.change_sets = []

    def validate(self):
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.total_count, 'total_count')
        self.validate_required(self.change_sets, 'change_sets')
        if self.change_sets:
            for k in self.change_sets:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        result['RequestId'] = self.request_id
        result['TotalCount'] = self.total_count
        result['ChangeSets'] = []
        if self.change_sets is not None:
            for k in self.change_sets:
                result['ChangeSets'].append(k.to_map() if k else None)
        else:
            result['ChangeSets'] = None
        return result

    def from_map(self, map={}):
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        self.request_id = map.get('RequestId')
        self.total_count = map.get('TotalCount')
        self.change_sets = []
        if map.get('ChangeSets') is not None:
            for k in map.get('ChangeSets'):
                temp_model = ListChangeSetsResponseChangeSets()
                temp_model = temp_model.from_map(k)
                self.change_sets.append(temp_model)
        else:
            self.change_sets = None
        return self


class ListChangeSetsResponseChangeSets(TeaModel):
    def __init__(self, change_set_id=None, change_set_name=None, change_set_type=None, create_time=None, description=None, execution_status=None, region_id=None, stack_id=None, stack_name=None, status=None, status_reason=None):
        self.change_set_id = change_set_id
        self.change_set_name = change_set_name
        self.change_set_type = change_set_type
        self.create_time = create_time
        self.description = description
        self.execution_status = execution_status
        self.region_id = region_id
        self.stack_id = stack_id
        self.stack_name = stack_name
        self.status = status
        self.status_reason = status_reason

    def validate(self):
        self.validate_required(self.change_set_id, 'change_set_id')
        self.validate_required(self.change_set_name, 'change_set_name')
        self.validate_required(self.change_set_type, 'change_set_type')
        self.validate_required(self.create_time, 'create_time')
        self.validate_required(self.description, 'description')
        self.validate_required(self.execution_status, 'execution_status')
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.stack_id, 'stack_id')
        self.validate_required(self.stack_name, 'stack_name')
        self.validate_required(self.status, 'status')
        self.validate_required(self.status_reason, 'status_reason')

    def to_map(self):
        result = {}
        result['ChangeSetId'] = self.change_set_id
        result['ChangeSetName'] = self.change_set_name
        result['ChangeSetType'] = self.change_set_type
        result['CreateTime'] = self.create_time
        result['Description'] = self.description
        result['ExecutionStatus'] = self.execution_status
        result['RegionId'] = self.region_id
        result['StackId'] = self.stack_id
        result['StackName'] = self.stack_name
        result['Status'] = self.status
        result['StatusReason'] = self.status_reason
        return result

    def from_map(self, map={}):
        self.change_set_id = map.get('ChangeSetId')
        self.change_set_name = map.get('ChangeSetName')
        self.change_set_type = map.get('ChangeSetType')
        self.create_time = map.get('CreateTime')
        self.description = map.get('Description')
        self.execution_status = map.get('ExecutionStatus')
        self.region_id = map.get('RegionId')
        self.stack_id = map.get('StackId')
        self.stack_name = map.get('StackName')
        self.status = map.get('Status')
        self.status_reason = map.get('StatusReason')
        return self
class ExecuteChangeSetRequest(TeaModel):
    def __init__(self, region_id=None, change_set_id=None):
        self.region_id = region_id
        self.change_set_id = change_set_id

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.change_set_id, 'change_set_id')

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        result['ChangeSetId'] = self.change_set_id
        return result

    def from_map(self, map={}):
        self.region_id = map.get('RegionId')
        self.change_set_id = map.get('ChangeSetId')
        return self


class ExecuteChangeSetResponse(TeaModel):
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


class DeleteChangeSetRequest(TeaModel):
    def __init__(self, region_id=None, change_set_id=None):
        self.region_id = region_id
        self.change_set_id = change_set_id

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.change_set_id, 'change_set_id')

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        result['ChangeSetId'] = self.change_set_id
        return result

    def from_map(self, map={}):
        self.region_id = map.get('RegionId')
        self.change_set_id = map.get('ChangeSetId')
        return self


class DeleteChangeSetResponse(TeaModel):
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


class ListStackEventsRequest(TeaModel):
    def __init__(self, stack_id=None, status=None, page_size=None, resource_type=None, region_id=None, page_number=None, logical_resource_id=None):
        self.stack_id = stack_id
        self.status = []
        self.page_size = page_size
        self.resource_type = []
        self.region_id = region_id
        self.page_number = page_number
        self.logical_resource_id = []

    def validate(self):
        self.validate_required(self.stack_id, 'stack_id')
        self.validate_required(self.region_id, 'region_id')

    def to_map(self):
        result = {}
        result['StackId'] = self.stack_id
        result['Status'] = []
        if self.status is not None:
            for k in self.status:
                result['Status'].append(k)
        else:
            result['Status'] = None
        result['PageSize'] = self.page_size
        result['ResourceType'] = []
        if self.resource_type is not None:
            for k in self.resource_type:
                result['ResourceType'].append(k)
        else:
            result['ResourceType'] = None
        result['RegionId'] = self.region_id
        result['PageNumber'] = self.page_number
        result['LogicalResourceId'] = []
        if self.logical_resource_id is not None:
            for k in self.logical_resource_id:
                result['LogicalResourceId'].append(k)
        else:
            result['LogicalResourceId'] = None
        return result

    def from_map(self, map={}):
        self.stack_id = map.get('StackId')
        self.status = []
        if map.get('Status') is not None:
            for k in map.get('Status'):
                self.status.append(k)
        else:
            self.status = None
        self.page_size = map.get('PageSize')
        self.resource_type = []
        if map.get('ResourceType') is not None:
            for k in map.get('ResourceType'):
                self.resource_type.append(k)
        else:
            self.resource_type = None
        self.region_id = map.get('RegionId')
        self.page_number = map.get('PageNumber')
        self.logical_resource_id = []
        if map.get('LogicalResourceId') is not None:
            for k in map.get('LogicalResourceId'):
                self.logical_resource_id.append(k)
        else:
            self.logical_resource_id = None
        return self


class ListStackEventsResponse(TeaModel):
    def __init__(self, page_number=None, page_size=None, request_id=None, total_count=None, events=None):
        self.page_number = page_number
        self.page_size = page_size
        self.request_id = request_id
        self.total_count = total_count
        self.events = []

    def validate(self):
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.total_count, 'total_count')
        self.validate_required(self.events, 'events')
        if self.events:
            for k in self.events:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        result['RequestId'] = self.request_id
        result['TotalCount'] = self.total_count
        result['Events'] = []
        if self.events is not None:
            for k in self.events:
                result['Events'].append(k.to_map() if k else None)
        else:
            result['Events'] = None
        return result

    def from_map(self, map={}):
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        self.request_id = map.get('RequestId')
        self.total_count = map.get('TotalCount')
        self.events = []
        if map.get('Events') is not None:
            for k in map.get('Events'):
                temp_model = ListStackEventsResponseEvents()
                temp_model = temp_model.from_map(k)
                self.events.append(temp_model)
        else:
            self.events = None
        return self


class ListStackEventsResponseEvents(TeaModel):
    def __init__(self, create_time=None, event_id=None, logical_resource_id=None, physical_resource_id=None, resource_type=None, stack_id=None, stack_name=None, status=None, status_reason=None):
        self.create_time = create_time
        self.event_id = event_id
        self.logical_resource_id = logical_resource_id
        self.physical_resource_id = physical_resource_id
        self.resource_type = resource_type
        self.stack_id = stack_id
        self.stack_name = stack_name
        self.status = status
        self.status_reason = status_reason

    def validate(self):
        self.validate_required(self.create_time, 'create_time')
        self.validate_required(self.event_id, 'event_id')
        self.validate_required(self.logical_resource_id, 'logical_resource_id')
        self.validate_required(self.physical_resource_id, 'physical_resource_id')
        self.validate_required(self.resource_type, 'resource_type')
        self.validate_required(self.stack_id, 'stack_id')
        self.validate_required(self.stack_name, 'stack_name')
        self.validate_required(self.status, 'status')
        self.validate_required(self.status_reason, 'status_reason')

    def to_map(self):
        result = {}
        result['CreateTime'] = self.create_time
        result['EventId'] = self.event_id
        result['LogicalResourceId'] = self.logical_resource_id
        result['PhysicalResourceId'] = self.physical_resource_id
        result['ResourceType'] = self.resource_type
        result['StackId'] = self.stack_id
        result['StackName'] = self.stack_name
        result['Status'] = self.status
        result['StatusReason'] = self.status_reason
        return result

    def from_map(self, map={}):
        self.create_time = map.get('CreateTime')
        self.event_id = map.get('EventId')
        self.logical_resource_id = map.get('LogicalResourceId')
        self.physical_resource_id = map.get('PhysicalResourceId')
        self.resource_type = map.get('ResourceType')
        self.stack_id = map.get('StackId')
        self.stack_name = map.get('StackName')
        self.status = map.get('Status')
        self.status_reason = map.get('StatusReason')
        return self
class ListStackResourcesRequest(TeaModel):
    def __init__(self, stack_id=None, region_id=None):
        self.stack_id = stack_id
        self.region_id = region_id

    def validate(self):
        self.validate_required(self.stack_id, 'stack_id')
        self.validate_required(self.region_id, 'region_id')

    def to_map(self):
        result = {}
        result['StackId'] = self.stack_id
        result['RegionId'] = self.region_id
        return result

    def from_map(self, map={}):
        self.stack_id = map.get('StackId')
        self.region_id = map.get('RegionId')
        return self


class ListStackResourcesResponse(TeaModel):
    def __init__(self, request_id=None, resources=None):
        self.request_id = request_id
        self.resources = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.resources, 'resources')
        if self.resources:
            for k in self.resources:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Resources'] = []
        if self.resources is not None:
            for k in self.resources:
                result['Resources'].append(k.to_map() if k else None)
        else:
            result['Resources'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.resources = []
        if map.get('Resources') is not None:
            for k in map.get('Resources'):
                temp_model = ListStackResourcesResponseResources()
                temp_model = temp_model.from_map(k)
                self.resources.append(temp_model)
        else:
            self.resources = None
        return self


class ListStackResourcesResponseResources(TeaModel):
    def __init__(self, create_time=None, logical_resource_id=None, physical_resource_id=None, resource_type=None, stack_id=None, stack_name=None, status=None, status_reason=None, update_time=None, resource_drift_status=None, drift_detection_time=None):
        self.create_time = create_time
        self.logical_resource_id = logical_resource_id
        self.physical_resource_id = physical_resource_id
        self.resource_type = resource_type
        self.stack_id = stack_id
        self.stack_name = stack_name
        self.status = status
        self.status_reason = status_reason
        self.update_time = update_time
        self.resource_drift_status = resource_drift_status
        self.drift_detection_time = drift_detection_time

    def validate(self):
        self.validate_required(self.create_time, 'create_time')
        self.validate_required(self.logical_resource_id, 'logical_resource_id')
        self.validate_required(self.physical_resource_id, 'physical_resource_id')
        self.validate_required(self.resource_type, 'resource_type')
        self.validate_required(self.stack_id, 'stack_id')
        self.validate_required(self.stack_name, 'stack_name')
        self.validate_required(self.status, 'status')
        self.validate_required(self.status_reason, 'status_reason')
        self.validate_required(self.update_time, 'update_time')
        self.validate_required(self.resource_drift_status, 'resource_drift_status')
        self.validate_required(self.drift_detection_time, 'drift_detection_time')

    def to_map(self):
        result = {}
        result['CreateTime'] = self.create_time
        result['LogicalResourceId'] = self.logical_resource_id
        result['PhysicalResourceId'] = self.physical_resource_id
        result['ResourceType'] = self.resource_type
        result['StackId'] = self.stack_id
        result['StackName'] = self.stack_name
        result['Status'] = self.status
        result['StatusReason'] = self.status_reason
        result['UpdateTime'] = self.update_time
        result['ResourceDriftStatus'] = self.resource_drift_status
        result['DriftDetectionTime'] = self.drift_detection_time
        return result

    def from_map(self, map={}):
        self.create_time = map.get('CreateTime')
        self.logical_resource_id = map.get('LogicalResourceId')
        self.physical_resource_id = map.get('PhysicalResourceId')
        self.resource_type = map.get('ResourceType')
        self.stack_id = map.get('StackId')
        self.stack_name = map.get('StackName')
        self.status = map.get('Status')
        self.status_reason = map.get('StatusReason')
        self.update_time = map.get('UpdateTime')
        self.resource_drift_status = map.get('ResourceDriftStatus')
        self.drift_detection_time = map.get('DriftDetectionTime')
        return self
class GetStackResourceRequest(TeaModel):
    def __init__(self, stack_id=None, client_token=None, region_id=None, show_resource_attributes=None, logical_resource_id=None):
        self.stack_id = stack_id
        self.client_token = client_token
        self.region_id = region_id
        self.show_resource_attributes = show_resource_attributes
        self.logical_resource_id = logical_resource_id

    def validate(self):
        self.validate_required(self.stack_id, 'stack_id')
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.logical_resource_id, 'logical_resource_id')

    def to_map(self):
        result = {}
        result['StackId'] = self.stack_id
        result['ClientToken'] = self.client_token
        result['RegionId'] = self.region_id
        result['ShowResourceAttributes'] = self.show_resource_attributes
        result['LogicalResourceId'] = self.logical_resource_id
        return result

    def from_map(self, map={}):
        self.stack_id = map.get('StackId')
        self.client_token = map.get('ClientToken')
        self.region_id = map.get('RegionId')
        self.show_resource_attributes = map.get('ShowResourceAttributes')
        self.logical_resource_id = map.get('LogicalResourceId')
        return self


class GetStackResourceResponse(TeaModel):
    def __init__(self, create_time=None, description=None, logical_resource_id=None, metadata=None, physical_resource_id=None, request_id=None, resource_type=None, stack_id=None, stack_name=None, status=None, status_reason=None, update_time=None, resource_drift_status=None, drift_detection_time=None, resource_attributes=None):
        self.create_time = create_time
        self.description = description
        self.logical_resource_id = logical_resource_id
        self.metadata = {}
        self.physical_resource_id = physical_resource_id
        self.request_id = request_id
        self.resource_type = resource_type
        self.stack_id = stack_id
        self.stack_name = stack_name
        self.status = status
        self.status_reason = status_reason
        self.update_time = update_time
        self.resource_drift_status = resource_drift_status
        self.drift_detection_time = drift_detection_time
        self.resource_attributes = []

    def validate(self):
        self.validate_required(self.create_time, 'create_time')
        self.validate_required(self.description, 'description')
        self.validate_required(self.logical_resource_id, 'logical_resource_id')
        self.validate_required(self.metadata, 'metadata')
        self.validate_required(self.physical_resource_id, 'physical_resource_id')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.resource_type, 'resource_type')
        self.validate_required(self.stack_id, 'stack_id')
        self.validate_required(self.stack_name, 'stack_name')
        self.validate_required(self.status, 'status')
        self.validate_required(self.status_reason, 'status_reason')
        self.validate_required(self.update_time, 'update_time')
        self.validate_required(self.resource_drift_status, 'resource_drift_status')
        self.validate_required(self.drift_detection_time, 'drift_detection_time')
        self.validate_required(self.resource_attributes, 'resource_attributes')
        if self.resource_attributes:
            for k in self.resource_attributes:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['CreateTime'] = self.create_time
        result['Description'] = self.description
        result['LogicalResourceId'] = self.logical_resource_id
        result['Metadata'] = self.metadata
        result['PhysicalResourceId'] = self.physical_resource_id
        result['RequestId'] = self.request_id
        result['ResourceType'] = self.resource_type
        result['StackId'] = self.stack_id
        result['StackName'] = self.stack_name
        result['Status'] = self.status
        result['StatusReason'] = self.status_reason
        result['UpdateTime'] = self.update_time
        result['ResourceDriftStatus'] = self.resource_drift_status
        result['DriftDetectionTime'] = self.drift_detection_time
        result['ResourceAttributes'] = []
        if self.resource_attributes is not None:
            for k in self.resource_attributes:
                result['ResourceAttributes'].append(k.to_map() if k else None)
        else:
            result['ResourceAttributes'] = None
        return result

    def from_map(self, map={}):
        self.create_time = map.get('CreateTime')
        self.description = map.get('Description')
        self.logical_resource_id = map.get('LogicalResourceId')
        self.metadata = map.get('Metadata')
        self.physical_resource_id = map.get('PhysicalResourceId')
        self.request_id = map.get('RequestId')
        self.resource_type = map.get('ResourceType')
        self.stack_id = map.get('StackId')
        self.stack_name = map.get('StackName')
        self.status = map.get('Status')
        self.status_reason = map.get('StatusReason')
        self.update_time = map.get('UpdateTime')
        self.resource_drift_status = map.get('ResourceDriftStatus')
        self.drift_detection_time = map.get('DriftDetectionTime')
        self.resource_attributes = []
        if map.get('ResourceAttributes') is not None:
            for k in map.get('ResourceAttributes'):
                temp_model = map()
                temp_model = temp_model.from_map(k)
                self.resource_attributes.append(temp_model)
        else:
            self.resource_attributes = None
        return self


class GetResourceTypeTemplateRequest(TeaModel):
    def __init__(self, resource_type=None):
        self.resource_type = resource_type

    def validate(self):
        self.validate_required(self.resource_type, 'resource_type')

    def to_map(self):
        result = {}
        result['ResourceType'] = self.resource_type
        return result

    def from_map(self, map={}):
        self.resource_type = map.get('ResourceType')
        return self


class GetResourceTypeTemplateResponse(TeaModel):
    def __init__(self, request_id=None, template_body=None):
        self.request_id = request_id
        self.template_body = {}

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.template_body, 'template_body')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['TemplateBody'] = self.template_body
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.template_body = map.get('TemplateBody')
        return self


class GetResourceTypeRequest(TeaModel):
    def __init__(self, resource_type=None):
        self.resource_type = resource_type

    def validate(self):
        self.validate_required(self.resource_type, 'resource_type')

    def to_map(self):
        result = {}
        result['ResourceType'] = self.resource_type
        return result

    def from_map(self, map={}):
        self.resource_type = map.get('ResourceType')
        return self


class GetResourceTypeResponse(TeaModel):
    def __init__(self, attributes=None, properties=None, request_id=None, resource_type=None, support_drift_detection=None):
        self.attributes = {}
        self.properties = {}
        self.request_id = request_id
        self.resource_type = resource_type
        self.support_drift_detection = support_drift_detection

    def validate(self):
        self.validate_required(self.attributes, 'attributes')
        self.validate_required(self.properties, 'properties')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.resource_type, 'resource_type')
        self.validate_required(self.support_drift_detection, 'support_drift_detection')

    def to_map(self):
        result = {}
        result['Attributes'] = self.attributes
        result['Properties'] = self.properties
        result['RequestId'] = self.request_id
        result['ResourceType'] = self.resource_type
        result['SupportDriftDetection'] = self.support_drift_detection
        return result

    def from_map(self, map={}):
        self.attributes = map.get('Attributes')
        self.properties = map.get('Properties')
        self.request_id = map.get('RequestId')
        self.resource_type = map.get('ResourceType')
        self.support_drift_detection = map.get('SupportDriftDetection')
        return self


class ListResourceTypesRequest(TeaModel):
    def __init__(self):
        pass

    def validate(self):
        pass

    def to_map(self):
        result = {}
        return result

    def from_map(self, map={}):
        return self


class ListResourceTypesResponse(TeaModel):
    def __init__(self, request_id=None, resource_types=None):
        self.request_id = request_id
        self.resource_types = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.resource_types, 'resource_types')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['ResourceTypes'] = []
        if self.resource_types is not None:
            for k in self.resource_types:
                result['ResourceTypes'].append(k)
        else:
            result['ResourceTypes'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.resource_types = []
        if map.get('ResourceTypes') is not None:
            for k in map.get('ResourceTypes'):
                self.resource_types.append(k)
        else:
            self.resource_types = None
        return self


class SignalResourceRequest(TeaModel):
    def __init__(self, stack_id=None, status=None, region_id=None, unique_id=None, client_token=None, logical_resource_id=None):
        self.stack_id = stack_id
        self.status = status
        self.region_id = region_id
        self.unique_id = unique_id
        self.client_token = client_token
        self.logical_resource_id = logical_resource_id

    def validate(self):
        self.validate_required(self.stack_id, 'stack_id')
        self.validate_required(self.status, 'status')
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.unique_id, 'unique_id')
        self.validate_required(self.logical_resource_id, 'logical_resource_id')

    def to_map(self):
        result = {}
        result['StackId'] = self.stack_id
        result['Status'] = self.status
        result['RegionId'] = self.region_id
        result['UniqueId'] = self.unique_id
        result['ClientToken'] = self.client_token
        result['LogicalResourceId'] = self.logical_resource_id
        return result

    def from_map(self, map={}):
        self.stack_id = map.get('StackId')
        self.status = map.get('Status')
        self.region_id = map.get('RegionId')
        self.unique_id = map.get('UniqueId')
        self.client_token = map.get('ClientToken')
        self.logical_resource_id = map.get('LogicalResourceId')
        return self


class SignalResourceResponse(TeaModel):
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


class DescribeRegionsRequest(TeaModel):
    def __init__(self, accept_language=None):
        self.accept_language = accept_language

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['AcceptLanguage'] = self.accept_language
        return result

    def from_map(self, map={}):
        self.accept_language = map.get('AcceptLanguage')
        return self


class DescribeRegionsResponse(TeaModel):
    def __init__(self, request_id=None, regions=None):
        self.request_id = request_id
        self.regions = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.regions, 'regions')
        if self.regions:
            for k in self.regions:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Regions'] = []
        if self.regions is not None:
            for k in self.regions:
                result['Regions'].append(k.to_map() if k else None)
        else:
            result['Regions'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.regions = []
        if map.get('Regions') is not None:
            for k in map.get('Regions'):
                temp_model = DescribeRegionsResponseRegions()
                temp_model = temp_model.from_map(k)
                self.regions.append(temp_model)
        else:
            self.regions = None
        return self


class DescribeRegionsResponseRegions(TeaModel):
    def __init__(self, region_id=None, local_name=None, region_endpoint=None):
        self.region_id = region_id
        self.local_name = local_name
        self.region_endpoint = region_endpoint

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.local_name, 'local_name')
        self.validate_required(self.region_endpoint, 'region_endpoint')

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        result['LocalName'] = self.local_name
        result['RegionEndpoint'] = self.region_endpoint
        return result

    def from_map(self, map={}):
        self.region_id = map.get('RegionId')
        self.local_name = map.get('LocalName')
        self.region_endpoint = map.get('RegionEndpoint')
        return self
class CreateChangeSetRequest(TeaModel):
    def __init__(self, stack_id=None, parameters=None, stack_policy_url=None, stack_policy_body=None, stack_name=None, use_previous_parameters=None, change_set_type=None, description=None, region_id=None, client_token=None, template_url=None, stack_policy_during_update_url=None, template_body=None, timeout_in_minutes=None, disable_rollback=None, change_set_name=None, stack_policy_during_update_body=None, notification_urls=None, ram_role_name=None, replacement_option=None, resources_to_import=None):
        self.stack_id = stack_id
        self.parameters = []
        self.stack_policy_url = stack_policy_url
        self.stack_policy_body = stack_policy_body
        self.stack_name = stack_name
        self.use_previous_parameters = use_previous_parameters
        self.change_set_type = change_set_type
        self.description = description
        self.region_id = region_id
        self.client_token = client_token
        self.template_url = template_url
        self.stack_policy_during_update_url = stack_policy_during_update_url
        self.template_body = template_body
        self.timeout_in_minutes = timeout_in_minutes
        self.disable_rollback = disable_rollback
        self.change_set_name = change_set_name
        self.stack_policy_during_update_body = stack_policy_during_update_body
        self.notification_urls = []
        self.ram_role_name = ram_role_name
        self.replacement_option = replacement_option
        self.resources_to_import = []

    def validate(self):
        if self.parameters:
            for k in self.parameters:
                if k :
                    k.validate()
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.change_set_name, 'change_set_name')
        if self.resources_to_import:
            for k in self.resources_to_import:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['StackId'] = self.stack_id
        result['Parameters'] = []
        if self.parameters is not None:
            for k in self.parameters:
                result['Parameters'].append(k.to_map() if k else None)
        else:
            result['Parameters'] = None
        result['StackPolicyURL'] = self.stack_policy_url
        result['StackPolicyBody'] = self.stack_policy_body
        result['StackName'] = self.stack_name
        result['UsePreviousParameters'] = self.use_previous_parameters
        result['ChangeSetType'] = self.change_set_type
        result['Description'] = self.description
        result['RegionId'] = self.region_id
        result['ClientToken'] = self.client_token
        result['TemplateURL'] = self.template_url
        result['StackPolicyDuringUpdateURL'] = self.stack_policy_during_update_url
        result['TemplateBody'] = self.template_body
        result['TimeoutInMinutes'] = self.timeout_in_minutes
        result['DisableRollback'] = self.disable_rollback
        result['ChangeSetName'] = self.change_set_name
        result['StackPolicyDuringUpdateBody'] = self.stack_policy_during_update_body
        result['NotificationURLs'] = []
        if self.notification_urls is not None:
            for k in self.notification_urls:
                result['NotificationURLs'].append(k)
        else:
            result['NotificationURLs'] = None
        result['RamRoleName'] = self.ram_role_name
        result['ReplacementOption'] = self.replacement_option
        result['ResourcesToImport'] = []
        if self.resources_to_import is not None:
            for k in self.resources_to_import:
                result['ResourcesToImport'].append(k.to_map() if k else None)
        else:
            result['ResourcesToImport'] = None
        return result

    def from_map(self, map={}):
        self.stack_id = map.get('StackId')
        self.parameters = []
        if map.get('Parameters') is not None:
            for k in map.get('Parameters'):
                temp_model = CreateChangeSetRequestParameters()
                temp_model = temp_model.from_map(k)
                self.parameters.append(temp_model)
        else:
            self.parameters = None
        self.stack_policy_url = map.get('StackPolicyURL')
        self.stack_policy_body = map.get('StackPolicyBody')
        self.stack_name = map.get('StackName')
        self.use_previous_parameters = map.get('UsePreviousParameters')
        self.change_set_type = map.get('ChangeSetType')
        self.description = map.get('Description')
        self.region_id = map.get('RegionId')
        self.client_token = map.get('ClientToken')
        self.template_url = map.get('TemplateURL')
        self.stack_policy_during_update_url = map.get('StackPolicyDuringUpdateURL')
        self.template_body = map.get('TemplateBody')
        self.timeout_in_minutes = map.get('TimeoutInMinutes')
        self.disable_rollback = map.get('DisableRollback')
        self.change_set_name = map.get('ChangeSetName')
        self.stack_policy_during_update_body = map.get('StackPolicyDuringUpdateBody')
        self.notification_urls = []
        if map.get('NotificationURLs') is not None:
            for k in map.get('NotificationURLs'):
                self.notification_urls.append(k)
        else:
            self.notification_urls = None
        self.ram_role_name = map.get('RamRoleName')
        self.replacement_option = map.get('ReplacementOption')
        self.resources_to_import = []
        if map.get('ResourcesToImport') is not None:
            for k in map.get('ResourcesToImport'):
                temp_model = CreateChangeSetRequestResourcesToImport()
                temp_model = temp_model.from_map(k)
                self.resources_to_import.append(temp_model)
        else:
            self.resources_to_import = None
        return self


class CreateChangeSetRequestParameters(TeaModel):
    def __init__(self, parameter_value=None, parameter_key=None):
        self.parameter_value = parameter_value
        self.parameter_key = parameter_key

    def validate(self):
        self.validate_required(self.parameter_value, 'parameter_value')
        self.validate_required(self.parameter_key, 'parameter_key')

    def to_map(self):
        result = {}
        result['ParameterValue'] = self.parameter_value
        result['ParameterKey'] = self.parameter_key
        return result

    def from_map(self, map={}):
        self.parameter_value = map.get('ParameterValue')
        self.parameter_key = map.get('ParameterKey')
        return self


class CreateChangeSetRequestResourcesToImport(TeaModel):
    def __init__(self, logical_resource_id=None, resource_type=None, resource_identifier=None):
        self.logical_resource_id = logical_resource_id
        self.resource_type = resource_type
        self.resource_identifier = resource_identifier

    def validate(self):
        self.validate_required(self.logical_resource_id, 'logical_resource_id')
        self.validate_required(self.resource_type, 'resource_type')
        self.validate_required(self.resource_identifier, 'resource_identifier')

    def to_map(self):
        result = {}
        result['LogicalResourceId'] = self.logical_resource_id
        result['ResourceType'] = self.resource_type
        result['ResourceIdentifier'] = self.resource_identifier
        return result

    def from_map(self, map={}):
        self.logical_resource_id = map.get('LogicalResourceId')
        self.resource_type = map.get('ResourceType')
        self.resource_identifier = map.get('ResourceIdentifier')
        return self
class CreateChangeSetResponse(TeaModel):
    def __init__(self, change_set_id=None, request_id=None, stack_id=None):
        self.change_set_id = change_set_id
        self.request_id = request_id
        self.stack_id = stack_id

    def validate(self):
        self.validate_required(self.change_set_id, 'change_set_id')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.stack_id, 'stack_id')

    def to_map(self):
        result = {}
        result['ChangeSetId'] = self.change_set_id
        result['RequestId'] = self.request_id
        result['StackId'] = self.stack_id
        return result

    def from_map(self, map={}):
        self.change_set_id = map.get('ChangeSetId')
        self.request_id = map.get('RequestId')
        self.stack_id = map.get('StackId')
        return self
