// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.cs20151215.models;

import com.aliyun.tea.*;

public class CreateTriggerHookBody extends TeaModel {
    @NameInMap("region_id")
    public String regionId;

    @NameInMap("cluster_id")
    public String clusterId;

    @NameInMap("project_id")
    public String projectId;

    @NameInMap("action")
    public String action;

    @NameInMap("trigger_url")
    public String triggerUrl;

    public static CreateTriggerHookBody build(java.util.Map<String, ?> map) throws Exception {
        CreateTriggerHookBody self = new CreateTriggerHookBody();
        return TeaModel.build(map, self);
    }

}
