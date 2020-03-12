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

export class RecognizeFaceResponseDataFaceRectangles extends $tea.Model {
  faceRectangle: number;
  static names(): { [key: string]: string } {
    return {
      faceRectangle: 'FaceRectangle',
    };
  }

  static types(): { [key: string]: any } {
    return {
      faceRectangle: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeFaceResponseDataFaceProbabilityList extends $tea.Model {
  faceProbability: number;
  static names(): { [key: string]: string } {
    return {
      faceProbability: 'FaceProbability',
    };
  }

  static types(): { [key: string]: any } {
    return {
      faceProbability: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeFaceResponseDataPoseList extends $tea.Model {
  pose: number;
  static names(): { [key: string]: string } {
    return {
      pose: 'Pose',
    };
  }

  static types(): { [key: string]: any } {
    return {
      pose: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeFaceResponseDataLandmarks extends $tea.Model {
  landmark: number;
  static names(): { [key: string]: string } {
    return {
      landmark: 'Landmark',
    };
  }

  static types(): { [key: string]: any } {
    return {
      landmark: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeFaceResponseDataPupils extends $tea.Model {
  pupil: number;
  static names(): { [key: string]: string } {
    return {
      pupil: 'Pupil',
    };
  }

  static types(): { [key: string]: any } {
    return {
      pupil: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeFaceResponseDataGenderList extends $tea.Model {
  gender: number;
  static names(): { [key: string]: string } {
    return {
      gender: 'Gender',
    };
  }

  static types(): { [key: string]: any } {
    return {
      gender: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeFaceResponseDataAgeList extends $tea.Model {
  age: number;
  static names(): { [key: string]: string } {
    return {
      age: 'Age',
    };
  }

  static types(): { [key: string]: any } {
    return {
      age: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeFaceResponseDataExpressions extends $tea.Model {
  expression: number;
  static names(): { [key: string]: string } {
    return {
      expression: 'Expression',
    };
  }

  static types(): { [key: string]: any } {
    return {
      expression: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeFaceResponseDataGlasses extends $tea.Model {
  glass: number;
  static names(): { [key: string]: string } {
    return {
      glass: 'Glass',
    };
  }

  static types(): { [key: string]: any } {
    return {
      glass: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeFaceResponseDataDenseFeatures extends $tea.Model {
  denseFeature: string;
  static names(): { [key: string]: string } {
    return {
      denseFeature: 'DenseFeature',
    };
  }

  static types(): { [key: string]: any } {
    return {
      denseFeature: 'string',
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
  faceRectangles: RecognizeFaceResponseDataFaceRectangles[];
  faceProbabilityList: RecognizeFaceResponseDataFaceProbabilityList[];
  poseList: RecognizeFaceResponseDataPoseList[];
  landmarks: RecognizeFaceResponseDataLandmarks[];
  pupils: RecognizeFaceResponseDataPupils[];
  genderList: RecognizeFaceResponseDataGenderList[];
  ageList: RecognizeFaceResponseDataAgeList[];
  expressions: RecognizeFaceResponseDataExpressions[];
  glasses: RecognizeFaceResponseDataGlasses[];
  denseFeatures: RecognizeFaceResponseDataDenseFeatures[];
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
      faceRectangles: { 'type': 'array', 'itemType': RecognizeFaceResponseDataFaceRectangles },
      faceProbabilityList: { 'type': 'array', 'itemType': RecognizeFaceResponseDataFaceProbabilityList },
      poseList: { 'type': 'array', 'itemType': RecognizeFaceResponseDataPoseList },
      landmarks: { 'type': 'array', 'itemType': RecognizeFaceResponseDataLandmarks },
      pupils: { 'type': 'array', 'itemType': RecognizeFaceResponseDataPupils },
      genderList: { 'type': 'array', 'itemType': RecognizeFaceResponseDataGenderList },
      ageList: { 'type': 'array', 'itemType': RecognizeFaceResponseDataAgeList },
      expressions: { 'type': 'array', 'itemType': RecognizeFaceResponseDataExpressions },
      glasses: { 'type': 'array', 'itemType': RecognizeFaceResponseDataGlasses },
      denseFeatures: { 'type': 'array', 'itemType': RecognizeFaceResponseDataDenseFeatures },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CompareFaceResponseDataThresholds extends $tea.Model {
  threshold: number;
  static names(): { [key: string]: string } {
    return {
      threshold: 'Threshold',
    };
  }

  static types(): { [key: string]: any } {
    return {
      threshold: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CompareFaceResponseDataRectAList extends $tea.Model {
  rectA: number;
  static names(): { [key: string]: string } {
    return {
      rectA: 'RectA',
    };
  }

  static types(): { [key: string]: any } {
    return {
      rectA: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CompareFaceResponseDataRectBList extends $tea.Model {
  rectB: number;
  static names(): { [key: string]: string } {
    return {
      rectB: 'RectB',
    };
  }

  static types(): { [key: string]: any } {
    return {
      rectB: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CompareFaceResponseData extends $tea.Model {
  confidence: number;
  thresholds: CompareFaceResponseDataThresholds[];
  rectAList: CompareFaceResponseDataRectAList[];
  rectBList: CompareFaceResponseDataRectBList[];
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
      thresholds: { 'type': 'array', 'itemType': CompareFaceResponseDataThresholds },
      rectAList: { 'type': 'array', 'itemType': CompareFaceResponseDataRectAList },
      rectBList: { 'type': 'array', 'itemType': CompareFaceResponseDataRectBList },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DetectFaceResponseDataFaceRectangles extends $tea.Model {
  faceRectangle: number;
  static names(): { [key: string]: string } {
    return {
      faceRectangle: 'FaceRectangle',
    };
  }

  static types(): { [key: string]: any } {
    return {
      faceRectangle: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DetectFaceResponseDataFaceProbabilityList extends $tea.Model {
  faceProbability: number;
  static names(): { [key: string]: string } {
    return {
      faceProbability: 'FaceProbability',
    };
  }

  static types(): { [key: string]: any } {
    return {
      faceProbability: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DetectFaceResponseDataPoseList extends $tea.Model {
  pose: number;
  static names(): { [key: string]: string } {
    return {
      pose: 'Pose',
    };
  }

  static types(): { [key: string]: any } {
    return {
      pose: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DetectFaceResponseDataLandmarks extends $tea.Model {
  landmark: number;
  static names(): { [key: string]: string } {
    return {
      landmark: 'Landmark',
    };
  }

  static types(): { [key: string]: any } {
    return {
      landmark: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DetectFaceResponseDataPupils extends $tea.Model {
  pupil: number;
  static names(): { [key: string]: string } {
    return {
      pupil: 'Pupil',
    };
  }

  static types(): { [key: string]: any } {
    return {
      pupil: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DetectFaceResponseData extends $tea.Model {
  faceCount: number;
  landmarkCount: number;
  faceRectangles: DetectFaceResponseDataFaceRectangles[];
  faceProbabilityList: DetectFaceResponseDataFaceProbabilityList[];
  poseList: DetectFaceResponseDataPoseList[];
  landmarks: DetectFaceResponseDataLandmarks[];
  pupils: DetectFaceResponseDataPupils[];
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
      faceRectangles: { 'type': 'array', 'itemType': DetectFaceResponseDataFaceRectangles },
      faceProbabilityList: { 'type': 'array', 'itemType': DetectFaceResponseDataFaceProbabilityList },
      poseList: { 'type': 'array', 'itemType': DetectFaceResponseDataPoseList },
      landmarks: { 'type': 'array', 'itemType': DetectFaceResponseDataLandmarks },
      pupils: { 'type': 'array', 'itemType': DetectFaceResponseDataPupils },
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

  async _request(action: string, protocol: string, method: string, request: {[key: string]: any}, runtime: $Util.RuntimeOptions): Promise<{[key: string]: any}> {
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
        let accessKeyId = await this.getAccessKeyId();
        let accessKeySecret = await this.getAccessKeySecret();
        request_.query = RPCUtil.query({
          Action: action,
          Format: "json",
          RegionId: this._regionId,
          Timestamp: RPCUtil.getTimestamp(),
          Version: "2019-12-30",
          SignatureMethod: "HMAC-SHA1",
          SignatureVersion: "1.0",
          SignatureNonce: Util.getNonce(),
          AccessKeyId: accessKeyId,
          ...request,
        });
        request_.headers = {
          host: RPCUtil.getHost("facebody", this._regionId, this._endpoint),
          'user-agent': this.getUserAgent(),
        };
        request_.query["Signature"] = RPCUtil.getSignature(request_, accessKeySecret);
        _lastRequest = request_;
        let response_ = await $tea.doAction(request_, _runtime);

        let obj = await Util.readAsJSON(response_.body);
        let body = Util.assertAsMap(obj);
        if (Util.is4xx(response_.statusCode) || Util.is5xx(response_.statusCode)) {
          throw $tea.newError({
            message: body["Message"],
            data: body,
            code: body["Code"],
          });
        }

        return body;
      } catch (ex) {
        if ($tea.isRetryable(ex)) {
          continue;
        }
        throw ex;
      }
    }

    throw $tea.newUnretryableError(_lastRequest);
  }

  async recognizeExpression(request: RecognizeExpressionRequest, runtime: $Util.RuntimeOptions): Promise<RecognizeExpressionResponse> {
    return $tea.cast<RecognizeExpressionResponse>(await this._request("RecognizeExpression", "HTTPS", "POST", $tea.toMap(request), runtime), new RecognizeExpressionResponse({}));
  }

  async recognizeExpressionAdvance(request: RecognizeExpressionAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<RecognizeExpressionResponse> {
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
      product: "facebody",
      regionId: this._regionId,
    });
    let authResponse = await authClient.authorizeFileUpload(authRequest, runtime);
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
    let recognizeExpressionreq = new RecognizeExpressionRequest({ });
    RPCUtil.convert(request, recognizeExpressionreq);
    recognizeExpressionreq.imageURL = `http://${authResponse.bucket}.${authResponse.endpoint}/${authResponse.objectKey}`;
    let recognizeExpressionResp = await this.recognizeExpression(recognizeExpressionreq, runtime);
    return recognizeExpressionResp;
  }

  async recognizePublicFace(request: RecognizePublicFaceRequest, runtime: $Util.RuntimeOptions): Promise<RecognizePublicFaceResponse> {
    return $tea.cast<RecognizePublicFaceResponse>(await this._request("RecognizePublicFace", "HTTPS", "POST", $tea.toMap(request), runtime), new RecognizePublicFaceResponse({}));
  }

  async detectLivingFace(request: DetectLivingFaceRequest, runtime: $Util.RuntimeOptions): Promise<DetectLivingFaceResponse> {
    return $tea.cast<DetectLivingFaceResponse>(await this._request("DetectLivingFace", "HTTPS", "POST", $tea.toMap(request), runtime), new DetectLivingFaceResponse({}));
  }

  async detectBodyCount(request: DetectBodyCountRequest, runtime: $Util.RuntimeOptions): Promise<DetectBodyCountResponse> {
    return $tea.cast<DetectBodyCountResponse>(await this._request("DetectBodyCount", "HTTPS", "POST", $tea.toMap(request), runtime), new DetectBodyCountResponse({}));
  }

  async detectBodyCountAdvance(request: DetectBodyCountAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<DetectBodyCountResponse> {
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
      product: "facebody",
      regionId: this._regionId,
    });
    let authResponse = await authClient.authorizeFileUpload(authRequest, runtime);
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
    let detectBodyCountreq = new DetectBodyCountRequest({ });
    RPCUtil.convert(request, detectBodyCountreq);
    detectBodyCountreq.imageURL = `http://${authResponse.bucket}.${authResponse.endpoint}/${authResponse.objectKey}`;
    let detectBodyCountResp = await this.detectBodyCount(detectBodyCountreq, runtime);
    return detectBodyCountResp;
  }

  async detectMask(request: DetectMaskRequest, runtime: $Util.RuntimeOptions): Promise<DetectMaskResponse> {
    return $tea.cast<DetectMaskResponse>(await this._request("DetectMask", "HTTPS", "POST", $tea.toMap(request), runtime), new DetectMaskResponse({}));
  }

  async detectMaskAdvance(request: DetectMaskAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<DetectMaskResponse> {
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
      product: "facebody",
      regionId: this._regionId,
    });
    let authResponse = await authClient.authorizeFileUpload(authRequest, runtime);
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
    let detectMaskreq = new DetectMaskRequest({ });
    RPCUtil.convert(request, detectMaskreq);
    detectMaskreq.imageURL = `http://${authResponse.bucket}.${authResponse.endpoint}/${authResponse.objectKey}`;
    let detectMaskResp = await this.detectMask(detectMaskreq, runtime);
    return detectMaskResp;
  }

  async recognizeFace(request: RecognizeFaceRequest, runtime: $Util.RuntimeOptions): Promise<RecognizeFaceResponse> {
    return $tea.cast<RecognizeFaceResponse>(await this._request("RecognizeFace", "HTTPS", "POST", $tea.toMap(request), runtime), new RecognizeFaceResponse({}));
  }

  async recognizeFaceAdvance(request: RecognizeFaceAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<RecognizeFaceResponse> {
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
      product: "facebody",
      regionId: this._regionId,
    });
    let authResponse = await authClient.authorizeFileUpload(authRequest, runtime);
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
    let recognizeFacereq = new RecognizeFaceRequest({ });
    RPCUtil.convert(request, recognizeFacereq);
    recognizeFacereq.imageURL = `http://${authResponse.bucket}.${authResponse.endpoint}/${authResponse.objectKey}`;
    let recognizeFaceResp = await this.recognizeFace(recognizeFacereq, runtime);
    return recognizeFaceResp;
  }

  async compareFace(request: CompareFaceRequest, runtime: $Util.RuntimeOptions): Promise<CompareFaceResponse> {
    return $tea.cast<CompareFaceResponse>(await this._request("CompareFace", "HTTPS", "POST", $tea.toMap(request), runtime), new CompareFaceResponse({}));
  }

  async detectFace(request: DetectFaceRequest, runtime: $Util.RuntimeOptions): Promise<DetectFaceResponse> {
    return $tea.cast<DetectFaceResponse>(await this._request("DetectFace", "HTTPS", "POST", $tea.toMap(request), runtime), new DetectFaceResponse({}));
  }

  async detectFaceAdvance(request: DetectFaceAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<DetectFaceResponse> {
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
      product: "facebody",
      regionId: this._regionId,
    });
    let authResponse = await authClient.authorizeFileUpload(authRequest, runtime);
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
    let detectFacereq = new DetectFaceRequest({ });
    RPCUtil.convert(request, detectFacereq);
    detectFacereq.imageURL = `http://${authResponse.bucket}.${authResponse.endpoint}/${authResponse.objectKey}`;
    let detectFaceResp = await this.detectFace(detectFacereq, runtime);
    return detectFaceResp;
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
