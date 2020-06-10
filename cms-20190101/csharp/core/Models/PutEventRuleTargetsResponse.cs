// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class PutEventRuleTargetsResponse : TeaModel {
        [NameInMap("Success")]
        [Validation(Required=true)]
        public bool? Success { get; set; }

        [NameInMap("Code")]
        [Validation(Required=true)]
        public string Code { get; set; }

        [NameInMap("Message")]
        [Validation(Required=true)]
        public string Message { get; set; }

        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("FailedParameterCount")]
        [Validation(Required=true)]
        public string FailedParameterCount { get; set; }

        [NameInMap("FailedContactParameters")]
        [Validation(Required=true)]
        public PutEventRuleTargetsResponseFailedContactParameters FailedContactParameters { get; set; }
        public class PutEventRuleTargetsResponseFailedContactParameters : TeaModel {
            [NameInMap("ContactParameter")]
            [Validation(Required=true)]
            public List<PutEventRuleTargetsResponseFailedContactParametersContactParameter> ContactParameter { get; set; }
            public class PutEventRuleTargetsResponseFailedContactParametersContactParameter : TeaModel {
                    public int? Id { get; set; }
                    public string ContactGroupName { get; set; }
                    public string Level { get; set; }
            }
        };

        [NameInMap("FailedMnsParameters")]
        [Validation(Required=true)]
        public PutEventRuleTargetsResponseFailedMnsParameters FailedMnsParameters { get; set; }
        public class PutEventRuleTargetsResponseFailedMnsParameters : TeaModel {
            [NameInMap("MnsParameter")]
            [Validation(Required=true)]
            public List<PutEventRuleTargetsResponseFailedMnsParametersMnsParameter> MnsParameter { get; set; }
            public class PutEventRuleTargetsResponseFailedMnsParametersMnsParameter : TeaModel {
                    public int? Id { get; set; }
                    public string Region { get; set; }
                    public string Queue { get; set; }
            }
        };

        [NameInMap("FailedFcParameters")]
        [Validation(Required=true)]
        public PutEventRuleTargetsResponseFailedFcParameters FailedFcParameters { get; set; }
        public class PutEventRuleTargetsResponseFailedFcParameters : TeaModel {
            [NameInMap("FcParameter")]
            [Validation(Required=true)]
            public List<PutEventRuleTargetsResponseFailedFcParametersFcParameter> FcParameter { get; set; }
            public class PutEventRuleTargetsResponseFailedFcParametersFcParameter : TeaModel {
                    public int? Id { get; set; }
                    public string Region { get; set; }
                    public string ServiceName { get; set; }
                    public string FunctionName { get; set; }
            }
        };

    }

}
