// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Alidns20150109.Models
{
    public class DescribeTransferDomainsResponse : TeaModel {
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

        [NameInMap("DomainTransfers")]
        [Validation(Required=true)]
        public DescribeTransferDomainsResponseDomainTransfers DomainTransfers { get; set; }
        public class DescribeTransferDomainsResponseDomainTransfers : TeaModel {
            [NameInMap("DomainTransfer")]
            [Validation(Required=true)]
            public List<DescribeTransferDomainsResponseDomainTransfersDomainTransfer> DomainTransfer { get; set; }
            public class DescribeTransferDomainsResponseDomainTransfersDomainTransfer : TeaModel {
                    public string DomainName { get; set; }
                    public string CreateTime { get; set; }
                    public long CreateTimestamp { get; set; }
                    public long FromUserId { get; set; }
                    public long TargetUserId { get; set; }
                    public long Id { get; set; }
            }
        };

    }

}
