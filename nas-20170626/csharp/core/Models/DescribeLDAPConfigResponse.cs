// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.NAS20170626.Models
{
    public class DescribeLDAPConfigResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Ldap")]
        [Validation(Required=true)]
        public DescribeLDAPConfigResponseLdap Ldap { get; set; }
        public class DescribeLDAPConfigResponseLdap : TeaModel {
            [NameInMap("BindDN")]
            [Validation(Required=true)]
            public string BindDN { get; set; }
            [NameInMap("URI")]
            [Validation(Required=true)]
            public string URI { get; set; }
            [NameInMap("SearchBase")]
            [Validation(Required=true)]
            public string SearchBase { get; set; }
        };

    }

}
