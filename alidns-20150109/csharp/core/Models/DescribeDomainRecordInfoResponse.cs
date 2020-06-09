// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Alidns20150109.Models
{
    public class DescribeDomainRecordInfoResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("DomainId")]
        [Validation(Required=true)]
        public string DomainId { get; set; }

        [NameInMap("DomainName")]
        [Validation(Required=true)]
        public string DomainName { get; set; }

        [NameInMap("PunyCode")]
        [Validation(Required=true)]
        public string PunyCode { get; set; }

        [NameInMap("GroupId")]
        [Validation(Required=true)]
        public string GroupId { get; set; }

        [NameInMap("GroupName")]
        [Validation(Required=true)]
        public string GroupName { get; set; }

        [NameInMap("RecordId")]
        [Validation(Required=true)]
        public string RecordId { get; set; }

        [NameInMap("RR")]
        [Validation(Required=true)]
        public string RR { get; set; }

        [NameInMap("Type")]
        [Validation(Required=true)]
        public string Type { get; set; }

        [NameInMap("Value")]
        [Validation(Required=true)]
        public string Value { get; set; }

        [NameInMap("TTL")]
        [Validation(Required=true)]
        public long TTL { get; set; }

        [NameInMap("Priority")]
        [Validation(Required=true)]
        public long Priority { get; set; }

        [NameInMap("Line")]
        [Validation(Required=true)]
        public string Line { get; set; }

        [NameInMap("Status")]
        [Validation(Required=true)]
        public string Status { get; set; }

        [NameInMap("Locked")]
        [Validation(Required=true)]
        public bool? Locked { get; set; }

    }

}
