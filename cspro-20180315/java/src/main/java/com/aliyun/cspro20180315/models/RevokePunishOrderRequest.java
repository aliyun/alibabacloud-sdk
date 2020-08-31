// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.cspro20180315.models;

import com.aliyun.tea.*;

public class RevokePunishOrderRequest extends TeaModel {
    @NameInMap("PunishRequestId")
    @Validation(required = true)
    public String punishRequestId;

    public static RevokePunishOrderRequest build(java.util.Map<String, ?> map) throws Exception {
        RevokePunishOrderRequest self = new RevokePunishOrderRequest();
        return TeaModel.build(map, self);
    }

    public RevokePunishOrderRequest setPunishRequestId(String punishRequestId) {
        this.punishRequestId = punishRequestId;
        return this;
    }
    public String getPunishRequestId() {
        return this.punishRequestId;
    }

}
