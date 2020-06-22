// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.BssOpenApi20171214.Models
{
    public class QueryRedeemResponse : TeaModel {
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
        public QueryRedeemResponseData Data { get; set; }
        public class QueryRedeemResponseData : TeaModel {
            [NameInMap("PageNum")]
            [Validation(Required=true)]
            public long PageNum { get; set; }
            [NameInMap("PageSize")]
            [Validation(Required=true)]
            public long PageSize { get; set; }
            [NameInMap("TotalCount")]
            [Validation(Required=true)]
            public long TotalCount { get; set; }
            [NameInMap("Redeem")]
            [Validation(Required=true)]
            public QueryRedeemResponseDataRedeem Redeem { get; set; }
            public class QueryRedeemResponseDataRedeem : TeaModel {
                [NameInMap("Redeem")]
                [Validation(Required=true)]
                public List<QueryRedeemResponseDataRedeemRedeem> Redeem { get; set; }
                public class QueryRedeemResponseDataRedeemRedeem : TeaModel {
                    [NameInMap("RedeemId")]
                    [Validation(Required=true)]
                    public string RedeemId { get; set; }

                    [NameInMap("RedeemNo")]
                    [Validation(Required=true)]
                    public string RedeemNo { get; set; }

                    [NameInMap("Status")]
                    [Validation(Required=true)]
                    public string Status { get; set; }

                    [NameInMap("GrantedTime")]
                    [Validation(Required=true)]
                    public string GrantedTime { get; set; }

                    [NameInMap("EffectiveTime")]
                    [Validation(Required=true)]
                    public string EffectiveTime { get; set; }

                    [NameInMap("ExpiryTime")]
                    [Validation(Required=true)]
                    public string ExpiryTime { get; set; }

                    [NameInMap("NominalValue")]
                    [Validation(Required=true)]
                    public string NominalValue { get; set; }

                    [NameInMap("Balance")]
                    [Validation(Required=true)]
                    public string Balance { get; set; }

                    [NameInMap("ApplicableProducts")]
                    [Validation(Required=true)]
                    public string ApplicableProducts { get; set; }

                    [NameInMap("Specification")]
                    [Validation(Required=true)]
                    public string Specification { get; set; }

                }

            }
        };

    }

}
