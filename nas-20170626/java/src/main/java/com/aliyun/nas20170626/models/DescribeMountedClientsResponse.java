// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.nas20170626.models;

import com.aliyun.tea.*;

public class DescribeMountedClientsResponse extends TeaModel {
    @NameInMap("RequestId")
    @Validation(required = true)
    public String requestId;

    @NameInMap("TotalCount")
    @Validation(required = true)
    public Integer totalCount;

    @NameInMap("PageSize")
    @Validation(required = true)
    public Integer pageSize;

    @NameInMap("PageNumber")
    @Validation(required = true)
    public Integer pageNumber;

    @NameInMap("Clients")
    @Validation(required = true)
    public DescribeMountedClientsResponseClients clients;

    public static DescribeMountedClientsResponse build(java.util.Map<String, ?> map) throws Exception {
        DescribeMountedClientsResponse self = new DescribeMountedClientsResponse();
        return TeaModel.build(map, self);
    }

    public static class DescribeMountedClientsResponseClientsClient extends TeaModel {
        @NameInMap("ClientIP")
        @Validation(required = true)
        public String clientIP;

        public static DescribeMountedClientsResponseClientsClient build(java.util.Map<String, ?> map) throws Exception {
            DescribeMountedClientsResponseClientsClient self = new DescribeMountedClientsResponseClientsClient();
            return TeaModel.build(map, self);
        }

    }

    public static class DescribeMountedClientsResponseClients extends TeaModel {
        @NameInMap("Client")
        @Validation(required = true)
        public java.util.List<DescribeMountedClientsResponseClientsClient> client;

        public static DescribeMountedClientsResponseClients build(java.util.Map<String, ?> map) throws Exception {
            DescribeMountedClientsResponseClients self = new DescribeMountedClientsResponseClients();
            return TeaModel.build(map, self);
        }

    }

}
