// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Alidns20150109.Models
{
    public class DeleteSubDomainRecordsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("RR")]
        [Validation(Required=true)]
        public string RR { get; set; }

        [NameInMap("TotalCount")]
        [Validation(Required=true)]
        public string TotalCount { get; set; }

    }

}
