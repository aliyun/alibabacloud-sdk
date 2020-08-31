// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.cspro20180315.models;

import com.aliyun.tea.*;

public class PostPunishOrderRequest extends TeaModel {
    @NameInMap("PunishOrderReq")
    @Validation(required = true)
    public java.util.Map<String, ?> punishOrderReq;

    public static PostPunishOrderRequest build(java.util.Map<String, ?> map) throws Exception {
        PostPunishOrderRequest self = new PostPunishOrderRequest();
        return TeaModel.build(map, self);
    }

    public PostPunishOrderRequest setPunishOrderReq(java.util.Map<String, ?> punishOrderReq) {
        this.punishOrderReq = punishOrderReq;
        return this;
    }
    public java.util.Map<String, ?> getPunishOrderReq() {
        return this.punishOrderReq;
    }

}
