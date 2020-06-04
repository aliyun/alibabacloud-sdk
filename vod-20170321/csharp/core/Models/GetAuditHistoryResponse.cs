// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vod20170321.Models
{
    public class GetAuditHistoryResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Status")]
        [Validation(Required=true)]
        public string Status { get; set; }

        [NameInMap("Total")]
        [Validation(Required=true)]
        public long Total { get; set; }

        [NameInMap("Histories")]
        [Validation(Required=true)]
        public List<GetAuditHistoryResponseHistories> Histories { get; set; }
        public class GetAuditHistoryResponseHistories : TeaModel {
            [NameInMap("CreationTime")]
            [Validation(Required=true)]
            public string CreationTime { get; set; }

            [NameInMap("Status")]
            [Validation(Required=true)]
            public string Status { get; set; }

            [NameInMap("Reason")]
            [Validation(Required=true)]
            public string Reason { get; set; }

            [NameInMap("Comment")]
            [Validation(Required=true)]
            public string Comment { get; set; }

            [NameInMap("Auditor")]
            [Validation(Required=true)]
            public string Auditor { get; set; }

        }

    }

}
