// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Alidns20150109.Models
{
    public class DescribeDomainGroupsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("TotalCount")]
        [Validation(Required=true)]
        public long TotalCount { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public long PageNumber { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public long PageSize { get; set; }

        [NameInMap("DomainGroups")]
        [Validation(Required=true)]
        public DescribeDomainGroupsResponseDomainGroups DomainGroups { get; set; }
        public class DescribeDomainGroupsResponseDomainGroups : TeaModel {
            [NameInMap("DomainGroup")]
            [Validation(Required=true)]
            public List<DescribeDomainGroupsResponseDomainGroupsDomainGroup> DomainGroup { get; set; }
            public class DescribeDomainGroupsResponseDomainGroupsDomainGroup : TeaModel {
                    public string GroupId { get; set; }
                    public string GroupName { get; set; }
                    public long DomainCount { get; set; }
            }
        };

    }

}
