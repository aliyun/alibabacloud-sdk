// This file is auto-generated, don't edit it
import Util, * as $Util from '@alicloud/tea-util';
import RPC, * as $RPC from '@alicloud/rpc-client';
import EndpointUtil from '@alicloud/endpoint-util';
import * as $tea from '@alicloud/tea-typescript';

export class DescribeExporterOutputListRequest extends $tea.Model {
  pageNumber?: number;
  pageSize?: number;
  static names(): { [key: string]: string } {
    return {
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
    };
  }

  static types(): { [key: string]: any } {
    return {
      pageNumber: 'number',
      pageSize: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeExporterOutputListResponse extends $tea.Model {
  code: string;
  message: string;
  requestId: string;
  total: number;
  pageNumber: number;
  success: boolean;
  datapoints: DescribeExporterOutputListResponseDatapoints;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      requestId: 'RequestId',
      total: 'Total',
      pageNumber: 'PageNumber',
      success: 'Success',
      datapoints: 'Datapoints',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      requestId: 'string',
      total: 'number',
      pageNumber: 'number',
      success: 'boolean',
      datapoints: DescribeExporterOutputListResponseDatapoints,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteExporterOutputRequest extends $tea.Model {
  destName: string;
  static names(): { [key: string]: string } {
    return {
      destName: 'DestName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      destName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteExporterOutputResponse extends $tea.Model {
  code: string;
  message: string;
  requestId: string;
  success: boolean;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      requestId: 'RequestId',
      success: 'Success',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      requestId: 'string',
      success: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PutExporterOutputRequest extends $tea.Model {
  destName: string;
  configJson: string;
  desc?: string;
  destType?: string;
  static names(): { [key: string]: string } {
    return {
      destName: 'DestName',
      configJson: 'ConfigJson',
      desc: 'Desc',
      destType: 'DestType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      destName: 'string',
      configJson: 'string',
      desc: 'string',
      destType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PutExporterOutputResponse extends $tea.Model {
  code: string;
  message: string;
  requestId: string;
  success: boolean;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      requestId: 'RequestId',
      success: 'Success',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      requestId: 'string',
      success: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeFolderListRequest extends $tea.Model {
  appName?: string;
  static names(): { [key: string]: string } {
    return {
      appName: 'AppName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      appName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeFolderListResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  code: number;
  message: string;
  pageNumber: number;
  pageSize: number;
  total: number;
  resource: DescribeFolderListResponseResource;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      success: 'Success',
      code: 'Code',
      message: 'Message',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      total: 'Total',
      resource: 'Resource',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      success: 'boolean',
      code: 'number',
      message: 'string',
      pageNumber: 'number',
      pageSize: 'number',
      total: 'number',
      resource: DescribeFolderListResponseResource,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteExporterRuleRequest extends $tea.Model {
  ruleName: string;
  static names(): { [key: string]: string } {
    return {
      ruleName: 'RuleName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ruleName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteExporterRuleResponse extends $tea.Model {
  code: string;
  message: string;
  requestId: string;
  success: boolean;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      requestId: 'RequestId',
      success: 'Success',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      requestId: 'string',
      success: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeExporterRuleListRequest extends $tea.Model {
  pageNumber?: number;
  pageSize?: number;
  static names(): { [key: string]: string } {
    return {
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
    };
  }

  static types(): { [key: string]: any } {
    return {
      pageNumber: 'number',
      pageSize: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeExporterRuleListResponse extends $tea.Model {
  code: string;
  message: string;
  requestId: string;
  total: number;
  pageNumber: number;
  success: boolean;
  datapoints: DescribeExporterRuleListResponseDatapoints;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      requestId: 'RequestId',
      total: 'Total',
      pageNumber: 'PageNumber',
      success: 'Success',
      datapoints: 'Datapoints',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      requestId: 'string',
      total: 'number',
      pageNumber: 'number',
      success: 'boolean',
      datapoints: DescribeExporterRuleListResponseDatapoints,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PutExporterRuleRequest extends $tea.Model {
  ruleName?: string;
  dstNames?: string[];
  namespace?: string;
  metricName?: string;
  targetWindows?: string;
  describe?: string;
  static names(): { [key: string]: string } {
    return {
      ruleName: 'RuleName',
      dstNames: 'DstNames',
      namespace: 'Namespace',
      metricName: 'MetricName',
      targetWindows: 'TargetWindows',
      describe: 'Describe',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ruleName: 'string',
      dstNames: { 'type': 'array', 'itemType': 'string' },
      namespace: 'string',
      metricName: 'string',
      targetWindows: 'string',
      describe: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PutExporterRuleResponse extends $tea.Model {
  code: string;
  message: string;
  requestId: string;
  success: boolean;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      requestId: 'RequestId',
      success: 'Success',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      requestId: 'string',
      success: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDynamicTagRuleListRequest extends $tea.Model {
  tagKey?: string;
  pageNumber?: string;
  pageSize?: string;
  static names(): { [key: string]: string } {
    return {
      tagKey: 'TagKey',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
    };
  }

  static types(): { [key: string]: any } {
    return {
      tagKey: 'string',
      pageNumber: 'string',
      pageSize: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDynamicTagRuleListResponse extends $tea.Model {
  success: boolean;
  code: string;
  message: string;
  requestId: string;
  total: number;
  pageNumber: string;
  pageSize: string;
  tagGroupList: DescribeDynamicTagRuleListResponseTagGroupList;
  static names(): { [key: string]: string } {
    return {
      success: 'Success',
      code: 'Code',
      message: 'Message',
      requestId: 'RequestId',
      total: 'Total',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      tagGroupList: 'TagGroupList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      success: 'boolean',
      code: 'string',
      message: 'string',
      requestId: 'string',
      total: 'number',
      pageNumber: 'string',
      pageSize: 'string',
      tagGroupList: DescribeDynamicTagRuleListResponseTagGroupList,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeProductResourceTagKeyListRequest extends $tea.Model {
  nextToken?: string;
  static names(): { [key: string]: string } {
    return {
      nextToken: 'NextToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      nextToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeProductResourceTagKeyListResponse extends $tea.Model {
  code: string;
  message: string;
  success: boolean;
  requestId: string;
  nextToken: string;
  tagKeys: DescribeProductResourceTagKeyListResponseTagKeys;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      success: 'Success',
      requestId: 'RequestId',
      nextToken: 'NextToken',
      tagKeys: 'TagKeys',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      success: 'boolean',
      requestId: 'string',
      nextToken: 'string',
      tagKeys: DescribeProductResourceTagKeyListResponseTagKeys,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateDynamicTagGroupRequest extends $tea.Model {
  tagKey: string;
  enableSubscribeEvent?: boolean;
  enableInstallAgent?: boolean;
  regionId: string;
  matchExpressFilterRelation?: string;
  matchExpress?: CreateDynamicTagGroupRequestMatchExpress[];
  contactGroupList: string[];
  templateIdList?: string[];
  static names(): { [key: string]: string } {
    return {
      tagKey: 'TagKey',
      enableSubscribeEvent: 'EnableSubscribeEvent',
      enableInstallAgent: 'EnableInstallAgent',
      regionId: 'RegionId',
      matchExpressFilterRelation: 'MatchExpressFilterRelation',
      matchExpress: 'MatchExpress',
      contactGroupList: 'ContactGroupList',
      templateIdList: 'TemplateIdList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      tagKey: 'string',
      enableSubscribeEvent: 'boolean',
      enableInstallAgent: 'boolean',
      regionId: 'string',
      matchExpressFilterRelation: 'string',
      matchExpress: { 'type': 'array', 'itemType': CreateDynamicTagGroupRequestMatchExpress },
      contactGroupList: { 'type': 'array', 'itemType': 'string' },
      templateIdList: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateDynamicTagGroupResponse extends $tea.Model {
  code: string;
  message: string;
  success: boolean;
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      success: 'Success',
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      success: 'boolean',
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteDynamicTagGroupRequest extends $tea.Model {
  dynamicTagRuleId: string;
  static names(): { [key: string]: string } {
    return {
      dynamicTagRuleId: 'DynamicTagRuleId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      dynamicTagRuleId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteDynamicTagGroupResponse extends $tea.Model {
  code: string;
  message: string;
  success: boolean;
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      success: 'Success',
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      success: 'boolean',
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyGroupMonitoringAgentProcessRequest extends $tea.Model {
  id: string;
  groupId: string;
  matchExpressFilterRelation?: string;
  alertConfig: ModifyGroupMonitoringAgentProcessRequestAlertConfig[];
  static names(): { [key: string]: string } {
    return {
      id: 'Id',
      groupId: 'GroupId',
      matchExpressFilterRelation: 'MatchExpressFilterRelation',
      alertConfig: 'AlertConfig',
    };
  }

  static types(): { [key: string]: any } {
    return {
      id: 'string',
      groupId: 'string',
      matchExpressFilterRelation: 'string',
      alertConfig: { 'type': 'array', 'itemType': ModifyGroupMonitoringAgentProcessRequestAlertConfig },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyGroupMonitoringAgentProcessResponse extends $tea.Model {
  code: string;
  message: string;
  success: boolean;
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      success: 'Success',
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      success: 'boolean',
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteGroupMonitoringAgentProcessRequest extends $tea.Model {
  groupId: string;
  id?: string;
  static names(): { [key: string]: string } {
    return {
      groupId: 'GroupId',
      id: 'Id',
    };
  }

  static types(): { [key: string]: any } {
    return {
      groupId: 'string',
      id: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteGroupMonitoringAgentProcessResponse extends $tea.Model {
  code: string;
  message: string;
  success: boolean;
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      success: 'Success',
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      success: 'boolean',
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateGroupMonitoringAgentProcessRequest extends $tea.Model {
  groupId: string;
  processName?: string;
  matchExpressFilterRelation?: string;
  matchExpress?: CreateGroupMonitoringAgentProcessRequestMatchExpress[];
  alertConfig: CreateGroupMonitoringAgentProcessRequestAlertConfig[];
  static names(): { [key: string]: string } {
    return {
      groupId: 'GroupId',
      processName: 'ProcessName',
      matchExpressFilterRelation: 'MatchExpressFilterRelation',
      matchExpress: 'MatchExpress',
      alertConfig: 'AlertConfig',
    };
  }

  static types(): { [key: string]: any } {
    return {
      groupId: 'string',
      processName: 'string',
      matchExpressFilterRelation: 'string',
      matchExpress: { 'type': 'array', 'itemType': CreateGroupMonitoringAgentProcessRequestMatchExpress },
      alertConfig: { 'type': 'array', 'itemType': CreateGroupMonitoringAgentProcessRequestAlertConfig },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateGroupMonitoringAgentProcessResponse extends $tea.Model {
  code: string;
  message: string;
  success: boolean;
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      success: 'Success',
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      success: 'boolean',
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeTagKeyListRequest extends $tea.Model {
  pageNumber?: number;
  pageSize?: number;
  static names(): { [key: string]: string } {
    return {
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
    };
  }

  static types(): { [key: string]: any } {
    return {
      pageNumber: 'number',
      pageSize: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeTagKeyListResponse extends $tea.Model {
  code: string;
  message: string;
  success: boolean;
  requestId: string;
  tagKeys: DescribeTagKeyListResponseTagKeys;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      success: 'Success',
      requestId: 'RequestId',
      tagKeys: 'TagKeys',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      success: 'boolean',
      requestId: 'string',
      tagKeys: DescribeTagKeyListResponseTagKeys,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeTagValueListRequest extends $tea.Model {
  pageNumber?: number;
  pageSize?: number;
  tagKey: string;
  static names(): { [key: string]: string } {
    return {
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      tagKey: 'TagKey',
    };
  }

  static types(): { [key: string]: any } {
    return {
      pageNumber: 'number',
      pageSize: 'number',
      tagKey: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeTagValueListResponse extends $tea.Model {
  code: string;
  message: string;
  success: boolean;
  requestId: string;
  tagValues: DescribeTagValueListResponseTagValues;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      success: 'Success',
      requestId: 'RequestId',
      tagValues: 'TagValues',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      success: 'boolean',
      requestId: 'string',
      tagValues: DescribeTagValueListResponseTagValues,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RemoveTagsRequest extends $tea.Model {
  tag?: RemoveTagsRequestTag[];
  groupIds: string[];
  static names(): { [key: string]: string } {
    return {
      tag: 'Tag',
      groupIds: 'GroupIds',
    };
  }

  static types(): { [key: string]: any } {
    return {
      tag: { 'type': 'array', 'itemType': RemoveTagsRequestTag },
      groupIds: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RemoveTagsResponse extends $tea.Model {
  code: string;
  message: string;
  success: boolean;
  requestId: string;
  tag: RemoveTagsResponseTag;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      success: 'Success',
      requestId: 'RequestId',
      tag: 'Tag',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      success: 'boolean',
      requestId: 'string',
      tag: RemoveTagsResponseTag,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddTagsRequest extends $tea.Model {
  tag: AddTagsRequestTag[];
  groupIds: string[];
  static names(): { [key: string]: string } {
    return {
      tag: 'Tag',
      groupIds: 'GroupIds',
    };
  }

  static types(): { [key: string]: any } {
    return {
      tag: { 'type': 'array', 'itemType': AddTagsRequestTag },
      groupIds: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddTagsResponse extends $tea.Model {
  code: string;
  message: string;
  success: boolean;
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      success: 'Success',
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      success: 'boolean',
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGroupMonitoringAgentProcessRequest extends $tea.Model {
  groupId: string;
  processName?: string;
  pageNumber?: number;
  pageSize?: number;
  static names(): { [key: string]: string } {
    return {
      groupId: 'GroupId',
      processName: 'ProcessName',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
    };
  }

  static types(): { [key: string]: any } {
    return {
      groupId: 'string',
      processName: 'string',
      pageNumber: 'number',
      pageSize: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGroupMonitoringAgentProcessResponse extends $tea.Model {
  code: string;
  message: string;
  success: boolean;
  requestId: string;
  total: string;
  pageSize: string;
  pageNumber: string;
  processes: DescribeGroupMonitoringAgentProcessResponseProcesses;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      success: 'Success',
      requestId: 'RequestId',
      total: 'Total',
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
      processes: 'Processes',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      success: 'boolean',
      requestId: 'string',
      total: 'string',
      pageSize: 'string',
      pageNumber: 'string',
      processes: DescribeGroupMonitoringAgentProcessResponseProcesses,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PutResourceMetricRulesRequest extends $tea.Model {
  rules: PutResourceMetricRulesRequestRules[];
  static names(): { [key: string]: string } {
    return {
      rules: 'Rules',
    };
  }

  static types(): { [key: string]: any } {
    return {
      rules: { 'type': 'array', 'itemType': PutResourceMetricRulesRequestRules },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PutResourceMetricRulesResponse extends $tea.Model {
  success: boolean;
  code: string;
  message: string;
  requestId: string;
  failedListResult: PutResourceMetricRulesResponseFailedListResult;
  static names(): { [key: string]: string } {
    return {
      success: 'Success',
      code: 'Code',
      message: 'Message',
      requestId: 'RequestId',
      failedListResult: 'FailedListResult',
    };
  }

  static types(): { [key: string]: any } {
    return {
      success: 'boolean',
      code: 'string',
      message: 'string',
      requestId: 'string',
      failedListResult: PutResourceMetricRulesResponseFailedListResult,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateMetricRuleResourcesRequest extends $tea.Model {
  ruleId?: string;
  overwrite?: string;
  resources: string;
  static names(): { [key: string]: string } {
    return {
      ruleId: 'RuleId',
      overwrite: 'Overwrite',
      resources: 'Resources',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ruleId: 'string',
      overwrite: 'string',
      resources: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateMetricRuleResourcesResponse extends $tea.Model {
  success: boolean;
  code: string;
  message: string;
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      success: 'Success',
      code: 'Code',
      message: 'Message',
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      success: 'boolean',
      code: 'string',
      message: 'string',
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteMetricRuleResourcesRequest extends $tea.Model {
  ruleId?: string;
  resources: string;
  static names(): { [key: string]: string } {
    return {
      ruleId: 'RuleId',
      resources: 'Resources',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ruleId: 'string',
      resources: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteMetricRuleResourcesResponse extends $tea.Model {
  success: boolean;
  code: string;
  message: string;
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      success: 'Success',
      code: 'Code',
      message: 'Message',
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      success: 'boolean',
      code: 'string',
      message: 'string',
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteMetricRuleTargetsRequest extends $tea.Model {
  ruleId: string;
  targetIds?: string[];
  static names(): { [key: string]: string } {
    return {
      ruleId: 'RuleId',
      targetIds: 'TargetIds',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ruleId: 'string',
      targetIds: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteMetricRuleTargetsResponse extends $tea.Model {
  success: boolean;
  code: string;
  message: string;
  requestId: string;
  failIds: DeleteMetricRuleTargetsResponseFailIds;
  static names(): { [key: string]: string } {
    return {
      success: 'Success',
      code: 'Code',
      message: 'Message',
      requestId: 'RequestId',
      failIds: 'FailIds',
    };
  }

  static types(): { [key: string]: any } {
    return {
      success: 'boolean',
      code: 'string',
      message: 'string',
      requestId: 'string',
      failIds: DeleteMetricRuleTargetsResponseFailIds,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PutMetricRuleTargetsRequest extends $tea.Model {
  ruleId: string;
  targets: PutMetricRuleTargetsRequestTargets[];
  static names(): { [key: string]: string } {
    return {
      ruleId: 'RuleId',
      targets: 'Targets',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ruleId: 'string',
      targets: { 'type': 'array', 'itemType': PutMetricRuleTargetsRequestTargets },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PutMetricRuleTargetsResponse extends $tea.Model {
  success: boolean;
  code: string;
  message: string;
  requestId: string;
  failData: PutMetricRuleTargetsResponseFailData;
  static names(): { [key: string]: string } {
    return {
      success: 'Success',
      code: 'Code',
      message: 'Message',
      requestId: 'RequestId',
      failData: 'FailData',
    };
  }

  static types(): { [key: string]: any } {
    return {
      success: 'boolean',
      code: 'string',
      message: 'string',
      requestId: 'string',
      failData: PutMetricRuleTargetsResponseFailData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMetricRuleTargetsRequest extends $tea.Model {
  ruleId: string;
  static names(): { [key: string]: string } {
    return {
      ruleId: 'RuleId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ruleId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMetricRuleTargetsResponse extends $tea.Model {
  code: string;
  message: string;
  success: boolean;
  requestId: string;
  targets: DescribeMetricRuleTargetsResponseTargets;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      success: 'Success',
      requestId: 'RequestId',
      targets: 'Targets',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      success: 'boolean',
      requestId: 'string',
      targets: DescribeMetricRuleTargetsResponseTargets,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyMonitorGroupInstancesRequest extends $tea.Model {
  groupId: number;
  instances: ModifyMonitorGroupInstancesRequestInstances[];
  static names(): { [key: string]: string } {
    return {
      groupId: 'GroupId',
      instances: 'Instances',
    };
  }

  static types(): { [key: string]: any } {
    return {
      groupId: 'number',
      instances: { 'type': 'array', 'itemType': ModifyMonitorGroupInstancesRequestInstances },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyMonitorGroupInstancesResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  code: number;
  message: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      success: 'Success',
      code: 'Code',
      message: 'Message',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      success: 'boolean',
      code: 'number',
      message: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMonitoringAgentStatusesRequest extends $tea.Model {
  instanceIds: string;
  static names(): { [key: string]: string } {
    return {
      instanceIds: 'InstanceIds',
    };
  }

  static types(): { [key: string]: any } {
    return {
      instanceIds: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMonitoringAgentStatusesResponse extends $tea.Model {
  code: string;
  message: string;
  success: boolean;
  requestId: string;
  nodeStatusList: DescribeMonitoringAgentStatusesResponseNodeStatusList;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      success: 'Success',
      requestId: 'RequestId',
      nodeStatusList: 'NodeStatusList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      success: 'boolean',
      requestId: 'string',
      nodeStatusList: DescribeMonitoringAgentStatusesResponseNodeStatusList,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateMonitorAgentProcessRequest extends $tea.Model {
  processName: string;
  instanceId: string;
  processUser?: string;
  static names(): { [key: string]: string } {
    return {
      processName: 'ProcessName',
      instanceId: 'InstanceId',
      processUser: 'ProcessUser',
    };
  }

  static types(): { [key: string]: any } {
    return {
      processName: 'string',
      instanceId: 'string',
      processUser: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateMonitorAgentProcessResponse extends $tea.Model {
  code: string;
  message: string;
  success: boolean;
  requestId: string;
  id: number;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      success: 'Success',
      requestId: 'RequestId',
      id: 'Id',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      success: 'boolean',
      requestId: 'string',
      id: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAlertHistoryListRequest extends $tea.Model {
  ruleId?: string;
  ruleName?: string;
  namespace?: string;
  metricName?: string;
  groupId?: string;
  status?: string;
  state?: string;
  ascending?: boolean;
  startTime?: string;
  endTime?: string;
  pageSize?: number;
  page?: number;
  static names(): { [key: string]: string } {
    return {
      ruleId: 'RuleId',
      ruleName: 'RuleName',
      namespace: 'Namespace',
      metricName: 'MetricName',
      groupId: 'GroupId',
      status: 'Status',
      state: 'State',
      ascending: 'Ascending',
      startTime: 'StartTime',
      endTime: 'EndTime',
      pageSize: 'PageSize',
      page: 'Page',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ruleId: 'string',
      ruleName: 'string',
      namespace: 'string',
      metricName: 'string',
      groupId: 'string',
      status: 'string',
      state: 'string',
      ascending: 'boolean',
      startTime: 'string',
      endTime: 'string',
      pageSize: 'number',
      page: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAlertHistoryListResponse extends $tea.Model {
  success: boolean;
  code: string;
  message: string;
  total: string;
  requestId: string;
  alarmHistoryList: DescribeAlertHistoryListResponseAlarmHistoryList;
  static names(): { [key: string]: string } {
    return {
      success: 'Success',
      code: 'Code',
      message: 'Message',
      total: 'Total',
      requestId: 'RequestId',
      alarmHistoryList: 'AlarmHistoryList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      success: 'boolean',
      code: 'string',
      message: 'string',
      total: 'string',
      requestId: 'string',
      alarmHistoryList: DescribeAlertHistoryListResponseAlarmHistoryList,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAlertingMetricRuleResourcesRequest extends $tea.Model {
  ruleId?: string;
  groupId?: string;
  page?: number;
  pageSize?: number;
  static names(): { [key: string]: string } {
    return {
      ruleId: 'RuleId',
      groupId: 'GroupId',
      page: 'Page',
      pageSize: 'PageSize',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ruleId: 'string',
      groupId: 'string',
      page: 'number',
      pageSize: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAlertingMetricRuleResourcesResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  code: number;
  message: string;
  total: number;
  resources: DescribeAlertingMetricRuleResourcesResponseResources;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      success: 'Success',
      code: 'Code',
      message: 'Message',
      total: 'Total',
      resources: 'Resources',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      success: 'boolean',
      code: 'number',
      message: 'string',
      total: 'number',
      resources: DescribeAlertingMetricRuleResourcesResponseResources,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DisableActiveMetricRuleRequest extends $tea.Model {
  product: string;
  static names(): { [key: string]: string } {
    return {
      product: 'Product',
    };
  }

  static types(): { [key: string]: any } {
    return {
      product: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DisableActiveMetricRuleResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  code: string;
  message: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      success: 'Success',
      code: 'Code',
      message: 'Message',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      success: 'boolean',
      code: 'string',
      message: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeActiveMetricRuleListRequest extends $tea.Model {
  product: string;
  static names(): { [key: string]: string } {
    return {
      product: 'Product',
    };
  }

  static types(): { [key: string]: any } {
    return {
      product: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeActiveMetricRuleListResponse extends $tea.Model {
  success: boolean;
  code: string;
  message: string;
  requestId: string;
  datapoints: DescribeActiveMetricRuleListResponseDatapoints;
  alertList: DescribeActiveMetricRuleListResponseAlertList;
  static names(): { [key: string]: string } {
    return {
      success: 'Success',
      code: 'Code',
      message: 'Message',
      requestId: 'RequestId',
      datapoints: 'Datapoints',
      alertList: 'AlertList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      success: 'boolean',
      code: 'string',
      message: 'string',
      requestId: 'string',
      datapoints: DescribeActiveMetricRuleListResponseDatapoints,
      alertList: DescribeActiveMetricRuleListResponseAlertList,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeProductsOfActiveMetricRuleRequest extends $tea.Model {
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

export class DescribeProductsOfActiveMetricRuleResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  code: number;
  message: string;
  datapoints: string;
  allProductInitMetricRuleList: DescribeProductsOfActiveMetricRuleResponseAllProductInitMetricRuleList;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      success: 'Success',
      code: 'Code',
      message: 'Message',
      datapoints: 'Datapoints',
      allProductInitMetricRuleList: 'AllProductInitMetricRuleList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      success: 'boolean',
      code: 'number',
      message: 'string',
      datapoints: 'string',
      allProductInitMetricRuleList: DescribeProductsOfActiveMetricRuleResponseAllProductInitMetricRuleList,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class EnableActiveMetricRuleRequest extends $tea.Model {
  product: string;
  static names(): { [key: string]: string } {
    return {
      product: 'Product',
    };
  }

  static types(): { [key: string]: any } {
    return {
      product: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class EnableActiveMetricRuleResponse extends $tea.Model {
  success: boolean;
  code: string;
  message: string;
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      success: 'Success',
      code: 'Code',
      message: 'Message',
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      success: 'boolean',
      code: 'string',
      message: 'string',
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMonitorGroupInstanceAttributeRequest extends $tea.Model {
  groupId: number;
  pageNumber?: number;
  pageSize?: number;
  total?: boolean;
  category?: string;
  keyword?: string;
  instanceIds?: string;
  static names(): { [key: string]: string } {
    return {
      groupId: 'GroupId',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      total: 'Total',
      category: 'Category',
      keyword: 'Keyword',
      instanceIds: 'InstanceIds',
    };
  }

  static types(): { [key: string]: any } {
    return {
      groupId: 'number',
      pageNumber: 'number',
      pageSize: 'number',
      total: 'boolean',
      category: 'string',
      keyword: 'string',
      instanceIds: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMonitorGroupInstanceAttributeResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  code: number;
  message: string;
  pageNumber: number;
  pageSize: number;
  total: number;
  resources: DescribeMonitorGroupInstanceAttributeResponseResources;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      success: 'Success',
      code: 'Code',
      message: 'Message',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      total: 'Total',
      resources: 'Resources',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      success: 'boolean',
      code: 'number',
      message: 'string',
      pageNumber: 'number',
      pageSize: 'number',
      total: 'number',
      resources: DescribeMonitorGroupInstanceAttributeResponseResources,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMonitorGroupNotifyPolicyListRequest extends $tea.Model {
  policyType: string;
  pageNumber?: number;
  pageSize?: number;
  groupId?: string;
  static names(): { [key: string]: string } {
    return {
      policyType: 'PolicyType',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      groupId: 'GroupId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      policyType: 'string',
      pageNumber: 'number',
      pageSize: 'number',
      groupId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMonitorGroupNotifyPolicyListResponse extends $tea.Model {
  code: string;
  message: string;
  success: string;
  requestId: string;
  total: number;
  notifyPolicyList: DescribeMonitorGroupNotifyPolicyListResponseNotifyPolicyList;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      success: 'Success',
      requestId: 'RequestId',
      total: 'Total',
      notifyPolicyList: 'NotifyPolicyList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      success: 'string',
      requestId: 'string',
      total: 'number',
      notifyPolicyList: DescribeMonitorGroupNotifyPolicyListResponseNotifyPolicyList,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteMonitorGroupRequest extends $tea.Model {
  groupId?: number;
  static names(): { [key: string]: string } {
    return {
      groupId: 'GroupId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      groupId: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteMonitorGroupResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  code: number;
  message: string;
  group: DeleteMonitorGroupResponseGroup;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      success: 'Success',
      code: 'Code',
      message: 'Message',
      group: 'Group',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      success: 'boolean',
      code: 'number',
      message: 'string',
      group: DeleteMonitorGroupResponseGroup,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateMonitorGroupRequest extends $tea.Model {
  groupName: string;
  contactGroups?: string;
  static names(): { [key: string]: string } {
    return {
      groupName: 'GroupName',
      contactGroups: 'ContactGroups',
    };
  }

  static types(): { [key: string]: any } {
    return {
      groupName: 'string',
      contactGroups: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateMonitorGroupResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  code: number;
  message: string;
  groupId: number;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      success: 'Success',
      code: 'Code',
      message: 'Message',
      groupId: 'GroupId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      success: 'boolean',
      code: 'number',
      message: 'string',
      groupId: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMonitorGroupsRequest extends $tea.Model {
  selectContactGroups?: boolean;
  pageNumber?: number;
  pageSize?: number;
  keyword?: string;
  instanceId?: string;
  groupName?: string;
  includeTemplateHistory?: boolean;
  tag?: DescribeMonitorGroupsRequestTag[];
  type?: string;
  dynamicTagRuleId?: string;
  groupId?: string;
  serviceId?: string;
  static names(): { [key: string]: string } {
    return {
      selectContactGroups: 'SelectContactGroups',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      keyword: 'Keyword',
      instanceId: 'InstanceId',
      groupName: 'GroupName',
      includeTemplateHistory: 'IncludeTemplateHistory',
      tag: 'Tag',
      type: 'Type',
      dynamicTagRuleId: 'DynamicTagRuleId',
      groupId: 'GroupId',
      serviceId: 'ServiceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      selectContactGroups: 'boolean',
      pageNumber: 'number',
      pageSize: 'number',
      keyword: 'string',
      instanceId: 'string',
      groupName: 'string',
      includeTemplateHistory: 'boolean',
      tag: { 'type': 'array', 'itemType': DescribeMonitorGroupsRequestTag },
      type: 'string',
      dynamicTagRuleId: 'string',
      groupId: 'string',
      serviceId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMonitorGroupsResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  code: number;
  message: string;
  pageNumber: number;
  pageSize: number;
  total: number;
  resources: DescribeMonitorGroupsResponseResources;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      success: 'Success',
      code: 'Code',
      message: 'Message',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      total: 'Total',
      resources: 'Resources',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      success: 'boolean',
      code: 'number',
      message: 'string',
      pageNumber: 'number',
      pageSize: 'number',
      total: 'number',
      resources: DescribeMonitorGroupsResponseResources,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteMonitorGroupNotifyPolicyRequest extends $tea.Model {
  policyType: string;
  groupId?: string;
  static names(): { [key: string]: string } {
    return {
      policyType: 'PolicyType',
      groupId: 'GroupId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      policyType: 'string',
      groupId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteMonitorGroupNotifyPolicyResponse extends $tea.Model {
  code: string;
  message: string;
  success: string;
  requestId: string;
  result: number;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      success: 'Success',
      requestId: 'RequestId',
      result: 'Result',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      success: 'string',
      requestId: 'string',
      result: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMonitorGroupDynamicRulesRequest extends $tea.Model {
  groupId: number;
  static names(): { [key: string]: string } {
    return {
      groupId: 'GroupId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      groupId: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMonitorGroupDynamicRulesResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  code: number;
  message: string;
  pageNumber: number;
  pageSize: number;
  total: number;
  resource: DescribeMonitorGroupDynamicRulesResponseResource;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      success: 'Success',
      code: 'Code',
      message: 'Message',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      total: 'Total',
      resource: 'Resource',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      success: 'boolean',
      code: 'number',
      message: 'string',
      pageNumber: 'number',
      pageSize: 'number',
      total: 'number',
      resource: DescribeMonitorGroupDynamicRulesResponseResource,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateMonitorGroupInstancesRequest extends $tea.Model {
  groupId: number;
  instances: CreateMonitorGroupInstancesRequestInstances[];
  static names(): { [key: string]: string } {
    return {
      groupId: 'GroupId',
      instances: 'Instances',
    };
  }

  static types(): { [key: string]: any } {
    return {
      groupId: 'number',
      instances: { 'type': 'array', 'itemType': CreateMonitorGroupInstancesRequestInstances },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateMonitorGroupInstancesResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  code: number;
  message: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      success: 'Success',
      code: 'Code',
      message: 'Message',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      success: 'boolean',
      code: 'number',
      message: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateMonitorGroupNotifyPolicyRequest extends $tea.Model {
  policyType: string;
  groupId: string;
  startTime: number;
  endTime: number;
  static names(): { [key: string]: string } {
    return {
      policyType: 'PolicyType',
      groupId: 'GroupId',
      startTime: 'StartTime',
      endTime: 'EndTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      policyType: 'string',
      groupId: 'string',
      startTime: 'number',
      endTime: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateMonitorGroupNotifyPolicyResponse extends $tea.Model {
  code: string;
  message: string;
  success: string;
  requestId: string;
  result: number;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      success: 'Success',
      requestId: 'RequestId',
      result: 'Result',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      success: 'string',
      requestId: 'string',
      result: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteMonitorGroupInstancesRequest extends $tea.Model {
  groupId: number;
  instanceIdList: string;
  category: string;
  static names(): { [key: string]: string } {
    return {
      groupId: 'GroupId',
      instanceIdList: 'InstanceIdList',
      category: 'Category',
    };
  }

  static types(): { [key: string]: any } {
    return {
      groupId: 'number',
      instanceIdList: 'string',
      category: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteMonitorGroupInstancesResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  code: number;
  message: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      success: 'Success',
      code: 'Code',
      message: 'Message',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      success: 'boolean',
      code: 'number',
      message: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteMonitorGroupDynamicRuleRequest extends $tea.Model {
  groupId: number;
  category: string;
  static names(): { [key: string]: string } {
    return {
      groupId: 'GroupId',
      category: 'Category',
    };
  }

  static types(): { [key: string]: any } {
    return {
      groupId: 'number',
      category: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteMonitorGroupDynamicRuleResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  code: number;
  message: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      success: 'Success',
      code: 'Code',
      message: 'Message',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      success: 'boolean',
      code: 'number',
      message: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PutMonitorGroupDynamicRuleRequest extends $tea.Model {
  groupId: number;
  groupRules: PutMonitorGroupDynamicRuleRequestGroupRules[];
  static names(): { [key: string]: string } {
    return {
      groupId: 'GroupId',
      groupRules: 'GroupRules',
    };
  }

  static types(): { [key: string]: any } {
    return {
      groupId: 'number',
      groupRules: { 'type': 'array', 'itemType': PutMonitorGroupDynamicRuleRequestGroupRules },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PutMonitorGroupDynamicRuleResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  code: number;
  message: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      success: 'Success',
      code: 'Code',
      message: 'Message',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      success: 'boolean',
      code: 'number',
      message: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMonitorGroupInstancesRequest extends $tea.Model {
  pageSize?: number;
  pageNumber?: number;
  groupId: number;
  category?: string;
  keyword?: string;
  instanceIds?: string;
  static names(): { [key: string]: string } {
    return {
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
      groupId: 'GroupId',
      category: 'Category',
      keyword: 'Keyword',
      instanceIds: 'InstanceIds',
    };
  }

  static types(): { [key: string]: any } {
    return {
      pageSize: 'number',
      pageNumber: 'number',
      groupId: 'number',
      category: 'string',
      keyword: 'string',
      instanceIds: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMonitorGroupInstancesResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  code: number;
  message: string;
  pageNumber: number;
  pageSize: number;
  total: number;
  resources: DescribeMonitorGroupInstancesResponseResources;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      success: 'Success',
      code: 'Code',
      message: 'Message',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      total: 'Total',
      resources: 'Resources',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      success: 'boolean',
      code: 'number',
      message: 'string',
      pageNumber: 'number',
      pageSize: 'number',
      total: 'number',
      resources: DescribeMonitorGroupInstancesResponseResources,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMonitorGroupCategoriesRequest extends $tea.Model {
  groupId: number;
  static names(): { [key: string]: string } {
    return {
      groupId: 'GroupId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      groupId: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMonitorGroupCategoriesResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  code: number;
  message: string;
  monitorGroupCategories: DescribeMonitorGroupCategoriesResponseMonitorGroupCategories;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      success: 'Success',
      code: 'Code',
      message: 'Message',
      monitorGroupCategories: 'MonitorGroupCategories',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      success: 'boolean',
      code: 'number',
      message: 'string',
      monitorGroupCategories: DescribeMonitorGroupCategoriesResponseMonitorGroupCategories,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyMonitorGroupRequest extends $tea.Model {
  groupId: string;
  groupName?: string;
  contactGroups?: string;
  static names(): { [key: string]: string } {
    return {
      groupId: 'GroupId',
      groupName: 'GroupName',
      contactGroups: 'ContactGroups',
    };
  }

  static types(): { [key: string]: any } {
    return {
      groupId: 'string',
      groupName: 'string',
      contactGroups: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyMonitorGroupResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  code: number;
  message: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      success: 'Success',
      code: 'Code',
      message: 'Message',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      success: 'boolean',
      code: 'number',
      message: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMetricRuleListRequest extends $tea.Model {
  metricName?: string;
  enableState?: boolean;
  namespace?: string;
  page?: string;
  pageSize?: string;
  alertState?: string;
  dimensions?: string;
  ruleName?: string;
  groupId?: string;
  ruleIds?: string;
  static names(): { [key: string]: string } {
    return {
      metricName: 'MetricName',
      enableState: 'EnableState',
      namespace: 'Namespace',
      page: 'Page',
      pageSize: 'PageSize',
      alertState: 'AlertState',
      dimensions: 'Dimensions',
      ruleName: 'RuleName',
      groupId: 'GroupId',
      ruleIds: 'RuleIds',
    };
  }

  static types(): { [key: string]: any } {
    return {
      metricName: 'string',
      enableState: 'boolean',
      namespace: 'string',
      page: 'string',
      pageSize: 'string',
      alertState: 'string',
      dimensions: 'string',
      ruleName: 'string',
      groupId: 'string',
      ruleIds: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMetricRuleListResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  code: number;
  message: string;
  total: string;
  alarms: DescribeMetricRuleListResponseAlarms;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      success: 'Success',
      code: 'Code',
      message: 'Message',
      total: 'Total',
      alarms: 'Alarms',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      success: 'boolean',
      code: 'number',
      message: 'string',
      total: 'string',
      alarms: DescribeMetricRuleListResponseAlarms,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PutResourceMetricRuleRequest extends $tea.Model {
  ruleId: string;
  ruleName?: string;
  namespace: string;
  metricName: string;
  resources: string;
  contactGroups: string;
  webhook?: string;
  effectiveInterval?: string;
  noEffectiveInterval?: string;
  silenceTime?: number;
  period?: string;
  interval?: string;
  emailSubject?: string;
  escalations: PutResourceMetricRuleRequestEscalations;
  static names(): { [key: string]: string } {
    return {
      ruleId: 'RuleId',
      ruleName: 'RuleName',
      namespace: 'Namespace',
      metricName: 'MetricName',
      resources: 'Resources',
      contactGroups: 'ContactGroups',
      webhook: 'Webhook',
      effectiveInterval: 'EffectiveInterval',
      noEffectiveInterval: 'NoEffectiveInterval',
      silenceTime: 'SilenceTime',
      period: 'Period',
      interval: 'Interval',
      emailSubject: 'EmailSubject',
      escalations: 'Escalations',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ruleId: 'string',
      ruleName: 'string',
      namespace: 'string',
      metricName: 'string',
      resources: 'string',
      contactGroups: 'string',
      webhook: 'string',
      effectiveInterval: 'string',
      noEffectiveInterval: 'string',
      silenceTime: 'number',
      period: 'string',
      interval: 'string',
      emailSubject: 'string',
      escalations: PutResourceMetricRuleRequestEscalations,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PutResourceMetricRuleResponse extends $tea.Model {
  success: boolean;
  code: string;
  message: string;
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      success: 'Success',
      code: 'Code',
      message: 'Message',
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      success: 'boolean',
      code: 'string',
      message: 'string',
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PutGroupMetricRuleRequest extends $tea.Model {
  groupId: string;
  ruleId: string;
  category: string;
  ruleName?: string;
  namespace: string;
  metricName: string;
  dimensions?: string;
  effectiveInterval?: string;
  noEffectiveInterval?: string;
  silenceTime?: number;
  period?: string;
  interval?: string;
  webhook?: string;
  emailSubject?: string;
  escalations: PutGroupMetricRuleRequestEscalations;
  static names(): { [key: string]: string } {
    return {
      groupId: 'GroupId',
      ruleId: 'RuleId',
      category: 'Category',
      ruleName: 'RuleName',
      namespace: 'Namespace',
      metricName: 'MetricName',
      dimensions: 'Dimensions',
      effectiveInterval: 'EffectiveInterval',
      noEffectiveInterval: 'NoEffectiveInterval',
      silenceTime: 'SilenceTime',
      period: 'Period',
      interval: 'Interval',
      webhook: 'Webhook',
      emailSubject: 'EmailSubject',
      escalations: 'Escalations',
    };
  }

  static types(): { [key: string]: any } {
    return {
      groupId: 'string',
      ruleId: 'string',
      category: 'string',
      ruleName: 'string',
      namespace: 'string',
      metricName: 'string',
      dimensions: 'string',
      effectiveInterval: 'string',
      noEffectiveInterval: 'string',
      silenceTime: 'number',
      period: 'string',
      interval: 'string',
      webhook: 'string',
      emailSubject: 'string',
      escalations: PutGroupMetricRuleRequestEscalations,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PutGroupMetricRuleResponse extends $tea.Model {
  success: boolean;
  code: string;
  message: string;
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      success: 'Success',
      code: 'Code',
      message: 'Message',
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      success: 'boolean',
      code: 'string',
      message: 'string',
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class EnableMetricRulesRequest extends $tea.Model {
  ruleId: string[];
  static names(): { [key: string]: string } {
    return {
      ruleId: 'RuleId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ruleId: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class EnableMetricRulesResponse extends $tea.Model {
  success: boolean;
  code: string;
  message: string;
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      success: 'Success',
      code: 'Code',
      message: 'Message',
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      success: 'boolean',
      code: 'string',
      message: 'string',
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMetricRuleCountRequest extends $tea.Model {
  namespace?: string;
  metricName?: string;
  static names(): { [key: string]: string } {
    return {
      namespace: 'Namespace',
      metricName: 'MetricName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      namespace: 'string',
      metricName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMetricRuleCountResponse extends $tea.Model {
  success: boolean;
  code: string;
  message: string;
  requestId: string;
  metricRuleCount: DescribeMetricRuleCountResponseMetricRuleCount;
  static names(): { [key: string]: string } {
    return {
      success: 'Success',
      code: 'Code',
      message: 'Message',
      requestId: 'RequestId',
      metricRuleCount: 'MetricRuleCount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      success: 'boolean',
      code: 'string',
      message: 'string',
      requestId: 'string',
      metricRuleCount: DescribeMetricRuleCountResponseMetricRuleCount,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateGroupMetricRulesRequest extends $tea.Model {
  groupId: number;
  groupMetricRules?: CreateGroupMetricRulesRequestGroupMetricRules[];
  static names(): { [key: string]: string } {
    return {
      groupId: 'GroupId',
      groupMetricRules: 'GroupMetricRules',
    };
  }

  static types(): { [key: string]: any } {
    return {
      groupId: 'number',
      groupMetricRules: { 'type': 'array', 'itemType': CreateGroupMetricRulesRequestGroupMetricRules },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateGroupMetricRulesResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  code: number;
  message: string;
  resources: CreateGroupMetricRulesResponseResources;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      success: 'Success',
      code: 'Code',
      message: 'Message',
      resources: 'Resources',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      success: 'boolean',
      code: 'number',
      message: 'string',
      resources: CreateGroupMetricRulesResponseResources,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DisableMetricRulesRequest extends $tea.Model {
  ruleId: string[];
  static names(): { [key: string]: string } {
    return {
      ruleId: 'RuleId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ruleId: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DisableMetricRulesResponse extends $tea.Model {
  success: boolean;
  code: string;
  message: string;
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      success: 'Success',
      code: 'Code',
      message: 'Message',
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      success: 'boolean',
      code: 'string',
      message: 'string',
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteMetricRulesRequest extends $tea.Model {
  id: string[];
  static names(): { [key: string]: string } {
    return {
      id: 'Id',
    };
  }

  static types(): { [key: string]: any } {
    return {
      id: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteMetricRulesResponse extends $tea.Model {
  success: boolean;
  code: string;
  message: string;
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      success: 'Success',
      code: 'Code',
      message: 'Message',
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      success: 'boolean',
      code: 'string',
      message: 'string',
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyMetricRuleTemplateRequest extends $tea.Model {
  templateId: number;
  name?: string;
  description?: string;
  restVersion: number;
  alertTemplates?: ModifyMetricRuleTemplateRequestAlertTemplates[];
  static names(): { [key: string]: string } {
    return {
      templateId: 'TemplateId',
      name: 'Name',
      description: 'Description',
      restVersion: 'RestVersion',
      alertTemplates: 'AlertTemplates',
    };
  }

  static types(): { [key: string]: any } {
    return {
      templateId: 'number',
      name: 'string',
      description: 'string',
      restVersion: 'number',
      alertTemplates: { 'type': 'array', 'itemType': ModifyMetricRuleTemplateRequestAlertTemplates },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyMetricRuleTemplateResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  code: number;
  message: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      success: 'Success',
      code: 'Code',
      message: 'Message',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      success: 'boolean',
      code: 'number',
      message: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ApplyMetricRuleTemplateRequest extends $tea.Model {
  silenceTime?: number;
  groupId: number;
  templateIds: string;
  enableStartTime?: number;
  enableEndTime?: number;
  notifyLevel?: number;
  applyMode?: string;
  webhook?: string;
  static names(): { [key: string]: string } {
    return {
      silenceTime: 'SilenceTime',
      groupId: 'GroupId',
      templateIds: 'TemplateIds',
      enableStartTime: 'EnableStartTime',
      enableEndTime: 'EnableEndTime',
      notifyLevel: 'NotifyLevel',
      applyMode: 'ApplyMode',
      webhook: 'Webhook',
    };
  }

  static types(): { [key: string]: any } {
    return {
      silenceTime: 'number',
      groupId: 'number',
      templateIds: 'string',
      enableStartTime: 'number',
      enableEndTime: 'number',
      notifyLevel: 'number',
      applyMode: 'string',
      webhook: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ApplyMetricRuleTemplateResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  code: number;
  message: string;
  resource: ApplyMetricRuleTemplateResponseResource;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      success: 'Success',
      code: 'Code',
      message: 'Message',
      resource: 'Resource',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      success: 'boolean',
      code: 'number',
      message: 'string',
      resource: ApplyMetricRuleTemplateResponseResource,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMetricRuleTemplateAttributeRequest extends $tea.Model {
  name?: string;
  templateId?: string;
  static names(): { [key: string]: string } {
    return {
      name: 'Name',
      templateId: 'TemplateId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
      templateId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMetricRuleTemplateAttributeResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  code: number;
  message: string;
  resource: DescribeMetricRuleTemplateAttributeResponseResource;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      success: 'Success',
      code: 'Code',
      message: 'Message',
      resource: 'Resource',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      success: 'boolean',
      code: 'number',
      message: 'string',
      resource: DescribeMetricRuleTemplateAttributeResponseResource,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateMetricRuleTemplateRequest extends $tea.Model {
  name: string;
  description?: string;
  alertTemplates?: CreateMetricRuleTemplateRequestAlertTemplates[];
  static names(): { [key: string]: string } {
    return {
      name: 'Name',
      description: 'Description',
      alertTemplates: 'AlertTemplates',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
      description: 'string',
      alertTemplates: { 'type': 'array', 'itemType': CreateMetricRuleTemplateRequestAlertTemplates },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateMetricRuleTemplateResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  code: number;
  message: string;
  id: number;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      success: 'Success',
      code: 'Code',
      message: 'Message',
      id: 'Id',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      success: 'boolean',
      code: 'number',
      message: 'string',
      id: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteMetricRuleTemplateRequest extends $tea.Model {
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

export class DeleteMetricRuleTemplateResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  code: number;
  message: string;
  resource: DeleteMetricRuleTemplateResponseResource;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      success: 'Success',
      code: 'Code',
      message: 'Message',
      resource: 'Resource',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      success: 'boolean',
      code: 'number',
      message: 'string',
      resource: DeleteMetricRuleTemplateResponseResource,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMetricRuleTemplateListRequest extends $tea.Model {
  name?: string;
  keyword?: string;
  templateId?: number;
  pageNumber?: number;
  pageSize?: number;
  history?: boolean;
  static names(): { [key: string]: string } {
    return {
      name: 'Name',
      keyword: 'Keyword',
      templateId: 'TemplateId',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      history: 'History',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
      keyword: 'string',
      templateId: 'number',
      pageNumber: 'number',
      pageSize: 'number',
      history: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMetricRuleTemplateListResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  code: number;
  message: string;
  total: number;
  templates: DescribeMetricRuleTemplateListResponseTemplates;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      success: 'Success',
      code: 'Code',
      message: 'Message',
      total: 'Total',
      templates: 'Templates',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      success: 'boolean',
      code: 'number',
      message: 'string',
      total: 'number',
      templates: DescribeMetricRuleTemplateListResponseTemplates,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PutCustomEventRequest extends $tea.Model {
  eventInfo?: PutCustomEventRequestEventInfo[];
  static names(): { [key: string]: string } {
    return {
      eventInfo: 'EventInfo',
    };
  }

  static types(): { [key: string]: any } {
    return {
      eventInfo: { 'type': 'array', 'itemType': PutCustomEventRequestEventInfo },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PutCustomEventResponse extends $tea.Model {
  requestId: string;
  code: string;
  message: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      code: 'Code',
      message: 'Message',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      code: 'string',
      message: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeCustomEventCountRequest extends $tea.Model {
  name?: string;
  level?: string;
  eventId?: string;
  groupId?: string;
  searchKeywords?: string;
  startTime?: string;
  endTime?: string;
  static names(): { [key: string]: string } {
    return {
      name: 'Name',
      level: 'Level',
      eventId: 'EventId',
      groupId: 'GroupId',
      searchKeywords: 'SearchKeywords',
      startTime: 'StartTime',
      endTime: 'EndTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
      level: 'string',
      eventId: 'string',
      groupId: 'string',
      searchKeywords: 'string',
      startTime: 'string',
      endTime: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeCustomEventCountResponse extends $tea.Model {
  code: string;
  message: string;
  requestId: string;
  success: boolean;
  customEventCounts: DescribeCustomEventCountResponseCustomEventCounts;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      requestId: 'RequestId',
      success: 'Success',
      customEventCounts: 'CustomEventCounts',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      requestId: 'string',
      success: 'boolean',
      customEventCounts: DescribeCustomEventCountResponseCustomEventCounts,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeCustomEventAttributeRequest extends $tea.Model {
  name?: string;
  level?: string;
  eventId?: string;
  groupId?: string;
  searchKeywords?: string;
  startTime?: string;
  endTime?: string;
  pageNumber?: number;
  pageSize?: number;
  static names(): { [key: string]: string } {
    return {
      name: 'Name',
      level: 'Level',
      eventId: 'EventId',
      groupId: 'GroupId',
      searchKeywords: 'SearchKeywords',
      startTime: 'StartTime',
      endTime: 'EndTime',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
      level: 'string',
      eventId: 'string',
      groupId: 'string',
      searchKeywords: 'string',
      startTime: 'string',
      endTime: 'string',
      pageNumber: 'number',
      pageSize: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeCustomEventAttributeResponse extends $tea.Model {
  code: string;
  message: string;
  requestId: string;
  success: string;
  customEvents: DescribeCustomEventAttributeResponseCustomEvents;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      requestId: 'RequestId',
      success: 'Success',
      customEvents: 'CustomEvents',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      requestId: 'string',
      success: 'string',
      customEvents: DescribeCustomEventAttributeResponseCustomEvents,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeCustomEventHistogramRequest extends $tea.Model {
  name?: string;
  level?: string;
  eventId?: string;
  groupId?: string;
  searchKeywords?: string;
  startTime?: string;
  endTime?: string;
  static names(): { [key: string]: string } {
    return {
      name: 'Name',
      level: 'Level',
      eventId: 'EventId',
      groupId: 'GroupId',
      searchKeywords: 'SearchKeywords',
      startTime: 'StartTime',
      endTime: 'EndTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
      level: 'string',
      eventId: 'string',
      groupId: 'string',
      searchKeywords: 'string',
      startTime: 'string',
      endTime: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeCustomEventHistogramResponse extends $tea.Model {
  code: string;
  message: string;
  requestId: string;
  success: string;
  eventHistograms: DescribeCustomEventHistogramResponseEventHistograms;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      requestId: 'RequestId',
      success: 'Success',
      eventHistograms: 'EventHistograms',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      requestId: 'string',
      success: 'string',
      eventHistograms: DescribeCustomEventHistogramResponseEventHistograms,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteCustomMetricRequest extends $tea.Model {
  groupId: string;
  metricName: string;
  md5?: string;
  UUID?: string;
  static names(): { [key: string]: string } {
    return {
      groupId: 'GroupId',
      metricName: 'MetricName',
      md5: 'Md5',
      UUID: 'UUID',
    };
  }

  static types(): { [key: string]: any } {
    return {
      groupId: 'string',
      metricName: 'string',
      md5: 'string',
      UUID: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteCustomMetricResponse extends $tea.Model {
  code: string;
  message: string;
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeCustomMetricListRequest extends $tea.Model {
  groupId: string;
  metricName?: string;
  dimension?: string;
  md5?: string;
  pageNumber?: string;
  pageSize?: string;
  static names(): { [key: string]: string } {
    return {
      groupId: 'GroupId',
      metricName: 'MetricName',
      dimension: 'Dimension',
      md5: 'Md5',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
    };
  }

  static types(): { [key: string]: any } {
    return {
      groupId: 'string',
      metricName: 'string',
      dimension: 'string',
      md5: 'string',
      pageNumber: 'string',
      pageSize: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeCustomMetricListResponse extends $tea.Model {
  code: string;
  message: string;
  requestId: string;
  result: string;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      requestId: 'RequestId',
      result: 'Result',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      requestId: 'string',
      result: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PutCustomMetricRequest extends $tea.Model {
  metricList: PutCustomMetricRequestMetricList[];
  static names(): { [key: string]: string } {
    return {
      metricList: 'MetricList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      metricList: { 'type': 'array', 'itemType': PutCustomMetricRequestMetricList },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PutCustomMetricResponse extends $tea.Model {
  requestId: string;
  code: string;
  message: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      code: 'Code',
      message: 'Message',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      code: 'string',
      message: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeEventRuleAttributeRequest extends $tea.Model {
  ruleName: string;
  static names(): { [key: string]: string } {
    return {
      ruleName: 'RuleName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ruleName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeEventRuleAttributeResponse extends $tea.Model {
  success: boolean;
  code: string;
  message: string;
  requestId: string;
  result: DescribeEventRuleAttributeResponseResult;
  static names(): { [key: string]: string } {
    return {
      success: 'Success',
      code: 'Code',
      message: 'Message',
      requestId: 'RequestId',
      result: 'Result',
    };
  }

  static types(): { [key: string]: any } {
    return {
      success: 'boolean',
      code: 'string',
      message: 'string',
      requestId: 'string',
      result: DescribeEventRuleAttributeResponseResult,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteContactGroupRequest extends $tea.Model {
  contactGroupName: string;
  static names(): { [key: string]: string } {
    return {
      contactGroupName: 'ContactGroupName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      contactGroupName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteContactGroupResponse extends $tea.Model {
  success: boolean;
  code: string;
  message: string;
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      success: 'Success',
      code: 'Code',
      message: 'Message',
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      success: 'boolean',
      code: 'string',
      message: 'string',
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContactListRequest extends $tea.Model {
  pageSize?: number;
  pageNumber?: number;
  contactName?: string;
  chanelType?: string;
  chanelValue?: string;
  static names(): { [key: string]: string } {
    return {
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
      contactName: 'ContactName',
      chanelType: 'ChanelType',
      chanelValue: 'ChanelValue',
    };
  }

  static types(): { [key: string]: any } {
    return {
      pageSize: 'number',
      pageNumber: 'number',
      contactName: 'string',
      chanelType: 'string',
      chanelValue: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContactListResponse extends $tea.Model {
  success: boolean;
  code: string;
  message: string;
  total: number;
  requestId: string;
  contacts: DescribeContactListResponseContacts;
  static names(): { [key: string]: string } {
    return {
      success: 'Success',
      code: 'Code',
      message: 'Message',
      total: 'Total',
      requestId: 'RequestId',
      contacts: 'Contacts',
    };
  }

  static types(): { [key: string]: any } {
    return {
      success: 'boolean',
      code: 'string',
      message: 'string',
      total: 'number',
      requestId: 'string',
      contacts: DescribeContactListResponseContacts,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContactListByContactGroupRequest extends $tea.Model {
  contactGroupName: string;
  static names(): { [key: string]: string } {
    return {
      contactGroupName: 'ContactGroupName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      contactGroupName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContactListByContactGroupResponse extends $tea.Model {
  success: boolean;
  code: string;
  message: string;
  requestId: string;
  contacts: DescribeContactListByContactGroupResponseContacts;
  static names(): { [key: string]: string } {
    return {
      success: 'Success',
      code: 'Code',
      message: 'Message',
      requestId: 'RequestId',
      contacts: 'Contacts',
    };
  }

  static types(): { [key: string]: any } {
    return {
      success: 'boolean',
      code: 'string',
      message: 'string',
      requestId: 'string',
      contacts: DescribeContactListByContactGroupResponseContacts,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteContactRequest extends $tea.Model {
  contactName: string;
  static names(): { [key: string]: string } {
    return {
      contactName: 'ContactName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      contactName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteContactResponse extends $tea.Model {
  success: boolean;
  code: string;
  message: string;
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      success: 'Success',
      code: 'Code',
      message: 'Message',
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      success: 'boolean',
      code: 'string',
      message: 'string',
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PutContactGroupRequest extends $tea.Model {
  contactGroupName: string;
  describe?: string;
  contactNames: string[];
  static names(): { [key: string]: string } {
    return {
      contactGroupName: 'ContactGroupName',
      describe: 'Describe',
      contactNames: 'ContactNames',
    };
  }

  static types(): { [key: string]: any } {
    return {
      contactGroupName: 'string',
      describe: 'string',
      contactNames: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PutContactGroupResponse extends $tea.Model {
  success: boolean;
  code: string;
  message: string;
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      success: 'Success',
      code: 'Code',
      message: 'Message',
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      success: 'boolean',
      code: 'string',
      message: 'string',
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PutContactRequest extends $tea.Model {
  contactName: string;
  describe: string;
  channels: PutContactRequestChannels;
  static names(): { [key: string]: string } {
    return {
      contactName: 'ContactName',
      describe: 'Describe',
      channels: 'Channels',
    };
  }

  static types(): { [key: string]: any } {
    return {
      contactName: 'string',
      describe: 'string',
      channels: PutContactRequestChannels,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PutContactResponse extends $tea.Model {
  success: boolean;
  code: string;
  message: string;
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      success: 'Success',
      code: 'Code',
      message: 'Message',
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      success: 'boolean',
      code: 'string',
      message: 'string',
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContactGroupListRequest extends $tea.Model {
  pageSize?: number;
  pageNumber?: number;
  static names(): { [key: string]: string } {
    return {
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
    };
  }

  static types(): { [key: string]: any } {
    return {
      pageSize: 'number',
      pageNumber: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContactGroupListResponse extends $tea.Model {
  success: boolean;
  code: string;
  message: string;
  total: number;
  requestId: string;
  contactGroupList: DescribeContactGroupListResponseContactGroupList;
  contactGroups: DescribeContactGroupListResponseContactGroups;
  static names(): { [key: string]: string } {
    return {
      success: 'Success',
      code: 'Code',
      message: 'Message',
      total: 'Total',
      requestId: 'RequestId',
      contactGroupList: 'ContactGroupList',
      contactGroups: 'ContactGroups',
    };
  }

  static types(): { [key: string]: any } {
    return {
      success: 'boolean',
      code: 'string',
      message: 'string',
      total: 'number',
      requestId: 'string',
      contactGroupList: DescribeContactGroupListResponseContactGroupList,
      contactGroups: DescribeContactGroupListResponseContactGroups,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PutEventRuleTargetsRequest extends $tea.Model {
  ruleName: string;
  fcParameters?: PutEventRuleTargetsRequestFcParameters[];
  contactParameters?: PutEventRuleTargetsRequestContactParameters[];
  mnsParameters?: PutEventRuleTargetsRequestMnsParameters[];
  webhookParameters?: PutEventRuleTargetsRequestWebhookParameters[];
  slsParameters?: PutEventRuleTargetsRequestSlsParameters[];
  static names(): { [key: string]: string } {
    return {
      ruleName: 'RuleName',
      fcParameters: 'FcParameters',
      contactParameters: 'ContactParameters',
      mnsParameters: 'MnsParameters',
      webhookParameters: 'WebhookParameters',
      slsParameters: 'SlsParameters',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ruleName: 'string',
      fcParameters: { 'type': 'array', 'itemType': PutEventRuleTargetsRequestFcParameters },
      contactParameters: { 'type': 'array', 'itemType': PutEventRuleTargetsRequestContactParameters },
      mnsParameters: { 'type': 'array', 'itemType': PutEventRuleTargetsRequestMnsParameters },
      webhookParameters: { 'type': 'array', 'itemType': PutEventRuleTargetsRequestWebhookParameters },
      slsParameters: { 'type': 'array', 'itemType': PutEventRuleTargetsRequestSlsParameters },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PutEventRuleTargetsResponse extends $tea.Model {
  success: boolean;
  code: string;
  message: string;
  requestId: string;
  failedParameterCount: string;
  failedContactParameters: PutEventRuleTargetsResponseFailedContactParameters;
  failedMnsParameters: PutEventRuleTargetsResponseFailedMnsParameters;
  failedFcParameters: PutEventRuleTargetsResponseFailedFcParameters;
  static names(): { [key: string]: string } {
    return {
      success: 'Success',
      code: 'Code',
      message: 'Message',
      requestId: 'RequestId',
      failedParameterCount: 'FailedParameterCount',
      failedContactParameters: 'FailedContactParameters',
      failedMnsParameters: 'FailedMnsParameters',
      failedFcParameters: 'FailedFcParameters',
    };
  }

  static types(): { [key: string]: any } {
    return {
      success: 'boolean',
      code: 'string',
      message: 'string',
      requestId: 'string',
      failedParameterCount: 'string',
      failedContactParameters: PutEventRuleTargetsResponseFailedContactParameters,
      failedMnsParameters: PutEventRuleTargetsResponseFailedMnsParameters,
      failedFcParameters: PutEventRuleTargetsResponseFailedFcParameters,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteEventRuleTargetsRequest extends $tea.Model {
  ruleName: string;
  ids: string[];
  static names(): { [key: string]: string } {
    return {
      ruleName: 'RuleName',
      ids: 'Ids',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ruleName: 'string',
      ids: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteEventRuleTargetsResponse extends $tea.Model {
  success: boolean;
  code: string;
  message: string;
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      success: 'Success',
      code: 'Code',
      message: 'Message',
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      success: 'boolean',
      code: 'string',
      message: 'string',
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DisableEventRulesRequest extends $tea.Model {
  ruleNames: string[];
  static names(): { [key: string]: string } {
    return {
      ruleNames: 'RuleNames',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ruleNames: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DisableEventRulesResponse extends $tea.Model {
  success: boolean;
  code: string;
  message: string;
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      success: 'Success',
      code: 'Code',
      message: 'Message',
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      success: 'boolean',
      code: 'string',
      message: 'string',
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeEventRuleTargetListRequest extends $tea.Model {
  ruleName: string;
  static names(): { [key: string]: string } {
    return {
      ruleName: 'RuleName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ruleName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeEventRuleTargetListResponse extends $tea.Model {
  code: string;
  message: string;
  requestId: string;
  contactParameters: DescribeEventRuleTargetListResponseContactParameters;
  fcParameters: DescribeEventRuleTargetListResponseFcParameters;
  mnsParameters: DescribeEventRuleTargetListResponseMnsParameters;
  webhookParameters: DescribeEventRuleTargetListResponseWebhookParameters;
  slsParameters: DescribeEventRuleTargetListResponseSlsParameters;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      requestId: 'RequestId',
      contactParameters: 'ContactParameters',
      fcParameters: 'FcParameters',
      mnsParameters: 'MnsParameters',
      webhookParameters: 'WebhookParameters',
      slsParameters: 'SlsParameters',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      requestId: 'string',
      contactParameters: DescribeEventRuleTargetListResponseContactParameters,
      fcParameters: DescribeEventRuleTargetListResponseFcParameters,
      mnsParameters: DescribeEventRuleTargetListResponseMnsParameters,
      webhookParameters: DescribeEventRuleTargetListResponseWebhookParameters,
      slsParameters: DescribeEventRuleTargetListResponseSlsParameters,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteEventRulesRequest extends $tea.Model {
  ruleNames: string[];
  static names(): { [key: string]: string } {
    return {
      ruleNames: 'RuleNames',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ruleNames: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteEventRulesResponse extends $tea.Model {
  success: boolean;
  code: string;
  message: string;
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      success: 'Success',
      code: 'Code',
      message: 'Message',
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      success: 'boolean',
      code: 'string',
      message: 'string',
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class EnableEventRulesRequest extends $tea.Model {
  ruleNames: string[];
  static names(): { [key: string]: string } {
    return {
      ruleNames: 'RuleNames',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ruleNames: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class EnableEventRulesResponse extends $tea.Model {
  success: boolean;
  code: string;
  message: string;
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      success: 'Success',
      code: 'Code',
      message: 'Message',
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      success: 'boolean',
      code: 'string',
      message: 'string',
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PutEventRuleRequest extends $tea.Model {
  ruleName: string;
  groupId?: string;
  eventType?: string;
  description?: string;
  state?: string;
  eventPattern: PutEventRuleRequestEventPattern[];
  static names(): { [key: string]: string } {
    return {
      ruleName: 'RuleName',
      groupId: 'GroupId',
      eventType: 'EventType',
      description: 'Description',
      state: 'State',
      eventPattern: 'EventPattern',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ruleName: 'string',
      groupId: 'string',
      eventType: 'string',
      description: 'string',
      state: 'string',
      eventPattern: { 'type': 'array', 'itemType': PutEventRuleRequestEventPattern },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PutEventRuleResponse extends $tea.Model {
  success: boolean;
  code: string;
  message: string;
  requestId: string;
  data: string;
  static names(): { [key: string]: string } {
    return {
      success: 'Success',
      code: 'Code',
      message: 'Message',
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      success: 'boolean',
      code: 'string',
      message: 'string',
      requestId: 'string',
      data: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeEventRuleListRequest extends $tea.Model {
  namePrefix?: string;
  pageNumber?: string;
  pageSize?: string;
  groupId?: string;
  static names(): { [key: string]: string } {
    return {
      namePrefix: 'NamePrefix',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      groupId: 'GroupId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      namePrefix: 'string',
      pageNumber: 'string',
      pageSize: 'string',
      groupId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeEventRuleListResponse extends $tea.Model {
  success: boolean;
  code: string;
  message: string;
  requestId: string;
  total: number;
  eventRules: DescribeEventRuleListResponseEventRules;
  static names(): { [key: string]: string } {
    return {
      success: 'Success',
      code: 'Code',
      message: 'Message',
      requestId: 'RequestId',
      total: 'Total',
      eventRules: 'EventRules',
    };
  }

  static types(): { [key: string]: any } {
    return {
      success: 'boolean',
      code: 'string',
      message: 'string',
      requestId: 'string',
      total: 'number',
      eventRules: DescribeEventRuleListResponseEventRules,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSystemEventAttributeRequest extends $tea.Model {
  product?: string;
  eventType?: string;
  name?: string;
  level?: string;
  status?: string;
  groupId?: string;
  searchKeywords?: string;
  startTime?: string;
  endTime?: string;
  pageNumber?: number;
  pageSize?: number;
  static names(): { [key: string]: string } {
    return {
      product: 'Product',
      eventType: 'EventType',
      name: 'Name',
      level: 'Level',
      status: 'Status',
      groupId: 'GroupId',
      searchKeywords: 'SearchKeywords',
      startTime: 'StartTime',
      endTime: 'EndTime',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
    };
  }

  static types(): { [key: string]: any } {
    return {
      product: 'string',
      eventType: 'string',
      name: 'string',
      level: 'string',
      status: 'string',
      groupId: 'string',
      searchKeywords: 'string',
      startTime: 'string',
      endTime: 'string',
      pageNumber: 'number',
      pageSize: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSystemEventAttributeResponse extends $tea.Model {
  code: string;
  message: string;
  requestId: string;
  success: string;
  systemEvents: DescribeSystemEventAttributeResponseSystemEvents;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      requestId: 'RequestId',
      success: 'Success',
      systemEvents: 'SystemEvents',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      requestId: 'string',
      success: 'string',
      systemEvents: DescribeSystemEventAttributeResponseSystemEvents,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSystemEventHistogramRequest extends $tea.Model {
  product?: string;
  eventType?: string;
  name?: string;
  level?: string;
  status?: string;
  groupId?: string;
  searchKeywords?: string;
  startTime?: string;
  endTime?: string;
  pageNumber?: number;
  pageSize?: number;
  static names(): { [key: string]: string } {
    return {
      product: 'Product',
      eventType: 'EventType',
      name: 'Name',
      level: 'Level',
      status: 'Status',
      groupId: 'GroupId',
      searchKeywords: 'SearchKeywords',
      startTime: 'StartTime',
      endTime: 'EndTime',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
    };
  }

  static types(): { [key: string]: any } {
    return {
      product: 'string',
      eventType: 'string',
      name: 'string',
      level: 'string',
      status: 'string',
      groupId: 'string',
      searchKeywords: 'string',
      startTime: 'string',
      endTime: 'string',
      pageNumber: 'number',
      pageSize: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSystemEventHistogramResponse extends $tea.Model {
  code: string;
  message: string;
  requestId: string;
  success: string;
  systemEventHistograms: DescribeSystemEventHistogramResponseSystemEventHistograms;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      requestId: 'RequestId',
      success: 'Success',
      systemEventHistograms: 'SystemEventHistograms',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      requestId: 'string',
      success: 'string',
      systemEventHistograms: DescribeSystemEventHistogramResponseSystemEventHistograms,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSystemEventCountRequest extends $tea.Model {
  product?: string;
  eventType?: string;
  name?: string;
  level?: string;
  status?: string;
  groupId?: string;
  searchKeywords?: string;
  startTime?: string;
  endTime?: string;
  static names(): { [key: string]: string } {
    return {
      product: 'Product',
      eventType: 'EventType',
      name: 'Name',
      level: 'Level',
      status: 'Status',
      groupId: 'GroupId',
      searchKeywords: 'SearchKeywords',
      startTime: 'StartTime',
      endTime: 'EndTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      product: 'string',
      eventType: 'string',
      name: 'string',
      level: 'string',
      status: 'string',
      groupId: 'string',
      searchKeywords: 'string',
      startTime: 'string',
      endTime: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSystemEventCountResponse extends $tea.Model {
  code: string;
  message: string;
  requestId: string;
  success: string;
  systemEventCounts: DescribeSystemEventCountResponseSystemEventCounts;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      requestId: 'RequestId',
      success: 'Success',
      systemEventCounts: 'SystemEventCounts',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      requestId: 'string',
      success: 'string',
      systemEventCounts: DescribeSystemEventCountResponseSystemEventCounts,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSystemEventMetaListRequest extends $tea.Model {
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

export class DescribeSystemEventMetaListResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  code: number;
  message: string;
  data: DescribeSystemEventMetaListResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      success: 'Success',
      code: 'Code',
      message: 'Message',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      success: 'boolean',
      code: 'number',
      message: 'string',
      data: DescribeSystemEventMetaListResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMonitoringAgentProcessesRequest extends $tea.Model {
  instanceId: string;
  static names(): { [key: string]: string } {
    return {
      instanceId: 'InstanceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      instanceId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMonitoringAgentProcessesResponse extends $tea.Model {
  code: string;
  message: string;
  success: boolean;
  requestId: string;
  nodeProcesses: DescribeMonitoringAgentProcessesResponseNodeProcesses;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      success: 'Success',
      requestId: 'RequestId',
      nodeProcesses: 'NodeProcesses',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      success: 'boolean',
      requestId: 'string',
      nodeProcesses: DescribeMonitoringAgentProcessesResponseNodeProcesses,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UninstallMonitoringAgentRequest extends $tea.Model {
  instanceId: string;
  static names(): { [key: string]: string } {
    return {
      instanceId: 'InstanceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      instanceId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UninstallMonitoringAgentResponse extends $tea.Model {
  code: string;
  message: string;
  success: boolean;
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      success: 'Success',
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      success: 'boolean',
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMonitoringAgentAccessKeyRequest extends $tea.Model {
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

export class DescribeMonitoringAgentAccessKeyResponse extends $tea.Model {
  code: number;
  message: string;
  success: boolean;
  requestId: string;
  accessKey: string;
  secretKey: string;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      success: 'Success',
      requestId: 'RequestId',
      accessKey: 'AccessKey',
      secretKey: 'SecretKey',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'number',
      message: 'string',
      success: 'boolean',
      requestId: 'string',
      accessKey: 'string',
      secretKey: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class InstallMonitoringAgentRequest extends $tea.Model {
  force?: boolean;
  instanceIds: string[];
  static names(): { [key: string]: string } {
    return {
      force: 'Force',
      instanceIds: 'InstanceIds',
    };
  }

  static types(): { [key: string]: any } {
    return {
      force: 'boolean',
      instanceIds: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class InstallMonitoringAgentResponse extends $tea.Model {
  code: string;
  message: string;
  success: boolean;
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      success: 'Success',
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      success: 'boolean',
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SendDryRunSystemEventRequest extends $tea.Model {
  product: string;
  eventName: string;
  groupId?: string;
  eventContent?: string;
  static names(): { [key: string]: string } {
    return {
      product: 'Product',
      eventName: 'EventName',
      groupId: 'GroupId',
      eventContent: 'EventContent',
    };
  }

  static types(): { [key: string]: any } {
    return {
      product: 'string',
      eventName: 'string',
      groupId: 'string',
      eventContent: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SendDryRunSystemEventResponse extends $tea.Model {
  code: string;
  message: string;
  requestId: string;
  success: string;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      requestId: 'RequestId',
      success: 'Success',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      requestId: 'string',
      success: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateMonitoringAgentProcessRequest extends $tea.Model {
  processName?: string;
  instanceId: string;
  processUser?: string;
  static names(): { [key: string]: string } {
    return {
      processName: 'ProcessName',
      instanceId: 'InstanceId',
      processUser: 'ProcessUser',
    };
  }

  static types(): { [key: string]: any } {
    return {
      processName: 'string',
      instanceId: 'string',
      processUser: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateMonitoringAgentProcessResponse extends $tea.Model {
  code: string;
  message: string;
  success: boolean;
  requestId: string;
  id: number;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      success: 'Success',
      requestId: 'RequestId',
      id: 'Id',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      success: 'boolean',
      requestId: 'string',
      id: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMonitoringAgentConfigRequest extends $tea.Model {
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

export class DescribeMonitoringAgentConfigResponse extends $tea.Model {
  code: string;
  message: string;
  success: boolean;
  requestId: string;
  autoInstall: boolean;
  enableInstallAgentNewECS: boolean;
  enableActiveAlert: string;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      success: 'Success',
      requestId: 'RequestId',
      autoInstall: 'AutoInstall',
      enableInstallAgentNewECS: 'EnableInstallAgentNewECS',
      enableActiveAlert: 'EnableActiveAlert',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      success: 'boolean',
      requestId: 'string',
      autoInstall: 'boolean',
      enableInstallAgentNewECS: 'boolean',
      enableActiveAlert: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteMonitoringAgentProcessRequest extends $tea.Model {
  instanceId: string;
  processName?: string;
  processId?: string;
  static names(): { [key: string]: string } {
    return {
      instanceId: 'InstanceId',
      processName: 'ProcessName',
      processId: 'ProcessId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      instanceId: 'string',
      processName: 'string',
      processId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteMonitoringAgentProcessResponse extends $tea.Model {
  code: string;
  message: string;
  success: boolean;
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      success: 'Success',
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      success: 'boolean',
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMonitoringAgentHostsRequest extends $tea.Model {
  keyWord?: string;
  hostName?: string;
  instanceIds?: string;
  serialNumbers?: string;
  pageNumber?: number;
  pageSize?: number;
  instanceRegionId?: string;
  static names(): { [key: string]: string } {
    return {
      keyWord: 'KeyWord',
      hostName: 'HostName',
      instanceIds: 'InstanceIds',
      serialNumbers: 'SerialNumbers',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      instanceRegionId: 'InstanceRegionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      keyWord: 'string',
      hostName: 'string',
      instanceIds: 'string',
      serialNumbers: 'string',
      pageNumber: 'number',
      pageSize: 'number',
      instanceRegionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMonitoringAgentHostsResponse extends $tea.Model {
  code: string;
  message: string;
  success: boolean;
  requestId: string;
  pageTotal: number;
  total: number;
  hosts: DescribeMonitoringAgentHostsResponseHosts;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      success: 'Success',
      requestId: 'RequestId',
      pageTotal: 'PageTotal',
      total: 'Total',
      hosts: 'Hosts',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      success: 'boolean',
      requestId: 'string',
      pageTotal: 'number',
      total: 'number',
      hosts: DescribeMonitoringAgentHostsResponseHosts,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSiteMonitorDataRequest extends $tea.Model {
  taskId: string;
  type?: string;
  metricName: string;
  startTime?: string;
  endTime?: string;
  period?: string;
  nextToken?: string;
  length?: number;
  static names(): { [key: string]: string } {
    return {
      taskId: 'TaskId',
      type: 'Type',
      metricName: 'MetricName',
      startTime: 'StartTime',
      endTime: 'EndTime',
      period: 'Period',
      nextToken: 'NextToken',
      length: 'Length',
    };
  }

  static types(): { [key: string]: any } {
    return {
      taskId: 'string',
      type: 'string',
      metricName: 'string',
      startTime: 'string',
      endTime: 'string',
      period: 'string',
      nextToken: 'string',
      length: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSiteMonitorDataResponse extends $tea.Model {
  code: string;
  message: string;
  success: string;
  requestId: string;
  nextToken: string;
  data: string;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      success: 'Success',
      requestId: 'RequestId',
      nextToken: 'NextToken',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      success: 'string',
      requestId: 'string',
      nextToken: 'string',
      data: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifySiteMonitorRequest extends $tea.Model {
  address?: string;
  taskId: string;
  taskName?: string;
  interval?: string;
  ispCities?: string;
  optionsJson?: string;
  alertIds?: string;
  static names(): { [key: string]: string } {
    return {
      address: 'Address',
      taskId: 'TaskId',
      taskName: 'TaskName',
      interval: 'Interval',
      ispCities: 'IspCities',
      optionsJson: 'OptionsJson',
      alertIds: 'AlertIds',
    };
  }

  static types(): { [key: string]: any } {
    return {
      address: 'string',
      taskId: 'string',
      taskName: 'string',
      interval: 'string',
      ispCities: 'string',
      optionsJson: 'string',
      alertIds: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifySiteMonitorResponse extends $tea.Model {
  code: string;
  message: string;
  success: string;
  requestId: string;
  data: ModifySiteMonitorResponseData;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      success: 'Success',
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      success: 'string',
      requestId: 'string',
      data: ModifySiteMonitorResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSiteMonitorISPCityListRequest extends $tea.Model {
  isp?: string;
  city?: string;
  static names(): { [key: string]: string } {
    return {
      isp: 'Isp',
      city: 'City',
    };
  }

  static types(): { [key: string]: any } {
    return {
      isp: 'string',
      city: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSiteMonitorISPCityListResponse extends $tea.Model {
  code: string;
  message: string;
  success: string;
  requestId: string;
  ispCityList: DescribeSiteMonitorISPCityListResponseIspCityList;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      success: 'Success',
      requestId: 'RequestId',
      ispCityList: 'IspCityList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      success: 'string',
      requestId: 'string',
      ispCityList: DescribeSiteMonitorISPCityListResponseIspCityList,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSiteMonitorQuotaRequest extends $tea.Model {
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

export class DescribeSiteMonitorQuotaResponse extends $tea.Model {
  code: string;
  message: string;
  success: string;
  requestId: string;
  data: DescribeSiteMonitorQuotaResponseData;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      success: 'Success',
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      success: 'string',
      requestId: 'string',
      data: DescribeSiteMonitorQuotaResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSiteMonitorStatisticsRequest extends $tea.Model {
  taskId: string;
  timeRange?: string;
  startTime?: string;
  metricName: string;
  static names(): { [key: string]: string } {
    return {
      taskId: 'TaskId',
      timeRange: 'TimeRange',
      startTime: 'StartTime',
      metricName: 'MetricName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      taskId: 'string',
      timeRange: 'string',
      startTime: 'string',
      metricName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSiteMonitorStatisticsResponse extends $tea.Model {
  code: string;
  message: string;
  success: string;
  requestId: string;
  data: string;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      success: 'Success',
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      success: 'string',
      requestId: 'string',
      data: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class EnableSiteMonitorsRequest extends $tea.Model {
  taskIds: string;
  static names(): { [key: string]: string } {
    return {
      taskIds: 'TaskIds',
    };
  }

  static types(): { [key: string]: any } {
    return {
      taskIds: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class EnableSiteMonitorsResponse extends $tea.Model {
  code: string;
  message: string;
  success: string;
  requestId: string;
  data: EnableSiteMonitorsResponseData;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      success: 'Success',
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      success: 'string',
      requestId: 'string',
      data: EnableSiteMonitorsResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSiteMonitorAttributeRequest extends $tea.Model {
  taskId: string;
  includeAlert?: boolean;
  static names(): { [key: string]: string } {
    return {
      taskId: 'TaskId',
      includeAlert: 'IncludeAlert',
    };
  }

  static types(): { [key: string]: any } {
    return {
      taskId: 'string',
      includeAlert: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSiteMonitorAttributeResponse extends $tea.Model {
  code: string;
  message: string;
  success: boolean;
  requestId: string;
  metricRules: DescribeSiteMonitorAttributeResponseMetricRules;
  siteMonitors: DescribeSiteMonitorAttributeResponseSiteMonitors;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      success: 'Success',
      requestId: 'RequestId',
      metricRules: 'MetricRules',
      siteMonitors: 'SiteMonitors',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      success: 'boolean',
      requestId: 'string',
      metricRules: DescribeSiteMonitorAttributeResponseMetricRules,
      siteMonitors: DescribeSiteMonitorAttributeResponseSiteMonitors,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSiteMonitorListRequest extends $tea.Model {
  taskId?: string;
  taskType?: string;
  keyword?: string;
  page?: number;
  pageSize?: number;
  static names(): { [key: string]: string } {
    return {
      taskId: 'TaskId',
      taskType: 'TaskType',
      keyword: 'Keyword',
      page: 'Page',
      pageSize: 'PageSize',
    };
  }

  static types(): { [key: string]: any } {
    return {
      taskId: 'string',
      taskType: 'string',
      keyword: 'string',
      page: 'number',
      pageSize: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSiteMonitorListResponse extends $tea.Model {
  code: string;
  message: string;
  success: string;
  requestId: string;
  pageNumber: number;
  pageSize: number;
  totalCount: number;
  siteMonitors: DescribeSiteMonitorListResponseSiteMonitors;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      success: 'Success',
      requestId: 'RequestId',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      totalCount: 'TotalCount',
      siteMonitors: 'SiteMonitors',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      success: 'string',
      requestId: 'string',
      pageNumber: 'number',
      pageSize: 'number',
      totalCount: 'number',
      siteMonitors: DescribeSiteMonitorListResponseSiteMonitors,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteSiteMonitorsRequest extends $tea.Model {
  taskIds: string;
  isDeleteAlarms?: boolean;
  static names(): { [key: string]: string } {
    return {
      taskIds: 'TaskIds',
      isDeleteAlarms: 'IsDeleteAlarms',
    };
  }

  static types(): { [key: string]: any } {
    return {
      taskIds: 'string',
      isDeleteAlarms: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteSiteMonitorsResponse extends $tea.Model {
  code: string;
  message: string;
  success: string;
  requestId: string;
  data: DeleteSiteMonitorsResponseData;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      success: 'Success',
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      success: 'string',
      requestId: 'string',
      data: DeleteSiteMonitorsResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DisableSiteMonitorsRequest extends $tea.Model {
  taskIds: string;
  static names(): { [key: string]: string } {
    return {
      taskIds: 'TaskIds',
    };
  }

  static types(): { [key: string]: any } {
    return {
      taskIds: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DisableSiteMonitorsResponse extends $tea.Model {
  code: string;
  message: string;
  success: string;
  requestId: string;
  data: DisableSiteMonitorsResponseData;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      success: 'Success',
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      success: 'string',
      requestId: 'string',
      data: DisableSiteMonitorsResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateSiteMonitorRequest extends $tea.Model {
  address: string;
  taskType: string;
  taskName: string;
  interval?: string;
  ispCities?: string;
  optionsJson?: string;
  alertIds?: string;
  static names(): { [key: string]: string } {
    return {
      address: 'Address',
      taskType: 'TaskType',
      taskName: 'TaskName',
      interval: 'Interval',
      ispCities: 'IspCities',
      optionsJson: 'OptionsJson',
      alertIds: 'AlertIds',
    };
  }

  static types(): { [key: string]: any } {
    return {
      address: 'string',
      taskType: 'string',
      taskName: 'string',
      interval: 'string',
      ispCities: 'string',
      optionsJson: 'string',
      alertIds: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateSiteMonitorResponse extends $tea.Model {
  code: string;
  message: string;
  success: string;
  requestId: string;
  alertRule: string;
  data: CreateSiteMonitorResponseData;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      success: 'Success',
      requestId: 'RequestId',
      alertRule: 'AlertRule',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      success: 'string',
      requestId: 'string',
      alertRule: 'string',
      data: CreateSiteMonitorResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeProjectMetaRequest extends $tea.Model {
  labels?: string;
  pageNumber?: number;
  pageSize?: number;
  static names(): { [key: string]: string } {
    return {
      labels: 'Labels',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
    };
  }

  static types(): { [key: string]: any } {
    return {
      labels: 'string',
      pageNumber: 'number',
      pageSize: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeProjectMetaResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  code: string;
  message: string;
  total: string;
  pageNumber: string;
  pageSize: string;
  resources: DescribeProjectMetaResponseResources;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      success: 'Success',
      code: 'Code',
      message: 'Message',
      total: 'Total',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      resources: 'Resources',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      success: 'boolean',
      code: 'string',
      message: 'string',
      total: 'string',
      pageNumber: 'string',
      pageSize: 'string',
      resources: DescribeProjectMetaResponseResources,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMetricListRequest extends $tea.Model {
  namespace: string;
  metricName: string;
  period?: string;
  startTime?: string;
  endTime?: string;
  dimensions?: string;
  nextToken?: string;
  length?: string;
  express?: string;
  static names(): { [key: string]: string } {
    return {
      namespace: 'Namespace',
      metricName: 'MetricName',
      period: 'Period',
      startTime: 'StartTime',
      endTime: 'EndTime',
      dimensions: 'Dimensions',
      nextToken: 'NextToken',
      length: 'Length',
      express: 'Express',
    };
  }

  static types(): { [key: string]: any } {
    return {
      namespace: 'string',
      metricName: 'string',
      period: 'string',
      startTime: 'string',
      endTime: 'string',
      dimensions: 'string',
      nextToken: 'string',
      length: 'string',
      express: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMetricListResponse extends $tea.Model {
  code: string;
  message: string;
  requestId: string;
  nextToken: string;
  datapoints: string;
  period: string;
  success: boolean;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      requestId: 'RequestId',
      nextToken: 'NextToken',
      datapoints: 'Datapoints',
      period: 'Period',
      success: 'Success',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      requestId: 'string',
      nextToken: 'string',
      datapoints: 'string',
      period: 'string',
      success: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMetricMetaListRequest extends $tea.Model {
  namespace?: string;
  labels?: string;
  metricName?: string;
  pageNumber?: number;
  pageSize?: number;
  static names(): { [key: string]: string } {
    return {
      namespace: 'Namespace',
      labels: 'Labels',
      metricName: 'MetricName',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
    };
  }

  static types(): { [key: string]: any } {
    return {
      namespace: 'string',
      labels: 'string',
      metricName: 'string',
      pageNumber: 'number',
      pageSize: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMetricMetaListResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  code: string;
  message: string;
  totalCount: string;
  resources: DescribeMetricMetaListResponseResources;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      success: 'Success',
      code: 'Code',
      message: 'Message',
      totalCount: 'TotalCount',
      resources: 'Resources',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      success: 'boolean',
      code: 'string',
      message: 'string',
      totalCount: 'string',
      resources: DescribeMetricMetaListResponseResources,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMetricTopRequest extends $tea.Model {
  period?: string;
  namespace: string;
  metricName: string;
  startTime?: string;
  endTime?: string;
  dimensions?: string;
  orderby: string;
  orderDesc?: string;
  length?: string;
  express?: string;
  static names(): { [key: string]: string } {
    return {
      period: 'Period',
      namespace: 'Namespace',
      metricName: 'MetricName',
      startTime: 'StartTime',
      endTime: 'EndTime',
      dimensions: 'Dimensions',
      orderby: 'Orderby',
      orderDesc: 'OrderDesc',
      length: 'Length',
      express: 'Express',
    };
  }

  static types(): { [key: string]: any } {
    return {
      period: 'string',
      namespace: 'string',
      metricName: 'string',
      startTime: 'string',
      endTime: 'string',
      dimensions: 'string',
      orderby: 'string',
      orderDesc: 'string',
      length: 'string',
      express: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMetricTopResponse extends $tea.Model {
  code: string;
  message: string;
  requestId: string;
  datapoints: string;
  period: string;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      requestId: 'RequestId',
      datapoints: 'Datapoints',
      period: 'Period',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      requestId: 'string',
      datapoints: 'string',
      period: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMetricDataRequest extends $tea.Model {
  namespace: string;
  metricName: string;
  period?: string;
  startTime?: string;
  endTime?: string;
  dimensions?: string;
  express?: string;
  length?: string;
  static names(): { [key: string]: string } {
    return {
      namespace: 'Namespace',
      metricName: 'MetricName',
      period: 'Period',
      startTime: 'StartTime',
      endTime: 'EndTime',
      dimensions: 'Dimensions',
      express: 'Express',
      length: 'Length',
    };
  }

  static types(): { [key: string]: any } {
    return {
      namespace: 'string',
      metricName: 'string',
      period: 'string',
      startTime: 'string',
      endTime: 'string',
      dimensions: 'string',
      express: 'string',
      length: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMetricDataResponse extends $tea.Model {
  code: string;
  message: string;
  requestId: string;
  datapoints: string;
  period: string;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      requestId: 'RequestId',
      datapoints: 'Datapoints',
      period: 'Period',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      requestId: 'string',
      datapoints: 'string',
      period: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMetricLastRequest extends $tea.Model {
  namespace: string;
  metricName: string;
  period?: string;
  startTime?: string;
  endTime?: string;
  dimensions?: string;
  nextToken?: string;
  length?: string;
  express?: string;
  static names(): { [key: string]: string } {
    return {
      namespace: 'Namespace',
      metricName: 'MetricName',
      period: 'Period',
      startTime: 'StartTime',
      endTime: 'EndTime',
      dimensions: 'Dimensions',
      nextToken: 'NextToken',
      length: 'Length',
      express: 'Express',
    };
  }

  static types(): { [key: string]: any } {
    return {
      namespace: 'string',
      metricName: 'string',
      period: 'string',
      startTime: 'string',
      endTime: 'string',
      dimensions: 'string',
      nextToken: 'string',
      length: 'string',
      express: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMetricLastResponse extends $tea.Model {
  code: string;
  message: string;
  requestId: string;
  nextToken: string;
  datapoints: string;
  period: string;
  success: boolean;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      requestId: 'RequestId',
      nextToken: 'NextToken',
      datapoints: 'Datapoints',
      period: 'Period',
      success: 'Success',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      requestId: 'string',
      nextToken: 'string',
      datapoints: 'string',
      period: 'string',
      success: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class EnableHostAvailabilityRequest extends $tea.Model {
  id: number[];
  static names(): { [key: string]: string } {
    return {
      id: 'Id',
    };
  }

  static types(): { [key: string]: any } {
    return {
      id: { 'type': 'array', 'itemType': 'long' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class EnableHostAvailabilityResponse extends $tea.Model {
  code: string;
  message: string;
  success: boolean;
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      success: 'Success',
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      success: 'boolean',
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyHostAvailabilityRequest extends $tea.Model {
  groupId: number;
  id: number;
  taskName: string;
  taskScope?: string;
  taskOption: ModifyHostAvailabilityRequestTaskOption;
  alertConfig: ModifyHostAvailabilityRequestAlertConfig;
  alertConfigEscalationList: ModifyHostAvailabilityRequestAlertConfigEscalationList[];
  instanceList?: string[];
  static names(): { [key: string]: string } {
    return {
      groupId: 'GroupId',
      id: 'Id',
      taskName: 'TaskName',
      taskScope: 'TaskScope',
      taskOption: 'TaskOption',
      alertConfig: 'AlertConfig',
      alertConfigEscalationList: 'AlertConfigEscalationList',
      instanceList: 'InstanceList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      groupId: 'number',
      id: 'number',
      taskName: 'string',
      taskScope: 'string',
      taskOption: ModifyHostAvailabilityRequestTaskOption,
      alertConfig: ModifyHostAvailabilityRequestAlertConfig,
      alertConfigEscalationList: { 'type': 'array', 'itemType': ModifyHostAvailabilityRequestAlertConfigEscalationList },
      instanceList: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyHostAvailabilityResponse extends $tea.Model {
  code: string;
  message: string;
  success: boolean;
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      success: 'Success',
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      success: 'boolean',
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DisableHostAvailabilityRequest extends $tea.Model {
  id: number[];
  static names(): { [key: string]: string } {
    return {
      id: 'Id',
    };
  }

  static types(): { [key: string]: any } {
    return {
      id: { 'type': 'array', 'itemType': 'long' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DisableHostAvailabilityResponse extends $tea.Model {
  code: string;
  message: string;
  success: boolean;
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      success: 'Success',
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      success: 'boolean',
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeUnhealthyHostAvailabilityRequest extends $tea.Model {
  id?: number[];
  static names(): { [key: string]: string } {
    return {
      id: 'Id',
    };
  }

  static types(): { [key: string]: any } {
    return {
      id: { 'type': 'array', 'itemType': 'long' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeUnhealthyHostAvailabilityResponse extends $tea.Model {
  code: string;
  message: string;
  success: boolean;
  requestId: string;
  unhealthyList: DescribeUnhealthyHostAvailabilityResponseUnhealthyList;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      success: 'Success',
      requestId: 'RequestId',
      unhealthyList: 'UnhealthyList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      success: 'boolean',
      requestId: 'string',
      unhealthyList: DescribeUnhealthyHostAvailabilityResponseUnhealthyList,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateHostAvailabilityRequest extends $tea.Model {
  groupId: number;
  taskName: string;
  taskScope?: string;
  taskType: string;
  taskOption: CreateHostAvailabilityRequestTaskOption;
  alertConfig: CreateHostAvailabilityRequestAlertConfig;
  alertConfigEscalationList: CreateHostAvailabilityRequestAlertConfigEscalationList[];
  instanceList?: string[];
  static names(): { [key: string]: string } {
    return {
      groupId: 'GroupId',
      taskName: 'TaskName',
      taskScope: 'TaskScope',
      taskType: 'TaskType',
      taskOption: 'TaskOption',
      alertConfig: 'AlertConfig',
      alertConfigEscalationList: 'AlertConfigEscalationList',
      instanceList: 'InstanceList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      groupId: 'number',
      taskName: 'string',
      taskScope: 'string',
      taskType: 'string',
      taskOption: CreateHostAvailabilityRequestTaskOption,
      alertConfig: CreateHostAvailabilityRequestAlertConfig,
      alertConfigEscalationList: { 'type': 'array', 'itemType': CreateHostAvailabilityRequestAlertConfigEscalationList },
      instanceList: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateHostAvailabilityResponse extends $tea.Model {
  code: string;
  message: string;
  success: boolean;
  requestId: string;
  taskId: number;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      success: 'Success',
      requestId: 'RequestId',
      taskId: 'TaskId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      success: 'boolean',
      requestId: 'string',
      taskId: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeHostAvailabilityListRequest extends $tea.Model {
  id?: number;
  taskName?: string;
  pageNumber?: number;
  pageSize?: number;
  groupId?: number;
  static names(): { [key: string]: string } {
    return {
      id: 'Id',
      taskName: 'TaskName',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      groupId: 'GroupId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      id: 'number',
      taskName: 'string',
      pageNumber: 'number',
      pageSize: 'number',
      groupId: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeHostAvailabilityListResponse extends $tea.Model {
  code: string;
  message: string;
  success: boolean;
  requestId: string;
  total: number;
  taskList: DescribeHostAvailabilityListResponseTaskList;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      success: 'Success',
      requestId: 'RequestId',
      total: 'Total',
      taskList: 'TaskList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      success: 'boolean',
      requestId: 'string',
      total: 'number',
      taskList: DescribeHostAvailabilityListResponseTaskList,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteHostAvailabilityRequest extends $tea.Model {
  id: number[];
  static names(): { [key: string]: string } {
    return {
      id: 'Id',
    };
  }

  static types(): { [key: string]: any } {
    return {
      id: { 'type': 'array', 'itemType': 'long' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteHostAvailabilityResponse extends $tea.Model {
  code: string;
  message: string;
  success: boolean;
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      success: 'Success',
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      success: 'boolean',
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMonitoringConfigRequest extends $tea.Model {
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

export class DescribeMonitoringConfigResponse extends $tea.Model {
  code: string;
  message: string;
  success: boolean;
  requestId: string;
  autoInstall: boolean;
  enableInstallAgentNewECS: boolean;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      success: 'Success',
      requestId: 'RequestId',
      autoInstall: 'AutoInstall',
      enableInstallAgentNewECS: 'EnableInstallAgentNewECS',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      success: 'boolean',
      requestId: 'string',
      autoInstall: 'boolean',
      enableInstallAgentNewECS: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PutMonitoringConfigRequest extends $tea.Model {
  autoInstall?: boolean;
  enableInstallAgentNewECS?: boolean;
  static names(): { [key: string]: string } {
    return {
      autoInstall: 'AutoInstall',
      enableInstallAgentNewECS: 'EnableInstallAgentNewECS',
    };
  }

  static types(): { [key: string]: any } {
    return {
      autoInstall: 'boolean',
      enableInstallAgentNewECS: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PutMonitoringConfigResponse extends $tea.Model {
  code: number;
  message: string;
  success: boolean;
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      success: 'Success',
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'number',
      message: 'string',
      success: 'boolean',
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeExporterOutputListResponseDatapointsDatapointConfigJson extends $tea.Model {
  logstore: string;
  project: string;
  endpoint: string;
  as: string;
  ak: string;
  static names(): { [key: string]: string } {
    return {
      logstore: 'logstore',
      project: 'project',
      endpoint: 'endpoint',
      as: 'as',
      ak: 'ak',
    };
  }

  static types(): { [key: string]: any } {
    return {
      logstore: 'string',
      project: 'string',
      endpoint: 'string',
      as: 'string',
      ak: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeExporterOutputListResponseDatapointsDatapoint extends $tea.Model {
  destName: string;
  destType: string;
  createTime: number;
  configJson: DescribeExporterOutputListResponseDatapointsDatapointConfigJson;
  static names(): { [key: string]: string } {
    return {
      destName: 'DestName',
      destType: 'DestType',
      createTime: 'CreateTime',
      configJson: 'ConfigJson',
    };
  }

  static types(): { [key: string]: any } {
    return {
      destName: 'string',
      destType: 'string',
      createTime: 'number',
      configJson: DescribeExporterOutputListResponseDatapointsDatapointConfigJson,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeExporterOutputListResponseDatapoints extends $tea.Model {
  datapoint: DescribeExporterOutputListResponseDatapointsDatapoint[];
  static names(): { [key: string]: string } {
    return {
      datapoint: 'Datapoint',
    };
  }

  static types(): { [key: string]: any } {
    return {
      datapoint: { 'type': 'array', 'itemType': DescribeExporterOutputListResponseDatapointsDatapoint },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeFolderListResponseResource extends $tea.Model {
  name: string;
  serviceId: number;
  static names(): { [key: string]: string } {
    return {
      name: 'Name',
      serviceId: 'ServiceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
      serviceId: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeExporterRuleListResponseDatapointsDatapointDstName extends $tea.Model {
  dstName: string[];
  static names(): { [key: string]: string } {
    return {
      dstName: 'DstName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      dstName: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeExporterRuleListResponseDatapointsDatapoint extends $tea.Model {
  ruleName: string;
  namespace: string;
  metricName: string;
  enabled: boolean;
  targetWindows: string;
  describe: string;
  dimension: string;
  createTime: number;
  dstName: DescribeExporterRuleListResponseDatapointsDatapointDstName;
  static names(): { [key: string]: string } {
    return {
      ruleName: 'RuleName',
      namespace: 'Namespace',
      metricName: 'MetricName',
      enabled: 'Enabled',
      targetWindows: 'TargetWindows',
      describe: 'Describe',
      dimension: 'Dimension',
      createTime: 'CreateTime',
      dstName: 'DstName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ruleName: 'string',
      namespace: 'string',
      metricName: 'string',
      enabled: 'boolean',
      targetWindows: 'string',
      describe: 'string',
      dimension: 'string',
      createTime: 'number',
      dstName: DescribeExporterRuleListResponseDatapointsDatapointDstName,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeExporterRuleListResponseDatapoints extends $tea.Model {
  datapoint: DescribeExporterRuleListResponseDatapointsDatapoint[];
  static names(): { [key: string]: string } {
    return {
      datapoint: 'Datapoint',
    };
  }

  static types(): { [key: string]: any } {
    return {
      datapoint: { 'type': 'array', 'itemType': DescribeExporterRuleListResponseDatapointsDatapoint },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDynamicTagRuleListResponseTagGroupListTagGroupMatchExpressMatchExpress extends $tea.Model {
  tagValueMatchFunction: string;
  tagValue: string;
  static names(): { [key: string]: string } {
    return {
      tagValueMatchFunction: 'TagValueMatchFunction',
      tagValue: 'TagValue',
    };
  }

  static types(): { [key: string]: any } {
    return {
      tagValueMatchFunction: 'string',
      tagValue: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDynamicTagRuleListResponseTagGroupListTagGroupMatchExpress extends $tea.Model {
  matchExpress: DescribeDynamicTagRuleListResponseTagGroupListTagGroupMatchExpressMatchExpress[];
  static names(): { [key: string]: string } {
    return {
      matchExpress: 'MatchExpress',
    };
  }

  static types(): { [key: string]: any } {
    return {
      matchExpress: { 'type': 'array', 'itemType': DescribeDynamicTagRuleListResponseTagGroupListTagGroupMatchExpressMatchExpress },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDynamicTagRuleListResponseTagGroupListTagGroupTemplateIdList extends $tea.Model {
  templateIdList: string[];
  static names(): { [key: string]: string } {
    return {
      templateIdList: 'TemplateIdList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      templateIdList: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDynamicTagRuleListResponseTagGroupListTagGroup extends $tea.Model {
  dynamicTagRuleId: string;
  tagKey: string;
  regionId: string;
  matchExpressFilterRelation: string;
  status: string;
  matchExpress: DescribeDynamicTagRuleListResponseTagGroupListTagGroupMatchExpress;
  templateIdList: DescribeDynamicTagRuleListResponseTagGroupListTagGroupTemplateIdList;
  static names(): { [key: string]: string } {
    return {
      dynamicTagRuleId: 'DynamicTagRuleId',
      tagKey: 'TagKey',
      regionId: 'RegionId',
      matchExpressFilterRelation: 'MatchExpressFilterRelation',
      status: 'Status',
      matchExpress: 'MatchExpress',
      templateIdList: 'TemplateIdList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      dynamicTagRuleId: 'string',
      tagKey: 'string',
      regionId: 'string',
      matchExpressFilterRelation: 'string',
      status: 'string',
      matchExpress: DescribeDynamicTagRuleListResponseTagGroupListTagGroupMatchExpress,
      templateIdList: DescribeDynamicTagRuleListResponseTagGroupListTagGroupTemplateIdList,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDynamicTagRuleListResponseTagGroupList extends $tea.Model {
  tagGroup: DescribeDynamicTagRuleListResponseTagGroupListTagGroup[];
  static names(): { [key: string]: string } {
    return {
      tagGroup: 'TagGroup',
    };
  }

  static types(): { [key: string]: any } {
    return {
      tagGroup: { 'type': 'array', 'itemType': DescribeDynamicTagRuleListResponseTagGroupListTagGroup },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeProductResourceTagKeyListResponseTagKeys extends $tea.Model {
  tagKey: string[];
  static names(): { [key: string]: string } {
    return {
      tagKey: 'TagKey',
    };
  }

  static types(): { [key: string]: any } {
    return {
      tagKey: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateDynamicTagGroupRequestMatchExpress extends $tea.Model {
  tagValueMatchFunction?: string;
  tagValue?: string;
  static names(): { [key: string]: string } {
    return {
      tagValueMatchFunction: 'TagValueMatchFunction',
      tagValue: 'TagValue',
    };
  }

  static types(): { [key: string]: any } {
    return {
      tagValueMatchFunction: 'string',
      tagValue: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyGroupMonitoringAgentProcessRequestAlertConfig extends $tea.Model {
  effectiveInterval: string;
  noEffectiveInterval: string;
  silenceTime: string;
  webhook: string;
  escalationsLevel: string;
  comparisonOperator: string;
  statistics: string;
  threshold: string;
  times: string;
  static names(): { [key: string]: string } {
    return {
      effectiveInterval: 'EffectiveInterval',
      noEffectiveInterval: 'NoEffectiveInterval',
      silenceTime: 'SilenceTime',
      webhook: 'Webhook',
      escalationsLevel: 'EscalationsLevel',
      comparisonOperator: 'ComparisonOperator',
      statistics: 'Statistics',
      threshold: 'Threshold',
      times: 'Times',
    };
  }

  static types(): { [key: string]: any } {
    return {
      effectiveInterval: 'string',
      noEffectiveInterval: 'string',
      silenceTime: 'string',
      webhook: 'string',
      escalationsLevel: 'string',
      comparisonOperator: 'string',
      statistics: 'string',
      threshold: 'string',
      times: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateGroupMonitoringAgentProcessRequestMatchExpress extends $tea.Model {
  name?: string;
  function?: string;
  value?: string;
  static names(): { [key: string]: string } {
    return {
      name: 'Name',
      function: 'Function',
      value: 'Value',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
      function: 'string',
      value: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateGroupMonitoringAgentProcessRequestAlertConfig extends $tea.Model {
  effectiveInterval: string;
  noEffectiveInterval: string;
  silenceTime: string;
  webhook: string;
  escalationsLevel: string;
  comparisonOperator: string;
  statistics: string;
  threshold: string;
  times: string;
  static names(): { [key: string]: string } {
    return {
      effectiveInterval: 'EffectiveInterval',
      noEffectiveInterval: 'NoEffectiveInterval',
      silenceTime: 'SilenceTime',
      webhook: 'Webhook',
      escalationsLevel: 'EscalationsLevel',
      comparisonOperator: 'ComparisonOperator',
      statistics: 'Statistics',
      threshold: 'Threshold',
      times: 'Times',
    };
  }

  static types(): { [key: string]: any } {
    return {
      effectiveInterval: 'string',
      noEffectiveInterval: 'string',
      silenceTime: 'string',
      webhook: 'string',
      escalationsLevel: 'string',
      comparisonOperator: 'string',
      statistics: 'string',
      threshold: 'string',
      times: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeTagKeyListResponseTagKeys extends $tea.Model {
  tagKey: string[];
  static names(): { [key: string]: string } {
    return {
      tagKey: 'TagKey',
    };
  }

  static types(): { [key: string]: any } {
    return {
      tagKey: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeTagValueListResponseTagValues extends $tea.Model {
  tagValue: string[];
  static names(): { [key: string]: string } {
    return {
      tagValue: 'TagValue',
    };
  }

  static types(): { [key: string]: any } {
    return {
      tagValue: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RemoveTagsRequestTag extends $tea.Model {
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

export class RemoveTagsResponseTag extends $tea.Model {
  tags: string[];
  static names(): { [key: string]: string } {
    return {
      tags: 'Tags',
    };
  }

  static types(): { [key: string]: any } {
    return {
      tags: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddTagsRequestTag extends $tea.Model {
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

export class DescribeGroupMonitoringAgentProcessResponseProcessesProcessMatchExpressMatchExpress extends $tea.Model {
  name: string;
  function: string;
  value: string;
  static names(): { [key: string]: string } {
    return {
      name: 'Name',
      function: 'Function',
      value: 'Value',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
      function: 'string',
      value: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGroupMonitoringAgentProcessResponseProcessesProcessMatchExpress extends $tea.Model {
  matchExpress: DescribeGroupMonitoringAgentProcessResponseProcessesProcessMatchExpressMatchExpress[];
  static names(): { [key: string]: string } {
    return {
      matchExpress: 'MatchExpress',
    };
  }

  static types(): { [key: string]: any } {
    return {
      matchExpress: { 'type': 'array', 'itemType': DescribeGroupMonitoringAgentProcessResponseProcessesProcessMatchExpressMatchExpress },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGroupMonitoringAgentProcessResponseProcessesProcessAlertConfigAlertConfig extends $tea.Model {
  effectiveInterval: string;
  noEffectiveInterval: string;
  silenceTime: string;
  webhook: string;
  escalationsLevel: string;
  comparisonOperator: string;
  statistics: string;
  threshold: string;
  times: string;
  static names(): { [key: string]: string } {
    return {
      effectiveInterval: 'EffectiveInterval',
      noEffectiveInterval: 'NoEffectiveInterval',
      silenceTime: 'SilenceTime',
      webhook: 'Webhook',
      escalationsLevel: 'EscalationsLevel',
      comparisonOperator: 'ComparisonOperator',
      statistics: 'Statistics',
      threshold: 'Threshold',
      times: 'Times',
    };
  }

  static types(): { [key: string]: any } {
    return {
      effectiveInterval: 'string',
      noEffectiveInterval: 'string',
      silenceTime: 'string',
      webhook: 'string',
      escalationsLevel: 'string',
      comparisonOperator: 'string',
      statistics: 'string',
      threshold: 'string',
      times: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGroupMonitoringAgentProcessResponseProcessesProcessAlertConfig extends $tea.Model {
  alertConfig: DescribeGroupMonitoringAgentProcessResponseProcessesProcessAlertConfigAlertConfig[];
  static names(): { [key: string]: string } {
    return {
      alertConfig: 'AlertConfig',
    };
  }

  static types(): { [key: string]: any } {
    return {
      alertConfig: { 'type': 'array', 'itemType': DescribeGroupMonitoringAgentProcessResponseProcessesProcessAlertConfigAlertConfig },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGroupMonitoringAgentProcessResponseProcessesProcess extends $tea.Model {
  id: string;
  groupId: string;
  processName: string;
  matchExpressFilterRelation: string;
  matchExpress: DescribeGroupMonitoringAgentProcessResponseProcessesProcessMatchExpress;
  alertConfig: DescribeGroupMonitoringAgentProcessResponseProcessesProcessAlertConfig;
  static names(): { [key: string]: string } {
    return {
      id: 'Id',
      groupId: 'GroupId',
      processName: 'ProcessName',
      matchExpressFilterRelation: 'MatchExpressFilterRelation',
      matchExpress: 'MatchExpress',
      alertConfig: 'AlertConfig',
    };
  }

  static types(): { [key: string]: any } {
    return {
      id: 'string',
      groupId: 'string',
      processName: 'string',
      matchExpressFilterRelation: 'string',
      matchExpress: DescribeGroupMonitoringAgentProcessResponseProcessesProcessMatchExpress,
      alertConfig: DescribeGroupMonitoringAgentProcessResponseProcessesProcessAlertConfig,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGroupMonitoringAgentProcessResponseProcesses extends $tea.Model {
  process: DescribeGroupMonitoringAgentProcessResponseProcessesProcess[];
  static names(): { [key: string]: string } {
    return {
      process: 'Process',
    };
  }

  static types(): { [key: string]: any } {
    return {
      process: { 'type': 'array', 'itemType': DescribeGroupMonitoringAgentProcessResponseProcessesProcess },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PutResourceMetricRulesRequestRulesEscalationsCritical extends $tea.Model {
  statistics?: string;
  comparisonOperator?: string;
  threshold?: string;
  times?: number;
  static names(): { [key: string]: string } {
    return {
      statistics: 'Statistics',
      comparisonOperator: 'ComparisonOperator',
      threshold: 'Threshold',
      times: 'Times',
    };
  }

  static types(): { [key: string]: any } {
    return {
      statistics: 'string',
      comparisonOperator: 'string',
      threshold: 'string',
      times: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PutResourceMetricRulesRequestRulesEscalationsWarn extends $tea.Model {
  statistics?: string;
  comparisonOperator?: string;
  threshold?: string;
  times?: number;
  static names(): { [key: string]: string } {
    return {
      statistics: 'Statistics',
      comparisonOperator: 'ComparisonOperator',
      threshold: 'Threshold',
      times: 'Times',
    };
  }

  static types(): { [key: string]: any } {
    return {
      statistics: 'string',
      comparisonOperator: 'string',
      threshold: 'string',
      times: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PutResourceMetricRulesRequestRulesEscalationsInfo extends $tea.Model {
  statistics?: string;
  comparisonOperator?: string;
  threshold?: string;
  times?: number;
  static names(): { [key: string]: string } {
    return {
      statistics: 'Statistics',
      comparisonOperator: 'ComparisonOperator',
      threshold: 'Threshold',
      times: 'Times',
    };
  }

  static types(): { [key: string]: any } {
    return {
      statistics: 'string',
      comparisonOperator: 'string',
      threshold: 'string',
      times: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PutResourceMetricRulesRequestRulesEscalations extends $tea.Model {
  critical: PutResourceMetricRulesRequestRulesEscalationsCritical;
  warn: PutResourceMetricRulesRequestRulesEscalationsWarn;
  info: PutResourceMetricRulesRequestRulesEscalationsInfo;
  static names(): { [key: string]: string } {
    return {
      critical: 'Critical',
      warn: 'Warn',
      info: 'Info',
    };
  }

  static types(): { [key: string]: any } {
    return {
      critical: PutResourceMetricRulesRequestRulesEscalationsCritical,
      warn: PutResourceMetricRulesRequestRulesEscalationsWarn,
      info: PutResourceMetricRulesRequestRulesEscalationsInfo,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PutResourceMetricRulesRequestRules extends $tea.Model {
  ruleId: string;
  ruleName: string;
  namespace: string;
  metricName: string;
  resources: string;
  contactGroups: string;
  webhook?: string;
  effectiveInterval?: string;
  noEffectiveInterval?: string;
  silenceTime?: number;
  period?: string;
  interval?: string;
  emailSubject?: string;
  escalations: PutResourceMetricRulesRequestRulesEscalations;
  static names(): { [key: string]: string } {
    return {
      ruleId: 'RuleId',
      ruleName: 'RuleName',
      namespace: 'Namespace',
      metricName: 'MetricName',
      resources: 'Resources',
      contactGroups: 'ContactGroups',
      webhook: 'Webhook',
      effectiveInterval: 'EffectiveInterval',
      noEffectiveInterval: 'NoEffectiveInterval',
      silenceTime: 'SilenceTime',
      period: 'Period',
      interval: 'Interval',
      emailSubject: 'EmailSubject',
      escalations: 'Escalations',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ruleId: 'string',
      ruleName: 'string',
      namespace: 'string',
      metricName: 'string',
      resources: 'string',
      contactGroups: 'string',
      webhook: 'string',
      effectiveInterval: 'string',
      noEffectiveInterval: 'string',
      silenceTime: 'number',
      period: 'string',
      interval: 'string',
      emailSubject: 'string',
      escalations: PutResourceMetricRulesRequestRulesEscalations,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PutResourceMetricRulesResponseFailedListResultTargetResult extends $tea.Model {
  code: string;
  message: string;
  success: boolean;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      success: 'Success',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      success: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PutResourceMetricRulesResponseFailedListResultTarget extends $tea.Model {
  ruleId: string;
  result: PutResourceMetricRulesResponseFailedListResultTargetResult;
  static names(): { [key: string]: string } {
    return {
      ruleId: 'RuleId',
      result: 'Result',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ruleId: 'string',
      result: PutResourceMetricRulesResponseFailedListResultTargetResult,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PutResourceMetricRulesResponseFailedListResult extends $tea.Model {
  target: PutResourceMetricRulesResponseFailedListResultTarget[];
  static names(): { [key: string]: string } {
    return {
      target: 'Target',
    };
  }

  static types(): { [key: string]: any } {
    return {
      target: { 'type': 'array', 'itemType': PutResourceMetricRulesResponseFailedListResultTarget },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteMetricRuleTargetsResponseFailIdsTargetIds extends $tea.Model {
  targetId: string[];
  static names(): { [key: string]: string } {
    return {
      targetId: 'TargetId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      targetId: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteMetricRuleTargetsResponseFailIds extends $tea.Model {
  targetIds: DeleteMetricRuleTargetsResponseFailIdsTargetIds;
  static names(): { [key: string]: string } {
    return {
      targetIds: 'TargetIds',
    };
  }

  static types(): { [key: string]: any } {
    return {
      targetIds: DeleteMetricRuleTargetsResponseFailIdsTargetIds,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PutMetricRuleTargetsRequestTargets extends $tea.Model {
  id: string;
  arn: string;
  level?: string;
  static names(): { [key: string]: string } {
    return {
      id: 'Id',
      arn: 'Arn',
      level: 'Level',
    };
  }

  static types(): { [key: string]: any } {
    return {
      id: 'string',
      arn: 'string',
      level: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PutMetricRuleTargetsResponseFailDataTargetsTarget extends $tea.Model {
  id: string;
  arn: string;
  level: string;
  static names(): { [key: string]: string } {
    return {
      id: 'Id',
      arn: 'Arn',
      level: 'Level',
    };
  }

  static types(): { [key: string]: any } {
    return {
      id: 'string',
      arn: 'string',
      level: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PutMetricRuleTargetsResponseFailDataTargets extends $tea.Model {
  target: PutMetricRuleTargetsResponseFailDataTargetsTarget[];
  static names(): { [key: string]: string } {
    return {
      target: 'Target',
    };
  }

  static types(): { [key: string]: any } {
    return {
      target: { 'type': 'array', 'itemType': PutMetricRuleTargetsResponseFailDataTargetsTarget },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PutMetricRuleTargetsResponseFailData extends $tea.Model {
  targets: PutMetricRuleTargetsResponseFailDataTargets;
  static names(): { [key: string]: string } {
    return {
      targets: 'Targets',
    };
  }

  static types(): { [key: string]: any } {
    return {
      targets: PutMetricRuleTargetsResponseFailDataTargets,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMetricRuleTargetsResponseTargetsTarget extends $tea.Model {
  id: string;
  arn: string;
  level: string;
  static names(): { [key: string]: string } {
    return {
      id: 'Id',
      arn: 'Arn',
      level: 'Level',
    };
  }

  static types(): { [key: string]: any } {
    return {
      id: 'string',
      arn: 'string',
      level: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMetricRuleTargetsResponseTargets extends $tea.Model {
  target: DescribeMetricRuleTargetsResponseTargetsTarget[];
  static names(): { [key: string]: string } {
    return {
      target: 'Target',
    };
  }

  static types(): { [key: string]: any } {
    return {
      target: { 'type': 'array', 'itemType': DescribeMetricRuleTargetsResponseTargetsTarget },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyMonitorGroupInstancesRequestInstances extends $tea.Model {
  category: string;
  instanceId: string;
  regionId: string;
  instanceName: string;
  static names(): { [key: string]: string } {
    return {
      category: 'Category',
      instanceId: 'InstanceId',
      regionId: 'RegionId',
      instanceName: 'InstanceName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      category: 'string',
      instanceId: 'string',
      regionId: 'string',
      instanceName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMonitoringAgentStatusesResponseNodeStatusListNodeStatus extends $tea.Model {
  instanceId: string;
  autoInstall: boolean;
  status: string;
  static names(): { [key: string]: string } {
    return {
      instanceId: 'InstanceId',
      autoInstall: 'AutoInstall',
      status: 'Status',
    };
  }

  static types(): { [key: string]: any } {
    return {
      instanceId: 'string',
      autoInstall: 'boolean',
      status: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMonitoringAgentStatusesResponseNodeStatusList extends $tea.Model {
  nodeStatus: DescribeMonitoringAgentStatusesResponseNodeStatusListNodeStatus[];
  static names(): { [key: string]: string } {
    return {
      nodeStatus: 'NodeStatus',
    };
  }

  static types(): { [key: string]: any } {
    return {
      nodeStatus: { 'type': 'array', 'itemType': DescribeMonitoringAgentStatusesResponseNodeStatusListNodeStatus },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistoryContactGroups extends $tea.Model {
  contactGroup: string[];
  static names(): { [key: string]: string } {
    return {
      contactGroup: 'ContactGroup',
    };
  }

  static types(): { [key: string]: any } {
    return {
      contactGroup: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistoryContacts extends $tea.Model {
  contact: string[];
  static names(): { [key: string]: string } {
    return {
      contact: 'Contact',
    };
  }

  static types(): { [key: string]: any } {
    return {
      contact: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistoryContactALIIMs extends $tea.Model {
  contactALIIM: string[];
  static names(): { [key: string]: string } {
    return {
      contactALIIM: 'ContactALIIM',
    };
  }

  static types(): { [key: string]: any } {
    return {
      contactALIIM: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistoryContactSmses extends $tea.Model {
  contactSms: string[];
  static names(): { [key: string]: string } {
    return {
      contactSms: 'ContactSms',
    };
  }

  static types(): { [key: string]: any } {
    return {
      contactSms: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistoryContactMails extends $tea.Model {
  contactMail: string[];
  static names(): { [key: string]: string } {
    return {
      contactMail: 'ContactMail',
    };
  }

  static types(): { [key: string]: any } {
    return {
      contactMail: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistory extends $tea.Model {
  ruleId: string;
  groupId: string;
  namespace: string;
  metricName: string;
  dimensions: string;
  expression: string;
  evaluationCount: number;
  value: string;
  alertTime: number;
  lastTime: number;
  level: string;
  preLevel: string;
  ruleName: string;
  state: string;
  status: number;
  webhooks: string;
  instanceName: string;
  contactGroups: DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistoryContactGroups;
  contacts: DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistoryContacts;
  contactALIIMs: DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistoryContactALIIMs;
  contactSmses: DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistoryContactSmses;
  contactMails: DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistoryContactMails;
  static names(): { [key: string]: string } {
    return {
      ruleId: 'RuleId',
      groupId: 'GroupId',
      namespace: 'Namespace',
      metricName: 'MetricName',
      dimensions: 'Dimensions',
      expression: 'Expression',
      evaluationCount: 'EvaluationCount',
      value: 'Value',
      alertTime: 'AlertTime',
      lastTime: 'LastTime',
      level: 'Level',
      preLevel: 'PreLevel',
      ruleName: 'RuleName',
      state: 'State',
      status: 'Status',
      webhooks: 'Webhooks',
      instanceName: 'InstanceName',
      contactGroups: 'ContactGroups',
      contacts: 'Contacts',
      contactALIIMs: 'ContactALIIMs',
      contactSmses: 'ContactSmses',
      contactMails: 'ContactMails',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ruleId: 'string',
      groupId: 'string',
      namespace: 'string',
      metricName: 'string',
      dimensions: 'string',
      expression: 'string',
      evaluationCount: 'number',
      value: 'string',
      alertTime: 'number',
      lastTime: 'number',
      level: 'string',
      preLevel: 'string',
      ruleName: 'string',
      state: 'string',
      status: 'number',
      webhooks: 'string',
      instanceName: 'string',
      contactGroups: DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistoryContactGroups,
      contacts: DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistoryContacts,
      contactALIIMs: DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistoryContactALIIMs,
      contactSmses: DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistoryContactSmses,
      contactMails: DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistoryContactMails,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAlertHistoryListResponseAlarmHistoryList extends $tea.Model {
  alarmHistory: DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistory[];
  static names(): { [key: string]: string } {
    return {
      alarmHistory: 'AlarmHistory',
    };
  }

  static types(): { [key: string]: any } {
    return {
      alarmHistory: { 'type': 'array', 'itemType': DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistory },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAlertingMetricRuleResourcesResponseResourcesResource extends $tea.Model {
  ruleId: string;
  ruleName: string;
  groupId: string;
  resource: string;
  enable: string;
  lastAlertTime: string;
  lastModifyTime: string;
  startTime: string;
  metricValues: string;
  retryTimes: string;
  threshold: string;
  static names(): { [key: string]: string } {
    return {
      ruleId: 'RuleId',
      ruleName: 'RuleName',
      groupId: 'GroupId',
      resource: 'Resource',
      enable: 'Enable',
      lastAlertTime: 'LastAlertTime',
      lastModifyTime: 'LastModifyTime',
      startTime: 'StartTime',
      metricValues: 'MetricValues',
      retryTimes: 'RetryTimes',
      threshold: 'Threshold',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ruleId: 'string',
      ruleName: 'string',
      groupId: 'string',
      resource: 'string',
      enable: 'string',
      lastAlertTime: 'string',
      lastModifyTime: 'string',
      startTime: 'string',
      metricValues: 'string',
      retryTimes: 'string',
      threshold: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAlertingMetricRuleResourcesResponseResources extends $tea.Model {
  resource: DescribeAlertingMetricRuleResourcesResponseResourcesResource[];
  static names(): { [key: string]: string } {
    return {
      resource: 'Resource',
    };
  }

  static types(): { [key: string]: any } {
    return {
      resource: { 'type': 'array', 'itemType': DescribeAlertingMetricRuleResourcesResponseResourcesResource },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeActiveMetricRuleListResponseDatapointsAlarm extends $tea.Model {
  ruleId: string;
  namespace: string;
  metricName: string;
  period: string;
  statistics: string;
  comparisonOperator: string;
  threshold: string;
  evaluationCount: string;
  startTime: string;
  endTime: string;
  silenceTime: string;
  enable: string;
  state: string;
  contactGroups: string;
  webhook: string;
  ruleName: string;
  static names(): { [key: string]: string } {
    return {
      ruleId: 'RuleId',
      namespace: 'Namespace',
      metricName: 'MetricName',
      period: 'Period',
      statistics: 'Statistics',
      comparisonOperator: 'ComparisonOperator',
      threshold: 'Threshold',
      evaluationCount: 'EvaluationCount',
      startTime: 'StartTime',
      endTime: 'EndTime',
      silenceTime: 'SilenceTime',
      enable: 'Enable',
      state: 'State',
      contactGroups: 'ContactGroups',
      webhook: 'Webhook',
      ruleName: 'RuleName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ruleId: 'string',
      namespace: 'string',
      metricName: 'string',
      period: 'string',
      statistics: 'string',
      comparisonOperator: 'string',
      threshold: 'string',
      evaluationCount: 'string',
      startTime: 'string',
      endTime: 'string',
      silenceTime: 'string',
      enable: 'string',
      state: 'string',
      contactGroups: 'string',
      webhook: 'string',
      ruleName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeActiveMetricRuleListResponseDatapoints extends $tea.Model {
  alarm: DescribeActiveMetricRuleListResponseDatapointsAlarm[];
  static names(): { [key: string]: string } {
    return {
      alarm: 'Alarm',
    };
  }

  static types(): { [key: string]: any } {
    return {
      alarm: { 'type': 'array', 'itemType': DescribeActiveMetricRuleListResponseDatapointsAlarm },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeActiveMetricRuleListResponseAlertListAlertEscalationsInfo extends $tea.Model {
  comparisonOperator: string;
  statistics: string;
  threshold: string;
  times: string;
  static names(): { [key: string]: string } {
    return {
      comparisonOperator: 'ComparisonOperator',
      statistics: 'Statistics',
      threshold: 'Threshold',
      times: 'Times',
    };
  }

  static types(): { [key: string]: any } {
    return {
      comparisonOperator: 'string',
      statistics: 'string',
      threshold: 'string',
      times: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeActiveMetricRuleListResponseAlertListAlertEscalationsWarn extends $tea.Model {
  comparisonOperator: string;
  statistics: string;
  threshold: string;
  times: string;
  static names(): { [key: string]: string } {
    return {
      comparisonOperator: 'ComparisonOperator',
      statistics: 'Statistics',
      threshold: 'Threshold',
      times: 'Times',
    };
  }

  static types(): { [key: string]: any } {
    return {
      comparisonOperator: 'string',
      statistics: 'string',
      threshold: 'string',
      times: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeActiveMetricRuleListResponseAlertListAlertEscalationsCritical extends $tea.Model {
  comparisonOperator: string;
  statistics: string;
  threshold: string;
  times: string;
  static names(): { [key: string]: string } {
    return {
      comparisonOperator: 'ComparisonOperator',
      statistics: 'Statistics',
      threshold: 'Threshold',
      times: 'Times',
    };
  }

  static types(): { [key: string]: any } {
    return {
      comparisonOperator: 'string',
      statistics: 'string',
      threshold: 'string',
      times: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeActiveMetricRuleListResponseAlertListAlertEscalations extends $tea.Model {
  info: DescribeActiveMetricRuleListResponseAlertListAlertEscalationsInfo;
  warn: DescribeActiveMetricRuleListResponseAlertListAlertEscalationsWarn;
  critical: DescribeActiveMetricRuleListResponseAlertListAlertEscalationsCritical;
  static names(): { [key: string]: string } {
    return {
      info: 'Info',
      warn: 'Warn',
      critical: 'Critical',
    };
  }

  static types(): { [key: string]: any } {
    return {
      info: DescribeActiveMetricRuleListResponseAlertListAlertEscalationsInfo,
      warn: DescribeActiveMetricRuleListResponseAlertListAlertEscalationsWarn,
      critical: DescribeActiveMetricRuleListResponseAlertListAlertEscalationsCritical,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeActiveMetricRuleListResponseAlertListAlert extends $tea.Model {
  ruleId: string;
  namespace: string;
  metricName: string;
  period: string;
  effectiveInterval: string;
  noEffectiveInterval: string;
  silenceTime: string;
  enableState: boolean;
  alertState: string;
  contactGroups: string;
  webhook: string;
  mailSubject: string;
  ruleName: string;
  resources: string;
  dimensions: string;
  escalations: DescribeActiveMetricRuleListResponseAlertListAlertEscalations;
  static names(): { [key: string]: string } {
    return {
      ruleId: 'RuleId',
      namespace: 'Namespace',
      metricName: 'MetricName',
      period: 'Period',
      effectiveInterval: 'EffectiveInterval',
      noEffectiveInterval: 'NoEffectiveInterval',
      silenceTime: 'SilenceTime',
      enableState: 'EnableState',
      alertState: 'AlertState',
      contactGroups: 'ContactGroups',
      webhook: 'Webhook',
      mailSubject: 'MailSubject',
      ruleName: 'RuleName',
      resources: 'Resources',
      dimensions: 'Dimensions',
      escalations: 'Escalations',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ruleId: 'string',
      namespace: 'string',
      metricName: 'string',
      period: 'string',
      effectiveInterval: 'string',
      noEffectiveInterval: 'string',
      silenceTime: 'string',
      enableState: 'boolean',
      alertState: 'string',
      contactGroups: 'string',
      webhook: 'string',
      mailSubject: 'string',
      ruleName: 'string',
      resources: 'string',
      dimensions: 'string',
      escalations: DescribeActiveMetricRuleListResponseAlertListAlertEscalations,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeActiveMetricRuleListResponseAlertList extends $tea.Model {
  alert: DescribeActiveMetricRuleListResponseAlertListAlert[];
  static names(): { [key: string]: string } {
    return {
      alert: 'Alert',
    };
  }

  static types(): { [key: string]: any } {
    return {
      alert: { 'type': 'array', 'itemType': DescribeActiveMetricRuleListResponseAlertListAlert },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeProductsOfActiveMetricRuleResponseAllProductInitMetricRuleListAllProductInitMetricRuleAlertInitConfigListAlertInitConfig extends $tea.Model {
  namespace: string;
  metricName: string;
  statistics: string;
  evaluationCount: string;
  threshold: string;
  period: string;
  static names(): { [key: string]: string } {
    return {
      namespace: 'Namespace',
      metricName: 'MetricName',
      statistics: 'Statistics',
      evaluationCount: 'EvaluationCount',
      threshold: 'Threshold',
      period: 'Period',
    };
  }

  static types(): { [key: string]: any } {
    return {
      namespace: 'string',
      metricName: 'string',
      statistics: 'string',
      evaluationCount: 'string',
      threshold: 'string',
      period: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeProductsOfActiveMetricRuleResponseAllProductInitMetricRuleListAllProductInitMetricRuleAlertInitConfigList extends $tea.Model {
  alertInitConfig: DescribeProductsOfActiveMetricRuleResponseAllProductInitMetricRuleListAllProductInitMetricRuleAlertInitConfigListAlertInitConfig[];
  static names(): { [key: string]: string } {
    return {
      alertInitConfig: 'AlertInitConfig',
    };
  }

  static types(): { [key: string]: any } {
    return {
      alertInitConfig: { 'type': 'array', 'itemType': DescribeProductsOfActiveMetricRuleResponseAllProductInitMetricRuleListAllProductInitMetricRuleAlertInitConfigListAlertInitConfig },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeProductsOfActiveMetricRuleResponseAllProductInitMetricRuleListAllProductInitMetricRule extends $tea.Model {
  product: string;
  alertInitConfigList: DescribeProductsOfActiveMetricRuleResponseAllProductInitMetricRuleListAllProductInitMetricRuleAlertInitConfigList;
  static names(): { [key: string]: string } {
    return {
      product: 'Product',
      alertInitConfigList: 'AlertInitConfigList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      product: 'string',
      alertInitConfigList: DescribeProductsOfActiveMetricRuleResponseAllProductInitMetricRuleListAllProductInitMetricRuleAlertInitConfigList,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeProductsOfActiveMetricRuleResponseAllProductInitMetricRuleList extends $tea.Model {
  allProductInitMetricRule: DescribeProductsOfActiveMetricRuleResponseAllProductInitMetricRuleListAllProductInitMetricRule[];
  static names(): { [key: string]: string } {
    return {
      allProductInitMetricRule: 'AllProductInitMetricRule',
    };
  }

  static types(): { [key: string]: any } {
    return {
      allProductInitMetricRule: { 'type': 'array', 'itemType': DescribeProductsOfActiveMetricRuleResponseAllProductInitMetricRuleListAllProductInitMetricRule },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMonitorGroupInstanceAttributeResponseResourcesResourceTagsTag extends $tea.Model {
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

export class DescribeMonitorGroupInstanceAttributeResponseResourcesResourceTags extends $tea.Model {
  tag: DescribeMonitorGroupInstanceAttributeResponseResourcesResourceTagsTag[];
  static names(): { [key: string]: string } {
    return {
      tag: 'Tag',
    };
  }

  static types(): { [key: string]: any } {
    return {
      tag: { 'type': 'array', 'itemType': DescribeMonitorGroupInstanceAttributeResponseResourcesResourceTagsTag },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMonitorGroupInstanceAttributeResponseResourcesResourceRegion extends $tea.Model {
  regionId: string;
  availabilityZone: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      availabilityZone: 'AvailabilityZone',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      availabilityZone: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMonitorGroupInstanceAttributeResponseResourcesResourceVpc extends $tea.Model {
  vpcInstanceId: string;
  vswitchInstanceId: string;
  static names(): { [key: string]: string } {
    return {
      vpcInstanceId: 'VpcInstanceId',
      vswitchInstanceId: 'VswitchInstanceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      vpcInstanceId: 'string',
      vswitchInstanceId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMonitorGroupInstanceAttributeResponseResourcesResource extends $tea.Model {
  instanceName: string;
  instanceId: string;
  desc: string;
  networkType: string;
  category: string;
  dimension: string;
  tags: DescribeMonitorGroupInstanceAttributeResponseResourcesResourceTags;
  region: DescribeMonitorGroupInstanceAttributeResponseResourcesResourceRegion;
  vpc: DescribeMonitorGroupInstanceAttributeResponseResourcesResourceVpc;
  static names(): { [key: string]: string } {
    return {
      instanceName: 'InstanceName',
      instanceId: 'InstanceId',
      desc: 'Desc',
      networkType: 'NetworkType',
      category: 'Category',
      dimension: 'Dimension',
      tags: 'Tags',
      region: 'Region',
      vpc: 'Vpc',
    };
  }

  static types(): { [key: string]: any } {
    return {
      instanceName: 'string',
      instanceId: 'string',
      desc: 'string',
      networkType: 'string',
      category: 'string',
      dimension: 'string',
      tags: DescribeMonitorGroupInstanceAttributeResponseResourcesResourceTags,
      region: DescribeMonitorGroupInstanceAttributeResponseResourcesResourceRegion,
      vpc: DescribeMonitorGroupInstanceAttributeResponseResourcesResourceVpc,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMonitorGroupInstanceAttributeResponseResources extends $tea.Model {
  resource: DescribeMonitorGroupInstanceAttributeResponseResourcesResource[];
  static names(): { [key: string]: string } {
    return {
      resource: 'Resource',
    };
  }

  static types(): { [key: string]: any } {
    return {
      resource: { 'type': 'array', 'itemType': DescribeMonitorGroupInstanceAttributeResponseResourcesResource },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMonitorGroupNotifyPolicyListResponseNotifyPolicyListNotifyPolicy extends $tea.Model {
  type: string;
  id: string;
  startTime: number;
  endTime: number;
  groupId: string;
  static names(): { [key: string]: string } {
    return {
      type: 'Type',
      id: 'Id',
      startTime: 'StartTime',
      endTime: 'EndTime',
      groupId: 'GroupId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      type: 'string',
      id: 'string',
      startTime: 'number',
      endTime: 'number',
      groupId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMonitorGroupNotifyPolicyListResponseNotifyPolicyList extends $tea.Model {
  notifyPolicy: DescribeMonitorGroupNotifyPolicyListResponseNotifyPolicyListNotifyPolicy[];
  static names(): { [key: string]: string } {
    return {
      notifyPolicy: 'NotifyPolicy',
    };
  }

  static types(): { [key: string]: any } {
    return {
      notifyPolicy: { 'type': 'array', 'itemType': DescribeMonitorGroupNotifyPolicyListResponseNotifyPolicyListNotifyPolicy },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteMonitorGroupResponseGroupContactGroupsContactGroup extends $tea.Model {
  name: string;
  static names(): { [key: string]: string } {
    return {
      name: 'Name',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteMonitorGroupResponseGroupContactGroups extends $tea.Model {
  contactGroup: DeleteMonitorGroupResponseGroupContactGroupsContactGroup[];
  static names(): { [key: string]: string } {
    return {
      contactGroup: 'ContactGroup',
    };
  }

  static types(): { [key: string]: any } {
    return {
      contactGroup: { 'type': 'array', 'itemType': DeleteMonitorGroupResponseGroupContactGroupsContactGroup },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteMonitorGroupResponseGroup extends $tea.Model {
  groupName: string;
  contactGroups: DeleteMonitorGroupResponseGroupContactGroups;
  static names(): { [key: string]: string } {
    return {
      groupName: 'GroupName',
      contactGroups: 'ContactGroups',
    };
  }

  static types(): { [key: string]: any } {
    return {
      groupName: 'string',
      contactGroups: DeleteMonitorGroupResponseGroupContactGroups,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMonitorGroupsRequestTag extends $tea.Model {
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

export class DescribeMonitorGroupsResponseResourcesResourceContactGroupsContactGroup extends $tea.Model {
  name: string;
  static names(): { [key: string]: string } {
    return {
      name: 'Name',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMonitorGroupsResponseResourcesResourceContactGroups extends $tea.Model {
  contactGroup: DescribeMonitorGroupsResponseResourcesResourceContactGroupsContactGroup[];
  static names(): { [key: string]: string } {
    return {
      contactGroup: 'ContactGroup',
    };
  }

  static types(): { [key: string]: any } {
    return {
      contactGroup: { 'type': 'array', 'itemType': DescribeMonitorGroupsResponseResourcesResourceContactGroupsContactGroup },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMonitorGroupsResponseResourcesResourceTagsTag extends $tea.Model {
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

export class DescribeMonitorGroupsResponseResourcesResourceTags extends $tea.Model {
  tag: DescribeMonitorGroupsResponseResourcesResourceTagsTag[];
  static names(): { [key: string]: string } {
    return {
      tag: 'Tag',
    };
  }

  static types(): { [key: string]: any } {
    return {
      tag: { 'type': 'array', 'itemType': DescribeMonitorGroupsResponseResourcesResourceTagsTag },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMonitorGroupsResponseResourcesResourceTemplateIds extends $tea.Model {
  templateId: string[];
  static names(): { [key: string]: string } {
    return {
      templateId: 'TemplateId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      templateId: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMonitorGroupsResponseResourcesResource extends $tea.Model {
  groupId: number;
  groupName: string;
  serviceId: string;
  type: string;
  gmtModified: number;
  gmtCreate: number;
  bindUrl: string;
  dynamicTagRuleId: string;
  groupFounderTagKey: string;
  groupFounderTagValue: string;
  contactGroups: DescribeMonitorGroupsResponseResourcesResourceContactGroups;
  tags: DescribeMonitorGroupsResponseResourcesResourceTags;
  templateIds: DescribeMonitorGroupsResponseResourcesResourceTemplateIds;
  static names(): { [key: string]: string } {
    return {
      groupId: 'GroupId',
      groupName: 'GroupName',
      serviceId: 'ServiceId',
      type: 'Type',
      gmtModified: 'GmtModified',
      gmtCreate: 'GmtCreate',
      bindUrl: 'BindUrl',
      dynamicTagRuleId: 'DynamicTagRuleId',
      groupFounderTagKey: 'GroupFounderTagKey',
      groupFounderTagValue: 'GroupFounderTagValue',
      contactGroups: 'ContactGroups',
      tags: 'Tags',
      templateIds: 'TemplateIds',
    };
  }

  static types(): { [key: string]: any } {
    return {
      groupId: 'number',
      groupName: 'string',
      serviceId: 'string',
      type: 'string',
      gmtModified: 'number',
      gmtCreate: 'number',
      bindUrl: 'string',
      dynamicTagRuleId: 'string',
      groupFounderTagKey: 'string',
      groupFounderTagValue: 'string',
      contactGroups: DescribeMonitorGroupsResponseResourcesResourceContactGroups,
      tags: DescribeMonitorGroupsResponseResourcesResourceTags,
      templateIds: DescribeMonitorGroupsResponseResourcesResourceTemplateIds,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMonitorGroupsResponseResources extends $tea.Model {
  resource: DescribeMonitorGroupsResponseResourcesResource[];
  static names(): { [key: string]: string } {
    return {
      resource: 'Resource',
    };
  }

  static types(): { [key: string]: any } {
    return {
      resource: { 'type': 'array', 'itemType': DescribeMonitorGroupsResponseResourcesResource },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMonitorGroupDynamicRulesResponseResourceResourceFiltersFilter extends $tea.Model {
  function: string;
  name: string;
  value: string;
  static names(): { [key: string]: string } {
    return {
      function: 'Function',
      name: 'Name',
      value: 'Value',
    };
  }

  static types(): { [key: string]: any } {
    return {
      function: 'string',
      name: 'string',
      value: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMonitorGroupDynamicRulesResponseResourceResourceFilters extends $tea.Model {
  filter: DescribeMonitorGroupDynamicRulesResponseResourceResourceFiltersFilter[];
  static names(): { [key: string]: string } {
    return {
      filter: 'Filter',
    };
  }

  static types(): { [key: string]: any } {
    return {
      filter: { 'type': 'array', 'itemType': DescribeMonitorGroupDynamicRulesResponseResourceResourceFiltersFilter },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMonitorGroupDynamicRulesResponseResourceResource extends $tea.Model {
  groupId: number;
  category: string;
  filterRelation: string;
  filters: DescribeMonitorGroupDynamicRulesResponseResourceResourceFilters;
  static names(): { [key: string]: string } {
    return {
      groupId: 'GroupId',
      category: 'Category',
      filterRelation: 'FilterRelation',
      filters: 'Filters',
    };
  }

  static types(): { [key: string]: any } {
    return {
      groupId: 'number',
      category: 'string',
      filterRelation: 'string',
      filters: DescribeMonitorGroupDynamicRulesResponseResourceResourceFilters,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMonitorGroupDynamicRulesResponseResource extends $tea.Model {
  resource: DescribeMonitorGroupDynamicRulesResponseResourceResource[];
  static names(): { [key: string]: string } {
    return {
      resource: 'Resource',
    };
  }

  static types(): { [key: string]: any } {
    return {
      resource: { 'type': 'array', 'itemType': DescribeMonitorGroupDynamicRulesResponseResourceResource },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateMonitorGroupInstancesRequestInstances extends $tea.Model {
  category: string;
  instanceId: string;
  regionId: string;
  instanceName: string;
  static names(): { [key: string]: string } {
    return {
      category: 'Category',
      instanceId: 'InstanceId',
      regionId: 'RegionId',
      instanceName: 'InstanceName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      category: 'string',
      instanceId: 'string',
      regionId: 'string',
      instanceName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PutMonitorGroupDynamicRuleRequestGroupRulesFilters extends $tea.Model {
  name: string;
  function: string;
  value: string;
  static names(): { [key: string]: string } {
    return {
      name: 'Name',
      function: 'Function',
      value: 'Value',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
      function: 'string',
      value: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PutMonitorGroupDynamicRuleRequestGroupRules extends $tea.Model {
  category: string;
  filterRelation: string;
  filters: PutMonitorGroupDynamicRuleRequestGroupRulesFilters[];
  static names(): { [key: string]: string } {
    return {
      category: 'Category',
      filterRelation: 'FilterRelation',
      filters: 'Filters',
    };
  }

  static types(): { [key: string]: any } {
    return {
      category: 'string',
      filterRelation: 'string',
      filters: { 'type': 'array', 'itemType': PutMonitorGroupDynamicRuleRequestGroupRulesFilters },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMonitorGroupInstancesResponseResourcesResource extends $tea.Model {
  id: number;
  regionId: string;
  instanceId: string;
  category: string;
  instanceName: string;
  static names(): { [key: string]: string } {
    return {
      id: 'Id',
      regionId: 'RegionId',
      instanceId: 'InstanceId',
      category: 'Category',
      instanceName: 'InstanceName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      id: 'number',
      regionId: 'string',
      instanceId: 'string',
      category: 'string',
      instanceName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMonitorGroupInstancesResponseResources extends $tea.Model {
  resource: DescribeMonitorGroupInstancesResponseResourcesResource[];
  static names(): { [key: string]: string } {
    return {
      resource: 'Resource',
    };
  }

  static types(): { [key: string]: any } {
    return {
      resource: { 'type': 'array', 'itemType': DescribeMonitorGroupInstancesResponseResourcesResource },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMonitorGroupCategoriesResponseMonitorGroupCategoriesMonitorGroupCategoryCategoryItem extends $tea.Model {
  category: string;
  count: number;
  static names(): { [key: string]: string } {
    return {
      category: 'Category',
      count: 'Count',
    };
  }

  static types(): { [key: string]: any } {
    return {
      category: 'string',
      count: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMonitorGroupCategoriesResponseMonitorGroupCategoriesMonitorGroupCategory extends $tea.Model {
  categoryItem: DescribeMonitorGroupCategoriesResponseMonitorGroupCategoriesMonitorGroupCategoryCategoryItem[];
  static names(): { [key: string]: string } {
    return {
      categoryItem: 'CategoryItem',
    };
  }

  static types(): { [key: string]: any } {
    return {
      categoryItem: { 'type': 'array', 'itemType': DescribeMonitorGroupCategoriesResponseMonitorGroupCategoriesMonitorGroupCategoryCategoryItem },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMonitorGroupCategoriesResponseMonitorGroupCategories extends $tea.Model {
  groupId: number;
  monitorGroupCategory: DescribeMonitorGroupCategoriesResponseMonitorGroupCategoriesMonitorGroupCategory;
  static names(): { [key: string]: string } {
    return {
      groupId: 'GroupId',
      monitorGroupCategory: 'MonitorGroupCategory',
    };
  }

  static types(): { [key: string]: any } {
    return {
      groupId: 'number',
      monitorGroupCategory: DescribeMonitorGroupCategoriesResponseMonitorGroupCategoriesMonitorGroupCategory,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMetricRuleListResponseAlarmsAlarmEscalationsInfo extends $tea.Model {
  comparisonOperator: string;
  statistics: string;
  threshold: string;
  times: string;
  static names(): { [key: string]: string } {
    return {
      comparisonOperator: 'ComparisonOperator',
      statistics: 'Statistics',
      threshold: 'Threshold',
      times: 'Times',
    };
  }

  static types(): { [key: string]: any } {
    return {
      comparisonOperator: 'string',
      statistics: 'string',
      threshold: 'string',
      times: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMetricRuleListResponseAlarmsAlarmEscalationsWarn extends $tea.Model {
  comparisonOperator: string;
  statistics: string;
  threshold: string;
  times: string;
  static names(): { [key: string]: string } {
    return {
      comparisonOperator: 'ComparisonOperator',
      statistics: 'Statistics',
      threshold: 'Threshold',
      times: 'Times',
    };
  }

  static types(): { [key: string]: any } {
    return {
      comparisonOperator: 'string',
      statistics: 'string',
      threshold: 'string',
      times: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMetricRuleListResponseAlarmsAlarmEscalationsCritical extends $tea.Model {
  comparisonOperator: string;
  statistics: string;
  threshold: string;
  times: string;
  static names(): { [key: string]: string } {
    return {
      comparisonOperator: 'ComparisonOperator',
      statistics: 'Statistics',
      threshold: 'Threshold',
      times: 'Times',
    };
  }

  static types(): { [key: string]: any } {
    return {
      comparisonOperator: 'string',
      statistics: 'string',
      threshold: 'string',
      times: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMetricRuleListResponseAlarmsAlarmEscalations extends $tea.Model {
  info: DescribeMetricRuleListResponseAlarmsAlarmEscalationsInfo;
  warn: DescribeMetricRuleListResponseAlarmsAlarmEscalationsWarn;
  critical: DescribeMetricRuleListResponseAlarmsAlarmEscalationsCritical;
  static names(): { [key: string]: string } {
    return {
      info: 'Info',
      warn: 'Warn',
      critical: 'Critical',
    };
  }

  static types(): { [key: string]: any } {
    return {
      info: DescribeMetricRuleListResponseAlarmsAlarmEscalationsInfo,
      warn: DescribeMetricRuleListResponseAlarmsAlarmEscalationsWarn,
      critical: DescribeMetricRuleListResponseAlarmsAlarmEscalationsCritical,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMetricRuleListResponseAlarmsAlarm extends $tea.Model {
  ruleId: string;
  namespace: string;
  metricName: string;
  period: string;
  effectiveInterval: string;
  noEffectiveInterval: string;
  silenceTime: string;
  enableState: boolean;
  alertState: string;
  contactGroups: string;
  webhook: string;
  mailSubject: string;
  ruleName: string;
  resources: string;
  groupId: string;
  groupName: string;
  dimensions: string;
  sourceType: string;
  escalations: DescribeMetricRuleListResponseAlarmsAlarmEscalations;
  static names(): { [key: string]: string } {
    return {
      ruleId: 'RuleId',
      namespace: 'Namespace',
      metricName: 'MetricName',
      period: 'Period',
      effectiveInterval: 'EffectiveInterval',
      noEffectiveInterval: 'NoEffectiveInterval',
      silenceTime: 'SilenceTime',
      enableState: 'EnableState',
      alertState: 'AlertState',
      contactGroups: 'ContactGroups',
      webhook: 'Webhook',
      mailSubject: 'MailSubject',
      ruleName: 'RuleName',
      resources: 'Resources',
      groupId: 'GroupId',
      groupName: 'GroupName',
      dimensions: 'Dimensions',
      sourceType: 'SourceType',
      escalations: 'Escalations',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ruleId: 'string',
      namespace: 'string',
      metricName: 'string',
      period: 'string',
      effectiveInterval: 'string',
      noEffectiveInterval: 'string',
      silenceTime: 'string',
      enableState: 'boolean',
      alertState: 'string',
      contactGroups: 'string',
      webhook: 'string',
      mailSubject: 'string',
      ruleName: 'string',
      resources: 'string',
      groupId: 'string',
      groupName: 'string',
      dimensions: 'string',
      sourceType: 'string',
      escalations: DescribeMetricRuleListResponseAlarmsAlarmEscalations,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMetricRuleListResponseAlarms extends $tea.Model {
  alarm: DescribeMetricRuleListResponseAlarmsAlarm[];
  static names(): { [key: string]: string } {
    return {
      alarm: 'Alarm',
    };
  }

  static types(): { [key: string]: any } {
    return {
      alarm: { 'type': 'array', 'itemType': DescribeMetricRuleListResponseAlarmsAlarm },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PutResourceMetricRuleRequestEscalationsCritical extends $tea.Model {
  statistics?: string;
  comparisonOperator?: string;
  threshold?: string;
  times?: number;
  static names(): { [key: string]: string } {
    return {
      statistics: 'Statistics',
      comparisonOperator: 'ComparisonOperator',
      threshold: 'Threshold',
      times: 'Times',
    };
  }

  static types(): { [key: string]: any } {
    return {
      statistics: 'string',
      comparisonOperator: 'string',
      threshold: 'string',
      times: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PutResourceMetricRuleRequestEscalationsWarn extends $tea.Model {
  statistics?: string;
  comparisonOperator?: string;
  threshold?: string;
  times?: number;
  static names(): { [key: string]: string } {
    return {
      statistics: 'Statistics',
      comparisonOperator: 'ComparisonOperator',
      threshold: 'Threshold',
      times: 'Times',
    };
  }

  static types(): { [key: string]: any } {
    return {
      statistics: 'string',
      comparisonOperator: 'string',
      threshold: 'string',
      times: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PutResourceMetricRuleRequestEscalationsInfo extends $tea.Model {
  statistics?: string;
  comparisonOperator?: string;
  threshold?: string;
  times?: number;
  static names(): { [key: string]: string } {
    return {
      statistics: 'Statistics',
      comparisonOperator: 'ComparisonOperator',
      threshold: 'Threshold',
      times: 'Times',
    };
  }

  static types(): { [key: string]: any } {
    return {
      statistics: 'string',
      comparisonOperator: 'string',
      threshold: 'string',
      times: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PutResourceMetricRuleRequestEscalations extends $tea.Model {
  critical: PutResourceMetricRuleRequestEscalationsCritical;
  warn: PutResourceMetricRuleRequestEscalationsWarn;
  info: PutResourceMetricRuleRequestEscalationsInfo;
  static names(): { [key: string]: string } {
    return {
      critical: 'Critical',
      warn: 'Warn',
      info: 'Info',
    };
  }

  static types(): { [key: string]: any } {
    return {
      critical: PutResourceMetricRuleRequestEscalationsCritical,
      warn: PutResourceMetricRuleRequestEscalationsWarn,
      info: PutResourceMetricRuleRequestEscalationsInfo,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PutGroupMetricRuleRequestEscalationsCritical extends $tea.Model {
  statistics?: string;
  comparisonOperator?: string;
  threshold?: string;
  times?: number;
  static names(): { [key: string]: string } {
    return {
      statistics: 'Statistics',
      comparisonOperator: 'ComparisonOperator',
      threshold: 'Threshold',
      times: 'Times',
    };
  }

  static types(): { [key: string]: any } {
    return {
      statistics: 'string',
      comparisonOperator: 'string',
      threshold: 'string',
      times: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PutGroupMetricRuleRequestEscalationsWarn extends $tea.Model {
  statistics?: string;
  comparisonOperator?: string;
  threshold?: string;
  times?: number;
  static names(): { [key: string]: string } {
    return {
      statistics: 'Statistics',
      comparisonOperator: 'ComparisonOperator',
      threshold: 'Threshold',
      times: 'Times',
    };
  }

  static types(): { [key: string]: any } {
    return {
      statistics: 'string',
      comparisonOperator: 'string',
      threshold: 'string',
      times: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PutGroupMetricRuleRequestEscalationsInfo extends $tea.Model {
  statistics?: string;
  comparisonOperator?: string;
  threshold?: string;
  times?: number;
  static names(): { [key: string]: string } {
    return {
      statistics: 'Statistics',
      comparisonOperator: 'ComparisonOperator',
      threshold: 'Threshold',
      times: 'Times',
    };
  }

  static types(): { [key: string]: any } {
    return {
      statistics: 'string',
      comparisonOperator: 'string',
      threshold: 'string',
      times: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PutGroupMetricRuleRequestEscalations extends $tea.Model {
  critical: PutGroupMetricRuleRequestEscalationsCritical;
  warn: PutGroupMetricRuleRequestEscalationsWarn;
  info: PutGroupMetricRuleRequestEscalationsInfo;
  static names(): { [key: string]: string } {
    return {
      critical: 'Critical',
      warn: 'Warn',
      info: 'Info',
    };
  }

  static types(): { [key: string]: any } {
    return {
      critical: PutGroupMetricRuleRequestEscalationsCritical,
      warn: PutGroupMetricRuleRequestEscalationsWarn,
      info: PutGroupMetricRuleRequestEscalationsInfo,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMetricRuleCountResponseMetricRuleCount extends $tea.Model {
  alarm: number;
  disable: number;
  nodata: number;
  ok: number;
  total: number;
  static names(): { [key: string]: string } {
    return {
      alarm: 'Alarm',
      disable: 'Disable',
      nodata: 'Nodata',
      ok: 'Ok',
      total: 'Total',
    };
  }

  static types(): { [key: string]: any } {
    return {
      alarm: 'number',
      disable: 'number',
      nodata: 'number',
      ok: 'number',
      total: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateGroupMetricRulesRequestGroupMetricRulesEscalationsCritical extends $tea.Model {
  statistics?: string;
  comparisonOperator?: string;
  threshold?: string;
  times?: number;
  static names(): { [key: string]: string } {
    return {
      statistics: 'Statistics',
      comparisonOperator: 'ComparisonOperator',
      threshold: 'Threshold',
      times: 'Times',
    };
  }

  static types(): { [key: string]: any } {
    return {
      statistics: 'string',
      comparisonOperator: 'string',
      threshold: 'string',
      times: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateGroupMetricRulesRequestGroupMetricRulesEscalationsWarn extends $tea.Model {
  statistics?: string;
  comparisonOperator?: string;
  threshold?: string;
  times?: number;
  static names(): { [key: string]: string } {
    return {
      statistics: 'Statistics',
      comparisonOperator: 'ComparisonOperator',
      threshold: 'Threshold',
      times: 'Times',
    };
  }

  static types(): { [key: string]: any } {
    return {
      statistics: 'string',
      comparisonOperator: 'string',
      threshold: 'string',
      times: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateGroupMetricRulesRequestGroupMetricRulesEscalationsInfo extends $tea.Model {
  statistics?: string;
  comparisonOperator?: string;
  threshold?: string;
  times?: number;
  static names(): { [key: string]: string } {
    return {
      statistics: 'Statistics',
      comparisonOperator: 'ComparisonOperator',
      threshold: 'Threshold',
      times: 'Times',
    };
  }

  static types(): { [key: string]: any } {
    return {
      statistics: 'string',
      comparisonOperator: 'string',
      threshold: 'string',
      times: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateGroupMetricRulesRequestGroupMetricRulesEscalations extends $tea.Model {
  critical: CreateGroupMetricRulesRequestGroupMetricRulesEscalationsCritical;
  warn: CreateGroupMetricRulesRequestGroupMetricRulesEscalationsWarn;
  info: CreateGroupMetricRulesRequestGroupMetricRulesEscalationsInfo;
  static names(): { [key: string]: string } {
    return {
      critical: 'Critical',
      warn: 'Warn',
      info: 'Info',
    };
  }

  static types(): { [key: string]: any } {
    return {
      critical: CreateGroupMetricRulesRequestGroupMetricRulesEscalationsCritical,
      warn: CreateGroupMetricRulesRequestGroupMetricRulesEscalationsWarn,
      info: CreateGroupMetricRulesRequestGroupMetricRulesEscalationsInfo,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateGroupMetricRulesRequestGroupMetricRules extends $tea.Model {
  category: string;
  ruleName: string;
  ruleId: string;
  namespace: string;
  metricName: string;
  dimensions?: string;
  effectiveInterval?: string;
  noEffectiveInterval?: string;
  silenceTime?: number;
  period?: string;
  interval?: string;
  webhook?: string;
  emailSubject?: string;
  escalations: CreateGroupMetricRulesRequestGroupMetricRulesEscalations;
  static names(): { [key: string]: string } {
    return {
      category: 'Category',
      ruleName: 'RuleName',
      ruleId: 'RuleId',
      namespace: 'Namespace',
      metricName: 'MetricName',
      dimensions: 'Dimensions',
      effectiveInterval: 'EffectiveInterval',
      noEffectiveInterval: 'NoEffectiveInterval',
      silenceTime: 'SilenceTime',
      period: 'Period',
      interval: 'Interval',
      webhook: 'Webhook',
      emailSubject: 'EmailSubject',
      escalations: 'Escalations',
    };
  }

  static types(): { [key: string]: any } {
    return {
      category: 'string',
      ruleName: 'string',
      ruleId: 'string',
      namespace: 'string',
      metricName: 'string',
      dimensions: 'string',
      effectiveInterval: 'string',
      noEffectiveInterval: 'string',
      silenceTime: 'number',
      period: 'string',
      interval: 'string',
      webhook: 'string',
      emailSubject: 'string',
      escalations: CreateGroupMetricRulesRequestGroupMetricRulesEscalations,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateGroupMetricRulesResponseResourcesAlertResult extends $tea.Model {
  ruleId: string;
  ruleName: string;
  message: string;
  code: number;
  success: boolean;
  static names(): { [key: string]: string } {
    return {
      ruleId: 'RuleId',
      ruleName: 'RuleName',
      message: 'Message',
      code: 'Code',
      success: 'Success',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ruleId: 'string',
      ruleName: 'string',
      message: 'string',
      code: 'number',
      success: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateGroupMetricRulesResponseResources extends $tea.Model {
  alertResult: CreateGroupMetricRulesResponseResourcesAlertResult[];
  static names(): { [key: string]: string } {
    return {
      alertResult: 'AlertResult',
    };
  }

  static types(): { [key: string]: any } {
    return {
      alertResult: { 'type': 'array', 'itemType': CreateGroupMetricRulesResponseResourcesAlertResult },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyMetricRuleTemplateRequestAlertTemplatesEscalationsCritical extends $tea.Model {
  statistics: string;
  comparisonOperator: string;
  threshold: string;
  times: number;
  static names(): { [key: string]: string } {
    return {
      statistics: 'Statistics',
      comparisonOperator: 'ComparisonOperator',
      threshold: 'Threshold',
      times: 'Times',
    };
  }

  static types(): { [key: string]: any } {
    return {
      statistics: 'string',
      comparisonOperator: 'string',
      threshold: 'string',
      times: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyMetricRuleTemplateRequestAlertTemplatesEscalationsWarn extends $tea.Model {
  statistics: string;
  comparisonOperator: string;
  threshold: string;
  times: number;
  static names(): { [key: string]: string } {
    return {
      statistics: 'Statistics',
      comparisonOperator: 'ComparisonOperator',
      threshold: 'Threshold',
      times: 'Times',
    };
  }

  static types(): { [key: string]: any } {
    return {
      statistics: 'string',
      comparisonOperator: 'string',
      threshold: 'string',
      times: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyMetricRuleTemplateRequestAlertTemplatesEscalationsInfo extends $tea.Model {
  statistics: string;
  comparisonOperator: string;
  threshold: string;
  times: number;
  static names(): { [key: string]: string } {
    return {
      statistics: 'Statistics',
      comparisonOperator: 'ComparisonOperator',
      threshold: 'Threshold',
      times: 'Times',
    };
  }

  static types(): { [key: string]: any } {
    return {
      statistics: 'string',
      comparisonOperator: 'string',
      threshold: 'string',
      times: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyMetricRuleTemplateRequestAlertTemplatesEscalations extends $tea.Model {
  critical: ModifyMetricRuleTemplateRequestAlertTemplatesEscalationsCritical;
  warn: ModifyMetricRuleTemplateRequestAlertTemplatesEscalationsWarn;
  info: ModifyMetricRuleTemplateRequestAlertTemplatesEscalationsInfo;
  static names(): { [key: string]: string } {
    return {
      critical: 'Critical',
      warn: 'Warn',
      info: 'Info',
    };
  }

  static types(): { [key: string]: any } {
    return {
      critical: ModifyMetricRuleTemplateRequestAlertTemplatesEscalationsCritical,
      warn: ModifyMetricRuleTemplateRequestAlertTemplatesEscalationsWarn,
      info: ModifyMetricRuleTemplateRequestAlertTemplatesEscalationsInfo,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyMetricRuleTemplateRequestAlertTemplates extends $tea.Model {
  metricName: string;
  ruleName: string;
  category: string;
  namespace: string;
  period: number;
  selector: string;
  webhook: string;
  escalations: ModifyMetricRuleTemplateRequestAlertTemplatesEscalations;
  static names(): { [key: string]: string } {
    return {
      metricName: 'MetricName',
      ruleName: 'RuleName',
      category: 'Category',
      namespace: 'Namespace',
      period: 'Period',
      selector: 'Selector',
      webhook: 'Webhook',
      escalations: 'Escalations',
    };
  }

  static types(): { [key: string]: any } {
    return {
      metricName: 'string',
      ruleName: 'string',
      category: 'string',
      namespace: 'string',
      period: 'number',
      selector: 'string',
      webhook: 'string',
      escalations: ModifyMetricRuleTemplateRequestAlertTemplatesEscalations,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ApplyMetricRuleTemplateResponseResourceAlertResults extends $tea.Model {
  groupId: number;
  ruleId: string;
  message: string;
  ruleName: string;
  code: string;
  success: boolean;
  static names(): { [key: string]: string } {
    return {
      groupId: 'GroupId',
      ruleId: 'RuleId',
      message: 'Message',
      ruleName: 'RuleName',
      code: 'Code',
      success: 'Success',
    };
  }

  static types(): { [key: string]: any } {
    return {
      groupId: 'number',
      ruleId: 'string',
      message: 'string',
      ruleName: 'string',
      code: 'string',
      success: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ApplyMetricRuleTemplateResponseResource extends $tea.Model {
  groupId: number;
  alertResults: ApplyMetricRuleTemplateResponseResourceAlertResults[];
  static names(): { [key: string]: string } {
    return {
      groupId: 'GroupId',
      alertResults: 'AlertResults',
    };
  }

  static types(): { [key: string]: any } {
    return {
      groupId: 'number',
      alertResults: { 'type': 'array', 'itemType': ApplyMetricRuleTemplateResponseResourceAlertResults },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplateEscalationsInfo extends $tea.Model {
  statistics: string;
  comparisonOperator: string;
  threshold: string;
  times: number;
  static names(): { [key: string]: string } {
    return {
      statistics: 'Statistics',
      comparisonOperator: 'ComparisonOperator',
      threshold: 'Threshold',
      times: 'Times',
    };
  }

  static types(): { [key: string]: any } {
    return {
      statistics: 'string',
      comparisonOperator: 'string',
      threshold: 'string',
      times: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplateEscalationsWarn extends $tea.Model {
  statistics: string;
  comparisonOperator: string;
  threshold: string;
  times: number;
  static names(): { [key: string]: string } {
    return {
      statistics: 'Statistics',
      comparisonOperator: 'ComparisonOperator',
      threshold: 'Threshold',
      times: 'Times',
    };
  }

  static types(): { [key: string]: any } {
    return {
      statistics: 'string',
      comparisonOperator: 'string',
      threshold: 'string',
      times: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplateEscalationsCritical extends $tea.Model {
  statistics: string;
  comparisonOperator: string;
  threshold: string;
  times: number;
  static names(): { [key: string]: string } {
    return {
      statistics: 'Statistics',
      comparisonOperator: 'ComparisonOperator',
      threshold: 'Threshold',
      times: 'Times',
    };
  }

  static types(): { [key: string]: any } {
    return {
      statistics: 'string',
      comparisonOperator: 'string',
      threshold: 'string',
      times: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplateEscalations extends $tea.Model {
  info: DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplateEscalationsInfo;
  warn: DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplateEscalationsWarn;
  critical: DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplateEscalationsCritical;
  static names(): { [key: string]: string } {
    return {
      info: 'Info',
      warn: 'Warn',
      critical: 'Critical',
    };
  }

  static types(): { [key: string]: any } {
    return {
      info: DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplateEscalationsInfo,
      warn: DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplateEscalationsWarn,
      critical: DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplateEscalationsCritical,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplate extends $tea.Model {
  ruleName: string;
  category: string;
  namespace: string;
  metricName: string;
  selector: string;
  webhook: string;
  escalations: DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplateEscalations;
  static names(): { [key: string]: string } {
    return {
      ruleName: 'RuleName',
      category: 'Category',
      namespace: 'Namespace',
      metricName: 'MetricName',
      selector: 'Selector',
      webhook: 'Webhook',
      escalations: 'Escalations',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ruleName: 'string',
      category: 'string',
      namespace: 'string',
      metricName: 'string',
      selector: 'string',
      webhook: 'string',
      escalations: DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplateEscalations,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplates extends $tea.Model {
  alertTemplate: DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplate[];
  static names(): { [key: string]: string } {
    return {
      alertTemplate: 'AlertTemplate',
    };
  }

  static types(): { [key: string]: any } {
    return {
      alertTemplate: { 'type': 'array', 'itemType': DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplate },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMetricRuleTemplateAttributeResponseResource extends $tea.Model {
  name: string;
  templateId: string;
  restVersion: string;
  description: string;
  alertTemplates: DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplates;
  static names(): { [key: string]: string } {
    return {
      name: 'Name',
      templateId: 'TemplateId',
      restVersion: 'RestVersion',
      description: 'Description',
      alertTemplates: 'AlertTemplates',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
      templateId: 'string',
      restVersion: 'string',
      description: 'string',
      alertTemplates: DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplates,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateMetricRuleTemplateRequestAlertTemplatesEscalationsCritical extends $tea.Model {
  statistics: string;
  comparisonOperator: string;
  threshold: string;
  times: number;
  static names(): { [key: string]: string } {
    return {
      statistics: 'Statistics',
      comparisonOperator: 'ComparisonOperator',
      threshold: 'Threshold',
      times: 'Times',
    };
  }

  static types(): { [key: string]: any } {
    return {
      statistics: 'string',
      comparisonOperator: 'string',
      threshold: 'string',
      times: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateMetricRuleTemplateRequestAlertTemplatesEscalationsWarn extends $tea.Model {
  statistics: string;
  comparisonOperator: string;
  threshold: string;
  times: number;
  static names(): { [key: string]: string } {
    return {
      statistics: 'Statistics',
      comparisonOperator: 'ComparisonOperator',
      threshold: 'Threshold',
      times: 'Times',
    };
  }

  static types(): { [key: string]: any } {
    return {
      statistics: 'string',
      comparisonOperator: 'string',
      threshold: 'string',
      times: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateMetricRuleTemplateRequestAlertTemplatesEscalationsInfo extends $tea.Model {
  statistics: string;
  comparisonOperator: string;
  threshold: string;
  times: number;
  static names(): { [key: string]: string } {
    return {
      statistics: 'Statistics',
      comparisonOperator: 'ComparisonOperator',
      threshold: 'Threshold',
      times: 'Times',
    };
  }

  static types(): { [key: string]: any } {
    return {
      statistics: 'string',
      comparisonOperator: 'string',
      threshold: 'string',
      times: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateMetricRuleTemplateRequestAlertTemplatesEscalations extends $tea.Model {
  critical: CreateMetricRuleTemplateRequestAlertTemplatesEscalationsCritical;
  warn: CreateMetricRuleTemplateRequestAlertTemplatesEscalationsWarn;
  info: CreateMetricRuleTemplateRequestAlertTemplatesEscalationsInfo;
  static names(): { [key: string]: string } {
    return {
      critical: 'Critical',
      warn: 'Warn',
      info: 'Info',
    };
  }

  static types(): { [key: string]: any } {
    return {
      critical: CreateMetricRuleTemplateRequestAlertTemplatesEscalationsCritical,
      warn: CreateMetricRuleTemplateRequestAlertTemplatesEscalationsWarn,
      info: CreateMetricRuleTemplateRequestAlertTemplatesEscalationsInfo,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateMetricRuleTemplateRequestAlertTemplates extends $tea.Model {
  metricName: string;
  ruleName: string;
  category: string;
  namespace: string;
  period: number;
  selector: string;
  webhook: string;
  escalations: CreateMetricRuleTemplateRequestAlertTemplatesEscalations;
  static names(): { [key: string]: string } {
    return {
      metricName: 'MetricName',
      ruleName: 'RuleName',
      category: 'Category',
      namespace: 'Namespace',
      period: 'Period',
      selector: 'Selector',
      webhook: 'Webhook',
      escalations: 'Escalations',
    };
  }

  static types(): { [key: string]: any } {
    return {
      metricName: 'string',
      ruleName: 'string',
      category: 'string',
      namespace: 'string',
      period: 'number',
      selector: 'string',
      webhook: 'string',
      escalations: CreateMetricRuleTemplateRequestAlertTemplatesEscalations,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteMetricRuleTemplateResponseResource extends $tea.Model {
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

export class DescribeMetricRuleTemplateListResponseTemplatesTemplateApplyHistoriesApplyHistory extends $tea.Model {
  groupId: number;
  groupName: string;
  applyTime: number;
  static names(): { [key: string]: string } {
    return {
      groupId: 'GroupId',
      groupName: 'GroupName',
      applyTime: 'ApplyTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      groupId: 'number',
      groupName: 'string',
      applyTime: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMetricRuleTemplateListResponseTemplatesTemplateApplyHistories extends $tea.Model {
  applyHistory: DescribeMetricRuleTemplateListResponseTemplatesTemplateApplyHistoriesApplyHistory[];
  static names(): { [key: string]: string } {
    return {
      applyHistory: 'ApplyHistory',
    };
  }

  static types(): { [key: string]: any } {
    return {
      applyHistory: { 'type': 'array', 'itemType': DescribeMetricRuleTemplateListResponseTemplatesTemplateApplyHistoriesApplyHistory },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMetricRuleTemplateListResponseTemplatesTemplate extends $tea.Model {
  name: string;
  description: string;
  restVersion: number;
  templateId: number;
  gmtCreate: number;
  gmtModified: number;
  applyHistories: DescribeMetricRuleTemplateListResponseTemplatesTemplateApplyHistories;
  static names(): { [key: string]: string } {
    return {
      name: 'Name',
      description: 'Description',
      restVersion: 'RestVersion',
      templateId: 'TemplateId',
      gmtCreate: 'GmtCreate',
      gmtModified: 'GmtModified',
      applyHistories: 'ApplyHistories',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
      description: 'string',
      restVersion: 'number',
      templateId: 'number',
      gmtCreate: 'number',
      gmtModified: 'number',
      applyHistories: DescribeMetricRuleTemplateListResponseTemplatesTemplateApplyHistories,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMetricRuleTemplateListResponseTemplates extends $tea.Model {
  template: DescribeMetricRuleTemplateListResponseTemplatesTemplate[];
  static names(): { [key: string]: string } {
    return {
      template: 'Template',
    };
  }

  static types(): { [key: string]: any } {
    return {
      template: { 'type': 'array', 'itemType': DescribeMetricRuleTemplateListResponseTemplatesTemplate },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PutCustomEventRequestEventInfo extends $tea.Model {
  eventName: string;
  content: string;
  time: string;
  groupId: string;
  static names(): { [key: string]: string } {
    return {
      eventName: 'EventName',
      content: 'Content',
      time: 'Time',
      groupId: 'GroupId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      eventName: 'string',
      content: 'string',
      time: 'string',
      groupId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeCustomEventCountResponseCustomEventCountsCustomEventCount extends $tea.Model {
  name: string;
  num: number;
  time: number;
  static names(): { [key: string]: string } {
    return {
      name: 'Name',
      num: 'Num',
      time: 'Time',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
      num: 'number',
      time: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeCustomEventCountResponseCustomEventCounts extends $tea.Model {
  customEventCount: DescribeCustomEventCountResponseCustomEventCountsCustomEventCount[];
  static names(): { [key: string]: string } {
    return {
      customEventCount: 'CustomEventCount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      customEventCount: { 'type': 'array', 'itemType': DescribeCustomEventCountResponseCustomEventCountsCustomEventCount },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeCustomEventAttributeResponseCustomEventsCustomEvent extends $tea.Model {
  id: string;
  content: string;
  groupId: string;
  name: string;
  time: string;
  static names(): { [key: string]: string } {
    return {
      id: 'Id',
      content: 'Content',
      groupId: 'GroupId',
      name: 'Name',
      time: 'Time',
    };
  }

  static types(): { [key: string]: any } {
    return {
      id: 'string',
      content: 'string',
      groupId: 'string',
      name: 'string',
      time: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeCustomEventAttributeResponseCustomEvents extends $tea.Model {
  customEvent: DescribeCustomEventAttributeResponseCustomEventsCustomEvent[];
  static names(): { [key: string]: string } {
    return {
      customEvent: 'CustomEvent',
    };
  }

  static types(): { [key: string]: any } {
    return {
      customEvent: { 'type': 'array', 'itemType': DescribeCustomEventAttributeResponseCustomEventsCustomEvent },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeCustomEventHistogramResponseEventHistogramsEventHistogram extends $tea.Model {
  count: number;
  startTime: number;
  endTime: number;
  static names(): { [key: string]: string } {
    return {
      count: 'Count',
      startTime: 'StartTime',
      endTime: 'EndTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      count: 'number',
      startTime: 'number',
      endTime: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeCustomEventHistogramResponseEventHistograms extends $tea.Model {
  eventHistogram: DescribeCustomEventHistogramResponseEventHistogramsEventHistogram[];
  static names(): { [key: string]: string } {
    return {
      eventHistogram: 'EventHistogram',
    };
  }

  static types(): { [key: string]: any } {
    return {
      eventHistogram: { 'type': 'array', 'itemType': DescribeCustomEventHistogramResponseEventHistogramsEventHistogram },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PutCustomMetricRequestMetricList extends $tea.Model {
  groupId: string;
  metricName?: string;
  dimensions?: string;
  time?: string;
  type?: string;
  period?: string;
  static names(): { [key: string]: string } {
    return {
      groupId: 'GroupId',
      metricName: 'MetricName',
      dimensions: 'Dimensions',
      time: 'Time',
      type: 'Type',
      period: 'Period',
    };
  }

  static types(): { [key: string]: any } {
    return {
      groupId: 'string',
      metricName: 'string',
      dimensions: 'string',
      time: 'string',
      type: 'string',
      period: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeEventRuleAttributeResponseResultEventPatternNameList extends $tea.Model {
  nameList: string[];
  static names(): { [key: string]: string } {
    return {
      nameList: 'NameList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      nameList: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeEventRuleAttributeResponseResultEventPatternStatusList extends $tea.Model {
  statusList: string[];
  static names(): { [key: string]: string } {
    return {
      statusList: 'StatusList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      statusList: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeEventRuleAttributeResponseResultEventPatternLevelList extends $tea.Model {
  levelList: string[];
  static names(): { [key: string]: string } {
    return {
      levelList: 'LevelList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      levelList: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeEventRuleAttributeResponseResultEventPattern extends $tea.Model {
  product: string;
  nameList: DescribeEventRuleAttributeResponseResultEventPatternNameList;
  statusList: DescribeEventRuleAttributeResponseResultEventPatternStatusList;
  levelList: DescribeEventRuleAttributeResponseResultEventPatternLevelList;
  static names(): { [key: string]: string } {
    return {
      product: 'Product',
      nameList: 'NameList',
      statusList: 'StatusList',
      levelList: 'LevelList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      product: 'string',
      nameList: DescribeEventRuleAttributeResponseResultEventPatternNameList,
      statusList: DescribeEventRuleAttributeResponseResultEventPatternStatusList,
      levelList: DescribeEventRuleAttributeResponseResultEventPatternLevelList,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeEventRuleAttributeResponseResult extends $tea.Model {
  description: string;
  name: string;
  eventType: string;
  groupId: string;
  state: string;
  eventPattern: DescribeEventRuleAttributeResponseResultEventPattern;
  static names(): { [key: string]: string } {
    return {
      description: 'Description',
      name: 'Name',
      eventType: 'EventType',
      groupId: 'GroupId',
      state: 'State',
      eventPattern: 'EventPattern',
    };
  }

  static types(): { [key: string]: any } {
    return {
      description: 'string',
      name: 'string',
      eventType: 'string',
      groupId: 'string',
      state: 'string',
      eventPattern: DescribeEventRuleAttributeResponseResultEventPattern,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContactListResponseContactsContactChannels extends $tea.Model {
  SMS: string;
  mail: string;
  aliIM: string;
  dingWebHook: string;
  static names(): { [key: string]: string } {
    return {
      SMS: 'SMS',
      mail: 'Mail',
      aliIM: 'AliIM',
      dingWebHook: 'DingWebHook',
    };
  }

  static types(): { [key: string]: any } {
    return {
      SMS: 'string',
      mail: 'string',
      aliIM: 'string',
      dingWebHook: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContactListResponseContactsContactChannelsState extends $tea.Model {
  SMS: string;
  mail: string;
  aliIM: string;
  dingWebHook: string;
  static names(): { [key: string]: string } {
    return {
      SMS: 'SMS',
      mail: 'Mail',
      aliIM: 'AliIM',
      dingWebHook: 'DingWebHook',
    };
  }

  static types(): { [key: string]: any } {
    return {
      SMS: 'string',
      mail: 'string',
      aliIM: 'string',
      dingWebHook: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContactListResponseContactsContactContactGroups extends $tea.Model {
  contactGroup: string[];
  static names(): { [key: string]: string } {
    return {
      contactGroup: 'ContactGroup',
    };
  }

  static types(): { [key: string]: any } {
    return {
      contactGroup: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContactListResponseContactsContact extends $tea.Model {
  name: string;
  desc: string;
  createTime: number;
  updateTime: number;
  channels: DescribeContactListResponseContactsContactChannels;
  channelsState: DescribeContactListResponseContactsContactChannelsState;
  contactGroups: DescribeContactListResponseContactsContactContactGroups;
  static names(): { [key: string]: string } {
    return {
      name: 'Name',
      desc: 'Desc',
      createTime: 'CreateTime',
      updateTime: 'UpdateTime',
      channels: 'Channels',
      channelsState: 'ChannelsState',
      contactGroups: 'ContactGroups',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
      desc: 'string',
      createTime: 'number',
      updateTime: 'number',
      channels: DescribeContactListResponseContactsContactChannels,
      channelsState: DescribeContactListResponseContactsContactChannelsState,
      contactGroups: DescribeContactListResponseContactsContactContactGroups,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContactListResponseContacts extends $tea.Model {
  contact: DescribeContactListResponseContactsContact[];
  static names(): { [key: string]: string } {
    return {
      contact: 'Contact',
    };
  }

  static types(): { [key: string]: any } {
    return {
      contact: { 'type': 'array', 'itemType': DescribeContactListResponseContactsContact },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContactListByContactGroupResponseContactsContactChannels extends $tea.Model {
  SMS: string;
  mail: string;
  aliIM: string;
  dingWebHook: string;
  static names(): { [key: string]: string } {
    return {
      SMS: 'SMS',
      mail: 'Mail',
      aliIM: 'AliIM',
      dingWebHook: 'DingWebHook',
    };
  }

  static types(): { [key: string]: any } {
    return {
      SMS: 'string',
      mail: 'string',
      aliIM: 'string',
      dingWebHook: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContactListByContactGroupResponseContactsContact extends $tea.Model {
  name: string;
  desc: string;
  createTime: number;
  updateTime: number;
  channels: DescribeContactListByContactGroupResponseContactsContactChannels;
  static names(): { [key: string]: string } {
    return {
      name: 'Name',
      desc: 'Desc',
      createTime: 'CreateTime',
      updateTime: 'UpdateTime',
      channels: 'Channels',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
      desc: 'string',
      createTime: 'number',
      updateTime: 'number',
      channels: DescribeContactListByContactGroupResponseContactsContactChannels,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContactListByContactGroupResponseContacts extends $tea.Model {
  contact: DescribeContactListByContactGroupResponseContactsContact[];
  static names(): { [key: string]: string } {
    return {
      contact: 'Contact',
    };
  }

  static types(): { [key: string]: any } {
    return {
      contact: { 'type': 'array', 'itemType': DescribeContactListByContactGroupResponseContactsContact },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PutContactRequestChannels extends $tea.Model {
  SMS?: string;
  mail?: string;
  aliIM?: string;
  dingWebHook?: string;
  static names(): { [key: string]: string } {
    return {
      SMS: 'SMS',
      mail: 'Mail',
      aliIM: 'AliIM',
      dingWebHook: 'DingWebHook',
    };
  }

  static types(): { [key: string]: any } {
    return {
      SMS: 'string',
      mail: 'string',
      aliIM: 'string',
      dingWebHook: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContactGroupListResponseContactGroupListContactGroupContacts extends $tea.Model {
  contact: string[];
  static names(): { [key: string]: string } {
    return {
      contact: 'Contact',
    };
  }

  static types(): { [key: string]: any } {
    return {
      contact: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContactGroupListResponseContactGroupListContactGroup extends $tea.Model {
  name: string;
  describe: string;
  createTime: number;
  updateTime: number;
  enabledWeeklyReport: boolean;
  enableSubscribed: boolean;
  contacts: DescribeContactGroupListResponseContactGroupListContactGroupContacts;
  static names(): { [key: string]: string } {
    return {
      name: 'Name',
      describe: 'Describe',
      createTime: 'CreateTime',
      updateTime: 'UpdateTime',
      enabledWeeklyReport: 'EnabledWeeklyReport',
      enableSubscribed: 'EnableSubscribed',
      contacts: 'Contacts',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
      describe: 'string',
      createTime: 'number',
      updateTime: 'number',
      enabledWeeklyReport: 'boolean',
      enableSubscribed: 'boolean',
      contacts: DescribeContactGroupListResponseContactGroupListContactGroupContacts,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContactGroupListResponseContactGroupList extends $tea.Model {
  contactGroup: DescribeContactGroupListResponseContactGroupListContactGroup[];
  static names(): { [key: string]: string } {
    return {
      contactGroup: 'ContactGroup',
    };
  }

  static types(): { [key: string]: any } {
    return {
      contactGroup: { 'type': 'array', 'itemType': DescribeContactGroupListResponseContactGroupListContactGroup },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeContactGroupListResponseContactGroups extends $tea.Model {
  contactGroup: string[];
  static names(): { [key: string]: string } {
    return {
      contactGroup: 'ContactGroup',
    };
  }

  static types(): { [key: string]: any } {
    return {
      contactGroup: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PutEventRuleTargetsRequestFcParameters extends $tea.Model {
  id?: string;
  region?: string;
  serviceName?: string;
  functionName?: string;
  static names(): { [key: string]: string } {
    return {
      id: 'Id',
      region: 'Region',
      serviceName: 'ServiceName',
      functionName: 'FunctionName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      id: 'string',
      region: 'string',
      serviceName: 'string',
      functionName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PutEventRuleTargetsRequestContactParameters extends $tea.Model {
  id?: string;
  contactGroupName?: string;
  level?: string;
  static names(): { [key: string]: string } {
    return {
      id: 'Id',
      contactGroupName: 'ContactGroupName',
      level: 'Level',
    };
  }

  static types(): { [key: string]: any } {
    return {
      id: 'string',
      contactGroupName: 'string',
      level: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PutEventRuleTargetsRequestMnsParameters extends $tea.Model {
  id?: string;
  region?: string;
  queue?: string;
  static names(): { [key: string]: string } {
    return {
      id: 'Id',
      region: 'Region',
      queue: 'Queue',
    };
  }

  static types(): { [key: string]: any } {
    return {
      id: 'string',
      region: 'string',
      queue: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PutEventRuleTargetsRequestWebhookParameters extends $tea.Model {
  id?: string;
  protocol?: string;
  url?: string;
  method?: string;
  static names(): { [key: string]: string } {
    return {
      id: 'Id',
      protocol: 'Protocol',
      url: 'Url',
      method: 'Method',
    };
  }

  static types(): { [key: string]: any } {
    return {
      id: 'string',
      protocol: 'string',
      url: 'string',
      method: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PutEventRuleTargetsRequestSlsParameters extends $tea.Model {
  id?: string;
  region?: string;
  project?: string;
  logStore?: string;
  static names(): { [key: string]: string } {
    return {
      id: 'Id',
      region: 'Region',
      project: 'Project',
      logStore: 'LogStore',
    };
  }

  static types(): { [key: string]: any } {
    return {
      id: 'string',
      region: 'string',
      project: 'string',
      logStore: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PutEventRuleTargetsResponseFailedContactParametersContactParameter extends $tea.Model {
  id: number;
  contactGroupName: string;
  level: string;
  static names(): { [key: string]: string } {
    return {
      id: 'Id',
      contactGroupName: 'ContactGroupName',
      level: 'Level',
    };
  }

  static types(): { [key: string]: any } {
    return {
      id: 'number',
      contactGroupName: 'string',
      level: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PutEventRuleTargetsResponseFailedContactParameters extends $tea.Model {
  contactParameter: PutEventRuleTargetsResponseFailedContactParametersContactParameter[];
  static names(): { [key: string]: string } {
    return {
      contactParameter: 'ContactParameter',
    };
  }

  static types(): { [key: string]: any } {
    return {
      contactParameter: { 'type': 'array', 'itemType': PutEventRuleTargetsResponseFailedContactParametersContactParameter },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PutEventRuleTargetsResponseFailedMnsParametersMnsParameter extends $tea.Model {
  id: number;
  region: string;
  queue: string;
  static names(): { [key: string]: string } {
    return {
      id: 'Id',
      region: 'Region',
      queue: 'Queue',
    };
  }

  static types(): { [key: string]: any } {
    return {
      id: 'number',
      region: 'string',
      queue: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PutEventRuleTargetsResponseFailedMnsParameters extends $tea.Model {
  mnsParameter: PutEventRuleTargetsResponseFailedMnsParametersMnsParameter[];
  static names(): { [key: string]: string } {
    return {
      mnsParameter: 'MnsParameter',
    };
  }

  static types(): { [key: string]: any } {
    return {
      mnsParameter: { 'type': 'array', 'itemType': PutEventRuleTargetsResponseFailedMnsParametersMnsParameter },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PutEventRuleTargetsResponseFailedFcParametersFcParameter extends $tea.Model {
  id: number;
  region: string;
  serviceName: string;
  functionName: string;
  static names(): { [key: string]: string } {
    return {
      id: 'Id',
      region: 'Region',
      serviceName: 'ServiceName',
      functionName: 'FunctionName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      id: 'number',
      region: 'string',
      serviceName: 'string',
      functionName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PutEventRuleTargetsResponseFailedFcParameters extends $tea.Model {
  fcParameter: PutEventRuleTargetsResponseFailedFcParametersFcParameter[];
  static names(): { [key: string]: string } {
    return {
      fcParameter: 'FcParameter',
    };
  }

  static types(): { [key: string]: any } {
    return {
      fcParameter: { 'type': 'array', 'itemType': PutEventRuleTargetsResponseFailedFcParametersFcParameter },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeEventRuleTargetListResponseContactParametersContactParameter extends $tea.Model {
  contactGroupName: string;
  level: string;
  id: string;
  static names(): { [key: string]: string } {
    return {
      contactGroupName: 'ContactGroupName',
      level: 'Level',
      id: 'Id',
    };
  }

  static types(): { [key: string]: any } {
    return {
      contactGroupName: 'string',
      level: 'string',
      id: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeEventRuleTargetListResponseContactParameters extends $tea.Model {
  contactParameter: DescribeEventRuleTargetListResponseContactParametersContactParameter[];
  static names(): { [key: string]: string } {
    return {
      contactParameter: 'ContactParameter',
    };
  }

  static types(): { [key: string]: any } {
    return {
      contactParameter: { 'type': 'array', 'itemType': DescribeEventRuleTargetListResponseContactParametersContactParameter },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeEventRuleTargetListResponseFcParametersFCParameter extends $tea.Model {
  region: string;
  serviceName: string;
  functionName: string;
  id: string;
  arn: string;
  static names(): { [key: string]: string } {
    return {
      region: 'Region',
      serviceName: 'ServiceName',
      functionName: 'FunctionName',
      id: 'Id',
      arn: 'Arn',
    };
  }

  static types(): { [key: string]: any } {
    return {
      region: 'string',
      serviceName: 'string',
      functionName: 'string',
      id: 'string',
      arn: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeEventRuleTargetListResponseFcParameters extends $tea.Model {
  FCParameter: DescribeEventRuleTargetListResponseFcParametersFCParameter[];
  static names(): { [key: string]: string } {
    return {
      FCParameter: 'FCParameter',
    };
  }

  static types(): { [key: string]: any } {
    return {
      FCParameter: { 'type': 'array', 'itemType': DescribeEventRuleTargetListResponseFcParametersFCParameter },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeEventRuleTargetListResponseMnsParametersMnsParameter extends $tea.Model {
  region: string;
  queue: string;
  id: string;
  arn: string;
  static names(): { [key: string]: string } {
    return {
      region: 'Region',
      queue: 'Queue',
      id: 'Id',
      arn: 'Arn',
    };
  }

  static types(): { [key: string]: any } {
    return {
      region: 'string',
      queue: 'string',
      id: 'string',
      arn: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeEventRuleTargetListResponseMnsParameters extends $tea.Model {
  mnsParameter: DescribeEventRuleTargetListResponseMnsParametersMnsParameter[];
  static names(): { [key: string]: string } {
    return {
      mnsParameter: 'MnsParameter',
    };
  }

  static types(): { [key: string]: any } {
    return {
      mnsParameter: { 'type': 'array', 'itemType': DescribeEventRuleTargetListResponseMnsParametersMnsParameter },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeEventRuleTargetListResponseWebhookParametersWebhookParameter extends $tea.Model {
  id: string;
  protocol: string;
  method: string;
  url: string;
  static names(): { [key: string]: string } {
    return {
      id: 'Id',
      protocol: 'Protocol',
      method: 'Method',
      url: 'Url',
    };
  }

  static types(): { [key: string]: any } {
    return {
      id: 'string',
      protocol: 'string',
      method: 'string',
      url: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeEventRuleTargetListResponseWebhookParameters extends $tea.Model {
  webhookParameter: DescribeEventRuleTargetListResponseWebhookParametersWebhookParameter[];
  static names(): { [key: string]: string } {
    return {
      webhookParameter: 'WebhookParameter',
    };
  }

  static types(): { [key: string]: any } {
    return {
      webhookParameter: { 'type': 'array', 'itemType': DescribeEventRuleTargetListResponseWebhookParametersWebhookParameter },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeEventRuleTargetListResponseSlsParametersSlsParameter extends $tea.Model {
  id: string;
  region: string;
  project: string;
  logStore: string;
  arn: string;
  static names(): { [key: string]: string } {
    return {
      id: 'Id',
      region: 'Region',
      project: 'Project',
      logStore: 'LogStore',
      arn: 'Arn',
    };
  }

  static types(): { [key: string]: any } {
    return {
      id: 'string',
      region: 'string',
      project: 'string',
      logStore: 'string',
      arn: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeEventRuleTargetListResponseSlsParameters extends $tea.Model {
  slsParameter: DescribeEventRuleTargetListResponseSlsParametersSlsParameter[];
  static names(): { [key: string]: string } {
    return {
      slsParameter: 'SlsParameter',
    };
  }

  static types(): { [key: string]: any } {
    return {
      slsParameter: { 'type': 'array', 'itemType': DescribeEventRuleTargetListResponseSlsParametersSlsParameter },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PutEventRuleRequestEventPattern extends $tea.Model {
  product?: string;
  nameList: string[];
  statusList: string[];
  levelList: string[];
  eventTypeList: string[];
  static names(): { [key: string]: string } {
    return {
      product: 'Product',
      nameList: 'NameList',
      statusList: 'StatusList',
      levelList: 'LevelList',
      eventTypeList: 'EventTypeList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      product: 'string',
      nameList: { 'type': 'array', 'itemType': 'string' },
      statusList: { 'type': 'array', 'itemType': 'string' },
      levelList: { 'type': 'array', 'itemType': 'string' },
      eventTypeList: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeEventRuleListResponseEventRulesEventRuleEventPatternEventPatternNameList extends $tea.Model {
  nameList: string[];
  static names(): { [key: string]: string } {
    return {
      nameList: 'NameList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      nameList: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeEventRuleListResponseEventRulesEventRuleEventPatternEventPatternLevelList extends $tea.Model {
  levelList: string[];
  static names(): { [key: string]: string } {
    return {
      levelList: 'LevelList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      levelList: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeEventRuleListResponseEventRulesEventRuleEventPatternEventPatternEventTypeList extends $tea.Model {
  eventTypeList: string[];
  static names(): { [key: string]: string } {
    return {
      eventTypeList: 'EventTypeList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      eventTypeList: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeEventRuleListResponseEventRulesEventRuleEventPatternEventPattern extends $tea.Model {
  product: string;
  nameList: DescribeEventRuleListResponseEventRulesEventRuleEventPatternEventPatternNameList;
  levelList: DescribeEventRuleListResponseEventRulesEventRuleEventPatternEventPatternLevelList;
  eventTypeList: DescribeEventRuleListResponseEventRulesEventRuleEventPatternEventPatternEventTypeList;
  static names(): { [key: string]: string } {
    return {
      product: 'Product',
      nameList: 'NameList',
      levelList: 'LevelList',
      eventTypeList: 'EventTypeList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      product: 'string',
      nameList: DescribeEventRuleListResponseEventRulesEventRuleEventPatternEventPatternNameList,
      levelList: DescribeEventRuleListResponseEventRulesEventRuleEventPatternEventPatternLevelList,
      eventTypeList: DescribeEventRuleListResponseEventRulesEventRuleEventPatternEventPatternEventTypeList,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeEventRuleListResponseEventRulesEventRuleEventPattern extends $tea.Model {
  eventPattern: DescribeEventRuleListResponseEventRulesEventRuleEventPatternEventPattern[];
  static names(): { [key: string]: string } {
    return {
      eventPattern: 'EventPattern',
    };
  }

  static types(): { [key: string]: any } {
    return {
      eventPattern: { 'type': 'array', 'itemType': DescribeEventRuleListResponseEventRulesEventRuleEventPatternEventPattern },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeEventRuleListResponseEventRulesEventRule extends $tea.Model {
  name: string;
  groupId: string;
  eventType: string;
  state: string;
  description: string;
  eventPattern: DescribeEventRuleListResponseEventRulesEventRuleEventPattern;
  static names(): { [key: string]: string } {
    return {
      name: 'Name',
      groupId: 'GroupId',
      eventType: 'EventType',
      state: 'State',
      description: 'Description',
      eventPattern: 'EventPattern',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
      groupId: 'string',
      eventType: 'string',
      state: 'string',
      description: 'string',
      eventPattern: DescribeEventRuleListResponseEventRulesEventRuleEventPattern,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeEventRuleListResponseEventRules extends $tea.Model {
  eventRule: DescribeEventRuleListResponseEventRulesEventRule[];
  static names(): { [key: string]: string } {
    return {
      eventRule: 'EventRule',
    };
  }

  static types(): { [key: string]: any } {
    return {
      eventRule: { 'type': 'array', 'itemType': DescribeEventRuleListResponseEventRulesEventRule },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSystemEventAttributeResponseSystemEventsSystemEvent extends $tea.Model {
  content: string;
  product: string;
  name: string;
  groupId: string;
  num: number;
  level: string;
  status: string;
  resourceId: string;
  regionId: string;
  instanceName: string;
  time: number;
  static names(): { [key: string]: string } {
    return {
      content: 'Content',
      product: 'Product',
      name: 'Name',
      groupId: 'GroupId',
      num: 'Num',
      level: 'Level',
      status: 'Status',
      resourceId: 'ResourceId',
      regionId: 'RegionId',
      instanceName: 'InstanceName',
      time: 'Time',
    };
  }

  static types(): { [key: string]: any } {
    return {
      content: 'string',
      product: 'string',
      name: 'string',
      groupId: 'string',
      num: 'number',
      level: 'string',
      status: 'string',
      resourceId: 'string',
      regionId: 'string',
      instanceName: 'string',
      time: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSystemEventAttributeResponseSystemEvents extends $tea.Model {
  systemEvent: DescribeSystemEventAttributeResponseSystemEventsSystemEvent[];
  static names(): { [key: string]: string } {
    return {
      systemEvent: 'SystemEvent',
    };
  }

  static types(): { [key: string]: any } {
    return {
      systemEvent: { 'type': 'array', 'itemType': DescribeSystemEventAttributeResponseSystemEventsSystemEvent },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSystemEventHistogramResponseSystemEventHistogramsSystemEventHistogram extends $tea.Model {
  count: number;
  startTime: number;
  endTime: number;
  static names(): { [key: string]: string } {
    return {
      count: 'Count',
      startTime: 'StartTime',
      endTime: 'EndTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      count: 'number',
      startTime: 'number',
      endTime: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSystemEventHistogramResponseSystemEventHistograms extends $tea.Model {
  systemEventHistogram: DescribeSystemEventHistogramResponseSystemEventHistogramsSystemEventHistogram[];
  static names(): { [key: string]: string } {
    return {
      systemEventHistogram: 'SystemEventHistogram',
    };
  }

  static types(): { [key: string]: any } {
    return {
      systemEventHistogram: { 'type': 'array', 'itemType': DescribeSystemEventHistogramResponseSystemEventHistogramsSystemEventHistogram },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSystemEventCountResponseSystemEventCountsSystemEventCount extends $tea.Model {
  content: string;
  product: string;
  name: string;
  groupId: string;
  num: number;
  level: string;
  status: string;
  resourceId: string;
  regionId: string;
  instanceName: string;
  time: number;
  static names(): { [key: string]: string } {
    return {
      content: 'Content',
      product: 'Product',
      name: 'Name',
      groupId: 'GroupId',
      num: 'Num',
      level: 'Level',
      status: 'Status',
      resourceId: 'ResourceId',
      regionId: 'RegionId',
      instanceName: 'InstanceName',
      time: 'Time',
    };
  }

  static types(): { [key: string]: any } {
    return {
      content: 'string',
      product: 'string',
      name: 'string',
      groupId: 'string',
      num: 'number',
      level: 'string',
      status: 'string',
      resourceId: 'string',
      regionId: 'string',
      instanceName: 'string',
      time: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSystemEventCountResponseSystemEventCounts extends $tea.Model {
  systemEventCount: DescribeSystemEventCountResponseSystemEventCountsSystemEventCount[];
  static names(): { [key: string]: string } {
    return {
      systemEventCount: 'SystemEventCount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      systemEventCount: { 'type': 'array', 'itemType': DescribeSystemEventCountResponseSystemEventCountsSystemEventCount },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSystemEventMetaListResponseDataResource extends $tea.Model {
  product: string;
  name: string;
  nameDesc: string;
  level: string;
  status: string;
  statusDesc: string;
  eventType: string;
  static names(): { [key: string]: string } {
    return {
      product: 'Product',
      name: 'Name',
      nameDesc: 'NameDesc',
      level: 'Level',
      status: 'Status',
      statusDesc: 'StatusDesc',
      eventType: 'EventType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      product: 'string',
      name: 'string',
      nameDesc: 'string',
      level: 'string',
      status: 'string',
      statusDesc: 'string',
      eventType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSystemEventMetaListResponseData extends $tea.Model {
  resource: DescribeSystemEventMetaListResponseDataResource[];
  static names(): { [key: string]: string } {
    return {
      resource: 'Resource',
    };
  }

  static types(): { [key: string]: any } {
    return {
      resource: { 'type': 'array', 'itemType': DescribeSystemEventMetaListResponseDataResource },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMonitoringAgentProcessesResponseNodeProcessesNodeProcess extends $tea.Model {
  processId: number;
  instanceId: string;
  processName: string;
  processUser: string;
  command: string;
  groupId: string;
  static names(): { [key: string]: string } {
    return {
      processId: 'ProcessId',
      instanceId: 'InstanceId',
      processName: 'ProcessName',
      processUser: 'ProcessUser',
      command: 'Command',
      groupId: 'GroupId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      processId: 'number',
      instanceId: 'string',
      processName: 'string',
      processUser: 'string',
      command: 'string',
      groupId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMonitoringAgentProcessesResponseNodeProcesses extends $tea.Model {
  nodeProcess: DescribeMonitoringAgentProcessesResponseNodeProcessesNodeProcess[];
  static names(): { [key: string]: string } {
    return {
      nodeProcess: 'NodeProcess',
    };
  }

  static types(): { [key: string]: any } {
    return {
      nodeProcess: { 'type': 'array', 'itemType': DescribeMonitoringAgentProcessesResponseNodeProcessesNodeProcess },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMonitoringAgentHostsResponseHostsHost extends $tea.Model {
  instanceId: string;
  serialNumber: string;
  hostName: string;
  aliUid: number;
  operatingSystem: string;
  ipGroup: string;
  region: string;
  agentVersion: string;
  eipAddress: string;
  eipId: string;
  isAliyunHost: boolean;
  natIp: string;
  networkType: string;
  instanceTypeFamily: string;
  static names(): { [key: string]: string } {
    return {
      instanceId: 'InstanceId',
      serialNumber: 'SerialNumber',
      hostName: 'HostName',
      aliUid: 'AliUid',
      operatingSystem: 'OperatingSystem',
      ipGroup: 'IpGroup',
      region: 'Region',
      agentVersion: 'AgentVersion',
      eipAddress: 'EipAddress',
      eipId: 'EipId',
      isAliyunHost: 'isAliyunHost',
      natIp: 'NatIp',
      networkType: 'NetworkType',
      instanceTypeFamily: 'InstanceTypeFamily',
    };
  }

  static types(): { [key: string]: any } {
    return {
      instanceId: 'string',
      serialNumber: 'string',
      hostName: 'string',
      aliUid: 'number',
      operatingSystem: 'string',
      ipGroup: 'string',
      region: 'string',
      agentVersion: 'string',
      eipAddress: 'string',
      eipId: 'string',
      isAliyunHost: 'boolean',
      natIp: 'string',
      networkType: 'string',
      instanceTypeFamily: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMonitoringAgentHostsResponseHosts extends $tea.Model {
  host: DescribeMonitoringAgentHostsResponseHostsHost[];
  static names(): { [key: string]: string } {
    return {
      host: 'Host',
    };
  }

  static types(): { [key: string]: any } {
    return {
      host: { 'type': 'array', 'itemType': DescribeMonitoringAgentHostsResponseHostsHost },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifySiteMonitorResponseData extends $tea.Model {
  count: number;
  static names(): { [key: string]: string } {
    return {
      count: 'count',
    };
  }

  static types(): { [key: string]: any } {
    return {
      count: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSiteMonitorISPCityListResponseIspCityListIspCityIspName extends $tea.Model {
  en: string;
  zhCN: string;
  static names(): { [key: string]: string } {
    return {
      en: 'en',
      zhCN: 'zh_CN',
    };
  }

  static types(): { [key: string]: any } {
    return {
      en: 'string',
      zhCN: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSiteMonitorISPCityListResponseIspCityListIspCityCityName extends $tea.Model {
  en: string;
  zhCN: string;
  static names(): { [key: string]: string } {
    return {
      en: 'en',
      zhCN: 'zh_CN',
    };
  }

  static types(): { [key: string]: any } {
    return {
      en: 'string',
      zhCN: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSiteMonitorISPCityListResponseIspCityListIspCity extends $tea.Model {
  isp: string;
  city: string;
  region: string;
  country: string;
  ispName: DescribeSiteMonitorISPCityListResponseIspCityListIspCityIspName;
  cityName: DescribeSiteMonitorISPCityListResponseIspCityListIspCityCityName;
  static names(): { [key: string]: string } {
    return {
      isp: 'Isp',
      city: 'City',
      region: 'Region',
      country: 'Country',
      ispName: 'IspName',
      cityName: 'CityName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      isp: 'string',
      city: 'string',
      region: 'string',
      country: 'string',
      ispName: DescribeSiteMonitorISPCityListResponseIspCityListIspCityIspName,
      cityName: DescribeSiteMonitorISPCityListResponseIspCityListIspCityCityName,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSiteMonitorISPCityListResponseIspCityList extends $tea.Model {
  ispCity: DescribeSiteMonitorISPCityListResponseIspCityListIspCity[];
  static names(): { [key: string]: string } {
    return {
      ispCity: 'IspCity',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ispCity: { 'type': 'array', 'itemType': DescribeSiteMonitorISPCityListResponseIspCityListIspCity },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSiteMonitorQuotaResponseData extends $tea.Model {
  siteMonitorIdcQuota: number;
  siteMonitorOperatorQuotaQuota: number;
  siteMonitorTaskQuota: number;
  siteMonitorQuotaTaskUsed: number;
  siteMonitorVersion: string;
  static names(): { [key: string]: string } {
    return {
      siteMonitorIdcQuota: 'SiteMonitorIdcQuota',
      siteMonitorOperatorQuotaQuota: 'SiteMonitorOperatorQuotaQuota',
      siteMonitorTaskQuota: 'SiteMonitorTaskQuota',
      siteMonitorQuotaTaskUsed: 'SiteMonitorQuotaTaskUsed',
      siteMonitorVersion: 'SiteMonitorVersion',
    };
  }

  static types(): { [key: string]: any } {
    return {
      siteMonitorIdcQuota: 'number',
      siteMonitorOperatorQuotaQuota: 'number',
      siteMonitorTaskQuota: 'number',
      siteMonitorQuotaTaskUsed: 'number',
      siteMonitorVersion: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class EnableSiteMonitorsResponseData extends $tea.Model {
  count: number;
  static names(): { [key: string]: string } {
    return {
      count: 'count',
    };
  }

  static types(): { [key: string]: any } {
    return {
      count: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSiteMonitorAttributeResponseMetricRulesMetricRule extends $tea.Model {
  ruleId: string;
  ruleName: string;
  namespace: string;
  metricName: string;
  okActions: string;
  alarmActions: string;
  statistics: string;
  actionEnable: string;
  period: string;
  comparisonOperator: string;
  threshold: string;
  evaluationCount: string;
  level: string;
  expression: string;
  stateValue: string;
  dimensions: string;
  static names(): { [key: string]: string } {
    return {
      ruleId: 'RuleId',
      ruleName: 'RuleName',
      namespace: 'Namespace',
      metricName: 'MetricName',
      okActions: 'OkActions',
      alarmActions: 'AlarmActions',
      statistics: 'Statistics',
      actionEnable: 'ActionEnable',
      period: 'Period',
      comparisonOperator: 'ComparisonOperator',
      threshold: 'Threshold',
      evaluationCount: 'EvaluationCount',
      level: 'Level',
      expression: 'Expression',
      stateValue: 'StateValue',
      dimensions: 'Dimensions',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ruleId: 'string',
      ruleName: 'string',
      namespace: 'string',
      metricName: 'string',
      okActions: 'string',
      alarmActions: 'string',
      statistics: 'string',
      actionEnable: 'string',
      period: 'string',
      comparisonOperator: 'string',
      threshold: 'string',
      evaluationCount: 'string',
      level: 'string',
      expression: 'string',
      stateValue: 'string',
      dimensions: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSiteMonitorAttributeResponseMetricRules extends $tea.Model {
  metricRule: DescribeSiteMonitorAttributeResponseMetricRulesMetricRule[];
  static names(): { [key: string]: string } {
    return {
      metricRule: 'MetricRule',
    };
  }

  static types(): { [key: string]: any } {
    return {
      metricRule: { 'type': 'array', 'itemType': DescribeSiteMonitorAttributeResponseMetricRulesMetricRule },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSiteMonitorAttributeResponseSiteMonitorsIspCitiesIspCity extends $tea.Model {
  cityName: string;
  ispName: string;
  city: string;
  isp: string;
  static names(): { [key: string]: string } {
    return {
      cityName: 'CityName',
      ispName: 'IspName',
      city: 'City',
      isp: 'Isp',
    };
  }

  static types(): { [key: string]: any } {
    return {
      cityName: 'string',
      ispName: 'string',
      city: 'string',
      isp: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSiteMonitorAttributeResponseSiteMonitorsIspCities extends $tea.Model {
  ispCity: DescribeSiteMonitorAttributeResponseSiteMonitorsIspCitiesIspCity[];
  static names(): { [key: string]: string } {
    return {
      ispCity: 'IspCity',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ispCity: { 'type': 'array', 'itemType': DescribeSiteMonitorAttributeResponseSiteMonitorsIspCitiesIspCity },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSiteMonitorAttributeResponseSiteMonitorsOptionJson extends $tea.Model {
  dnsType: string;
  dnsServer: string;
  expectValue: string;
  httpMethod: string;
  responseContent: string;
  matchRule: number;
  requestContent: string;
  cookie: string;
  header: string;
  username: string;
  password: string;
  timeOut: number;
  pingNum: number;
  failureRate: number;
  requestFormat: string;
  responseFormat: string;
  port: number;
  authentication: number;
  traceroute: number;
  static names(): { [key: string]: string } {
    return {
      dnsType: 'dns_type',
      dnsServer: 'dns_server',
      expectValue: 'expect_value',
      httpMethod: 'http_method',
      responseContent: 'response_content',
      matchRule: 'match_rule',
      requestContent: 'request_content',
      cookie: 'cookie',
      header: 'header',
      username: 'username',
      password: 'password',
      timeOut: 'time_out',
      pingNum: 'ping_num',
      failureRate: 'failure_rate',
      requestFormat: 'request_format',
      responseFormat: 'response_format',
      port: 'port',
      authentication: 'authentication',
      traceroute: 'traceroute',
    };
  }

  static types(): { [key: string]: any } {
    return {
      dnsType: 'string',
      dnsServer: 'string',
      expectValue: 'string',
      httpMethod: 'string',
      responseContent: 'string',
      matchRule: 'number',
      requestContent: 'string',
      cookie: 'string',
      header: 'string',
      username: 'string',
      password: 'string',
      timeOut: 'number',
      pingNum: 'number',
      failureRate: 'number',
      requestFormat: 'string',
      responseFormat: 'string',
      port: 'number',
      authentication: 'number',
      traceroute: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSiteMonitorAttributeResponseSiteMonitors extends $tea.Model {
  taskType: string;
  address: string;
  taskState: string;
  taskName: string;
  interval: string;
  taskId: string;
  ispCities: DescribeSiteMonitorAttributeResponseSiteMonitorsIspCities;
  optionJson: DescribeSiteMonitorAttributeResponseSiteMonitorsOptionJson;
  static names(): { [key: string]: string } {
    return {
      taskType: 'TaskType',
      address: 'Address',
      taskState: 'TaskState',
      taskName: 'TaskName',
      interval: 'Interval',
      taskId: 'TaskId',
      ispCities: 'IspCities',
      optionJson: 'OptionJson',
    };
  }

  static types(): { [key: string]: any } {
    return {
      taskType: 'string',
      address: 'string',
      taskState: 'string',
      taskName: 'string',
      interval: 'string',
      taskId: 'string',
      ispCities: DescribeSiteMonitorAttributeResponseSiteMonitorsIspCities,
      optionJson: DescribeSiteMonitorAttributeResponseSiteMonitorsOptionJson,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSiteMonitorListResponseSiteMonitorsSiteMonitorOptionsJson extends $tea.Model {
  dnsType: string;
  dnsServer: string;
  expectValue: string;
  httpMethod: string;
  responseContent: string;
  matchRule: number;
  requestContent: string;
  cookie: string;
  header: string;
  username: string;
  password: string;
  timeOut: number;
  pingNum: number;
  failureRate: number;
  requestFormat: string;
  responseFormat: string;
  port: number;
  authentication: number;
  traceroute: number;
  static names(): { [key: string]: string } {
    return {
      dnsType: 'dns_type',
      dnsServer: 'dns_server',
      expectValue: 'expect_value',
      httpMethod: 'http_method',
      responseContent: 'response_content',
      matchRule: 'match_rule',
      requestContent: 'request_content',
      cookie: 'cookie',
      header: 'header',
      username: 'username',
      password: 'password',
      timeOut: 'time_out',
      pingNum: 'ping_num',
      failureRate: 'failure_rate',
      requestFormat: 'request_format',
      responseFormat: 'response_format',
      port: 'port',
      authentication: 'authentication',
      traceroute: 'traceroute',
    };
  }

  static types(): { [key: string]: any } {
    return {
      dnsType: 'string',
      dnsServer: 'string',
      expectValue: 'string',
      httpMethod: 'string',
      responseContent: 'string',
      matchRule: 'number',
      requestContent: 'string',
      cookie: 'string',
      header: 'string',
      username: 'string',
      password: 'string',
      timeOut: 'number',
      pingNum: 'number',
      failureRate: 'number',
      requestFormat: 'string',
      responseFormat: 'string',
      port: 'number',
      authentication: 'number',
      traceroute: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSiteMonitorListResponseSiteMonitorsSiteMonitor extends $tea.Model {
  taskId: string;
  taskType: string;
  address: string;
  taskState: string;
  createTime: string;
  taskName: string;
  interval: string;
  updateTime: string;
  optionsJson: DescribeSiteMonitorListResponseSiteMonitorsSiteMonitorOptionsJson;
  static names(): { [key: string]: string } {
    return {
      taskId: 'TaskId',
      taskType: 'TaskType',
      address: 'Address',
      taskState: 'TaskState',
      createTime: 'CreateTime',
      taskName: 'TaskName',
      interval: 'Interval',
      updateTime: 'UpdateTime',
      optionsJson: 'OptionsJson',
    };
  }

  static types(): { [key: string]: any } {
    return {
      taskId: 'string',
      taskType: 'string',
      address: 'string',
      taskState: 'string',
      createTime: 'string',
      taskName: 'string',
      interval: 'string',
      updateTime: 'string',
      optionsJson: DescribeSiteMonitorListResponseSiteMonitorsSiteMonitorOptionsJson,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSiteMonitorListResponseSiteMonitors extends $tea.Model {
  siteMonitor: DescribeSiteMonitorListResponseSiteMonitorsSiteMonitor[];
  static names(): { [key: string]: string } {
    return {
      siteMonitor: 'SiteMonitor',
    };
  }

  static types(): { [key: string]: any } {
    return {
      siteMonitor: { 'type': 'array', 'itemType': DescribeSiteMonitorListResponseSiteMonitorsSiteMonitor },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteSiteMonitorsResponseData extends $tea.Model {
  count: number;
  static names(): { [key: string]: string } {
    return {
      count: 'count',
    };
  }

  static types(): { [key: string]: any } {
    return {
      count: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DisableSiteMonitorsResponseData extends $tea.Model {
  count: number;
  static names(): { [key: string]: string } {
    return {
      count: 'count',
    };
  }

  static types(): { [key: string]: any } {
    return {
      count: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateSiteMonitorResponseDataAttachAlertResultContact extends $tea.Model {
  message: string;
  requestId: string;
  code: string;
  success: string;
  ruleId: string;
  static names(): { [key: string]: string } {
    return {
      message: 'Message',
      requestId: 'RequestId',
      code: 'Code',
      success: 'Success',
      ruleId: 'RuleId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      message: 'string',
      requestId: 'string',
      code: 'string',
      success: 'string',
      ruleId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateSiteMonitorResponseDataAttachAlertResult extends $tea.Model {
  contact: CreateSiteMonitorResponseDataAttachAlertResultContact[];
  static names(): { [key: string]: string } {
    return {
      contact: 'Contact',
    };
  }

  static types(): { [key: string]: any } {
    return {
      contact: { 'type': 'array', 'itemType': CreateSiteMonitorResponseDataAttachAlertResultContact },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateSiteMonitorResponseData extends $tea.Model {
  attachAlertResult: CreateSiteMonitorResponseDataAttachAlertResult;
  static names(): { [key: string]: string } {
    return {
      attachAlertResult: 'AttachAlertResult',
    };
  }

  static types(): { [key: string]: any } {
    return {
      attachAlertResult: CreateSiteMonitorResponseDataAttachAlertResult,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeProjectMetaResponseResourcesResource extends $tea.Model {
  namespace: string;
  description: string;
  labels: string;
  static names(): { [key: string]: string } {
    return {
      namespace: 'Namespace',
      description: 'Description',
      labels: 'Labels',
    };
  }

  static types(): { [key: string]: any } {
    return {
      namespace: 'string',
      description: 'string',
      labels: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeProjectMetaResponseResources extends $tea.Model {
  resource: DescribeProjectMetaResponseResourcesResource[];
  static names(): { [key: string]: string } {
    return {
      resource: 'Resource',
    };
  }

  static types(): { [key: string]: any } {
    return {
      resource: { 'type': 'array', 'itemType': DescribeProjectMetaResponseResourcesResource },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMetricMetaListResponseResourcesResource extends $tea.Model {
  namespace: string;
  metricName: string;
  statistics: string;
  unit: string;
  description: string;
  dimensions: string;
  periods: string;
  labels: string;
  static names(): { [key: string]: string } {
    return {
      namespace: 'Namespace',
      metricName: 'MetricName',
      statistics: 'Statistics',
      unit: 'Unit',
      description: 'Description',
      dimensions: 'Dimensions',
      periods: 'Periods',
      labels: 'Labels',
    };
  }

  static types(): { [key: string]: any } {
    return {
      namespace: 'string',
      metricName: 'string',
      statistics: 'string',
      unit: 'string',
      description: 'string',
      dimensions: 'string',
      periods: 'string',
      labels: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMetricMetaListResponseResources extends $tea.Model {
  resource: DescribeMetricMetaListResponseResourcesResource[];
  static names(): { [key: string]: string } {
    return {
      resource: 'Resource',
    };
  }

  static types(): { [key: string]: any } {
    return {
      resource: { 'type': 'array', 'itemType': DescribeMetricMetaListResponseResourcesResource },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyHostAvailabilityRequestTaskOption extends $tea.Model {
  httpURI?: string;
  telnetOrPingHost?: string;
  httpResponseCharset?: string;
  httpResponseMatchContent?: string;
  httpMethod?: string;
  httpNegative?: boolean;
  static names(): { [key: string]: string } {
    return {
      httpURI: 'HttpURI',
      telnetOrPingHost: 'TelnetOrPingHost',
      httpResponseCharset: 'HttpResponseCharset',
      httpResponseMatchContent: 'HttpResponseMatchContent',
      httpMethod: 'HttpMethod',
      httpNegative: 'HttpNegative',
    };
  }

  static types(): { [key: string]: any } {
    return {
      httpURI: 'string',
      telnetOrPingHost: 'string',
      httpResponseCharset: 'string',
      httpResponseMatchContent: 'string',
      httpMethod: 'string',
      httpNegative: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyHostAvailabilityRequestAlertConfig extends $tea.Model {
  notifyType: number;
  startTime?: number;
  endTime?: number;
  silenceTime?: number;
  webHook?: string;
  static names(): { [key: string]: string } {
    return {
      notifyType: 'NotifyType',
      startTime: 'StartTime',
      endTime: 'EndTime',
      silenceTime: 'SilenceTime',
      webHook: 'WebHook',
    };
  }

  static types(): { [key: string]: any } {
    return {
      notifyType: 'number',
      startTime: 'number',
      endTime: 'number',
      silenceTime: 'number',
      webHook: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyHostAvailabilityRequestAlertConfigEscalationList extends $tea.Model {
  metricName: string;
  aggregate: string;
  times: number;
  operator: string;
  value: string;
  static names(): { [key: string]: string } {
    return {
      metricName: 'MetricName',
      aggregate: 'Aggregate',
      times: 'Times',
      operator: 'Operator',
      value: 'Value',
    };
  }

  static types(): { [key: string]: any } {
    return {
      metricName: 'string',
      aggregate: 'string',
      times: 'number',
      operator: 'string',
      value: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeUnhealthyHostAvailabilityResponseUnhealthyListNodeTaskInstanceInstanceList extends $tea.Model {
  string: string[];
  static names(): { [key: string]: string } {
    return {
      string: 'String',
    };
  }

  static types(): { [key: string]: any } {
    return {
      string: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeUnhealthyHostAvailabilityResponseUnhealthyListNodeTaskInstance extends $tea.Model {
  id: number;
  instanceList: DescribeUnhealthyHostAvailabilityResponseUnhealthyListNodeTaskInstanceInstanceList;
  static names(): { [key: string]: string } {
    return {
      id: 'Id',
      instanceList: 'InstanceList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      id: 'number',
      instanceList: DescribeUnhealthyHostAvailabilityResponseUnhealthyListNodeTaskInstanceInstanceList,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeUnhealthyHostAvailabilityResponseUnhealthyList extends $tea.Model {
  nodeTaskInstance: DescribeUnhealthyHostAvailabilityResponseUnhealthyListNodeTaskInstance[];
  static names(): { [key: string]: string } {
    return {
      nodeTaskInstance: 'NodeTaskInstance',
    };
  }

  static types(): { [key: string]: any } {
    return {
      nodeTaskInstance: { 'type': 'array', 'itemType': DescribeUnhealthyHostAvailabilityResponseUnhealthyListNodeTaskInstance },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateHostAvailabilityRequestTaskOption extends $tea.Model {
  httpURI?: string;
  telnetOrPingHost?: string;
  httpResponseCharset?: string;
  httpResponseMatchContent?: string;
  httpMethod?: string;
  httpNegative?: boolean;
  static names(): { [key: string]: string } {
    return {
      httpURI: 'HttpURI',
      telnetOrPingHost: 'TelnetOrPingHost',
      httpResponseCharset: 'HttpResponseCharset',
      httpResponseMatchContent: 'HttpResponseMatchContent',
      httpMethod: 'HttpMethod',
      httpNegative: 'HttpNegative',
    };
  }

  static types(): { [key: string]: any } {
    return {
      httpURI: 'string',
      telnetOrPingHost: 'string',
      httpResponseCharset: 'string',
      httpResponseMatchContent: 'string',
      httpMethod: 'string',
      httpNegative: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateHostAvailabilityRequestAlertConfig extends $tea.Model {
  notifyType: number;
  startTime?: number;
  endTime?: number;
  silenceTime?: number;
  webHook?: string;
  static names(): { [key: string]: string } {
    return {
      notifyType: 'NotifyType',
      startTime: 'StartTime',
      endTime: 'EndTime',
      silenceTime: 'SilenceTime',
      webHook: 'WebHook',
    };
  }

  static types(): { [key: string]: any } {
    return {
      notifyType: 'number',
      startTime: 'number',
      endTime: 'number',
      silenceTime: 'number',
      webHook: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateHostAvailabilityRequestAlertConfigEscalationList extends $tea.Model {
  metricName: string;
  aggregate: string;
  times: number;
  operator: string;
  value: string;
  static names(): { [key: string]: string } {
    return {
      metricName: 'MetricName',
      aggregate: 'Aggregate',
      times: 'Times',
      operator: 'Operator',
      value: 'Value',
    };
  }

  static types(): { [key: string]: any } {
    return {
      metricName: 'string',
      aggregate: 'string',
      times: 'number',
      operator: 'string',
      value: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeHostAvailabilityListResponseTaskListNodeTaskConfigTaskOption extends $tea.Model {
  httpURI: string;
  telnetOrPingHost: string;
  httpResponseCharset: string;
  httpKeyword: string;
  httpMethod: string;
  httpNegative: boolean;
  static names(): { [key: string]: string } {
    return {
      httpURI: 'HttpURI',
      telnetOrPingHost: 'TelnetOrPingHost',
      httpResponseCharset: 'HttpResponseCharset',
      httpKeyword: 'HttpKeyword',
      httpMethod: 'HttpMethod',
      httpNegative: 'HttpNegative',
    };
  }

  static types(): { [key: string]: any } {
    return {
      httpURI: 'string',
      telnetOrPingHost: 'string',
      httpResponseCharset: 'string',
      httpKeyword: 'string',
      httpMethod: 'string',
      httpNegative: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeHostAvailabilityListResponseTaskListNodeTaskConfigAlertConfigEscalationListEscalationList extends $tea.Model {
  metricName: string;
  aggregate: string;
  operator: string;
  value: string;
  times: string;
  static names(): { [key: string]: string } {
    return {
      metricName: 'MetricName',
      aggregate: 'Aggregate',
      operator: 'Operator',
      value: 'Value',
      times: 'Times',
    };
  }

  static types(): { [key: string]: any } {
    return {
      metricName: 'string',
      aggregate: 'string',
      operator: 'string',
      value: 'string',
      times: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeHostAvailabilityListResponseTaskListNodeTaskConfigAlertConfigEscalationList extends $tea.Model {
  escalationList: DescribeHostAvailabilityListResponseTaskListNodeTaskConfigAlertConfigEscalationListEscalationList[];
  static names(): { [key: string]: string } {
    return {
      escalationList: 'escalationList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      escalationList: { 'type': 'array', 'itemType': DescribeHostAvailabilityListResponseTaskListNodeTaskConfigAlertConfigEscalationListEscalationList },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeHostAvailabilityListResponseTaskListNodeTaskConfigAlertConfig extends $tea.Model {
  notifyType: number;
  startTime: number;
  endTime: number;
  silenceTime: number;
  webHook: string;
  escalationList: DescribeHostAvailabilityListResponseTaskListNodeTaskConfigAlertConfigEscalationList;
  static names(): { [key: string]: string } {
    return {
      notifyType: 'NotifyType',
      startTime: 'StartTime',
      endTime: 'EndTime',
      silenceTime: 'SilenceTime',
      webHook: 'WebHook',
      escalationList: 'EscalationList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      notifyType: 'number',
      startTime: 'number',
      endTime: 'number',
      silenceTime: 'number',
      webHook: 'string',
      escalationList: DescribeHostAvailabilityListResponseTaskListNodeTaskConfigAlertConfigEscalationList,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeHostAvailabilityListResponseTaskListNodeTaskConfigInstances extends $tea.Model {
  instance: string[];
  static names(): { [key: string]: string } {
    return {
      instance: 'Instance',
    };
  }

  static types(): { [key: string]: any } {
    return {
      instance: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeHostAvailabilityListResponseTaskListNodeTaskConfig extends $tea.Model {
  id: number;
  taskName: string;
  taskType: string;
  taskScope: string;
  disabled: boolean;
  groupId: number;
  groupName: string;
  taskOption: DescribeHostAvailabilityListResponseTaskListNodeTaskConfigTaskOption;
  alertConfig: DescribeHostAvailabilityListResponseTaskListNodeTaskConfigAlertConfig;
  instances: DescribeHostAvailabilityListResponseTaskListNodeTaskConfigInstances;
  static names(): { [key: string]: string } {
    return {
      id: 'Id',
      taskName: 'TaskName',
      taskType: 'TaskType',
      taskScope: 'TaskScope',
      disabled: 'Disabled',
      groupId: 'GroupId',
      groupName: 'GroupName',
      taskOption: 'TaskOption',
      alertConfig: 'AlertConfig',
      instances: 'Instances',
    };
  }

  static types(): { [key: string]: any } {
    return {
      id: 'number',
      taskName: 'string',
      taskType: 'string',
      taskScope: 'string',
      disabled: 'boolean',
      groupId: 'number',
      groupName: 'string',
      taskOption: DescribeHostAvailabilityListResponseTaskListNodeTaskConfigTaskOption,
      alertConfig: DescribeHostAvailabilityListResponseTaskListNodeTaskConfigAlertConfig,
      instances: DescribeHostAvailabilityListResponseTaskListNodeTaskConfigInstances,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeHostAvailabilityListResponseTaskList extends $tea.Model {
  nodeTaskConfig: DescribeHostAvailabilityListResponseTaskListNodeTaskConfig[];
  static names(): { [key: string]: string } {
    return {
      nodeTaskConfig: 'NodeTaskConfig',
    };
  }

  static types(): { [key: string]: any } {
    return {
      nodeTaskConfig: { 'type': 'array', 'itemType': DescribeHostAvailabilityListResponseTaskListNodeTaskConfig },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}


export default class Client extends RPC {

  constructor(config: $RPC.Config) {
    super(config);
    this._endpointRule = "";
    this.checkConfig(config);
    this._endpoint = this.getEndpoint("cms", this._regionId, this._endpointRule, this._network, this._suffix, this._endpointMap, this._endpoint);
  }


  async describeExporterOutputListWithOptions(request: DescribeExporterOutputListRequest, runtime: $Util.RuntimeOptions): Promise<DescribeExporterOutputListResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeExporterOutputListResponse>(await this.doRequest("DescribeExporterOutputList", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DescribeExporterOutputListResponse({}));
  }

  async describeExporterOutputList(request: DescribeExporterOutputListRequest): Promise<DescribeExporterOutputListResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeExporterOutputListWithOptions(request, runtime);
  }

  async deleteExporterOutputWithOptions(request: DeleteExporterOutputRequest, runtime: $Util.RuntimeOptions): Promise<DeleteExporterOutputResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteExporterOutputResponse>(await this.doRequest("DeleteExporterOutput", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DeleteExporterOutputResponse({}));
  }

  async deleteExporterOutput(request: DeleteExporterOutputRequest): Promise<DeleteExporterOutputResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteExporterOutputWithOptions(request, runtime);
  }

  async putExporterOutputWithOptions(request: PutExporterOutputRequest, runtime: $Util.RuntimeOptions): Promise<PutExporterOutputResponse> {
    Util.validateModel(request);
    return $tea.cast<PutExporterOutputResponse>(await this.doRequest("PutExporterOutput", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new PutExporterOutputResponse({}));
  }

  async putExporterOutput(request: PutExporterOutputRequest): Promise<PutExporterOutputResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.putExporterOutputWithOptions(request, runtime);
  }

  async describeFolderListWithOptions(request: DescribeFolderListRequest, runtime: $Util.RuntimeOptions): Promise<DescribeFolderListResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeFolderListResponse>(await this.doRequest("DescribeFolderList", "HTTPS", "GET", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DescribeFolderListResponse({}));
  }

  async describeFolderList(request: DescribeFolderListRequest): Promise<DescribeFolderListResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeFolderListWithOptions(request, runtime);
  }

  async deleteExporterRuleWithOptions(request: DeleteExporterRuleRequest, runtime: $Util.RuntimeOptions): Promise<DeleteExporterRuleResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteExporterRuleResponse>(await this.doRequest("DeleteExporterRule", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DeleteExporterRuleResponse({}));
  }

  async deleteExporterRule(request: DeleteExporterRuleRequest): Promise<DeleteExporterRuleResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteExporterRuleWithOptions(request, runtime);
  }

  async describeExporterRuleListWithOptions(request: DescribeExporterRuleListRequest, runtime: $Util.RuntimeOptions): Promise<DescribeExporterRuleListResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeExporterRuleListResponse>(await this.doRequest("DescribeExporterRuleList", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DescribeExporterRuleListResponse({}));
  }

  async describeExporterRuleList(request: DescribeExporterRuleListRequest): Promise<DescribeExporterRuleListResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeExporterRuleListWithOptions(request, runtime);
  }

  async putExporterRuleWithOptions(request: PutExporterRuleRequest, runtime: $Util.RuntimeOptions): Promise<PutExporterRuleResponse> {
    Util.validateModel(request);
    return $tea.cast<PutExporterRuleResponse>(await this.doRequest("PutExporterRule", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new PutExporterRuleResponse({}));
  }

  async putExporterRule(request: PutExporterRuleRequest): Promise<PutExporterRuleResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.putExporterRuleWithOptions(request, runtime);
  }

  async describeDynamicTagRuleListWithOptions(request: DescribeDynamicTagRuleListRequest, runtime: $Util.RuntimeOptions): Promise<DescribeDynamicTagRuleListResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeDynamicTagRuleListResponse>(await this.doRequest("DescribeDynamicTagRuleList", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DescribeDynamicTagRuleListResponse({}));
  }

  async describeDynamicTagRuleList(request: DescribeDynamicTagRuleListRequest): Promise<DescribeDynamicTagRuleListResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeDynamicTagRuleListWithOptions(request, runtime);
  }

  async describeProductResourceTagKeyListWithOptions(request: DescribeProductResourceTagKeyListRequest, runtime: $Util.RuntimeOptions): Promise<DescribeProductResourceTagKeyListResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeProductResourceTagKeyListResponse>(await this.doRequest("DescribeProductResourceTagKeyList", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DescribeProductResourceTagKeyListResponse({}));
  }

  async describeProductResourceTagKeyList(request: DescribeProductResourceTagKeyListRequest): Promise<DescribeProductResourceTagKeyListResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeProductResourceTagKeyListWithOptions(request, runtime);
  }

  async createDynamicTagGroupWithOptions(request: CreateDynamicTagGroupRequest, runtime: $Util.RuntimeOptions): Promise<CreateDynamicTagGroupResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateDynamicTagGroupResponse>(await this.doRequest("CreateDynamicTagGroup", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new CreateDynamicTagGroupResponse({}));
  }

  async createDynamicTagGroup(request: CreateDynamicTagGroupRequest): Promise<CreateDynamicTagGroupResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createDynamicTagGroupWithOptions(request, runtime);
  }

  async deleteDynamicTagGroupWithOptions(request: DeleteDynamicTagGroupRequest, runtime: $Util.RuntimeOptions): Promise<DeleteDynamicTagGroupResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteDynamicTagGroupResponse>(await this.doRequest("DeleteDynamicTagGroup", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DeleteDynamicTagGroupResponse({}));
  }

  async deleteDynamicTagGroup(request: DeleteDynamicTagGroupRequest): Promise<DeleteDynamicTagGroupResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteDynamicTagGroupWithOptions(request, runtime);
  }

  async modifyGroupMonitoringAgentProcessWithOptions(request: ModifyGroupMonitoringAgentProcessRequest, runtime: $Util.RuntimeOptions): Promise<ModifyGroupMonitoringAgentProcessResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyGroupMonitoringAgentProcessResponse>(await this.doRequest("ModifyGroupMonitoringAgentProcess", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new ModifyGroupMonitoringAgentProcessResponse({}));
  }

  async modifyGroupMonitoringAgentProcess(request: ModifyGroupMonitoringAgentProcessRequest): Promise<ModifyGroupMonitoringAgentProcessResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyGroupMonitoringAgentProcessWithOptions(request, runtime);
  }

  async deleteGroupMonitoringAgentProcessWithOptions(request: DeleteGroupMonitoringAgentProcessRequest, runtime: $Util.RuntimeOptions): Promise<DeleteGroupMonitoringAgentProcessResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteGroupMonitoringAgentProcessResponse>(await this.doRequest("DeleteGroupMonitoringAgentProcess", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DeleteGroupMonitoringAgentProcessResponse({}));
  }

  async deleteGroupMonitoringAgentProcess(request: DeleteGroupMonitoringAgentProcessRequest): Promise<DeleteGroupMonitoringAgentProcessResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteGroupMonitoringAgentProcessWithOptions(request, runtime);
  }

  async createGroupMonitoringAgentProcessWithOptions(request: CreateGroupMonitoringAgentProcessRequest, runtime: $Util.RuntimeOptions): Promise<CreateGroupMonitoringAgentProcessResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateGroupMonitoringAgentProcessResponse>(await this.doRequest("CreateGroupMonitoringAgentProcess", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new CreateGroupMonitoringAgentProcessResponse({}));
  }

  async createGroupMonitoringAgentProcess(request: CreateGroupMonitoringAgentProcessRequest): Promise<CreateGroupMonitoringAgentProcessResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createGroupMonitoringAgentProcessWithOptions(request, runtime);
  }

  async describeTagKeyListWithOptions(request: DescribeTagKeyListRequest, runtime: $Util.RuntimeOptions): Promise<DescribeTagKeyListResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeTagKeyListResponse>(await this.doRequest("DescribeTagKeyList", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DescribeTagKeyListResponse({}));
  }

  async describeTagKeyList(request: DescribeTagKeyListRequest): Promise<DescribeTagKeyListResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeTagKeyListWithOptions(request, runtime);
  }

  async describeTagValueListWithOptions(request: DescribeTagValueListRequest, runtime: $Util.RuntimeOptions): Promise<DescribeTagValueListResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeTagValueListResponse>(await this.doRequest("DescribeTagValueList", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DescribeTagValueListResponse({}));
  }

  async describeTagValueList(request: DescribeTagValueListRequest): Promise<DescribeTagValueListResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeTagValueListWithOptions(request, runtime);
  }

  async removeTagsWithOptions(request: RemoveTagsRequest, runtime: $Util.RuntimeOptions): Promise<RemoveTagsResponse> {
    Util.validateModel(request);
    return $tea.cast<RemoveTagsResponse>(await this.doRequest("RemoveTags", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new RemoveTagsResponse({}));
  }

  async removeTags(request: RemoveTagsRequest): Promise<RemoveTagsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.removeTagsWithOptions(request, runtime);
  }

  async addTagsWithOptions(request: AddTagsRequest, runtime: $Util.RuntimeOptions): Promise<AddTagsResponse> {
    Util.validateModel(request);
    return $tea.cast<AddTagsResponse>(await this.doRequest("AddTags", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new AddTagsResponse({}));
  }

  async addTags(request: AddTagsRequest): Promise<AddTagsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.addTagsWithOptions(request, runtime);
  }

  async describeGroupMonitoringAgentProcessWithOptions(request: DescribeGroupMonitoringAgentProcessRequest, runtime: $Util.RuntimeOptions): Promise<DescribeGroupMonitoringAgentProcessResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeGroupMonitoringAgentProcessResponse>(await this.doRequest("DescribeGroupMonitoringAgentProcess", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DescribeGroupMonitoringAgentProcessResponse({}));
  }

  async describeGroupMonitoringAgentProcess(request: DescribeGroupMonitoringAgentProcessRequest): Promise<DescribeGroupMonitoringAgentProcessResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeGroupMonitoringAgentProcessWithOptions(request, runtime);
  }

  async putResourceMetricRulesWithOptions(request: PutResourceMetricRulesRequest, runtime: $Util.RuntimeOptions): Promise<PutResourceMetricRulesResponse> {
    Util.validateModel(request);
    return $tea.cast<PutResourceMetricRulesResponse>(await this.doRequest("PutResourceMetricRules", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new PutResourceMetricRulesResponse({}));
  }

  async putResourceMetricRules(request: PutResourceMetricRulesRequest): Promise<PutResourceMetricRulesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.putResourceMetricRulesWithOptions(request, runtime);
  }

  async createMetricRuleResourcesWithOptions(request: CreateMetricRuleResourcesRequest, runtime: $Util.RuntimeOptions): Promise<CreateMetricRuleResourcesResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateMetricRuleResourcesResponse>(await this.doRequest("CreateMetricRuleResources", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new CreateMetricRuleResourcesResponse({}));
  }

  async createMetricRuleResources(request: CreateMetricRuleResourcesRequest): Promise<CreateMetricRuleResourcesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createMetricRuleResourcesWithOptions(request, runtime);
  }

  async deleteMetricRuleResourcesWithOptions(request: DeleteMetricRuleResourcesRequest, runtime: $Util.RuntimeOptions): Promise<DeleteMetricRuleResourcesResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteMetricRuleResourcesResponse>(await this.doRequest("DeleteMetricRuleResources", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DeleteMetricRuleResourcesResponse({}));
  }

  async deleteMetricRuleResources(request: DeleteMetricRuleResourcesRequest): Promise<DeleteMetricRuleResourcesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteMetricRuleResourcesWithOptions(request, runtime);
  }

  async deleteMetricRuleTargetsWithOptions(request: DeleteMetricRuleTargetsRequest, runtime: $Util.RuntimeOptions): Promise<DeleteMetricRuleTargetsResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteMetricRuleTargetsResponse>(await this.doRequest("DeleteMetricRuleTargets", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DeleteMetricRuleTargetsResponse({}));
  }

  async deleteMetricRuleTargets(request: DeleteMetricRuleTargetsRequest): Promise<DeleteMetricRuleTargetsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteMetricRuleTargetsWithOptions(request, runtime);
  }

  async putMetricRuleTargetsWithOptions(request: PutMetricRuleTargetsRequest, runtime: $Util.RuntimeOptions): Promise<PutMetricRuleTargetsResponse> {
    Util.validateModel(request);
    return $tea.cast<PutMetricRuleTargetsResponse>(await this.doRequest("PutMetricRuleTargets", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new PutMetricRuleTargetsResponse({}));
  }

  async putMetricRuleTargets(request: PutMetricRuleTargetsRequest): Promise<PutMetricRuleTargetsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.putMetricRuleTargetsWithOptions(request, runtime);
  }

  async describeMetricRuleTargetsWithOptions(request: DescribeMetricRuleTargetsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeMetricRuleTargetsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeMetricRuleTargetsResponse>(await this.doRequest("DescribeMetricRuleTargets", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DescribeMetricRuleTargetsResponse({}));
  }

  async describeMetricRuleTargets(request: DescribeMetricRuleTargetsRequest): Promise<DescribeMetricRuleTargetsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeMetricRuleTargetsWithOptions(request, runtime);
  }

  async modifyMonitorGroupInstancesWithOptions(request: ModifyMonitorGroupInstancesRequest, runtime: $Util.RuntimeOptions): Promise<ModifyMonitorGroupInstancesResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyMonitorGroupInstancesResponse>(await this.doRequest("ModifyMonitorGroupInstances", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new ModifyMonitorGroupInstancesResponse({}));
  }

  async modifyMonitorGroupInstances(request: ModifyMonitorGroupInstancesRequest): Promise<ModifyMonitorGroupInstancesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyMonitorGroupInstancesWithOptions(request, runtime);
  }

  async describeMonitoringAgentStatusesWithOptions(request: DescribeMonitoringAgentStatusesRequest, runtime: $Util.RuntimeOptions): Promise<DescribeMonitoringAgentStatusesResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeMonitoringAgentStatusesResponse>(await this.doRequest("DescribeMonitoringAgentStatuses", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DescribeMonitoringAgentStatusesResponse({}));
  }

  async describeMonitoringAgentStatuses(request: DescribeMonitoringAgentStatusesRequest): Promise<DescribeMonitoringAgentStatusesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeMonitoringAgentStatusesWithOptions(request, runtime);
  }

  async createMonitorAgentProcessWithOptions(request: CreateMonitorAgentProcessRequest, runtime: $Util.RuntimeOptions): Promise<CreateMonitorAgentProcessResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateMonitorAgentProcessResponse>(await this.doRequest("CreateMonitorAgentProcess", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new CreateMonitorAgentProcessResponse({}));
  }

  async createMonitorAgentProcess(request: CreateMonitorAgentProcessRequest): Promise<CreateMonitorAgentProcessResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createMonitorAgentProcessWithOptions(request, runtime);
  }

  async describeAlertHistoryListWithOptions(request: DescribeAlertHistoryListRequest, runtime: $Util.RuntimeOptions): Promise<DescribeAlertHistoryListResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeAlertHistoryListResponse>(await this.doRequest("DescribeAlertHistoryList", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DescribeAlertHistoryListResponse({}));
  }

  async describeAlertHistoryList(request: DescribeAlertHistoryListRequest): Promise<DescribeAlertHistoryListResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeAlertHistoryListWithOptions(request, runtime);
  }

  async describeAlertingMetricRuleResourcesWithOptions(request: DescribeAlertingMetricRuleResourcesRequest, runtime: $Util.RuntimeOptions): Promise<DescribeAlertingMetricRuleResourcesResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeAlertingMetricRuleResourcesResponse>(await this.doRequest("DescribeAlertingMetricRuleResources", "HTTPS", "GET", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DescribeAlertingMetricRuleResourcesResponse({}));
  }

  async describeAlertingMetricRuleResources(request: DescribeAlertingMetricRuleResourcesRequest): Promise<DescribeAlertingMetricRuleResourcesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeAlertingMetricRuleResourcesWithOptions(request, runtime);
  }

  async disableActiveMetricRuleWithOptions(request: DisableActiveMetricRuleRequest, runtime: $Util.RuntimeOptions): Promise<DisableActiveMetricRuleResponse> {
    Util.validateModel(request);
    return $tea.cast<DisableActiveMetricRuleResponse>(await this.doRequest("DisableActiveMetricRule", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DisableActiveMetricRuleResponse({}));
  }

  async disableActiveMetricRule(request: DisableActiveMetricRuleRequest): Promise<DisableActiveMetricRuleResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.disableActiveMetricRuleWithOptions(request, runtime);
  }

  async describeActiveMetricRuleListWithOptions(request: DescribeActiveMetricRuleListRequest, runtime: $Util.RuntimeOptions): Promise<DescribeActiveMetricRuleListResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeActiveMetricRuleListResponse>(await this.doRequest("DescribeActiveMetricRuleList", "HTTPS", "GET", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DescribeActiveMetricRuleListResponse({}));
  }

  async describeActiveMetricRuleList(request: DescribeActiveMetricRuleListRequest): Promise<DescribeActiveMetricRuleListResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeActiveMetricRuleListWithOptions(request, runtime);
  }

  async describeProductsOfActiveMetricRuleWithOptions(request: DescribeProductsOfActiveMetricRuleRequest, runtime: $Util.RuntimeOptions): Promise<DescribeProductsOfActiveMetricRuleResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeProductsOfActiveMetricRuleResponse>(await this.doRequest("DescribeProductsOfActiveMetricRule", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DescribeProductsOfActiveMetricRuleResponse({}));
  }

  async describeProductsOfActiveMetricRule(request: DescribeProductsOfActiveMetricRuleRequest): Promise<DescribeProductsOfActiveMetricRuleResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeProductsOfActiveMetricRuleWithOptions(request, runtime);
  }

  async enableActiveMetricRuleWithOptions(request: EnableActiveMetricRuleRequest, runtime: $Util.RuntimeOptions): Promise<EnableActiveMetricRuleResponse> {
    Util.validateModel(request);
    return $tea.cast<EnableActiveMetricRuleResponse>(await this.doRequest("EnableActiveMetricRule", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new EnableActiveMetricRuleResponse({}));
  }

  async enableActiveMetricRule(request: EnableActiveMetricRuleRequest): Promise<EnableActiveMetricRuleResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.enableActiveMetricRuleWithOptions(request, runtime);
  }

  async describeMonitorGroupInstanceAttributeWithOptions(request: DescribeMonitorGroupInstanceAttributeRequest, runtime: $Util.RuntimeOptions): Promise<DescribeMonitorGroupInstanceAttributeResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeMonitorGroupInstanceAttributeResponse>(await this.doRequest("DescribeMonitorGroupInstanceAttribute", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DescribeMonitorGroupInstanceAttributeResponse({}));
  }

  async describeMonitorGroupInstanceAttribute(request: DescribeMonitorGroupInstanceAttributeRequest): Promise<DescribeMonitorGroupInstanceAttributeResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeMonitorGroupInstanceAttributeWithOptions(request, runtime);
  }

  async describeMonitorGroupNotifyPolicyListWithOptions(request: DescribeMonitorGroupNotifyPolicyListRequest, runtime: $Util.RuntimeOptions): Promise<DescribeMonitorGroupNotifyPolicyListResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeMonitorGroupNotifyPolicyListResponse>(await this.doRequest("DescribeMonitorGroupNotifyPolicyList", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DescribeMonitorGroupNotifyPolicyListResponse({}));
  }

  async describeMonitorGroupNotifyPolicyList(request: DescribeMonitorGroupNotifyPolicyListRequest): Promise<DescribeMonitorGroupNotifyPolicyListResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeMonitorGroupNotifyPolicyListWithOptions(request, runtime);
  }

  async deleteMonitorGroupWithOptions(request: DeleteMonitorGroupRequest, runtime: $Util.RuntimeOptions): Promise<DeleteMonitorGroupResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteMonitorGroupResponse>(await this.doRequest("DeleteMonitorGroup", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DeleteMonitorGroupResponse({}));
  }

  async deleteMonitorGroup(request: DeleteMonitorGroupRequest): Promise<DeleteMonitorGroupResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteMonitorGroupWithOptions(request, runtime);
  }

  async createMonitorGroupWithOptions(request: CreateMonitorGroupRequest, runtime: $Util.RuntimeOptions): Promise<CreateMonitorGroupResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateMonitorGroupResponse>(await this.doRequest("CreateMonitorGroup", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new CreateMonitorGroupResponse({}));
  }

  async createMonitorGroup(request: CreateMonitorGroupRequest): Promise<CreateMonitorGroupResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createMonitorGroupWithOptions(request, runtime);
  }

  async describeMonitorGroupsWithOptions(request: DescribeMonitorGroupsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeMonitorGroupsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeMonitorGroupsResponse>(await this.doRequest("DescribeMonitorGroups", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DescribeMonitorGroupsResponse({}));
  }

  async describeMonitorGroups(request: DescribeMonitorGroupsRequest): Promise<DescribeMonitorGroupsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeMonitorGroupsWithOptions(request, runtime);
  }

  async deleteMonitorGroupNotifyPolicyWithOptions(request: DeleteMonitorGroupNotifyPolicyRequest, runtime: $Util.RuntimeOptions): Promise<DeleteMonitorGroupNotifyPolicyResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteMonitorGroupNotifyPolicyResponse>(await this.doRequest("DeleteMonitorGroupNotifyPolicy", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DeleteMonitorGroupNotifyPolicyResponse({}));
  }

  async deleteMonitorGroupNotifyPolicy(request: DeleteMonitorGroupNotifyPolicyRequest): Promise<DeleteMonitorGroupNotifyPolicyResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteMonitorGroupNotifyPolicyWithOptions(request, runtime);
  }

  async describeMonitorGroupDynamicRulesWithOptions(request: DescribeMonitorGroupDynamicRulesRequest, runtime: $Util.RuntimeOptions): Promise<DescribeMonitorGroupDynamicRulesResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeMonitorGroupDynamicRulesResponse>(await this.doRequest("DescribeMonitorGroupDynamicRules", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DescribeMonitorGroupDynamicRulesResponse({}));
  }

  async describeMonitorGroupDynamicRules(request: DescribeMonitorGroupDynamicRulesRequest): Promise<DescribeMonitorGroupDynamicRulesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeMonitorGroupDynamicRulesWithOptions(request, runtime);
  }

  async createMonitorGroupInstancesWithOptions(request: CreateMonitorGroupInstancesRequest, runtime: $Util.RuntimeOptions): Promise<CreateMonitorGroupInstancesResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateMonitorGroupInstancesResponse>(await this.doRequest("CreateMonitorGroupInstances", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new CreateMonitorGroupInstancesResponse({}));
  }

  async createMonitorGroupInstances(request: CreateMonitorGroupInstancesRequest): Promise<CreateMonitorGroupInstancesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createMonitorGroupInstancesWithOptions(request, runtime);
  }

  async createMonitorGroupNotifyPolicyWithOptions(request: CreateMonitorGroupNotifyPolicyRequest, runtime: $Util.RuntimeOptions): Promise<CreateMonitorGroupNotifyPolicyResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateMonitorGroupNotifyPolicyResponse>(await this.doRequest("CreateMonitorGroupNotifyPolicy", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new CreateMonitorGroupNotifyPolicyResponse({}));
  }

  async createMonitorGroupNotifyPolicy(request: CreateMonitorGroupNotifyPolicyRequest): Promise<CreateMonitorGroupNotifyPolicyResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createMonitorGroupNotifyPolicyWithOptions(request, runtime);
  }

  async deleteMonitorGroupInstancesWithOptions(request: DeleteMonitorGroupInstancesRequest, runtime: $Util.RuntimeOptions): Promise<DeleteMonitorGroupInstancesResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteMonitorGroupInstancesResponse>(await this.doRequest("DeleteMonitorGroupInstances", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DeleteMonitorGroupInstancesResponse({}));
  }

  async deleteMonitorGroupInstances(request: DeleteMonitorGroupInstancesRequest): Promise<DeleteMonitorGroupInstancesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteMonitorGroupInstancesWithOptions(request, runtime);
  }

  async deleteMonitorGroupDynamicRuleWithOptions(request: DeleteMonitorGroupDynamicRuleRequest, runtime: $Util.RuntimeOptions): Promise<DeleteMonitorGroupDynamicRuleResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteMonitorGroupDynamicRuleResponse>(await this.doRequest("DeleteMonitorGroupDynamicRule", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DeleteMonitorGroupDynamicRuleResponse({}));
  }

  async deleteMonitorGroupDynamicRule(request: DeleteMonitorGroupDynamicRuleRequest): Promise<DeleteMonitorGroupDynamicRuleResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteMonitorGroupDynamicRuleWithOptions(request, runtime);
  }

  async putMonitorGroupDynamicRuleWithOptions(request: PutMonitorGroupDynamicRuleRequest, runtime: $Util.RuntimeOptions): Promise<PutMonitorGroupDynamicRuleResponse> {
    Util.validateModel(request);
    return $tea.cast<PutMonitorGroupDynamicRuleResponse>(await this.doRequest("PutMonitorGroupDynamicRule", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new PutMonitorGroupDynamicRuleResponse({}));
  }

  async putMonitorGroupDynamicRule(request: PutMonitorGroupDynamicRuleRequest): Promise<PutMonitorGroupDynamicRuleResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.putMonitorGroupDynamicRuleWithOptions(request, runtime);
  }

  async describeMonitorGroupInstancesWithOptions(request: DescribeMonitorGroupInstancesRequest, runtime: $Util.RuntimeOptions): Promise<DescribeMonitorGroupInstancesResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeMonitorGroupInstancesResponse>(await this.doRequest("DescribeMonitorGroupInstances", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DescribeMonitorGroupInstancesResponse({}));
  }

  async describeMonitorGroupInstances(request: DescribeMonitorGroupInstancesRequest): Promise<DescribeMonitorGroupInstancesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeMonitorGroupInstancesWithOptions(request, runtime);
  }

  async describeMonitorGroupCategoriesWithOptions(request: DescribeMonitorGroupCategoriesRequest, runtime: $Util.RuntimeOptions): Promise<DescribeMonitorGroupCategoriesResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeMonitorGroupCategoriesResponse>(await this.doRequest("DescribeMonitorGroupCategories", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DescribeMonitorGroupCategoriesResponse({}));
  }

  async describeMonitorGroupCategories(request: DescribeMonitorGroupCategoriesRequest): Promise<DescribeMonitorGroupCategoriesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeMonitorGroupCategoriesWithOptions(request, runtime);
  }

  async modifyMonitorGroupWithOptions(request: ModifyMonitorGroupRequest, runtime: $Util.RuntimeOptions): Promise<ModifyMonitorGroupResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyMonitorGroupResponse>(await this.doRequest("ModifyMonitorGroup", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new ModifyMonitorGroupResponse({}));
  }

  async modifyMonitorGroup(request: ModifyMonitorGroupRequest): Promise<ModifyMonitorGroupResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyMonitorGroupWithOptions(request, runtime);
  }

  async describeMetricRuleListWithOptions(request: DescribeMetricRuleListRequest, runtime: $Util.RuntimeOptions): Promise<DescribeMetricRuleListResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeMetricRuleListResponse>(await this.doRequest("DescribeMetricRuleList", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DescribeMetricRuleListResponse({}));
  }

  async describeMetricRuleList(request: DescribeMetricRuleListRequest): Promise<DescribeMetricRuleListResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeMetricRuleListWithOptions(request, runtime);
  }

  async putResourceMetricRuleWithOptions(request: PutResourceMetricRuleRequest, runtime: $Util.RuntimeOptions): Promise<PutResourceMetricRuleResponse> {
    Util.validateModel(request);
    return $tea.cast<PutResourceMetricRuleResponse>(await this.doRequest("PutResourceMetricRule", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new PutResourceMetricRuleResponse({}));
  }

  async putResourceMetricRule(request: PutResourceMetricRuleRequest): Promise<PutResourceMetricRuleResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.putResourceMetricRuleWithOptions(request, runtime);
  }

  async putGroupMetricRuleWithOptions(request: PutGroupMetricRuleRequest, runtime: $Util.RuntimeOptions): Promise<PutGroupMetricRuleResponse> {
    Util.validateModel(request);
    return $tea.cast<PutGroupMetricRuleResponse>(await this.doRequest("PutGroupMetricRule", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new PutGroupMetricRuleResponse({}));
  }

  async putGroupMetricRule(request: PutGroupMetricRuleRequest): Promise<PutGroupMetricRuleResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.putGroupMetricRuleWithOptions(request, runtime);
  }

  async enableMetricRulesWithOptions(request: EnableMetricRulesRequest, runtime: $Util.RuntimeOptions): Promise<EnableMetricRulesResponse> {
    Util.validateModel(request);
    return $tea.cast<EnableMetricRulesResponse>(await this.doRequest("EnableMetricRules", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new EnableMetricRulesResponse({}));
  }

  async enableMetricRules(request: EnableMetricRulesRequest): Promise<EnableMetricRulesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.enableMetricRulesWithOptions(request, runtime);
  }

  async describeMetricRuleCountWithOptions(request: DescribeMetricRuleCountRequest, runtime: $Util.RuntimeOptions): Promise<DescribeMetricRuleCountResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeMetricRuleCountResponse>(await this.doRequest("DescribeMetricRuleCount", "HTTPS", "GET", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DescribeMetricRuleCountResponse({}));
  }

  async describeMetricRuleCount(request: DescribeMetricRuleCountRequest): Promise<DescribeMetricRuleCountResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeMetricRuleCountWithOptions(request, runtime);
  }

  async createGroupMetricRulesWithOptions(request: CreateGroupMetricRulesRequest, runtime: $Util.RuntimeOptions): Promise<CreateGroupMetricRulesResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateGroupMetricRulesResponse>(await this.doRequest("CreateGroupMetricRules", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new CreateGroupMetricRulesResponse({}));
  }

  async createGroupMetricRules(request: CreateGroupMetricRulesRequest): Promise<CreateGroupMetricRulesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createGroupMetricRulesWithOptions(request, runtime);
  }

  async disableMetricRulesWithOptions(request: DisableMetricRulesRequest, runtime: $Util.RuntimeOptions): Promise<DisableMetricRulesResponse> {
    Util.validateModel(request);
    return $tea.cast<DisableMetricRulesResponse>(await this.doRequest("DisableMetricRules", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DisableMetricRulesResponse({}));
  }

  async disableMetricRules(request: DisableMetricRulesRequest): Promise<DisableMetricRulesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.disableMetricRulesWithOptions(request, runtime);
  }

  async deleteMetricRulesWithOptions(request: DeleteMetricRulesRequest, runtime: $Util.RuntimeOptions): Promise<DeleteMetricRulesResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteMetricRulesResponse>(await this.doRequest("DeleteMetricRules", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DeleteMetricRulesResponse({}));
  }

  async deleteMetricRules(request: DeleteMetricRulesRequest): Promise<DeleteMetricRulesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteMetricRulesWithOptions(request, runtime);
  }

  async modifyMetricRuleTemplateWithOptions(request: ModifyMetricRuleTemplateRequest, runtime: $Util.RuntimeOptions): Promise<ModifyMetricRuleTemplateResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyMetricRuleTemplateResponse>(await this.doRequest("ModifyMetricRuleTemplate", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new ModifyMetricRuleTemplateResponse({}));
  }

  async modifyMetricRuleTemplate(request: ModifyMetricRuleTemplateRequest): Promise<ModifyMetricRuleTemplateResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyMetricRuleTemplateWithOptions(request, runtime);
  }

  async applyMetricRuleTemplateWithOptions(request: ApplyMetricRuleTemplateRequest, runtime: $Util.RuntimeOptions): Promise<ApplyMetricRuleTemplateResponse> {
    Util.validateModel(request);
    return $tea.cast<ApplyMetricRuleTemplateResponse>(await this.doRequest("ApplyMetricRuleTemplate", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new ApplyMetricRuleTemplateResponse({}));
  }

  async applyMetricRuleTemplate(request: ApplyMetricRuleTemplateRequest): Promise<ApplyMetricRuleTemplateResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.applyMetricRuleTemplateWithOptions(request, runtime);
  }

  async describeMetricRuleTemplateAttributeWithOptions(request: DescribeMetricRuleTemplateAttributeRequest, runtime: $Util.RuntimeOptions): Promise<DescribeMetricRuleTemplateAttributeResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeMetricRuleTemplateAttributeResponse>(await this.doRequest("DescribeMetricRuleTemplateAttribute", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DescribeMetricRuleTemplateAttributeResponse({}));
  }

  async describeMetricRuleTemplateAttribute(request: DescribeMetricRuleTemplateAttributeRequest): Promise<DescribeMetricRuleTemplateAttributeResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeMetricRuleTemplateAttributeWithOptions(request, runtime);
  }

  async createMetricRuleTemplateWithOptions(request: CreateMetricRuleTemplateRequest, runtime: $Util.RuntimeOptions): Promise<CreateMetricRuleTemplateResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateMetricRuleTemplateResponse>(await this.doRequest("CreateMetricRuleTemplate", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new CreateMetricRuleTemplateResponse({}));
  }

  async createMetricRuleTemplate(request: CreateMetricRuleTemplateRequest): Promise<CreateMetricRuleTemplateResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createMetricRuleTemplateWithOptions(request, runtime);
  }

  async deleteMetricRuleTemplateWithOptions(request: DeleteMetricRuleTemplateRequest, runtime: $Util.RuntimeOptions): Promise<DeleteMetricRuleTemplateResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteMetricRuleTemplateResponse>(await this.doRequest("DeleteMetricRuleTemplate", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DeleteMetricRuleTemplateResponse({}));
  }

  async deleteMetricRuleTemplate(request: DeleteMetricRuleTemplateRequest): Promise<DeleteMetricRuleTemplateResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteMetricRuleTemplateWithOptions(request, runtime);
  }

  async describeMetricRuleTemplateListWithOptions(request: DescribeMetricRuleTemplateListRequest, runtime: $Util.RuntimeOptions): Promise<DescribeMetricRuleTemplateListResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeMetricRuleTemplateListResponse>(await this.doRequest("DescribeMetricRuleTemplateList", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DescribeMetricRuleTemplateListResponse({}));
  }

  async describeMetricRuleTemplateList(request: DescribeMetricRuleTemplateListRequest): Promise<DescribeMetricRuleTemplateListResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeMetricRuleTemplateListWithOptions(request, runtime);
  }

  async putCustomEventWithOptions(request: PutCustomEventRequest, runtime: $Util.RuntimeOptions): Promise<PutCustomEventResponse> {
    Util.validateModel(request);
    return $tea.cast<PutCustomEventResponse>(await this.doRequest("PutCustomEvent", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new PutCustomEventResponse({}));
  }

  async putCustomEvent(request: PutCustomEventRequest): Promise<PutCustomEventResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.putCustomEventWithOptions(request, runtime);
  }

  async describeCustomEventCountWithOptions(request: DescribeCustomEventCountRequest, runtime: $Util.RuntimeOptions): Promise<DescribeCustomEventCountResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeCustomEventCountResponse>(await this.doRequest("DescribeCustomEventCount", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DescribeCustomEventCountResponse({}));
  }

  async describeCustomEventCount(request: DescribeCustomEventCountRequest): Promise<DescribeCustomEventCountResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeCustomEventCountWithOptions(request, runtime);
  }

  async describeCustomEventAttributeWithOptions(request: DescribeCustomEventAttributeRequest, runtime: $Util.RuntimeOptions): Promise<DescribeCustomEventAttributeResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeCustomEventAttributeResponse>(await this.doRequest("DescribeCustomEventAttribute", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DescribeCustomEventAttributeResponse({}));
  }

  async describeCustomEventAttribute(request: DescribeCustomEventAttributeRequest): Promise<DescribeCustomEventAttributeResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeCustomEventAttributeWithOptions(request, runtime);
  }

  async describeCustomEventHistogramWithOptions(request: DescribeCustomEventHistogramRequest, runtime: $Util.RuntimeOptions): Promise<DescribeCustomEventHistogramResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeCustomEventHistogramResponse>(await this.doRequest("DescribeCustomEventHistogram", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DescribeCustomEventHistogramResponse({}));
  }

  async describeCustomEventHistogram(request: DescribeCustomEventHistogramRequest): Promise<DescribeCustomEventHistogramResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeCustomEventHistogramWithOptions(request, runtime);
  }

  async deleteCustomMetricWithOptions(request: DeleteCustomMetricRequest, runtime: $Util.RuntimeOptions): Promise<DeleteCustomMetricResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteCustomMetricResponse>(await this.doRequest("DeleteCustomMetric", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DeleteCustomMetricResponse({}));
  }

  async deleteCustomMetric(request: DeleteCustomMetricRequest): Promise<DeleteCustomMetricResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteCustomMetricWithOptions(request, runtime);
  }

  async describeCustomMetricListWithOptions(request: DescribeCustomMetricListRequest, runtime: $Util.RuntimeOptions): Promise<DescribeCustomMetricListResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeCustomMetricListResponse>(await this.doRequest("DescribeCustomMetricList", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DescribeCustomMetricListResponse({}));
  }

  async describeCustomMetricList(request: DescribeCustomMetricListRequest): Promise<DescribeCustomMetricListResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeCustomMetricListWithOptions(request, runtime);
  }

  async putCustomMetricWithOptions(request: PutCustomMetricRequest, runtime: $Util.RuntimeOptions): Promise<PutCustomMetricResponse> {
    Util.validateModel(request);
    return $tea.cast<PutCustomMetricResponse>(await this.doRequest("PutCustomMetric", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new PutCustomMetricResponse({}));
  }

  async putCustomMetric(request: PutCustomMetricRequest): Promise<PutCustomMetricResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.putCustomMetricWithOptions(request, runtime);
  }

  async describeEventRuleAttributeWithOptions(request: DescribeEventRuleAttributeRequest, runtime: $Util.RuntimeOptions): Promise<DescribeEventRuleAttributeResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeEventRuleAttributeResponse>(await this.doRequest("DescribeEventRuleAttribute", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DescribeEventRuleAttributeResponse({}));
  }

  async describeEventRuleAttribute(request: DescribeEventRuleAttributeRequest): Promise<DescribeEventRuleAttributeResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeEventRuleAttributeWithOptions(request, runtime);
  }

  async deleteContactGroupWithOptions(request: DeleteContactGroupRequest, runtime: $Util.RuntimeOptions): Promise<DeleteContactGroupResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteContactGroupResponse>(await this.doRequest("DeleteContactGroup", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DeleteContactGroupResponse({}));
  }

  async deleteContactGroup(request: DeleteContactGroupRequest): Promise<DeleteContactGroupResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteContactGroupWithOptions(request, runtime);
  }

  async describeContactListWithOptions(request: DescribeContactListRequest, runtime: $Util.RuntimeOptions): Promise<DescribeContactListResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeContactListResponse>(await this.doRequest("DescribeContactList", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DescribeContactListResponse({}));
  }

  async describeContactList(request: DescribeContactListRequest): Promise<DescribeContactListResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeContactListWithOptions(request, runtime);
  }

  async describeContactListByContactGroupWithOptions(request: DescribeContactListByContactGroupRequest, runtime: $Util.RuntimeOptions): Promise<DescribeContactListByContactGroupResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeContactListByContactGroupResponse>(await this.doRequest("DescribeContactListByContactGroup", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DescribeContactListByContactGroupResponse({}));
  }

  async describeContactListByContactGroup(request: DescribeContactListByContactGroupRequest): Promise<DescribeContactListByContactGroupResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeContactListByContactGroupWithOptions(request, runtime);
  }

  async deleteContactWithOptions(request: DeleteContactRequest, runtime: $Util.RuntimeOptions): Promise<DeleteContactResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteContactResponse>(await this.doRequest("DeleteContact", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DeleteContactResponse({}));
  }

  async deleteContact(request: DeleteContactRequest): Promise<DeleteContactResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteContactWithOptions(request, runtime);
  }

  async putContactGroupWithOptions(request: PutContactGroupRequest, runtime: $Util.RuntimeOptions): Promise<PutContactGroupResponse> {
    Util.validateModel(request);
    return $tea.cast<PutContactGroupResponse>(await this.doRequest("PutContactGroup", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new PutContactGroupResponse({}));
  }

  async putContactGroup(request: PutContactGroupRequest): Promise<PutContactGroupResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.putContactGroupWithOptions(request, runtime);
  }

  async putContactWithOptions(request: PutContactRequest, runtime: $Util.RuntimeOptions): Promise<PutContactResponse> {
    Util.validateModel(request);
    return $tea.cast<PutContactResponse>(await this.doRequest("PutContact", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new PutContactResponse({}));
  }

  async putContact(request: PutContactRequest): Promise<PutContactResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.putContactWithOptions(request, runtime);
  }

  async describeContactGroupListWithOptions(request: DescribeContactGroupListRequest, runtime: $Util.RuntimeOptions): Promise<DescribeContactGroupListResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeContactGroupListResponse>(await this.doRequest("DescribeContactGroupList", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DescribeContactGroupListResponse({}));
  }

  async describeContactGroupList(request: DescribeContactGroupListRequest): Promise<DescribeContactGroupListResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeContactGroupListWithOptions(request, runtime);
  }

  async putEventRuleTargetsWithOptions(request: PutEventRuleTargetsRequest, runtime: $Util.RuntimeOptions): Promise<PutEventRuleTargetsResponse> {
    Util.validateModel(request);
    return $tea.cast<PutEventRuleTargetsResponse>(await this.doRequest("PutEventRuleTargets", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new PutEventRuleTargetsResponse({}));
  }

  async putEventRuleTargets(request: PutEventRuleTargetsRequest): Promise<PutEventRuleTargetsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.putEventRuleTargetsWithOptions(request, runtime);
  }

  async deleteEventRuleTargetsWithOptions(request: DeleteEventRuleTargetsRequest, runtime: $Util.RuntimeOptions): Promise<DeleteEventRuleTargetsResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteEventRuleTargetsResponse>(await this.doRequest("DeleteEventRuleTargets", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DeleteEventRuleTargetsResponse({}));
  }

  async deleteEventRuleTargets(request: DeleteEventRuleTargetsRequest): Promise<DeleteEventRuleTargetsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteEventRuleTargetsWithOptions(request, runtime);
  }

  async disableEventRulesWithOptions(request: DisableEventRulesRequest, runtime: $Util.RuntimeOptions): Promise<DisableEventRulesResponse> {
    Util.validateModel(request);
    return $tea.cast<DisableEventRulesResponse>(await this.doRequest("DisableEventRules", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DisableEventRulesResponse({}));
  }

  async disableEventRules(request: DisableEventRulesRequest): Promise<DisableEventRulesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.disableEventRulesWithOptions(request, runtime);
  }

  async describeEventRuleTargetListWithOptions(request: DescribeEventRuleTargetListRequest, runtime: $Util.RuntimeOptions): Promise<DescribeEventRuleTargetListResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeEventRuleTargetListResponse>(await this.doRequest("DescribeEventRuleTargetList", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DescribeEventRuleTargetListResponse({}));
  }

  async describeEventRuleTargetList(request: DescribeEventRuleTargetListRequest): Promise<DescribeEventRuleTargetListResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeEventRuleTargetListWithOptions(request, runtime);
  }

  async deleteEventRulesWithOptions(request: DeleteEventRulesRequest, runtime: $Util.RuntimeOptions): Promise<DeleteEventRulesResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteEventRulesResponse>(await this.doRequest("DeleteEventRules", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DeleteEventRulesResponse({}));
  }

  async deleteEventRules(request: DeleteEventRulesRequest): Promise<DeleteEventRulesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteEventRulesWithOptions(request, runtime);
  }

  async enableEventRulesWithOptions(request: EnableEventRulesRequest, runtime: $Util.RuntimeOptions): Promise<EnableEventRulesResponse> {
    Util.validateModel(request);
    return $tea.cast<EnableEventRulesResponse>(await this.doRequest("EnableEventRules", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new EnableEventRulesResponse({}));
  }

  async enableEventRules(request: EnableEventRulesRequest): Promise<EnableEventRulesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.enableEventRulesWithOptions(request, runtime);
  }

  async putEventRuleWithOptions(request: PutEventRuleRequest, runtime: $Util.RuntimeOptions): Promise<PutEventRuleResponse> {
    Util.validateModel(request);
    return $tea.cast<PutEventRuleResponse>(await this.doRequest("PutEventRule", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new PutEventRuleResponse({}));
  }

  async putEventRule(request: PutEventRuleRequest): Promise<PutEventRuleResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.putEventRuleWithOptions(request, runtime);
  }

  async describeEventRuleListWithOptions(request: DescribeEventRuleListRequest, runtime: $Util.RuntimeOptions): Promise<DescribeEventRuleListResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeEventRuleListResponse>(await this.doRequest("DescribeEventRuleList", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DescribeEventRuleListResponse({}));
  }

  async describeEventRuleList(request: DescribeEventRuleListRequest): Promise<DescribeEventRuleListResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeEventRuleListWithOptions(request, runtime);
  }

  async describeSystemEventAttributeWithOptions(request: DescribeSystemEventAttributeRequest, runtime: $Util.RuntimeOptions): Promise<DescribeSystemEventAttributeResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeSystemEventAttributeResponse>(await this.doRequest("DescribeSystemEventAttribute", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DescribeSystemEventAttributeResponse({}));
  }

  async describeSystemEventAttribute(request: DescribeSystemEventAttributeRequest): Promise<DescribeSystemEventAttributeResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeSystemEventAttributeWithOptions(request, runtime);
  }

  async describeSystemEventHistogramWithOptions(request: DescribeSystemEventHistogramRequest, runtime: $Util.RuntimeOptions): Promise<DescribeSystemEventHistogramResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeSystemEventHistogramResponse>(await this.doRequest("DescribeSystemEventHistogram", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DescribeSystemEventHistogramResponse({}));
  }

  async describeSystemEventHistogram(request: DescribeSystemEventHistogramRequest): Promise<DescribeSystemEventHistogramResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeSystemEventHistogramWithOptions(request, runtime);
  }

  async describeSystemEventCountWithOptions(request: DescribeSystemEventCountRequest, runtime: $Util.RuntimeOptions): Promise<DescribeSystemEventCountResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeSystemEventCountResponse>(await this.doRequest("DescribeSystemEventCount", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DescribeSystemEventCountResponse({}));
  }

  async describeSystemEventCount(request: DescribeSystemEventCountRequest): Promise<DescribeSystemEventCountResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeSystemEventCountWithOptions(request, runtime);
  }

  async describeSystemEventMetaListWithOptions(request: DescribeSystemEventMetaListRequest, runtime: $Util.RuntimeOptions): Promise<DescribeSystemEventMetaListResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeSystemEventMetaListResponse>(await this.doRequest("DescribeSystemEventMetaList", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DescribeSystemEventMetaListResponse({}));
  }

  async describeSystemEventMetaList(request: DescribeSystemEventMetaListRequest): Promise<DescribeSystemEventMetaListResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeSystemEventMetaListWithOptions(request, runtime);
  }

  async describeMonitoringAgentProcessesWithOptions(request: DescribeMonitoringAgentProcessesRequest, runtime: $Util.RuntimeOptions): Promise<DescribeMonitoringAgentProcessesResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeMonitoringAgentProcessesResponse>(await this.doRequest("DescribeMonitoringAgentProcesses", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DescribeMonitoringAgentProcessesResponse({}));
  }

  async describeMonitoringAgentProcesses(request: DescribeMonitoringAgentProcessesRequest): Promise<DescribeMonitoringAgentProcessesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeMonitoringAgentProcessesWithOptions(request, runtime);
  }

  async uninstallMonitoringAgentWithOptions(request: UninstallMonitoringAgentRequest, runtime: $Util.RuntimeOptions): Promise<UninstallMonitoringAgentResponse> {
    Util.validateModel(request);
    return $tea.cast<UninstallMonitoringAgentResponse>(await this.doRequest("UninstallMonitoringAgent", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new UninstallMonitoringAgentResponse({}));
  }

  async uninstallMonitoringAgent(request: UninstallMonitoringAgentRequest): Promise<UninstallMonitoringAgentResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.uninstallMonitoringAgentWithOptions(request, runtime);
  }

  async describeMonitoringAgentAccessKeyWithOptions(request: DescribeMonitoringAgentAccessKeyRequest, runtime: $Util.RuntimeOptions): Promise<DescribeMonitoringAgentAccessKeyResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeMonitoringAgentAccessKeyResponse>(await this.doRequest("DescribeMonitoringAgentAccessKey", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DescribeMonitoringAgentAccessKeyResponse({}));
  }

  async describeMonitoringAgentAccessKey(request: DescribeMonitoringAgentAccessKeyRequest): Promise<DescribeMonitoringAgentAccessKeyResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeMonitoringAgentAccessKeyWithOptions(request, runtime);
  }

  async installMonitoringAgentWithOptions(request: InstallMonitoringAgentRequest, runtime: $Util.RuntimeOptions): Promise<InstallMonitoringAgentResponse> {
    Util.validateModel(request);
    return $tea.cast<InstallMonitoringAgentResponse>(await this.doRequest("InstallMonitoringAgent", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new InstallMonitoringAgentResponse({}));
  }

  async installMonitoringAgent(request: InstallMonitoringAgentRequest): Promise<InstallMonitoringAgentResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.installMonitoringAgentWithOptions(request, runtime);
  }

  async sendDryRunSystemEventWithOptions(request: SendDryRunSystemEventRequest, runtime: $Util.RuntimeOptions): Promise<SendDryRunSystemEventResponse> {
    Util.validateModel(request);
    return $tea.cast<SendDryRunSystemEventResponse>(await this.doRequest("SendDryRunSystemEvent", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new SendDryRunSystemEventResponse({}));
  }

  async sendDryRunSystemEvent(request: SendDryRunSystemEventRequest): Promise<SendDryRunSystemEventResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.sendDryRunSystemEventWithOptions(request, runtime);
  }

  async createMonitoringAgentProcessWithOptions(request: CreateMonitoringAgentProcessRequest, runtime: $Util.RuntimeOptions): Promise<CreateMonitoringAgentProcessResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateMonitoringAgentProcessResponse>(await this.doRequest("CreateMonitoringAgentProcess", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new CreateMonitoringAgentProcessResponse({}));
  }

  async createMonitoringAgentProcess(request: CreateMonitoringAgentProcessRequest): Promise<CreateMonitoringAgentProcessResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createMonitoringAgentProcessWithOptions(request, runtime);
  }

  async describeMonitoringAgentConfigWithOptions(request: DescribeMonitoringAgentConfigRequest, runtime: $Util.RuntimeOptions): Promise<DescribeMonitoringAgentConfigResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeMonitoringAgentConfigResponse>(await this.doRequest("DescribeMonitoringAgentConfig", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DescribeMonitoringAgentConfigResponse({}));
  }

  async describeMonitoringAgentConfig(request: DescribeMonitoringAgentConfigRequest): Promise<DescribeMonitoringAgentConfigResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeMonitoringAgentConfigWithOptions(request, runtime);
  }

  async deleteMonitoringAgentProcessWithOptions(request: DeleteMonitoringAgentProcessRequest, runtime: $Util.RuntimeOptions): Promise<DeleteMonitoringAgentProcessResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteMonitoringAgentProcessResponse>(await this.doRequest("DeleteMonitoringAgentProcess", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DeleteMonitoringAgentProcessResponse({}));
  }

  async deleteMonitoringAgentProcess(request: DeleteMonitoringAgentProcessRequest): Promise<DeleteMonitoringAgentProcessResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteMonitoringAgentProcessWithOptions(request, runtime);
  }

  async describeMonitoringAgentHostsWithOptions(request: DescribeMonitoringAgentHostsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeMonitoringAgentHostsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeMonitoringAgentHostsResponse>(await this.doRequest("DescribeMonitoringAgentHosts", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DescribeMonitoringAgentHostsResponse({}));
  }

  async describeMonitoringAgentHosts(request: DescribeMonitoringAgentHostsRequest): Promise<DescribeMonitoringAgentHostsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeMonitoringAgentHostsWithOptions(request, runtime);
  }

  async describeSiteMonitorDataWithOptions(request: DescribeSiteMonitorDataRequest, runtime: $Util.RuntimeOptions): Promise<DescribeSiteMonitorDataResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeSiteMonitorDataResponse>(await this.doRequest("DescribeSiteMonitorData", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DescribeSiteMonitorDataResponse({}));
  }

  async describeSiteMonitorData(request: DescribeSiteMonitorDataRequest): Promise<DescribeSiteMonitorDataResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeSiteMonitorDataWithOptions(request, runtime);
  }

  async modifySiteMonitorWithOptions(request: ModifySiteMonitorRequest, runtime: $Util.RuntimeOptions): Promise<ModifySiteMonitorResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifySiteMonitorResponse>(await this.doRequest("ModifySiteMonitor", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new ModifySiteMonitorResponse({}));
  }

  async modifySiteMonitor(request: ModifySiteMonitorRequest): Promise<ModifySiteMonitorResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifySiteMonitorWithOptions(request, runtime);
  }

  async describeSiteMonitorISPCityListWithOptions(request: DescribeSiteMonitorISPCityListRequest, runtime: $Util.RuntimeOptions): Promise<DescribeSiteMonitorISPCityListResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeSiteMonitorISPCityListResponse>(await this.doRequest("DescribeSiteMonitorISPCityList", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DescribeSiteMonitorISPCityListResponse({}));
  }

  async describeSiteMonitorISPCityList(request: DescribeSiteMonitorISPCityListRequest): Promise<DescribeSiteMonitorISPCityListResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeSiteMonitorISPCityListWithOptions(request, runtime);
  }

  async describeSiteMonitorQuotaWithOptions(request: DescribeSiteMonitorQuotaRequest, runtime: $Util.RuntimeOptions): Promise<DescribeSiteMonitorQuotaResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeSiteMonitorQuotaResponse>(await this.doRequest("DescribeSiteMonitorQuota", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DescribeSiteMonitorQuotaResponse({}));
  }

  async describeSiteMonitorQuota(request: DescribeSiteMonitorQuotaRequest): Promise<DescribeSiteMonitorQuotaResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeSiteMonitorQuotaWithOptions(request, runtime);
  }

  async describeSiteMonitorStatisticsWithOptions(request: DescribeSiteMonitorStatisticsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeSiteMonitorStatisticsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeSiteMonitorStatisticsResponse>(await this.doRequest("DescribeSiteMonitorStatistics", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DescribeSiteMonitorStatisticsResponse({}));
  }

  async describeSiteMonitorStatistics(request: DescribeSiteMonitorStatisticsRequest): Promise<DescribeSiteMonitorStatisticsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeSiteMonitorStatisticsWithOptions(request, runtime);
  }

  async enableSiteMonitorsWithOptions(request: EnableSiteMonitorsRequest, runtime: $Util.RuntimeOptions): Promise<EnableSiteMonitorsResponse> {
    Util.validateModel(request);
    return $tea.cast<EnableSiteMonitorsResponse>(await this.doRequest("EnableSiteMonitors", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new EnableSiteMonitorsResponse({}));
  }

  async enableSiteMonitors(request: EnableSiteMonitorsRequest): Promise<EnableSiteMonitorsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.enableSiteMonitorsWithOptions(request, runtime);
  }

  async describeSiteMonitorAttributeWithOptions(request: DescribeSiteMonitorAttributeRequest, runtime: $Util.RuntimeOptions): Promise<DescribeSiteMonitorAttributeResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeSiteMonitorAttributeResponse>(await this.doRequest("DescribeSiteMonitorAttribute", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DescribeSiteMonitorAttributeResponse({}));
  }

  async describeSiteMonitorAttribute(request: DescribeSiteMonitorAttributeRequest): Promise<DescribeSiteMonitorAttributeResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeSiteMonitorAttributeWithOptions(request, runtime);
  }

  async describeSiteMonitorListWithOptions(request: DescribeSiteMonitorListRequest, runtime: $Util.RuntimeOptions): Promise<DescribeSiteMonitorListResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeSiteMonitorListResponse>(await this.doRequest("DescribeSiteMonitorList", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DescribeSiteMonitorListResponse({}));
  }

  async describeSiteMonitorList(request: DescribeSiteMonitorListRequest): Promise<DescribeSiteMonitorListResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeSiteMonitorListWithOptions(request, runtime);
  }

  async deleteSiteMonitorsWithOptions(request: DeleteSiteMonitorsRequest, runtime: $Util.RuntimeOptions): Promise<DeleteSiteMonitorsResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteSiteMonitorsResponse>(await this.doRequest("DeleteSiteMonitors", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DeleteSiteMonitorsResponse({}));
  }

  async deleteSiteMonitors(request: DeleteSiteMonitorsRequest): Promise<DeleteSiteMonitorsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteSiteMonitorsWithOptions(request, runtime);
  }

  async disableSiteMonitorsWithOptions(request: DisableSiteMonitorsRequest, runtime: $Util.RuntimeOptions): Promise<DisableSiteMonitorsResponse> {
    Util.validateModel(request);
    return $tea.cast<DisableSiteMonitorsResponse>(await this.doRequest("DisableSiteMonitors", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DisableSiteMonitorsResponse({}));
  }

  async disableSiteMonitors(request: DisableSiteMonitorsRequest): Promise<DisableSiteMonitorsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.disableSiteMonitorsWithOptions(request, runtime);
  }

  async createSiteMonitorWithOptions(request: CreateSiteMonitorRequest, runtime: $Util.RuntimeOptions): Promise<CreateSiteMonitorResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateSiteMonitorResponse>(await this.doRequest("CreateSiteMonitor", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new CreateSiteMonitorResponse({}));
  }

  async createSiteMonitor(request: CreateSiteMonitorRequest): Promise<CreateSiteMonitorResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createSiteMonitorWithOptions(request, runtime);
  }

  async describeProjectMetaWithOptions(request: DescribeProjectMetaRequest, runtime: $Util.RuntimeOptions): Promise<DescribeProjectMetaResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeProjectMetaResponse>(await this.doRequest("DescribeProjectMeta", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DescribeProjectMetaResponse({}));
  }

  async describeProjectMeta(request: DescribeProjectMetaRequest): Promise<DescribeProjectMetaResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeProjectMetaWithOptions(request, runtime);
  }

  async describeMetricListWithOptions(request: DescribeMetricListRequest, runtime: $Util.RuntimeOptions): Promise<DescribeMetricListResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeMetricListResponse>(await this.doRequest("DescribeMetricList", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DescribeMetricListResponse({}));
  }

  async describeMetricList(request: DescribeMetricListRequest): Promise<DescribeMetricListResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeMetricListWithOptions(request, runtime);
  }

  async describeMetricMetaListWithOptions(request: DescribeMetricMetaListRequest, runtime: $Util.RuntimeOptions): Promise<DescribeMetricMetaListResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeMetricMetaListResponse>(await this.doRequest("DescribeMetricMetaList", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DescribeMetricMetaListResponse({}));
  }

  async describeMetricMetaList(request: DescribeMetricMetaListRequest): Promise<DescribeMetricMetaListResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeMetricMetaListWithOptions(request, runtime);
  }

  async describeMetricTopWithOptions(request: DescribeMetricTopRequest, runtime: $Util.RuntimeOptions): Promise<DescribeMetricTopResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeMetricTopResponse>(await this.doRequest("DescribeMetricTop", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DescribeMetricTopResponse({}));
  }

  async describeMetricTop(request: DescribeMetricTopRequest): Promise<DescribeMetricTopResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeMetricTopWithOptions(request, runtime);
  }

  async describeMetricDataWithOptions(request: DescribeMetricDataRequest, runtime: $Util.RuntimeOptions): Promise<DescribeMetricDataResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeMetricDataResponse>(await this.doRequest("DescribeMetricData", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DescribeMetricDataResponse({}));
  }

  async describeMetricData(request: DescribeMetricDataRequest): Promise<DescribeMetricDataResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeMetricDataWithOptions(request, runtime);
  }

  async describeMetricLastWithOptions(request: DescribeMetricLastRequest, runtime: $Util.RuntimeOptions): Promise<DescribeMetricLastResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeMetricLastResponse>(await this.doRequest("DescribeMetricLast", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DescribeMetricLastResponse({}));
  }

  async describeMetricLast(request: DescribeMetricLastRequest): Promise<DescribeMetricLastResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeMetricLastWithOptions(request, runtime);
  }

  async enableHostAvailabilityWithOptions(request: EnableHostAvailabilityRequest, runtime: $Util.RuntimeOptions): Promise<EnableHostAvailabilityResponse> {
    Util.validateModel(request);
    return $tea.cast<EnableHostAvailabilityResponse>(await this.doRequest("EnableHostAvailability", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new EnableHostAvailabilityResponse({}));
  }

  async enableHostAvailability(request: EnableHostAvailabilityRequest): Promise<EnableHostAvailabilityResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.enableHostAvailabilityWithOptions(request, runtime);
  }

  async modifyHostAvailabilityWithOptions(request: ModifyHostAvailabilityRequest, runtime: $Util.RuntimeOptions): Promise<ModifyHostAvailabilityResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyHostAvailabilityResponse>(await this.doRequest("ModifyHostAvailability", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new ModifyHostAvailabilityResponse({}));
  }

  async modifyHostAvailability(request: ModifyHostAvailabilityRequest): Promise<ModifyHostAvailabilityResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyHostAvailabilityWithOptions(request, runtime);
  }

  async disableHostAvailabilityWithOptions(request: DisableHostAvailabilityRequest, runtime: $Util.RuntimeOptions): Promise<DisableHostAvailabilityResponse> {
    Util.validateModel(request);
    return $tea.cast<DisableHostAvailabilityResponse>(await this.doRequest("DisableHostAvailability", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DisableHostAvailabilityResponse({}));
  }

  async disableHostAvailability(request: DisableHostAvailabilityRequest): Promise<DisableHostAvailabilityResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.disableHostAvailabilityWithOptions(request, runtime);
  }

  async describeUnhealthyHostAvailabilityWithOptions(request: DescribeUnhealthyHostAvailabilityRequest, runtime: $Util.RuntimeOptions): Promise<DescribeUnhealthyHostAvailabilityResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeUnhealthyHostAvailabilityResponse>(await this.doRequest("DescribeUnhealthyHostAvailability", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DescribeUnhealthyHostAvailabilityResponse({}));
  }

  async describeUnhealthyHostAvailability(request: DescribeUnhealthyHostAvailabilityRequest): Promise<DescribeUnhealthyHostAvailabilityResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeUnhealthyHostAvailabilityWithOptions(request, runtime);
  }

  async createHostAvailabilityWithOptions(request: CreateHostAvailabilityRequest, runtime: $Util.RuntimeOptions): Promise<CreateHostAvailabilityResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateHostAvailabilityResponse>(await this.doRequest("CreateHostAvailability", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new CreateHostAvailabilityResponse({}));
  }

  async createHostAvailability(request: CreateHostAvailabilityRequest): Promise<CreateHostAvailabilityResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createHostAvailabilityWithOptions(request, runtime);
  }

  async describeHostAvailabilityListWithOptions(request: DescribeHostAvailabilityListRequest, runtime: $Util.RuntimeOptions): Promise<DescribeHostAvailabilityListResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeHostAvailabilityListResponse>(await this.doRequest("DescribeHostAvailabilityList", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DescribeHostAvailabilityListResponse({}));
  }

  async describeHostAvailabilityList(request: DescribeHostAvailabilityListRequest): Promise<DescribeHostAvailabilityListResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeHostAvailabilityListWithOptions(request, runtime);
  }

  async deleteHostAvailabilityWithOptions(request: DeleteHostAvailabilityRequest, runtime: $Util.RuntimeOptions): Promise<DeleteHostAvailabilityResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteHostAvailabilityResponse>(await this.doRequest("DeleteHostAvailability", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DeleteHostAvailabilityResponse({}));
  }

  async deleteHostAvailability(request: DeleteHostAvailabilityRequest): Promise<DeleteHostAvailabilityResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteHostAvailabilityWithOptions(request, runtime);
  }

  async describeMonitoringConfigWithOptions(request: DescribeMonitoringConfigRequest, runtime: $Util.RuntimeOptions): Promise<DescribeMonitoringConfigResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeMonitoringConfigResponse>(await this.doRequest("DescribeMonitoringConfig", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new DescribeMonitoringConfigResponse({}));
  }

  async describeMonitoringConfig(request: DescribeMonitoringConfigRequest): Promise<DescribeMonitoringConfigResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeMonitoringConfigWithOptions(request, runtime);
  }

  async putMonitoringConfigWithOptions(request: PutMonitoringConfigRequest, runtime: $Util.RuntimeOptions): Promise<PutMonitoringConfigResponse> {
    Util.validateModel(request);
    return $tea.cast<PutMonitoringConfigResponse>(await this.doRequest("PutMonitoringConfig", "HTTPS", "POST", "2019-01-01", "AK", null, $tea.toMap(request), runtime), new PutMonitoringConfigResponse({}));
  }

  async putMonitoringConfig(request: PutMonitoringConfigRequest): Promise<PutMonitoringConfigResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.putMonitoringConfigWithOptions(request, runtime);
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
