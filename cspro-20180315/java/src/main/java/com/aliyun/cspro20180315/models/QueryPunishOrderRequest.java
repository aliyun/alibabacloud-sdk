// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.cspro20180315.models;

import com.aliyun.tea.*;

public class QueryPunishOrderRequest extends TeaModel {
    @NameInMap("PunishRequestId")
    @Validation(required = true)
    public String punishRequestId;

    public static QueryPunishOrderRequest build(java.util.Map<String, ?> map) throws Exception {
        QueryPunishOrderRequest self = new QueryPunishOrderRequest();
        return TeaModel.build(map, self);
    }

    public QueryPunishOrderRequest setPunishRequestId(String punishRequestId) {
        this.punishRequestId = punishRequestId;
        return this;
    }
    public String getPunishRequestId() {
        return this.punishRequestId;
    }

}
