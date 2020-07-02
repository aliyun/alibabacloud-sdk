// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dataworks_public20200518.Models
{
    public class CreateQualityRuleRequest : TeaModel {
        [NameInMap("BlockType")]
        [Validation(Required=true)]
        public int? BlockType { get; set; }

        [NameInMap("EntityId")]
        [Validation(Required=true)]
        public long EntityId { get; set; }

        [NameInMap("Comment")]
        [Validation(Required=false)]
        public string Comment { get; set; }

        [NameInMap("Checker")]
        [Validation(Required=false)]
        public int? Checker { get; set; }

        [NameInMap("ExpectValue")]
        [Validation(Required=false)]
        public string ExpectValue { get; set; }

        [NameInMap("Trend")]
        [Validation(Required=false)]
        public string Trend { get; set; }

        [NameInMap("MethodName")]
        [Validation(Required=false)]
        public string MethodName { get; set; }

        [NameInMap("Operator")]
        [Validation(Required=false)]
        public string Operator { get; set; }

        [NameInMap("ProjectName")]
        [Validation(Required=true)]
        public string ProjectName { get; set; }

        [NameInMap("Property")]
        [Validation(Required=false)]
        public string Property { get; set; }

        [NameInMap("PropertyType")]
        [Validation(Required=false)]
        public string PropertyType { get; set; }

        [NameInMap("RuleType")]
        [Validation(Required=true)]
        public int? RuleType { get; set; }

        [NameInMap("WhereCondition")]
        [Validation(Required=false)]
        public string WhereCondition { get; set; }

        [NameInMap("CriticalThreshold")]
        [Validation(Required=false)]
        public string CriticalThreshold { get; set; }

        [NameInMap("WarningThreshold")]
        [Validation(Required=false)]
        public string WarningThreshold { get; set; }

        [NameInMap("TemplateId")]
        [Validation(Required=false)]
        public int? TemplateId { get; set; }

        [NameInMap("RuleName")]
        [Validation(Required=true)]
        public string RuleName { get; set; }

        [NameInMap("PredictType")]
        [Validation(Required=true)]
        public int? PredictType { get; set; }

    }

}
