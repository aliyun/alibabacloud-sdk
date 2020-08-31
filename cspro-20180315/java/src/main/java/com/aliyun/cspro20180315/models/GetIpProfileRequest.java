// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.cspro20180315.models;

import com.aliyun.tea.*;

public class GetIpProfileRequest extends TeaModel {
    @NameInMap("Ip")
    @Validation(required = true)
    public String ip;

    public static GetIpProfileRequest build(java.util.Map<String, ?> map) throws Exception {
        GetIpProfileRequest self = new GetIpProfileRequest();
        return TeaModel.build(map, self);
    }

    public GetIpProfileRequest setIp(String ip) {
        this.ip = ip;
        return this;
    }
    public String getIp() {
        return this.ip;
    }

}
