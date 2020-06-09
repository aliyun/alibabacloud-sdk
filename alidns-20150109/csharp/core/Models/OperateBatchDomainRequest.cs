// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Alidns20150109.Models
{
    public class OperateBatchDomainRequest : TeaModel {
        [NameInMap("Lang")]
        [Validation(Required=false)]
        public string Lang { get; set; }

        [NameInMap("Type")]
        [Validation(Required=true)]
        public string Type { get; set; }

        [NameInMap("DomainRecordInfo")]
        [Validation(Required=true)]
        public List<OperateBatchDomainRequestDomainRecordInfo> DomainRecordInfo { get; set; }
        public class OperateBatchDomainRequestDomainRecordInfo : TeaModel {
            [NameInMap("Domain")]
            [Validation(Required=true)]
            public string Domain { get; set; }

            [NameInMap("Type")]
            [Validation(Required=false)]
            public string Type { get; set; }

            [NameInMap("Rr")]
            [Validation(Required=false)]
            public string Rr { get; set; }

            [NameInMap("Value")]
            [Validation(Required=false)]
            public string Value { get; set; }

            [NameInMap("Ttl")]
            [Validation(Required=false)]
            public int? Ttl { get; set; }

            [NameInMap("Priority")]
            [Validation(Required=false)]
            public int? Priority { get; set; }

            [NameInMap("Line")]
            [Validation(Required=false)]
            public string Line { get; set; }

            [NameInMap("NewRr")]
            [Validation(Required=false)]
            public string NewRr { get; set; }

            [NameInMap("NewType")]
            [Validation(Required=false)]
            public string NewType { get; set; }

            [NameInMap("NewValue")]
            [Validation(Required=false)]
            public string NewValue { get; set; }

        }

    }

}
