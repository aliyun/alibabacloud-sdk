// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.facebody20191230.models;

import com.aliyun.tea.*;

public class ListFaceEntitiesResponse extends TeaModel {
    @NameInMap("RequestId")
    @Validation(required = true)
    public String requestId;

    @NameInMap("Data")
    @Validation(required = true)
    public ListFaceEntitiesResponseData data;

    public static ListFaceEntitiesResponse build(java.util.Map<String, ?> map) throws Exception {
        ListFaceEntitiesResponse self = new ListFaceEntitiesResponse();
        return TeaModel.build(map, self);
    }

    public static class ListFaceEntitiesResponseDataEntities extends TeaModel {
        @NameInMap("DbName")
        @Validation(required = true)
        public String dbName;

        @NameInMap("EntityId")
        @Validation(required = true)
        public String entityId;

        @NameInMap("FaceCount")
        @Validation(required = true)
        public Integer faceCount;

        @NameInMap("Labels")
        @Validation(required = true)
        public String labels;

        @NameInMap("CreatedAt")
        @Validation(required = true)
        public Long createdAt;

        @NameInMap("UpdatedAt")
        @Validation(required = true)
        public Long updatedAt;

        public static ListFaceEntitiesResponseDataEntities build(java.util.Map<String, ?> map) throws Exception {
            ListFaceEntitiesResponseDataEntities self = new ListFaceEntitiesResponseDataEntities();
            return TeaModel.build(map, self);
        }

    }

    public static class ListFaceEntitiesResponseData extends TeaModel {
        @NameInMap("Token")
        @Validation(required = true)
        public String token;

        @NameInMap("TotalCount")
        @Validation(required = true)
        public Integer totalCount;

        @NameInMap("Entities")
        @Validation(required = true)
        public java.util.List<ListFaceEntitiesResponseDataEntities> entities;

        public static ListFaceEntitiesResponseData build(java.util.Map<String, ?> map) throws Exception {
            ListFaceEntitiesResponseData self = new ListFaceEntitiesResponseData();
            return TeaModel.build(map, self);
        }

    }

}
