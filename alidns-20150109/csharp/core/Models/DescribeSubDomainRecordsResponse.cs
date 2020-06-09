// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Alidns20150109.Models
{
    public class DescribeSubDomainRecordsResponse : TeaModel {
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

        [NameInMap("DomainRecords")]
        [Validation(Required=true)]
        public DescribeSubDomainRecordsResponseDomainRecords DomainRecords { get; set; }
        public class DescribeSubDomainRecordsResponseDomainRecords : TeaModel {
            [NameInMap("Record")]
            [Validation(Required=true)]
            public List<DescribeSubDomainRecordsResponseDomainRecordsRecord> Record { get; set; }
            public class DescribeSubDomainRecordsResponseDomainRecordsRecord : TeaModel {
                    public string DomainName { get; set; }
                    public string RecordId { get; set; }
                    public string RR { get; set; }
                    public string Type { get; set; }
                    public string Value { get; set; }
                    public long TTL { get; set; }
                    public long Priority { get; set; }
                    public string Line { get; set; }
                    public string Status { get; set; }
                    public bool? Locked { get; set; }
                    public int? Weight { get; set; }
            }
        };

    }

}
