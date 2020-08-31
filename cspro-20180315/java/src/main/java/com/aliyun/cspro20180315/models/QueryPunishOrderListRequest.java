// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.cspro20180315.models;

import com.aliyun.tea.*;

public class QueryPunishOrderListRequest extends TeaModel {
    @NameInMap("PunishOrderListRequest")
    @Validation(required = true)
    public java.util.Map<String, ?> punishOrderListRequest;

    public static QueryPunishOrderListRequest build(java.util.Map<String, ?> map) throws Exception {
        QueryPunishOrderListRequest self = new QueryPunishOrderListRequest();
        return TeaModel.build(map, self);
    }

    public QueryPunishOrderListRequest setPunishOrderListRequest(java.util.Map<String, ?> punishOrderListRequest) {
        this.punishOrderListRequest = punishOrderListRequest;
        return this;
    }
    public java.util.Map<String, ?> getPunishOrderListRequest() {
        return this.punishOrderListRequest;
    }

}
