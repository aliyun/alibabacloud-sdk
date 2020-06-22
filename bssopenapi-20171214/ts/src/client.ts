// This file is auto-generated, don't edit it
import Util, * as $Util from '@alicloud/tea-util';
import RPC, * as $RPC from '@alicloud/rpc-client';
import EndpointUtil from '@alicloud/endpoint-util';
import * as $tea from '@alicloud/tea-typescript';

export class QuerySplitItemBillRequest extends $tea.Model {
  billingCycle: string;
  productCode?: string;
  productType?: string;
  subscriptionType?: string;
  pageNum?: number;
  pageSize?: number;
  static names(): { [key: string]: string } {
    return {
      billingCycle: 'BillingCycle',
      productCode: 'ProductCode',
      productType: 'ProductType',
      subscriptionType: 'SubscriptionType',
      pageNum: 'PageNum',
      pageSize: 'PageSize',
    };
  }

  static types(): { [key: string]: any } {
    return {
      billingCycle: 'string',
      productCode: 'string',
      productType: 'string',
      subscriptionType: 'string',
      pageNum: 'number',
      pageSize: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QuerySplitItemBillResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  code: string;
  message: string;
  data: QuerySplitItemBillResponseData;
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
      code: 'string',
      message: 'string',
      data: QuerySplitItemBillResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryRIUtilizationDetailRequest extends $tea.Model {
  RIInstanceId?: string;
  instanceSpec?: string;
  RICommodityCode: string;
  deductedInstanceId?: string;
  startTime: string;
  endTime: string;
  pageNum?: number;
  pageSize?: number;
  static names(): { [key: string]: string } {
    return {
      RIInstanceId: 'RIInstanceId',
      instanceSpec: 'InstanceSpec',
      RICommodityCode: 'RICommodityCode',
      deductedInstanceId: 'DeductedInstanceId',
      startTime: 'StartTime',
      endTime: 'EndTime',
      pageNum: 'PageNum',
      pageSize: 'PageSize',
    };
  }

  static types(): { [key: string]: any } {
    return {
      RIInstanceId: 'string',
      instanceSpec: 'string',
      RICommodityCode: 'string',
      deductedInstanceId: 'string',
      startTime: 'string',
      endTime: 'string',
      pageNum: 'number',
      pageSize: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryRIUtilizationDetailResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  code: string;
  message: string;
  data: QueryRIUtilizationDetailResponseData;
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
      code: 'string',
      message: 'string',
      data: QueryRIUtilizationDetailResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryBillToOSSSubscriptionRequest extends $tea.Model {
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

export class QueryBillToOSSSubscriptionResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  code: string;
  message: string;
  data: QueryBillToOSSSubscriptionResponseData;
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
      code: 'string',
      message: 'string',
      data: QueryBillToOSSSubscriptionResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryAccountBillRequest extends $tea.Model {
  billingCycle: string;
  pageNum?: number;
  pageSize?: number;
  ownerID?: number;
  isGroupByProduct?: boolean;
  productCode?: string;
  static names(): { [key: string]: string } {
    return {
      billingCycle: 'BillingCycle',
      pageNum: 'PageNum',
      pageSize: 'PageSize',
      ownerID: 'OwnerID',
      isGroupByProduct: 'IsGroupByProduct',
      productCode: 'ProductCode',
    };
  }

  static types(): { [key: string]: any } {
    return {
      billingCycle: 'string',
      pageNum: 'number',
      pageSize: 'number',
      ownerID: 'number',
      isGroupByProduct: 'boolean',
      productCode: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryAccountBillResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  code: string;
  message: string;
  data: QueryAccountBillResponseData;
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
      code: 'string',
      message: 'string',
      data: QueryAccountBillResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateCostUnitRequest extends $tea.Model {
  unitEntityList?: CreateCostUnitRequestUnitEntityList[];
  static names(): { [key: string]: string } {
    return {
      unitEntityList: 'UnitEntityList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      unitEntityList: { 'type': 'array', 'itemType': CreateCostUnitRequestUnitEntityList },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateCostUnitResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  code: string;
  message: string;
  data: CreateCostUnitResponseData;
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
      code: 'string',
      message: 'string',
      data: CreateCostUnitResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyCostUnitRequest extends $tea.Model {
  unitEntityList?: ModifyCostUnitRequestUnitEntityList[];
  static names(): { [key: string]: string } {
    return {
      unitEntityList: 'UnitEntityList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      unitEntityList: { 'type': 'array', 'itemType': ModifyCostUnitRequestUnitEntityList },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyCostUnitResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  code: string;
  message: string;
  data: ModifyCostUnitResponseData[];
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
      code: 'string',
      message: 'string',
      data: { 'type': 'array', 'itemType': ModifyCostUnitResponseData },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryCostUnitRequest extends $tea.Model {
  ownerUid: number;
  parentUnitId: number;
  pageNum?: number;
  pageSize?: number;
  static names(): { [key: string]: string } {
    return {
      ownerUid: 'OwnerUid',
      parentUnitId: 'ParentUnitId',
      pageNum: 'PageNum',
      pageSize: 'PageSize',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerUid: 'number',
      parentUnitId: 'number',
      pageNum: 'number',
      pageSize: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryCostUnitResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  code: string;
  message: string;
  data: QueryCostUnitResponseData;
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
      code: 'string',
      message: 'string',
      data: QueryCostUnitResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteCostUnitRequest extends $tea.Model {
  ownerUid: number;
  unitId: number;
  static names(): { [key: string]: string } {
    return {
      ownerUid: 'OwnerUid',
      unitId: 'UnitId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerUid: 'number',
      unitId: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteCostUnitResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  code: string;
  message: string;
  data: DeleteCostUnitResponseData;
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
      code: 'string',
      message: 'string',
      data: DeleteCostUnitResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AllocateCostUnitResourceRequest extends $tea.Model {
  fromUnitUserId: number;
  fromUnitId: number;
  resourceInstanceList: AllocateCostUnitResourceRequestResourceInstanceList[];
  toUnitUserId: number;
  toUnitId: number;
  static names(): { [key: string]: string } {
    return {
      fromUnitUserId: 'FromUnitUserId',
      fromUnitId: 'FromUnitId',
      resourceInstanceList: 'ResourceInstanceList',
      toUnitUserId: 'ToUnitUserId',
      toUnitId: 'ToUnitId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      fromUnitUserId: 'number',
      fromUnitId: 'number',
      resourceInstanceList: { 'type': 'array', 'itemType': AllocateCostUnitResourceRequestResourceInstanceList },
      toUnitUserId: 'number',
      toUnitId: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AllocateCostUnitResourceResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  code: string;
  message: string;
  data: AllocateCostUnitResourceResponseData;
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
      code: 'string',
      message: 'string',
      data: AllocateCostUnitResourceResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryCostUnitResourceRequest extends $tea.Model {
  ownerUid: number;
  unitId: number;
  pageNum?: number;
  pageSize?: number;
  static names(): { [key: string]: string } {
    return {
      ownerUid: 'OwnerUid',
      unitId: 'UnitId',
      pageNum: 'PageNum',
      pageSize: 'PageSize',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerUid: 'number',
      unitId: 'number',
      pageNum: 'number',
      pageSize: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryCostUnitResourceResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  code: string;
  message: string;
  data: QueryCostUnitResourceResponseData;
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
      code: 'string',
      message: 'string',
      data: QueryCostUnitResourceResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RenewResourcePackageRequest extends $tea.Model {
  instanceId: string;
  effectiveDate?: string;
  duration: number;
  pricingCycle: string;
  static names(): { [key: string]: string } {
    return {
      instanceId: 'InstanceId',
      effectiveDate: 'EffectiveDate',
      duration: 'Duration',
      pricingCycle: 'PricingCycle',
    };
  }

  static types(): { [key: string]: any } {
    return {
      instanceId: 'string',
      effectiveDate: 'string',
      duration: 'number',
      pricingCycle: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RenewResourcePackageResponse extends $tea.Model {
  requestId: string;
  orderId: number;
  success: boolean;
  code: string;
  message: string;
  data: RenewResourcePackageResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      orderId: 'OrderId',
      success: 'Success',
      code: 'Code',
      message: 'Message',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      orderId: 'number',
      success: 'boolean',
      code: 'string',
      message: 'string',
      data: RenewResourcePackageResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpgradeResourcePackageRequest extends $tea.Model {
  instanceId?: string;
  effectiveDate?: string;
  specification?: string;
  static names(): { [key: string]: string } {
    return {
      instanceId: 'InstanceId',
      effectiveDate: 'EffectiveDate',
      specification: 'Specification',
    };
  }

  static types(): { [key: string]: any } {
    return {
      instanceId: 'string',
      effectiveDate: 'string',
      specification: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpgradeResourcePackageResponse extends $tea.Model {
  requestId: string;
  orderId: number;
  success: boolean;
  code: string;
  message: string;
  data: UpgradeResourcePackageResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      orderId: 'OrderId',
      success: 'Success',
      code: 'Code',
      message: 'Message',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      orderId: 'number',
      success: 'boolean',
      code: 'string',
      message: 'string',
      data: UpgradeResourcePackageResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateAgAccountRequest extends $tea.Model {
  loginEmail: string;
  accountAttr?: string;
  enterpriseName?: string;
  firstName?: string;
  lastName?: string;
  nationCode?: string;
  provinceName?: string;
  cityName?: string;
  postcode?: string;
  static names(): { [key: string]: string } {
    return {
      loginEmail: 'LoginEmail',
      accountAttr: 'AccountAttr',
      enterpriseName: 'EnterpriseName',
      firstName: 'FirstName',
      lastName: 'LastName',
      nationCode: 'NationCode',
      provinceName: 'ProvinceName',
      cityName: 'CityName',
      postcode: 'Postcode',
    };
  }

  static types(): { [key: string]: any } {
    return {
      loginEmail: 'string',
      accountAttr: 'string',
      enterpriseName: 'string',
      firstName: 'string',
      lastName: 'string',
      nationCode: 'string',
      provinceName: 'string',
      cityName: 'string',
      postcode: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateAgAccountResponse extends $tea.Model {
  requestId: string;
  code: string;
  message: string;
  success: boolean;
  agRelationDto: CreateAgAccountResponseAgRelationDto;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      code: 'Code',
      message: 'Message',
      success: 'Success',
      agRelationDto: 'AgRelationDto',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      code: 'string',
      message: 'string',
      success: 'boolean',
      agRelationDto: CreateAgAccountResponseAgRelationDto,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetCustomerAccountInfoRequest extends $tea.Model {
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

export class GetCustomerAccountInfoResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  code: string;
  message: string;
  data: GetCustomerAccountInfoResponseData;
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
      code: 'string',
      message: 'string',
      data: GetCustomerAccountInfoResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetCustomerListRequest extends $tea.Model {
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

export class GetCustomerListResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  code: string;
  message: string;
  data: GetCustomerListResponseData;
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
      code: 'string',
      message: 'string',
      data: GetCustomerListResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ChangeResellerConsumeAmountRequest extends $tea.Model {
  adjustType: string;
  amount: string;
  currency: string;
  businessType: string;
  source: string;
  outBizId: string;
  extendMap?: string;
  static names(): { [key: string]: string } {
    return {
      adjustType: 'AdjustType',
      amount: 'Amount',
      currency: 'Currency',
      businessType: 'BusinessType',
      source: 'Source',
      outBizId: 'OutBizId',
      extendMap: 'ExtendMap',
    };
  }

  static types(): { [key: string]: any } {
    return {
      adjustType: 'string',
      amount: 'string',
      currency: 'string',
      businessType: 'string',
      source: 'string',
      outBizId: 'string',
      extendMap: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ChangeResellerConsumeAmountResponse extends $tea.Model {
  requestId: string;
  code: string;
  message: string;
  success: boolean;
  data: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      code: 'Code',
      message: 'Message',
      success: 'Success',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      code: 'string',
      message: 'string',
      success: 'boolean',
      data: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SetResellerUserStatusRequest extends $tea.Model {
  status: string;
  businessType: string;
  static names(): { [key: string]: string } {
    return {
      status: 'Status',
      businessType: 'BusinessType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      status: 'string',
      businessType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SetResellerUserStatusResponse extends $tea.Model {
  requestId: string;
  code: string;
  message: string;
  success: boolean;
  data: boolean;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      code: 'Code',
      message: 'Message',
      success: 'Success',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      code: 'string',
      message: 'string',
      success: 'boolean',
      data: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateResellerUserQuotaRequest extends $tea.Model {
  amount: string;
  currency: string;
  outBizId?: string;
  static names(): { [key: string]: string } {
    return {
      amount: 'Amount',
      currency: 'Currency',
      outBizId: 'OutBizId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      amount: 'string',
      currency: 'string',
      outBizId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateResellerUserQuotaResponse extends $tea.Model {
  requestId: string;
  code: string;
  message: string;
  success: boolean;
  data: boolean;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      code: 'Code',
      message: 'Message',
      success: 'Success',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      code: 'string',
      message: 'string',
      success: 'boolean',
      data: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SetResellerUserQuotaRequest extends $tea.Model {
  amount: string;
  currency?: string;
  outBizId?: string;
  static names(): { [key: string]: string } {
    return {
      amount: 'Amount',
      currency: 'Currency',
      outBizId: 'OutBizId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      amount: 'string',
      currency: 'string',
      outBizId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SetResellerUserQuotaResponse extends $tea.Model {
  requestId: string;
  code: string;
  message: string;
  success: boolean;
  data: boolean;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      code: 'Code',
      message: 'Message',
      success: 'Success',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      code: 'string',
      message: 'string',
      success: 'boolean',
      data: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryResellerAvailableQuotaRequest extends $tea.Model {
  itemCodes?: string;
  static names(): { [key: string]: string } {
    return {
      itemCodes: 'ItemCodes',
    };
  }

  static types(): { [key: string]: any } {
    return {
      itemCodes: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryResellerAvailableQuotaResponse extends $tea.Model {
  requestId: string;
  code: string;
  message: string;
  success: boolean;
  data: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      code: 'Code',
      message: 'Message',
      success: 'Success',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      code: 'string',
      message: 'string',
      success: 'boolean',
      data: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SetResellerUserAlarmThresholdRequest extends $tea.Model {
  alarmType: string;
  alarmThresholds?: string;
  static names(): { [key: string]: string } {
    return {
      alarmType: 'AlarmType',
      alarmThresholds: 'AlarmThresholds',
    };
  }

  static types(): { [key: string]: any } {
    return {
      alarmType: 'string',
      alarmThresholds: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SetResellerUserAlarmThresholdResponse extends $tea.Model {
  requestId: string;
  code: string;
  message: string;
  success: boolean;
  data: boolean;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      code: 'Code',
      message: 'Message',
      success: 'Success',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      code: 'string',
      message: 'string',
      success: 'boolean',
      data: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryAccountTransactionsRequest extends $tea.Model {
  transactionNumber?: string;
  recordID?: string;
  transactionChannelSN?: string;
  createTimeStart?: string;
  createTimeEnd?: string;
  pageNum?: number;
  pageSize?: number;
  static names(): { [key: string]: string } {
    return {
      transactionNumber: 'TransactionNumber',
      recordID: 'RecordID',
      transactionChannelSN: 'TransactionChannelSN',
      createTimeStart: 'CreateTimeStart',
      createTimeEnd: 'CreateTimeEnd',
      pageNum: 'PageNum',
      pageSize: 'PageSize',
    };
  }

  static types(): { [key: string]: any } {
    return {
      transactionNumber: 'string',
      recordID: 'string',
      transactionChannelSN: 'string',
      createTimeStart: 'string',
      createTimeEnd: 'string',
      pageNum: 'number',
      pageSize: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryAccountTransactionsResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  code: string;
  message: string;
  data: QueryAccountTransactionsResponseData;
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
      code: 'string',
      message: 'string',
      data: QueryAccountTransactionsResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UnsubscribeBillToOSSRequest extends $tea.Model {
  subscribeType: string;
  multAccountRelSubscribe?: string;
  static names(): { [key: string]: string } {
    return {
      subscribeType: 'SubscribeType',
      multAccountRelSubscribe: 'MultAccountRelSubscribe',
    };
  }

  static types(): { [key: string]: any } {
    return {
      subscribeType: 'string',
      multAccountRelSubscribe: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UnsubscribeBillToOSSResponse extends $tea.Model {
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

export class SubscribeBillToOSSRequest extends $tea.Model {
  subscribeBucket: string;
  subscribeType?: string;
  multAccountRelSubscribe?: string;
  bucketOwnerId?: number;
  static names(): { [key: string]: string } {
    return {
      subscribeBucket: 'SubscribeBucket',
      subscribeType: 'SubscribeType',
      multAccountRelSubscribe: 'MultAccountRelSubscribe',
      bucketOwnerId: 'BucketOwnerId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      subscribeBucket: 'string',
      subscribeType: 'string',
      multAccountRelSubscribe: 'string',
      bucketOwnerId: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SubscribeBillToOSSResponse extends $tea.Model {
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

export class QueryUserOmsDataRequest extends $tea.Model {
  table: string;
  dataType: string;
  startTime: string;
  endTime: string;
  marker?: string;
  pageSize?: number;
  static names(): { [key: string]: string } {
    return {
      table: 'Table',
      dataType: 'DataType',
      startTime: 'StartTime',
      endTime: 'EndTime',
      marker: 'Marker',
      pageSize: 'PageSize',
    };
  }

  static types(): { [key: string]: any } {
    return {
      table: 'string',
      dataType: 'string',
      startTime: 'string',
      endTime: 'string',
      marker: 'string',
      pageSize: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryUserOmsDataResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  code: string;
  message: string;
  data: QueryUserOmsDataResponseData;
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
      code: 'string',
      message: 'string',
      data: QueryUserOmsDataResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CancelOrderRequest extends $tea.Model {
  orderId: string;
  static names(): { [key: string]: string } {
    return {
      orderId: 'OrderId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      orderId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CancelOrderResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  code: string;
  message: string;
  data: CancelOrderResponseData;
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
      code: 'string',
      message: 'string',
      data: CancelOrderResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ApplyInvoiceRequest extends $tea.Model {
  invoiceAmount: number;
  customerId: number;
  addressId: number;
  invoicingType?: number;
  processWay?: number;
  applyUserNick: string;
  selectedIds: number[];
  invoiceByAmount?: boolean;
  static names(): { [key: string]: string } {
    return {
      invoiceAmount: 'InvoiceAmount',
      customerId: 'CustomerId',
      addressId: 'AddressId',
      invoicingType: 'InvoicingType',
      processWay: 'ProcessWay',
      applyUserNick: 'ApplyUserNick',
      selectedIds: 'SelectedIds',
      invoiceByAmount: 'InvoiceByAmount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      invoiceAmount: 'number',
      customerId: 'number',
      addressId: 'number',
      invoicingType: 'number',
      processWay: 'number',
      applyUserNick: 'string',
      selectedIds: { 'type': 'array', 'itemType': 'long' },
      invoiceByAmount: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ApplyInvoiceResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  code: string;
  message: string;
  data: ApplyInvoiceResponseData;
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
      code: 'string',
      message: 'string',
      data: ApplyInvoiceResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryCustomerAddressListRequest extends $tea.Model {
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

export class QueryCustomerAddressListResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  code: string;
  message: string;
  data: QueryCustomerAddressListResponseData;
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
      code: 'string',
      message: 'string',
      data: QueryCustomerAddressListResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryEvaluateListRequest extends $tea.Model {
  type?: number;
  outBizId?: string;
  pageNum?: number;
  pageSize?: number;
  startAmount?: number;
  endAmount?: number;
  startBizTime?: string;
  endBizTime?: string;
  sortType?: number;
  startSearchTime?: string;
  endSearchTime?: string;
  billCycle?: string;
  bizTypeList?: string[];
  static names(): { [key: string]: string } {
    return {
      type: 'Type',
      outBizId: 'OutBizId',
      pageNum: 'PageNum',
      pageSize: 'PageSize',
      startAmount: 'StartAmount',
      endAmount: 'EndAmount',
      startBizTime: 'StartBizTime',
      endBizTime: 'EndBizTime',
      sortType: 'SortType',
      startSearchTime: 'StartSearchTime',
      endSearchTime: 'EndSearchTime',
      billCycle: 'BillCycle',
      bizTypeList: 'BizTypeList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      type: 'number',
      outBizId: 'string',
      pageNum: 'number',
      pageSize: 'number',
      startAmount: 'number',
      endAmount: 'number',
      startBizTime: 'string',
      endBizTime: 'string',
      sortType: 'number',
      startSearchTime: 'string',
      endSearchTime: 'string',
      billCycle: 'string',
      bizTypeList: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryEvaluateListResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  code: string;
  message: string;
  data: QueryEvaluateListResponseData;
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
      code: 'string',
      message: 'string',
      data: QueryEvaluateListResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryInvoicingCustomerListRequest extends $tea.Model {
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

export class QueryInvoicingCustomerListResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  code: string;
  message: string;
  data: QueryInvoicingCustomerListResponseData;
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
      code: 'string',
      message: 'string',
      data: QueryInvoicingCustomerListResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryBillOverviewRequest extends $tea.Model {
  billingCycle: string;
  productCode?: string;
  productType?: string;
  subscriptionType?: string;
  static names(): { [key: string]: string } {
    return {
      billingCycle: 'BillingCycle',
      productCode: 'ProductCode',
      productType: 'ProductType',
      subscriptionType: 'SubscriptionType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      billingCycle: 'string',
      productCode: 'string',
      productType: 'string',
      subscriptionType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryBillOverviewResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  code: string;
  message: string;
  data: QueryBillOverviewResponseData;
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
      code: 'string',
      message: 'string',
      data: QueryBillOverviewResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryBillRequest extends $tea.Model {
  billingCycle: string;
  type?: string;
  productCode?: string;
  productType?: string;
  subscriptionType?: string;
  isHideZeroCharge?: boolean;
  isDisplayLocalCurrency?: boolean;
  pageNum?: number;
  pageSize?: number;
  static names(): { [key: string]: string } {
    return {
      billingCycle: 'BillingCycle',
      type: 'Type',
      productCode: 'ProductCode',
      productType: 'ProductType',
      subscriptionType: 'SubscriptionType',
      isHideZeroCharge: 'IsHideZeroCharge',
      isDisplayLocalCurrency: 'IsDisplayLocalCurrency',
      pageNum: 'PageNum',
      pageSize: 'PageSize',
    };
  }

  static types(): { [key: string]: any } {
    return {
      billingCycle: 'string',
      type: 'string',
      productCode: 'string',
      productType: 'string',
      subscriptionType: 'string',
      isHideZeroCharge: 'boolean',
      isDisplayLocalCurrency: 'boolean',
      pageNum: 'number',
      pageSize: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryBillResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  code: string;
  message: string;
  data: QueryBillResponseData;
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
      code: 'string',
      message: 'string',
      data: QueryBillResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryInstanceBillRequest extends $tea.Model {
  billingCycle: string;
  productCode?: string;
  productType?: string;
  subscriptionType?: string;
  isBillingItem?: boolean;
  pageNum?: number;
  pageSize?: number;
  isHideZeroCharge?: boolean;
  billingDate?: string;
  granularity?: string;
  static names(): { [key: string]: string } {
    return {
      billingCycle: 'BillingCycle',
      productCode: 'ProductCode',
      productType: 'ProductType',
      subscriptionType: 'SubscriptionType',
      isBillingItem: 'IsBillingItem',
      pageNum: 'PageNum',
      pageSize: 'PageSize',
      isHideZeroCharge: 'IsHideZeroCharge',
      billingDate: 'BillingDate',
      granularity: 'Granularity',
    };
  }

  static types(): { [key: string]: any } {
    return {
      billingCycle: 'string',
      productCode: 'string',
      productType: 'string',
      subscriptionType: 'string',
      isBillingItem: 'boolean',
      pageNum: 'number',
      pageSize: 'number',
      isHideZeroCharge: 'boolean',
      billingDate: 'string',
      granularity: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryInstanceBillResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  code: string;
  message: string;
  data: QueryInstanceBillResponseData;
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
      code: 'string',
      message: 'string',
      data: QueryInstanceBillResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class EnableBillGenerationRequest extends $tea.Model {
  productCode: string;
  static names(): { [key: string]: string } {
    return {
      productCode: 'ProductCode',
    };
  }

  static types(): { [key: string]: any } {
    return {
      productCode: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class EnableBillGenerationResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  code: string;
  message: string;
  data: EnableBillGenerationResponseData;
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
      code: 'string',
      message: 'string',
      data: EnableBillGenerationResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryRedeemRequest extends $tea.Model {
  expiryTimeStart?: string;
  expiryTimeEnd?: string;
  effectiveOrNot?: boolean;
  pageNum?: number;
  pageSize?: number;
  static names(): { [key: string]: string } {
    return {
      expiryTimeStart: 'ExpiryTimeStart',
      expiryTimeEnd: 'ExpiryTimeEnd',
      effectiveOrNot: 'EffectiveOrNot',
      pageNum: 'PageNum',
      pageSize: 'PageSize',
    };
  }

  static types(): { [key: string]: any } {
    return {
      expiryTimeStart: 'string',
      expiryTimeEnd: 'string',
      effectiveOrNot: 'boolean',
      pageNum: 'number',
      pageSize: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryRedeemResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  code: string;
  message: string;
  data: QueryRedeemResponseData;
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
      code: 'string',
      message: 'string',
      data: QueryRedeemResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ConvertChargeTypeRequest extends $tea.Model {
  productType?: string;
  subscriptionType: string;
  period?: number;
  productCode: string;
  instanceId: string;
  static names(): { [key: string]: string } {
    return {
      productType: 'ProductType',
      subscriptionType: 'SubscriptionType',
      period: 'Period',
      productCode: 'ProductCode',
      instanceId: 'InstanceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      productType: 'string',
      subscriptionType: 'string',
      period: 'number',
      productCode: 'string',
      instanceId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ConvertChargeTypeResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  code: string;
  message: string;
  data: ConvertChargeTypeResponseData;
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
      code: 'string',
      message: 'string',
      data: ConvertChargeTypeResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateInstanceRequest extends $tea.Model {
  productCode: string;
  parameter?: CreateInstanceRequestParameter[];
  productType?: string;
  subscriptionType: string;
  period?: number;
  renewalStatus?: string;
  renewPeriod?: number;
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      productCode: 'ProductCode',
      parameter: 'Parameter',
      productType: 'ProductType',
      subscriptionType: 'SubscriptionType',
      period: 'Period',
      renewalStatus: 'RenewalStatus',
      renewPeriod: 'RenewPeriod',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      productCode: 'string',
      parameter: { 'type': 'array', 'itemType': CreateInstanceRequestParameter },
      productType: 'string',
      subscriptionType: 'string',
      period: 'number',
      renewalStatus: 'string',
      renewPeriod: 'number',
      clientToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateInstanceResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  code: string;
  message: string;
  data: CreateInstanceResponseData;
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
      code: 'string',
      message: 'string',
      data: CreateInstanceResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyInstanceRequest extends $tea.Model {
  productCode: string;
  productType?: string;
  subscriptionType: string;
  modifyType: string;
  instanceId?: string;
  parameter?: ModifyInstanceRequestParameter[];
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      productCode: 'ProductCode',
      productType: 'ProductType',
      subscriptionType: 'SubscriptionType',
      modifyType: 'ModifyType',
      instanceId: 'InstanceId',
      parameter: 'Parameter',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      productCode: 'string',
      productType: 'string',
      subscriptionType: 'string',
      modifyType: 'string',
      instanceId: 'string',
      parameter: { 'type': 'array', 'itemType': ModifyInstanceRequestParameter },
      clientToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyInstanceResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  code: string;
  message: string;
  data: ModifyInstanceResponseData;
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
      code: 'string',
      message: 'string',
      data: ModifyInstanceResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribePricingModuleRequest extends $tea.Model {
  productCode: string;
  productType?: string;
  subscriptionType: string;
  static names(): { [key: string]: string } {
    return {
      productCode: 'ProductCode',
      productType: 'ProductType',
      subscriptionType: 'SubscriptionType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      productCode: 'string',
      productType: 'string',
      subscriptionType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribePricingModuleResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  code: string;
  message: string;
  data: DescribePricingModuleResponseData;
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
      code: 'string',
      message: 'string',
      data: DescribePricingModuleResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryProductListRequest extends $tea.Model {
  queryTotalCount?: boolean;
  pageNum: number;
  pageSize?: number;
  static names(): { [key: string]: string } {
    return {
      queryTotalCount: 'QueryTotalCount',
      pageNum: 'PageNum',
      pageSize: 'PageSize',
    };
  }

  static types(): { [key: string]: any } {
    return {
      queryTotalCount: 'boolean',
      pageNum: 'number',
      pageSize: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryProductListResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  code: string;
  message: string;
  data: QueryProductListResponseData;
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
      code: 'string',
      message: 'string',
      data: QueryProductListResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryInstanceGaapCostRequest extends $tea.Model {
  pageNum?: number;
  pageSize?: number;
  billingCycle: string;
  productCode?: string;
  productType?: string;
  subscriptionType?: string;
  static names(): { [key: string]: string } {
    return {
      pageNum: 'PageNum',
      pageSize: 'PageSize',
      billingCycle: 'BillingCycle',
      productCode: 'ProductCode',
      productType: 'ProductType',
      subscriptionType: 'SubscriptionType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      pageNum: 'number',
      pageSize: 'number',
      billingCycle: 'string',
      productCode: 'string',
      productType: 'string',
      subscriptionType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryInstanceGaapCostResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  code: string;
  message: string;
  data: QueryInstanceGaapCostResponseData;
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
      code: 'string',
      message: 'string',
      data: QueryInstanceGaapCostResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RenewInstanceRequest extends $tea.Model {
  productCode: string;
  instanceId: string;
  renewPeriod: number;
  clientToken?: string;
  productType?: string;
  static names(): { [key: string]: string } {
    return {
      productCode: 'ProductCode',
      instanceId: 'InstanceId',
      renewPeriod: 'RenewPeriod',
      clientToken: 'ClientToken',
      productType: 'ProductType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      productCode: 'string',
      instanceId: 'string',
      renewPeriod: 'number',
      clientToken: 'string',
      productType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RenewInstanceResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  code: string;
  message: string;
  data: RenewInstanceResponseData;
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
      code: 'string',
      message: 'string',
      data: RenewInstanceResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetOrderDetailRequest extends $tea.Model {
  orderId: string;
  static names(): { [key: string]: string } {
    return {
      orderId: 'OrderId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      orderId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetOrderDetailResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  code: string;
  message: string;
  data: GetOrderDetailResponseData;
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
      code: 'string',
      message: 'string',
      data: GetOrderDetailResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryOrdersRequest extends $tea.Model {
  createTimeEnd?: string;
  pageNum?: number;
  pageSize?: number;
  productCode?: string;
  productType?: string;
  subscriptionType?: string;
  orderType?: string;
  paymentStatus?: string;
  createTimeStart?: string;
  static names(): { [key: string]: string } {
    return {
      createTimeEnd: 'CreateTimeEnd',
      pageNum: 'PageNum',
      pageSize: 'PageSize',
      productCode: 'ProductCode',
      productType: 'ProductType',
      subscriptionType: 'SubscriptionType',
      orderType: 'OrderType',
      paymentStatus: 'PaymentStatus',
      createTimeStart: 'CreateTimeStart',
    };
  }

  static types(): { [key: string]: any } {
    return {
      createTimeEnd: 'string',
      pageNum: 'number',
      pageSize: 'number',
      productCode: 'string',
      productType: 'string',
      subscriptionType: 'string',
      orderType: 'string',
      paymentStatus: 'string',
      createTimeStart: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryOrdersResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  code: string;
  message: string;
  data: QueryOrdersResponseData;
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
      code: 'string',
      message: 'string',
      data: QueryOrdersResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryMonthlyInstanceConsumptionRequest extends $tea.Model {
  productCode?: string;
  pageNum?: number;
  pageSize?: number;
  billingCycle: string;
  productType?: string;
  subscriptionType?: string;
  static names(): { [key: string]: string } {
    return {
      productCode: 'ProductCode',
      pageNum: 'PageNum',
      pageSize: 'PageSize',
      billingCycle: 'BillingCycle',
      productType: 'ProductType',
      subscriptionType: 'SubscriptionType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      productCode: 'string',
      pageNum: 'number',
      pageSize: 'number',
      billingCycle: 'string',
      productType: 'string',
      subscriptionType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryMonthlyInstanceConsumptionResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  code: string;
  message: string;
  data: QueryMonthlyInstanceConsumptionResponseData;
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
      code: 'string',
      message: 'string',
      data: QueryMonthlyInstanceConsumptionResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QuerySettlementBillRequest extends $tea.Model {
  pageSize?: number;
  pageNum?: number;
  billingCycle: string;
  startTime?: string;
  endTime?: string;
  type?: string;
  productCode?: string;
  productType?: string;
  subscriptionType?: string;
  isHideZeroCharge?: boolean;
  static names(): { [key: string]: string } {
    return {
      pageSize: 'PageSize',
      pageNum: 'PageNum',
      billingCycle: 'BillingCycle',
      startTime: 'StartTime',
      endTime: 'EndTime',
      type: 'Type',
      productCode: 'ProductCode',
      productType: 'ProductType',
      subscriptionType: 'SubscriptionType',
      isHideZeroCharge: 'IsHideZeroCharge',
    };
  }

  static types(): { [key: string]: any } {
    return {
      pageSize: 'number',
      pageNum: 'number',
      billingCycle: 'string',
      startTime: 'string',
      endTime: 'string',
      type: 'string',
      productCode: 'string',
      productType: 'string',
      subscriptionType: 'string',
      isHideZeroCharge: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QuerySettlementBillResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  code: string;
  message: string;
  data: QuerySettlementBillResponseData;
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
      code: 'string',
      message: 'string',
      data: QuerySettlementBillResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryMonthlyBillRequest extends $tea.Model {
  billingCycle: string;
  static names(): { [key: string]: string } {
    return {
      billingCycle: 'BillingCycle',
    };
  }

  static types(): { [key: string]: any } {
    return {
      billingCycle: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryMonthlyBillResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  code: string;
  message: string;
  data: QueryMonthlyBillResponseData;
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
      code: 'string',
      message: 'string',
      data: QueryMonthlyBillResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SetRenewalRequest extends $tea.Model {
  renewalPeriod?: number;
  instanceIDs: string;
  productCode?: string;
  productType?: string;
  subscriptionType?: string;
  renewalPeriodUnit?: string;
  renewalStatus: string;
  static names(): { [key: string]: string } {
    return {
      renewalPeriod: 'RenewalPeriod',
      instanceIDs: 'InstanceIDs',
      productCode: 'ProductCode',
      productType: 'ProductType',
      subscriptionType: 'SubscriptionType',
      renewalPeriodUnit: 'RenewalPeriodUnit',
      renewalStatus: 'RenewalStatus',
    };
  }

  static types(): { [key: string]: any } {
    return {
      renewalPeriod: 'number',
      instanceIDs: 'string',
      productCode: 'string',
      productType: 'string',
      subscriptionType: 'string',
      renewalPeriodUnit: 'string',
      renewalStatus: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SetRenewalResponse extends $tea.Model {
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

export class QueryAvailableInstancesRequest extends $tea.Model {
  region?: string;
  pageNum?: number;
  pageSize?: number;
  productCode?: string;
  productType?: string;
  subscriptionType?: string;
  instanceIDs?: string;
  endTimeStart?: string;
  endTimeEnd?: string;
  createTimeStart?: string;
  createTimeEnd?: string;
  renewStatus?: string;
  static names(): { [key: string]: string } {
    return {
      region: 'Region',
      pageNum: 'PageNum',
      pageSize: 'PageSize',
      productCode: 'ProductCode',
      productType: 'ProductType',
      subscriptionType: 'SubscriptionType',
      instanceIDs: 'InstanceIDs',
      endTimeStart: 'EndTimeStart',
      endTimeEnd: 'EndTimeEnd',
      createTimeStart: 'CreateTimeStart',
      createTimeEnd: 'CreateTimeEnd',
      renewStatus: 'RenewStatus',
    };
  }

  static types(): { [key: string]: any } {
    return {
      region: 'string',
      pageNum: 'number',
      pageSize: 'number',
      productCode: 'string',
      productType: 'string',
      subscriptionType: 'string',
      instanceIDs: 'string',
      endTimeStart: 'string',
      endTimeEnd: 'string',
      createTimeStart: 'string',
      createTimeEnd: 'string',
      renewStatus: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryAvailableInstancesResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  code: string;
  message: string;
  data: QueryAvailableInstancesResponseData;
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
      code: 'string',
      message: 'string',
      data: QueryAvailableInstancesResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateResourcePackageRequest extends $tea.Model {
  productCode?: string;
  packageType?: string;
  effectiveDate?: string;
  specification?: string;
  duration?: number;
  pricingCycle?: string;
  static names(): { [key: string]: string } {
    return {
      productCode: 'ProductCode',
      packageType: 'PackageType',
      effectiveDate: 'EffectiveDate',
      specification: 'Specification',
      duration: 'Duration',
      pricingCycle: 'PricingCycle',
    };
  }

  static types(): { [key: string]: any } {
    return {
      productCode: 'string',
      packageType: 'string',
      effectiveDate: 'string',
      specification: 'string',
      duration: 'number',
      pricingCycle: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateResourcePackageResponse extends $tea.Model {
  requestId: string;
  orderId: number;
  success: boolean;
  code: string;
  message: string;
  data: CreateResourcePackageResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      orderId: 'OrderId',
      success: 'Success',
      code: 'Code',
      message: 'Message',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      orderId: 'number',
      success: 'boolean',
      code: 'string',
      message: 'string',
      data: CreateResourcePackageResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryResourcePackageInstancesRequest extends $tea.Model {
  productCode?: string;
  expiryTimeStart?: string;
  expiryTimeEnd?: string;
  pageNum?: number;
  pageSize?: number;
  static names(): { [key: string]: string } {
    return {
      productCode: 'ProductCode',
      expiryTimeStart: 'ExpiryTimeStart',
      expiryTimeEnd: 'ExpiryTimeEnd',
      pageNum: 'PageNum',
      pageSize: 'PageSize',
    };
  }

  static types(): { [key: string]: any } {
    return {
      productCode: 'string',
      expiryTimeStart: 'string',
      expiryTimeEnd: 'string',
      pageNum: 'number',
      pageSize: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryResourcePackageInstancesResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  code: string;
  message: string;
  page: number;
  pageSize: number;
  total: number;
  data: QueryResourcePackageInstancesResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      success: 'Success',
      code: 'Code',
      message: 'Message',
      page: 'Page',
      pageSize: 'PageSize',
      total: 'Total',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      success: 'boolean',
      code: 'string',
      message: 'string',
      page: 'number',
      pageSize: 'number',
      total: 'number',
      data: QueryResourcePackageInstancesResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetResourcePackagePriceRequest extends $tea.Model {
  productCode?: string;
  packageType?: string;
  effectiveDate?: string;
  specification?: string;
  duration?: number;
  pricingCycle?: string;
  orderType?: string;
  instanceId?: string;
  static names(): { [key: string]: string } {
    return {
      productCode: 'ProductCode',
      packageType: 'PackageType',
      effectiveDate: 'EffectiveDate',
      specification: 'Specification',
      duration: 'Duration',
      pricingCycle: 'PricingCycle',
      orderType: 'OrderType',
      instanceId: 'InstanceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      productCode: 'string',
      packageType: 'string',
      effectiveDate: 'string',
      specification: 'string',
      duration: 'number',
      pricingCycle: 'string',
      orderType: 'string',
      instanceId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetResourcePackagePriceResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  code: string;
  message: string;
  data: GetResourcePackagePriceResponseData;
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
      code: 'string',
      message: 'string',
      data: GetResourcePackagePriceResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetSubscriptionPriceRequest extends $tea.Model {
  servicePeriodUnit?: string;
  subscriptionType: string;
  productCode: string;
  orderType: string;
  servicePeriodQuantity?: number;
  productType?: string;
  region?: string;
  instanceId?: string;
  moduleList: GetSubscriptionPriceRequestModuleList[];
  quantity?: number;
  static names(): { [key: string]: string } {
    return {
      servicePeriodUnit: 'ServicePeriodUnit',
      subscriptionType: 'SubscriptionType',
      productCode: 'ProductCode',
      orderType: 'OrderType',
      servicePeriodQuantity: 'ServicePeriodQuantity',
      productType: 'ProductType',
      region: 'Region',
      instanceId: 'InstanceId',
      moduleList: 'ModuleList',
      quantity: 'Quantity',
    };
  }

  static types(): { [key: string]: any } {
    return {
      servicePeriodUnit: 'string',
      subscriptionType: 'string',
      productCode: 'string',
      orderType: 'string',
      servicePeriodQuantity: 'number',
      productType: 'string',
      region: 'string',
      instanceId: 'string',
      moduleList: { 'type': 'array', 'itemType': GetSubscriptionPriceRequestModuleList },
      quantity: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetSubscriptionPriceResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  code: string;
  message: string;
  data: GetSubscriptionPriceResponseData;
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
      code: 'string',
      message: 'string',
      data: GetSubscriptionPriceResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetPayAsYouGoPriceRequest extends $tea.Model {
  productCode: string;
  productType?: string;
  subscriptionType: string;
  region?: string;
  moduleList: GetPayAsYouGoPriceRequestModuleList[];
  static names(): { [key: string]: string } {
    return {
      productCode: 'ProductCode',
      productType: 'ProductType',
      subscriptionType: 'SubscriptionType',
      region: 'Region',
      moduleList: 'ModuleList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      productCode: 'string',
      productType: 'string',
      subscriptionType: 'string',
      region: 'string',
      moduleList: { 'type': 'array', 'itemType': GetPayAsYouGoPriceRequestModuleList },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetPayAsYouGoPriceResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  code: string;
  message: string;
  data: GetPayAsYouGoPriceResponseData;
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
      code: 'string',
      message: 'string',
      data: GetPayAsYouGoPriceResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryPrepaidCardsRequest extends $tea.Model {
  expiryTimeEnd?: string;
  expiryTimeStart?: string;
  effectiveOrNot?: boolean;
  static names(): { [key: string]: string } {
    return {
      expiryTimeEnd: 'ExpiryTimeEnd',
      expiryTimeStart: 'ExpiryTimeStart',
      effectiveOrNot: 'EffectiveOrNot',
    };
  }

  static types(): { [key: string]: any } {
    return {
      expiryTimeEnd: 'string',
      expiryTimeStart: 'string',
      effectiveOrNot: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryPrepaidCardsResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  code: string;
  message: string;
  data: QueryPrepaidCardsResponseData;
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
      code: 'string',
      message: 'string',
      data: QueryPrepaidCardsResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryCashCouponsRequest extends $tea.Model {
  expiryTimeEnd?: string;
  expiryTimeStart?: string;
  effectiveOrNot?: boolean;
  static names(): { [key: string]: string } {
    return {
      expiryTimeEnd: 'ExpiryTimeEnd',
      expiryTimeStart: 'ExpiryTimeStart',
      effectiveOrNot: 'EffectiveOrNot',
    };
  }

  static types(): { [key: string]: any } {
    return {
      expiryTimeEnd: 'string',
      expiryTimeStart: 'string',
      effectiveOrNot: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryCashCouponsResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  code: string;
  message: string;
  data: QueryCashCouponsResponseData;
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
      code: 'string',
      message: 'string',
      data: QueryCashCouponsResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryAccountBalanceRequest extends $tea.Model {
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

export class QueryAccountBalanceResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  code: string;
  message: string;
  data: QueryAccountBalanceResponseData;
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
      code: 'string',
      message: 'string',
      data: QueryAccountBalanceResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeResourcePackageProductRequest extends $tea.Model {
  productCode?: string;
  static names(): { [key: string]: string } {
    return {
      productCode: 'ProductCode',
    };
  }

  static types(): { [key: string]: any } {
    return {
      productCode: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeResourcePackageProductResponse extends $tea.Model {
  requestId: string;
  orderId: number;
  success: boolean;
  code: string;
  message: string;
  data: DescribeResourcePackageProductResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      orderId: 'OrderId',
      success: 'Success',
      code: 'Code',
      message: 'Message',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      orderId: 'number',
      success: 'boolean',
      code: 'string',
      message: 'string',
      data: DescribeResourcePackageProductResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QuerySplitItemBillResponseDataItemsItem extends $tea.Model {
  instanceID: string;
  billingType: string;
  costUnit: string;
  productCode: string;
  productType: string;
  subscriptionType: string;
  productName: string;
  productDetail: string;
  ownerID: string;
  billingItem: string;
  listPrice: string;
  listPriceUnit: string;
  usage: string;
  usageUnit: string;
  deductedByResourcePackage: string;
  pretaxGrossAmount: number;
  invoiceDiscount: number;
  deductedByCoupons: number;
  pretaxAmount: number;
  deductedByCashCoupons: number;
  deductedByPrepaidCard: number;
  paymentAmount: number;
  outstandingAmount: number;
  currency: string;
  nickName: string;
  resourceGroup: string;
  tag: string;
  instanceConfig: string;
  instanceSpec: string;
  internetIP: string;
  intranetIP: string;
  region: string;
  zone: string;
  item: string;
  servicePeriod: string;
  billingDate: string;
  splitItemID: string;
  splitItemName: string;
  static names(): { [key: string]: string } {
    return {
      instanceID: 'InstanceID',
      billingType: 'BillingType',
      costUnit: 'CostUnit',
      productCode: 'ProductCode',
      productType: 'ProductType',
      subscriptionType: 'SubscriptionType',
      productName: 'ProductName',
      productDetail: 'ProductDetail',
      ownerID: 'OwnerID',
      billingItem: 'BillingItem',
      listPrice: 'ListPrice',
      listPriceUnit: 'ListPriceUnit',
      usage: 'Usage',
      usageUnit: 'UsageUnit',
      deductedByResourcePackage: 'DeductedByResourcePackage',
      pretaxGrossAmount: 'PretaxGrossAmount',
      invoiceDiscount: 'InvoiceDiscount',
      deductedByCoupons: 'DeductedByCoupons',
      pretaxAmount: 'PretaxAmount',
      deductedByCashCoupons: 'DeductedByCashCoupons',
      deductedByPrepaidCard: 'DeductedByPrepaidCard',
      paymentAmount: 'PaymentAmount',
      outstandingAmount: 'OutstandingAmount',
      currency: 'Currency',
      nickName: 'NickName',
      resourceGroup: 'ResourceGroup',
      tag: 'Tag',
      instanceConfig: 'InstanceConfig',
      instanceSpec: 'InstanceSpec',
      internetIP: 'InternetIP',
      intranetIP: 'IntranetIP',
      region: 'Region',
      zone: 'Zone',
      item: 'Item',
      servicePeriod: 'ServicePeriod',
      billingDate: 'BillingDate',
      splitItemID: 'SplitItemID',
      splitItemName: 'SplitItemName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      instanceID: 'string',
      billingType: 'string',
      costUnit: 'string',
      productCode: 'string',
      productType: 'string',
      subscriptionType: 'string',
      productName: 'string',
      productDetail: 'string',
      ownerID: 'string',
      billingItem: 'string',
      listPrice: 'string',
      listPriceUnit: 'string',
      usage: 'string',
      usageUnit: 'string',
      deductedByResourcePackage: 'string',
      pretaxGrossAmount: 'number',
      invoiceDiscount: 'number',
      deductedByCoupons: 'number',
      pretaxAmount: 'number',
      deductedByCashCoupons: 'number',
      deductedByPrepaidCard: 'number',
      paymentAmount: 'number',
      outstandingAmount: 'number',
      currency: 'string',
      nickName: 'string',
      resourceGroup: 'string',
      tag: 'string',
      instanceConfig: 'string',
      instanceSpec: 'string',
      internetIP: 'string',
      intranetIP: 'string',
      region: 'string',
      zone: 'string',
      item: 'string',
      servicePeriod: 'string',
      billingDate: 'string',
      splitItemID: 'string',
      splitItemName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QuerySplitItemBillResponseDataItems extends $tea.Model {
  item: QuerySplitItemBillResponseDataItemsItem[];
  static names(): { [key: string]: string } {
    return {
      item: 'Item',
    };
  }

  static types(): { [key: string]: any } {
    return {
      item: { 'type': 'array', 'itemType': QuerySplitItemBillResponseDataItemsItem },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QuerySplitItemBillResponseData extends $tea.Model {
  billingCycle: string;
  accountID: string;
  accountName: string;
  totalCount: number;
  pageNum: number;
  pageSize: number;
  items: QuerySplitItemBillResponseDataItems;
  static names(): { [key: string]: string } {
    return {
      billingCycle: 'BillingCycle',
      accountID: 'AccountID',
      accountName: 'AccountName',
      totalCount: 'TotalCount',
      pageNum: 'PageNum',
      pageSize: 'PageSize',
      items: 'Items',
    };
  }

  static types(): { [key: string]: any } {
    return {
      billingCycle: 'string',
      accountID: 'string',
      accountName: 'string',
      totalCount: 'number',
      pageNum: 'number',
      pageSize: 'number',
      items: QuerySplitItemBillResponseDataItems,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryRIUtilizationDetailResponseDataDetailListDetailList extends $tea.Model {
  RIInstanceId: string;
  instanceSpec: string;
  deductedInstanceId: string;
  deductedCommodityCode: string;
  deductDate: string;
  deductHours: string;
  deductedProductDetail: string;
  deductQuantity: number;
  deductFactorTotal: number;
  static names(): { [key: string]: string } {
    return {
      RIInstanceId: 'RIInstanceId',
      instanceSpec: 'InstanceSpec',
      deductedInstanceId: 'DeductedInstanceId',
      deductedCommodityCode: 'DeductedCommodityCode',
      deductDate: 'DeductDate',
      deductHours: 'DeductHours',
      deductedProductDetail: 'DeductedProductDetail',
      deductQuantity: 'DeductQuantity',
      deductFactorTotal: 'DeductFactorTotal',
    };
  }

  static types(): { [key: string]: any } {
    return {
      RIInstanceId: 'string',
      instanceSpec: 'string',
      deductedInstanceId: 'string',
      deductedCommodityCode: 'string',
      deductDate: 'string',
      deductHours: 'string',
      deductedProductDetail: 'string',
      deductQuantity: 'number',
      deductFactorTotal: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryRIUtilizationDetailResponseDataDetailList extends $tea.Model {
  detailList: QueryRIUtilizationDetailResponseDataDetailListDetailList[];
  static names(): { [key: string]: string } {
    return {
      detailList: 'DetailList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      detailList: { 'type': 'array', 'itemType': QueryRIUtilizationDetailResponseDataDetailListDetailList },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryRIUtilizationDetailResponseData extends $tea.Model {
  pageNum: number;
  pageSize: number;
  totalCount: number;
  detailList: QueryRIUtilizationDetailResponseDataDetailList;
  static names(): { [key: string]: string } {
    return {
      pageNum: 'PageNum',
      pageSize: 'PageSize',
      totalCount: 'TotalCount',
      detailList: 'DetailList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      pageNum: 'number',
      pageSize: 'number',
      totalCount: 'number',
      detailList: QueryRIUtilizationDetailResponseDataDetailList,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryBillToOSSSubscriptionResponseDataItemsItem extends $tea.Model {
  subscribeType: string;
  subscribeBucket: string;
  bucketOwnerId: number;
  subscribeTime: string;
  subscribeLanguage: string;
  multAccountRelSubscribe: string;
  static names(): { [key: string]: string } {
    return {
      subscribeType: 'SubscribeType',
      subscribeBucket: 'SubscribeBucket',
      bucketOwnerId: 'BucketOwnerId',
      subscribeTime: 'SubscribeTime',
      subscribeLanguage: 'SubscribeLanguage',
      multAccountRelSubscribe: 'MultAccountRelSubscribe',
    };
  }

  static types(): { [key: string]: any } {
    return {
      subscribeType: 'string',
      subscribeBucket: 'string',
      bucketOwnerId: 'number',
      subscribeTime: 'string',
      subscribeLanguage: 'string',
      multAccountRelSubscribe: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryBillToOSSSubscriptionResponseDataItems extends $tea.Model {
  item: QueryBillToOSSSubscriptionResponseDataItemsItem[];
  static names(): { [key: string]: string } {
    return {
      item: 'Item',
    };
  }

  static types(): { [key: string]: any } {
    return {
      item: { 'type': 'array', 'itemType': QueryBillToOSSSubscriptionResponseDataItemsItem },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryBillToOSSSubscriptionResponseData extends $tea.Model {
  accountID: string;
  accountName: string;
  items: QueryBillToOSSSubscriptionResponseDataItems;
  static names(): { [key: string]: string } {
    return {
      accountID: 'AccountID',
      accountName: 'AccountName',
      items: 'Items',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accountID: 'string',
      accountName: 'string',
      items: QueryBillToOSSSubscriptionResponseDataItems,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryAccountBillResponseDataItemsItem extends $tea.Model {
  costUnit: string;
  ownerID: string;
  pretaxGrossAmount: number;
  invoiceDiscount: number;
  deductedByCoupons: number;
  pretaxAmount: number;
  deductedByCashCoupons: number;
  deductedByPrepaidCard: number;
  paymentAmount: number;
  outstandingAmount: number;
  currency: string;
  ownerName: string;
  productCode: string;
  productName: string;
  subscriptionType: string;
  static names(): { [key: string]: string } {
    return {
      costUnit: 'CostUnit',
      ownerID: 'OwnerID',
      pretaxGrossAmount: 'PretaxGrossAmount',
      invoiceDiscount: 'InvoiceDiscount',
      deductedByCoupons: 'DeductedByCoupons',
      pretaxAmount: 'PretaxAmount',
      deductedByCashCoupons: 'DeductedByCashCoupons',
      deductedByPrepaidCard: 'DeductedByPrepaidCard',
      paymentAmount: 'PaymentAmount',
      outstandingAmount: 'OutstandingAmount',
      currency: 'Currency',
      ownerName: 'OwnerName',
      productCode: 'ProductCode',
      productName: 'ProductName',
      subscriptionType: 'SubscriptionType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      costUnit: 'string',
      ownerID: 'string',
      pretaxGrossAmount: 'number',
      invoiceDiscount: 'number',
      deductedByCoupons: 'number',
      pretaxAmount: 'number',
      deductedByCashCoupons: 'number',
      deductedByPrepaidCard: 'number',
      paymentAmount: 'number',
      outstandingAmount: 'number',
      currency: 'string',
      ownerName: 'string',
      productCode: 'string',
      productName: 'string',
      subscriptionType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryAccountBillResponseDataItems extends $tea.Model {
  item: QueryAccountBillResponseDataItemsItem[];
  static names(): { [key: string]: string } {
    return {
      item: 'Item',
    };
  }

  static types(): { [key: string]: any } {
    return {
      item: { 'type': 'array', 'itemType': QueryAccountBillResponseDataItemsItem },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryAccountBillResponseData extends $tea.Model {
  billingCycle: string;
  accountID: string;
  accountName: string;
  totalCount: number;
  pageNum: number;
  pageSize: number;
  items: QueryAccountBillResponseDataItems;
  static names(): { [key: string]: string } {
    return {
      billingCycle: 'BillingCycle',
      accountID: 'AccountID',
      accountName: 'AccountName',
      totalCount: 'TotalCount',
      pageNum: 'PageNum',
      pageSize: 'PageSize',
      items: 'Items',
    };
  }

  static types(): { [key: string]: any } {
    return {
      billingCycle: 'string',
      accountID: 'string',
      accountName: 'string',
      totalCount: 'number',
      pageNum: 'number',
      pageSize: 'number',
      items: QueryAccountBillResponseDataItems,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateCostUnitRequestUnitEntityList extends $tea.Model {
  ownerUid: number;
  parentUnitId: number;
  unitName: string;
  static names(): { [key: string]: string } {
    return {
      ownerUid: 'OwnerUid',
      parentUnitId: 'ParentUnitId',
      unitName: 'UnitName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerUid: 'number',
      parentUnitId: 'number',
      unitName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateCostUnitResponseDataCostUnitDtoList extends $tea.Model {
  ownerUid: number;
  parentUnitId: number;
  unitId: number;
  unitName: string;
  static names(): { [key: string]: string } {
    return {
      ownerUid: 'OwnerUid',
      parentUnitId: 'ParentUnitId',
      unitId: 'UnitId',
      unitName: 'UnitName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerUid: 'number',
      parentUnitId: 'number',
      unitId: 'number',
      unitName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateCostUnitResponseData extends $tea.Model {
  costUnitDtoList: CreateCostUnitResponseDataCostUnitDtoList[];
  static names(): { [key: string]: string } {
    return {
      costUnitDtoList: 'CostUnitDtoList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      costUnitDtoList: { 'type': 'array', 'itemType': CreateCostUnitResponseDataCostUnitDtoList },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyCostUnitRequestUnitEntityList extends $tea.Model {
  ownerUid: number;
  unitId: number;
  newUnitName: string;
  static names(): { [key: string]: string } {
    return {
      ownerUid: 'OwnerUid',
      unitId: 'UnitId',
      newUnitName: 'NewUnitName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerUid: 'number',
      unitId: 'number',
      newUnitName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyCostUnitResponseData extends $tea.Model {
  ownerUid: number;
  unitId: number;
  isSuccess: boolean;
  static names(): { [key: string]: string } {
    return {
      ownerUid: 'OwnerUid',
      unitId: 'UnitId',
      isSuccess: 'IsSuccess',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerUid: 'number',
      unitId: 'number',
      isSuccess: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryCostUnitResponseDataCostUnitDtoList extends $tea.Model {
  ownerUid: number;
  parentUnitId: number;
  unitId: number;
  unitName: string;
  static names(): { [key: string]: string } {
    return {
      ownerUid: 'OwnerUid',
      parentUnitId: 'ParentUnitId',
      unitId: 'UnitId',
      unitName: 'UnitName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerUid: 'number',
      parentUnitId: 'number',
      unitId: 'number',
      unitName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryCostUnitResponseData extends $tea.Model {
  pageNum: number;
  pageSize: number;
  totalCount: number;
  costUnitDtoList: QueryCostUnitResponseDataCostUnitDtoList[];
  static names(): { [key: string]: string } {
    return {
      pageNum: 'PageNum',
      pageSize: 'PageSize',
      totalCount: 'TotalCount',
      costUnitDtoList: 'CostUnitDtoList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      pageNum: 'number',
      pageSize: 'number',
      totalCount: 'number',
      costUnitDtoList: { 'type': 'array', 'itemType': QueryCostUnitResponseDataCostUnitDtoList },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteCostUnitResponseData extends $tea.Model {
  ownerUid: number;
  unitId: number;
  isSuccess: boolean;
  static names(): { [key: string]: string } {
    return {
      ownerUid: 'OwnerUid',
      unitId: 'UnitId',
      isSuccess: 'IsSuccess',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerUid: 'number',
      unitId: 'number',
      isSuccess: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AllocateCostUnitResourceRequestResourceInstanceList extends $tea.Model {
  resourceUserId: number;
  resourceId: string;
  commodityCode: string;
  apportionCode?: string;
  static names(): { [key: string]: string } {
    return {
      resourceUserId: 'ResourceUserId',
      resourceId: 'ResourceId',
      commodityCode: 'CommodityCode',
      apportionCode: 'ApportionCode',
    };
  }

  static types(): { [key: string]: any } {
    return {
      resourceUserId: 'number',
      resourceId: 'string',
      commodityCode: 'string',
      apportionCode: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AllocateCostUnitResourceResponseData extends $tea.Model {
  toUnitUserId: number;
  toUnitId: number;
  isSuccess: boolean;
  static names(): { [key: string]: string } {
    return {
      toUnitUserId: 'ToUnitUserId',
      toUnitId: 'ToUnitId',
      isSuccess: 'IsSuccess',
    };
  }

  static types(): { [key: string]: any } {
    return {
      toUnitUserId: 'number',
      toUnitId: 'number',
      isSuccess: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryCostUnitResourceResponseDataResourceInstanceDtoList extends $tea.Model {
  resourceUserId: number;
  resourceId: string;
  commodityCode: string;
  resourceUserName: string;
  commodityName: string;
  resourceGroup: string;
  resourceTag: string;
  resourceNick: string;
  resourceType: string;
  resourceStatus: string;
  relatedResources: string;
  apportionCode: string;
  apportionName: string;
  static names(): { [key: string]: string } {
    return {
      resourceUserId: 'ResourceUserId',
      resourceId: 'ResourceId',
      commodityCode: 'CommodityCode',
      resourceUserName: 'ResourceUserName',
      commodityName: 'CommodityName',
      resourceGroup: 'ResourceGroup',
      resourceTag: 'ResourceTag',
      resourceNick: 'ResourceNick',
      resourceType: 'ResourceType',
      resourceStatus: 'ResourceStatus',
      relatedResources: 'RelatedResources',
      apportionCode: 'ApportionCode',
      apportionName: 'ApportionName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      resourceUserId: 'number',
      resourceId: 'string',
      commodityCode: 'string',
      resourceUserName: 'string',
      commodityName: 'string',
      resourceGroup: 'string',
      resourceTag: 'string',
      resourceNick: 'string',
      resourceType: 'string',
      resourceStatus: 'string',
      relatedResources: 'string',
      apportionCode: 'string',
      apportionName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryCostUnitResourceResponseDataCostUnit extends $tea.Model {
  ownerUid: number;
  parentUnitId: number;
  unitId: number;
  unitName: string;
  static names(): { [key: string]: string } {
    return {
      ownerUid: 'OwnerUid',
      parentUnitId: 'ParentUnitId',
      unitId: 'UnitId',
      unitName: 'UnitName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerUid: 'number',
      parentUnitId: 'number',
      unitId: 'number',
      unitName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryCostUnitResourceResponseDataCostUnitStatisInfo extends $tea.Model {
  resourceCount: number;
  resourceGroupCount: number;
  subUnitCount: number;
  userCount: number;
  totalResourceCount: number;
  totalUserCount: number;
  totalResourceGroupCount: number;
  static names(): { [key: string]: string } {
    return {
      resourceCount: 'ResourceCount',
      resourceGroupCount: 'ResourceGroupCount',
      subUnitCount: 'SubUnitCount',
      userCount: 'UserCount',
      totalResourceCount: 'TotalResourceCount',
      totalUserCount: 'TotalUserCount',
      totalResourceGroupCount: 'TotalResourceGroupCount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      resourceCount: 'number',
      resourceGroupCount: 'number',
      subUnitCount: 'number',
      userCount: 'number',
      totalResourceCount: 'number',
      totalUserCount: 'number',
      totalResourceGroupCount: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryCostUnitResourceResponseData extends $tea.Model {
  pageNum: number;
  pageSize: number;
  totalCount: number;
  resourceInstanceDtoList: QueryCostUnitResourceResponseDataResourceInstanceDtoList[];
  costUnit: QueryCostUnitResourceResponseDataCostUnit;
  costUnitStatisInfo: QueryCostUnitResourceResponseDataCostUnitStatisInfo;
  static names(): { [key: string]: string } {
    return {
      pageNum: 'PageNum',
      pageSize: 'PageSize',
      totalCount: 'TotalCount',
      resourceInstanceDtoList: 'ResourceInstanceDtoList',
      costUnit: 'CostUnit',
      costUnitStatisInfo: 'CostUnitStatisInfo',
    };
  }

  static types(): { [key: string]: any } {
    return {
      pageNum: 'number',
      pageSize: 'number',
      totalCount: 'number',
      resourceInstanceDtoList: { 'type': 'array', 'itemType': QueryCostUnitResourceResponseDataResourceInstanceDtoList },
      costUnit: QueryCostUnitResourceResponseDataCostUnit,
      costUnitStatisInfo: QueryCostUnitResourceResponseDataCostUnitStatisInfo,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RenewResourcePackageResponseData extends $tea.Model {
  orderId: number;
  instanceId: string;
  static names(): { [key: string]: string } {
    return {
      orderId: 'OrderId',
      instanceId: 'InstanceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      orderId: 'number',
      instanceId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpgradeResourcePackageResponseData extends $tea.Model {
  orderId: number;
  instanceId: string;
  static names(): { [key: string]: string } {
    return {
      orderId: 'OrderId',
      instanceId: 'InstanceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      orderId: 'number',
      instanceId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateAgAccountResponseAgRelationDto extends $tea.Model {
  pk: string;
  type: string;
  mpk: string;
  ramAdminRoleName: string;
  static names(): { [key: string]: string } {
    return {
      pk: 'Pk',
      type: 'Type',
      mpk: 'Mpk',
      ramAdminRoleName: 'RamAdminRoleName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      pk: 'string',
      type: 'string',
      mpk: 'string',
      ramAdminRoleName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetCustomerAccountInfoResponseData extends $tea.Model {
  loginEmail: string;
  accountType: string;
  mpk: number;
  hostingStatus: string;
  creditLimitStatus: string;
  isCertified: boolean;
  static names(): { [key: string]: string } {
    return {
      loginEmail: 'LoginEmail',
      accountType: 'AccountType',
      mpk: 'Mpk',
      hostingStatus: 'HostingStatus',
      creditLimitStatus: 'CreditLimitStatus',
      isCertified: 'IsCertified',
    };
  }

  static types(): { [key: string]: any } {
    return {
      loginEmail: 'string',
      accountType: 'string',
      mpk: 'number',
      hostingStatus: 'string',
      creditLimitStatus: 'string',
      isCertified: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetCustomerListResponseData extends $tea.Model {
  uidList: string[];
  static names(): { [key: string]: string } {
    return {
      uidList: 'UidList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      uidList: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryAccountTransactionsResponseDataAccountTransactionsListAccountTransactionsList extends $tea.Model {
  transactionNumber: string;
  transactionTime: string;
  transactionFlow: string;
  transactionType: string;
  transactionChannel: string;
  transactionChannelSN: string;
  fundType: string;
  recordID: string;
  remarks: string;
  billingCycle: string;
  amount: string;
  balance: string;
  transactionAccount: string;
  static names(): { [key: string]: string } {
    return {
      transactionNumber: 'TransactionNumber',
      transactionTime: 'TransactionTime',
      transactionFlow: 'TransactionFlow',
      transactionType: 'TransactionType',
      transactionChannel: 'TransactionChannel',
      transactionChannelSN: 'TransactionChannelSN',
      fundType: 'FundType',
      recordID: 'RecordID',
      remarks: 'Remarks',
      billingCycle: 'BillingCycle',
      amount: 'Amount',
      balance: 'Balance',
      transactionAccount: 'TransactionAccount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      transactionNumber: 'string',
      transactionTime: 'string',
      transactionFlow: 'string',
      transactionType: 'string',
      transactionChannel: 'string',
      transactionChannelSN: 'string',
      fundType: 'string',
      recordID: 'string',
      remarks: 'string',
      billingCycle: 'string',
      amount: 'string',
      balance: 'string',
      transactionAccount: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryAccountTransactionsResponseDataAccountTransactionsList extends $tea.Model {
  accountTransactionsList: QueryAccountTransactionsResponseDataAccountTransactionsListAccountTransactionsList[];
  static names(): { [key: string]: string } {
    return {
      accountTransactionsList: 'AccountTransactionsList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accountTransactionsList: { 'type': 'array', 'itemType': QueryAccountTransactionsResponseDataAccountTransactionsListAccountTransactionsList },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryAccountTransactionsResponseData extends $tea.Model {
  accountName: string;
  totalCount: number;
  pageNum: number;
  pageSize: number;
  accountTransactionsList: QueryAccountTransactionsResponseDataAccountTransactionsList;
  static names(): { [key: string]: string } {
    return {
      accountName: 'AccountName',
      totalCount: 'TotalCount',
      pageNum: 'PageNum',
      pageSize: 'PageSize',
      accountTransactionsList: 'AccountTransactionsList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accountName: 'string',
      totalCount: 'number',
      pageNum: 'number',
      pageSize: 'number',
      accountTransactionsList: QueryAccountTransactionsResponseDataAccountTransactionsList,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryUserOmsDataResponseData extends $tea.Model {
  marker: string;
  hostId: string;
  omsData: { [key: string]: any }[];
  static names(): { [key: string]: string } {
    return {
      marker: 'Marker',
      hostId: 'HostId',
      omsData: 'OmsData',
    };
  }

  static types(): { [key: string]: any } {
    return {
      marker: 'string',
      hostId: 'string',
      omsData: { 'type': 'array', 'itemType': { 'type': 'map', 'keyType': 'string', 'valueType': 'any' } },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CancelOrderResponseData extends $tea.Model {
  hostId: string;
  static names(): { [key: string]: string } {
    return {
      hostId: 'HostId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      hostId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ApplyInvoiceResponseData extends $tea.Model {
  invoiceApplyId: number;
  static names(): { [key: string]: string } {
    return {
      invoiceApplyId: 'InvoiceApplyId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      invoiceApplyId: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryCustomerAddressListResponseDataCustomerInvoiceAddressListCustomerInvoiceAddress extends $tea.Model {
  id: number;
  userId: number;
  userNick: string;
  addressee: string;
  province: string;
  city: string;
  county: string;
  street: string;
  postalCode: string;
  phone: string;
  bizType: string;
  deliveryAddress: string;
  static names(): { [key: string]: string } {
    return {
      id: 'Id',
      userId: 'UserId',
      userNick: 'UserNick',
      addressee: 'Addressee',
      province: 'Province',
      city: 'City',
      county: 'County',
      street: 'Street',
      postalCode: 'PostalCode',
      phone: 'Phone',
      bizType: 'BizType',
      deliveryAddress: 'DeliveryAddress',
    };
  }

  static types(): { [key: string]: any } {
    return {
      id: 'number',
      userId: 'number',
      userNick: 'string',
      addressee: 'string',
      province: 'string',
      city: 'string',
      county: 'string',
      street: 'string',
      postalCode: 'string',
      phone: 'string',
      bizType: 'string',
      deliveryAddress: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryCustomerAddressListResponseDataCustomerInvoiceAddressList extends $tea.Model {
  customerInvoiceAddress: QueryCustomerAddressListResponseDataCustomerInvoiceAddressListCustomerInvoiceAddress[];
  static names(): { [key: string]: string } {
    return {
      customerInvoiceAddress: 'CustomerInvoiceAddress',
    };
  }

  static types(): { [key: string]: any } {
    return {
      customerInvoiceAddress: { 'type': 'array', 'itemType': QueryCustomerAddressListResponseDataCustomerInvoiceAddressListCustomerInvoiceAddress },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryCustomerAddressListResponseData extends $tea.Model {
  customerInvoiceAddressList: QueryCustomerAddressListResponseDataCustomerInvoiceAddressList;
  static names(): { [key: string]: string } {
    return {
      customerInvoiceAddressList: 'CustomerInvoiceAddressList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      customerInvoiceAddressList: QueryCustomerAddressListResponseDataCustomerInvoiceAddressList,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryEvaluateListResponseDataEvaluateListEvaluate extends $tea.Model {
  id: number;
  gmtCreate: string;
  gmtModified: string;
  userId: number;
  userNick: string;
  outBizId: string;
  billId: number;
  itemId: number;
  billCycle: string;
  bizType: string;
  originalAmount: number;
  presentAmount: number;
  canInvoiceAmount: number;
  invoicedAmount: number;
  offsetCostAmount: number;
  offsetAcceptAmount: number;
  status: number;
  opId: string;
  name: string;
  bizTime: string;
  type: number;
  static names(): { [key: string]: string } {
    return {
      id: 'Id',
      gmtCreate: 'GmtCreate',
      gmtModified: 'GmtModified',
      userId: 'UserId',
      userNick: 'UserNick',
      outBizId: 'OutBizId',
      billId: 'BillId',
      itemId: 'ItemId',
      billCycle: 'BillCycle',
      bizType: 'BizType',
      originalAmount: 'OriginalAmount',
      presentAmount: 'PresentAmount',
      canInvoiceAmount: 'CanInvoiceAmount',
      invoicedAmount: 'InvoicedAmount',
      offsetCostAmount: 'OffsetCostAmount',
      offsetAcceptAmount: 'OffsetAcceptAmount',
      status: 'Status',
      opId: 'OpId',
      name: 'Name',
      bizTime: 'BizTime',
      type: 'Type',
    };
  }

  static types(): { [key: string]: any } {
    return {
      id: 'number',
      gmtCreate: 'string',
      gmtModified: 'string',
      userId: 'number',
      userNick: 'string',
      outBizId: 'string',
      billId: 'number',
      itemId: 'number',
      billCycle: 'string',
      bizType: 'string',
      originalAmount: 'number',
      presentAmount: 'number',
      canInvoiceAmount: 'number',
      invoicedAmount: 'number',
      offsetCostAmount: 'number',
      offsetAcceptAmount: 'number',
      status: 'number',
      opId: 'string',
      name: 'string',
      bizTime: 'string',
      type: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryEvaluateListResponseDataEvaluateList extends $tea.Model {
  evaluate: QueryEvaluateListResponseDataEvaluateListEvaluate[];
  static names(): { [key: string]: string } {
    return {
      evaluate: 'Evaluate',
    };
  }

  static types(): { [key: string]: any } {
    return {
      evaluate: { 'type': 'array', 'itemType': QueryEvaluateListResponseDataEvaluateListEvaluate },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryEvaluateListResponseData extends $tea.Model {
  hostId: string;
  pageNum: number;
  pageSize: number;
  totalCount: number;
  totalInvoiceAmount: number;
  totalUnAppliedInvoiceAmount: number;
  evaluateList: QueryEvaluateListResponseDataEvaluateList;
  static names(): { [key: string]: string } {
    return {
      hostId: 'HostId',
      pageNum: 'PageNum',
      pageSize: 'PageSize',
      totalCount: 'TotalCount',
      totalInvoiceAmount: 'TotalInvoiceAmount',
      totalUnAppliedInvoiceAmount: 'TotalUnAppliedInvoiceAmount',
      evaluateList: 'EvaluateList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      hostId: 'string',
      pageNum: 'number',
      pageSize: 'number',
      totalCount: 'number',
      totalInvoiceAmount: 'number',
      totalUnAppliedInvoiceAmount: 'number',
      evaluateList: QueryEvaluateListResponseDataEvaluateList,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryInvoicingCustomerListResponseDataCustomerInvoiceListCustomerInvoice extends $tea.Model {
  id: number;
  userId: number;
  userNick: string;
  invoiceTitle: string;
  customerType: number;
  taxpayerType: number;
  bank: string;
  bankNo: string;
  operatingLicenseAddress: string;
  operatingLicensePhone: string;
  registerNo: string;
  startCycle: number;
  status: number;
  gmtCreate: string;
  taxationLicense: string;
  adjustType: number;
  endCycle: number;
  titleChangeInstructions: string;
  issueType: number;
  type: number;
  defaultRemark: string;
  static names(): { [key: string]: string } {
    return {
      id: 'Id',
      userId: 'UserId',
      userNick: 'UserNick',
      invoiceTitle: 'InvoiceTitle',
      customerType: 'CustomerType',
      taxpayerType: 'TaxpayerType',
      bank: 'Bank',
      bankNo: 'BankNo',
      operatingLicenseAddress: 'OperatingLicenseAddress',
      operatingLicensePhone: 'OperatingLicensePhone',
      registerNo: 'RegisterNo',
      startCycle: 'StartCycle',
      status: 'Status',
      gmtCreate: 'GmtCreate',
      taxationLicense: 'TaxationLicense',
      adjustType: 'AdjustType',
      endCycle: 'EndCycle',
      titleChangeInstructions: 'TitleChangeInstructions',
      issueType: 'IssueType',
      type: 'Type',
      defaultRemark: 'DefaultRemark',
    };
  }

  static types(): { [key: string]: any } {
    return {
      id: 'number',
      userId: 'number',
      userNick: 'string',
      invoiceTitle: 'string',
      customerType: 'number',
      taxpayerType: 'number',
      bank: 'string',
      bankNo: 'string',
      operatingLicenseAddress: 'string',
      operatingLicensePhone: 'string',
      registerNo: 'string',
      startCycle: 'number',
      status: 'number',
      gmtCreate: 'string',
      taxationLicense: 'string',
      adjustType: 'number',
      endCycle: 'number',
      titleChangeInstructions: 'string',
      issueType: 'number',
      type: 'number',
      defaultRemark: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryInvoicingCustomerListResponseDataCustomerInvoiceList extends $tea.Model {
  customerInvoice: QueryInvoicingCustomerListResponseDataCustomerInvoiceListCustomerInvoice[];
  static names(): { [key: string]: string } {
    return {
      customerInvoice: 'CustomerInvoice',
    };
  }

  static types(): { [key: string]: any } {
    return {
      customerInvoice: { 'type': 'array', 'itemType': QueryInvoicingCustomerListResponseDataCustomerInvoiceListCustomerInvoice },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryInvoicingCustomerListResponseData extends $tea.Model {
  customerInvoiceList: QueryInvoicingCustomerListResponseDataCustomerInvoiceList;
  static names(): { [key: string]: string } {
    return {
      customerInvoiceList: 'CustomerInvoiceList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      customerInvoiceList: QueryInvoicingCustomerListResponseDataCustomerInvoiceList,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryBillOverviewResponseDataItemsItem extends $tea.Model {
  item: string;
  productCode: string;
  productType: string;
  subscriptionType: string;
  productName: string;
  productDetail: string;
  pretaxGrossAmount: number;
  invoiceDiscount: number;
  deductedByCoupons: number;
  pretaxAmount: number;
  currency: string;
  paymentAmount: number;
  outstandingAmount: number;
  deductedByCashCoupons: number;
  deductedByPrepaidCard: number;
  pretaxAmountLocal: number;
  tax: number;
  afterTaxAmount: number;
  paymentCurrency: string;
  roundDownDiscount: string;
  static names(): { [key: string]: string } {
    return {
      item: 'Item',
      productCode: 'ProductCode',
      productType: 'ProductType',
      subscriptionType: 'SubscriptionType',
      productName: 'ProductName',
      productDetail: 'ProductDetail',
      pretaxGrossAmount: 'PretaxGrossAmount',
      invoiceDiscount: 'InvoiceDiscount',
      deductedByCoupons: 'DeductedByCoupons',
      pretaxAmount: 'PretaxAmount',
      currency: 'Currency',
      paymentAmount: 'PaymentAmount',
      outstandingAmount: 'OutstandingAmount',
      deductedByCashCoupons: 'DeductedByCashCoupons',
      deductedByPrepaidCard: 'DeductedByPrepaidCard',
      pretaxAmountLocal: 'PretaxAmountLocal',
      tax: 'Tax',
      afterTaxAmount: 'AfterTaxAmount',
      paymentCurrency: 'PaymentCurrency',
      roundDownDiscount: 'RoundDownDiscount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      item: 'string',
      productCode: 'string',
      productType: 'string',
      subscriptionType: 'string',
      productName: 'string',
      productDetail: 'string',
      pretaxGrossAmount: 'number',
      invoiceDiscount: 'number',
      deductedByCoupons: 'number',
      pretaxAmount: 'number',
      currency: 'string',
      paymentAmount: 'number',
      outstandingAmount: 'number',
      deductedByCashCoupons: 'number',
      deductedByPrepaidCard: 'number',
      pretaxAmountLocal: 'number',
      tax: 'number',
      afterTaxAmount: 'number',
      paymentCurrency: 'string',
      roundDownDiscount: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryBillOverviewResponseDataItems extends $tea.Model {
  item: QueryBillOverviewResponseDataItemsItem[];
  static names(): { [key: string]: string } {
    return {
      item: 'Item',
    };
  }

  static types(): { [key: string]: any } {
    return {
      item: { 'type': 'array', 'itemType': QueryBillOverviewResponseDataItemsItem },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryBillOverviewResponseData extends $tea.Model {
  billingCycle: string;
  accountID: string;
  accountName: string;
  items: QueryBillOverviewResponseDataItems;
  static names(): { [key: string]: string } {
    return {
      billingCycle: 'BillingCycle',
      accountID: 'AccountID',
      accountName: 'AccountName',
      items: 'Items',
    };
  }

  static types(): { [key: string]: any } {
    return {
      billingCycle: 'string',
      accountID: 'string',
      accountName: 'string',
      items: QueryBillOverviewResponseDataItems,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryBillResponseDataItemsItem extends $tea.Model {
  recordID: string;
  item: string;
  ownerID: string;
  usageStartTime: string;
  usageEndTime: string;
  paymentTime: string;
  productCode: string;
  productType: string;
  subscriptionType: string;
  productName: string;
  productDetail: string;
  pretaxGrossAmount: number;
  deductedByCoupons: number;
  invoiceDiscount: number;
  pretaxAmount: number;
  currency: string;
  pretaxAmountLocal: number;
  tax: number;
  paymentAmount: number;
  deductedByCashCoupons: number;
  deductedByPrepaidCard: number;
  outstandingAmount: number;
  afterTaxAmount: number;
  status: string;
  paymentCurrency: string;
  paymentTransactionID: string;
  roundDownDiscount: string;
  subOrderId: string;
  static names(): { [key: string]: string } {
    return {
      recordID: 'RecordID',
      item: 'Item',
      ownerID: 'OwnerID',
      usageStartTime: 'UsageStartTime',
      usageEndTime: 'UsageEndTime',
      paymentTime: 'PaymentTime',
      productCode: 'ProductCode',
      productType: 'ProductType',
      subscriptionType: 'SubscriptionType',
      productName: 'ProductName',
      productDetail: 'ProductDetail',
      pretaxGrossAmount: 'PretaxGrossAmount',
      deductedByCoupons: 'DeductedByCoupons',
      invoiceDiscount: 'InvoiceDiscount',
      pretaxAmount: 'PretaxAmount',
      currency: 'Currency',
      pretaxAmountLocal: 'PretaxAmountLocal',
      tax: 'Tax',
      paymentAmount: 'PaymentAmount',
      deductedByCashCoupons: 'DeductedByCashCoupons',
      deductedByPrepaidCard: 'DeductedByPrepaidCard',
      outstandingAmount: 'OutstandingAmount',
      afterTaxAmount: 'AfterTaxAmount',
      status: 'Status',
      paymentCurrency: 'PaymentCurrency',
      paymentTransactionID: 'PaymentTransactionID',
      roundDownDiscount: 'RoundDownDiscount',
      subOrderId: 'SubOrderId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      recordID: 'string',
      item: 'string',
      ownerID: 'string',
      usageStartTime: 'string',
      usageEndTime: 'string',
      paymentTime: 'string',
      productCode: 'string',
      productType: 'string',
      subscriptionType: 'string',
      productName: 'string',
      productDetail: 'string',
      pretaxGrossAmount: 'number',
      deductedByCoupons: 'number',
      invoiceDiscount: 'number',
      pretaxAmount: 'number',
      currency: 'string',
      pretaxAmountLocal: 'number',
      tax: 'number',
      paymentAmount: 'number',
      deductedByCashCoupons: 'number',
      deductedByPrepaidCard: 'number',
      outstandingAmount: 'number',
      afterTaxAmount: 'number',
      status: 'string',
      paymentCurrency: 'string',
      paymentTransactionID: 'string',
      roundDownDiscount: 'string',
      subOrderId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryBillResponseDataItems extends $tea.Model {
  item: QueryBillResponseDataItemsItem[];
  static names(): { [key: string]: string } {
    return {
      item: 'Item',
    };
  }

  static types(): { [key: string]: any } {
    return {
      item: { 'type': 'array', 'itemType': QueryBillResponseDataItemsItem },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryBillResponseData extends $tea.Model {
  billingCycle: string;
  accountID: string;
  accountName: string;
  pageNum: number;
  pageSize: number;
  totalCount: number;
  items: QueryBillResponseDataItems;
  static names(): { [key: string]: string } {
    return {
      billingCycle: 'BillingCycle',
      accountID: 'AccountID',
      accountName: 'AccountName',
      pageNum: 'PageNum',
      pageSize: 'PageSize',
      totalCount: 'TotalCount',
      items: 'Items',
    };
  }

  static types(): { [key: string]: any } {
    return {
      billingCycle: 'string',
      accountID: 'string',
      accountName: 'string',
      pageNum: 'number',
      pageSize: 'number',
      totalCount: 'number',
      items: QueryBillResponseDataItems,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryInstanceBillResponseDataItemsItem extends $tea.Model {
  instanceID: string;
  billingType: string;
  costUnit: string;
  productCode: string;
  productType: string;
  subscriptionType: string;
  productName: string;
  productDetail: string;
  ownerID: string;
  billingItem: string;
  listPrice: string;
  listPriceUnit: string;
  usage: string;
  usageUnit: string;
  deductedByResourcePackage: string;
  pretaxGrossAmount: number;
  invoiceDiscount: number;
  deductedByCoupons: number;
  pretaxAmount: number;
  deductedByCashCoupons: number;
  deductedByPrepaidCard: number;
  paymentAmount: number;
  outstandingAmount: number;
  currency: string;
  nickName: string;
  resourceGroup: string;
  tag: string;
  instanceConfig: string;
  instanceSpec: string;
  internetIP: string;
  intranetIP: string;
  region: string;
  zone: string;
  item: string;
  servicePeriod: string;
  billingDate: string;
  servicePeriodUnit: string;
  static names(): { [key: string]: string } {
    return {
      instanceID: 'InstanceID',
      billingType: 'BillingType',
      costUnit: 'CostUnit',
      productCode: 'ProductCode',
      productType: 'ProductType',
      subscriptionType: 'SubscriptionType',
      productName: 'ProductName',
      productDetail: 'ProductDetail',
      ownerID: 'OwnerID',
      billingItem: 'BillingItem',
      listPrice: 'ListPrice',
      listPriceUnit: 'ListPriceUnit',
      usage: 'Usage',
      usageUnit: 'UsageUnit',
      deductedByResourcePackage: 'DeductedByResourcePackage',
      pretaxGrossAmount: 'PretaxGrossAmount',
      invoiceDiscount: 'InvoiceDiscount',
      deductedByCoupons: 'DeductedByCoupons',
      pretaxAmount: 'PretaxAmount',
      deductedByCashCoupons: 'DeductedByCashCoupons',
      deductedByPrepaidCard: 'DeductedByPrepaidCard',
      paymentAmount: 'PaymentAmount',
      outstandingAmount: 'OutstandingAmount',
      currency: 'Currency',
      nickName: 'NickName',
      resourceGroup: 'ResourceGroup',
      tag: 'Tag',
      instanceConfig: 'InstanceConfig',
      instanceSpec: 'InstanceSpec',
      internetIP: 'InternetIP',
      intranetIP: 'IntranetIP',
      region: 'Region',
      zone: 'Zone',
      item: 'Item',
      servicePeriod: 'ServicePeriod',
      billingDate: 'BillingDate',
      servicePeriodUnit: 'ServicePeriodUnit',
    };
  }

  static types(): { [key: string]: any } {
    return {
      instanceID: 'string',
      billingType: 'string',
      costUnit: 'string',
      productCode: 'string',
      productType: 'string',
      subscriptionType: 'string',
      productName: 'string',
      productDetail: 'string',
      ownerID: 'string',
      billingItem: 'string',
      listPrice: 'string',
      listPriceUnit: 'string',
      usage: 'string',
      usageUnit: 'string',
      deductedByResourcePackage: 'string',
      pretaxGrossAmount: 'number',
      invoiceDiscount: 'number',
      deductedByCoupons: 'number',
      pretaxAmount: 'number',
      deductedByCashCoupons: 'number',
      deductedByPrepaidCard: 'number',
      paymentAmount: 'number',
      outstandingAmount: 'number',
      currency: 'string',
      nickName: 'string',
      resourceGroup: 'string',
      tag: 'string',
      instanceConfig: 'string',
      instanceSpec: 'string',
      internetIP: 'string',
      intranetIP: 'string',
      region: 'string',
      zone: 'string',
      item: 'string',
      servicePeriod: 'string',
      billingDate: 'string',
      servicePeriodUnit: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryInstanceBillResponseDataItems extends $tea.Model {
  item: QueryInstanceBillResponseDataItemsItem[];
  static names(): { [key: string]: string } {
    return {
      item: 'Item',
    };
  }

  static types(): { [key: string]: any } {
    return {
      item: { 'type': 'array', 'itemType': QueryInstanceBillResponseDataItemsItem },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryInstanceBillResponseData extends $tea.Model {
  billingCycle: string;
  accountID: string;
  accountName: string;
  totalCount: number;
  pageNum: number;
  pageSize: number;
  items: QueryInstanceBillResponseDataItems;
  static names(): { [key: string]: string } {
    return {
      billingCycle: 'BillingCycle',
      accountID: 'AccountID',
      accountName: 'AccountName',
      totalCount: 'TotalCount',
      pageNum: 'PageNum',
      pageSize: 'PageSize',
      items: 'Items',
    };
  }

  static types(): { [key: string]: any } {
    return {
      billingCycle: 'string',
      accountID: 'string',
      accountName: 'string',
      totalCount: 'number',
      pageNum: 'number',
      pageSize: 'number',
      items: QueryInstanceBillResponseDataItems,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class EnableBillGenerationResponseData extends $tea.Model {
  boolean: boolean;
  static names(): { [key: string]: string } {
    return {
      boolean: 'Boolean',
    };
  }

  static types(): { [key: string]: any } {
    return {
      boolean: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryRedeemResponseDataRedeemRedeem extends $tea.Model {
  redeemId: string;
  redeemNo: string;
  status: string;
  grantedTime: string;
  effectiveTime: string;
  expiryTime: string;
  nominalValue: string;
  balance: string;
  applicableProducts: string;
  specification: string;
  static names(): { [key: string]: string } {
    return {
      redeemId: 'RedeemId',
      redeemNo: 'RedeemNo',
      status: 'Status',
      grantedTime: 'GrantedTime',
      effectiveTime: 'EffectiveTime',
      expiryTime: 'ExpiryTime',
      nominalValue: 'NominalValue',
      balance: 'Balance',
      applicableProducts: 'ApplicableProducts',
      specification: 'Specification',
    };
  }

  static types(): { [key: string]: any } {
    return {
      redeemId: 'string',
      redeemNo: 'string',
      status: 'string',
      grantedTime: 'string',
      effectiveTime: 'string',
      expiryTime: 'string',
      nominalValue: 'string',
      balance: 'string',
      applicableProducts: 'string',
      specification: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryRedeemResponseDataRedeem extends $tea.Model {
  redeem: QueryRedeemResponseDataRedeemRedeem[];
  static names(): { [key: string]: string } {
    return {
      redeem: 'Redeem',
    };
  }

  static types(): { [key: string]: any } {
    return {
      redeem: { 'type': 'array', 'itemType': QueryRedeemResponseDataRedeemRedeem },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryRedeemResponseData extends $tea.Model {
  pageNum: number;
  pageSize: number;
  totalCount: number;
  redeem: QueryRedeemResponseDataRedeem;
  static names(): { [key: string]: string } {
    return {
      pageNum: 'PageNum',
      pageSize: 'PageSize',
      totalCount: 'TotalCount',
      redeem: 'Redeem',
    };
  }

  static types(): { [key: string]: any } {
    return {
      pageNum: 'number',
      pageSize: 'number',
      totalCount: 'number',
      redeem: QueryRedeemResponseDataRedeem,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ConvertChargeTypeResponseData extends $tea.Model {
  orderId: string;
  static names(): { [key: string]: string } {
    return {
      orderId: 'OrderId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      orderId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateInstanceRequestParameter extends $tea.Model {
  code: string;
  value: string;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      value: 'Value',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      value: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateInstanceResponseData extends $tea.Model {
  instanceId: string;
  orderId: string;
  static names(): { [key: string]: string } {
    return {
      instanceId: 'InstanceId',
      orderId: 'OrderId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      instanceId: 'string',
      orderId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyInstanceRequestParameter extends $tea.Model {
  code: string;
  value: string;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      value: 'Value',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      value: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyInstanceResponseData extends $tea.Model {
  hostId: string;
  orderId: string;
  static names(): { [key: string]: string } {
    return {
      hostId: 'HostId',
      orderId: 'OrderId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      hostId: 'string',
      orderId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribePricingModuleResponseDataModuleListModuleConfigList extends $tea.Model {
  configList: string[];
  static names(): { [key: string]: string } {
    return {
      configList: 'ConfigList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      configList: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribePricingModuleResponseDataModuleListModule extends $tea.Model {
  moduleCode: string;
  moduleName: string;
  priceType: string;
  currency: string;
  configList: DescribePricingModuleResponseDataModuleListModuleConfigList;
  static names(): { [key: string]: string } {
    return {
      moduleCode: 'ModuleCode',
      moduleName: 'ModuleName',
      priceType: 'PriceType',
      currency: 'Currency',
      configList: 'ConfigList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      moduleCode: 'string',
      moduleName: 'string',
      priceType: 'string',
      currency: 'string',
      configList: DescribePricingModuleResponseDataModuleListModuleConfigList,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribePricingModuleResponseDataModuleList extends $tea.Model {
  module: DescribePricingModuleResponseDataModuleListModule[];
  static names(): { [key: string]: string } {
    return {
      module: 'Module',
    };
  }

  static types(): { [key: string]: any } {
    return {
      module: { 'type': 'array', 'itemType': DescribePricingModuleResponseDataModuleListModule },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribePricingModuleResponseDataAttributeListAttribute extends $tea.Model {
  code: string;
  name: string;
  unit: string;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      name: 'Name',
      unit: 'Unit',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      name: 'string',
      unit: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribePricingModuleResponseDataAttributeList extends $tea.Model {
  attribute: DescribePricingModuleResponseDataAttributeListAttribute[];
  static names(): { [key: string]: string } {
    return {
      attribute: 'Attribute',
    };
  }

  static types(): { [key: string]: any } {
    return {
      attribute: { 'type': 'array', 'itemType': DescribePricingModuleResponseDataAttributeListAttribute },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribePricingModuleResponseData extends $tea.Model {
  moduleList: DescribePricingModuleResponseDataModuleList;
  attributeList: DescribePricingModuleResponseDataAttributeList;
  static names(): { [key: string]: string } {
    return {
      moduleList: 'ModuleList',
      attributeList: 'AttributeList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      moduleList: DescribePricingModuleResponseDataModuleList,
      attributeList: DescribePricingModuleResponseDataAttributeList,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryProductListResponseDataProductListProduct extends $tea.Model {
  productCode: string;
  productName: string;
  productType: string;
  subscriptionType: string;
  static names(): { [key: string]: string } {
    return {
      productCode: 'ProductCode',
      productName: 'ProductName',
      productType: 'ProductType',
      subscriptionType: 'SubscriptionType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      productCode: 'string',
      productName: 'string',
      productType: 'string',
      subscriptionType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryProductListResponseDataProductList extends $tea.Model {
  product: QueryProductListResponseDataProductListProduct[];
  static names(): { [key: string]: string } {
    return {
      product: 'Product',
    };
  }

  static types(): { [key: string]: any } {
    return {
      product: { 'type': 'array', 'itemType': QueryProductListResponseDataProductListProduct },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryProductListResponseData extends $tea.Model {
  totalCount: number;
  pageNum: number;
  pageSize: number;
  productList: QueryProductListResponseDataProductList;
  static names(): { [key: string]: string } {
    return {
      totalCount: 'TotalCount',
      pageNum: 'PageNum',
      pageSize: 'PageSize',
      productList: 'ProductList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      totalCount: 'number',
      pageNum: 'number',
      pageSize: 'number',
      productList: QueryProductListResponseDataProductList,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryInstanceGaapCostResponseDataModulesModule extends $tea.Model {
  billingCycle: string;
  instanceID: string;
  productCode: string;
  productType: string;
  subscriptionType: string;
  tag: string;
  resourceGroup: string;
  accountingUnit: string;
  payerAccount: string;
  ownerID: string;
  region: string;
  currency: string;
  paymentCurrency: string;
  orderType: string;
  payTime: string;
  pretaxGrossAmount: string;
  pricingDiscount: string;
  deductedByCoupons: string;
  pretaxAmount: string;
  pretaxAmountLocal: string;
  deductedByCashCoupons: string;
  deductedByPrepaidCard: string;
  paymentAmount: string;
  gaapPretaxGrossAmount: string;
  gaapPricingDiscount: string;
  gaapDeductedByCoupons: string;
  gaapPretaxAmount: string;
  gaapPretaxAmountLocal: string;
  gaapDeductedByCashCoupons: string;
  gaapDeductedByPrepaidCard: string;
  gaapPaymentAmount: string;
  monthGaapPretaxGrossAmount: string;
  monthGaapPricingDiscount: string;
  monthGaapDeductedByCoupons: string;
  monthGaapPretaxAmount: string;
  monthGaapPretaxAmountLocal: string;
  monthGaapDeductedByCashCoupons: string;
  monthGaapDeductedByPrepaidCard: string;
  monthGaapPaymentAmount: string;
  unallocatedPaymentAmount: string;
  usageStartDate: string;
  usageEndDate: string;
  billType: string;
  orderId: string;
  subOrderId: string;
  unallocatedPretaxGrossAmount: string;
  unallocatedPricingDiscount: string;
  unallocatedDeductedByCoupons: string;
  unallocatedPretaxAmount: string;
  unallocatedPretaxAmountLocal: string;
  unallocatedDeductedByCashCoupons: string;
  unallocatedDeductedByPrepaidCard: string;
  static names(): { [key: string]: string } {
    return {
      billingCycle: 'BillingCycle',
      instanceID: 'InstanceID',
      productCode: 'ProductCode',
      productType: 'ProductType',
      subscriptionType: 'SubscriptionType',
      tag: 'Tag',
      resourceGroup: 'ResourceGroup',
      accountingUnit: 'AccountingUnit',
      payerAccount: 'PayerAccount',
      ownerID: 'OwnerID',
      region: 'Region',
      currency: 'Currency',
      paymentCurrency: 'PaymentCurrency',
      orderType: 'OrderType',
      payTime: 'PayTime',
      pretaxGrossAmount: 'PretaxGrossAmount',
      pricingDiscount: 'PricingDiscount',
      deductedByCoupons: 'DeductedByCoupons',
      pretaxAmount: 'PretaxAmount',
      pretaxAmountLocal: 'PretaxAmountLocal',
      deductedByCashCoupons: 'DeductedByCashCoupons',
      deductedByPrepaidCard: 'DeductedByPrepaidCard',
      paymentAmount: 'PaymentAmount',
      gaapPretaxGrossAmount: 'GaapPretaxGrossAmount',
      gaapPricingDiscount: 'GaapPricingDiscount',
      gaapDeductedByCoupons: 'GaapDeductedByCoupons',
      gaapPretaxAmount: 'GaapPretaxAmount',
      gaapPretaxAmountLocal: 'GaapPretaxAmountLocal',
      gaapDeductedByCashCoupons: 'GaapDeductedByCashCoupons',
      gaapDeductedByPrepaidCard: 'GaapDeductedByPrepaidCard',
      gaapPaymentAmount: 'GaapPaymentAmount',
      monthGaapPretaxGrossAmount: 'MonthGaapPretaxGrossAmount',
      monthGaapPricingDiscount: 'MonthGaapPricingDiscount',
      monthGaapDeductedByCoupons: 'MonthGaapDeductedByCoupons',
      monthGaapPretaxAmount: 'MonthGaapPretaxAmount',
      monthGaapPretaxAmountLocal: 'MonthGaapPretaxAmountLocal',
      monthGaapDeductedByCashCoupons: 'MonthGaapDeductedByCashCoupons',
      monthGaapDeductedByPrepaidCard: 'MonthGaapDeductedByPrepaidCard',
      monthGaapPaymentAmount: 'MonthGaapPaymentAmount',
      unallocatedPaymentAmount: 'UnallocatedPaymentAmount',
      usageStartDate: 'UsageStartDate',
      usageEndDate: 'UsageEndDate',
      billType: 'BillType',
      orderId: 'OrderId',
      subOrderId: 'SubOrderId',
      unallocatedPretaxGrossAmount: 'UnallocatedPretaxGrossAmount',
      unallocatedPricingDiscount: 'UnallocatedPricingDiscount',
      unallocatedDeductedByCoupons: 'UnallocatedDeductedByCoupons',
      unallocatedPretaxAmount: 'UnallocatedPretaxAmount',
      unallocatedPretaxAmountLocal: 'UnallocatedPretaxAmountLocal',
      unallocatedDeductedByCashCoupons: 'UnallocatedDeductedByCashCoupons',
      unallocatedDeductedByPrepaidCard: 'UnallocatedDeductedByPrepaidCard',
    };
  }

  static types(): { [key: string]: any } {
    return {
      billingCycle: 'string',
      instanceID: 'string',
      productCode: 'string',
      productType: 'string',
      subscriptionType: 'string',
      tag: 'string',
      resourceGroup: 'string',
      accountingUnit: 'string',
      payerAccount: 'string',
      ownerID: 'string',
      region: 'string',
      currency: 'string',
      paymentCurrency: 'string',
      orderType: 'string',
      payTime: 'string',
      pretaxGrossAmount: 'string',
      pricingDiscount: 'string',
      deductedByCoupons: 'string',
      pretaxAmount: 'string',
      pretaxAmountLocal: 'string',
      deductedByCashCoupons: 'string',
      deductedByPrepaidCard: 'string',
      paymentAmount: 'string',
      gaapPretaxGrossAmount: 'string',
      gaapPricingDiscount: 'string',
      gaapDeductedByCoupons: 'string',
      gaapPretaxAmount: 'string',
      gaapPretaxAmountLocal: 'string',
      gaapDeductedByCashCoupons: 'string',
      gaapDeductedByPrepaidCard: 'string',
      gaapPaymentAmount: 'string',
      monthGaapPretaxGrossAmount: 'string',
      monthGaapPricingDiscount: 'string',
      monthGaapDeductedByCoupons: 'string',
      monthGaapPretaxAmount: 'string',
      monthGaapPretaxAmountLocal: 'string',
      monthGaapDeductedByCashCoupons: 'string',
      monthGaapDeductedByPrepaidCard: 'string',
      monthGaapPaymentAmount: 'string',
      unallocatedPaymentAmount: 'string',
      usageStartDate: 'string',
      usageEndDate: 'string',
      billType: 'string',
      orderId: 'string',
      subOrderId: 'string',
      unallocatedPretaxGrossAmount: 'string',
      unallocatedPricingDiscount: 'string',
      unallocatedDeductedByCoupons: 'string',
      unallocatedPretaxAmount: 'string',
      unallocatedPretaxAmountLocal: 'string',
      unallocatedDeductedByCashCoupons: 'string',
      unallocatedDeductedByPrepaidCard: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryInstanceGaapCostResponseDataModules extends $tea.Model {
  module: QueryInstanceGaapCostResponseDataModulesModule[];
  static names(): { [key: string]: string } {
    return {
      module: 'Module',
    };
  }

  static types(): { [key: string]: any } {
    return {
      module: { 'type': 'array', 'itemType': QueryInstanceGaapCostResponseDataModulesModule },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryInstanceGaapCostResponseData extends $tea.Model {
  hostId: string;
  pageNum: number;
  pageSize: number;
  totalCount: number;
  modules: QueryInstanceGaapCostResponseDataModules;
  static names(): { [key: string]: string } {
    return {
      hostId: 'HostId',
      pageNum: 'PageNum',
      pageSize: 'PageSize',
      totalCount: 'TotalCount',
      modules: 'Modules',
    };
  }

  static types(): { [key: string]: any } {
    return {
      hostId: 'string',
      pageNum: 'number',
      pageSize: 'number',
      totalCount: 'number',
      modules: QueryInstanceGaapCostResponseDataModules,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RenewInstanceResponseData extends $tea.Model {
  orderId: string;
  static names(): { [key: string]: string } {
    return {
      orderId: 'OrderId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      orderId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetOrderDetailResponseDataOrderListOrder extends $tea.Model {
  orderId: string;
  subOrderId: string;
  productCode: string;
  productType: string;
  subscriptionType: string;
  orderType: string;
  createTime: string;
  paymentTime: string;
  paymentStatus: string;
  region: string;
  config: string;
  quantity: string;
  usageStartTime: string;
  usageEndTime: string;
  instanceIDs: string;
  pretaxGrossAmount: string;
  pretaxAmount: string;
  currency: string;
  pretaxAmountLocal: string;
  tax: string;
  afterTaxAmount: string;
  paymentCurrency: string;
  operator: string;
  relatedOrderId: string;
  orderSubType: string;
  originalConfig: string;
  static names(): { [key: string]: string } {
    return {
      orderId: 'OrderId',
      subOrderId: 'SubOrderId',
      productCode: 'ProductCode',
      productType: 'ProductType',
      subscriptionType: 'SubscriptionType',
      orderType: 'OrderType',
      createTime: 'CreateTime',
      paymentTime: 'PaymentTime',
      paymentStatus: 'PaymentStatus',
      region: 'Region',
      config: 'Config',
      quantity: 'Quantity',
      usageStartTime: 'UsageStartTime',
      usageEndTime: 'UsageEndTime',
      instanceIDs: 'InstanceIDs',
      pretaxGrossAmount: 'PretaxGrossAmount',
      pretaxAmount: 'PretaxAmount',
      currency: 'Currency',
      pretaxAmountLocal: 'PretaxAmountLocal',
      tax: 'Tax',
      afterTaxAmount: 'AfterTaxAmount',
      paymentCurrency: 'PaymentCurrency',
      operator: 'Operator',
      relatedOrderId: 'RelatedOrderId',
      orderSubType: 'OrderSubType',
      originalConfig: 'OriginalConfig',
    };
  }

  static types(): { [key: string]: any } {
    return {
      orderId: 'string',
      subOrderId: 'string',
      productCode: 'string',
      productType: 'string',
      subscriptionType: 'string',
      orderType: 'string',
      createTime: 'string',
      paymentTime: 'string',
      paymentStatus: 'string',
      region: 'string',
      config: 'string',
      quantity: 'string',
      usageStartTime: 'string',
      usageEndTime: 'string',
      instanceIDs: 'string',
      pretaxGrossAmount: 'string',
      pretaxAmount: 'string',
      currency: 'string',
      pretaxAmountLocal: 'string',
      tax: 'string',
      afterTaxAmount: 'string',
      paymentCurrency: 'string',
      operator: 'string',
      relatedOrderId: 'string',
      orderSubType: 'string',
      originalConfig: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetOrderDetailResponseDataOrderList extends $tea.Model {
  order: GetOrderDetailResponseDataOrderListOrder[];
  static names(): { [key: string]: string } {
    return {
      order: 'Order',
    };
  }

  static types(): { [key: string]: any } {
    return {
      order: { 'type': 'array', 'itemType': GetOrderDetailResponseDataOrderListOrder },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetOrderDetailResponseData extends $tea.Model {
  hostName: string;
  pageNum: number;
  pageSize: number;
  totalCount: number;
  orderList: GetOrderDetailResponseDataOrderList;
  static names(): { [key: string]: string } {
    return {
      hostName: 'HostName',
      pageNum: 'PageNum',
      pageSize: 'PageSize',
      totalCount: 'TotalCount',
      orderList: 'OrderList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      hostName: 'string',
      pageNum: 'number',
      pageSize: 'number',
      totalCount: 'number',
      orderList: GetOrderDetailResponseDataOrderList,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryOrdersResponseDataOrderListOrder extends $tea.Model {
  orderId: string;
  productCode: string;
  productType: string;
  subscriptionType: string;
  orderType: string;
  createTime: string;
  paymentTime: string;
  paymentStatus: string;
  pretaxGrossAmount: string;
  pretaxAmount: string;
  currency: string;
  pretaxAmountLocal: string;
  tax: string;
  afterTaxAmount: string;
  paymentCurrency: string;
  relatedOrderId: string;
  static names(): { [key: string]: string } {
    return {
      orderId: 'OrderId',
      productCode: 'ProductCode',
      productType: 'ProductType',
      subscriptionType: 'SubscriptionType',
      orderType: 'OrderType',
      createTime: 'CreateTime',
      paymentTime: 'PaymentTime',
      paymentStatus: 'PaymentStatus',
      pretaxGrossAmount: 'PretaxGrossAmount',
      pretaxAmount: 'PretaxAmount',
      currency: 'Currency',
      pretaxAmountLocal: 'PretaxAmountLocal',
      tax: 'Tax',
      afterTaxAmount: 'AfterTaxAmount',
      paymentCurrency: 'PaymentCurrency',
      relatedOrderId: 'RelatedOrderId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      orderId: 'string',
      productCode: 'string',
      productType: 'string',
      subscriptionType: 'string',
      orderType: 'string',
      createTime: 'string',
      paymentTime: 'string',
      paymentStatus: 'string',
      pretaxGrossAmount: 'string',
      pretaxAmount: 'string',
      currency: 'string',
      pretaxAmountLocal: 'string',
      tax: 'string',
      afterTaxAmount: 'string',
      paymentCurrency: 'string',
      relatedOrderId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryOrdersResponseDataOrderList extends $tea.Model {
  order: QueryOrdersResponseDataOrderListOrder[];
  static names(): { [key: string]: string } {
    return {
      order: 'Order',
    };
  }

  static types(): { [key: string]: any } {
    return {
      order: { 'type': 'array', 'itemType': QueryOrdersResponseDataOrderListOrder },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryOrdersResponseData extends $tea.Model {
  hostName: string;
  pageNum: number;
  pageSize: number;
  totalCount: number;
  orderList: QueryOrdersResponseDataOrderList;
  static names(): { [key: string]: string } {
    return {
      hostName: 'HostName',
      pageNum: 'PageNum',
      pageSize: 'PageSize',
      totalCount: 'TotalCount',
      orderList: 'OrderList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      hostName: 'string',
      pageNum: 'number',
      pageSize: 'number',
      totalCount: 'number',
      orderList: QueryOrdersResponseDataOrderList,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryMonthlyInstanceConsumptionResponseDataItemsItem extends $tea.Model {
  instanceID: string;
  productCode: string;
  productType: string;
  subscriptionType: string;
  tag: string;
  resourceGroup: string;
  payerAccount: string;
  ownerID: string;
  region: string;
  pretaxGrossAmount: number;
  discountAmount: number;
  pretaxAmount: number;
  currency: string;
  pretaxAmountLocal: number;
  tax: number;
  afterTaxAmount: number;
  paymentCurrency: string;
  static names(): { [key: string]: string } {
    return {
      instanceID: 'InstanceID',
      productCode: 'ProductCode',
      productType: 'ProductType',
      subscriptionType: 'SubscriptionType',
      tag: 'Tag',
      resourceGroup: 'ResourceGroup',
      payerAccount: 'PayerAccount',
      ownerID: 'OwnerID',
      region: 'Region',
      pretaxGrossAmount: 'PretaxGrossAmount',
      discountAmount: 'DiscountAmount',
      pretaxAmount: 'PretaxAmount',
      currency: 'Currency',
      pretaxAmountLocal: 'PretaxAmountLocal',
      tax: 'Tax',
      afterTaxAmount: 'AfterTaxAmount',
      paymentCurrency: 'PaymentCurrency',
    };
  }

  static types(): { [key: string]: any } {
    return {
      instanceID: 'string',
      productCode: 'string',
      productType: 'string',
      subscriptionType: 'string',
      tag: 'string',
      resourceGroup: 'string',
      payerAccount: 'string',
      ownerID: 'string',
      region: 'string',
      pretaxGrossAmount: 'number',
      discountAmount: 'number',
      pretaxAmount: 'number',
      currency: 'string',
      pretaxAmountLocal: 'number',
      tax: 'number',
      afterTaxAmount: 'number',
      paymentCurrency: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryMonthlyInstanceConsumptionResponseDataItems extends $tea.Model {
  item: QueryMonthlyInstanceConsumptionResponseDataItemsItem[];
  static names(): { [key: string]: string } {
    return {
      item: 'Item',
    };
  }

  static types(): { [key: string]: any } {
    return {
      item: { 'type': 'array', 'itemType': QueryMonthlyInstanceConsumptionResponseDataItemsItem },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryMonthlyInstanceConsumptionResponseData extends $tea.Model {
  pageNum: number;
  pageSize: number;
  totalCount: number;
  billingCycle: string;
  items: QueryMonthlyInstanceConsumptionResponseDataItems;
  static names(): { [key: string]: string } {
    return {
      pageNum: 'PageNum',
      pageSize: 'PageSize',
      totalCount: 'TotalCount',
      billingCycle: 'BillingCycle',
      items: 'Items',
    };
  }

  static types(): { [key: string]: any } {
    return {
      pageNum: 'number',
      pageSize: 'number',
      totalCount: 'number',
      billingCycle: 'string',
      items: QueryMonthlyInstanceConsumptionResponseDataItems,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QuerySettlementBillResponseDataItemsItem extends $tea.Model {
  recordID: string;
  item: string;
  payerAccount: string;
  ownerID: string;
  createTime: string;
  usageStartTime: string;
  usageEndTime: string;
  suborderID: string;
  orderID: string;
  orderType: string;
  linkedCustomerOrderID: string;
  originalOrderID: string;
  paymentTime: string;
  solutionID: string;
  solutionName: string;
  billID: string;
  productCode: string;
  productType: string;
  subscriptionType: string;
  region: string;
  config: string;
  quantity: string;
  pretaxGrossAmount: number;
  chargeDiscount: number;
  deductedByCoupons: number;
  accountDiscount: number;
  promotion: string;
  pretaxAmount: number;
  currency: string;
  pretaxAmountLocal: number;
  previousBillingCycleBalance: number;
  tax: number;
  afterTaxAmount: number;
  status: string;
  clearedTime: string;
  outstandingAmount: number;
  deductedByCashCoupons: number;
  deductedByPrepaidCard: number;
  mybankPaymentAmount: number;
  paymentAmount: number;
  paymentCurrency: string;
  seller: string;
  invoiceNo: string;
  static names(): { [key: string]: string } {
    return {
      recordID: 'RecordID',
      item: 'Item',
      payerAccount: 'PayerAccount',
      ownerID: 'OwnerID',
      createTime: 'CreateTime',
      usageStartTime: 'UsageStartTime',
      usageEndTime: 'UsageEndTime',
      suborderID: 'SuborderID',
      orderID: 'OrderID',
      orderType: 'OrderType',
      linkedCustomerOrderID: 'LinkedCustomerOrderID',
      originalOrderID: 'OriginalOrderID',
      paymentTime: 'PaymentTime',
      solutionID: 'SolutionID',
      solutionName: 'SolutionName',
      billID: 'BillID',
      productCode: 'ProductCode',
      productType: 'ProductType',
      subscriptionType: 'SubscriptionType',
      region: 'Region',
      config: 'Config',
      quantity: 'Quantity',
      pretaxGrossAmount: 'PretaxGrossAmount',
      chargeDiscount: 'ChargeDiscount',
      deductedByCoupons: 'DeductedByCoupons',
      accountDiscount: 'AccountDiscount',
      promotion: 'Promotion',
      pretaxAmount: 'PretaxAmount',
      currency: 'Currency',
      pretaxAmountLocal: 'PretaxAmountLocal',
      previousBillingCycleBalance: 'PreviousBillingCycleBalance',
      tax: 'Tax',
      afterTaxAmount: 'AfterTaxAmount',
      status: 'Status',
      clearedTime: 'ClearedTime',
      outstandingAmount: 'OutstandingAmount',
      deductedByCashCoupons: 'DeductedByCashCoupons',
      deductedByPrepaidCard: 'DeductedByPrepaidCard',
      mybankPaymentAmount: 'MybankPaymentAmount',
      paymentAmount: 'PaymentAmount',
      paymentCurrency: 'PaymentCurrency',
      seller: 'Seller',
      invoiceNo: 'InvoiceNo',
    };
  }

  static types(): { [key: string]: any } {
    return {
      recordID: 'string',
      item: 'string',
      payerAccount: 'string',
      ownerID: 'string',
      createTime: 'string',
      usageStartTime: 'string',
      usageEndTime: 'string',
      suborderID: 'string',
      orderID: 'string',
      orderType: 'string',
      linkedCustomerOrderID: 'string',
      originalOrderID: 'string',
      paymentTime: 'string',
      solutionID: 'string',
      solutionName: 'string',
      billID: 'string',
      productCode: 'string',
      productType: 'string',
      subscriptionType: 'string',
      region: 'string',
      config: 'string',
      quantity: 'string',
      pretaxGrossAmount: 'number',
      chargeDiscount: 'number',
      deductedByCoupons: 'number',
      accountDiscount: 'number',
      promotion: 'string',
      pretaxAmount: 'number',
      currency: 'string',
      pretaxAmountLocal: 'number',
      previousBillingCycleBalance: 'number',
      tax: 'number',
      afterTaxAmount: 'number',
      status: 'string',
      clearedTime: 'string',
      outstandingAmount: 'number',
      deductedByCashCoupons: 'number',
      deductedByPrepaidCard: 'number',
      mybankPaymentAmount: 'number',
      paymentAmount: 'number',
      paymentCurrency: 'string',
      seller: 'string',
      invoiceNo: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QuerySettlementBillResponseDataItems extends $tea.Model {
  item: QuerySettlementBillResponseDataItemsItem[];
  static names(): { [key: string]: string } {
    return {
      item: 'Item',
    };
  }

  static types(): { [key: string]: any } {
    return {
      item: { 'type': 'array', 'itemType': QuerySettlementBillResponseDataItemsItem },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QuerySettlementBillResponseData extends $tea.Model {
  pageNum: number;
  pageSize: number;
  totalCount: number;
  billingCycle: string;
  items: QuerySettlementBillResponseDataItems;
  static names(): { [key: string]: string } {
    return {
      pageNum: 'PageNum',
      pageSize: 'PageSize',
      totalCount: 'TotalCount',
      billingCycle: 'BillingCycle',
      items: 'Items',
    };
  }

  static types(): { [key: string]: any } {
    return {
      pageNum: 'number',
      pageSize: 'number',
      totalCount: 'number',
      billingCycle: 'string',
      items: QuerySettlementBillResponseDataItems,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryMonthlyBillResponseDataItemsItem extends $tea.Model {
  item: string;
  productCode: string;
  productType: string;
  subscriptionType: string;
  solutionCode: string;
  solutionName: string;
  pretaxGrossAmount: number;
  invoiceDiscount: number;
  deductedByCoupons: number;
  pretaxAmount: number;
  currency: string;
  pretaxAmountLocal: number;
  tax: number;
  afterTaxAmount: number;
  outstandingAmount: number;
  deductedByCashCoupons: number;
  deductedByPrepaidCard: number;
  paymentAmount: number;
  paymentCurrency: string;
  static names(): { [key: string]: string } {
    return {
      item: 'Item',
      productCode: 'ProductCode',
      productType: 'ProductType',
      subscriptionType: 'SubscriptionType',
      solutionCode: 'SolutionCode',
      solutionName: 'SolutionName',
      pretaxGrossAmount: 'PretaxGrossAmount',
      invoiceDiscount: 'InvoiceDiscount',
      deductedByCoupons: 'DeductedByCoupons',
      pretaxAmount: 'PretaxAmount',
      currency: 'Currency',
      pretaxAmountLocal: 'PretaxAmountLocal',
      tax: 'Tax',
      afterTaxAmount: 'AfterTaxAmount',
      outstandingAmount: 'OutstandingAmount',
      deductedByCashCoupons: 'DeductedByCashCoupons',
      deductedByPrepaidCard: 'DeductedByPrepaidCard',
      paymentAmount: 'PaymentAmount',
      paymentCurrency: 'PaymentCurrency',
    };
  }

  static types(): { [key: string]: any } {
    return {
      item: 'string',
      productCode: 'string',
      productType: 'string',
      subscriptionType: 'string',
      solutionCode: 'string',
      solutionName: 'string',
      pretaxGrossAmount: 'number',
      invoiceDiscount: 'number',
      deductedByCoupons: 'number',
      pretaxAmount: 'number',
      currency: 'string',
      pretaxAmountLocal: 'number',
      tax: 'number',
      afterTaxAmount: 'number',
      outstandingAmount: 'number',
      deductedByCashCoupons: 'number',
      deductedByPrepaidCard: 'number',
      paymentAmount: 'number',
      paymentCurrency: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryMonthlyBillResponseDataItems extends $tea.Model {
  item: QueryMonthlyBillResponseDataItemsItem[];
  static names(): { [key: string]: string } {
    return {
      item: 'Item',
    };
  }

  static types(): { [key: string]: any } {
    return {
      item: { 'type': 'array', 'itemType': QueryMonthlyBillResponseDataItemsItem },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryMonthlyBillResponseData extends $tea.Model {
  outstandingAmount: number;
  totalOutstandingAmount: number;
  newInvoiceAmount: number;
  billingCycle: string;
  items: QueryMonthlyBillResponseDataItems;
  static names(): { [key: string]: string } {
    return {
      outstandingAmount: 'OutstandingAmount',
      totalOutstandingAmount: 'TotalOutstandingAmount',
      newInvoiceAmount: 'NewInvoiceAmount',
      billingCycle: 'BillingCycle',
      items: 'Items',
    };
  }

  static types(): { [key: string]: any } {
    return {
      outstandingAmount: 'number',
      totalOutstandingAmount: 'number',
      newInvoiceAmount: 'number',
      billingCycle: 'string',
      items: QueryMonthlyBillResponseDataItems,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryAvailableInstancesResponseDataInstanceList extends $tea.Model {
  ownerId: number;
  sellerId: number;
  productCode: string;
  productType: string;
  subscriptionType: string;
  instanceID: string;
  region: string;
  createTime: string;
  endTime: string;
  stopTime: string;
  releaseTime: string;
  expectedReleaseTime: string;
  status: string;
  subStatus: string;
  renewStatus: string;
  renewalDuration: number;
  renewalDurationUnit: string;
  seller: string;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      sellerId: 'SellerId',
      productCode: 'ProductCode',
      productType: 'ProductType',
      subscriptionType: 'SubscriptionType',
      instanceID: 'InstanceID',
      region: 'Region',
      createTime: 'CreateTime',
      endTime: 'EndTime',
      stopTime: 'StopTime',
      releaseTime: 'ReleaseTime',
      expectedReleaseTime: 'ExpectedReleaseTime',
      status: 'Status',
      subStatus: 'SubStatus',
      renewStatus: 'RenewStatus',
      renewalDuration: 'RenewalDuration',
      renewalDurationUnit: 'RenewalDurationUnit',
      seller: 'Seller',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      sellerId: 'number',
      productCode: 'string',
      productType: 'string',
      subscriptionType: 'string',
      instanceID: 'string',
      region: 'string',
      createTime: 'string',
      endTime: 'string',
      stopTime: 'string',
      releaseTime: 'string',
      expectedReleaseTime: 'string',
      status: 'string',
      subStatus: 'string',
      renewStatus: 'string',
      renewalDuration: 'number',
      renewalDurationUnit: 'string',
      seller: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryAvailableInstancesResponseData extends $tea.Model {
  pageNum: number;
  pageSize: number;
  totalCount: number;
  instanceList: QueryAvailableInstancesResponseDataInstanceList[];
  static names(): { [key: string]: string } {
    return {
      pageNum: 'PageNum',
      pageSize: 'PageSize',
      totalCount: 'TotalCount',
      instanceList: 'InstanceList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      pageNum: 'number',
      pageSize: 'number',
      totalCount: 'number',
      instanceList: { 'type': 'array', 'itemType': QueryAvailableInstancesResponseDataInstanceList },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateResourcePackageResponseData extends $tea.Model {
  orderId: number;
  instanceId: string;
  static names(): { [key: string]: string } {
    return {
      orderId: 'OrderId',
      instanceId: 'InstanceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      orderId: 'number',
      instanceId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryResourcePackageInstancesResponseDataInstancesInstanceApplicableProducts extends $tea.Model {
  product: string[];
  static names(): { [key: string]: string } {
    return {
      product: 'Product',
    };
  }

  static types(): { [key: string]: any } {
    return {
      product: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryResourcePackageInstancesResponseDataInstancesInstance extends $tea.Model {
  instanceId: string;
  region: string;
  totalAmount: string;
  totalAmountUnit: string;
  remainingAmount: string;
  remainingAmountUnit: string;
  effectiveTime: string;
  expiryTime: string;
  remark: string;
  packageType: string;
  status: string;
  deductType: string;
  applicableProducts: QueryResourcePackageInstancesResponseDataInstancesInstanceApplicableProducts;
  static names(): { [key: string]: string } {
    return {
      instanceId: 'InstanceId',
      region: 'Region',
      totalAmount: 'TotalAmount',
      totalAmountUnit: 'TotalAmountUnit',
      remainingAmount: 'RemainingAmount',
      remainingAmountUnit: 'RemainingAmountUnit',
      effectiveTime: 'EffectiveTime',
      expiryTime: 'ExpiryTime',
      remark: 'Remark',
      packageType: 'PackageType',
      status: 'Status',
      deductType: 'DeductType',
      applicableProducts: 'ApplicableProducts',
    };
  }

  static types(): { [key: string]: any } {
    return {
      instanceId: 'string',
      region: 'string',
      totalAmount: 'string',
      totalAmountUnit: 'string',
      remainingAmount: 'string',
      remainingAmountUnit: 'string',
      effectiveTime: 'string',
      expiryTime: 'string',
      remark: 'string',
      packageType: 'string',
      status: 'string',
      deductType: 'string',
      applicableProducts: QueryResourcePackageInstancesResponseDataInstancesInstanceApplicableProducts,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryResourcePackageInstancesResponseDataInstances extends $tea.Model {
  instance: QueryResourcePackageInstancesResponseDataInstancesInstance[];
  static names(): { [key: string]: string } {
    return {
      instance: 'Instance',
    };
  }

  static types(): { [key: string]: any } {
    return {
      instance: { 'type': 'array', 'itemType': QueryResourcePackageInstancesResponseDataInstancesInstance },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryResourcePackageInstancesResponseData extends $tea.Model {
  hostId: string;
  pageNum: string;
  pageSize: string;
  totalCount: string;
  instances: QueryResourcePackageInstancesResponseDataInstances;
  static names(): { [key: string]: string } {
    return {
      hostId: 'HostId',
      pageNum: 'PageNum',
      pageSize: 'PageSize',
      totalCount: 'TotalCount',
      instances: 'Instances',
    };
  }

  static types(): { [key: string]: any } {
    return {
      hostId: 'string',
      pageNum: 'string',
      pageSize: 'string',
      totalCount: 'string',
      instances: QueryResourcePackageInstancesResponseDataInstances,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetResourcePackagePriceResponseDataPromotionsPromotion extends $tea.Model {
  id: number;
  name: string;
  static names(): { [key: string]: string } {
    return {
      id: 'Id',
      name: 'Name',
    };
  }

  static types(): { [key: string]: any } {
    return {
      id: 'number',
      name: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetResourcePackagePriceResponseDataPromotions extends $tea.Model {
  promotion: GetResourcePackagePriceResponseDataPromotionsPromotion[];
  static names(): { [key: string]: string } {
    return {
      promotion: 'Promotion',
    };
  }

  static types(): { [key: string]: any } {
    return {
      promotion: { 'type': 'array', 'itemType': GetResourcePackagePriceResponseDataPromotionsPromotion },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetResourcePackagePriceResponseData extends $tea.Model {
  currency: string;
  originalPrice: number;
  tradePrice: number;
  discountPrice: number;
  promotions: GetResourcePackagePriceResponseDataPromotions;
  static names(): { [key: string]: string } {
    return {
      currency: 'Currency',
      originalPrice: 'OriginalPrice',
      tradePrice: 'TradePrice',
      discountPrice: 'DiscountPrice',
      promotions: 'Promotions',
    };
  }

  static types(): { [key: string]: any } {
    return {
      currency: 'string',
      originalPrice: 'number',
      tradePrice: 'number',
      discountPrice: 'number',
      promotions: GetResourcePackagePriceResponseDataPromotions,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetSubscriptionPriceRequestModuleList extends $tea.Model {
  moduleCode: string;
  config: string;
  moduleStatus?: number;
  tag?: string;
  static names(): { [key: string]: string } {
    return {
      moduleCode: 'ModuleCode',
      config: 'Config',
      moduleStatus: 'ModuleStatus',
      tag: 'Tag',
    };
  }

  static types(): { [key: string]: any } {
    return {
      moduleCode: 'string',
      config: 'string',
      moduleStatus: 'number',
      tag: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetSubscriptionPriceResponseDataModuleDetailsModuleDetail extends $tea.Model {
  moduleCode: string;
  originalCost: number;
  invoiceDiscount: number;
  costAfterDiscount: number;
  unitPrice: number;
  static names(): { [key: string]: string } {
    return {
      moduleCode: 'ModuleCode',
      originalCost: 'OriginalCost',
      invoiceDiscount: 'InvoiceDiscount',
      costAfterDiscount: 'CostAfterDiscount',
      unitPrice: 'UnitPrice',
    };
  }

  static types(): { [key: string]: any } {
    return {
      moduleCode: 'string',
      originalCost: 'number',
      invoiceDiscount: 'number',
      costAfterDiscount: 'number',
      unitPrice: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetSubscriptionPriceResponseDataModuleDetails extends $tea.Model {
  moduleDetail: GetSubscriptionPriceResponseDataModuleDetailsModuleDetail[];
  static names(): { [key: string]: string } {
    return {
      moduleDetail: 'ModuleDetail',
    };
  }

  static types(): { [key: string]: any } {
    return {
      moduleDetail: { 'type': 'array', 'itemType': GetSubscriptionPriceResponseDataModuleDetailsModuleDetail },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetSubscriptionPriceResponseDataPromotionDetailsPromotionDetail extends $tea.Model {
  promotionName: string;
  promotionDesc: string;
  promotionId: number;
  static names(): { [key: string]: string } {
    return {
      promotionName: 'PromotionName',
      promotionDesc: 'PromotionDesc',
      promotionId: 'PromotionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      promotionName: 'string',
      promotionDesc: 'string',
      promotionId: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetSubscriptionPriceResponseDataPromotionDetails extends $tea.Model {
  promotionDetail: GetSubscriptionPriceResponseDataPromotionDetailsPromotionDetail[];
  static names(): { [key: string]: string } {
    return {
      promotionDetail: 'PromotionDetail',
    };
  }

  static types(): { [key: string]: any } {
    return {
      promotionDetail: { 'type': 'array', 'itemType': GetSubscriptionPriceResponseDataPromotionDetailsPromotionDetail },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetSubscriptionPriceResponseData extends $tea.Model {
  originalPrice: number;
  discountPrice: number;
  tradePrice: number;
  currency: string;
  quantity: number;
  moduleDetails: GetSubscriptionPriceResponseDataModuleDetails;
  promotionDetails: GetSubscriptionPriceResponseDataPromotionDetails;
  static names(): { [key: string]: string } {
    return {
      originalPrice: 'OriginalPrice',
      discountPrice: 'DiscountPrice',
      tradePrice: 'TradePrice',
      currency: 'Currency',
      quantity: 'Quantity',
      moduleDetails: 'ModuleDetails',
      promotionDetails: 'PromotionDetails',
    };
  }

  static types(): { [key: string]: any } {
    return {
      originalPrice: 'number',
      discountPrice: 'number',
      tradePrice: 'number',
      currency: 'string',
      quantity: 'number',
      moduleDetails: GetSubscriptionPriceResponseDataModuleDetails,
      promotionDetails: GetSubscriptionPriceResponseDataPromotionDetails,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetPayAsYouGoPriceRequestModuleList extends $tea.Model {
  moduleCode: string;
  config: string;
  priceType: string;
  static names(): { [key: string]: string } {
    return {
      moduleCode: 'ModuleCode',
      config: 'Config',
      priceType: 'PriceType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      moduleCode: 'string',
      config: 'string',
      priceType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetPayAsYouGoPriceResponseDataModuleDetailsModuleDetail extends $tea.Model {
  moduleCode: string;
  originalCost: number;
  invoiceDiscount: number;
  costAfterDiscount: number;
  unitPrice: number;
  static names(): { [key: string]: string } {
    return {
      moduleCode: 'ModuleCode',
      originalCost: 'OriginalCost',
      invoiceDiscount: 'InvoiceDiscount',
      costAfterDiscount: 'CostAfterDiscount',
      unitPrice: 'UnitPrice',
    };
  }

  static types(): { [key: string]: any } {
    return {
      moduleCode: 'string',
      originalCost: 'number',
      invoiceDiscount: 'number',
      costAfterDiscount: 'number',
      unitPrice: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetPayAsYouGoPriceResponseDataModuleDetails extends $tea.Model {
  moduleDetail: GetPayAsYouGoPriceResponseDataModuleDetailsModuleDetail[];
  static names(): { [key: string]: string } {
    return {
      moduleDetail: 'ModuleDetail',
    };
  }

  static types(): { [key: string]: any } {
    return {
      moduleDetail: { 'type': 'array', 'itemType': GetPayAsYouGoPriceResponseDataModuleDetailsModuleDetail },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetPayAsYouGoPriceResponseDataPromotionDetailsPromotionDetail extends $tea.Model {
  promotionName: string;
  promotionDesc: string;
  promotionId: number;
  static names(): { [key: string]: string } {
    return {
      promotionName: 'PromotionName',
      promotionDesc: 'PromotionDesc',
      promotionId: 'PromotionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      promotionName: 'string',
      promotionDesc: 'string',
      promotionId: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetPayAsYouGoPriceResponseDataPromotionDetails extends $tea.Model {
  promotionDetail: GetPayAsYouGoPriceResponseDataPromotionDetailsPromotionDetail[];
  static names(): { [key: string]: string } {
    return {
      promotionDetail: 'PromotionDetail',
    };
  }

  static types(): { [key: string]: any } {
    return {
      promotionDetail: { 'type': 'array', 'itemType': GetPayAsYouGoPriceResponseDataPromotionDetailsPromotionDetail },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetPayAsYouGoPriceResponseData extends $tea.Model {
  currency: string;
  moduleDetails: GetPayAsYouGoPriceResponseDataModuleDetails;
  promotionDetails: GetPayAsYouGoPriceResponseDataPromotionDetails;
  static names(): { [key: string]: string } {
    return {
      currency: 'Currency',
      moduleDetails: 'ModuleDetails',
      promotionDetails: 'PromotionDetails',
    };
  }

  static types(): { [key: string]: any } {
    return {
      currency: 'string',
      moduleDetails: GetPayAsYouGoPriceResponseDataModuleDetails,
      promotionDetails: GetPayAsYouGoPriceResponseDataPromotionDetails,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryPrepaidCardsResponseDataPrepaidCard extends $tea.Model {
  prepaidCardId: number;
  prepaidCardNo: string;
  grantedTime: string;
  effectiveTime: string;
  expiryTime: string;
  applicableProducts: string;
  applicableScenarios: string;
  nominalValue: string;
  balance: string;
  status: string;
  static names(): { [key: string]: string } {
    return {
      prepaidCardId: 'PrepaidCardId',
      prepaidCardNo: 'PrepaidCardNo',
      grantedTime: 'GrantedTime',
      effectiveTime: 'EffectiveTime',
      expiryTime: 'ExpiryTime',
      applicableProducts: 'ApplicableProducts',
      applicableScenarios: 'ApplicableScenarios',
      nominalValue: 'NominalValue',
      balance: 'Balance',
      status: 'Status',
    };
  }

  static types(): { [key: string]: any } {
    return {
      prepaidCardId: 'number',
      prepaidCardNo: 'string',
      grantedTime: 'string',
      effectiveTime: 'string',
      expiryTime: 'string',
      applicableProducts: 'string',
      applicableScenarios: 'string',
      nominalValue: 'string',
      balance: 'string',
      status: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryPrepaidCardsResponseData extends $tea.Model {
  prepaidCard: QueryPrepaidCardsResponseDataPrepaidCard[];
  static names(): { [key: string]: string } {
    return {
      prepaidCard: 'PrepaidCard',
    };
  }

  static types(): { [key: string]: any } {
    return {
      prepaidCard: { 'type': 'array', 'itemType': QueryPrepaidCardsResponseDataPrepaidCard },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryCashCouponsResponseDataCashCoupon extends $tea.Model {
  cashCouponId: number;
  cashCouponNo: string;
  grantedTime: string;
  effectiveTime: string;
  expiryTime: string;
  applicableProducts: string;
  applicableScenarios: string;
  nominalValue: string;
  balance: string;
  status: string;
  static names(): { [key: string]: string } {
    return {
      cashCouponId: 'CashCouponId',
      cashCouponNo: 'CashCouponNo',
      grantedTime: 'GrantedTime',
      effectiveTime: 'EffectiveTime',
      expiryTime: 'ExpiryTime',
      applicableProducts: 'ApplicableProducts',
      applicableScenarios: 'ApplicableScenarios',
      nominalValue: 'NominalValue',
      balance: 'Balance',
      status: 'Status',
    };
  }

  static types(): { [key: string]: any } {
    return {
      cashCouponId: 'number',
      cashCouponNo: 'string',
      grantedTime: 'string',
      effectiveTime: 'string',
      expiryTime: 'string',
      applicableProducts: 'string',
      applicableScenarios: 'string',
      nominalValue: 'string',
      balance: 'string',
      status: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryCashCouponsResponseData extends $tea.Model {
  cashCoupon: QueryCashCouponsResponseDataCashCoupon[];
  static names(): { [key: string]: string } {
    return {
      cashCoupon: 'CashCoupon',
    };
  }

  static types(): { [key: string]: any } {
    return {
      cashCoupon: { 'type': 'array', 'itemType': QueryCashCouponsResponseDataCashCoupon },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryAccountBalanceResponseData extends $tea.Model {
  availableAmount: string;
  availableCashAmount: string;
  creditAmount: string;
  mybankCreditAmount: string;
  currency: string;
  static names(): { [key: string]: string } {
    return {
      availableAmount: 'AvailableAmount',
      availableCashAmount: 'AvailableCashAmount',
      creditAmount: 'CreditAmount',
      mybankCreditAmount: 'MybankCreditAmount',
      currency: 'Currency',
    };
  }

  static types(): { [key: string]: any } {
    return {
      availableAmount: 'string',
      availableCashAmount: 'string',
      creditAmount: 'string',
      mybankCreditAmount: 'string',
      currency: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypePropertiesProperty extends $tea.Model {
  name: string;
  value: string;
  static names(): { [key: string]: string } {
    return {
      name: 'Name',
      value: 'Value',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
      value: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypeProperties extends $tea.Model {
  property: DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypePropertiesProperty[];
  static names(): { [key: string]: string } {
    return {
      property: 'Property',
    };
  }

  static types(): { [key: string]: any } {
    return {
      property: { 'type': 'array', 'itemType': DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypePropertiesProperty },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypeSpecificationsSpecificationAvailableDurationsAvailableDuration extends $tea.Model {
  name: string;
  value: number;
  unit: string;
  static names(): { [key: string]: string } {
    return {
      name: 'Name',
      value: 'Value',
      unit: 'Unit',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
      value: 'number',
      unit: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypeSpecificationsSpecificationAvailableDurations extends $tea.Model {
  availableDuration: DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypeSpecificationsSpecificationAvailableDurationsAvailableDuration[];
  static names(): { [key: string]: string } {
    return {
      availableDuration: 'AvailableDuration',
    };
  }

  static types(): { [key: string]: any } {
    return {
      availableDuration: { 'type': 'array', 'itemType': DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypeSpecificationsSpecificationAvailableDurationsAvailableDuration },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypeSpecificationsSpecification extends $tea.Model {
  name: string;
  value: string;
  availableDurations: DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypeSpecificationsSpecificationAvailableDurations;
  static names(): { [key: string]: string } {
    return {
      name: 'Name',
      value: 'Value',
      availableDurations: 'AvailableDurations',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
      value: 'string',
      availableDurations: DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypeSpecificationsSpecificationAvailableDurations,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypeSpecifications extends $tea.Model {
  specification: DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypeSpecificationsSpecification[];
  static names(): { [key: string]: string } {
    return {
      specification: 'Specification',
    };
  }

  static types(): { [key: string]: any } {
    return {
      specification: { 'type': 'array', 'itemType': DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypeSpecificationsSpecification },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageType extends $tea.Model {
  name: string;
  code: string;
  properties: DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypeProperties;
  specifications: DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypeSpecifications;
  static names(): { [key: string]: string } {
    return {
      name: 'Name',
      code: 'Code',
      properties: 'Properties',
      specifications: 'Specifications',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
      code: 'string',
      properties: DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypeProperties,
      specifications: DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypeSpecifications,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypes extends $tea.Model {
  packageType: DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageType[];
  static names(): { [key: string]: string } {
    return {
      packageType: 'PackageType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      packageType: { 'type': 'array', 'itemType': DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageType },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeResourcePackageProductResponseDataResourcePackagesResourcePackage extends $tea.Model {
  productCode: string;
  productType: string;
  name: string;
  packageTypes: DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypes;
  static names(): { [key: string]: string } {
    return {
      productCode: 'ProductCode',
      productType: 'ProductType',
      name: 'Name',
      packageTypes: 'PackageTypes',
    };
  }

  static types(): { [key: string]: any } {
    return {
      productCode: 'string',
      productType: 'string',
      name: 'string',
      packageTypes: DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypes,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeResourcePackageProductResponseDataResourcePackages extends $tea.Model {
  resourcePackage: DescribeResourcePackageProductResponseDataResourcePackagesResourcePackage[];
  static names(): { [key: string]: string } {
    return {
      resourcePackage: 'ResourcePackage',
    };
  }

  static types(): { [key: string]: any } {
    return {
      resourcePackage: { 'type': 'array', 'itemType': DescribeResourcePackageProductResponseDataResourcePackagesResourcePackage },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeResourcePackageProductResponseData extends $tea.Model {
  resourcePackages: DescribeResourcePackageProductResponseDataResourcePackages;
  static names(): { [key: string]: string } {
    return {
      resourcePackages: 'ResourcePackages',
    };
  }

  static types(): { [key: string]: any } {
    return {
      resourcePackages: DescribeResourcePackageProductResponseDataResourcePackages,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}


export default class Client extends RPC {

  constructor(config: $RPC.Config) {
    super(config);
    this._endpointRule = "regional";
    this._endpointMap = {
      'ap-northeast-1': "business.ap-southeast-1.aliyuncs.com",
      'ap-northeast-2-pop': "business.ap-southeast-1.aliyuncs.com",
      'ap-south-1': "business.ap-southeast-1.aliyuncs.com",
      'ap-southeast-1': "business.ap-southeast-1.aliyuncs.com",
      'ap-southeast-2': "business.ap-southeast-1.aliyuncs.com",
      'ap-southeast-3': "business.ap-southeast-1.aliyuncs.com",
      'ap-southeast-5': "business.ap-southeast-1.aliyuncs.com",
      'cn-beijing': "business.aliyuncs.com",
      'cn-beijing-finance-1': "business.aliyuncs.com",
      'cn-beijing-finance-pop': "business.aliyuncs.com",
      'cn-beijing-gov-1': "business.aliyuncs.com",
      'cn-beijing-nu16-b01': "business.aliyuncs.com",
      'cn-chengdu': "business.aliyuncs.com",
      'cn-edge-1': "business.aliyuncs.com",
      'cn-fujian': "business.aliyuncs.com",
      'cn-haidian-cm12-c01': "business.aliyuncs.com",
      'cn-hangzhou': "business.aliyuncs.com",
      'cn-hangzhou-bj-b01': "business.aliyuncs.com",
      'cn-hangzhou-finance': "business.aliyuncs.com",
      'cn-hangzhou-internal-prod-1': "business.aliyuncs.com",
      'cn-hangzhou-internal-test-1': "business.aliyuncs.com",
      'cn-hangzhou-internal-test-2': "business.aliyuncs.com",
      'cn-hangzhou-internal-test-3': "business.aliyuncs.com",
      'cn-hangzhou-test-306': "business.aliyuncs.com",
      'cn-hongkong': "business.aliyuncs.com",
      'cn-hongkong-finance-pop': "business.aliyuncs.com",
      'cn-huhehaote': "business.aliyuncs.com",
      'cn-north-2-gov-1': "business.aliyuncs.com",
      'cn-qingdao': "business.aliyuncs.com",
      'cn-qingdao-nebula': "business.aliyuncs.com",
      'cn-shanghai': "business.aliyuncs.com",
      'cn-shanghai-et15-b01': "business.aliyuncs.com",
      'cn-shanghai-et2-b01': "business.aliyuncs.com",
      'cn-shanghai-finance-1': "business.aliyuncs.com",
      'cn-shanghai-inner': "business.aliyuncs.com",
      'cn-shanghai-internal-test-1': "business.aliyuncs.com",
      'cn-shenzhen': "business.aliyuncs.com",
      'cn-shenzhen-finance-1': "business.aliyuncs.com",
      'cn-shenzhen-inner': "business.aliyuncs.com",
      'cn-shenzhen-st4-d01': "business.aliyuncs.com",
      'cn-shenzhen-su18-b01': "business.aliyuncs.com",
      'cn-wuhan': "business.aliyuncs.com",
      'cn-yushanfang': "business.aliyuncs.com",
      'cn-zhangbei-na61-b01': "business.aliyuncs.com",
      'cn-zhangjiakou': "business.aliyuncs.com",
      'cn-zhangjiakou-na62-a01': "business.aliyuncs.com",
      'cn-zhengzhou-nebula-1': "business.aliyuncs.com",
      'eu-central-1': "business.ap-southeast-1.aliyuncs.com",
      'eu-west-1': "business.ap-southeast-1.aliyuncs.com",
      'eu-west-1-oxs': "business.ap-southeast-1.aliyuncs.com",
      'me-east-1': "business.ap-southeast-1.aliyuncs.com",
      'rus-west-1-pop': "business.ap-southeast-1.aliyuncs.com",
      'us-east-1': "business.ap-southeast-1.aliyuncs.com",
      'us-west-1': "business.ap-southeast-1.aliyuncs.com",
    };
    this.checkConfig(config);
    this._endpoint = this.getEndpoint("bssopenapi", this._regionId, this._endpointRule, this._network, this._suffix, this._endpointMap, this._endpoint);
  }


  async querySplitItemBillWithOptions(request: QuerySplitItemBillRequest, runtime: $Util.RuntimeOptions): Promise<QuerySplitItemBillResponse> {
    Util.validateModel(request);
    return $tea.cast<QuerySplitItemBillResponse>(await this.doRequest("QuerySplitItemBill", "HTTPS", "POST", "2017-12-14", "AK", null, $tea.toMap(request), runtime), new QuerySplitItemBillResponse({}));
  }

  async querySplitItemBill(request: QuerySplitItemBillRequest): Promise<QuerySplitItemBillResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.querySplitItemBillWithOptions(request, runtime);
  }

  async queryRIUtilizationDetailWithOptions(request: QueryRIUtilizationDetailRequest, runtime: $Util.RuntimeOptions): Promise<QueryRIUtilizationDetailResponse> {
    Util.validateModel(request);
    return $tea.cast<QueryRIUtilizationDetailResponse>(await this.doRequest("QueryRIUtilizationDetail", "HTTPS", "POST", "2017-12-14", "AK", null, $tea.toMap(request), runtime), new QueryRIUtilizationDetailResponse({}));
  }

  async queryRIUtilizationDetail(request: QueryRIUtilizationDetailRequest): Promise<QueryRIUtilizationDetailResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.queryRIUtilizationDetailWithOptions(request, runtime);
  }

  async queryBillToOSSSubscriptionWithOptions(request: QueryBillToOSSSubscriptionRequest, runtime: $Util.RuntimeOptions): Promise<QueryBillToOSSSubscriptionResponse> {
    Util.validateModel(request);
    return $tea.cast<QueryBillToOSSSubscriptionResponse>(await this.doRequest("QueryBillToOSSSubscription", "HTTPS", "POST", "2017-12-14", "AK", null, $tea.toMap(request), runtime), new QueryBillToOSSSubscriptionResponse({}));
  }

  async queryBillToOSSSubscription(request: QueryBillToOSSSubscriptionRequest): Promise<QueryBillToOSSSubscriptionResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.queryBillToOSSSubscriptionWithOptions(request, runtime);
  }

  async queryAccountBillWithOptions(request: QueryAccountBillRequest, runtime: $Util.RuntimeOptions): Promise<QueryAccountBillResponse> {
    Util.validateModel(request);
    return $tea.cast<QueryAccountBillResponse>(await this.doRequest("QueryAccountBill", "HTTPS", "POST", "2017-12-14", "AK", null, $tea.toMap(request), runtime), new QueryAccountBillResponse({}));
  }

  async queryAccountBill(request: QueryAccountBillRequest): Promise<QueryAccountBillResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.queryAccountBillWithOptions(request, runtime);
  }

  async createCostUnitWithOptions(request: CreateCostUnitRequest, runtime: $Util.RuntimeOptions): Promise<CreateCostUnitResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateCostUnitResponse>(await this.doRequest("CreateCostUnit", "HTTPS", "POST", "2017-12-14", "AK", null, $tea.toMap(request), runtime), new CreateCostUnitResponse({}));
  }

  async createCostUnit(request: CreateCostUnitRequest): Promise<CreateCostUnitResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createCostUnitWithOptions(request, runtime);
  }

  async modifyCostUnitWithOptions(request: ModifyCostUnitRequest, runtime: $Util.RuntimeOptions): Promise<ModifyCostUnitResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyCostUnitResponse>(await this.doRequest("ModifyCostUnit", "HTTPS", "POST", "2017-12-14", "AK", null, $tea.toMap(request), runtime), new ModifyCostUnitResponse({}));
  }

  async modifyCostUnit(request: ModifyCostUnitRequest): Promise<ModifyCostUnitResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyCostUnitWithOptions(request, runtime);
  }

  async queryCostUnitWithOptions(request: QueryCostUnitRequest, runtime: $Util.RuntimeOptions): Promise<QueryCostUnitResponse> {
    Util.validateModel(request);
    return $tea.cast<QueryCostUnitResponse>(await this.doRequest("QueryCostUnit", "HTTPS", "POST", "2017-12-14", "AK", null, $tea.toMap(request), runtime), new QueryCostUnitResponse({}));
  }

  async queryCostUnit(request: QueryCostUnitRequest): Promise<QueryCostUnitResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.queryCostUnitWithOptions(request, runtime);
  }

  async deleteCostUnitWithOptions(request: DeleteCostUnitRequest, runtime: $Util.RuntimeOptions): Promise<DeleteCostUnitResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteCostUnitResponse>(await this.doRequest("DeleteCostUnit", "HTTPS", "POST", "2017-12-14", "AK", null, $tea.toMap(request), runtime), new DeleteCostUnitResponse({}));
  }

  async deleteCostUnit(request: DeleteCostUnitRequest): Promise<DeleteCostUnitResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteCostUnitWithOptions(request, runtime);
  }

  async allocateCostUnitResourceWithOptions(request: AllocateCostUnitResourceRequest, runtime: $Util.RuntimeOptions): Promise<AllocateCostUnitResourceResponse> {
    Util.validateModel(request);
    return $tea.cast<AllocateCostUnitResourceResponse>(await this.doRequest("AllocateCostUnitResource", "HTTPS", "POST", "2017-12-14", "AK", null, $tea.toMap(request), runtime), new AllocateCostUnitResourceResponse({}));
  }

  async allocateCostUnitResource(request: AllocateCostUnitResourceRequest): Promise<AllocateCostUnitResourceResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.allocateCostUnitResourceWithOptions(request, runtime);
  }

  async queryCostUnitResourceWithOptions(request: QueryCostUnitResourceRequest, runtime: $Util.RuntimeOptions): Promise<QueryCostUnitResourceResponse> {
    Util.validateModel(request);
    return $tea.cast<QueryCostUnitResourceResponse>(await this.doRequest("QueryCostUnitResource", "HTTPS", "POST", "2017-12-14", "AK", null, $tea.toMap(request), runtime), new QueryCostUnitResourceResponse({}));
  }

  async queryCostUnitResource(request: QueryCostUnitResourceRequest): Promise<QueryCostUnitResourceResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.queryCostUnitResourceWithOptions(request, runtime);
  }

  async renewResourcePackageWithOptions(request: RenewResourcePackageRequest, runtime: $Util.RuntimeOptions): Promise<RenewResourcePackageResponse> {
    Util.validateModel(request);
    return $tea.cast<RenewResourcePackageResponse>(await this.doRequest("RenewResourcePackage", "HTTPS", "POST", "2017-12-14", "AK", null, $tea.toMap(request), runtime), new RenewResourcePackageResponse({}));
  }

  async renewResourcePackage(request: RenewResourcePackageRequest): Promise<RenewResourcePackageResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.renewResourcePackageWithOptions(request, runtime);
  }

  async upgradeResourcePackageWithOptions(request: UpgradeResourcePackageRequest, runtime: $Util.RuntimeOptions): Promise<UpgradeResourcePackageResponse> {
    Util.validateModel(request);
    return $tea.cast<UpgradeResourcePackageResponse>(await this.doRequest("UpgradeResourcePackage", "HTTPS", "POST", "2017-12-14", "AK", null, $tea.toMap(request), runtime), new UpgradeResourcePackageResponse({}));
  }

  async upgradeResourcePackage(request: UpgradeResourcePackageRequest): Promise<UpgradeResourcePackageResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.upgradeResourcePackageWithOptions(request, runtime);
  }

  async createAgAccountWithOptions(request: CreateAgAccountRequest, runtime: $Util.RuntimeOptions): Promise<CreateAgAccountResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateAgAccountResponse>(await this.doRequest("CreateAgAccount", "HTTPS", "POST", "2017-12-14", "AK", null, $tea.toMap(request), runtime), new CreateAgAccountResponse({}));
  }

  async createAgAccount(request: CreateAgAccountRequest): Promise<CreateAgAccountResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createAgAccountWithOptions(request, runtime);
  }

  async getCustomerAccountInfoWithOptions(request: GetCustomerAccountInfoRequest, runtime: $Util.RuntimeOptions): Promise<GetCustomerAccountInfoResponse> {
    Util.validateModel(request);
    return $tea.cast<GetCustomerAccountInfoResponse>(await this.doRequest("GetCustomerAccountInfo", "HTTPS", "POST", "2017-12-14", "AK", null, $tea.toMap(request), runtime), new GetCustomerAccountInfoResponse({}));
  }

  async getCustomerAccountInfo(request: GetCustomerAccountInfoRequest): Promise<GetCustomerAccountInfoResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getCustomerAccountInfoWithOptions(request, runtime);
  }

  async getCustomerListWithOptions(request: GetCustomerListRequest, runtime: $Util.RuntimeOptions): Promise<GetCustomerListResponse> {
    Util.validateModel(request);
    return $tea.cast<GetCustomerListResponse>(await this.doRequest("GetCustomerList", "HTTPS", "POST", "2017-12-14", "AK", null, $tea.toMap(request), runtime), new GetCustomerListResponse({}));
  }

  async getCustomerList(request: GetCustomerListRequest): Promise<GetCustomerListResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getCustomerListWithOptions(request, runtime);
  }

  async changeResellerConsumeAmountWithOptions(request: ChangeResellerConsumeAmountRequest, runtime: $Util.RuntimeOptions): Promise<ChangeResellerConsumeAmountResponse> {
    Util.validateModel(request);
    return $tea.cast<ChangeResellerConsumeAmountResponse>(await this.doRequest("ChangeResellerConsumeAmount", "HTTPS", "POST", "2017-12-14", "AK", null, $tea.toMap(request), runtime), new ChangeResellerConsumeAmountResponse({}));
  }

  async changeResellerConsumeAmount(request: ChangeResellerConsumeAmountRequest): Promise<ChangeResellerConsumeAmountResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.changeResellerConsumeAmountWithOptions(request, runtime);
  }

  async setResellerUserStatusWithOptions(request: SetResellerUserStatusRequest, runtime: $Util.RuntimeOptions): Promise<SetResellerUserStatusResponse> {
    Util.validateModel(request);
    return $tea.cast<SetResellerUserStatusResponse>(await this.doRequest("SetResellerUserStatus", "HTTPS", "POST", "2017-12-14", "AK", null, $tea.toMap(request), runtime), new SetResellerUserStatusResponse({}));
  }

  async setResellerUserStatus(request: SetResellerUserStatusRequest): Promise<SetResellerUserStatusResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.setResellerUserStatusWithOptions(request, runtime);
  }

  async createResellerUserQuotaWithOptions(request: CreateResellerUserQuotaRequest, runtime: $Util.RuntimeOptions): Promise<CreateResellerUserQuotaResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateResellerUserQuotaResponse>(await this.doRequest("CreateResellerUserQuota", "HTTPS", "POST", "2017-12-14", "AK", null, $tea.toMap(request), runtime), new CreateResellerUserQuotaResponse({}));
  }

  async createResellerUserQuota(request: CreateResellerUserQuotaRequest): Promise<CreateResellerUserQuotaResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createResellerUserQuotaWithOptions(request, runtime);
  }

  async setResellerUserQuotaWithOptions(request: SetResellerUserQuotaRequest, runtime: $Util.RuntimeOptions): Promise<SetResellerUserQuotaResponse> {
    Util.validateModel(request);
    return $tea.cast<SetResellerUserQuotaResponse>(await this.doRequest("SetResellerUserQuota", "HTTPS", "POST", "2017-12-14", "AK", null, $tea.toMap(request), runtime), new SetResellerUserQuotaResponse({}));
  }

  async setResellerUserQuota(request: SetResellerUserQuotaRequest): Promise<SetResellerUserQuotaResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.setResellerUserQuotaWithOptions(request, runtime);
  }

  async queryResellerAvailableQuotaWithOptions(request: QueryResellerAvailableQuotaRequest, runtime: $Util.RuntimeOptions): Promise<QueryResellerAvailableQuotaResponse> {
    Util.validateModel(request);
    return $tea.cast<QueryResellerAvailableQuotaResponse>(await this.doRequest("QueryResellerAvailableQuota", "HTTPS", "POST", "2017-12-14", "AK", null, $tea.toMap(request), runtime), new QueryResellerAvailableQuotaResponse({}));
  }

  async queryResellerAvailableQuota(request: QueryResellerAvailableQuotaRequest): Promise<QueryResellerAvailableQuotaResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.queryResellerAvailableQuotaWithOptions(request, runtime);
  }

  async setResellerUserAlarmThresholdWithOptions(request: SetResellerUserAlarmThresholdRequest, runtime: $Util.RuntimeOptions): Promise<SetResellerUserAlarmThresholdResponse> {
    Util.validateModel(request);
    return $tea.cast<SetResellerUserAlarmThresholdResponse>(await this.doRequest("SetResellerUserAlarmThreshold", "HTTPS", "POST", "2017-12-14", "AK", null, $tea.toMap(request), runtime), new SetResellerUserAlarmThresholdResponse({}));
  }

  async setResellerUserAlarmThreshold(request: SetResellerUserAlarmThresholdRequest): Promise<SetResellerUserAlarmThresholdResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.setResellerUserAlarmThresholdWithOptions(request, runtime);
  }

  async queryAccountTransactionsWithOptions(request: QueryAccountTransactionsRequest, runtime: $Util.RuntimeOptions): Promise<QueryAccountTransactionsResponse> {
    Util.validateModel(request);
    return $tea.cast<QueryAccountTransactionsResponse>(await this.doRequest("QueryAccountTransactions", "HTTPS", "POST", "2017-12-14", "AK", null, $tea.toMap(request), runtime), new QueryAccountTransactionsResponse({}));
  }

  async queryAccountTransactions(request: QueryAccountTransactionsRequest): Promise<QueryAccountTransactionsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.queryAccountTransactionsWithOptions(request, runtime);
  }

  async unsubscribeBillToOSSWithOptions(request: UnsubscribeBillToOSSRequest, runtime: $Util.RuntimeOptions): Promise<UnsubscribeBillToOSSResponse> {
    Util.validateModel(request);
    return $tea.cast<UnsubscribeBillToOSSResponse>(await this.doRequest("UnsubscribeBillToOSS", "HTTPS", "POST", "2017-12-14", "AK", null, $tea.toMap(request), runtime), new UnsubscribeBillToOSSResponse({}));
  }

  async unsubscribeBillToOSS(request: UnsubscribeBillToOSSRequest): Promise<UnsubscribeBillToOSSResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.unsubscribeBillToOSSWithOptions(request, runtime);
  }

  async subscribeBillToOSSWithOptions(request: SubscribeBillToOSSRequest, runtime: $Util.RuntimeOptions): Promise<SubscribeBillToOSSResponse> {
    Util.validateModel(request);
    return $tea.cast<SubscribeBillToOSSResponse>(await this.doRequest("SubscribeBillToOSS", "HTTPS", "POST", "2017-12-14", "AK", null, $tea.toMap(request), runtime), new SubscribeBillToOSSResponse({}));
  }

  async subscribeBillToOSS(request: SubscribeBillToOSSRequest): Promise<SubscribeBillToOSSResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.subscribeBillToOSSWithOptions(request, runtime);
  }

  async queryUserOmsDataWithOptions(request: QueryUserOmsDataRequest, runtime: $Util.RuntimeOptions): Promise<QueryUserOmsDataResponse> {
    Util.validateModel(request);
    return $tea.cast<QueryUserOmsDataResponse>(await this.doRequest("QueryUserOmsData", "HTTPS", "POST", "2017-12-14", "AK", null, $tea.toMap(request), runtime), new QueryUserOmsDataResponse({}));
  }

  async queryUserOmsData(request: QueryUserOmsDataRequest): Promise<QueryUserOmsDataResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.queryUserOmsDataWithOptions(request, runtime);
  }

  async cancelOrderWithOptions(request: CancelOrderRequest, runtime: $Util.RuntimeOptions): Promise<CancelOrderResponse> {
    Util.validateModel(request);
    return $tea.cast<CancelOrderResponse>(await this.doRequest("CancelOrder", "HTTPS", "POST", "2017-12-14", "AK", null, $tea.toMap(request), runtime), new CancelOrderResponse({}));
  }

  async cancelOrder(request: CancelOrderRequest): Promise<CancelOrderResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.cancelOrderWithOptions(request, runtime);
  }

  async applyInvoiceWithOptions(request: ApplyInvoiceRequest, runtime: $Util.RuntimeOptions): Promise<ApplyInvoiceResponse> {
    Util.validateModel(request);
    return $tea.cast<ApplyInvoiceResponse>(await this.doRequest("ApplyInvoice", "HTTPS", "POST", "2017-12-14", "AK", null, $tea.toMap(request), runtime), new ApplyInvoiceResponse({}));
  }

  async applyInvoice(request: ApplyInvoiceRequest): Promise<ApplyInvoiceResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.applyInvoiceWithOptions(request, runtime);
  }

  async queryCustomerAddressListWithOptions(request: QueryCustomerAddressListRequest, runtime: $Util.RuntimeOptions): Promise<QueryCustomerAddressListResponse> {
    Util.validateModel(request);
    return $tea.cast<QueryCustomerAddressListResponse>(await this.doRequest("QueryCustomerAddressList", "HTTPS", "POST", "2017-12-14", "AK", null, $tea.toMap(request), runtime), new QueryCustomerAddressListResponse({}));
  }

  async queryCustomerAddressList(request: QueryCustomerAddressListRequest): Promise<QueryCustomerAddressListResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.queryCustomerAddressListWithOptions(request, runtime);
  }

  async queryEvaluateListWithOptions(request: QueryEvaluateListRequest, runtime: $Util.RuntimeOptions): Promise<QueryEvaluateListResponse> {
    Util.validateModel(request);
    return $tea.cast<QueryEvaluateListResponse>(await this.doRequest("QueryEvaluateList", "HTTPS", "POST", "2017-12-14", "AK", null, $tea.toMap(request), runtime), new QueryEvaluateListResponse({}));
  }

  async queryEvaluateList(request: QueryEvaluateListRequest): Promise<QueryEvaluateListResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.queryEvaluateListWithOptions(request, runtime);
  }

  async queryInvoicingCustomerListWithOptions(request: QueryInvoicingCustomerListRequest, runtime: $Util.RuntimeOptions): Promise<QueryInvoicingCustomerListResponse> {
    Util.validateModel(request);
    return $tea.cast<QueryInvoicingCustomerListResponse>(await this.doRequest("QueryInvoicingCustomerList", "HTTPS", "POST", "2017-12-14", "AK", null, $tea.toMap(request), runtime), new QueryInvoicingCustomerListResponse({}));
  }

  async queryInvoicingCustomerList(request: QueryInvoicingCustomerListRequest): Promise<QueryInvoicingCustomerListResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.queryInvoicingCustomerListWithOptions(request, runtime);
  }

  async queryBillOverviewWithOptions(request: QueryBillOverviewRequest, runtime: $Util.RuntimeOptions): Promise<QueryBillOverviewResponse> {
    Util.validateModel(request);
    return $tea.cast<QueryBillOverviewResponse>(await this.doRequest("QueryBillOverview", "HTTPS", "POST", "2017-12-14", "AK", null, $tea.toMap(request), runtime), new QueryBillOverviewResponse({}));
  }

  async queryBillOverview(request: QueryBillOverviewRequest): Promise<QueryBillOverviewResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.queryBillOverviewWithOptions(request, runtime);
  }

  async queryBillWithOptions(request: QueryBillRequest, runtime: $Util.RuntimeOptions): Promise<QueryBillResponse> {
    Util.validateModel(request);
    return $tea.cast<QueryBillResponse>(await this.doRequest("QueryBill", "HTTPS", "POST", "2017-12-14", "AK", null, $tea.toMap(request), runtime), new QueryBillResponse({}));
  }

  async queryBill(request: QueryBillRequest): Promise<QueryBillResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.queryBillWithOptions(request, runtime);
  }

  async queryInstanceBillWithOptions(request: QueryInstanceBillRequest, runtime: $Util.RuntimeOptions): Promise<QueryInstanceBillResponse> {
    Util.validateModel(request);
    return $tea.cast<QueryInstanceBillResponse>(await this.doRequest("QueryInstanceBill", "HTTPS", "POST", "2017-12-14", "AK", null, $tea.toMap(request), runtime), new QueryInstanceBillResponse({}));
  }

  async queryInstanceBill(request: QueryInstanceBillRequest): Promise<QueryInstanceBillResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.queryInstanceBillWithOptions(request, runtime);
  }

  async enableBillGenerationWithOptions(request: EnableBillGenerationRequest, runtime: $Util.RuntimeOptions): Promise<EnableBillGenerationResponse> {
    Util.validateModel(request);
    return $tea.cast<EnableBillGenerationResponse>(await this.doRequest("EnableBillGeneration", "HTTPS", "POST", "2017-12-14", "AK", null, $tea.toMap(request), runtime), new EnableBillGenerationResponse({}));
  }

  async enableBillGeneration(request: EnableBillGenerationRequest): Promise<EnableBillGenerationResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.enableBillGenerationWithOptions(request, runtime);
  }

  async queryRedeemWithOptions(request: QueryRedeemRequest, runtime: $Util.RuntimeOptions): Promise<QueryRedeemResponse> {
    Util.validateModel(request);
    return $tea.cast<QueryRedeemResponse>(await this.doRequest("QueryRedeem", "HTTPS", "GET", "2017-12-14", "AK", $tea.toMap(request), null, runtime), new QueryRedeemResponse({}));
  }

  async queryRedeem(request: QueryRedeemRequest): Promise<QueryRedeemResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.queryRedeemWithOptions(request, runtime);
  }

  async convertChargeTypeWithOptions(request: ConvertChargeTypeRequest, runtime: $Util.RuntimeOptions): Promise<ConvertChargeTypeResponse> {
    Util.validateModel(request);
    return $tea.cast<ConvertChargeTypeResponse>(await this.doRequest("ConvertChargeType", "HTTPS", "POST", "2017-12-14", "AK", null, $tea.toMap(request), runtime), new ConvertChargeTypeResponse({}));
  }

  async convertChargeType(request: ConvertChargeTypeRequest): Promise<ConvertChargeTypeResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.convertChargeTypeWithOptions(request, runtime);
  }

  async createInstanceWithOptions(request: CreateInstanceRequest, runtime: $Util.RuntimeOptions): Promise<CreateInstanceResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateInstanceResponse>(await this.doRequest("CreateInstance", "HTTPS", "POST", "2017-12-14", "AK", null, $tea.toMap(request), runtime), new CreateInstanceResponse({}));
  }

  async createInstance(request: CreateInstanceRequest): Promise<CreateInstanceResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createInstanceWithOptions(request, runtime);
  }

  async modifyInstanceWithOptions(request: ModifyInstanceRequest, runtime: $Util.RuntimeOptions): Promise<ModifyInstanceResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyInstanceResponse>(await this.doRequest("ModifyInstance", "HTTPS", "POST", "2017-12-14", "AK", null, $tea.toMap(request), runtime), new ModifyInstanceResponse({}));
  }

  async modifyInstance(request: ModifyInstanceRequest): Promise<ModifyInstanceResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyInstanceWithOptions(request, runtime);
  }

  async describePricingModuleWithOptions(request: DescribePricingModuleRequest, runtime: $Util.RuntimeOptions): Promise<DescribePricingModuleResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribePricingModuleResponse>(await this.doRequest("DescribePricingModule", "HTTPS", "POST", "2017-12-14", "AK", null, $tea.toMap(request), runtime), new DescribePricingModuleResponse({}));
  }

  async describePricingModule(request: DescribePricingModuleRequest): Promise<DescribePricingModuleResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describePricingModuleWithOptions(request, runtime);
  }

  async queryProductListWithOptions(request: QueryProductListRequest, runtime: $Util.RuntimeOptions): Promise<QueryProductListResponse> {
    Util.validateModel(request);
    return $tea.cast<QueryProductListResponse>(await this.doRequest("QueryProductList", "HTTPS", "POST", "2017-12-14", "AK", null, $tea.toMap(request), runtime), new QueryProductListResponse({}));
  }

  async queryProductList(request: QueryProductListRequest): Promise<QueryProductListResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.queryProductListWithOptions(request, runtime);
  }

  async queryInstanceGaapCostWithOptions(request: QueryInstanceGaapCostRequest, runtime: $Util.RuntimeOptions): Promise<QueryInstanceGaapCostResponse> {
    Util.validateModel(request);
    return $tea.cast<QueryInstanceGaapCostResponse>(await this.doRequest("QueryInstanceGaapCost", "HTTPS", "POST", "2017-12-14", "AK", null, $tea.toMap(request), runtime), new QueryInstanceGaapCostResponse({}));
  }

  async queryInstanceGaapCost(request: QueryInstanceGaapCostRequest): Promise<QueryInstanceGaapCostResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.queryInstanceGaapCostWithOptions(request, runtime);
  }

  async renewInstanceWithOptions(request: RenewInstanceRequest, runtime: $Util.RuntimeOptions): Promise<RenewInstanceResponse> {
    Util.validateModel(request);
    return $tea.cast<RenewInstanceResponse>(await this.doRequest("RenewInstance", "HTTPS", "POST", "2017-12-14", "AK", null, $tea.toMap(request), runtime), new RenewInstanceResponse({}));
  }

  async renewInstance(request: RenewInstanceRequest): Promise<RenewInstanceResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.renewInstanceWithOptions(request, runtime);
  }

  async getOrderDetailWithOptions(request: GetOrderDetailRequest, runtime: $Util.RuntimeOptions): Promise<GetOrderDetailResponse> {
    Util.validateModel(request);
    return $tea.cast<GetOrderDetailResponse>(await this.doRequest("GetOrderDetail", "HTTPS", "POST", "2017-12-14", "AK", null, $tea.toMap(request), runtime), new GetOrderDetailResponse({}));
  }

  async getOrderDetail(request: GetOrderDetailRequest): Promise<GetOrderDetailResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getOrderDetailWithOptions(request, runtime);
  }

  async queryOrdersWithOptions(request: QueryOrdersRequest, runtime: $Util.RuntimeOptions): Promise<QueryOrdersResponse> {
    Util.validateModel(request);
    return $tea.cast<QueryOrdersResponse>(await this.doRequest("QueryOrders", "HTTPS", "POST", "2017-12-14", "AK", null, $tea.toMap(request), runtime), new QueryOrdersResponse({}));
  }

  async queryOrders(request: QueryOrdersRequest): Promise<QueryOrdersResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.queryOrdersWithOptions(request, runtime);
  }

  async queryMonthlyInstanceConsumptionWithOptions(request: QueryMonthlyInstanceConsumptionRequest, runtime: $Util.RuntimeOptions): Promise<QueryMonthlyInstanceConsumptionResponse> {
    Util.validateModel(request);
    return $tea.cast<QueryMonthlyInstanceConsumptionResponse>(await this.doRequest("QueryMonthlyInstanceConsumption", "HTTPS", "POST", "2017-12-14", "AK", null, $tea.toMap(request), runtime), new QueryMonthlyInstanceConsumptionResponse({}));
  }

  async queryMonthlyInstanceConsumption(request: QueryMonthlyInstanceConsumptionRequest): Promise<QueryMonthlyInstanceConsumptionResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.queryMonthlyInstanceConsumptionWithOptions(request, runtime);
  }

  async querySettlementBillWithOptions(request: QuerySettlementBillRequest, runtime: $Util.RuntimeOptions): Promise<QuerySettlementBillResponse> {
    Util.validateModel(request);
    return $tea.cast<QuerySettlementBillResponse>(await this.doRequest("QuerySettlementBill", "HTTPS", "POST", "2017-12-14", "AK", null, $tea.toMap(request), runtime), new QuerySettlementBillResponse({}));
  }

  async querySettlementBill(request: QuerySettlementBillRequest): Promise<QuerySettlementBillResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.querySettlementBillWithOptions(request, runtime);
  }

  async queryMonthlyBillWithOptions(request: QueryMonthlyBillRequest, runtime: $Util.RuntimeOptions): Promise<QueryMonthlyBillResponse> {
    Util.validateModel(request);
    return $tea.cast<QueryMonthlyBillResponse>(await this.doRequest("QueryMonthlyBill", "HTTPS", "POST", "2017-12-14", "AK", null, $tea.toMap(request), runtime), new QueryMonthlyBillResponse({}));
  }

  async queryMonthlyBill(request: QueryMonthlyBillRequest): Promise<QueryMonthlyBillResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.queryMonthlyBillWithOptions(request, runtime);
  }

  async setRenewalWithOptions(request: SetRenewalRequest, runtime: $Util.RuntimeOptions): Promise<SetRenewalResponse> {
    Util.validateModel(request);
    return $tea.cast<SetRenewalResponse>(await this.doRequest("SetRenewal", "HTTPS", "POST", "2017-12-14", "AK", null, $tea.toMap(request), runtime), new SetRenewalResponse({}));
  }

  async setRenewal(request: SetRenewalRequest): Promise<SetRenewalResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.setRenewalWithOptions(request, runtime);
  }

  async queryAvailableInstancesWithOptions(request: QueryAvailableInstancesRequest, runtime: $Util.RuntimeOptions): Promise<QueryAvailableInstancesResponse> {
    Util.validateModel(request);
    return $tea.cast<QueryAvailableInstancesResponse>(await this.doRequest("QueryAvailableInstances", "HTTPS", "POST", "2017-12-14", "AK", null, $tea.toMap(request), runtime), new QueryAvailableInstancesResponse({}));
  }

  async queryAvailableInstances(request: QueryAvailableInstancesRequest): Promise<QueryAvailableInstancesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.queryAvailableInstancesWithOptions(request, runtime);
  }

  async createResourcePackageWithOptions(request: CreateResourcePackageRequest, runtime: $Util.RuntimeOptions): Promise<CreateResourcePackageResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateResourcePackageResponse>(await this.doRequest("CreateResourcePackage", "HTTPS", "POST", "2017-12-14", "AK", null, $tea.toMap(request), runtime), new CreateResourcePackageResponse({}));
  }

  async createResourcePackage(request: CreateResourcePackageRequest): Promise<CreateResourcePackageResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createResourcePackageWithOptions(request, runtime);
  }

  async queryResourcePackageInstancesWithOptions(request: QueryResourcePackageInstancesRequest, runtime: $Util.RuntimeOptions): Promise<QueryResourcePackageInstancesResponse> {
    Util.validateModel(request);
    return $tea.cast<QueryResourcePackageInstancesResponse>(await this.doRequest("QueryResourcePackageInstances", "HTTPS", "POST", "2017-12-14", "AK", null, $tea.toMap(request), runtime), new QueryResourcePackageInstancesResponse({}));
  }

  async queryResourcePackageInstances(request: QueryResourcePackageInstancesRequest): Promise<QueryResourcePackageInstancesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.queryResourcePackageInstancesWithOptions(request, runtime);
  }

  async getResourcePackagePriceWithOptions(request: GetResourcePackagePriceRequest, runtime: $Util.RuntimeOptions): Promise<GetResourcePackagePriceResponse> {
    Util.validateModel(request);
    return $tea.cast<GetResourcePackagePriceResponse>(await this.doRequest("GetResourcePackagePrice", "HTTPS", "POST", "2017-12-14", "AK", null, $tea.toMap(request), runtime), new GetResourcePackagePriceResponse({}));
  }

  async getResourcePackagePrice(request: GetResourcePackagePriceRequest): Promise<GetResourcePackagePriceResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getResourcePackagePriceWithOptions(request, runtime);
  }

  async getSubscriptionPriceWithOptions(request: GetSubscriptionPriceRequest, runtime: $Util.RuntimeOptions): Promise<GetSubscriptionPriceResponse> {
    Util.validateModel(request);
    return $tea.cast<GetSubscriptionPriceResponse>(await this.doRequest("GetSubscriptionPrice", "HTTPS", "POST", "2017-12-14", "AK", null, $tea.toMap(request), runtime), new GetSubscriptionPriceResponse({}));
  }

  async getSubscriptionPrice(request: GetSubscriptionPriceRequest): Promise<GetSubscriptionPriceResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getSubscriptionPriceWithOptions(request, runtime);
  }

  async getPayAsYouGoPriceWithOptions(request: GetPayAsYouGoPriceRequest, runtime: $Util.RuntimeOptions): Promise<GetPayAsYouGoPriceResponse> {
    Util.validateModel(request);
    return $tea.cast<GetPayAsYouGoPriceResponse>(await this.doRequest("GetPayAsYouGoPrice", "HTTPS", "POST", "2017-12-14", "AK", null, $tea.toMap(request), runtime), new GetPayAsYouGoPriceResponse({}));
  }

  async getPayAsYouGoPrice(request: GetPayAsYouGoPriceRequest): Promise<GetPayAsYouGoPriceResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getPayAsYouGoPriceWithOptions(request, runtime);
  }

  async queryPrepaidCardsWithOptions(request: QueryPrepaidCardsRequest, runtime: $Util.RuntimeOptions): Promise<QueryPrepaidCardsResponse> {
    Util.validateModel(request);
    return $tea.cast<QueryPrepaidCardsResponse>(await this.doRequest("QueryPrepaidCards", "HTTPS", "POST", "2017-12-14", "AK", null, $tea.toMap(request), runtime), new QueryPrepaidCardsResponse({}));
  }

  async queryPrepaidCards(request: QueryPrepaidCardsRequest): Promise<QueryPrepaidCardsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.queryPrepaidCardsWithOptions(request, runtime);
  }

  async queryCashCouponsWithOptions(request: QueryCashCouponsRequest, runtime: $Util.RuntimeOptions): Promise<QueryCashCouponsResponse> {
    Util.validateModel(request);
    return $tea.cast<QueryCashCouponsResponse>(await this.doRequest("QueryCashCoupons", "HTTPS", "POST", "2017-12-14", "AK", null, $tea.toMap(request), runtime), new QueryCashCouponsResponse({}));
  }

  async queryCashCoupons(request: QueryCashCouponsRequest): Promise<QueryCashCouponsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.queryCashCouponsWithOptions(request, runtime);
  }

  async queryAccountBalanceWithOptions(request: QueryAccountBalanceRequest, runtime: $Util.RuntimeOptions): Promise<QueryAccountBalanceResponse> {
    Util.validateModel(request);
    return $tea.cast<QueryAccountBalanceResponse>(await this.doRequest("QueryAccountBalance", "HTTPS", "POST", "2017-12-14", "AK", null, $tea.toMap(request), runtime), new QueryAccountBalanceResponse({}));
  }

  async queryAccountBalance(request: QueryAccountBalanceRequest): Promise<QueryAccountBalanceResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.queryAccountBalanceWithOptions(request, runtime);
  }

  async describeResourcePackageProductWithOptions(request: DescribeResourcePackageProductRequest, runtime: $Util.RuntimeOptions): Promise<DescribeResourcePackageProductResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeResourcePackageProductResponse>(await this.doRequest("DescribeResourcePackageProduct", "HTTPS", "POST", "2017-12-14", "AK", null, $tea.toMap(request), runtime), new DescribeResourcePackageProductResponse({}));
  }

  async describeResourcePackageProduct(request: DescribeResourcePackageProductRequest): Promise<DescribeResourcePackageProductResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeResourcePackageProductWithOptions(request, runtime);
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
