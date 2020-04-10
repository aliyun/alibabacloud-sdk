// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dyvmsapi20170525.Models
{
    public class ListOutboundStrategiesResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Code")]
        [Validation(Required=true)]
        public string Code { get; set; }

        [NameInMap("Message")]
        [Validation(Required=true)]
        public string Message { get; set; }

        [NameInMap("OutboundStrategies")]
        [Validation(Required=true)]
        public List<ListOutboundStrategiesResponseOutboundStrategies> OutboundStrategies { get; set; }
        public class ListOutboundStrategiesResponseOutboundStrategies : TeaModel {
            [NameInMap("Id")]
            [Validation(Required=true)]
            public long Id { get; set; }

            [NameInMap("GmtCreateStr")]
            [Validation(Required=true)]
            public string GmtCreateStr { get; set; }

            [NameInMap("GmtModifiedStr")]
            [Validation(Required=true)]
            public string GmtModifiedStr { get; set; }

            [NameInMap("CreatorId")]
            [Validation(Required=true)]
            public long CreatorId { get; set; }

            [NameInMap("CreatorName")]
            [Validation(Required=true)]
            public string CreatorName { get; set; }

            [NameInMap("ModifierId")]
            [Validation(Required=true)]
            public long ModifierId { get; set; }

            [NameInMap("ModifierName")]
            [Validation(Required=true)]
            public string ModifierName { get; set; }

            [NameInMap("BuId")]
            [Validation(Required=true)]
            public long BuId { get; set; }

            [NameInMap("DepartmentId")]
            [Validation(Required=true)]
            public long DepartmentId { get; set; }

            [NameInMap("name")]
            [Validation(Required=true)]
            public string Name { get; set; }

            [NameInMap("NumType")]
            [Validation(Required=true)]
            public int? NumType { get; set; }

            [NameInMap("OutboundNum")]
            [Validation(Required=true)]
            public string OutboundNum { get; set; }

            [NameInMap("RobotType")]
            [Validation(Required=true)]
            public int? RobotType { get; set; }

            [NameInMap("RobotId")]
            [Validation(Required=true)]
            public string RobotId { get; set; }

            [NameInMap("RobotName")]
            [Validation(Required=true)]
            public string RobotName { get; set; }

            [NameInMap("ResourceAllocation")]
            [Validation(Required=true)]
            public int? ResourceAllocation { get; set; }

            [NameInMap("SceneName")]
            [Validation(Required=true)]
            public string SceneName { get; set; }

            [NameInMap("RuleCode")]
            [Validation(Required=true)]
            public long RuleCode { get; set; }

            [NameInMap("Status")]
            [Validation(Required=true)]
            public int? Status { get; set; }

            [NameInMap("ExtAttr")]
            [Validation(Required=true)]
            public string ExtAttr { get; set; }

            [NameInMap("Process")]
            [Validation(Required=true)]
            public int? Process { get; set; }

            [NameInMap("SuccessRate")]
            [Validation(Required=true)]
            public int? SuccessRate { get; set; }

        }

    }

}
