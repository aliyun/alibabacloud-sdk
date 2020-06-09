// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Alidns20150109.Models
{
    public class DescribeDNSSLBSubDomainsResponse : TeaModel {
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

        [NameInMap("SlbSubDomains")]
        [Validation(Required=true)]
        public DescribeDNSSLBSubDomainsResponseSlbSubDomains SlbSubDomains { get; set; }
        public class DescribeDNSSLBSubDomainsResponseSlbSubDomains : TeaModel {
            [NameInMap("SlbSubDomain")]
            [Validation(Required=true)]
            public List<DescribeDNSSLBSubDomainsResponseSlbSubDomainsSlbSubDomain> SlbSubDomain { get; set; }
            public class DescribeDNSSLBSubDomainsResponseSlbSubDomainsSlbSubDomain : TeaModel {
                    public string SubDomain { get; set; }
                    public long RecordCount { get; set; }
                    public bool? Open { get; set; }
                    public string Type { get; set; }
            }
        };

    }

}
