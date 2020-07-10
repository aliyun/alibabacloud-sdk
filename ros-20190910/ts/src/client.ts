// This file is auto-generated, don't edit it
import Util, * as $Util from '@alicloud/tea-util';
import RPC, * as $RPC from '@alicloud/rpc-client';
import EndpointUtil from '@alicloud/endpoint-util';
import * as $tea from '@alicloud/tea-typescript';

export class GetTemplateSummaryRequest extends $tea.Model {
  stackId?: string;
  templateBody?: string;
  regionId?: string;
  templateId?: string;
  templateURL?: string;
  changeSetId?: string;
  static names(): { [key: string]: string } {
    return {
      stackId: 'StackId',
      templateBody: 'TemplateBody',
      regionId: 'RegionId',
      templateId: 'TemplateId',
      templateURL: 'TemplateURL',
      changeSetId: 'ChangeSetId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      stackId: 'string',
      templateBody: 'string',
      regionId: 'string',
      templateId: 'string',
      templateURL: 'string',
      changeSetId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetTemplateSummaryResponse extends $tea.Model {
  requestId: string;
  description: string;
  metadata: { [key: string]: any };
  version: string;
  resourceIdentifierSummaries: GetTemplateSummaryResponseResourceIdentifierSummaries[];
  parameters: { [key: string]: any }[];
  resourceTypes: string[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      description: 'Description',
      metadata: 'Metadata',
      version: 'Version',
      resourceIdentifierSummaries: 'ResourceIdentifierSummaries',
      parameters: 'Parameters',
      resourceTypes: 'ResourceTypes',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      description: 'string',
      metadata: { 'type': 'map', 'keyType': 'string', 'valueType': 'any' },
      version: 'string',
      resourceIdentifierSummaries: { 'type': 'array', 'itemType': GetTemplateSummaryResponseResourceIdentifierSummaries },
      parameters: { 'type': 'array', 'itemType': { 'type': 'map', 'keyType': 'string', 'valueType': 'any' } },
      resourceTypes: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListTagValuesRequest extends $tea.Model {
  regionId: string;
  resourceType: string;
  nextToken?: string;
  key: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      resourceType: 'ResourceType',
      nextToken: 'NextToken',
      key: 'Key',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      resourceType: 'string',
      nextToken: 'string',
      key: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListTagValuesResponse extends $tea.Model {
  requestId: string;
  nextToken: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      nextToken: 'NextToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      nextToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListTagKeysRequest extends $tea.Model {
  regionId: string;
  resourceType: string;
  nextToken?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      resourceType: 'ResourceType',
      nextToken: 'NextToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      resourceType: 'string',
      nextToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListTagKeysResponse extends $tea.Model {
  requestId: string;
  nextToken: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      nextToken: 'NextToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      nextToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SetDeletionProtectionRequest extends $tea.Model {
  stackId: string;
  deletionProtection: string;
  regionId: string;
  static names(): { [key: string]: string } {
    return {
      stackId: 'StackId',
      deletionProtection: 'DeletionProtection',
      regionId: 'RegionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      stackId: 'string',
      deletionProtection: 'string',
      regionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SetDeletionProtectionResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateStackTemplateByResourcesRequest extends $tea.Model {
  stackId: string;
  dryRun?: boolean;
  regionId: string;
  clientToken?: string;
  templateFormat?: string;
  logicalResourceId?: string[];
  static names(): { [key: string]: string } {
    return {
      stackId: 'StackId',
      dryRun: 'DryRun',
      regionId: 'RegionId',
      clientToken: 'ClientToken',
      templateFormat: 'TemplateFormat',
      logicalResourceId: 'LogicalResourceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      stackId: 'string',
      dryRun: 'boolean',
      regionId: 'string',
      clientToken: 'string',
      templateFormat: 'string',
      logicalResourceId: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateStackTemplateByResourcesResponse extends $tea.Model {
  requestId: string;
  oldTemplateBody: string;
  newTemplateBody: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      oldTemplateBody: 'OldTemplateBody',
      newTemplateBody: 'NewTemplateBody',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      oldTemplateBody: 'string',
      newTemplateBody: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetStackDriftDetectionStatusRequest extends $tea.Model {
  regionId: string;
  driftDetectionId: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      driftDetectionId: 'DriftDetectionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      driftDetectionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetStackDriftDetectionStatusResponse extends $tea.Model {
  requestId: string;
  driftDetectionId: string;
  driftDetectionTime: string;
  driftDetectionStatus: string;
  driftDetectionStatusReason: string;
  stackDriftStatus: string;
  stackId: string;
  driftedStackResourceCount: number;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      driftDetectionId: 'DriftDetectionId',
      driftDetectionTime: 'DriftDetectionTime',
      driftDetectionStatus: 'DriftDetectionStatus',
      driftDetectionStatusReason: 'DriftDetectionStatusReason',
      stackDriftStatus: 'StackDriftStatus',
      stackId: 'StackId',
      driftedStackResourceCount: 'DriftedStackResourceCount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      driftDetectionId: 'string',
      driftDetectionTime: 'string',
      driftDetectionStatus: 'string',
      driftDetectionStatusReason: 'string',
      stackDriftStatus: 'string',
      stackId: 'string',
      driftedStackResourceCount: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DetectStackGroupDriftRequest extends $tea.Model {
  clientToken?: string;
  regionId: string;
  stackGroupName: string;
  operationPreferences?: { [key: string]: any };
  static names(): { [key: string]: string } {
    return {
      clientToken: 'ClientToken',
      regionId: 'RegionId',
      stackGroupName: 'StackGroupName',
      operationPreferences: 'OperationPreferences',
    };
  }

  static types(): { [key: string]: any } {
    return {
      clientToken: 'string',
      regionId: 'string',
      stackGroupName: 'string',
      operationPreferences: { 'type': 'map', 'keyType': 'string', 'valueType': 'any' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DetectStackGroupDriftResponse extends $tea.Model {
  requestId: string;
  operationId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      operationId: 'OperationId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      operationId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListStackResourceDriftsRequest extends $tea.Model {
  stackId: string;
  regionId: string;
  maxResults?: number;
  resourceDriftStatus?: string[];
  nextToken?: string;
  static names(): { [key: string]: string } {
    return {
      stackId: 'StackId',
      regionId: 'RegionId',
      maxResults: 'MaxResults',
      resourceDriftStatus: 'ResourceDriftStatus',
      nextToken: 'NextToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      stackId: 'string',
      regionId: 'string',
      maxResults: 'number',
      resourceDriftStatus: { 'type': 'array', 'itemType': 'string' },
      nextToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListStackResourceDriftsResponse extends $tea.Model {
  requestId: string;
  nextToken: string;
  resourceDrifts: ListStackResourceDriftsResponseResourceDrifts[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      nextToken: 'NextToken',
      resourceDrifts: 'ResourceDrifts',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      nextToken: 'string',
      resourceDrifts: { 'type': 'array', 'itemType': ListStackResourceDriftsResponseResourceDrifts },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DetectStackResourceDriftRequest extends $tea.Model {
  stackId: string;
  clientToken?: string;
  regionId: string;
  logicalResourceId: string;
  static names(): { [key: string]: string } {
    return {
      stackId: 'StackId',
      clientToken: 'ClientToken',
      regionId: 'RegionId',
      logicalResourceId: 'LogicalResourceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      stackId: 'string',
      clientToken: 'string',
      regionId: 'string',
      logicalResourceId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DetectStackResourceDriftResponse extends $tea.Model {
  requestId: string;
  driftDetectionTime: string;
  resourceDriftStatus: string;
  stackId: string;
  resourceType: string;
  physicalResourceId: string;
  logicalResourceId: string;
  actualProperties: string;
  expectedProperties: string;
  propertyDifferences: DetectStackResourceDriftResponsePropertyDifferences[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      driftDetectionTime: 'DriftDetectionTime',
      resourceDriftStatus: 'ResourceDriftStatus',
      stackId: 'StackId',
      resourceType: 'ResourceType',
      physicalResourceId: 'PhysicalResourceId',
      logicalResourceId: 'LogicalResourceId',
      actualProperties: 'ActualProperties',
      expectedProperties: 'ExpectedProperties',
      propertyDifferences: 'PropertyDifferences',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      driftDetectionTime: 'string',
      resourceDriftStatus: 'string',
      stackId: 'string',
      resourceType: 'string',
      physicalResourceId: 'string',
      logicalResourceId: 'string',
      actualProperties: 'string',
      expectedProperties: 'string',
      propertyDifferences: { 'type': 'array', 'itemType': DetectStackResourceDriftResponsePropertyDifferences },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DetectStackDriftRequest extends $tea.Model {
  stackId: string;
  regionId: string;
  logicalResourceId?: string[];
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      stackId: 'StackId',
      regionId: 'RegionId',
      logicalResourceId: 'LogicalResourceId',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      stackId: 'string',
      regionId: 'string',
      logicalResourceId: { 'type': 'array', 'itemType': 'string' },
      clientToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DetectStackDriftResponse extends $tea.Model {
  requestId: string;
  driftDetectionId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      driftDetectionId: 'DriftDetectionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      driftDetectionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateStackInstancesRequest extends $tea.Model {
  regionId: string;
  stackGroupName: string;
  parameterOverrides?: UpdateStackInstancesRequestParameterOverrides[];
  accountIds: { [key: string]: any };
  regionIds: { [key: string]: any };
  clientToken?: string;
  operationDescription?: string;
  operationPreferences?: { [key: string]: any };
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      stackGroupName: 'StackGroupName',
      parameterOverrides: 'ParameterOverrides',
      accountIds: 'AccountIds',
      regionIds: 'RegionIds',
      clientToken: 'ClientToken',
      operationDescription: 'OperationDescription',
      operationPreferences: 'OperationPreferences',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      stackGroupName: 'string',
      parameterOverrides: { 'type': 'array', 'itemType': UpdateStackInstancesRequestParameterOverrides },
      accountIds: { 'type': 'map', 'keyType': 'string', 'valueType': 'any' },
      regionIds: { 'type': 'map', 'keyType': 'string', 'valueType': 'any' },
      clientToken: 'string',
      operationDescription: 'string',
      operationPreferences: { 'type': 'map', 'keyType': 'string', 'valueType': 'any' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateStackInstancesResponse extends $tea.Model {
  requestId: string;
  operationId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      operationId: 'OperationId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      operationId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListStackGroupOperationsRequest extends $tea.Model {
  regionId: string;
  stackGroupName: string;
  pageSize?: number;
  pageNumber?: number;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      stackGroupName: 'StackGroupName',
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      stackGroupName: 'string',
      pageSize: 'number',
      pageNumber: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListStackGroupOperationsResponse extends $tea.Model {
  requestId: string;
  pageNumber: number;
  pageSize: number;
  totalCount: number;
  stackGroupOperations: ListStackGroupOperationsResponseStackGroupOperations[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      totalCount: 'TotalCount',
      stackGroupOperations: 'StackGroupOperations',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      pageNumber: 'number',
      pageSize: 'number',
      totalCount: 'number',
      stackGroupOperations: { 'type': 'array', 'itemType': ListStackGroupOperationsResponseStackGroupOperations },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetStackGroupRequest extends $tea.Model {
  regionId: string;
  stackGroupName: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      stackGroupName: 'StackGroupName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      stackGroupName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetStackGroupResponse extends $tea.Model {
  requestId: string;
  stackGroup: GetStackGroupResponseStackGroup;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      stackGroup: 'StackGroup',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      stackGroup: GetStackGroupResponseStackGroup,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetStackGroupOperationRequest extends $tea.Model {
  regionId: string;
  operationId: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      operationId: 'OperationId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      operationId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetStackGroupOperationResponse extends $tea.Model {
  requestId: string;
  stackGroupOperation: GetStackGroupOperationResponseStackGroupOperation;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      stackGroupOperation: 'StackGroupOperation',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      stackGroupOperation: GetStackGroupOperationResponseStackGroupOperation,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListStackGroupsRequest extends $tea.Model {
  regionId: string;
  status?: string;
  pageSize?: number;
  pageNumber?: number;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      status: 'Status',
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      status: 'string',
      pageSize: 'number',
      pageNumber: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListStackGroupsResponse extends $tea.Model {
  requestId: string;
  pageNumber: number;
  pageSize: number;
  totalCount: number;
  stackGroups: ListStackGroupsResponseStackGroups[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      totalCount: 'TotalCount',
      stackGroups: 'StackGroups',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      pageNumber: 'number',
      pageSize: 'number',
      totalCount: 'number',
      stackGroups: { 'type': 'array', 'itemType': ListStackGroupsResponseStackGroups },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateStackInstancesRequest extends $tea.Model {
  regionId: string;
  stackGroupName: string;
  parameterOverrides?: CreateStackInstancesRequestParameterOverrides[];
  accountIds: { [key: string]: any };
  regionIds: { [key: string]: any };
  clientToken?: string;
  operationDescription?: string;
  operationPreferences?: { [key: string]: any };
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      stackGroupName: 'StackGroupName',
      parameterOverrides: 'ParameterOverrides',
      accountIds: 'AccountIds',
      regionIds: 'RegionIds',
      clientToken: 'ClientToken',
      operationDescription: 'OperationDescription',
      operationPreferences: 'OperationPreferences',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      stackGroupName: 'string',
      parameterOverrides: { 'type': 'array', 'itemType': CreateStackInstancesRequestParameterOverrides },
      accountIds: { 'type': 'map', 'keyType': 'string', 'valueType': 'any' },
      regionIds: { 'type': 'map', 'keyType': 'string', 'valueType': 'any' },
      clientToken: 'string',
      operationDescription: 'string',
      operationPreferences: { 'type': 'map', 'keyType': 'string', 'valueType': 'any' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateStackInstancesResponse extends $tea.Model {
  requestId: string;
  operationId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      operationId: 'OperationId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      operationId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateStackGroupRequest extends $tea.Model {
  regionId: string;
  stackGroupName: string;
  description?: string;
  parameters?: CreateStackGroupRequestParameters[];
  templateBody?: string;
  templateURL?: string;
  clientToken?: string;
  administrationRoleName?: string;
  executionRoleName?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      stackGroupName: 'StackGroupName',
      description: 'Description',
      parameters: 'Parameters',
      templateBody: 'TemplateBody',
      templateURL: 'TemplateURL',
      clientToken: 'ClientToken',
      administrationRoleName: 'AdministrationRoleName',
      executionRoleName: 'ExecutionRoleName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      stackGroupName: 'string',
      description: 'string',
      parameters: { 'type': 'array', 'itemType': CreateStackGroupRequestParameters },
      templateBody: 'string',
      templateURL: 'string',
      clientToken: 'string',
      administrationRoleName: 'string',
      executionRoleName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateStackGroupResponse extends $tea.Model {
  requestId: string;
  stackGroupId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      stackGroupId: 'StackGroupId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      stackGroupId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetStackInstanceRequest extends $tea.Model {
  regionId: string;
  stackGroupName: string;
  stackInstanceAccountId: string;
  stackInstanceRegionId: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      stackGroupName: 'StackGroupName',
      stackInstanceAccountId: 'StackInstanceAccountId',
      stackInstanceRegionId: 'StackInstanceRegionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      stackGroupName: 'string',
      stackInstanceAccountId: 'string',
      stackInstanceRegionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetStackInstanceResponse extends $tea.Model {
  requestId: string;
  stackInstance: GetStackInstanceResponseStackInstance;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      stackInstance: 'StackInstance',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      stackInstance: GetStackInstanceResponseStackInstance,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateStackGroupRequest extends $tea.Model {
  regionId: string;
  stackGroupName: string;
  description?: string;
  parameters?: UpdateStackGroupRequestParameters[];
  accountIds?: { [key: string]: any };
  regionIds?: { [key: string]: any };
  templateBody?: string;
  templateURL?: string;
  clientToken?: string;
  operationDescription?: string;
  operationPreferences?: { [key: string]: any };
  administrationRoleName?: string;
  executionRoleName?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      stackGroupName: 'StackGroupName',
      description: 'Description',
      parameters: 'Parameters',
      accountIds: 'AccountIds',
      regionIds: 'RegionIds',
      templateBody: 'TemplateBody',
      templateURL: 'TemplateURL',
      clientToken: 'ClientToken',
      operationDescription: 'OperationDescription',
      operationPreferences: 'OperationPreferences',
      administrationRoleName: 'AdministrationRoleName',
      executionRoleName: 'ExecutionRoleName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      stackGroupName: 'string',
      description: 'string',
      parameters: { 'type': 'array', 'itemType': UpdateStackGroupRequestParameters },
      accountIds: { 'type': 'map', 'keyType': 'string', 'valueType': 'any' },
      regionIds: { 'type': 'map', 'keyType': 'string', 'valueType': 'any' },
      templateBody: 'string',
      templateURL: 'string',
      clientToken: 'string',
      operationDescription: 'string',
      operationPreferences: { 'type': 'map', 'keyType': 'string', 'valueType': 'any' },
      administrationRoleName: 'string',
      executionRoleName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateStackGroupResponse extends $tea.Model {
  requestId: string;
  operationId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      operationId: 'OperationId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      operationId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListStackInstancesRequest extends $tea.Model {
  regionId: string;
  stackGroupName: string;
  stackInstanceAccountId?: string;
  stackInstanceRegionId?: string;
  pageSize?: number;
  pageNumber?: number;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      stackGroupName: 'StackGroupName',
      stackInstanceAccountId: 'StackInstanceAccountId',
      stackInstanceRegionId: 'StackInstanceRegionId',
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      stackGroupName: 'string',
      stackInstanceAccountId: 'string',
      stackInstanceRegionId: 'string',
      pageSize: 'number',
      pageNumber: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListStackInstancesResponse extends $tea.Model {
  requestId: string;
  pageNumber: number;
  pageSize: number;
  totalCount: number;
  stackInstances: ListStackInstancesResponseStackInstances[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      totalCount: 'TotalCount',
      stackInstances: 'StackInstances',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      pageNumber: 'number',
      pageSize: 'number',
      totalCount: 'number',
      stackInstances: { 'type': 'array', 'itemType': ListStackInstancesResponseStackInstances },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListStackGroupOperationResultsRequest extends $tea.Model {
  regionId: string;
  operationId: string;
  pageSize?: number;
  pageNumber?: number;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      operationId: 'OperationId',
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      operationId: 'string',
      pageSize: 'number',
      pageNumber: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListStackGroupOperationResultsResponse extends $tea.Model {
  requestId: string;
  pageNumber: number;
  pageSize: number;
  totalCount: number;
  stackGroupOperationResults: ListStackGroupOperationResultsResponseStackGroupOperationResults[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      totalCount: 'TotalCount',
      stackGroupOperationResults: 'StackGroupOperationResults',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      pageNumber: 'number',
      pageSize: 'number',
      totalCount: 'number',
      stackGroupOperationResults: { 'type': 'array', 'itemType': ListStackGroupOperationResultsResponseStackGroupOperationResults },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class StopStackGroupOperationRequest extends $tea.Model {
  regionId: string;
  operationId: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      operationId: 'OperationId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      operationId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class StopStackGroupOperationResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteStackGroupRequest extends $tea.Model {
  regionId: string;
  stackGroupName: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      stackGroupName: 'StackGroupName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      stackGroupName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteStackGroupResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteStackInstancesRequest extends $tea.Model {
  regionId: string;
  stackGroupName: string;
  accountIds: { [key: string]: any };
  regionIds: { [key: string]: any };
  retainStacks: boolean;
  clientToken?: string;
  operationDescription?: string;
  operationPreferences?: { [key: string]: any };
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      stackGroupName: 'StackGroupName',
      accountIds: 'AccountIds',
      regionIds: 'RegionIds',
      retainStacks: 'RetainStacks',
      clientToken: 'ClientToken',
      operationDescription: 'OperationDescription',
      operationPreferences: 'OperationPreferences',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      stackGroupName: 'string',
      accountIds: { 'type': 'map', 'keyType': 'string', 'valueType': 'any' },
      regionIds: { 'type': 'map', 'keyType': 'string', 'valueType': 'any' },
      retainStacks: 'boolean',
      clientToken: 'string',
      operationDescription: 'string',
      operationPreferences: { 'type': 'map', 'keyType': 'string', 'valueType': 'any' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteStackInstancesResponse extends $tea.Model {
  requestId: string;
  operationId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      operationId: 'OperationId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      operationId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListTagResourcesRequest extends $tea.Model {
  regionId: string;
  resourceId?: string[];
  resourceType: string;
  tag?: ListTagResourcesRequestTag[];
  nextToken?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      resourceId: 'ResourceId',
      resourceType: 'ResourceType',
      tag: 'Tag',
      nextToken: 'NextToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      resourceId: { 'type': 'array', 'itemType': 'string' },
      resourceType: 'string',
      tag: { 'type': 'array', 'itemType': ListTagResourcesRequestTag },
      nextToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListTagResourcesResponse extends $tea.Model {
  requestId: string;
  nextToken: string;
  tagResources: ListTagResourcesResponseTagResources[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      nextToken: 'NextToken',
      tagResources: 'TagResources',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      nextToken: 'string',
      tagResources: { 'type': 'array', 'itemType': ListTagResourcesResponseTagResources },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UntagResourcesRequest extends $tea.Model {
  regionId: string;
  resourceId: string[];
  resourceType: string;
  tagKey?: string[];
  all?: boolean;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      resourceId: 'ResourceId',
      resourceType: 'ResourceType',
      tagKey: 'TagKey',
      all: 'All',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      resourceId: { 'type': 'array', 'itemType': 'string' },
      resourceType: 'string',
      tagKey: { 'type': 'array', 'itemType': 'string' },
      all: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UntagResourcesResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class TagResourcesRequest extends $tea.Model {
  regionId: string;
  resourceId: string[];
  resourceType: string;
  tag: TagResourcesRequestTag[];
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      resourceId: 'ResourceId',
      resourceType: 'ResourceType',
      tag: 'Tag',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      resourceId: { 'type': 'array', 'itemType': 'string' },
      resourceType: 'string',
      tag: { 'type': 'array', 'itemType': TagResourcesRequestTag },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class TagResourcesResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteTemplateRequest extends $tea.Model {
  templateId: string;
  static names(): { [key: string]: string } {
    return {
      templateId: 'TemplateId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      templateId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteTemplateResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateTemplateRequest extends $tea.Model {
  templateURL?: string;
  templateName?: string;
  description?: string;
  templateBody?: string;
  templateId: string;
  static names(): { [key: string]: string } {
    return {
      templateURL: 'TemplateURL',
      templateName: 'TemplateName',
      description: 'Description',
      templateBody: 'TemplateBody',
      templateId: 'TemplateId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      templateURL: 'string',
      templateName: 'string',
      description: 'string',
      templateBody: 'string',
      templateId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateTemplateResponse extends $tea.Model {
  requestId: string;
  templateId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      templateId: 'TemplateId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      templateId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListTemplatesRequest extends $tea.Model {
  pageNumber?: number;
  pageSize?: number;
  templateName?: string;
  tag?: ListTemplatesRequestTag[];
  static names(): { [key: string]: string } {
    return {
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      templateName: 'TemplateName',
      tag: 'Tag',
    };
  }

  static types(): { [key: string]: any } {
    return {
      pageNumber: 'number',
      pageSize: 'number',
      templateName: 'string',
      tag: { 'type': 'array', 'itemType': ListTemplatesRequestTag },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListTemplatesResponse extends $tea.Model {
  pageNumber: number;
  pageSize: number;
  requestId: string;
  totalCount: number;
  templates: ListTemplatesResponseTemplates[];
  static names(): { [key: string]: string } {
    return {
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      requestId: 'RequestId',
      totalCount: 'TotalCount',
      templates: 'Templates',
    };
  }

  static types(): { [key: string]: any } {
    return {
      pageNumber: 'number',
      pageSize: 'number',
      requestId: 'string',
      totalCount: 'number',
      templates: { 'type': 'array', 'itemType': ListTemplatesResponseTemplates },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateTemplateRequest extends $tea.Model {
  templateURL?: string;
  description?: string;
  templateBody?: string;
  templateName: string;
  static names(): { [key: string]: string } {
    return {
      templateURL: 'TemplateURL',
      description: 'Description',
      templateBody: 'TemplateBody',
      templateName: 'TemplateName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      templateURL: 'string',
      description: 'string',
      templateBody: 'string',
      templateName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateTemplateResponse extends $tea.Model {
  requestId: string;
  templateId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      templateId: 'TemplateId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      templateId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateStackRequest extends $tea.Model {
  disableRollback?: boolean;
  templateBody?: string;
  parameters?: CreateStackRequestParameters[];
  stackPolicyURL?: string;
  timeoutInMinutes?: number;
  stackPolicyBody?: string;
  stackName: string;
  regionId: string;
  clientToken?: string;
  templateURL?: string;
  notificationURLs?: string[];
  ramRoleName?: string;
  deletionProtection?: string;
  static names(): { [key: string]: string } {
    return {
      disableRollback: 'DisableRollback',
      templateBody: 'TemplateBody',
      parameters: 'Parameters',
      stackPolicyURL: 'StackPolicyURL',
      timeoutInMinutes: 'TimeoutInMinutes',
      stackPolicyBody: 'StackPolicyBody',
      stackName: 'StackName',
      regionId: 'RegionId',
      clientToken: 'ClientToken',
      templateURL: 'TemplateURL',
      notificationURLs: 'NotificationURLs',
      ramRoleName: 'RamRoleName',
      deletionProtection: 'DeletionProtection',
    };
  }

  static types(): { [key: string]: any } {
    return {
      disableRollback: 'boolean',
      templateBody: 'string',
      parameters: { 'type': 'array', 'itemType': CreateStackRequestParameters },
      stackPolicyURL: 'string',
      timeoutInMinutes: 'number',
      stackPolicyBody: 'string',
      stackName: 'string',
      regionId: 'string',
      clientToken: 'string',
      templateURL: 'string',
      notificationURLs: { 'type': 'array', 'itemType': 'string' },
      ramRoleName: 'string',
      deletionProtection: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateStackResponse extends $tea.Model {
  requestId: string;
  stackId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      stackId: 'StackId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      stackId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetStackRequest extends $tea.Model {
  stackId: string;
  regionId: string;
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      stackId: 'StackId',
      regionId: 'RegionId',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      stackId: 'string',
      regionId: 'string',
      clientToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetStackResponse extends $tea.Model {
  createTime: string;
  description: string;
  disableRollback: boolean;
  regionId: string;
  requestId: string;
  stackId: string;
  stackName: string;
  status: string;
  statusReason: string;
  templateDescription: string;
  timeoutInMinutes: number;
  updateTime: string;
  parentStackId: string;
  stackDriftStatus: string;
  driftDetectionTime: string;
  ramRoleName: string;
  deletionProtection: string;
  rootStackId: string;
  parameters: GetStackResponseParameters[];
  outputs: { [key: string]: any }[];
  notificationURLs: string[];
  static names(): { [key: string]: string } {
    return {
      createTime: 'CreateTime',
      description: 'Description',
      disableRollback: 'DisableRollback',
      regionId: 'RegionId',
      requestId: 'RequestId',
      stackId: 'StackId',
      stackName: 'StackName',
      status: 'Status',
      statusReason: 'StatusReason',
      templateDescription: 'TemplateDescription',
      timeoutInMinutes: 'TimeoutInMinutes',
      updateTime: 'UpdateTime',
      parentStackId: 'ParentStackId',
      stackDriftStatus: 'StackDriftStatus',
      driftDetectionTime: 'DriftDetectionTime',
      ramRoleName: 'RamRoleName',
      deletionProtection: 'DeletionProtection',
      rootStackId: 'RootStackId',
      parameters: 'Parameters',
      outputs: 'Outputs',
      notificationURLs: 'NotificationURLs',
    };
  }

  static types(): { [key: string]: any } {
    return {
      createTime: 'string',
      description: 'string',
      disableRollback: 'boolean',
      regionId: 'string',
      requestId: 'string',
      stackId: 'string',
      stackName: 'string',
      status: 'string',
      statusReason: 'string',
      templateDescription: 'string',
      timeoutInMinutes: 'number',
      updateTime: 'string',
      parentStackId: 'string',
      stackDriftStatus: 'string',
      driftDetectionTime: 'string',
      ramRoleName: 'string',
      deletionProtection: 'string',
      rootStackId: 'string',
      parameters: { 'type': 'array', 'itemType': GetStackResponseParameters },
      outputs: { 'type': 'array', 'itemType': { 'type': 'map', 'keyType': 'string', 'valueType': 'any' } },
      notificationURLs: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteStackRequest extends $tea.Model {
  stackId: string;
  retainAllResources?: boolean;
  regionId: string;
  retainResources?: string[];
  ramRoleName?: string;
  static names(): { [key: string]: string } {
    return {
      stackId: 'StackId',
      retainAllResources: 'RetainAllResources',
      regionId: 'RegionId',
      retainResources: 'RetainResources',
      ramRoleName: 'RamRoleName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      stackId: 'string',
      retainAllResources: 'boolean',
      regionId: 'string',
      retainResources: { 'type': 'array', 'itemType': 'string' },
      ramRoleName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteStackResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateStackRequest extends $tea.Model {
  stackId: string;
  clientToken?: string;
  stackPolicyDuringUpdateBody?: string;
  timeoutInMinutes?: number;
  templateBody?: string;
  parameters?: UpdateStackRequestParameters[];
  stackPolicyURL?: string;
  stackPolicyDuringUpdateURL?: string;
  stackPolicyBody?: string;
  usePreviousParameters?: boolean;
  regionId: string;
  disableRollback?: boolean;
  templateURL?: string;
  ramRoleName?: string;
  replacementOption?: string;
  static names(): { [key: string]: string } {
    return {
      stackId: 'StackId',
      clientToken: 'ClientToken',
      stackPolicyDuringUpdateBody: 'StackPolicyDuringUpdateBody',
      timeoutInMinutes: 'TimeoutInMinutes',
      templateBody: 'TemplateBody',
      parameters: 'Parameters',
      stackPolicyURL: 'StackPolicyURL',
      stackPolicyDuringUpdateURL: 'StackPolicyDuringUpdateURL',
      stackPolicyBody: 'StackPolicyBody',
      usePreviousParameters: 'UsePreviousParameters',
      regionId: 'RegionId',
      disableRollback: 'DisableRollback',
      templateURL: 'TemplateURL',
      ramRoleName: 'RamRoleName',
      replacementOption: 'ReplacementOption',
    };
  }

  static types(): { [key: string]: any } {
    return {
      stackId: 'string',
      clientToken: 'string',
      stackPolicyDuringUpdateBody: 'string',
      timeoutInMinutes: 'number',
      templateBody: 'string',
      parameters: { 'type': 'array', 'itemType': UpdateStackRequestParameters },
      stackPolicyURL: 'string',
      stackPolicyDuringUpdateURL: 'string',
      stackPolicyBody: 'string',
      usePreviousParameters: 'boolean',
      regionId: 'string',
      disableRollback: 'boolean',
      templateURL: 'string',
      ramRoleName: 'string',
      replacementOption: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateStackResponse extends $tea.Model {
  requestId: string;
  stackId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      stackId: 'StackId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      stackId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListStacksRequest extends $tea.Model {
  status?: string[];
  pageSize?: number;
  parentStackId?: string;
  regionId: string;
  stackName?: string[];
  pageNumber?: number;
  showNestedStack?: boolean;
  tag?: ListStacksRequestTag[];
  stackId?: string;
  static names(): { [key: string]: string } {
    return {
      status: 'Status',
      pageSize: 'PageSize',
      parentStackId: 'ParentStackId',
      regionId: 'RegionId',
      stackName: 'StackName',
      pageNumber: 'PageNumber',
      showNestedStack: 'ShowNestedStack',
      tag: 'Tag',
      stackId: 'StackId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      status: { 'type': 'array', 'itemType': 'string' },
      pageSize: 'number',
      parentStackId: 'string',
      regionId: 'string',
      stackName: { 'type': 'array', 'itemType': 'string' },
      pageNumber: 'number',
      showNestedStack: 'boolean',
      tag: { 'type': 'array', 'itemType': ListStacksRequestTag },
      stackId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListStacksResponse extends $tea.Model {
  pageNumber: number;
  pageSize: number;
  requestId: string;
  totalCount: number;
  stacks: ListStacksResponseStacks[];
  static names(): { [key: string]: string } {
    return {
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      requestId: 'RequestId',
      totalCount: 'TotalCount',
      stacks: 'Stacks',
    };
  }

  static types(): { [key: string]: any } {
    return {
      pageNumber: 'number',
      pageSize: 'number',
      requestId: 'string',
      totalCount: 'number',
      stacks: { 'type': 'array', 'itemType': ListStacksResponseStacks },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PreviewStackRequest extends $tea.Model {
  disableRollback?: boolean;
  timeoutInMinutes?: number;
  parameters?: PreviewStackRequestParameters[];
  templateBody?: string;
  stackPolicyURL?: string;
  regionId: string;
  stackPolicyBody?: string;
  stackName: string;
  clientToken?: string;
  templateURL?: string;
  static names(): { [key: string]: string } {
    return {
      disableRollback: 'DisableRollback',
      timeoutInMinutes: 'TimeoutInMinutes',
      parameters: 'Parameters',
      templateBody: 'TemplateBody',
      stackPolicyURL: 'StackPolicyURL',
      regionId: 'RegionId',
      stackPolicyBody: 'StackPolicyBody',
      stackName: 'StackName',
      clientToken: 'ClientToken',
      templateURL: 'TemplateURL',
    };
  }

  static types(): { [key: string]: any } {
    return {
      disableRollback: 'boolean',
      timeoutInMinutes: 'number',
      parameters: { 'type': 'array', 'itemType': PreviewStackRequestParameters },
      templateBody: 'string',
      stackPolicyURL: 'string',
      regionId: 'string',
      stackPolicyBody: 'string',
      stackName: 'string',
      clientToken: 'string',
      templateURL: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PreviewStackResponse extends $tea.Model {
  requestId: string;
  stack: PreviewStackResponseStack;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      stack: 'Stack',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      stack: PreviewStackResponseStack,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetTemplateEstimateCostRequest extends $tea.Model {
  templateURL?: string;
  regionId: string;
  parameters?: GetTemplateEstimateCostRequestParameters[];
  templateBody?: string;
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      templateURL: 'TemplateURL',
      regionId: 'RegionId',
      parameters: 'Parameters',
      templateBody: 'TemplateBody',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      templateURL: 'string',
      regionId: 'string',
      parameters: { 'type': 'array', 'itemType': GetTemplateEstimateCostRequestParameters },
      templateBody: 'string',
      clientToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetTemplateEstimateCostResponse extends $tea.Model {
  requestId: string;
  resources: { [key: string]: any };
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      resources: 'Resources',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      resources: { 'type': 'map', 'keyType': 'string', 'valueType': 'any' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CancelUpdateStackRequest extends $tea.Model {
  stackId: string;
  regionId: string;
  cancelType?: string;
  static names(): { [key: string]: string } {
    return {
      stackId: 'StackId',
      regionId: 'RegionId',
      cancelType: 'CancelType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      stackId: 'string',
      regionId: 'string',
      cancelType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CancelUpdateStackResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ContinueCreateStackRequest extends $tea.Model {
  stackId: string;
  recreatingResources?: string[];
  regionId: string;
  ramRoleName?: string;
  mode?: string;
  templateBody?: string;
  templateURL?: string;
  parameters?: ContinueCreateStackRequestParameters[];
  dryRun?: boolean;
  static names(): { [key: string]: string } {
    return {
      stackId: 'StackId',
      recreatingResources: 'RecreatingResources',
      regionId: 'RegionId',
      ramRoleName: 'RamRoleName',
      mode: 'Mode',
      templateBody: 'TemplateBody',
      templateURL: 'TemplateURL',
      parameters: 'Parameters',
      dryRun: 'DryRun',
    };
  }

  static types(): { [key: string]: any } {
    return {
      stackId: 'string',
      recreatingResources: { 'type': 'array', 'itemType': 'string' },
      regionId: 'string',
      ramRoleName: 'string',
      mode: 'string',
      templateBody: 'string',
      templateURL: 'string',
      parameters: { 'type': 'array', 'itemType': ContinueCreateStackRequestParameters },
      dryRun: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ContinueCreateStackResponse extends $tea.Model {
  requestId: string;
  stackId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      stackId: 'StackId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      stackId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SetStackPolicyRequest extends $tea.Model {
  stackId: string;
  regionId: string;
  stackPolicyBody?: string;
  stackPolicyURL?: string;
  static names(): { [key: string]: string } {
    return {
      stackId: 'StackId',
      regionId: 'RegionId',
      stackPolicyBody: 'StackPolicyBody',
      stackPolicyURL: 'StackPolicyURL',
    };
  }

  static types(): { [key: string]: any } {
    return {
      stackId: 'string',
      regionId: 'string',
      stackPolicyBody: 'string',
      stackPolicyURL: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SetStackPolicyResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetStackPolicyRequest extends $tea.Model {
  stackId: string;
  regionId: string;
  static names(): { [key: string]: string } {
    return {
      stackId: 'StackId',
      regionId: 'RegionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      stackId: 'string',
      regionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetStackPolicyResponse extends $tea.Model {
  requestId: string;
  stackPolicyBody: { [key: string]: any };
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      stackPolicyBody: 'StackPolicyBody',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      stackPolicyBody: { 'type': 'map', 'keyType': 'string', 'valueType': 'any' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ValidateTemplateRequest extends $tea.Model {
  templateURL?: string;
  regionId?: string;
  templateBody?: string;
  static names(): { [key: string]: string } {
    return {
      templateURL: 'TemplateURL',
      regionId: 'RegionId',
      templateBody: 'TemplateBody',
    };
  }

  static types(): { [key: string]: any } {
    return {
      templateURL: 'string',
      regionId: 'string',
      templateBody: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ValidateTemplateResponse extends $tea.Model {
  description: string;
  requestId: string;
  parameters: { [key: string]: any }[];
  static names(): { [key: string]: string } {
    return {
      description: 'Description',
      requestId: 'RequestId',
      parameters: 'Parameters',
    };
  }

  static types(): { [key: string]: any } {
    return {
      description: 'string',
      requestId: 'string',
      parameters: { 'type': 'array', 'itemType': { 'type': 'map', 'keyType': 'string', 'valueType': 'any' } },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetTemplateRequest extends $tea.Model {
  stackId?: string;
  regionId?: string;
  changeSetId?: string;
  templateId?: string;
  static names(): { [key: string]: string } {
    return {
      stackId: 'StackId',
      regionId: 'RegionId',
      changeSetId: 'ChangeSetId',
      templateId: 'TemplateId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      stackId: 'string',
      regionId: 'string',
      changeSetId: 'string',
      templateId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetTemplateResponse extends $tea.Model {
  requestId: string;
  templateBody: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      templateBody: 'TemplateBody',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      templateBody: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetChangeSetRequest extends $tea.Model {
  showTemplate?: boolean;
  regionId: string;
  changeSetId: string;
  static names(): { [key: string]: string } {
    return {
      showTemplate: 'ShowTemplate',
      regionId: 'RegionId',
      changeSetId: 'ChangeSetId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      showTemplate: 'boolean',
      regionId: 'string',
      changeSetId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetChangeSetResponse extends $tea.Model {
  changeSetId: string;
  changeSetName: string;
  changeSetType: string;
  createTime: string;
  description: string;
  disableRollback: boolean;
  executionStatus: string;
  regionId: string;
  requestId: string;
  stackId: string;
  stackName: string;
  status: string;
  templateBody: string;
  timeoutInMinutes: number;
  statusReason: string;
  parameters: GetChangeSetResponseParameters[];
  changes: { [key: string]: any }[];
  static names(): { [key: string]: string } {
    return {
      changeSetId: 'ChangeSetId',
      changeSetName: 'ChangeSetName',
      changeSetType: 'ChangeSetType',
      createTime: 'CreateTime',
      description: 'Description',
      disableRollback: 'DisableRollback',
      executionStatus: 'ExecutionStatus',
      regionId: 'RegionId',
      requestId: 'RequestId',
      stackId: 'StackId',
      stackName: 'StackName',
      status: 'Status',
      templateBody: 'TemplateBody',
      timeoutInMinutes: 'TimeoutInMinutes',
      statusReason: 'StatusReason',
      parameters: 'Parameters',
      changes: 'Changes',
    };
  }

  static types(): { [key: string]: any } {
    return {
      changeSetId: 'string',
      changeSetName: 'string',
      changeSetType: 'string',
      createTime: 'string',
      description: 'string',
      disableRollback: 'boolean',
      executionStatus: 'string',
      regionId: 'string',
      requestId: 'string',
      stackId: 'string',
      stackName: 'string',
      status: 'string',
      templateBody: 'string',
      timeoutInMinutes: 'number',
      statusReason: 'string',
      parameters: { 'type': 'array', 'itemType': GetChangeSetResponseParameters },
      changes: { 'type': 'array', 'itemType': { 'type': 'map', 'keyType': 'string', 'valueType': 'any' } },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListChangeSetsRequest extends $tea.Model {
  stackId: string;
  status?: string[];
  changeSetName?: string[];
  pageSize?: number;
  regionId: string;
  pageNumber?: number;
  executionStatus?: string[];
  changeSetId?: string;
  static names(): { [key: string]: string } {
    return {
      stackId: 'StackId',
      status: 'Status',
      changeSetName: 'ChangeSetName',
      pageSize: 'PageSize',
      regionId: 'RegionId',
      pageNumber: 'PageNumber',
      executionStatus: 'ExecutionStatus',
      changeSetId: 'ChangeSetId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      stackId: 'string',
      status: { 'type': 'array', 'itemType': 'string' },
      changeSetName: { 'type': 'array', 'itemType': 'string' },
      pageSize: 'number',
      regionId: 'string',
      pageNumber: 'number',
      executionStatus: { 'type': 'array', 'itemType': 'string' },
      changeSetId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListChangeSetsResponse extends $tea.Model {
  pageNumber: number;
  pageSize: number;
  requestId: string;
  totalCount: number;
  changeSets: ListChangeSetsResponseChangeSets[];
  static names(): { [key: string]: string } {
    return {
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      requestId: 'RequestId',
      totalCount: 'TotalCount',
      changeSets: 'ChangeSets',
    };
  }

  static types(): { [key: string]: any } {
    return {
      pageNumber: 'number',
      pageSize: 'number',
      requestId: 'string',
      totalCount: 'number',
      changeSets: { 'type': 'array', 'itemType': ListChangeSetsResponseChangeSets },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ExecuteChangeSetRequest extends $tea.Model {
  regionId: string;
  changeSetId: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      changeSetId: 'ChangeSetId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      changeSetId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ExecuteChangeSetResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteChangeSetRequest extends $tea.Model {
  regionId: string;
  changeSetId: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      changeSetId: 'ChangeSetId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      changeSetId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteChangeSetResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListStackEventsRequest extends $tea.Model {
  stackId: string;
  status?: string[];
  pageSize?: number;
  resourceType?: string[];
  regionId: string;
  pageNumber?: number;
  logicalResourceId?: string[];
  static names(): { [key: string]: string } {
    return {
      stackId: 'StackId',
      status: 'Status',
      pageSize: 'PageSize',
      resourceType: 'ResourceType',
      regionId: 'RegionId',
      pageNumber: 'PageNumber',
      logicalResourceId: 'LogicalResourceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      stackId: 'string',
      status: { 'type': 'array', 'itemType': 'string' },
      pageSize: 'number',
      resourceType: { 'type': 'array', 'itemType': 'string' },
      regionId: 'string',
      pageNumber: 'number',
      logicalResourceId: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListStackEventsResponse extends $tea.Model {
  pageNumber: number;
  pageSize: number;
  requestId: string;
  totalCount: number;
  events: ListStackEventsResponseEvents[];
  static names(): { [key: string]: string } {
    return {
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      requestId: 'RequestId',
      totalCount: 'TotalCount',
      events: 'Events',
    };
  }

  static types(): { [key: string]: any } {
    return {
      pageNumber: 'number',
      pageSize: 'number',
      requestId: 'string',
      totalCount: 'number',
      events: { 'type': 'array', 'itemType': ListStackEventsResponseEvents },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListStackResourcesRequest extends $tea.Model {
  stackId: string;
  regionId: string;
  static names(): { [key: string]: string } {
    return {
      stackId: 'StackId',
      regionId: 'RegionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      stackId: 'string',
      regionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListStackResourcesResponse extends $tea.Model {
  requestId: string;
  resources: ListStackResourcesResponseResources[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      resources: 'Resources',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      resources: { 'type': 'array', 'itemType': ListStackResourcesResponseResources },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetStackResourceRequest extends $tea.Model {
  stackId: string;
  clientToken?: string;
  regionId: string;
  showResourceAttributes?: boolean;
  logicalResourceId: string;
  static names(): { [key: string]: string } {
    return {
      stackId: 'StackId',
      clientToken: 'ClientToken',
      regionId: 'RegionId',
      showResourceAttributes: 'ShowResourceAttributes',
      logicalResourceId: 'LogicalResourceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      stackId: 'string',
      clientToken: 'string',
      regionId: 'string',
      showResourceAttributes: 'boolean',
      logicalResourceId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetStackResourceResponse extends $tea.Model {
  createTime: string;
  description: string;
  logicalResourceId: string;
  metadata: { [key: string]: any };
  physicalResourceId: string;
  requestId: string;
  resourceType: string;
  stackId: string;
  stackName: string;
  status: string;
  statusReason: string;
  updateTime: string;
  resourceDriftStatus: string;
  driftDetectionTime: string;
  resourceAttributes: { [key: string]: any }[];
  static names(): { [key: string]: string } {
    return {
      createTime: 'CreateTime',
      description: 'Description',
      logicalResourceId: 'LogicalResourceId',
      metadata: 'Metadata',
      physicalResourceId: 'PhysicalResourceId',
      requestId: 'RequestId',
      resourceType: 'ResourceType',
      stackId: 'StackId',
      stackName: 'StackName',
      status: 'Status',
      statusReason: 'StatusReason',
      updateTime: 'UpdateTime',
      resourceDriftStatus: 'ResourceDriftStatus',
      driftDetectionTime: 'DriftDetectionTime',
      resourceAttributes: 'ResourceAttributes',
    };
  }

  static types(): { [key: string]: any } {
    return {
      createTime: 'string',
      description: 'string',
      logicalResourceId: 'string',
      metadata: { 'type': 'map', 'keyType': 'string', 'valueType': 'any' },
      physicalResourceId: 'string',
      requestId: 'string',
      resourceType: 'string',
      stackId: 'string',
      stackName: 'string',
      status: 'string',
      statusReason: 'string',
      updateTime: 'string',
      resourceDriftStatus: 'string',
      driftDetectionTime: 'string',
      resourceAttributes: { 'type': 'array', 'itemType': { 'type': 'map', 'keyType': 'string', 'valueType': 'any' } },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetResourceTypeTemplateRequest extends $tea.Model {
  resourceType: string;
  static names(): { [key: string]: string } {
    return {
      resourceType: 'ResourceType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      resourceType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetResourceTypeTemplateResponse extends $tea.Model {
  requestId: string;
  templateBody: { [key: string]: any };
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      templateBody: 'TemplateBody',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      templateBody: { 'type': 'map', 'keyType': 'string', 'valueType': 'any' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetResourceTypeRequest extends $tea.Model {
  resourceType: string;
  static names(): { [key: string]: string } {
    return {
      resourceType: 'ResourceType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      resourceType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetResourceTypeResponse extends $tea.Model {
  attributes: { [key: string]: any };
  properties: { [key: string]: any };
  requestId: string;
  resourceType: string;
  supportDriftDetection: boolean;
  static names(): { [key: string]: string } {
    return {
      attributes: 'Attributes',
      properties: 'Properties',
      requestId: 'RequestId',
      resourceType: 'ResourceType',
      supportDriftDetection: 'SupportDriftDetection',
    };
  }

  static types(): { [key: string]: any } {
    return {
      attributes: { 'type': 'map', 'keyType': 'string', 'valueType': 'any' },
      properties: { 'type': 'map', 'keyType': 'string', 'valueType': 'any' },
      requestId: 'string',
      resourceType: 'string',
      supportDriftDetection: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListResourceTypesRequest extends $tea.Model {
  static names(): { [key: string]: string } {
    return {
    };
  }

  static types(): { [key: string]: any } {
    return {
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListResourceTypesResponse extends $tea.Model {
  requestId: string;
  resourceTypes: string[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      resourceTypes: 'ResourceTypes',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      resourceTypes: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SignalResourceRequest extends $tea.Model {
  stackId: string;
  status: string;
  regionId: string;
  uniqueId: string;
  clientToken?: string;
  logicalResourceId: string;
  static names(): { [key: string]: string } {
    return {
      stackId: 'StackId',
      status: 'Status',
      regionId: 'RegionId',
      uniqueId: 'UniqueId',
      clientToken: 'ClientToken',
      logicalResourceId: 'LogicalResourceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      stackId: 'string',
      status: 'string',
      regionId: 'string',
      uniqueId: 'string',
      clientToken: 'string',
      logicalResourceId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SignalResourceResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeRegionsRequest extends $tea.Model {
  acceptLanguage?: string;
  static names(): { [key: string]: string } {
    return {
      acceptLanguage: 'AcceptLanguage',
    };
  }

  static types(): { [key: string]: any } {
    return {
      acceptLanguage: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeRegionsResponse extends $tea.Model {
  requestId: string;
  regions: DescribeRegionsResponseRegions[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      regions: 'Regions',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      regions: { 'type': 'array', 'itemType': DescribeRegionsResponseRegions },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateChangeSetRequest extends $tea.Model {
  stackId?: string;
  parameters?: CreateChangeSetRequestParameters[];
  stackPolicyURL?: string;
  stackPolicyBody?: string;
  stackName?: string;
  usePreviousParameters?: boolean;
  changeSetType?: string;
  description?: string;
  regionId: string;
  clientToken?: string;
  templateURL?: string;
  stackPolicyDuringUpdateURL?: string;
  templateBody?: string;
  timeoutInMinutes?: number;
  disableRollback?: boolean;
  changeSetName: string;
  stackPolicyDuringUpdateBody?: string;
  notificationURLs?: string[];
  ramRoleName?: string;
  replacementOption?: string;
  resourcesToImport?: CreateChangeSetRequestResourcesToImport[];
  static names(): { [key: string]: string } {
    return {
      stackId: 'StackId',
      parameters: 'Parameters',
      stackPolicyURL: 'StackPolicyURL',
      stackPolicyBody: 'StackPolicyBody',
      stackName: 'StackName',
      usePreviousParameters: 'UsePreviousParameters',
      changeSetType: 'ChangeSetType',
      description: 'Description',
      regionId: 'RegionId',
      clientToken: 'ClientToken',
      templateURL: 'TemplateURL',
      stackPolicyDuringUpdateURL: 'StackPolicyDuringUpdateURL',
      templateBody: 'TemplateBody',
      timeoutInMinutes: 'TimeoutInMinutes',
      disableRollback: 'DisableRollback',
      changeSetName: 'ChangeSetName',
      stackPolicyDuringUpdateBody: 'StackPolicyDuringUpdateBody',
      notificationURLs: 'NotificationURLs',
      ramRoleName: 'RamRoleName',
      replacementOption: 'ReplacementOption',
      resourcesToImport: 'ResourcesToImport',
    };
  }

  static types(): { [key: string]: any } {
    return {
      stackId: 'string',
      parameters: { 'type': 'array', 'itemType': CreateChangeSetRequestParameters },
      stackPolicyURL: 'string',
      stackPolicyBody: 'string',
      stackName: 'string',
      usePreviousParameters: 'boolean',
      changeSetType: 'string',
      description: 'string',
      regionId: 'string',
      clientToken: 'string',
      templateURL: 'string',
      stackPolicyDuringUpdateURL: 'string',
      templateBody: 'string',
      timeoutInMinutes: 'number',
      disableRollback: 'boolean',
      changeSetName: 'string',
      stackPolicyDuringUpdateBody: 'string',
      notificationURLs: { 'type': 'array', 'itemType': 'string' },
      ramRoleName: 'string',
      replacementOption: 'string',
      resourcesToImport: { 'type': 'array', 'itemType': CreateChangeSetRequestResourcesToImport },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateChangeSetResponse extends $tea.Model {
  changeSetId: string;
  requestId: string;
  stackId: string;
  static names(): { [key: string]: string } {
    return {
      changeSetId: 'ChangeSetId',
      requestId: 'RequestId',
      stackId: 'StackId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      changeSetId: 'string',
      requestId: 'string',
      stackId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetTemplateSummaryResponseResourceIdentifierSummaries extends $tea.Model {
  resourceType: string;
  logicalResourceIds: string[];
  resourceIdentifiers: string[];
  static names(): { [key: string]: string } {
    return {
      resourceType: 'ResourceType',
      logicalResourceIds: 'LogicalResourceIds',
      resourceIdentifiers: 'ResourceIdentifiers',
    };
  }

  static types(): { [key: string]: any } {
    return {
      resourceType: 'string',
      logicalResourceIds: { 'type': 'array', 'itemType': 'string' },
      resourceIdentifiers: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListStackResourceDriftsResponseResourceDriftsPropertyDifferences extends $tea.Model {
  propertyPath: string;
  actualValue: string;
  expectedValue: string;
  differenceType: string;
  static names(): { [key: string]: string } {
    return {
      propertyPath: 'PropertyPath',
      actualValue: 'ActualValue',
      expectedValue: 'ExpectedValue',
      differenceType: 'DifferenceType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      propertyPath: 'string',
      actualValue: 'string',
      expectedValue: 'string',
      differenceType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListStackResourceDriftsResponseResourceDrifts extends $tea.Model {
  driftDetectionTime: string;
  resourceDriftStatus: string;
  stackId: string;
  resourceType: string;
  physicalResourceId: string;
  logicalResourceId: string;
  actualProperties: string;
  expectedProperties: string;
  propertyDifferences: ListStackResourceDriftsResponseResourceDriftsPropertyDifferences[];
  static names(): { [key: string]: string } {
    return {
      driftDetectionTime: 'DriftDetectionTime',
      resourceDriftStatus: 'ResourceDriftStatus',
      stackId: 'StackId',
      resourceType: 'ResourceType',
      physicalResourceId: 'PhysicalResourceId',
      logicalResourceId: 'LogicalResourceId',
      actualProperties: 'ActualProperties',
      expectedProperties: 'ExpectedProperties',
      propertyDifferences: 'PropertyDifferences',
    };
  }

  static types(): { [key: string]: any } {
    return {
      driftDetectionTime: 'string',
      resourceDriftStatus: 'string',
      stackId: 'string',
      resourceType: 'string',
      physicalResourceId: 'string',
      logicalResourceId: 'string',
      actualProperties: 'string',
      expectedProperties: 'string',
      propertyDifferences: { 'type': 'array', 'itemType': ListStackResourceDriftsResponseResourceDriftsPropertyDifferences },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DetectStackResourceDriftResponsePropertyDifferences extends $tea.Model {
  propertyPath: string;
  actualValue: string;
  expectedValue: string;
  differenceType: string;
  static names(): { [key: string]: string } {
    return {
      propertyPath: 'PropertyPath',
      actualValue: 'ActualValue',
      expectedValue: 'ExpectedValue',
      differenceType: 'DifferenceType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      propertyPath: 'string',
      actualValue: 'string',
      expectedValue: 'string',
      differenceType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateStackInstancesRequestParameterOverrides extends $tea.Model {
  parameterValue: string;
  parameterKey: string;
  static names(): { [key: string]: string } {
    return {
      parameterValue: 'ParameterValue',
      parameterKey: 'ParameterKey',
    };
  }

  static types(): { [key: string]: any } {
    return {
      parameterValue: 'string',
      parameterKey: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListStackGroupOperationsResponseStackGroupOperations extends $tea.Model {
  stackGroupName: string;
  stackGroupId: string;
  operationId: string;
  operationDescription: string;
  createTime: string;
  endTime: string;
  action: string;
  status: string;
  static names(): { [key: string]: string } {
    return {
      stackGroupName: 'StackGroupName',
      stackGroupId: 'StackGroupId',
      operationId: 'OperationId',
      operationDescription: 'OperationDescription',
      createTime: 'CreateTime',
      endTime: 'EndTime',
      action: 'Action',
      status: 'Status',
    };
  }

  static types(): { [key: string]: any } {
    return {
      stackGroupName: 'string',
      stackGroupId: 'string',
      operationId: 'string',
      operationDescription: 'string',
      createTime: 'string',
      endTime: 'string',
      action: 'string',
      status: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetStackGroupResponseStackGroupParameters extends $tea.Model {
  parameterKey: string;
  parameterValue: string;
  static names(): { [key: string]: string } {
    return {
      parameterKey: 'ParameterKey',
      parameterValue: 'ParameterValue',
    };
  }

  static types(): { [key: string]: any } {
    return {
      parameterKey: 'string',
      parameterValue: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetStackGroupResponseStackGroupStackGroupDriftDetectionDetail extends $tea.Model {
  driftDetectionTime: string;
  stackGroupDriftStatus: string;
  driftDetectionStatus: string;
  driftedStackInstancesCount: number;
  failedStackInstancesCount: number;
  cancelledStackInstancesCount: number;
  inProgressStackInstancesCount: number;
  inSyncStackInstancesCount: number;
  totalStackInstancesCount: number;
  static names(): { [key: string]: string } {
    return {
      driftDetectionTime: 'DriftDetectionTime',
      stackGroupDriftStatus: 'StackGroupDriftStatus',
      driftDetectionStatus: 'DriftDetectionStatus',
      driftedStackInstancesCount: 'DriftedStackInstancesCount',
      failedStackInstancesCount: 'FailedStackInstancesCount',
      cancelledStackInstancesCount: 'CancelledStackInstancesCount',
      inProgressStackInstancesCount: 'InProgressStackInstancesCount',
      inSyncStackInstancesCount: 'InSyncStackInstancesCount',
      totalStackInstancesCount: 'TotalStackInstancesCount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      driftDetectionTime: 'string',
      stackGroupDriftStatus: 'string',
      driftDetectionStatus: 'string',
      driftedStackInstancesCount: 'number',
      failedStackInstancesCount: 'number',
      cancelledStackInstancesCount: 'number',
      inProgressStackInstancesCount: 'number',
      inSyncStackInstancesCount: 'number',
      totalStackInstancesCount: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetStackGroupResponseStackGroup extends $tea.Model {
  stackGroupName: string;
  stackGroupId: string;
  status: string;
  description: string;
  templateBody: string;
  executionRoleName: string;
  administrationRoleName: string;
  parameters: GetStackGroupResponseStackGroupParameters[];
  stackGroupDriftDetectionDetail: GetStackGroupResponseStackGroupStackGroupDriftDetectionDetail;
  static names(): { [key: string]: string } {
    return {
      stackGroupName: 'StackGroupName',
      stackGroupId: 'StackGroupId',
      status: 'Status',
      description: 'Description',
      templateBody: 'TemplateBody',
      executionRoleName: 'ExecutionRoleName',
      administrationRoleName: 'AdministrationRoleName',
      parameters: 'Parameters',
      stackGroupDriftDetectionDetail: 'StackGroupDriftDetectionDetail',
    };
  }

  static types(): { [key: string]: any } {
    return {
      stackGroupName: 'string',
      stackGroupId: 'string',
      status: 'string',
      description: 'string',
      templateBody: 'string',
      executionRoleName: 'string',
      administrationRoleName: 'string',
      parameters: { 'type': 'array', 'itemType': GetStackGroupResponseStackGroupParameters },
      stackGroupDriftDetectionDetail: GetStackGroupResponseStackGroupStackGroupDriftDetectionDetail,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetStackGroupOperationResponseStackGroupOperationOperationPreferences extends $tea.Model {
  failureToleranceCount: number;
  failureTolerancePercentage: number;
  maxConcurrentCount: number;
  maxConcurrentPercentage: number;
  regionIdsOrder: string[];
  static names(): { [key: string]: string } {
    return {
      failureToleranceCount: 'FailureToleranceCount',
      failureTolerancePercentage: 'FailureTolerancePercentage',
      maxConcurrentCount: 'MaxConcurrentCount',
      maxConcurrentPercentage: 'MaxConcurrentPercentage',
      regionIdsOrder: 'RegionIdsOrder',
    };
  }

  static types(): { [key: string]: any } {
    return {
      failureToleranceCount: 'number',
      failureTolerancePercentage: 'number',
      maxConcurrentCount: 'number',
      maxConcurrentPercentage: 'number',
      regionIdsOrder: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetStackGroupOperationResponseStackGroupOperationStackGroupDriftDetectionDetail extends $tea.Model {
  driftDetectionTime: string;
  stackGroupDriftStatus: string;
  driftDetectionStatus: string;
  driftedStackInstancesCount: number;
  failedStackInstancesCount: number;
  cancelledStackInstancesCount: number;
  inProgressStackInstancesCount: number;
  inSyncStackInstancesCount: number;
  totalStackInstancesCount: number;
  static names(): { [key: string]: string } {
    return {
      driftDetectionTime: 'DriftDetectionTime',
      stackGroupDriftStatus: 'StackGroupDriftStatus',
      driftDetectionStatus: 'DriftDetectionStatus',
      driftedStackInstancesCount: 'DriftedStackInstancesCount',
      failedStackInstancesCount: 'FailedStackInstancesCount',
      cancelledStackInstancesCount: 'CancelledStackInstancesCount',
      inProgressStackInstancesCount: 'InProgressStackInstancesCount',
      inSyncStackInstancesCount: 'InSyncStackInstancesCount',
      totalStackInstancesCount: 'TotalStackInstancesCount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      driftDetectionTime: 'string',
      stackGroupDriftStatus: 'string',
      driftDetectionStatus: 'string',
      driftedStackInstancesCount: 'number',
      failedStackInstancesCount: 'number',
      cancelledStackInstancesCount: 'number',
      inProgressStackInstancesCount: 'number',
      inSyncStackInstancesCount: 'number',
      totalStackInstancesCount: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetStackGroupOperationResponseStackGroupOperation extends $tea.Model {
  stackGroupName: string;
  stackGroupId: string;
  operationId: string;
  operationDescription: string;
  createTime: string;
  endTime: string;
  action: string;
  status: string;
  retainStacks: boolean;
  administratorRoleName: string;
  executionRoleName: string;
  operationPreferences: GetStackGroupOperationResponseStackGroupOperationOperationPreferences;
  stackGroupDriftDetectionDetail: GetStackGroupOperationResponseStackGroupOperationStackGroupDriftDetectionDetail;
  static names(): { [key: string]: string } {
    return {
      stackGroupName: 'StackGroupName',
      stackGroupId: 'StackGroupId',
      operationId: 'OperationId',
      operationDescription: 'OperationDescription',
      createTime: 'CreateTime',
      endTime: 'EndTime',
      action: 'Action',
      status: 'Status',
      retainStacks: 'RetainStacks',
      administratorRoleName: 'AdministratorRoleName',
      executionRoleName: 'ExecutionRoleName',
      operationPreferences: 'OperationPreferences',
      stackGroupDriftDetectionDetail: 'StackGroupDriftDetectionDetail',
    };
  }

  static types(): { [key: string]: any } {
    return {
      stackGroupName: 'string',
      stackGroupId: 'string',
      operationId: 'string',
      operationDescription: 'string',
      createTime: 'string',
      endTime: 'string',
      action: 'string',
      status: 'string',
      retainStacks: 'boolean',
      administratorRoleName: 'string',
      executionRoleName: 'string',
      operationPreferences: GetStackGroupOperationResponseStackGroupOperationOperationPreferences,
      stackGroupDriftDetectionDetail: GetStackGroupOperationResponseStackGroupOperationStackGroupDriftDetectionDetail,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListStackGroupsResponseStackGroups extends $tea.Model {
  stackGroupName: string;
  stackGroupId: string;
  status: string;
  description: string;
  driftDetectionTime: string;
  stackGroupDriftStatus: string;
  static names(): { [key: string]: string } {
    return {
      stackGroupName: 'StackGroupName',
      stackGroupId: 'StackGroupId',
      status: 'Status',
      description: 'Description',
      driftDetectionTime: 'DriftDetectionTime',
      stackGroupDriftStatus: 'StackGroupDriftStatus',
    };
  }

  static types(): { [key: string]: any } {
    return {
      stackGroupName: 'string',
      stackGroupId: 'string',
      status: 'string',
      description: 'string',
      driftDetectionTime: 'string',
      stackGroupDriftStatus: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateStackInstancesRequestParameterOverrides extends $tea.Model {
  parameterValue: string;
  parameterKey: string;
  static names(): { [key: string]: string } {
    return {
      parameterValue: 'ParameterValue',
      parameterKey: 'ParameterKey',
    };
  }

  static types(): { [key: string]: any } {
    return {
      parameterValue: 'string',
      parameterKey: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateStackGroupRequestParameters extends $tea.Model {
  parameterValue: string;
  parameterKey: string;
  static names(): { [key: string]: string } {
    return {
      parameterValue: 'ParameterValue',
      parameterKey: 'ParameterKey',
    };
  }

  static types(): { [key: string]: any } {
    return {
      parameterValue: 'string',
      parameterKey: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetStackInstanceResponseStackInstanceParameterOverrides extends $tea.Model {
  parameterKey: string;
  parameterValue: string;
  static names(): { [key: string]: string } {
    return {
      parameterKey: 'ParameterKey',
      parameterValue: 'ParameterValue',
    };
  }

  static types(): { [key: string]: any } {
    return {
      parameterKey: 'string',
      parameterValue: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetStackInstanceResponseStackInstance extends $tea.Model {
  stackGroupName: string;
  stackGroupId: string;
  stackId: string;
  accountId: string;
  regionId: string;
  status: string;
  statusReason: string;
  stackDriftStatus: string;
  driftDetectionTime: string;
  parameterOverrides: GetStackInstanceResponseStackInstanceParameterOverrides[];
  static names(): { [key: string]: string } {
    return {
      stackGroupName: 'StackGroupName',
      stackGroupId: 'StackGroupId',
      stackId: 'StackId',
      accountId: 'AccountId',
      regionId: 'RegionId',
      status: 'Status',
      statusReason: 'StatusReason',
      stackDriftStatus: 'StackDriftStatus',
      driftDetectionTime: 'DriftDetectionTime',
      parameterOverrides: 'ParameterOverrides',
    };
  }

  static types(): { [key: string]: any } {
    return {
      stackGroupName: 'string',
      stackGroupId: 'string',
      stackId: 'string',
      accountId: 'string',
      regionId: 'string',
      status: 'string',
      statusReason: 'string',
      stackDriftStatus: 'string',
      driftDetectionTime: 'string',
      parameterOverrides: { 'type': 'array', 'itemType': GetStackInstanceResponseStackInstanceParameterOverrides },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateStackGroupRequestParameters extends $tea.Model {
  parameterValue: string;
  parameterKey: string;
  static names(): { [key: string]: string } {
    return {
      parameterValue: 'ParameterValue',
      parameterKey: 'ParameterKey',
    };
  }

  static types(): { [key: string]: any } {
    return {
      parameterValue: 'string',
      parameterKey: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListStackInstancesResponseStackInstances extends $tea.Model {
  stackGroupName: string;
  stackGroupId: string;
  stackId: string;
  accountId: string;
  regionId: string;
  status: string;
  statusReason: string;
  stackDriftStatus: string;
  driftDetectionTime: string;
  static names(): { [key: string]: string } {
    return {
      stackGroupName: 'StackGroupName',
      stackGroupId: 'StackGroupId',
      stackId: 'StackId',
      accountId: 'AccountId',
      regionId: 'RegionId',
      status: 'Status',
      statusReason: 'StatusReason',
      stackDriftStatus: 'StackDriftStatus',
      driftDetectionTime: 'DriftDetectionTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      stackGroupName: 'string',
      stackGroupId: 'string',
      stackId: 'string',
      accountId: 'string',
      regionId: 'string',
      status: 'string',
      statusReason: 'string',
      stackDriftStatus: 'string',
      driftDetectionTime: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListStackGroupOperationResultsResponseStackGroupOperationResults extends $tea.Model {
  accountId: string;
  regionId: string;
  status: string;
  statusReason: string;
  static names(): { [key: string]: string } {
    return {
      accountId: 'AccountId',
      regionId: 'RegionId',
      status: 'Status',
      statusReason: 'StatusReason',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accountId: 'string',
      regionId: 'string',
      status: 'string',
      statusReason: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListTagResourcesRequestTag extends $tea.Model {
  key?: string;
  value?: string;
  static names(): { [key: string]: string } {
    return {
      key: 'Key',
      value: 'Value',
    };
  }

  static types(): { [key: string]: any } {
    return {
      key: 'string',
      value: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListTagResourcesResponseTagResources extends $tea.Model {
  resourceId: string;
  resourceType: string;
  tagKey: string;
  tagValue: string;
  static names(): { [key: string]: string } {
    return {
      resourceId: 'ResourceId',
      resourceType: 'ResourceType',
      tagKey: 'TagKey',
      tagValue: 'TagValue',
    };
  }

  static types(): { [key: string]: any } {
    return {
      resourceId: 'string',
      resourceType: 'string',
      tagKey: 'string',
      tagValue: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class TagResourcesRequestTag extends $tea.Model {
  key: string;
  value: string;
  static names(): { [key: string]: string } {
    return {
      key: 'Key',
      value: 'Value',
    };
  }

  static types(): { [key: string]: any } {
    return {
      key: 'string',
      value: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListTemplatesRequestTag extends $tea.Model {
  key?: string;
  value?: string;
  static names(): { [key: string]: string } {
    return {
      key: 'Key',
      value: 'Value',
    };
  }

  static types(): { [key: string]: any } {
    return {
      key: 'string',
      value: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListTemplatesResponseTemplates extends $tea.Model {
  createTime: string;
  description: string;
  templateId: string;
  templateName: string;
  updateTime: string;
  static names(): { [key: string]: string } {
    return {
      createTime: 'CreateTime',
      description: 'Description',
      templateId: 'TemplateId',
      templateName: 'TemplateName',
      updateTime: 'UpdateTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      createTime: 'string',
      description: 'string',
      templateId: 'string',
      templateName: 'string',
      updateTime: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateStackRequestParameters extends $tea.Model {
  parameterValue: string;
  parameterKey: string;
  static names(): { [key: string]: string } {
    return {
      parameterValue: 'ParameterValue',
      parameterKey: 'ParameterKey',
    };
  }

  static types(): { [key: string]: any } {
    return {
      parameterValue: 'string',
      parameterKey: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetStackResponseParameters extends $tea.Model {
  parameterKey: string;
  parameterValue: string;
  static names(): { [key: string]: string } {
    return {
      parameterKey: 'ParameterKey',
      parameterValue: 'ParameterValue',
    };
  }

  static types(): { [key: string]: any } {
    return {
      parameterKey: 'string',
      parameterValue: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateStackRequestParameters extends $tea.Model {
  parameterValue: string;
  parameterKey: string;
  static names(): { [key: string]: string } {
    return {
      parameterValue: 'ParameterValue',
      parameterKey: 'ParameterKey',
    };
  }

  static types(): { [key: string]: any } {
    return {
      parameterValue: 'string',
      parameterKey: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListStacksRequestTag extends $tea.Model {
  key?: string;
  value?: string;
  static names(): { [key: string]: string } {
    return {
      key: 'Key',
      value: 'Value',
    };
  }

  static types(): { [key: string]: any } {
    return {
      key: 'string',
      value: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListStacksResponseStacks extends $tea.Model {
  createTime: string;
  disableRollback: boolean;
  regionId: string;
  stackId: string;
  stackName: string;
  status: string;
  statusReason: string;
  timeoutInMinutes: number;
  parentStackId: string;
  updateTime: string;
  stackDriftStatus: string;
  driftDetectionTime: string;
  static names(): { [key: string]: string } {
    return {
      createTime: 'CreateTime',
      disableRollback: 'DisableRollback',
      regionId: 'RegionId',
      stackId: 'StackId',
      stackName: 'StackName',
      status: 'Status',
      statusReason: 'StatusReason',
      timeoutInMinutes: 'TimeoutInMinutes',
      parentStackId: 'ParentStackId',
      updateTime: 'UpdateTime',
      stackDriftStatus: 'StackDriftStatus',
      driftDetectionTime: 'DriftDetectionTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      createTime: 'string',
      disableRollback: 'boolean',
      regionId: 'string',
      stackId: 'string',
      stackName: 'string',
      status: 'string',
      statusReason: 'string',
      timeoutInMinutes: 'number',
      parentStackId: 'string',
      updateTime: 'string',
      stackDriftStatus: 'string',
      driftDetectionTime: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PreviewStackRequestParameters extends $tea.Model {
  parameterValue: string;
  parameterKey: string;
  static names(): { [key: string]: string } {
    return {
      parameterValue: 'ParameterValue',
      parameterKey: 'ParameterKey',
    };
  }

  static types(): { [key: string]: any } {
    return {
      parameterValue: 'string',
      parameterKey: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PreviewStackResponseStackParameters extends $tea.Model {
  parameterKey: string;
  parameterValue: string;
  static names(): { [key: string]: string } {
    return {
      parameterKey: 'ParameterKey',
      parameterValue: 'ParameterValue',
    };
  }

  static types(): { [key: string]: any } {
    return {
      parameterKey: 'string',
      parameterValue: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PreviewStackResponseStackResources extends $tea.Model {
  description: string;
  logicalResourceId: string;
  properties: { [key: string]: any };
  resourceType: string;
  stack: { [key: string]: any };
  requiredBy: string[];
  static names(): { [key: string]: string } {
    return {
      description: 'Description',
      logicalResourceId: 'LogicalResourceId',
      properties: 'Properties',
      resourceType: 'ResourceType',
      stack: 'Stack',
      requiredBy: 'RequiredBy',
    };
  }

  static types(): { [key: string]: any } {
    return {
      description: 'string',
      logicalResourceId: 'string',
      properties: { 'type': 'map', 'keyType': 'string', 'valueType': 'any' },
      resourceType: 'string',
      stack: { 'type': 'map', 'keyType': 'string', 'valueType': 'any' },
      requiredBy: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PreviewStackResponseStack extends $tea.Model {
  description: string;
  disableRollback: boolean;
  regionId: string;
  stackName: string;
  stackPolicyBody: { [key: string]: any };
  templateDescription: string;
  timeoutInMinutes: number;
  parameters: PreviewStackResponseStackParameters[];
  resources: PreviewStackResponseStackResources[];
  static names(): { [key: string]: string } {
    return {
      description: 'Description',
      disableRollback: 'DisableRollback',
      regionId: 'RegionId',
      stackName: 'StackName',
      stackPolicyBody: 'StackPolicyBody',
      templateDescription: 'TemplateDescription',
      timeoutInMinutes: 'TimeoutInMinutes',
      parameters: 'Parameters',
      resources: 'Resources',
    };
  }

  static types(): { [key: string]: any } {
    return {
      description: 'string',
      disableRollback: 'boolean',
      regionId: 'string',
      stackName: 'string',
      stackPolicyBody: { 'type': 'map', 'keyType': 'string', 'valueType': 'any' },
      templateDescription: 'string',
      timeoutInMinutes: 'number',
      parameters: { 'type': 'array', 'itemType': PreviewStackResponseStackParameters },
      resources: { 'type': 'array', 'itemType': PreviewStackResponseStackResources },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetTemplateEstimateCostRequestParameters extends $tea.Model {
  parameterValue: string;
  parameterKey: string;
  static names(): { [key: string]: string } {
    return {
      parameterValue: 'ParameterValue',
      parameterKey: 'ParameterKey',
    };
  }

  static types(): { [key: string]: any } {
    return {
      parameterValue: 'string',
      parameterKey: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ContinueCreateStackRequestParameters extends $tea.Model {
  parameterKey: string;
  parameterValue: string;
  static names(): { [key: string]: string } {
    return {
      parameterKey: 'ParameterKey',
      parameterValue: 'ParameterValue',
    };
  }

  static types(): { [key: string]: any } {
    return {
      parameterKey: 'string',
      parameterValue: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetChangeSetResponseParameters extends $tea.Model {
  parameterKey: string;
  parameterValue: string;
  static names(): { [key: string]: string } {
    return {
      parameterKey: 'ParameterKey',
      parameterValue: 'ParameterValue',
    };
  }

  static types(): { [key: string]: any } {
    return {
      parameterKey: 'string',
      parameterValue: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListChangeSetsResponseChangeSets extends $tea.Model {
  changeSetId: string;
  changeSetName: string;
  changeSetType: string;
  createTime: string;
  description: string;
  executionStatus: string;
  regionId: string;
  stackId: string;
  stackName: string;
  status: string;
  statusReason: string;
  static names(): { [key: string]: string } {
    return {
      changeSetId: 'ChangeSetId',
      changeSetName: 'ChangeSetName',
      changeSetType: 'ChangeSetType',
      createTime: 'CreateTime',
      description: 'Description',
      executionStatus: 'ExecutionStatus',
      regionId: 'RegionId',
      stackId: 'StackId',
      stackName: 'StackName',
      status: 'Status',
      statusReason: 'StatusReason',
    };
  }

  static types(): { [key: string]: any } {
    return {
      changeSetId: 'string',
      changeSetName: 'string',
      changeSetType: 'string',
      createTime: 'string',
      description: 'string',
      executionStatus: 'string',
      regionId: 'string',
      stackId: 'string',
      stackName: 'string',
      status: 'string',
      statusReason: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListStackEventsResponseEvents extends $tea.Model {
  createTime: string;
  eventId: string;
  logicalResourceId: string;
  physicalResourceId: string;
  resourceType: string;
  stackId: string;
  stackName: string;
  status: string;
  statusReason: string;
  static names(): { [key: string]: string } {
    return {
      createTime: 'CreateTime',
      eventId: 'EventId',
      logicalResourceId: 'LogicalResourceId',
      physicalResourceId: 'PhysicalResourceId',
      resourceType: 'ResourceType',
      stackId: 'StackId',
      stackName: 'StackName',
      status: 'Status',
      statusReason: 'StatusReason',
    };
  }

  static types(): { [key: string]: any } {
    return {
      createTime: 'string',
      eventId: 'string',
      logicalResourceId: 'string',
      physicalResourceId: 'string',
      resourceType: 'string',
      stackId: 'string',
      stackName: 'string',
      status: 'string',
      statusReason: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListStackResourcesResponseResources extends $tea.Model {
  createTime: string;
  logicalResourceId: string;
  physicalResourceId: string;
  resourceType: string;
  stackId: string;
  stackName: string;
  status: string;
  statusReason: string;
  updateTime: string;
  resourceDriftStatus: string;
  driftDetectionTime: string;
  static names(): { [key: string]: string } {
    return {
      createTime: 'CreateTime',
      logicalResourceId: 'LogicalResourceId',
      physicalResourceId: 'PhysicalResourceId',
      resourceType: 'ResourceType',
      stackId: 'StackId',
      stackName: 'StackName',
      status: 'Status',
      statusReason: 'StatusReason',
      updateTime: 'UpdateTime',
      resourceDriftStatus: 'ResourceDriftStatus',
      driftDetectionTime: 'DriftDetectionTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      createTime: 'string',
      logicalResourceId: 'string',
      physicalResourceId: 'string',
      resourceType: 'string',
      stackId: 'string',
      stackName: 'string',
      status: 'string',
      statusReason: 'string',
      updateTime: 'string',
      resourceDriftStatus: 'string',
      driftDetectionTime: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeRegionsResponseRegions extends $tea.Model {
  regionId: string;
  localName: string;
  regionEndpoint: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      localName: 'LocalName',
      regionEndpoint: 'RegionEndpoint',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      localName: 'string',
      regionEndpoint: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateChangeSetRequestParameters extends $tea.Model {
  parameterValue: string;
  parameterKey: string;
  static names(): { [key: string]: string } {
    return {
      parameterValue: 'ParameterValue',
      parameterKey: 'ParameterKey',
    };
  }

  static types(): { [key: string]: any } {
    return {
      parameterValue: 'string',
      parameterKey: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateChangeSetRequestResourcesToImport extends $tea.Model {
  logicalResourceId: string;
  resourceType: string;
  resourceIdentifier: string;
  static names(): { [key: string]: string } {
    return {
      logicalResourceId: 'LogicalResourceId',
      resourceType: 'ResourceType',
      resourceIdentifier: 'ResourceIdentifier',
    };
  }

  static types(): { [key: string]: any } {
    return {
      logicalResourceId: 'string',
      resourceType: 'string',
      resourceIdentifier: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}


export default class Client extends RPC {

  constructor(config: $RPC.Config) {
    super(config);
    this._endpointRule = "central";
    this.checkConfig(config);
    this._endpoint = this.getEndpoint("ros", this._regionId, this._endpointRule, this._network, this._suffix, this._endpointMap, this._endpoint);
  }


  async getTemplateSummaryWithOptions(request: GetTemplateSummaryRequest, runtime: $Util.RuntimeOptions): Promise<GetTemplateSummaryResponse> {
    Util.validateModel(request);
    return $tea.cast<GetTemplateSummaryResponse>(await this.doRequest("GetTemplateSummary", "HTTPS", "POST", "2019-09-10", "AK", null, $tea.toMap(request), runtime), new GetTemplateSummaryResponse({}));
  }

  async getTemplateSummary(request: GetTemplateSummaryRequest): Promise<GetTemplateSummaryResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getTemplateSummaryWithOptions(request, runtime);
  }

  async listTagValuesWithOptions(request: ListTagValuesRequest, runtime: $Util.RuntimeOptions): Promise<ListTagValuesResponse> {
    Util.validateModel(request);
    return $tea.cast<ListTagValuesResponse>(await this.doRequest("ListTagValues", "HTTPS", "POST", "2019-09-10", "AK", null, $tea.toMap(request), runtime), new ListTagValuesResponse({}));
  }

  async listTagValues(request: ListTagValuesRequest): Promise<ListTagValuesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.listTagValuesWithOptions(request, runtime);
  }

  async listTagKeysWithOptions(request: ListTagKeysRequest, runtime: $Util.RuntimeOptions): Promise<ListTagKeysResponse> {
    Util.validateModel(request);
    return $tea.cast<ListTagKeysResponse>(await this.doRequest("ListTagKeys", "HTTPS", "POST", "2019-09-10", "AK", null, $tea.toMap(request), runtime), new ListTagKeysResponse({}));
  }

  async listTagKeys(request: ListTagKeysRequest): Promise<ListTagKeysResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.listTagKeysWithOptions(request, runtime);
  }

  async setDeletionProtectionWithOptions(request: SetDeletionProtectionRequest, runtime: $Util.RuntimeOptions): Promise<SetDeletionProtectionResponse> {
    Util.validateModel(request);
    return $tea.cast<SetDeletionProtectionResponse>(await this.doRequest("SetDeletionProtection", "HTTPS", "POST", "2019-09-10", "AK", null, $tea.toMap(request), runtime), new SetDeletionProtectionResponse({}));
  }

  async setDeletionProtection(request: SetDeletionProtectionRequest): Promise<SetDeletionProtectionResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.setDeletionProtectionWithOptions(request, runtime);
  }

  async updateStackTemplateByResourcesWithOptions(request: UpdateStackTemplateByResourcesRequest, runtime: $Util.RuntimeOptions): Promise<UpdateStackTemplateByResourcesResponse> {
    Util.validateModel(request);
    return $tea.cast<UpdateStackTemplateByResourcesResponse>(await this.doRequest("UpdateStackTemplateByResources", "HTTPS", "POST", "2019-09-10", "AK", null, $tea.toMap(request), runtime), new UpdateStackTemplateByResourcesResponse({}));
  }

  async updateStackTemplateByResources(request: UpdateStackTemplateByResourcesRequest): Promise<UpdateStackTemplateByResourcesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.updateStackTemplateByResourcesWithOptions(request, runtime);
  }

  async getStackDriftDetectionStatusWithOptions(request: GetStackDriftDetectionStatusRequest, runtime: $Util.RuntimeOptions): Promise<GetStackDriftDetectionStatusResponse> {
    Util.validateModel(request);
    return $tea.cast<GetStackDriftDetectionStatusResponse>(await this.doRequest("GetStackDriftDetectionStatus", "HTTPS", "POST", "2019-09-10", "AK", null, $tea.toMap(request), runtime), new GetStackDriftDetectionStatusResponse({}));
  }

  async getStackDriftDetectionStatus(request: GetStackDriftDetectionStatusRequest): Promise<GetStackDriftDetectionStatusResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getStackDriftDetectionStatusWithOptions(request, runtime);
  }

  async detectStackGroupDriftWithOptions(request: DetectStackGroupDriftRequest, runtime: $Util.RuntimeOptions): Promise<DetectStackGroupDriftResponse> {
    Util.validateModel(request);
    return $tea.cast<DetectStackGroupDriftResponse>(await this.doRequest("DetectStackGroupDrift", "HTTPS", "POST", "2019-09-10", "AK", null, $tea.toMap(request), runtime), new DetectStackGroupDriftResponse({}));
  }

  async detectStackGroupDrift(request: DetectStackGroupDriftRequest): Promise<DetectStackGroupDriftResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.detectStackGroupDriftWithOptions(request, runtime);
  }

  async listStackResourceDriftsWithOptions(request: ListStackResourceDriftsRequest, runtime: $Util.RuntimeOptions): Promise<ListStackResourceDriftsResponse> {
    Util.validateModel(request);
    return $tea.cast<ListStackResourceDriftsResponse>(await this.doRequest("ListStackResourceDrifts", "HTTPS", "POST", "2019-09-10", "AK", null, $tea.toMap(request), runtime), new ListStackResourceDriftsResponse({}));
  }

  async listStackResourceDrifts(request: ListStackResourceDriftsRequest): Promise<ListStackResourceDriftsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.listStackResourceDriftsWithOptions(request, runtime);
  }

  async detectStackResourceDriftWithOptions(request: DetectStackResourceDriftRequest, runtime: $Util.RuntimeOptions): Promise<DetectStackResourceDriftResponse> {
    Util.validateModel(request);
    return $tea.cast<DetectStackResourceDriftResponse>(await this.doRequest("DetectStackResourceDrift", "HTTPS", "POST", "2019-09-10", "AK", null, $tea.toMap(request), runtime), new DetectStackResourceDriftResponse({}));
  }

  async detectStackResourceDrift(request: DetectStackResourceDriftRequest): Promise<DetectStackResourceDriftResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.detectStackResourceDriftWithOptions(request, runtime);
  }

  async detectStackDriftWithOptions(request: DetectStackDriftRequest, runtime: $Util.RuntimeOptions): Promise<DetectStackDriftResponse> {
    Util.validateModel(request);
    return $tea.cast<DetectStackDriftResponse>(await this.doRequest("DetectStackDrift", "HTTPS", "POST", "2019-09-10", "AK", null, $tea.toMap(request), runtime), new DetectStackDriftResponse({}));
  }

  async detectStackDrift(request: DetectStackDriftRequest): Promise<DetectStackDriftResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.detectStackDriftWithOptions(request, runtime);
  }

  async updateStackInstancesWithOptions(request: UpdateStackInstancesRequest, runtime: $Util.RuntimeOptions): Promise<UpdateStackInstancesResponse> {
    Util.validateModel(request);
    return $tea.cast<UpdateStackInstancesResponse>(await this.doRequest("UpdateStackInstances", "HTTPS", "POST", "2019-09-10", "AK", null, $tea.toMap(request), runtime), new UpdateStackInstancesResponse({}));
  }

  async updateStackInstances(request: UpdateStackInstancesRequest): Promise<UpdateStackInstancesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.updateStackInstancesWithOptions(request, runtime);
  }

  async listStackGroupOperationsWithOptions(request: ListStackGroupOperationsRequest, runtime: $Util.RuntimeOptions): Promise<ListStackGroupOperationsResponse> {
    Util.validateModel(request);
    return $tea.cast<ListStackGroupOperationsResponse>(await this.doRequest("ListStackGroupOperations", "HTTPS", "POST", "2019-09-10", "AK", null, $tea.toMap(request), runtime), new ListStackGroupOperationsResponse({}));
  }

  async listStackGroupOperations(request: ListStackGroupOperationsRequest): Promise<ListStackGroupOperationsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.listStackGroupOperationsWithOptions(request, runtime);
  }

  async getStackGroupWithOptions(request: GetStackGroupRequest, runtime: $Util.RuntimeOptions): Promise<GetStackGroupResponse> {
    Util.validateModel(request);
    return $tea.cast<GetStackGroupResponse>(await this.doRequest("GetStackGroup", "HTTPS", "POST", "2019-09-10", "AK", null, $tea.toMap(request), runtime), new GetStackGroupResponse({}));
  }

  async getStackGroup(request: GetStackGroupRequest): Promise<GetStackGroupResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getStackGroupWithOptions(request, runtime);
  }

  async getStackGroupOperationWithOptions(request: GetStackGroupOperationRequest, runtime: $Util.RuntimeOptions): Promise<GetStackGroupOperationResponse> {
    Util.validateModel(request);
    return $tea.cast<GetStackGroupOperationResponse>(await this.doRequest("GetStackGroupOperation", "HTTPS", "POST", "2019-09-10", "AK", null, $tea.toMap(request), runtime), new GetStackGroupOperationResponse({}));
  }

  async getStackGroupOperation(request: GetStackGroupOperationRequest): Promise<GetStackGroupOperationResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getStackGroupOperationWithOptions(request, runtime);
  }

  async listStackGroupsWithOptions(request: ListStackGroupsRequest, runtime: $Util.RuntimeOptions): Promise<ListStackGroupsResponse> {
    Util.validateModel(request);
    return $tea.cast<ListStackGroupsResponse>(await this.doRequest("ListStackGroups", "HTTPS", "POST", "2019-09-10", "AK", null, $tea.toMap(request), runtime), new ListStackGroupsResponse({}));
  }

  async listStackGroups(request: ListStackGroupsRequest): Promise<ListStackGroupsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.listStackGroupsWithOptions(request, runtime);
  }

  async createStackInstancesWithOptions(request: CreateStackInstancesRequest, runtime: $Util.RuntimeOptions): Promise<CreateStackInstancesResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateStackInstancesResponse>(await this.doRequest("CreateStackInstances", "HTTPS", "POST", "2019-09-10", "AK", null, $tea.toMap(request), runtime), new CreateStackInstancesResponse({}));
  }

  async createStackInstances(request: CreateStackInstancesRequest): Promise<CreateStackInstancesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createStackInstancesWithOptions(request, runtime);
  }

  async createStackGroupWithOptions(request: CreateStackGroupRequest, runtime: $Util.RuntimeOptions): Promise<CreateStackGroupResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateStackGroupResponse>(await this.doRequest("CreateStackGroup", "HTTPS", "POST", "2019-09-10", "AK", null, $tea.toMap(request), runtime), new CreateStackGroupResponse({}));
  }

  async createStackGroup(request: CreateStackGroupRequest): Promise<CreateStackGroupResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createStackGroupWithOptions(request, runtime);
  }

  async getStackInstanceWithOptions(request: GetStackInstanceRequest, runtime: $Util.RuntimeOptions): Promise<GetStackInstanceResponse> {
    Util.validateModel(request);
    return $tea.cast<GetStackInstanceResponse>(await this.doRequest("GetStackInstance", "HTTPS", "POST", "2019-09-10", "AK", null, $tea.toMap(request), runtime), new GetStackInstanceResponse({}));
  }

  async getStackInstance(request: GetStackInstanceRequest): Promise<GetStackInstanceResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getStackInstanceWithOptions(request, runtime);
  }

  async updateStackGroupWithOptions(request: UpdateStackGroupRequest, runtime: $Util.RuntimeOptions): Promise<UpdateStackGroupResponse> {
    Util.validateModel(request);
    return $tea.cast<UpdateStackGroupResponse>(await this.doRequest("UpdateStackGroup", "HTTPS", "POST", "2019-09-10", "AK", null, $tea.toMap(request), runtime), new UpdateStackGroupResponse({}));
  }

  async updateStackGroup(request: UpdateStackGroupRequest): Promise<UpdateStackGroupResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.updateStackGroupWithOptions(request, runtime);
  }

  async listStackInstancesWithOptions(request: ListStackInstancesRequest, runtime: $Util.RuntimeOptions): Promise<ListStackInstancesResponse> {
    Util.validateModel(request);
    return $tea.cast<ListStackInstancesResponse>(await this.doRequest("ListStackInstances", "HTTPS", "POST", "2019-09-10", "AK", null, $tea.toMap(request), runtime), new ListStackInstancesResponse({}));
  }

  async listStackInstances(request: ListStackInstancesRequest): Promise<ListStackInstancesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.listStackInstancesWithOptions(request, runtime);
  }

  async listStackGroupOperationResultsWithOptions(request: ListStackGroupOperationResultsRequest, runtime: $Util.RuntimeOptions): Promise<ListStackGroupOperationResultsResponse> {
    Util.validateModel(request);
    return $tea.cast<ListStackGroupOperationResultsResponse>(await this.doRequest("ListStackGroupOperationResults", "HTTPS", "POST", "2019-09-10", "AK", null, $tea.toMap(request), runtime), new ListStackGroupOperationResultsResponse({}));
  }

  async listStackGroupOperationResults(request: ListStackGroupOperationResultsRequest): Promise<ListStackGroupOperationResultsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.listStackGroupOperationResultsWithOptions(request, runtime);
  }

  async stopStackGroupOperationWithOptions(request: StopStackGroupOperationRequest, runtime: $Util.RuntimeOptions): Promise<StopStackGroupOperationResponse> {
    Util.validateModel(request);
    return $tea.cast<StopStackGroupOperationResponse>(await this.doRequest("StopStackGroupOperation", "HTTPS", "POST", "2019-09-10", "AK", null, $tea.toMap(request), runtime), new StopStackGroupOperationResponse({}));
  }

  async stopStackGroupOperation(request: StopStackGroupOperationRequest): Promise<StopStackGroupOperationResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.stopStackGroupOperationWithOptions(request, runtime);
  }

  async deleteStackGroupWithOptions(request: DeleteStackGroupRequest, runtime: $Util.RuntimeOptions): Promise<DeleteStackGroupResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteStackGroupResponse>(await this.doRequest("DeleteStackGroup", "HTTPS", "POST", "2019-09-10", "AK", null, $tea.toMap(request), runtime), new DeleteStackGroupResponse({}));
  }

  async deleteStackGroup(request: DeleteStackGroupRequest): Promise<DeleteStackGroupResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteStackGroupWithOptions(request, runtime);
  }

  async deleteStackInstancesWithOptions(request: DeleteStackInstancesRequest, runtime: $Util.RuntimeOptions): Promise<DeleteStackInstancesResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteStackInstancesResponse>(await this.doRequest("DeleteStackInstances", "HTTPS", "POST", "2019-09-10", "AK", null, $tea.toMap(request), runtime), new DeleteStackInstancesResponse({}));
  }

  async deleteStackInstances(request: DeleteStackInstancesRequest): Promise<DeleteStackInstancesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteStackInstancesWithOptions(request, runtime);
  }

  async listTagResourcesWithOptions(request: ListTagResourcesRequest, runtime: $Util.RuntimeOptions): Promise<ListTagResourcesResponse> {
    Util.validateModel(request);
    return $tea.cast<ListTagResourcesResponse>(await this.doRequest("ListTagResources", "HTTPS", "POST", "2019-09-10", "AK", null, $tea.toMap(request), runtime), new ListTagResourcesResponse({}));
  }

  async listTagResources(request: ListTagResourcesRequest): Promise<ListTagResourcesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.listTagResourcesWithOptions(request, runtime);
  }

  async untagResourcesWithOptions(request: UntagResourcesRequest, runtime: $Util.RuntimeOptions): Promise<UntagResourcesResponse> {
    Util.validateModel(request);
    return $tea.cast<UntagResourcesResponse>(await this.doRequest("UntagResources", "HTTPS", "POST", "2019-09-10", "AK", null, $tea.toMap(request), runtime), new UntagResourcesResponse({}));
  }

  async untagResources(request: UntagResourcesRequest): Promise<UntagResourcesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.untagResourcesWithOptions(request, runtime);
  }

  async tagResourcesWithOptions(request: TagResourcesRequest, runtime: $Util.RuntimeOptions): Promise<TagResourcesResponse> {
    Util.validateModel(request);
    return $tea.cast<TagResourcesResponse>(await this.doRequest("TagResources", "HTTPS", "POST", "2019-09-10", "AK", null, $tea.toMap(request), runtime), new TagResourcesResponse({}));
  }

  async tagResources(request: TagResourcesRequest): Promise<TagResourcesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.tagResourcesWithOptions(request, runtime);
  }

  async deleteTemplateWithOptions(request: DeleteTemplateRequest, runtime: $Util.RuntimeOptions): Promise<DeleteTemplateResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteTemplateResponse>(await this.doRequest("DeleteTemplate", "HTTPS", "POST", "2019-09-10", "AK", null, $tea.toMap(request), runtime), new DeleteTemplateResponse({}));
  }

  async deleteTemplate(request: DeleteTemplateRequest): Promise<DeleteTemplateResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteTemplateWithOptions(request, runtime);
  }

  async updateTemplateWithOptions(request: UpdateTemplateRequest, runtime: $Util.RuntimeOptions): Promise<UpdateTemplateResponse> {
    Util.validateModel(request);
    return $tea.cast<UpdateTemplateResponse>(await this.doRequest("UpdateTemplate", "HTTPS", "POST", "2019-09-10", "AK", null, $tea.toMap(request), runtime), new UpdateTemplateResponse({}));
  }

  async updateTemplate(request: UpdateTemplateRequest): Promise<UpdateTemplateResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.updateTemplateWithOptions(request, runtime);
  }

  async listTemplatesWithOptions(request: ListTemplatesRequest, runtime: $Util.RuntimeOptions): Promise<ListTemplatesResponse> {
    Util.validateModel(request);
    return $tea.cast<ListTemplatesResponse>(await this.doRequest("ListTemplates", "HTTPS", "POST", "2019-09-10", "AK", null, $tea.toMap(request), runtime), new ListTemplatesResponse({}));
  }

  async listTemplates(request: ListTemplatesRequest): Promise<ListTemplatesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.listTemplatesWithOptions(request, runtime);
  }

  async createTemplateWithOptions(request: CreateTemplateRequest, runtime: $Util.RuntimeOptions): Promise<CreateTemplateResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateTemplateResponse>(await this.doRequest("CreateTemplate", "HTTPS", "POST", "2019-09-10", "AK", null, $tea.toMap(request), runtime), new CreateTemplateResponse({}));
  }

  async createTemplate(request: CreateTemplateRequest): Promise<CreateTemplateResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createTemplateWithOptions(request, runtime);
  }

  async createStackWithOptions(request: CreateStackRequest, runtime: $Util.RuntimeOptions): Promise<CreateStackResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateStackResponse>(await this.doRequest("CreateStack", "HTTPS", "POST", "2019-09-10", "AK", null, $tea.toMap(request), runtime), new CreateStackResponse({}));
  }

  async createStack(request: CreateStackRequest): Promise<CreateStackResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createStackWithOptions(request, runtime);
  }

  async getStackWithOptions(request: GetStackRequest, runtime: $Util.RuntimeOptions): Promise<GetStackResponse> {
    Util.validateModel(request);
    return $tea.cast<GetStackResponse>(await this.doRequest("GetStack", "HTTPS", "POST", "2019-09-10", "AK", null, $tea.toMap(request), runtime), new GetStackResponse({}));
  }

  async getStack(request: GetStackRequest): Promise<GetStackResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getStackWithOptions(request, runtime);
  }

  async deleteStackWithOptions(request: DeleteStackRequest, runtime: $Util.RuntimeOptions): Promise<DeleteStackResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteStackResponse>(await this.doRequest("DeleteStack", "HTTPS", "POST", "2019-09-10", "AK", null, $tea.toMap(request), runtime), new DeleteStackResponse({}));
  }

  async deleteStack(request: DeleteStackRequest): Promise<DeleteStackResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteStackWithOptions(request, runtime);
  }

  async updateStackWithOptions(request: UpdateStackRequest, runtime: $Util.RuntimeOptions): Promise<UpdateStackResponse> {
    Util.validateModel(request);
    return $tea.cast<UpdateStackResponse>(await this.doRequest("UpdateStack", "HTTPS", "POST", "2019-09-10", "AK", null, $tea.toMap(request), runtime), new UpdateStackResponse({}));
  }

  async updateStack(request: UpdateStackRequest): Promise<UpdateStackResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.updateStackWithOptions(request, runtime);
  }

  async listStacksWithOptions(request: ListStacksRequest, runtime: $Util.RuntimeOptions): Promise<ListStacksResponse> {
    Util.validateModel(request);
    return $tea.cast<ListStacksResponse>(await this.doRequest("ListStacks", "HTTPS", "POST", "2019-09-10", "AK", null, $tea.toMap(request), runtime), new ListStacksResponse({}));
  }

  async listStacks(request: ListStacksRequest): Promise<ListStacksResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.listStacksWithOptions(request, runtime);
  }

  async previewStackWithOptions(request: PreviewStackRequest, runtime: $Util.RuntimeOptions): Promise<PreviewStackResponse> {
    Util.validateModel(request);
    return $tea.cast<PreviewStackResponse>(await this.doRequest("PreviewStack", "HTTPS", "POST", "2019-09-10", "AK", null, $tea.toMap(request), runtime), new PreviewStackResponse({}));
  }

  async previewStack(request: PreviewStackRequest): Promise<PreviewStackResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.previewStackWithOptions(request, runtime);
  }

  async getTemplateEstimateCostWithOptions(request: GetTemplateEstimateCostRequest, runtime: $Util.RuntimeOptions): Promise<GetTemplateEstimateCostResponse> {
    Util.validateModel(request);
    return $tea.cast<GetTemplateEstimateCostResponse>(await this.doRequest("GetTemplateEstimateCost", "HTTPS", "POST", "2019-09-10", "AK", null, $tea.toMap(request), runtime), new GetTemplateEstimateCostResponse({}));
  }

  async getTemplateEstimateCost(request: GetTemplateEstimateCostRequest): Promise<GetTemplateEstimateCostResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getTemplateEstimateCostWithOptions(request, runtime);
  }

  async cancelUpdateStackWithOptions(request: CancelUpdateStackRequest, runtime: $Util.RuntimeOptions): Promise<CancelUpdateStackResponse> {
    Util.validateModel(request);
    return $tea.cast<CancelUpdateStackResponse>(await this.doRequest("CancelUpdateStack", "HTTPS", "POST", "2019-09-10", "AK", null, $tea.toMap(request), runtime), new CancelUpdateStackResponse({}));
  }

  async cancelUpdateStack(request: CancelUpdateStackRequest): Promise<CancelUpdateStackResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.cancelUpdateStackWithOptions(request, runtime);
  }

  async continueCreateStackWithOptions(request: ContinueCreateStackRequest, runtime: $Util.RuntimeOptions): Promise<ContinueCreateStackResponse> {
    Util.validateModel(request);
    return $tea.cast<ContinueCreateStackResponse>(await this.doRequest("ContinueCreateStack", "HTTPS", "POST", "2019-09-10", "AK", null, $tea.toMap(request), runtime), new ContinueCreateStackResponse({}));
  }

  async continueCreateStack(request: ContinueCreateStackRequest): Promise<ContinueCreateStackResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.continueCreateStackWithOptions(request, runtime);
  }

  async setStackPolicyWithOptions(request: SetStackPolicyRequest, runtime: $Util.RuntimeOptions): Promise<SetStackPolicyResponse> {
    Util.validateModel(request);
    return $tea.cast<SetStackPolicyResponse>(await this.doRequest("SetStackPolicy", "HTTPS", "POST", "2019-09-10", "AK", null, $tea.toMap(request), runtime), new SetStackPolicyResponse({}));
  }

  async setStackPolicy(request: SetStackPolicyRequest): Promise<SetStackPolicyResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.setStackPolicyWithOptions(request, runtime);
  }

  async getStackPolicyWithOptions(request: GetStackPolicyRequest, runtime: $Util.RuntimeOptions): Promise<GetStackPolicyResponse> {
    Util.validateModel(request);
    return $tea.cast<GetStackPolicyResponse>(await this.doRequest("GetStackPolicy", "HTTPS", "POST", "2019-09-10", "AK", null, $tea.toMap(request), runtime), new GetStackPolicyResponse({}));
  }

  async getStackPolicy(request: GetStackPolicyRequest): Promise<GetStackPolicyResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getStackPolicyWithOptions(request, runtime);
  }

  async validateTemplateWithOptions(request: ValidateTemplateRequest, runtime: $Util.RuntimeOptions): Promise<ValidateTemplateResponse> {
    Util.validateModel(request);
    return $tea.cast<ValidateTemplateResponse>(await this.doRequest("ValidateTemplate", "HTTPS", "POST", "2019-09-10", "AK", null, $tea.toMap(request), runtime), new ValidateTemplateResponse({}));
  }

  async validateTemplate(request: ValidateTemplateRequest): Promise<ValidateTemplateResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.validateTemplateWithOptions(request, runtime);
  }

  async getTemplateWithOptions(request: GetTemplateRequest, runtime: $Util.RuntimeOptions): Promise<GetTemplateResponse> {
    Util.validateModel(request);
    return $tea.cast<GetTemplateResponse>(await this.doRequest("GetTemplate", "HTTPS", "POST", "2019-09-10", "AK", null, $tea.toMap(request), runtime), new GetTemplateResponse({}));
  }

  async getTemplate(request: GetTemplateRequest): Promise<GetTemplateResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getTemplateWithOptions(request, runtime);
  }

  async getChangeSetWithOptions(request: GetChangeSetRequest, runtime: $Util.RuntimeOptions): Promise<GetChangeSetResponse> {
    Util.validateModel(request);
    return $tea.cast<GetChangeSetResponse>(await this.doRequest("GetChangeSet", "HTTPS", "POST", "2019-09-10", "AK", null, $tea.toMap(request), runtime), new GetChangeSetResponse({}));
  }

  async getChangeSet(request: GetChangeSetRequest): Promise<GetChangeSetResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getChangeSetWithOptions(request, runtime);
  }

  async listChangeSetsWithOptions(request: ListChangeSetsRequest, runtime: $Util.RuntimeOptions): Promise<ListChangeSetsResponse> {
    Util.validateModel(request);
    return $tea.cast<ListChangeSetsResponse>(await this.doRequest("ListChangeSets", "HTTPS", "POST", "2019-09-10", "AK", null, $tea.toMap(request), runtime), new ListChangeSetsResponse({}));
  }

  async listChangeSets(request: ListChangeSetsRequest): Promise<ListChangeSetsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.listChangeSetsWithOptions(request, runtime);
  }

  async executeChangeSetWithOptions(request: ExecuteChangeSetRequest, runtime: $Util.RuntimeOptions): Promise<ExecuteChangeSetResponse> {
    Util.validateModel(request);
    return $tea.cast<ExecuteChangeSetResponse>(await this.doRequest("ExecuteChangeSet", "HTTPS", "POST", "2019-09-10", "AK", null, $tea.toMap(request), runtime), new ExecuteChangeSetResponse({}));
  }

  async executeChangeSet(request: ExecuteChangeSetRequest): Promise<ExecuteChangeSetResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.executeChangeSetWithOptions(request, runtime);
  }

  async deleteChangeSetWithOptions(request: DeleteChangeSetRequest, runtime: $Util.RuntimeOptions): Promise<DeleteChangeSetResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteChangeSetResponse>(await this.doRequest("DeleteChangeSet", "HTTPS", "POST", "2019-09-10", "AK", null, $tea.toMap(request), runtime), new DeleteChangeSetResponse({}));
  }

  async deleteChangeSet(request: DeleteChangeSetRequest): Promise<DeleteChangeSetResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteChangeSetWithOptions(request, runtime);
  }

  async listStackEventsWithOptions(request: ListStackEventsRequest, runtime: $Util.RuntimeOptions): Promise<ListStackEventsResponse> {
    Util.validateModel(request);
    return $tea.cast<ListStackEventsResponse>(await this.doRequest("ListStackEvents", "HTTPS", "POST", "2019-09-10", "AK", null, $tea.toMap(request), runtime), new ListStackEventsResponse({}));
  }

  async listStackEvents(request: ListStackEventsRequest): Promise<ListStackEventsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.listStackEventsWithOptions(request, runtime);
  }

  async listStackResourcesWithOptions(request: ListStackResourcesRequest, runtime: $Util.RuntimeOptions): Promise<ListStackResourcesResponse> {
    Util.validateModel(request);
    return $tea.cast<ListStackResourcesResponse>(await this.doRequest("ListStackResources", "HTTPS", "POST", "2019-09-10", "AK", null, $tea.toMap(request), runtime), new ListStackResourcesResponse({}));
  }

  async listStackResources(request: ListStackResourcesRequest): Promise<ListStackResourcesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.listStackResourcesWithOptions(request, runtime);
  }

  async getStackResourceWithOptions(request: GetStackResourceRequest, runtime: $Util.RuntimeOptions): Promise<GetStackResourceResponse> {
    Util.validateModel(request);
    return $tea.cast<GetStackResourceResponse>(await this.doRequest("GetStackResource", "HTTPS", "POST", "2019-09-10", "AK", null, $tea.toMap(request), runtime), new GetStackResourceResponse({}));
  }

  async getStackResource(request: GetStackResourceRequest): Promise<GetStackResourceResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getStackResourceWithOptions(request, runtime);
  }

  async getResourceTypeTemplateWithOptions(request: GetResourceTypeTemplateRequest, runtime: $Util.RuntimeOptions): Promise<GetResourceTypeTemplateResponse> {
    Util.validateModel(request);
    return $tea.cast<GetResourceTypeTemplateResponse>(await this.doRequest("GetResourceTypeTemplate", "HTTPS", "POST", "2019-09-10", "AK", null, $tea.toMap(request), runtime), new GetResourceTypeTemplateResponse({}));
  }

  async getResourceTypeTemplate(request: GetResourceTypeTemplateRequest): Promise<GetResourceTypeTemplateResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getResourceTypeTemplateWithOptions(request, runtime);
  }

  async getResourceTypeWithOptions(request: GetResourceTypeRequest, runtime: $Util.RuntimeOptions): Promise<GetResourceTypeResponse> {
    Util.validateModel(request);
    return $tea.cast<GetResourceTypeResponse>(await this.doRequest("GetResourceType", "HTTPS", "POST", "2019-09-10", "AK", null, $tea.toMap(request), runtime), new GetResourceTypeResponse({}));
  }

  async getResourceType(request: GetResourceTypeRequest): Promise<GetResourceTypeResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getResourceTypeWithOptions(request, runtime);
  }

  async listResourceTypesWithOptions(request: ListResourceTypesRequest, runtime: $Util.RuntimeOptions): Promise<ListResourceTypesResponse> {
    Util.validateModel(request);
    return $tea.cast<ListResourceTypesResponse>(await this.doRequest("ListResourceTypes", "HTTPS", "POST", "2019-09-10", "AK", null, $tea.toMap(request), runtime), new ListResourceTypesResponse({}));
  }

  async listResourceTypes(request: ListResourceTypesRequest): Promise<ListResourceTypesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.listResourceTypesWithOptions(request, runtime);
  }

  async signalResourceWithOptions(request: SignalResourceRequest, runtime: $Util.RuntimeOptions): Promise<SignalResourceResponse> {
    Util.validateModel(request);
    return $tea.cast<SignalResourceResponse>(await this.doRequest("SignalResource", "HTTPS", "POST", "2019-09-10", "AK", null, $tea.toMap(request), runtime), new SignalResourceResponse({}));
  }

  async signalResource(request: SignalResourceRequest): Promise<SignalResourceResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.signalResourceWithOptions(request, runtime);
  }

  async describeRegionsWithOptions(request: DescribeRegionsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeRegionsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeRegionsResponse>(await this.doRequest("DescribeRegions", "HTTPS", "POST", "2019-09-10", "AK", null, $tea.toMap(request), runtime), new DescribeRegionsResponse({}));
  }

  async describeRegions(request: DescribeRegionsRequest): Promise<DescribeRegionsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeRegionsWithOptions(request, runtime);
  }

  async createChangeSetWithOptions(request: CreateChangeSetRequest, runtime: $Util.RuntimeOptions): Promise<CreateChangeSetResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateChangeSetResponse>(await this.doRequest("CreateChangeSet", "HTTPS", "POST", "2019-09-10", "AK", null, $tea.toMap(request), runtime), new CreateChangeSetResponse({}));
  }

  async createChangeSet(request: CreateChangeSetRequest): Promise<CreateChangeSetResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createChangeSetWithOptions(request, runtime);
  }

  getEndpoint(productId: string, regionId: string, endpointRule: string, network: string, suffix: string, endpointMap: {[key: string ]: string}, endpoint: string): string {
    if (!Util.empty(endpoint)) {
      return endpoint;
    }

    if (!Util.isUnset(endpointMap) && !Util.empty(endpointMap[regionId])) {
      return endpointMap[regionId];
    }

    return EndpointUtil.getEndpointRules(productId, regionId, endpointRule, network, suffix);
  }

}
