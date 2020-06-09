// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Alidns20150109.Models
{
    public class DescribeBatchResultDetailResponse : TeaModel {
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

        [NameInMap("BatchResultDetails")]
        [Validation(Required=true)]
        public DescribeBatchResultDetailResponseBatchResultDetails BatchResultDetails { get; set; }
        public class DescribeBatchResultDetailResponseBatchResultDetails : TeaModel {
            [NameInMap("BatchResultDetail")]
            [Validation(Required=true)]
            public List<DescribeBatchResultDetailResponseBatchResultDetailsBatchResultDetail> BatchResultDetail { get; set; }
            public class DescribeBatchResultDetailResponseBatchResultDetailsBatchResultDetail : TeaModel {
                    public string Domain { get; set; }
                    public string Type { get; set; }
                    public string Rr { get; set; }
                    public string Value { get; set; }
                    public bool? Status { get; set; }
                    public string Reason { get; set; }
                    public string NewRr { get; set; }
                    public string NewValue { get; set; }
                    public string BatchType { get; set; }
                    public string OperateDateStr { get; set; }
                    public string Line { get; set; }
                    public string Priority { get; set; }
                    public string Ttl { get; set; }
                    public string RecordId { get; set; }
                    public string Remark { get; set; }
                    public string RrStatus { get; set; }
            }
        };

    }

}
