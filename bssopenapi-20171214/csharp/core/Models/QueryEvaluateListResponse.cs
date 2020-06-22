// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.BssOpenApi20171214.Models
{
    public class QueryEvaluateListResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Success")]
        [Validation(Required=true)]
        public bool? Success { get; set; }

        [NameInMap("Code")]
        [Validation(Required=true)]
        public string Code { get; set; }

        [NameInMap("Message")]
        [Validation(Required=true)]
        public string Message { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public QueryEvaluateListResponseData Data { get; set; }
        public class QueryEvaluateListResponseData : TeaModel {
            [NameInMap("HostId")]
            [Validation(Required=true)]
            public string HostId { get; set; }
            [NameInMap("PageNum")]
            [Validation(Required=true)]
            public int? PageNum { get; set; }
            [NameInMap("PageSize")]
            [Validation(Required=true)]
            public int? PageSize { get; set; }
            [NameInMap("TotalCount")]
            [Validation(Required=true)]
            public int? TotalCount { get; set; }
            [NameInMap("TotalInvoiceAmount")]
            [Validation(Required=true)]
            public long TotalInvoiceAmount { get; set; }
            [NameInMap("TotalUnAppliedInvoiceAmount")]
            [Validation(Required=true)]
            public long TotalUnAppliedInvoiceAmount { get; set; }
            [NameInMap("EvaluateList")]
            [Validation(Required=true)]
            public QueryEvaluateListResponseDataEvaluateList EvaluateList { get; set; }
            public class QueryEvaluateListResponseDataEvaluateList : TeaModel {
                [NameInMap("Evaluate")]
                [Validation(Required=true)]
                public List<QueryEvaluateListResponseDataEvaluateListEvaluate> Evaluate { get; set; }
                public class QueryEvaluateListResponseDataEvaluateListEvaluate : TeaModel {
                    [NameInMap("Id")]
                    [Validation(Required=true)]
                    public long Id { get; set; }

                    [NameInMap("GmtCreate")]
                    [Validation(Required=true)]
                    public string GmtCreate { get; set; }

                    [NameInMap("GmtModified")]
                    [Validation(Required=true)]
                    public string GmtModified { get; set; }

                    [NameInMap("UserId")]
                    [Validation(Required=true)]
                    public long UserId { get; set; }

                    [NameInMap("UserNick")]
                    [Validation(Required=true)]
                    public string UserNick { get; set; }

                    [NameInMap("OutBizId")]
                    [Validation(Required=true)]
                    public string OutBizId { get; set; }

                    [NameInMap("BillId")]
                    [Validation(Required=true)]
                    public long BillId { get; set; }

                    [NameInMap("ItemId")]
                    [Validation(Required=true)]
                    public long ItemId { get; set; }

                    [NameInMap("BillCycle")]
                    [Validation(Required=true)]
                    public string BillCycle { get; set; }

                    [NameInMap("BizType")]
                    [Validation(Required=true)]
                    public string BizType { get; set; }

                    [NameInMap("OriginalAmount")]
                    [Validation(Required=true)]
                    public long OriginalAmount { get; set; }

                    [NameInMap("PresentAmount")]
                    [Validation(Required=true)]
                    public long PresentAmount { get; set; }

                    [NameInMap("CanInvoiceAmount")]
                    [Validation(Required=true)]
                    public long CanInvoiceAmount { get; set; }

                    [NameInMap("InvoicedAmount")]
                    [Validation(Required=true)]
                    public long InvoicedAmount { get; set; }

                    [NameInMap("OffsetCostAmount")]
                    [Validation(Required=true)]
                    public long OffsetCostAmount { get; set; }

                    [NameInMap("OffsetAcceptAmount")]
                    [Validation(Required=true)]
                    public long OffsetAcceptAmount { get; set; }

                    [NameInMap("Status")]
                    [Validation(Required=true)]
                    public int? Status { get; set; }

                    [NameInMap("OpId")]
                    [Validation(Required=true)]
                    public string OpId { get; set; }

                    [NameInMap("Name")]
                    [Validation(Required=true)]
                    public string Name { get; set; }

                    [NameInMap("BizTime")]
                    [Validation(Required=true)]
                    public string BizTime { get; set; }

                    [NameInMap("Type")]
                    [Validation(Required=true)]
                    public int? Type { get; set; }

                }

            }
        };

    }

}
