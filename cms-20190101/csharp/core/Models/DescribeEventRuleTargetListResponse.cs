// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class DescribeEventRuleTargetListResponse : TeaModel {
        [NameInMap("Code")]
        [Validation(Required=true)]
        public string Code { get; set; }

        [NameInMap("Message")]
        [Validation(Required=true)]
        public string Message { get; set; }

        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("ContactParameters")]
        [Validation(Required=true)]
        public DescribeEventRuleTargetListResponseContactParameters ContactParameters { get; set; }
        public class DescribeEventRuleTargetListResponseContactParameters : TeaModel {
            [NameInMap("ContactParameter")]
            [Validation(Required=true)]
            public List<DescribeEventRuleTargetListResponseContactParametersContactParameter> ContactParameter { get; set; }
            public class DescribeEventRuleTargetListResponseContactParametersContactParameter : TeaModel {
                    public string ContactGroupName { get; set; }
                    public string Level { get; set; }
                    public string Id { get; set; }
            }
        };

        [NameInMap("FcParameters")]
        [Validation(Required=true)]
        public DescribeEventRuleTargetListResponseFcParameters FcParameters { get; set; }
        public class DescribeEventRuleTargetListResponseFcParameters : TeaModel {
            [NameInMap("FCParameter")]
            [Validation(Required=true)]
            public List<DescribeEventRuleTargetListResponseFcParametersFCParameter> FCParameter { get; set; }
            public class DescribeEventRuleTargetListResponseFcParametersFCParameter : TeaModel {
                    public string Region { get; set; }
                    public string ServiceName { get; set; }
                    public string FunctionName { get; set; }
                    public string Id { get; set; }
                    public string Arn { get; set; }
            }
        };

        [NameInMap("MnsParameters")]
        [Validation(Required=true)]
        public DescribeEventRuleTargetListResponseMnsParameters MnsParameters { get; set; }
        public class DescribeEventRuleTargetListResponseMnsParameters : TeaModel {
            [NameInMap("MnsParameter")]
            [Validation(Required=true)]
            public List<DescribeEventRuleTargetListResponseMnsParametersMnsParameter> MnsParameter { get; set; }
            public class DescribeEventRuleTargetListResponseMnsParametersMnsParameter : TeaModel {
                    public string Region { get; set; }
                    public string Queue { get; set; }
                    public string Id { get; set; }
                    public string Arn { get; set; }
            }
        };

        [NameInMap("WebhookParameters")]
        [Validation(Required=true)]
        public DescribeEventRuleTargetListResponseWebhookParameters WebhookParameters { get; set; }
        public class DescribeEventRuleTargetListResponseWebhookParameters : TeaModel {
            [NameInMap("WebhookParameter")]
            [Validation(Required=true)]
            public List<DescribeEventRuleTargetListResponseWebhookParametersWebhookParameter> WebhookParameter { get; set; }
            public class DescribeEventRuleTargetListResponseWebhookParametersWebhookParameter : TeaModel {
                    public string Id { get; set; }
                    public string Protocol { get; set; }
                    public string Method { get; set; }
                    public string Url { get; set; }
            }
        };

        [NameInMap("SlsParameters")]
        [Validation(Required=true)]
        public DescribeEventRuleTargetListResponseSlsParameters SlsParameters { get; set; }
        public class DescribeEventRuleTargetListResponseSlsParameters : TeaModel {
            [NameInMap("SlsParameter")]
            [Validation(Required=true)]
            public List<DescribeEventRuleTargetListResponseSlsParametersSlsParameter> SlsParameter { get; set; }
            public class DescribeEventRuleTargetListResponseSlsParametersSlsParameter : TeaModel {
                    public string Id { get; set; }
                    public string Region { get; set; }
                    public string Project { get; set; }
                    public string LogStore { get; set; }
                    public string Arn { get; set; }
            }
        };

    }

}
