// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.facebody.models;

import com.aliyun.tea.*;

public class ListFaceDbsResponse extends TeaModel {
    @NameInMap("RequestId")
    @Validation(required = true)
    public String requestId;

    @NameInMap("Data")
    @Validation(required = true)
    public ListFaceDbsResponseData data;

    public static ListFaceDbsResponse build(java.util.Map<String, ?> map) throws Exception {
        ListFaceDbsResponse self = new ListFaceDbsResponse();
        return TeaModel.build(map, self);
    }

    public static class ListFaceDbsResponseDataDbList extends TeaModel {
        @NameInMap("Name")
        @Validation(required = true)
        public String name;

        public static ListFaceDbsResponseDataDbList build(java.util.Map<String, ?> map) throws Exception {
            ListFaceDbsResponseDataDbList self = new ListFaceDbsResponseDataDbList();
            return TeaModel.build(map, self);
        }

    }

    public static class ListFaceDbsResponseData extends TeaModel {
        @NameInMap("DbList")
        @Validation(required = true)
        public java.util.List<ListFaceDbsResponseDataDbList> dbList;

        public static ListFaceDbsResponseData build(java.util.Map<String, ?> map) throws Exception {
            ListFaceDbsResponseData self = new ListFaceDbsResponseData();
            return TeaModel.build(map, self);
        }

    }

}
