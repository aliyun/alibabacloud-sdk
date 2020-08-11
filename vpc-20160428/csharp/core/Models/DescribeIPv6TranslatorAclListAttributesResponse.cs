// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class DescribeIPv6TranslatorAclListAttributesResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("AclId")]
        [Validation(Required=true)]
        public string AclId { get; set; }

        [NameInMap("AclName")]
        [Validation(Required=true)]
        public string AclName { get; set; }

        [NameInMap("TotalCount")]
        [Validation(Required=true)]
        public int? TotalCount { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public int? PageSize { get; set; }

        [NameInMap("AclEntries")]
        [Validation(Required=true)]
        public DescribeIPv6TranslatorAclListAttributesResponseAclEntries AclEntries { get; set; }
        public class DescribeIPv6TranslatorAclListAttributesResponseAclEntries : TeaModel {
            [NameInMap("AclEntry")]
            [Validation(Required=true)]
            public List<DescribeIPv6TranslatorAclListAttributesResponseAclEntriesAclEntry> AclEntry { get; set; }
            public class DescribeIPv6TranslatorAclListAttributesResponseAclEntriesAclEntry : TeaModel {
                    public string AclEntryId { get; set; }
                    public string AclEntryIp { get; set; }
                    public string AclEntryComment { get; set; }
            }
        };

    }

}
