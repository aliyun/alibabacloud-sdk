// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dataworks_public20200518.Models
{
    public class ListQualityRulesResponse : TeaModel {
        [NameInMap("ErrorCode")]
        [Validation(Required=true)]
        public string ErrorCode { get; set; }

        [NameInMap("Success")]
        [Validation(Required=true)]
        public bool? Success { get; set; }

        [NameInMap("ErrorMessage")]
        [Validation(Required=true)]
        public string ErrorMessage { get; set; }

        [NameInMap("HttpStatusCode")]
        [Validation(Required=true)]
        public int? HttpStatusCode { get; set; }

        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public ListQualityRulesResponseData Data { get; set; }
        public class ListQualityRulesResponseData : TeaModel {
            [NameInMap("TotalCount")]
            [Validation(Required=true)]
            public long TotalCount { get; set; }
            [NameInMap("PageNumber")]
            [Validation(Required=true)]
            public int? PageNumber { get; set; }
            [NameInMap("PageSize")]
            [Validation(Required=true)]
            public int? PageSize { get; set; }
            [NameInMap("Rules")]
            [Validation(Required=true)]
            public List<ListQualityRulesResponseDataRules> Rules { get; set; }
            public class ListQualityRulesResponseDataRules : TeaModel {
                    public string ProjectName { get; set; }
                    public string TableName { get; set; }
                    public int? Id { get; set; }
                    public int? EntityId { get; set; }
                    public string Property { get; set; }
                    public int? MethodId { get; set; }
                    public string MethodName { get; set; }
                    public string OnDuty { get; set; }
                    public int? RuleType { get; set; }
                    public int? BlockType { get; set; }
                    public int? TemplateId { get; set; }
                    public string TemplateName { get; set; }
                    public int? RuleCheckerRelationId { get; set; }
                    public int? CheckerId { get; set; }
                    public bool? FixCheck { get; set; }
                    public string Trend { get; set; }
                    public string WarningThreshold { get; set; }
                    public string CriticalThreshold { get; set; }
                    public string HistoryWarningThreshold { get; set; }
                    public string HistoryCriticalThreshold { get; set; }
                    public string PropertyKey { get; set; }
                    public string MatchExpression { get; set; }
                    public string Comment { get; set; }
                    public string ExpectValue { get; set; }
            }
        };

    }

}
