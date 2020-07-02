// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dataworks_public20200518.Models
{
    public class GetQualityRuleResponse : TeaModel {
        [NameInMap("Success")]
        [Validation(Required=true)]
        public bool? Success { get; set; }

        [NameInMap("ErrorCode")]
        [Validation(Required=true)]
        public string ErrorCode { get; set; }

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
        public GetQualityRuleResponseData Data { get; set; }
        public class GetQualityRuleResponseData : TeaModel {
            [NameInMap("Id")]
            [Validation(Required=true)]
            public long Id { get; set; }
            [NameInMap("EntityId")]
            [Validation(Required=true)]
            public long EntityId { get; set; }
            [NameInMap("Property")]
            [Validation(Required=true)]
            public string Property { get; set; }
            [NameInMap("MethodId")]
            [Validation(Required=true)]
            public int? MethodId { get; set; }
            [NameInMap("MethodName")]
            [Validation(Required=true)]
            public string MethodName { get; set; }
            [NameInMap("WhereCondition")]
            [Validation(Required=true)]
            public string WhereCondition { get; set; }
            [NameInMap("OnDuty")]
            [Validation(Required=true)]
            public string OnDuty { get; set; }
            [NameInMap("RuleType")]
            [Validation(Required=true)]
            public int? RuleType { get; set; }
            [NameInMap("BlockType")]
            [Validation(Required=true)]
            public int? BlockType { get; set; }
            [NameInMap("TemplateId")]
            [Validation(Required=true)]
            public int? TemplateId { get; set; }
            [NameInMap("TemplateName")]
            [Validation(Required=true)]
            public string TemplateName { get; set; }
            [NameInMap("Comment")]
            [Validation(Required=true)]
            public string Comment { get; set; }
            [NameInMap("RuleName")]
            [Validation(Required=true)]
            public string RuleName { get; set; }
            [NameInMap("PredictType")]
            [Validation(Required=true)]
            public int? PredictType { get; set; }
            [NameInMap("WarningThreshold")]
            [Validation(Required=true)]
            public string WarningThreshold { get; set; }
            [NameInMap("CriticalThreshold")]
            [Validation(Required=true)]
            public string CriticalThreshold { get; set; }
            [NameInMap("Operator")]
            [Validation(Required=true)]
            public string Operator { get; set; }
            [NameInMap("ExpectValue")]
            [Validation(Required=true)]
            public string ExpectValue { get; set; }
            [NameInMap("Trend")]
            [Validation(Required=true)]
            public string Trend { get; set; }
            [NameInMap("CheckerName")]
            [Validation(Required=true)]
            public string CheckerName { get; set; }
            [NameInMap("Checker")]
            [Validation(Required=true)]
            public int? Checker { get; set; }
            [NameInMap("FixCheck")]
            [Validation(Required=true)]
            public bool? FixCheck { get; set; }
        };

    }

}
