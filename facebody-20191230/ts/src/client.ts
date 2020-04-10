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

export class AddFaceEntityRequest extends $tea.Model {
  dbName: string;
  entityId: string;
  labels?: string;
  static names(): { [key: string]: string } {
    return {
      dbName: 'DbName',
      entityId: 'EntityId',
      labels: 'Labels',
    };
  }

  static types(): { [key: string]: any } {
    return {
      dbName: 'string',
      entityId: 'string',
      labels: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddFaceEntityResponse extends $tea.Model {
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

export class DeleteFaceEntityRequest extends $tea.Model {
  dbName: string;
  entityId: string;
  static names(): { [key: string]: string } {
    return {
      dbName: 'DbName',
      entityId: 'EntityId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      dbName: 'string',
      entityId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteFaceEntityResponse extends $tea.Model {
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

export class ListFaceEntitiesRequest extends $tea.Model {
  dbName: string;
  offset?: number;
  limit?: number;
  token?: string;
  labels?: string;
  entityIdPrefix?: string;
  order?: string;
  static names(): { [key: string]: string } {
    return {
      dbName: 'DbName',
      offset: 'Offset',
      limit: 'Limit',
      token: 'Token',
      labels: 'Labels',
      entityIdPrefix: 'EntityIdPrefix',
      order: 'Order',
    };
  }

  static types(): { [key: string]: any } {
    return {
      dbName: 'string',
      offset: 'number',
      limit: 'number',
      token: 'string',
      labels: 'string',
      entityIdPrefix: 'string',
      order: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListFaceEntitiesResponse extends $tea.Model {
  requestId: string;
  data: ListFaceEntitiesResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: ListFaceEntitiesResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetFaceEntityRequest extends $tea.Model {
  dbName: string;
  entityId: string;
  static names(): { [key: string]: string } {
    return {
      dbName: 'DbName',
      entityId: 'EntityId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      dbName: 'string',
      entityId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetFaceEntityResponse extends $tea.Model {
  requestId: string;
  data: GetFaceEntityResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: GetFaceEntityResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateFaceEntityRequest extends $tea.Model {
  dbName: string;
  entityId: string;
  labels?: string;
  static names(): { [key: string]: string } {
    return {
      dbName: 'DbName',
      entityId: 'EntityId',
      labels: 'Labels',
    };
  }

  static types(): { [key: string]: any } {
    return {
      dbName: 'string',
      entityId: 'string',
      labels: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateFaceEntityResponse extends $tea.Model {
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

export class FaceMakeupRequest extends $tea.Model {
  imageURL: string;
  makeupType: string;
  resourceType: string;
  strength: number;
  static names(): { [key: string]: string } {
    return {
      imageURL: 'ImageURL',
      makeupType: 'MakeupType',
      resourceType: 'ResourceType',
      strength: 'Strength',
    };
  }

  static types(): { [key: string]: any } {
    return {
      imageURL: 'string',
      makeupType: 'string',
      resourceType: 'string',
      strength: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class FaceMakeupResponse extends $tea.Model {
  requestId: string;
  data: FaceMakeupResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: FaceMakeupResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class FaceMakeupAdvanceRequest extends $tea.Model {
  imageURLObject: Readable;
  makeupType: string;
  resourceType: string;
  strength: number;
  static names(): { [key: string]: string } {
    return {
      imageURLObject: 'ImageURLObject',
      makeupType: 'MakeupType',
      resourceType: 'ResourceType',
      strength: 'Strength',
    };
  }

  static types(): { [key: string]: any } {
    return {
      imageURLObject: 'Readable',
      makeupType: 'string',
      resourceType: 'string',
      strength: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class HandPostureRequest extends $tea.Model {
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

export class HandPostureResponse extends $tea.Model {
  requestId: string;
  data: HandPostureResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: HandPostureResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class HandPostureAdvanceRequest extends $tea.Model {
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

export class BodyPostureRequest extends $tea.Model {
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

export class BodyPostureResponse extends $tea.Model {
  requestId: string;
  data: BodyPostureResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: BodyPostureResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class BodyPostureAdvanceRequest extends $tea.Model {
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

export class DetectPedestrianRequest extends $tea.Model {
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

export class DetectPedestrianResponse extends $tea.Model {
  requestId: string;
  data: DetectPedestrianResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: DetectPedestrianResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DetectPedestrianAdvanceRequest extends $tea.Model {
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

export class FaceBeautyRequest extends $tea.Model {
  imageURL: string;
  sharp: number;
  smooth: number;
  white: number;
  static names(): { [key: string]: string } {
    return {
      imageURL: 'ImageURL',
      sharp: 'Sharp',
      smooth: 'Smooth',
      white: 'White',
    };
  }

  static types(): { [key: string]: any } {
    return {
      imageURL: 'string',
      sharp: 'number',
      smooth: 'number',
      white: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class FaceBeautyResponse extends $tea.Model {
  requestId: string;
  data: FaceBeautyResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: FaceBeautyResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class FaceBeautyAdvanceRequest extends $tea.Model {
  imageURLObject: Readable;
  sharp: number;
  smooth: number;
  white: number;
  static names(): { [key: string]: string } {
    return {
      imageURLObject: 'ImageURLObject',
      sharp: 'Sharp',
      smooth: 'Smooth',
      white: 'White',
    };
  }

  static types(): { [key: string]: any } {
    return {
      imageURLObject: 'Readable',
      sharp: 'number',
      smooth: 'number',
      white: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class FaceFilterRequest extends $tea.Model {
  imageURL: string;
  resourceType: string;
  strength: number;
  static names(): { [key: string]: string } {
    return {
      imageURL: 'ImageURL',
      resourceType: 'ResourceType',
      strength: 'Strength',
    };
  }

  static types(): { [key: string]: any } {
    return {
      imageURL: 'string',
      resourceType: 'string',
      strength: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class FaceFilterResponse extends $tea.Model {
  requestId: string;
  data: FaceFilterResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: FaceFilterResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class FaceFilterAdvanceRequest extends $tea.Model {
  imageURLObject: Readable;
  resourceType: string;
  strength: number;
  static names(): { [key: string]: string } {
    return {
      imageURLObject: 'ImageURLObject',
      resourceType: 'ResourceType',
      strength: 'Strength',
    };
  }

  static types(): { [key: string]: any } {
    return {
      imageURLObject: 'Readable',
      resourceType: 'string',
      strength: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class EnhanceFaceRequest extends $tea.Model {
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

export class EnhanceFaceResponse extends $tea.Model {
  requestId: string;
  data: EnhanceFaceResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: EnhanceFaceResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class EnhanceFaceAdvanceRequest extends $tea.Model {
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

export class FaceTidyupRequest extends $tea.Model {
  imageURL: string;
  shapeType: number;
  strength: number;
  static names(): { [key: string]: string } {
    return {
      imageURL: 'ImageURL',
      shapeType: 'ShapeType',
      strength: 'Strength',
    };
  }

  static types(): { [key: string]: any } {
    return {
      imageURL: 'string',
      shapeType: 'number',
      strength: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class FaceTidyupResponse extends $tea.Model {
  requestId: string;
  data: FaceTidyupResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: FaceTidyupResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class FaceTidyupAdvanceRequest extends $tea.Model {
  imageURLObject: Readable;
  shapeType: number;
  strength: number;
  static names(): { [key: string]: string } {
    return {
      imageURLObject: 'ImageURLObject',
      shapeType: 'ShapeType',
      strength: 'Strength',
    };
  }

  static types(): { [key: string]: any } {
    return {
      imageURLObject: 'Readable',
      shapeType: 'number',
      strength: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchFaceRequest extends $tea.Model {
  dbName: string;
  imageUrl: string;
  limit: number;
  static names(): { [key: string]: string } {
    return {
      dbName: 'DbName',
      imageUrl: 'ImageUrl',
      limit: 'Limit',
    };
  }

  static types(): { [key: string]: any } {
    return {
      dbName: 'string',
      imageUrl: 'string',
      limit: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchFaceResponse extends $tea.Model {
  requestId: string;
  data: SearchFaceResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: SearchFaceResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchFaceAdvanceRequest extends $tea.Model {
  imageUrlObject: Readable;
  dbName: string;
  limit: number;
  static names(): { [key: string]: string } {
    return {
      imageUrlObject: 'ImageUrlObject',
      dbName: 'DbName',
      limit: 'Limit',
    };
  }

  static types(): { [key: string]: any } {
    return {
      imageUrlObject: 'Readable',
      dbName: 'string',
      limit: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListFaceDbsRequest extends $tea.Model {
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

export class ListFaceDbsResponse extends $tea.Model {
  requestId: string;
  data: ListFaceDbsResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: ListFaceDbsResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateFaceDbRequest extends $tea.Model {
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

export class CreateFaceDbResponse extends $tea.Model {
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

export class DeleteFaceRequest extends $tea.Model {
  dbName: string;
  faceId: string;
  static names(): { [key: string]: string } {
    return {
      dbName: 'DbName',
      faceId: 'FaceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      dbName: 'string',
      faceId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteFaceResponse extends $tea.Model {
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

export class DeleteFaceDbRequest extends $tea.Model {
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

export class DeleteFaceDbResponse extends $tea.Model {
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

export class AddFaceRequest extends $tea.Model {
  dbName: string;
  imageUrl: string;
  entityId: string;
  extraData?: string;
  static names(): { [key: string]: string } {
    return {
      dbName: 'DbName',
      imageUrl: 'ImageUrl',
      entityId: 'EntityId',
      extraData: 'ExtraData',
    };
  }

  static types(): { [key: string]: any } {
    return {
      dbName: 'string',
      imageUrl: 'string',
      entityId: 'string',
      extraData: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddFaceResponse extends $tea.Model {
  requestId: string;
  data: AddFaceResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: AddFaceResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddFaceAdvanceRequest extends $tea.Model {
  imageUrlObject: Readable;
  dbName: string;
  entityId: string;
  extraData?: string;
  static names(): { [key: string]: string } {
    return {
      imageUrlObject: 'ImageUrlObject',
      dbName: 'DbName',
      entityId: 'EntityId',
      extraData: 'ExtraData',
    };
  }

  static types(): { [key: string]: any } {
    return {
      imageUrlObject: 'Readable',
      dbName: 'string',
      entityId: 'string',
      extraData: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeExpressionRequest extends $tea.Model {
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

export class RecognizeExpressionResponse extends $tea.Model {
  requestId: string;
  data: RecognizeExpressionResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: RecognizeExpressionResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeExpressionAdvanceRequest extends $tea.Model {
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

export class RecognizePublicFaceRequest extends $tea.Model {
  task: RecognizePublicFaceRequestTask[];
  static names(): { [key: string]: string } {
    return {
      task: 'Task',
    };
  }

  static types(): { [key: string]: any } {
    return {
      task: { 'type': 'array', 'itemType': RecognizePublicFaceRequestTask },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizePublicFaceResponse extends $tea.Model {
  requestId: string;
  data: RecognizePublicFaceResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: RecognizePublicFaceResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DetectLivingFaceRequest extends $tea.Model {
  tasks: DetectLivingFaceRequestTasks[];
  static names(): { [key: string]: string } {
    return {
      tasks: 'Tasks',
    };
  }

  static types(): { [key: string]: any } {
    return {
      tasks: { 'type': 'array', 'itemType': DetectLivingFaceRequestTasks },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DetectLivingFaceResponse extends $tea.Model {
  requestId: string;
  data: DetectLivingFaceResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: DetectLivingFaceResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DetectBodyCountRequest extends $tea.Model {
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

export class DetectBodyCountResponse extends $tea.Model {
  requestId: string;
  data: DetectBodyCountResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: DetectBodyCountResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DetectBodyCountAdvanceRequest extends $tea.Model {
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

export class DetectMaskRequest extends $tea.Model {
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

export class DetectMaskResponse extends $tea.Model {
  requestId: string;
  data: DetectMaskResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: DetectMaskResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DetectMaskAdvanceRequest extends $tea.Model {
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

export class RecognizeFaceRequest extends $tea.Model {
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

export class RecognizeFaceResponse extends $tea.Model {
  requestId: string;
  data: RecognizeFaceResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: RecognizeFaceResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeFaceAdvanceRequest extends $tea.Model {
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

export class CompareFaceRequest extends $tea.Model {
  imageURLA: string;
  imageURLB: string;
  static names(): { [key: string]: string } {
    return {
      imageURLA: 'ImageURLA',
      imageURLB: 'ImageURLB',
    };
  }

  static types(): { [key: string]: any } {
    return {
      imageURLA: 'string',
      imageURLB: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CompareFaceResponse extends $tea.Model {
  requestId: string;
  data: CompareFaceResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: CompareFaceResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DetectFaceRequest extends $tea.Model {
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

export class DetectFaceResponse extends $tea.Model {
  requestId: string;
  data: DetectFaceResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: DetectFaceResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DetectFaceAdvanceRequest extends $tea.Model {
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

export class ListFaceEntitiesResponseDataEntities extends $tea.Model {
  dbName: string;
  entityId: string;
  faceCount: number;
  labels: string;
  createdAt: number;
  updatedAt: number;
  static names(): { [key: string]: string } {
    return {
      dbName: 'DbName',
      entityId: 'EntityId',
      faceCount: 'FaceCount',
      labels: 'Labels',
      createdAt: 'CreatedAt',
      updatedAt: 'UpdatedAt',
    };
  }

  static types(): { [key: string]: any } {
    return {
      dbName: 'string',
      entityId: 'string',
      faceCount: 'number',
      labels: 'string',
      createdAt: 'number',
      updatedAt: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListFaceEntitiesResponseData extends $tea.Model {
  token: string;
  totalCount: number;
  entities: ListFaceEntitiesResponseDataEntities[];
  static names(): { [key: string]: string } {
    return {
      token: 'Token',
      totalCount: 'TotalCount',
      entities: 'Entities',
    };
  }

  static types(): { [key: string]: any } {
    return {
      token: 'string',
      totalCount: 'number',
      entities: { 'type': 'array', 'itemType': ListFaceEntitiesResponseDataEntities },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetFaceEntityResponseDataFaces extends $tea.Model {
  faceId: string;
  static names(): { [key: string]: string } {
    return {
      faceId: 'FaceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      faceId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetFaceEntityResponseData extends $tea.Model {
  dbName: string;
  entityId: string;
  labels: string;
  faces: GetFaceEntityResponseDataFaces[];
  static names(): { [key: string]: string } {
    return {
      dbName: 'DbName',
      entityId: 'EntityId',
      labels: 'Labels',
      faces: 'Faces',
    };
  }

  static types(): { [key: string]: any } {
    return {
      dbName: 'string',
      entityId: 'string',
      labels: 'string',
      faces: { 'type': 'array', 'itemType': GetFaceEntityResponseDataFaces },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class FaceMakeupResponseData extends $tea.Model {
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

export class HandPostureResponseDataOutputsResultsBoxPositions extends $tea.Model {
  points: number[];
  static names(): { [key: string]: string } {
    return {
      points: 'Points',
    };
  }

  static types(): { [key: string]: any } {
    return {
      points: { 'type': 'array', 'itemType': 'float' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class HandPostureResponseDataOutputsResultsBox extends $tea.Model {
  confident: number;
  positions: HandPostureResponseDataOutputsResultsBoxPositions[];
  static names(): { [key: string]: string } {
    return {
      confident: 'Confident',
      positions: 'Positions',
    };
  }

  static types(): { [key: string]: any } {
    return {
      confident: 'number',
      positions: { 'type': 'array', 'itemType': HandPostureResponseDataOutputsResultsBoxPositions },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class HandPostureResponseDataOutputsResultsHandsKeyPointsPositions extends $tea.Model {
  points: number[];
  static names(): { [key: string]: string } {
    return {
      points: 'Points',
    };
  }

  static types(): { [key: string]: any } {
    return {
      points: { 'type': 'array', 'itemType': 'float' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class HandPostureResponseDataOutputsResultsHandsKeyPoints extends $tea.Model {
  label: string;
  positions: HandPostureResponseDataOutputsResultsHandsKeyPointsPositions[];
  static names(): { [key: string]: string } {
    return {
      label: 'Label',
      positions: 'Positions',
    };
  }

  static types(): { [key: string]: any } {
    return {
      label: 'string',
      positions: { 'type': 'array', 'itemType': HandPostureResponseDataOutputsResultsHandsKeyPointsPositions },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class HandPostureResponseDataOutputsResultsHands extends $tea.Model {
  confident: number;
  keyPoints: HandPostureResponseDataOutputsResultsHandsKeyPoints[];
  static names(): { [key: string]: string } {
    return {
      confident: 'Confident',
      keyPoints: 'KeyPoints',
    };
  }

  static types(): { [key: string]: any } {
    return {
      confident: 'number',
      keyPoints: { 'type': 'array', 'itemType': HandPostureResponseDataOutputsResultsHandsKeyPoints },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class HandPostureResponseDataOutputsResults extends $tea.Model {
  box: HandPostureResponseDataOutputsResultsBox;
  hands: HandPostureResponseDataOutputsResultsHands;
  static names(): { [key: string]: string } {
    return {
      box: 'Box',
      hands: 'Hands',
    };
  }

  static types(): { [key: string]: any } {
    return {
      box: HandPostureResponseDataOutputsResultsBox,
      hands: HandPostureResponseDataOutputsResultsHands,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class HandPostureResponseDataOutputs extends $tea.Model {
  handCount: number;
  results: HandPostureResponseDataOutputsResults[];
  static names(): { [key: string]: string } {
    return {
      handCount: 'HandCount',
      results: 'Results',
    };
  }

  static types(): { [key: string]: any } {
    return {
      handCount: 'number',
      results: { 'type': 'array', 'itemType': HandPostureResponseDataOutputsResults },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class HandPostureResponseDataMetaObject extends $tea.Model {
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

export class HandPostureResponseData extends $tea.Model {
  outputs: HandPostureResponseDataOutputs[];
  metaObject: HandPostureResponseDataMetaObject;
  static names(): { [key: string]: string } {
    return {
      outputs: 'Outputs',
      metaObject: 'MetaObject',
    };
  }

  static types(): { [key: string]: any } {
    return {
      outputs: { 'type': 'array', 'itemType': HandPostureResponseDataOutputs },
      metaObject: HandPostureResponseDataMetaObject,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class BodyPostureResponseDataOutputsResultsBodiesPositions extends $tea.Model {
  points: number[];
  static names(): { [key: string]: string } {
    return {
      points: 'Points',
    };
  }

  static types(): { [key: string]: any } {
    return {
      points: { 'type': 'array', 'itemType': 'float' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class BodyPostureResponseDataOutputsResultsBodies extends $tea.Model {
  confident: number;
  label: string;
  positions: BodyPostureResponseDataOutputsResultsBodiesPositions[];
  static names(): { [key: string]: string } {
    return {
      confident: 'Confident',
      label: 'Label',
      positions: 'Positions',
    };
  }

  static types(): { [key: string]: any } {
    return {
      confident: 'number',
      label: 'string',
      positions: { 'type': 'array', 'itemType': BodyPostureResponseDataOutputsResultsBodiesPositions },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class BodyPostureResponseDataOutputsResults extends $tea.Model {
  bodies: BodyPostureResponseDataOutputsResultsBodies[];
  static names(): { [key: string]: string } {
    return {
      bodies: 'Bodies',
    };
  }

  static types(): { [key: string]: any } {
    return {
      bodies: { 'type': 'array', 'itemType': BodyPostureResponseDataOutputsResultsBodies },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class BodyPostureResponseDataOutputs extends $tea.Model {
  humanCount: number;
  results: BodyPostureResponseDataOutputsResults[];
  static names(): { [key: string]: string } {
    return {
      humanCount: 'HumanCount',
      results: 'Results',
    };
  }

  static types(): { [key: string]: any } {
    return {
      humanCount: 'number',
      results: { 'type': 'array', 'itemType': BodyPostureResponseDataOutputsResults },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class BodyPostureResponseDataMetaObject extends $tea.Model {
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

export class BodyPostureResponseData extends $tea.Model {
  outputs: BodyPostureResponseDataOutputs[];
  metaObject: BodyPostureResponseDataMetaObject;
  static names(): { [key: string]: string } {
    return {
      outputs: 'Outputs',
      metaObject: 'MetaObject',
    };
  }

  static types(): { [key: string]: any } {
    return {
      outputs: { 'type': 'array', 'itemType': BodyPostureResponseDataOutputs },
      metaObject: BodyPostureResponseDataMetaObject,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DetectPedestrianResponseDataElements extends $tea.Model {
  score: number;
  type: string;
  boxes: number[];
  static names(): { [key: string]: string } {
    return {
      score: 'Score',
      type: 'Type',
      boxes: 'Boxes',
    };
  }

  static types(): { [key: string]: any } {
    return {
      score: 'number',
      type: 'string',
      boxes: { 'type': 'array', 'itemType': 'integer' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DetectPedestrianResponseData extends $tea.Model {
  width: number;
  height: number;
  elements: DetectPedestrianResponseDataElements[];
  static names(): { [key: string]: string } {
    return {
      width: 'Width',
      height: 'Height',
      elements: 'Elements',
    };
  }

  static types(): { [key: string]: any } {
    return {
      width: 'number',
      height: 'number',
      elements: { 'type': 'array', 'itemType': DetectPedestrianResponseDataElements },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class FaceBeautyResponseData extends $tea.Model {
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

export class FaceFilterResponseData extends $tea.Model {
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

export class EnhanceFaceResponseData extends $tea.Model {
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

export class FaceTidyupResponseData extends $tea.Model {
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

export class SearchFaceResponseDataMatchListFaceItems extends $tea.Model {
  faceId: string;
  score: number;
  extraData: string;
  entityId: string;
  static names(): { [key: string]: string } {
    return {
      faceId: 'FaceId',
      score: 'Score',
      extraData: 'ExtraData',
      entityId: 'EntityId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      faceId: 'string',
      score: 'number',
      extraData: 'string',
      entityId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchFaceResponseDataMatchListLocation extends $tea.Model {
  x: number;
  y: number;
  width: number;
  height: number;
  static names(): { [key: string]: string } {
    return {
      x: 'X',
      y: 'Y',
      width: 'Width',
      height: 'Height',
    };
  }

  static types(): { [key: string]: any } {
    return {
      x: 'number',
      y: 'number',
      width: 'number',
      height: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchFaceResponseDataMatchList extends $tea.Model {
  faceItems: SearchFaceResponseDataMatchListFaceItems[];
  location: SearchFaceResponseDataMatchListLocation;
  static names(): { [key: string]: string } {
    return {
      faceItems: 'FaceItems',
      location: 'Location',
    };
  }

  static types(): { [key: string]: any } {
    return {
      faceItems: { 'type': 'array', 'itemType': SearchFaceResponseDataMatchListFaceItems },
      location: SearchFaceResponseDataMatchListLocation,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchFaceResponseData extends $tea.Model {
  matchList: SearchFaceResponseDataMatchList[];
  static names(): { [key: string]: string } {
    return {
      matchList: 'MatchList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      matchList: { 'type': 'array', 'itemType': SearchFaceResponseDataMatchList },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListFaceDbsResponseDataDbList extends $tea.Model {
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

export class ListFaceDbsResponseData extends $tea.Model {
  dbList: ListFaceDbsResponseDataDbList[];
  static names(): { [key: string]: string } {
    return {
      dbList: 'DbList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      dbList: { 'type': 'array', 'itemType': ListFaceDbsResponseDataDbList },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddFaceResponseData extends $tea.Model {
  faceId: string;
  static names(): { [key: string]: string } {
    return {
      faceId: 'FaceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      faceId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeExpressionResponseDataElementsFaceRectangle extends $tea.Model {
  height: number;
  left: number;
  top: number;
  width: number;
  static names(): { [key: string]: string } {
    return {
      height: 'Height',
      left: 'Left',
      top: 'Top',
      width: 'Width',
    };
  }

  static types(): { [key: string]: any } {
    return {
      height: 'number',
      left: 'number',
      top: 'number',
      width: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeExpressionResponseDataElements extends $tea.Model {
  expression: string;
  faceProbability: number;
  faceRectangle: RecognizeExpressionResponseDataElementsFaceRectangle;
  static names(): { [key: string]: string } {
    return {
      expression: 'Expression',
      faceProbability: 'FaceProbability',
      faceRectangle: 'FaceRectangle',
    };
  }

  static types(): { [key: string]: any } {
    return {
      expression: 'string',
      faceProbability: 'number',
      faceRectangle: RecognizeExpressionResponseDataElementsFaceRectangle,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeExpressionResponseData extends $tea.Model {
  elements: RecognizeExpressionResponseDataElements[];
  static names(): { [key: string]: string } {
    return {
      elements: 'Elements',
    };
  }

  static types(): { [key: string]: any } {
    return {
      elements: { 'type': 'array', 'itemType': RecognizeExpressionResponseDataElements },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizePublicFaceRequestTask extends $tea.Model {
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

export class RecognizePublicFaceResponseDataElementsResultsSubResultsFaces extends $tea.Model {
  id: string;
  name: string;
  rate: number;
  static names(): { [key: string]: string } {
    return {
      id: 'Id',
      name: 'Name',
      rate: 'Rate',
    };
  }

  static types(): { [key: string]: any } {
    return {
      id: 'string',
      name: 'string',
      rate: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizePublicFaceResponseDataElementsResultsSubResults extends $tea.Model {
  h: number;
  w: number;
  x: number;
  y: number;
  faces: RecognizePublicFaceResponseDataElementsResultsSubResultsFaces[];
  static names(): { [key: string]: string } {
    return {
      h: 'H',
      w: 'W',
      x: 'X',
      y: 'Y',
      faces: 'Faces',
    };
  }

  static types(): { [key: string]: any } {
    return {
      h: 'number',
      w: 'number',
      x: 'number',
      y: 'number',
      faces: { 'type': 'array', 'itemType': RecognizePublicFaceResponseDataElementsResultsSubResultsFaces },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizePublicFaceResponseDataElementsResults extends $tea.Model {
  label: string;
  suggestion: string;
  rate: number;
  subResults: RecognizePublicFaceResponseDataElementsResultsSubResults[];
  static names(): { [key: string]: string } {
    return {
      label: 'Label',
      suggestion: 'Suggestion',
      rate: 'Rate',
      subResults: 'SubResults',
    };
  }

  static types(): { [key: string]: any } {
    return {
      label: 'string',
      suggestion: 'string',
      rate: 'number',
      subResults: { 'type': 'array', 'itemType': RecognizePublicFaceResponseDataElementsResultsSubResults },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizePublicFaceResponseDataElements extends $tea.Model {
  taskId: string;
  imageURL: string;
  results: RecognizePublicFaceResponseDataElementsResults[];
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
      results: { 'type': 'array', 'itemType': RecognizePublicFaceResponseDataElementsResults },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizePublicFaceResponseData extends $tea.Model {
  elements: RecognizePublicFaceResponseDataElements[];
  static names(): { [key: string]: string } {
    return {
      elements: 'Elements',
    };
  }

  static types(): { [key: string]: any } {
    return {
      elements: { 'type': 'array', 'itemType': RecognizePublicFaceResponseDataElements },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DetectLivingFaceRequestTasks extends $tea.Model {
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

export class DetectLivingFaceResponseDataElementsResultsFrames extends $tea.Model {
  rate: number;
  url: string;
  static names(): { [key: string]: string } {
    return {
      rate: 'Rate',
      url: 'Url',
    };
  }

  static types(): { [key: string]: any } {
    return {
      rate: 'number',
      url: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DetectLivingFaceResponseDataElementsResults extends $tea.Model {
  label: string;
  suggestion: string;
  rate: number;
  frames: DetectLivingFaceResponseDataElementsResultsFrames[];
  static names(): { [key: string]: string } {
    return {
      label: 'Label',
      suggestion: 'Suggestion',
      rate: 'Rate',
      frames: 'Frames',
    };
  }

  static types(): { [key: string]: any } {
    return {
      label: 'string',
      suggestion: 'string',
      rate: 'number',
      frames: { 'type': 'array', 'itemType': DetectLivingFaceResponseDataElementsResultsFrames },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DetectLivingFaceResponseDataElements extends $tea.Model {
  taskId: string;
  imageURL: string;
  results: DetectLivingFaceResponseDataElementsResults[];
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
      results: { 'type': 'array', 'itemType': DetectLivingFaceResponseDataElementsResults },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DetectLivingFaceResponseData extends $tea.Model {
  elements: DetectLivingFaceResponseDataElements[];
  static names(): { [key: string]: string } {
    return {
      elements: 'Elements',
    };
  }

  static types(): { [key: string]: any } {
    return {
      elements: { 'type': 'array', 'itemType': DetectLivingFaceResponseDataElements },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DetectBodyCountResponseData extends $tea.Model {
  personNumber: number;
  static names(): { [key: string]: string } {
    return {
      personNumber: 'PersonNumber',
    };
  }

  static types(): { [key: string]: any } {
    return {
      personNumber: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DetectMaskResponseData extends $tea.Model {
  mask: number;
  faceProbability: number;
  static names(): { [key: string]: string } {
    return {
      mask: 'Mask',
      faceProbability: 'FaceProbability',
    };
  }

  static types(): { [key: string]: any } {
    return {
      mask: 'number',
      faceProbability: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeFaceResponseData extends $tea.Model {
  faceCount: number;
  landmarkCount: number;
  denseFeatureLength: number;
  faceRectangles: number[];
  faceProbabilityList: number[];
  poseList: number[];
  landmarks: number[];
  pupils: number[];
  genderList: number[];
  ageList: number[];
  expressions: number[];
  glasses: number[];
  denseFeatures: string[];
  static names(): { [key: string]: string } {
    return {
      faceCount: 'FaceCount',
      landmarkCount: 'LandmarkCount',
      denseFeatureLength: 'DenseFeatureLength',
      faceRectangles: 'FaceRectangles',
      faceProbabilityList: 'FaceProbabilityList',
      poseList: 'PoseList',
      landmarks: 'Landmarks',
      pupils: 'Pupils',
      genderList: 'GenderList',
      ageList: 'AgeList',
      expressions: 'Expressions',
      glasses: 'Glasses',
      denseFeatures: 'DenseFeatures',
    };
  }

  static types(): { [key: string]: any } {
    return {
      faceCount: 'number',
      landmarkCount: 'number',
      denseFeatureLength: 'number',
      faceRectangles: { 'type': 'array', 'itemType': 'integer' },
      faceProbabilityList: { 'type': 'array', 'itemType': 'float' },
      poseList: { 'type': 'array', 'itemType': 'float' },
      landmarks: { 'type': 'array', 'itemType': 'float' },
      pupils: { 'type': 'array', 'itemType': 'float' },
      genderList: { 'type': 'array', 'itemType': 'integer' },
      ageList: { 'type': 'array', 'itemType': 'integer' },
      expressions: { 'type': 'array', 'itemType': 'integer' },
      glasses: { 'type': 'array', 'itemType': 'integer' },
      denseFeatures: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CompareFaceResponseData extends $tea.Model {
  confidence: number;
  thresholds: number[];
  rectAList: number[];
  rectBList: number[];
  static names(): { [key: string]: string } {
    return {
      confidence: 'Confidence',
      thresholds: 'Thresholds',
      rectAList: 'RectAList',
      rectBList: 'RectBList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      confidence: 'number',
      thresholds: { 'type': 'array', 'itemType': 'float' },
      rectAList: { 'type': 'array', 'itemType': 'integer' },
      rectBList: { 'type': 'array', 'itemType': 'integer' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DetectFaceResponseData extends $tea.Model {
  faceCount: number;
  landmarkCount: number;
  faceRectangles: number[];
  faceProbabilityList: number[];
  poseList: number[];
  landmarks: number[];
  pupils: number[];
  static names(): { [key: string]: string } {
    return {
      faceCount: 'FaceCount',
      landmarkCount: 'LandmarkCount',
      faceRectangles: 'FaceRectangles',
      faceProbabilityList: 'FaceProbabilityList',
      poseList: 'PoseList',
      landmarks: 'Landmarks',
      pupils: 'Pupils',
    };
  }

  static types(): { [key: string]: any } {
    return {
      faceCount: 'number',
      landmarkCount: 'number',
      faceRectangles: { 'type': 'array', 'itemType': 'integer' },
      faceProbabilityList: { 'type': 'array', 'itemType': 'float' },
      poseList: { 'type': 'array', 'itemType': 'float' },
      landmarks: { 'type': 'array', 'itemType': 'float' },
      pupils: { 'type': 'array', 'itemType': 'float' },
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
    this._endpoint = this.getEndpoint(this._productId, this._regionId, this._endpointRule, this._network, this._suffix, this._endpointMap, this._endpoint);
  }


  async addFaceEntity(request: AddFaceEntityRequest, runtime: $Util.RuntimeOptions): Promise<AddFaceEntityResponse> {
    Util.validateModel(request);
    return $tea.cast<AddFaceEntityResponse>(await this.doRequest("AddFaceEntity", "HTTPS", "GET", "2019-12-30", "AK", null, $tea.toMap(request), runtime), new AddFaceEntityResponse({}));
  }

  async deleteFaceEntity(request: DeleteFaceEntityRequest, runtime: $Util.RuntimeOptions): Promise<DeleteFaceEntityResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteFaceEntityResponse>(await this.doRequest("DeleteFaceEntity", "HTTPS", "GET", "2019-12-30", "AK", null, $tea.toMap(request), runtime), new DeleteFaceEntityResponse({}));
  }

  async listFaceEntities(request: ListFaceEntitiesRequest, runtime: $Util.RuntimeOptions): Promise<ListFaceEntitiesResponse> {
    Util.validateModel(request);
    return $tea.cast<ListFaceEntitiesResponse>(await this.doRequest("ListFaceEntities", "HTTPS", "GET", "2019-12-30", "AK", null, $tea.toMap(request), runtime), new ListFaceEntitiesResponse({}));
  }

  async getFaceEntity(request: GetFaceEntityRequest, runtime: $Util.RuntimeOptions): Promise<GetFaceEntityResponse> {
    Util.validateModel(request);
    return $tea.cast<GetFaceEntityResponse>(await this.doRequest("GetFaceEntity", "HTTPS", "GET", "2019-12-30", "AK", null, $tea.toMap(request), runtime), new GetFaceEntityResponse({}));
  }

  async updateFaceEntity(request: UpdateFaceEntityRequest, runtime: $Util.RuntimeOptions): Promise<UpdateFaceEntityResponse> {
    Util.validateModel(request);
    return $tea.cast<UpdateFaceEntityResponse>(await this.doRequest("UpdateFaceEntity", "HTTPS", "GET", "2019-12-30", "AK", null, $tea.toMap(request), runtime), new UpdateFaceEntityResponse({}));
  }

  async faceMakeup(request: FaceMakeupRequest, runtime: $Util.RuntimeOptions): Promise<FaceMakeupResponse> {
    Util.validateModel(request);
    return $tea.cast<FaceMakeupResponse>(await this.doRequest("FaceMakeup", "HTTPS", "POST", "2019-12-30", "AK", null, $tea.toMap(request), runtime), new FaceMakeupResponse({}));
  }

  async faceMakeupAdvance(request: FaceMakeupAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<FaceMakeupResponse> {
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
      product: "facebody",
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
    let faceMakeupreq = new FaceMakeupRequest({ });
    RPCUtil.convert(request, faceMakeupreq);
    faceMakeupreq.imageURL = `http://${authResponse.bucket}.${authResponse.endpoint}/${authResponse.objectKey}`;
    let faceMakeupResp = await this.faceMakeup(faceMakeupreq, runtime);
    return faceMakeupResp;
  }

  async handPosture(request: HandPostureRequest, runtime: $Util.RuntimeOptions): Promise<HandPostureResponse> {
    Util.validateModel(request);
    return $tea.cast<HandPostureResponse>(await this.doRequest("HandPosture", "HTTPS", "POST", "2019-12-30", "AK", null, $tea.toMap(request), runtime), new HandPostureResponse({}));
  }

  async handPostureAdvance(request: HandPostureAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<HandPostureResponse> {
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
      product: "facebody",
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
    let handPosturereq = new HandPostureRequest({ });
    RPCUtil.convert(request, handPosturereq);
    handPosturereq.imageURL = `http://${authResponse.bucket}.${authResponse.endpoint}/${authResponse.objectKey}`;
    let handPostureResp = await this.handPosture(handPosturereq, runtime);
    return handPostureResp;
  }

  async bodyPosture(request: BodyPostureRequest, runtime: $Util.RuntimeOptions): Promise<BodyPostureResponse> {
    Util.validateModel(request);
    return $tea.cast<BodyPostureResponse>(await this.doRequest("BodyPosture", "HTTPS", "POST", "2019-12-30", "AK", null, $tea.toMap(request), runtime), new BodyPostureResponse({}));
  }

  async bodyPostureAdvance(request: BodyPostureAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<BodyPostureResponse> {
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
      product: "facebody",
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
    let bodyPosturereq = new BodyPostureRequest({ });
    RPCUtil.convert(request, bodyPosturereq);
    bodyPosturereq.imageURL = `http://${authResponse.bucket}.${authResponse.endpoint}/${authResponse.objectKey}`;
    let bodyPostureResp = await this.bodyPosture(bodyPosturereq, runtime);
    return bodyPostureResp;
  }

  async detectPedestrian(request: DetectPedestrianRequest, runtime: $Util.RuntimeOptions): Promise<DetectPedestrianResponse> {
    Util.validateModel(request);
    return $tea.cast<DetectPedestrianResponse>(await this.doRequest("DetectPedestrian", "HTTPS", "POST", "2019-12-30", "AK", null, $tea.toMap(request), runtime), new DetectPedestrianResponse({}));
  }

  async detectPedestrianAdvance(request: DetectPedestrianAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<DetectPedestrianResponse> {
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
      product: "facebody",
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
    let detectPedestrianreq = new DetectPedestrianRequest({ });
    RPCUtil.convert(request, detectPedestrianreq);
    detectPedestrianreq.imageURL = `http://${authResponse.bucket}.${authResponse.endpoint}/${authResponse.objectKey}`;
    let detectPedestrianResp = await this.detectPedestrian(detectPedestrianreq, runtime);
    return detectPedestrianResp;
  }

  async faceBeauty(request: FaceBeautyRequest, runtime: $Util.RuntimeOptions): Promise<FaceBeautyResponse> {
    Util.validateModel(request);
    return $tea.cast<FaceBeautyResponse>(await this.doRequest("FaceBeauty", "HTTPS", "POST", "2019-12-30", "AK", null, $tea.toMap(request), runtime), new FaceBeautyResponse({}));
  }

  async faceBeautyAdvance(request: FaceBeautyAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<FaceBeautyResponse> {
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
      product: "facebody",
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
    let faceBeautyreq = new FaceBeautyRequest({ });
    RPCUtil.convert(request, faceBeautyreq);
    faceBeautyreq.imageURL = `http://${authResponse.bucket}.${authResponse.endpoint}/${authResponse.objectKey}`;
    let faceBeautyResp = await this.faceBeauty(faceBeautyreq, runtime);
    return faceBeautyResp;
  }

  async faceFilter(request: FaceFilterRequest, runtime: $Util.RuntimeOptions): Promise<FaceFilterResponse> {
    Util.validateModel(request);
    return $tea.cast<FaceFilterResponse>(await this.doRequest("FaceFilter", "HTTPS", "POST", "2019-12-30", "AK", null, $tea.toMap(request), runtime), new FaceFilterResponse({}));
  }

  async faceFilterAdvance(request: FaceFilterAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<FaceFilterResponse> {
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
      product: "facebody",
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
    let faceFilterreq = new FaceFilterRequest({ });
    RPCUtil.convert(request, faceFilterreq);
    faceFilterreq.imageURL = `http://${authResponse.bucket}.${authResponse.endpoint}/${authResponse.objectKey}`;
    let faceFilterResp = await this.faceFilter(faceFilterreq, runtime);
    return faceFilterResp;
  }

  async enhanceFace(request: EnhanceFaceRequest, runtime: $Util.RuntimeOptions): Promise<EnhanceFaceResponse> {
    Util.validateModel(request);
    return $tea.cast<EnhanceFaceResponse>(await this.doRequest("EnhanceFace", "HTTPS", "POST", "2019-12-30", "AK", null, $tea.toMap(request), runtime), new EnhanceFaceResponse({}));
  }

  async enhanceFaceAdvance(request: EnhanceFaceAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<EnhanceFaceResponse> {
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
      product: "facebody",
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
    let enhanceFacereq = new EnhanceFaceRequest({ });
    RPCUtil.convert(request, enhanceFacereq);
    enhanceFacereq.imageURL = `http://${authResponse.bucket}.${authResponse.endpoint}/${authResponse.objectKey}`;
    let enhanceFaceResp = await this.enhanceFace(enhanceFacereq, runtime);
    return enhanceFaceResp;
  }

  async faceTidyup(request: FaceTidyupRequest, runtime: $Util.RuntimeOptions): Promise<FaceTidyupResponse> {
    Util.validateModel(request);
    return $tea.cast<FaceTidyupResponse>(await this.doRequest("FaceTidyup", "HTTPS", "POST", "2019-12-30", "AK", null, $tea.toMap(request), runtime), new FaceTidyupResponse({}));
  }

  async faceTidyupAdvance(request: FaceTidyupAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<FaceTidyupResponse> {
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
      product: "facebody",
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
    let faceTidyupreq = new FaceTidyupRequest({ });
    RPCUtil.convert(request, faceTidyupreq);
    faceTidyupreq.imageURL = `http://${authResponse.bucket}.${authResponse.endpoint}/${authResponse.objectKey}`;
    let faceTidyupResp = await this.faceTidyup(faceTidyupreq, runtime);
    return faceTidyupResp;
  }

  async searchFace(request: SearchFaceRequest, runtime: $Util.RuntimeOptions): Promise<SearchFaceResponse> {
    Util.validateModel(request);
    return $tea.cast<SearchFaceResponse>(await this.doRequest("SearchFace", "HTTPS", "GET", "2019-12-30", "AK", null, $tea.toMap(request), runtime), new SearchFaceResponse({}));
  }

  async searchFaceAdvance(request: SearchFaceAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<SearchFaceResponse> {
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
      product: "facebody",
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
      content: request.imageUrlObject,
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
    let searchFacereq = new SearchFaceRequest({ });
    RPCUtil.convert(request, searchFacereq);
    searchFacereq.imageUrl = `http://${authResponse.bucket}.${authResponse.endpoint}/${authResponse.objectKey}`;
    let searchFaceResp = await this.searchFace(searchFacereq, runtime);
    return searchFaceResp;
  }

  async listFaceDbs(request: ListFaceDbsRequest, runtime: $Util.RuntimeOptions): Promise<ListFaceDbsResponse> {
    Util.validateModel(request);
    return $tea.cast<ListFaceDbsResponse>(await this.doRequest("ListFaceDbs", "HTTPS", "GET", "2019-12-30", "AK", null, $tea.toMap(request), runtime), new ListFaceDbsResponse({}));
  }

  async createFaceDb(request: CreateFaceDbRequest, runtime: $Util.RuntimeOptions): Promise<CreateFaceDbResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateFaceDbResponse>(await this.doRequest("CreateFaceDb", "HTTPS", "GET", "2019-12-30", "AK", null, $tea.toMap(request), runtime), new CreateFaceDbResponse({}));
  }

  async deleteFace(request: DeleteFaceRequest, runtime: $Util.RuntimeOptions): Promise<DeleteFaceResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteFaceResponse>(await this.doRequest("DeleteFace", "HTTPS", "GET", "2019-12-30", "AK", null, $tea.toMap(request), runtime), new DeleteFaceResponse({}));
  }

  async deleteFaceDb(request: DeleteFaceDbRequest, runtime: $Util.RuntimeOptions): Promise<DeleteFaceDbResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteFaceDbResponse>(await this.doRequest("DeleteFaceDb", "HTTPS", "GET", "2019-12-30", "AK", null, $tea.toMap(request), runtime), new DeleteFaceDbResponse({}));
  }

  async addFace(request: AddFaceRequest, runtime: $Util.RuntimeOptions): Promise<AddFaceResponse> {
    Util.validateModel(request);
    return $tea.cast<AddFaceResponse>(await this.doRequest("AddFace", "HTTPS", "GET", "2019-12-30", "AK", null, $tea.toMap(request), runtime), new AddFaceResponse({}));
  }

  async addFaceAdvance(request: AddFaceAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<AddFaceResponse> {
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
      product: "facebody",
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
      content: request.imageUrlObject,
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
    let addFacereq = new AddFaceRequest({ });
    RPCUtil.convert(request, addFacereq);
    addFacereq.imageUrl = `http://${authResponse.bucket}.${authResponse.endpoint}/${authResponse.objectKey}`;
    let addFaceResp = await this.addFace(addFacereq, runtime);
    return addFaceResp;
  }

  async recognizeExpression(request: RecognizeExpressionRequest, runtime: $Util.RuntimeOptions): Promise<RecognizeExpressionResponse> {
    Util.validateModel(request);
    return $tea.cast<RecognizeExpressionResponse>(await this.doRequest("RecognizeExpression", "HTTPS", "POST", "2019-12-30", "AK", null, $tea.toMap(request), runtime), new RecognizeExpressionResponse({}));
  }

  async recognizeExpressionAdvance(request: RecognizeExpressionAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<RecognizeExpressionResponse> {
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
      product: "facebody",
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
    let recognizeExpressionreq = new RecognizeExpressionRequest({ });
    RPCUtil.convert(request, recognizeExpressionreq);
    recognizeExpressionreq.imageURL = `http://${authResponse.bucket}.${authResponse.endpoint}/${authResponse.objectKey}`;
    let recognizeExpressionResp = await this.recognizeExpression(recognizeExpressionreq, runtime);
    return recognizeExpressionResp;
  }

  async recognizePublicFace(request: RecognizePublicFaceRequest, runtime: $Util.RuntimeOptions): Promise<RecognizePublicFaceResponse> {
    Util.validateModel(request);
    return $tea.cast<RecognizePublicFaceResponse>(await this.doRequest("RecognizePublicFace", "HTTPS", "POST", "2019-12-30", "AK", null, $tea.toMap(request), runtime), new RecognizePublicFaceResponse({}));
  }

  async detectLivingFace(request: DetectLivingFaceRequest, runtime: $Util.RuntimeOptions): Promise<DetectLivingFaceResponse> {
    Util.validateModel(request);
    return $tea.cast<DetectLivingFaceResponse>(await this.doRequest("DetectLivingFace", "HTTPS", "POST", "2019-12-30", "AK", null, $tea.toMap(request), runtime), new DetectLivingFaceResponse({}));
  }

  async detectBodyCount(request: DetectBodyCountRequest, runtime: $Util.RuntimeOptions): Promise<DetectBodyCountResponse> {
    Util.validateModel(request);
    return $tea.cast<DetectBodyCountResponse>(await this.doRequest("DetectBodyCount", "HTTPS", "POST", "2019-12-30", "AK", null, $tea.toMap(request), runtime), new DetectBodyCountResponse({}));
  }

  async detectBodyCountAdvance(request: DetectBodyCountAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<DetectBodyCountResponse> {
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
      product: "facebody",
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
    let detectBodyCountreq = new DetectBodyCountRequest({ });
    RPCUtil.convert(request, detectBodyCountreq);
    detectBodyCountreq.imageURL = `http://${authResponse.bucket}.${authResponse.endpoint}/${authResponse.objectKey}`;
    let detectBodyCountResp = await this.detectBodyCount(detectBodyCountreq, runtime);
    return detectBodyCountResp;
  }

  async detectMask(request: DetectMaskRequest, runtime: $Util.RuntimeOptions): Promise<DetectMaskResponse> {
    Util.validateModel(request);
    return $tea.cast<DetectMaskResponse>(await this.doRequest("DetectMask", "HTTPS", "POST", "2019-12-30", "AK", null, $tea.toMap(request), runtime), new DetectMaskResponse({}));
  }

  async detectMaskAdvance(request: DetectMaskAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<DetectMaskResponse> {
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
      product: "facebody",
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
    let detectMaskreq = new DetectMaskRequest({ });
    RPCUtil.convert(request, detectMaskreq);
    detectMaskreq.imageURL = `http://${authResponse.bucket}.${authResponse.endpoint}/${authResponse.objectKey}`;
    let detectMaskResp = await this.detectMask(detectMaskreq, runtime);
    return detectMaskResp;
  }

  async recognizeFace(request: RecognizeFaceRequest, runtime: $Util.RuntimeOptions): Promise<RecognizeFaceResponse> {
    Util.validateModel(request);
    return $tea.cast<RecognizeFaceResponse>(await this.doRequest("RecognizeFace", "HTTPS", "POST", "2019-12-30", "AK", null, $tea.toMap(request), runtime), new RecognizeFaceResponse({}));
  }

  async recognizeFaceAdvance(request: RecognizeFaceAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<RecognizeFaceResponse> {
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
      product: "facebody",
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
    let recognizeFacereq = new RecognizeFaceRequest({ });
    RPCUtil.convert(request, recognizeFacereq);
    recognizeFacereq.imageURL = `http://${authResponse.bucket}.${authResponse.endpoint}/${authResponse.objectKey}`;
    let recognizeFaceResp = await this.recognizeFace(recognizeFacereq, runtime);
    return recognizeFaceResp;
  }

  async compareFace(request: CompareFaceRequest, runtime: $Util.RuntimeOptions): Promise<CompareFaceResponse> {
    Util.validateModel(request);
    return $tea.cast<CompareFaceResponse>(await this.doRequest("CompareFace", "HTTPS", "POST", "2019-12-30", "AK", null, $tea.toMap(request), runtime), new CompareFaceResponse({}));
  }

  async detectFace(request: DetectFaceRequest, runtime: $Util.RuntimeOptions): Promise<DetectFaceResponse> {
    Util.validateModel(request);
    return $tea.cast<DetectFaceResponse>(await this.doRequest("DetectFace", "HTTPS", "POST", "2019-12-30", "AK", null, $tea.toMap(request), runtime), new DetectFaceResponse({}));
  }

  async detectFaceAdvance(request: DetectFaceAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<DetectFaceResponse> {
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
      product: "facebody",
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
    let detectFacereq = new DetectFaceRequest({ });
    RPCUtil.convert(request, detectFacereq);
    detectFacereq.imageURL = `http://${authResponse.bucket}.${authResponse.endpoint}/${authResponse.objectKey}`;
    let detectFaceResp = await this.detectFace(detectFacereq, runtime);
    return detectFaceResp;
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
