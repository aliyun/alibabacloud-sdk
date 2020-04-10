// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.cs20151215.models;

import com.aliyun.tea.*;

public class AttachInstancesBody extends TeaModel {
    @NameInMap("format_disk")
    @Validation(required = true)
    public Boolean formatDisk;

    @NameInMap("keep_instance_name")
    @Validation(required = true)
    public Boolean keepInstanceName;

    @NameInMap("cpu_policy")
    @Validation(required = true)
    public String cpuPolicy;

    @NameInMap("key_pair")
    @Validation(required = true)
    public String keyPair;

    @NameInMap("password")
    @Validation(required = true)
    public String password;

    @NameInMap("tags")
    @Validation(required = true)
    public java.util.List<AttachInstancesBodyTags> tags;

    @NameInMap("instances")
    @Validation(required = true)
    public java.util.List<String> instances;

    public static AttachInstancesBody build(java.util.Map<String, ?> map) throws Exception {
        AttachInstancesBody self = new AttachInstancesBody();
        return TeaModel.build(map, self);
    }

    public static class AttachInstancesBodyTags extends TeaModel {
        @NameInMap("key")
        @Validation(required = true)
        public String key;

        @NameInMap("value")
        @Validation(required = true)
        public String value;

        public static AttachInstancesBodyTags build(java.util.Map<String, ?> map) throws Exception {
            AttachInstancesBodyTags self = new AttachInstancesBodyTags();
            return TeaModel.build(map, self);
        }

    }

}
