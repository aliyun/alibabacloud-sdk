// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.BssOpenApi20171214.Models
{
    public class QueryAccountTransactionsResponse : TeaModel {
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
        public QueryAccountTransactionsResponseData Data { get; set; }
        public class QueryAccountTransactionsResponseData : TeaModel {
            [NameInMap("AccountName")]
            [Validation(Required=true)]
            public string AccountName { get; set; }
            [NameInMap("TotalCount")]
            [Validation(Required=true)]
            public int? TotalCount { get; set; }
            [NameInMap("PageNum")]
            [Validation(Required=true)]
            public int? PageNum { get; set; }
            [NameInMap("PageSize")]
            [Validation(Required=true)]
            public int? PageSize { get; set; }
            [NameInMap("AccountTransactionsList")]
            [Validation(Required=true)]
            public QueryAccountTransactionsResponseDataAccountTransactionsList AccountTransactionsList { get; set; }
            public class QueryAccountTransactionsResponseDataAccountTransactionsList : TeaModel {
                [NameInMap("AccountTransactionsList")]
                [Validation(Required=true)]
                public List<QueryAccountTransactionsResponseDataAccountTransactionsListAccountTransactionsList> AccountTransactionsList { get; set; }
                public class QueryAccountTransactionsResponseDataAccountTransactionsListAccountTransactionsList : TeaModel {
                    [NameInMap("TransactionNumber")]
                    [Validation(Required=true)]
                    public string TransactionNumber { get; set; }

                    [NameInMap("TransactionTime")]
                    [Validation(Required=true)]
                    public string TransactionTime { get; set; }

                    [NameInMap("TransactionFlow")]
                    [Validation(Required=true)]
                    public string TransactionFlow { get; set; }

                    [NameInMap("TransactionType")]
                    [Validation(Required=true)]
                    public string TransactionType { get; set; }

                    [NameInMap("TransactionChannel")]
                    [Validation(Required=true)]
                    public string TransactionChannel { get; set; }

                    [NameInMap("TransactionChannelSN")]
                    [Validation(Required=true)]
                    public string TransactionChannelSN { get; set; }

                    [NameInMap("FundType")]
                    [Validation(Required=true)]
                    public string FundType { get; set; }

                    [NameInMap("RecordID")]
                    [Validation(Required=true)]
                    public string RecordID { get; set; }

                    [NameInMap("Remarks")]
                    [Validation(Required=true)]
                    public string Remarks { get; set; }

                    [NameInMap("BillingCycle")]
                    [Validation(Required=true)]
                    public string BillingCycle { get; set; }

                    [NameInMap("Amount")]
                    [Validation(Required=true)]
                    public string Amount { get; set; }

                    [NameInMap("Balance")]
                    [Validation(Required=true)]
                    public string Balance { get; set; }

                    [NameInMap("TransactionAccount")]
                    [Validation(Required=true)]
                    public string TransactionAccount { get; set; }

                }

            }
        };

    }

}
