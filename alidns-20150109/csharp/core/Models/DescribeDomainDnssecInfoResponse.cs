// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Alidns20150109.Models
{
    public class DescribeDomainDnssecInfoResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("DomainName")]
        [Validation(Required=true)]
        public string DomainName { get; set; }

        [NameInMap("Status")]
        [Validation(Required=true)]
        public string Status { get; set; }

        [NameInMap("DsRecord")]
        [Validation(Required=true)]
        public string DsRecord { get; set; }

        [NameInMap("Digest")]
        [Validation(Required=true)]
        public string Digest { get; set; }

        [NameInMap("DigestType")]
        [Validation(Required=true)]
        public string DigestType { get; set; }

        [NameInMap("Algorithm")]
        [Validation(Required=true)]
        public string Algorithm { get; set; }

        [NameInMap("PublicKey")]
        [Validation(Required=true)]
        public string PublicKey { get; set; }

        [NameInMap("KeyTag")]
        [Validation(Required=true)]
        public string KeyTag { get; set; }

        [NameInMap("Flags")]
        [Validation(Required=true)]
        public string Flags { get; set; }

    }

}
