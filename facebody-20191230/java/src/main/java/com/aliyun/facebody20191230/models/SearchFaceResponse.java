// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.facebody20191230.models;

import com.aliyun.tea.*;

public class SearchFaceResponse extends TeaModel {
    @NameInMap("RequestId")
    @Validation(required = true)
    public String requestId;

    @NameInMap("Data")
    @Validation(required = true)
    public SearchFaceResponseData data;

    public static SearchFaceResponse build(java.util.Map<String, ?> map) throws Exception {
        SearchFaceResponse self = new SearchFaceResponse();
        return TeaModel.build(map, self);
    }

    public static class SearchFaceResponseDataMatchListFaceItems extends TeaModel {
        @NameInMap("FaceId")
        @Validation(required = true)
        public String faceId;

        @NameInMap("Score")
        @Validation(required = true)
        public Double score;

        @NameInMap("ExtraData")
        @Validation(required = true)
        public String extraData;

        @NameInMap("EntityId")
        @Validation(required = true)
        public String entityId;

        public static SearchFaceResponseDataMatchListFaceItems build(java.util.Map<String, ?> map) throws Exception {
            SearchFaceResponseDataMatchListFaceItems self = new SearchFaceResponseDataMatchListFaceItems();
            return TeaModel.build(map, self);
        }

    }

    public static class SearchFaceResponseDataMatchListLocation extends TeaModel {
        @NameInMap("X")
        @Validation(required = true)
        public Integer x;

        @NameInMap("Y")
        @Validation(required = true)
        public Integer y;

        @NameInMap("Width")
        @Validation(required = true)
        public Integer width;

        @NameInMap("Height")
        @Validation(required = true)
        public Integer height;

        public static SearchFaceResponseDataMatchListLocation build(java.util.Map<String, ?> map) throws Exception {
            SearchFaceResponseDataMatchListLocation self = new SearchFaceResponseDataMatchListLocation();
            return TeaModel.build(map, self);
        }

    }

    public static class SearchFaceResponseDataMatchList extends TeaModel {
        @NameInMap("FaceItems")
        @Validation(required = true)
        public java.util.List<SearchFaceResponseDataMatchListFaceItems> faceItems;

        @NameInMap("Location")
        @Validation(required = true)
        public SearchFaceResponseDataMatchListLocation location;

        public static SearchFaceResponseDataMatchList build(java.util.Map<String, ?> map) throws Exception {
            SearchFaceResponseDataMatchList self = new SearchFaceResponseDataMatchList();
            return TeaModel.build(map, self);
        }

    }

    public static class SearchFaceResponseData extends TeaModel {
        @NameInMap("MatchList")
        @Validation(required = true)
        public java.util.List<SearchFaceResponseDataMatchList> matchList;

        public static SearchFaceResponseData build(java.util.Map<String, ?> map) throws Exception {
            SearchFaceResponseData self = new SearchFaceResponseData();
            return TeaModel.build(map, self);
        }

    }

}
