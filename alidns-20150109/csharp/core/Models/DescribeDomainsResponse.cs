// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Alidns20150109.Models
{
    public class DescribeDomainsResponse : TeaModel {
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

        [NameInMap("Domains")]
        [Validation(Required=true)]
        public DescribeDomainsResponseDomains Domains { get; set; }
        public class DescribeDomainsResponseDomains : TeaModel {
            [NameInMap("Domain")]
            [Validation(Required=true)]
            public List<DescribeDomainsResponseDomainsDomain> Domain { get; set; }
            public class DescribeDomainsResponseDomainsDomain : TeaModel {
                    public string DomainId { get; set; }
                    public string DomainName { get; set; }
                    public string PunyCode { get; set; }
                    public bool? AliDomain { get; set; }
                    public long RecordCount { get; set; }
                    public string RegistrantEmail { get; set; }
                    public string Remark { get; set; }
                    public string GroupId { get; set; }
                    public string GroupName { get; set; }
                    public string InstanceId { get; set; }
                    public string VersionCode { get; set; }
                    public string VersionName { get; set; }
                    public string InstanceEndTime { get; set; }
                    public bool? InstanceExpired { get; set; }
                    public bool? Starmark { get; set; }
                    public string CreateTime { get; set; }
                    public long CreateTimestamp { get; set; }
                    public DescribeDomainsResponseDomainsDomainTags Tags { get; set; }
                    public class DescribeDomainsResponseDomainsDomainTags : TeaModel {
                        [NameInMap("Tag")]
                        [Validation(Required=true)]
                        public List<DescribeDomainsResponseDomainsDomainTagsTag> Tag { get; set; }
                        public class DescribeDomainsResponseDomainsDomainTagsTag : TeaModel {
                            [NameInMap("Key")]
                            [Validation(Required=true)]
                            public string Key { get; set; }

                            [NameInMap("Value")]
                            [Validation(Required=true)]
                            public string Value { get; set; }

                        }

                    }
                    public DescribeDomainsResponseDomainsDomainDnsServers DnsServers { get; set; }
                    public class DescribeDomainsResponseDomainsDomainDnsServers : TeaModel {
                        [NameInMap("DnsServer")]
                        [Validation(Required=true)]
                        public List<string> DnsServer { get; set; }

                    }
            }
        };

    }

}
