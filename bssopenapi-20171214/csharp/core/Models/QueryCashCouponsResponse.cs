// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.BssOpenApi20171214.Models
{
    public class QueryCashCouponsResponse : TeaModel {
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
        public QueryCashCouponsResponseData Data { get; set; }
        public class QueryCashCouponsResponseData : TeaModel {
            [NameInMap("CashCoupon")]
            [Validation(Required=true)]
            public List<QueryCashCouponsResponseDataCashCoupon> CashCoupon { get; set; }
            public class QueryCashCouponsResponseDataCashCoupon : TeaModel {
                    public long CashCouponId { get; set; }
                    public string CashCouponNo { get; set; }
                    public string GrantedTime { get; set; }
                    public string EffectiveTime { get; set; }
                    public string ExpiryTime { get; set; }
                    public string ApplicableProducts { get; set; }
                    public string ApplicableScenarios { get; set; }
                    public string NominalValue { get; set; }
                    public string Balance { get; set; }
                    public string Status { get; set; }
            }
        };

    }

}
