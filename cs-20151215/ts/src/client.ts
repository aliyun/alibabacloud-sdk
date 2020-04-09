// This file is auto-generated, don't edit it
import Util, * as $Util from '@alicloud/tea-util';
import ROA, * as $ROA from '@alicloud/roa-client';
import EndpointUtil from '@alicloud/endpoint-util';
import { Readable } from 'stream';
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

export class CreateServiceMeshRequest extends $tea.Model {
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

export class CreateServiceMeshResponseBody extends $tea.Model {
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

export class CreateServiceMeshResponse extends $tea.Model {
  headers: { [key: string]: string };
  body: CreateServiceMeshResponseBody;
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
      body: 'body',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
      body: CreateServiceMeshResponseBody,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ServiceMeshAddClusterRequest extends $tea.Model {
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

export class ServiceMeshAddClusterResponseBody extends $tea.Model {
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

export class ServiceMeshAddClusterResponse extends $tea.Model {
  headers: { [key: string]: string };
  body: ServiceMeshAddClusterResponseBody;
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
      body: 'body',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
      body: ServiceMeshAddClusterResponseBody,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ServiceMeshRemoveClusterRequest extends $tea.Model {
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

export class ServiceMeshRemoveClusterResponseBody extends $tea.Model {
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

export class ServiceMeshRemoveClusterResponse extends $tea.Model {
  headers: { [key: string]: string };
  body: ServiceMeshRemoveClusterResponseBody;
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
      body: 'body',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
      body: ServiceMeshRemoveClusterResponseBody,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateServiceMeshRequest extends $tea.Model {
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

export class UpdateServiceMeshResponseBody extends $tea.Model {
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

export class UpdateServiceMeshResponse extends $tea.Model {
  headers: { [key: string]: string };
  body: UpdateServiceMeshResponseBody;
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
      body: 'body',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
      body: UpdateServiceMeshResponseBody,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ServiceMeshApiServerRequest extends $tea.Model {
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

export class ServiceMeshApiServerResponse extends $tea.Model {
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

export class DescribeAddonsQuery extends $tea.Model {
  region: string;
  static names(): { [key: string]: string } {
    return {
      region: 'region',
    };
  }

  static types(): { [key: string]: any } {
    return {
      region: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAddonsRequest extends $tea.Model {
  query: DescribeAddonsQuery;
  headers?: { [key: string]: string };
  static names(): { [key: string]: string } {
    return {
      query: 'query',
      headers: 'headers',
    };
  }

  static types(): { [key: string]: any } {
    return {
      query: DescribeAddonsQuery,
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAddonsResponseBody extends $tea.Model {
  componentGroups: DescribeAddonsResponseBodyComponentGroups[];
  standardComponents: DescribeAddonsResponseBodyStandardComponents;
  static names(): { [key: string]: string } {
    return {
      componentGroups: 'ComponentGroups',
      standardComponents: 'StandardComponents',
    };
  }

  static types(): { [key: string]: any } {
    return {
      componentGroups: { 'type': 'array', 'itemType': DescribeAddonsResponseBodyComponentGroups },
      standardComponents: DescribeAddonsResponseBodyStandardComponents,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAddonsResponse extends $tea.Model {
  headers: { [key: string]: string };
  body: DescribeAddonsResponseBody;
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
      body: 'body',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
      body: DescribeAddonsResponseBody,
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

export class UpdateK8sClusterUserConfigExpireResponseBody extends $tea.Model {
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

export class UpdateK8sClusterUserConfigExpireResponse extends $tea.Model {
  headers: { [key: string]: string };
  body: UpdateK8sClusterUserConfigExpireResponseBody;
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
      body: 'body',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
      body: UpdateK8sClusterUserConfigExpireResponseBody,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeClusterV2UserKubeconfigQuery extends $tea.Model {
  privateIpAddress: boolean;
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
  query: DescribeClusterV2UserKubeconfigQuery;
  headers?: { [key: string]: string };
  static names(): { [key: string]: string } {
    return {
      query: 'query',
      headers: 'headers',
    };
  }

  static types(): { [key: string]: any } {
    return {
      query: DescribeClusterV2UserKubeconfigQuery,
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
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

export class ScaleOutClusterBody extends $tea.Model {
  count: number;
  workerInstanceChargeType: string;
  workerPeriod: number;
  workerPeriodUnit: string;
  workerAutoRenew: boolean;
  workerAutoRenewPeriod: number;
  workerSystemDiskCategory: string;
  workerSystemDiskSize: number;
  workerDataDisk: boolean;
  keyPair: string;
  loginPassword: string;
  cloudMonitorFlags: boolean;
  cpuPolicy: string;
  disableRollback: boolean;
  workerDataDisks: ScaleOutClusterBodyWorkerDataDisks[];
  tags: ScaleOutClusterBodyTags[];
  taints: ScaleOutClusterBodyTaints[];
  vswitchIds: string[];
  workerInstanceTypes: string[];
  static names(): { [key: string]: string } {
    return {
      count: 'count',
      workerInstanceChargeType: 'worker_instance_charge_type',
      workerPeriod: 'worker_period',
      workerPeriodUnit: 'worker_period_unit',
      workerAutoRenew: 'worker_auto_renew',
      workerAutoRenewPeriod: 'worker_auto_renew_period',
      workerSystemDiskCategory: 'worker_system_disk_category',
      workerSystemDiskSize: 'worker_system_disk_size',
      workerDataDisk: 'worker_data_disk',
      keyPair: 'key_pair',
      loginPassword: 'login_password',
      cloudMonitorFlags: 'cloud_monitor_flags',
      cpuPolicy: 'cpu_policy',
      disableRollback: 'disable_rollback',
      workerDataDisks: 'worker_data_disks',
      tags: 'tags',
      taints: 'taints',
      vswitchIds: 'vswitch_ids',
      workerInstanceTypes: 'worker_instance_types',
    };
  }

  static types(): { [key: string]: any } {
    return {
      count: 'number',
      workerInstanceChargeType: 'string',
      workerPeriod: 'number',
      workerPeriodUnit: 'string',
      workerAutoRenew: 'boolean',
      workerAutoRenewPeriod: 'number',
      workerSystemDiskCategory: 'string',
      workerSystemDiskSize: 'number',
      workerDataDisk: 'boolean',
      keyPair: 'string',
      loginPassword: 'string',
      cloudMonitorFlags: 'boolean',
      cpuPolicy: 'string',
      disableRollback: 'boolean',
      workerDataDisks: { 'type': 'array', 'itemType': ScaleOutClusterBodyWorkerDataDisks },
      tags: { 'type': 'array', 'itemType': ScaleOutClusterBodyTags },
      taints: { 'type': 'array', 'itemType': ScaleOutClusterBodyTaints },
      vswitchIds: { 'type': 'array', 'itemType': 'string' },
      workerInstanceTypes: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ScaleOutClusterRequest extends $tea.Model {
  headers?: { [key: string]: string };
  body: ScaleOutClusterBody;
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
      body: 'body',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
      body: ScaleOutClusterBody,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ScaleOutClusterResponseBody extends $tea.Model {
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

export class ScaleOutClusterResponse extends $tea.Model {
  headers: { [key: string]: string };
  body: ScaleOutClusterResponseBody;
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
      body: 'body',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
      body: ScaleOutClusterResponseBody,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeClusterAddonsVersionRequest extends $tea.Model {
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

export class DescribeClusterAddonsVersionResponseBody extends $tea.Model {
  template: string;
  readyToUpgrade: string;
  nextVersion: string;
  canUpgrade: boolean;
  componentName: string;
  version: string;
  changed: string;
  message: string;
  policy: string;
  force: boolean;
  required: boolean;
  exist: boolean;
  static names(): { [key: string]: string } {
    return {
      template: 'template',
      readyToUpgrade: 'ready_to_upgrade',
      nextVersion: 'next_version',
      canUpgrade: 'can_upgrade',
      componentName: 'component_name',
      version: 'version',
      changed: 'changed',
      message: 'message',
      policy: 'policy',
      force: 'force',
      required: 'required',
      exist: 'exist',
    };
  }

  static types(): { [key: string]: any } {
    return {
      template: 'string',
      readyToUpgrade: 'string',
      nextVersion: 'string',
      canUpgrade: 'boolean',
      componentName: 'string',
      version: 'string',
      changed: 'string',
      message: 'string',
      policy: 'string',
      force: 'boolean',
      required: 'boolean',
      exist: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeClusterAddonsVersionResponse extends $tea.Model {
  headers: { [key: string]: string };
  body: DescribeClusterAddonsVersionResponseBody;
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
      body: 'body',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
      body: DescribeClusterAddonsVersionResponseBody,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeClusterAddonUpgradeStatusRequest extends $tea.Model {
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

export class DescribeClusterAddonUpgradeStatusResponseBody extends $tea.Model {
  componentId: DescribeClusterAddonUpgradeStatusResponseBodyComponentId;
  static names(): { [key: string]: string } {
    return {
      componentId: 'ComponentId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      componentId: DescribeClusterAddonUpgradeStatusResponseBodyComponentId,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeClusterAddonUpgradeStatusResponse extends $tea.Model {
  headers: { [key: string]: string };
  body: DescribeClusterAddonUpgradeStatusResponseBody;
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
      body: 'body',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
      body: DescribeClusterAddonUpgradeStatusResponseBody,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeEdgeClusterAttachScriptsQuery extends $tea.Model {
  namePrefix: string;
  static names(): { [key: string]: string } {
    return {
      namePrefix: 'NamePrefix',
    };
  }

  static types(): { [key: string]: any } {
    return {
      namePrefix: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeEdgeClusterAttachScriptsBody extends $tea.Model {
  options: DescribeEdgeClusterAttachScriptsBodyOptions;
  static names(): { [key: string]: string } {
    return {
      options: 'options',
    };
  }

  static types(): { [key: string]: any } {
    return {
      options: DescribeEdgeClusterAttachScriptsBodyOptions,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeEdgeClusterAttachScriptsRequest extends $tea.Model {
  query: DescribeEdgeClusterAttachScriptsQuery;
  headers?: { [key: string]: string };
  body: DescribeEdgeClusterAttachScriptsBody;
  static names(): { [key: string]: string } {
    return {
      query: 'query',
      headers: 'headers',
      body: 'body',
    };
  }

  static types(): { [key: string]: any } {
    return {
      query: DescribeEdgeClusterAttachScriptsQuery,
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
      body: DescribeEdgeClusterAttachScriptsBody,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeEdgeClusterAttachScriptsResponseBody extends $tea.Model {
  requestId: string;
  config: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      config: 'config',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      config: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeEdgeClusterAttachScriptsResponse extends $tea.Model {
  headers: { [key: string]: string };
  body: DescribeEdgeClusterAttachScriptsResponseBody;
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
      body: 'body',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
      body: DescribeEdgeClusterAttachScriptsResponseBody,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteClusterNodesBody extends $tea.Model {
  releaseNode: string;
  nodes: string[];
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
  privateIpAddress: boolean;
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
  query: DescribeClusterUserKubeconfigQuery;
  headers?: { [key: string]: string };
  static names(): { [key: string]: string } {
    return {
      query: 'query',
      headers: 'headers',
    };
  }

  static types(): { [key: string]: any } {
    return {
      query: DescribeClusterUserKubeconfigQuery,
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeClusterUserKubeconfigResponseBody extends $tea.Model {
  requestId: string;
  config: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      config: 'config',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
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

export class AttachInstancesBody extends $tea.Model {
  formatDisk: boolean;
  keepInstanceName: boolean;
  cpuPolicy: string;
  keyPair: string;
  password: string;
  tags: AttachInstancesBodyTags[];
  instances: string[];
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
  list: AttachInstancesResponseBodyList;
  static names(): { [key: string]: string } {
    return {
      taskId: 'task_id',
      list: 'list',
    };
  }

  static types(): { [key: string]: any } {
    return {
      taskId: 'string',
      list: AttachInstancesResponseBodyList,
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

export class CreateClusterBody extends $tea.Model {
  clusterType: string;
  name: string;
  regionId: string;
  kubernetesVersion: string;
  snatEntry: boolean;
  endpointPublicAccess: boolean;
  sshFlags: boolean;
  cloudMonitorFlags: boolean;
  deletionProtection: boolean;
  nodeCidrMask: string;
  proxyMode: string;
  osType: string;
  platform: string;
  nodePortRange: string;
  keyPair: string;
  loginPassword: string;
  masterInstanceChargeType: string;
  workerInstanceChargeType: string;
  masterPeriod: number;
  workerPeriod: number;
  masterPeriodUnit: string;
  workerPeriodUnit: string;
  masterAutoRenew: boolean;
  masterAutoRenewPeriod: number;
  workerAutoRenew: boolean;
  workerAutoRenewPeriod: number;
  cpuPolicy: string;
  masterCount: number;
  masterSystemDiskCategory: string;
  masterSystemDiskSize: number;
  runtime: { [key: string]: any };
  numOfNodes: number;
  workerSystemDiskCategory: string;
  workerSystemDiskSize: number;
  workerDataDisk: boolean;
  vpcid: string;
  securityGroupId: string;
  containerCidr: string;
  serviceCidr: string;
  disableRollback: boolean;
  timeoutMins: number;
  tags: CreateClusterBodyTags[];
  addons: CreateClusterBodyAddons[];
  taints: CreateClusterBodyTaints[];
  workerDataDisks: CreateClusterBodyWorkerDataDisks[];
  masterVswitchIds: string[];
  masterInstanceTypes: string[];
  workerInstanceTypes: string[];
  workerVswitchIds: string[];
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
  name: string;
  clusterType: string;
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
  query: DescribeClustersQuery;
  headers?: { [key: string]: string };
  static names(): { [key: string]: string } {
    return {
      query: 'query',
      headers: 'headers',
    };
  }

  static types(): { [key: string]: any } {
    return {
      query: DescribeClustersQuery,
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeClustersResponseBody extends $tea.Model {
  clusters: DescribeClustersResponseBodyClusters[];
  static names(): { [key: string]: string } {
    return {
      clusters: 'clusters',
    };
  }

  static types(): { [key: string]: any } {
    return {
      clusters: { 'type': 'array', 'itemType': DescribeClustersResponseBodyClusters },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeClustersResponse extends $tea.Model {
  headers: { [key: string]: string };
  body: DescribeClustersResponseBody;
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
      body: 'body',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
      body: DescribeClustersResponseBody,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeClusterDetailRequest extends $tea.Model {
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

export class DescribeClusterDetailResponseBody extends $tea.Model {
  name: string;
  clusterId: string;
  size: number;
  regionId: string;
  state: string;
  clusterType: string;
  created: string;
  updated: string;
  initVersion: string;
  currentVersion: string;
  metaData: string;
  resourceGroupId: string;
  instanceType: string;
  vpcId: string;
  vswitchId: string;
  vswitchCidr: string;
  dataDiskSize: number;
  dataDiskCategory: string;
  securityGroupId: string;
  zoneId: string;
  networkMode: string;
  subnetCidr: string;
  masterUrl: string;
  externalLoadbalancerId: string;
  port: number;
  nodeStatus: string;
  clusterHealthy: string;
  dockerVersion: string;
  swarmMode: boolean;
  gwBridge: string;
  privateZone: boolean;
  profile: string;
  deletionProtection: boolean;
  capabilities: string;
  enabledMigration: boolean;
  needUpdateAgent: boolean;
  tags: DescribeClusterDetailResponseBodyTags[];
  outputs: DescribeClusterDetailResponseBodyOutputs[];
  upgradeComponents: DescribeClusterDetailResponseBodyUpgradeComponents;
  parameters: DescribeClusterDetailResponseBodyParameters;
  static names(): { [key: string]: string } {
    return {
      name: 'name',
      clusterId: 'cluster_id',
      size: 'size',
      regionId: 'region_id',
      state: 'state',
      clusterType: 'cluster_type',
      created: 'created',
      updated: 'updated',
      initVersion: 'init_version',
      currentVersion: 'current_version',
      metaData: 'meta_data',
      resourceGroupId: 'resource_group_id',
      instanceType: 'instance_type',
      vpcId: 'vpc_id',
      vswitchId: 'vswitch_id',
      vswitchCidr: 'vswitch_cidr',
      dataDiskSize: 'data_disk_size',
      dataDiskCategory: 'data_disk_category',
      securityGroupId: 'security_group_id',
      zoneId: 'zone_id',
      networkMode: 'network_mode',
      subnetCidr: 'subnet_cidr',
      masterUrl: 'master_url',
      externalLoadbalancerId: 'external_loadbalancer_id',
      port: 'port',
      nodeStatus: 'node_status',
      clusterHealthy: 'cluster_healthy',
      dockerVersion: 'docker_version',
      swarmMode: 'swarm_mode',
      gwBridge: 'gw_bridge',
      privateZone: 'private_zone',
      profile: 'profile',
      deletionProtection: 'deletion_protection',
      capabilities: 'capabilities',
      enabledMigration: 'enabled_migration',
      needUpdateAgent: 'need_update_agent',
      tags: 'tags',
      outputs: 'outputs',
      upgradeComponents: 'upgrade_components',
      parameters: 'parameters',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
      clusterId: 'string',
      size: 'number',
      regionId: 'string',
      state: 'string',
      clusterType: 'string',
      created: 'string',
      updated: 'string',
      initVersion: 'string',
      currentVersion: 'string',
      metaData: 'string',
      resourceGroupId: 'string',
      instanceType: 'string',
      vpcId: 'string',
      vswitchId: 'string',
      vswitchCidr: 'string',
      dataDiskSize: 'number',
      dataDiskCategory: 'string',
      securityGroupId: 'string',
      zoneId: 'string',
      networkMode: 'string',
      subnetCidr: 'string',
      masterUrl: 'string',
      externalLoadbalancerId: 'string',
      port: 'number',
      nodeStatus: 'string',
      clusterHealthy: 'string',
      dockerVersion: 'string',
      swarmMode: 'boolean',
      gwBridge: 'string',
      privateZone: 'boolean',
      profile: 'string',
      deletionProtection: 'boolean',
      capabilities: 'string',
      enabledMigration: 'boolean',
      needUpdateAgent: 'boolean',
      tags: { 'type': 'array', 'itemType': DescribeClusterDetailResponseBodyTags },
      outputs: { 'type': 'array', 'itemType': DescribeClusterDetailResponseBodyOutputs },
      upgradeComponents: DescribeClusterDetailResponseBodyUpgradeComponents,
      parameters: DescribeClusterDetailResponseBodyParameters,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeClusterDetailResponse extends $tea.Model {
  headers: { [key: string]: string };
  body: DescribeClusterDetailResponseBody;
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
      body: 'body',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
      body: DescribeClusterDetailResponseBody,
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

export class DescribeAddonsResponseBodyComponentGroupsItems extends $tea.Model {
  name: string;
  config: string;
  required: string;
  disabled: boolean;
  version: string;
  static names(): { [key: string]: string } {
    return {
      name: 'name',
      config: 'config',
      required: 'required',
      disabled: 'disabled',
      version: 'version',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
      config: 'string',
      required: 'string',
      disabled: 'boolean',
      version: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAddonsResponseBodyComponentGroups extends $tea.Model {
  groupName: string;
  items: DescribeAddonsResponseBodyComponentGroupsItems[];
  default: string[];
  static names(): { [key: string]: string } {
    return {
      groupName: 'group_name',
      items: 'items',
      default: 'default',
    };
  }

  static types(): { [key: string]: any } {
    return {
      groupName: 'string',
      items: { 'type': 'array', 'itemType': DescribeAddonsResponseBodyComponentGroupsItems },
      default: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAddonsResponseBodyStandardComponentsAddonName extends $tea.Model {
  name: string;
  config: string;
  required: string;
  disabled: boolean;
  version: string;
  static names(): { [key: string]: string } {
    return {
      name: 'name',
      config: 'config',
      required: 'required',
      disabled: 'disabled',
      version: 'version',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
      config: 'string',
      required: 'string',
      disabled: 'boolean',
      version: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAddonsResponseBodyStandardComponents extends $tea.Model {
  addonName: DescribeAddonsResponseBodyStandardComponentsAddonName;
  static names(): { [key: string]: string } {
    return {
      addonName: 'addon_name',
    };
  }

  static types(): { [key: string]: any } {
    return {
      addonName: DescribeAddonsResponseBodyStandardComponentsAddonName,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ScaleOutClusterBodyWorkerDataDisks extends $tea.Model {
  category: string;
  size: string;
  encrypted: string;
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

export class ScaleOutClusterBodyTags extends $tea.Model {
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

export class ScaleOutClusterBodyTaints extends $tea.Model {
  key: string;
  value: string;
  effect: string;
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

export class DescribeClusterAddonUpgradeStatusResponseBodyComponentIdAddonInfo extends $tea.Model {
  componentName: string;
  readyToUpgrade: string;
  message: string;
  version: string;
  yaml: string;
  static names(): { [key: string]: string } {
    return {
      componentName: 'component_name',
      readyToUpgrade: 'ready_to_upgrade',
      message: 'message',
      version: 'version',
      yaml: 'yaml',
    };
  }

  static types(): { [key: string]: any } {
    return {
      componentName: 'string',
      readyToUpgrade: 'string',
      message: 'string',
      version: 'string',
      yaml: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeClusterAddonUpgradeStatusResponseBodyComponentIdTasks extends $tea.Model {
  finishedAt: string;
  masterUrl: string;
  createdAt: string;
  status: string;
  static names(): { [key: string]: string } {
    return {
      finishedAt: 'finished_at',
      masterUrl: 'master_url',
      createdAt: 'created_at',
      status: 'status',
    };
  }

  static types(): { [key: string]: any } {
    return {
      finishedAt: 'string',
      masterUrl: 'string',
      createdAt: 'string',
      status: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeClusterAddonUpgradeStatusResponseBodyComponentId extends $tea.Model {
  template: string;
  canUpgrade: boolean;
  changed: string;
  addonInfo: DescribeClusterAddonUpgradeStatusResponseBodyComponentIdAddonInfo;
  tasks: DescribeClusterAddonUpgradeStatusResponseBodyComponentIdTasks;
  static names(): { [key: string]: string } {
    return {
      template: 'template',
      canUpgrade: 'can_upgrade',
      changed: 'changed',
      addonInfo: 'addon_info',
      tasks: 'tasks',
    };
  }

  static types(): { [key: string]: any } {
    return {
      template: 'string',
      canUpgrade: 'boolean',
      changed: 'string',
      addonInfo: DescribeClusterAddonUpgradeStatusResponseBodyComponentIdAddonInfo,
      tasks: DescribeClusterAddonUpgradeStatusResponseBodyComponentIdTasks,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeEdgeClusterAttachScriptsBodyOptions extends $tea.Model {
  enableIptables: boolean;
  flannelIface: string;
  gpuVersion: string;
  manageRuntime: boolean;
  nodeName: string;
  nodeNamePrefix: string;
  nodeNameStrategy: boolean;
  static names(): { [key: string]: string } {
    return {
      enableIptables: 'enableIptables',
      flannelIface: 'flannelIface',
      gpuVersion: 'gpuVersion',
      manageRuntime: 'manageRuntime',
      nodeName: 'nodeName',
      nodeNamePrefix: 'nodeNamePrefix',
      nodeNameStrategy: 'nodeNameStrategy',
    };
  }

  static types(): { [key: string]: any } {
    return {
      enableIptables: 'boolean',
      flannelIface: 'string',
      gpuVersion: 'string',
      manageRuntime: 'boolean',
      nodeName: 'string',
      nodeNamePrefix: 'string',
      nodeNameStrategy: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AttachInstancesBodyTags extends $tea.Model {
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

export class AttachInstancesResponseBodyListList extends $tea.Model {
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

export class AttachInstancesResponseBodyList extends $tea.Model {
  list: AttachInstancesResponseBodyListList[];
  static names(): { [key: string]: string } {
    return {
      list: 'list',
    };
  }

  static types(): { [key: string]: any } {
    return {
      list: { 'type': 'array', 'itemType': AttachInstancesResponseBodyListList },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateClusterBodyTags extends $tea.Model {
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

export class CreateClusterBodyAddons extends $tea.Model {
  name: string;
  config: string;
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
  key: string;
  value: string;
  effect: string;
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
  category: string;
  size: string;
  encrypted: string;
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

export class DescribeClustersResponseBodyClustersTags extends $tea.Model {
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

export class DescribeClustersResponseBodyClustersOutputs extends $tea.Model {
  description: string;
  outputKey: string;
  outputValue: string;
  static names(): { [key: string]: string } {
    return {
      description: 'Description',
      outputKey: 'OutputKey',
      outputValue: 'OutputValue',
    };
  }

  static types(): { [key: string]: any } {
    return {
      description: 'string',
      outputKey: 'string',
      outputValue: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeClustersResponseBodyClustersUpgradeComponentsKubernetes extends $tea.Model {
  componentName: string;
  version: string;
  nextVersion: string;
  changed: string;
  canUpgrade: boolean;
  force: boolean;
  policy: string;
  extraVars: string;
  readyToUpgrade: string;
  message: string;
  exist: boolean;
  required: boolean;
  template: string;
  static names(): { [key: string]: string } {
    return {
      componentName: 'component_name',
      version: 'version',
      nextVersion: 'next_version',
      changed: 'changed',
      canUpgrade: 'can_upgrade',
      force: 'force',
      policy: 'policy',
      extraVars: 'ExtraVars',
      readyToUpgrade: 'ready_to_upgrade',
      message: 'message',
      exist: 'exist',
      required: 'required',
      template: 'template',
    };
  }

  static types(): { [key: string]: any } {
    return {
      componentName: 'string',
      version: 'string',
      nextVersion: 'string',
      changed: 'string',
      canUpgrade: 'boolean',
      force: 'boolean',
      policy: 'string',
      extraVars: 'string',
      readyToUpgrade: 'string',
      message: 'string',
      exist: 'boolean',
      required: 'boolean',
      template: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeClustersResponseBodyClustersUpgradeComponents extends $tea.Model {
  kubernetes: DescribeClustersResponseBodyClustersUpgradeComponentsKubernetes;
  static names(): { [key: string]: string } {
    return {
      kubernetes: 'Kubernetes',
    };
  }

  static types(): { [key: string]: any } {
    return {
      kubernetes: DescribeClustersResponseBodyClustersUpgradeComponentsKubernetes,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeClustersResponseBodyClustersParameters extends $tea.Model {
  adjustmentType: string;
  auditFlags: string;
  betaVersion: string;
  CA: string;
  clientCA: string;
  cloudMonitorFlags: string;
  cloudMonitorVersion: string;
  containerCIDR: string;
  disableAddons: string;
  dockerVersion: string;
  ESSDeletionProtection: string;
  eip: string;
  eipAddress: string;
  elasticSearchHost: string;
  elasticSearchPass: string;
  elasticSearchPort: string;
  elasticSearchUser: string;
  etcdVersion: string;
  executeVersion: string;
  GPUFlags: string;
  healthCheckType: string;
  imageId: string;
  k8SMasterPolicyDocument: string;
  k8sWorkerPolicyDocument: string;
  key: string;
  keyPair: string;
  kubernetesVersion: string;
  loggingType: string;
  masterAmounts: string;
  masterAutoRenew: string;
  masterAutoRenewPeriod: string;
  masterCount: string;
  masterDataDisk: string;
  masterDataDisks: string;
  masterDeletionProtection: string;
  masterDeploymentSetId: string;
  masterHpcClusterId: string;
  masterImageId: string;
  masterInstanceChargeType: string;
  masterInstanceTypes: string;
  masterKeyPair: string;
  masterLoginPassword: string;
  masterPeriod: string;
  masterPeriodUnit: string;
  masterSlbSShHealthCheck: string;
  masterSnapshotPolicyId: string;
  masterSystemDiskCategory: string;
  masterSystemDiskSize: string;
  masterVSwitchIds: string;
  natGateway: string;
  natGatewayId: string;
  network: string;
  nodeCIDRMask: string;
  nodeNameMode: string;
  numOfNodes: string;
  password: string;
  podVswitchIds: string;
  protectedInstances: string;
  proxyMode: string;
  publicSLB: string;
  removeInstanceIds: string;
  resourceGroupId: string;
  SLBDeletionProtection: string;
  SLSProjectName: string;
  SNatEntry: string;
  SSHFlags: string;
  securityGroupId: string;
  serviceCIDR: string;
  setUpArgs: string;
  snatTableId: string;
  tags: string;
  userCA: string;
  userData: string;
  vpcId: string;
  willReplace: string;
  workerAutoRenew: string;
  workerAutoRenewPeriod: string;
  workerDataDisk: string;
  workerDataDisks: string;
  workerDeletionProtection: string;
  workerDeploymentSetId: string;
  workerHpcClusterId: string;
  workerImageId: string;
  workerInstanceChargeType: string;
  workerInstanceTypes: string;
  workerKeyPair: string;
  workerLoginPassword: string;
  workerPeriod: string;
  workerPeriodUnit: string;
  workerSnapshotPolicyId: string;
  workerSystemDiskCategory: string;
  workerSystemDiskSize: string;
  workerVSwitchIds: string;
  zoneId: string;
  static names(): { [key: string]: string } {
    return {
      adjustmentType: 'AdjustmentType',
      auditFlags: 'AuditFlags',
      betaVersion: 'BetaVersion',
      CA: 'CA',
      clientCA: 'ClientCA',
      cloudMonitorFlags: 'CloudMonitorFlags',
      cloudMonitorVersion: 'CloudMonitorVersion',
      containerCIDR: 'ContainerCIDR',
      disableAddons: 'DisableAddons',
      dockerVersion: 'DockerVersion',
      ESSDeletionProtection: 'ESSDeletionProtection',
      eip: 'Eip',
      eipAddress: 'EipAddress',
      elasticSearchHost: 'ElasticSearchHost',
      elasticSearchPass: 'ElasticSearchPass',
      elasticSearchPort: 'ElasticSearchPort',
      elasticSearchUser: 'ElasticSearchUser',
      etcdVersion: 'EtcdVersion',
      executeVersion: 'ExecuteVersion',
      GPUFlags: 'GPUFlags',
      healthCheckType: 'HealthCheckType',
      imageId: 'ImageId',
      k8SMasterPolicyDocument: 'K8SMasterPolicyDocument',
      k8sWorkerPolicyDocument: 'K8sWorkerPolicyDocument',
      key: 'Key',
      keyPair: 'KeyPair',
      kubernetesVersion: 'KubernetesVersion',
      loggingType: 'LoggingType',
      masterAmounts: 'MasterAmounts',
      masterAutoRenew: 'MasterAutoRenew',
      masterAutoRenewPeriod: 'MasterAutoRenewPeriod',
      masterCount: 'MasterCount',
      masterDataDisk: 'MasterDataDisk',
      masterDataDisks: 'MasterDataDisks',
      masterDeletionProtection: 'MasterDeletionProtection',
      masterDeploymentSetId: 'MasterDeploymentSetId',
      masterHpcClusterId: 'MasterHpcClusterId',
      masterImageId: 'MasterImageId',
      masterInstanceChargeType: 'MasterInstanceChargeType',
      masterInstanceTypes: 'MasterInstanceTypes',
      masterKeyPair: 'MasterKeyPair',
      masterLoginPassword: 'MasterLoginPassword',
      masterPeriod: 'MasterPeriod',
      masterPeriodUnit: 'MasterPeriodUnit',
      masterSlbSShHealthCheck: 'MasterSlbSShHealthCheck',
      masterSnapshotPolicyId: 'MasterSnapshotPolicyId',
      masterSystemDiskCategory: 'MasterSystemDiskCategory',
      masterSystemDiskSize: 'MasterSystemDiskSize',
      masterVSwitchIds: 'MasterVSwitchIds',
      natGateway: 'NatGateway',
      natGatewayId: 'NatGatewayId',
      network: 'Network',
      nodeCIDRMask: 'NodeCIDRMask',
      nodeNameMode: 'NodeNameMode',
      numOfNodes: 'NumOfNodes',
      password: 'Password',
      podVswitchIds: 'PodVswitchIds',
      protectedInstances: 'ProtectedInstances',
      proxyMode: 'ProxyMode',
      publicSLB: 'PublicSLB',
      removeInstanceIds: 'RemoveInstanceIds',
      resourceGroupId: 'ResourceGroupId',
      SLBDeletionProtection: 'SLBDeletionProtection',
      SLSProjectName: 'SLSProjectName',
      SNatEntry: 'SNatEntry',
      SSHFlags: 'SSHFlags',
      securityGroupId: 'SecurityGroupId',
      serviceCIDR: 'ServiceCIDR',
      setUpArgs: 'SetUpArgs',
      snatTableId: 'SnatTableId',
      tags: 'Tags',
      userCA: 'UserCA',
      userData: 'UserData',
      vpcId: 'VpcId',
      willReplace: 'WillReplace',
      workerAutoRenew: 'WorkerAutoRenew',
      workerAutoRenewPeriod: 'WorkerAutoRenewPeriod',
      workerDataDisk: 'WorkerDataDisk',
      workerDataDisks: 'WorkerDataDisks',
      workerDeletionProtection: 'WorkerDeletionProtection',
      workerDeploymentSetId: 'WorkerDeploymentSetId',
      workerHpcClusterId: 'WorkerHpcClusterId',
      workerImageId: 'WorkerImageId',
      workerInstanceChargeType: 'WorkerInstanceChargeType',
      workerInstanceTypes: 'WorkerInstanceTypes',
      workerKeyPair: 'WorkerKeyPair',
      workerLoginPassword: 'WorkerLoginPassword',
      workerPeriod: 'WorkerPeriod',
      workerPeriodUnit: 'WorkerPeriodUnit',
      workerSnapshotPolicyId: 'WorkerSnapshotPolicyId',
      workerSystemDiskCategory: 'WorkerSystemDiskCategory',
      workerSystemDiskSize: 'WorkerSystemDiskSize',
      workerVSwitchIds: 'WorkerVSwitchIds',
      zoneId: 'ZoneId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      adjustmentType: 'string',
      auditFlags: 'string',
      betaVersion: 'string',
      CA: 'string',
      clientCA: 'string',
      cloudMonitorFlags: 'string',
      cloudMonitorVersion: 'string',
      containerCIDR: 'string',
      disableAddons: 'string',
      dockerVersion: 'string',
      ESSDeletionProtection: 'string',
      eip: 'string',
      eipAddress: 'string',
      elasticSearchHost: 'string',
      elasticSearchPass: 'string',
      elasticSearchPort: 'string',
      elasticSearchUser: 'string',
      etcdVersion: 'string',
      executeVersion: 'string',
      GPUFlags: 'string',
      healthCheckType: 'string',
      imageId: 'string',
      k8SMasterPolicyDocument: 'string',
      k8sWorkerPolicyDocument: 'string',
      key: 'string',
      keyPair: 'string',
      kubernetesVersion: 'string',
      loggingType: 'string',
      masterAmounts: 'string',
      masterAutoRenew: 'string',
      masterAutoRenewPeriod: 'string',
      masterCount: 'string',
      masterDataDisk: 'string',
      masterDataDisks: 'string',
      masterDeletionProtection: 'string',
      masterDeploymentSetId: 'string',
      masterHpcClusterId: 'string',
      masterImageId: 'string',
      masterInstanceChargeType: 'string',
      masterInstanceTypes: 'string',
      masterKeyPair: 'string',
      masterLoginPassword: 'string',
      masterPeriod: 'string',
      masterPeriodUnit: 'string',
      masterSlbSShHealthCheck: 'string',
      masterSnapshotPolicyId: 'string',
      masterSystemDiskCategory: 'string',
      masterSystemDiskSize: 'string',
      masterVSwitchIds: 'string',
      natGateway: 'string',
      natGatewayId: 'string',
      network: 'string',
      nodeCIDRMask: 'string',
      nodeNameMode: 'string',
      numOfNodes: 'string',
      password: 'string',
      podVswitchIds: 'string',
      protectedInstances: 'string',
      proxyMode: 'string',
      publicSLB: 'string',
      removeInstanceIds: 'string',
      resourceGroupId: 'string',
      SLBDeletionProtection: 'string',
      SLSProjectName: 'string',
      SNatEntry: 'string',
      SSHFlags: 'string',
      securityGroupId: 'string',
      serviceCIDR: 'string',
      setUpArgs: 'string',
      snatTableId: 'string',
      tags: 'string',
      userCA: 'string',
      userData: 'string',
      vpcId: 'string',
      willReplace: 'string',
      workerAutoRenew: 'string',
      workerAutoRenewPeriod: 'string',
      workerDataDisk: 'string',
      workerDataDisks: 'string',
      workerDeletionProtection: 'string',
      workerDeploymentSetId: 'string',
      workerHpcClusterId: 'string',
      workerImageId: 'string',
      workerInstanceChargeType: 'string',
      workerInstanceTypes: 'string',
      workerKeyPair: 'string',
      workerLoginPassword: 'string',
      workerPeriod: 'string',
      workerPeriodUnit: 'string',
      workerSnapshotPolicyId: 'string',
      workerSystemDiskCategory: 'string',
      workerSystemDiskSize: 'string',
      workerVSwitchIds: 'string',
      zoneId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeClustersResponseBodyClusters extends $tea.Model {
  name: string;
  clusterId: string;
  size: number;
  regionId: string;
  state: string;
  clusterType: string;
  created: string;
  updated: string;
  initVersion: string;
  currentVersion: string;
  metaData: string;
  resourceGroupId: string;
  instanceType: string;
  vpcId: string;
  vswitchId: string;
  vswitchCidr: string;
  dataDiskSize: number;
  dataDiskCategory: string;
  securityGroupId: string;
  zoneId: string;
  networkMode: string;
  subnetCidr: string;
  masterUrl: string;
  externalLoadbalancerId: string;
  port: number;
  nodeStatus: string;
  clusterHealthy: string;
  dockerVersion: string;
  swarmMode: boolean;
  gwBridge: string;
  privateZone: boolean;
  profile: string;
  deletionProtection: boolean;
  capabilities: string;
  enabledMigration: boolean;
  needUpdateAgent: boolean;
  tags: DescribeClustersResponseBodyClustersTags[];
  outputs: DescribeClustersResponseBodyClustersOutputs[];
  upgradeComponents: DescribeClustersResponseBodyClustersUpgradeComponents;
  parameters: DescribeClustersResponseBodyClustersParameters;
  static names(): { [key: string]: string } {
    return {
      name: 'name',
      clusterId: 'cluster_id',
      size: 'size',
      regionId: 'region_id',
      state: 'state',
      clusterType: 'cluster_type',
      created: 'created',
      updated: 'updated',
      initVersion: 'init_version',
      currentVersion: 'current_version',
      metaData: 'meta_data',
      resourceGroupId: 'resource_group_id',
      instanceType: 'instance_type',
      vpcId: 'vpc_id',
      vswitchId: 'vswitch_id',
      vswitchCidr: 'vswitch_cidr',
      dataDiskSize: 'data_disk_size',
      dataDiskCategory: 'data_disk_category',
      securityGroupId: 'security_group_id',
      zoneId: 'zone_id',
      networkMode: 'network_mode',
      subnetCidr: 'subnet_cidr',
      masterUrl: 'master_url',
      externalLoadbalancerId: 'external_loadbalancer_id',
      port: 'port',
      nodeStatus: 'node_status',
      clusterHealthy: 'cluster_healthy',
      dockerVersion: 'docker_version',
      swarmMode: 'swarm_mode',
      gwBridge: 'gw_bridge',
      privateZone: 'private_zone',
      profile: 'profile',
      deletionProtection: 'deletion_protection',
      capabilities: 'capabilities',
      enabledMigration: 'enabled_migration',
      needUpdateAgent: 'need_update_agent',
      tags: 'tags',
      outputs: 'outputs',
      upgradeComponents: 'upgrade_components',
      parameters: 'parameters',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
      clusterId: 'string',
      size: 'number',
      regionId: 'string',
      state: 'string',
      clusterType: 'string',
      created: 'string',
      updated: 'string',
      initVersion: 'string',
      currentVersion: 'string',
      metaData: 'string',
      resourceGroupId: 'string',
      instanceType: 'string',
      vpcId: 'string',
      vswitchId: 'string',
      vswitchCidr: 'string',
      dataDiskSize: 'number',
      dataDiskCategory: 'string',
      securityGroupId: 'string',
      zoneId: 'string',
      networkMode: 'string',
      subnetCidr: 'string',
      masterUrl: 'string',
      externalLoadbalancerId: 'string',
      port: 'number',
      nodeStatus: 'string',
      clusterHealthy: 'string',
      dockerVersion: 'string',
      swarmMode: 'boolean',
      gwBridge: 'string',
      privateZone: 'boolean',
      profile: 'string',
      deletionProtection: 'boolean',
      capabilities: 'string',
      enabledMigration: 'boolean',
      needUpdateAgent: 'boolean',
      tags: { 'type': 'array', 'itemType': DescribeClustersResponseBodyClustersTags },
      outputs: { 'type': 'array', 'itemType': DescribeClustersResponseBodyClustersOutputs },
      upgradeComponents: DescribeClustersResponseBodyClustersUpgradeComponents,
      parameters: DescribeClustersResponseBodyClustersParameters,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeClusterDetailResponseBodyTags extends $tea.Model {
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

export class DescribeClusterDetailResponseBodyOutputs extends $tea.Model {
  description: string;
  outputKey: string;
  outputValue: string;
  static names(): { [key: string]: string } {
    return {
      description: 'Description',
      outputKey: 'OutputKey',
      outputValue: 'OutputValue',
    };
  }

  static types(): { [key: string]: any } {
    return {
      description: 'string',
      outputKey: 'string',
      outputValue: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeClusterDetailResponseBodyUpgradeComponentsKubernetes extends $tea.Model {
  componentName: string;
  version: string;
  nextVersion: string;
  changed: string;
  canUpgrade: boolean;
  force: boolean;
  policy: string;
  extraVars: string;
  readyToUpgrade: string;
  message: string;
  exist: boolean;
  required: boolean;
  template: string;
  static names(): { [key: string]: string } {
    return {
      componentName: 'component_name',
      version: 'version',
      nextVersion: 'next_version',
      changed: 'changed',
      canUpgrade: 'can_upgrade',
      force: 'force',
      policy: 'policy',
      extraVars: 'ExtraVars',
      readyToUpgrade: 'ready_to_upgrade',
      message: 'message',
      exist: 'exist',
      required: 'required',
      template: 'template',
    };
  }

  static types(): { [key: string]: any } {
    return {
      componentName: 'string',
      version: 'string',
      nextVersion: 'string',
      changed: 'string',
      canUpgrade: 'boolean',
      force: 'boolean',
      policy: 'string',
      extraVars: 'string',
      readyToUpgrade: 'string',
      message: 'string',
      exist: 'boolean',
      required: 'boolean',
      template: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeClusterDetailResponseBodyUpgradeComponents extends $tea.Model {
  kubernetes: DescribeClusterDetailResponseBodyUpgradeComponentsKubernetes;
  static names(): { [key: string]: string } {
    return {
      kubernetes: 'Kubernetes',
    };
  }

  static types(): { [key: string]: any } {
    return {
      kubernetes: DescribeClusterDetailResponseBodyUpgradeComponentsKubernetes,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeClusterDetailResponseBodyParameters extends $tea.Model {
  adjustmentType: string;
  auditFlags: string;
  betaVersion: string;
  CA: string;
  clientCA: string;
  cloudMonitorFlags: string;
  cloudMonitorVersion: string;
  containerCIDR: string;
  disableAddons: string;
  dockerVersion: string;
  ESSDeletionProtection: string;
  eip: string;
  eipAddress: string;
  elasticSearchHost: string;
  elasticSearchPass: string;
  elasticSearchPort: string;
  elasticSearchUser: string;
  etcdVersion: string;
  executeVersion: string;
  GPUFlags: string;
  healthCheckType: string;
  imageId: string;
  k8SMasterPolicyDocument: string;
  k8sWorkerPolicyDocument: string;
  key: string;
  keyPair: string;
  kubernetesVersion: string;
  loggingType: string;
  masterAmounts: string;
  masterAutoRenew: string;
  masterAutoRenewPeriod: string;
  masterCount: string;
  masterDataDisk: string;
  masterDataDisks: string;
  masterDeletionProtection: string;
  masterDeploymentSetId: string;
  masterHpcClusterId: string;
  masterImageId: string;
  masterInstanceChargeType: string;
  masterInstanceTypes: string;
  masterKeyPair: string;
  masterLoginPassword: string;
  masterPeriod: string;
  masterPeriodUnit: string;
  masterSlbSShHealthCheck: string;
  masterSnapshotPolicyId: string;
  masterSystemDiskCategory: string;
  masterSystemDiskSize: string;
  masterVSwitchIds: string;
  natGateway: string;
  natGatewayId: string;
  network: string;
  nodeCIDRMask: string;
  nodeNameMode: string;
  numOfNodes: string;
  password: string;
  podVswitchIds: string;
  protectedInstances: string;
  proxyMode: string;
  publicSLB: string;
  removeInstanceIds: string;
  resourceGroupId: string;
  SLBDeletionProtection: string;
  SLSProjectName: string;
  SNatEntry: string;
  SSHFlags: string;
  securityGroupId: string;
  serviceCIDR: string;
  setUpArgs: string;
  snatTableId: string;
  tags: string;
  userCA: string;
  userData: string;
  vpcId: string;
  willReplace: string;
  workerAutoRenew: string;
  workerAutoRenewPeriod: string;
  workerDataDisk: string;
  workerDataDisks: string;
  workerDeletionProtection: string;
  workerDeploymentSetId: string;
  workerHpcClusterId: string;
  workerImageId: string;
  workerInstanceChargeType: string;
  workerInstanceTypes: string;
  workerKeyPair: string;
  workerLoginPassword: string;
  workerPeriod: string;
  workerPeriodUnit: string;
  workerSnapshotPolicyId: string;
  workerSystemDiskCategory: string;
  workerSystemDiskSize: string;
  workerVSwitchIds: string;
  zoneId: string;
  static names(): { [key: string]: string } {
    return {
      adjustmentType: 'AdjustmentType',
      auditFlags: 'AuditFlags',
      betaVersion: 'BetaVersion',
      CA: 'CA',
      clientCA: 'ClientCA',
      cloudMonitorFlags: 'CloudMonitorFlags',
      cloudMonitorVersion: 'CloudMonitorVersion',
      containerCIDR: 'ContainerCIDR',
      disableAddons: 'DisableAddons',
      dockerVersion: 'DockerVersion',
      ESSDeletionProtection: 'ESSDeletionProtection',
      eip: 'Eip',
      eipAddress: 'EipAddress',
      elasticSearchHost: 'ElasticSearchHost',
      elasticSearchPass: 'ElasticSearchPass',
      elasticSearchPort: 'ElasticSearchPort',
      elasticSearchUser: 'ElasticSearchUser',
      etcdVersion: 'EtcdVersion',
      executeVersion: 'ExecuteVersion',
      GPUFlags: 'GPUFlags',
      healthCheckType: 'HealthCheckType',
      imageId: 'ImageId',
      k8SMasterPolicyDocument: 'K8SMasterPolicyDocument',
      k8sWorkerPolicyDocument: 'K8sWorkerPolicyDocument',
      key: 'Key',
      keyPair: 'KeyPair',
      kubernetesVersion: 'KubernetesVersion',
      loggingType: 'LoggingType',
      masterAmounts: 'MasterAmounts',
      masterAutoRenew: 'MasterAutoRenew',
      masterAutoRenewPeriod: 'MasterAutoRenewPeriod',
      masterCount: 'MasterCount',
      masterDataDisk: 'MasterDataDisk',
      masterDataDisks: 'MasterDataDisks',
      masterDeletionProtection: 'MasterDeletionProtection',
      masterDeploymentSetId: 'MasterDeploymentSetId',
      masterHpcClusterId: 'MasterHpcClusterId',
      masterImageId: 'MasterImageId',
      masterInstanceChargeType: 'MasterInstanceChargeType',
      masterInstanceTypes: 'MasterInstanceTypes',
      masterKeyPair: 'MasterKeyPair',
      masterLoginPassword: 'MasterLoginPassword',
      masterPeriod: 'MasterPeriod',
      masterPeriodUnit: 'MasterPeriodUnit',
      masterSlbSShHealthCheck: 'MasterSlbSShHealthCheck',
      masterSnapshotPolicyId: 'MasterSnapshotPolicyId',
      masterSystemDiskCategory: 'MasterSystemDiskCategory',
      masterSystemDiskSize: 'MasterSystemDiskSize',
      masterVSwitchIds: 'MasterVSwitchIds',
      natGateway: 'NatGateway',
      natGatewayId: 'NatGatewayId',
      network: 'Network',
      nodeCIDRMask: 'NodeCIDRMask',
      nodeNameMode: 'NodeNameMode',
      numOfNodes: 'NumOfNodes',
      password: 'Password',
      podVswitchIds: 'PodVswitchIds',
      protectedInstances: 'ProtectedInstances',
      proxyMode: 'ProxyMode',
      publicSLB: 'PublicSLB',
      removeInstanceIds: 'RemoveInstanceIds',
      resourceGroupId: 'ResourceGroupId',
      SLBDeletionProtection: 'SLBDeletionProtection',
      SLSProjectName: 'SLSProjectName',
      SNatEntry: 'SNatEntry',
      SSHFlags: 'SSHFlags',
      securityGroupId: 'SecurityGroupId',
      serviceCIDR: 'ServiceCIDR',
      setUpArgs: 'SetUpArgs',
      snatTableId: 'SnatTableId',
      tags: 'Tags',
      userCA: 'UserCA',
      userData: 'UserData',
      vpcId: 'VpcId',
      willReplace: 'WillReplace',
      workerAutoRenew: 'WorkerAutoRenew',
      workerAutoRenewPeriod: 'WorkerAutoRenewPeriod',
      workerDataDisk: 'WorkerDataDisk',
      workerDataDisks: 'WorkerDataDisks',
      workerDeletionProtection: 'WorkerDeletionProtection',
      workerDeploymentSetId: 'WorkerDeploymentSetId',
      workerHpcClusterId: 'WorkerHpcClusterId',
      workerImageId: 'WorkerImageId',
      workerInstanceChargeType: 'WorkerInstanceChargeType',
      workerInstanceTypes: 'WorkerInstanceTypes',
      workerKeyPair: 'WorkerKeyPair',
      workerLoginPassword: 'WorkerLoginPassword',
      workerPeriod: 'WorkerPeriod',
      workerPeriodUnit: 'WorkerPeriodUnit',
      workerSnapshotPolicyId: 'WorkerSnapshotPolicyId',
      workerSystemDiskCategory: 'WorkerSystemDiskCategory',
      workerSystemDiskSize: 'WorkerSystemDiskSize',
      workerVSwitchIds: 'WorkerVSwitchIds',
      zoneId: 'ZoneId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      adjustmentType: 'string',
      auditFlags: 'string',
      betaVersion: 'string',
      CA: 'string',
      clientCA: 'string',
      cloudMonitorFlags: 'string',
      cloudMonitorVersion: 'string',
      containerCIDR: 'string',
      disableAddons: 'string',
      dockerVersion: 'string',
      ESSDeletionProtection: 'string',
      eip: 'string',
      eipAddress: 'string',
      elasticSearchHost: 'string',
      elasticSearchPass: 'string',
      elasticSearchPort: 'string',
      elasticSearchUser: 'string',
      etcdVersion: 'string',
      executeVersion: 'string',
      GPUFlags: 'string',
      healthCheckType: 'string',
      imageId: 'string',
      k8SMasterPolicyDocument: 'string',
      k8sWorkerPolicyDocument: 'string',
      key: 'string',
      keyPair: 'string',
      kubernetesVersion: 'string',
      loggingType: 'string',
      masterAmounts: 'string',
      masterAutoRenew: 'string',
      masterAutoRenewPeriod: 'string',
      masterCount: 'string',
      masterDataDisk: 'string',
      masterDataDisks: 'string',
      masterDeletionProtection: 'string',
      masterDeploymentSetId: 'string',
      masterHpcClusterId: 'string',
      masterImageId: 'string',
      masterInstanceChargeType: 'string',
      masterInstanceTypes: 'string',
      masterKeyPair: 'string',
      masterLoginPassword: 'string',
      masterPeriod: 'string',
      masterPeriodUnit: 'string',
      masterSlbSShHealthCheck: 'string',
      masterSnapshotPolicyId: 'string',
      masterSystemDiskCategory: 'string',
      masterSystemDiskSize: 'string',
      masterVSwitchIds: 'string',
      natGateway: 'string',
      natGatewayId: 'string',
      network: 'string',
      nodeCIDRMask: 'string',
      nodeNameMode: 'string',
      numOfNodes: 'string',
      password: 'string',
      podVswitchIds: 'string',
      protectedInstances: 'string',
      proxyMode: 'string',
      publicSLB: 'string',
      removeInstanceIds: 'string',
      resourceGroupId: 'string',
      SLBDeletionProtection: 'string',
      SLSProjectName: 'string',
      SNatEntry: 'string',
      SSHFlags: 'string',
      securityGroupId: 'string',
      serviceCIDR: 'string',
      setUpArgs: 'string',
      snatTableId: 'string',
      tags: 'string',
      userCA: 'string',
      userData: 'string',
      vpcId: 'string',
      willReplace: 'string',
      workerAutoRenew: 'string',
      workerAutoRenewPeriod: 'string',
      workerDataDisk: 'string',
      workerDataDisks: 'string',
      workerDeletionProtection: 'string',
      workerDeploymentSetId: 'string',
      workerHpcClusterId: 'string',
      workerImageId: 'string',
      workerInstanceChargeType: 'string',
      workerInstanceTypes: 'string',
      workerKeyPair: 'string',
      workerLoginPassword: 'string',
      workerPeriod: 'string',
      workerPeriodUnit: 'string',
      workerSnapshotPolicyId: 'string',
      workerSystemDiskCategory: 'string',
      workerSystemDiskSize: 'string',
      workerVSwitchIds: 'string',
      zoneId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}


export default class Client extends ROA {

  constructor(config: $ROA.Config) {
    super(config);
    this._endpointRule = "";
    this.checkConfig(config);
    this._endpointHost = this.getEndpoint(this._productId, this._regionId, this._endpointRule, this._network, this._suffix, this._endpointMap, this._endpointHost);
  }


  async resumeComponentUpgrade(clusterid: string, componentid: string, request: ResumeComponentUpgradeRequest, runtime: $Util.RuntimeOptions): Promise<ResumeComponentUpgradeResponse> {
    Util.validateModel(request);
    return $tea.cast<ResumeComponentUpgradeResponse>(await this.doRequest("2015-12-15", "HTTPS", "POST", "AK", `/clusters/${clusterid}/components/${componentid}/resume`, null, request.headers, null, runtime), new ResumeComponentUpgradeResponse({}));
  }

  async pauseComponentUpgrade(clusterid: string, componentid: string, request: PauseComponentUpgradeRequest, runtime: $Util.RuntimeOptions): Promise<PauseComponentUpgradeResponse> {
    Util.validateModel(request);
    return $tea.cast<PauseComponentUpgradeResponse>(await this.doRequest("2015-12-15", "HTTPS", "POST", "AK", `/clusters/${clusterid}/components/${componentid}/pause`, null, request.headers, null, runtime), new PauseComponentUpgradeResponse({}));
  }

  async cancelComponentUpgrade(clusterid: string, componentid: string, request: CancelComponentUpgradeRequest, runtime: $Util.RuntimeOptions): Promise<CancelComponentUpgradeResponse> {
    Util.validateModel(request);
    return $tea.cast<CancelComponentUpgradeResponse>(await this.doRequest("2015-12-15", "HTTPS", "POST", "AK", `/clusters/${clusterid}/components/${componentid}/cancel`, null, request.headers, null, runtime), new CancelComponentUpgradeResponse({}));
  }

  async cancelWorkflow(workflowName: string, request: CancelWorkflowRequest, runtime: $Util.RuntimeOptions): Promise<CancelWorkflowResponse> {
    Util.validateModel(request);
    return $tea.cast<CancelWorkflowResponse>(await this.doRequest("2015-12-15", "HTTPS", "PUT", "AK", `/gs/workflow/${workflowName}`, null, request.headers, null, runtime), new CancelWorkflowResponse({}));
  }

  async descirbeWorkflow(workflowName: string, request: DescirbeWorkflowRequest, runtime: $Util.RuntimeOptions): Promise<DescirbeWorkflowResponse> {
    Util.validateModel(request);
    return $tea.cast<DescirbeWorkflowResponse>(await this.doRequest("2015-12-15", "HTTPS", "GET", "AK", `/gs/workflow/${workflowName}`, null, request.headers, null, runtime), new DescirbeWorkflowResponse({}));
  }

  async removeWorkflow(workflowName: string, request: RemoveWorkflowRequest, runtime: $Util.RuntimeOptions): Promise<RemoveWorkflowResponse> {
    Util.validateModel(request);
    return $tea.cast<RemoveWorkflowResponse>(await this.doRequest("2015-12-15", "HTTPS", "DELETE", "AK", `/gs/workflow/${workflowName}`, null, request.headers, null, runtime), new RemoveWorkflowResponse({}));
  }

  async describeWorkflows(request: DescribeWorkflowsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeWorkflowsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeWorkflowsResponse>(await this.doRequest("2015-12-15", "HTTPS", "GET", "AK", `/gs/workflows`, null, request.headers, null, runtime), new DescribeWorkflowsResponse({}));
  }

  async startWorkflow(request: StartWorkflowRequest, runtime: $Util.RuntimeOptions): Promise<StartWorkflowResponse> {
    Util.validateModel(request);
    return $tea.cast<StartWorkflowResponse>(await this.doRequest("2015-12-15", "HTTPS", "POST", "AK", `/gs/workflow`, null, request.headers, null, runtime), new StartWorkflowResponse({}));
  }

  async createServiceMesh(request: CreateServiceMeshRequest, runtime: $Util.RuntimeOptions): Promise<CreateServiceMeshResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateServiceMeshResponse>(await this.doRequest("2015-12-15", "HTTPS", "POST", "AK", `/servicemesh`, null, request.headers, null, runtime), new CreateServiceMeshResponse({}));
  }

  async serviceMeshAddCluster(serviceMeshId: string, request: ServiceMeshAddClusterRequest, runtime: $Util.RuntimeOptions): Promise<ServiceMeshAddClusterResponse> {
    Util.validateModel(request);
    return $tea.cast<ServiceMeshAddClusterResponse>(await this.doRequest("2015-12-15", "HTTPS", "PUT", "AK", `/servicemesh/${serviceMeshId}/add/clusters`, null, request.headers, null, runtime), new ServiceMeshAddClusterResponse({}));
  }

  async serviceMeshRemoveCluster(serviceMeshId: string, request: ServiceMeshRemoveClusterRequest, runtime: $Util.RuntimeOptions): Promise<ServiceMeshRemoveClusterResponse> {
    Util.validateModel(request);
    return $tea.cast<ServiceMeshRemoveClusterResponse>(await this.doRequest("2015-12-15", "HTTPS", "PUT", "AK", `/servicemesh/${serviceMeshId}/remove/clusters`, null, request.headers, null, runtime), new ServiceMeshRemoveClusterResponse({}));
  }

  async updateServiceMesh(serviceMeshId: string, request: UpdateServiceMeshRequest, runtime: $Util.RuntimeOptions): Promise<UpdateServiceMeshResponse> {
    Util.validateModel(request);
    return $tea.cast<UpdateServiceMeshResponse>(await this.doRequest("2015-12-15", "HTTPS", "PUT", "AK", `/servicemesh/${serviceMeshId}`, null, request.headers, null, runtime), new UpdateServiceMeshResponse({}));
  }

  async serviceMeshApiServer(serviceMeshId: string, request: ServiceMeshApiServerRequest, runtime: $Util.RuntimeOptions): Promise<ServiceMeshApiServerResponse> {
    Util.validateModel(request);
    return $tea.cast<ServiceMeshApiServerResponse>(await this.doRequest("2015-12-15", "HTTPS", "POST", "AK", `/servicemesh/${serviceMeshId}/api_proxy`, null, request.headers, null, runtime), new ServiceMeshApiServerResponse({}));
  }

  async unInstallClusterAddons(clusterId: string, request: UnInstallClusterAddonsRequest, runtime: $Util.RuntimeOptions): Promise<UnInstallClusterAddonsResponse> {
    Util.validateModel(request);
    return $tea.cast<UnInstallClusterAddonsResponse>(await this.doRequest("2015-12-15", "HTTPS", "POST", "AK", `/clusters/${clusterId}/components/uninstall`, null, request.headers, $tea.toMap(request.body), runtime), new UnInstallClusterAddonsResponse({}));
  }

  async describeAddons(request: DescribeAddonsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeAddonsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeAddonsResponse>(await this.doRequest("2015-12-15", "HTTPS", "GET", "AK", `/clusters/components/metadata`, Util.stringifyMapValue($tea.toMap(request.query)), request.headers, null, runtime), new DescribeAddonsResponse({}));
  }

  async updateK8sClusterUserConfigExpire(clusterId: string, request: UpdateK8sClusterUserConfigExpireRequest, runtime: $Util.RuntimeOptions): Promise<UpdateK8sClusterUserConfigExpireResponse> {
    Util.validateModel(request);
    return $tea.cast<UpdateK8sClusterUserConfigExpireResponse>(await this.doRequest("2015-12-15", "HTTPS", "POST", "AK", `/k8s/${clusterId}/user_config/expire`, null, request.headers, null, runtime), new UpdateK8sClusterUserConfigExpireResponse({}));
  }

  async describeClusterV2UserKubeconfig(clusterId: string, request: DescribeClusterV2UserKubeconfigRequest, runtime: $Util.RuntimeOptions): Promise<DescribeClusterV2UserKubeconfigResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeClusterV2UserKubeconfigResponse>(await this.doRequest("2015-12-15", "HTTPS", "GET", "AK", `/api/v2/k8s/${clusterId}/user_config`, Util.stringifyMapValue($tea.toMap(request.query)), request.headers, null, runtime), new DescribeClusterV2UserKubeconfigResponse({}));
  }

  async modifyClusterTags(clusterId: string, request: ModifyClusterTagsRequest, runtime: $Util.RuntimeOptions): Promise<ModifyClusterTagsResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyClusterTagsResponse>(await this.doRequest("2015-12-15", "HTTPS", "POST", "AK", `/clusters/${clusterId}/tags`, null, request.headers, $tea.toMap(request.body), runtime), new ModifyClusterTagsResponse({}));
  }

  async scaleOutCluster(clusterId: string, request: ScaleOutClusterRequest, runtime: $Util.RuntimeOptions): Promise<ScaleOutClusterResponse> {
    Util.validateModel(request);
    return $tea.cast<ScaleOutClusterResponse>(await this.doRequest("2015-12-15", "HTTPS", "POST", "AK", `/api/v2/clusters/${clusterId}`, null, request.headers, $tea.toMap(request.body), runtime), new ScaleOutClusterResponse({}));
  }

  async describeClusterAddonsVersion(clusterId: string, request: DescribeClusterAddonsVersionRequest, runtime: $Util.RuntimeOptions): Promise<DescribeClusterAddonsVersionResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeClusterAddonsVersionResponse>(await this.doRequest("2015-12-15", "HTTPS", "GET", "AK", `/clusters/${clusterId}/components/version`, null, request.headers, null, runtime), new DescribeClusterAddonsVersionResponse({}));
  }

  async describeClusterAddonUpgradeStatus(clusterId: string, componentId: string, request: DescribeClusterAddonUpgradeStatusRequest, runtime: $Util.RuntimeOptions): Promise<DescribeClusterAddonUpgradeStatusResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeClusterAddonUpgradeStatusResponse>(await this.doRequest("2015-12-15", "HTTPS", "GET", "AK", `/clusters/${clusterId}/components/${componentId}/upgradestatus`, null, request.headers, null, runtime), new DescribeClusterAddonUpgradeStatusResponse({}));
  }

  async describeEdgeClusterAttachScripts(clusterId: string, request: DescribeEdgeClusterAttachScriptsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeEdgeClusterAttachScriptsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeEdgeClusterAttachScriptsResponse>(await this.doRequest("2015-12-15", "HTTPS", "GET", "AK", `/clusters/${clusterId}/attachscript`, Util.stringifyMapValue($tea.toMap(request.query)), request.headers, null, runtime), new DescribeEdgeClusterAttachScriptsResponse({}));
  }

  async deleteClusterNodes(clusterId: string, request: DeleteClusterNodesRequest, runtime: $Util.RuntimeOptions): Promise<DeleteClusterNodesResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteClusterNodesResponse>(await this.doRequest("2015-12-15", "HTTPS", "POST", "AK", `/clusters/${clusterId}/nodes`, null, request.headers, $tea.toMap(request.body), runtime), new DeleteClusterNodesResponse({}));
  }

  async describeClusterUserKubeconfig(clusterId: string, request: DescribeClusterUserKubeconfigRequest, runtime: $Util.RuntimeOptions): Promise<DescribeClusterUserKubeconfigResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeClusterUserKubeconfigResponse>(await this.doRequest("2015-12-15", "HTTPS", "GET", "AK", `/k8s/${clusterId}/user_config`, Util.stringifyMapValue($tea.toMap(request.query)), request.headers, null, runtime), new DescribeClusterUserKubeconfigResponse({}));
  }

  async attachInstances(clusterId: string, request: AttachInstancesRequest, runtime: $Util.RuntimeOptions): Promise<AttachInstancesResponse> {
    Util.validateModel(request);
    return $tea.cast<AttachInstancesResponse>(await this.doRequest("2015-12-15", "HTTPS", "POST", "AK", `/clusters/${clusterId}/attach`, null, request.headers, $tea.toMap(request.body), runtime), new AttachInstancesResponse({}));
  }

  async createCluster(request: CreateClusterRequest, runtime: $Util.RuntimeOptions): Promise<CreateClusterResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateClusterResponse>(await this.doRequest("2015-12-15", "HTTPS", "POST", "AK", `/clusters`, null, request.headers, $tea.toMap(request.body), runtime), new CreateClusterResponse({}));
  }

  async scaleCluster(clusterId: string, request: ScaleClusterRequest, runtime: $Util.RuntimeOptions): Promise<ScaleClusterResponse> {
    Util.validateModel(request);
    return $tea.cast<ScaleClusterResponse>(await this.doRequest("2015-12-15", "HTTPS", "PUT", "AK", `/clusters/${clusterId}`, null, request.headers, null, runtime), new ScaleClusterResponse({}));
  }

  async describeClusters(request: DescribeClustersRequest, runtime: $Util.RuntimeOptions): Promise<DescribeClustersResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeClustersResponse>(await this.doRequest("2015-12-15", "HTTPS", "GET", "AK", `/clusters`, Util.stringifyMapValue($tea.toMap(request.query)), request.headers, null, runtime), new DescribeClustersResponse({}));
  }

  async describeClusterDetail(clusterId: string, request: DescribeClusterDetailRequest, runtime: $Util.RuntimeOptions): Promise<DescribeClusterDetailResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeClusterDetailResponse>(await this.doRequest("2015-12-15", "HTTPS", "GET", "AK", `/clusters/${clusterId}`, null, request.headers, null, runtime), new DescribeClusterDetailResponse({}));
  }

  async deleteCluster(clusterId: string, request: DeleteClusterRequest, runtime: $Util.RuntimeOptions): Promise<DeleteClusterResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteClusterResponse>(await this.doRequest("2015-12-15", "HTTPS", "DELETE", "AK", `/clusters/${clusterId}`, null, request.headers, null, runtime), new DeleteClusterResponse({}));
  }

  getEndpoint(productId: string, regionId: string, endpointRule: string, network: string, suffix: string, endpointMap: {[key: string ]: string}, endpoint: string): string {
    if (!Util.empty(endpoint)) {
      return endpoint;
    }

    if (!Util.empty(endpointMap[regionId])) {
      return endpointMap[regionId];
    }

    return EndpointUtil.getEndpointRules(productId, regionId, endpointRule, network, suffix);
  }

}
