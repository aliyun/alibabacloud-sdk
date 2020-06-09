// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Alidns20150109.Models
{
    public class DescribeGtmInstanceResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("InstanceId")]
        [Validation(Required=true)]
        public string InstanceId { get; set; }

        [NameInMap("InstanceName")]
        [Validation(Required=true)]
        public string InstanceName { get; set; }

        [NameInMap("VersionCode")]
        [Validation(Required=true)]
        public string VersionCode { get; set; }

        [NameInMap("ExpireTime")]
        [Validation(Required=true)]
        public string ExpireTime { get; set; }

        [NameInMap("ExpireTimestamp")]
        [Validation(Required=true)]
        public long ExpireTimestamp { get; set; }

        [NameInMap("Cname")]
        [Validation(Required=true)]
        public string Cname { get; set; }

        [NameInMap("UserDomainName")]
        [Validation(Required=true)]
        public string UserDomainName { get; set; }

        [NameInMap("Ttl")]
        [Validation(Required=true)]
        public int? Ttl { get; set; }

        [NameInMap("LbaStrategy")]
        [Validation(Required=true)]
        public string LbaStrategy { get; set; }

        [NameInMap("CreateTime")]
        [Validation(Required=true)]
        public string CreateTime { get; set; }

        [NameInMap("CreateTimestamp")]
        [Validation(Required=true)]
        public long CreateTimestamp { get; set; }

        [NameInMap("AlertGroup")]
        [Validation(Required=true)]
        public string AlertGroup { get; set; }

        [NameInMap("CnameMode")]
        [Validation(Required=true)]
        public string CnameMode { get; set; }

        [NameInMap("AccessStrategyNum")]
        [Validation(Required=true)]
        public int? AccessStrategyNum { get; set; }

        [NameInMap("AddressPoolNum")]
        [Validation(Required=true)]
        public int? AddressPoolNum { get; set; }

    }

}
