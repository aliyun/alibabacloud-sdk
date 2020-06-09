// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.nas20170626.models;

import com.aliyun.tea.*;

public class DescribeLDAPConfigResponse extends TeaModel {
    @NameInMap("RequestId")
    @Validation(required = true)
    public String requestId;

    @NameInMap("Ldap")
    @Validation(required = true)
    public DescribeLDAPConfigResponseLdap ldap;

    public static DescribeLDAPConfigResponse build(java.util.Map<String, ?> map) throws Exception {
        DescribeLDAPConfigResponse self = new DescribeLDAPConfigResponse();
        return TeaModel.build(map, self);
    }

    public static class DescribeLDAPConfigResponseLdap extends TeaModel {
        @NameInMap("BindDN")
        @Validation(required = true)
        public String bindDN;

        @NameInMap("URI")
        @Validation(required = true)
        public String URI;

        @NameInMap("SearchBase")
        @Validation(required = true)
        public String searchBase;

        public static DescribeLDAPConfigResponseLdap build(java.util.Map<String, ?> map) throws Exception {
            DescribeLDAPConfigResponseLdap self = new DescribeLDAPConfigResponseLdap();
            return TeaModel.build(map, self);
        }

    }

}
