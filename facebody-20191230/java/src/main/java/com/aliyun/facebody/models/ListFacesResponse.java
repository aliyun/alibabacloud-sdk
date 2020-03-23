// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.facebody.models;

import com.aliyun.tea.*;

public class ListFacesResponse extends TeaModel {
    @NameInMap("RequestId")
    @Validation(required = true)
    public String requestId;

    @NameInMap("Data")
    @Validation(required = true)
    public ListFacesResponseData data;

    public static ListFacesResponse build(java.util.Map<String, ?> map) throws Exception {
        ListFacesResponse self = new ListFacesResponse();
        return TeaModel.build(map, self);
    }

    public static class ListFacesResponseDataFaceList extends TeaModel {
        @NameInMap("FaceId")
        @Validation(required = true)
        public String faceId;

        @NameInMap("ExtraData")
        @Validation(required = true)
        public String extraData;

        @NameInMap("EntityId")
        @Validation(required = true)
        public String entityId;

        @NameInMap("ImageUrl")
        @Validation(required = true)
        public String imageUrl;

        public static ListFacesResponseDataFaceList build(java.util.Map<String, ?> map) throws Exception {
            ListFacesResponseDataFaceList self = new ListFacesResponseDataFaceList();
            return TeaModel.build(map, self);
        }

    }

    public static class ListFacesResponseData extends TeaModel {
        @NameInMap("ScrollId")
        @Validation(required = true)
        public String scrollId;

        @NameInMap("FaceList")
        @Validation(required = true)
        public java.util.List<ListFacesResponseDataFaceList> faceList;

        public static ListFacesResponseData build(java.util.Map<String, ?> map) throws Exception {
            ListFacesResponseData self = new ListFacesResponseData();
            return TeaModel.build(map, self);
        }

    }

}
