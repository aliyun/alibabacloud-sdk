// This file is auto-generated, don't edit it
import Util, * as $Util from '@alicloud/tea-util';
import ROA, * as $ROA from '@alicloud/roa-client';
import EndpointUtil from '@alicloud/endpoint-util';
import * as $tea from '@alicloud/tea-typescript';

export class ResumeComponentUpgradeRequest extends $tea.Model {
  headers?: { [key: string]: string };
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ResumeComponentUpgradeResponseBody extends $tea.Model {
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

export class ResumeComponentUpgradeResponse extends $tea.Model {
  headers: { [key: string]: string };
  body: ResumeComponentUpgradeResponseBody;
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
      body: 'body',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
      body: ResumeComponentUpgradeResponseBody,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PauseComponentUpgradeRequest extends $tea.Model {
  headers?: { [key: string]: string };
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PauseComponentUpgradeResponseBody extends $tea.Model {
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

export class PauseComponentUpgradeResponse extends $tea.Model {
  headers: { [key: string]: string };
  body: PauseComponentUpgradeResponseBody;
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
      body: 'body',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
      body: PauseComponentUpgradeResponseBody,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CancelComponentUpgradeRequest extends $tea.Model {
  headers?: { [key: string]: string };
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CancelComponentUpgradeResponseBody extends $tea.Model {
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

export class CancelComponentUpgradeResponse extends $tea.Model {
  headers: { [key: string]: string };
  body: CancelComponentUpgradeResponseBody;
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
      body: 'body',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
      body: CancelComponentUpgradeResponseBody,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CancelWorkflowRequest extends $tea.Model {
  headers?: { [key: string]: string };
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CancelWorkflowResponse extends $tea.Model {
  headers: { [key: string]: string };
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescirbeWorkflowRequest extends $tea.Model {
  headers?: { [key: string]: string };
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescirbeWorkflowResponse extends $tea.Model {
  headers: { [key: string]: string };
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RemoveWorkflowRequest extends $tea.Model {
  headers?: { [key: string]: string };
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RemoveWorkflowResponse extends $tea.Model {
  headers: { [key: string]: string };
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeWorkflowsRequest extends $tea.Model {
  headers?: { [key: string]: string };
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeWorkflowsResponse extends $tea.Model {
  headers: { [key: string]: string };
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class StartWorkflowRequest extends $tea.Model {
  headers?: { [key: string]: string };
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class StartWorkflowResponse extends $tea.Model {
  headers: { [key: string]: string };
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UnInstallClusterAddonsBody extends $tea.Model {
  name: string;
  static names(): { [key: string]: string } {
    return {
      name: 'name',
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

export class UnInstallClusterAddonsRequest extends $tea.Model {
  headers?: { [key: string]: string };
  body: UnInstallClusterAddonsBody;
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
      body: 'body',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
      body: UnInstallClusterAddonsBody,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UnInstallClusterAddonsResponseBody extends $tea.Model {
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

export class UnInstallClusterAddonsResponse extends $tea.Model {
  headers: { [key: string]: string };
  body: UnInstallClusterAddonsResponseBody;
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
      body: 'body',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
      body: UnInstallClusterAddonsResponseBody,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateK8sClusterUserConfigExpireRequest extends $tea.Model {
  headers?: { [key: string]: string };
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateK8sClusterUserConfigExpireResponse extends $tea.Model {
  headers: { [key: string]: string };
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeUserQuotaRequest extends $tea.Model {
  headers?: { [key: string]: string };
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeUserQuotaResponseBody extends $tea.Model {
  clusterQuota: number;
  nodeQuota: number;
  askClusterQuota: number;
  amkClusterQuota: number;
  static names(): { [key: string]: string } {
    return {
      clusterQuota: 'cluster_quota',
      nodeQuota: 'node_quota',
      askClusterQuota: 'ask_cluster_quota',
      amkClusterQuota: 'amk_cluster_quota',
    };
  }

  static types(): { [key: string]: any } {
    return {
      clusterQuota: 'number',
      nodeQuota: 'number',
      askClusterQuota: 'number',
      amkClusterQuota: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeUserQuotaResponse extends $tea.Model {
  headers: { [key: string]: string };
  body: DescribeUserQuotaResponseBody;
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
      body: 'body',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
      body: DescribeUserQuotaResponseBody,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeClusterV2UserKubeconfigQuery extends $tea.Model {
  privateIpAddress?: boolean;
  static names(): { [key: string]: string } {
    return {
      privateIpAddress: 'PrivateIpAddress',
    };
  }

  static types(): { [key: string]: any } {
    return {
      privateIpAddress: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeClusterV2UserKubeconfigRequest extends $tea.Model {
  headers?: { [key: string]: string };
  query?: DescribeClusterV2UserKubeconfigQuery;
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
      query: 'query',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
      query: DescribeClusterV2UserKubeconfigQuery,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeClusterV2UserKubeconfigResponseBody extends $tea.Model {
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

export class DescribeClusterV2UserKubeconfigResponse extends $tea.Model {
  headers: { [key: string]: string };
  body: DescribeClusterV2UserKubeconfigResponseBody;
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
      body: 'body',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
      body: DescribeClusterV2UserKubeconfigResponseBody,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RemoveClusterNodesBody extends $tea.Model {
  releaseNode?: boolean;
  drainNode?: boolean;
  nodes?: RemoveClusterNodesBodyNodes[];
  static names(): { [key: string]: string } {
    return {
      releaseNode: 'release_node',
      drainNode: 'drain_node',
      nodes: 'nodes',
    };
  }

  static types(): { [key: string]: any } {
    return {
      releaseNode: 'boolean',
      drainNode: 'boolean',
      nodes: { 'type': 'array', 'itemType': RemoveClusterNodesBodyNodes },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RemoveClusterNodesRequest extends $tea.Model {
  headers?: { [key: string]: string };
  body?: RemoveClusterNodesBody;
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
      body: 'body',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
      body: RemoveClusterNodesBody,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RemoveClusterNodesResponse extends $tea.Model {
  headers: { [key: string]: string };
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpgradeClusterBody extends $tea.Model {
  version?: string;
  static names(): { [key: string]: string } {
    return {
      version: 'version',
    };
  }

  static types(): { [key: string]: any } {
    return {
      version: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpgradeClusterRequest extends $tea.Model {
  headers?: { [key: string]: string };
  body?: UpgradeClusterBody;
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
      body: 'body',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
      body: UpgradeClusterBody,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpgradeClusterResponse extends $tea.Model {
  headers: { [key: string]: string };
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PauseClusterUpgradeRequest extends $tea.Model {
  headers?: { [key: string]: string };
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PauseClusterUpgradeResponse extends $tea.Model {
  headers: { [key: string]: string };
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ResumeUpgradeClusterRequest extends $tea.Model {
  headers?: { [key: string]: string };
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ResumeUpgradeClusterResponse extends $tea.Model {
  headers: { [key: string]: string };
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetUpgradeStatusRequest extends $tea.Model {
  headers?: { [key: string]: string };
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetUpgradeStatusResponseBody extends $tea.Model {
  status: string;
  precheckReportId: string;
  upgradeStep: string;
  errorMessage: string;
  static names(): { [key: string]: string } {
    return {
      status: 'status',
      precheckReportId: 'precheck_report_id',
      upgradeStep: 'upgrade_step',
      errorMessage: 'error_message',
    };
  }

  static types(): { [key: string]: any } {
    return {
      status: 'string',
      precheckReportId: 'string',
      upgradeStep: 'string',
      errorMessage: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetUpgradeStatusResponse extends $tea.Model {
  headers: { [key: string]: string };
  body: GetUpgradeStatusResponseBody;
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
      body: 'body',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
      body: GetUpgradeStatusResponseBody,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyClusterBody extends $tea.Model {
  deletionProtection: boolean;
  ingressLoadbalancerId: string;
  apiServerEip: boolean;
  apiServerEipId: string;
  resourceGroupId: string;
  static names(): { [key: string]: string } {
    return {
      deletionProtection: 'deletion_protection',
      ingressLoadbalancerId: 'ingress_loadbalancer_id',
      apiServerEip: 'api_server_eip',
      apiServerEipId: 'api_server_eip_id',
      resourceGroupId: 'resource_group_id',
    };
  }

  static types(): { [key: string]: any } {
    return {
      deletionProtection: 'boolean',
      ingressLoadbalancerId: 'string',
      apiServerEip: 'boolean',
      apiServerEipId: 'string',
      resourceGroupId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyClusterRequest extends $tea.Model {
  headers?: { [key: string]: string };
  body: ModifyClusterBody;
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
      body: 'body',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
      body: ModifyClusterBody,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyClusterResponseBody extends $tea.Model {
  clusterId: string;
  requestId: string;
  taskId: string;
  instanceId: string;
  static names(): { [key: string]: string } {
    return {
      clusterId: 'cluster_id',
      requestId: 'request_id',
      taskId: 'task_id',
      instanceId: 'instanceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      clusterId: 'string',
      requestId: 'string',
      taskId: 'string',
      instanceId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyClusterResponse extends $tea.Model {
  headers: { [key: string]: string };
  body: ModifyClusterResponseBody;
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
      body: 'body',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
      body: ModifyClusterResponseBody,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class InstallClusterAddonsBody extends $tea.Model {
  name?: string;
  version?: string;
  disabled?: boolean;
  required?: string;
  config?: string;
  static names(): { [key: string]: string } {
    return {
      name: 'name',
      version: 'version',
      disabled: 'disabled',
      required: 'required',
      config: 'config',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
      version: 'string',
      disabled: 'boolean',
      required: 'string',
      config: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class InstallClusterAddonsRequest extends $tea.Model {
  headers?: { [key: string]: string };
  body?: InstallClusterAddonsBody;
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
      body: 'body',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
      body: InstallClusterAddonsBody,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class InstallClusterAddonsResponse extends $tea.Model {
  headers: { [key: string]: string };
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyClusterTagsBody extends $tea.Model {
  key: string;
  value: string;
  static names(): { [key: string]: string } {
    return {
      key: 'key',
      value: 'value',
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

export class ModifyClusterTagsRequest extends $tea.Model {
  headers?: { [key: string]: string };
  body: ModifyClusterTagsBody;
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
      body: 'body',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
      body: ModifyClusterTagsBody,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyClusterTagsResponseBody extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'requestId',
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

export class ModifyClusterTagsResponse extends $tea.Model {
  headers: { [key: string]: string };
  body: ModifyClusterTagsResponseBody;
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
      body: 'body',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
      body: ModifyClusterTagsResponseBody,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeExternalAgentRequest extends $tea.Model {
  headers?: { [key: string]: string };
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeExternalAgentResponseBody extends $tea.Model {
  config: string;
  static names(): { [key: string]: string } {
    return {
      config: 'config',
    };
  }

  static types(): { [key: string]: any } {
    return {
      config: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeExternalAgentResponse extends $tea.Model {
  headers: { [key: string]: string };
  body: DescribeExternalAgentResponseBody;
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
      body: 'body',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
      body: DescribeExternalAgentResponseBody,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeClusterResourcesRequest extends $tea.Model {
  headers?: { [key: string]: string };
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeClusterResourcesResponseBody extends $tea.Model {
  instanceId: string;
  resourceType: string;
  resourceInfo: string;
  state: string;
  static names(): { [key: string]: string } {
    return {
      instanceId: 'instance_id',
      resourceType: 'resource_type',
      resourceInfo: 'resource_info',
      state: 'state',
    };
  }

  static types(): { [key: string]: any } {
    return {
      instanceId: 'string',
      resourceType: 'string',
      resourceInfo: 'string',
      state: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeClusterResourcesResponse extends $tea.Model {
  headers: { [key: string]: string };
  body: DescribeClusterResourcesResponseBody[];
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
      body: 'body',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
      body: { 'type': 'array', 'itemType': DescribeClusterResourcesResponseBody },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteClusterNodesBody extends $tea.Model {
  releaseNode?: string;
  nodes?: string[];
  static names(): { [key: string]: string } {
    return {
      releaseNode: 'release_node',
      nodes: 'nodes',
    };
  }

  static types(): { [key: string]: any } {
    return {
      releaseNode: 'string',
      nodes: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteClusterNodesRequest extends $tea.Model {
  headers?: { [key: string]: string };
  body: DeleteClusterNodesBody;
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
      body: 'body',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
      body: DeleteClusterNodesBody,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteClusterNodesResponseBody extends $tea.Model {
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

export class DeleteClusterNodesResponse extends $tea.Model {
  headers: { [key: string]: string };
  body: DeleteClusterNodesResponseBody;
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
      body: 'body',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
      body: DeleteClusterNodesResponseBody,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeClusterUserKubeconfigQuery extends $tea.Model {
  privateIpAddress?: boolean;
  static names(): { [key: string]: string } {
    return {
      privateIpAddress: 'PrivateIpAddress',
    };
  }

  static types(): { [key: string]: any } {
    return {
      privateIpAddress: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeClusterUserKubeconfigRequest extends $tea.Model {
  headers?: { [key: string]: string };
  query?: DescribeClusterUserKubeconfigQuery;
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
      query: 'query',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
      query: DescribeClusterUserKubeconfigQuery,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeClusterUserKubeconfigResponseBody extends $tea.Model {
  config: string;
  static names(): { [key: string]: string } {
    return {
      config: 'config',
    };
  }

  static types(): { [key: string]: any } {
    return {
      config: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeClusterUserKubeconfigResponse extends $tea.Model {
  headers: { [key: string]: string };
  body: DescribeClusterUserKubeconfigResponseBody;
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
      body: 'body',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
      body: DescribeClusterUserKubeconfigResponseBody,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeClusterNodesQuery extends $tea.Model {
  pageSize?: string;
  pageNumber?: string;
  nodepoolId?: string;
  state?: string;
  static names(): { [key: string]: string } {
    return {
      pageSize: 'pageSize',
      pageNumber: 'pageNumber',
      nodepoolId: 'nodepool_id',
      state: 'state',
    };
  }

  static types(): { [key: string]: any } {
    return {
      pageSize: 'string',
      pageNumber: 'string',
      nodepoolId: 'string',
      state: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeClusterNodesRequest extends $tea.Model {
  headers?: { [key: string]: string };
  query?: DescribeClusterNodesQuery;
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
      query: 'query',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
      query: DescribeClusterNodesQuery,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeClusterNodesResponseBody extends $tea.Model {
  nodes: DescribeClusterNodesResponseBodyNodes[];
  page: DescribeClusterNodesResponseBodyPage;
  static names(): { [key: string]: string } {
    return {
      nodes: 'nodes',
      page: 'page',
    };
  }

  static types(): { [key: string]: any } {
    return {
      nodes: { 'type': 'array', 'itemType': DescribeClusterNodesResponseBodyNodes },
      page: DescribeClusterNodesResponseBodyPage,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeClusterNodesResponse extends $tea.Model {
  headers: { [key: string]: string };
  body: DescribeClusterNodesResponseBody;
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
      body: 'body',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
      body: DescribeClusterNodesResponseBody,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AttachInstancesBody extends $tea.Model {
  formatDisk?: boolean;
  keepInstanceName?: boolean;
  cpuPolicy?: string;
  keyPair: string;
  password: string;
  tags?: AttachInstancesBodyTags[];
  instances?: string[];
  static names(): { [key: string]: string } {
    return {
      formatDisk: 'format_disk',
      keepInstanceName: 'keep_instance_name',
      cpuPolicy: 'cpu_policy',
      keyPair: 'key_pair',
      password: 'password',
      tags: 'tags',
      instances: 'instances',
    };
  }

  static types(): { [key: string]: any } {
    return {
      formatDisk: 'boolean',
      keepInstanceName: 'boolean',
      cpuPolicy: 'string',
      keyPair: 'string',
      password: 'string',
      tags: { 'type': 'array', 'itemType': AttachInstancesBodyTags },
      instances: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AttachInstancesRequest extends $tea.Model {
  headers?: { [key: string]: string };
  body: AttachInstancesBody;
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
      body: 'body',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
      body: AttachInstancesBody,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AttachInstancesResponseBody extends $tea.Model {
  taskId: string;
  list: AttachInstancesResponseBodyList[];
  static names(): { [key: string]: string } {
    return {
      taskId: 'task_id',
      list: 'list',
    };
  }

  static types(): { [key: string]: any } {
    return {
      taskId: 'string',
      list: { 'type': 'array', 'itemType': AttachInstancesResponseBodyList },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AttachInstancesResponse extends $tea.Model {
  headers: { [key: string]: string };
  body: AttachInstancesResponseBody;
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
      body: 'body',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
      body: AttachInstancesResponseBody,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeTemplatesQuery extends $tea.Model {
  templateType?: string;
  static names(): { [key: string]: string } {
    return {
      templateType: 'template_type',
    };
  }

  static types(): { [key: string]: any } {
    return {
      templateType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeTemplatesRequest extends $tea.Model {
  headers?: { [key: string]: string };
  query?: DescribeTemplatesQuery;
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
      query: 'query',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
      query: DescribeTemplatesQuery,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeTemplatesResponseBody extends $tea.Model {
  template: string;
  acl: string;
  name: string;
  tags: string;
  templateType: string;
  description: string;
  static names(): { [key: string]: string } {
    return {
      template: 'template',
      acl: 'acl',
      name: 'name',
      tags: 'tags',
      templateType: 'template_type',
      description: 'description',
    };
  }

  static types(): { [key: string]: any } {
    return {
      template: 'string',
      acl: 'string',
      name: 'string',
      tags: 'string',
      templateType: 'string',
      description: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeTemplatesResponse extends $tea.Model {
  headers: { [key: string]: string };
  body: DescribeTemplatesResponseBody;
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
      body: 'body',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
      body: DescribeTemplatesResponseBody,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateClusterBody extends $tea.Model {
  clusterType: string;
  name: string;
  regionId: string;
  kubernetesVersion?: string;
  snatEntry: boolean;
  endpointPublicAccess?: boolean;
  sshFlags?: boolean;
  cloudMonitorFlags?: boolean;
  deletionProtection?: boolean;
  nodeCidrMask?: string;
  proxyMode?: string;
  osType?: string;
  platform?: string;
  nodePortRange?: string;
  keyPair: string;
  loginPassword: string;
  masterInstanceChargeType?: string;
  workerInstanceChargeType?: string;
  masterPeriod?: number;
  workerPeriod?: number;
  masterPeriodUnit?: string;
  workerPeriodUnit?: string;
  masterAutoRenew?: boolean;
  masterAutoRenewPeriod?: number;
  workerAutoRenew?: boolean;
  workerAutoRenewPeriod?: number;
  cpuPolicy?: string;
  masterCount?: number;
  masterSystemDiskCategory: string;
  masterSystemDiskSize: number;
  runtime?: { [key: string]: any };
  numOfNodes: number;
  workerSystemDiskCategory: string;
  workerSystemDiskSize: number;
  workerDataDisk?: boolean;
  vpcid?: string;
  securityGroupId?: string;
  containerCidr?: string;
  serviceCidr?: string;
  disableRollback?: boolean;
  timeoutMins?: number;
  tags?: CreateClusterBodyTags[];
  addons?: CreateClusterBodyAddons[];
  taints?: CreateClusterBodyTaints[];
  workerDataDisks?: CreateClusterBodyWorkerDataDisks[];
  masterVswitchIds?: string[];
  masterInstanceTypes?: string[];
  workerInstanceTypes?: string[];
  workerVswitchIds?: string[];
  static names(): { [key: string]: string } {
    return {
      clusterType: 'cluster_type',
      name: 'name',
      regionId: 'region_id',
      kubernetesVersion: 'kubernetes_version',
      snatEntry: 'snat_entry',
      endpointPublicAccess: 'endpoint_public_access',
      sshFlags: 'ssh_flags',
      cloudMonitorFlags: 'cloud_monitor_flags',
      deletionProtection: 'deletion_protection',
      nodeCidrMask: 'node_cidr_mask',
      proxyMode: 'proxy_mode',
      osType: 'os_type',
      platform: 'platform',
      nodePortRange: 'node_port_range',
      keyPair: 'key_pair',
      loginPassword: 'login_password',
      masterInstanceChargeType: 'master_instance_charge_type',
      workerInstanceChargeType: 'worker_instance_charge_type',
      masterPeriod: 'master_period',
      workerPeriod: 'worker_period',
      masterPeriodUnit: 'master_period_unit',
      workerPeriodUnit: 'worker_period_unit',
      masterAutoRenew: 'master_auto_renew',
      masterAutoRenewPeriod: 'master_auto_renew_period',
      workerAutoRenew: 'worker_auto_renew',
      workerAutoRenewPeriod: 'worker_auto_renew_period',
      cpuPolicy: 'cpu_policy',
      masterCount: 'master_count',
      masterSystemDiskCategory: 'master_system_disk_category',
      masterSystemDiskSize: 'master_system_disk_size',
      runtime: 'runtime',
      numOfNodes: 'num_of_nodes',
      workerSystemDiskCategory: 'worker_system_disk_category',
      workerSystemDiskSize: 'worker_system_disk_size',
      workerDataDisk: 'worker_data_disk',
      vpcid: 'vpcid',
      securityGroupId: 'security_group_id',
      containerCidr: 'container_cidr',
      serviceCidr: 'service_cidr',
      disableRollback: 'disable_rollback',
      timeoutMins: 'timeout_mins',
      tags: 'tags',
      addons: 'addons',
      taints: 'taints',
      workerDataDisks: 'worker_data_disks',
      masterVswitchIds: 'master_vswitch_ids',
      masterInstanceTypes: 'master_instance_types',
      workerInstanceTypes: 'worker_instance_types',
      workerVswitchIds: 'worker_vswitch_ids',
    };
  }

  static types(): { [key: string]: any } {
    return {
      clusterType: 'string',
      name: 'string',
      regionId: 'string',
      kubernetesVersion: 'string',
      snatEntry: 'boolean',
      endpointPublicAccess: 'boolean',
      sshFlags: 'boolean',
      cloudMonitorFlags: 'boolean',
      deletionProtection: 'boolean',
      nodeCidrMask: 'string',
      proxyMode: 'string',
      osType: 'string',
      platform: 'string',
      nodePortRange: 'string',
      keyPair: 'string',
      loginPassword: 'string',
      masterInstanceChargeType: 'string',
      workerInstanceChargeType: 'string',
      masterPeriod: 'number',
      workerPeriod: 'number',
      masterPeriodUnit: 'string',
      workerPeriodUnit: 'string',
      masterAutoRenew: 'boolean',
      masterAutoRenewPeriod: 'number',
      workerAutoRenew: 'boolean',
      workerAutoRenewPeriod: 'number',
      cpuPolicy: 'string',
      masterCount: 'number',
      masterSystemDiskCategory: 'string',
      masterSystemDiskSize: 'number',
      runtime: { 'type': 'map', 'keyType': 'string', 'valueType': 'any' },
      numOfNodes: 'number',
      workerSystemDiskCategory: 'string',
      workerSystemDiskSize: 'number',
      workerDataDisk: 'boolean',
      vpcid: 'string',
      securityGroupId: 'string',
      containerCidr: 'string',
      serviceCidr: 'string',
      disableRollback: 'boolean',
      timeoutMins: 'number',
      tags: { 'type': 'array', 'itemType': CreateClusterBodyTags },
      addons: { 'type': 'array', 'itemType': CreateClusterBodyAddons },
      taints: { 'type': 'array', 'itemType': CreateClusterBodyTaints },
      workerDataDisks: { 'type': 'array', 'itemType': CreateClusterBodyWorkerDataDisks },
      masterVswitchIds: { 'type': 'array', 'itemType': 'string' },
      masterInstanceTypes: { 'type': 'array', 'itemType': 'string' },
      workerInstanceTypes: { 'type': 'array', 'itemType': 'string' },
      workerVswitchIds: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateClusterRequest extends $tea.Model {
  headers?: { [key: string]: string };
  body: CreateClusterBody;
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
      body: 'body',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
      body: CreateClusterBody,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateClusterResponseBody extends $tea.Model {
  clusterId: string;
  requestId: string;
  taskId: string;
  static names(): { [key: string]: string } {
    return {
      clusterId: 'cluster_id',
      requestId: 'request_id',
      taskId: 'task_id',
    };
  }

  static types(): { [key: string]: any } {
    return {
      clusterId: 'string',
      requestId: 'string',
      taskId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateClusterResponse extends $tea.Model {
  headers: { [key: string]: string };
  body: CreateClusterResponseBody;
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
      body: 'body',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
      body: CreateClusterResponseBody,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ScaleClusterRequest extends $tea.Model {
  headers?: { [key: string]: string };
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ScaleClusterResponseBody extends $tea.Model {
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

export class ScaleClusterResponse extends $tea.Model {
  headers: { [key: string]: string };
  body: ScaleClusterResponseBody;
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
      body: 'body',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
      body: ScaleClusterResponseBody,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeClustersQuery extends $tea.Model {
  name?: string;
  clusterType?: string;
  static names(): { [key: string]: string } {
    return {
      name: 'name',
      clusterType: 'clusterType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
      clusterType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeClustersRequest extends $tea.Model {
  headers?: { [key: string]: string };
  query?: DescribeClustersQuery;
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
      query: 'query',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
      query: DescribeClustersQuery,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeClustersResponseBody extends $tea.Model {
  name: string;
  clusterId: string;
  regionId: string;
  state: string;
  clusterType: string;
  currentVersion: string;
  metaData: string;
  resourceGroupId: string;
  vpcId: string;
  vswitchId: string;
  vswitchCidr: string;
  dataDiskSize: number;
  dataDiskCategory: string;
  securityGroupId: string;
  zoneId: string;
  networkMode: string;
  masterUrl: string;
  dockerVersion: string;
  deletionProtection: boolean;
  tags: DescribeClustersResponseBodyTags[];
  static names(): { [key: string]: string } {
    return {
      name: 'name',
      clusterId: 'cluster_id',
      regionId: 'region_id',
      state: 'state',
      clusterType: 'cluster_type',
      currentVersion: 'current_version',
      metaData: 'meta_data',
      resourceGroupId: 'resource_group_id',
      vpcId: 'vpc_id',
      vswitchId: 'vswitch_id',
      vswitchCidr: 'vswitch_cidr',
      dataDiskSize: 'data_disk_size',
      dataDiskCategory: 'data_disk_category',
      securityGroupId: 'security_group_id',
      zoneId: 'zone_id',
      networkMode: 'network_mode',
      masterUrl: 'master_url',
      dockerVersion: 'docker_version',
      deletionProtection: 'deletion_protection',
      tags: 'tags',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
      clusterId: 'string',
      regionId: 'string',
      state: 'string',
      clusterType: 'string',
      currentVersion: 'string',
      metaData: 'string',
      resourceGroupId: 'string',
      vpcId: 'string',
      vswitchId: 'string',
      vswitchCidr: 'string',
      dataDiskSize: 'number',
      dataDiskCategory: 'string',
      securityGroupId: 'string',
      zoneId: 'string',
      networkMode: 'string',
      masterUrl: 'string',
      dockerVersion: 'string',
      deletionProtection: 'boolean',
      tags: { 'type': 'array', 'itemType': DescribeClustersResponseBodyTags },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeClustersResponse extends $tea.Model {
  headers: { [key: string]: string };
  body: DescribeClustersResponseBody[];
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
      body: 'body',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
      body: { 'type': 'array', 'itemType': DescribeClustersResponseBody },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteClusterRequest extends $tea.Model {
  headers?: { [key: string]: string };
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteClusterResponseBody extends $tea.Model {
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

export class DeleteClusterResponse extends $tea.Model {
  headers: { [key: string]: string };
  body: DeleteClusterResponseBody;
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
      body: 'body',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
      body: DeleteClusterResponseBody,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeApiVersionRequest extends $tea.Model {
  headers?: { [key: string]: string };
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeApiVersionResponseBody extends $tea.Model {
  version: string;
  build: string;
  dockerVersion: string;
  dockerRegionVersions: string;
  static names(): { [key: string]: string } {
    return {
      version: 'version',
      build: 'build',
      dockerVersion: 'docker_version',
      dockerRegionVersions: 'docker_region_versions',
    };
  }

  static types(): { [key: string]: any } {
    return {
      version: 'string',
      build: 'string',
      dockerVersion: 'string',
      dockerRegionVersions: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeApiVersionResponse extends $tea.Model {
  headers: { [key: string]: string };
  body: DescribeApiVersionResponseBody;
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
      body: 'body',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
      body: DescribeApiVersionResponseBody,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RemoveClusterNodesBodyNodes extends $tea.Model {
  nodeName?: string;
  static names(): { [key: string]: string } {
    return {
      nodeName: 'node_name',
    };
  }

  static types(): { [key: string]: any } {
    return {
      nodeName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeClusterNodesResponseBodyNodes extends $tea.Model {
  instanceType: string;
  instanceRole: string;
  expiredTime: string;
  state: string;
  instanceName: string;
  isAliyunNode: boolean;
  hostName: string;
  imageId: string;
  instanceStatus: string;
  instanceChargeType: string;
  source: string;
  errorMessage: string;
  nodeStatus: string;
  creationTime: string;
  nodeName: string;
  instanceTypeFamily: string;
  nodepoolId: string;
  instanceId: string;
  ipAddress: string[];
  static names(): { [key: string]: string } {
    return {
      instanceType: 'instance_type',
      instanceRole: 'instance_role',
      expiredTime: 'expired_time',
      state: 'state',
      instanceName: 'instance_name',
      isAliyunNode: 'is_aliyun_node',
      hostName: 'host_name',
      imageId: 'image_id',
      instanceStatus: 'instance_status',
      instanceChargeType: 'instance_charge_type',
      source: 'source',
      errorMessage: 'error_message',
      nodeStatus: 'node_status',
      creationTime: 'creation_time',
      nodeName: 'node_name',
      instanceTypeFamily: 'instance_type_family',
      nodepoolId: 'nodepool_id',
      instanceId: 'instance_id',
      ipAddress: 'ip_address',
    };
  }

  static types(): { [key: string]: any } {
    return {
      instanceType: 'string',
      instanceRole: 'string',
      expiredTime: 'string',
      state: 'string',
      instanceName: 'string',
      isAliyunNode: 'boolean',
      hostName: 'string',
      imageId: 'string',
      instanceStatus: 'string',
      instanceChargeType: 'string',
      source: 'string',
      errorMessage: 'string',
      nodeStatus: 'string',
      creationTime: 'string',
      nodeName: 'string',
      instanceTypeFamily: 'string',
      nodepoolId: 'string',
      instanceId: 'string',
      ipAddress: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeClusterNodesResponseBodyPage extends $tea.Model {
  pageSize: number;
  pageNumber: number;
  totalCount: number;
  static names(): { [key: string]: string } {
    return {
      pageSize: 'page_size',
      pageNumber: 'page_number',
      totalCount: 'total_count',
    };
  }

  static types(): { [key: string]: any } {
    return {
      pageSize: 'number',
      pageNumber: 'number',
      totalCount: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AttachInstancesBodyTags extends $tea.Model {
  key?: string;
  value?: string;
  static names(): { [key: string]: string } {
    return {
      key: 'key',
      value: 'value',
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

export class AttachInstancesResponseBodyList extends $tea.Model {
  code: string;
  instanceId: string;
  message: string;
  static names(): { [key: string]: string } {
    return {
      code: 'code',
      instanceId: 'instanceId',
      message: 'message',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      instanceId: 'string',
      message: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateClusterBodyTags extends $tea.Model {
  key?: string;
  value?: string;
  static names(): { [key: string]: string } {
    return {
      key: 'key',
      value: 'value',
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

export class CreateClusterBodyAddons extends $tea.Model {
  name?: string;
  config?: string;
  static names(): { [key: string]: string } {
    return {
      name: 'name',
      config: 'config',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
      config: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateClusterBodyTaints extends $tea.Model {
  key?: string;
  value?: string;
  effect?: string;
  static names(): { [key: string]: string } {
    return {
      key: 'key',
      value: 'value',
      effect: 'effect',
    };
  }

  static types(): { [key: string]: any } {
    return {
      key: 'string',
      value: 'string',
      effect: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateClusterBodyWorkerDataDisks extends $tea.Model {
  category?: string;
  size?: string;
  encrypted?: string;
  static names(): { [key: string]: string } {
    return {
      category: 'category',
      size: 'size',
      encrypted: 'encrypted',
    };
  }

  static types(): { [key: string]: any } {
    return {
      category: 'string',
      size: 'string',
      encrypted: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeClustersResponseBodyTags extends $tea.Model {
  key: string;
  value: string;
  static names(): { [key: string]: string } {
    return {
      key: 'key',
      value: 'value',
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


export default class Client extends ROA {

  constructor(config: $ROA.Config) {
    super(config);
    this._endpointRule = "regional";
    this._endpointMap = {
      'ap-northeast-2-pop': "cs.aliyuncs.com",
      'cn-beijing-finance-1': "cs.aliyuncs.com",
      'cn-beijing-finance-pop': "cs.aliyuncs.com",
      'cn-beijing-gov-1': "cs.aliyuncs.com",
      'cn-beijing-nu16-b01': "cs.aliyuncs.com",
      'cn-edge-1': "cs.aliyuncs.com",
      'cn-fujian': "cs.aliyuncs.com",
      'cn-haidian-cm12-c01': "cs.aliyuncs.com",
      'cn-hangzhou-bj-b01': "cs.aliyuncs.com",
      'cn-hangzhou-finance': "cs.aliyuncs.com",
      'cn-hangzhou-internal-prod-1': "cs.aliyuncs.com",
      'cn-hangzhou-internal-test-1': "cs.aliyuncs.com",
      'cn-hangzhou-internal-test-2': "cs.aliyuncs.com",
      'cn-hangzhou-internal-test-3': "cs.aliyuncs.com",
      'cn-hangzhou-test-306': "cs.aliyuncs.com",
      'cn-hongkong-finance-pop': "cs.aliyuncs.com",
      'cn-huhehaote-nebula-1': "cs.aliyuncs.com",
      'cn-qingdao-nebula': "cs.aliyuncs.com",
      'cn-shanghai-et15-b01': "cs.aliyuncs.com",
      'cn-shanghai-et2-b01': "cs.aliyuncs.com",
      'cn-shanghai-finance-1': "cs.aliyuncs.com",
      'cn-shanghai-inner': "cs.aliyuncs.com",
      'cn-shanghai-internal-test-1': "cs.aliyuncs.com",
      'cn-shenzhen-finance-1': "cs.aliyuncs.com",
      'cn-shenzhen-inner': "cs.aliyuncs.com",
      'cn-shenzhen-st4-d01': "cs.aliyuncs.com",
      'cn-shenzhen-su18-b01': "cs.aliyuncs.com",
      'cn-wuhan': "cs.aliyuncs.com",
      'cn-wulanchabu': "cs.aliyuncs.com",
      'cn-yushanfang': "cs.aliyuncs.com",
      'cn-zhangbei-na61-b01': "cs.aliyuncs.com",
      'cn-zhangjiakou-na62-a01': "cs.aliyuncs.com",
      'cn-zhengzhou-nebula-1': "cs.aliyuncs.com",
      'eu-west-1-oxs': "cs.aliyuncs.com",
      'rus-west-1-pop': "cs.aliyuncs.com",
    };
    this.checkConfig(config);
    this._endpointHost = this.getEndpoint("cs", this._regionId, this._endpointRule, this._network, this._suffix, this._endpointMap, this._endpointHost);
  }


  async resumeComponentUpgradeWithOptions(clusterid: string, componentid: string, request: ResumeComponentUpgradeRequest, runtime: $Util.RuntimeOptions): Promise<ResumeComponentUpgradeResponse> {
    Util.validateModel(request);
    return $tea.cast<ResumeComponentUpgradeResponse>(await this.doRequest("2015-12-15", "HTTPS", "POST", "AK", `/clusters/${clusterid}/components/${componentid}/resume`, null, request.headers, null, runtime), new ResumeComponentUpgradeResponse({}));
  }

  async resumeComponentUpgrade(clusterid: string, componentid: string, request: ResumeComponentUpgradeRequest): Promise<ResumeComponentUpgradeResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.resumeComponentUpgradeWithOptions(clusterid, componentid, request, runtime);
  }

  async pauseComponentUpgradeWithOptions(clusterid: string, componentid: string, request: PauseComponentUpgradeRequest, runtime: $Util.RuntimeOptions): Promise<PauseComponentUpgradeResponse> {
    Util.validateModel(request);
    return $tea.cast<PauseComponentUpgradeResponse>(await this.doRequest("2015-12-15", "HTTPS", "POST", "AK", `/clusters/${clusterid}/components/${componentid}/pause`, null, request.headers, null, runtime), new PauseComponentUpgradeResponse({}));
  }

  async pauseComponentUpgrade(clusterid: string, componentid: string, request: PauseComponentUpgradeRequest): Promise<PauseComponentUpgradeResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.pauseComponentUpgradeWithOptions(clusterid, componentid, request, runtime);
  }

  async cancelComponentUpgradeWithOptions(clusterid: string, componentid: string, request: CancelComponentUpgradeRequest, runtime: $Util.RuntimeOptions): Promise<CancelComponentUpgradeResponse> {
    Util.validateModel(request);
    return $tea.cast<CancelComponentUpgradeResponse>(await this.doRequest("2015-12-15", "HTTPS", "POST", "AK", `/clusters/${clusterid}/components/${componentid}/cancel`, null, request.headers, null, runtime), new CancelComponentUpgradeResponse({}));
  }

  async cancelComponentUpgrade(clusterid: string, componentid: string, request: CancelComponentUpgradeRequest): Promise<CancelComponentUpgradeResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.cancelComponentUpgradeWithOptions(clusterid, componentid, request, runtime);
  }

  async cancelWorkflowWithOptions(workflowName: string, request: CancelWorkflowRequest, runtime: $Util.RuntimeOptions): Promise<CancelWorkflowResponse> {
    Util.validateModel(request);
    return $tea.cast<CancelWorkflowResponse>(await this.doRequest("2015-12-15", "HTTPS", "PUT", "AK", `/gs/workflow/${workflowName}`, null, request.headers, null, runtime), new CancelWorkflowResponse({}));
  }

  async cancelWorkflow(workflowName: string, request: CancelWorkflowRequest): Promise<CancelWorkflowResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.cancelWorkflowWithOptions(workflowName, request, runtime);
  }

  async descirbeWorkflowWithOptions(workflowName: string, request: DescirbeWorkflowRequest, runtime: $Util.RuntimeOptions): Promise<DescirbeWorkflowResponse> {
    Util.validateModel(request);
    return $tea.cast<DescirbeWorkflowResponse>(await this.doRequest("2015-12-15", "HTTPS", "GET", "AK", `/gs/workflow/${workflowName}`, null, request.headers, null, runtime), new DescirbeWorkflowResponse({}));
  }

  async descirbeWorkflow(workflowName: string, request: DescirbeWorkflowRequest): Promise<DescirbeWorkflowResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.descirbeWorkflowWithOptions(workflowName, request, runtime);
  }

  async removeWorkflowWithOptions(workflowName: string, request: RemoveWorkflowRequest, runtime: $Util.RuntimeOptions): Promise<RemoveWorkflowResponse> {
    Util.validateModel(request);
    return $tea.cast<RemoveWorkflowResponse>(await this.doRequest("2015-12-15", "HTTPS", "DELETE", "AK", `/gs/workflow/${workflowName}`, null, request.headers, null, runtime), new RemoveWorkflowResponse({}));
  }

  async removeWorkflow(workflowName: string, request: RemoveWorkflowRequest): Promise<RemoveWorkflowResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.removeWorkflowWithOptions(workflowName, request, runtime);
  }

  async describeWorkflowsWithOptions(request: DescribeWorkflowsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeWorkflowsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeWorkflowsResponse>(await this.doRequest("2015-12-15", "HTTPS", "GET", "AK", `/gs/workflows`, null, request.headers, null, runtime), new DescribeWorkflowsResponse({}));
  }

  async describeWorkflows(request: DescribeWorkflowsRequest): Promise<DescribeWorkflowsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeWorkflowsWithOptions(request, runtime);
  }

  async startWorkflowWithOptions(request: StartWorkflowRequest, runtime: $Util.RuntimeOptions): Promise<StartWorkflowResponse> {
    Util.validateModel(request);
    return $tea.cast<StartWorkflowResponse>(await this.doRequest("2015-12-15", "HTTPS", "POST", "AK", `/gs/workflow`, null, request.headers, null, runtime), new StartWorkflowResponse({}));
  }

  async startWorkflow(request: StartWorkflowRequest): Promise<StartWorkflowResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.startWorkflowWithOptions(request, runtime);
  }

  async unInstallClusterAddonsWithOptions(clusterId: string, request: UnInstallClusterAddonsRequest, runtime: $Util.RuntimeOptions): Promise<UnInstallClusterAddonsResponse> {
    Util.validateModel(request);
    return $tea.cast<UnInstallClusterAddonsResponse>(await this.doRequest("2015-12-15", "HTTPS", "POST", "AK", `/clusters/${clusterId}/components/uninstall`, null, request.headers, $tea.toMap(request.body), runtime), new UnInstallClusterAddonsResponse({}));
  }

  async unInstallClusterAddons(clusterId: string, request: UnInstallClusterAddonsRequest): Promise<UnInstallClusterAddonsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.unInstallClusterAddonsWithOptions(clusterId, request, runtime);
  }

  async updateK8sClusterUserConfigExpireWithOptions(clusterId: string, request: UpdateK8sClusterUserConfigExpireRequest, runtime: $Util.RuntimeOptions): Promise<UpdateK8sClusterUserConfigExpireResponse> {
    Util.validateModel(request);
    return $tea.cast<UpdateK8sClusterUserConfigExpireResponse>(await this.doRequest("2015-12-15", "HTTPS", "POST", "AK", `/k8s/${clusterId}/user_config/expire`, null, request.headers, null, runtime), new UpdateK8sClusterUserConfigExpireResponse({}));
  }

  async updateK8sClusterUserConfigExpire(clusterId: string, request: UpdateK8sClusterUserConfigExpireRequest): Promise<UpdateK8sClusterUserConfigExpireResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.updateK8sClusterUserConfigExpireWithOptions(clusterId, request, runtime);
  }

  async describeUserQuotaWithOptions(request: DescribeUserQuotaRequest, runtime: $Util.RuntimeOptions): Promise<DescribeUserQuotaResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeUserQuotaResponse>(await this.doRequest("2015-12-15", "HTTPS", "GET", "AK", `/quota`, null, request.headers, null, runtime), new DescribeUserQuotaResponse({}));
  }

  async describeUserQuota(request: DescribeUserQuotaRequest): Promise<DescribeUserQuotaResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeUserQuotaWithOptions(request, runtime);
  }

  async describeClusterV2UserKubeconfigWithOptions(clusterId: string, request: DescribeClusterV2UserKubeconfigRequest, runtime: $Util.RuntimeOptions): Promise<DescribeClusterV2UserKubeconfigResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeClusterV2UserKubeconfigResponse>(await this.doRequest("2015-12-15", "HTTPS", "GET", "AK", `/api/v2/k8s/${clusterId}/user_config`, Util.stringifyMapValue($tea.toMap(request.query)), request.headers, null, runtime), new DescribeClusterV2UserKubeconfigResponse({}));
  }

  async describeClusterV2UserKubeconfig(clusterId: string, request: DescribeClusterV2UserKubeconfigRequest): Promise<DescribeClusterV2UserKubeconfigResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeClusterV2UserKubeconfigWithOptions(clusterId, request, runtime);
  }

  async removeClusterNodesWithOptions(clusterId: string, request: RemoveClusterNodesRequest, runtime: $Util.RuntimeOptions): Promise<RemoveClusterNodesResponse> {
    Util.validateModel(request);
    return $tea.cast<RemoveClusterNodesResponse>(await this.doRequest("2015-12-15", "HTTPS", "POST", "AK", `/api/v2/clusters/${clusterId}/nodes/remove`, null, request.headers, $tea.toMap(request.body), runtime), new RemoveClusterNodesResponse({}));
  }

  async removeClusterNodes(clusterId: string, request: RemoveClusterNodesRequest): Promise<RemoveClusterNodesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.removeClusterNodesWithOptions(clusterId, request, runtime);
  }

  async upgradeClusterWithOptions(clusterId: string, request: UpgradeClusterRequest, runtime: $Util.RuntimeOptions): Promise<UpgradeClusterResponse> {
    Util.validateModel(request);
    return $tea.cast<UpgradeClusterResponse>(await this.doRequest("2015-12-15", "HTTPS", "POST", "AK", `/api/v2/clusters/${clusterId}/upgrade`, null, request.headers, $tea.toMap(request.body), runtime), new UpgradeClusterResponse({}));
  }

  async upgradeCluster(clusterId: string, request: UpgradeClusterRequest): Promise<UpgradeClusterResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.upgradeClusterWithOptions(clusterId, request, runtime);
  }

  async pauseClusterUpgradeWithOptions(clusterId: string, request: PauseClusterUpgradeRequest, runtime: $Util.RuntimeOptions): Promise<PauseClusterUpgradeResponse> {
    Util.validateModel(request);
    return $tea.cast<PauseClusterUpgradeResponse>(await this.doRequest("2015-12-15", "HTTPS", "POST", "AK", `/api/v2/clusters/${clusterId}/upgrade/pause`, null, request.headers, null, runtime), new PauseClusterUpgradeResponse({}));
  }

  async pauseClusterUpgrade(clusterId: string, request: PauseClusterUpgradeRequest): Promise<PauseClusterUpgradeResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.pauseClusterUpgradeWithOptions(clusterId, request, runtime);
  }

  async resumeUpgradeClusterWithOptions(clusterId: string, request: ResumeUpgradeClusterRequest, runtime: $Util.RuntimeOptions): Promise<ResumeUpgradeClusterResponse> {
    Util.validateModel(request);
    return $tea.cast<ResumeUpgradeClusterResponse>(await this.doRequest("2015-12-15", "HTTPS", "POST", "AK", `/api/v2/clusters/${clusterId}/upgrade/resume`, null, request.headers, null, runtime), new ResumeUpgradeClusterResponse({}));
  }

  async resumeUpgradeCluster(clusterId: string, request: ResumeUpgradeClusterRequest): Promise<ResumeUpgradeClusterResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.resumeUpgradeClusterWithOptions(clusterId, request, runtime);
  }

  async getUpgradeStatusWithOptions(clusterId: string, request: GetUpgradeStatusRequest, runtime: $Util.RuntimeOptions): Promise<GetUpgradeStatusResponse> {
    Util.validateModel(request);
    return $tea.cast<GetUpgradeStatusResponse>(await this.doRequest("2015-12-15", "HTTPS", "GET", "AK", `/api/v2/clusters/${clusterId}/upgrade/status`, null, request.headers, null, runtime), new GetUpgradeStatusResponse({}));
  }

  async getUpgradeStatus(clusterId: string, request: GetUpgradeStatusRequest): Promise<GetUpgradeStatusResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getUpgradeStatusWithOptions(clusterId, request, runtime);
  }

  async modifyClusterWithOptions(clusterId: string, request: ModifyClusterRequest, runtime: $Util.RuntimeOptions): Promise<ModifyClusterResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyClusterResponse>(await this.doRequest("2015-12-15", "HTTPS", "PUT", "AK", `/api/v2/clusters/${clusterId}`, null, request.headers, $tea.toMap(request.body), runtime), new ModifyClusterResponse({}));
  }

  async modifyCluster(clusterId: string, request: ModifyClusterRequest): Promise<ModifyClusterResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyClusterWithOptions(clusterId, request, runtime);
  }

  async installClusterAddonsWithOptions(clusterId: string, request: InstallClusterAddonsRequest, runtime: $Util.RuntimeOptions): Promise<InstallClusterAddonsResponse> {
    Util.validateModel(request);
    return $tea.cast<InstallClusterAddonsResponse>(await this.doRequest("2015-12-15", "HTTPS", "POST", "AK", `/clusters/${clusterId}/components/install`, null, request.headers, $tea.toMap(request.body), runtime), new InstallClusterAddonsResponse({}));
  }

  async installClusterAddons(clusterId: string, request: InstallClusterAddonsRequest): Promise<InstallClusterAddonsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.installClusterAddonsWithOptions(clusterId, request, runtime);
  }

  async modifyClusterTagsWithOptions(clusterId: string, request: ModifyClusterTagsRequest, runtime: $Util.RuntimeOptions): Promise<ModifyClusterTagsResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyClusterTagsResponse>(await this.doRequest("2015-12-15", "HTTPS", "POST", "AK", `/clusters/${clusterId}/tags`, null, request.headers, $tea.toMap(request.body), runtime), new ModifyClusterTagsResponse({}));
  }

  async modifyClusterTags(clusterId: string, request: ModifyClusterTagsRequest): Promise<ModifyClusterTagsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyClusterTagsWithOptions(clusterId, request, runtime);
  }

  async describeExternalAgentWithOptions(clusterId: string, request: DescribeExternalAgentRequest, runtime: $Util.RuntimeOptions): Promise<DescribeExternalAgentResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeExternalAgentResponse>(await this.doRequest("2015-12-15", "HTTPS", "GET", "AK", `/k8s/${clusterId}/external/agent/deployment`, null, request.headers, null, runtime), new DescribeExternalAgentResponse({}));
  }

  async describeExternalAgent(clusterId: string, request: DescribeExternalAgentRequest): Promise<DescribeExternalAgentResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeExternalAgentWithOptions(clusterId, request, runtime);
  }

  async describeClusterResourcesWithOptions(clusterId: string, request: DescribeClusterResourcesRequest, runtime: $Util.RuntimeOptions): Promise<DescribeClusterResourcesResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeClusterResourcesResponse>(await this.doRequest("2015-12-15", "HTTPS", "GET", "AK", `/clusters/${clusterId}/resources`, null, request.headers, null, runtime), new DescribeClusterResourcesResponse({}));
  }

  async describeClusterResources(clusterId: string, request: DescribeClusterResourcesRequest): Promise<DescribeClusterResourcesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeClusterResourcesWithOptions(clusterId, request, runtime);
  }

  async deleteClusterNodesWithOptions(clusterId: string, request: DeleteClusterNodesRequest, runtime: $Util.RuntimeOptions): Promise<DeleteClusterNodesResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteClusterNodesResponse>(await this.doRequest("2015-12-15", "HTTPS", "POST", "AK", `/clusters/${clusterId}/nodes`, null, request.headers, $tea.toMap(request.body), runtime), new DeleteClusterNodesResponse({}));
  }

  async deleteClusterNodes(clusterId: string, request: DeleteClusterNodesRequest): Promise<DeleteClusterNodesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteClusterNodesWithOptions(clusterId, request, runtime);
  }

  async describeClusterUserKubeconfigWithOptions(clusterId: string, request: DescribeClusterUserKubeconfigRequest, runtime: $Util.RuntimeOptions): Promise<DescribeClusterUserKubeconfigResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeClusterUserKubeconfigResponse>(await this.doRequest("2015-12-15", "HTTPS", "GET", "AK", `/k8s/${clusterId}/user_config`, Util.stringifyMapValue($tea.toMap(request.query)), request.headers, null, runtime), new DescribeClusterUserKubeconfigResponse({}));
  }

  async describeClusterUserKubeconfig(clusterId: string, request: DescribeClusterUserKubeconfigRequest): Promise<DescribeClusterUserKubeconfigResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeClusterUserKubeconfigWithOptions(clusterId, request, runtime);
  }

  async describeClusterNodesWithOptions(clusterId: string, request: DescribeClusterNodesRequest, runtime: $Util.RuntimeOptions): Promise<DescribeClusterNodesResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeClusterNodesResponse>(await this.doRequest("2015-12-15", "HTTPS", "GET", "AK", `/clusters/${clusterId}/nodes`, Util.stringifyMapValue($tea.toMap(request.query)), request.headers, null, runtime), new DescribeClusterNodesResponse({}));
  }

  async describeClusterNodes(clusterId: string, request: DescribeClusterNodesRequest): Promise<DescribeClusterNodesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeClusterNodesWithOptions(clusterId, request, runtime);
  }

  async attachInstancesWithOptions(clusterId: string, request: AttachInstancesRequest, runtime: $Util.RuntimeOptions): Promise<AttachInstancesResponse> {
    Util.validateModel(request);
    return $tea.cast<AttachInstancesResponse>(await this.doRequest("2015-12-15", "HTTPS", "POST", "AK", `/clusters/${clusterId}/attach`, null, request.headers, $tea.toMap(request.body), runtime), new AttachInstancesResponse({}));
  }

  async attachInstances(clusterId: string, request: AttachInstancesRequest): Promise<AttachInstancesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.attachInstancesWithOptions(clusterId, request, runtime);
  }

  async describeTemplatesWithOptions(request: DescribeTemplatesRequest, runtime: $Util.RuntimeOptions): Promise<DescribeTemplatesResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeTemplatesResponse>(await this.doRequest("2015-12-15", "HTTPS", "GET", "AK", `/templates`, Util.stringifyMapValue($tea.toMap(request.query)), request.headers, null, runtime), new DescribeTemplatesResponse({}));
  }

  async describeTemplates(request: DescribeTemplatesRequest): Promise<DescribeTemplatesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeTemplatesWithOptions(request, runtime);
  }

  async createClusterWithOptions(request: CreateClusterRequest, runtime: $Util.RuntimeOptions): Promise<CreateClusterResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateClusterResponse>(await this.doRequest("2015-12-15", "HTTPS", "POST", "AK", `/clusters`, null, request.headers, $tea.toMap(request.body), runtime), new CreateClusterResponse({}));
  }

  async createCluster(request: CreateClusterRequest): Promise<CreateClusterResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createClusterWithOptions(request, runtime);
  }

  async scaleClusterWithOptions(clusterId: string, request: ScaleClusterRequest, runtime: $Util.RuntimeOptions): Promise<ScaleClusterResponse> {
    Util.validateModel(request);
    return $tea.cast<ScaleClusterResponse>(await this.doRequest("2015-12-15", "HTTPS", "PUT", "AK", `/clusters/${clusterId}`, null, request.headers, null, runtime), new ScaleClusterResponse({}));
  }

  async scaleCluster(clusterId: string, request: ScaleClusterRequest): Promise<ScaleClusterResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.scaleClusterWithOptions(clusterId, request, runtime);
  }

  async describeClustersWithOptions(request: DescribeClustersRequest, runtime: $Util.RuntimeOptions): Promise<DescribeClustersResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeClustersResponse>(await this.doRequest("2015-12-15", "HTTPS", "GET", "AK", `/clusters`, Util.stringifyMapValue($tea.toMap(request.query)), request.headers, null, runtime), new DescribeClustersResponse({}));
  }

  async describeClusters(request: DescribeClustersRequest): Promise<DescribeClustersResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeClustersWithOptions(request, runtime);
  }

  async deleteClusterWithOptions(clusterId: string, request: DeleteClusterRequest, runtime: $Util.RuntimeOptions): Promise<DeleteClusterResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteClusterResponse>(await this.doRequest("2015-12-15", "HTTPS", "DELETE", "AK", `/clusters/${clusterId}`, null, request.headers, null, runtime), new DeleteClusterResponse({}));
  }

  async deleteCluster(clusterId: string, request: DeleteClusterRequest): Promise<DeleteClusterResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteClusterWithOptions(clusterId, request, runtime);
  }

  async describeApiVersionWithOptions(request: DescribeApiVersionRequest, runtime: $Util.RuntimeOptions): Promise<DescribeApiVersionResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeApiVersionResponse>(await this.doRequest("2015-12-15", "HTTPS", "GET", "AK", `/version`, null, request.headers, null, runtime), new DescribeApiVersionResponse({}));
  }

  async describeApiVersion(request: DescribeApiVersionRequest): Promise<DescribeApiVersionResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeApiVersionWithOptions(request, runtime);
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
