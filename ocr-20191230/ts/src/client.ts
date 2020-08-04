// This file is auto-generated, don't edit it
import OSS, * as $OSS from '@alicloud/oss-client';
import OpenPlatform, * as $OpenPlatform from '@alicloud/openplatform20191219';
import RPCUtil from '@alicloud/rpc-util';
import RPC, * as $RPC from '@alicloud/rpc-client';
import OSSUtil, * as $OSSUtil from '@alicloud/oss-util';
import Util, * as $Util from '@alicloud/tea-util';
import FileForm, * as $FileForm from '@alicloud/tea-fileform';
import EndpointUtil from '@alicloud/endpoint-util';
import { Readable } from 'stream';
import * as $tea from '@alicloud/tea-typescript';

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
      bandBoxes: { 'type': 'array', 'itemType': 'number' },
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
      boxes: { 'type': 'array', 'itemType': 'number' },
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
      invoiceCodes: { 'type': 'array', 'itemType': 'number' },
      invoiceNoes: { 'type': 'array', 'itemType': 'number' },
      invoiceDates: { 'type': 'array', 'itemType': 'number' },
      invoiceFakeCodes: { 'type': 'array', 'itemType': 'number' },
      payerNames: { 'type': 'array', 'itemType': 'number' },
      payerRegisterNoes: { 'type': 'array', 'itemType': 'number' },
      payerAddresses: { 'type': 'array', 'itemType': 'number' },
      payerBankNames: { 'type': 'array', 'itemType': 'number' },
      withoutTaxAmounts: { 'type': 'array', 'itemType': 'number' },
      taxAmounts: { 'type': 'array', 'itemType': 'number' },
      sumAmounts: { 'type': 'array', 'itemType': 'number' },
      invoiceAmounts: { 'type': 'array', 'itemType': 'number' },
      payeeNames: { 'type': 'array', 'itemType': 'number' },
      payeeRegisterNoes: { 'type': 'array', 'itemType': 'number' },
      payeeAddresses: { 'type': 'array', 'itemType': 'number' },
      payeeBankNames: { 'type': 'array', 'itemType': 'number' },
      payees: { 'type': 'array', 'itemType': 'number' },
      checkers: { 'type': 'array', 'itemType': 'number' },
      clerks: { 'type': 'array', 'itemType': 'number' },
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
  tableRows: RecognizeTableResponseDataTablesTableRows[];
  head: string[];
  tail: string[];
  static names(): { [key: string]: string } {
    return {
      tableRows: 'TableRows',
      head: 'Head',
      tail: 'Tail',
    };
  }

  static types(): { [key: string]: any } {
    return {
      tableRows: { 'type': 'array', 'itemType': RecognizeTableResponseDataTablesTableRows },
      head: { 'type': 'array', 'itemType': 'string' },
      tail: { 'type': 'array', 'itemType': 'string' },
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


export default class Client extends RPC {

  constructor(config: $RPC.Config) {
    super(config);
    this._endpointRule = "regional";
    this.checkConfig(config);
    this._endpoint = this.getEndpoint("ocr", this._regionId, this._endpointRule, this._network, this._suffix, this._endpointMap, this._endpoint);
  }


  async getAsyncJobResult(request: GetAsyncJobResultRequest, runtime: $Util.RuntimeOptions): Promise<GetAsyncJobResultResponse> {
    Util.validateModel(request);
    return $tea.cast<GetAsyncJobResultResponse>(await this.doRequest("GetAsyncJobResult", "HTTPS", "POST", "2019-12-30", "AK", null, $tea.toMap(request), runtime), new GetAsyncJobResultResponse({}));
  }

  async trimDocument(request: TrimDocumentRequest, runtime: $Util.RuntimeOptions): Promise<TrimDocumentResponse> {
    Util.validateModel(request);
    return $tea.cast<TrimDocumentResponse>(await this.doRequest("TrimDocument", "HTTPS", "POST", "2019-12-30", "AK", null, $tea.toMap(request), runtime), new TrimDocumentResponse({}));
  }

  async trimDocumentAdvance(request: TrimDocumentAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<TrimDocumentResponse> {
    // Step 0: init client
    let accessKeyId = await this._credential.getAccessKeyId();
    let accessKeySecret = await this._credential.getAccessKeySecret();
    let authConfig = new $RPC.Config({
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
    let authResponse = await authClient.authorizeFileUploadWithOptions(authRequest, runtime);
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
    Util.validateModel(request);
    return $tea.cast<RecognizeChinapassportResponse>(await this.doRequest("RecognizeChinapassport", "HTTPS", "POST", "2019-12-30", "AK", null, $tea.toMap(request), runtime), new RecognizeChinapassportResponse({}));
  }

  async recognizeChinapassportAdvance(request: RecognizeChinapassportAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<RecognizeChinapassportResponse> {
    // Step 0: init client
    let accessKeyId = await this._credential.getAccessKeyId();
    let accessKeySecret = await this._credential.getAccessKeySecret();
    let authConfig = new $RPC.Config({
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
    let authResponse = await authClient.authorizeFileUploadWithOptions(authRequest, runtime);
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
    Util.validateModel(request);
    return $tea.cast<RecognizeVerificationcodeResponse>(await this.doRequest("RecognizeVerificationcode", "HTTPS", "POST", "2019-12-30", "AK", null, $tea.toMap(request), runtime), new RecognizeVerificationcodeResponse({}));
  }

  async recognizeVerificationcodeAdvance(request: RecognizeVerificationcodeAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<RecognizeVerificationcodeResponse> {
    // Step 0: init client
    let accessKeyId = await this._credential.getAccessKeyId();
    let accessKeySecret = await this._credential.getAccessKeySecret();
    let authConfig = new $RPC.Config({
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
    let authResponse = await authClient.authorizeFileUploadWithOptions(authRequest, runtime);
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
    Util.validateModel(request);
    return $tea.cast<RecognizePassportMRZResponse>(await this.doRequest("RecognizePassportMRZ", "HTTPS", "POST", "2019-12-30", "AK", null, $tea.toMap(request), runtime), new RecognizePassportMRZResponse({}));
  }

  async recognizePassportMRZAdvance(request: RecognizePassportMRZAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<RecognizePassportMRZResponse> {
    // Step 0: init client
    let accessKeyId = await this._credential.getAccessKeyId();
    let accessKeySecret = await this._credential.getAccessKeySecret();
    let authConfig = new $RPC.Config({
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
    let authResponse = await authClient.authorizeFileUploadWithOptions(authRequest, runtime);
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
    Util.validateModel(request);
    return $tea.cast<RecognizeTakeoutOrderResponse>(await this.doRequest("RecognizeTakeoutOrder", "HTTPS", "POST", "2019-12-30", "AK", null, $tea.toMap(request), runtime), new RecognizeTakeoutOrderResponse({}));
  }

  async recognizeTakeoutOrderAdvance(request: RecognizeTakeoutOrderAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<RecognizeTakeoutOrderResponse> {
    // Step 0: init client
    let accessKeyId = await this._credential.getAccessKeyId();
    let accessKeySecret = await this._credential.getAccessKeySecret();
    let authConfig = new $RPC.Config({
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
    let authResponse = await authClient.authorizeFileUploadWithOptions(authRequest, runtime);
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
    Util.validateModel(request);
    return $tea.cast<RecognizeQrCodeResponse>(await this.doRequest("RecognizeQrCode", "HTTPS", "POST", "2019-12-30", "AK", null, $tea.toMap(request), runtime), new RecognizeQrCodeResponse({}));
  }

  async recognizeVATInvoice(request: RecognizeVATInvoiceRequest, runtime: $Util.RuntimeOptions): Promise<RecognizeVATInvoiceResponse> {
    Util.validateModel(request);
    return $tea.cast<RecognizeVATInvoiceResponse>(await this.doRequest("RecognizeVATInvoice", "HTTPS", "POST", "2019-12-30", "AK", null, $tea.toMap(request), runtime), new RecognizeVATInvoiceResponse({}));
  }

  async recognizeVATInvoiceAdvance(request: RecognizeVATInvoiceAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<RecognizeVATInvoiceResponse> {
    // Step 0: init client
    let accessKeyId = await this._credential.getAccessKeyId();
    let accessKeySecret = await this._credential.getAccessKeySecret();
    let authConfig = new $RPC.Config({
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
    let authResponse = await authClient.authorizeFileUploadWithOptions(authRequest, runtime);
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
    Util.validateModel(request);
    return $tea.cast<RecognizeCharacterResponse>(await this.doRequest("RecognizeCharacter", "HTTPS", "POST", "2019-12-30", "AK", null, $tea.toMap(request), runtime), new RecognizeCharacterResponse({}));
  }

  async recognizeCharacterAdvance(request: RecognizeCharacterAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<RecognizeCharacterResponse> {
    // Step 0: init client
    let accessKeyId = await this._credential.getAccessKeyId();
    let accessKeySecret = await this._credential.getAccessKeySecret();
    let authConfig = new $RPC.Config({
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
    let authResponse = await authClient.authorizeFileUploadWithOptions(authRequest, runtime);
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
    Util.validateModel(request);
    return $tea.cast<RecognizeTaxiInvoiceResponse>(await this.doRequest("RecognizeTaxiInvoice", "HTTPS", "POST", "2019-12-30", "AK", null, $tea.toMap(request), runtime), new RecognizeTaxiInvoiceResponse({}));
  }

  async recognizeTaxiInvoiceAdvance(request: RecognizeTaxiInvoiceAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<RecognizeTaxiInvoiceResponse> {
    // Step 0: init client
    let accessKeyId = await this._credential.getAccessKeyId();
    let accessKeySecret = await this._credential.getAccessKeySecret();
    let authConfig = new $RPC.Config({
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
    let authResponse = await authClient.authorizeFileUploadWithOptions(authRequest, runtime);
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
    Util.validateModel(request);
    return $tea.cast<RecognizeIdentityCardResponse>(await this.doRequest("RecognizeIdentityCard", "HTTPS", "POST", "2019-12-30", "AK", null, $tea.toMap(request), runtime), new RecognizeIdentityCardResponse({}));
  }

  async recognizeIdentityCardAdvance(request: RecognizeIdentityCardAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<RecognizeIdentityCardResponse> {
    // Step 0: init client
    let accessKeyId = await this._credential.getAccessKeyId();
    let accessKeySecret = await this._credential.getAccessKeySecret();
    let authConfig = new $RPC.Config({
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
    let authResponse = await authClient.authorizeFileUploadWithOptions(authRequest, runtime);
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
    Util.validateModel(request);
    return $tea.cast<RecognizeLicensePlateResponse>(await this.doRequest("RecognizeLicensePlate", "HTTPS", "POST", "2019-12-30", "AK", null, $tea.toMap(request), runtime), new RecognizeLicensePlateResponse({}));
  }

  async recognizeLicensePlateAdvance(request: RecognizeLicensePlateAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<RecognizeLicensePlateResponse> {
    // Step 0: init client
    let accessKeyId = await this._credential.getAccessKeyId();
    let accessKeySecret = await this._credential.getAccessKeySecret();
    let authConfig = new $RPC.Config({
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
    let authResponse = await authClient.authorizeFileUploadWithOptions(authRequest, runtime);
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
    Util.validateModel(request);
    return $tea.cast<RecognizeTableResponse>(await this.doRequest("RecognizeTable", "HTTPS", "POST", "2019-12-30", "AK", null, $tea.toMap(request), runtime), new RecognizeTableResponse({}));
  }

  async recognizeTableAdvance(request: RecognizeTableAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<RecognizeTableResponse> {
    // Step 0: init client
    let accessKeyId = await this._credential.getAccessKeyId();
    let accessKeySecret = await this._credential.getAccessKeySecret();
    let authConfig = new $RPC.Config({
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
    let authResponse = await authClient.authorizeFileUploadWithOptions(authRequest, runtime);
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
    Util.validateModel(request);
    return $tea.cast<RecognizeDrivingLicenseResponse>(await this.doRequest("RecognizeDrivingLicense", "HTTPS", "POST", "2019-12-30", "AK", null, $tea.toMap(request), runtime), new RecognizeDrivingLicenseResponse({}));
  }

  async recognizeDrivingLicenseAdvance(request: RecognizeDrivingLicenseAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<RecognizeDrivingLicenseResponse> {
    // Step 0: init client
    let accessKeyId = await this._credential.getAccessKeyId();
    let accessKeySecret = await this._credential.getAccessKeySecret();
    let authConfig = new $RPC.Config({
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
    let authResponse = await authClient.authorizeFileUploadWithOptions(authRequest, runtime);
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
    Util.validateModel(request);
    return $tea.cast<RecognizeBankCardResponse>(await this.doRequest("RecognizeBankCard", "HTTPS", "POST", "2019-12-30", "AK", null, $tea.toMap(request), runtime), new RecognizeBankCardResponse({}));
  }

  async recognizeBankCardAdvance(request: RecognizeBankCardAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<RecognizeBankCardResponse> {
    // Step 0: init client
    let accessKeyId = await this._credential.getAccessKeyId();
    let accessKeySecret = await this._credential.getAccessKeySecret();
    let authConfig = new $RPC.Config({
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
    let authResponse = await authClient.authorizeFileUploadWithOptions(authRequest, runtime);
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
    Util.validateModel(request);
    return $tea.cast<RecognizeTrainTicketResponse>(await this.doRequest("RecognizeTrainTicket", "HTTPS", "POST", "2019-12-30", "AK", null, $tea.toMap(request), runtime), new RecognizeTrainTicketResponse({}));
  }

  async recognizeTrainTicketAdvance(request: RecognizeTrainTicketAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<RecognizeTrainTicketResponse> {
    // Step 0: init client
    let accessKeyId = await this._credential.getAccessKeyId();
    let accessKeySecret = await this._credential.getAccessKeySecret();
    let authConfig = new $RPC.Config({
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
    let authResponse = await authClient.authorizeFileUploadWithOptions(authRequest, runtime);
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
    Util.validateModel(request);
    return $tea.cast<RecognizeDriverLicenseResponse>(await this.doRequest("RecognizeDriverLicense", "HTTPS", "POST", "2019-12-30", "AK", null, $tea.toMap(request), runtime), new RecognizeDriverLicenseResponse({}));
  }

  async recognizeDriverLicenseAdvance(request: RecognizeDriverLicenseAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<RecognizeDriverLicenseResponse> {
    // Step 0: init client
    let accessKeyId = await this._credential.getAccessKeyId();
    let accessKeySecret = await this._credential.getAccessKeySecret();
    let authConfig = new $RPC.Config({
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
    let authResponse = await authClient.authorizeFileUploadWithOptions(authRequest, runtime);
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
    Util.validateModel(request);
    return $tea.cast<RecognizeAccountPageResponse>(await this.doRequest("RecognizeAccountPage", "HTTPS", "POST", "2019-12-30", "AK", null, $tea.toMap(request), runtime), new RecognizeAccountPageResponse({}));
  }

  async recognizeAccountPageAdvance(request: RecognizeAccountPageAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<RecognizeAccountPageResponse> {
    // Step 0: init client
    let accessKeyId = await this._credential.getAccessKeyId();
    let accessKeySecret = await this._credential.getAccessKeySecret();
    let authConfig = new $RPC.Config({
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
    let authResponse = await authClient.authorizeFileUploadWithOptions(authRequest, runtime);
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
    Util.validateModel(request);
    return $tea.cast<RecognizeStampResponse>(await this.doRequest("RecognizeStamp", "HTTPS", "POST", "2019-12-30", "AK", null, $tea.toMap(request), runtime), new RecognizeStampResponse({}));
  }

  async recognizeStampAdvance(request: RecognizeStampAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<RecognizeStampResponse> {
    // Step 0: init client
    let accessKeyId = await this._credential.getAccessKeyId();
    let accessKeySecret = await this._credential.getAccessKeySecret();
    let authConfig = new $RPC.Config({
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
    let authResponse = await authClient.authorizeFileUploadWithOptions(authRequest, runtime);
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
    Util.validateModel(request);
    return $tea.cast<RecognizeBusinessCardResponse>(await this.doRequest("RecognizeBusinessCard", "HTTPS", "POST", "2019-12-30", "AK", null, $tea.toMap(request), runtime), new RecognizeBusinessCardResponse({}));
  }

  async recognizeBusinessCardAdvance(request: RecognizeBusinessCardAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<RecognizeBusinessCardResponse> {
    // Step 0: init client
    let accessKeyId = await this._credential.getAccessKeyId();
    let accessKeySecret = await this._credential.getAccessKeySecret();
    let authConfig = new $RPC.Config({
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
    let authResponse = await authClient.authorizeFileUploadWithOptions(authRequest, runtime);
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
    Util.validateModel(request);
    return $tea.cast<RecognizeVINCodeResponse>(await this.doRequest("RecognizeVINCode", "HTTPS", "POST", "2019-12-30", "AK", null, $tea.toMap(request), runtime), new RecognizeVINCodeResponse({}));
  }

  async recognizeVINCodeAdvance(request: RecognizeVINCodeAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<RecognizeVINCodeResponse> {
    // Step 0: init client
    let accessKeyId = await this._credential.getAccessKeyId();
    let accessKeySecret = await this._credential.getAccessKeySecret();
    let authConfig = new $RPC.Config({
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
    let authResponse = await authClient.authorizeFileUploadWithOptions(authRequest, runtime);
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
    Util.validateModel(request);
    return $tea.cast<RecognizeBusinessLicenseResponse>(await this.doRequest("RecognizeBusinessLicense", "HTTPS", "POST", "2019-12-30", "AK", null, $tea.toMap(request), runtime), new RecognizeBusinessLicenseResponse({}));
  }

  async recognizeBusinessLicenseAdvance(request: RecognizeBusinessLicenseAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<RecognizeBusinessLicenseResponse> {
    // Step 0: init client
    let accessKeyId = await this._credential.getAccessKeyId();
    let accessKeySecret = await this._credential.getAccessKeySecret();
    let authConfig = new $RPC.Config({
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
    let authResponse = await authClient.authorizeFileUploadWithOptions(authRequest, runtime);
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
