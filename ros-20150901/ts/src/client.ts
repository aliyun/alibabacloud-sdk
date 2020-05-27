// This file is auto-generated, don't edit it
import Util, * as $Util from '@alicloud/tea-util';
import ROA, * as $ROA from '@alicloud/roa-client';
import EndpointUtil from '@alicloud/endpoint-util';
import * as $tea from '@alicloud/tea-typescript';

export class CreateChangeSetRequest extends $tea.Model {
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

export class CreateChangeSetResponseBody extends $tea.Model {
  dummy: string;
  static names(): { [key: string]: string } {
    return {
      dummy: 'Dummy',
    };
  }

  static types(): { [key: string]: any } {
    return {
      dummy: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateChangeSetResponse extends $tea.Model {
  headers: { [key: string]: string };
  body: CreateChangeSetResponseBody;
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
      body: 'body',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
      body: CreateChangeSetResponseBody,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeChangeSetDetailRequest extends $tea.Model {
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

export class DescribeChangeSetDetailResponseBody extends $tea.Model {
  dummy: string;
  static names(): { [key: string]: string } {
    return {
      dummy: 'Dummy',
    };
  }

  static types(): { [key: string]: any } {
    return {
      dummy: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeChangeSetDetailResponse extends $tea.Model {
  headers: { [key: string]: string };
  body: DescribeChangeSetDetailResponseBody;
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
      body: 'body',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
      body: DescribeChangeSetDetailResponseBody,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeChangeSetsRequest extends $tea.Model {
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

export class DescribeChangeSetsResponseBody extends $tea.Model {
  dummy: string;
  static names(): { [key: string]: string } {
    return {
      dummy: 'Dummy',
    };
  }

  static types(): { [key: string]: any } {
    return {
      dummy: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeChangeSetsResponse extends $tea.Model {
  headers: { [key: string]: string };
  body: DescribeChangeSetsResponseBody;
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
      body: 'body',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
      body: DescribeChangeSetsResponseBody,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ExecuteChangeSetRequest extends $tea.Model {
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

export class ExecuteChangeSetResponseBody extends $tea.Model {
  dummy: string;
  static names(): { [key: string]: string } {
    return {
      dummy: 'Dummy',
    };
  }

  static types(): { [key: string]: any } {
    return {
      dummy: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ExecuteChangeSetResponse extends $tea.Model {
  headers: { [key: string]: string };
  body: ExecuteChangeSetResponseBody;
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
      body: 'body',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
      body: ExecuteChangeSetResponseBody,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteChangeSetRequest extends $tea.Model {
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

export class DeleteChangeSetResponseBody extends $tea.Model {
  dummy: string;
  static names(): { [key: string]: string } {
    return {
      dummy: 'Dummy',
    };
  }

  static types(): { [key: string]: any } {
    return {
      dummy: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteChangeSetResponse extends $tea.Model {
  headers: { [key: string]: string };
  body: DeleteChangeSetResponseBody;
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
      body: 'body',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
      body: DeleteChangeSetResponseBody,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ContinueCreateStackRequest extends $tea.Model {
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

export class ContinueCreateStackResponse extends $tea.Model {
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

export class CancelUpdateStackRequest extends $tea.Model {
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

export class CancelUpdateStackResponse extends $tea.Model {
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

export class GetStackPolicyRequest extends $tea.Model {
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

export class GetStackPolicyResponse extends $tea.Model {
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

export class SetStackPolicyRequest extends $tea.Model {
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

export class SetStackPolicyResponse extends $tea.Model {
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

export class UpdateStackRequest extends $tea.Model {
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

export class UpdateStackResponse extends $tea.Model {
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

export class WaitConditionsQuery extends $tea.Model {
  stackname: string;
  stackid: string;
  resource: string;
  expire: string;
  signature: string;
  static names(): { [key: string]: string } {
    return {
      stackname: 'stackname',
      stackid: 'stackid',
      resource: 'resource',
      expire: 'expire',
      signature: 'signature',
    };
  }

  static types(): { [key: string]: any } {
    return {
      stackname: 'string',
      stackid: 'string',
      resource: 'string',
      expire: 'string',
      signature: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class WaitConditionsRequest extends $tea.Model {
  headers?: { [key: string]: string };
  query: WaitConditionsQuery;
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
      query: 'query',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
      query: WaitConditionsQuery,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class WaitConditionsResponse extends $tea.Model {
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

export class InquiryStackRequest extends $tea.Model {
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

export class InquiryStackResponse extends $tea.Model {
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

export class PreviewStackRequest extends $tea.Model {
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

export class PreviewStackResponse extends $tea.Model {
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

export class DoActionsRequest extends $tea.Model {
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

export class DoActionsResponse extends $tea.Model {
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

export class DescribeRegionsRequest extends $tea.Model {
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

export class DescribeRegionsResponse extends $tea.Model {
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

export class DescribeEventsQuery extends $tea.Model {
  resourceStatus?: string;
  resourceName?: string;
  resourceType?: string;
  pageSize?: number;
  pageNumber?: number;
  static names(): { [key: string]: string } {
    return {
      resourceStatus: 'ResourceStatus',
      resourceName: 'ResourceName',
      resourceType: 'ResourceType',
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
    };
  }

  static types(): { [key: string]: any } {
    return {
      resourceStatus: 'string',
      resourceName: 'string',
      resourceType: 'string',
      pageSize: 'number',
      pageNumber: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeEventsRequest extends $tea.Model {
  headers?: { [key: string]: string };
  query?: DescribeEventsQuery;
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
      query: 'query',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
      query: DescribeEventsQuery,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeEventsResponse extends $tea.Model {
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

export class DeleteStackQuery extends $tea.Model {
  regionId?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteStackRequest extends $tea.Model {
  headers?: { [key: string]: string };
  query?: DeleteStackQuery;
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
      query: 'query',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
      query: DeleteStackQuery,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteStackResponse extends $tea.Model {
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

export class CreateStacksRequest extends $tea.Model {
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

export class CreateStacksResponse extends $tea.Model {
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

export class AbandonStackRequest extends $tea.Model {
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

export class AbandonStackResponse extends $tea.Model {
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

export class DescribeResourceTypesQuery extends $tea.Model {
  supportStatus?: string;
  static names(): { [key: string]: string } {
    return {
      supportStatus: 'SupportStatus',
    };
  }

  static types(): { [key: string]: any } {
    return {
      supportStatus: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeResourceTypesRequest extends $tea.Model {
  headers?: { [key: string]: string };
  query?: DescribeResourceTypesQuery;
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
      query: 'query',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
      query: DescribeResourceTypesQuery,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeResourceTypesResponse extends $tea.Model {
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

export class DescribeResourceTypeDetailRequest extends $tea.Model {
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

export class DescribeResourceTypeDetailResponse extends $tea.Model {
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

export class DescribeResourcesRequest extends $tea.Model {
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

export class DescribeResourcesResponse extends $tea.Model {
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

export class DescribeResourceDetailRequest extends $tea.Model {
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

export class DescribeResourceDetailResponse extends $tea.Model {
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

export class DescribeResourceTypeTemplateRequest extends $tea.Model {
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

export class DescribeResourceTypeTemplateResponse extends $tea.Model {
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

export class DescribeStacksQuery extends $tea.Model {
  status?: string;
  name?: string;
  stackId?: string;
  pageSize?: number;
  pageNumber?: number;
  static names(): { [key: string]: string } {
    return {
      status: 'Status',
      name: 'Name',
      stackId: 'StackId',
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
    };
  }

  static types(): { [key: string]: any } {
    return {
      status: 'string',
      name: 'string',
      stackId: 'string',
      pageSize: 'number',
      pageNumber: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeStacksRequest extends $tea.Model {
  headers?: { [key: string]: string };
  query?: DescribeStacksQuery;
  static names(): { [key: string]: string } {
    return {
      headers: 'headers',
      query: 'query',
    };
  }

  static types(): { [key: string]: any } {
    return {
      headers: { 'type': 'map', 'keyType': 'string', 'valueType': 'string' },
      query: DescribeStacksQuery,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeStacksResponse extends $tea.Model {
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

export class DescribeStackDetailRequest extends $tea.Model {
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

export class DescribeStackDetailResponse extends $tea.Model {
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

export class ValidateTemplateRequest extends $tea.Model {
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

export class ValidateTemplateResponse extends $tea.Model {
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

export class DescribeTemplateRequest extends $tea.Model {
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

export class DescribeTemplateResponse extends $tea.Model {
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


export default class Client extends ROA {

  constructor(config: $ROA.Config) {
    super(config);
    this._endpointRule = "central";
    this.checkConfig(config);
    this._endpointHost = this.getEndpoint(this._productId, this._regionId, this._endpointRule, this._network, this._suffix, this._endpointMap, this._endpointHost);
  }


  async createChangeSetWithOptions(request: CreateChangeSetRequest, runtime: $Util.RuntimeOptions): Promise<CreateChangeSetResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateChangeSetResponse>(await this.doRequest("2015-09-01", "HTTPS", "POST", "AK", `/changeSets`, null, request.headers, null, runtime), new CreateChangeSetResponse({}));
  }

  async createChangeSet(request: CreateChangeSetRequest): Promise<CreateChangeSetResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createChangeSetWithOptions(request, runtime);
  }

  async describeChangeSetDetailWithOptions(stackName: string, stackId: string, changeSetName: string, request: DescribeChangeSetDetailRequest, runtime: $Util.RuntimeOptions): Promise<DescribeChangeSetDetailResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeChangeSetDetailResponse>(await this.doRequest("2015-09-01", "HTTPS", "GET", "AK", `/stacks/${stackName}/${stackId}/changeSets/${changeSetName}`, null, request.headers, null, runtime), new DescribeChangeSetDetailResponse({}));
  }

  async describeChangeSetDetail(stackName: string, stackId: string, changeSetName: string, request: DescribeChangeSetDetailRequest): Promise<DescribeChangeSetDetailResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeChangeSetDetailWithOptions(stackName, stackId, changeSetName, request, runtime);
  }

  async describeChangeSetsWithOptions(stackName: string, stackId: string, request: DescribeChangeSetsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeChangeSetsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeChangeSetsResponse>(await this.doRequest("2015-09-01", "HTTPS", "GET", "AK", `/stacks/${stackName}/${stackId}/changeSets`, null, request.headers, null, runtime), new DescribeChangeSetsResponse({}));
  }

  async describeChangeSets(stackName: string, stackId: string, request: DescribeChangeSetsRequest): Promise<DescribeChangeSetsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeChangeSetsWithOptions(stackName, stackId, request, runtime);
  }

  async executeChangeSetWithOptions(stackName: string, stackId: string, changeSetName: string, request: ExecuteChangeSetRequest, runtime: $Util.RuntimeOptions): Promise<ExecuteChangeSetResponse> {
    Util.validateModel(request);
    return $tea.cast<ExecuteChangeSetResponse>(await this.doRequest("2015-09-01", "HTTPS", "PUT", "AK", `/stacks/${stackName}/${stackId}/changeSets/${changeSetName}/execute`, null, request.headers, null, runtime), new ExecuteChangeSetResponse({}));
  }

  async executeChangeSet(stackName: string, stackId: string, changeSetName: string, request: ExecuteChangeSetRequest): Promise<ExecuteChangeSetResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.executeChangeSetWithOptions(stackName, stackId, changeSetName, request, runtime);
  }

  async deleteChangeSetWithOptions(stackName: string, stackId: string, changeSetName: string, request: DeleteChangeSetRequest, runtime: $Util.RuntimeOptions): Promise<DeleteChangeSetResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteChangeSetResponse>(await this.doRequest("2015-09-01", "HTTPS", "DELETE", "AK", `/stacks/${stackName}/${stackId}/changeSets/${changeSetName}`, null, request.headers, null, runtime), new DeleteChangeSetResponse({}));
  }

  async deleteChangeSet(stackName: string, stackId: string, changeSetName: string, request: DeleteChangeSetRequest): Promise<DeleteChangeSetResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteChangeSetWithOptions(stackName, stackId, changeSetName, request, runtime);
  }

  async continueCreateStackWithOptions(stackName: string, stackId: string, request: ContinueCreateStackRequest, runtime: $Util.RuntimeOptions): Promise<ContinueCreateStackResponse> {
    Util.validateModel(request);
    return $tea.cast<ContinueCreateStackResponse>(await this.doRequest("2015-09-01", "HTTPS", "POST", "AK", `/stacks/${stackName}/${stackId}/continue`, null, request.headers, null, runtime), new ContinueCreateStackResponse({}));
  }

  async continueCreateStack(stackName: string, stackId: string, request: ContinueCreateStackRequest): Promise<ContinueCreateStackResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.continueCreateStackWithOptions(stackName, stackId, request, runtime);
  }

  async cancelUpdateStackWithOptions(stackName: string, stackId: string, request: CancelUpdateStackRequest, runtime: $Util.RuntimeOptions): Promise<CancelUpdateStackResponse> {
    Util.validateModel(request);
    return $tea.cast<CancelUpdateStackResponse>(await this.doRequest("2015-09-01", "HTTPS", "PUT", "AK", `/stacks/${stackName}/${stackId}/cancel`, null, request.headers, null, runtime), new CancelUpdateStackResponse({}));
  }

  async cancelUpdateStack(stackName: string, stackId: string, request: CancelUpdateStackRequest): Promise<CancelUpdateStackResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.cancelUpdateStackWithOptions(stackName, stackId, request, runtime);
  }

  async getStackPolicyWithOptions(stackName: string, stackId: string, request: GetStackPolicyRequest, runtime: $Util.RuntimeOptions): Promise<GetStackPolicyResponse> {
    Util.validateModel(request);
    return $tea.cast<GetStackPolicyResponse>(await this.doRequest("2015-09-01", "HTTPS", "GET", "AK", `/stacks/${stackName}/${stackId}/policy`, null, request.headers, null, runtime), new GetStackPolicyResponse({}));
  }

  async getStackPolicy(stackName: string, stackId: string, request: GetStackPolicyRequest): Promise<GetStackPolicyResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getStackPolicyWithOptions(stackName, stackId, request, runtime);
  }

  async setStackPolicyWithOptions(stackName: string, stackId: string, request: SetStackPolicyRequest, runtime: $Util.RuntimeOptions): Promise<SetStackPolicyResponse> {
    Util.validateModel(request);
    return $tea.cast<SetStackPolicyResponse>(await this.doRequest("2015-09-01", "HTTPS", "POST", "AK", `/stacks/${stackName}/${stackId}/policy`, null, request.headers, null, runtime), new SetStackPolicyResponse({}));
  }

  async setStackPolicy(stackName: string, stackId: string, request: SetStackPolicyRequest): Promise<SetStackPolicyResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.setStackPolicyWithOptions(stackName, stackId, request, runtime);
  }

  async updateStackWithOptions(stackName: string, stackId: string, request: UpdateStackRequest, runtime: $Util.RuntimeOptions): Promise<UpdateStackResponse> {
    Util.validateModel(request);
    return $tea.cast<UpdateStackResponse>(await this.doRequest("2015-09-01", "HTTPS", "PUT", "AK", `/stacks/${stackName}/${stackId}`, null, request.headers, null, runtime), new UpdateStackResponse({}));
  }

  async updateStack(stackName: string, stackId: string, request: UpdateStackRequest): Promise<UpdateStackResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.updateStackWithOptions(stackName, stackId, request, runtime);
  }

  async waitConditionsWithOptions(request: WaitConditionsRequest, runtime: $Util.RuntimeOptions): Promise<WaitConditionsResponse> {
    Util.validateModel(request);
    return $tea.cast<WaitConditionsResponse>(await this.doRequest("2015-09-01", "HTTPS", "POST", "Anonymous", `/waitcondition`, Util.stringifyMapValue($tea.toMap(request.query)), request.headers, null, runtime), new WaitConditionsResponse({}));
  }

  async waitConditions(request: WaitConditionsRequest): Promise<WaitConditionsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.waitConditionsWithOptions(request, runtime);
  }

  async inquiryStackWithOptions(request: InquiryStackRequest, runtime: $Util.RuntimeOptions): Promise<InquiryStackResponse> {
    Util.validateModel(request);
    return $tea.cast<InquiryStackResponse>(await this.doRequest("2015-09-01", "HTTPS", "POST", "AK", `/stacks/inquiry`, null, request.headers, null, runtime), new InquiryStackResponse({}));
  }

  async inquiryStack(request: InquiryStackRequest): Promise<InquiryStackResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.inquiryStackWithOptions(request, runtime);
  }

  async previewStackWithOptions(request: PreviewStackRequest, runtime: $Util.RuntimeOptions): Promise<PreviewStackResponse> {
    Util.validateModel(request);
    return $tea.cast<PreviewStackResponse>(await this.doRequest("2015-09-01", "HTTPS", "POST", "AK", `/stacks/preview`, null, request.headers, null, runtime), new PreviewStackResponse({}));
  }

  async previewStack(request: PreviewStackRequest): Promise<PreviewStackResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.previewStackWithOptions(request, runtime);
  }

  async doActionsWithOptions(stackName: string, stackId: string, request: DoActionsRequest, runtime: $Util.RuntimeOptions): Promise<DoActionsResponse> {
    Util.validateModel(request);
    return $tea.cast<DoActionsResponse>(await this.doRequest("2015-09-01", "HTTPS", "POST", "AK", `/stacks/${stackName}/${stackId}/actions`, null, request.headers, null, runtime), new DoActionsResponse({}));
  }

  async doActions(stackName: string, stackId: string, request: DoActionsRequest): Promise<DoActionsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.doActionsWithOptions(stackName, stackId, request, runtime);
  }

  async describeRegionsWithOptions(request: DescribeRegionsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeRegionsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeRegionsResponse>(await this.doRequest("2015-09-01", "HTTPS", "GET", "AK", `/regions`, null, request.headers, null, runtime), new DescribeRegionsResponse({}));
  }

  async describeRegions(request: DescribeRegionsRequest): Promise<DescribeRegionsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeRegionsWithOptions(request, runtime);
  }

  async describeEventsWithOptions(stackName: string, stackId: string, request: DescribeEventsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeEventsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeEventsResponse>(await this.doRequest("2015-09-01", "HTTPS", "GET", "AK", `/stacks/${stackName}/${stackId}/events`, Util.stringifyMapValue($tea.toMap(request.query)), request.headers, null, runtime), new DescribeEventsResponse({}));
  }

  async describeEvents(stackName: string, stackId: string, request: DescribeEventsRequest): Promise<DescribeEventsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeEventsWithOptions(stackName, stackId, request, runtime);
  }

  async deleteStackWithOptions(stackName: string, stackId: string, request: DeleteStackRequest, runtime: $Util.RuntimeOptions): Promise<DeleteStackResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteStackResponse>(await this.doRequest("2015-09-01", "HTTPS", "DELETE", "AK", `/stacks/${stackName}/${stackId}`, Util.stringifyMapValue($tea.toMap(request.query)), request.headers, null, runtime), new DeleteStackResponse({}));
  }

  async deleteStack(stackName: string, stackId: string, request: DeleteStackRequest): Promise<DeleteStackResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteStackWithOptions(stackName, stackId, request, runtime);
  }

  async createStacksWithOptions(request: CreateStacksRequest, runtime: $Util.RuntimeOptions): Promise<CreateStacksResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateStacksResponse>(await this.doRequest("2015-09-01", "HTTPS", "POST", "AK", `/stacks`, null, request.headers, null, runtime), new CreateStacksResponse({}));
  }

  async createStacks(request: CreateStacksRequest): Promise<CreateStacksResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createStacksWithOptions(request, runtime);
  }

  async abandonStackWithOptions(stackName: string, stackId: string, request: AbandonStackRequest, runtime: $Util.RuntimeOptions): Promise<AbandonStackResponse> {
    Util.validateModel(request);
    return $tea.cast<AbandonStackResponse>(await this.doRequest("2015-09-01", "HTTPS", "DELETE", "AK", `/stacks/${stackName}/${stackId}/abandon`, null, request.headers, null, runtime), new AbandonStackResponse({}));
  }

  async abandonStack(stackName: string, stackId: string, request: AbandonStackRequest): Promise<AbandonStackResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.abandonStackWithOptions(stackName, stackId, request, runtime);
  }

  async describeResourceTypesWithOptions(request: DescribeResourceTypesRequest, runtime: $Util.RuntimeOptions): Promise<DescribeResourceTypesResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeResourceTypesResponse>(await this.doRequest("2015-09-01", "HTTPS", "GET", "AK", `/resource_types`, Util.stringifyMapValue($tea.toMap(request.query)), request.headers, null, runtime), new DescribeResourceTypesResponse({}));
  }

  async describeResourceTypes(request: DescribeResourceTypesRequest): Promise<DescribeResourceTypesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeResourceTypesWithOptions(request, runtime);
  }

  async describeResourceTypeDetailWithOptions(typeName: string, request: DescribeResourceTypeDetailRequest, runtime: $Util.RuntimeOptions): Promise<DescribeResourceTypeDetailResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeResourceTypeDetailResponse>(await this.doRequest("2015-09-01", "HTTPS", "GET", "AK", `/resource_types/${typeName}`, null, request.headers, null, runtime), new DescribeResourceTypeDetailResponse({}));
  }

  async describeResourceTypeDetail(typeName: string, request: DescribeResourceTypeDetailRequest): Promise<DescribeResourceTypeDetailResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeResourceTypeDetailWithOptions(typeName, request, runtime);
  }

  async describeResourcesWithOptions(stackName: string, stackId: string, request: DescribeResourcesRequest, runtime: $Util.RuntimeOptions): Promise<DescribeResourcesResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeResourcesResponse>(await this.doRequest("2015-09-01", "HTTPS", "GET", "AK", `/stacks/${stackName}/${stackId}/resources`, null, request.headers, null, runtime), new DescribeResourcesResponse({}));
  }

  async describeResources(stackName: string, stackId: string, request: DescribeResourcesRequest): Promise<DescribeResourcesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeResourcesWithOptions(stackName, stackId, request, runtime);
  }

  async describeResourceDetailWithOptions(stackName: string, stackId: string, resourceName: string, request: DescribeResourceDetailRequest, runtime: $Util.RuntimeOptions): Promise<DescribeResourceDetailResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeResourceDetailResponse>(await this.doRequest("2015-09-01", "HTTPS", "GET", "AK", `/stacks/${stackName}/${stackId}/resources/${resourceName}`, null, request.headers, null, runtime), new DescribeResourceDetailResponse({}));
  }

  async describeResourceDetail(stackName: string, stackId: string, resourceName: string, request: DescribeResourceDetailRequest): Promise<DescribeResourceDetailResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeResourceDetailWithOptions(stackName, stackId, resourceName, request, runtime);
  }

  async describeResourceTypeTemplateWithOptions(typeName: string, request: DescribeResourceTypeTemplateRequest, runtime: $Util.RuntimeOptions): Promise<DescribeResourceTypeTemplateResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeResourceTypeTemplateResponse>(await this.doRequest("2015-09-01", "HTTPS", "GET", "AK", `/resource_types/${typeName}/template`, null, request.headers, null, runtime), new DescribeResourceTypeTemplateResponse({}));
  }

  async describeResourceTypeTemplate(typeName: string, request: DescribeResourceTypeTemplateRequest): Promise<DescribeResourceTypeTemplateResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeResourceTypeTemplateWithOptions(typeName, request, runtime);
  }

  async describeStacksWithOptions(request: DescribeStacksRequest, runtime: $Util.RuntimeOptions): Promise<DescribeStacksResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeStacksResponse>(await this.doRequest("2015-09-01", "HTTPS", "GET", "AK", `/stacks`, Util.stringifyMapValue($tea.toMap(request.query)), request.headers, null, runtime), new DescribeStacksResponse({}));
  }

  async describeStacks(request: DescribeStacksRequest): Promise<DescribeStacksResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeStacksWithOptions(request, runtime);
  }

  async describeStackDetailWithOptions(stackName: string, stackId: string, request: DescribeStackDetailRequest, runtime: $Util.RuntimeOptions): Promise<DescribeStackDetailResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeStackDetailResponse>(await this.doRequest("2015-09-01", "HTTPS", "GET", "AK", `/stacks/${stackName}/${stackId}`, null, request.headers, null, runtime), new DescribeStackDetailResponse({}));
  }

  async describeStackDetail(stackName: string, stackId: string, request: DescribeStackDetailRequest): Promise<DescribeStackDetailResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeStackDetailWithOptions(stackName, stackId, request, runtime);
  }

  async validateTemplateWithOptions(request: ValidateTemplateRequest, runtime: $Util.RuntimeOptions): Promise<ValidateTemplateResponse> {
    Util.validateModel(request);
    return $tea.cast<ValidateTemplateResponse>(await this.doRequest("2015-09-01", "HTTPS", "POST", "AK", `/validate`, null, request.headers, null, runtime), new ValidateTemplateResponse({}));
  }

  async validateTemplate(request: ValidateTemplateRequest): Promise<ValidateTemplateResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.validateTemplateWithOptions(request, runtime);
  }

  async describeTemplateWithOptions(stackName: string, stackId: string, request: DescribeTemplateRequest, runtime: $Util.RuntimeOptions): Promise<DescribeTemplateResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeTemplateResponse>(await this.doRequest("2015-09-01", "HTTPS", "GET", "AK", `/stacks/${stackName}/${stackId}/template`, null, request.headers, null, runtime), new DescribeTemplateResponse({}));
  }

  async describeTemplate(stackName: string, stackId: string, request: DescribeTemplateRequest): Promise<DescribeTemplateResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeTemplateWithOptions(stackName, stackId, request, runtime);
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
