// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.cs20151215.models;

import com.aliyun.tea.*;

public class AttachInstancesResponseBody extends TeaModel {
    @NameInMap("task_id")
    @Validation(required = true)
    public String taskId;

    @NameInMap("list")
    @Validation(required = true)
    public AttachInstancesResponseBodyList list;

    public static AttachInstancesResponseBody build(java.util.Map<String, ?> map) throws Exception {
        AttachInstancesResponseBody self = new AttachInstancesResponseBody();
        return TeaModel.build(map, self);
    }

    public static class AttachInstancesResponseBodyListList extends TeaModel {
        @NameInMap("code")
        @Validation(required = true)
        public String code;

        @NameInMap("instanceId")
        @Validation(required = true)
        public String instanceId;

        @NameInMap("message")
        @Validation(required = true)
        public String message;

        public static AttachInstancesResponseBodyListList build(java.util.Map<String, ?> map) throws Exception {
            AttachInstancesResponseBodyListList self = new AttachInstancesResponseBodyListList();
            return TeaModel.build(map, self);
        }

    }

    public static class AttachInstancesResponseBodyList extends TeaModel {
        @NameInMap("list")
        @Validation(required = true)
        public java.util.List<AttachInstancesResponseBodyListList> list;

        public static AttachInstancesResponseBodyList build(java.util.Map<String, ?> map) throws Exception {
            AttachInstancesResponseBodyList self = new AttachInstancesResponseBodyList();
            return TeaModel.build(map, self);
        }

    }

}
