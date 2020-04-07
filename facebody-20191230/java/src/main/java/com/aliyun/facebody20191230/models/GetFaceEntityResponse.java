// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.facebody20191230.models;

import com.aliyun.tea.*;

public class GetFaceEntityResponse extends TeaModel {
    @NameInMap("RequestId")
    @Validation(required = true)
    public String requestId;

    @NameInMap("Data")
    @Validation(required = true)
    public GetFaceEntityResponseData data;

    public static GetFaceEntityResponse build(java.util.Map<String, ?> map) throws Exception {
        GetFaceEntityResponse self = new GetFaceEntityResponse();
        return TeaModel.build(map, self);
    }

    public static class GetFaceEntityResponseDataFaces extends TeaModel {
        @NameInMap("FaceId")
        @Validation(required = true)
        public String faceId;

        public static GetFaceEntityResponseDataFaces build(java.util.Map<String, ?> map) throws Exception {
            GetFaceEntityResponseDataFaces self = new GetFaceEntityResponseDataFaces();
            return TeaModel.build(map, self);
        }

    }

    public static class GetFaceEntityResponseData extends TeaModel {
        @NameInMap("DbName")
        @Validation(required = true)
        public String dbName;

        @NameInMap("EntityId")
        @Validation(required = true)
        public String entityId;

        @NameInMap("Labels")
        @Validation(required = true)
        public String labels;

        @NameInMap("Faces")
        @Validation(required = true)
        public java.util.List<GetFaceEntityResponseDataFaces> faces;

        public static GetFaceEntityResponseData build(java.util.Map<String, ?> map) throws Exception {
            GetFaceEntityResponseData self = new GetFaceEntityResponseData();
            return TeaModel.build(map, self);
        }

    }

}
