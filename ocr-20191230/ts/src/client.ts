// This file is auto-generated, don't edit it
import OSS, * as $OSS from '@alicloud/oss-client';
import OpenPlatform, * as $OpenPlatform from '@alicloud/openplatform';
import RPCUtil from '@alicloud/rpc-util';
import OSSUtil, * as $OSSUtil from '@alicloud/oss-util';
import Util, * as $Util from '@alicloud/tea-util';
import Credential, * as $Credential from '@alicloud/credentials';
import FileForm, * as $FileForm from '@alicloud/tea-fileform';
import { Readable } from 'stream';
import * as $tea from '@alicloud/tea-typescript';

export class Config extends $tea.Model {
  accessKeyId?: string;
  accessKeySecret?: string;
  type?: string;
  securityToken?: string;
  endpoint: string;
  protocol?: string;
  regionId: string;
  userAgent?: string;
  readTimeout?: number;
  connectTimeout?: number;
  httpProxy?: string;
  httpsProxy?: string;
  noProxy?: string;
  socks5Proxy?: string;
  socks5NetWork?: string;
  maxIdleConns?: number;
  endpointType?: string;
  openPlatformEndpoint?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'accessKeyId',
      accessKeySecret: 'accessKeySecret',
      type: 'type',
      securityToken: 'securityToken',
      endpoint: 'endpoint',
      protocol: 'protocol',
      regionId: 'regionId',
      userAgent: 'userAgent',
      readTimeout: 'readTimeout',
      connectTimeout: 'connectTimeout',
      httpProxy: 'httpProxy',
      httpsProxy: 'httpsProxy',
      noProxy: 'noProxy',
      socks5Proxy: 'socks5Proxy',
      socks5NetWork: 'socks5NetWork',
      maxIdleConns: 'maxIdleConns',
      endpointType: 'endpointType',
      openPlatformEndpoint: 'openPlatformEndpoint',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      accessKeySecret: 'string',
      type: 'string',
      securityToken: 'string',
      endpoint: 'string',
      protocol: 'string',
      regionId: 'string',
      userAgent: 'string',
      readTimeout: 'number',
      connectTimeout: 'number',
      httpProxy: 'string',
      httpsProxy: 'string',
      noProxy: 'string',
      socks5Proxy: 'string',
      socks5NetWork: 'string',
      maxIdleConns: 'number',
      endpointType: 'string',
      openPlatformEndpoint: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetAsyncJobResultRequest extends $tea.Model {
  jobId: string;
  static names(): { [key: string]: string } {
    return {
      jobId: 'JobId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      jobId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetAsyncJobResultResponse extends $tea.Model {
  requestId: string;
  data: GetAsyncJobResultResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: GetAsyncJobResultResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class TrimDocumentRequest extends $tea.Model {
  fileURL: string;
  fileType: string;
  outputType: string;
  static names(): { [key: string]: string } {
    return {
      fileURL: 'FileURL',
      fileType: 'FileType',
      outputType: 'OutputType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      fileURL: 'string',
      fileType: 'string',
      outputType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class TrimDocumentResponse extends $tea.Model {
  requestId: string;
  data: TrimDocumentResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: TrimDocumentResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class TrimDocumentAdvanceRequest extends $tea.Model {
  fileURLObject: Readable;
  fileType: string;
  outputType: string;
  static names(): { [key: string]: string } {
    return {
      fileURLObject: 'FileURLObject',
      fileType: 'FileType',
      outputType: 'OutputType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      fileURLObject: 'Readable',
      fileType: 'string',
      outputType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeChinapassportRequest extends $tea.Model {
  imageURL: string;
  static names(): { [key: string]: string } {
    return {
      imageURL: 'ImageURL',
    };
  }

  static types(): { [key: string]: any } {
    return {
      imageURL: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeChinapassportResponse extends $tea.Model {
  requestId: string;
  data: RecognizeChinapassportResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: RecognizeChinapassportResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeChinapassportAdvanceRequest extends $tea.Model {
  imageURLObject: Readable;
  static names(): { [key: string]: string } {
    return {
      imageURLObject: 'ImageURLObject',
    };
  }

  static types(): { [key: string]: any } {
    return {
      imageURLObject: 'Readable',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeVerificationcodeRequest extends $tea.Model {
  imageURL: string;
  static names(): { [key: string]: string } {
    return {
      imageURL: 'ImageURL',
    };
  }

  static types(): { [key: string]: any } {
    return {
      imageURL: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeVerificationcodeResponse extends $tea.Model {
  requestId: string;
  data: RecognizeVerificationcodeResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: RecognizeVerificationcodeResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeVerificationcodeAdvanceRequest extends $tea.Model {
  imageURLObject: Readable;
  static names(): { [key: string]: string } {
    return {
      imageURLObject: 'ImageURLObject',
    };
  }

  static types(): { [key: string]: any } {
    return {
      imageURLObject: 'Readable',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizePassportMRZRequest extends $tea.Model {
  imageURL: string;
  static names(): { [key: string]: string } {
    return {
      imageURL: 'ImageURL',
    };
  }

  static types(): { [key: string]: any } {
    return {
      imageURL: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizePassportMRZResponse extends $tea.Model {
  requestId: string;
  data: RecognizePassportMRZResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: RecognizePassportMRZResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizePassportMRZAdvanceRequest extends $tea.Model {
  imageURLObject: Readable;
  static names(): { [key: string]: string } {
    return {
      imageURLObject: 'ImageURLObject',
    };
  }

  static types(): { [key: string]: any } {
    return {
      imageURLObject: 'Readable',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeTakeoutOrderRequest extends $tea.Model {
  imageURL: string;
  static names(): { [key: string]: string } {
    return {
      imageURL: 'ImageURL',
    };
  }

  static types(): { [key: string]: any } {
    return {
      imageURL: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeTakeoutOrderResponse extends $tea.Model {
  requestId: string;
  data: RecognizeTakeoutOrderResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: RecognizeTakeoutOrderResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeTakeoutOrderAdvanceRequest extends $tea.Model {
  imageURLObject: Readable;
  static names(): { [key: string]: string } {
    return {
      imageURLObject: 'ImageURLObject',
    };
  }

  static types(): { [key: string]: any } {
    return {
      imageURLObject: 'Readable',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeQrCodeRequest extends $tea.Model {
  tasks: RecognizeQrCodeRequestTasks[];
  static names(): { [key: string]: string } {
    return {
      tasks: 'Tasks',
    };
  }

  static types(): { [key: string]: any } {
    return {
      tasks: { 'type': 'array', 'itemType': RecognizeQrCodeRequestTasks },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeQrCodeResponse extends $tea.Model {
  requestId: string;
  data: RecognizeQrCodeResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: RecognizeQrCodeResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeVATInvoiceRequest extends $tea.Model {
  fileURL: string;
  fileType: string;
  static names(): { [key: string]: string } {
    return {
      fileURL: 'FileURL',
      fileType: 'FileType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      fileURL: 'string',
      fileType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeVATInvoiceResponse extends $tea.Model {
  requestId: string;
  data: RecognizeVATInvoiceResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: RecognizeVATInvoiceResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeVATInvoiceAdvanceRequest extends $tea.Model {
  fileURLObject: Readable;
  fileType: string;
  static names(): { [key: string]: string } {
    return {
      fileURLObject: 'FileURLObject',
      fileType: 'FileType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      fileURLObject: 'Readable',
      fileType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeCharacterRequest extends $tea.Model {
  imageURL: string;
  minHeight: number;
  outputProbability: boolean;
  static names(): { [key: string]: string } {
    return {
      imageURL: 'ImageURL',
      minHeight: 'MinHeight',
      outputProbability: 'OutputProbability',
    };
  }

  static types(): { [key: string]: any } {
    return {
      imageURL: 'string',
      minHeight: 'number',
      outputProbability: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeCharacterResponse extends $tea.Model {
  requestId: string;
  data: RecognizeCharacterResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: RecognizeCharacterResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeCharacterAdvanceRequest extends $tea.Model {
  imageURLObject: Readable;
  minHeight: number;
  outputProbability: boolean;
  static names(): { [key: string]: string } {
    return {
      imageURLObject: 'ImageURLObject',
      minHeight: 'MinHeight',
      outputProbability: 'OutputProbability',
    };
  }

  static types(): { [key: string]: any } {
    return {
      imageURLObject: 'Readable',
      minHeight: 'number',
      outputProbability: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeTaxiInvoiceRequest extends $tea.Model {
  imageURL: string;
  static names(): { [key: string]: string } {
    return {
      imageURL: 'ImageURL',
    };
  }

  static types(): { [key: string]: any } {
    return {
      imageURL: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeTaxiInvoiceResponse extends $tea.Model {
  requestId: string;
  data: RecognizeTaxiInvoiceResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: RecognizeTaxiInvoiceResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeTaxiInvoiceAdvanceRequest extends $tea.Model {
  imageURLObject: Readable;
  static names(): { [key: string]: string } {
    return {
      imageURLObject: 'ImageURLObject',
    };
  }

  static types(): { [key: string]: any } {
    return {
      imageURLObject: 'Readable',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeIdentityCardRequest extends $tea.Model {
  imageURL: string;
  side: string;
  static names(): { [key: string]: string } {
    return {
      imageURL: 'ImageURL',
      side: 'Side',
    };
  }

  static types(): { [key: string]: any } {
    return {
      imageURL: 'string',
      side: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeIdentityCardResponse extends $tea.Model {
  requestId: string;
  data: RecognizeIdentityCardResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: RecognizeIdentityCardResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeIdentityCardAdvanceRequest extends $tea.Model {
  imageURLObject: Readable;
  side: string;
  static names(): { [key: string]: string } {
    return {
      imageURLObject: 'ImageURLObject',
      side: 'Side',
    };
  }

  static types(): { [key: string]: any } {
    return {
      imageURLObject: 'Readable',
      side: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeLicensePlateRequest extends $tea.Model {
  imageURL: string;
  static names(): { [key: string]: string } {
    return {
      imageURL: 'ImageURL',
    };
  }

  static types(): { [key: string]: any } {
    return {
      imageURL: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeLicensePlateResponse extends $tea.Model {
  requestId: string;
  data: RecognizeLicensePlateResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: RecognizeLicensePlateResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeLicensePlateAdvanceRequest extends $tea.Model {
  imageURLObject: Readable;
  static names(): { [key: string]: string } {
    return {
      imageURLObject: 'ImageURLObject',
    };
  }

  static types(): { [key: string]: any } {
    return {
      imageURLObject: 'Readable',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeTableRequest extends $tea.Model {
  imageURL: string;
  outputFormat: string;
  useFinanceModel: boolean;
  assureDirection: boolean;
  hasLine: boolean;
  skipDetection: boolean;
  static names(): { [key: string]: string } {
    return {
      imageURL: 'ImageURL',
      outputFormat: 'OutputFormat',
      useFinanceModel: 'UseFinanceModel',
      assureDirection: 'AssureDirection',
      hasLine: 'HasLine',
      skipDetection: 'SkipDetection',
    };
  }

  static types(): { [key: string]: any } {
    return {
      imageURL: 'string',
      outputFormat: 'string',
      useFinanceModel: 'boolean',
      assureDirection: 'boolean',
      hasLine: 'boolean',
      skipDetection: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeTableResponse extends $tea.Model {
  requestId: string;
  data: RecognizeTableResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: RecognizeTableResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeTableAdvanceRequest extends $tea.Model {
  imageURLObject: Readable;
  outputFormat: string;
  useFinanceModel: boolean;
  assureDirection: boolean;
  hasLine: boolean;
  skipDetection: boolean;
  static names(): { [key: string]: string } {
    return {
      imageURLObject: 'ImageURLObject',
      outputFormat: 'OutputFormat',
      useFinanceModel: 'UseFinanceModel',
      assureDirection: 'AssureDirection',
      hasLine: 'HasLine',
      skipDetection: 'SkipDetection',
    };
  }

  static types(): { [key: string]: any } {
    return {
      imageURLObject: 'Readable',
      outputFormat: 'string',
      useFinanceModel: 'boolean',
      assureDirection: 'boolean',
      hasLine: 'boolean',
      skipDetection: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeDrivingLicenseRequest extends $tea.Model {
  imageURL: string;
  side: string;
  static names(): { [key: string]: string } {
    return {
      imageURL: 'ImageURL',
      side: 'Side',
    };
  }

  static types(): { [key: string]: any } {
    return {
      imageURL: 'string',
      side: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeDrivingLicenseResponse extends $tea.Model {
  requestId: string;
  data: RecognizeDrivingLicenseResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: RecognizeDrivingLicenseResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeDrivingLicenseAdvanceRequest extends $tea.Model {
  imageURLObject: Readable;
  side: string;
  static names(): { [key: string]: string } {
    return {
      imageURLObject: 'ImageURLObject',
      side: 'Side',
    };
  }

  static types(): { [key: string]: any } {
    return {
      imageURLObject: 'Readable',
      side: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeBankCardRequest extends $tea.Model {
  imageURL: string;
  static names(): { [key: string]: string } {
    return {
      imageURL: 'ImageURL',
    };
  }

  static types(): { [key: string]: any } {
    return {
      imageURL: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeBankCardResponse extends $tea.Model {
  requestId: string;
  data: RecognizeBankCardResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: RecognizeBankCardResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeBankCardAdvanceRequest extends $tea.Model {
  imageURLObject: Readable;
  static names(): { [key: string]: string } {
    return {
      imageURLObject: 'ImageURLObject',
    };
  }

  static types(): { [key: string]: any } {
    return {
      imageURLObject: 'Readable',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeTrainTicketRequest extends $tea.Model {
  imageURL: string;
  static names(): { [key: string]: string } {
    return {
      imageURL: 'ImageURL',
    };
  }

  static types(): { [key: string]: any } {
    return {
      imageURL: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeTrainTicketResponse extends $tea.Model {
  requestId: string;
  data: RecognizeTrainTicketResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: RecognizeTrainTicketResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeTrainTicketAdvanceRequest extends $tea.Model {
  imageURLObject: Readable;
  static names(): { [key: string]: string } {
    return {
      imageURLObject: 'ImageURLObject',
    };
  }

  static types(): { [key: string]: any } {
    return {
      imageURLObject: 'Readable',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeDriverLicenseRequest extends $tea.Model {
  imageURL: string;
  side: string;
  static names(): { [key: string]: string } {
    return {
      imageURL: 'ImageURL',
      side: 'Side',
    };
  }

  static types(): { [key: string]: any } {
    return {
      imageURL: 'string',
      side: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeDriverLicenseResponse extends $tea.Model {
  requestId: string;
  data: RecognizeDriverLicenseResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: RecognizeDriverLicenseResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeDriverLicenseAdvanceRequest extends $tea.Model {
  imageURLObject: Readable;
  side: string;
  static names(): { [key: string]: string } {
    return {
      imageURLObject: 'ImageURLObject',
      side: 'Side',
    };
  }

  static types(): { [key: string]: any } {
    return {
      imageURLObject: 'Readable',
      side: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeAccountPageRequest extends $tea.Model {
  imageURL: string;
  static names(): { [key: string]: string } {
    return {
      imageURL: 'ImageURL',
    };
  }

  static types(): { [key: string]: any } {
    return {
      imageURL: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeAccountPageResponse extends $tea.Model {
  requestId: string;
  data: RecognizeAccountPageResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: RecognizeAccountPageResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeAccountPageAdvanceRequest extends $tea.Model {
  imageURLObject: Readable;
  static names(): { [key: string]: string } {
    return {
      imageURLObject: 'ImageURLObject',
    };
  }

  static types(): { [key: string]: any } {
    return {
      imageURLObject: 'Readable',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeStampRequest extends $tea.Model {
  imageURL: string;
  static names(): { [key: string]: string } {
    return {
      imageURL: 'ImageURL',
    };
  }

  static types(): { [key: string]: any } {
    return {
      imageURL: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeStampResponse extends $tea.Model {
  requestId: string;
  data: RecognizeStampResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: RecognizeStampResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeStampAdvanceRequest extends $tea.Model {
  imageURLObject: Readable;
  static names(): { [key: string]: string } {
    return {
      imageURLObject: 'ImageURLObject',
    };
  }

  static types(): { [key: string]: any } {
    return {
      imageURLObject: 'Readable',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeBusinessCardRequest extends $tea.Model {
  imageURL: string;
  static names(): { [key: string]: string } {
    return {
      imageURL: 'ImageURL',
    };
  }

  static types(): { [key: string]: any } {
    return {
      imageURL: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeBusinessCardResponse extends $tea.Model {
  requestId: string;
  data: RecognizeBusinessCardResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: RecognizeBusinessCardResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeBusinessCardAdvanceRequest extends $tea.Model {
  imageURLObject: Readable;
  static names(): { [key: string]: string } {
    return {
      imageURLObject: 'ImageURLObject',
    };
  }

  static types(): { [key: string]: any } {
    return {
      imageURLObject: 'Readable',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeVINCodeRequest extends $tea.Model {
  imageURL: string;
  static names(): { [key: string]: string } {
    return {
      imageURL: 'ImageURL',
    };
  }

  static types(): { [key: string]: any } {
    return {
      imageURL: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeVINCodeResponse extends $tea.Model {
  requestId: string;
  data: RecognizeVINCodeResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: RecognizeVINCodeResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeVINCodeAdvanceRequest extends $tea.Model {
  imageURLObject: Readable;
  static names(): { [key: string]: string } {
    return {
      imageURLObject: 'ImageURLObject',
    };
  }

  static types(): { [key: string]: any } {
    return {
      imageURLObject: 'Readable',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeBusinessLicenseRequest extends $tea.Model {
  imageURL: string;
  static names(): { [key: string]: string } {
    return {
      imageURL: 'ImageURL',
    };
  }

  static types(): { [key: string]: any } {
    return {
      imageURL: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeBusinessLicenseResponse extends $tea.Model {
  requestId: string;
  data: RecognizeBusinessLicenseResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: RecognizeBusinessLicenseResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeBusinessLicenseAdvanceRequest extends $tea.Model {
  imageURLObject: Readable;
  static names(): { [key: string]: string } {
    return {
      imageURLObject: 'ImageURLObject',
    };
  }

  static types(): { [key: string]: any } {
    return {
      imageURLObject: 'Readable',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetAsyncJobResultResponseData extends $tea.Model {
  errorCode: string;
  errorMessage: string;
  jobId: string;
  result: string;
  status: string;
  static names(): { [key: string]: string } {
    return {
      errorCode: 'ErrorCode',
      errorMessage: 'ErrorMessage',
      jobId: 'JobId',
      result: 'Result',
      status: 'Status',
    };
  }

  static types(): { [key: string]: any } {
    return {
      errorCode: 'string',
      errorMessage: 'string',
      jobId: 'string',
      result: 'string',
      status: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class TrimDocumentResponseData extends $tea.Model {
  content: string;
  static names(): { [key: string]: string } {
    return {
      content: 'Content',
    };
  }

  static types(): { [key: string]: any } {
    return {
      content: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeChinapassportResponseData extends $tea.Model {
  authority: string;
  birthDate: string;
  birthDay: string;
  birthPlace: string;
  birthPlaceRaw: string;
  country: string;
  expiryDate: string;
  expiryDay: string;
  issueDate: string;
  issuePlace: string;
  issuePlaceRaw: string;
  lineZero: string;
  lineOne: string;
  name: string;
  nameChinese: string;
  nameChineseRaw: string;
  passportNo: string;
  personId: string;
  sex: string;
  sourceCountry: string;
  success: boolean;
  type: string;
  static names(): { [key: string]: string } {
    return {
      authority: 'Authority',
      birthDate: 'BirthDate',
      birthDay: 'BirthDay',
      birthPlace: 'BirthPlace',
      birthPlaceRaw: 'BirthPlaceRaw',
      country: 'Country',
      expiryDate: 'ExpiryDate',
      expiryDay: 'ExpiryDay',
      issueDate: 'IssueDate',
      issuePlace: 'IssuePlace',
      issuePlaceRaw: 'IssuePlaceRaw',
      lineZero: 'LineZero',
      lineOne: 'LineOne',
      name: 'Name',
      nameChinese: 'NameChinese',
      nameChineseRaw: 'NameChineseRaw',
      passportNo: 'PassportNo',
      personId: 'PersonId',
      sex: 'Sex',
      sourceCountry: 'SourceCountry',
      success: 'Success',
      type: 'Type',
    };
  }

  static types(): { [key: string]: any } {
    return {
      authority: 'string',
      birthDate: 'string',
      birthDay: 'string',
      birthPlace: 'string',
      birthPlaceRaw: 'string',
      country: 'string',
      expiryDate: 'string',
      expiryDay: 'string',
      issueDate: 'string',
      issuePlace: 'string',
      issuePlaceRaw: 'string',
      lineZero: 'string',
      lineOne: 'string',
      name: 'string',
      nameChinese: 'string',
      nameChineseRaw: 'string',
      passportNo: 'string',
      personId: 'string',
      sex: 'string',
      sourceCountry: 'string',
      success: 'boolean',
      type: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeVerificationcodeResponseData extends $tea.Model {
  content: string;
  static names(): { [key: string]: string } {
    return {
      content: 'Content',
    };
  }

  static types(): { [key: string]: any } {
    return {
      content: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizePassportMRZResponseDataRegions extends $tea.Model {
  name: string;
  recognitionScore: number;
  content: string;
  detectionScore: number;
  bandBoxes: number[];
  static names(): { [key: string]: string } {
    return {
      name: 'Name',
      recognitionScore: 'RecognitionScore',
      content: 'Content',
      detectionScore: 'DetectionScore',
      bandBoxes: 'BandBoxes',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
      recognitionScore: 'number',
      content: 'string',
      detectionScore: 'number',
      bandBoxes: { 'type': 'array', 'itemType': 'float' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizePassportMRZResponseData extends $tea.Model {
  regions: RecognizePassportMRZResponseDataRegions[];
  static names(): { [key: string]: string } {
    return {
      regions: 'Regions',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regions: { 'type': 'array', 'itemType': RecognizePassportMRZResponseDataRegions },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeTakeoutOrderResponseDataElements extends $tea.Model {
  score: number;
  name: string;
  value: string;
  boxes: number[];
  static names(): { [key: string]: string } {
    return {
      score: 'Score',
      name: 'Name',
      value: 'Value',
      boxes: 'Boxes',
    };
  }

  static types(): { [key: string]: any } {
    return {
      score: 'number',
      name: 'string',
      value: 'string',
      boxes: { 'type': 'array', 'itemType': 'integer' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeTakeoutOrderResponseData extends $tea.Model {
  elements: RecognizeTakeoutOrderResponseDataElements[];
  static names(): { [key: string]: string } {
    return {
      elements: 'Elements',
    };
  }

  static types(): { [key: string]: any } {
    return {
      elements: { 'type': 'array', 'itemType': RecognizeTakeoutOrderResponseDataElements },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeQrCodeRequestTasks extends $tea.Model {
  imageURL: string;
  static names(): { [key: string]: string } {
    return {
      imageURL: 'ImageURL',
    };
  }

  static types(): { [key: string]: any } {
    return {
      imageURL: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeQrCodeResponseDataElementsResults extends $tea.Model {
  label: string;
  suggestion: string;
  rate: number;
  qrCodesData: string[];
  static names(): { [key: string]: string } {
    return {
      label: 'Label',
      suggestion: 'Suggestion',
      rate: 'Rate',
      qrCodesData: 'QrCodesData',
    };
  }

  static types(): { [key: string]: any } {
    return {
      label: 'string',
      suggestion: 'string',
      rate: 'number',
      qrCodesData: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeQrCodeResponseDataElements extends $tea.Model {
  taskId: string;
  imageURL: string;
  results: RecognizeQrCodeResponseDataElementsResults[];
  static names(): { [key: string]: string } {
    return {
      taskId: 'TaskId',
      imageURL: 'ImageURL',
      results: 'Results',
    };
  }

  static types(): { [key: string]: any } {
    return {
      taskId: 'string',
      imageURL: 'string',
      results: { 'type': 'array', 'itemType': RecognizeQrCodeResponseDataElementsResults },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeQrCodeResponseData extends $tea.Model {
  elements: RecognizeQrCodeResponseDataElements[];
  static names(): { [key: string]: string } {
    return {
      elements: 'Elements',
    };
  }

  static types(): { [key: string]: any } {
    return {
      elements: { 'type': 'array', 'itemType': RecognizeQrCodeResponseDataElements },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeVATInvoiceResponseDataContent extends $tea.Model {
  invoiceCode: string;
  invoiceNo: string;
  invoiceDate: string;
  antiFakeCode: string;
  payerName: string;
  payerRegisterNo: string;
  payerAddress: string;
  payerBankName: string;
  withoutTaxAmount: string;
  taxAmount: string;
  sumAmount: string;
  invoiceAmount: string;
  payeeName: string;
  payeeRegisterNo: string;
  payeeAddress: string;
  payeeBankName: string;
  payee: string;
  checker: string;
  clerk: string;
  static names(): { [key: string]: string } {
    return {
      invoiceCode: 'InvoiceCode',
      invoiceNo: 'InvoiceNo',
      invoiceDate: 'InvoiceDate',
      antiFakeCode: 'AntiFakeCode',
      payerName: 'PayerName',
      payerRegisterNo: 'PayerRegisterNo',
      payerAddress: 'PayerAddress',
      payerBankName: 'PayerBankName',
      withoutTaxAmount: 'WithoutTaxAmount',
      taxAmount: 'TaxAmount',
      sumAmount: 'SumAmount',
      invoiceAmount: 'InvoiceAmount',
      payeeName: 'PayeeName',
      payeeRegisterNo: 'PayeeRegisterNo',
      payeeAddress: 'PayeeAddress',
      payeeBankName: 'PayeeBankName',
      payee: 'Payee',
      checker: 'Checker',
      clerk: 'Clerk',
    };
  }

  static types(): { [key: string]: any } {
    return {
      invoiceCode: 'string',
      invoiceNo: 'string',
      invoiceDate: 'string',
      antiFakeCode: 'string',
      payerName: 'string',
      payerRegisterNo: 'string',
      payerAddress: 'string',
      payerBankName: 'string',
      withoutTaxAmount: 'string',
      taxAmount: 'string',
      sumAmount: 'string',
      invoiceAmount: 'string',
      payeeName: 'string',
      payeeRegisterNo: 'string',
      payeeAddress: 'string',
      payeeBankName: 'string',
      payee: 'string',
      checker: 'string',
      clerk: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeVATInvoiceResponseDataBox extends $tea.Model {
  invoiceCodes: number[];
  invoiceNoes: number[];
  invoiceDates: number[];
  invoiceFakeCodes: number[];
  payerNames: number[];
  payerRegisterNoes: number[];
  payerAddresses: number[];
  payerBankNames: number[];
  withoutTaxAmounts: number[];
  taxAmounts: number[];
  sumAmounts: number[];
  invoiceAmounts: number[];
  payeeNames: number[];
  payeeRegisterNoes: number[];
  payeeAddresses: number[];
  payeeBankNames: number[];
  payees: number[];
  checkers: number[];
  clerks: number[];
  static names(): { [key: string]: string } {
    return {
      invoiceCodes: 'InvoiceCodes',
      invoiceNoes: 'InvoiceNoes',
      invoiceDates: 'InvoiceDates',
      invoiceFakeCodes: 'InvoiceFakeCodes',
      payerNames: 'PayerNames',
      payerRegisterNoes: 'PayerRegisterNoes',
      payerAddresses: 'PayerAddresses',
      payerBankNames: 'PayerBankNames',
      withoutTaxAmounts: 'WithoutTaxAmounts',
      taxAmounts: 'TaxAmounts',
      sumAmounts: 'SumAmounts',
      invoiceAmounts: 'InvoiceAmounts',
      payeeNames: 'PayeeNames',
      payeeRegisterNoes: 'PayeeRegisterNoes',
      payeeAddresses: 'PayeeAddresses',
      payeeBankNames: 'PayeeBankNames',
      payees: 'Payees',
      checkers: 'Checkers',
      clerks: 'Clerks',
    };
  }

  static types(): { [key: string]: any } {
    return {
      invoiceCodes: { 'type': 'array', 'itemType': 'float' },
      invoiceNoes: { 'type': 'array', 'itemType': 'float' },
      invoiceDates: { 'type': 'array', 'itemType': 'float' },
      invoiceFakeCodes: { 'type': 'array', 'itemType': 'float' },
      payerNames: { 'type': 'array', 'itemType': 'float' },
      payerRegisterNoes: { 'type': 'array', 'itemType': 'float' },
      payerAddresses: { 'type': 'array', 'itemType': 'float' },
      payerBankNames: { 'type': 'array', 'itemType': 'float' },
      withoutTaxAmounts: { 'type': 'array', 'itemType': 'float' },
      taxAmounts: { 'type': 'array', 'itemType': 'float' },
      sumAmounts: { 'type': 'array', 'itemType': 'float' },
      invoiceAmounts: { 'type': 'array', 'itemType': 'float' },
      payeeNames: { 'type': 'array', 'itemType': 'float' },
      payeeRegisterNoes: { 'type': 'array', 'itemType': 'float' },
      payeeAddresses: { 'type': 'array', 'itemType': 'float' },
      payeeBankNames: { 'type': 'array', 'itemType': 'float' },
      payees: { 'type': 'array', 'itemType': 'float' },
      checkers: { 'type': 'array', 'itemType': 'float' },
      clerks: { 'type': 'array', 'itemType': 'float' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeVATInvoiceResponseData extends $tea.Model {
  content: RecognizeVATInvoiceResponseDataContent;
  box: RecognizeVATInvoiceResponseDataBox;
  static names(): { [key: string]: string } {
    return {
      content: 'Content',
      box: 'Box',
    };
  }

  static types(): { [key: string]: any } {
    return {
      content: RecognizeVATInvoiceResponseDataContent,
      box: RecognizeVATInvoiceResponseDataBox,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeCharacterResponseDataResultsTextRectangles extends $tea.Model {
  angle: number;
  left: number;
  top: number;
  width: number;
  height: number;
  static names(): { [key: string]: string } {
    return {
      angle: 'Angle',
      left: 'Left',
      top: 'Top',
      width: 'Width',
      height: 'Height',
    };
  }

  static types(): { [key: string]: any } {
    return {
      angle: 'number',
      left: 'number',
      top: 'number',
      width: 'number',
      height: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeCharacterResponseDataResults extends $tea.Model {
  probability: number;
  text: string;
  textRectangles: RecognizeCharacterResponseDataResultsTextRectangles;
  static names(): { [key: string]: string } {
    return {
      probability: 'Probability',
      text: 'Text',
      textRectangles: 'TextRectangles',
    };
  }

  static types(): { [key: string]: any } {
    return {
      probability: 'number',
      text: 'string',
      textRectangles: RecognizeCharacterResponseDataResultsTextRectangles,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeCharacterResponseData extends $tea.Model {
  results: RecognizeCharacterResponseDataResults[];
  static names(): { [key: string]: string } {
    return {
      results: 'Results',
    };
  }

  static types(): { [key: string]: any } {
    return {
      results: { 'type': 'array', 'itemType': RecognizeCharacterResponseDataResults },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeTaxiInvoiceResponseDataInvoicesItemsItemRoiCenter extends $tea.Model {
  x: number;
  y: number;
  static names(): { [key: string]: string } {
    return {
      x: 'X',
      y: 'Y',
    };
  }

  static types(): { [key: string]: any } {
    return {
      x: 'number',
      y: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeTaxiInvoiceResponseDataInvoicesItemsItemRoiSize extends $tea.Model {
  h: number;
  w: number;
  static names(): { [key: string]: string } {
    return {
      h: 'H',
      w: 'W',
    };
  }

  static types(): { [key: string]: any } {
    return {
      h: 'number',
      w: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeTaxiInvoiceResponseDataInvoicesItemsItemRoi extends $tea.Model {
  angle: number;
  center: RecognizeTaxiInvoiceResponseDataInvoicesItemsItemRoiCenter;
  size: RecognizeTaxiInvoiceResponseDataInvoicesItemsItemRoiSize;
  static names(): { [key: string]: string } {
    return {
      angle: 'Angle',
      center: 'Center',
      size: 'Size',
    };
  }

  static types(): { [key: string]: any } {
    return {
      angle: 'number',
      center: RecognizeTaxiInvoiceResponseDataInvoicesItemsItemRoiCenter,
      size: RecognizeTaxiInvoiceResponseDataInvoicesItemsItemRoiSize,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeTaxiInvoiceResponseDataInvoicesItems extends $tea.Model {
  text: string;
  itemRoi: RecognizeTaxiInvoiceResponseDataInvoicesItemsItemRoi;
  static names(): { [key: string]: string } {
    return {
      text: 'Text',
      itemRoi: 'ItemRoi',
    };
  }

  static types(): { [key: string]: any } {
    return {
      text: 'string',
      itemRoi: RecognizeTaxiInvoiceResponseDataInvoicesItemsItemRoi,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeTaxiInvoiceResponseDataInvoicesInvoiceRoi extends $tea.Model {
  h: number;
  w: number;
  x: number;
  y: number;
  static names(): { [key: string]: string } {
    return {
      h: 'H',
      w: 'W',
      x: 'X',
      y: 'Y',
    };
  }

  static types(): { [key: string]: any } {
    return {
      h: 'number',
      w: 'number',
      x: 'number',
      y: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeTaxiInvoiceResponseDataInvoices extends $tea.Model {
  rotateType: number;
  items: RecognizeTaxiInvoiceResponseDataInvoicesItems[];
  invoiceRoi: RecognizeTaxiInvoiceResponseDataInvoicesInvoiceRoi;
  static names(): { [key: string]: string } {
    return {
      rotateType: 'RotateType',
      items: 'Items',
      invoiceRoi: 'InvoiceRoi',
    };
  }

  static types(): { [key: string]: any } {
    return {
      rotateType: 'number',
      items: { 'type': 'array', 'itemType': RecognizeTaxiInvoiceResponseDataInvoicesItems },
      invoiceRoi: RecognizeTaxiInvoiceResponseDataInvoicesInvoiceRoi,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeTaxiInvoiceResponseData extends $tea.Model {
  invoices: RecognizeTaxiInvoiceResponseDataInvoices[];
  static names(): { [key: string]: string } {
    return {
      invoices: 'Invoices',
    };
  }

  static types(): { [key: string]: any } {
    return {
      invoices: { 'type': 'array', 'itemType': RecognizeTaxiInvoiceResponseDataInvoices },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeIdentityCardResponseDataFrontResultCardAreas extends $tea.Model {
  x: number;
  y: number;
  static names(): { [key: string]: string } {
    return {
      x: 'X',
      y: 'Y',
    };
  }

  static types(): { [key: string]: any } {
    return {
      x: 'number',
      y: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeIdentityCardResponseDataFrontResultFaceRectVertices extends $tea.Model {
  x: number;
  y: number;
  static names(): { [key: string]: string } {
    return {
      x: 'X',
      y: 'Y',
    };
  }

  static types(): { [key: string]: any } {
    return {
      x: 'number',
      y: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeIdentityCardResponseDataFrontResultFaceRectangleCenter extends $tea.Model {
  x: number;
  y: number;
  static names(): { [key: string]: string } {
    return {
      x: 'X',
      y: 'Y',
    };
  }

  static types(): { [key: string]: any } {
    return {
      x: 'number',
      y: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeIdentityCardResponseDataFrontResultFaceRectangleSize extends $tea.Model {
  height: number;
  width: number;
  static names(): { [key: string]: string } {
    return {
      height: 'Height',
      width: 'Width',
    };
  }

  static types(): { [key: string]: any } {
    return {
      height: 'number',
      width: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeIdentityCardResponseDataFrontResultFaceRectangle extends $tea.Model {
  angle: number;
  center: RecognizeIdentityCardResponseDataFrontResultFaceRectangleCenter;
  size: RecognizeIdentityCardResponseDataFrontResultFaceRectangleSize;
  static names(): { [key: string]: string } {
    return {
      angle: 'Angle',
      center: 'Center',
      size: 'Size',
    };
  }

  static types(): { [key: string]: any } {
    return {
      angle: 'number',
      center: RecognizeIdentityCardResponseDataFrontResultFaceRectangleCenter,
      size: RecognizeIdentityCardResponseDataFrontResultFaceRectangleSize,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeIdentityCardResponseDataFrontResult extends $tea.Model {
  address: string;
  name: string;
  nationality: string;
  IDNumber: string;
  gender: string;
  birthDate: string;
  cardAreas: RecognizeIdentityCardResponseDataFrontResultCardAreas[];
  faceRectVertices: RecognizeIdentityCardResponseDataFrontResultFaceRectVertices[];
  faceRectangle: RecognizeIdentityCardResponseDataFrontResultFaceRectangle;
  static names(): { [key: string]: string } {
    return {
      address: 'Address',
      name: 'Name',
      nationality: 'Nationality',
      IDNumber: 'IDNumber',
      gender: 'Gender',
      birthDate: 'BirthDate',
      cardAreas: 'CardAreas',
      faceRectVertices: 'FaceRectVertices',
      faceRectangle: 'FaceRectangle',
    };
  }

  static types(): { [key: string]: any } {
    return {
      address: 'string',
      name: 'string',
      nationality: 'string',
      IDNumber: 'string',
      gender: 'string',
      birthDate: 'string',
      cardAreas: { 'type': 'array', 'itemType': RecognizeIdentityCardResponseDataFrontResultCardAreas },
      faceRectVertices: { 'type': 'array', 'itemType': RecognizeIdentityCardResponseDataFrontResultFaceRectVertices },
      faceRectangle: RecognizeIdentityCardResponseDataFrontResultFaceRectangle,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeIdentityCardResponseDataBackResult extends $tea.Model {
  startDate: string;
  endDate: string;
  issue: string;
  static names(): { [key: string]: string } {
    return {
      startDate: 'StartDate',
      endDate: 'EndDate',
      issue: 'Issue',
    };
  }

  static types(): { [key: string]: any } {
    return {
      startDate: 'string',
      endDate: 'string',
      issue: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeIdentityCardResponseData extends $tea.Model {
  frontResult: RecognizeIdentityCardResponseDataFrontResult;
  backResult: RecognizeIdentityCardResponseDataBackResult;
  static names(): { [key: string]: string } {
    return {
      frontResult: 'FrontResult',
      backResult: 'BackResult',
    };
  }

  static types(): { [key: string]: any } {
    return {
      frontResult: RecognizeIdentityCardResponseDataFrontResult,
      backResult: RecognizeIdentityCardResponseDataBackResult,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeLicensePlateResponseDataPlatesRoi extends $tea.Model {
  h: number;
  w: number;
  x: number;
  y: number;
  static names(): { [key: string]: string } {
    return {
      h: 'H',
      w: 'W',
      x: 'X',
      y: 'Y',
    };
  }

  static types(): { [key: string]: any } {
    return {
      h: 'number',
      w: 'number',
      x: 'number',
      y: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeLicensePlateResponseDataPlates extends $tea.Model {
  confidence: number;
  plateNumber: string;
  plateType: string;
  plateTypeConfidence: number;
  roi: RecognizeLicensePlateResponseDataPlatesRoi;
  static names(): { [key: string]: string } {
    return {
      confidence: 'Confidence',
      plateNumber: 'PlateNumber',
      plateType: 'PlateType',
      plateTypeConfidence: 'PlateTypeConfidence',
      roi: 'Roi',
    };
  }

  static types(): { [key: string]: any } {
    return {
      confidence: 'number',
      plateNumber: 'string',
      plateType: 'string',
      plateTypeConfidence: 'number',
      roi: RecognizeLicensePlateResponseDataPlatesRoi,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeLicensePlateResponseData extends $tea.Model {
  plates: RecognizeLicensePlateResponseDataPlates[];
  static names(): { [key: string]: string } {
    return {
      plates: 'Plates',
    };
  }

  static types(): { [key: string]: any } {
    return {
      plates: { 'type': 'array', 'itemType': RecognizeLicensePlateResponseDataPlates },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeTableResponseDataTablesTableRowsTableColumns extends $tea.Model {
  startColumn: number;
  startRow: number;
  endColumn: number;
  endRow: number;
  height: number;
  width: number;
  texts: string[];
  static names(): { [key: string]: string } {
    return {
      startColumn: 'StartColumn',
      startRow: 'StartRow',
      endColumn: 'EndColumn',
      endRow: 'EndRow',
      height: 'Height',
      width: 'Width',
      texts: 'Texts',
    };
  }

  static types(): { [key: string]: any } {
    return {
      startColumn: 'number',
      startRow: 'number',
      endColumn: 'number',
      endRow: 'number',
      height: 'number',
      width: 'number',
      texts: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeTableResponseDataTablesTableRows extends $tea.Model {
  tableColumns: RecognizeTableResponseDataTablesTableRowsTableColumns[];
  static names(): { [key: string]: string } {
    return {
      tableColumns: 'TableColumns',
    };
  }

  static types(): { [key: string]: any } {
    return {
      tableColumns: { 'type': 'array', 'itemType': RecognizeTableResponseDataTablesTableRowsTableColumns },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeTableResponseDataTables extends $tea.Model {
  head: string;
  tail: string;
  tableRows: RecognizeTableResponseDataTablesTableRows[];
  static names(): { [key: string]: string } {
    return {
      head: 'Head',
      tail: 'Tail',
      tableRows: 'TableRows',
    };
  }

  static types(): { [key: string]: any } {
    return {
      head: 'string',
      tail: 'string',
      tableRows: { 'type': 'array', 'itemType': RecognizeTableResponseDataTablesTableRows },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeTableResponseData extends $tea.Model {
  fileContent: string;
  tables: RecognizeTableResponseDataTables[];
  static names(): { [key: string]: string } {
    return {
      fileContent: 'FileContent',
      tables: 'Tables',
    };
  }

  static types(): { [key: string]: any } {
    return {
      fileContent: 'string',
      tables: { 'type': 'array', 'itemType': RecognizeTableResponseDataTables },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeDrivingLicenseResponseDataFaceResult extends $tea.Model {
  plateNumber: string;
  vehicleType: string;
  owner: string;
  useCharacter: string;
  address: string;
  model: string;
  vin: string;
  engineNumber: string;
  registerDate: string;
  issueDate: string;
  static names(): { [key: string]: string } {
    return {
      plateNumber: 'PlateNumber',
      vehicleType: 'VehicleType',
      owner: 'Owner',
      useCharacter: 'UseCharacter',
      address: 'Address',
      model: 'Model',
      vin: 'Vin',
      engineNumber: 'EngineNumber',
      registerDate: 'RegisterDate',
      issueDate: 'IssueDate',
    };
  }

  static types(): { [key: string]: any } {
    return {
      plateNumber: 'string',
      vehicleType: 'string',
      owner: 'string',
      useCharacter: 'string',
      address: 'string',
      model: 'string',
      vin: 'string',
      engineNumber: 'string',
      registerDate: 'string',
      issueDate: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeDrivingLicenseResponseDataBackResult extends $tea.Model {
  approvedPassengerCapacity: string;
  approvedLoad: string;
  fileNumber: string;
  grossMass: string;
  energyType: string;
  inspectionRecord: string;
  overallDimension: string;
  tractionMass: string;
  unladenMass: string;
  plateNumber: string;
  static names(): { [key: string]: string } {
    return {
      approvedPassengerCapacity: 'ApprovedPassengerCapacity',
      approvedLoad: 'ApprovedLoad',
      fileNumber: 'FileNumber',
      grossMass: 'GrossMass',
      energyType: 'EnergyType',
      inspectionRecord: 'InspectionRecord',
      overallDimension: 'OverallDimension',
      tractionMass: 'TractionMass',
      unladenMass: 'UnladenMass',
      plateNumber: 'PlateNumber',
    };
  }

  static types(): { [key: string]: any } {
    return {
      approvedPassengerCapacity: 'string',
      approvedLoad: 'string',
      fileNumber: 'string',
      grossMass: 'string',
      energyType: 'string',
      inspectionRecord: 'string',
      overallDimension: 'string',
      tractionMass: 'string',
      unladenMass: 'string',
      plateNumber: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeDrivingLicenseResponseData extends $tea.Model {
  faceResult: RecognizeDrivingLicenseResponseDataFaceResult;
  backResult: RecognizeDrivingLicenseResponseDataBackResult;
  static names(): { [key: string]: string } {
    return {
      faceResult: 'FaceResult',
      backResult: 'BackResult',
    };
  }

  static types(): { [key: string]: any } {
    return {
      faceResult: RecognizeDrivingLicenseResponseDataFaceResult,
      backResult: RecognizeDrivingLicenseResponseDataBackResult,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeBankCardResponseData extends $tea.Model {
  bankName: string;
  cardNumber: string;
  validDate: string;
  static names(): { [key: string]: string } {
    return {
      bankName: 'BankName',
      cardNumber: 'CardNumber',
      validDate: 'ValidDate',
    };
  }

  static types(): { [key: string]: any } {
    return {
      bankName: 'string',
      cardNumber: 'string',
      validDate: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeTrainTicketResponseData extends $tea.Model {
  date: string;
  destination: string;
  level: string;
  number: string;
  name: string;
  departureStation: string;
  seat: string;
  price: number;
  static names(): { [key: string]: string } {
    return {
      date: 'Date',
      destination: 'Destination',
      level: 'Level',
      number: 'Number',
      name: 'Name',
      departureStation: 'DepartureStation',
      seat: 'Seat',
      price: 'Price',
    };
  }

  static types(): { [key: string]: any } {
    return {
      date: 'string',
      destination: 'string',
      level: 'string',
      number: 'string',
      name: 'string',
      departureStation: 'string',
      seat: 'string',
      price: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeDriverLicenseResponseDataFaceResult extends $tea.Model {
  name: string;
  licenseNumber: string;
  vehicleType: string;
  startDate: string;
  endDate: string;
  issueDate: string;
  address: string;
  gender: string;
  static names(): { [key: string]: string } {
    return {
      name: 'Name',
      licenseNumber: 'LicenseNumber',
      vehicleType: 'VehicleType',
      startDate: 'StartDate',
      endDate: 'EndDate',
      issueDate: 'IssueDate',
      address: 'Address',
      gender: 'Gender',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
      licenseNumber: 'string',
      vehicleType: 'string',
      startDate: 'string',
      endDate: 'string',
      issueDate: 'string',
      address: 'string',
      gender: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeDriverLicenseResponseDataBackResult extends $tea.Model {
  archiveNumber: string;
  static names(): { [key: string]: string } {
    return {
      archiveNumber: 'ArchiveNumber',
    };
  }

  static types(): { [key: string]: any } {
    return {
      archiveNumber: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeDriverLicenseResponseData extends $tea.Model {
  faceResult: RecognizeDriverLicenseResponseDataFaceResult;
  backResult: RecognizeDriverLicenseResponseDataBackResult;
  static names(): { [key: string]: string } {
    return {
      faceResult: 'FaceResult',
      backResult: 'BackResult',
    };
  }

  static types(): { [key: string]: any } {
    return {
      faceResult: RecognizeDriverLicenseResponseDataFaceResult,
      backResult: RecognizeDriverLicenseResponseDataBackResult,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeAccountPageResponseDataInvalidStampAreas extends $tea.Model {
  left: number;
  top: number;
  height: number;
  width: number;
  static names(): { [key: string]: string } {
    return {
      left: 'Left',
      top: 'Top',
      height: 'Height',
      width: 'Width',
    };
  }

  static types(): { [key: string]: any } {
    return {
      left: 'number',
      top: 'number',
      height: 'number',
      width: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeAccountPageResponseDataUndertakeStampAreas extends $tea.Model {
  left: number;
  top: number;
  height: number;
  width: number;
  static names(): { [key: string]: string } {
    return {
      left: 'Left',
      top: 'Top',
      height: 'Height',
      width: 'Width',
    };
  }

  static types(): { [key: string]: any } {
    return {
      left: 'number',
      top: 'number',
      height: 'number',
      width: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeAccountPageResponseDataRegisterStampAreas extends $tea.Model {
  left: number;
  top: number;
  height: number;
  width: number;
  static names(): { [key: string]: string } {
    return {
      left: 'Left',
      top: 'Top',
      height: 'Height',
      width: 'Width',
    };
  }

  static types(): { [key: string]: any } {
    return {
      left: 'number',
      top: 'number',
      height: 'number',
      width: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeAccountPageResponseDataOtherStampAreas extends $tea.Model {
  left: number;
  top: number;
  height: number;
  width: number;
  static names(): { [key: string]: string } {
    return {
      left: 'Left',
      top: 'Top',
      height: 'Height',
      width: 'Width',
    };
  }

  static types(): { [key: string]: any } {
    return {
      left: 'number',
      top: 'number',
      height: 'number',
      width: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeAccountPageResponseDataTitleArea extends $tea.Model {
  left: number;
  top: number;
  height: number;
  width: number;
  static names(): { [key: string]: string } {
    return {
      left: 'Left',
      top: 'Top',
      height: 'Height',
      width: 'Width',
    };
  }

  static types(): { [key: string]: any } {
    return {
      left: 'number',
      top: 'number',
      height: 'number',
      width: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeAccountPageResponseData extends $tea.Model {
  angle: number;
  name: string;
  gender: string;
  relation: string;
  birthPlace: string;
  nationality: string;
  nativePlace: string;
  birthDate: string;
  IDNumber: string;
  invalidStampAreas: RecognizeAccountPageResponseDataInvalidStampAreas[];
  undertakeStampAreas: RecognizeAccountPageResponseDataUndertakeStampAreas[];
  registerStampAreas: RecognizeAccountPageResponseDataRegisterStampAreas[];
  otherStampAreas: RecognizeAccountPageResponseDataOtherStampAreas[];
  titleArea: RecognizeAccountPageResponseDataTitleArea;
  static names(): { [key: string]: string } {
    return {
      angle: 'Angle',
      name: 'Name',
      gender: 'Gender',
      relation: 'Relation',
      birthPlace: 'BirthPlace',
      nationality: 'Nationality',
      nativePlace: 'NativePlace',
      birthDate: 'BirthDate',
      IDNumber: 'IDNumber',
      invalidStampAreas: 'InvalidStampAreas',
      undertakeStampAreas: 'UndertakeStampAreas',
      registerStampAreas: 'RegisterStampAreas',
      otherStampAreas: 'OtherStampAreas',
      titleArea: 'TitleArea',
    };
  }

  static types(): { [key: string]: any } {
    return {
      angle: 'number',
      name: 'string',
      gender: 'string',
      relation: 'string',
      birthPlace: 'string',
      nationality: 'string',
      nativePlace: 'string',
      birthDate: 'string',
      IDNumber: 'string',
      invalidStampAreas: { 'type': 'array', 'itemType': RecognizeAccountPageResponseDataInvalidStampAreas },
      undertakeStampAreas: { 'type': 'array', 'itemType': RecognizeAccountPageResponseDataUndertakeStampAreas },
      registerStampAreas: { 'type': 'array', 'itemType': RecognizeAccountPageResponseDataRegisterStampAreas },
      otherStampAreas: { 'type': 'array', 'itemType': RecognizeAccountPageResponseDataOtherStampAreas },
      titleArea: RecognizeAccountPageResponseDataTitleArea,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeStampResponseDataResultsGeneralText extends $tea.Model {
  content: string;
  confidence: number;
  static names(): { [key: string]: string } {
    return {
      content: 'Content',
      confidence: 'Confidence',
    };
  }

  static types(): { [key: string]: any } {
    return {
      content: 'string',
      confidence: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeStampResponseDataResultsRoi extends $tea.Model {
  left: number;
  top: number;
  width: number;
  height: number;
  static names(): { [key: string]: string } {
    return {
      left: 'Left',
      top: 'Top',
      width: 'Width',
      height: 'Height',
    };
  }

  static types(): { [key: string]: any } {
    return {
      left: 'number',
      top: 'number',
      width: 'number',
      height: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeStampResponseDataResultsText extends $tea.Model {
  content: string;
  confidence: number;
  static names(): { [key: string]: string } {
    return {
      content: 'Content',
      confidence: 'Confidence',
    };
  }

  static types(): { [key: string]: any } {
    return {
      content: 'string',
      confidence: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeStampResponseDataResults extends $tea.Model {
  generalText: RecognizeStampResponseDataResultsGeneralText[];
  roi: RecognizeStampResponseDataResultsRoi;
  text: RecognizeStampResponseDataResultsText;
  static names(): { [key: string]: string } {
    return {
      generalText: 'GeneralText',
      roi: 'Roi',
      text: 'Text',
    };
  }

  static types(): { [key: string]: any } {
    return {
      generalText: { 'type': 'array', 'itemType': RecognizeStampResponseDataResultsGeneralText },
      roi: RecognizeStampResponseDataResultsRoi,
      text: RecognizeStampResponseDataResultsText,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeStampResponseData extends $tea.Model {
  results: RecognizeStampResponseDataResults[];
  static names(): { [key: string]: string } {
    return {
      results: 'Results',
    };
  }

  static types(): { [key: string]: any } {
    return {
      results: { 'type': 'array', 'itemType': RecognizeStampResponseDataResults },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeBusinessCardResponseData extends $tea.Model {
  name: string;
  companies: string[];
  departments: string[];
  titles: string[];
  cellPhoneNumbers: string[];
  officePhoneNumbers: string[];
  addresses: string[];
  emails: string[];
  static names(): { [key: string]: string } {
    return {
      name: 'Name',
      companies: 'Companies',
      departments: 'Departments',
      titles: 'Titles',
      cellPhoneNumbers: 'CellPhoneNumbers',
      officePhoneNumbers: 'OfficePhoneNumbers',
      addresses: 'Addresses',
      emails: 'Emails',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
      companies: { 'type': 'array', 'itemType': 'string' },
      departments: { 'type': 'array', 'itemType': 'string' },
      titles: { 'type': 'array', 'itemType': 'string' },
      cellPhoneNumbers: { 'type': 'array', 'itemType': 'string' },
      officePhoneNumbers: { 'type': 'array', 'itemType': 'string' },
      addresses: { 'type': 'array', 'itemType': 'string' },
      emails: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeVINCodeResponseData extends $tea.Model {
  vinCode: string;
  static names(): { [key: string]: string } {
    return {
      vinCode: 'VinCode',
    };
  }

  static types(): { [key: string]: any } {
    return {
      vinCode: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeBusinessLicenseResponseDataEmblem extends $tea.Model {
  top: number;
  left: number;
  height: number;
  width: number;
  static names(): { [key: string]: string } {
    return {
      top: 'Top',
      left: 'Left',
      height: 'Height',
      width: 'Width',
    };
  }

  static types(): { [key: string]: any } {
    return {
      top: 'number',
      left: 'number',
      height: 'number',
      width: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeBusinessLicenseResponseDataTitle extends $tea.Model {
  top: number;
  left: number;
  height: number;
  width: number;
  static names(): { [key: string]: string } {
    return {
      top: 'Top',
      left: 'Left',
      height: 'Height',
      width: 'Width',
    };
  }

  static types(): { [key: string]: any } {
    return {
      top: 'number',
      left: 'number',
      height: 'number',
      width: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeBusinessLicenseResponseDataStamp extends $tea.Model {
  top: number;
  left: number;
  height: number;
  width: number;
  static names(): { [key: string]: string } {
    return {
      top: 'Top',
      left: 'Left',
      height: 'Height',
      width: 'Width',
    };
  }

  static types(): { [key: string]: any } {
    return {
      top: 'number',
      left: 'number',
      height: 'number',
      width: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeBusinessLicenseResponseDataQRCode extends $tea.Model {
  top: number;
  left: number;
  height: number;
  width: number;
  static names(): { [key: string]: string } {
    return {
      top: 'Top',
      left: 'Left',
      height: 'Height',
      width: 'Width',
    };
  }

  static types(): { [key: string]: any } {
    return {
      top: 'number',
      left: 'number',
      height: 'number',
      width: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeBusinessLicenseResponseData extends $tea.Model {
  angle: string;
  registerNumber: string;
  name: string;
  type: string;
  legalPerson: string;
  establishDate: string;
  validPeriod: string;
  address: string;
  capital: string;
  business: string;
  emblem: RecognizeBusinessLicenseResponseDataEmblem;
  title: RecognizeBusinessLicenseResponseDataTitle;
  stamp: RecognizeBusinessLicenseResponseDataStamp;
  QRCode: RecognizeBusinessLicenseResponseDataQRCode;
  static names(): { [key: string]: string } {
    return {
      angle: 'Angle',
      registerNumber: 'RegisterNumber',
      name: 'Name',
      type: 'Type',
      legalPerson: 'LegalPerson',
      establishDate: 'EstablishDate',
      validPeriod: 'ValidPeriod',
      address: 'Address',
      capital: 'Capital',
      business: 'Business',
      emblem: 'Emblem',
      title: 'Title',
      stamp: 'Stamp',
      QRCode: 'QRCode',
    };
  }

  static types(): { [key: string]: any } {
    return {
      angle: 'string',
      registerNumber: 'string',
      name: 'string',
      type: 'string',
      legalPerson: 'string',
      establishDate: 'string',
      validPeriod: 'string',
      address: 'string',
      capital: 'string',
      business: 'string',
      emblem: RecognizeBusinessLicenseResponseDataEmblem,
      title: RecognizeBusinessLicenseResponseDataTitle,
      stamp: RecognizeBusinessLicenseResponseDataStamp,
      QRCode: RecognizeBusinessLicenseResponseDataQRCode,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}


export default class Client {
  _endpoint: string;
  _regionId: string;
  _protocol: string;
  _userAgent: string;
  _endpointType: string;
  _readTimeout: number;
  _connectTimeout: number;
  _httpProxy: string;
  _httpsProxy: string;
  _socks5Proxy: string;
  _socks5NetWork: string;
  _noProxy: string;
  _maxIdleConns: number;
  _openPlatformEndpoint: string;
  _credential: Credential;

  constructor(config: Config) {
    if (Util.isUnset($tea.toMap(config))) {
      throw $tea.newError({
        name: "ParameterMissing",
        message: "'config' can not be unset",
      });
    }

    if (Util.empty(config.regionId)) {
      throw $tea.newError({
        name: "ParameterMissing",
        message: "'config.regionId' can not be empty",
      });
    }

    if (Util.empty(config.endpoint)) {
      throw $tea.newError({
        name: "ParameterMissing",
        message: "'config.endpoint' can not be empty",
      });
    }

    if (Util.empty(config.type)) {
      config.type = "access_key";
    }

    let credentialConfig = new $Credential.Config({
      accessKeyId: config.accessKeyId,
      type: config.type,
      accessKeySecret: config.accessKeySecret,
      securityToken: config.securityToken,
    });
    this._credential = new Credential(credentialConfig);
    this._endpoint = config.endpoint;
    this._protocol = config.protocol;
    this._regionId = config.regionId;
    this._userAgent = config.userAgent;
    this._readTimeout = config.readTimeout;
    this._connectTimeout = config.connectTimeout;
    this._httpProxy = config.httpProxy;
    this._httpsProxy = config.httpsProxy;
    this._noProxy = config.noProxy;
    this._socks5Proxy = config.socks5Proxy;
    this._socks5NetWork = config.socks5NetWork;
    this._maxIdleConns = config.maxIdleConns;
    this._endpointType = config.endpointType;
    this._openPlatformEndpoint = config.openPlatformEndpoint;
  }

  async _request(action: string, protocol: string, method: string, authType: string, query: {[key: string]: any}, body: {[key: string]: any}, runtime: $Util.RuntimeOptions): Promise<{[key: string]: any}> {
    let _runtime: { [key: string]: any } = {
      timeouted: "retry",
      readTimeout: Util.defaultNumber(runtime.readTimeout, this._readTimeout),
      connectTimeout: Util.defaultNumber(runtime.connectTimeout, this._connectTimeout),
      httpProxy: Util.defaultString(runtime.httpProxy, this._httpProxy),
      httpsProxy: Util.defaultString(runtime.httpsProxy, this._httpsProxy),
      noProxy: Util.defaultString(runtime.noProxy, this._noProxy),
      maxIdleConns: Util.defaultNumber(runtime.maxIdleConns, this._maxIdleConns),
      retry: {
        retryable: runtime.autoretry,
        maxAttempts: Util.defaultNumber(runtime.maxAttempts, 3),
      },
      backoff: {
        policy: Util.defaultString(runtime.backoffPolicy, "no"),
        period: Util.defaultNumber(runtime.backoffPeriod, 1),
      },
      ignoreSSL: runtime.ignoreSSL,
    }

    let _lastRequest = null;
    let _now = Date.now();
    let _retryTimes = 0;
    while ($tea.allowRetry(_runtime['retry'], _retryTimes, _now)) {
      if (_retryTimes > 0) {
        let _backoffTime = $tea.getBackoffTime(_runtime['backoff'], _retryTimes);
        if (_backoffTime > 0) {
          await $tea.sleep(_backoffTime);
        }
      }

      _retryTimes = _retryTimes + 1;
      try {
        let request_ = new $tea.Request();
        request_.protocol = Util.defaultString(this._protocol, protocol);
        request_.method = method;
        request_.pathname = "/";
        request_.query = RPCUtil.query({
          Action: action,
          Format: "json",
          RegionId: this._regionId,
          Timestamp: RPCUtil.getTimestamp(),
          Version: "2019-12-30",
          SignatureNonce: Util.getNonce(),
          ...query,
        });
        if (!Util.isUnset(body)) {
          let tmp = Util.anyifyMapValue(RPCUtil.query(body));
          request_.body = new $tea.BytesReadable(Util.toFormString(tmp));
        }

        request_.headers = {
          host: RPCUtil.getHost("ocr", this._regionId, this._endpoint),
          'user-agent': this.getUserAgent(),
        };
        if (!Util.equalString(authType, "Anonymous")) {
          let accessKeyId = await this.getAccessKeyId();
          let accessKeySecret = await this.getAccessKeySecret();
          request_.query["SignatureMethod"] = "HMAC-SHA1";
          request_.query["SignatureVersion"] = "1.0";
          request_.query["AccessKeyId"] = accessKeyId;
          request_.query["Signature"] = RPCUtil.getSignature(request_, accessKeySecret);
        }

        _lastRequest = request_;
        let response_ = await $tea.doAction(request_, _runtime);

        let obj = await Util.readAsJSON(response_.body);
        let res = Util.assertAsMap(obj);
        if (Util.is4xx(response_.statusCode) || Util.is5xx(response_.statusCode)) {
          throw $tea.newError({
            message: res["Message"],
            data: res,
            code: res["Code"],
          });
        }

        return res;
      } catch (ex) {
        if ($tea.isRetryable(ex)) {
          continue;
        }
        throw ex;
      }
    }

    throw $tea.newUnretryableError(_lastRequest);
  }

  async getAsyncJobResult(request: GetAsyncJobResultRequest, runtime: $Util.RuntimeOptions): Promise<GetAsyncJobResultResponse> {
    return $tea.cast<GetAsyncJobResultResponse>(await this._request("GetAsyncJobResult", "HTTPS", "POST", "AK", null, $tea.toMap(request), runtime), new GetAsyncJobResultResponse({}));
  }

  async trimDocument(request: TrimDocumentRequest, runtime: $Util.RuntimeOptions): Promise<TrimDocumentResponse> {
    return $tea.cast<TrimDocumentResponse>(await this._request("TrimDocument", "HTTPS", "POST", "AK", null, $tea.toMap(request), runtime), new TrimDocumentResponse({}));
  }

  async trimDocumentAdvance(request: TrimDocumentAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<TrimDocumentResponse> {
    // Step 0: init client
    let accessKeyId = await this._credential.getAccessKeyId();
    let accessKeySecret = await this._credential.getAccessKeySecret();
    let authConfig = new $OpenPlatform.Config({
      accessKeyId: accessKeyId,
      accessKeySecret: accessKeySecret,
      type: "access_key",
      endpoint: "openplatform.aliyuncs.com",
      protocol: this._protocol,
      regionId: this._regionId,
    });
    let authClient = new OpenPlatform(authConfig);
    let authRequest = new $OpenPlatform.AuthorizeFileUploadRequest({
      product: "ocr",
      regionId: this._regionId,
    });
    let authResponse = await authClient.authorizeFileUpload(authRequest, runtime);
    // Step 1: request OSS api to upload file
    let ossConfig = new $OSS.Config({
      accessKeyId: authResponse.accessKeyId,
      accessKeySecret: accessKeySecret,
      type: "access_key",
      endpoint: RPCUtil.getEndpoint(authResponse.endpoint, authResponse.useAccelerate, this._endpointType),
      protocol: this._protocol,
      regionId: this._regionId,
    });
    let ossClient = new OSS(ossConfig);
    let fileObj = new $FileForm.FileField({
      filename: authResponse.objectKey,
      content: request.fileURLObject,
      contentType: "",
    });
    let ossHeader = new $OSS.PostObjectRequestHeader({
      accessKeyId: authResponse.accessKeyId,
      policy: authResponse.encodedPolicy,
      signature: authResponse.signature,
      key: authResponse.objectKey,
      file: fileObj,
      successActionStatus: "201",
    });
    let uploadRequest = new $OSS.PostObjectRequest({
      bucketName: authResponse.bucket,
      header: ossHeader,
    });
    let ossRuntime = new $OSSUtil.RuntimeOptions({ });
    RPCUtil.convert(runtime, ossRuntime);
    await ossClient.postObject(uploadRequest, ossRuntime);
    // Step 2: request final api
    let trimDocumentreq = new TrimDocumentRequest({ });
    RPCUtil.convert(request, trimDocumentreq);
    trimDocumentreq.fileURL = `http://${authResponse.bucket}.${authResponse.endpoint}/${authResponse.objectKey}`;
    let trimDocumentResp = await this.trimDocument(trimDocumentreq, runtime);
    return trimDocumentResp;
  }

  async recognizeChinapassport(request: RecognizeChinapassportRequest, runtime: $Util.RuntimeOptions): Promise<RecognizeChinapassportResponse> {
    return $tea.cast<RecognizeChinapassportResponse>(await this._request("RecognizeChinapassport", "HTTPS", "POST", "AK", null, $tea.toMap(request), runtime), new RecognizeChinapassportResponse({}));
  }

  async recognizeChinapassportAdvance(request: RecognizeChinapassportAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<RecognizeChinapassportResponse> {
    // Step 0: init client
    let accessKeyId = await this._credential.getAccessKeyId();
    let accessKeySecret = await this._credential.getAccessKeySecret();
    let authConfig = new $OpenPlatform.Config({
      accessKeyId: accessKeyId,
      accessKeySecret: accessKeySecret,
      type: "access_key",
      endpoint: "openplatform.aliyuncs.com",
      protocol: this._protocol,
      regionId: this._regionId,
    });
    let authClient = new OpenPlatform(authConfig);
    let authRequest = new $OpenPlatform.AuthorizeFileUploadRequest({
      product: "ocr",
      regionId: this._regionId,
    });
    let authResponse = await authClient.authorizeFileUpload(authRequest, runtime);
    // Step 1: request OSS api to upload file
    let ossConfig = new $OSS.Config({
      accessKeyId: authResponse.accessKeyId,
      accessKeySecret: accessKeySecret,
      type: "access_key",
      endpoint: RPCUtil.getEndpoint(authResponse.endpoint, authResponse.useAccelerate, this._endpointType),
      protocol: this._protocol,
      regionId: this._regionId,
    });
    let ossClient = new OSS(ossConfig);
    let fileObj = new $FileForm.FileField({
      filename: authResponse.objectKey,
      content: request.imageURLObject,
      contentType: "",
    });
    let ossHeader = new $OSS.PostObjectRequestHeader({
      accessKeyId: authResponse.accessKeyId,
      policy: authResponse.encodedPolicy,
      signature: authResponse.signature,
      key: authResponse.objectKey,
      file: fileObj,
      successActionStatus: "201",
    });
    let uploadRequest = new $OSS.PostObjectRequest({
      bucketName: authResponse.bucket,
      header: ossHeader,
    });
    let ossRuntime = new $OSSUtil.RuntimeOptions({ });
    RPCUtil.convert(runtime, ossRuntime);
    await ossClient.postObject(uploadRequest, ossRuntime);
    // Step 2: request final api
    let recognizeChinapassportreq = new RecognizeChinapassportRequest({ });
    RPCUtil.convert(request, recognizeChinapassportreq);
    recognizeChinapassportreq.imageURL = `http://${authResponse.bucket}.${authResponse.endpoint}/${authResponse.objectKey}`;
    let recognizeChinapassportResp = await this.recognizeChinapassport(recognizeChinapassportreq, runtime);
    return recognizeChinapassportResp;
  }

  async recognizeVerificationcode(request: RecognizeVerificationcodeRequest, runtime: $Util.RuntimeOptions): Promise<RecognizeVerificationcodeResponse> {
    return $tea.cast<RecognizeVerificationcodeResponse>(await this._request("RecognizeVerificationcode", "HTTPS", "POST", "AK", null, $tea.toMap(request), runtime), new RecognizeVerificationcodeResponse({}));
  }

  async recognizeVerificationcodeAdvance(request: RecognizeVerificationcodeAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<RecognizeVerificationcodeResponse> {
    // Step 0: init client
    let accessKeyId = await this._credential.getAccessKeyId();
    let accessKeySecret = await this._credential.getAccessKeySecret();
    let authConfig = new $OpenPlatform.Config({
      accessKeyId: accessKeyId,
      accessKeySecret: accessKeySecret,
      type: "access_key",
      endpoint: "openplatform.aliyuncs.com",
      protocol: this._protocol,
      regionId: this._regionId,
    });
    let authClient = new OpenPlatform(authConfig);
    let authRequest = new $OpenPlatform.AuthorizeFileUploadRequest({
      product: "ocr",
      regionId: this._regionId,
    });
    let authResponse = await authClient.authorizeFileUpload(authRequest, runtime);
    // Step 1: request OSS api to upload file
    let ossConfig = new $OSS.Config({
      accessKeyId: authResponse.accessKeyId,
      accessKeySecret: accessKeySecret,
      type: "access_key",
      endpoint: RPCUtil.getEndpoint(authResponse.endpoint, authResponse.useAccelerate, this._endpointType),
      protocol: this._protocol,
      regionId: this._regionId,
    });
    let ossClient = new OSS(ossConfig);
    let fileObj = new $FileForm.FileField({
      filename: authResponse.objectKey,
      content: request.imageURLObject,
      contentType: "",
    });
    let ossHeader = new $OSS.PostObjectRequestHeader({
      accessKeyId: authResponse.accessKeyId,
      policy: authResponse.encodedPolicy,
      signature: authResponse.signature,
      key: authResponse.objectKey,
      file: fileObj,
      successActionStatus: "201",
    });
    let uploadRequest = new $OSS.PostObjectRequest({
      bucketName: authResponse.bucket,
      header: ossHeader,
    });
    let ossRuntime = new $OSSUtil.RuntimeOptions({ });
    RPCUtil.convert(runtime, ossRuntime);
    await ossClient.postObject(uploadRequest, ossRuntime);
    // Step 2: request final api
    let recognizeVerificationcodereq = new RecognizeVerificationcodeRequest({ });
    RPCUtil.convert(request, recognizeVerificationcodereq);
    recognizeVerificationcodereq.imageURL = `http://${authResponse.bucket}.${authResponse.endpoint}/${authResponse.objectKey}`;
    let recognizeVerificationcodeResp = await this.recognizeVerificationcode(recognizeVerificationcodereq, runtime);
    return recognizeVerificationcodeResp;
  }

  async recognizePassportMRZ(request: RecognizePassportMRZRequest, runtime: $Util.RuntimeOptions): Promise<RecognizePassportMRZResponse> {
    return $tea.cast<RecognizePassportMRZResponse>(await this._request("RecognizePassportMRZ", "HTTPS", "POST", "AK", null, $tea.toMap(request), runtime), new RecognizePassportMRZResponse({}));
  }

  async recognizePassportMRZAdvance(request: RecognizePassportMRZAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<RecognizePassportMRZResponse> {
    // Step 0: init client
    let accessKeyId = await this._credential.getAccessKeyId();
    let accessKeySecret = await this._credential.getAccessKeySecret();
    let authConfig = new $OpenPlatform.Config({
      accessKeyId: accessKeyId,
      accessKeySecret: accessKeySecret,
      type: "access_key",
      endpoint: "openplatform.aliyuncs.com",
      protocol: this._protocol,
      regionId: this._regionId,
    });
    let authClient = new OpenPlatform(authConfig);
    let authRequest = new $OpenPlatform.AuthorizeFileUploadRequest({
      product: "ocr",
      regionId: this._regionId,
    });
    let authResponse = await authClient.authorizeFileUpload(authRequest, runtime);
    // Step 1: request OSS api to upload file
    let ossConfig = new $OSS.Config({
      accessKeyId: authResponse.accessKeyId,
      accessKeySecret: accessKeySecret,
      type: "access_key",
      endpoint: RPCUtil.getEndpoint(authResponse.endpoint, authResponse.useAccelerate, this._endpointType),
      protocol: this._protocol,
      regionId: this._regionId,
    });
    let ossClient = new OSS(ossConfig);
    let fileObj = new $FileForm.FileField({
      filename: authResponse.objectKey,
      content: request.imageURLObject,
      contentType: "",
    });
    let ossHeader = new $OSS.PostObjectRequestHeader({
      accessKeyId: authResponse.accessKeyId,
      policy: authResponse.encodedPolicy,
      signature: authResponse.signature,
      key: authResponse.objectKey,
      file: fileObj,
      successActionStatus: "201",
    });
    let uploadRequest = new $OSS.PostObjectRequest({
      bucketName: authResponse.bucket,
      header: ossHeader,
    });
    let ossRuntime = new $OSSUtil.RuntimeOptions({ });
    RPCUtil.convert(runtime, ossRuntime);
    await ossClient.postObject(uploadRequest, ossRuntime);
    // Step 2: request final api
    let recognizePassportMRZreq = new RecognizePassportMRZRequest({ });
    RPCUtil.convert(request, recognizePassportMRZreq);
    recognizePassportMRZreq.imageURL = `http://${authResponse.bucket}.${authResponse.endpoint}/${authResponse.objectKey}`;
    let recognizePassportMRZResp = await this.recognizePassportMRZ(recognizePassportMRZreq, runtime);
    return recognizePassportMRZResp;
  }

  async recognizeTakeoutOrder(request: RecognizeTakeoutOrderRequest, runtime: $Util.RuntimeOptions): Promise<RecognizeTakeoutOrderResponse> {
    return $tea.cast<RecognizeTakeoutOrderResponse>(await this._request("RecognizeTakeoutOrder", "HTTPS", "POST", "AK", null, $tea.toMap(request), runtime), new RecognizeTakeoutOrderResponse({}));
  }

  async recognizeTakeoutOrderAdvance(request: RecognizeTakeoutOrderAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<RecognizeTakeoutOrderResponse> {
    // Step 0: init client
    let accessKeyId = await this._credential.getAccessKeyId();
    let accessKeySecret = await this._credential.getAccessKeySecret();
    let authConfig = new $OpenPlatform.Config({
      accessKeyId: accessKeyId,
      accessKeySecret: accessKeySecret,
      type: "access_key",
      endpoint: "openplatform.aliyuncs.com",
      protocol: this._protocol,
      regionId: this._regionId,
    });
    let authClient = new OpenPlatform(authConfig);
    let authRequest = new $OpenPlatform.AuthorizeFileUploadRequest({
      product: "ocr",
      regionId: this._regionId,
    });
    let authResponse = await authClient.authorizeFileUpload(authRequest, runtime);
    // Step 1: request OSS api to upload file
    let ossConfig = new $OSS.Config({
      accessKeyId: authResponse.accessKeyId,
      accessKeySecret: accessKeySecret,
      type: "access_key",
      endpoint: RPCUtil.getEndpoint(authResponse.endpoint, authResponse.useAccelerate, this._endpointType),
      protocol: this._protocol,
      regionId: this._regionId,
    });
    let ossClient = new OSS(ossConfig);
    let fileObj = new $FileForm.FileField({
      filename: authResponse.objectKey,
      content: request.imageURLObject,
      contentType: "",
    });
    let ossHeader = new $OSS.PostObjectRequestHeader({
      accessKeyId: authResponse.accessKeyId,
      policy: authResponse.encodedPolicy,
      signature: authResponse.signature,
      key: authResponse.objectKey,
      file: fileObj,
      successActionStatus: "201",
    });
    let uploadRequest = new $OSS.PostObjectRequest({
      bucketName: authResponse.bucket,
      header: ossHeader,
    });
    let ossRuntime = new $OSSUtil.RuntimeOptions({ });
    RPCUtil.convert(runtime, ossRuntime);
    await ossClient.postObject(uploadRequest, ossRuntime);
    // Step 2: request final api
    let recognizeTakeoutOrderreq = new RecognizeTakeoutOrderRequest({ });
    RPCUtil.convert(request, recognizeTakeoutOrderreq);
    recognizeTakeoutOrderreq.imageURL = `http://${authResponse.bucket}.${authResponse.endpoint}/${authResponse.objectKey}`;
    let recognizeTakeoutOrderResp = await this.recognizeTakeoutOrder(recognizeTakeoutOrderreq, runtime);
    return recognizeTakeoutOrderResp;
  }

  async recognizeQrCode(request: RecognizeQrCodeRequest, runtime: $Util.RuntimeOptions): Promise<RecognizeQrCodeResponse> {
    return $tea.cast<RecognizeQrCodeResponse>(await this._request("RecognizeQrCode", "HTTPS", "POST", "AK", null, $tea.toMap(request), runtime), new RecognizeQrCodeResponse({}));
  }

  async recognizeVATInvoice(request: RecognizeVATInvoiceRequest, runtime: $Util.RuntimeOptions): Promise<RecognizeVATInvoiceResponse> {
    return $tea.cast<RecognizeVATInvoiceResponse>(await this._request("RecognizeVATInvoice", "HTTPS", "POST", "AK", null, $tea.toMap(request), runtime), new RecognizeVATInvoiceResponse({}));
  }

  async recognizeVATInvoiceAdvance(request: RecognizeVATInvoiceAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<RecognizeVATInvoiceResponse> {
    // Step 0: init client
    let accessKeyId = await this._credential.getAccessKeyId();
    let accessKeySecret = await this._credential.getAccessKeySecret();
    let authConfig = new $OpenPlatform.Config({
      accessKeyId: accessKeyId,
      accessKeySecret: accessKeySecret,
      type: "access_key",
      endpoint: "openplatform.aliyuncs.com",
      protocol: this._protocol,
      regionId: this._regionId,
    });
    let authClient = new OpenPlatform(authConfig);
    let authRequest = new $OpenPlatform.AuthorizeFileUploadRequest({
      product: "ocr",
      regionId: this._regionId,
    });
    let authResponse = await authClient.authorizeFileUpload(authRequest, runtime);
    // Step 1: request OSS api to upload file
    let ossConfig = new $OSS.Config({
      accessKeyId: authResponse.accessKeyId,
      accessKeySecret: accessKeySecret,
      type: "access_key",
      endpoint: RPCUtil.getEndpoint(authResponse.endpoint, authResponse.useAccelerate, this._endpointType),
      protocol: this._protocol,
      regionId: this._regionId,
    });
    let ossClient = new OSS(ossConfig);
    let fileObj = new $FileForm.FileField({
      filename: authResponse.objectKey,
      content: request.fileURLObject,
      contentType: "",
    });
    let ossHeader = new $OSS.PostObjectRequestHeader({
      accessKeyId: authResponse.accessKeyId,
      policy: authResponse.encodedPolicy,
      signature: authResponse.signature,
      key: authResponse.objectKey,
      file: fileObj,
      successActionStatus: "201",
    });
    let uploadRequest = new $OSS.PostObjectRequest({
      bucketName: authResponse.bucket,
      header: ossHeader,
    });
    let ossRuntime = new $OSSUtil.RuntimeOptions({ });
    RPCUtil.convert(runtime, ossRuntime);
    await ossClient.postObject(uploadRequest, ossRuntime);
    // Step 2: request final api
    let recognizeVATInvoicereq = new RecognizeVATInvoiceRequest({ });
    RPCUtil.convert(request, recognizeVATInvoicereq);
    recognizeVATInvoicereq.fileURL = `http://${authResponse.bucket}.${authResponse.endpoint}/${authResponse.objectKey}`;
    let recognizeVATInvoiceResp = await this.recognizeVATInvoice(recognizeVATInvoicereq, runtime);
    return recognizeVATInvoiceResp;
  }

  async recognizeCharacter(request: RecognizeCharacterRequest, runtime: $Util.RuntimeOptions): Promise<RecognizeCharacterResponse> {
    return $tea.cast<RecognizeCharacterResponse>(await this._request("RecognizeCharacter", "HTTPS", "POST", "AK", null, $tea.toMap(request), runtime), new RecognizeCharacterResponse({}));
  }

  async recognizeCharacterAdvance(request: RecognizeCharacterAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<RecognizeCharacterResponse> {
    // Step 0: init client
    let accessKeyId = await this._credential.getAccessKeyId();
    let accessKeySecret = await this._credential.getAccessKeySecret();
    let authConfig = new $OpenPlatform.Config({
      accessKeyId: accessKeyId,
      accessKeySecret: accessKeySecret,
      type: "access_key",
      endpoint: "openplatform.aliyuncs.com",
      protocol: this._protocol,
      regionId: this._regionId,
    });
    let authClient = new OpenPlatform(authConfig);
    let authRequest = new $OpenPlatform.AuthorizeFileUploadRequest({
      product: "ocr",
      regionId: this._regionId,
    });
    let authResponse = await authClient.authorizeFileUpload(authRequest, runtime);
    // Step 1: request OSS api to upload file
    let ossConfig = new $OSS.Config({
      accessKeyId: authResponse.accessKeyId,
      accessKeySecret: accessKeySecret,
      type: "access_key",
      endpoint: RPCUtil.getEndpoint(authResponse.endpoint, authResponse.useAccelerate, this._endpointType),
      protocol: this._protocol,
      regionId: this._regionId,
    });
    let ossClient = new OSS(ossConfig);
    let fileObj = new $FileForm.FileField({
      filename: authResponse.objectKey,
      content: request.imageURLObject,
      contentType: "",
    });
    let ossHeader = new $OSS.PostObjectRequestHeader({
      accessKeyId: authResponse.accessKeyId,
      policy: authResponse.encodedPolicy,
      signature: authResponse.signature,
      key: authResponse.objectKey,
      file: fileObj,
      successActionStatus: "201",
    });
    let uploadRequest = new $OSS.PostObjectRequest({
      bucketName: authResponse.bucket,
      header: ossHeader,
    });
    let ossRuntime = new $OSSUtil.RuntimeOptions({ });
    RPCUtil.convert(runtime, ossRuntime);
    await ossClient.postObject(uploadRequest, ossRuntime);
    // Step 2: request final api
    let recognizeCharacterreq = new RecognizeCharacterRequest({ });
    RPCUtil.convert(request, recognizeCharacterreq);
    recognizeCharacterreq.imageURL = `http://${authResponse.bucket}.${authResponse.endpoint}/${authResponse.objectKey}`;
    let recognizeCharacterResp = await this.recognizeCharacter(recognizeCharacterreq, runtime);
    return recognizeCharacterResp;
  }

  async recognizeTaxiInvoice(request: RecognizeTaxiInvoiceRequest, runtime: $Util.RuntimeOptions): Promise<RecognizeTaxiInvoiceResponse> {
    return $tea.cast<RecognizeTaxiInvoiceResponse>(await this._request("RecognizeTaxiInvoice", "HTTPS", "POST", "AK", null, $tea.toMap(request), runtime), new RecognizeTaxiInvoiceResponse({}));
  }

  async recognizeTaxiInvoiceAdvance(request: RecognizeTaxiInvoiceAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<RecognizeTaxiInvoiceResponse> {
    // Step 0: init client
    let accessKeyId = await this._credential.getAccessKeyId();
    let accessKeySecret = await this._credential.getAccessKeySecret();
    let authConfig = new $OpenPlatform.Config({
      accessKeyId: accessKeyId,
      accessKeySecret: accessKeySecret,
      type: "access_key",
      endpoint: "openplatform.aliyuncs.com",
      protocol: this._protocol,
      regionId: this._regionId,
    });
    let authClient = new OpenPlatform(authConfig);
    let authRequest = new $OpenPlatform.AuthorizeFileUploadRequest({
      product: "ocr",
      regionId: this._regionId,
    });
    let authResponse = await authClient.authorizeFileUpload(authRequest, runtime);
    // Step 1: request OSS api to upload file
    let ossConfig = new $OSS.Config({
      accessKeyId: authResponse.accessKeyId,
      accessKeySecret: accessKeySecret,
      type: "access_key",
      endpoint: RPCUtil.getEndpoint(authResponse.endpoint, authResponse.useAccelerate, this._endpointType),
      protocol: this._protocol,
      regionId: this._regionId,
    });
    let ossClient = new OSS(ossConfig);
    let fileObj = new $FileForm.FileField({
      filename: authResponse.objectKey,
      content: request.imageURLObject,
      contentType: "",
    });
    let ossHeader = new $OSS.PostObjectRequestHeader({
      accessKeyId: authResponse.accessKeyId,
      policy: authResponse.encodedPolicy,
      signature: authResponse.signature,
      key: authResponse.objectKey,
      file: fileObj,
      successActionStatus: "201",
    });
    let uploadRequest = new $OSS.PostObjectRequest({
      bucketName: authResponse.bucket,
      header: ossHeader,
    });
    let ossRuntime = new $OSSUtil.RuntimeOptions({ });
    RPCUtil.convert(runtime, ossRuntime);
    await ossClient.postObject(uploadRequest, ossRuntime);
    // Step 2: request final api
    let recognizeTaxiInvoicereq = new RecognizeTaxiInvoiceRequest({ });
    RPCUtil.convert(request, recognizeTaxiInvoicereq);
    recognizeTaxiInvoicereq.imageURL = `http://${authResponse.bucket}.${authResponse.endpoint}/${authResponse.objectKey}`;
    let recognizeTaxiInvoiceResp = await this.recognizeTaxiInvoice(recognizeTaxiInvoicereq, runtime);
    return recognizeTaxiInvoiceResp;
  }

  async recognizeIdentityCard(request: RecognizeIdentityCardRequest, runtime: $Util.RuntimeOptions): Promise<RecognizeIdentityCardResponse> {
    return $tea.cast<RecognizeIdentityCardResponse>(await this._request("RecognizeIdentityCard", "HTTPS", "POST", "AK", null, $tea.toMap(request), runtime), new RecognizeIdentityCardResponse({}));
  }

  async recognizeIdentityCardAdvance(request: RecognizeIdentityCardAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<RecognizeIdentityCardResponse> {
    // Step 0: init client
    let accessKeyId = await this._credential.getAccessKeyId();
    let accessKeySecret = await this._credential.getAccessKeySecret();
    let authConfig = new $OpenPlatform.Config({
      accessKeyId: accessKeyId,
      accessKeySecret: accessKeySecret,
      type: "access_key",
      endpoint: "openplatform.aliyuncs.com",
      protocol: this._protocol,
      regionId: this._regionId,
    });
    let authClient = new OpenPlatform(authConfig);
    let authRequest = new $OpenPlatform.AuthorizeFileUploadRequest({
      product: "ocr",
      regionId: this._regionId,
    });
    let authResponse = await authClient.authorizeFileUpload(authRequest, runtime);
    // Step 1: request OSS api to upload file
    let ossConfig = new $OSS.Config({
      accessKeyId: authResponse.accessKeyId,
      accessKeySecret: accessKeySecret,
      type: "access_key",
      endpoint: RPCUtil.getEndpoint(authResponse.endpoint, authResponse.useAccelerate, this._endpointType),
      protocol: this._protocol,
      regionId: this._regionId,
    });
    let ossClient = new OSS(ossConfig);
    let fileObj = new $FileForm.FileField({
      filename: authResponse.objectKey,
      content: request.imageURLObject,
      contentType: "",
    });
    let ossHeader = new $OSS.PostObjectRequestHeader({
      accessKeyId: authResponse.accessKeyId,
      policy: authResponse.encodedPolicy,
      signature: authResponse.signature,
      key: authResponse.objectKey,
      file: fileObj,
      successActionStatus: "201",
    });
    let uploadRequest = new $OSS.PostObjectRequest({
      bucketName: authResponse.bucket,
      header: ossHeader,
    });
    let ossRuntime = new $OSSUtil.RuntimeOptions({ });
    RPCUtil.convert(runtime, ossRuntime);
    await ossClient.postObject(uploadRequest, ossRuntime);
    // Step 2: request final api
    let recognizeIdentityCardreq = new RecognizeIdentityCardRequest({ });
    RPCUtil.convert(request, recognizeIdentityCardreq);
    recognizeIdentityCardreq.imageURL = `http://${authResponse.bucket}.${authResponse.endpoint}/${authResponse.objectKey}`;
    let recognizeIdentityCardResp = await this.recognizeIdentityCard(recognizeIdentityCardreq, runtime);
    return recognizeIdentityCardResp;
  }

  async recognizeLicensePlate(request: RecognizeLicensePlateRequest, runtime: $Util.RuntimeOptions): Promise<RecognizeLicensePlateResponse> {
    return $tea.cast<RecognizeLicensePlateResponse>(await this._request("RecognizeLicensePlate", "HTTPS", "POST", "AK", null, $tea.toMap(request), runtime), new RecognizeLicensePlateResponse({}));
  }

  async recognizeLicensePlateAdvance(request: RecognizeLicensePlateAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<RecognizeLicensePlateResponse> {
    // Step 0: init client
    let accessKeyId = await this._credential.getAccessKeyId();
    let accessKeySecret = await this._credential.getAccessKeySecret();
    let authConfig = new $OpenPlatform.Config({
      accessKeyId: accessKeyId,
      accessKeySecret: accessKeySecret,
      type: "access_key",
      endpoint: "openplatform.aliyuncs.com",
      protocol: this._protocol,
      regionId: this._regionId,
    });
    let authClient = new OpenPlatform(authConfig);
    let authRequest = new $OpenPlatform.AuthorizeFileUploadRequest({
      product: "ocr",
      regionId: this._regionId,
    });
    let authResponse = await authClient.authorizeFileUpload(authRequest, runtime);
    // Step 1: request OSS api to upload file
    let ossConfig = new $OSS.Config({
      accessKeyId: authResponse.accessKeyId,
      accessKeySecret: accessKeySecret,
      type: "access_key",
      endpoint: RPCUtil.getEndpoint(authResponse.endpoint, authResponse.useAccelerate, this._endpointType),
      protocol: this._protocol,
      regionId: this._regionId,
    });
    let ossClient = new OSS(ossConfig);
    let fileObj = new $FileForm.FileField({
      filename: authResponse.objectKey,
      content: request.imageURLObject,
      contentType: "",
    });
    let ossHeader = new $OSS.PostObjectRequestHeader({
      accessKeyId: authResponse.accessKeyId,
      policy: authResponse.encodedPolicy,
      signature: authResponse.signature,
      key: authResponse.objectKey,
      file: fileObj,
      successActionStatus: "201",
    });
    let uploadRequest = new $OSS.PostObjectRequest({
      bucketName: authResponse.bucket,
      header: ossHeader,
    });
    let ossRuntime = new $OSSUtil.RuntimeOptions({ });
    RPCUtil.convert(runtime, ossRuntime);
    await ossClient.postObject(uploadRequest, ossRuntime);
    // Step 2: request final api
    let recognizeLicensePlatereq = new RecognizeLicensePlateRequest({ });
    RPCUtil.convert(request, recognizeLicensePlatereq);
    recognizeLicensePlatereq.imageURL = `http://${authResponse.bucket}.${authResponse.endpoint}/${authResponse.objectKey}`;
    let recognizeLicensePlateResp = await this.recognizeLicensePlate(recognizeLicensePlatereq, runtime);
    return recognizeLicensePlateResp;
  }

  async recognizeTable(request: RecognizeTableRequest, runtime: $Util.RuntimeOptions): Promise<RecognizeTableResponse> {
    return $tea.cast<RecognizeTableResponse>(await this._request("RecognizeTable", "HTTPS", "POST", "AK", null, $tea.toMap(request), runtime), new RecognizeTableResponse({}));
  }

  async recognizeTableAdvance(request: RecognizeTableAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<RecognizeTableResponse> {
    // Step 0: init client
    let accessKeyId = await this._credential.getAccessKeyId();
    let accessKeySecret = await this._credential.getAccessKeySecret();
    let authConfig = new $OpenPlatform.Config({
      accessKeyId: accessKeyId,
      accessKeySecret: accessKeySecret,
      type: "access_key",
      endpoint: "openplatform.aliyuncs.com",
      protocol: this._protocol,
      regionId: this._regionId,
    });
    let authClient = new OpenPlatform(authConfig);
    let authRequest = new $OpenPlatform.AuthorizeFileUploadRequest({
      product: "ocr",
      regionId: this._regionId,
    });
    let authResponse = await authClient.authorizeFileUpload(authRequest, runtime);
    // Step 1: request OSS api to upload file
    let ossConfig = new $OSS.Config({
      accessKeyId: authResponse.accessKeyId,
      accessKeySecret: accessKeySecret,
      type: "access_key",
      endpoint: RPCUtil.getEndpoint(authResponse.endpoint, authResponse.useAccelerate, this._endpointType),
      protocol: this._protocol,
      regionId: this._regionId,
    });
    let ossClient = new OSS(ossConfig);
    let fileObj = new $FileForm.FileField({
      filename: authResponse.objectKey,
      content: request.imageURLObject,
      contentType: "",
    });
    let ossHeader = new $OSS.PostObjectRequestHeader({
      accessKeyId: authResponse.accessKeyId,
      policy: authResponse.encodedPolicy,
      signature: authResponse.signature,
      key: authResponse.objectKey,
      file: fileObj,
      successActionStatus: "201",
    });
    let uploadRequest = new $OSS.PostObjectRequest({
      bucketName: authResponse.bucket,
      header: ossHeader,
    });
    let ossRuntime = new $OSSUtil.RuntimeOptions({ });
    RPCUtil.convert(runtime, ossRuntime);
    await ossClient.postObject(uploadRequest, ossRuntime);
    // Step 2: request final api
    let recognizeTablereq = new RecognizeTableRequest({ });
    RPCUtil.convert(request, recognizeTablereq);
    recognizeTablereq.imageURL = `http://${authResponse.bucket}.${authResponse.endpoint}/${authResponse.objectKey}`;
    let recognizeTableResp = await this.recognizeTable(recognizeTablereq, runtime);
    return recognizeTableResp;
  }

  async recognizeDrivingLicense(request: RecognizeDrivingLicenseRequest, runtime: $Util.RuntimeOptions): Promise<RecognizeDrivingLicenseResponse> {
    return $tea.cast<RecognizeDrivingLicenseResponse>(await this._request("RecognizeDrivingLicense", "HTTPS", "POST", "AK", null, $tea.toMap(request), runtime), new RecognizeDrivingLicenseResponse({}));
  }

  async recognizeDrivingLicenseAdvance(request: RecognizeDrivingLicenseAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<RecognizeDrivingLicenseResponse> {
    // Step 0: init client
    let accessKeyId = await this._credential.getAccessKeyId();
    let accessKeySecret = await this._credential.getAccessKeySecret();
    let authConfig = new $OpenPlatform.Config({
      accessKeyId: accessKeyId,
      accessKeySecret: accessKeySecret,
      type: "access_key",
      endpoint: "openplatform.aliyuncs.com",
      protocol: this._protocol,
      regionId: this._regionId,
    });
    let authClient = new OpenPlatform(authConfig);
    let authRequest = new $OpenPlatform.AuthorizeFileUploadRequest({
      product: "ocr",
      regionId: this._regionId,
    });
    let authResponse = await authClient.authorizeFileUpload(authRequest, runtime);
    // Step 1: request OSS api to upload file
    let ossConfig = new $OSS.Config({
      accessKeyId: authResponse.accessKeyId,
      accessKeySecret: accessKeySecret,
      type: "access_key",
      endpoint: RPCUtil.getEndpoint(authResponse.endpoint, authResponse.useAccelerate, this._endpointType),
      protocol: this._protocol,
      regionId: this._regionId,
    });
    let ossClient = new OSS(ossConfig);
    let fileObj = new $FileForm.FileField({
      filename: authResponse.objectKey,
      content: request.imageURLObject,
      contentType: "",
    });
    let ossHeader = new $OSS.PostObjectRequestHeader({
      accessKeyId: authResponse.accessKeyId,
      policy: authResponse.encodedPolicy,
      signature: authResponse.signature,
      key: authResponse.objectKey,
      file: fileObj,
      successActionStatus: "201",
    });
    let uploadRequest = new $OSS.PostObjectRequest({
      bucketName: authResponse.bucket,
      header: ossHeader,
    });
    let ossRuntime = new $OSSUtil.RuntimeOptions({ });
    RPCUtil.convert(runtime, ossRuntime);
    await ossClient.postObject(uploadRequest, ossRuntime);
    // Step 2: request final api
    let recognizeDrivingLicensereq = new RecognizeDrivingLicenseRequest({ });
    RPCUtil.convert(request, recognizeDrivingLicensereq);
    recognizeDrivingLicensereq.imageURL = `http://${authResponse.bucket}.${authResponse.endpoint}/${authResponse.objectKey}`;
    let recognizeDrivingLicenseResp = await this.recognizeDrivingLicense(recognizeDrivingLicensereq, runtime);
    return recognizeDrivingLicenseResp;
  }

  async recognizeBankCard(request: RecognizeBankCardRequest, runtime: $Util.RuntimeOptions): Promise<RecognizeBankCardResponse> {
    return $tea.cast<RecognizeBankCardResponse>(await this._request("RecognizeBankCard", "HTTPS", "POST", "AK", null, $tea.toMap(request), runtime), new RecognizeBankCardResponse({}));
  }

  async recognizeBankCardAdvance(request: RecognizeBankCardAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<RecognizeBankCardResponse> {
    // Step 0: init client
    let accessKeyId = await this._credential.getAccessKeyId();
    let accessKeySecret = await this._credential.getAccessKeySecret();
    let authConfig = new $OpenPlatform.Config({
      accessKeyId: accessKeyId,
      accessKeySecret: accessKeySecret,
      type: "access_key",
      endpoint: "openplatform.aliyuncs.com",
      protocol: this._protocol,
      regionId: this._regionId,
    });
    let authClient = new OpenPlatform(authConfig);
    let authRequest = new $OpenPlatform.AuthorizeFileUploadRequest({
      product: "ocr",
      regionId: this._regionId,
    });
    let authResponse = await authClient.authorizeFileUpload(authRequest, runtime);
    // Step 1: request OSS api to upload file
    let ossConfig = new $OSS.Config({
      accessKeyId: authResponse.accessKeyId,
      accessKeySecret: accessKeySecret,
      type: "access_key",
      endpoint: RPCUtil.getEndpoint(authResponse.endpoint, authResponse.useAccelerate, this._endpointType),
      protocol: this._protocol,
      regionId: this._regionId,
    });
    let ossClient = new OSS(ossConfig);
    let fileObj = new $FileForm.FileField({
      filename: authResponse.objectKey,
      content: request.imageURLObject,
      contentType: "",
    });
    let ossHeader = new $OSS.PostObjectRequestHeader({
      accessKeyId: authResponse.accessKeyId,
      policy: authResponse.encodedPolicy,
      signature: authResponse.signature,
      key: authResponse.objectKey,
      file: fileObj,
      successActionStatus: "201",
    });
    let uploadRequest = new $OSS.PostObjectRequest({
      bucketName: authResponse.bucket,
      header: ossHeader,
    });
    let ossRuntime = new $OSSUtil.RuntimeOptions({ });
    RPCUtil.convert(runtime, ossRuntime);
    await ossClient.postObject(uploadRequest, ossRuntime);
    // Step 2: request final api
    let recognizeBankCardreq = new RecognizeBankCardRequest({ });
    RPCUtil.convert(request, recognizeBankCardreq);
    recognizeBankCardreq.imageURL = `http://${authResponse.bucket}.${authResponse.endpoint}/${authResponse.objectKey}`;
    let recognizeBankCardResp = await this.recognizeBankCard(recognizeBankCardreq, runtime);
    return recognizeBankCardResp;
  }

  async recognizeTrainTicket(request: RecognizeTrainTicketRequest, runtime: $Util.RuntimeOptions): Promise<RecognizeTrainTicketResponse> {
    return $tea.cast<RecognizeTrainTicketResponse>(await this._request("RecognizeTrainTicket", "HTTPS", "POST", "AK", null, $tea.toMap(request), runtime), new RecognizeTrainTicketResponse({}));
  }

  async recognizeTrainTicketAdvance(request: RecognizeTrainTicketAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<RecognizeTrainTicketResponse> {
    // Step 0: init client
    let accessKeyId = await this._credential.getAccessKeyId();
    let accessKeySecret = await this._credential.getAccessKeySecret();
    let authConfig = new $OpenPlatform.Config({
      accessKeyId: accessKeyId,
      accessKeySecret: accessKeySecret,
      type: "access_key",
      endpoint: "openplatform.aliyuncs.com",
      protocol: this._protocol,
      regionId: this._regionId,
    });
    let authClient = new OpenPlatform(authConfig);
    let authRequest = new $OpenPlatform.AuthorizeFileUploadRequest({
      product: "ocr",
      regionId: this._regionId,
    });
    let authResponse = await authClient.authorizeFileUpload(authRequest, runtime);
    // Step 1: request OSS api to upload file
    let ossConfig = new $OSS.Config({
      accessKeyId: authResponse.accessKeyId,
      accessKeySecret: accessKeySecret,
      type: "access_key",
      endpoint: RPCUtil.getEndpoint(authResponse.endpoint, authResponse.useAccelerate, this._endpointType),
      protocol: this._protocol,
      regionId: this._regionId,
    });
    let ossClient = new OSS(ossConfig);
    let fileObj = new $FileForm.FileField({
      filename: authResponse.objectKey,
      content: request.imageURLObject,
      contentType: "",
    });
    let ossHeader = new $OSS.PostObjectRequestHeader({
      accessKeyId: authResponse.accessKeyId,
      policy: authResponse.encodedPolicy,
      signature: authResponse.signature,
      key: authResponse.objectKey,
      file: fileObj,
      successActionStatus: "201",
    });
    let uploadRequest = new $OSS.PostObjectRequest({
      bucketName: authResponse.bucket,
      header: ossHeader,
    });
    let ossRuntime = new $OSSUtil.RuntimeOptions({ });
    RPCUtil.convert(runtime, ossRuntime);
    await ossClient.postObject(uploadRequest, ossRuntime);
    // Step 2: request final api
    let recognizeTrainTicketreq = new RecognizeTrainTicketRequest({ });
    RPCUtil.convert(request, recognizeTrainTicketreq);
    recognizeTrainTicketreq.imageURL = `http://${authResponse.bucket}.${authResponse.endpoint}/${authResponse.objectKey}`;
    let recognizeTrainTicketResp = await this.recognizeTrainTicket(recognizeTrainTicketreq, runtime);
    return recognizeTrainTicketResp;
  }

  async recognizeDriverLicense(request: RecognizeDriverLicenseRequest, runtime: $Util.RuntimeOptions): Promise<RecognizeDriverLicenseResponse> {
    return $tea.cast<RecognizeDriverLicenseResponse>(await this._request("RecognizeDriverLicense", "HTTPS", "POST", "AK", null, $tea.toMap(request), runtime), new RecognizeDriverLicenseResponse({}));
  }

  async recognizeDriverLicenseAdvance(request: RecognizeDriverLicenseAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<RecognizeDriverLicenseResponse> {
    // Step 0: init client
    let accessKeyId = await this._credential.getAccessKeyId();
    let accessKeySecret = await this._credential.getAccessKeySecret();
    let authConfig = new $OpenPlatform.Config({
      accessKeyId: accessKeyId,
      accessKeySecret: accessKeySecret,
      type: "access_key",
      endpoint: "openplatform.aliyuncs.com",
      protocol: this._protocol,
      regionId: this._regionId,
    });
    let authClient = new OpenPlatform(authConfig);
    let authRequest = new $OpenPlatform.AuthorizeFileUploadRequest({
      product: "ocr",
      regionId: this._regionId,
    });
    let authResponse = await authClient.authorizeFileUpload(authRequest, runtime);
    // Step 1: request OSS api to upload file
    let ossConfig = new $OSS.Config({
      accessKeyId: authResponse.accessKeyId,
      accessKeySecret: accessKeySecret,
      type: "access_key",
      endpoint: RPCUtil.getEndpoint(authResponse.endpoint, authResponse.useAccelerate, this._endpointType),
      protocol: this._protocol,
      regionId: this._regionId,
    });
    let ossClient = new OSS(ossConfig);
    let fileObj = new $FileForm.FileField({
      filename: authResponse.objectKey,
      content: request.imageURLObject,
      contentType: "",
    });
    let ossHeader = new $OSS.PostObjectRequestHeader({
      accessKeyId: authResponse.accessKeyId,
      policy: authResponse.encodedPolicy,
      signature: authResponse.signature,
      key: authResponse.objectKey,
      file: fileObj,
      successActionStatus: "201",
    });
    let uploadRequest = new $OSS.PostObjectRequest({
      bucketName: authResponse.bucket,
      header: ossHeader,
    });
    let ossRuntime = new $OSSUtil.RuntimeOptions({ });
    RPCUtil.convert(runtime, ossRuntime);
    await ossClient.postObject(uploadRequest, ossRuntime);
    // Step 2: request final api
    let recognizeDriverLicensereq = new RecognizeDriverLicenseRequest({ });
    RPCUtil.convert(request, recognizeDriverLicensereq);
    recognizeDriverLicensereq.imageURL = `http://${authResponse.bucket}.${authResponse.endpoint}/${authResponse.objectKey}`;
    let recognizeDriverLicenseResp = await this.recognizeDriverLicense(recognizeDriverLicensereq, runtime);
    return recognizeDriverLicenseResp;
  }

  async recognizeAccountPage(request: RecognizeAccountPageRequest, runtime: $Util.RuntimeOptions): Promise<RecognizeAccountPageResponse> {
    return $tea.cast<RecognizeAccountPageResponse>(await this._request("RecognizeAccountPage", "HTTPS", "POST", "AK", null, $tea.toMap(request), runtime), new RecognizeAccountPageResponse({}));
  }

  async recognizeAccountPageAdvance(request: RecognizeAccountPageAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<RecognizeAccountPageResponse> {
    // Step 0: init client
    let accessKeyId = await this._credential.getAccessKeyId();
    let accessKeySecret = await this._credential.getAccessKeySecret();
    let authConfig = new $OpenPlatform.Config({
      accessKeyId: accessKeyId,
      accessKeySecret: accessKeySecret,
      type: "access_key",
      endpoint: "openplatform.aliyuncs.com",
      protocol: this._protocol,
      regionId: this._regionId,
    });
    let authClient = new OpenPlatform(authConfig);
    let authRequest = new $OpenPlatform.AuthorizeFileUploadRequest({
      product: "ocr",
      regionId: this._regionId,
    });
    let authResponse = await authClient.authorizeFileUpload(authRequest, runtime);
    // Step 1: request OSS api to upload file
    let ossConfig = new $OSS.Config({
      accessKeyId: authResponse.accessKeyId,
      accessKeySecret: accessKeySecret,
      type: "access_key",
      endpoint: RPCUtil.getEndpoint(authResponse.endpoint, authResponse.useAccelerate, this._endpointType),
      protocol: this._protocol,
      regionId: this._regionId,
    });
    let ossClient = new OSS(ossConfig);
    let fileObj = new $FileForm.FileField({
      filename: authResponse.objectKey,
      content: request.imageURLObject,
      contentType: "",
    });
    let ossHeader = new $OSS.PostObjectRequestHeader({
      accessKeyId: authResponse.accessKeyId,
      policy: authResponse.encodedPolicy,
      signature: authResponse.signature,
      key: authResponse.objectKey,
      file: fileObj,
      successActionStatus: "201",
    });
    let uploadRequest = new $OSS.PostObjectRequest({
      bucketName: authResponse.bucket,
      header: ossHeader,
    });
    let ossRuntime = new $OSSUtil.RuntimeOptions({ });
    RPCUtil.convert(runtime, ossRuntime);
    await ossClient.postObject(uploadRequest, ossRuntime);
    // Step 2: request final api
    let recognizeAccountPagereq = new RecognizeAccountPageRequest({ });
    RPCUtil.convert(request, recognizeAccountPagereq);
    recognizeAccountPagereq.imageURL = `http://${authResponse.bucket}.${authResponse.endpoint}/${authResponse.objectKey}`;
    let recognizeAccountPageResp = await this.recognizeAccountPage(recognizeAccountPagereq, runtime);
    return recognizeAccountPageResp;
  }

  async recognizeStamp(request: RecognizeStampRequest, runtime: $Util.RuntimeOptions): Promise<RecognizeStampResponse> {
    return $tea.cast<RecognizeStampResponse>(await this._request("RecognizeStamp", "HTTPS", "POST", "AK", null, $tea.toMap(request), runtime), new RecognizeStampResponse({}));
  }

  async recognizeStampAdvance(request: RecognizeStampAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<RecognizeStampResponse> {
    // Step 0: init client
    let accessKeyId = await this._credential.getAccessKeyId();
    let accessKeySecret = await this._credential.getAccessKeySecret();
    let authConfig = new $OpenPlatform.Config({
      accessKeyId: accessKeyId,
      accessKeySecret: accessKeySecret,
      type: "access_key",
      endpoint: "openplatform.aliyuncs.com",
      protocol: this._protocol,
      regionId: this._regionId,
    });
    let authClient = new OpenPlatform(authConfig);
    let authRequest = new $OpenPlatform.AuthorizeFileUploadRequest({
      product: "ocr",
      regionId: this._regionId,
    });
    let authResponse = await authClient.authorizeFileUpload(authRequest, runtime);
    // Step 1: request OSS api to upload file
    let ossConfig = new $OSS.Config({
      accessKeyId: authResponse.accessKeyId,
      accessKeySecret: accessKeySecret,
      type: "access_key",
      endpoint: RPCUtil.getEndpoint(authResponse.endpoint, authResponse.useAccelerate, this._endpointType),
      protocol: this._protocol,
      regionId: this._regionId,
    });
    let ossClient = new OSS(ossConfig);
    let fileObj = new $FileForm.FileField({
      filename: authResponse.objectKey,
      content: request.imageURLObject,
      contentType: "",
    });
    let ossHeader = new $OSS.PostObjectRequestHeader({
      accessKeyId: authResponse.accessKeyId,
      policy: authResponse.encodedPolicy,
      signature: authResponse.signature,
      key: authResponse.objectKey,
      file: fileObj,
      successActionStatus: "201",
    });
    let uploadRequest = new $OSS.PostObjectRequest({
      bucketName: authResponse.bucket,
      header: ossHeader,
    });
    let ossRuntime = new $OSSUtil.RuntimeOptions({ });
    RPCUtil.convert(runtime, ossRuntime);
    await ossClient.postObject(uploadRequest, ossRuntime);
    // Step 2: request final api
    let recognizeStampreq = new RecognizeStampRequest({ });
    RPCUtil.convert(request, recognizeStampreq);
    recognizeStampreq.imageURL = `http://${authResponse.bucket}.${authResponse.endpoint}/${authResponse.objectKey}`;
    let recognizeStampResp = await this.recognizeStamp(recognizeStampreq, runtime);
    return recognizeStampResp;
  }

  async recognizeBusinessCard(request: RecognizeBusinessCardRequest, runtime: $Util.RuntimeOptions): Promise<RecognizeBusinessCardResponse> {
    return $tea.cast<RecognizeBusinessCardResponse>(await this._request("RecognizeBusinessCard", "HTTPS", "POST", "AK", null, $tea.toMap(request), runtime), new RecognizeBusinessCardResponse({}));
  }

  async recognizeBusinessCardAdvance(request: RecognizeBusinessCardAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<RecognizeBusinessCardResponse> {
    // Step 0: init client
    let accessKeyId = await this._credential.getAccessKeyId();
    let accessKeySecret = await this._credential.getAccessKeySecret();
    let authConfig = new $OpenPlatform.Config({
      accessKeyId: accessKeyId,
      accessKeySecret: accessKeySecret,
      type: "access_key",
      endpoint: "openplatform.aliyuncs.com",
      protocol: this._protocol,
      regionId: this._regionId,
    });
    let authClient = new OpenPlatform(authConfig);
    let authRequest = new $OpenPlatform.AuthorizeFileUploadRequest({
      product: "ocr",
      regionId: this._regionId,
    });
    let authResponse = await authClient.authorizeFileUpload(authRequest, runtime);
    // Step 1: request OSS api to upload file
    let ossConfig = new $OSS.Config({
      accessKeyId: authResponse.accessKeyId,
      accessKeySecret: accessKeySecret,
      type: "access_key",
      endpoint: RPCUtil.getEndpoint(authResponse.endpoint, authResponse.useAccelerate, this._endpointType),
      protocol: this._protocol,
      regionId: this._regionId,
    });
    let ossClient = new OSS(ossConfig);
    let fileObj = new $FileForm.FileField({
      filename: authResponse.objectKey,
      content: request.imageURLObject,
      contentType: "",
    });
    let ossHeader = new $OSS.PostObjectRequestHeader({
      accessKeyId: authResponse.accessKeyId,
      policy: authResponse.encodedPolicy,
      signature: authResponse.signature,
      key: authResponse.objectKey,
      file: fileObj,
      successActionStatus: "201",
    });
    let uploadRequest = new $OSS.PostObjectRequest({
      bucketName: authResponse.bucket,
      header: ossHeader,
    });
    let ossRuntime = new $OSSUtil.RuntimeOptions({ });
    RPCUtil.convert(runtime, ossRuntime);
    await ossClient.postObject(uploadRequest, ossRuntime);
    // Step 2: request final api
    let recognizeBusinessCardreq = new RecognizeBusinessCardRequest({ });
    RPCUtil.convert(request, recognizeBusinessCardreq);
    recognizeBusinessCardreq.imageURL = `http://${authResponse.bucket}.${authResponse.endpoint}/${authResponse.objectKey}`;
    let recognizeBusinessCardResp = await this.recognizeBusinessCard(recognizeBusinessCardreq, runtime);
    return recognizeBusinessCardResp;
  }

  async recognizeVINCode(request: RecognizeVINCodeRequest, runtime: $Util.RuntimeOptions): Promise<RecognizeVINCodeResponse> {
    return $tea.cast<RecognizeVINCodeResponse>(await this._request("RecognizeVINCode", "HTTPS", "POST", "AK", $tea.toMap(request), null, runtime), new RecognizeVINCodeResponse({}));
  }

  async recognizeVINCodeAdvance(request: RecognizeVINCodeAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<RecognizeVINCodeResponse> {
    // Step 0: init client
    let accessKeyId = await this._credential.getAccessKeyId();
    let accessKeySecret = await this._credential.getAccessKeySecret();
    let authConfig = new $OpenPlatform.Config({
      accessKeyId: accessKeyId,
      accessKeySecret: accessKeySecret,
      type: "access_key",
      endpoint: "openplatform.aliyuncs.com",
      protocol: this._protocol,
      regionId: this._regionId,
    });
    let authClient = new OpenPlatform(authConfig);
    let authRequest = new $OpenPlatform.AuthorizeFileUploadRequest({
      product: "ocr",
      regionId: this._regionId,
    });
    let authResponse = await authClient.authorizeFileUpload(authRequest, runtime);
    // Step 1: request OSS api to upload file
    let ossConfig = new $OSS.Config({
      accessKeyId: authResponse.accessKeyId,
      accessKeySecret: accessKeySecret,
      type: "access_key",
      endpoint: RPCUtil.getEndpoint(authResponse.endpoint, authResponse.useAccelerate, this._endpointType),
      protocol: this._protocol,
      regionId: this._regionId,
    });
    let ossClient = new OSS(ossConfig);
    let fileObj = new $FileForm.FileField({
      filename: authResponse.objectKey,
      content: request.imageURLObject,
      contentType: "",
    });
    let ossHeader = new $OSS.PostObjectRequestHeader({
      accessKeyId: authResponse.accessKeyId,
      policy: authResponse.encodedPolicy,
      signature: authResponse.signature,
      key: authResponse.objectKey,
      file: fileObj,
      successActionStatus: "201",
    });
    let uploadRequest = new $OSS.PostObjectRequest({
      bucketName: authResponse.bucket,
      header: ossHeader,
    });
    let ossRuntime = new $OSSUtil.RuntimeOptions({ });
    RPCUtil.convert(runtime, ossRuntime);
    await ossClient.postObject(uploadRequest, ossRuntime);
    // Step 2: request final api
    let recognizeVINCodereq = new RecognizeVINCodeRequest({ });
    RPCUtil.convert(request, recognizeVINCodereq);
    recognizeVINCodereq.imageURL = `http://${authResponse.bucket}.${authResponse.endpoint}/${authResponse.objectKey}`;
    let recognizeVINCodeResp = await this.recognizeVINCode(recognizeVINCodereq, runtime);
    return recognizeVINCodeResp;
  }

  async recognizeBusinessLicense(request: RecognizeBusinessLicenseRequest, runtime: $Util.RuntimeOptions): Promise<RecognizeBusinessLicenseResponse> {
    return $tea.cast<RecognizeBusinessLicenseResponse>(await this._request("RecognizeBusinessLicense", "HTTPS", "POST", "AK", null, $tea.toMap(request), runtime), new RecognizeBusinessLicenseResponse({}));
  }

  async recognizeBusinessLicenseAdvance(request: RecognizeBusinessLicenseAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<RecognizeBusinessLicenseResponse> {
    // Step 0: init client
    let accessKeyId = await this._credential.getAccessKeyId();
    let accessKeySecret = await this._credential.getAccessKeySecret();
    let authConfig = new $OpenPlatform.Config({
      accessKeyId: accessKeyId,
      accessKeySecret: accessKeySecret,
      type: "access_key",
      endpoint: "openplatform.aliyuncs.com",
      protocol: this._protocol,
      regionId: this._regionId,
    });
    let authClient = new OpenPlatform(authConfig);
    let authRequest = new $OpenPlatform.AuthorizeFileUploadRequest({
      product: "ocr",
      regionId: this._regionId,
    });
    let authResponse = await authClient.authorizeFileUpload(authRequest, runtime);
    // Step 1: request OSS api to upload file
    let ossConfig = new $OSS.Config({
      accessKeyId: authResponse.accessKeyId,
      accessKeySecret: accessKeySecret,
      type: "access_key",
      endpoint: RPCUtil.getEndpoint(authResponse.endpoint, authResponse.useAccelerate, this._endpointType),
      protocol: this._protocol,
      regionId: this._regionId,
    });
    let ossClient = new OSS(ossConfig);
    let fileObj = new $FileForm.FileField({
      filename: authResponse.objectKey,
      content: request.imageURLObject,
      contentType: "",
    });
    let ossHeader = new $OSS.PostObjectRequestHeader({
      accessKeyId: authResponse.accessKeyId,
      policy: authResponse.encodedPolicy,
      signature: authResponse.signature,
      key: authResponse.objectKey,
      file: fileObj,
      successActionStatus: "201",
    });
    let uploadRequest = new $OSS.PostObjectRequest({
      bucketName: authResponse.bucket,
      header: ossHeader,
    });
    let ossRuntime = new $OSSUtil.RuntimeOptions({ });
    RPCUtil.convert(runtime, ossRuntime);
    await ossClient.postObject(uploadRequest, ossRuntime);
    // Step 2: request final api
    let recognizeBusinessLicensereq = new RecognizeBusinessLicenseRequest({ });
    RPCUtil.convert(request, recognizeBusinessLicensereq);
    recognizeBusinessLicensereq.imageURL = `http://${authResponse.bucket}.${authResponse.endpoint}/${authResponse.objectKey}`;
    let recognizeBusinessLicenseResp = await this.recognizeBusinessLicense(recognizeBusinessLicensereq, runtime);
    return recognizeBusinessLicenseResp;
  }

  getUserAgent(): string {
    let userAgent = Util.getUserAgent(this._userAgent);
    return userAgent;
  }

  async getAccessKeyId(): Promise<string> {
    if (Util.isUnset(this._credential)) {
      return "";
    }

    let accessKeyId = await this._credential.getAccessKeyId();
    return accessKeyId;
  }

  async getAccessKeySecret(): Promise<string> {
    if (Util.isUnset(this._credential)) {
      return "";
    }

    let secret = await this._credential.getAccessKeySecret();
    return secret;
  }

}
