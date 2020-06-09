// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Alidns20150109.Models
{
    public class DescribeCustomLineResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Id")]
        [Validation(Required=true)]
        public long Id { get; set; }

        [NameInMap("Name")]
        [Validation(Required=true)]
        public string Name { get; set; }

        [NameInMap("DomainName")]
        [Validation(Required=true)]
        public string DomainName { get; set; }

        [NameInMap("CreateTime")]
        [Validation(Required=true)]
        public string CreateTime { get; set; }

        [NameInMap("CreateTimestamp")]
        [Validation(Required=true)]
        public long CreateTimestamp { get; set; }

        [NameInMap("IpSegments")]
        [Validation(Required=true)]
        public string IpSegments { get; set; }

        [NameInMap("Code")]
        [Validation(Required=true)]
        public string Code { get; set; }

        [NameInMap("IpSegmentList")]
        [Validation(Required=true)]
        public List<DescribeCustomLineResponseIpSegmentList> IpSegmentList { get; set; }
        public class DescribeCustomLineResponseIpSegmentList : TeaModel {
            [NameInMap("Name")]
            [Validation(Required=true)]
            public string Name { get; set; }

            [NameInMap("StartIp")]
            [Validation(Required=true)]
            public string StartIp { get; set; }

            [NameInMap("EndIp")]
            [Validation(Required=true)]
            public string EndIp { get; set; }

        }

    }

}
