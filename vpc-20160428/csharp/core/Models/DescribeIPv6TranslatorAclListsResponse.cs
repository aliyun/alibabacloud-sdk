// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class DescribeIPv6TranslatorAclListsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("TotalCount")]
        [Validation(Required=true)]
        public int? TotalCount { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public int? PageSize { get; set; }

        [NameInMap("Ipv6TranslatorAcls")]
        [Validation(Required=true)]
        public DescribeIPv6TranslatorAclListsResponseIpv6TranslatorAcls Ipv6TranslatorAcls { get; set; }
        public class DescribeIPv6TranslatorAclListsResponseIpv6TranslatorAcls : TeaModel {
            [NameInMap("IPv6TranslatorAcl")]
            [Validation(Required=true)]
            public List<DescribeIPv6TranslatorAclListsResponseIpv6TranslatorAclsIPv6TranslatorAcl> IPv6TranslatorAcl { get; set; }
            public class DescribeIPv6TranslatorAclListsResponseIpv6TranslatorAclsIPv6TranslatorAcl : TeaModel {
                    public string AclId { get; set; }
                    public string AclName { get; set; }
            }
        };

    }

}
