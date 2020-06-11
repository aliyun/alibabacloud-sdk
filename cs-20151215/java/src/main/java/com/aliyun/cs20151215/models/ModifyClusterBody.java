// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.cs20151215.models;

import com.aliyun.tea.*;

public class ModifyClusterBody extends TeaModel {
    @NameInMap("deletion_protection")
    @Validation(required = true)
    public Boolean deletionProtection;

    @NameInMap("ingress_loadbalancer_id")
    @Validation(required = true)
    public String ingressLoadbalancerId;

    @NameInMap("api_server_eip")
    @Validation(required = true)
    public Boolean apiServerEip;

    @NameInMap("api_server_eip_id")
    @Validation(required = true)
    public String apiServerEipId;

    @NameInMap("resource_group_id")
    @Validation(required = true)
    public String resourceGroupId;

    public static ModifyClusterBody build(java.util.Map<String, ?> map) throws Exception {
        ModifyClusterBody self = new ModifyClusterBody();
        return TeaModel.build(map, self);
    }

}
