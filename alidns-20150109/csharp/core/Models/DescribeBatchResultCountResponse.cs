// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Alidns20150109.Models
{
    public class DescribeBatchResultCountResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Status")]
        [Validation(Required=true)]
        public int? Status { get; set; }

        [NameInMap("TotalCount")]
        [Validation(Required=true)]
        public int? TotalCount { get; set; }

        [NameInMap("SuccessCount")]
        [Validation(Required=true)]
        public int? SuccessCount { get; set; }

        [NameInMap("FailedCount")]
        [Validation(Required=true)]
        public int? FailedCount { get; set; }

        [NameInMap("Reason")]
        [Validation(Required=true)]
        public string Reason { get; set; }

        [NameInMap("BatchType")]
        [Validation(Required=true)]
        public string BatchType { get; set; }

        [NameInMap("TaskId")]
        [Validation(Required=true)]
        public long TaskId { get; set; }

    }

}
