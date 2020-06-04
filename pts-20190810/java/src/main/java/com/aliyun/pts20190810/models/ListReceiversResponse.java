// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.pts20190810.models;

import com.aliyun.tea.*;

public class ListReceiversResponse extends TeaModel {
    @NameInMap("RequestId")
    @Validation(required = true)
    public String requestId;

    @NameInMap("Code")
    @Validation(required = true)
    public String code;

    @NameInMap("Message")
    @Validation(required = true)
    public String message;

    @NameInMap("HttpStatusCode")
    @Validation(required = true)
    public Integer httpStatusCode;

    @NameInMap("Success")
    @Validation(required = true)
    public Boolean success;

    @NameInMap("Receivers")
    @Validation(required = true)
    public java.util.List<ListReceiversResponseReceivers> receivers;

    public static ListReceiversResponse build(java.util.Map<String, ?> map) throws Exception {
        ListReceiversResponse self = new ListReceiversResponse();
        return TeaModel.build(map, self);
    }

    public static class ListReceiversResponseReceivers extends TeaModel {
        @NameInMap("Id")
        @Validation(required = true)
        public String id;

        @NameInMap("Name")
        @Validation(required = true)
        public String name;

        @NameInMap("EmailCheckCode")
        @Validation(required = true)
        public String emailCheckCode;

        @NameInMap("MobileCheckCode")
        @Validation(required = true)
        public String mobileCheckCode;

        @NameInMap("DingTalk")
        @Validation(required = true)
        public String dingTalk;

        @NameInMap("Mobile")
        @Validation(required = true)
        public String mobile;

        @NameInMap("Source")
        @Validation(required = true)
        public String source;

        @NameInMap("Deleted")
        @Validation(required = true)
        public Integer deleted;

        @NameInMap("Email")
        @Validation(required = true)
        public String email;

        @NameInMap("Wangwang")
        @Validation(required = true)
        public String wangwang;

        @NameInMap("Uid")
        @Validation(required = true)
        public String uid;

        public static ListReceiversResponseReceivers build(java.util.Map<String, ?> map) throws Exception {
            ListReceiversResponseReceivers self = new ListReceiversResponseReceivers();
            return TeaModel.build(map, self);
        }

    }

}
