// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class DescribeIPv6TranslatorsResponse : TeaModel {
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

        [NameInMap("Ipv6Translators")]
        [Validation(Required=true)]
        public DescribeIPv6TranslatorsResponseIpv6Translators Ipv6Translators { get; set; }
        public class DescribeIPv6TranslatorsResponseIpv6Translators : TeaModel {
            [NameInMap("Ipv6Translator")]
            [Validation(Required=true)]
            public List<DescribeIPv6TranslatorsResponseIpv6TranslatorsIpv6Translator> Ipv6Translator { get; set; }
            public class DescribeIPv6TranslatorsResponseIpv6TranslatorsIpv6Translator : TeaModel {
                    public string Ipv6TranslatorId { get; set; }
                    public long CreateTime { get; set; }
                    public long EndTime { get; set; }
                    public string Spec { get; set; }
                    public string Name { get; set; }
                    public string Description { get; set; }
                    public string Status { get; set; }
                    public string BusinessStatus { get; set; }
                    public string PayType { get; set; }
                    public int? Bandwidth { get; set; }
                    public string AllocateIpv6Addr { get; set; }
                    public string AllocateIpv4Addr { get; set; }
                    public string AvailableBandwidth { get; set; }
                    public string RegionId { get; set; }
                    public DescribeIPv6TranslatorsResponseIpv6TranslatorsIpv6TranslatorIpv6TranslatorEntryIds Ipv6TranslatorEntryIds { get; set; }
                    public class DescribeIPv6TranslatorsResponseIpv6TranslatorsIpv6TranslatorIpv6TranslatorEntryIds : TeaModel {
                        [NameInMap("Ipv6TranslatorEntryId")]
                        [Validation(Required=true)]
                        public List<string> Ipv6TranslatorEntryId { get; set; }

                    }
            }
        };

    }

}
