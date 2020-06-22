// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.BssOpenApi20171214.Models
{
    public class QueryRIUtilizationDetailResponse : TeaModel {
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
        public QueryRIUtilizationDetailResponseData Data { get; set; }
        public class QueryRIUtilizationDetailResponseData : TeaModel {
            [NameInMap("PageNum")]
            [Validation(Required=true)]
            public long PageNum { get; set; }
            [NameInMap("PageSize")]
            [Validation(Required=true)]
            public long PageSize { get; set; }
            [NameInMap("TotalCount")]
            [Validation(Required=true)]
            public long TotalCount { get; set; }
            [NameInMap("DetailList")]
            [Validation(Required=true)]
            public QueryRIUtilizationDetailResponseDataDetailList DetailList { get; set; }
            public class QueryRIUtilizationDetailResponseDataDetailList : TeaModel {
                [NameInMap("DetailList")]
                [Validation(Required=true)]
                public List<QueryRIUtilizationDetailResponseDataDetailListDetailList> DetailList { get; set; }
                public class QueryRIUtilizationDetailResponseDataDetailListDetailList : TeaModel {
                    [NameInMap("RIInstanceId")]
                    [Validation(Required=true)]
                    public string RIInstanceId { get; set; }

                    [NameInMap("InstanceSpec")]
                    [Validation(Required=true)]
                    public string InstanceSpec { get; set; }

                    [NameInMap("DeductedInstanceId")]
                    [Validation(Required=true)]
                    public string DeductedInstanceId { get; set; }

                    [NameInMap("DeductedCommodityCode")]
                    [Validation(Required=true)]
                    public string DeductedCommodityCode { get; set; }

                    [NameInMap("DeductDate")]
                    [Validation(Required=true)]
                    public string DeductDate { get; set; }

                    [NameInMap("DeductHours")]
                    [Validation(Required=true)]
                    public string DeductHours { get; set; }

                    [NameInMap("DeductedProductDetail")]
                    [Validation(Required=true)]
                    public string DeductedProductDetail { get; set; }

                    [NameInMap("DeductQuantity")]
                    [Validation(Required=true)]
                    public float? DeductQuantity { get; set; }

                    [NameInMap("DeductFactorTotal")]
                    [Validation(Required=true)]
                    public float? DeductFactorTotal { get; set; }

                }

            }
        };

    }

}
